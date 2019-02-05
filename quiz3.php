<?php
$title = "Food from the world";
$tags = ["Travel","Miami","Dinner","Salmon","France","Drinks",
"Ideas","Flavors","Cuisine","Chicken","Coucine","Fried","Fish","Duck"];
$food = [
	[
		"id" => "1",
		"image" => "https://www.w3schools.com/w3images/sandwich.jpg",
		"alt" => "Sandwich",
		"title" => "The Perfect Sandwich, A Real NYC Classic",
		"desc" => "Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum."
	],
	[
		"id" => "2",
		"image" => "https://www.w3schools.com/w3images/steak.jpg",
		"alt" => "Steak",
		"title" => "Let Me Tell You About This Steak",
		"desc" => "Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum."
	],
	[
		"id" => "3",
		"image" => "https://www.w3schools.com/w3images/cherries.jpg",
		"alt" => "Cherries",
		"title" => "Cherries, interrupted",
		"desc" => "Lorem ipsum text praesent tincidunt ipsum lipsum."
	],
	[
		"id" => "4",
		"image" => "https://www.w3schools.com/w3images/wine.jpg",
		"alt" => "Pasta and Wine",
		"title" => "Once Again, Robust Wine and Vegetable Pasta",
		"desc" => "Lorem ipsum text praesent tincidunt ipsum lipsum."
	],
	[
		"id" => "5",
		"image" => "https://www.w3schools.com/w3images/popsicle.jpg",
		"alt" => "Popsicle",
		"title" => "All I Need Is a Popsicle",
		"desc" => "Lorem ipsum text praesent tincidunt ipsum lipsum."
	],
	[
		"id" => "6",
		"image" => "https://www.w3schools.com/w3images/salmon.jpg",
		"alt" => "Salmon",
		"title" => "Salmon For Your Skin",
		"desc" => "Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum."
	],
	[
		"id" => "7",
		"image" => "https://www.w3schools.com/w3images/sandwich.jpg",
		"alt" => "Sandwich",
		"title" => "The Perfect Sandwich, A Real Classic",
		"desc" => "Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum."
	],
	[
		"id" => "8",
		"image" => "https://www.w3schools.com/w3images/croissant.jpg",
		"alt" => "Croissant",
		"title" => "Le French",
		"desc" => "Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum."
	]
];
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Food</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
	<style>
		body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
		.w3-bar-block .w3-bar-item {padding:20px}
	</style>
</head>
<body>
	<!-- Sidebar (hidden by default) -->
	<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
		<a href="javascript:void(0)" onclick="w3_close()"
		class="w3-bar-item w3-button">Close Menu</a>
		<a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Food</a>
		<a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
	</nav>

	<!-- Top menu -->
	<div class="w3-top">
		<div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
			<div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
			<div class="w3-center w3-padding-16"><?php echo $title; ?></div>
		</div>
	</div>
		
	<!-- !PAGE CONTENT! -->
	<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
		<!-- Photo Grid-->
		<div class="w3-row-padding w3-padding-16 w3-center" id="food">
        <?php foreach ($food as $value) { ?>
			<div class="w3-quarter">
				<img src="<?= $value["image"] ?>" alt=<?= $value["alt"] ?>" style="width:100%">
				<h3><?= $value["title"] ?></h3>
				<p><?= $value["desc"] ?></p>
			</div>
        <?php } ?>
        </div>

		<hr id="about">

		<!-- About Section -->
		<div class="w3-container w3-padding-32 w3-center">	
			<h3>The king of Hell's Kitchen</h3><br>
			<img src="https://www.gordonramsay.com/assets/Uploads/_resampled/CroppedFocusedImage96050052-27-BSK-cover-no-txt-1.jpg" alt="Gordon" class="w3-image" style="display:block;margin:auto" width="800" height="533">
			<div class="w3-padding-32">
				<h4><b>“Why did the chicken cross the road? Because you didn’t f—ing cook it!”</b></h4>
				<h6><i>"I am what I am. A fighter."</i></h6>
				<p> Ramsay is known for his fiery temper, strict demeanour, and frequent use of expletives. He often makes blunt and controversial comments, including insults and wisecracks about contestants' cooking and restaurant facilities.
 </p>
			</div>
		</div>
		<hr>

		<!-- Footer -->
		<footer class="w3-row-padding w3-padding-32">
			<div class="w3-third">
				<h3>ABOUT ME</h3>
				<p>Gordon Ramsay, (born November 8, 1966, Glasgow, Scotland), Scottish chef and restaurateur known for his highly acclaimed restaurants and cookbooks but perhaps best known in the early 21st century for the profanity and fiery temper that he freely displayed on television cooking programs.</p>
			</div>
		
			<div class="w3-third">
				<h3>SOCIAL LINKS</h3>
				<a href="https://www.facebook.com/gordonramsay/">Facebook</a><br>
				<a href="https://twitter.com/GordonRamsay?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">Twitter</a><br>
				<a href="https://www.instagram.com/gordongram/?hl=en">Instagram</a><br>
				<a href="#">GitHub</a><br>
			</div>

			<div class="w3-third w3-serif">
				<h3>POPULAR TAGS</h3>
				<p>
                    <?php foreach ($tags as $tag) { ?>
                        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?= $tag ?></span>
                    <?php }?>

				</p>
			</div>
		</footer>
	<!-- End page content -->
	</div>

	<script>
		// Script to open and close sidebar
		function w3_open() {
			document.getElementById("mySidebar").style.display = "block";
		}
		 
		function w3_close() {
			document.getElementById("mySidebar").style.display = "none";
		}
	</script>
</body>
</html>