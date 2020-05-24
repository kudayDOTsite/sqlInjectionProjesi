
	<?php
    include("header.php");
    include("configuration.php");
    
    $id = 1;
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
    
    $sql = "SELECT * FROM Blog where ID = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            echo '<div id="fh5co-main">
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"></h2>
				    <div class="row row-bottom-padded-md">
					    <div class="col-md-12 col-sm-12 col-padding animate-box" data-animate-effect="fadeInLeft">
                            <div class="col-md-12" align="center">
                                <h3>'.$row["Baslik"].'</h3>
                            </div>    
                            <div class="col-md-12">
                                  
                                <div class="col-md-12" >'.$row["Aciklama"].'</div>
                                    <div class="col-md-12">
                                    <hr>
                                    <strong>Referanslar</strong>'.$row["Referans"].
                                    '</div>
                                             
                                </div>
            
                            </div>
                        </div>
                    
                    
                    </div>
            </div>';
        }
    } 
    else {
        if($id != 3){
            echo $conn -> error;
        }
    }
    $conn->close();


    ?>
        
    <?php
	include("footer.php");
	?>