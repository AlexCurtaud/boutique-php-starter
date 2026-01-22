<?php
$firstNames = ['Johnny', 'Bobby', 'Randy', 'Sandy', 'Sanders'];
$i = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prénoms</title>
</head>

<body>
    <ul>
        <?php foreach ($firstNames as $firstNames) {
            echo '<li>'.$i.' '.$firstNames.'</li>'.'<br>';
            $i++;
        } ?>
    </ul>
</body>

</html>