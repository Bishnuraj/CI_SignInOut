<span>
<?php
if($this->session->userdata('is_logged_in')){
	echo "Welcome ";
	foreach($user as $name){
	echo $name->user_name;}
	echo ", its time for MVC architecture. ";
}	
?>
</span>
<canvas id="myCanvas" width="578" height="200"></canvas>
    <script>
      var canvas = document.getElementById('myCanvas');
      var context = canvas.getContext('2d');

      context.font = '40pt Calibri';
      context.fillStyle = 'blue';
      context.fillText('FLUIDAGAIN!!!', 150, 100);
    </script>
