document.addEventListener('DOMContentLoaded', () => {
    const products = [
        { title: 'Savon Noir Traditionnel', url: 'soinsBeaute.html' },
        { title: 'Beurre de Karité Pur 250g', url: 'soinsBeaute.html' },
        { title: 'Huile de Baobab 100ml', url: 'soinsBeaute.html' },
        { title: 'Lait de Chèvre pour le Visage', url: 'soinsBeaute.html' },
        { title: 'Masque Capillaire au Moringa', url: 'soinsBeaute.html' },
        { title: 'Henné Naturel 500g', url: 'soinsBeaute.html' },
        { title: 'Crème Éclaircissante', url: 'soinsBeaute.html' },
        { title: 'Parfum Chanel N°5', url: 'soinsBeaute.html' },
        { title: 'Iphone Xr', url: 'technologie.html' },
        { title: 'Laptop HP 15s', url: 'technologie.html' },
        { title: 'Chargeur Solaire 20W', url: 'technologie.html' },
        { title: 'Iphone 16', url: 'technologie.html' },
        { title: 'TV LED Samsung 32"', url: 'technologie.html' },
        { title: 'Réfrigérateur LG 250L', url: 'technologie.html' },
        { title: 'Tablette Huawei MediaPad', url: 'technologie.html' },
        { title: 'Climatiseur 9000 BTU', url: 'technologie.html' },
        { title: 'Lait Infantile Bio 400g', url: 'enfantsBebes.html' },
        { title: 'Cubes Éducatifs en Bois', url: 'enfantsBebes.html' },
        { title: 'Couches Jetables Eco', url: 'enfantsBebes.html' },
        { title: 'Body Bébé Coton Bio', url: 'enfantsBebes.html' },
        { title: 'Lingettes Douces x72', url: 'enfantsBebes.html' },
        { title: 'Petits Pots Bio (Pomme Banane)', url: 'enfantsBebes.html' },
        { title: 'T-shirt Coton Bio Garçon', url: 'enfantsBebes.html' },
        { title: 'Berceau Bébé avec Moustiquaire', url: 'enfantsBebes.html' },
        { title: 'Riz Sangalkam 5kg', url: 'rizSangalkam.html' },
        { title: 'Huile d\'Arachide Dahra 1L', url: 'alimentaire.html' },
        { title: 'Poisson Séché Guédj 500g', url: 'alimentaire.html' },
        { title: 'Café Touba 250g', url: 'alimentaire.html' },
        { title: 'Jus de Bissap 1L', url: 'alimentaire.html' },
        { title: 'Pâte d\'Arachide Dakatine 400g', url: 'alimentaire.html' },
        { title: 'Couscous de Mil (Thiakry) 1kg', url: 'alimentaire.html' },
        { title: 'Mangue Séchée Casamance 200g', url: 'alimentaire.html' },
        { title: 'Sac Poubelle', url: 'nouveautes.html' },
        { title: 'Enceinte Bluetooth', url: 'nouveautes.html' },
        { title: 'Kit Nettoyage-Maison', url: 'nouveautes.html' },
        { title: 'Miel Naturel', url: 'nouveautes.html' },
        { title: 'Serviette Hygiènique', url: 'nouveautes.html' },
        { title: 'Montre', url: 'nouveautes.html' },
        { title: 'Sac en cuir', url: 'nouveautes.html' },
        { title: 'Youpla bébé', url: 'nouveautes.html' },
        { title: 'Tapis', url: 'nouveautes.html' },
        { title: 'Jogging Femme', url: 'vetements.html' },
        { title: 'Robe Femme', url: 'vetements.html' },
        { title: 'Chemise Homme', url: 'vetements.html' },
        { title: 'Jupe Longue', url: 'vetements.html' },
        { title: 'Ensemble Garçon', url: 'vetements.html' },
        { title: 'Boubou Enfant', url: 'vetements.html' },
        { title: 'Robe Fille', url: 'vetements.html' },
        { title: 'Ensemble Fille', url: 'vetements.html' },
        { title: 'Pack Soins Visage', url: 'promotions.html' },
        { title: 'Huile Parfum(12)', url: 'promotions.html' },
        { title: 'Shampoing Naturel', url: 'promotions.html' },
        { title: 'Sandales Wax Femme', url: 'promotions.html' },
        { title: 'Pack Jus Naturel 3x1L', url: 'promotions.html' },
        { title: 'Pagne Traditionnel (2m)', url: 'promotions.html' },
        { title: 'Tisane Bio Relaxante', url: 'promotions.html' },
        { title: 'Céréales Bio 500g', url: 'promotions.html' },
        { title: 'Parfum Victoriat-Secret', url: 'promotions.html' },
        { title: 'Pack Maquillage', url: 'promotions.html' }
    ];

    const searchInput = document.getElementById('search-input');
    const searchButton = document.querySelector('.search-bar button');
    const resultsContainer = document.getElementById('search-results');

    function clearResults() {
        resultsContainer.innerHTML = '';
        resultsContainer.style.display = 'none';
    }

    function displayResults(results) {
        resultsContainer.innerHTML = '';
        resultsContainer.style.boxShadow = '0 4px 8px rgba(0,0,0,0.1)';
        resultsContainer.style.borderRadius = '5px';
        resultsContainer.style.backgroundColor = '#fff';
        resultsContainer.style.padding = '10px';
        resultsContainer.style.maxHeight = '250px';
        resultsContainer.style.overflowY = 'auto';
        resultsContainer.style.width = '280px';
        resultsContainer.style.position = 'absolute';
        resultsContainer.style.zIndex = '1000';
        resultsContainer.style.marginTop = '5px';

        if (results.length === 0) {
            const noResult = document.createElement('p');
            noResult.textContent = 'Aucun résultat pour cet article.';
            noResult.style.color = '#cc0000';
            noResult.style.fontWeight = 'bold';
            resultsContainer.appendChild(noResult);

            const suggestionTitle = document.createElement('p');
            suggestionTitle.textContent = 'Suggestions :';
            suggestionTitle.style.marginTop = '10px';
            suggestionTitle.style.fontWeight = 'bold';
            resultsContainer.appendChild(suggestionTitle);

            const suggestionList = document.createElement('ul');
            suggestionList.style.listStyle = 'none';
            suggestionList.style.padding = '0';
            suggestionList.style.margin = '5px 0 0 0';

            products.forEach(product => {
                const li = document.createElement('li');
                li.style.marginBottom = '5px';
                const a = document.createElement('a');
                a.href = product.url;
                a.textContent = product.title;
                a.style.color = '#007bff';
                a.style.textDecoration = 'none';
                a.addEventListener('mouseover', () => a.style.textDecoration = 'underline');
                a.addEventListener('mouseout', () => a.style.textDecoration = 'none');
                li.appendChild(a);
                suggestionList.appendChild(li);
            });
            resultsContainer.appendChild(suggestionList);
        } else {
            const list = document.createElement('ul');
            list.style.listStyle = 'none';
            list.style.padding = '0';
            list.style.margin = '0';

            results.forEach(product => {
                const li = document.createElement('li');
                li.style.marginBottom = '8px';
                const a = document.createElement('a');
                a.href = product.url;
                a.textContent = product.title;
                a.style.color = '#007bff';
                a.style.textDecoration = 'none';
                a.style.fontWeight = '500';
                a.addEventListener('mouseover', () => a.style.textDecoration = 'underline');
                a.addEventListener('mouseout', () => a.style.textDecoration = 'none');
                li.appendChild(a);
                list.appendChild(li);
            });
            resultsContainer.appendChild(list);
        }
        resultsContainer.style.display = 'block';
    }

    function performSearch() {
        const query = searchInput.value.trim().toLowerCase();
        if (!query) {
            clearResults();
            return;
        }
        const filtered = products.filter(product =>
            product.title.toLowerCase().includes(query)
        );
        displayResults(filtered);
    }

    searchButton.addEventListener('click', (e) => {
        e.preventDefault();
        performSearch();
    });

    searchInput.addEventListener('keydown', (e) => {
        if (e.key === 'Enter') {
            e.preventDefault();
            performSearch();
        }
    });

    // Hide results when clicking outside
    document.addEventListener('click', (e) => {
        if (!resultsContainer.contains(e.target) && e.target !== searchInput && e.target !== searchButton) {
            clearResults();
        }
    });
});
