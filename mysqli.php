<?php

require_once 'config.php';
$connection = new mysqli($host, $user, $password, $database);
if($connection->connect_error){
    die('connection_error');
}

$query = "SELECT * FROM shop";

// Два рабочих варианта.
//$result = $connection->query($query);
$result = mysqli_query($connection, $query);

if(!$result){
    die('select_error');
}

$rows = $result->num_rows;
$result->data_seek(0); //Указывает на какой-то кусочек данных (в этом случае - на строку).

echo '<pre>';
// Вместо того, чтобы проверять в SQL запросе наличие данных внутри самой функции, можно вызывать ее только при условии, что данные существуют. Сократит лишние телодвижения.
insertValues();
printTable();
echo '</pre>';

function insertValues(){
    global $connection;
    $insertValues = [
        $names = [
            'ship',
            'truck'
        ],
        $amount = [
            '7',
            '17'
        ],
        $price = [
            200000,
            100000
        ]
    ];

    for($i = 0; $i < 2; $i++){
        $query = "INSERT INTO shop (name, amount, price) SELECT '" . $insertValues[0][$i] . "', " . $insertValues[1][$i] . ", " . $insertValues[2][$i] . "
        WHERE NOT EXISTS (SELECT 1 FROM shop WHERE name = '" . $insertValues[0][$i] . "')";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Query failed: " . mysqli_error($connection));
        }
    }
}

function printTable() {
    global $result;
    echo "<b> id \t name \t amount &nbsp price </b> <br>";
    while($row = $result->fetch_assoc()) {
        echo $row['id'] . "\t";
        echo $row['name'] . "\t &nbsp";
        echo $row['amount'] . "\t &nbsp";
        echo $row['price'] . "\t <br>";
    }
}

$connection->close();

?>

