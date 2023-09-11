<?php
require_once("getData.php");


$getdata = new getData();
$name=$getdata -> getUserData();
$name

?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="logo">
            <div class="logo_inner">
            <img src="1599315827_logo (1).png" alt="Y&G Group_logo" width=200px height=120px>
            </div>
        </div>
        <div class="header_main">
            <div class="name">
                <div class="text">ようこそ <?php echo $name["last_name"].$name["first_name"];?>さん</div>
            </div>
            <div class="time">
                <div class="text">最終ログイン日：2023-09-11 22:11:00</div>
            </div>            
        </div>
    </header>

    <main>
        <table>
        <?php
        require_once("getData.php");
        $getdata = new getData();
        $getdata -> getPostData();
?>
</table>
        </div> 
    </main>
    <footer>
        <div class="service_name">
            <p>Y&G group.inc</p>
        </div>
    </footer>
</body>

</html>