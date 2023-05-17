<?php
include __DIR__ . '/Models/Product.php';
?>


<?php include './Components/header.php' ?>

<main>
    <div class="container my-5">
        <div class="row bg-success p-2 rounded-top-4">
            <h1 class="text-white">Oggetti per cane!</h1>

            <?php foreach ($products as $product) { ?>
                <?php if ($product->animal == 'dog') { ?>
                    <?php include './Components/card.php' ?>
                <?php } ?>
            <?php } ?>

        </div>

        <div class="row bg-danger p-2 rounded-bottom-4">
            <h1 class="text-white">Oggetti per gatto!</h1>

            <?php foreach ($products as $product) { ?>
                <?php if ($product->animal == 'cat') { ?>
                    <?php include './Components/card.php' ?>
                <?php } ?>
            <?php } ?>

        </div>
    </div>
</main>

<?php include './Components/footer.php' ?>