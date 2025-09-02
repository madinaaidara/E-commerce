<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('home');
})->name('home');
*/
//Route pour la page dashboard

//Route pour l'authentification gerer par breeze de laravel
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    // Exemples :
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('produits', AdminProduitController::class);
    
    // Ajoutez d’autres routes pour catégories, commandes, etc.
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
/*
//Route pour les roles
if (auth()->user()->isAdmin()) {
    return redirect()->route('admin.dashboard');
} elseif (auth()->user()->isClient()) {
    return redirect()->route('accueil');
} elseif (auth()->user()->isLivreur()) {
    return redirect()->route('livreur.dashboard');
}

*/  

//Route pour la page acceuil apres avoir lancer le serveur
Route::get('/', function () {
    return view('accueil');
})->name('accueil');

//Route pour les categories
Route::get('/soinsBeaute',function (){
    return view('soinsBeaute');
})->name('soinsBeaute');

Route::get('/sérums',function (){
    return view('sérums');
})->name('sérums');

Route::get('/accessoirescapillaires',function (){
    return view('accessoirescapillaires');
})->name('accessoirescapillaires');

Route::get('/contact',function (){
    return view('contact');
})->name('contact');

Route::get('/madeinSenegal',function (){
    return view('madeinSenegal');
})->name('madeinSenegal');

Route::get('/accueil',function (){
    return view('accueil');
})->name('accueil');

Route::get('/huilesnaturelles',function (){
    return view('huilesnaturelles');
})->name('huilesnaturelles');

Route::get('/shampoings',function (){
    return view('shampoings');
})->name('shampoings');

Route::get('/nouveautes',function (){
    return view('nouveautes');
})->name('nouveautes');

Route::get('/rizSangalkam',function (){
    return view('rizSangalkam');
})->name('rizSangalkam');

Route::get('/promotions',function (){
    return view('promotions');
})->name('promotions');

Route::get('/order',function (){
    return view('order');
})->name('order');

Route::get('/panier',function (){
    return view('panier');
})->name('panier');

Route::get('/poudresnaturels',function (){
    return view('poudresnaturels');
})->name('poudresnaturels');

