<section class="py-5">

        <div class="container px-4 px-lg-5 mt-5">
        <div class="col mb-5">


            <div id="my-pics" class="carousel slide" data-ride="carousel" style="width:50%;margin:auto;">

            <!-- Indicators -->
                 <ol class="carousel-indicators">
                 <li data-target="#my-pics" data-slide-to="0" class="active"></li>
                 <li data-target="#my-pics" data-slide-to="1"></li>
                  <li data-target="#my-pics" data-slide-to="2"></li>
            </ol>

            <!-- Content -->
            <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="item active">
                 <img src="https://dummyimage.com/600x300/dee2e6/6c757d.jpg" style="width:100%" alt="Sunset over beach">
            </div>

            <!-- Slide 2 -->
            <div class="item">
                 <img src="https://dummyimage.com/600x300/dee2e6/6c757d.jpg" style="width:100%" alt="Rob Roy Glacier">
            </div>

            <!-- Slide 3 -->
            <div class="item">
                 <img src="https://dummyimage.com/600x300/dee2e6/6c757d.jpg" style="width:100%" alt="Longtail boats at Phi Phi">
            </div>

            </div>

            <!-- Previous/Next controls -->
            <a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">
                 <span class="icon-prev" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#my-pics" role="button" data-slide="next">
                  <span class="icon-next" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
            </a>

            </div>
        </div>
         </div>
         <div class="container px-7 px-lg-7 mt-5">

         <div class="col mb-5">

             <h1 style="text-align:center;"> Onero Store </h1>
             <br>
               <h3> Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, quo et porro facilis 
                   a qui dolorum odio minima numquam velit voluptatibus itaque architecto necessitatibus offici
                   a ducimus molestiae sit consectetur modi.
            </h3>
         </div>
</div>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                     <?php foreach($products as $prod) : ?>

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

  
