<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php-Badwords</title>
</head>
<body>

  <div>

    <?php
    $text = "Testo di prova ciao";
    $badWord = $_GET["word"];
    ?>

    <p>Testo prova: <strong><?php echo $text ?></strong></p>
    <p>Lunghezza del testo: <strong><?php echo strlen($text) ?></strong></p>

    <?php 
    $replace = str_replace($badWord,"*****",$text);
    ?>

    <p>Testo prova con badword: <strong><?php echo $replace ?></strong></p>

  </div>

  


</body>
</html>