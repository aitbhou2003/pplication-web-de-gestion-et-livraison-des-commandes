<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une commande - Client</title>
    
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
                <li><a href="create-order.html" class="active"><i class="bi bi-plus-circle"></i> Créer une commande</a></li>
                <li><a href="my-orders.html"><i class="bi bi-box-seam"></i> Mes commandes</a></li>
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
                <h2>Créer une commande</h2>
            </div>

            <div class="content-card">
                <form method="POST" action="../create_order.php" id="createOrderForm">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <h4 class="mb-3"><i class="bi bi-geo-alt-fill text-primary"></i> Adresse de départ</h4>
                            <div class="mb-3">
                                <label for="departure_address" class="form-label">Adresse complète</label>
                                <input type="text" class="form-control" id="departure_address" name="departure_address" required placeholder="Ex: 123 Boulevard Mohammed V, Casablanca">
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="departure_city" class="form-label">Ville</label>
                                    <input type="text" class="form-control" id="departure_city" name="departure_city" required placeholder="Casablanca">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="departure_postal" class="form-label">Code postal</label>
                                    <input type="text" class="form-control" id="departure_postal" name="departure_postal" required placeholder="20000">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="departure_phone" class="form-label">Téléphone de contact (départ)</label>
                                <input type="tel" class="form-control" id="departure_phone" name="departure_phone" required placeholder="+212 6XX XXX XXX">
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <h4 class="mb-3"><i class="bi bi-geo-alt text-success"></i> Adresse d'arrivée</h4>
                            <div class="mb-3">
                                <label for="arrival_address" class="form-label">Adresse complète</label>
                                <input type="text" class="form-control" id="arrival_address" name="arrival_address" required placeholder="Ex: 456 Avenue Hassan II, Rabat">
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="arrival_city" class="form-label">Ville</label>
                                    <input type="text" class="form-control" id="arrival_city" name="arrival_city" required placeholder="Rabat">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="arrival_postal" class="form-label">Code postal</label>
                                    <input type="text" class="form-control" id="arrival_postal" name="arrival_postal" required placeholder="10000">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="arrival_phone" class="form-label">Téléphone de contact (arrivée)</label>
                                <input type="tel" class="form-control" id="arrival_phone" name="arrival_phone" required placeholder="+212 6XX XXX XXX">
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="mb-4">
                        <h4 class="mb-3"><i class="bi bi-box-seam text-warning"></i> Détails du colis</h4>
                        <div class="mb-3">
                            <label for="package_description" class="form-label">Description du colis</label>
                            <textarea class="form-control" id="package_description" name="package_description" rows="3" required placeholder="Décrivez le contenu du colis..."></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="package_weight" class="form-label">Poids estimé (kg)</label>
                                <input type="number" class="form-control" id="package_weight" name="package_weight" step="0.1" min="0.1" required placeholder="2.5">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="package_dimensions" class="form-label">Dimensions (L x l x H en cm)</label>
                                <input type="text" class="form-control" id="package_dimensions" name="package_dimensions" placeholder="30 x 20 x 15">
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Options spéciales</label>
                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="fragile" name="options[]" value="fragile">
                                    <label class="form-check-label" for="fragile">
                                        <i class="bi bi-exclamation-triangle text-warning"></i> Fragile
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="express" name="options[]" value="express">
                                    <label class="form-check-label" for="express">
                                        <i class="bi bi-lightning-charge text-danger"></i> Express
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="signature" name="options[]" value="signature">
                                    <label class="form-check-label" for="signature">
                                        <i class="bi bi-pen text-primary"></i> Signature requise
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="insurance" name="options[]" value="insurance">
                                    <label class="form-check-label" for="insurance">
                                        <i class="bi bi-shield-check text-success"></i> Assurance
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h4 class="mb-3"><i class="bi bi-calendar-event text-info"></i> Date et heure souhaitée</h4>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="preferred_date" class="form-label">Date</label>
                                <input type="date" class="form-control" id="preferred_date" name="preferred_date" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="preferred_time" class="form-label">Heure</label>
                                <input type="time" class="form-control" id="preferred_time" name="preferred_time" required>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="dashboard.html" class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-left"></i> Annuler
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-circle"></i> Créer la commande
                        </button>
                    </div>
                </form>
            </div>

            <!-- Preview Card -->
            <div class="content-card mt-4">
                <h4 class="mb-3">Aperçu de la commande</h4>
                <div id="orderPreview" class="text-muted">
                    <p>Remplissez le formulaire pour voir l'aperçu</p>
                </div>
            </div>
        </main>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="../assets/js/form-validation.js"></script>
    <script src="../assets/js/notifications.js"></script>
    <script>
        // Preview update
        const form = document.getElementById('createOrderForm');
        const preview = document.getElementById('orderPreview');
        
        form.addEventListener('input', function() {
            const formData = new FormData(form);
            let html = '<div class="row">';
            
            if (formData.get('departure_address')) {
                html += `<div class="col-md-6"><strong>De :</strong> ${formData.get('departure_address')}, ${formData.get('departure_city')}</div>`;
            }
            if (formData.get('arrival_address')) {
                html += `<div class="col-md-6"><strong>À :</strong> ${formData.get('arrival_address')}, ${formData.get('arrival_city')}</div>`;
            }
            html += '</div>';
            
            if (formData.get('package_description')) {
                html += `<p class="mt-3"><strong>Description :</strong> ${formData.get('package_description')}</p>`;
            }
            if (formData.get('package_weight')) {
                html += `<p><strong>Poids :</strong> ${formData.get('package_weight')} kg</p>`;
            }
            
            preview.innerHTML = html || '<p class="text-muted">Remplissez le formulaire pour voir l\'aperçu</p>';
        });
        
        // Set minimum date to today
        document.getElementById('preferred_date').min = new Date().toISOString().split('T')[0];
    </script>
</body>
</html>




