<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>pocket money app</title>
    <link rel="stylesheet" href="css/main.css">
     <i class="fa-brands fa-instagram"></i>
     <i class="fa-solid fa-circle-question"></i>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="image/pocket money logo.png" alt="">
        </div>
       
    </div>
    <div class="container0" id="container0">
        <h2>Create account</h2>
        <p>please fill your details to create account fill all required.</p>
        <form action="/controller/reg.php" method="POST">
            <div class="myRegisterform" id="myRegisterform">
                <label for="username"><b>Username</b></label><br>
                <input type="text" placeholder="enter your username" name="username" required><br>
                <label for="email"><b>Email</b></label><br>
                <input type="email" placeholder="enter your email" name="email" required><br>
                <label for="password"><b>Password</b></label><br>
                <input type="password" placeholder="create your password"  name="password" required><br>
                <button class="btn4" id="btn4">submit</button>
                <a href="index.php"><button class="btn5">cancel</button></a>
            </div>
        </form>
    </div>
    <hr>
    <div class="footer" id="footer">
        <p><img src="image/pocket money logo.png" alt="">&trade;all rights reserved&copy;</p>
    </div>
</body>
</html>

    