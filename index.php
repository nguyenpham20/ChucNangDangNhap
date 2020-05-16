<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--Tao form -->
<form  method="post">
    <fieldset>
        <h1>Login</h1>
        <input type="text" name="username" placeholder="username" /><br/><br/>
        <input type="password" name="password" placeholder="password"/><br/><br/>
        <input type="submit" value="login">
    </fieldset>
    <?php
    //Gui len Webserver thong qua phuong thuc post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Lay du lieu trong form gui len thong qua $_POST
        $username = $_POST["username"];
        $password = $_POST["password"];
//Neu username la admin va password la admin thi hien thi ra welcome username to website
        //neu username  khong  la admin vaf password khong la admin thi hien thi ra login Error
        if ($username === "admin" && $password === "admin") {
            //Hien thi noi dung muon thong bao
            echo "<h2>Welcome <span style='color:red'>" .$username. "</span> to website</h2>";
        } else{
            //Hien thi noi dung muon thong bao
            echo "<h2><span style='color:red'>Login Error</span></h2>";
        }
    }
    ?>
</form>

</body>
</html>