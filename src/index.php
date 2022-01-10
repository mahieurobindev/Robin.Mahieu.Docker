<?php
echo 'Hello from <a href="https://jrcan.dev.netlib.re/">JrCanDev</a> <br>';
echo '<img src="https://www.docker.com/sites/default/files/horizontal.png">';
echo '<p>update : 10 jan. 2022 à 16h09 </p>';
?>

<form method="GET" action="index.php">
            <p>
                <input type="text" name="operande1"/>
            </p>
            <p>
                <input type="text" name="operande2"/>
            </p>
            <p>
                <input type="radio" value="+" name="addition"/> addition
            </p>
            <p>
                <input type="radio" value="-" name="soustraction"/> soustraction
            </p>
            <p>
                <input type="radio" value="x" name="multiplication"/> multiplication
            </p>
            <p>
                <input type="radio" value="*" name="division"/> division
            </p>
            <p>
                <input type="submit" value="Calculer">
            </p>
        </form>
        <?php
            $a = $_GET['operande1'];
            $b = $_GET['operande2'];
 
            if ($i=$a+$b) {
                    $i=$a+$b;
                    echo '<p>' . $a . ' + ' . $b . ' = ' . $i . '</p>';
                } elseif ($i=$a-$b) {
                    $i=$a-$b;
                    echo '<p>' . $a . ' - ' . $b . ' = ' . $i . '</p>';
                } elseif ($i=$a*$b) {
                    $i=$a*$b;
                    echo '<p>' . $a . ' x ' . $b . ' = ' . $i . '</p>';
                } elseif ($i=$a%$b) {
                    $i=$a%$b;
                    echo '<p>' . $a . ' % ' . $b . ' = ' . $i . '</p>';
                } else {
                    echo '<p>Erreur</p>';
                }
?>