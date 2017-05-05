CREATE TABLE `zawodnicy` (
	`id_zawodnika` int(16) NOT NULL AUTO_INCREMENT, 
	`imie` varchar(60) NOT NULL,
	`nazwisko` varchar(60) NOT NULL,
	`klub` varchar(60) NOT NULL,
	`waga` varchar(10) NOT NULL,
	`stopien` varchar(10) NOT NULL,
	`zdjecie` varchar(10) NOT NULL,
	`licencja` varchar(10) NOT NULL,
	PRIMARY KEY (`id_zawodnika`)
);

CREATE TABLE `klub` (
	`id_klubu` int(16) NOT NULL AUTO_INCREMENT,
	`nazwa_klubu` varchar(255) NOT NULL,
	`nazwa_dluga` varchar(60) NOT NULL,
	`ulica` varchar(60) NOT NULL,
	`nr_domu` varchar(16) NOT NULL,
	`kod_pocztowy` varchar(16) NOT NULL,
	`miasto` varchar(60) NOT NULL,
	`wojewodztwo` varchar(60) NOT NULL,
	`kraj` varchar(60) NOT NULL,
	`telefon` varchar(60) NOT NULL,
	`strona_www` varchar(60) NOT NULL,
	`email` varchar(60) NOT NULL,
	`logo` varchar(60) NOT NULL,
	PRIMARY KEY (`id_klubu`)
);

CREATE TABLE `zawody_info` (
	`id_zawodow` int(16) NOT NULL AUTO_INCREMENT,
	`nazwa` varchar(100) NOT NULL,
	`organizator` varchar(100) NOT NULL,
	`ulica` varchar(60) NOT NULL,
	`nr_domu` varchar(60) NOT NULL,
	`kod_pocztowy` varchar(60) NOT NULL,
	`miasto` varchar(60) NOT NULL,
	`wojewodztwo` varchar(60) NOT NULL,
	`kraj` varchar(60) NOT NULL,
	`telefon` varchar(60) NOT NULL,
	`strona_www` varchar(60) NOT NULL,
	`email` varchar(60) NOT NULL,
	`informacje` varchar(60) NOT NULL,
	`biuletyn` varchar(60) NOT NULL,
	`logo` varchar(60) NOT NULL,
	`start` varchar(10) NOT NULL,
	`koniec` varchar(10) NOT NULL,
	`zapisy_start` varchar(10) NOT NULL,
	`zapisy_koniec` varchar(10) NOT NULL,
	PRIMARY KEY (`id_zawodow`)
);

CREATE TABLE `zawody_patroni` (
	`id_patroni` int(16) NOT NULL AUTO_INCREMENT,
	`nazwa` varchar(100) NOT NULL,
	`logo` varchar(100) NOT NULL,
	`strona_www` varchar(60) NOT NULL,
	PRIMARY KEY (`id_patroni`)
);

CREATE TABLE `zawody_sponsorzy` (
	`id_sponsorzy` int(16) NOT NULL AUTO_INCREMENT,
	`nazwa` varchar(100) NOT NULL,
	`rola` varchar(30) NOT NULL,
	`logo` varchar(30) NOT NULL,
	`strona_www` varchar(100) NOT NULL,
	PRIMARY KEY (`id_sponsorzy`)
);

CREATE TABLE `zawody_regulamin` (
	`id_regulamin` int(16) NOT NULL AUTO_INCREMENT,
	`tresc` TEXT(500) NOT NULL,
	`cena_ind` varchar(20) NOT NULL,
	`cena_druzyna` varchar(20) NOT NULL,
	`max_startow` varchar(20) NOT NULL,
	`kon_wyzej` varchar(20) NOT NULL,
	PRIMARY KEY (`id_regulamin`)
);

CREATE TABLE `konkurencje` (
	`id_konkurencji` int(16) NOT NULL AUTO_INCREMENT,
	`rodzaj` varchar(60) NOT NULL,
	`plec` varchar(60) NOT NULL,
	`wiek` varchar(60) NOT NULL,
	`stopien` varchar(60) NOT NULL,
	`kategoria` varchar(60) NOT NULL,
	`ind_dru` varchar(16) NOT NULL,
	PRIMARY KEY (`id_konkurencji`)
);

CREATE TABLE `konkurencja_obsada` (
	`id` int(16) NOT NULL,
	`imie` varchar(60) NOT NULL,
	`nazwisko` varchar(60) NOT NULL,
	`klub` varchar(60) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `konkurencja_wyniki` (
	`id` bigint NOT NULL,
	`konkurencja` varchar(100) NOT NULL,
	`lokaty` varchar(100) NOT NULL
);

CREATE TABLE `uzytkownik` (
	`id_uzytkownika` int(16) NOT NULL,
	`nazwa_uzytkownika` varchar(255) NOT NULL UNIQUE,
	`haslo_uzytkownika` varchar(255) NOT NULL,
	PRIMARY KEY (`id_uzytkownika`)
);

CREATE TABLE `id_total` (
	`id_uzytkownika` int(16) NOT NULL,
	`id_zawodnika` int(16) NOT NULL,
	PRIMARY KEY (`id_uzytkownika`)
);


