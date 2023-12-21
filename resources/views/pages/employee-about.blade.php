<!DOCTYPE html>



   <meta charset="utf-8" />


   <meta name="viewport" content="width=device-width, initial-scale=1" />


   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
       crossorigin="anonymous" />


       <title>Online Store -about </title>


</head>
<body>


   <!-- header -->


   <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">


       <div class="container">


           <a class="navbar-brand" href="#">Online Store</a>


           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
               aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">


               <span class="navbar-toggler-icon"></span>


           </button>


           <div class="collapse navbar-collapse" id="navbarNavAltMarkup">


               <div class="navbar-nav ms-auto">


                   <a class="nav-link active" href="#">Home</a>


                   <a class="nav-link active" href="#">Products</a>


                   <a class="nav-link active" href="#">Cart</a>


                   <a class="nav-link active" href="#">About</a>


               </div>


           </div>


       </div>


   </nav>


   <header class="masthead bg-primary text-white text-center py-4">


   <div class="container d-flex align-items-center flex-column">

<h2> About Online Store</h2>


</div>
       <style>
.bg-secondary{
    background-color: blue  !important;
}
.copyrigth{
    background-color: red  !important;
}
.bg-primary{
    background-color: brown  !important;
}
nav{
    font-weigth: 700;
}
.img-card{
    heigth: 18pvw;
    object-fit:cover;
}
</style>

   </header>


   <!-- header -->


   <div class="container my-4">


   </div>

   <div class="container info">
       <div class="row">


           <div class="card col-lg-4 col-md-6 col-sm-12 text-center mx-auto">
               <img class="card-img-top rounded-circle" src="https://placehold.co/50" alt="Card image">
               <div class="card-body">
                   <h4 class="card-title"><?php echo $name ?></h4>
                   <br>
                   <h6><?php echo $role ?> At <?php echo $company ?></h6>
                   <p> <i> <?php echo $quote ?> </i> </p>
               </div>
           </div>


       </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
   </script>


</body>


</html>