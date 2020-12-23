
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amina Online Choping site</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    
    
    </head>
    
<body>
  <div id="top"><!-- Top Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
               
               <a href="#" class="btn btn-success btn-sm">Welcome</a>
               <a href="checkout.php">4 Items In Your Cart | Total Price: $300 </a>
               
           </div><!-- col-md-6 offer Finish -->
           
           <div class="col-md-6"><!-- col-md-6 Begin -->
               
               <ul class="menu"><!-- cmenu Begin -->
                   
                   <li>
                       <a href="customer_register.php">Register</a>
                   </li>
                   <li>
                       <a href="customer/myaccount.php">My Account</a>
                   </li>
                   <li>
                       <a href="cart.php">Go To Cart</a>
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
                   
                   <img src="images/ecom-store-logo.png" alt="M-dev-Store Logo" class="hidden-xs">
                   <img src="images/ecom-store-logo-mobile.png" alt="M-dev-Store Logo Mobile" class="visible-xs">
                   
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
                           <a href="index.php">Home</a>
                       </li>
                       <li >
                           <a href="shop.php">Shop</a>
                       </li>
                       <li>
                           <a href="customer/myaccount.php">My Account</a>
                       </li>
                       <li>
                           <a href="cart.php">Shopping Cart</a>
                       </li>
                       <li>
                           <a href="contact.php">Contact Us</a>
                       </li>
                       
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
               
               <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span>4 Items In Your Cart</span>
                   
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
            <li><a href="index.php">Home</a></li>
             <li>Register</li>
            </ul>
        
        
        </div>
        
        <div class="col-md-3">
    <?php 
    include("includes/sidebar.php");
    
    ?> 
        </div>
       
        <div class="col-md-9">
        
        <div class="box">
            <div class="box-header">
            
            <center>
                
                <h2>Create a new Account</h2>
                <p class="text-muted">
                If you Need Any Assistance,Please Contact our Customer Service Work <strong>24/7</strong>
                </p>
                </center>
                <form action="customer_register.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label >Profil Picture</label>
                    <input type="file" class="form-control form-height-custom" name="c_image" required>
                    
                    </div>
                <div class="form-group">
                    <label >FullName</label>
                    <input type="text" class="form-control" name="c_name" required>
                    
                    </div>
                      <div class="form-group">
                    
                 
                    <label> Email</label>
                    <input type="email" class="form-control" name="Email" required>
                    
                    </div>
                      <div class="form-group">
                    
                 
                    <label>Phone Number</label>
                    <input type="text" class="form-control" name="c_phone" required>
                    
                    </div>
                      <div class="form-group">
                    <label>Your Address</label>
                    <input type="text" class="form-control" name="c_address" required>
                    
                    </div>
                     <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="c_password" required>
                    
                    </div>
                     <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" name="c_confirm_pass" required>
                    
                    </div>
                    

                    <div class="text-center">
                     <button type="submit" name="register" class="btn btn-primary">   <i class="fa fa-user-md"></i>Create Account</button>
                 
                    </div>
                
                </form>            </div>
            
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
    