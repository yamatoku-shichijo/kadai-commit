<?php
    $result = '無し';
    if(arry_key_exists('act', $_POST)) {
        $result = omikuji();
    }
    
    function omikuji(){
        $fortue =["大吉", "吉", "中吉", "小吉", "末吉", "凶"];
        return $fortue[random_int(0, count($fortue) - 1)];
    }
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>おみくじ</title>
    </head>
    <body>
        <h1>おみくじ</h1>
        <p>おみくじの結果 : <?php print htmlspecialchars($result, ENT_QUOTES, "UTF-8"); ?></p>
        <form action="sample.php" method="POST">
            <button type="submit" name="act" value="draw">おみくじをひく！</button>
        </form>
    </body>
</html>