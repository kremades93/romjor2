<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../style/preparing_player.css">

        <script type="text/javascript" src="../javascript/function/checking/preparing_player.js"></script>
    </head>
<body>

<?php
//Load the name of the player
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name = $_POST['user'];
          echo "<h1 id= \"character_selection\" class=\"header\">It is an absolute pleasure Mr. " . $name . "...</h1>";
          echo "<p class=\"paragraph\">Now... What character represents you?</p>";
    }

//Selection of the character
    echo "<div id=\"character1\" class=\"character\" onclick=\"character_selection(this)\" style=\"top:220px;left:50px\">
        <img src=\"../pictures/africa.png\"/>
    </div>";
    echo "<div id=\"character2\" class=\"character\" onclick=\"character_selection(this)\" style=\"top:220px;left:350px\">
        <img src=\"../pictures/asia.png\"/>
    </div>";
?>

</body>
</html>