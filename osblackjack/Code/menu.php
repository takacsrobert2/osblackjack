<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8"/>
	<title>Blackjack</title>
	<?php include('user/session.php'); ?>
</head>
<link href="style.css" rel="stylesheet">
<body>
	<ul class="menu">
		<form method="POST">
		 <?php if (array_key_exists('username', $_SESSION)): ?>
				<input type="hidden" name="action" value="logout" />
				<button class="menubutton" type="submit" formaction="game.php"><span>JÁTÉK</span></button><br>
		 		<button class="menubutton" type="submit" formaction="rules.php"><span>SZABÁLYOK</span></button></br>
				<button class="menubutton" type="submit" formaction="user/server.php?action=logout"><span>KILÉPÉS</span></button></br>
			<?php else: ?>
				<button class="menubutton" type="submit" formaction="rules.php"><span>SZABÁLYOK</span></button></br>
		 		<button class="menubutton" type="submit" formaction="user/login.php"><span>BELÉPÉS</span></button></br>
				<button class="menubutton" type="submit" formaction="user/register.php"><span>REGISZTRÁCIÓ</span></button>
			<?php endif; ?>
		</form>
	</ul>
	<h1>‎‎‏‏‎ ‎‏‏‎ ‎‏‏‎ ‎‏‏‎‏‏‎ ‎Blackjack</h1>
</body>
</html>