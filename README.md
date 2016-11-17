# git-github.com-znio-guestbook

Czego będziemy potrzebowali do uruchomienia aplikacji ?

* PHP >= 5.6.4
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
* MySQL 5.6.2X

Po uruchomieniu serwera Apache i MySQL należy pobrać aplikację z repozytorium git'a znajdującą się pod adresem :

<pre>https://github.com/witkit/git-github.com-znio-guestbook.git</pre>

Następnie przenieść rozpakowaną zawartość aplikacji do katalogu głównego serwera.

Teraz należy utworzyć nową bazę danych i skonfigurować połączenie z nią w pliku : ".env”, znajdującym się w katalogu głównym aplikacji pod nazwą ".env.exemple".

Przykładowa konfiguracja :

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
         
Następnie możemy zaimportować plik bazy danych do nowo utworzonej bazy danych z katalogu : "/database/db/guestbook_dd-mm-Y.sql"

Po wykonaniu powzyższych czynności wchodzimy do katalogu „public” znajdującym się w katalogu głównym aplikacji powinniśmy zobaczyć działającą "Księgę gości”.

Aby uruchomić wysyłanie wiadomości z formularza kontaktowego konieczne będzie skonfigurowanie skrzynki odbiorczej np. na gmail.com lub wstępnie na mailtrap.io w pliku : ".env”.

Przykładowa konfiguracja skrzynki odbiorczej :

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

[CDN]