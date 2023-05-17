<div class="col-3 p-2">
    <div class="card">
        <div class="card-header">
            <img src="<?php echo $product->image ?>" alt="<?php echo $product->name ?>" class="w-100 h-100">
        </div>

        <div class="card-body">
            <h3>Nome prodotto:
                <span class="text-decoration-underline">
                    <?php echo $product->name ?>
                </span>
            </h3>

            <h3>
                Prezzo:
                <?php echo $product->price ?> &euro;
            </h3>

            <h3>
                Tipo:
                <?php echo $product->type ?>
            </h3>

            <?php if ($product->animal == 'dog') { ?>
                <p>
                    <i class="fa-solid fa-dog"></i>
                </p>
            <?php } ?>

            <?php if ($product->animal == 'cat') { ?>
                <p>
                    <i class="fa-solid fa-cat"></i>
                </p>
            <?php } ?>
        </div>
    </div>
</div>