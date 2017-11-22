# git-github.com-znio-guestbook

Wymagania do uruchomienia aplikacji ?

* PHP >= 5.6.4
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
* MySQL 5.6.2X
* git
* composer

Uruchomić serwer Apache i MySQL należy pobrać aplikację z repozytorium git'a:

<pre>
git clone https://github.com/witkit/git-github.com-znio-guestbook.git
cd git-github.com-znio-guestbook/
composer update
</pre>

Generowanie nowego klucza dla aplikacji:

<pre>
php artisan key:generate
</pre>

Konfiguracja połączenia z bazą danych.
Przykładowa konfiguracja:

<pre>
...
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=guestbook
DB_USERNAME=guestbook
DB_PASSWORD=!x@c%Se#8$7*Cb^wE6&0
...
</pre>

Import pliku bazy danych do nowo utworzonej bazy danych z katalogu : "/database/db/guestbook_dd-mm-Y.sql"

Uruchomienie aplikacji należy wejść do katalogu „public” znajdującym się w katalogu głównym aplikacji.

Uruchomienie wysyłania wiadomości z formularza kontaktowego konieczne będzie skonfigurowanie skrzynki odbiorczej np. na gmail.com lub wstępnie na mailtrap.io w pliku : ".env”.

Przykładowa konfiguracja skrzynki odbiorczej:

<pre>
...
MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=ae959caa349b82
MAIL_PASSWORD=32a1cf46746c7b
MAIL_ENCRYPTION=
...
</pre>

Aby uruchomić aplikację bezpośrednio po wpisaniu adresu domeny w url należy skonfigurować virtual host’a na serwerze.
