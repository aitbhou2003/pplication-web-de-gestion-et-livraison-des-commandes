<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commandes disponibles - Livreur</title>
    
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
                <li><a href="available-orders.html" class="active"><i class="bi bi-box-seam"></i> Commandes disponibles</a></li>
                <li><a href="my-offers.html"><i class="bi bi-hand-thumbs-up"></i> Mes offres</a></li>
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
                <h2>Commandes disponibles</h2>
            </div>

            <!-- Filters -->
            <div class="filters-bar">
                <div class="filter-group">
                    <label>Rechercher :</label>
                    <input type="text" class="form-control form-control-sm" placeholder="Ville, adresse...">
                </div>
                <div class="filter-group">
                    <label>Zone :</label>
                    <select class="form-select form-select-sm">
                        <option>Toutes les zones</option>
                        <option>Casablanca</option>
                        <option>Rabat</option>
                        <option>Marrakech</option>
                        <option>Tanger</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label>Type de colis :</label>
                    <select class="form-select form-select-sm">
                        <option>Tous les types</option>
                        <option>Petit colis</option>
                        <option>Moyen colis</option>
                        <option>Grand colis</option>
                    </select>
                </div>
            </div>

            <!-- Available Orders Grid -->
            <div class="row g-4">
                <!-- Order Card -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge badge-waiting">En attente</span>
                                <small class="text-muted">#CMD-2024-002</small>
                            </div>
                            <h5 class="card-title">Marrakech → Casablanca</h5>
                            <p class="text-muted mb-2"><i class="bi bi-geo-alt"></i> 240 km</p>
                            <p class="mb-2"><strong>Description :</strong> Colis contenant des produits électroniques</p>
                            <p class="mb-2"><strong>Poids :</strong> 5.2 kg</p>
                            <p class="mb-3">
                                <span class="badge bg-warning">Express</span>
                                <span class="badge bg-info">Fragile</span>
                            </p>
                            <div class="d-flex gap-2">
                                <a href="order-detail.html?id=2" class="btn btn-outline-primary btn-sm flex-grow-1">
                                    <i class="bi bi-eye"></i> Voir détails
                                </a>
                                <a href="order-detail.html?id=2" class="btn btn-primary btn-sm">
                                    <i class="bi bi-hand-thumbs-up"></i> Faire une offre
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Card -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge badge-waiting">En attente</span>
                                <small class="text-muted">#CMD-2024-005</small>
                            </div>
                            <h5 class="card-title">Agadir → Marrakech</h5>
                            <p class="text-muted mb-2"><i class="bi bi-geo-alt"></i> 200 km</p>
                            <p class="mb-2"><strong>Description :</strong> Documents importants</p>
                            <p class="mb-2"><strong>Poids :</strong> 0.5 kg</p>
                            <p class="mb-3">
                                <span class="badge bg-danger">Urgent</span>
                            </p>
                            <div class="d-flex gap-2">
                                <a href="order-detail.html?id=5" class="btn btn-outline-primary btn-sm flex-grow-1">
                                    <i class="bi bi-eye"></i> Voir détails
                                </a>
                                <a href="order-detail.html?id=5" class="btn btn-primary btn-sm">
                                    <i class="bi bi-hand-thumbs-up"></i> Faire une offre
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Card -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge badge-waiting">En attente</span>
                                <small class="text-muted">#CMD-2024-009</small>
                            </div>
                            <h5 class="card-title">Fès → Meknès</h5>
                            <p class="text-muted mb-2"><i class="bi bi-geo-alt"></i> 60 km</p>
                            <p class="mb-2"><strong>Description :</strong> Colis alimentaire</p>
                            <p class="mb-2"><strong>Poids :</strong> 3.0 kg</p>
                            <p class="mb-3">
                                <span class="badge bg-success">Normal</span>
                            </p>
                            <div class="d-flex gap-2">
                                <a href="order-detail.html?id=9" class="btn btn-outline-primary btn-sm flex-grow-1">
                                    <i class="bi bi-eye"></i> Voir détails
                                </a>
                                <a href="order-detail.html?id=9" class="btn btn-primary btn-sm">
                                    <i class="bi bi-hand-thumbs-up"></i> Faire une offre
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Card -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge badge-waiting">En attente</span>
                                <small class="text-muted">#CMD-2024-010</small>
                            </div>
                            <h5 class="card-title">Rabat → Casablanca</h5>
                            <p class="text-muted mb-2"><i class="bi bi-geo-alt"></i> 90 km</p>
                            <p class="mb-2"><strong>Description :</strong> Vêtements</p>
                            <p class="mb-2"><strong>Poids :</strong> 1.8 kg</p>
                            <p class="mb-3">
                                <span class="badge bg-success">Normal</span>
                            </p>
                            <div class="d-flex gap-2">
                                <a href="order-detail.html?id=10" class="btn btn-outline-primary btn-sm flex-grow-1">
                                    <i class="bi bi-eye"></i> Voir détails
                                </a>
                                <a href="order-detail.html?id=10" class="btn btn-primary btn-sm">
                                    <i class="bi bi-hand-thumbs-up"></i> Faire une offre
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
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
        </main>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="../assets/js/filters.js"></script>
    <script src="../assets/js/notifications.js"></script>
</body>
</html>



