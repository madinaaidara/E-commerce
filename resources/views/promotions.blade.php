<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotions - e-Teranga</title>
    <link rel="stylesheet" href="{{asset ('styles/promotions.css')}}">
    <link rel="icon" type="image/png" href="{{asset ('images/logo.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<script src="{{asset ('js/cart.js')}}"></script>
<script src="{{asset ('js/search.js')}}"></script>
    <header>
        <div class="top-bar">
            <div class="container top-bar-content">
                <div><i class="fas fa-phone-alt"></i> +221 33 800 00 00</div>
                <div><i class="fas fa-envelope"></i> contact@e-teranga.sn</div>
                <div><i class="fas fa-map-marker-alt"></i> Dakar, Sénégal</div>
            </div>
        </div>
        <div class="main-header">
            <div class="container header-content">
                <div class="logo">
                    <img src="{{asset ('images/logo.png')}}" alt="Logo e-Teranga">
                    <h1>e-<span>Teranga</span></h1>
                </div>
                <div class="search-bar">
                    <input type="text" id="search-input" placeholder="Rechercher des articles...">
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

    <section class="category-header" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://t4.ftcdn.net/jpg/02/62/03/53/360_F_262035364_gGi8uJsPl9uljis8C6oxI0w6AM7MKDLq.jpg');">
    <div class="container">
        <h1>Nos Promotions</h1>
    </div> <!-- ✅ fermeture de .container -->
    </section> <!-- ✅ fermeture de la section -->

    <section class="products-section">
        <div class="container">
            <div class="filter-bar">
                <div class="filter-group">
                    <label for="prix">Prix</label>
                    <select id="prix">
                        <option>Tout</option>
                        <option>Moins de 5 000 XOF</option>
                        <option>5 000 - 10 000 XOF</option>
                        <option>Plus de 10 000 XOF</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label for="tri">Trier par</label>
                    <select id="tri">
                        <option>Populaires</option>
                        <option>Prix croissant</option>
                        <option>Prix décroissant</option>
                    </select>
                </div>
            </div>

            <div class="products">
                <!-- Produit en promotion -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/soins.jpg" alt="Produit promo">
                        <span class="product-badge">Promo</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Pack Soins Visage</h3>
                        <p class="product-price"><span class="current-price">16 500 XOF</span> <s>20 000 XOF</s></p>
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
                        <img src="img/huile.jpg" alt="Produit promo">
                        <span class="product-badge">Promo</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Huile Parfum</h3>
                        <p class="product-price"><span class="current-price">9 500 XOF</span> <s>12 000 XOF</s></p>
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
                        <img src="img/garnier.jpg" alt="Produit promo">
                        <span class="product-badge">Promo</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Shampoing Naturel</h3>
                        <p class="product-price"><span class="current-price">3 800 XOF</span> <s>5 500 XOF</s></p>
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
                        <img src="img/sandale.jpg" alt="Produit promo">
                        <span class="product-badge">Promo</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Sandales Wax Femme</h3>
                        <p class="product-price"><span class="current-price">5 500 XOF</span> <s>7 000 XOF</s></p>
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
                        <img src="img/jus.webp" alt="Produit promo">
                        <span class="product-badge">Promo</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Pack Jus Naturel 3x1L</h3>
                        <p class="product-price"><span class="current-price">8 500 XOF</span> <s>10 500 XOF</s></p>
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
                        <img src="img/pagne.jpg" alt="Produit promo">
                        <span class="product-badge">Promo</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Pagne Traditionnel (2m)</h3>
                        <p class="product-price"><span class="current-price">3 500 XOF</span> <s>5 000 XOF</s></p>
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
                        <img src="img/tisane.webp" alt="Produit promo">
                        <span class="product-badge">Promo</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Tisane Bio Relaxante</h3>
                        <p class="product-price"><span class="current-price">1 300 XOF</span> <s>1 800 XOF</s></p>
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
                        <img src="img/cereale.png" alt="Produit promo">
                        <span class="product-badge">Promo</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Céréales Bio 500g</h3>
                        <p class="product-price"><span class="current-price">1 500 XOF</span> <s>2 000 XOF</s></p>
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
                        <img src="img/parfum.webp" alt="Produit promo">
                        <span class="product-badge">Promo</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Parfum Victoriat-Secret</h3>
                        <p class="product-price"><span class="current-price">10 500 XOF</span> <s>15 000 XOF</s></p>
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
                        <img src="img/coffret.jpg" alt="Produit promo">
                        <span class="product-badge">Promo</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Pack Maquillage </h3>
                        <p class="product-price"><span class="current-price">15 500 XOF</span> <s>20 000 XOF</s></p>
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
