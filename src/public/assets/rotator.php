<?php
header("Content-Type: application/javascript");

require dirname( dirname( __DIR__ ) ) . '/common/common.php';
?>

var urls = [ <?php echo $config['urlList']; ?> ];

showUrl = function(idx) {
    var frame = document.createElement('iframe');
    frame.setAttribute('sandbox', 'allow-scripts allow-same-origin');
    frame.setAttribute('src', urls[idx]);

    frame.onload = function() {
        this.setAttribute('class','visible');

        var frames = document.getElementsByTagName('iframe');

        if (frames.length > 1) {
            document.body.removeChild(frames[0]);
        }

        var next = ++idx % urls.length;

        setTimeout(function() {
            showUrl(next);
        }, <?php echo $config['delay']; ?> );
    };

    document.body.appendChild(frame);
}

window.onload = showUrl(0);
