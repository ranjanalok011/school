<!DOCTYPE html>
<html>
  <head>
  <title>AdminLTE 2 | Log in</title>
  <?php $this->load->view('../../__inc/head'); ?>
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/iCheck/square/blue.css">
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
       <b>Admin </b>LTE</a>
      </div>
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or login';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<?php echo form_open($this->uri->uri_string()); ?>

		<div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username" name="login" value="" id="login" maxlength="80">
			<?php //echo form_input($login); ?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			<span style="color:red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></span>
          </div>
		  
		<div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" id="password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
			<span style="color:red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></span>
          </div>
<div class="row">
            <div class="col-xs-12">
	<?php if ($show_captcha) {
		if ($use_recaptcha) { ?>
	
			<div id="recaptcha_image"></div>
		
			<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
			<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
			<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
		
			<div class="recaptcha_only_if_image">Enter the words above</div>
			<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
		<input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />
		<?php echo form_error('recaptcha_response_field'); ?>
		<?php echo $recaptcha_html; ?>
	
	<?php } else { ?>
	
			<p>Enter the code exactly as it appears:</p>
			<?php echo $captcha_html; ?><br /><br />
		<?php echo form_label('Confirmation Code', $captcha['id']); ?>
		<?php echo form_input($captcha); ?>
		<?php echo form_error($captcha['name']); ?>
	
	<?php }
	} ?>
	</div></div>
	<br>
	<div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                 <?php echo form_checkbox($remember); ?>
				 <?php echo form_label('Remember me', $remember['id']); ?>
                </label>
              </div>
            </div>
            <div class="col-xs-4">
              <input type="submit" class="btn btn-primary btn-block btn-flat" name="submit" value="Sign In">
            </div>
          </div>


<div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->

        <?php echo anchor('/auth/forgot_password/', 'I forgot my password'); ?><br>
        <?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Register a new membership'); ?>
		<?php echo form_close(); ?>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
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