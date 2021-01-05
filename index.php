<?php
    // On peut inclure les fichiers php que l'on souhaite où l'on veut,
    // s'ils n'affiche rien directement (sinon, il faut les inclure là où l'on souhaite afficher leur contenu ;) )
    // L'important est que leur contenu soit inclu avant qu'on en ait besoin dans ce fichier (par exemple, on doit avoir inclu la variable $mesProduits avant de nous en servir dans cette page)
    // Par habitude, on importe d'abord les variables (qui pourraient être utilisées par les fonctions), puis les fonctions.
    include 'vars.php';
    include 'functions.php';
?>
<html lang="fr">
    <body>
        <!-- La balise table défini le cadre du table, tr une ligne et th des cellules de titre (affiché en gras et avec du texte centré par défaut) -->
        <table>
            <tr>
                <th>
                    Nom du produit
                </th>
                <th>
                    Prix HT
                </th>
                <th>
                    Prix TTC
                </th>
                <th>
                    Description
                </th>
            </tr>
            <!-- n'importe où dans notre html, on peut faire appel à php pour ajouter du texte, faire des calculs, etc. -->
            <?php
                // pour appeler les différentes lignes de notre tableau, on parcourt le tableau $mesProduits, 
                // défini dans le fichier vars.php (disponible dans ce fichier grâce à l'import en début de fichier)
                foreach($mesProduits as $produit) {
                    // On appelle la fonction afficheProduit, en passant en paramètre le produit en cours
                    afficheProduit($produit);
                }
            ?>
        </table>
    </body>
</html>