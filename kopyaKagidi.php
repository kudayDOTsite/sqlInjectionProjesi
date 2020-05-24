
	<?php
    include("header.php");
    include("configuration.php");
    
?>

<div id="fh5co-main">
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Read Our Blog</h2>
				    <div class="row row-bottom-padded-md">
					    <div class="col-md-12 col-sm-12 col-padding animate-box" data-animate-effect="fadeInLeft">
                            <div class="col-md-12" align="center">
                                <h3>Kopya Kağıtları</h3>
                            </div>    
                            <div class="col-md-12">
                                  
                                <div class="col-md-12" >
                                    <p>
                                        Eğitim esnasında hedef sunucudan bilgi çıkarma işlemlerinde sana yardımcı olacak bazı bilgiler aşağıda verilmiştir.
                                    </p>
                                    <hr>
                                    <h4>Information Functions</h4>
                                    <ul>
                                        <li><strong>SCHEMA():</strong>Bu fonksyion sayesinde Schema bilgisi elde edilebilir.</li>
                                        <li><strong>USER(), SESSION_USER(),SYSTEM_USER() :</strong>Bu fonksiyonlar sayesinde Kullanıcı adı elde edilebilir.</li>
                                        <li><strong>VERSION():</strong>Bu fonksiyonlar sayesinde Version hakkında bilgi edinilebilir.</li>
                                        <li><strong>DATABASE():</strong>Database ismi hakkında bilgi elde edebiliriz.</li>
                                    </ul> 
                                    <hr>
                                    <h4>Union-based SQLi</h4>
                                    <ul>
                                        <li>Union sorgusunda sol taraftaki sutun sayısı ile sağ taraftaki sutun sayıları eşit olmalıdır.</li>
                                        <li><strong>Örnek bir kullanım:</strong> select * from Blog union select 1,2,3,4,5,table_name,7 from information_schema.tables where table_schema = database();</li>
                                    </ul> 

                                </div>
                                <div class="col-md-12">
                                    <hr>
                                    
                                    <strong>Referanslar</strong>
                                             <p>
                                             https://www.w3resource.com/mysql/mysql-information-functions.php#cons14
                                            </p>
                                </div>
            
                            </div>
                        </div>
                    
                    
                    </div>
            </div>
        
    <?php
	include("footer.php");
	?>