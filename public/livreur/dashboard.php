<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - Livreur</title>
    
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
                <li><a href="dashboard.html" class="active"><i class="bi bi-speedometer2"></i> Tableau de bord</a></li>
                <li><a href="available-orders.html"><i class="bi bi-box-seam"></i> Commandes disponibles</a></li>
                <li><a href="my-offers.html"><i class="bi bi-hand-thumbs-up"></i> Mes offres</a></li>
                <li><a href="active-deliveries.html"><i class="bi bi-truck"></i> Livraisons en cours</a></li>
                <li><a href="notifications.html"><i class="bi bi-bell"></i> Notifications <span class="badge bg-danger ms-2">2</span></a></li>
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
                <h2>Tableau de bord</h2>
                <div>
                    <span class="text-muted">Bienvenue, <strong>Youssef K.</strong></span>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-card-icon primary">
                        <i class="bi bi-send"></i>
                    </div>
                    <div class="stat-card-value">24</div>
                    <div class="stat-card-label">Offres envoyées</div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-icon success">
                        <i class="bi bi-check-circle"></i>
                    </div>
                    <div class="stat-card-value">18</div>
                    <div class="stat-card-label">Offres acceptées</div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-icon warning">
                        <i class="bi bi-truck"></i>
                    </div>
                    <div class="stat-card-value">3</div>
                    <div class="stat-card-label">Livraisons en cours</div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-icon danger">
                        <i class="bi bi-currency-exchange"></i>
                    </div>
                    <div class="stat-card-value">4,250 MAD</div>
                    <div class="stat-card-label">Revenus du mois</div>
                </div>
            </div>

            <!-- Next Deliveries -->
            <div class="content-card">
                <div class="content-card-header">
                    <h3>Prochaines livraisons</h3>
                    <a href="active-deliveries.html" class="btn btn-sm btn-outline-primary">Voir tout</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID Commande</th>
                                <th>Client</th>
                                <th>Itinéraire</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#CMD-2024-001</td>
                                <td>Ahmed M.</td>
                                <td>Casablanca → Rabat</td>
                                <td><span class="badge badge-active">En cours</span></td>
                                <td><a href="active-deliveries.html" class="btn btn-sm btn-outline-primary">Voir</a></td>
                            </tr>
                            <tr>
                                <td>#CMD-2024-007</td>
                                <td>Sarah B.</td>
                                <td>Rabat → Tanger</td>
                                <td><span class="badge badge-waiting">Acceptée</span></td>
                                <td><a href="active-deliveries.html" class="btn btn-sm btn-outline-primary">Voir</a></td>
                            </tr>
                            <tr>
                                <td>#CMD-2024-008</td>
                                <td>Fatima L.</td>
                                <td>Marrakech → Casablanca</td>
                                <td><span class="badge badge-waiting">Acceptée</span></td>
                                <td><a href="active-deliveries.html" class="btn btn-sm btn-outline-primary">Voir</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="content-card">
                <div class="content-card-header">
                    <h3>Activité récente</h3>
                </div>
                <div class="timeline">
                    <div class="timeline-item completed">
                        <strong>Livraison terminée</strong>
                        <p class="text-muted mb-0">Commande #CMD-2024-003 - 13 Jan 2024</p>
                    </div>
                    <div class="timeline-item completed">
                        <strong>Offre acceptée</strong>
                        <p class="text-muted mb-0">Commande #CMD-2024-001 - 15 Jan 2024</p>
                    </div>
                    <div class="timeline-item completed">
                        <strong>Nouvelle offre envoyée</strong>
                        <p class="text-muted mb-0">Commande #CMD-2024-002 - 14 Jan 2024</p>
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



