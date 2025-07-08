1/ Créer un nouveau projet Laravel

composer create-project laravel/laravel projet-ecommerce
cd projet-ecommerce

2/Étape 2 : Configurer la base de données
2.1 Ouvre le fichier .env et configure la base
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=projet_ecommerce
DB_USERNAME=ton_utilisateur_mysql
DB_PASSWORD=ton_mot_de_passe

3/3.1 Exemple de génération d’un modèle avec migration :
bash
Copier
Modifier
php artisan make:model User -m
php artisan make:model Client -m
php artisan make:model Produit -m
php artisan make:model Commande -m
# etc.

3/3.2 Ensuite dans database/ migration:
 Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('email')->unique();
    $table->string('password');
    $table->string('nom')->nullable();
    $table->string('prenom')->nullable();
    $table->string('adresse')->nullable();
    $table->string('numtel')->nullable();
    $table->enum('role', ['admin', 'visiteur', 'client', 'livreur']);
    $table->timestamps();
});

# 1. Annulez toutes les migrations
php artisan migrate:reset

# 2. Lancez les migrations dans le bon ordre
php artisan migrate

11/ insatller laravel breeze
composer require laravel/breeze --dev
puis: php artisan breeze:install
npm install
npm run dev
php artisan migrate
composer dump-autoload
pour creer le controller:php artisan make:controller Auth/RegisteredUserController
