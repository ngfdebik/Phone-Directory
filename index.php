<?php
include ("delete.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Phone Directory</title>
</head>

<body>
    <?php include ("app/include/header.php"); ?>
    <?php $res = json_decode(file_get_contents("dictionary.json"), true);

    echo "<form action=\"index.php\" method=\"post\" style =\"padding-top:20px\">";
    echo "<table class=\"table\">
        <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Name</th>
                <th scope=\"col\">Phone</th>
                <th scope=\"col\"></th>
            </tr>
        </thead>
        <tbody>";
    $i = 1;
    if ($res != []) {
        foreach ($res as $row) {
            echo "<tr>
                    <th scope=\"row\">" . $i . "</th>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["phone"] . "</td>
                    <td><button name=\"btn\" value=\"" . $row["id"] . "\">delete</button></td>
                </tr>";
            $i += 1;
        }
        echo "</tbody>
        </table>";
        echo "</form>";
    }
    ?>
</body>

</html>