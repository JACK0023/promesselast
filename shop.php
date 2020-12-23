
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skymag</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
   
    
    </head>
    
<body>
  <div id="top"><!-- Top Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
               
               <a href="#" class="btn btn-success btn-sm">Welcome</a>
               <a href="checkout.php">4 Tickets On | Total Price: $300 </a>
               
           </div><!-- col-md-6 offer Finish -->
           
           <div class="col-md-6"><!-- col-md-6 Begin -->
               
               <ul class="menu"><!-- cmenu Begin -->
                   
                   <li>
                       <a href="customer_register.php">Register</a>
                   </li>
                   <li>
                       <a href="checkout.php">Mon Compte</a>
                   </li>
                   <li>
                       <a href="cart.php">Soir Tickets Precedents</a>
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
                       
                       <li >
                           <a href="index.php">Accueil</a>
                       </li>
                       <li class="active">
                           <a href="shop.php">Reserver</a>
                       </li>
                       <li>
                           <a href="customer/myaccount.php">Mon compte</a>
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
                   
                   <span>4 Tickets Disponibles</span>
                   
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
    
    <div id="content">
    
    <div class="container">
        
        <div class="col-md-12">
        
        <ul class="breadcrumb">
            <li><a href="index.php">Accueil</a></li>
             <li>Reserver</li>
            </ul>
        
        
        </div>
        
        <div class="col-md-3">
    <?php 
    include("includes/sidebar.php");
    
    ?> 
        </div>
        <div class="col-md-9">
        
        <div class="box"> <h1> 
         Reserver Maintenant!
            </h1>
       <h2 > <p> Reserver des maintenant pour profiter des nos prix tres accessible sur le marche du trassport,avec Skymag plus besoin de se deplacer!faite votre reservation chez vous!
            
            </p>  </h2>  
            
            
            </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 center-responsive">
              <div class="product">
            
           <a href="details.php"> 
            
            
            <img  class="img-responsive" src="pics/a1.jpg" alt="product 1">
            </a> 
        
            <div class="textin">
                <h3><a href="details.php"> Visiter Kinshasa</a></h3>
          <h3> <p class="price">$250</p></h3> 
                <p class="boutton"> <a href="details.php" class="btn btn-default">Voir Details</a>
                
                <a href="details.php" class="btn btn-primary "> <i class="fa fa-shopping-cart">Reserver</i> </a>
                </p>
            </div>
            </div>
            
            </div>
           
                    <div class="col-md-4 col-sm-6 center-responsive">
              <div class="product">
            
           <a href="details.php"> 
            
            
            <img  class="img-responsive" src="pics/goma2.jpg" alt="product 1" style="height:190px;width:300px">
            </a> 
        
            <div class="textin">
                <h3><a href="details.php">Visiter Goma</a></h3>
          <h3> <p class="price">$88</p></h3> 
                <p class="boutton"> <a href="details.php" class="btn btn-default"> Voir Details</a>
                
                <a href="details.php" class="btn btn-primary "> <i class="fa fa-shopping-cart">Reserver</i> </a>
                </p>
            </div>
            </div>
            
            </div>
                    <div class="col-md-4 col-sm-6 center-responsive">
              <div class="product">
            
           <a href="details.php"> 
            
            
            <img  class="img-responsive" src="pics/a3.jpg" style="height:190px;width:300px" alt="product 1">
            </a> 
        
            <div class="textin">
                <h3><a href="details.php">Visiter Lubumbashi</a></h3>
          <h3> <p class="price">$54</p></h3> 
                <p class="boutton"> <a href="details.php" class="btn btn-default"> Voir Details</a>
                
                <a href="details.php" class="btn btn-primary "> <i class="fa fa-shopping-cart">Reserver</i> </a>
                </p>
            </div>
            </div>
            
            </div>
           
         
        
             
           
           
            </div>
        
            
       <center>
            <ul class="pagination">
        <li> <a href="">Premiere Page</a></li>         
        <li> <a href="">1</a></li> 
        <li> <a href="">2</a></li> 
        <li> <a href="">3</a></li> 
  
        <li> <a href="">Derniere Page</a></li>    
           </ul>
            
            
            </center>     
             
        </div>
        
        </div> 
    </div>
    
    
    
    
    
    
    
    
    
    
    
    <?php 
    include("includes/footer.php");
    
    ?>
    
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    </body>
</html>
    