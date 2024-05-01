<?php
$paragraph = $_POST['paragraph'];
$hiddenText = $_POST['hidden-text'];

$lenghtParagraph = strlen($paragraph);

$paragraphCensored = str_replace($hiddenText,"***", $paragraph);
var_dump($paragraphCensored);
$lenghtCensored = strlen($paragraphCensored);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <div>
        <h1>Paragrafo</h1>
        <p><?php echo $paragraph; ?></p>
        <span><?php echo $lenghtParagraph; ?></span>
    </div>
    <div>
        <h2>Paragrafo censurato</h2>
        <p><?php echo $paragraphCensored; ?></p>
        <span><?php echo $lenghtCensored; ?></span>
    </div>
</body>
</html>