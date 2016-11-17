@extends('master')
@section('content')

    <h3>O projekcie</h3>

    <hr>

    @if (Auth::user())

        <p>
            Czego będziemy potrzebowali do uruchomienia aplikacji ?
        </p>

        <ul>
            <li>PHP >= 5.6.4</li>
            <li>OpenSSL PHP Extension</li>
            <li>PDO PHP Extension</li>
            <li>Mbstring PHP Extension</li>
            <li>Tokenizer PHP Extension</li>
            <li>XML PHP Extension</li>
            <li>MySQL 5.6.2X</li>
        </ul>

        <p>
            Po uruchomieniu serwera Apache i MySQL należy pobrać aplikację z repozytorium git'a znajdującą się pod adresem :<br>

            <pre>https://github.com/witkit/git-github.com-znio-guestbook.git</pre>

            Następnie przenieść rozpakowaną zawartość aplikacji do katalogu głównego serwera.<br>

            Teraz należy utworzyć nową bazę danych i skonfigurować połączenie z nią w pliku : ".env”, znajdującym się w katalogu głównym aplikacji pod nazwą ".env.exemple".<br>

            Przykładowa konfiguracja :
        </p>

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

        <p>
            Następnie możemy zaimportować plik bazy danych do nowo utworzonej bazy danych z katalogu : "/database/db/guestbook_dd-mm-Y.sql"<br>

            Po wykonaniu powzyższych czynności wchodzimy do katalogu „public” znajdującym się w katalogu głównym aplikacji powinniśmy zobaczyć działającą "Księgę gości”.<br>

            Aby uruchomić wysyłanie wiadomości z formularza kontaktowego konieczne będzie skonfigurowanie skrzynki odbiorczej np. na gmail.com lub wstępnie na mailtrap.io w pliku : ".env”.<br>

            Przykładowa konfiguracja skrzynki odbiorczej :
        </p>

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

        <p>
            Aby uruchomić aplikację bezpośrednio po wpisaniu adresu domeny w url należy skonfigurować virtual host’a na serwerze.
        </p>

        <p>
            [CDN]
        </p>

        <br><br><br>

    @else

        <p>Aplikacja testowa.</p>

    @endif

@stop