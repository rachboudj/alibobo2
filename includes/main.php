<main>
    <h1>Main</h1>
<?php

// Syntaxe conventionnelle
// if (isset($_GET['page'])) {
//     $page = $_GET['page'];
// }
// else {
//     $page = "accueil";
// }

// // Opérateur ternaire
// $page = isset($_GET['page']) ? $_GET['page'] : "accueil";

// Null coalescent operator
$page = $_GET['page'] ?? "accueil";

dump($page);

?>
</main>