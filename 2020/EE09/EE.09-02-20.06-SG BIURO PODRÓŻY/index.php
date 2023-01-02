<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl3.css">
    <title>Wycieczki i urlopy</title>
</head>
<body>
    <header>
        <h1>BIURO PODRÓŻY</h1>
    </header>
    <main>
        <aside class="left">
            <h2>KONTAKT</h2>
            <a href="biuro@wycieczki.pl">napisz do nas</a>
            <p>telefon: 555666777</p>
        </aside>
        <div class="middle">
            <h2>GALERIA</h2>
            <div class="images">
                <?php 
                $bd = mysqli_connect('localhost', 'root','','egzamin3');
                $query = mysqli_query($bd,"SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis ASC");
                
                foreach ($query as $row) {
                    $src = $row['nazwaPliku'];
                    $alt = $row['podpis'];
                    echo "<img src=\"$src\" alt=\"$alt\">";
                }
                
                mysqli_free_result($query);
                mysqli_close($bd);
                ?>
            </div>
        </div>
        <aside class="right">
            <h2>PROMOCJE</h2>
            <table>
                <thead>
                    <tr>
                        <td>Jesień</td>
                        <td>Grupa 4+</td>
                        <td>Grupa 10+</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>5%</td>
                        <td>10%</td>
                        <td>15%</td>
                    </tr>
                </tbody>
            </table>
        </aside>
    </main>
    <div class="trips">
        <h2>Lista wycieczek</h2>
        <div class="tripslist">
            <?php
                $bd = mysqli_connect('localhost', 'root','','egzamin3');
                $query = mysqli_query($bd,"SELECT id, dataWyjazdu, cel, cena FROM wycieczki");
            
                foreach ($query as $row) {
                    echo $row['id'].'. '.$row['dataWyjazdu'].', '.$row['cel'].', '.$row['cena'].'<br>';
                }

                mysqli_free_result($query);
                mysqli_close($bd);
            ?>
        </div>
    </div>
    <footer>
        <p>Strone wykonał: 0000000000</p>
    </footer>
</body>
</html>