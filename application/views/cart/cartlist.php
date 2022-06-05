<div class="card">
  <div class="card-body">
      
  <?php foreach($carts as $cart) : ?>

        <div class="container px-4 px-lg-5 mt-5 mb-5">

            <div class="card"  style="border-bottom: 5px solid black; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="card-body">
                    <div class="row">


                         <div class="col-2" >
                             <img class="img" src="https://dummyimage.com/50x50/dee2e6/6c757d.jpg" width = "100%"  alt="..." />
                          </div>
                          <div class="col-8 mb-2 mt-3">
                           
                                 <h2><?= $cart['product_name'];?></h2> 
                                 <br>
                              <br>
                                 <h5>Rp. <?= $cart['product_price'];?></h5>
                           
                            </div>
                            <div class="col-2 my-5">
                                  <h3><a href="<?= base_url(); ?>cart/DeleteCart/<?= $cart['id']; ?>"><i class="large material-icons mt-4" style="font-size: 50px">delete_forever</i></a></h3>
                                  
                            </div>
                          
                         </div>
                     </div>

                 </div>

             </div>
         <?php endforeach;?>


         <div class="col mb-2" style="padding: left 10px; " >
                                <a href="<?= base_url(); ?>product" class="btn btn-primary" style="float :right;">Continue Shopping</a> 
                                
                                <a href="<?= base_url(); ?>cart/ConfirmPayment/1" " class="btn btn-primary" style="float :right;">Checkout</a>
                             </div>
    </div>
</div>