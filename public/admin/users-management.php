<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des utilisateurs - Admin</title>

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
                <li><a href="users-management.php" class="active"><i class="bi bi-people"></i> Utilisateurs</a></li>
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
                <h2>Gestion des utilisateurs</h2>
            </div>

            <!-- Filters -->
            <div class="filters-bar">
                <div class="filter-group">
                    <label>Rechercher :</label>
                    <input type="text" class="form-control form-control-sm" data-filter-table="usersTable"
                        placeholder="Nom, email...">
                </div>
                <div class="filter-group">
                    <label>Rôle :</label>
                    <select class="form-select form-select-sm" id="roleFilter">
                        <option value="all">Tous les rôles</option>
                        <option value="client">Client</option>
                        <option value="livreur">Livreur</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label>Statut :</label>
                    <select class="form-select form-select-sm" id="statusFilter">
                        <option value="all">Tous</option>
                        <option value="active">Actif</option>
                        <option value="inactive">Inactif</option>
                    </select>
                </div>
            </div>

            <!-- Users Table -->
            <div class="content-card">
                <div class="table-responsive">
                    <table class="table" id="usersTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Rôle</th>
                                <th>Statut</th>
                                <th>Date d'inscription</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-role="client" data-status="active">
                                <td>1</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-2"
                                            style="width: 35px; height: 35px;">
                                            <strong>AM</strong>
                                        </div>
                                        Ahmed Mansouri
                                    </div>
                                </td>
                                <td>ahmed.mansouri@example.com</td>
                                <td><span class="badge bg-info">Client</span></td>
                                <td><span class="badge bg-success">Actif</span></td>
                                <td>15 Jan 2023</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal"
                                        data-bs-target="#editRoleModal" data-user-id="1" data-user-role="client">
                                        <i class="bi bi-pencil"></i> Modifier rôle
                                    </button>
                                    <form method="POST" action="../toggle_user.php" style="display: inline;">
                                        <input type="hidden" name="user_id" value="1">
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="bi bi-x-circle"></i> Désactiver
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr data-role="livreur" data-status="active">
                                <td>2</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center me-2"
                                            style="width: 35px; height: 35px;">
                                            <strong>YK</strong>
                                        </div>
                                        Youssef Kadiri
                                    </div>
                                </td>
                                <td>youssef.kadiri@example.com</td>
                                <td><span class="badge bg-success">Livreur</span></td>
                                <td><span class="badge bg-success">Actif</span></td>
                                <td>10 Mar 2023</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal"
                                        data-bs-target="#editRoleModal" data-user-id="2" data-user-role="livreur">
                                        <i class="bi bi-pencil"></i> Modifier rôle
                                    </button>
                                    <form method="POST" action="../toggle_user.php" style="display: inline;">
                                        <input type="hidden" name="user_id" value="2">
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="bi bi-x-circle"></i> Désactiver
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr data-role="client" data-status="active">
                                <td>3</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-warning text-white d-flex align-items-center justify-content-center me-2"
                                            style="width: 35px; height: 35px;">
                                            <strong>SB</strong>
                                        </div>
                                        Sarah Benali
                                    </div>
                                </td>
                                <td>sarah.benali@example.com</td>
                                <td><span class="badge bg-info">Client</span></td>
                                <td><span class="badge bg-success">Actif</span></td>
                                <td>22 Fév 2023</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal"
                                        data-bs-target="#editRoleModal" data-user-id="3" data-user-role="client">
                                        <i class="bi bi-pencil"></i> Modifier rôle
                                    </button>
                                    <form method="POST" action="../toggle_user.php" style="display: inline;">
                                        <input type="hidden" name="user_id" value="3">
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="bi bi-x-circle"></i> Désactiver
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr data-role="livreur" data-status="inactive">
                                <td>4</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center me-2"
                                            style="width: 35px; height: 35px;">
                                            <strong>MA</strong>
                                        </div>
                                        Mohamed Alami
                                    </div>
                                </td>
                                <td>mohamed.alami@example.com</td>
                                <td><span class="badge bg-success">Livreur</span></td>
                                <td><span class="badge bg-danger">Inactif</span></td>
                                <td>05 Avr 2023</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal"
                                        data-bs-target="#editRoleModal" data-user-id="4" data-user-role="livreur">
                                        <i class="bi bi-pencil"></i> Modifier rôle
                                    </button>
                                    <form method="POST" action="../toggle_user.php" style="display: inline;">
                                        <input type="hidden" name="user_id" value="4">
                                        <button type="submit" class="btn btn-sm btn-outline-success">
                                            <i class="bi bi-check-circle"></i> Activer
                                        </button>
                                    </form>
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

    <!-- Edit Role Modal -->
    <div class="modal fade" id="editRoleModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modifier le rôle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form method="POST" action="../update_role.php">
                    <div class="modal-body">
                        <input type="hidden" id="modal_user_id" name="user_id">
                        <div class="mb-3">
                            <label for="new_role" class="form-label">Nouveau rôle</label>
                            <select class="form-select" id="new_role" name="new_role" required>
                                <option value="client">Client</option>
                                <option value="livreur">Livreur</option>
                                <option value="admin">Administrateur</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="../assets/js/filters.js"></script>
    <script src="../assets/js/notifications.js"></script>
    <script>
        // Edit Role Modal
        const editRoleModal = document.getElementById('editRoleModal');
        editRoleModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const userId = button.getAttribute('data-user-id');
            const userRole = button.getAttribute('data-user-role');

            document.getElementById('modal_user_id').value = userId;
            document.getElementById('new_role').value = userRole;
        });

        // Filter by role
        document.getElementById('roleFilter').addEventListener('change', function () {
            const role = this.value;
            const rows = document.querySelectorAll('#usersTable tbody tr');
            rows.forEach(row => {
                if (role === 'all' || row.getAttribute('data-role') === role) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Filter by status
        document.getElementById('statusFilter').addEventListener('change', function () {
            const status = this.value;
            const rows = document.querySelectorAll('#usersTable tbody tr');
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