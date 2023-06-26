<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montez&display=swap" rel="stylesheet" />
    <title>Coffee Shop</title>
</head>
<body>
    <div class="container">
        <div class="banner">
            <img class="img1" src="image/coffee1.jpg" alt="banner Image" height="662px" width="100%" />
        </div>
        <div class="front">
            <h1 class="main_word">User Screen</h1>
            <button onclick="myMenu();" class="menBtn">Menu</button>
        </div>
    </div>

    <script>
        function myMenu(){
    window.location.href = "menu.php";
}
    </script>

</body>
</html>
