
<?php var_dump($products);?>



<div class="row mt-3">
    <div class="col-md-6">
        <h3> Daftar Product </h3>
        <ul class="list-group">
            <?php foreach($products as $prod) : ?>

                <li class="list-group-item"><?= $prod['product_name'];?> </li>

            <?php endforeach;?>

            </ul>

        </div>
    </div>
</div>

