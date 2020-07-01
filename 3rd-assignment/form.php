<html>

<head>
<title>Login Page</title>
<style>
body  { font-family:Verdana;
        color:maroon;
        background-color:aliceblue; }
</style>
</head>

<body>

<h1>Login Page</h1>

<h2>Textbox Variables</h2>

<p>
Username: <?php echo $_POST["username"]; ?> <br />
Password: <?php echo $_POST["passwd"];   ?>
</p>


</body>
</html>