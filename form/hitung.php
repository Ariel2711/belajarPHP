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
    <h3>Hitung Persegi Panjang</h3>
    <form action="hasil.php" method="post">
        <label for="">Panjang:
            <br>
            <input type="number" name="panjang" required>
        </label>
        <br><br>
        <label for="">Lebar:
            <br>
            <input type="number" name="lebar" required>
        </label>
        <br><br>
        <button type="submit" name="submit">Hitung</button>
    </form>
    <br>
    <form action="" method="post">
        <button type="submit" name="logout">Logout</button>
    </form>
</body>
</html>