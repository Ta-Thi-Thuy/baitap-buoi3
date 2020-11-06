<form method="post" style="border: 1px; width: 300px; height: 100px">
    <input type="text" name="number1" placeholder="nhap so thu nhat">
    <input type="text" name="number2" placeholder="nhap so thu hai">
    <br/>
    <select name="tinh">
        <option value="cong">Cong</option>
        <option value="tru">Tru</option>
        <option value="nhan">Nhan</option>
        <option value="chia">Chia</option>
    </select>
    <input type="submit" value="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = (float)$_POST["number1"];
    $number2 = (float)$_POST["number2"];
    $tinh = $_POST["tinh"];
    if ($tinh == "cong") {
        $sum = $number1 + $number2;
        echo "$sum";
    } elseif ($tinh == "tru") {
        $tru = $number1 - $number2;
        echo "$tru";
    } elseif ($tinh == "nhan") {
        $nhan = $number1 * $number2;
        echo "$nhan";
    } elseif ($tinh == "chia") {
        $chia = $number1 / $number2;
        echo "$chia";
    }
}