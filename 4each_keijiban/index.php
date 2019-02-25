<!doctype html>

<html lang="ja">

<head>
    <meta charset="utf8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
    
<body>
    <?php
    mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=database0;host=localhost;","root","mysql");
    $stmt = $pdo-> query("select * from 4each_keijiban");
    ?>
    <img src="4eachblog_logo.jpg">
    <header>
        <ul><li>TOP</li><li>PROFILE</li><li>What's 4each?</li><li>REGISTER</li><li>CONTACT</li><li>OTHER</li></ul>
    </header>
    <main>
        <div class="main-container">
            <div class="left">
                <h1>プログラミングに役立つ書籍</h1>
                <form method="post" action="insert.php">
                    <div>
                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" class="text" size="50" name="handlename">
                    </div>
                    <div>
                        <label>タイトル</label>
                        <br>
                        <input type="text" class="text" size="50" name="title">
                    </div>
                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea cols="60" rows="10" name="comments"></textarea>
                    </div>
                    <div>
                        <input type="submit" class="submit" value="投稿する">
                    </div>
                </form>
                <?php
                while($row = $stmt->fetch()){
                echo "<div class='kiji'>";
                echo "<h3>".$row['title']."</h3>";
                echo "<div class='comments'>";
                echo $row['comments'];
                echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
                echo "</div>";
                echo "</div>";}
                ?>
            </div>
            <div class="right">
                <h2>人気の記事</h2>
                <ul>
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>今人気のエディタ　Top5</li>
                    <li>HTMLの基礎</li>
                </ul>
                <h2>オススメリンク</h2>
                <ul>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>
                <h2>カテゴリ</h2>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
            </div>
        </div>
    </main>
    <footer>copyright internous | 4each blog is the one which provides A to Z about programming</footer>
</body>
    
</html>