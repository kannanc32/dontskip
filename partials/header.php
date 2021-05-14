<?php 

    include('config/constants.php'); 

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo3.png" type="image/x-icon">
    <title>Dontskip|High - End Home Theater Store</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
</head>
<body>
<!---------------------Navigation----------------------------->
   
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="images/logo3.png" alt="" width="150px"></a>
                </div>
                <div class="logo1">
                    <a href="index.php"><img src="images/logo5.jpeg" alt="" width="50px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <div class="menu-icon" onclick="menutoggle()">
                    <ion-icon name="menu-outline"></ion-icon>   
                </div>
            </div>
        </div>