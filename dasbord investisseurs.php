<html>
<head>
    <title>Dashboard - Agriculteur</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">  

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 flex">
    <!-- Sidebar -->
    <div class="bg-green-500 text-white w-64 min-h-screen p-4">
        <h2 class="text-2xl font-bold mb-6">Dashboard Agriculteur</h2>
        <nav>
            <ul>
                <li class="mb-4">
                    <a href="#mes-projets" class="flex items-center p-2 hover:bg-green-700 rounded">
                        <i class="fas fa-project-diagram mr-2"></i> Mes Projets
                    </a>
                </li>
                <li class="mb-4">
                    <a href="#nouveau-projet" class="flex items-center p-2 hover:bg-green-700 rounded">
                        <i class="fas fa-plus mr-2"></i> Nouveau Projet
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6">
        <!-- Mes Projets Section -->
        <section id="mes-projets" class="mb-8">
            <h2 class="text-2xl font-bold text-green-700 mb-4">Mes Projets</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Project Card -->
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-2">Projet 1</h3>
                    <p class="text-gray-700 mb-2">Description du projet 1</p>
                    <p class="text-gray-700 mb-2">Nombre d'investisseurs: 10</p>
                    <div class="mb-2">
                        <label class="block text-gray-700">Progression des fonds:</label>
                        <div class="w-full bg-gray-200 rounded-full h-4">
                            <div class="bg-green-500 h-4 rounded-full" style="width: 75%"></div>
                        </div>
                    </div>
                    <button class="bg-green-700 text-white p-2 rounded mt-2">Voir Détails</button>
                    <button class="bg-blue-900 text-white p-2 rounded mt-2">Modifier</button>
                    <button class="bg-red-500 text-white p-2 rounded mt-2">Suspendre</button>
                </div>
                <!-- Repeat for other projects -->
            </div>
        </section>

        <!-- Nouveau Projet Section -->
        <section id="nouveau-projet" class="mb-8">
            <h2 class="text-2xl font-bold text-green-700 mb-4">Ajouter un Nouveau Projet</h2>
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <form>
                    <div class="mb-4">
                        <label for="projectName" class="block text-gray-700">Nom du Projet:</label>
                        <input type="text" id="projectName" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                    </div>
                    <div class="mb-4">
                        <label for="projectDescription" class="block text-gray-700">Description:</label>
                        <textarea id="projectDescription" class="w-full p-2 border border-gray-300 rounded mt-1" rows="4" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="fundingGoal" class="block text-gray-700">Objectif de Financement:</label>
                        <input type="number" id="fundingGoal" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                    </div>
                    <button type="submit" class="bg-green-700 text-white p-2 rounded mt-4">Ajouter Projet</button>
                </form>
            </div>
        </section>
    </div>
</body>
</html>