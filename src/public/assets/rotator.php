<?php
header("Content-Type: application/javascript");

require dirname( dirname( __DIR__ ) ) . '/common/common.php';
?>

const urls = [ <?php echo $config['urlList']; ?> ];

showUrl = function(idx) {
	const frame = document.createElement('iframe');
	frame.sandbox = 'allow-scripts allow-same-origin';
	frame.className = 'page-rotator-frame';
	frame.src = urls[idx];

	frame.onload = function() {
		this.className += ' visible';

		const frames = document.getElementsByClassName('page-rotator-frame');

		if (frames.length > 1) {
			document.body.removeChild(frames[0]);
		}

		const next = ++idx % urls.length;

		setTimeout(function() {
			showUrl(next);
		}, <?php echo $config['delay']; ?> );
	};

	document.body.appendChild(frame);
}

window.onload = showUrl(0);
