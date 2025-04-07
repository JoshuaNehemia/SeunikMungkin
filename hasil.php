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
    <title>Hasil</title>
    <style>
        <?php echo $css; ?>
    </style>
</head>
<body>
    <h1>Halaman Hasil</h1>
    <textarea rows="6" cols="60" readonly><?php echo $css; ?></textarea>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </p>
    <br>
    <form action="setting.php" method="get">
        <button type="submit">Ganti Setting</button>
    </form>
</body>
</html>
