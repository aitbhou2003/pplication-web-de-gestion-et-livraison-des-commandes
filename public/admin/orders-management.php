<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des commandes - Admin</title>

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
                <small class="text-white-50">Administrateur</small>
            </div>
            <ul class="sidebar-menu">
                <li><a href="dashboard.php"><i class="bi bi-speedometer2"></i> Tableau de bord</a></li>
                <li><a href="users-management.php"><i class="bi bi-people"></i> Utilisateurs</a></li>
                <li><a href="orders-management.php" class="active"><i class="bi bi-box-seam"></i> Commandes</a></li>
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
                <h2>Gestion des commandes</h2>
                <form method="POST" action="../export.php" style="display: inline;">
                    <input type="hidden" name="type" value="orders">
                    <button type="submit" class="btn btn-outline-primary">
                        <i class="bi bi-download"></i> Exporter en CSV
                    </button>
                </form>
            </div>

            <!-- Filters -->
            <div class="filters-bar">
                <div class="filter-group">
                    <label>Rechercher :</label>
                    <input type="text" class="form-control form-control-sm" data-filter-table="ordersTable"
                        placeholder="ID, client, livreur...">
                </div>
                <div class="filter-group">
                    <label>Statut :</label>
                    <select class="form-select form-select-sm" id="statusFilter">
                        <option value="all">Tous</option>
                        <option value="waiting">En attente</option>
                        <option value="active">En cours</option>
                        <option value="completed">Terminées</option>
                        <option value="cancelled">Annulées</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label>Date :</label>
                    <input type="date" class="form-control form-control-sm" id="dateFilter">
                </div>
                <div class="filter-group">
                    <label>Client :</label>
                    <input type="text" class="form-control form-control-sm" placeholder="Nom du client">
                </div>
                <div class="filter-group">
                    <label>Livreur :</label>
                    <input type="text" class="form-control form-control-sm" placeholder="Nom du livreur">
                </div>
            </div>

            <!-- Orders Table -->
            <div class="content-card">
                <div class="table-responsive">
                    <table class="table" id="ordersTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Client</th>
                                <th>Livreur</th>
                                <th>Itinéraire</th>
                                <th>Prix</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-status="active">
                                <td><strong>#CMD-2024-001</strong></td>
                                <td>15 Jan 2024<br><small class="text-muted">10:30</small></td>
                                <td>Ahmed M.</td>
                                <td>Youssef K.</td>
                                <td>Casablanca → Rabat</td>
                                <td>250 MAD</td>
                                <td><span class="badge badge-active">En cours</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#orderDetailModal" data-order-id="1">
                                        <i class="bi bi-eye"></i> Détails
                                    </button>
                                </td>
                            </tr>
                            <tr data-status="waiting">
                                <td><strong>#CMD-2024-002</strong></td>
                                <td>14 Jan 2024<br><small class="text-muted">14:15</small></td>
                                <td>Sarah B.</td>
                                <td>-</td>
                                <td>Marrakech → Casablanca</td>
                                <td>-</td>
                                <td><span class="badge badge-waiting">En attente</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#orderDetailModal" data-order-id="2">
                                        <i class="bi bi-eye"></i> Détails
                                    </button>
                                </td>
                            </tr>
                            <tr data-status="completed">
                                <td><strong>#CMD-2024-003</strong></td>
                                <td>13 Jan 2024<br><small class="text-muted">09:00</small></td>
                                <td>Fatima L.</td>
                                <td>Mohamed A.</td>
                                <td>Rabat → Tanger</td>
                                <td>320 MAD</td>
                                <td><span class="badge badge-completed">Terminée</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#orderDetailModal" data-order-id="3">
                                        <i class="bi bi-eye"></i> Détails
                                    </button>
                                </td>
                            </tr>
                            <tr data-status="completed">
                                <td><strong>#CMD-2024-004</strong></td>
                                <td>12 Jan 2024<br><small class="text-muted">16:45</small></td>
                                <td>Hassan R.</td>
                                <td>Samira B.</td>
                                <td>Fès → Meknès</td>
                                <td>150 MAD</td>
                                <td><span class="badge badge-completed">Terminée</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#orderDetailModal" data-order-id="4">
                                        <i class="bi bi-eye"></i> Détails
                                    </button>
                                </td>
                            </tr>
                            <tr data-status="cancelled">
                                <td><strong>#CMD-2024-006</strong></td>
                                <td>10 Jan 2024<br><small class="text-muted">13:00</small></td>
                                <td>Karim T.</td>
                                <td>-</td>
                                <td>Casablanca → El Jadida</td>
                                <td>-</td>
                                <td><span class="badge badge-cancelled">Annulée</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#orderDetailModal" data-order-id="6">
                                        <i class="bi bi-eye"></i> Détails
                                    </button>
                                </td>
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
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Suivant</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </main>
    </div>

    <!-- Order Detail Modal -->
    <div class="modal fade" id="orderDetailModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Détails de la commande</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div id="orderDetailContent">
                        <p>Chargement...</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="../assets/js/filters.js"></script>
    <script src="../assets/js/notifications.js"></script>
    <script>
        // Order Detail Modal
        const orderDetailModal = document.getElementById('orderDetailModal');
        orderDetailModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const orderId = button.getAttribute('data-order-id');

            // Simulate loading order details
            document.getElementById('orderDetailContent').innerHTML = `
                <h6>Commande #CMD-2024-${orderId}</h6>
                <table class="table table-borderless">
                    <tr><td><strong>Date :</strong></td><td>15 Janvier 2024</td></tr>
                    <tr><td><strong>Client :</strong></td><td>Ahmed M.</td></tr>
                    <tr><td><strong>Livreur :</strong></td><td>Youssef K.</td></tr>
                    <tr><td><strong>Départ :</strong></td><td>Casablanca</td></tr>
                    <tr><td><strong>Arrivée :</strong></td><td>Rabat</td></tr>
                    <tr><td><strong>Prix :</strong></td><td>250 MAD</td></tr>
                    <tr><td><strong>Statut :</strong></td><td><span class="badge badge-active">En cours</span></td></tr>
                </table>
            `;
        });

        // Filter by status
        document.getElementById('statusFilter').addEventListener('change', function () {
            const status = this.value;
            const rows = document.querySelectorAll('#ordersTable tbody tr');
            rows.forEach(row => {
                if (status === 'all' || row.getAttribute('data-status') === status) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>