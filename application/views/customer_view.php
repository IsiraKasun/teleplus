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

          <div class="container-fluid">

          <div class="row">
                
                <div class="col-sm-4">


                    <div class="panel panel-default">
                    <div class="panel-heading"> Add customer</div>
                    <div class="panel-body">

                        <?php echo validation_errors() ?>
                        <?php echo form_open('customer_controller/add_new_customer'); ?>
                        <?php if (isset($loginerror)) echo $loginerror ?>
                          <div class="form-group">
                            <input type="text" class="form-control" id="username" placeholder="Customer Name" name="cus_name">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="password" placeholder="Contact Number" name="con_num">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="password" placeholder="Custome Detail URL" name="cus_detail_URL">
                          </div>
                        
                          <button type="submit" class="btn btn-primary"> Add </button>
                    </form>
                    

                </div>
                </div>

                </div>

                <div class="col-sm-8">

                <div class="panel panel-default">
                    <div class="panel-heading"> Customers</div>
                        <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th> Customer ID </th>
                                <th> Name </th>
                                <th> Customer Detail URL </th>
                                <th> Contact Number </th>

                            </tr>
                        </thead>

                        <tbody>

                            <?php  
                                 foreach ($values->result() as $row)  
                                 {  
                                    ?><tr>  
                                    <td><?php echo $row->cus_id;?></td>  
                                    <td><?php echo $row->cus_name;?></td>
                                    <td><?php echo $row->cus_detail_URL;?></td> 
                                    <td><?php echo $row->con_num;?></td>  
                                    </tr>  
                                 <?php }  
                            ?>  

                        </tbody>

                    </table>

                </div>
                </div>
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
