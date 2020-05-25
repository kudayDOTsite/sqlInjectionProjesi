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
sudo mysql -u root < sqlinjection.sql
```

Artık eğitime hazırız!
Projeyi tarayıcıdan başlatın ve test sayfasına ilerleyiniz. Eğer bir hata almadıysanız eğitime başlayınız. Hata alıyorsanız yapmış olduğunuz işlemleri kontrol ediniz.

## Projenin Ekran Görüntüleri
<img src="https://raw.githubusercontent.com/kudayDOTsite/sqlInjectionProjesi/master/images/resim1.png" style="width:100%;">
<img src="https://raw.githubusercontent.com/kudayDOTsite/sqlInjectionProjesi/master/images/resim2.png" style="width:100%;">
<img src="https://raw.githubusercontent.com/kudayDOTsite/sqlInjectionProjesi/master/images/resim3.png" style="width:100%;">


## Geliştirici notları
1. first commit!
2. test sayfası eklendi.
