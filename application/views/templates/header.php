
  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Porudcts</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		

        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
     
        <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet" />

        <title> <?php echo $judul; ?></title>

    </head>
<body>


        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <h4><li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= base_url(); ?>product/">Product</a></li></h4>
                        <h4> <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>product/FormProduct">Add Product</a></li></h4>
                        
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark"  type="submit"> 
                            <a href="<?= base_url(); ?>cart/ListCart/1" style="text-decoration:none; color: inherit;">
                            <i class="bi-cart-fill me-1" ></i>
                            Carts
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>

                            </a>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
      