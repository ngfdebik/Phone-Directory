<?php 
include("update.php");
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

    <form action="append.php" method="post" style="width: 250px; margin: 0 auto;padding-top:20px">
        <div style="margin: 100 auto">
            <div class="col" style="width: 250px">
                <input class="form-control" name="name" type="text" placeholder="Name" value="<?php if(isset($_POST["name"])) echo $_POST["name"];?>" aria-label="Name">
                <input class="form-control" name="phone" type="text" placeholder="Phone number" value="<?php if(isset($_POST["phone"])) echo $_POST["phone"];?>" aria-label="Phone">
                
            </div>
            <center><button type="submit">Add</button></center>
        </div>
        <?php if(isset($err['phone'])) echo $err['phone'];
            if(isset($err['name'])) echo $err['name'];
            if(isset($err['success'])) echo $err['success'];?>
    </form>

</body>

</html>