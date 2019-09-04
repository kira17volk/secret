<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/application/views/styles/main.css">
</head>
<body>
    <div id="main">
    <h1><?php echo 'secret' ?></h1>
    </div>
    <div id="user">
        Вы вошли как <?php echo app::getInstance()-> user-> email;?>
        <a href='user/logout/'> Выйти </a>
    </div>
    <div id="menu">
        <?php echo $lo_menu ?? '';?>
    </div>
    <div id="content">
        <?php echo $lo_content ?? '';?>
    </div>

</body>
</html>