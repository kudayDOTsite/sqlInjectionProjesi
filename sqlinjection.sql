CREATE USER 'kuday'@'localhost' IDENTIFIED BY 'sarikamyon';
GRANT ALL PRIVILEGES ON SQLINJECTION.* TO 'kuday'@'localhost';
create database SQLINJECTION;
use SQLINJECTION;
CREATE TABLE Blog (
    ID int,
    Baslik varchar(255),
    Ozet varchar(255),
    Aciklama varchar(2000),
    Referans varchar(1000),
    Resim varchar(255),
    Url varchar(255)
);
CREATE TABLE User (
    ID int,
    Isim varchar(255),
    KullaniciAdi varchar(255),
    Sifre varchar(2000)
);
INSERT INTO Blog (ID, Baslik, Ozet, Aciklama, Referans, Resim, Url) VALUES (1, 'Union-based SQLi', 'Union-based SQLi tabanlı saldırıları nasıl yapacağınızı anlayabileceğiniz bir alıştırmadır.','<p>Union-based SQLi, iki veya daha fazla SELECT ifadesinin sonuçlarını tek bir sonuçta birleştirmek için UNION SQL operatörünü kullanan ve daha sonra HTTP yanıtının bir parçası olarak döndürülen bir tekniktir.</p><table class="table table-striped table-hover"><thead><tr><th>Description</th><th align="left">Query</th></tr></thead><tbody><tr><td>Union</td><td>SELECT "mysql" UNION SELECT @@version</td></tr><hr></tbody></table>', '<p>https://sqlwiki.netspi.com/injectionTypes/unionBased/#mysql</p></br>', 'images/img-1.jpg', 'unionsqli.php'); 
INSERT INTO Blog (ID, Baslik, Ozet, Aciklama, Referans, Resim, Url) VALUES (2, 'Error Based SQLi', 'Error Based SQLi tabanlı saldırıları hata mesajlarındaki sorgu sonuçlarından yararlanmak amaçlı kullanılır.','<p>Error Based SQLi tabanlı saldırıları hata mesajlarındaki sorgu sonuçlarından yararlanmak amaçlı kullanılır.</p><table class="table table-striped table-hover"><thead><tr><th>Description</th><th align="left">Query</th></tr></thead><tbody><tr><td>XML Parse Error</td><td>SELECT extractvalue(rand(),concat(0x3a,(select version())))</td></tr><hr></tbody></table>', '<p>https://sqlwiki.netspi.com/injectionTypes/errorBased/#mysql</p></br>', 'images/img-2.jpg', 'errorBasedsqli.php'); 
INSERT INTO Blog (ID, Baslik, Ozet, Aciklama, Referans, Resim, Url) VALUES (3, 'Blind Injection', 'Blind Injection tabanlı saldırılar HTTP yanıtındaki farklı HTTP durum kodları, yanıt süreleri, HTML sayfasının uzunluğu ve HTML içerikleriyle belirlenebilir.','<p>Blind Injection tabanlı saldırılar HTTP yanıtındaki farklı HTTP durum kodları, yanıt süreleri, HTML sayfasının uzunluğu ve HTML içerikleriyle belirlenebilir.</p><table class="table table-striped table-hover"><thead><tr><th>Description</th><th align="left">Query</th></tr></thead><tbody><tr><td>User is root</td><td>SELECT IF(user() LIKE "root@%", SLEEP(5), null)</td></tr><hr></tbody></table>', '<p>https://sqlwiki.netspi.com/injectionTypes/blindBased/#mysql</p></br>', 'images/img-3.jpg', 'blindsqli.php'); 
INSERT INTO User (ID, Isim, KullaniciAdi, Sifre) VALUES (1, 'Kuday', 'kuday','sarikamyon');
INSERT INTO User (ID, Isim, KullaniciAdi, Sifre) VALUES (2, 'Beren', 'admin','password123');
CREATE TABLE TEST (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50)
) ;
INSERT INTO TEST (id, firstname, lastname, email)
VALUES (1, "beren", "gorun", "test@mail.com");
INSERT INTO TEST (id, firstname, lastname, email)
VALUES (2, "ahmet", "kaya", "ahmet@mail.com");
INSERT INTO TEST (id, firstname, lastname, email)
VALUES (3, "beril", "ozer", "beril@mail.com");
INSERT INTO TEST (id, firstname, lastname, email)
VALUES (4, "kenan", "soylu", "kenan@mail.com");
INSERT INTO TEST (id, firstname, lastname, email)
VALUES (5, "sinan", "soylu", "sinan@mail.com");
INSERT INTO TEST (id, firstname, lastname, email)
VALUES (6, "cuneyt", "oz", "cuneyt@mail.com");
INSERT INTO TEST (id, firstname, lastname, email)
VALUES (7, "fatih", "secen", "fatih@mail.com");
INSERT INTO TEST (id, firstname, lastname, email)
VALUES (8, "derya", "ordulu", "derya@mail.com");

