<h1>Articles</h1>
<?php

$requeteCategoriesNiveau1 = "
    SELECT *
    FROM categories
    WHERE  categories_id_categorie=0
    ORDER BY libelle
";

$connexionCategories = new Sql();

$resultatCaterogies = $connexionCategories->select($requeteCategoriesNiveau1);

$menuCategories = "<ul>";

for ($i = 0 ; $i < count($resultatCaterogies) ; $i++) {
    $menuCategories .= "<li>";
    $menuCategories .= "<a href=\"index.php?page=articles&amp;id_categorie=" . $resultatCaterogies[$i]['id_categorie'] . "\">";
    $menuCategories .= $resultatCaterogies[$i]['libelle'];
    $menuCategories .= "</a>";
    $menuCategories .= "</li>";
}

$menuCategories .= "<ul>";

echo $menuCategories;