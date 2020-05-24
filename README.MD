# Proje Hakkında

Bu proje Sql Injection konusunda kendisini geliştirmek isteyenler için geliştirilmiştir. Eğitim amaçlı izinsiz bir şekilde kullanılabilir.

## Kurulum

Bu proje Kali2020 dağıtımında test edilmiştir. Kali içerisinde apache ve mysql servisleri kurulu geldiğinden dolayı belirtilen bu servislerin kurulumundan burada bahsedilmeyecektir. İlk olarak projeyi indirin daha sonrasında `/var/www/html` klasörüne kopyalayın.

```bash
git clone https://github.com/kudayDOTsite/sqlInjectionProjesi.git
sudo cp -r sqlInjectionProjesi/ /var/www/html
```
Eğer mysql ve apache servisleriniz açık değilse bu servisleri başlatın.

```bash
sudo systemctl start apache2.service
sudo systemctl start mysql.service
```
Daha sonrasın bu işlemi `netstat` aracı ile kontrol etmek isteyebilirsiniz.

```bash
netstat -antep
(Not all processes could be identified, non-owned process info
 will not be shown, you would have to be root to see it all.)
Active Internet connections (servers and established)
Proto Recv-Q Send-Q Local Address           Foreign Address         State       User       Inode      PID/Program name    
tcp        0      0 127.0.0.1:3306          0.0.0.0:*               LISTEN      104        601105     -                   
tcp        0      0 10.0.2.15:57538         172.217.22.228:443      ESTABLISHED 1000       598480     1563/x-www-browser  
tcp        0      0 10.0.2.15:57850         84.201.141.148:443      TIME_WAIT   0          0          -                   
tcp        0      0 10.0.2.15:39364         140.82.113.25:443       ESTABLISHED 1000       598857     1563/x-www-browser  
tcp6       0      0 :::80                   :::*                    LISTEN      0          598837     -                   
```

Proje mysql veritabanı ile çalışmaktadır. Bundan dolayı mysql içerisine kullanacağımız database'i ve tabloları oluşturmamız gerekiyor. mysql içerisinde oluşturulan kullanıcı adı ve şifreleri değiştirmeyiniz, bunlar configuration.php dosyasında kullanılacak olan bilgilerdir. Mysql kabuğunun içerisine giriniz.

```bash
sudo mysql -u root
```
Daha sonrasında aşağıdakine benzer bir ekranla karşılaşacaksınız...
```bash
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 39
Server version: 10.3.21-MariaDB-2 Debian buildd-unstable

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> 
```
Aşağıdaki komutları teker teker çalıştırınız...
```bash
CREATE USER 'kuday'@'localhost' IDENTIFIED BY 'sarikamyon';
```
```bash
CREATE DATABASE SQLINJECTION;
```
```bash
GRANT ALL PRIVILEGES ON SQLINJECTION.* TO 'kuday'@'localhost';
```
```bash
quit;
```
Şimdi oluşturmuş olduğumuz `kuday` kullanıcısı ile mysql kabuğuna bağlanmayı deneyelim...

```bash
mysql -u kuday -p -h localhost
```
Kullanacağımız database'i ve tabloları oluşturalım...

```bash
create database SQLINJECTION;
use SQLINJECTION;
```
```bash
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

```
Oluşturduğumuz tablolar içersine kayıt ekleyelim.

```bash
INSERT INTO Blog (ID, Baslik, Ozet, Aciklama, Referans, Resim, Url) VALUES (1, 'Union-based SQLi', 'Union-based SQLi tabanlı saldırıları nasıl yapacağınızı anlayabileceğiniz bir alıştırmadır.','<p>Union-based SQLi, iki veya daha fazla SELECT ifadesinin sonuçlarını tek bir sonuçta birleştirmek için UNION SQL operatörünü kullanan ve daha sonra HTTP yanıtının bir parçası olarak döndürülen bir tekniktir.</p><table class="table table-striped table-hover"><thead><tr><th>Description</th><th align="left">Query</th></tr></thead><tbody><tr><td>Union</td><td>SELECT "mysql" UNION SELECT @@version</td></tr><hr></tbody></table>', '<p>https://sqlwiki.netspi.com/injectionTypes/unionBased/#mysql</p></br>', 'images/img-1.jpg', 'unionsqli.php'); 

INSERT INTO Blog (ID, Baslik, Ozet, Aciklama, Referans, Resim, Url) VALUES (2, 'Error Based SQLi', 'Error Based SQLi tabanlı saldırıları hata mesajlarındaki sorgu sonuçlarından yararlanmak amaçlı kullanılır.','<p>Error Based SQLi tabanlı saldırıları hata mesajlarındaki sorgu sonuçlarından yararlanmak amaçlı kullanılır.</p><table class="table table-striped table-hover"><thead><tr><th>Description</th><th align="left">Query</th></tr></thead><tbody><tr><td>XML Parse Error</td><td>SELECT extractvalue(rand(),concat(0x3a,(select version())))</td></tr><hr></tbody></table>', '<p>https://sqlwiki.netspi.com/injectionTypes/errorBased/#mysql</p></br>', 'images/img-2.jpg', 'errorBasedsqli.php'); 

INSERT INTO Blog (ID, Baslik, Ozet, Aciklama, Referans, Resim, Url) VALUES (3, 'Blind Injection', 'Blind Injection tabanlı saldırılar HTTP yanıtındaki farklı HTTP durum kodları, yanıt süreleri, HTML sayfasının uzunluğu ve HTML içerikleriyle belirlenebilir.','<p>Blind Injection tabanlı saldırılar HTTP yanıtındaki farklı HTTP durum kodları, yanıt süreleri, HTML sayfasının uzunluğu ve HTML içerikleriyle belirlenebilir.</p><table class="table table-striped table-hover"><thead><tr><th>Description</th><th align="left">Query</th></tr></thead><tbody><tr><td>User is root</td><td>SELECT IF(user() LIKE "root@%", SLEEP(5), null)</td></tr><hr></tbody></table>', '<p>https://sqlwiki.netspi.com/injectionTypes/blindBased/#mysql</p></br>', 'images/img-3.jpg', 'blindsqli.php'); 

INSERT INTO User (ID, Isim, KullaniciAdi, Sifre) VALUES (1, 'Kuday', 'kuday','sarikamyon'); 
INSERT INTO User (ID, Isim, KullaniciAdi, Sifre) VALUES (2, 'Beren', 'admin','password123'); 
```
Artık eğitime hazırız!
Projeyi tarayıcıdan başlatın ve test sayfasına ilerleyiniz. Eğer bir hata almadıysanız eğitime başlayınız. Hata alıyorsanız yapmış olduğunuz işlemleri kontrol ediniz.

##Projenin Ekran Görüntüleri
<img src="" style="width:100%;">
<img src="" style="width:100%;">
<img src="" style="width:100%;">


##Geliştirici notları
1. first commit!
2. test sayfası eklendi.
