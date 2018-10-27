 <?php 
 require './class/atclass.php';
 $msg = "";
 if($_POST)
 {
     $pname = mysqli_real_escape_string($connection,$_POST['pname']);
     $pprice = mysqli_real_escape_string($connection,$_POST['pprice']);
     $pdetails = mysqli_real_escape_string($connection,$_POST['pdetails']);


$query = mysqli_query($connection, "insert into tbl_product(pro_name,pro_price,pro_details) values('{$pname}','{$pprice}','{$pdetails}')") or die(mysqli_error($connection));

if($query)
{
     $msg = '<div class="alert alert-success" role="alert">
  Record Added
</div>';
}

 }
 
 ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Forms :: w3layouts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

        <!-- Custom CSS -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />

        <!-- font-awesome icons CSS -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- //font-awesome icons CSS -->

        <!-- side nav css file -->
        <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
        <!-- side nav css file -->

        <!-- js-->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/modernizr.custom.js"></script>

        <!--webfonts-->
        <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
        <!--//webfonts--> 

        <!-- Metis Menu -->
        <script src="js/metisMenu.min.js"></script>
        <script src="js/custom.js"></script>
        <link href="css/custom.css" rel="stylesheet">
        <!--//Metis Menu -->

    </head> 
    <body class="cbp-spmenu-push">
        <div class="main-content">

            <!--left-fixed -navigation-->
            <?php
            include './themepart/sidebar.php';
            ?>
            <!-- header-starts -->
            <?php
            include './themepart/header-menu.php';
            ?>
            <!-- //header-ends -->
            <!-- main content start-->
            <div id="page-wrapper">
                <div class="main-page">
                    <div class="forms">
                        <h2 class="title1">Product Form</h2>
  <?php 
                                echo $msg;
                                
                                ?>
                        <div class=" form-grids row form-grids-right">
                            <div class="widget-shadow " data-example-id="basic-forms"> 
                               
                              
                                <div class="form-title">
                                    <h4>Add Product Information :</h4>
                                </div>
                                <div class="form-body">
                                    <form class="form-horizontal" method="post" enctype="multipart/form-data"> 
                                        <div class="form-group"> 
                                            <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label> 
                                            <div class="col-sm-9"> 
                                                <input type="text" class="form-control" id="inputEmail3"  name="pname" placeholder="Enter Product Name" required> 
                                            </div> 
                                        </div>
                                       <div class="form-group"> 
                                            <label for="inputEmail3" class="col-sm-2 control-label">Product Price</label> 
                                            <div class="col-sm-9"> 
                                                <input type="text" class="form-control" id="inputEmail3" name="pprice" placeholder="Enter Product Price" required> 
                                            </div> 
                                        </div>
                                         <div class="form-group"> 
                                            <label for="inputEmail3" class="col-sm-2 control-label">Product Details</label> 
                                            <div class="col-sm-9"> 
                                                
                                                <textarea class="form-control" name="pdetails" required></textarea>
                                            </div> 
                                        </div>
                                        
                                        
                                        
                                        <div class="col-sm-offset-2"> 
                                            <button type="submit" class="btn btn-primary">Add Product</button> 
                                            <button type="reset" class="btn btn-danger">Reset</button> 
                                            <button type="button" onclick="window.location='display-product.php';" class="btn btn-info">View</button> 
                                        </div> 
                                    </form> 
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
            <!--footer-->
            <?php
            include './themepart/footer.php';
            ?>
            <!--//footer-->
        </div>

        <!-- side nav js -->
        <script src='js/SidebarNav.min.js' type='text/javascript'></script>
        <script>
            $('.sidebar-menu').SidebarNav()
        </script>
        <!-- //side nav js -->

        <!-- Classie --><!-- for toggle left push menu script -->
        <script src="js/classie.js"></script>
        <script>
            var menuLeft = document.getElementById('cbp-spmenu-s1'),
                    showLeftPush = document.getElementById('showLeftPush'),
                    body = document.body;

            showLeftPush.onclick = function () {
                classie.toggle(this, 'active');
                classie.toggle(body, 'cbp-spmenu-push-toright');
                classie.toggle(menuLeft, 'cbp-spmenu-open');
                disableOther('showLeftPush');
            };

            function disableOther(button) {
                if (button !== 'showLeftPush') {
                    classie.toggle(showLeftPush, 'disabled');
                }
            }
        </script>
        <!-- //Classie --><!-- //for toggle left push menu script -->

        <!--scrolling js-->
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>
        <!--//scrolling js-->

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.js"></script>

    </body>
</html>