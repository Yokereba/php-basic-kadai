<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $score01 = 80;
        $score02 = 60;
        $score03 = 55;
        $score04 = 40;
        $score05 = 100;
        $score06 = 25;
        $score07 = 80;
        $score08 = 95;
        $score09 = 30;
        $score10 = 60;
        $goukei = $score01 + $score02 + $score03 + $score04 + $score05 + $score06 + $score07 + $score08 + $score09 + $score10;
        $heikin = $goukei / 10;
        echo $goukei;
        echo '<br>';
        echo $heikin;  
        ?>
    </p>
</body>

</html>
