
<?php
include("header.php");

if(isset($_GET["submit"]))
{
	include("configuration.php");
	$kullaniciAdi = $_GET["kullaniciAdi"];
	$password = $_GET["password"];
	$sql = "SELECT * FROM User where KullaniciAdi = '$kullaniciAdi' and Sifre = '$password'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
			echo "<script>alert('Giriş Başarılı!');</script>";
		}
	}
	else {
        echo "<script>alert('Hata!');</script>";
    }
}
else
{

}
?>

		<div id="fh5co-main">
			<div class="fh5co-narrow-content">
				<div class="row row-bottom-padded-md">
					
					<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
					<form>
						<div class="form-group">
							<label for="exampleInputEmail1">Kullanıcı Adı</label>
							<input type="text" name="kullaniciAdi" class="form-control"  placeholder="Kullanıcı adınızı giriniz">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Şifre</label>
							<input type="password" name="password" class="form-control" placeholder="Password">
						</div>
						
						<button type="submit" name="submit" class="btn btn-primary">Giriş</button>
					</form>	
					</div>
				</div>
			</div>

			
		</div>

		<?php
include("footer.php");
?>

