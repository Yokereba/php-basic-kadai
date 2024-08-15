<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        $array = array(15 , 4 , 18 , 23 , 10);
            function sort_2way($order) {

                if ($order = true) {
                    echo '昇順にソートします';
    
                    sort($array);
                    foreach ($array as $key => $val) {
                    echo "" . $val . " <br> \n";
                    }

                }
                if ($order = false) {
                    echo '降順にソートします';

                    rsort($array);
                    foreach ($array as $key => $val) {
                    echo "" . $val . " <br> \n";
                    }

                }

            }
            function($order = true)
        ?>
    </p>
    
</body>
</html>
