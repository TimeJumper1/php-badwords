<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $testo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor nam voluptatibus qui aperiam. Dolores quae soluta harum? A sapiente vel officia neque, et deleniti, aspernatur incidunt rerum unde, repellat exercitationem.';
    $lenght = strlen($testo);
    $badWord = $_GET["parola"];
    $censorText = str_replace($badWord , '***' , $testo)
    ?>
    <h3>
        il testo è <?php echo $testo ?> 
    </h3>
    <h4>la sua lunghezzza è <?php echo $lenght ?> caratteri</h4>
    <p>il testo censurato è <?php echo $censorText  ?></p>
</body>
</html>