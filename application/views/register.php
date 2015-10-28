<div id="register">
<span><?php echo validation_errors(); ?></span>
<h1>Registration form<h1>
<?php
 
echo form_open('home/register_check');
$label = array('style' => 'font-weight:bold;color:black;font-size:20px;');
echo form_label('Username: ', 'username', $label).'<span>*</span><br/>';
$data = array(
              'name'        => 'username',
              'id'          => 'username',
              'value'       => set_value('username'),
			  'maxlength'   => '30',
              'size'        => '40',
              'style'       => 'height:25px'
            );

echo form_input($data);
echo "<p>";

echo form_label('Firstname: ', 'firstname', $label).'<span>*</span><br/>';
$data = array(
              'name'        => 'firstname',
              'id'          => 'firstname',
              'value'       => set_value('firstname'),
			  'maxlength'   => '30',
              'size'        => '40',
              'style'       => 'height:25px'
            );

echo form_input($data);
echo "<p>";

echo form_label('Lastname: ', 'lastname', $label).'<span>*</span><br/>';
$data = array(
              'name'        => 'lastname',
              'id'          => 'lastname',
			  'value'       => set_value('lastname'),
			  'maxlength'   => '30',
              'size'        => '40',
              'style'       => 'height:25px'			  
            );

echo form_input($data);
echo "<p>";

echo form_label('Email: ', 'email', $label).'<span>*</span><br/>';
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

echo form_label('Password: ', 'password', $label).'<span>*</span><br/>';
$data = array(
              'name'        => 'password',
              'id'          => 'password',
			  'maxlength'   => '30',
              'size'        => '40',
              'style'       => 'height:25px'
            );
echo form_password($data);
echo "<p>";

echo form_label('Re-type Password: ', 're-password', $label).'<span>*</span><br/>';
$data = array(
              'name'        => 're-password',
              'id'          => 're-password',
			  'maxlength'   => '30',
              'size'        => '40',
              'style'       => 'height:25px'
            );
echo form_password($data);
echo "<p>";

echo form_label('Gender: ', 'gender', $label);
$data = array(
    'name'        => 'gender',
    'id'          => 'male',
    'value'       => 'male',
    'checked'     => TRUE,
    'style'       => 'margin:10px',
    );
echo form_radio($data);
echo form_label('Male', 'male', $label);

$data = array(
    'name'        => 'gender',
    'id'          => 'female',
    'value'       => 'female',
    'style'       => 'margin:10px',
    );
echo form_radio($data);
echo form_label('Female', 'female', $label);
echo "<p>";

echo form_label('Phone no: ', 'phone', $label).'<span>*</span><br/>';
$data = array(
              'name'        => 'phone',
              'id'          => 'phone',
			  'value'       => set_value('phone'),
			  'maxlength'   => '30',
              'size'        => '40',
              'style'       => 'height:25px'			  
            );

echo form_input($data);
echo "<p>";

echo form_label('Country: ', 'country', $label);
$options = array(
			'uk'    => 'United Kingdom',
			'us'   => 'United States',
			'india'  => 'India',
			'china' => 'China',
			'france' => 'France',
			'japan' => 'Japan',
			'korea' => 'Korea'
                );
echo form_dropdown('country', $options, 'india');
echo "<p>";

echo form_label('About me: ', 'about', $label).'<br/>';
$data = array(
              'name'        => 'about',
              'value'       => set_value('about'),
			  'maxlength'   => '200',
              'rows'        => '15'
            );
echo form_textarea($data);
echo "<p>";

echo form_submit('register', 'Register Now!');

echo form_close();

?>

</div>