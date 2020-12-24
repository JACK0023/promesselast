<div class="panel panel-default sidebar-menu">


<div class="panel-heading">
    
 <center> 
     <img src="customer_images/mwela.jpg">
    
    </center>
    <br/>
    <h3 align="center" class="panel-title">
    Nom:PROMESSE ONE
    </h3>
    </div>
    <div class="panel-body">
    
    
    <ul class="nav-pills nav-stacked nav">
        
        <li class="<?php if(isset($_GET['my_orders'])){ echo "active";}?>">
        
        <a href="myaccount.php?my_orders">
            
            <i class="fa fa-list"></i> My Tickets
            </a>
        </li>
         <li class="<?php if(isset($_GET['pay_offline'])){ echo "active";}?>">
        
        <a href="myaccount.php?pay_offline">
            
            <i class="fa fa-bolt"></i>Payer En Ligne
            </a>
        </li>
         <li class="<?php if(isset($_GET['edit_account'])){ echo "active";}?>">
        
        <a href="myaccount.php?edit_account">
            
            <i class="fa fa-pencil"></i>Modifier mon Comte
            </a>
        </li>
         <li class="<?php if(isset($_GET['change_password'])){ echo "active";}?>">
        
        <a href="myaccount.php?change_account">
            
            <i class="fa fa-user"></i>Changer Mots de Passe
            </a>
        </li>
          <li class="<?php if(isset($_GET['delete_account'])){ echo "active";}?>">

        <a href="myaccount.php?delete_account">
            
            <i class="fa fa-trash"></i>Supprimer Compte
            </a>
        </li>
          <li>
        
        <a href="myaccount.php?log_out">
            
            <i class="fa fa-sign-out"></i>Deconnecter
            </a>
        </li>
        </ul>
    </div>
    
    
</div>