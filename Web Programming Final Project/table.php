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
      width: 925px;
}

</style>
</head>
<body>
<div id="card">
            <h1>Contact Form Data</h1>
            <div class="underline-title"></div>
<?php
 echo "<head><title>Contact Form</title></head>";
 $fp = fopen("data.txt","r");
 echo "<table border=0>";

 while ($contents = fgets($fp,80))
 {
 $content = explode("|",$contents);
 echo "<tr><td>Name </td><td>: $content[0]</td></tr>";
 echo "<tr><td>Email </td><td>: $content[1]</td></tr>";
 echo "<tr><td>Phone Number </td><td>: $content[2]</td></tr>";
 echo "<tr><td>Request Phone Call </td><td>: $content[3]</td></tr>";
 echo "<tr><td>Website </td><td>: $content[4]</td></tr>";
 echo "<tr><td>Priority </td><td>: $content[5]</td></tr>";
 echo "<tr><td>Type </td><td>: $content[6]</td></tr>";
 echo "<tr><td>Message </td><td>: $content[7]</td></tr>
 <tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
 }

 echo "</table>";
 echo "<a href=contact_form.php> Clik here </a>Click here to input again";
?>
</body>
</html>