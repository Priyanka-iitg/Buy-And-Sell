<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Vendquire IITG</title>

		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet"> <!--inserting font-style from google -->

		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/> <!-- inserting bootstrap sytlesheet -->

		<!-- Different css stylesheets including bootstrap css, and custom. -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link type="text/css" rel="stylesheet" href="css/accountbtn.css"/>

		<link rel="stylesheet" href="css/font-awesome.min.css"> <!-- font icons -->

    <style>
        #navigation {
          background: ##BF7474;  
            background: -webkit-linear-gradient(to right, #F9D423, #FF4E50); 
            background: linear-gradient(to right, #F9D423, #FF4E50); 

          
        }
        #header {
  
            /* background: #780206;   */
			background: #7474BF;
            background: -webkit-linear-gradient(to right, #74BF74, #7474BF);  
            background: linear-gradient(to right, #74BF74, #7474BF); 

  
        }
        #top-header {
              
  
            background: #BF7474; 
            background: -webkit-linear-gradient(to right, #AF5151, #BF7474);  
            background: linear-gradient(to right, #ff9f23, #fb3333); 
			


        }
        #footer {
            background: #7474BF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #74BF74, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #74BF74, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


          color: #1E1F29;
        }
        #bottom-footer {
            background: #7474BF;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #348AC7, #7474BF);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #348AC7, #7474BF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
          

        }
        .footer-links li a {
          color: #1E1F29;
        }
        .mainn-raised {
            
            margin: -7px 0px 0px;
            border-radius: 6px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

        }
       
    .glyphicon{
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    }
    .glyphicon-chevron-left:before{
        content:"\f053"
    }
    .glyphicon-chevron-right:before{
        content:"\f054"
    }
  
        </style>

    </head>


	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
				<font style="  font-style:normal; font-size: 30px;color: black;font-family: serif">
				Vendquire IITG

							
					<ul class="header-links pull-right">
						<!-- <li><a href="#"><i class="fa fa-inr"></i> INR</a></li> -->
						<li><?php
                             include "db.php";
							 
                            if(isset($_SESSION["uid"])){
                                $sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                echo '
                               <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> HI '.$row["first_name"].'</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#profile"><i class="fa fa-user-circle" aria-hidden="true" ></i>My Profile</a>
                                    <a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>
                                    
                                  </div>
                                </div>';

                            }else{ 
                                echo '
                                <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" style="color: black; font-weight:bold;" ><i class="fa fa-user-o"></i> My Account</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>Login</a>
                                    <a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
                                    
                                  </div>
                                </div>';
                                
                            }
                            ?>
                               
                        </li>				
					</ul>
					
				</font>

				</div>
			</div>
			<!-- /TOP HEADER -->
			
			

			<!-- MAIN HEADER -->
			<div id="header">
			
				<div class="container">
			
					<div class="row">
			
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
								<div>
							 <img src = "./img/iitg_logo.png" width=80px height=80px style="margin:0px;">

							 </div>
                                       
									
								</a>
							</div>
						</div>
						

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">Categories</option>
										<option value="1">Men</option>
										<option value="1">Women </option>
									</select>
									<input class="input" id="search" type="text" placeholder="Search here">
									<button type="submit" id="search_btn" class="search-btn">Search</button>
								</form>
							</div>
						</div>
						

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart "></i>
										<span style="color: black; font-weight: bold; 3px;">My Cart</span>
										<div class="badge qty">0</div>
									</a>
									<div class="cart-dropdown"  >
										<div class="cart-list" id="cart_product">
										</div>
										<div class="cart-btns">
												<a href="cart.php" style="width:100%;"><i class="fa fa-edit"></i>  Edit Your Cart</a>
										</div>
									</div>
										
								</div>
								
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								
							</div>
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</header>
		
		<nav id='navigation'>
			
            <div class="container" id="get_category_home">
                
            </div>
		</nav>
		
		<div class="modal fade" id="Modal_login" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
								<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								
								</div>
								<div class="modal-body">
									<?php
										include "login_form.php";
									?>
			
								</div>
								
							</div>
													
                        </div>
    	</div>
                <div class="modal fade" id="Modal_register" role="dialog">
                        <div class="modal-dialog" style="">

                          <div class="modal-content">
								<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								
								</div>
                          <div class="modal-body">
								<?php
									include "register_form.php";
		
								?>
                            </div>
                            
                        </div>

                </div>
        </div>
	</body>
</html>
		