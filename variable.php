<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #437914;
        }
    </style>
</head>

<body>
    <div class="menu">
        <h3>menu</h3>
        <ul>
            <li>PHP開始タグ、終了タグを知る</li>
            <li>echoを使う(str,int)</li>
            <li>htmlタグを出力しみる</li>
            <li>変数を使う($hoge)</li>
            <li>. を使う(結合演算子)</li>
            <li>(演習)自分の好きな文字列を表示する</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>
    <!-- ↓ここから -->
     <?php  //$は、JSで言うconstやletの役割。変数(や定数)を書くときに使う
     $myouji = "吉田";
     $namae = "健二";
    //  echo $myouji . $namae;  // .(ドット)は、変数の結合の役割
     echo "<h1>タイトル</h1>";  //echoの""内に書いたhtml要素は、htmlとしてそのまま出力される

    ?>
    <!-- ↑ここまで -->
</body>

</html>
