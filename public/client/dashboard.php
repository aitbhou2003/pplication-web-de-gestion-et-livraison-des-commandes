<?php
if (!isset($_SESSION)) {
    session_start();
}
$id = $_SESSION['id'];
// echo $id ;
require_once '..\..\src\repositories\commandsStatsRepositories.php';
require_once '..\..\src\repositories\showUserCommandsrepositories.php';
require_once '..\..\database\database.php';
$conn = new Database();
$show = new ShowUserCommandsrepositories($conn);
$result = $show->showRecentCommand($id);
$encours = new CommandsStatsRepositories($conn);
// var_dump($result);
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - Client</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>

<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h4><i class="bi bi-truck"></i> Livraison Express</h4>
                <small class="text-white-50">Client</small>
            </div>
            <ul class="sidebar-menu">
                <li><a href="dashboard.php" class="active"><i class="bi bi-speedometer2"></i> Tableau de bord</a></li>
                <li><a href="create-order.php"><i class="bi bi-plus-circle"></i> Créer une commande</a></li>
                <li><a href="my-orders.php"><i class="bi bi-box-seam"></i> Mes commandes</a></li>
                <li><a href="notifications.php"><i class="bi bi-bell"></i> Notifications <span
                            class="badge bg-danger ms-2">3</span></a></li>
                <li><a href="profile.php"><i class="bi bi-person"></i> Profil</a></li>
                <li>
                    <form method="POST" action="..\..\src\controllers\logout.php" style="margin: 0;">
                        <button type="submit" class="btn btn-link text-danger w-100 text-start ps-3"
                            style="text-decoration: none;">
                            <i class="bi bi-box-arrow-right"></i> Déconnexion
                        </button>
                    </form>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <div class="top-bar">
                <h2>Tableau de bord</h2>
                <div>
                    <span class="text-muted">Bienvenue, <strong> <?= $_SESSION['nom'] ?> </strong></span>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-card-icon primary">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <div class="stat-card-value"><?=$encours->enCours($id)?></div>
                    <div class="stat-card-label">Commandes en cours</div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-icon success">
                        <i class="bi bi-check-circle"></i>
                    </div>
                    <div class="stat-card-value"><?=$encours->terminees($id)?></div>
                    <div class="stat-card-label">Commandes terminées</div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-icon warning">
                        <i class="bi bi-hourglass-split"></i>
                    </div>
                    <div class="stat-card-value"><?=$encours->enAttende($id)?></div>
                    <div class="stat-card-label">En attente</div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-icon danger">
                        <i class="bi bi-x-circle"></i>
                    </div>
                    <div class="stat-card-value">1</div>
                    <div class="stat-card-label">Annulées</div>
                </div>
            </div>

            <!-- Recent Orders -->
            <div class="content-card">
                <div class="content-card-header">
                    <h3>Commandes récentes</h3>
                    <a href="my-orders.php" class="btn btn-sm btn-outline-primary">Voir tout</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Statut</th>
                                <th>Prix</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < count($result); $i++): ?>
                                <tr>
                                    <td><strong>#CMD-2024-00<?= $result[$i]['id'] ?>
                                        </strong></td>
                                    <td>
                                        <?= $result[$i]['MDY'] ?><br><small class="text-muted">
                                            <?= $result[$i]['HM'] ?>
                                        </small>
                                    </td>
                                    <td><span class="badge badge-waiting">
                                            <?= $result[$i]['status'] ?>
                                        </span></td>
                                    <td>200 dh </td>
                                    <td>
                                        <a href="order-detail.php?id=2" class="btn btn-sm btn-outline-primary">Voir</a>
                                        <form method="POST" action="../cancel_order.php" style="display: inline;"
                                            onsubmit="return confirm('Êtes-vous sûr de vouloir annuler cette commande ?');">
                                            <input type="hidden" name="order_id" value="2">
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Annuler</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endfor ?>
                            <!-- <tr>
                                <td>#CMD-2024-001</td>
                                <td>15 Jan 2024</td>
                                <td>Casablanca → Rabat</td>
                                <td><span class="badge badge-active">En cours</span></td>
                                <td><a href="order-detail.php?id=1" class="btn btn-sm btn-outline-primary">Voir</a></td>
                            </tr>
                            <tr>
                                <td>#CMD-2024-002</td>
                                <td>14 Jan 2024</td>
                                <td>Marrakech → Casablanca</td>
                                <td><span class="badge badge-waiting">En attente</span></td>
                                <td><a href="order-detail.php?id=2" class="btn btn-sm btn-outline-primary">Voir</a></td>
                            </tr>
                            <tr>
                                <td>#CMD-2024-003</td>
                                <td>13 Jan 2024</td>
                                <td>Rabat → Tanger</td>
                                <td><span class="badge badge-completed">Terminée</span></td>
                                <td><a href="order-detail.php?id=3" class="btn btn-sm btn-outline-primary">Voir</a></td>
                            </tr>
                            <tr>
                                <td>#CMD-2024-004</td>
                                <td>12 Jan 2024</td>
                                <td>Fès → Meknès</td>
                                <td><span class="badge badge-completed">Terminée</span></td>
                                <td><a href="order-detail.php?id=4" class="btn btn-sm btn-outline-primary">Voir</a></td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="../assets/js/notifications.js"></script>
    <script>
        // Toggle sidebar on mobile
        document.querySelector('.sidebar-toggle')?.addEventListener('click', function () {
            document.querySelector('.sidebar').classList.toggle('open');
        });
    </script>
</body>

</html>