<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - Admin</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
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
                <small class="text-white-50">Administrateur</small>
            </div>
            <ul class="sidebar-menu">
                <li><a href="dashboard.php" class="active"><i class="bi bi-speedometer2"></i> Tableau de bord</a></li>
                <li><a href="users-management.php"><i class="bi bi-people"></i> Utilisateurs</a></li>
                <li><a href="orders-management.php"><i class="bi bi-box-seam"></i> Commandes</a></li>
                <li><a href="statistics.php"><i class="bi bi-bar-chart"></i> Statistiques</a></li>
                <li><a href="profile.php"><i class="bi bi-person"></i> Profil</a></li>
                <li>
                    <form method="POST" action="../logout.php" style="margin: 0;">
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
                    <span class="text-muted">Bienvenue, <strong>Admin</strong></span>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-card-icon primary">
                        <i class="bi bi-people"></i>
                    </div>
                    <div class="stat-card-value">1,245</div>
                    <div class="stat-card-label">Utilisateurs totaux</div>
                    <small class="text-muted">856 Clients | 389 Livreurs</small>
                </div>
                <div class="stat-card">
                    <div class="stat-card-icon success">
                        <i class="bi bi-check-circle"></i>
                    </div>
                    <div class="stat-card-value">342</div>
                    <div class="stat-card-label">Commandes actives</div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-icon warning">
                        <i class="bi bi-currency-exchange"></i>
                    </div>
                    <div class="stat-card-value">125,450 MAD</div>
                    <div class="stat-card-label">Revenus générés</div>
                </div>
                <div class="stat-card">
                    <div class="stat-card-icon danger">
                        <i class="bi bi-x-circle"></i>
                    </div>
                    <div class="stat-card-value">28</div>
                    <div class="stat-card-label">Commandes annulées</div>
                </div>
            </div>

            <!-- Charts Row -->
            <div class="row g-4 mb-4">
                <div class="col-md-8">
                    <div class="content-card">
                        <h4 class="mb-3">Évolution des commandes par mois</h4>
                        <canvas id="ordersChart" height="100"></canvas>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-card">
                        <h4 class="mb-3">Répartition par statut</h4>
                        <canvas id="statusChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Top Deliverers -->
            <div class="content-card">
                <div class="content-card-header">
                    <h3>Livreurs les plus actifs</h3>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Livreur</th>
                                <th>Livraisons</th>
                                <th>Note moyenne</th>
                                <th>Revenus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-2"
                                            style="width: 35px; height: 35px;">
                                            <strong>YK</strong>
                                        </div>
                                        Youssef K.
                                    </div>
                                </td>
                                <td>127</td>
                                <td>
                                    <i class="bi bi-star-fill text-warning"></i> 4.8/5
                                </td>
                                <td>32,450 MAD</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center me-2"
                                            style="width: 35px; height: 35px;">
                                            <strong>MA</strong>
                                        </div>
                                        Mohamed A.
                                    </div>
                                </td>
                                <td>98</td>
                                <td>
                                    <i class="bi bi-star-fill text-warning"></i> 4.6/5
                                </td>
                                <td>24,500 MAD</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-warning text-white d-flex align-items-center justify-content-center me-2"
                                            style="width: 35px; height: 35px;">
                                            <strong>SB</strong>
                                        </div>
                                        Samira B.
                                    </div>
                                </td>
                                <td>76</td>
                                <td>
                                    <i class="bi bi-star-fill text-warning"></i> 4.9/5
                                </td>
                                <td>19,000 MAD</td>
                            </tr>
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
        // Orders Chart
        const ordersCtx = document.getElementById('ordersChart').getContext('2d');
        new Chart(ordersCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'],
                datasets: [{
                    label: 'Commandes',
                    data: [120, 145, 180, 165, 200, 235, 280, 265, 300, 320, 290, 342],
                    borderColor: '#2563eb',
                    backgroundColor: 'rgba(37, 99, 235, 0.1)',
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        // Status Chart
        const statusCtx = document.getElementById('statusChart').getContext('2d');
        new Chart(statusCtx, {
            type: 'doughnut',
            data: {
                labels: ['Terminées', 'En cours', 'En attente', 'Annulées'],
                datasets: [{
                    data: [1200, 342, 156, 28],
                    backgroundColor: ['#10b981', '#2563eb', '#f59e0b', '#ef4444']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true
            }
        });
    </script>
</body>

</html>