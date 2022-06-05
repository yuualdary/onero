<div class="container px-4 px-lg-5 mt-5 mb-4">
   

        <div class="card h-100" style="width : 50%">
          <h5 class="card-header">Featured</h5>
          <div class="card-body">
        
        
        <form action="<?php echo site_url('Product/EditProduct/')?>" method="post"  enctype="multipart/form-data" >
        <input type="hidden" name="id" value="<?=$products['id']; ?>"> 
        <div class="form-group">

            <label for="exampleFormControlInput1">Product Name</label>
            <input type="text" class="form-control" value="<?=$products['product_name'];?>" name="product_name" id="product_name" placeholder="Product Name" >
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Product Description</label>
            <textarea class="form-control" name="product_description" id="product_description" rows="3" placeholder="Product Description" value="<?=$products['product_description'];?>"><?=$products['product_description'];?></textarea>
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Product Price</label>
            <input type="text" class="form-control" name="product_price" id="product_price" placeholder="Product Price"" value="<?=$products['product_price'];?>">

          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2">Product Quantity</label>
            <input type="text" class="form-control" name="product_qty"id="product_qty" placeholder="Product Quantity" value="<?=$products['product_qty'];?>">

          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect2">Image</label>
            <input type="file" id="file" name="file" multiple>

          </div>        
       
          <div class="col mb-2" style="padding: left 10px; ">
             <a href="#" class="btn btn-primary" >Cancel</a>
            <input type="submit" name="btn" class="btn btn-primary" >Submit</input>
            </div>

            </form>   
          </div>
        </div>
</div>