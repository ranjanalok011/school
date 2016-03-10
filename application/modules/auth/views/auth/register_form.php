<!DOCTYPE html>
<html>
  <head>
  <title>School | Registration Page</title>
  <?php $this->load->view('../../__inc/head'); ?>
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/iCheck/square/blue.css">
  </head>
  <body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
        <?php //<a href="../../register_form.html">?><b>School </b>LTE</a>
      </div>

      <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>
<?php
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'class'=>'form-control',
		'placeholder'=>'Full name'
	);
}
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'class'=>'form-control',
	'placeholder'=>'Email'
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('Password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'class'=>'form-control',
	'placeholder'=>'password'

);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'class'=>'form-control',
	'placeholder'=>'Confirm Password'
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
	'class'=>'form-control',
	'placeholder'=>'Enter Captcha'
);
?>
<?php echo form_open($this->uri->uri_string()); ?>

	<?php if ($use_username) { ?>
	<div class="form-group has-feedback">
            <?php  echo form_input($username); ?>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
			<span style="color:red;"><?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?></span>
          </div>
		
		
	<?php } ?>
	<div class="form-group has-feedback">
           <?php  echo form_input($email); ?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			<span style="color:red;"><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></span>	
          </div>
		<div class="form-group has-feedback">	
		<?php echo form_password($password); ?>
		<span class="glyphicon glyphicon-lock form-control-feedback"></span>
		<span style="color:red;"><?php echo form_error($password['name']); ?></span>
		</div>	
	
	<div class="form-group has-feedback">
		<?php echo form_password($confirm_password); ?>
		<span class="glyphicon glyphicon-lock form-control-feedback"></span>
		<span style="color:red;"><?php echo form_error($confirm_password['name']); ?></span>
		</div>
	
	<?php if ($captcha_registration) {
		if ($use_recaptcha) { ?>
	
			<div id="recaptcha_image"></div>
		
			<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
			<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
			<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
		
			<div class="recaptcha_only_if_image">Enter the words above</div>
			<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
		
		<?php echo form_error('recaptcha_response_field'); ?>
		<?php echo $recaptcha_html; ?>
	
	<?php } else { ?>
	
			<p>Enter the code exactly as it appears:</p>
			<?php echo $captcha_html; ?><br />
			
		
		<div class="form-group has-feedback">		
		<?php echo form_input($captcha); ?>
		<span class="glyphicon glyphicon-pencil form-control-feedback"></span>
		<span style="color:red;"><?php echo form_error($captcha['name']); ?></span>
		</div>
	
	<?php }
	} ?>

<?php echo form_submit('register', 'Register'); ?>
<?php echo form_close(); ?>

        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using Google+</a>
        </div>

      </div><!-- /.form-box -->
    </div><!-- /.register-box -->

<?php $this->load->view('../../__inc/script');?>
<script src="<?php echo  base_url();?>/assets/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
	 </body>
</html>
