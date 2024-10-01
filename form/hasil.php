<?php
session_start();
if (isset($_SESSION["username"]) == false) {
    echo "<script>alert('Redirect to halaman login');</script>";
    echo "<script>window.location.href = 'login.php';</script>";
    // header("Location: login.php");
    exit();
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<body>
    <h3>Luas Persegi Panjang</h3>
    <?php
    function hitung($panjang, $lebar)
    {
        echo $panjang * $lebar;
    }
    
    
    if (isset($_POST["panjang"]) && isset($_POST["lebar"])) {
        hitung($_POST["panjang"], $_POST["lebar"]);
    }
    
    if (isset($_POST['back'])) {
        header("Location: hitung.php");
        exit();
    }
    ?>
    <br>
    <br>
    <form action="" method="post">
        <button type="submit" name="back">Kembali ke halaman hitung</button>
    </form>
    <br>
    <form action="" method="post">
        <button type="submit" name="logout">Logout</button>
    </form>
</body>
</html>