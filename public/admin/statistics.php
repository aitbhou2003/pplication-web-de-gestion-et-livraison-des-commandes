<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques - Admin</title>
    
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
                <li><a href="dashboard.php"><i class="bi bi-speedometer2"></i> Tableau de bord</a></li>
                <li><a href="users-management.php"><i class="bi bi-people"></i> Utilisateurs</a></li>
                <li><a href="orders-management.php"><i class="bi bi-box-seam"></i> Commandes</a></li>
                <li><a href="statistics.php" class="active"><i class="bi bi-bar-chart"></i> Statistiques</a></li>
                <li><a href="profile.php"><i class="bi bi-person"></i> Profil</a></li>
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
                <h2>Statistiques détaillées</h2>
                <form method="POST" action="../export.php" style="display: inline;">
                    <input type="hidden" name="type" value="statistics">
                    <button type="submit" class="btn btn-outline-primary">
                        <i class="bi bi-download"></i> Exporter en CSV
                    </button>
                </form>
            </div>

            <!-- Period Selector -->
            <div class="filters-bar mb-4">
                <div class="filter-group">
                    <label>Période :</label>
                    <select class="form-select form-select-sm" id="periodSelector">
                        <option value="day">Par jour</option>
                        <option value="week" selected>Par semaine</option>
                        <option value="month">Par mois</option>
                    </select>
                </div>
            </div>

            <!-- Charts Row 1 -->
            <div class="row g-4 mb-4">
                <div class="col-md-8">
                    <div class="content-card">
                        <h4 class="mb-3">Commandes par période</h4>
                        <canvas id="ordersPeriodChart" height="100"></canvas>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content-card">
                        <h4 class="mb-3">Taux de conversion</h4>
                        <canvas id="conversionChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Charts Row 2 -->
            <div class="row g-4 mb-4">
                <div class="col-md-6">
                    <div class="content-card">
                        <h4 class="mb-3">Performance des livreurs</h4>
                        <canvas id="deliverersChart" height="150"></canvas>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-card">
                        <h4 class="mb-3">Zones géographiques les plus actives</h4>
                        <canvas id="zonesChart" height="150"></canvas>
                    </div>
                </div>
            </div>

            <!-- Summary Tables -->
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="content-card">
                        <h4 class="mb-3">Récapitulatif mensuel</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Mois</th>
                                    <th>Commandes</th>
                                    <th>Revenus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Janvier 2024</td>
                                    <td>342</td>
                                    <td>85,600 MAD</td>
                                </tr>
                                <tr>
                                    <td>Décembre 2023</td>
                                    <td>290</td>
                                    <td>72,500 MAD</td>
                                </tr>
                                <tr>
                                    <td>Novembre 2023</td>
                                    <td>320</td>
                                    <td>80,000 MAD</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-card">
                        <h4 class="mb-3">Top 5 livreurs</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Livreur</th>
                                    <th>Livraisons</th>
                                    <th>Note</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Youssef K.</td>
                                    <td>127</td>
                                    <td>4.8/5</td>
                                </tr>
                                <tr>
                                    <td>Mohamed A.</td>
                                    <td>98</td>
                                    <td>4.6/5</td>
                                </tr>
                                <tr>
                                    <td>Samira B.</td>
                                    <td>76</td>
                                    <td>4.9/5</td>
                                </tr>
                                <tr>
                                    <td>Fatima L.</td>
                                    <td>65</td>
                                    <td>4.7/5</td>
                                </tr>
                                <tr>
                                    <td>Hassan R.</td>
                                    <td>54</td>
                                    <td>4.5/5</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="../assets/js/notifications.js"></script>
    <script>
        // Orders Period Chart
        const ordersPeriodCtx = document.getElementById('ordersPeriodChart').getContext('2d');
        new Chart(ordersPeriodCtx, {
            type: 'bar',
            data: {
                labels: ['Sem 1', 'Sem 2', 'Sem 3', 'Sem 4'],
                datasets: [{
                    label: 'Commandes',
                    data: [75, 82, 90, 95],
                    backgroundColor: '#2563eb'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true
            }
        });

        // Conversion Chart
        const conversionCtx = document.getElementById('conversionChart').getContext('2d');
        new Chart(conversionCtx, {
            type: 'doughnut',
            data: {
                labels: ['Offres acceptées', 'Offres refusées'],
                datasets: [{
                    data: [75, 25],
                    backgroundColor: ['#10b981', '#ef4444']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true
            }
        });

        // Deliverers Chart
        const deliverersCtx = document.getElementById('deliverersChart').getContext('2d');
        new Chart(deliverersCtx, {
            type: 'bar',
            data: {
                labels: ['Youssef K.', 'Mohamed A.', 'Samira B.', 'Fatima L.', 'Hassan R.'],
                datasets: [{
                    label: 'Livraisons',
                    data: [127, 98, 76, 65, 54],
                    backgroundColor: '#10b981'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                indexAxis: 'y'
            }
        });

        // Zones Chart
        const zonesCtx = document.getElementById('zonesChart').getContext('2d');
        new Chart(zonesCtx, {
            type: 'pie',
            data: {
                labels: ['Casablanca', 'Rabat', 'Marrakech', 'Tanger', 'Fès'],
                datasets: [{
                    data: [145, 98, 67, 45, 32],
                    backgroundColor: ['#2563eb', '#10b981', '#f59e0b', '#ef4444', '#8b5cf6']
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



