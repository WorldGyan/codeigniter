<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $title;  ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link href="<?php echo base_url(); ?>css/main.css" rel="stylesheet" type="text/css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->

   <!--  load header start -->
   <?php     $this->load->view($header);   ?>
   <!--  load header end -->

    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>

        <!-- start:load aside -->
        <?php $this->load->view($aside);  ?>
        <!-- end:load aside -->

         <!-- Strat: Essential javascripts for application to work-->
    <script src="<?php echo base_url(); ?>js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo base_url(); ?>js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/plugins/chart.js"></script>
     <!-- End : Essential javascripts for application to work-->
     
        <!-- start: load content part  -->
        <?php $this->load->view($content);  ?>
         <!-- end: load content part  -->


   
    
  </body>
</html>