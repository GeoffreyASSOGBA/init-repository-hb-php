<?php
/**
 * Pour calculer un prix HT à partir du prix TTC, le calcul est :
 * $prix / (1 + (20/100)) si la TVA est de 20%. On peut le simplifier en $prix / 1.2
 * 
 * // Les deux commentaires ci-dessous sont standards. Ils indiquent les types des paramètres attendus par la fonction et son type de retour. Ils ne sont pas obligatoires, mais peuvent aider à la relecture du code
 * @var float $prix
 * 
 * @return float
 */
function prixHT($prix) {
    $prixHt = $prix / 1.2;
    return number_format($prixHt, 2, ',', ' '); // number_format() permet de formatter le nombre pour qu'il ait toujours 2 chiffres après la virgule (et force que ce soit une virgule ;) ). Dans ce cas, on ajoute aussi un espace pour séparer les milliers
}

/**
 * Ici, on fait un affichage purement en PHP.
 * On affiche une ligne du tableau HTML, à partir d'une ligne du tableau PHP principal.
 * 
 * @var array $produit
 * 
 * @return void Ce void indique qu'il s'agit d'une procédure, et non d'une fonction. void indique qu'elle ne retourne rien, même pas null !
 */
function afficheProduit($produit) {
    // Si le prix est inférieur ou égale à douze, la couleur (du prix) va être verte, bleue sinon
    if ($produit['price'] <= 12) {
        $color = "green";
    } else {
        $color = "blue";
    }
    // Ici, le but est d'écrire une grande chaîne de caractère en php avec echo. 
    // On peut également écrire plusieurs chaînes plus courtes, les unes après les autres, pour éviter de concaténer à tout va.
    echo '
    <tr>
        <td>
            '.$produit[PRODUCT_NAME].
        '</td>
        <td>
            '.prixHT($produit['price']).'€
        </td>
        <td style="color:'.$color.'">
            '.$produit['price'].'€
        </td>
        <td>
            '.$produit['description'].'
        </td>
    </tr>';
}