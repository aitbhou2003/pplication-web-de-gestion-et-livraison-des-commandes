<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail de la commande - Livreur</title>
    
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
                <h2>Commande #CMD-2024-002</h2>
                <a href="available-orders.html" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left"></i> Retour
                </a>
            </div>

            <!-- Order Information -->
            <div class="row">
                <div class="col-md-6">
                    <div class="content-card">
                        <h4 class="mb-3"><i class="bi bi-info-circle text-primary"></i> Informations de la commande</h4>
                        <table class="table table-borderless">
                            <tr>
                                <td><strong>ID :</strong></td>
                                <td>#CMD-2024-002</td>
                            </tr>
                            <tr>
                                <td><strong>Date de création :</strong></td>
                                <td>14 Janvier 2024 à 14:15</td>
                            </tr>
                            <tr>
                                <td><strong>Statut :</strong></td>
                                <td><span class="badge badge-waiting">En attente</span></td>
                            </tr>
                            <tr>
                                <td><strong>Description :</strong></td>
                                <td>Colis contenant des produits électroniques</td>
                            </tr>
                            <tr>
                                <td><strong>Poids :</strong></td>
                                <td>5.2 kg</td>
                            </tr>
                            <tr>
                                <td><strong>Options :</strong></td>
                                <td>
                                    <span class="badge bg-warning">Express</span>
                                    <span class="badge bg-info">Fragile</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="content-card">
                        <h4 class="mb-3"><i class="bi bi-geo-alt text-success"></i> Adresses</h4>
                        <div class="mb-3">
                            <strong><i class="bi bi-arrow-up-circle text-primary"></i> Départ</strong>
                            <p class="mb-0">789 Avenue Mohammed VI<br>Marrakech 40000<br>Tél: +212 6XX XXX XXX</p>
                        </div>
                        <hr>
                        <div>
                            <strong><i class="bi bi-arrow-down-circle text-success"></i> Arrivée</strong>
                            <p class="mb-0">321 Boulevard Zerktouni<br>Casablanca 20000<br>Tél: +212 6XX XXX XXX</p>
                        </div>
                        <div class="mt-3">
                            <small class="text-muted"><i class="bi bi-route"></i> Distance estimée : 240 km</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other Offers -->
            <div class="content-card">
                <h4 class="mb-3"><i class="bi bi-people text-info"></i> Autres offres</h4>
                <p class="text-muted">Cette commande a reçu <strong>3 offres</strong> d'autres livreurs.</p>
                <div class="alert alert-info">
                    <i class="bi bi-info-circle"></i> Les prix des autres offres ne sont pas visibles pour préserver la confidentialité.
                </div>
            </div>

            <!-- Submit Offer Form -->
            <div class="content-card">
                <h4 class="mb-3"><i class="bi bi-hand-thumbs-up text-success"></i> Envoyer une offre</h4>
                <form method="POST" action="../submit_offer.php" id="offerForm">
                    <input type="hidden" name="order_id" value="2">
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="offer_price" class="form-label">Prix proposé (MAD)</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="offer_price" name="offer_price" step="0.01" min="0" required placeholder="250.00">
                                <span class="input-group-text">MAD</span>
                            </div>
                            <small class="text-muted">Prix total pour cette livraison</small>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="estimated_duration" class="form-label">Durée estimée (heures)</label>
                            <input type="number" class="form-control" id="estimated_duration" name="estimated_duration" step="0.5" min="0.5" required placeholder="3.5">
                            <small class="text-muted">Temps estimé pour la livraison</small>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="vehicle_type" class="form-label">Type de véhicule</label>
                        <select class="form-select" id="vehicle_type" name="vehicle_type" required>
                            <option value="">Sélectionnez un véhicule</option>
                            <option value="moto">Moto</option>
                            <option value="voiture">Voiture</option>
                            <option value="camionnette">Camionnette</option>
                            <option value="camion">Camion</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Options de livraison</label>
                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="express_option" name="delivery_options[]" value="express">
                                    <label class="form-check-label" for="express_option">
                                        <i class="bi bi-lightning-charge text-danger"></i> Express disponible
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="insurance_option" name="delivery_options[]" value="insurance">
                                    <label class="form-check-label" for="insurance_option">
                                        <i class="bi bi-shield-check text-success"></i> Assurance incluse
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="tracking_option" name="delivery_options[]" value="tracking">
                                    <label class="form-check-label" for="tracking_option">
                                        <i class="bi bi-geo-alt text-primary"></i> Suivi GPS
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message au client (optionnel)</label>
                        <textarea class="form-control" id="message" name="message" rows="3" placeholder="Ajoutez un message personnel pour le client..."></textarea>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="available-orders.html" class="btn btn-outline-secondary">
                            <i class="bi bi-x-circle"></i> Annuler
                        </a>
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-send"></i> Envoyer l'offre
                        </button>
                    </div>
                </form>
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



