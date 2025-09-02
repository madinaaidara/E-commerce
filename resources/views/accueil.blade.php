<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Teranga</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{asset ('styles/accueil.css')}}">
    <link rel="icon" type="image/png" href="{{asset ('images/logo.png')}}">
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
                    <div><i class="fas fa-envelope"></i> contact@teranga-haire.sn</div>
                    <div><i class="fas fa-map-marker-alt"></i> Dakar, Sénégal</div>
                </div>
            </div>
        </div>
        
        <div class="main-header">
            <div class="container">
                <div class="header-content">
                    <div class="logo">
                        <img src="{{asset ('images/logo.png')}}" alt="e-Teranga Logo">
                        <h1>Téranga-<span>Haire</span></h1>
                    </div>
                    
                    <div class="search-bar">
                        <input type="text" id="search-input" placeholder="Rechercher des articles...">
                        <button><i class="fas fa-search"></i></button>
                        <div id="search-results" style="position: absolute; background: white; border: 1px solid #ccc; max-height: 200px; overflow-y: auto; width: 250px; display: none; z-index: 1000; margin-top: 5px; padding: 10px;"></div>
                    </div>
                    
                    <div class="user-actions">
                        <a href="{{ route('login') }}"><i class="far fa-user"></i></a>
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
    
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h2>Bienvenue sur Téranga-Haire</h2>
                <p>Découvrez le meilleur du Sénégal en ligne. Produits capillaires de qualité, livraison rapide et service client exceptionnel.</p>
                <a href="#" class="btn">Acheter maintenant</a>
                <a href="#" class="btn btn-outline">Découvrir</a>
            </div>
        </div>
    </section>
    
    <!-- Categories Section -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Nos Catégories</h2>
            </div>
            
            <div class="categories">
                <div class="category-card">
                    <div class="category-img">
                        <img src="https://images.pexels.com/photos/6724357/pexels-photo-6724357.jpeg" alt="huilesnaturelles">
                    </div>
                    <div class="category-info">
                        <h3>Huiles naturelles</h3>
                    </div>
                </div>
                
                <div class="category-card">
                    <div class="category-img">
                        <img src="https://images.pexels.com/photos/17596986/pexels-photo-17596986.jpeg" alt="soinsBeaute">
                    </div>
                    <div class="category-info">
                        <h3>Beurres & Soins</h3>
                    </div>
                </div>
                
                <div class="category-card">
                    <div class="category-img">
                        <img src="https://images.pexels.com/photos/7428102/pexels-photo-7428102.jpeg" alt="sampoings">
                    </div>
                    <div class="category-info">
                        <h3>Shampoings</h3>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-img">
                        <img src="https://images.pexels.com/photos/7795795/pexels-photo-7795795.jpeg" alt="serums">
                    </div>
                    <div class="category-info">
                        <h3>Sérums</h3>
                    </div>
                </div>
                
                <div class="category-card">
                    <div class="category-img">
                        <img src="https://media.istockphoto.com/id/1466376977/photo/various-hairdresser-tools-flat-lay-on-pink-background-top-view.jpg?s=1024x1024&w=is&k=20&c=6p2ZQ5aoD_2XCd5odv7PF9bc0fAssPtkXO5zBFlMa7A=" alt="accessoirescapillaires">
                    </div>
                    <div class="category-info">
                        <h3>Accessoires capillaires</h3>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-img">
                        <img src="https://images.pexels.com/photos/1340116/pexels-photo-1340116.jpeg" alt="poudresnaturels">
                    </div>
                    <div class="category-info">
                        <h3>Poudres Naturelles</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Featured Products -->
    <section class="section" style="background-color: #F9F9F9;">
        <div class="container">
            <div class="section-title">
                <h2>Produits Populaires</h2>
            </div>
            
            <div class="products">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/riz.jpg" alt="Riz local">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Alimentaire</span>
                        <h3 class="product-title">Riz Sangalkam 5kg</h3>
                        <div class="product-price">
                            <span class="current-price">10,500 XOF</span>
                        </div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/savon.jpg" alt="Savon noir">
                        <span class="product-badge">-20%</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Beauté</span>
                        <h3 class="product-title">Savon Noir Traditionnel</h3>
                        <div class="product-price">
                            <span class="current-price">2,000 XOF</span>
                            <span class="old-price">2,500 XOF</span>
                        </div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/chemise.jpg" alt="Boubou">
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Vêtements</span>
                        <h3 class="product-title">Chemise Homme</h3>
                        <div class="product-price">
                            <span class="current-price">6,000 XOF</span>
                        </div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/iphe.jpeg" alt="Smartphone">
                        <span class="product-badge">Promo</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Technologie</span>
                        <h3 class="product-title">Iphone 16</h3>
                        <div class="product-price">
                            <span class="current-price">750,000 XOF</span>
                            <span class="old-price">800,000 XOF</span>
                        </div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Banner -->
    <section class="banner">
        <div class="container">
            <h2>Spécial Été</h2>
            <p>Découvrez nos offres exceptionnelles pour l'été. Livraison gratuite sur toutes les commandes supérieures à 20,000 XOF.</p>
            <a href="#" class="btn">Voir les offres</a>
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
