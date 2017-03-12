<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Teleplus </title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url();?>assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url();?>assets/css/creative.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        header .header-content-normal {
              position: absolute;
              text-align: center;
              margin-top: 100px;
              width: 100%;
            }
    </style>

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">TELEPLUS - <?php echo $current_user ?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="<?php echo base_url();?>home">Home</a>
                    </li>
                     <?php 
                        if($_SESSION['admin'] == true) { ?>

                         <li>
                            <a class="page-scroll" href="<?php echo base_url();?>admin">Admin</a>
                        </li>

                     <?php   }

                    ?>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url();?>customers">customers</a>
                    </li>
                     <li>
                        <a class="page-scroll" href="<?php echo base_url();?>feedback">feedback</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Departments</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="">Staff</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url();?>promotion">Promotions</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url();?>logout">Log out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content-normal">

          <div class="container">

          <div class="row">
          
            <ol class="breadcrumb">
              <li class="active"><a href="#">Feedback</a></li>
              <li><a href="#">Agreements</a></li>
              <li><a href="#">Staff</a></li>
            </ol>

             <div class="panel panel-default">
              <div class="panel-body">

              <form class="form-inline" method="post" action="<?php echo base_url();?>admin_controller/getselectedpromotion">
                
                <div class="form-group">
                    <label for="exampleInputName2">Select Promotion</label>
                    <select class="form-control" name="pro_id">
                            <?php  
                                 foreach ($promotion_names->result() as $row)  
                                 { ?>
                                <option value="<?php echo $row->pro_id;?>"><?php echo $row->description ?></option>
                                 <?php }  
                            ?>  
                            </select>
                </div>
                  <button type="submit" class="btn btn-primary"> Get Analysis </button>
                </form>
                
                    
              </div>

               
            </div>

            <div class="panel panel-default">
            <div class="panel-heading"> Feedback Analysis </div>
              <div class="panel-body">

              <?php if(isset($success) && isset($failure)){ 

              ?>
                <h3> Success </h3>
                   <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $success;?>" aria-valuemin="0" aria-valuemax="100" style="<?php echo "min-width: 2em; width: ".$success."%;"?>">
                        <?php echo "".$success."%";?>
                      </div>
                   </div>
                <br/>
                 <h3> Failures </h3>
                   <div class="progress">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="<?php echo "min-width: 2em; width: ".$failure."%;"?>">
                       <?php echo "".$success."%";?> 
                      </div>
                   </div>

              <?php }

              else { ?>

                 <h3> Please select a promotion to view analysis </h3>

             <?php }

              ?>

                 
                    
              </div>

               
         </div>
          
          
        </div>
        </div>


       

    </header>

   

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="assets/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
