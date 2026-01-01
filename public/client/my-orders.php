<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes commandes - Client</title>
    
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
                <li><a href="dashboard.html"><i class="bi bi-speedometer2"></i> Tableau de bord</a></li>
                <li><a href="create-order.html"><i class="bi bi-plus-circle"></i> Créer une commande</a></li>
                <li><a href="my-orders.html" class="active"><i class="bi bi-box-seam"></i> Mes commandes</a></li>
                <li><a href="notifications.html"><i class="bi bi-bell"></i> Notifications</a></li>
                <li><a href="profile.html"><i class="bi bi-person"></i> Profil</a></li>
                <li>
                    <form method="POST" action="../logout.php" style="margin: 0;">
                        <button type="submit" class="btn btn-link text-danger w-100 text-start ps-3" style="text-decoration: none;">
                            <i class="bi bi-box-arrow-right"></i> Déconnexion
                        </button>
                    </form>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <div class="top-bar">
                <h2>Mes commandes</h2>
                <a href="create-order.html" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Nouvelle commande
                </a>
            </div>

            <!-- Filters -->
            <div class="filters-bar">
                <div class="filter-group">
                    <label>Rechercher :</label>
                    <input type="text" class="form-control form-control-sm" data-filter-table="ordersTable" placeholder="ID, adresse...">
                </div>
                <div class="filter-group">
                    <label>Statut :</label>
                    <div class="btn-group btn-group-sm">
                        <button type="button" class="btn btn-outline-primary active" data-filter-status="all" data-filter-table="ordersTable">Tous</button>
                        <button type="button" class="btn btn-outline-primary" data-filter-status="waiting" data-filter-table="ordersTable">En attente</button>
                        <button type="button" class="btn btn-outline-primary" data-filter-status="active" data-filter-table="ordersTable">En cours</button>
                        <button type="button" class="btn btn-outline-primary" data-filter-status="completed" data-filter-table="ordersTable">Terminées</button>
                        <button type="button" class="btn btn-outline-primary" data-filter-status="cancelled" data-filter-table="ordersTable">Annulées</button>
                    </div>
                </div>
            </div>

            <!-- Orders Table -->
            <div class="content-card">
                <div class="table-responsive">
                    <table class="table" id="ordersTable">
                        <thead>
                            <tr>
                                <th>ID Commande</th>
                                <th>Date</th>
                                <th>De → À</th>
                                <th>Statut</th>
                                <th>Prix</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-status="active">
                                <td><strong>#CMD-2024-001</strong></td>
                                <td>15 Jan 2024<br><small class="text-muted">10:30</small></td>
                                <td>Casablanca → Rabat<br><small class="text-muted">120 km</small></td>
                                <td><span class="badge badge-active">En cours</span></td>
                                <td><strong>250 MAD</strong></td>
                                <td>
                                    <a href="order-detail.html?id=1" class="btn btn-sm btn-outline-primary">Voir</a>
                                </td>
                            </tr>
                            <tr data-status="waiting">
                                <td><strong>#CMD-2024-002</strong></td>
                                <td>14 Jan 2024<br><small class="text-muted">14:15</small></td>
                                <td>Marrakech → Casablanca<br><small class="text-muted">240 km</small></td>
                                <td><span class="badge badge-waiting">En attente</span></td>
                                <td>-</td>
                                <td>
                                    <a href="order-detail.html?id=2" class="btn btn-sm btn-outline-primary">Voir</a>
                                    <form method="POST" action="../cancel_order.php" style="display: inline;" onsubmit="return confirm('Êtes-vous sûr de vouloir annuler cette commande ?');">
                                        <input type="hidden" name="order_id" value="2">
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Annuler</button>
                                    </form>
                                </td>
                            </tr>
                            <tr data-status="completed">
                                <td><strong>#CMD-2024-003</strong></td>
                                <td>13 Jan 2024<br><small class="text-muted">09:00</small></td>
                                <td>Rabat → Tanger<br><small class="text-muted">280 km</small></td>
                                <td><span class="badge badge-completed">Terminée</span></td>
                                <td><strong>320 MAD</strong></td>
                                <td>
                                    <a href="order-detail.html?id=3" class="btn btn-sm btn-outline-primary">Voir</a>
                                </td>
                            </tr>
                            <tr data-status="completed">
                                <td><strong>#CMD-2024-004</strong></td>
                                <td>12 Jan 2024<br><small class="text-muted">16:45</small></td>
                                <td>Fès → Meknès<br><small class="text-muted">60 km</small></td>
                                <td><span class="badge badge-completed">Terminée</span></td>
                                <td><strong>150 MAD</strong></td>
                                <td>
                                    <a href="order-detail.html?id=4" class="btn btn-sm btn-outline-primary">Voir</a>
                                </td>
                            </tr>
                            <tr data-status="waiting">
                                <td><strong>#CMD-2024-005</strong></td>
                                <td>11 Jan 2024<br><small class="text-muted">11:20</small></td>
                                <td>Agadir → Marrakech<br><small class="text-muted">200 km</small></td>
                                <td><span class="badge badge-waiting">En attente</span></td>
                                <td>-</td>
                                <td>
                                    <a href="order-detail.html?id=5" class="btn btn-sm btn-outline-primary">Voir</a>
                                    <form method="POST" action="../cancel_order.php" style="display: inline;" onsubmit="return confirm('Êtes-vous sûr de vouloir annuler cette commande ?');">
                                        <input type="hidden" name="order_id" value="5">
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Annuler</button>
                                    </form>
                                </td>
                            </tr>
                            <tr data-status="cancelled">
                                <td><strong>#CMD-2024-006</strong></td>
                                <td>10 Jan 2024<br><small class="text-muted">13:00</small></td>
                                <td>Casablanca → El Jadida<br><small class="text-muted">100 km</small></td>
                                <td><span class="badge badge-cancelled">Annulée</span></td>
                                <td>-</td>
                                <td>
                                    <a href="order-detail.html?id=6" class="btn btn-sm btn-outline-primary">Voir</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <nav aria-label="Pagination">
                    <ul class="pagination justify-content-center mt-4">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Précédent</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Suivant</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </main>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="../assets/js/filters.js"></script>
    <script src="../assets/js/modals.js"></script>
    <script src="../assets/js/notifications.js"></script>
</body>
</html>



