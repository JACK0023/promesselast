<?php


include("includes/db.php")?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyMag</title>
   <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/jquery.datetimepicker.min.css" >
    
    </head>
    
<body>
  <div id="top"><!-- Top Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
               
               <a href="#" class="btn btn-success btn-sm">Bienvenue sur SKyMag</a>
               <a href="checkout.php">4 Tickets On | Total Price: $300 </a>
               
           </div><!-- col-md-6 offer Finish -->
           
           <div class="col-md-6"><!-- col-md-6 Begin -->
               
               <ul class="menu"><!-- cmenu Begin -->
                   
                   <li>
                       <a href="customer_register.php">Creer un compte</a>
                   </li>
                   <li>
                       <a href="customer/myaccount.php">Mon Compte</a>
                   </li>
                   <li>
                       <a href="cart.php">Mes Tickets</a>
                   </li>
                   <li>
                       <a href="checkout.php">Login</a>
                   </li>
                   
               </ul><!-- menu Finish -->
               
           </div><!-- col-md-6 Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- Top Finish -->
   
   <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="navbar-header"><!-- navbar-header Begin -->
               
               <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                   
                        
              <!---<img src="images/ecom-store-logo.png" alt="M-dev-Store Logo" class="hidden-xs">---->
                <!-----  <img src="images/ecom-store-logo-mobile.png" alt="M-dev-Store Logo Mobile" class="visible-xs">--->
                   
               </a><!-- navbar-brand home Finish -->
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   
                   <span class="sr-only">Toggle Search</span>
                   
                   <i class="fa fa-search"></i>
                   
               </button>
               
           </div><!-- navbar-header Finish -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav"><!-- padding-nav Begin -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       
                       <li class="active">
                           <a href="index.php">Accueil</a>
                       </li>
                       <li>
                           <a href="shop.php">Reserver</a>
                       </li>
                       <li>
                           <a href="customer/myaccount.php">Mon Compte</a>
                       </li>
                       <li>
                           <a href="cart.php">Gerer mes Tickets</a>
                       </li>
                       <li>
                           <a href="contact.php">Contacter Nous</a>
                       </li>
                       
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
               
               <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span>4 Tickets In Your Cart</span>
                   
               </a><!-- btn navbar-btn btn-primary Finish -->
               
               <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->
                   
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->
                       
                       <span class="sr-only">Toggle Search</span>
                       
                       <i class="fa fa-search"></i>
                       
                   </button><!-- btn btn-primary navbar-btn Finish -->
                   
               </div><!-- navbar-collapse collapse right Finish -->
               
               <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                   
                   <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->
                       
                       <div class="input-group"><!-- input-group Begin -->
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn"><!-- input-group-btn Begin -->
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                               
                               <i class="fa fa-search"></i>
                               
                           </button><!-- btn btn-primary Finish -->
                           
                           </span><!-- input-group-btn Finish -->
                           
                       </div><!-- input-group Finish -->
                       
                   </form><!-- navbar-form Finish -->
                   
               </div><!-- collapse clearfix Finish -->
               
           </div><!-- navbar-collapse collapse Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- navbar navbar-default Finish -->
   
   <div class="container-fluid" id="slider"><!-- container Begin -->
       
       <div class="col-md-12"><!-- col-md-12 Begin -->
           
           <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->
               
               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
               
                   
               </ol><!-- carousel-indicators Finish -->
               
               <div class="carousel-inner"><!-- carousel-inner Begin -->
                   
                 
       <?php
                   
                   $get_slides="select * from slider LIMIT 0,1";
                   
                   $run_slider=mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slider)){
                       
                       $slide_name=$row_slides['slide_name'];
                       $slide_image=$row_slides['slide_image'];
                       
                       
                       echo "
                       
                       
                       <div class='item active'>
                       
                       <img src='admin_area/slides_images/$slide_image'>
                       
                       
                       
                       </div>
                       ";
                   }
             
                   
                   ?>

       <?php
                   
                   $get_slides="select * from slider LIMIT 1,2";
                   
                   $run_slider=mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slider)){
                       
                       $slide_name=$row_slides['slide_name'];
                       $slide_image=$row_slides['slide_image'];
                       
                       
                       echo "
                       
                       
                       <div class='item'>
                       
                       <img src='admin_area/slides_images/$slide_image'>
                       
                       
                       
                       </div>
                       ";
                   }
             
                   
                   ?>



                   
               </div><!-- carousel-inner Finish -->
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Precedent</span>
                   
               </a><!-- left carousel-control Finish -->
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Suivant</span>
                   
               </a><!-- left carousel-control Finish -->
               
           </div><!-- carousel slide Finish -->
           
       </div><!-- col-md-12 Finish -->
       
   </div><!-- container Finish -->
   
    <div id="advantages">
    <div class="container">
        
        <div class="same-height-row" >
        
        <div class="col-sm-4">
            
            <div class="box same-height">
             <div class="icon">
                <i class="fa fa-tag"></i>
                </div>
            <h3> <a href="3"></a></h3>
                 <h3> <a href-"#"> Service accessible 24h/24</a></h3>
            <p>if You need itAssitance 24/hours if You need itAssitance 24/hours if You need itAssitance 24/hours if You need itAssitance 24/hours if You need itAssitance 24/hours if You need it</p>
            </div>
           
            </div>
        
                <div class="col-sm-4">
            
            <div class="box same-height">
             <div class="icon">
                <i class="fa fa-thumbs-up"></i>
                </div>
            <h3> <a href="3"></a></h3>
                <h3> <a href-"#">Les Meilleurs Prix du Marche</a></h3>
            <p>We the lowest online Market on DRC,We the lowest online Market on DRCWe the lowest online Market on DRCWe the lowest online Market on DRCWe the lowest online Market on DRC</p>
            </div>
            
            </div>
                <div class="col-sm-4">
            
            <div class="box same-height">
             <div class="icon">
                <i class="fa fa-heart"></i>
                </div>
            <h3> <a href="3"></a></h3>
                <h3> <a href-"#"> Profiter des nos Promotions</a></h3>
            <p>100% garanty that you are getting Original Productng Original Product enjoy or Return!100% garanty that you are getting Original Product enjoy or Return!100% garanty that </p>
            </div>
            
            </div>
        </div>
        </div>
    
    </div>
       
  <!---end of carousel,start of booking,creating forms------->

<section class="container" id="searching">
    
    <div class="headers">
        <form>
        
        <h1 id="titlebus"> <span>Laisse </span>SkyMag<span> te Trouver un Bus maintenant!</span></h1>
    <div class="form-box">
        <div class="row">
         <div class="col-sm-12 col-md-12 col-lg-12"> 
             
             
             <input class="search-field skills" name="search" type="text" placeholder="Ville de depart">
      <input class="search-field skills" name="search" type="text" placeholder="Ville de D'arriver">
             
             
            
             <input class="search-field location" name="location" type="text"  id="picker" >
   
          <input class="search-field location" name="location" type="text" placeholder="Passenger">
        
        </div>
    
        </div>
        
    
        <div class="row" style="float:right">
   
            <a href="#" class=" btn search-btn " >Search</a>

        </div>
       
        </div>
        
        </form>
    
    
    </div>
   
    
    </section>
<!---start of offers ,cards--->
    
    <div class="container mt-5 mb-5" style="width:400px">
    <h3> Date Picker</h3>
        <input type="text" id="pickers" class="form-control">
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div id="hot">
    
    <div class="box" >
        
        <div class="container">
        
        <div class="col-md-12">
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <h2> Dernieres informations</h2>
            
            </div>
        
        </div>
        </div>
    </div>
    
    <div id="content"  class="container">
    <div class="row">
        
        <div class="col-sm-4 col-sm-6 single box">
        <div class="product">
            
           <a href="details.php"> 
            
            
            <img  class="img-responsive" src="pics/a1.jpg" alt="product 1">
            </a> 
        
            <div class="textin">
                <h3><a href="details.php">Limete Kinshasa</a></h3>
          <h3> <p class="price">$10</p></h3> 
                <p class="boutton"> <a href="details.php" class="btn btn-default"> View Details</a>
                
                <a href="details.php" class="btn btn-primary "> <i class="fa fa-shopping-cart">Reserver</i> </a>
                </p>
            </div>
            </div>
        </div>
           <div class="col-sm-4 col-sm-6 single box">
        <div class="product">
            
           <a href="details.php"> 
            
            
            <img  class="img-responsive" src="pics/goma.jpg" style="height:267px;width:400px" alt="product 1">
            </a> 
        
            <div class="textin">
                <h3><a href="details.php">Nork-Kivu</a></h3>
          <h3> <p class="price">$10</p></h3> 
                <p class="boutton"> <a href="details.php" class="btn btn-default"> View Details</a>
                
                <a href="details.php" class="btn btn-primary "> <i class="fa fa-shopping-cart">Reserver</i> </a>
                </p>
            </div>
            </div>
        </div>
         <div class="col-sm-4 col-sm-6 single box">
        <div class="product">
            
           <a href="details.php"> 
            
            
            <img  class="img-responsive" src="pics/a2.jpg" style="height:267px;width:400px" alt="product 1">
            </a> 
        
            <div class="textin">
                <h3><a href="details.php">Lubumbashi</a></h3>
          <h3> <p class="price">$10</p></h3> 
                <p class="boutton"> <a href="details.php" class="btn btn-default"> View Details</a>
                
                <a href="details.php" class="btn btn-primary "> <i class="fa fa-shopping-cart">Reserver</i> </a>
                </p>
            </div>
            </div>
        </div>
 
    </div>
        <div class="row">
                <div class="col-sm-4 col-sm-6 single box">
        <div class="product">
            
           <a href="details.php"> 
            
            
            <img  class="img-responsive" src="pics/a3.jpg" style="height:267px;width:400px" alt="product 1">
            </a> 
        
            <div class="textin">
                <h3><a href="details.php">Kinshasa</a></h3>
          <h3> <p class="price">$10</p></h3> 
                <p class="boutton"> <a href="details.php" class="btn btn-default"> View Details</a>
                
                <a href="details.php" class="btn btn-primary "> <i class="fa fa-shopping-cart">Reserver</i> </a>
                </p>
            </div>
            </div>
        </div>
   <div class="col-sm-4 col-sm-6 single box">
        <div class="product">
            
           <a href="details.php"> 
            
            
            <img  class="img-responsive" src="pics/goma1.jfif" style="height:267px;width:400px" alt="product 1">
            </a> 
        
            <div class="textin">
                <h3><a href="details.php">Nork-Kivu</a></h3>
          <h3> <p class="price">$10</p></h3> 
                <p class="boutton"> <a href="details.php" class="btn btn-default"> View Details</a>
                
                <a href="details.php" class="btn btn-primary "> <i class="bi bi-calendar-fill">Reserver</i> </a>
                </p>
            </div>
            </div>
        </div>
            
            
            
 <div class="col-sm-4 col-sm-6 single box">
        <div class="product">
            
           <a href="details.php"> 
            
            
            <img  class="img-responsive" src="pics/goma1.jfif" style="height:267px;width:400px" alt="product 1">
            </a> 
        
            <div class="textin">
                <h3><a href="details.php">Nork-Kivu</a></h3>
          <h3> <p class="price">$10</p></h3> 
                <p class="boutton"> <a href="details.php" class="btn btn-default"> View Details</a>
                
                <a href="details.php" class="btn btn-primary "> <i class="fa fa-shopping-cart">Reserver</i> </a>
                </p>
            </div>
            </div>
        </div>
        
        </div>
     </div>

    
     <script>
    $('input').datetimepicker({
        timepicker:false,
        datepicker:true,
        format:'Y-m-d',
        value:'2020-5-21',
        weeks:true
    })
    </script>
    
    
    
    <?php 
    include("includes/footer.php");
    
    ?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  
    <script src="js/jquery.datetimepicker.full.min.js"></script>
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
   
    
</body>
</html>