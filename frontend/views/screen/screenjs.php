<?php
require_once "../../../vendor/autoload.php";

//require_once "../../../vendor/autoload.php";

use App\Controllers\Songs;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">	
	
	<link href="https://vjs.zencdn.net/7.2/video-js.min.css" rel="stylesheet"> 
	<script src="https://vjs.zencdn.net/7.2/video.min.js"></script> 
    <script src="http://www.youtube.com/player_api"></script>
	<script src="js/video.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<title>Video.js</title>
</head>
<body>

<?php
            $song = new Songs;
            $dataUrl = $song->getRows();
            for ($i = 0; $i < 4; $i++) {
                $row =  $dataUrl[$i];
                $url = $row[2];
            }
            ?>

	<main>
		<div class="contenedor">
			<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}" controls id="fm-video">
				<source src="<?php echo $url; ?>" alt="Database URL" type="video/mp4">
			</video>
		</div>
	</main>

	<script>
		let reproductor = videojs('fm-video', {
			fluid: true
		});
	</script>
	
</body>
</html>