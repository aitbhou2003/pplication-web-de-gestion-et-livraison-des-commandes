<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Livreur</title>
    
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
                <li><a href="my-offers.html"><i class="bi bi-hand-thumbs-up"></i> Mes offres</a></li>
                <li><a href="active-deliveries.html"><i class="bi bi-truck"></i> Livraisons en cours</a></li>
                <li><a href="notifications.html"><i class="bi bi-bell"></i> Notifications</a></li>
                <li><a href="profile.html" class="active"><i class="bi bi-person"></i> Profil</a></li>
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
                <h2>Mon profil</h2>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <!-- Profile Information -->
                    <div class="content-card">
                        <h4 class="mb-4"><i class="bi bi-person-circle text-primary"></i> Informations personnelles</h4>
                        <form method="POST" action="../update_profile.php" enctype="multipart/form-data">
                            <div class="text-center mb-4">
                                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 120px; height: 120px; font-size: 3rem;">
                                    <strong>YK</strong>
                                </div>
                                <div class="mb-3">
                                    <label for="profile_photo" class="btn btn-outline-primary btn-sm">
                                        <i class="bi bi-camera"></i> Changer la photo
                                    </label>
                                    <input type="file" class="d-none" id="profile_photo" name="profile_photo" accept="image/*">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="first_name" class="form-label">Prénom</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="Youssef" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="last_name" class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="Kadiri" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse email</label>
                                <input type="email" class="form-control" id="email" name="email" value="youssef.kadiri@example.com" required>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Téléphone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" value="+212 6XX XXX XXX" required>
                            </div>

                            <div class="mb-3">
                                <label for="vehicle_type" class="form-label">Type de véhicule</label>
                                <select class="form-select" id="vehicle_type" name="vehicle_type" required>
                                    <option value="voiture" selected>Voiture</option>
                                    <option value="moto">Moto</option>
                                    <option value="camionnette">Camionnette</option>
                                    <option value="camion">Camion</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="license_plate" class="form-label">Plaque d'immatriculation</label>
                                <input type="text" class="form-control" id="license_plate" name="license_plate" value="12345-A-45" required>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Adresse</label>
                                <textarea class="form-control" id="address" name="address" rows="2">456 Avenue Hassan II, Rabat</textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="city" class="form-label">Ville</label>
                                    <input type="text" class="form-control" id="city" name="city" value="Rabat">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="postal_code" class="form-label">Code postal</label>
                                    <input type="text" class="form-control" id="postal_code" name="postal_code" value="10000">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check-circle"></i> Enregistrer les modifications
                            </button>
                        </form>
                    </div>

                    <!-- Change Password -->
                    <div class="content-card mt-4">
                        <h4 class="mb-4"><i class="bi bi-lock text-warning"></i> Changer le mot de passe</h4>
                        <form method="POST" action="../change_password.php">
                            <div class="mb-3">
                                <label for="current_password" class="form-label">Mot de passe actuel</label>
                                <input type="password" class="form-control" id="current_password" name="current_password" required>
                            </div>
                            <div class="mb-3">
                                <label for="new_password" class="form-label">Nouveau mot de passe</label>
                                <input type="password" class="form-control" id="new_password" name="new_password" required>
                            </div>
                            <div class="mb-3">
                                <label for="confirm_new_password" class="form-label">Confirmer le nouveau mot de passe</label>
                                <input type="password" class="form-control" id="confirm_new_password" name="confirm_new_password" required>
                            </div>
                            <button type="submit" class="btn btn-warning">
                                <i class="bi bi-key"></i> Changer le mot de passe
                            </button>
                        </form>
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- Account Stats -->
                    <div class="content-card">
                        <h5 class="mb-3">Statistiques du compte</h5>
                        <div class="mb-3">
                            <strong>Membre depuis</strong>
                            <p class="text-muted">Mars 2023</p>
                        </div>
                        <div class="mb-3">
                            <strong>Livraisons terminées</strong>
                            <p class="text-muted">127 livraisons</p>
                        </div>
                        <div class="mb-3">
                            <strong>Note moyenne</strong>
                            <p class="text-muted">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                4.8/5
                            </p>
                        </div>
                        <div class="mb-3">
                            <strong>Revenus totaux</strong>
                            <p class="text-muted">32,450 MAD</p>
                        </div>
                        <div class="mb-3">
                            <strong>Taux d'acceptation</strong>
                            <p class="text-muted">75%</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="../assets/js/form-validation.js"></script>
    <script src="../assets/js/notifications.js"></script>
</body>
</html>



