<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>


    <?php
    $json = '{"a":"abeille",
    "b":"banane",
    "c":"chocolat",
    "d":"dauphin",
    "e":"ecole"}';

    $array = json_decode($json, true);
    var_dump($array);
    echo "<br>";
    var_export($array);
    echo "<br>";

    function existe(array $arr, string $str)
    {
        $bool = false;
        foreach ($arr as $key => $value) {
            if ($value == $str) {
                $bool = true;
            }
        }
        return $bool;
    }

    var_export(existe($array, 'dauphin'));
    echo "<br>";
    var_export(existe($array, 'requin'));
    echo "<br>";

    function PHP_array_to_HTML_table(array $array)
    {
        echo "<table>";
        foreach ($array as $key => $value) {
            echo "<tr><td>" . $key . "</td>";
        }
        echo "</table>";
    };
    ?>
    <table>
        <?php foreach ($array as $key => $value) : ?>

            <tr>
                <td><?= $key ?></td>
                <td><?= $value ?></td>
                <td><?= strtoupper($value) ?></td>
                <td><?= ucfirst($value) ?></td>
                <td><?= count(str_split($value)) ?></td>
            </tr>

        <?php endforeach ?>
    </table>
</body>

</html>