<?php
$fileContent = file_get_contents("data.csv");
$deckRaw = explode(";", $fileContent);
array_pop($deckRaw);
$rowNumber = count($deckRaw) / 5;
$j = 0;
$deck = [];

// Dividiamo il contenuto del file in righe
for ($i = 0; $i < $rowNumber; $i++) {
    $temp = [];
    for (; $j < 5 * ($i + 1); $j++) {
        array_push($temp, $deckRaw[$j]);
    }
    array_push($deck, $temp);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <form action="./index.php" method="GET">
        <input type="number" name="priceMin" value="0"><label for="">prezzo minimo</label><br>
        <input type="number" name="priceMax" value="0"><label for="">prezzo massimo</label><br>
        <input type="number" name="areaMin" value="0"><label for="">area minima</label><br>
        <input type="number" name="areaMax" value="0"><label for="">area massima</label><br>
        <input type="submit" value="submit" name="submit">
    </form>

    <div class="container">
        <table>
            <tr>
                <th>codice_immobile</th>
                <th>descrizione</th>
                <th>dimensione_mq</th>
                <th>comune</th>
                <th>costo_mensile_eur</th>
            </tr>
            <?php
            // Sono stati inseriti filtri?
            if (isset($_GET["submit"])) {
                $priceMin = $_GET["priceMin"]; 
                $priceMax = $_GET["priceMax"]; 
                $areaMin = $_GET["areaMin"]; 
                $areaMax = $_GET["areaMax"];

                checkValuesMax(4, $priceMax);
                checkValuesMax(3, $areaMax);
                checkValuesMin(4, $priceMin);
                checkValuesMin(3, $areaMin);

                for ($i = 0; $i < count($deck); $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < 5; $j++) {
                        echo "<td>" . $deck[$i][$j] . "</td>";
                    }
                    echo "</tr>";
                }
            } 
            
            function checkValuesMax($columnNumber, $value){
                global $deck;
                $temp = [];
                if($value == 0) return;
                for ($i = 0; $i < count($deck); $i++) {
                    if($deck[$i][$columnNumber] < $value) array_push($temp, $deck[$i]);
                }
                $deck = $temp;
            }

            function checkValuesMin($columnNumber, $value){
                global $deck;
                $temp = [];
                if($value == 0) return;
                for ($i = 0; $i < count($deck); $i++) {
                    if($deck[$i][$columnNumber] > $value) array_push($temp, $deck[$i]);
                }
                $deck = $temp;
            }
            ?>
        </table>
    </div>
</body>

</html>