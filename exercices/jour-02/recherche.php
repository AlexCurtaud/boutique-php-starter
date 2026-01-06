<?php
$categories = ["Vêtement", "Chaussures", "Accessoires", "Sport"];
// in_array() retourne 1 si c'est vrai. Il ne retourne rien si c'est faux.
echo in_array("Chaussures", $categories);

// in_array() dans une fonction :
function existe($mot, $categories)
{
    if (in_array($mot, $categories))
        echo "<br>Trouvé";
    else
        echo "<br>Non trouvé";
}

existe("boost", $categories);

// array_search retourne l'index de la l'objet dans le tableau
echo array_search("Sport", $categories);
