<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
</head>

<body>
    <div class="menu">
        <h3>menu</h3>
        <ul>
            <li>組み込み関数を知る</li>
            <li>if文と文と関数を組み合わせておみくじを作る</li>
            <li>(演習)自由におみくじをアレンジする</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>
    <!-- ここから -->
     <?php
    //  $today = date('Y/m/d H:i');  //日付の関数
     $today = date('Y年m月d日 H時i分');  //日時の色々な表示の仕方https://www.php.net/manual/ja/function.date.php
    //  echo $today;

    $rand = rand(1,10);  //randはランダム関数 左の数、つまり第1引数
    var_dump($rand);  //これがconsole.logのようなもの

    if($rand >= 2){   //おみくじはJSより短く書ける
        echo '大吉';
    } else {
        echo '大凶';
    }

    ?>
    <!-- ここまで -->
</body>

</html>
