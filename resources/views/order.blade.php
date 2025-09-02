<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Passer Commande | e-Teranga</title>
    <link rel="stylesheet" href="{{asset ('styles/soinsBeaute.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        form label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }
        form input, form textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        form button {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            color: white;
            font-size: 1.1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        form button:hover {
            background-color: #1e7e34;
        }
        .message {
            margin-top: 20px;
            font-weight: bold;
            color: green;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Passer Commande</h1>
        <form id="order-form">
            <label for="name">Nom complet</label>
            <input type="text" id="name" name="name" required />

            <label for="email">Adresse e-mail</label>
            <input type="email" id="email" name="email" required />

            <label for="address">Adresse de livraison</label>
            <textarea id="address" name="address" rows="3" required></textarea>

            <label for="phone">Numéro de téléphone</label>
            <input type="tel" id="phone" name="phone" required />

            <button type="submit">Confirmer la commande</button>
        </form>
        <div class="message" id="order-message"></div>
    </div>

    <script src="{{asset ('js/cart.js')}}"></script>
    <script src="{{asset ('js/search.js')}}"></script>
    <script>
        document.getElementById('order-form').addEventListener('submit', function(e) {
            e.preventDefault();

            // Normally here you would send the order data to a backend server.
            // For this demo, we just clear the cart and show a confirmation message.

            localStorage.removeItem('eTerangaCart');
            document.getElementById('order-message').textContent = 'Merci pour votre commande ! Nous vous contacterons bientôt.';
            this.reset();
            // Update cart count in header if present
            const cartCountElem = document.getElementById('cart-count');
            if (cartCountElem) {
                cartCountElem.textContent = '0';
            }
        });
    </script>
</body>
</html>
