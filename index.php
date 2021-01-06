<?php include 'includes/header.php'; ?>;


<div class="container ">
    <div class="card-deck">
        <?php
        foreach ($mesProduits as $key => $produit) {
            if ($key <= 2) {
                showMe($produit);
            };
        }
        ?>
    </div>

    <a href="list.php" class=" btn btn-dark my-3">Liste</a>
</div>

<?php include 'includes/footer.php'; ?>