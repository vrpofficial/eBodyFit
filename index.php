<?php
include_once('bodyfit_header.php');
?>
<head>
<link href='Home_css/bg_css.css' type='text/css' rel='stylesheet'/>
<link href='Home_css/video_css.css' type='text/css' rel='stylesheet'/>
<link href='Home_css/linkslider_css.css' type='text/css' rel='stylesheet'/>
<link href='Home_css/login_css.css' type='text/css' rel='stylesheet'/>
<script src='jquery_files/jquery_main.js' type='text/javascript'></script>
<script src='jquery_files/jquery.cycle.all.js' type='text/javascript'></script>
<script src='jquery_files/linkslider.js' type='text/javascript'></script>
<style>
	input[type=text], input[type=password]{
		width:100%;
		padding:12px 20px;
		margin:8px 0;
		display:inline-block;
		border:1px solid #ccc;
		box-sizing:border-box;
	}
	button.loginbtn{
		background-color:#4caf50;
		color:white;
		padding:14px 20px;
		margin:8px 0;
		border:none;
		cursor:pointer;
		width:100%;
		border-radius:5px;
	}
	button.loginbtn:hover{
		opacity:0.8;
	}
</style>
<script>
var modal=document.getElementById('id01');
window.onclick=function(event) {
	if(event.target == modal){
		modal.style.display="none";
	}
}
</script>
</head>
	<div class='link_container'>
		<div class='slider_outer'>
			
				<div class='slider_inner' id='slider_link'>
				<img src='pics/david1.jpg' class='active'></img>
				<img src='pics/david2.jpg' ></img>
				<img src='pics/jeff1.jpg' ></img>
				<img src='pics/jeff2.jpg' ></img>
				<img src='pics/loth1.jpg' ></img>
				<img src='pics/segi1.jpg' ></img>
				<img src='pics/sergi2.jpg' ></img>
				</div>
			
		</div>
	</div>
	<div>
		<aside>
			<div align='center'>
				<a href='#signup'><button class='logbtn' style='width:auto;'>SIGN UP</button></a>
			</div>
			<div align='center'>
				<button class='logbtn' onclick="document.getElementById('id01').style.display='block'" style='width:auto;'>LOGIN</button>
			</div>
			<div id='id01' class='modal'>
				<form class='modal_content animate' action=''>
					<div class='imgcontainer'>
						<span onclick="document.getElementById('id01').style.display='none'" class='close' title='close modal'>&times;</span>
						<img src='pics/male_icon.png' alt='avatar' class='avatar'></img>
					</div>
					<div class='container'>
						<label><b>EmailId</b></label>
						<input type='text' placeholder='Enter EmailId' name='uname' required></input>
						
						<label><b>Password</b></label>
						<input type='password' placeholder='Enter Password' name='Password' required></input>
						
						<button class='loginbtn' type='submit'>Login</button>
					</div>
				</form>
			</div>
		</aside>
		<aside class='video_maincontain'>
			<div id='first_vid'>
				<div id='vid1'>
					<video src='Videos/davidlaid.mp4' controls autoplay muted loop></video>
				</div>
				<div id='viddesc1'>
					"Legends are not born , They are made."
				</div>
			</div>
			<div id='second_vid'>
				<div id='vid2'>
					<video src='Videos/jeffseid.mp4' controls autoplay muted loop></video>
				</div>
				<div id='viddesc1'>
					"NO PAIN, NO GAIN."
				</div>
			</div>
			<div id='third_vid'>
				<div id='vid3'>
					<video src='Videos/sergi.mp4' controls autoplay muted loop></video>
				</div>
				<div id='viddesc1'>
					"Be Stronger than your yesterday."
				</div>
			</div>
		</aside>
	</div>
	
<?php
include_once('bodyfit_footer.php');
?>
	