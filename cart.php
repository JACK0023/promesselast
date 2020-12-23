
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amina Online Choping site</title>
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    
    
    </head>
    
<body>
  <div id="top"><!-- Top Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
               
               <a href="#" class="btn btn-success btn-sm">Bienvenue</a>
               <a href="checkout.php">3 Tickets dans votre Cart | Total Price: $300 </a>
               
           </div><!-- col-md-6 offer Finish -->
           
           <div class="col-md-6"><!-- col-md-6 Begin -->
               
               <ul class="menu"><!-- cmenu Begin -->
                   
                   <li>
                       <a href="customer_register.php">S'enregistrer</a>
                   </li>
                   <li>
                       <a href="customer/myaccount.php">Mon Compte</a>
                   </li>
                   <li>
                       <a href="cart.php">Aller vers Cart</a>
                   </li>
                   <li>
                       <a href="checkout.php">Se Connecter</a>
                   </li>
                   
               </ul><!-- menu Finish -->
               
           </div><!-- col-md-6 Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- Top Finish -->
   
   <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="navbar-header"><!-- navbar-header Begin -->
               
               <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                   
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
                       <li>
                           <a href="shop.php">Reserver</a>
                       </li>
                       <li>
                           <a href="customer/myaccount.php">Mon Compte</a>
                       </li>
                       <li class="active">
                           <a href="cart.php">Shopping Cart</a>
                       </li>
                       <li>
                           <a href="contact.php">Contacter Nous</a>
                       </li>
                       
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
               
               <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span>3 Tickets dans votre Cart</span>
                   
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
             <li>Cart</li>
            </ul>
        
        
        </div>
        
        <div id="cart" class="col-md-9">
 <div class="box">
            <form action="cart.php" method="post" enctype="multipart/form-data">
     <h1> Cart </h1>
                <p class="text-muted">Vous Avez Actuellement 3 Tickets disponible</p>
                <div class="table-responsive">
               <table class="table">
                    <thead>
                    <tr>
                    <th colspan="2">Type de Ticket</th>
                    <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Heure de Depart</th>
                        <th colspan="1">Delete</th>
                        <th colspan="2">Sub-Total</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td><img class="img-responsive" src="admin_area/product_images/bus3.jpg" alt="image1"></td>
                        <td><a href="#">GOMA-BUKAVU </a></td>
                         <td>1</td>
                         <td>$15</td>
                         <td>12h</td>
                            <td><input type="checkbox" name="remove[]"></td>
                            <td>$10</td>
                        </tr>
                    
                    
                    </tbody>
                      <tbody>
                        <tr>
                        <td><img class="img-responsive" src="admin_area/product_images/bus3.jpg" alt="image1"></td>
                        <td><a href="#">BUKAVU-UVIRA</a></td>
                         <td>2</td>
                         <td>$13</td>
                         <td>21H</td>
                            <td><input type="checkbox" name="remove[]"></td>
                            <td>$26</td>
                        </tr>
                    
                    
                    </tbody>
                      <tbody>
                        <tr>
                        <td><img class="img-responsive" src="admin_area/product_images/bus4.jpg" alt="image1"></td>
                        <td><a href="#">GOMA-BUTEMBO</a></td>
                         <td>1</td>
                         <td>$15</td>
                         <td>14H</td>
                            <td><input type="checkbox" name="remove[]"></td>
                            <td>$15</td>
                        </tr>
                    
                    
                    </tbody>
                   <tfoot>
                   <tr>
                       <th colspan="5">Total</th>
                       <th colspan="2">$51</th>
                       </tr>
                   </tfoot>
                    </table>
                </div>
                <div class="box-footer">
                <div class="pull-left">
                    <a href="shop.php" class="btn btn-default"> <i class="fa fa-chevron-left"></i> RESERVER </a>
                    </div>
                     <div class="pull-right">
                         <button type="submit" name="update" value="Update Cart" class="btn btn-default"> <i class="fa fa-refresh"></i>Modifier la Card</button>
                     <a href="shop.php" class="btn btn-Primary"> <i class="fa fa-chevron-right"></i>faire le Payement</a>    
                    </div>
                </div>
     </form>
            
            </div>
            
               <div id="row same-height-row">
            <div class="col-md-3 col-sm-6">
                <div class="box same-heigth headline">

                <h3 class="text-center">Voyages pouvant vous interresser</h3>
                
                </div>
            </div>
 <div class="col-md-3 col-sm-6 center-responsive box">
     <div class="product single box">
         <a href="details.php">
         <img src="admin_area/product_images/bus5.jpeg" class="img-responsive" alt="image1">
         </a></div>
     <div class="text ">
     <h3><a href="details.php"></a>VISITER BUNIA</h3>
         <p class="price">18$</p>
     </div>
 </div>
         
    
                    <div class="col-md-3 col-sm-6 center-responsive box">
     <div class="product single box">
         <a href="details.php">
         <img src="admin_area/product_images/bus5.jpeg" class="img-responsive" alt="image1">
         </a></div>
     <div class="text ">
     <h3><a href="details.php"></a>VISITER UVIRA</h3>
         <p class="price">35$</p>
     </div>
 </div>
         
                    <div class="col-md-3 col-sm-6 center-responsive box">
     <div class="product single box">
         <a href="details.php">
         <img src="admin_area/product_images/bus5.jpeg" class="img-responsive" alt="image1">
         </a></div>
     <div class="text ">
     <h3><a href="details.php"></a>VISITER BUTEMBO</h3>
         <p class="price">10$</p>
     </div>
 </div>
         
        </div> 
            
            
        </div>
      
     <div class="col-md-3">
    <div id="order-summary" class="box">
        
        <div class="box-header"> <h3> INFORMATION</h3></div>
        <p class="text-muted">
        Le prix des reservations sont calculer sur base des vos tickets 
        </p><div class="table-responsive">
        
        <table class="table">
        <tbody>
            <tr> <td>Sub-Total</td>
                <td>$61</td>
            
            </tr>
             <tr> <td>TVA</td>
                <td>$2</td>
            
            </tr>
             <tr> <td>Tax</td>
                <td>$0</td>
            
            </tr>
             <tr class="total"> 
                <td>Totale</td>
                 <td>63$</td>
            </tr>
            </tbody>
        
        </table>
        </div>
        
        </div>
    
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
    