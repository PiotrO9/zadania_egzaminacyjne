<!DOCTYPE html>
<html lang="pl-PL">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Karty wędkarskie</title>

	<link rel="stylesheet" href="style.css">
</head>

<body>
	<header class="baner">
		<h2>Zgłoszenie na kartę wędkarską</h2>
	</header>
	<section id="main">
		<h4>Formularz - karta wędkarska</h4>
		<form action="form_data_req.php" method="POST">
			<p>imię:</p><input type="text" name="imie" />
			<p>nazwisko:</p><input type="text" name="nazwisko" />
			<p>tekst:</p><input type="text" name="tekst" size="30" />
			<p><input type="reset" value="CZYŚĆ" />
				<input type="submit" value="ZAPISZ" />
			</p>
		</form>
	</section>
	<section id="typy">
		<h4>Typy łowisk</h4>
		<ul>
			<li>Zalewy</li>
			<li>Stawy</li>
			<li>Jeziora</li>
			<li>Rzeki</li>
		</ul>
	</section>

	<section id="srodek">
		<img src="wedka.png" alt="karta wędkarska" />
	</section>

	<section id="prawy">
		<p style="margin-bottom: 20px;">Stronę przygotował: Jan Kupczyk</p>
		<a href="http://www.kartawedkarska.pl/">Karta wędkarska</a>
	</section>
</body>

</html>




















































<!-- Jan Kupczyk -->