<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    public function index()
    {
        $produits = Produit::all();
        return view('admin.produits', compact('produits'));
    }

    public function create()
    {
        return view('admin.produits-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prix' => 'required|numeric',
            'categorie' => 'required',
        ]);
        Produit::create($request->all());
        return redirect()->route('produits.index')->with('success', 'Produit ajouté');
    }

    public function edit($id)
    {
        $produit = Produit::findOrFail($id);
        return view('admin.produits-edit', compact('produit'));
    }

    public function update(Request $request, $id)
    {
        $produit = Produit::findOrFail($id);
        $produit->update($request->all());
        return redirect()->route('produits.index')->with('success', 'Produit modifié');
    }

    public function destroy($id)
    {
        Produit::destroy($id);
        return redirect()->route('produits.index')->with('success', 'Produit supprimé');
    }
}