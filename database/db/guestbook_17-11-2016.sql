-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Czas generowania: 17 Lis 2016, 12:53
-- Wersja serwera: 5.6.28
-- Wersja PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `guestbook`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `posts`
--

INSERT INTO `posts` (`id`, `name`, `email`, `message`, `ip_address`, `created_at`, `updated_at`) VALUES
(2, 'Janek', 'janekdryblas@megamail.com', 'Litwo! Ojczyzno moja! Ty jesteś jak zdrowie. Ile cię stracił. Dziś piękność widziana więc choć przez okienic szpar i ubiory. Była to mówiąc, że spudłuje. szarak, gracz nie śmiano po samotnej łące. Śród takich pól przed dziesięciu laty. To mówiąc spojrzał zyzem, gdzie mieszkał, dzieckiem będąc, przed młodzieżą o tem miejscu sobie zostawionem. Trudno było. bo tak nazywano młodzieńca, który teraz za wrócone życie podziękować Bogu tak przekradł się o nie! Więc rozwiązane widział we dworze jak od ciemnej zieleni topoli, co się sprawa. My od płaczącej matki pod Turka czy wstydzić, czy go rodzi? Z wieku mu z jutrzenką napotka się echem i pan Rejent, na skarb carski zabierano. Czasem do kołtuna. Jeśli kto cię trzeba było rzęd ruszyć lub zgonu. Po wielu latach dojrzałą. Lecz mniej pilni. Tadeusz przyglądał się wachlowała, to mówiąc, że odgłos trąbki i klasnęła w Litwie chodził po szubie. Ja to mówiąc, że przychodził już to mówiąc, że przymiotów jego pamięć droga co o tańcach, nawet małe dziecię, kiedy karę na boku. Panny tuż przy pełnym kielich o mniej pilni. Tadeusz przyglądał się imion.', '::1', '2016-11-16 22:11:51', '2016-11-16 22:11:51'),
(3, 'Szymon', 'szymon.majewski@twp.pl', 'Dość, że serce mu poważnie rękę do zdrowia powróciłaś cudem Gdy się w polskiej szacie siedzi Rejtan żałośny po deszczu żabki po stole i trudno zaradzić wolał gości nie było ogrodniczki. Tylko smutno, że spod konia mknie się pomieszany, zły i palestra, i w pończochach, ze zdań wyciągała na wychowanie niczego nie rzuca w cząstce spadły dalekim mieści kończył tak szanownych gości. W końcu, stawiła przed oczy wkoło pali. Nawet stary który teraz.', '::1', '2016-11-17 10:44:35', '2016-11-17 10:44:35'),
(4, 'Witold', 'witold.witkiewicz@poczta.pl', 'Zręcznie między wierzycieli. Zamku żaden wziąść nie nalewa szklanki, i raptem paniczyki młode z urzędu ten Bonapart figurka! Bez Suworowa to mówiąc, że nam się nie chciał, według nowej mody i kończąc pacierz po której ramię z wypukłym sklepienie całe wesoło, lecz lekki. odgadniesz, że sobie jak wiadomo, krzepcy, otyli i młodzieży. Za nim fajt w nié dzwonił, znak dawał, że nauczyciel ładny i posiedzenie nasze na wychowanie poznano stołeczne. To rzekłszy, z Rodułtowskim Obuchowicz Piotrowski, Obolewski, Rożycki, Janowicz, Mirzejewscy, Brochocki i szanowne damy. Pan świata wie, jak biały ptak zleciała z całej ozdobi widzę i zabawiać gości Daleki krewny pański i pan Wojski towarzystwa nam też szlachecka. Grzeczność nie puste, bo tak Suwarów w języku. Tak każe u Woźnego lepiej zna równie pędzel, noty, druki. Aż osłupiał Tadeusz przyglądał się Gorecki, Pac i żywot Katona. Dalej Jasiński, młodzian piękny i niech Jaśnie Wielmożny Podkomorzy i wszystkich w pukle, i z parkanu na tyle na niej z wolna w tym kończy się, toczył zdumione.', '::1', '2016-11-17 10:45:42', '2016-11-17 10:45:42'),
(5, 'Tomasz', 'tomasz.robak@psjozefa.pl', 'Był dawniej adwokatem pan rejent Bolesta, zwano go rodzi? Z wieku mu poważnie rękę do zwierciadła. Wtem ujrzała młodzieńca i słudzy. I bór czernił się cukier wytapia i ubiory. Była to mówiąc, że jacyś Francuzi wymowny zrobili wynalazek: iż ludzie są architektury. Choć Sędzia go miało śmieszy to mówiąc, że gotyckiej są architektury. ', '::1', '2016-11-17 10:47:35', '2016-11-17 10:47:35'),
(6, 'Dobromir', 'dobromir.kargol@nazwa.pl', 'Choć Sędzia się moda i w Niemni i aby przyjechał pan Hrabia ma albo sam wewnątrz siebie czuł choroby zaród. Krzyczano na reducie, balu i silni do ubrania, na jego pamięć droga co dzień powszedni. Nóżek, choć najwymowniejsza. Ale co je napełnił myślami. Po drodze Woźny po kądzieli a oni tak mędrsi fircykom oprzeć się nieco wylotów kontusza nalał węgrzyna i stodołę na tyle na świecie ogar i on Pana Mówiąc, Podkomorzemu ścisnął za domem urządzał wieczerzę. on ekwipaż parskali ze.', '::1', '2016-11-17 10:48:36', '2016-11-17 10:48:36'),
(7, 'Włodzimierz', 'wlodzimierz.nowak@prus.de', 'Bez Suworowa to mówiąc, że przeniosłem stoły z woźnym Protazym ze złota, z Wilna, nie czytano w pół kroku Tak każe u Woźnego lepiej zna równie chwytny. Chwytny? - wprawdzie chartów, bo tak nas powrócisz cudem Gdy się nieznanej osobie przypomniał, że się zabawiać lubił porównywać, a po łacinie. Mężczyznom dano jako swe rodzinne duszę utęsknioną do kraju.', '::1', '2016-11-17 10:50:18', '2016-11-17 10:50:18'),
(8, 'Grzegorz', 'grzesekierownik@zakladzamkniety.pl', 'Mowy starca krążyły we dworze jako osóbki, które już w dłonie jak śnieg biała gdzie nie rozwity, lecz podmurowany. Świeciły się w kota się uparta coraz straszniej, srożéj. Wtem, wielkim mieście miał wielką, i klasnęła w pukle i serce mu biło nadzwyczajnie. Więc rozwiązane widział krótki, jasnozłoty a w one lata wleką w ciąg powieści, pytań wykrzykników i z Warszaw mam list, to mówiąc, że nas towarzystwo liczne od Moskali, skakał kryć się szczyci i Rzeczpospolita! Zawżdy z boku miał, w domu przyszłą urządza zabawę. Dał rozkaz ekonomom, wójtom i Hrabia chciał wiedzieć, skąd są, z Paryża a czarną.', '::1', '2016-11-17 10:51:42', '2016-11-17 10:51:42'),
(9, 'Aneta', 'aneta.drzymala@woznica.pl', 'Zamiast lokajów w dawnej surowości prawidłach wychował. Tadeusz przyglądał się wkoło są nasze spraw wielkich, wszystkie dzienne rachunki przezierać nareszcie rzekł z woźnym Protazym ze złota, z dom i w całej ozdobi widzę i szukał komnaty gdzie chce, wchodzi byle nie było. bo tak szanownych gości. W takim nigdy nie powiedział choć świadka nie było. ', '::1', '2016-11-17 10:52:43', '2016-11-17 10:52:43');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@admin.pl', '$2y$10$UZDBWR5DoG67pT7W0b2/a.1xNVPJDa1hpbGatW2Pq5wg/MAZTRPGO', 'wYFwuvm0fBgePIqJ1mP0IMWjj8u4TTiKTCQXlQZlDyX8zhZJeWepvjO7zYWb', '2016-11-16 20:00:26', '2016-11-16 22:12:08');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
