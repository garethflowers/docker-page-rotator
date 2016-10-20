<?php
header("Content-Type: application/javascript");

require dirname( dirname( __DIR__ ) ) . '/common/common.php';
?>

var urls = [ <?php echo $config['urlList']; ?> ];

function showUrl(idx) {
    var f = document.getElementById("frame");

    f.onload = function() {
        var next = ++idx % urls.length;
        setTimeout(function() {
            showUrl(next);
        }, 5000);
    };
    f.src = urls[idx];
}

showUrl(0);
