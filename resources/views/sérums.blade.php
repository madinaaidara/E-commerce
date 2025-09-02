<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sérums | Téranga-Haire</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset ('styles/technologie.css')}}">
    <link rel="icon" type="image/png" href="{{asset ('images/logo.png')}}">
<script src="js/cart.js"></script>
<script src="js/search.js"></script>
</head>
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
                        <img src="{{asset ('images/logo.png')}}" alt=" Téranga-Haire">
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
    <section class="category-header" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.pexels.com/photos/28994388/pexels-photo-28994388.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');">
        <div class="container">
            <h1>Sérums Cheveux</h1>
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
                    <label>Catégorie:</label>
                    <select>
                        <option>Toutes</option>
                        <option>Téléphones</option>
                        <option>Ordinateurs</option>
                        <option>Accessoires</option>
                        <option>Électroménager</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <label>Marque:</label>
                    <select>
                        <option>Toutes</option>
                        <option>Tecno</option>
                        <option>Samsung</option>
                        <option>Infinix</option>
                        <option>Itel</option>
                        <option>Nokia</option>
                    </select>
                </div>
                
                <div class="filter-group">
                    <span>30 produits</span>
                </div>
            </div>
            
            <div class="products">
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/iphone.jpg" alt="Smartphone">
                        <span class="product-badge">-30%</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Téléphones</span>
                        <h3 class="product-title">Iphone Xr</h3>
                        <div class="product-specs">
                            <div><i class="fas fa-mobile-alt"></i> 6.8" HD+</div>
                            <div><i class="fas fa-microchip"></i> 4GB RAM / 64GB</div>
                        </div>
                        <div class="product-price"><span class="current-price">80,000 XOF</span><span class="old-price">120,000 XOF</span></div>
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
                        <img src="img/laptop.jpeg" alt="Ordinateur portable">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Ordinateurs</span>
                        <h3 class="product-title">Laptop HP 15s</h3>
                        <div class="product-specs">
                            <div><i class="fas fa-laptop"></i> 15.6" HD</div>
                            <div><i class="fas fa-microchip"></i> 8GB RAM / 256GB SSD</div>
                            <div><i class="fas fa-microchip"></i> Intel Core i3</div>
                        </div>
                        <div class="product-price"><span class="current-price">150,000 XOF</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>(18)</span>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/chargeur.webp" alt="Chargeur solaire">
                        <span class="product-badge">Promo</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Accessoires</span>
                        <h3 class="product-title">Chargeur Solaire 20W</h3>
                        <div class="product-specs">
                            <div><i class="fas fa-solar-panel"></i> Panneau solaire</div>
                            <div><i class="fas fa-battery-full"></i> 10,000mAh</div>
                            <div><i class="fas fa-bolt"></i> Charge rapide</div>
                        </div>
                        <div class="product-price"><span class="current-price">35,000 XOF</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>(11)</span>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/iphe.jpeg" alt="Écouteurs">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Téléphones</span>
                        <h3 class="product-title">Iphone 16</h3>
                        <div class="product-specs">
                            <div><i class="fas fa-battery-full"></i> 24h autonomie</div>
                        </div>
                        <div class="product-price"><span class="current-price">750,000 XOF</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span>(17)</span>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/TV.jpg" alt="Télévision">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Électroménager</span>
                        <h3 class="product-title">TV LED Samsung 32"</h3>
                        <div class="product-specs">
                            <div><i class="fas fa-tv"></i> 32" HD Ready</div>
                            <div><i class="fas fa-wifi"></i> Smart TV</div>
                            <div><i class="fas fa-plug"></i> 2 ports USB</div>
                        </div>
                        <div class="product-price"><span class="current-price">200,000 XOF</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>(15)</span>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/refrigerateur.webp" alt="Réfrigérateur">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Électroménager</span>
                        <h3 class="product-title">Réfrigérateur LG 250L</h3>
                        <div class="product-specs">
                            <div><i class="fas fa-snowflake"></i> 250 Litres</div>
                            <div><i class="fas fa-bolt"></i> Classe A+</div>
                            <div><i class="fas fa-cube"></i> Congélateur haut</div>
                        </div>
                        <div class="product-price"><span class="current-price">320,000 XOF</span></div>
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
                        <img src="img/tab.jpg" alt="Tablette">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Tablettes</span>
                        <h3 class="product-title">Tablette Huawei MediaPad</h3>
                        <div class="product-specs">
                            <div><i class="fas fa-tablet-alt"></i> 10.1" HD</div>
                            <div><i class="fas fa-microchip"></i> 3GB RAM / 32GB</div>
                            <div><i class="fas fa-battery-full"></i> 5100mAh</div>
                        </div>
                        <div class="product-price"><span class="current-price">150,000 XOF</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span>(19)</span>
                        </div>
                        <button class="add-to-cart">Ajouter au panier</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/clim.jpg" alt="Climatiseur">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Électroménager</span>
                        <h3 class="product-title">Climatiseur 9000 BTU</h3>
                        <div class="product-specs">
                            <div><i class="fas fa-wind"></i> 9000 BTU</div>
                            <div><i class="fas fa-bolt"></i> Classe A</div>
                            <div><i class="fas fa-cog"></i> Inverter</div>
                        </div>
                        <div class="product-price"><span class="current-price">280,000 XOF</span><span class="old-price">310,000 XOF</span></div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span>(11)</span>
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
                        <li><i class="fas fa-envelope"></i> contact@e-teranga.sn</li>
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
