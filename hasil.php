<?php
if (isset($_COOKIE['text_align'])) {
    $align = $_COOKIE['text_align'];
} else {
    $align = 'left';
}

if (isset($_COOKIE['font_family'])) {
    $font = $_COOKIE['font_family'];
} else {
    $font = 'sans-serif';
}

if (isset($_COOKIE['font_color'])) {
    $color = $_COOKIE['font_color'];
} else {
    $color = '#000000';
}

$css = "p { text-align: $align; font-family: $font; color: $color; }";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Hasil</title>
    <style>
        <?php echo $css; ?>
    </style>
</head>
<body>
    <div class = "container">
        <h1>Hasil</h1>
        <h4> Setting yang tersedia:</h4>
        <textarea rows="6" cols="60" readonly><?php echo $css; ?></textarea>
        <h4>Contoh paragraf:</h4>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <br>
        <form action="setting.php" method="get">
            <button type="submit">Ganti Setting</button>
        </form>
    </div>
</body>
</html>
