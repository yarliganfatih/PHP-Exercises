<?php
echo 'GET datas :';
print_r($_GET);
echo '<br>';

echo 'POST datas :';
print_r($_POST);
echo '<br>';

echo 'All Request datas :';
print_r($_REQUEST);
echo '<br>';

function handler($req)
{
    if ($req["username"] == "myusername" && $req["password"] == "mypassword") {
        $res = true;
    } else {
        $res = false;
    }
    return $res;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <input name="username" value="<?php echo (isset($_POST["username"]) ? $_POST["username"] : ""); ?>">
        <input name="password" type="password">
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if (handler($_REQUEST)) {
        echo 'Successful, Welcome ' . $_POST["username"];
    } else {
        header("Location: ../frontend/login.html");
    }
    ?>

</body>

</html>