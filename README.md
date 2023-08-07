# ELECTROKOU E-ticaret Sitesi Projesi

"Elektronik Cihaz Aksesuarları" e-ticaret sitesi, geliştirilmesi için PHP dilinin CodeIgniter çatısı kullanılarak oluşturulmuştur. Site, HTML, CSS ve JavaScript gibi web geliştirme teknolojileri ile oluşturulmuştur. Ayrıca, Microsoft Visual Studio Code (VSCode) entegre geliştirme ortamı (IDE) kullanılmıştır. 

CodeIgniter, MVC (Model-View-Controller) mimarisine dayalı bir çatıdır ve web uygulamalarının hızlı bir şekilde geliştirilmesine olanak tanır. CodeIgniter, sunduğu kütüphaneler ve araçlar sayesinde web uygulaması geliştirmeyi kolaylaştırır. PHP dilinin esnekliği ve CodeIgniter'ın kolay kullanımı sayesinde, site geliştirilmesi hızlı ve verimli bir şekilde gerçekleştirilmiştir.

HTML, CSS ve JavaScript, web uygulamalarının yapı taşlarıdır ve site tasarımı ve kullanıcı deneyimi için önemlidir. HTML, site yapısını tanımlar ve içerikleri düzenler. CSS, siteye stil ve düzen verir ve site tasarımının kullanıcı dostu olmasını sağlar. JavaScript ise, sitenin dinamik ve interaktif özelliklerinin geliştirilmesinde kullanılır.

![image](https://user-images.githubusercontent.com/83577247/236881154-68481ebf-c8de-4a67-a63b-7aaa5508abda.png)
Orijinal templatein anasayfa kısmı bu şekilde başlıyordu. Link verilebilecek bir slider yapısı oluşturulmuştu.
 
 
![image](https://user-images.githubusercontent.com/83577247/236881210-6ce3fac6-53b9-4f7f-8b22-c0f8b9f619c7.png)
Slider kısmı telefon, bilgisayar ve kablo aksesuarları ile dolduruldu. Php ve codeigniter sayesinde session özelliği kullanarak bu ürünlerin olduğu sayfalara yönlendirme yapıldı.


![image](https://user-images.githubusercontent.com/83577247/236881236-59a02fd6-c82f-42b0-9120-46ab866ae87f.png)
Kayıt Ol ve Giriş olarak güncellenen anasayfa butonları, içleri de düzenlenerek kayıt ol formu ve giriş formu oluşturuldu.


![image](https://user-images.githubusercontent.com/83577247/236881673-4decca6f-480b-4d08-ab70-d7b2546dc558.png)
Bir modal içine yerleştirilen kayıt formu, model ve controller sayfalarında oluşturulan fonskiyonlarla veritabanına bağlanmıştır. Doğru bir şekilde çalışarak kayıt alıp veri tabanına kullanıcıları kaydetmektedir.


![image](https://user-images.githubusercontent.com/83577247/236881755-3442f81a-4034-4d29-9821-0f569811eb26.png)
Kayıt ol formunu başarıyla dolduran kullanıcı başarıyla üye olduğuna ve giriş yapabileceğine dair bir alertle karşılaşır, artık veri tabanında kayıt oluşmuştur ve giriş yapabilir.


![image](https://user-images.githubusercontent.com/83577247/236881991-e39702e5-1e01-4c44-9843-987664232002.png)
Giriş yap formu da modal üzerinden oluşturulmuştur ve üyeislem controller sayfasından ve vt veritabanı sayfasından veri tabanına bağlanmaktadır. Kayıt olduğu mail adresi ve şifresiyle kullanıcı artık başarılı bir şekilde giriş yapabilmektedir.


![image](https://user-images.githubusercontent.com/83577247/236882205-9823c7db-f4c6-4861-858f-4b060799514d.png)
Giriş yapan kullanıcı fotoğrafta görünen grit ile karşılaşır artık session değişmiştir ve her kullanıcı kendine ait sayfayı bu şekilde görebilir.


![image](https://user-images.githubusercontent.com/83577247/236882247-06f57108-af43-4b8f-a4bf-c9acb0e4e8f4.png)
Profilim butonuna tıklayan kullanıcı kendi profil sayfasına yönlendirilir. 


![image](https://user-images.githubusercontent.com/83577247/236882280-25e395ce-4219-4e58-a3c2-0d3d6f1c1afa.png)
Hesap bilgileri formundan kullanıcı kayıtlı olan bilgilerini görür, aynı zamanda bunları güncelleyebilir. Gerekli veri tabanı bağlantıları yapılmıştır, kullanıcı bilgilerini değiştirip kaydet butonuna bastığında veri tabanındaki üye bilgileri güncellenir.


![image](https://user-images.githubusercontent.com/83577247/236882337-de0b3f76-d8f6-4c9f-88ee-e2d2cd0b8131.png)
Kullanıcı eğer başka bir kullanıcıya ait olan usernamei almak isterse hata alerti ile karşılanır.


![image](https://user-images.githubusercontent.com/83577247/236882435-0eaf7bac-5670-4bc2-bfd5-aea2f74607bd.png)
Üye bilgilerini doğru şekilde güncelleyen kullanıcı tebrikler alerti ile karşılaşır ve anasayfaya yönlendirilir.


![image](https://user-images.githubusercontent.com/83577247/236882922-e37ba060-1312-4bea-813c-96f5b9d129d0.png)
Profilim sayfasında şifre güncelle formuyla karşılaşan kullanıcı eski şifresini ve yeni olmasını istediği şifreyi girerek password bilgilerini de güncelleyebilir.


![image](https://user-images.githubusercontent.com/83577247/236882983-e372a05d-7a78-4a20-8106-5a21a8313be4.png)
Eğer kullanıcının yazdığı yeni şifre ve yeni şifre tekrar kısımları aynı değilse bu hatayla karşılaşır.


![image](https://user-images.githubusercontent.com/83577247/236883125-3abd4df8-2502-47f0-8d36-047cac50dfc7.png)
Kullanıcı başarılı bir şekilde şifresini değiştirirse bu alertle karşılaşır ve anasayfaya yönlendirilir


# Ürün Düzenlemeleri

•	Ürünler için 3 ayrı sayfa oluşturuldu. Anasayfada bulunan menü kısmına ve sliderdaki “Şimdi Satın Al” butonlarına tıklayarak kullanıcı ürün sayfalarına ulaşabilir. 

•	Telefon aksesuarları, bilgisayar aksesuarları ve kablo aksesuarları olarak ayrılan ürünleri sayfada bulunna cardlara, veritabanı üzerinden listelendi.
![image](https://user-images.githubusercontent.com/83577247/236883302-f55682d4-7d93-455a-bd2e-aad725a13f33.png)


•	Kablo ürünleri listelendi, altında bulunan inputlardan adet girişi alınıyor ve ürün üzerine tıkladığımızda ise sepete ekle butonu ile karşılaşılıyor.
![image](https://user-images.githubusercontent.com/83577247/236883354-3a5e17c0-7da2-49c0-8520-c721010e9476.png)


•	Sepete ekle butonu ürünü sepetim kısmına gönderiyor ve ürünü sepette listeliyor.
![image](https://user-images.githubusercontent.com/83577247/236883416-bc869a1c-dc9e-4628-8206-7e1e243952df.png)
•	Telefon aksesuarları da bu şekilde görünüyor.


![image](https://user-images.githubusercontent.com/83577247/236883488-ff42fa1d-39f6-4500-9256-ab5c6f2e210c.png)
Bilgisayar aksesuarları da bu şekilde listeleniyor.


![image](https://user-images.githubusercontent.com/83577247/236883546-99692402-df1d-4f36-8401-46b1e8bb6abf.png)
Sepetim butonuna tıklayan kullanıcı eğer sepetinde ürün yoksa bu şekilde bir alert ile karşılaşıyor.



# Yönetici Paneli

![image](https://user-images.githubusercontent.com/83577247/236883613-048c9cda-2cc3-4f81-bd6c-205e4b03fbf0.png)
Admin panelinin ilk hali bu şekildeydi. Veri tabanımda yönetim adlı bir tablo oluşturarak öncelikle sayfanın veritabanı bağlantısı yapıldı.


![image](https://user-images.githubusercontent.com/83577247/236883679-e04a0631-0fa3-4c5f-ab73-4faa25f94801.png)
Admin için giriş formu oluşturuldu, veri tabanından bağlantı sağlandı ve admin mail ve şifre ile giriş yapabiliyor.

![image](https://user-images.githubusercontent.com/83577247/236883717-2d8e291d-7308-4a39-b896-f1d2c4689ad2.png)
Eğer admin olmayan birisi veya admin yanlış mail ve şifre girerse hata alert ile karşılaşır.


![image](https://user-images.githubusercontent.com/83577247/236883754-8b18a512-b5b6-44a0-8c5c-f6f0c7978273.png)
Admin giriş yaptığında iki adet card ile karşılaşır. Birisi veri tabanında bulunan tüm ürünleri listelemek, güncellemek ve silmek için oluşturulan diğeri de üyeler için oluşturulan sayfadır.



![image](https://user-images.githubusercontent.com/83577247/236883798-b508cc1d-b025-409c-bb23-253260194e92.png)
Yöneticinin tüm ürünleri görüntülediği bu sayfada toplam ürün sayısı ve satışlar görüntülenir. Admin istediği ürünün yanındaki “görüntüle”, “güncelle” ve “sil” butonlarıyla ürün üzerinde işlem yapabilir.
 
 
 
![image](https://user-images.githubusercontent.com/83577247/236883836-7dfdbab7-848a-447f-9b47-df7d93399d6f.png)
Ancak adminin ürün silmek için, yanlışlıkla ürün silmesini engellemek için oluşturulan “silme özelliği” butonunun aktif edilmesi gerekiyor.
 
 
![image](https://user-images.githubusercontent.com/83577247/236883892-75ff32e0-8a40-47e3-8c7a-9b6614df38fa.png)
Eğer silme özelliği pasifken admin sil butonuna tıklarsa alert ile karşılaşır ve ürün silinmez.


Görüntüle butonuna tıklandığında admin tıklanan
ürünün adını, bilgisini, fiyatını, adetini ve görselini görür.
![image](https://user-images.githubusercontent.com/83577247/236883939-3ef82c68-d744-43f8-b181-ecb3c3dc26b5.png)



![image](https://user-images.githubusercontent.com/83577247/236883966-649c20d8-9f55-4a61-916e-00d4c17e2637.png)
Admin güncelle butonuna tıkladığında ürünü güncelleyebilmesi için bir formla karşılaşır. Form üzerinde veri tabanında kayıtlı olan özellikler yazılıdır. Admin buradan ürünün kapak resmini ve diğer tüm bilgileri güncelleyebilir. 


![image](https://user-images.githubusercontent.com/83577247/236884016-c400b9f8-a35b-4ae5-b16f-991893bcb96a.png)


Ürün güncellendikten sonra admin, yönetim panelinin anasayfasına yönlendirilir ve güncellemenin başarıyla olduğuna dair alertle karşılaşır.
![image](https://user-images.githubusercontent.com/83577247/236884060-1fc4b533-3222-414f-860d-2906d82f036e.png)

Ürün güncellendikten sonra admin, yönetim panelinin anasayfasına yönlendirilir ve güncellemenin başarıyla olduğuna dair alertle karşılaşır.
 
 
![image](https://user-images.githubusercontent.com/83577247/236884123-0b7f5238-c0e4-474e-bcae-cadb8044044f.png)
Admin üyeleri ise bu şekilde görüntüler.


![image](https://user-images.githubusercontent.com/83577247/236884276-745d790d-955b-47a3-b6ea-d9a1d7a23cb6.png)
Üye durumunu güncelle butonuna tıklandığında, üyenin aktiflik 
durumu 1 ve 0 yani aktif ve pasif olarak güncellenebilir.


Üyenin silinebilmesi için aynı ürünler kısmında olduğu gibi üyeler 
kısmında da silme özelliğinin aktif edilmesi gerekiyor.


![image](https://user-images.githubusercontent.com/83577247/236884336-64bd2c5b-15b7-4139-a24e-cb0a2732188a.png)
Üyeyi görüntüle butonuna tıklandığında üyenin resmi, adı, soyadı ve aktiflik durumu görüntülenir.








