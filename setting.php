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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    setcookie('text_align', $_POST['text_align']);
    setcookie('font_family', $_POST['font_family']);
    setcookie('font_color', $_POST['font_color']);
    header('Location:index.php');
    exit();
}

$fontOptions = ['Arial', 'Verdana', 'Tahoma', 'Trebuchet', 'Times New Roman', 'Georgia', 'Garamond', 'Calibri', 'Courier New'];
$alignOptions = ['Left','Center','Right','Justify'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Setting</title>
</head>

<body>
    <div class = "container">
        <h1>Setting</h1>
        <form method="post">
            <label for="text_align">Text Align:</label>
            <select name="text_align" id="text_align">
                <?php foreach ($alignOptions as $a): ?>
                    <option value="<?= $a ?>" <?= $align === $a ? 'selected' : '' ?>><?= $a ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <label for="font_family">Font Family:</label>
            <select name="font_family" id="font_family">
                <?php foreach ($fontOptions as $f): ?>
                    <option value="<?= $f ?>" <?= $font === $f ? 'selected' : '' ?>><?= $f ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <label for="font_color">Font Color:</label>
            <input type="color" name="font_color" id="font_color" value="<?= htmlspecialchars($color) ?>">
            <br>
            <button type="submit">Simpan</button>
        </form>
    </div>
</body>

</html>