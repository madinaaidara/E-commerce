<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact - e-Teranga</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="{{asset ('styles/contact.css')}}" />
    <link rel="icon" type="image/png" href="{{asset ('images/logo.png')}}" />
</head>
<body>
<script src="js/cart.js"></script>
<script src="js/search.js"></script>
    <!-- Header -->
    <header>
        <div class="top-bar">
            <div class="container">
                <div class="top-bar-content">
                    <div><i class="fas fa-phone-alt"></i> +221 33 800 00 00</div>
                    <div><i class="fas fa-envelope"></i> contact@e-teranga.sn</div>
                    <div><i class="fas fa-map-marker-alt"></i> Dakar, Sénégal</div>
                </div>
            </div>
        </div>
        
        <div class="main-header">
            <div class="container">
                <div class="header-content">
                    <div class="logo">
                        <img src="{{asset ('images/logo.png')}}" alt="e-Teranga Logo" />
                        <h1>e-<span>Teranga</span></h1>
                    </div>
                    
                    <div class="search-bar">
                        <input type="text" id="search-input" placeholder="Rechercher des articles..." />
                        <button><i class="fas fa-search"></i></button>
                        <div id="search-results" style="position: absolute; background: white; border: 1px solid #ccc; max-height: 200px; overflow-y: auto; width: 250px; display: none; z-index: 1000; margin-top: 5px; padding: 10px;"></div>
                    </div>
                    
                    <div class="user-actions">
                        <a href="#"><i class="far fa-user"></i></a>
                        <a href="#"><i class="far fa-heart"></i></a>
                        <a href="{{asset ('panier')}}"><i class="fas fa-shopping-cart"></i><span id="cart-count">0</span></a>
                    </div>
                </div>
            </div>
        </div>
        
        <nav>
            <div class="container">
                <ul class="main-nav">
                    <li><a href="{{ route('accueil') }}">Accueil</a></li>
                    <li>
                        <a href="#">Boutique <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('huilesnaturelles') }}">Huiles naturelles</a></li>
                            <li><a href="{{ route('soinsBeaute') }}">Beurres et soins</a></li>
                            <li><a href="{{ route('shampoings') }}">Shampoings</a></li>
                            <li><a href="{{ route('sérums') }}">Sérums</a></li>
                            <li><a href="{{ route('accessoirescapillaires') }}">Accessoires capillaires</a></li>
                            <li><a href="{{ route('poudresnaturels') }}">Poudres naturelles</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="{{ route('nouveautes') }}">Nouveautés</a></li>
                    <li><a href="{{ route('promotions') }}">Promotions</a></li>
                    <li><a href="{{ route('madeinSenegal') }}">Made in Senegal</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Category Header -->
    <section class="category-header" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.pexels.com/photos/105003/pexels-photo-105003.jpeg');">
        <div class="container">
            <h1>Contactez-nous</h1>
            <p>Vous avez des questions ? Envoyez-nous un message en utilisant le formulaire ci-dessous.</p>
        </div>
    </section>


    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <form action="mailto:contact@e-teranga.sn" method="post" enctype="text/plain" class="contact-form">
                <label for="name">Nom complet</label>
                <input type="text" id="name" name="name" placeholder="Votre nom complet" required />

                <label for="email">Adresse e-mail</label>
                <input type="email" id="email" name="email" placeholder="Votre adresse e-mail" required />

                <label for="subject">Sujet</label>
                <input type="text" id="subject" name="subject" placeholder="Sujet de votre message" required />

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="6" placeholder="Votre message" required></textarea>

                <button type="submit" class="btn">Envoyer</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>e-Teranga</h3>
                    <p>Votre marché en ligne sénégalais avec les meilleurs produits et services.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Liens rapides</h3>
                    <ul>
                        <li><a href="{{ route('accueil') }}">Accueil</a></li>
                        <li><a href="#">Boutique</a></li>
                        <li><a href="{{ route('nouveautes') }}">Nouveautés</a></li>
                        <li><a href="{{ route('promotions') }}">Promotions</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Catégories</h3>
                    <ul>
                        <li><a href="{{ route('huilesnaturelles') }}">Huiles naturelles</a></li>
                            <li><a href="{{ route('soinsBeaute') }}">Beurres et soins</a></li>
                            <li><a href="{{ route('shampoings') }}">Shampoings</a></li>
                            <li><a href="{{ route('sérums') }}">Sérums</a></li>
                            <li><a href="{{ route('accessoirescapillaires') }}">Accessoires capillaires</a></li>
                            <li><a href="{{ route('poudresnaturels') }}">Poudres naturelles</a></li>
                            
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Dakar, Sénégal</li>
                        <li><i class="fas fa-phone-alt"></i> +221 33 800 00 00</li>
                        <li><i class="fas fa-envelope"></i> contact@e-teranga.sn</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 e-Teranga. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>
