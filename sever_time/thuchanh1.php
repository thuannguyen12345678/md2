<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .login {
            width:230px;
            margin:0;
            padding:10px;
            border:1px #CCC solid;
        }
        h2 {
            text-align: center;
        }
        .login input {
            padding:5px; margin:5px
        }
    </style>

</head>
<body>
    <form method = "post">
        <div class="login">
            <h2>Login</h2>
            <label>
                username:
                <input type="text" name="username" size="20" placeholder="username"/>
            </label>
            <label>
                password:
                <input type="password" name="password" size="20" placeholder="password"/>
    </label>
    <input type="submit"  id = "submit" value="sign in"/>

    </div>
 
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "admin"){
        echo "<h3>welcome <span style='color : red'>". $username. "</span> to website</h3>";
    } else{
        echo "<h3><span style='color:red'>Login Error</span></h3>";
    }
    }
    ?>
   
</body>
</html>
