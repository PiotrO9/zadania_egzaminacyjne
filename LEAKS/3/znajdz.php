<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Kwiaty</title>
</head>
<body>
    <header>
        <h1>Moje kwiaty</h1>
    </header>
    <main>
        <section id="left">
            <h3>Kwiaty dla ciebie</h3>
            <a href="https://www.siwatkwiatow.pl/">Rozpoznaj kwiaty</a>
            <a href="znajdz.php">Znajdź kwiaciarnię</a>
            <img src="gozdzik.jpg" alt="Goździk">
        </section>
        <section id="right">
            <div class="images">
                <img src="gerbera.jpg" alt="Gerbera">
                <img src="gozdzik.jpg" alt="Goździk">
                <img src="roza.jpg" alt="Róża">
            </div>
            <p>Podaj miejscowość, w której poszukujesz kwiaciani:</p>
            <form action="znajdz.php" method="POST">
                <input name="miasto" type="text">
                <button>SPRAWDŹ</button>
            </form>
            <?php 
                if(isset($_POST['miasto']))
                {
                    $miasto = $_POST['miasto'];

                    $db = mysqli_connect('localhost', 'root', '', 'kwiaciarnia');
                    $query = mysqli_query($db, "SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto = '$miasto';");

                    while ($row = mysqli_fetch_array($query)) {
                        echo "$row[0], $row[1]";
                    }

                    mysqli_free_result($query);
                    mysqli_close($db);
                }
            ?>
        </section>
    </main>
    <footer>
            <h3>Stronę opracował: 00000000000</h3>
        </footer>
</body>
</html>