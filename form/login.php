<?php
session_start();

if(isset($_SESSION["username"])){
    echo "<script>alert('Redirect to halaman hitung');</script>";
    echo "<script>window.location.href = 'hitung.php';</script>";
    // header("Location: hitung.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<body>
    <h5>Login</h5>
    <form action="" method="post">
        <label for="">Username:
            <br>
            <input type="text" name="username">
        </label>
        <br>
        <br>
        <label for="">Password:
            <br>
            <input type="password" name="password">
        </label>
        <br>
        <br>
        <button type="submit">Login</button>
    </form>
    <br>
    <form action="" method="post">
        <button type="submit" name="back">Kembali ke halaman awal</button>
    </form>
    <br>


    <?php
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
            $_SESSION["username"] = "admin";
            header("Location: hitung.php");
            exit();
        } else {
            echo "<script>alert('Username or Password invalid');</script>";
        }
    }

    if (isset($_POST['back'])) {
        header("Location: index.php");
        exit();
    }
    ?>
</body>
</html>