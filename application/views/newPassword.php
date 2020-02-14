<link href="<?php echo base_url(); ?>assets_front/css/login.css" type="text/css" rel="stylesheet" media="screen" />
<style>
        .btn-ryt:hover {
            color :white;
        }
</style>
<div class="container eq-height">

    <ul class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="<?php echo base_url('login'); ?>">User Login</a></li>
    </ul>

    
    
    <div class="container">
      <div class="inner-head3">
            <h1 style="color: #95a83f">Create Password</h1>
        </div>
        <div class="row ">
            <div class="col-sm-6" style="margin-top :100px">
                <form  action="<?php echo base_url() ?>user/createPasswordUser" method="post" class="new-cust">

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
                            <label class="txt-field" for="email">Email<span>*</span></label>
                            <div class="form-boxes">
                                <input type="hidden" name="activation_code" value="<?php echo $activation_code;?>">
                                <input type="email"  name="email" class="form-control" id="email" readonly value="<?php echo $email;?>" />
                            </div>

                        </div>

                          <div class="form-group required">
                            <label class="txt-field" for="password">New - Password<span>*</span></label>
                            <div class="form-boxes">
                                <input type="password"  name="password" class="form-control" id="password" required value="<?php echo set_value('password');?>"/>
                            </div>

                        </div>

                          <div class="form-group required">
                            <label class="txt-field" for="cpassword">New - Confirm Password<span>*</span></label>
                            <div class="form-boxes">
                                <input type="password"  name="cpassword" class="form-control" id="cpassword" required value="<?php echo set_value('cpassword');?>"/>
                            </div>

                        </div>
              
                    </div>

                     <div style="float: left;margin: 15px;color: #95a83f;text-decoration-line: underline;font-size: 18px;">
                        <a href="<?php echo base_url("login");?>" type="submit">Login</button>
                    </div>

 
                    <div class="right-btn">
                        <button class="btn-ryt" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        
            <div class="col-sm-6">
                <div class="new-cust">
                    <div class="top-txt-l">
                        <h2>Guest Customer</h2>
                        <p>Save time now.<br><span>You don't need an account to checkout.</span></p>
                    </div>
                    <div class="right-btn">
                        <a href="<?php echo base_url("Guest");?>" class="btn-ryt">Continue as Guest</a>
                    </div>
                </div>
        
                
        
        
            </div>
        </div>
    </div>

</div>
