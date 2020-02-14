<!DOCTYPE HTML>
<html>

<head>
    <title>ECOJER</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/core.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/components.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/icons/fontawesome/styles.min.css">

    <script type="text/javascript" src="<?php echo base_url() ?>assets/backend/lib/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/backend/lib/js/tether.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/backend/lib/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url() ?>assets/backend/js/app.min.js"></script>
</head>

<body>
    <div class="page-container">
        <!-- PAGE CONTENT -->
        <div class="content h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="login card auth-box mx-auto my-auto">
                        <div class="card-block text-center">
                            <div class="user-icon">
                                <i class="fa fa-user-circle"></i>
                            </div>
                            <br/>
                            <h2 class="text-light">Ecojer</h2>
                            <h5 class="text-light">Admin Login</h5> 
                            <form action="<?php echo base_url() ?>adminLogin" method="post">
                            <div class="user-details">

                                 <div class="row">
                                <div class="col-md-12">
                                    <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                                </div>
                            </div>
                            <?php
                            
                            $error = $this->session->flashdata('error');
                            if($error)
                            {
                                ?>
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <?php echo $error; ?>                    
                                </div>
                            <?php }
                            $success = $this->session->flashdata('success');
                            if($success)
                            {
                                ?>
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <?php echo $success; ?>                    
                                </div>
                            <?php } ?>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-user"></i>
                                        </span>
                                       <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                                <i class="fa fa-key"></i>
                                            </span>
                                       <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                            </div>

                            <button name="login" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                            
                            </form>
                            <div class="user-links">
                               <!--  <a href="<?php echo base_url(); ?>forgotPassword" class="pull-left">Forgot Password?</a> 
                                 <span class="pull-right">Developed by <a href="https://www.protegeglobal.com">ProtegeGlobal</a></span> -->
                            </div>

                            <div class="user-links">
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /PAGE CONTENT -->
    </div>
</body>

</html>