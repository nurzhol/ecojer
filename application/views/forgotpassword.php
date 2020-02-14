<!DOCTYPE HTML>
<html>

<head>
    <title>Web Application - Pakistan Institute of Management</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/core.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/components.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/icons/fontawesome/styles.min.css">

    <script type="text/javascript" src="<?php echo base_url() ?>assets/lib/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/lib/js/tether.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/lib/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/app.min.js"></script>
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
                            <h5 class="text-light">Pakistan Institute of Management</h5>
                            <h4 class="text-light">Forgot Password</h4> 
                            <div class="user-details">
                           
                            
                            
                            

                              <form action="<?php echo base_url() ?>user/resetPasswordUser" method="post" class="new-cust">

                                    <div class="form-horizontal">
                                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div><br />'); ?>

                                        <?php
                                        
                                        $invalid = $this->session->flashdata('invalid');
                                        if($invalid)
                                        {
                                            ?>
                                            <div class="alert alert-danger alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <?php echo $invalid; ?>                    
                                            </div>
                                            <br />
                                        <?php }
                                        $success = $this->session->flashdata('success');
                                        if($success)
                                        {
                                            ?>
                                            <div class="alert alert-success alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <?php echo $success; ?>                    
                                            </div>
                                            <br />
                                        <?php } 
                                    $send = $this->session->flashdata('send');
                                        if($send)
                                        {
                                            ?>
                                            <div class="alert alert-success alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <?php echo $send; ?>                    
                                            </div>
                                            <br />
                                        <?php } 
                                    $notsend = $this->session->flashdata('notsend');
                                        if($notsend)
                                        {
                                            ?>
                                            <div class="alert alert-danger alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <?php echo $notsend; ?>                    
                                            </div>
                                            <br />
                                        <?php } ?>
                                        <div class="form-group required">
                                            <label class="txt-field" for="email">E-Mail<span>*</span></label>
                                            <div class="form-boxes">
                                                <input type="email"  name="email" class="form-control" id="email" required value="<?php echo set_value('email');?>"/>
                                            </div>

                                        </div>
                              
                                    </div>
                                     <button name="login" type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                                </form>

                              <p class="mb-0">
                                <a href="<?php echo base_url(); ?>">Login</a>
                              </p>
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
