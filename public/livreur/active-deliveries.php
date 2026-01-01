<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraisons en cours - Livreur</title>
    
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
                <li><a href="active-deliveries.html" class="active"><i class="bi bi-truck"></i> Livraisons en cours</a></li>
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
                <h2>Livraisons en cours</h2>
            </div>

            <!-- Active Deliveries List -->
            <div class="content-card">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h5 class="mb-1">#CMD-2024-001</h5>
                                <p class="text-muted mb-0">Casablanca → Rabat (120 km)</p>
                            </div>
                            <span class="badge badge-active">En cours</span>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <strong>Client :</strong> Ahmed M.<br>
                                <strong>Téléphone :</strong> +212 6XX XXX XXX<br>
                                <strong>Prix :</strong> 250 MAD
                            </div>
                            <div class="col-md-6">
                                <strong>Départ :</strong> 123 Boulevard Mohammed V, Casablanca<br>
                                <strong>Arrivée :</strong> 456 Avenue Hassan II, Rabat
                            </div>
                        </div>

                        <div class="d-flex gap-2 mb-3">
                            <form method="POST" action="../update_status.php" style="display: inline;">
                                <input type="hidden" name="order_id" value="1">
                                <input type="hidden" name="status" value="shipped">
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-check-circle"></i> Marquer comme expédiée
                                </button>
                            </form>
                            <button class="btn btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#chat1">
                                <i class="bi bi-chat-dots"></i> Chat avec le client
                            </button>
                        </div>

                        <!-- Chat Section -->
                        <div class="collapse mt-3" id="chat1">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="mb-3">Messages</h6>
                                    <div class="chat-messages" style="max-height: 300px; overflow-y: auto; margin-bottom: 1rem;">
                                        <div class="mb-2">
                                            <small class="text-muted">Ahmed M. - 12:30</small>
                                            <p class="mb-0 bg-light p-2 rounded">Bonjour, à quelle heure prévoyez-vous d'arriver ?</p>
                                        </div>
                                        <div class="mb-2 text-end">
                                            <small class="text-muted">Vous - 12:35</small>
                                            <p class="mb-0 bg-primary text-white p-2 rounded d-inline-block">Bonjour, je prévois d'arriver vers 15h30.</p>
                                        </div>
                                        <div class="mb-2">
                                            <small class="text-muted">Ahmed M. - 12:40</small>
                                            <p class="mb-0 bg-light p-2 rounded">Parfait, je serai disponible. Merci !</p>
                                        </div>
                                    </div>
                                    <form method="POST" action="../send_message.php">
                                        <input type="hidden" name="order_id" value="1">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="message" placeholder="Tapez votre message...">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="bi bi-send"></i> Envoyer
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h5 class="mb-1">#CMD-2024-007</h5>
                                <p class="text-muted mb-0">Rabat → Tanger (280 km)</p>
                            </div>
                            <span class="badge badge-waiting">Acceptée</span>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <strong>Client :</strong> Sarah B.<br>
                                <strong>Téléphone :</strong> +212 6XX XXX XXX<br>
                                <strong>Prix :</strong> 300 MAD
                            </div>
                            <div class="col-md-6">
                                <strong>Départ :</strong> 789 Rue Allal Ben Abdellah, Rabat<br>
                                <strong>Arrivée :</strong> 321 Boulevard Pasteur, Tanger
                            </div>
                        </div>

                        <div class="d-flex gap-2 mb-3">
                            <form method="POST" action="../update_status.php" style="display: inline;">
                                <input type="hidden" name="order_id" value="7">
                                <input type="hidden" name="status" value="shipped">
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-check-circle"></i> Marquer comme expédiée
                                </button>
                            </form>
                            <button class="btn btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#chat2">
                                <i class="bi bi-chat-dots"></i> Chat avec le client
                            </button>
                        </div>

                        <!-- Chat Section -->
                        <div class="collapse mt-3" id="chat2">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="mb-3">Messages</h6>
                                    <div class="chat-messages" style="max-height: 300px; overflow-y: auto; margin-bottom: 1rem;">
                                        <p class="text-muted text-center">Aucun message pour le moment</p>
                                    </div>
                                    <form method="POST" action="../send_message.php">
                                        <input type="hidden" name="order_id" value="7">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="message" placeholder="Tapez votre message...">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="bi bi-send"></i> Envoyer
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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



