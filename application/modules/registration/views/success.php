<!DOCTYPE html>
<html>
  <head>
    <title>AdminLTE 2 | Starter</title>
    <?php 
	$this->load->view('../../__inc/head'); ?>
  </head>
  <body class="hold-transition skin-yellow sidebar-mini">
    <div class="wrapper">
      <?php 
	  $this->load->view('../../__inc/header');
	  $this->load->view('../../__inc/sidebar');
	  ?>
      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            Page Header
            <small>Optional description</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>
        <section class="content">
		<h3>Your form was successfully submitted!</h3>

<p><?php echo anchor('form', 'Try it again!'); ?></p>
        </section>
      </div>
       <?php
	  $this->load->view('../../__inc/footer');
	  $this->load->view('../../__inc/control_sidebar');
		?>
      <div class="control-sidebar-bg"></div>
    </div>
	<?php $this->load->view('../../__inc/script'); ?>
  </body>
</html>
