<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huiles naturelles | Téranga-Haire</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset ('styles/alimentaire.css')}}">
    <link rel="icon" type="image/png" href="{{asset ('images/Logo.png')}}">
</head>
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
                    <div id="search-results" style="position: absolute; background: white; border: 1px solid #ccc; max-height: 250px; overflow-y: auto; width: 280px; display: none; z-index: 1000; margin-top: 5px; padding: 10px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);"></div>
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
<body>
    <section class="category-header">
        <h1>Huiles naturelles</h1>
    </section>

    <section class="section">
        <div class="container">
            <div class="filter-bar">
                <div class="filter-group">
                    <label>Trier par:</label>
                    <select>
                        <option>Popularité</option>
                        <option>Prix croissant</option>
                        <option>Prix décroissant</option>
                        <option>Nouveautés</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label>Prix:</label>
                    <input type="number" placeholder="Min" style="width: 80px;">
                    <span> - </span>
                    <input type="number" placeholder="Max" style="width: 80px;">
                </div>
                <div class="filter-group">
                    <label>Sous-catégorie:</label>
                    <select>
                        <option>Toutes</option>
                        <option>Riz et Céréales</option>
                        <option>Huiles</option>
                        <option>Poissons</option>
                        <option>Épices</option>
                        <option>Boissons</option>
                    </select>
                </div>
                <div class="filter-group">
                    <span>45 produits</span>
                </div>
            </div>

            <div class="products">
                <!-- Produit 1 -->
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
                        <h3 class="product-title"><a href="{{asset ('rizSangalkam')}}">Riz Sangalkam 5kg</a></h3>
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
                <!-- Produit 2 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/huile-dida-darachide-naturelle-1-litre-4591.png" alt="Huile d'Arachide Dida">
                        <span class="product-badge">-10%</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Alimentaire</span>
                        <h3 class="product-title">Huile d'Arachide Dahra 1L</h3>
                        <div class="product-price"><span class="current-price">1,800 XOF</span><span class="old-price">2,000 XOF</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
                <!-- Produit 3 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/poisson.jpg" alt="Poisson Séché Guédj">
                        <span class="product-badge">Promo</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Alimentaire</span>
                        <h3 class="product-title">Poisson Séché Guédj 500g</h3>
                        <div class="product-price"><span class="current-price">2,500 XOF</span><span class="old-price">2,900 XOF</span></div>
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
                <!-- Produit 4 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/toubaCafe.jpeg" alt="Café Touba">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Alimentaire</span>
                        <h3 class="product-title">Café Touba 250g</h3>
                        <div class="product-price"><span class="current-price">1,200 XOF</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
                <!-- Produit 5 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/BOISSON-BISSAP-scaled.jpg" alt="Jus de Bissap">
                        <span class="product-badge">-5%</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Alimentaire</span>
                        <h3 class="product-title">Jus de Bissap 1L</h3>
                        <div class="product-price"><span class="current-price">1,500 XOF</span><span class="old-price">1,600 XOF</span></div>
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
                <!-- Produit 6 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/pateArachide.jpg" alt="Pâte d'Arachide Dakatine">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Alimentaire</span>
                        <h3 class="product-title">Pâte d'Arachide Dakatine 400g</h3>
                        <div class="product-price"><span class="current-price">1,000 XOF</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
                <!-- Produit 7 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/thiackry.jpeg" alt="Couscous de Mil">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Alimentaire</span>
                        <h3 class="product-title">Couscous de Mil (Thiakry) 1kg</h3>
                        <div class="product-price"><span class="current-price">1,800 XOF</span></div>
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
                <!-- Produit 8 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/mangue-sechee-petit-model.jpg" alt="Mangue Séchée Casamance">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Alimentaire</span>
                        <h3 class="product-title">Mangue Séchée Casamance 200g</h3>
                        <div class="product-price"><span class="current-price">2,200 XOF</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
            </div>
<!--    
            <div class="pagination">
                <a href="#">&laquo;</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">&raquo;</a>
            </div>
-->            
        </div>
    </section>
    <!-- Footer -->
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
