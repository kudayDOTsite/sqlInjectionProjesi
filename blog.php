

	<?php
	include("header.php");
	include("configuration.php");
	?>
		<div id="fh5co-main">
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"></h2>
				<div class="row row-bottom-padded-md">

				<?php
$sql = "SELECT * FROM Blog";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo '<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
		<div class="blog-entry" >
			<a href="'. ($row["ID"] == "2" ? "type.php?data=" : $row["ID"] == "4" ? "type.php?page=" : "type.php?id=") .$row["ID"].'" class="blog-img"><img src="'.$row["Resim"].'" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
			<div class="desc" style="height:520px;">
				<h3><a href="'. ($row["ID"] == "2" ? "type.php?data=" : $row["ID"] == "4" ? "type.php?page=" : "type.php?id=") .$row["ID"].'">'.$row["Baslik"].'</a></h3>
				<span><small>by kuday </small> / <small> '.$row["Baslik"].' </small></span>
				<p>'.$row["Ozet"].'</p>
				<a href="'. ($row["ID"] == "2" ? "type.php?data=" : $row["ID"] == "4" ? "type.php?page=" : "type.php?id=") .$row["ID"].'" class="lead">Daha fazla oku <i class="icon-arrow-right3"></i></a>
			</div>
		</div>
	</div>';
	}
} 
else {
	//echo "Bir Hata var!";
}
$conn->close();
				?>

				</div>
			</div>
		
		
		</div>

	<?php
	include("footer.php");
	?>