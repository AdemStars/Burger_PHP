<!-- debut header-->
<?php require './navbar.php'; ?>
<!-- fin header-->
<div class="container"><!--------------------Container Géneral  ------------------------------->
          
   <div class="row"><!---------------------ROW BOOTSTRAP ---------->
            <div class="col"><!-----------Column bootstrap --------------->

<!-- debut caroussel-->
<?php require './caroussel.php'; ?>
<!-- fin caroussel-->
  
      
    </div> 
  </div> 

  <div class="row row-content">


      <!-----------LISTE CARD-------------->

       <?php 
    require('./data/data.php');
   foreach($items as $item){
     
    //   if($_GET['cat']==$item['category']){

     echo '
     <div class="col-12 col-sm-6 col-md-4">
      <!-----------CARD-------------->
      <div class="card mycard">
        <img class="card-img-top photo" src="./img/'. $item['image'] .'" alt="Card image cap">
        <div class="card-body bodycard">
          <h5 class="card-title">'. $item['name'] .'</h5>
          <p class="card-text contentcard">'. $item['description'] .'</p>
        </div>
        <div class="card-body bodycard">
          <!-------Button ------------------------------------>
          <button type="button" class="btn btn btn-light"  role="button">
            <span class="fa fa-sign-in"></span>  <a href="./detail.php?titre='. $item['name'] . ' &image='. $item['image'] . '&contenu='. $item['description'] . '&prix='. $item['price']. '"> Voir </a></button>
          <!----------------------------------------------->
        </div>
      </div>
      <!----------END CARD ------------------>

  </div>
     
     ';
       
                    //              }
                           }
   ?>

      <!----------END LISTE CARD ------------------>


  
  </div>

</div> 



</div>
    </body>
<!-- debut footer-->
<?php require './footer.php'; ?>
<!-- fin footer-->

      
</html>