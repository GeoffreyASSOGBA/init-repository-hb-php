<?php 
include'includes/functions.php';
include'includes/vars.php';
?>
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
            
            <?php
                foreach($mesProduits as $produit) {
                    afficheProduit($produit);
                }
            ?>
