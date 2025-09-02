<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveautés - e-Teranga</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset ('styles/nouveautes.css')}}">
    <link rel="icon" type="image/png" href="{{asset ('images/logo.png')}}">
</head>
<body>
<script src="js/cart.js"></script>
<script src="js/search.js"></script>
    <!-- Header (repris identique) -->
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
                        <img src="{{asset ('images/logo.png')}}" alt="e-Teranga Logo">
                        <h1>e-<span>Teranga</span></h1>
                    </div>

                    <div class="search-bar">
                    <input type="text" id="search-input" placeholder="Rechercher des articles...">
                    <button><i class="fas fa-search"></i></button>
                    <div id="search-results" style="position: absolute; background: white; border: 1px solid #ccc; max-height: 250px; overflow-y: auto; width: 280px; display: none; z-index: 1000; margin-top: 5px; padding: 10px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);"></div>
                </div>

                    <div class="user-actions">
                        <a href="#"><i class="far fa-user"></i></a>
                        <a href="#"><i class="far fa-heart"></i></a>
                        <a href="p{{asset ('panier')}}"><i class="fas fa-shopping-cart"></i><span id="cart-count">0</span></a>
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

    <!-- Header Section -->
    <section class="category-header" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://www.socialnetlink.org/wp-content/uploads/2021/03/E-commerce.jpeg');">
        <div class="container">
            <h1>Nouveautés</h1>
            <ul class="breadcrumb">
            </ul>
        </div>
    </section>

    <!-- Filtres -->
    <section class="filter-bar container">
        <div class="filter-group">
            <label>Catégorie :</label>
            <select>
                <option>Toutes</option>
                <option>Beauté</option>
                <option>Technologie</option>
                <option>Maison</option>
            </select>
        </div>
        <div class="filter-group">
            <label>Prix :</label>
            <input type="number" placeholder="Min">
            <input type="number" placeholder="Max">
        </div>
    </section>

    <!-- Produits Nouveautés -->
    <section class="container">
        <div class="products">
            <!-- 10 produits exemples -->
            <div class="product-card">
                <div class="product-img">
                    <img src="img/poubelle.jpg" alt="Produit 1">
                    <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                </div>
                <div class="product-info">
                    <h3 class="product-title">Sac Poubelle</h3><button><i class="far fa-heart"></i></button>
                    <div class="product-price"><span class="current-price">3,500 XOF</span></div>
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
                    <img src="img/enceinte.jpg" alt="Produit 2">
                    <span class="product-badge">Luxe</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                </div>
                <div class="product-info">
                    <h3 class="product-title">Enceinte Bluetooth</h3><button><i class="far fa-heart"></i></button>
                    <div class="product-price"><span class="current-price">12,000 XOF</span></div>
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
                    <img src="img/kit.webp" alt="Produit 2">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Kit Nettoyage-Maison</h3><button><i class="far fa-heart"></i></button>
                    <div class="product-price"><span class="current-price">10,000 XOF</span></div>
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

            <!-- 8 autres produits similaires ici... -->

            <div class="product-card">
                <div class="product-img">
                    <img src="img/miel.webp" alt="Produit 2">
                    <span class="product-badge">Bio</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                </div>
                <div class="product-info">
                    <h3 class="product-title">Miel Naturel</h3><button><i class="far fa-heart"></i></button>
                    <div class="product-price"><span class="current-price">5,000 XOF</span></div>
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
                    <img src="img/serviette.jpg" alt="Produit 2">
                    <span class="product-badge">-20%</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                </div>
                <div class="product-info">
                    <h3 class="product-title">Serviette Hygiènique</h3><button><i class="far fa-heart"></i></button>
                    <div class="product-price"><span class="current-price">1,000 XOF</span></div>
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
                    <img src="img/Montre1.jpg" alt="Produit 2">
                    <span class="product-badge">Luxe</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                </div>
                <div class="product-info">
                    <h3 class="product-title">Montre</h3><button><i class="far fa-heart"></i></button>
                    <div class="product-price"><span class="current-price">10,000 XOF</span></div>
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
                    <img src="img/sac.jpeg" alt="Produit 2">
                    <span class="product-badge">Classe</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                </div>
                <div class="product-info">
                    <h3 class="product-title">Sac en cuir </h3><button><i class="far fa-heart"></i></button>
                    <div class="product-price"><span class="current-price">10,000 XOF</span></div>
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
                    <img src="img/youpla.png" alt="Produit 2">
                    <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                </div>
                <div class="product-info">
                    <h3 class="product-title">Youpla bébé</h3><button><i class="far fa-heart"></i></button>
                    <div class="product-price"><span class="current-price">8,000 XOF</span></div>
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
                    <img src="img/tapis.webp" alt="Produit 2">
                    <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                </div>
                <div class="product-info">
                    <h3 class="product-title">Tapis</h3><button><i class="far fa-heart"></i></button>
                    <div class="product-price"><span class="current-price">8,000 XOF</span></div>
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
