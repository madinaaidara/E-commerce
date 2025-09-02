<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Made in Senegal - e-Teranga</title>
    <link rel="stylesheet" href="{{asset ('styles/promotions.css')}}">
    <link rel="icon" type="image/png" href="{{asset ('images/logo.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<script src="js/cart.js"></script>
<script src="js/search.js"></script>
    <!-- Header et Menu -->
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
                    <div id="search-results" style="position: absolute; background: white; border: 1px solid #ccc; max-height: 250px; overflow-y: auto; width: 280px; display: none; z-index: 1000; margin-top: 5px; padding: 10px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);"></div>
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
    <!-- Category Header -->
    <section class="category-header" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://s.rfi.fr/media/display/7a1db230-1561-11ea-bbe1-005056bf7c53/w:1280/p:16x9/madeinsenegal_0.jpg');">
        <div class="container">
            <h1>Made in Sénégal</h1>
        </div>
    </section>

    <!-- Navigation locale -->
    <nav class="local-nav">
        <div class="container">
            <a href="#details" style="font-size: 1.5em; padding: 12px 30px; background-color: #FFC107; color: white; border-radius: 8px; margin-right: 15px; text-decoration: none; font-weight: bold; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: background-color 0.3s ease;">En Détail</a>
            <a href="#gros" style="font-size: 1.5em; padding: 12px 30px; background-color: #28a745; color: white; border-radius: 8px; text-decoration: none; font-weight: bold; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: background-color 0.3s ease;">En Gros</a>
        </div>
    </nav>

    <!-- Section En Détail -->
    <section id="details" class="products-section">
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
                        <img src="img/Araw-de-Mil.webp" alt="Arraw local">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Alimentaire</span>
                        <h3 class="product-title">Arraw</h3>
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
                <!-- Produit 2 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/kinkeliba.webp" alt="kinkeliba">
                        <span class="product-badge">Naturel</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Alimentaire</span>
                        <h3 class="product-title">Kinkéliba</h3>
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
                <!-- Produit 3 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/flacons.jpg" alt="huiles">
                        <span class="product-badge">Bio</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Alimentaire</span>
                        <h3 class="product-title">Huiles alimentaires</h3>
                        <div class="product-price"><span class="current-price">2,000 XOF</span></div>
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
                        <img src="img/boucle.webp" alt="Café Touba">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Accessoire</span>
                        <h3 class="product-title">Boucle d'oreilles</h3>
                        <div class="product-price"><span class="current-price">3,200 XOF</span></div>
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
                        <img src="img/textile.jpg" alt="Jus de Bissap">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Textile</span>
                        <h3 class="product-title">Sac africain</h3>
                        <div class="product-price"><span class="current-price">4,500 XOF</span></div>
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
                        <img src="img/mil.jpg" alt="Pâte d'Arachide Dakatine">
                        <span class="product-badge">Bio</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Alimentaire</span>
                        <h3 class="product-title">Couscous de mil (Thiéré)</h3>
                        <div class="product-price"><span class="current-price">3,000 XOF</span></div>
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
                        <img src="img/oud.avif" alt="Couscous de Mil">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Soins Corps</span>
                        <h3 class="product-title">Parfum OUD</h3>
                        <div class="product-price"><span class="current-price">9,800 XOF</span></div>
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
                        <img src="img/condimennt.jpeg" alt="legumes">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Alimentaire</span>
                        <h3 class="product-title">Condiment</h3>
                        <div class="product-price">
                            <span class="current-price">2,200 XOF</span>
                        </div>
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
    </section>

    <!-- Section En Gros -->
    <section id="gros" class="products-section">
        <div class="container">
            <h2>Produits Made in Senegal - En Gros</h2>
            <div class="products">
                <!-- Produit 1 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="img/fruits.jpg" alt="fruits">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Alimentaire</span>
                        <h3 class="product-title">Panier Fruits</h3>
                        <div class="product-price"><span class="current-price">15,000 XOF</span></div>
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
                        <img src="img/leg.jpg" alt="leg">
                        <span class="product-badge">Local</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Alimentaire</span>
                        <h3 class="product-title">Panier Légumes </h3>
                        <div class="product-price"><span class="current-price">10,200 XOF</span></div>
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
                        <img src="img/mer.jpg" alt="huiles">
                        <span class="product-badge">Local</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Alimentaire</span>
                        <h3 class="product-title">Fruit de mer</h3>
                        <div class="product-price"><span class="current-price">15,000 XOF</span></div>
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
                        <img src="img/locaux.jfif" alt="jus">
                        <span class="product-badge">Naturel</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Alimentaire</span>
                        <h3 class="product-title">Jus Locaux</h3>
                        <div class="product-price"><span class="current-price">3 à 5,200 XOF</span></div>
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
                        <img src="img/sucre.jpg" alt="sucre">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Alimentaire</span>
                        <h3 class="product-title">Sac de sucre 50kg</h3>
                        <div class="product-price"><span class="current-price">10,500 XOF</span></div>
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
                        <img src="img/niébé.jpeg" alt="Pâte d'Arachide Dakatine">
                        <span class="product-badge">Bio</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Alimentaire</span>
                        <h3 class="product-title">Niébé Blanc</h3>
                        <div class="product-price"><span class="current-price">1kg 1,000 XOF</span></div>
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
                        <img src="img/mill.jpg" alt="Couscous de Mil">
                        <span class="product-badge">Nouveau</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Alimentaire</span>
                        <h3 class="product-title">Mil/Sorgho</h3>
                        <div class="product-price"><span class="current-price">1kg 1,000 XOF</span></div>
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
                        <img src="img/oignon.jpg" alt="Mangue Séchée Casamance">
                        <span class="product-badge">Local</span>
                        <div class="product-actions">
                            <button><i class="far fa-heart"></i></button>
                            <button><i class="fas fa-search"></i></button>
                            <button><i class="fas fa-sync-alt"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                        <span class="product-category">Alimentaire</span>
                        <h3 class="product-title">Sac Oignon 25kg</h3>
                        <div class="product-price"><span class="current-price">7,200 XOF</span></div>
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
