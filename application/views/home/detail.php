<section class="py-5">

            <div class="container px-4 px-lg-5 mt-5">
                <div class="row  justify-content-center">
                   
                    <div class="col-6 mb-5">
                        <img class="img" src="https://dummyimage.com/400x300/dee2e6/6c757d.jpg" width = "100%"  alt="..." />
                     </div>
                     <div class="col-6">
                         <h1><?=$products['product_name'];?></h1>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam consectetur quod non id dolorem ea expedita fugiat assumenda? 
                             Maxime sit reiciendis accusamus! Magni cum doloremque doloribus, ipsum officia mollitia quia.</p>
                     </div>

                     <div class="col mb-2" style="padding: left 10px; " >
                                <a href="<?= base_url(); ?>cart/CreateCart/<?=$products['id'];?>" class="btn btn-primary" style="float :right;">Add Cart</a>
                                <a href="<?= base_url(); ?>product/FormEditProduct/<?=$products['id'];?>" class="btn btn-primary" style="float :right;">Edit Product</a>
                             </div>

                </div>


            </div>

            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                     <?php foreach($list as $prod) : ?>

                    <div class="col mb-5">

                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?= $prod['product_name'];?> </h5>
                                    <!-- Product price-->
                                   Rp. <?= $prod['product_price'];?> 
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a href="<?= base_url(); ?>product/ViewDetail/<?=$prod['id'];?>"class="btn btn-outline-dark mt-auto" href="#">View Product</a></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>

                </div>
            </div>


</section>




