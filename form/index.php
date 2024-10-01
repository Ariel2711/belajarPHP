<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
    <h5>Halaman Awal</h5>


    <form method="POST">
        <button type="submit" name="action" value="login">Login</button>
        <button type="submit" name="action" value="hitung">Hitung</button>
    </form>


    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $action = $_POST['action'];


        if ($action === 'login') {
            header(header: "Location: login.php");
            exit();
        } elseif ($action === 'hitung') {
            header("Location: hitung.php");
            exit();
        }
    }
    ?>


</body>
</html>