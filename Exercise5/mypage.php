</DOCTYPE html>
<html>
<head>
	<title>Exercise 5</title>
	<style>
		.error {color: red;}
		body {
			background-image: url("bg1exercise2_WIP.jpg");
		}
		.toppicL{
			position: relative;
			left:0px;
			width:404px;
			height:328px;
		}
		.toppicR{
			position: relative;
			right:-10px;
			width:404px;
			height:328px;
		}
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
		}
		th {
			background-color: #4CAF50;
			color: white;
		}
		td {
			background-color: #F0FFF0;
			color: black;
		}
	</style>
</head>
<body >
	<img src="MyFamily.jpg" alt="Me and my Family" class="toppicL">
	<img src="MySisters.jpg" alt="Me and my Sisters" class="toppicR">
	<table style="width:50%">
		<tr>
			<th>INFO</th>
			<th>DETAILS</th>
		<tr>
			<th>Fullname</th>
				<td>Daniel Vincent Royce Dimalanta Martin</td>
		</tr>
		<tr>
			<th>Nickname</th>
				<td>Royce</td>
		</tr>
		<tr>
			<th>Hobbies & Interests</th>
				<!--<td>Eating different cuisine<br>Playing Games<br>Watching Cartoons,Anime, & Animations<br>Learning new skills</td>-->
				<td>
				Favorite Food:<strong id="triviaF" style="visibility:hidden">Bacon & Pie</strong>
					<button type= "button"
						onclick="document.getElementById('triviaF').style.visibility='visible'">
						Know More!!!
					</button>
				<br>
				Favorite Pasttime:<strong id="triviaP" style="visibility:hidden">Gaming"</strong>
					<button type= "button"
						onclick="document.getElementById('triviaP').style.visibility='visible'">
						Know More!!!
					</button>
				<br>
				Favorite Game:<strong id="triviaG" style="visibility:hidden">Tomba 2</strong>
					<button type= "button"
					onclick="document.getElementById('triviaG').style.visibility='visible'">
					Know More!!!
					</button>
				<br>
				Favorite TV Show:<strong id="triviaT" style="visibility:hidden">Spongeob Squarepants</strong>
					<button type= "button"
						onclick="document.getElementById('triviaT').style.visibility='visible'">
						Know More!!!<
					</button>
				<br>
				Current Favorite Quote:<strong id="triviaQ" style="visibility:hidden">Deepfry the Deep fryer!!!!</strong>
					<button type= "button"
						onclick="document.getElementById('triviaQ').style.visibility='visible'">
						Know More!!!
					</button>
				</td>
		</tr>
		<tr>
			<th>Favorite websites</th>
				<td><a title="https://www.facebook.com" href="https://www.facebook.com">Facebook</a><br>
				<a title="https://www.messenger.com" href="https://www.messenger.com">FB Messenger</a><br>
				<a title="https://www.youtube.com" href="https://www.youtube.com">YouTube</a><br>
				<a title="http://kisscartoon.me" href="http://kisscartoon.me">KissCartoon</a><br>
				<a title="http://kissanime.to" href="http://kissanime.to">KissAnime</a></td>
		</tr>
</body>
</html>