<html >
<head>
    <title>Document</title>
</head>
    <style>
        body{
            text-align: center;
            background-color: aquamarine;
            font-family: sans-serif;
        }
        .logininput{
            font-size: 15px;
            margin-top: 200px;
        }
        input[type="text"],input[type="password"]{
            padding: 5px;
            width: 18%;
            margin: 18px;
        }
        input[type="submit"],input[type="reset"]{
            margin: 5px;
            background-color: beige;
            font-size: 15px;
        }
    </style>
<body>
    <div class="input">
        <form action="lihat.php" method="post" name="input">
            <h2>Silahkan Login Besti</h2>
            <input type="text" name="Username"><br>
            <input type="password" name="password"><br>
            <input type="submit" name="Login" value="login">
            <input type="reset" name="reset" value="reset">
        </form>
    </div>
</body>
</html>