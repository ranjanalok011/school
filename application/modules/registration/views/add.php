<!DOCTYPE html>
<html>
<head>
<title>AdminLTE 2 | Starter</title>
<?php 
	$this->load->view('../../__inc/head'); ?>
<link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/datepicker/datepicker3.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/iCheck/all.css">
</head>
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">
  <?php 
	  $this->load->view('../../__inc/header');
	  $this->load->view('../../__inc/sidebar');
	  ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1> Addmission <small>New Application</small> </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url();?>/registration">Application</a></li>
        <li class="active">New</li>
      </ol>
    </section>
    <section class="content">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Registration-cum-Admission Form</h3>
          <div class="pull-right box-tools">
                    <button title="" data-toggle="tooltip" data-widget="collapse" class="btn btn-info btn-sm" data-original-title="Collapse"><i class="fa fa-minus"></i></button>
                    <button title="" data-toggle="tooltip" data-widget="remove" class="btn btn-info btn-sm" data-original-title="Remove"><i class="fa fa-times"></i></button>
                  </div>
        </div>
        <div class="box-body">
		<?php //echo validation_errors(); ?>
		<?php echo form_open(); ?>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Session :</label>
                <select class="form-control" tabindex="1" aria-hidden="true" name="session" id="session">
                  <option selected="selected" value="2016-17">2016-17</option>
                </select>
              </div>
   				<div class="form-group">
                <label>Registration No:</label>
                <input type="text" class="form-control" name="reg_no" id="reg_no">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Class :</label>
                <select class="form-control" tabindex="2" aria-hidden="true" name="class" id="class">
                  <option selected="selected" value="1">1</option>
                  <option value="2">2</option>
                </select>
              </div>
              <div class="form-group">
                <label>Date of Registration :</label>
                <div class="input-group">
                  <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
                  <input type="text" id="reg_date" name="reg_date" class="form-control pull-right active">
                </div>
              </div>
            </div>
            <div class="col-md-4">
			<div class="form-group">
                      <label for="exampleInputFile">Photo :</label>
                      <input type="file" name="photo" id="photo">                    
                    </div>
			</div>
          </div>
		  <div class="row">
            <div class="col-md-12">
			<label>Instruction :-</label>
			</div>
			</div>
		  <div class="row">
            <div class="col-md-6">
          <div class="box box-info">
          	<div class="box-header">
                  <h3 class="box-title"><strong>A. Student's Detail :-</strong></h3>
                </div>
				<div class="box-body">
              <div class="form-group">
                <label>Name :</label>
                <input type="text" class="form-control" name="name" id="name">
				<?php echo form_error('name');?>
              </div>
              <div class="form-group">
                <label> Gender : </label>
                <label>
                <input type="radio" name="gender" class="flat-red" value="m">
                Male </label>
                <label>
                <input type="radio" name="gender" class="flat-red" value="f">
                Female </label>
              </div>
              <div class="form-group">
                <label>Date of Birth :</label>
                <div class="input-group">
                  <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div>
                  <input type="text" id="dob" name="dob" class="form-control pull-right active">
                </div>
              </div>
              <div class="form-group">
                <label>Place of birth :</label>
                <input type="text" class="form-control" name="place_of_bitrh" id="place_of_bitrh">
              </div>
			  <div class="form-group">
                <label>Nationality :</label>
                <select class="form-control" tabindex="2" aria-hidden="true" name="nation" id="nation">
                  <option selected="selected" value="1">Indian</option>
                  <option value="2">Others</option>
                </select>
              </div>
			  <div class="form-group">
                <label>Religion :</label>
                <select class="form-control" tabindex="2" aria-hidden="true" name="religion" id="religion">
                  <option selected="selected" value="1">Hindu</option>
                  <option value="2">Muslim</option>
				  <option value="2">Sikkh</option>
				  <option value="2">Isai</option>
                </select>
              </div>
			  <div class="form-group">
                <label>Category :</label>
                <select class="form-control" tabindex="2" aria-hidden="true" name="cat" id="cat">
                  <option selected="selected" value="1">General</option>
                  <option value="2">BC</option>
				  <option value="2">SC</option>
				  <option value="2">ST</option>
                </select>
              </div>
			  <div class="form-group">
                <label>Unique ID No:</label>
                <input type="text" class="form-control" name="uid" id="uid">
              </div>
			  <div class="form-group">
                <label>BPL Number :</label>
                <input type="text" class="form-control" name="bpl" id="bpl">
              </div>
            </div>
			</div>
            
          </div>
		  <div class="col-md-6">
          <div class="box box-danger">
          	<div class="box-header">
                  <h3 class="box-title"><strong>B. Parent's Detail :-</strong></h3>
                </div>
				<div class="box-body">
              <div class="form-group">
                <label>Father's Name :</label>
                <input type="text" class="form-control" name="f_name" id="f_name">
              </div>
              <div class="form-group">
                <label>Father's Occupation :</label>
                <input type="text" class="form-control" name="f_occupation" id="f_occupation">
              </div>
			  <div class="form-group">
                <label>Father's Qualification :</label>
                <input type="text" class="form-control" name="f_qualification" id="f_qualification">
              </div>
			  <div class="form-group">
                <label>Father's E-mail ID :</label>
                <input type="text" class="form-control" name="f_email" id="f_email">
				<?php echo form_error('f_email');?>
              </div> 
			 <div class="form-group">
                <label>Mother's Name :</label>
                <input type="text" class="form-control" name="m_name" id="m_name">
              </div>
              <div class="form-group">
                <label>Mother's Occupation :</label>
                <input type="text" class="form-control" name="m_occupation" id="m_occupation">
              </div>
			  <div class="form-group">
                <label>Mother's Qualification :</label>
                <input type="text" class="form-control" name="m_qualification" id="m_qualification">
              </div>
			  <div class="form-group">
                <label>Mother's E-mail ID :</label>
                <input type="text" class="form-control" name="m_email" id="m_email">
				<?php echo form_error('m_email');?>
              </div>   
            </div>
			</div>
          </div>
		  </div>
          <div class="col-md-12">
		  <div class="box box-info">
          	<div class="box-header">
                  <h3 class="box-title"><strong>Address</strong></h3>
              </div>
				<div class="box-body">
			<div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Village :</label>
                <input type="text" class="form-control" name="village" id="village">
              </div>
   				<div class="form-group">
                <label>Post :</label>
                <input type="text" class="form-control" name="post" id="post">
              </div>
			  <div class="form-group">
                <label>Via :</label>
                <input type="text" class="form-control" name="via" id="via">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Police Station :</label>
                <input type="text" class="form-control" name="police_station" id="police_station">
              </div>
              <div class="form-group">
                <label>District :</label>
                <input type="text" class="form-control" name="district" id="district">
              </div>
			  <div class="form-group">
                <label>State :</label>
                <input type="text" class="form-control" name="state" id="state">
              </div>
            </div>
            <div class="col-md-4">
			<div class="form-group">
                <label>Country :</label>
                <input type="text" class="form-control" name="country" id="country">
              </div>
			  <div class="form-group">
                <label>PIN :</label>
                <input type="text" class="form-control" name="pin" id="pin">
              </div>
			  <div class="col-md-12">
			<div class="box-footer">
                    <button class="btn btn-primary" type="submit">Submit</button>
                  </div>
			</div>
			</div>
          </div>
		  </div>
		  </div>
		 </div>
		 <?php echo form_close(); ?>
        </div>
      </div>
    </section>
  </div>
  <?php
	  $this->load->view('../../__inc/footer');
	  $this->load->view('../../__inc/control_sidebar');
		?>
  <div class="control-sidebar-bg"></div>
</div>
<?php $this->load->view('../../__inc/script'); ?>
<script src="<?php echo base_url();?>/assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo  base_url();?>/assets/plugins/iCheck/icheck.min.js"></script>
<script type="text/javascript">
	$('#reg_date').datepicker({
	format:'dd/mm/yyyy'
	});
	$('#dob').datepicker({
	format:'dd/mm/yyyy'
	});
	
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });
	</script>
</body>
</html>
