<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail de la commande - Client</title>
    
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
                <li><a href="create-order.html"><i class="bi bi-plus-circle"></i> Créer une commande</a></li>
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
                <h2>Commande #CMD-2024-001</h2>
                <a href="my-orders.html" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left"></i> Retour
                </a>
            </div>

            <!-- Order Status Timeline -->
            <div class="content-card">
                <h4 class="mb-4">Statut de la commande</h4>
                <div class="status-timeline">
                    <div class="status-step completed">
                        <div class="status-step-icon"><i class="bi bi-check"></i></div>
                        <div class="status-step-label">Créée</div>
                    </div>
                    <div class="status-step completed">
                        <div class="status-step-icon"><i class="bi bi-check"></i></div>
                        <div class="status-step-label">Offres reçues</div>
                    </div>
                    <div class="status-step active">
                        <div class="status-step-icon"><i class="bi bi-truck"></i></div>
                        <div class="status-step-label">En cours</div>
                    </div>
                    <div class="status-step">
                        <div class="status-step-icon"><i class="bi bi-check-circle"></i></div>
                        <div class="status-step-label">Livrée</div>
                    </div>
                </div>
            </div>

            <!-- Order Information -->
            <div class="row">
                <div class="col-md-6">
                    <div class="content-card">
                        <h4 class="mb-3"><i class="bi bi-info-circle text-primary"></i> Informations de la commande</h4>
                        <table class="table table-borderless">
                            <tr>
                                <td><strong>ID :</strong></td>
                                <td>#CMD-2024-001</td>
                            </tr>
                            <tr>
                                <td><strong>Date de création :</strong></td>
                                <td>15 Janvier 2024 à 10:30</td>
                            </tr>
                            <tr>
                                <td><strong>Statut :</strong></td>
                                <td><span class="badge badge-active">En cours</span></td>
                            </tr>
                            <tr>
                                <td><strong>Description :</strong></td>
                                <td>Colis contenant des documents importants</td>
                            </tr>
                            <tr>
                                <td><strong>Poids :</strong></td>
                                <td>2.5 kg</td>
                            </tr>
                            <tr>
                                <td><strong>Options :</strong></td>
                                <td>
                                    <span class="badge bg-warning">Express</span>
                                    <span class="badge bg-info">Signature requise</span>
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
                            <p class="mb-0">123 Boulevard Mohammed V<br>Casablanca 20000<br>Tél: +212 6XX XXX XXX</p>
                        </div>
                        <hr>
                        <div>
                            <strong><i class="bi bi-arrow-down-circle text-success"></i> Arrivée</strong>
                            <p class="mb-0">456 Avenue Hassan II<br>Rabat 10000<br>Tél: +212 6XX XXX XXX</p>
                        </div>
                        <div class="mt-3">
                            <small class="text-muted"><i class="bi bi-route"></i> Distance estimée : 120 km</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Assigned Delivery Person -->
            <div class="content-card">
                <h4 class="mb-3"><i class="bi bi-person-badge text-warning"></i> Livreur assigné</h4>
                <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                        <strong>YK</strong>
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="mb-1">Youssef K.</h5>
                        <p class="text-muted mb-1"><i class="bi bi-star-fill text-warning"></i> 4.8/5 (127 avis)</p>
                        <p class="text-muted mb-0"><i class="bi bi-telephone"></i> +212 6XX XXX XXX</p>
                    </div>
                    <div>
                        <button class="btn btn-outline-primary">
                            <i class="bi bi-chat-dots"></i> Contacter
                        </button>
                    </div>
                </div>
            </div>

            <!-- Offers Received (if waiting) -->
            <div class="content-card" id="offersSection" style="display: none;">
                <h4 class="mb-3"><i class="bi bi-hand-thumbs-up text-success"></i> Offres reçues</h4>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card offer-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                        <strong>YK</strong>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Youssef K.</h6>
                                        <small class="text-muted"><i class="bi bi-star-fill text-warning"></i> 4.8/5</small>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <strong class="text-primary" style="font-size: 1.5rem;">250 MAD</strong>
                                </div>
                                <p class="mb-2"><i class="bi bi-clock"></i> Durée estimée : 3 heures</p>
                                <p class="mb-2"><i class="bi bi-car-front"></i> Véhicule : Voiture</p>
                                <p class="mb-3"><i class="bi bi-check-circle text-success"></i> Express disponible</p>
                                <form method="POST" action="../accept_offer.php">
                                    <input type="hidden" name="offer_id" value="1">
                                    <input type="hidden" name="order_id" value="1">
                                    <button type="submit" class="btn btn-success w-100">
                                        <i class="bi bi-check-circle"></i> Accepter l'offre
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card offer-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                        <strong>MA</strong>
                                    </div>
                                    <div>
                                        <h6 class="mb-0">Mohamed A.</h6>
                                        <small class="text-muted"><i class="bi bi-star-fill text-warning"></i> 4.6/5</small>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <strong class="text-primary" style="font-size: 1.5rem;">280 MAD</strong>
                                </div>
                                <p class="mb-2"><i class="bi bi-clock"></i> Durée estimée : 3.5 heures</p>
                                <p class="mb-2"><i class="bi bi-car-front"></i> Véhicule : Moto</p>
                                <p class="mb-3"><i class="bi bi-check-circle text-success"></i> Express disponible</p>
                                <form method="POST" action="../accept_offer.php">
                                    <input type="hidden" name="offer_id" value="2">
                                    <input type="hidden" name="order_id" value="1">
                                    <button type="submit" class="btn btn-success w-100">
                                        <i class="bi bi-check-circle"></i> Accepter l'offre
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Delivery Validation (if shipped) -->
            <div class="content-card" id="deliveryValidation" style="display: none;">
                <h4 class="mb-3"><i class="bi bi-check-circle text-success"></i> Valider la livraison</h4>
                <p>Votre commande a été expédiée. Veuillez valider la réception une fois le colis reçu.</p>
                <form method="POST" action="../validate_delivery.php">
                    <input type="hidden" name="order_id" value="1">
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-circle"></i> Valider la livraison
                    </button>
                </form>
            </div>

            <!-- Notifications History -->
            <div class="content-card">
                <h4 class="mb-3"><i class="bi bi-bell text-info"></i> Historique des notifications</h4>
                <div class="timeline">
                    <div class="timeline-item completed">
                        <strong>Commande créée</strong>
                        <p class="text-muted mb-0">15 Jan 2024 à 10:30</p>
                    </div>
                    <div class="timeline-item completed">
                        <strong>Offre acceptée</strong>
                        <p class="text-muted mb-0">15 Jan 2024 à 11:15 - Youssef K. a été assigné</p>
                    </div>
                    <div class="timeline-item completed">
                        <strong>Commande expédiée</strong>
                        <p class="text-muted mb-0">15 Jan 2024 à 12:00 - Le livreur a pris la route</p>
                    </div>
                    <div class="timeline-item">
                        <strong>En transit</strong>
                        <p class="text-muted mb-0">En cours...</p>
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
        // Show/hide sections based on order status
        const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('status') || 'active';
        
        if (status === 'waiting') {
            document.getElementById('offersSection').style.display = 'block';
        } else if (status === 'shipped') {
            document.getElementById('deliveryValidation').style.display = 'block';
        }
    </script>
</body>
</html>



