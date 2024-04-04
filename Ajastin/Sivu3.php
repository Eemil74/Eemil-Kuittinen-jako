<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function Ajastin($timeout = 1)
    {
        $Time = unserialize(implode("", file("ajastin.txt")));

            $iNewTime = time() + $timeout;
            $hfile = fopen("Ajastin.txt","wb");
            flock($hfile, 2);
            fputs($hfile, serialize($iNewTime));
            flock($hfile, 3);
            fclose($hfile);
                return"Aikaoliumpeutunut" . (time() - $Time) ."s Sitten";
            
    }

    echo Ajastin();
    ?>
</body>
</html>