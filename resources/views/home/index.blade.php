<!doctype html>


<html lang="en">


<head>


   <meta charset="utf-8" />


   <meta name="viewport" content="width=device-width, initial-scale=1" />


   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
       crossorigin="anonymous" />


   <title> <?php echo $title; ?> </title>


   <style>
       .bg-secondary {
           background-color: #2c3e50 !important;
       }


       .footer {
           background-color: #1a252f;
           position: absolute;
           bottom: 0%;
           right: 0%;
           left: 0%;


       }


       .bg-primary {
           background-color: #1abc9c !important;
       }


       nav {
           font-weight: 700;
       }


       .img-card {
           height: 18vw;
           object-fit: cover;
       }
   </style>


</head>


<body>


   <!-- header -->


   <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">


       <div class="container">


           <a class="navbar-brand" href="#"><?php echo $title; ?></a>


           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
               aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">


               <span class="navbar-toggler-icon"></span>


           </button>


           <div class="collapse navbar-collapse" id="navbarNavAltMarkup">


               <div class="navbar-nav ms-auto">


                   <a class="nav-link active" href="/">Home</a>


                   <a class="nav-link active" href="/products">Products</a>


                   <a class="nav-link active" href="/cart">Cart</a>


                   <a class="nav-link active" href="/about">About</a>


               </div>


           </div>


       </div>


   </nav>






   <header class="masthead bg-primary text-white text-center py-4">


       <div class="container d-flex align-items-center flex-column">


           <h2> <?php echo $subtitle; ?> </h2>


       </div>


   </header>


   <!-- header -->






   <div class="container my-4">


       <div class="row">
           <div class="col-md-6 col-lg-4 mb-2">
             <img src="<?php echo $imageUrls[0]; ?>" class="img-fluid rounded">
           </div>
           <div class="col-md-6 col-lg-4 mb-2">
             <img src="<?php echo $imageUrls[0]; ?>" class="img-fluid rounded">
           </div>
           <div class="col-md-6 col-lg-4 mb-2">
             <img src="<?php echo $imageUrls[0]; ?>" class="img-fluid rounded">
           </div>
         </div>


   </div>


   <div class=" py-4 text-center text-white footer">


       <div class="container">


           <small class="copyright">


               Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
                   href="https://twitter.com/user">


                   Bahiru Megersa 


               </a> - <b>Defance Company</b>


           </small>


       </div>


   </div>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
   </script>


</body>


</html>