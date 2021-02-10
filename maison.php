<html>
	<head>
		<title>API Open Food Fact</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="barcode.js"></script>
	</head>
	<body>
		<!-- Main -->
		<div id="main">
		<!-- Post -->
			<section class="post">
				<header class="major">
					<span class="date">2020 - 2021</span>
					<h1>Smart House</h1>
				</header>
				<h3>Utilisation du code barre</h3>
				<!-- Affichage d'une image de code barre -->
				<!-- <img id="barcode" src="barcode2.jpeg" /> -->

				<br>
				<button onclick= "barcode_auto()" >Scan</button>

				<br><br><br>
		        <input type="file" accept="image/*;capture=camera">
		        <device type="media" onchange="update(this.data)"></device>
		        <br>
		        <video autoplay></video>
		        <script>
			        // on active la caméra
			        const constraints = {
			          video: true,
			        };
			        const video = document.querySelector("video");
			        navigator.mediaDevices.getUserMedia(constraints).then((stream) => {
			          video.srcObject = stream;
			        });
		        </script>
		        
				<h3>PARTIE API Open Food Fact !</h3>
			 	Code Barre Vittel : 7613036249928<br>
				Code Barre M&m's  : 5000159492737<br>
				Code Barre IceTea : 3502110010674<br>

				<input id="queryLoc" type="text" value="" />
				<input type="button" value="APPEL API OFF" onclick="buttonClickGET()"/>
				<p id="zone_api">Barcode = </p>
				<p id="zone_nom">Nom du Produit: </p>
				<p id="zone_image_produit">Image du Produit: </p>
				<p id ="zone_nutriscore"> Nutriscore du produit: </p>
				<img id="Nutriscore" src="" >
				<br>
				<img id=img_produit src="" style="height: auto;" >

			</section>

		</div>
	</body>
</html>