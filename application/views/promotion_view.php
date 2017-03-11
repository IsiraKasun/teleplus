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
                <a class="navbar-brand page-scroll" href="#page-top">TELEPLUS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="<?php echo base_url();?>home">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">customers</a>
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
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content-normal">
        <a href="" class="btn btn-primary btn-xl page-scroll">Add Promotion</a>
        <p> </p>
          <div class="container">
          
          <div class="panel panel-default">
            <div class="panel-heading"> Promotions</div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th> Promotion ID </th>
                        <th> Type </th>
                        <th> Description </th>
                        <th> Starting date </th>
                        <th> Ending date </th>
                        <th> Added by </th>
                    </tr>
                </thead>

                <tbody>

                    <?php  
                         foreach ($values->result() as $row)  
                         {  
                            ?><tr>  
                            <td><?php echo $row->pro_id;?></td>  
                            <td><?php echo $row->type;?></td>
                            <td><?php echo $row->description;?></td> 
                            <td><?php echo $row->starting_date;?></td> 
                            <td><?php echo $row->ending_date;?></td> 
                            <td><?php echo $row->added_by;?></td>   
                            </tr>  
                         <?php }  
                    ?>  

                </tbody>

            </table>

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
