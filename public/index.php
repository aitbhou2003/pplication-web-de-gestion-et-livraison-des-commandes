<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraison Express - Livraison rapide et fiable</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <i class="bi bi-truck"></i> Livraison Express
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#how-it-works">Comment ça marche</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#advantages">Avantages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Témoignages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Se connecter</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ms-2" href="register.html">S'inscrire</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1>Livraison rapide et fiable à votre porte</h1>
                    <p>Connectez-vous avec des livreurs professionnels pour vos livraisons. Simple, rapide et sécurisé.</p>
                    <div class="d-flex gap-3">
                        <a href="register.html" class="btn btn-light btn-lg">Commencer maintenant</a>
                        <a href="#how-it-works" class="btn btn-outline-light btn-lg">En savoir plus</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <i class="bi bi-truck" style="font-size: 15rem; opacity: 0.3;"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Comment ça marche -->
    <section id="how-it-works" class="section-padding">
        <div class="container">
            <h2 class="text-center mb-5">Comment ça marche</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="bi bi-cart-plus" style="font-size: 3rem; color: var(--primary-color);"></i>
                            </div>
                            <h4 class="card-title">1. Créez une commande</h4>
                            <p class="card-text">Remplissez les détails de votre livraison : adresses, description du colis, et préférences.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="bi bi-hand-thumbs-up" style="font-size: 3rem; color: var(--secondary-color);"></i>
                            </div>
                            <h4 class="card-title">2. Recevez des offres</h4>
                            <p class="card-text">Les livreurs vous proposent leurs services avec prix et délais. Choisissez celui qui vous convient.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center h-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="bi bi-check-circle" style="font-size: 3rem; color: var(--warning-color);"></i>
                            </div>
                            <h4 class="card-title">3. Suivez en temps réel</h4>
                            <p class="card-text">Suivez votre livraison en direct et recevez des notifications à chaque étape.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Avantages -->
    <section id="advantages" class="section-padding bg-light-custom">
        <div class="container">
            <h2 class="text-center mb-5">Pourquoi nous choisir ?</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <i class="bi bi-lightning-charge" style="font-size: 2.5rem; color: var(--primary-color);"></i>
                        <h5 class="mt-3">Rapidité</h5>
                        <p>Livraisons express disponibles pour vos besoins urgents.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <i class="bi bi-shield-check" style="font-size: 2.5rem; color: var(--secondary-color);"></i>
                        <h5 class="mt-3">Sécurité</h5>
                        <p>Colis assurés et livreurs vérifiés pour votre tranquillité.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <i class="bi bi-currency-exchange" style="font-size: 2.5rem; color: var(--warning-color);"></i>
                        <h5 class="mt-3">Prix compétitifs</h5>
                        <p>Comparez les offres et choisissez le meilleur rapport qualité-prix.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <i class="bi bi-headset" style="font-size: 2.5rem; color: var(--danger-color);"></i>
                        <h5 class="mt-3">Support 24/7</h5>
                        <p>Notre équipe est disponible pour vous aider à tout moment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Témoignages -->
    <section id="testimonials" class="section-padding">
        <div class="container">
            <h2 class="text-center mb-5">Ce que disent nos clients</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <p class="card-text">"Service exceptionnel ! Ma commande est arrivée en moins de 2 heures. Je recommande vivement."</p>
                            <div class="d-flex align-items-center mt-3">
                                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <strong>AM</strong>
                                </div>
                                <div class="ms-3">
                                    <strong>Ahmed M.</strong><br>
                                    <small class="text-muted">Casablanca</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <p class="card-text">"Très professionnel et ponctuel. Le système de suivi en temps réel est génial !"</p>
                            <div class="d-flex align-items-center mt-3">
                                <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <strong>SB</strong>
                                </div>
                                <div class="ms-3">
                                    <strong>Sarah B.</strong><br>
                                    <small class="text-muted">Rabat</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <p class="card-text">"En tant que livreur, j'ai trouvé une excellente source de revenus. L'application est intuitive."</p>
                            <div class="d-flex align-items-center mt-3">
                                <div class="rounded-circle bg-warning text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <strong>YK</strong>
                                </div>
                                <div class="ms-3">
                                    <strong>Youssef K.</strong><br>
                                    <small class="text-muted">Livreur</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5><i class="bi bi-truck"></i> Livraison Express</h5>
                    <p>Votre partenaire de confiance pour toutes vos livraisons.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Liens utiles</h5>
                    <ul class="list-unstyled">
                        <li><a href="#how-it-works">Comment ça marche</a></li>
                        <li><a href="#advantages">Avantages</a></li>
                        <li><a href="#testimonials">Témoignages</a></li>
                        <li><a href="login.html">Connexion</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Contact</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-envelope"></i> contact@livraison-express.ma</li>
                        <li><i class="bi bi-telephone"></i> +212 5XX XXX XXX</li>
                        <li><i class="bi bi-geo-alt"></i> Casablanca, Maroc</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4" style="border-color: rgba(255,255,255,0.2);">
            <div class="text-center">
                <p>&copy; 2024 Livraison Express. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/notifications.js"></script>
</body>
</html>

