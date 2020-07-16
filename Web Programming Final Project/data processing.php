<?php
 echo "<head><title>Contact Form</head></title>";
 $fp = fopen("data.txt","a+");
 fputs($fp,"$_POST[name]|$_POST[email]|$_POST[phone]|$_POST[call]|$_POST[website]|$_POST[priority]|$_POST[type]|$_POST[message]\n");
 fclose($fp);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Application</title>
    <style>
body  { font-family:Verdana;
        color:maroon;
        background-color:aliceblue;
        align:right; 
        }

        body {
       background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
       background-repeat: no-repeat;
}

        #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 910px;
        margin: 6rem auto 8.1rem auto;
        width: 929px;
        font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 13px;
      text-align: center;
}

.underline-title {
      background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
      height: 2px;
      margin: -1.1rem auto 0 auto;
      width: 500px;
}

</style>
</head>
<body>
<div id="card">
            <h1>Thank you for your input!</h1>
            <div class="underline-title"></div>
            </a><br>
            </a><br>
            <a href=table.php> Display Contact Form Data 
            </a><br>
            </a><br>
            <a href=input.php> Input again </a><br>
</body>
</html>