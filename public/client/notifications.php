<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications - Client</title>
    
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
                <li><a href="my-orders.html"><i class="bi bi-box-seam"></i> Mes commandes</a></li>
                <li><a href="notifications.html" class="active"><i class="bi bi-bell"></i> Notifications</a></li>
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
                <h2>Notifications</h2>
                <form method="POST" action="../mark_all_read.php" style="display: inline;">
                    <button type="submit" class="btn btn-outline-primary">
                        <i class="bi bi-check-all"></i> Marquer tout comme lu
                    </button>
                </form>
            </div>

            <div class="content-card">
                <!-- Notification Item -->
                <div class="card notification-card unread mb-3">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="me-3">
                                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <i class="bi bi-hand-thumbs-up"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="mb-1">Nouvelle offre reçue</h6>
                                        <p class="mb-1">Vous avez reçu une nouvelle offre de <strong>Youssef K.</strong> pour la commande #CMD-2024-002</p>
                                        <small class="text-muted"><i class="bi bi-clock"></i> Il y a 2 heures</small>
                                    </div>
                                    <span class="badge bg-danger">Non lue</span>
                                </div>
                                <div class="mt-2">
                                    <a href="order-detail.html?id=2" class="btn btn-sm btn-outline-primary">Voir la commande</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Notification Item -->
                <div class="card notification-card unread mb-3">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="me-3">
                                <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <i class="bi bi-check-circle"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="mb-1">Offre acceptée</h6>
                                        <p class="mb-1">Votre offre pour la commande #CMD-2024-001 a été acceptée. La livraison est en cours.</p>
                                        <small class="text-muted"><i class="bi bi-clock"></i> Il y a 5 heures</small>
                                    </div>
                                    <span class="badge bg-danger">Non lue</span>
                                </div>
                                <div class="mt-2">
                                    <a href="order-detail.html?id=1" class="btn btn-sm btn-outline-primary">Voir la commande</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Notification Item -->
                <div class="card notification-card unread mb-3">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="me-3">
                                <div class="rounded-circle bg-info text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <i class="bi bi-truck"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="mb-1">Commande expédiée</h6>
                                        <p class="mb-1">La commande #CMD-2024-001 a été expédiée par <strong>Youssef K.</strong></p>
                                        <small class="text-muted"><i class="bi bi-clock"></i> Il y a 1 jour</small>
                                    </div>
                                    <span class="badge bg-danger">Non lue</span>
                                </div>
                                <div class="mt-2">
                                    <a href="order-detail.html?id=1" class="btn btn-sm btn-outline-primary">Suivre la livraison</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Notification Item (Read) -->
                <div class="card notification-card read mb-3">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="me-3">
                                <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <i class="bi bi-check-circle"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="mb-1">Commande terminée</h6>
                                        <p class="mb-1">La commande #CMD-2024-003 a été livrée avec succès.</p>
                                        <small class="text-muted"><i class="bi bi-clock"></i> Il y a 2 jours</small>
                                    </div>
                                    <span class="badge bg-secondary">Lue</span>
                                </div>
                                <div class="mt-2">
                                    <a href="order-detail.html?id=3" class="btn btn-sm btn-outline-primary">Voir les détails</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Notification Item (Read) -->
                <div class="card notification-card read mb-3">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="me-3">
                                <div class="rounded-circle bg-warning text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <i class="bi bi-exclamation-triangle"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="mb-1">Nouvelle offre reçue</h6>
                                        <p class="mb-1">Vous avez reçu une nouvelle offre de <strong>Mohamed A.</strong> pour la commande #CMD-2024-002</p>
                                        <small class="text-muted"><i class="bi bi-clock"></i> Il y a 3 jours</small>
                                    </div>
                                    <span class="badge bg-secondary">Lue</span>
                                </div>
                                <div class="mt-2">
                                    <a href="order-detail.html?id=2" class="btn btn-sm btn-outline-primary">Voir la commande</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="../assets/js/notifications.js"></script>
</body>
</html>



