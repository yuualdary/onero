<div class="container px-4 px-lg-5 mt-5 mb-4">
   

        <div class="card h-100" style="width : 50%">
          <h5 class="card-header">Featured</h5>
          <div class="card-body">
        
        
        <form action="<?php echo site_url('/Product/PostProduct') ?>" method="post"  enctype="multipart/form-data" >
          <div class="form-group">
            <label for="exampleFormControlInput1">Product Name</label>
            <input type="email" class="form-control" id="productname" placeholder="Product Name">
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Product Description</label>
            <textarea class="form-control" id="productdescription" rows="3" placeholder="Product Description"></textarea>
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Product Price</label>
            <input type="email" class="form-control" id="productprice" placeholder="Product Price"">

          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2">Product Quantity</label>
            <input type="email" class="form-control" id="productqty" placeholder="Product Quantity">

          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect2">Image</label>
            <input type="file" id="file" name="file" multiple>

          </div>        
       
          <div class="col mb-2" style="padding: left 10px; ">
             <a href="#" class="btn btn-primary" >Cancel</a>
            <a href="#" class="btn btn-primary" >Submit</a>
            </div>

            </form>   
          </div>
        </div>
</div>