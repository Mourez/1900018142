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
      width: 290px;
}

</style>
</head>
<body>
<form action="data processing.php" method="POST">
<div id="card">
            <h1>Contact Form</h1>
            <div class="underline-title"></div>
			<p>Please complete the contact form</p>
			<hr>
<p>Name</p> <input type="text" name="name">
<p>Email</p> <input type="text" name="email">
<p>Phone Number</p> <input type="text" name="phone">

<p>Request Phone Call:</p>
Yes:<input type="radio" value="Yes" name="call"><br />
No:<input type="radio" value="No" name="call"><br />

<p>Website</p> <input type="text" name="website">

<p>Priority</p>
<select name="priority" size="1">
<option value="Low">Low</option>
<option value="Normal">Normal</option>
<option value="High">High</option>
<option value="Emergency">Emergency</option>
</select>
<br />

<p>Type</p>
<select name="type" size="1">
<option value="update">Website Update</option>
<option value="change">Information Change</option>
<option value="addition">Information Addition</option>
<option value="new">New Products</option>
</select>
<br />

<p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
<input type="submit" value="Send"><input type="reset" value="Clear">
</form>
</body>
</html>