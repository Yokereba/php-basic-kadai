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
            
            function sort_2way ($array,$order) {
                if ($order == true) {
                    echo '昇順にソートします';
                    echo '<br>';
                    sort($array);

                } else {
                    echo '降順にソートします';
                    echo '<br>';

                    rsort($array);
                }
                foreach ($array as $key => $val) {
                    echo "" . $val . " <br> \n";
                }
            }


            
            
            sort_2way (array(15 , 4 , 18 , 23 , 10),false);
            
        ?>
    </p>
    
</body>
</html>
