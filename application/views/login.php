<div id="login">
<span><?php echo validation_errors(); ?></span>

<?php
echo form_fieldset('<h1>Login form</h1>');
echo form_open('home/login_check');
$data = array('style' => 'font-weight:bold;color:black;font-size:22px;');
echo form_label('Email: ', 'email', $data);
$data = array(
              'name'        => 'email',
              'id'          => 'email',
			  'value'       => set_value('email'),
			  'maxlength'   => '30',
              'size'        => '40',
              'style'       => 'height:25px'
			);
echo form_input($data);
echo "<p>";

$data = array('style' => 'font-weight:bold;color:black;font-size:22px;');
echo form_label('Password: ', 'password', $data);
$data = array(
              'name'        => 'password',
              'id'          => 'password',
              'value'       => set_value('password'),
              'maxlength'   => '30',
              'size'        => '40',
              'style'       => 'height:25px'
			);
echo form_password($data);
echo "<p>";

echo form_submit('login', 'Login');

echo form_close();
echo form_fieldset_close();
?>

</div>