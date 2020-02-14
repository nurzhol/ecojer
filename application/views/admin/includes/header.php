<!DOCTYPE HTML>
<html>

<head>
    <title>Ecojer</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/core.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/components.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/icons/fontawesome/styles.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/lib/css/chartist.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/jquery.validate.css">
    
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/chosen.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/three-dots.css">
    <!-- <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/backend/css/thirdparty/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> -->
    <style>
        #overlay{
             position: fixed;
            top: 45%;
            left: 45%;
            z-index: 99999;
  
        }
    </style>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/backend/lib/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/backend/lib/js/tether.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/backend/lib/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url() ?>assets/backend/lib/js/chartist.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/backend/js/app.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/backend/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/backend/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/backend/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/backend/js/jszip.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/backend/js/pdfmake.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/backend/js/vfs_fonts.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/backend/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/backend/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/backend/js/jquery.validate.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/backend/js/jquery.methods.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/backend/js/jquery.blockUI.js"></script>
      <script type="text/javascript" src="<?php echo base_url() ?>assets/backend/lib/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/js/vue.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/js/jspdf.min.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/js/chosen.jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/backend/js/html2canvas.min.js"></script> 
    <script src="<?php echo base_url() ?>assets/backend/js/jspdf.plugin.autotable.js"></script> 
    <script src="<?php echo base_url() ?>assets/backend/js/dataTables.export.js"></script> 
    <style>
    .chosen-container.chosen-with-drop .chosen-drop {
        position: relative;
    }
    .dt-buttons {
            margin : 10px;
        }

        </style>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/backend/css/highcharts_date_range_grouping.css">
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="https://code.highcharts.com/modules/cylinder.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <!-- <script  charset="utf-8" src="<?php echo base_url() ?>assets/backend/lib/thirdparty/summernote/summernote-bs4.min.js"></script> -->
    <!-- <script  charset="utf-8" src="<?php echo base_url() ?>assets/backend/lib/thirdparty/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" />
</head>

<body>
 <!-- NAVBAR -->
<nav class="navbar navbar-toggleable-md">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav">
    <span>
        <i class="fa fa-code-fork"></i>
    </span>
</button>

<button class="navbar-toggler navbar-toggler-left" type="button" id="toggle-sidebar">
    <span>
       <i class="fa fa-align-justify"></i>
    </span>
</button>

<a class="navbar-brand logo" href="<?php echo base_url() ?>">
    <img style="width:150px;" src="<?php echo base_url() ?>assets/backend/img/logo.png" alt="PIM">
</a>



<div class="collapse navbar-collapse" id="navbarNav">
    <button class="sidebar-toggle btn btn-flat" id="toggle-sidebar-desktop">
        <span>
            <i class="fa fa-align-justify"></i>
        </span>
    </button>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle dropdown-has-after" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <img src="<?php echo base_url() ?>assets/backend/uploads/users/<?php echo $this->session->userdata('image') ?>" alt="" class="user-img"> <?php echo ucfirst($this->session->userdata('first_name')) ?>&nbsp;<?php echo ucfirst($this->session->userdata('last_name')) ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">
                    <i class="fa fa-user"></i> <span>Profile</span>
                </a>
                <a class="dropdown-item" href="<?php echo base_url() ?>adminLogout">
                    <i class="fa fa-sign-out"></i> <span>Logout</span>
                </a>
            </div>
        </li>
    </ul>
</div>
</nav>