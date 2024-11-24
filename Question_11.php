<!DOCTYPE html>
<html>

<head>
    <title>Cookie-Based Background Color</title>
</head>

<body>

    <?php
    // Check if a color is selected and set in the cookie
    if (isset($_POST['color'])) {
        setcookie("bgColor", $_POST['color'], time() + 3600); // Cookie expires in 1 hour
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }

    // Retrieve the color from the cookie, or set a default color
    $bgColor = isset($_COOKIE['bgColor']) ? $_COOKIE['bgColor'] : 'white';
    ?>

    <style>
        body {
            background-color: <?php echo $bgColor; ?>;
        }
    </style>

    <form method="post">
        <label for="color" style="color: yellow">Choose a color:</label>
        <select name="color" id="color">
            <option value="white">White</option>
            <option value="black">Black</option>
            <option value="red">Red</option>
            <option value="green">Green</option>  

            <option value="blue">Blue</option>
        </select>
        <input type="submit" value="Set   
 Color">
    </form>

</body>

</html>