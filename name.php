<?php include "inc/header.php"; ?>
<?php include "./functions.php"?>

<form action="" method="post">
    <table>
        <tr>
            <td>First Number:</td>
            <td><input type="number" name="fst_number"></td>
        </tr>
        <tr>
            <td>Last Number:</td>
            <td><input type="number" name="second_number"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="calculation" value="Submit"></td>
        </tr>
    </table>
</form> 

<?php
if (isset($_POST['calculation'])) {
    $fst_number = $_POST['fst_number'];
    $second_number = $_POST['second_number'];

    if (empty($fst_number) or empty($second_number)) {
        echo "<span style='color:#c00'>Field Must Not be Empty!</span>";
    } else {
        echo"First Number is :" . $fst_number .'</br>'. "Second Number is :". " $second_number ".'</br>';
        $cal = new functions();
        $cal->add($fst_number, $second_number);
        $cal->sub($fst_number, $second_number);
        $cal->mul($fst_number, $second_number);
        $cal->div($fst_number, $second_number);
    }
}
?>















<?php include "inc/footer.php"; ?>