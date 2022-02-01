<!-- debut header-->
<?php require './navbar.php'; ?>
<!-- fin header-->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <?php require('./data/data.php');echo '
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="white-box text-center"><img src="./img/'. $_GET['image'] .'" class="img-fluid"></div>
                </div>
                  <div class="col-lg-7 col-md-7 col-sm-6">
                <h3 class="card-title2">'. $_GET['titre'] .'</h3>
                <h6 class="card-subtitle">globe type chair for rest</h6> 
                    <h4 class="box-title mt-5">Description</h4>
                    <p>'. $_GET['contenu'] .'</p>
                    <h2 class="mt-5">
                        '. $_GET['prix'] .'€
                    </h2>
                    <button class="btn btn-dark btn-rounded mr-1" data-toggle="tooltip" title="" data-original-title="Add to cart">
                        <i class="fa fa-shopping-cart"></i>
                    </button>
                    <button class="btn btn-primary btn-rounded">Commander</button>
                    <h3 class="box-title mt-5">Commentaires:</h3>
                    <ul class="list-unstyled">
                        <li></i>'.$_GET['contenu'].'</li>
                    </ul>
                </div>'
                ?>
            </div>
            <?php require './footer.php';?>
        </div>  
    </div>
    
</div>

    </body>
<!-- debut footer-->

<!-- fin footer-->

      
</html>
    