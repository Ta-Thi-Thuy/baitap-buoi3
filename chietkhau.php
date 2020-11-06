<form method="post">
    <input type="text" name="tien" placeholder="Enter a number">
    <input type="submit" name="submit" value="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tien = $_POST['tien'];
    $sub = 0;
    if ($tien >= 100000 && $tien < 500000) {
        $sub = $tien * 0.99;
    } elseif ($tien >= 500000 && $tien < 3000000) {
        $sub = $tien * 0.98;
    } elseif ($tien >= 3000000) {
        $sub = $tien * 0.95;
    } else {
        $sub = $tien;
        echo "chua duoc chiet khau";
    }
    echo $sub;
}