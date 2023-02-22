<?php session_start(); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>session</title>
</head>
<body>
<?php
if (isset($_POST['submit'])) {
    $a = $_POST['name'];
    $b= $_POST['last'];
    $_SESSION['name'] = $a;
    $_SESSION['lastname'] = $b;
    header("location:/profile.php");
}
?>
<form method="post">
    <label>نام خود را وارد کنید</label><br>
    <input type="text" name="name"><br>
    <label>نام خانوادگی خود را وارد کنید</label><br>
    <input type="text" name="last"><br>
    <input type="submit" name="submit" value="run">
</form>
</body>

</html>
