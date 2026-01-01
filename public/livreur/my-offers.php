<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes offres - Livreur</title>
    
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
                <small class="text-white-50">Livreur</small>
            </div>
            <ul class="sidebar-menu">
                <li><a href="dashboard.html"><i class="bi bi-speedometer2"></i> Tableau de bord</a></li>
                <li><a href="available-orders.html"><i class="bi bi-box-seam"></i> Commandes disponibles</a></li>
                <li><a href="my-offers.html" class="active"><i class="bi bi-hand-thumbs-up"></i> Mes offres</a></li>
                <li><a href="active-deliveries.html"><i class="bi bi-truck"></i> Livraisons en cours</a></li>
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
                <h2>Mes offres</h2>
            </div>

            <!-- Filters -->
            <div class="filters-bar">
                <div class="filter-group">
                    <label>Statut :</label>
                    <div class="btn-group btn-group-sm">
                        <button type="button" class="btn btn-outline-primary active" data-filter-status="all" data-filter-table="offersTable">Toutes</button>
                        <button type="button" class="btn btn-outline-primary" data-filter-status="pending" data-filter-table="offersTable">En attente</button>
                        <button type="button" class="btn btn-outline-primary" data-filter-status="accepted" data-filter-table="offersTable">Acceptées</button>
                        <button type="button" class="btn btn-outline-primary" data-filter-status="rejected" data-filter-table="offersTable">Refusées</button>
                    </div>
                </div>
            </div>

            <!-- Offers Table -->
            <div class="content-card">
                <div class="table-responsive">
                    <table class="table" id="offersTable">
                        <thead>
                            <tr>
                                <th>Commande</th>
                                <th>Date d'envoi</th>
                                <th>Itinéraire</th>
                                <th>Prix proposé</th>
                                <th>Durée estimée</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-status="accepted">
                                <td><strong>#CMD-2024-001</strong></td>
                                <td>15 Jan 2024<br><small class="text-muted">10:45</small></td>
                                <td>Casablanca → Rabat</td>
                                <td><strong>250 MAD</strong></td>
                                <td>3 heures</td>
                                <td><span class="badge badge-completed">Acceptée</span></td>
                                <td><a href="active-deliveries.html" class="btn btn-sm btn-outline-primary">Voir</a></td>
                            </tr>
                            <tr data-status="pending">
                                <td><strong>#CMD-2024-002</strong></td>
                                <td>14 Jan 2024<br><small class="text-muted">15:30</small></td>
                                <td>Marrakech → Casablanca</td>
                                <td><strong>280 MAD</strong></td>
                                <td>3.5 heures</td>
                                <td><span class="badge badge-waiting">En attente</span></td>
                                <td><a href="order-detail.html?id=2" class="btn btn-sm btn-outline-primary">Voir</a></td>
                            </tr>
                            <tr data-status="pending">
                                <td><strong>#CMD-2024-005</strong></td>
                                <td>11 Jan 2024<br><small class="text-muted">12:00</small></td>
                                <td>Agadir → Marrakech</td>
                                <td><strong>320 MAD</strong></td>
                                <td>4 heures</td>
                                <td><span class="badge badge-waiting">En attente</span></td>
                                <td><a href="order-detail.html?id=5" class="btn btn-sm btn-outline-primary">Voir</a></td>
                            </tr>
                            <tr data-status="rejected">
                                <td><strong>#CMD-2024-004</strong></td>
                                <td>12 Jan 2024<br><small class="text-muted">17:20</small></td>
                                <td>Fès → Meknès</td>
                                <td><strong>150 MAD</strong></td>
                                <td>1.5 heures</td>
                                <td><span class="badge badge-cancelled">Refusée</span></td>
                                <td><a href="order-detail.html?id=4" class="btn btn-sm btn-outline-secondary">Voir</a></td>
                            </tr>
                            <tr data-status="accepted">
                                <td><strong>#CMD-2024-007</strong></td>
                                <td>10 Jan 2024<br><small class="text-muted">09:15</small></td>
                                <td>Rabat → Tanger</td>
                                <td><strong>300 MAD</strong></td>
                                <td>3.5 heures</td>
                                <td><span class="badge badge-completed">Acceptée</span></td>
                                <td><a href="active-deliveries.html" class="btn btn-sm btn-outline-primary">Voir</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <nav aria-label="Pagination" class="mt-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Précédent</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
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
    <script src="../assets/js/notifications.js"></script>
</body>
</html>



