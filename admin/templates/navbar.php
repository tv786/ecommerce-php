 <nav class="navbar navbar-inverse fixed-top bg-white p-2 shadow">
  <a class="" href="../index.php">
     <img src="../product_images/sprinter_logo2.png" style="margin-top: 8px;">
  </a>
  
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
    	<?php
    		if (isset($_SESSION['admin_id'])) {
    			?>
    				<a class="nav-link" href="../admin/admin-logout.php" style="font-size: 18px; font-weight: bold;">Sign out <i class="fas fa-sign-in-alt"></i></a>
    			<?php
    		}else{
    			$uriAr = explode("/", $_SERVER['REQUEST_URI']);
    			$page = end($uriAr);
    			if ($page === "login.php") {
    				?>
	    				<a class="nav-link " href="../admin/register.php" style="font-size: 18px; font-weight: bold;">Register <i class="fas fa-sign-in-alt"></i></a>
	    			<?php
    			}else{
    				?>
	    				<a class="nav-link" href="../admin/login.php" style="font-size: 18px; font-weight: bold;">Login <i class="fas fa-sign-in-alt"></i></a>
	    			<?php
    			}


    			
    		}

    	?>
      
    </li>
  </ul>
</nav>