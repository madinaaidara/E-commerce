<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vêtements |  Téranga-Haire</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset ('styles/vetements.css')}}">
    <link rel="icon" type="image/png" href="{{asset ('images/logo.png')}}">
<script src="js/cart.js"></script>
<script src="js/search.js"></script>
</head>
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
    <!-- Category Header -->
    <section class="category-header" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://media.istockphoto.com/id/637928502/fr/photo/gros-plan-de-savon-liquide-dans-une-main.jpg?b=1&s=612x612&w=0&k=20&c=JEDFSLN045y5cSbPHrp1h1zRVOfgBJ60ypJhcGtBcqM=');">
        <div class="container">
            <h1>Shampoings</h1>
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
                    <label>Genre:</label>
                    <select>
                        <option>Tous</option>
                        <option>Homme</option>
                        <option>Femme</option>
                        <option>Enfant</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <label>Type:</label>
                    <select>
                        <option>Tous</option>
                        <option>Boubou</option>
                        <option>Robe</option>
                        <option>Chemise</option>
                        <option>Pantalon</option>
                        <option>Accessoires</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <span>52 produits</span>
                </div>
            </div>
            
            <div class="products">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/jogging.jpg" alt="Pantalon">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Pantalon</span>
                        <h3 class="product-title">Jogging Femme</h3>
                        <div class="product-sizes">
                            <div class="size-option">S</div>
                            <div class="size-option selected">M</div>
                            <div class="size-option">L</div>
                            <div class="size-option">XL</div>
                        </div>
                        <div class="product-price"><span class="current-price">5,000 XOF</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>(18)</span>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/robe.jpg" alt="Robe wax">
                        <span class="product-badge">-15%</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Robe</span>
                        <h3 class="product-title">Robe Femme</h3>
                        <div class="product-sizes">
                            <div class="size-option">36</div>
                            <div class="size-option selected">38</div>
                            <div class="size-option">40</div>
                            <div class="size-option">42</div>
                        </div>
                        <div class="product-price"><span class="current-price">8,500 XOF</span><span class="old-price">10,000 XOF</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>(15)</span>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/chemise.jpg" alt="Chemise homme">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Chemise</span>
                        <h3 class="product-title">Chemise Homme</h3>
                        <div class="product-sizes">
                            <div class="size-option">S</div>
                            <div class="size-option selected">M</div>
                            <div class="size-option">L</div>
                        </div>
                        <div class="product-price"><span class="current-price">5,500 XOF</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>(17)</span>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/jupe.jpg" alt="Jupe">
                        <span class="product-badge">Promo</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Jupe</span>
                        <h3 class="product-title">Jupe Longue</h3>
                        <div class="product-price"><span class="current-price">5,000 XOF</span></div>
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
                        <img src="img/ensemble.jpeg" alt="Ensemble">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Vêtements</span>
                        <h3 class="product-title">Ensemble Garçon</h3>
                        <div class="product-sizes">
                            <div class="size-option">18</div>
                            <div class="size-option">19</div>
                            <div class="size-option selected">20</div>
                            <div class="size-option">21</div>
                            <div class="size-option">22</div>
                        </div>
                        <div class="product-price"><span class="current-price">8,000 XOF</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>(14)</span>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/garçon.avif" alt="Boubou enfant">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Vêtements</span>
                        <h3 class="product-title">Boubou Enfant</h3>
                        <div class="product-price"><span class="current-price">7,000 XOF</span></div>
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
                        <img src="img/fill.jpg" alt="Ensemble">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Robe</span>
                        <h3 class="product-title">Robe Fille</h3>
                        <div class="product-sizes">
                            <div class="size-option">S</div>
                            <div class="size-option selected">M</div>
                            <div class="size-option">L</div>
                        </div>
                        <div class="product-price">
                            <span class="current-price">3,500 XOF</span>
                        </div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span>(17)</span>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/fille.webp" alt="Robe">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Ensemble</span>
                        <h3 class="product-title">Ensemble Fille</h3>
                        <div class="product-sizes">
                            <div class="size-option">S</div>
                            <div class="size-option selected">M</div>
                            <div class="size-option">L</div>
                        </div>
                        <div class="product-price"><span class="current-price">10,000 XOF</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>(13)</span>
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
                    <p>Votre marché en ligne sénégalais, offrant les meilleurs produits locaux et internationaux avec une livraison rapide et un service client exceptionnel.</p>
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