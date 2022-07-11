## Progress 2 
- Jalankan Xampp, PhpMyAdmin dan Visual Studio Code
- Buat Database
- Buka project menggunakan VSCode 
- Pada file .env atur sesuai Database
![image](https://user-images.githubusercontent.com/106764628/178338416-62563c20-8d36-4575-b0dd-aa0def18c001.png)
- Membuat File Migration `php artisan make:migration create_rss_table` , `php artisan make:migration create_news_table`
- Buka file yg telah dibuat tadi "database\migrations\create_news_table.php, create_news_table.php" lalu isikan sesuai yg diinginkan
- Jika sudah selesai selanjutnya buka terminal di VSCode lalu ketikan `php artisan migrate:fresh`
- Membuat "NewsController.php" dan "RssController.php" 
    `php artisan make:controller RssController 
    php artisan make:controller NewsController`
- Lalu isikan yg dinginkan pada NewsController.php
- Lanjut membuat rss Seed Controler `php artisan make:model Rss --seed --controller`
- Kemudian buka Foler Model lalu isikan pada "Rss.php" dan "News.php" sesuai keinginan
- Jika sudah selasai semua maka selanjutnya ketik perintah ini 
`php artisan migrate:fresh`
`php artisan migrate:seed`
`php artisan serve` 
Pada php artisan serve nanti akan ada IP yg akan muncul kemudian Copy Paste pada web browser anda
