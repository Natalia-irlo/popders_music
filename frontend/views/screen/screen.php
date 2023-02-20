<?php

require_once "../../../vendor/autoload.php";

use App\Controllers\Songs;

?>



<!DOCTYPE html>
<html lang="en">

<head>
	<title>Screen</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="popup.css" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<link rel="stylesheet" href="./screen.css">

<body>
	<div class="container-coders">
		<header class="header-container">
			<div class="container">
				<ul class="d-flex">
					<li><span id="search-form" class="geolocations col-2">
							<a href="#" id="geolocation">
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#FFBE02" class="bi bi-geo-alt-fill text-center" viewBox="0 0 16 16">
									<path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
								</svg>
							</a>
						</span>
					</li>
					<li id="city" class="city"></li>
					<li id="fa-duotone fa-gear"></i>
					<li><img src=" " id="weather-icon" width="35px" /></li>
					<li id="degrees">ºC</li>
					<li id="date"></li>
				</ul>
			</div>
			<div id="display"></div>
		</header>
		<div class="row text-center">
			<div class="col-1">
				<nav class="nav flex-column" id="drawer">
					<div class="container-drawer">
						<a href="../home/index.php" target="_self" class="nav-link" aria-current="page">
							<img class="icon-logo " src="../../assets/icons/logo-popCoder-multicolor.png" width="70px">
						</a>
						<a href="../screen/screen.php" target="_self" class="nav-link" aria-current="page">
							<img class="icon" src="../../assets/icons/icono-musica.png" width="70px">
						</a>
						<a href="../coders/codersImg.php" target="_self" class="nav-link" aria-current="page">
							<img class="icon" src="../../assets/icons/icono-gatito.png" width="70px">
						</a>
						<a href="../trainers/trainers.php" target="_self" class="nav-link" aria-current="page">
							<img class="icon" src="../../assets/icons/icono-patito.png" width="70px">
						</a>
						<a href="../list/list.php" target="_self" class="nav-link" aria-current="page">
							<img class="icon" src="../../assets/icons/icono-user.png" width="70px">
						</a>
					</div>
				</nav>
			</div>
			<div class="col-11">
			<?php
            $song = new Songs;
            $dataUrl = $song->getRows();
            $row =  $dataUrl[2];
            echo $row[2];
				if ($row[2] > 0) { ?>

					<div class="video-responsive">
						<iframe src="<?php echo $row[2]; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
						</iframe>
					</div>
				<?php } else { ?>
					<h2>No hay Video</h2>
				<?php } ?>

			</div>
		</div>
	</div>
	</div>
	<script src="../../molecules/mol-date/date.js"></script>

</body>

</html>