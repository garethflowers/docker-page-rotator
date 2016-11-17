<?php require dirname( __DIR__ ) . '/common/common.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $config['sitename']; ?></title>
        <base href="/">
        <link href="/assets/styles.css" rel="stylesheet">
        <style><?php echo $config['styles']; ?></style>
    </head>
    <body>
        <iframe id="frame" sandbox="allow-scripts allow-same-origin"></iframe>
        <script src="/assets/rotator.php" async></script>
    </body>
</html>
