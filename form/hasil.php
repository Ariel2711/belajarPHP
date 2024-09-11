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
    ?>
</body>
</html>