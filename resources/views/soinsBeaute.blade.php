<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soins & Beauté | e-Teranga</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset ('styles/soinsBeaute.css')}}">
    <link rel="icon" type="image/png" href="{{asset ('images/logo.png')}}">
</head>
<body>
<script src="js/cart.js"></script>
<script src="js/search.js"></script>
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
                        <img src="{{asset ('images/logo.png')}}" alt="Téranga-Haire Logo">
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
    
    <!-- Category Header -->
    <section class="category-header" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.pexels.com/photos/4735913/pexels-photo-4735913.jpeg');">
        <div class="container">
            <h1>Beurres et soins</h1>
        </div>
    </section>
    
    <!-- Products Section -->
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
                    <label>Sous-catégorie:</label>
                    <select>
                        <option>Toutes</option>
                        <option>Soins Visage</option>
                        <option>Soins Corps</option>
                        <option>Soins Cheveux</option>
                        <option>Produits Naturels</option>
                        <option>Maquillage</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <span>30 produits</span>
                </div>
            </div>
            
            <div class="products">
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
                        <span class="product-category">Soins Corps</span>
                        <h3 class="product-title">Savon Noir Traditionnel</h3>
                        <div class="product-price"><span class="current-price">2,000 XOF</span><span class="old-price">2,500 XOF</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>(14)</span>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/karité.webp" alt="Beurre de karité">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Soins Corps</span>
                        <h3 class="product-title">Beurre de Karité Pur 250g</h3>
                        <div class="product-price"><span class="current-price">1,500 XOF</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>(22)</span>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/baobab.jpeg" alt="Huile de baobab">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Soins Cheveux</span>
                        <h3 class="product-title">Huile de Baobab 100ml</h3>
                        <div class="product-price"><span class="current-price">2,200 XOF</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>(11)</span>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/visage.jpg" alt="Lait de chèvre">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Soins Visage</span>
                        <h3 class="product-title">Lait de Chèvre pour le Visage</h3>
                        <div class="product-price"><span class="current-price">3,000 XOF</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>(10)</span>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/masque.webp" alt="Masque capillaire">
                        <span class="product-badge">Promo</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Soins Cheveux</span>
                        <h3 class="product-title">Masque Capillaire au Moringa</h3>
                        <div class="product-price"><span class="current-price">2,000 XOF</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>(9)</span>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/henne.webp" alt="Henné naturel">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Soins Cheveux</span>
                        <h3 class="product-title">Henné Naturel 500g</h3>
                        <div class="product-price"><span class="current-price">1,500 XOF</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>(17)</span>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/epilatoire.webp" alt="Crème éclaircissante">
                        <span class="product-badge">-10%</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Soins Corps</span>
                        <h3 class="product-title">Crème Éclaircissante</h3>
                        <div class="product-price"><span class="current-price">2,500 XOF</span><span class="old-price">2,800 XOF</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>(12)</span>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/chanel.jpg" alt="Parfum">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Parfums</span>
                        <h3 class="product-title">Parfum Chanel N°5</h3>
                        <div class="product-price"><span class="current-price">15,000 XOF</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>(8)</span>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Téranga-Haire</h3>
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
                        <li><i class="fas fa-envelope"></i> contact@teranga-haire.sn</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Téranga-Haire. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>
