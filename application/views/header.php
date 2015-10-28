<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home Page</title>
<style>
body, html{
margin:0;
padding:0;
}

body{
background-color:#eee;
}

#main{
width: 600px;
margin: auto;
border-radius: 6px;
background-color:LightGoldenRodYellow;
}

#nav{
margin:40px auto;
width:400px;
background-color:#666;
padding:10px 15px;
height:25px; 
border-radius: 6px;
}

#nav ul{
margin:5px 10px;
list-style:none;
float:left;
text-decoration:none;
}

#nav ul li{
display: inline;
text-decoration:none;
padding: 0 10px;
}

#nav a{
color:#fff;
font-size:20px;
font-weight:bold;
text-decoration:none;
}

#nav a:hover{
color:orange;
text-decoration:none;
}

#footer{
width:450px;
padding:20px;
height:15px;
margin:0 auto;
color: darkgreen;
}
 
#login{
padding: 5px 30px;
} 

#register{
padding: 30px;
} 

input[type=submit]{
border-radius:5px;
font-weight:bold;
background-color:#000;
color:#fff;
font-size:20px;
margin:0px 40px;
border-color:darkgreen;
}

span{
color:darkred;
}
</style>
</head>
 
<body>
<div id="main">
<div id="nav">
<ul>
<li><a href = '<?php echo base_url()."home/index"?>'>Home</a></li>
<?php
if($this->session->userdata('is_logged_in')){ 
?>
<li><a href = '<?php echo base_url()."home/logout"?>'>Logout</a></li>
<?php 
} else {
?>
<li><a href = '<?php echo base_url()."home/register"?>'>Register</a></li>
<li><a href = '<?php echo base_url()."home/login"?>'>Login</a></li>
<?php } ?>
<li><a href = '<?php echo base_url()."home/about"?>'>About</a></li>
</ul>
</div>
