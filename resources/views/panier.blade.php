<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Panier | e-Teranga</title>
    <link rel="stylesheet" href="{{asset ('styles/soinsBeaute.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        #empty-cart-message {
            display: none;
            margin-top: 20px;
            font-size: 1.2em;
            color: #555;
        }
        #empty-cart-message p {
            margin-bottom: 10px;
        }
        #empty-cart-message .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #FFC107;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        #empty-cart-message .btn:hover {
            background-color: green;
        }
        .cart-item {
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .cart-item h3 {
            margin: 0;
            flex: 2;
        }
        .cart-item p {
            margin: 0 10px;
            flex: 1;
        }
        .quantity-controls {
            display: flex;
            align-items: center;
            flex: 1;
        }
        .quantity-controls button {
            width: 30px;
            height: 30px;
            font-size: 18px;
            font-weight: bold;
            border: 1px solid #ccc;
            background-color: white;
            cursor: pointer;
            user-select: none;
        }
        .quantity-controls span {
            margin: 0 10px;
            min-width: 20px;
            text-align: center;
        }
        #cart-total {
            font-weight: bold;
            margin-top: 20px;
            font-size: 1.2em;
        }
        #place-order-btn {
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        #place-order-btn:hover {
            background-color: #1e7e34;
        }
    </style>
</head>
<body>
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
                        <img src="{{asset ('panier')}}" alt="e-Teranga Logo" />
                        <h1>e-<span>Teranga</span></h1>
                    </div>
                    <div class="search-bar">
                    <input type="text" id="search-input" placeholder="Rechercher des articles..." />
                    <button><i class="fas fa-search"></i></button>
                    <div id="search-results" style="position: absolute; background: white; border: 1px solid #ccc; max-height: 250px; overflow-y: auto; width: 280px; display: none; z-index: 1000; margin-top: 5px; padding: 10px; border-radius: 5px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);"></div>
                </div>
                    <div class="user-actions">
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

    <main>
        <section class="container">
            <h1>Votre Panier</h1>
            <div id="cart-container">
                <!-- Cart items will be dynamically inserted here -->
            </div>
            <div id="cart-total"></div>
            <div id="empty-cart-message">
                <p>Panier vide, veuillez visiter la boutique.</p>
                <a href="{{asset('accueil')}}" class="btn">Aller à la boutique</a>
            </div>
            <a href="{{ route('order') }}" id="place-order-btn">Passer la commande</a>
        </section>
    </main>

<script src="{{asset ('js/search.js')}}"></script>
<script src="{{asset ('js/cart.js')}}"></script>
</body>
</html>
