<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styl.css">
    <title>Pokoje</title>
</head>
<body>
<header>
        <h2>WYNAJEM POKOI</h2>
        <div class="menu">
            <section class="menu1">
                <a href="index.html">POKOJE</a>
            </section>
            <section class="menu2">
                <a href="cennik.php">CENNIK</a>
            </section>
            <section class="menu3">
                <a href="kalkulator.html">KALKULATOR</a>
            </section>
        </div>
    </header>
    <main>
        <section class="left">

        </section>
        <section class="middle">
            <h2>Cennik</h2>
            <?php
                $bd = mysqli_connect("localhost", 'root', '', 'wynajem');
                $query = mysqli_query($bd ,"SELECT * FROM pokoje");

                echo "<table>";
                foreach($query as $row)
                {
                    echo "<tr>";
                    echo "<td>".$row['id']."<td>";
                    echo "<td>".$row['nazwa']."<td>";
                    echo "<td>".$row['cena']."<td>";
                    echo "</tr>";
                }
                echo "</table>";

                mysqli_free_result($query);
                mysqli_close($bd);
            ?>
        </section>
        <section class="right">

        </section>
    </main>
    <footer>
        <p>Stronę opracował: 000000000000000</p>
    </footer>
</body>
</html>