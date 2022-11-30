-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 15, 2021 at 11:10 PM
-- Server version: 5.5.62-0+deb8u1
-- PHP Version: 7.2.25-1+0~20191128.32+debian8~1.gbp108445

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `WebDiP2020x059`
--

-- --------------------------------------------------------

--
-- Table structure for table `dnevnik`
--

CREATE TABLE `dnevnik` (
  `dnevnik_id` int(11) NOT NULL,
  `radnja` text NOT NULL,
  `upit` text NOT NULL,
  `datum_vrijeme` text NOT NULL,
  `korisnik_korisnik_id` int(11) NOT NULL,
  `tip_tip_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dnevnik`
--

INSERT INTO `dnevnik` (`dnevnik_id`, `radnja`, `upit`, `datum_vrijeme`, `korisnik_korisnik_id`, `tip_tip_id`) VALUES
(1, 'Prijava korisnika unosom svojih korisničkih podataka na prijava.html.', 'SELECT korisnicko_ime, lozinka FROM korisnik;', '2021-04-03 09:00:00', 1, 1),
(2, 'Dohvaćanje podataka iz baze podataka te ispisivanje u tablicu na početnoj stranici (index.html).', 'SELECT * FROM rodendan;', '2021-04-02 18:00:00', 2, 2),
(3, 'Upisivanje nove rezervacije (obrazac.html).', 'INSERT INTO rezervacija (broj_djece, datum, grupa_grupa_id) VALUES (10, 05.05.2021., 2);', '2021-04-07 17:00:00', 4, 2),
(4, 'Pregledavanje vlastitih rezervacija. (index.html)', 'SELECT * FROM rezervacija WHERE korisnik_id = 5;', '2021-04-13 15:00:00', 5, 2),
(5, 'Kreiranje novog rođendana. (obrazac.html)', 'INSERT INTO rodendan (naziv_rodendana, opis_rodendana, zamjenski termin) VALUES (\'Princeza party\', \'Na rođendanu će se pojaviti glumica odjevena u Elsu, torta će biti u obliku dvorca, a djeca će dobiti kostime prinčeva i princeza\', null);', '2021-04-12 16:00:00', 3, 2),
(6, 'Pregledavanje kriranih grupa. (index.html)', 'SELECT * FROM grupa;', '2021-04-02 10:00:00', 1, 2),
(7, 'Prijava u sustav', 'SELECT *FROM korisnik WHERE korisnicko_ime=jura1412 AND lozinka=jura1412...', '07.06.2021_15.24.48', 3, 1),
(8, 'Prijava u sustav', 'SELECT *FROM korisnik WHERE korisnicko_ime = jura1412 AND lozinka = jura1412...', '07.06.2021_15.24.48', 3, 1),
(9, 'Prijava u sustav', 'SELECT *FROM korisnik WHERE korisnicko_ime = kmedenjak AND lozinka = kmedenjak007', '07.06.2021_15.24.48', 1, 1),
(10, 'Prijava u sustav', 'SELECT *FROM korisnik WHERE korisnicko_ime = kmedenjak AND lozinka = kmedenjak007', '07.06.2021_15.24.48', 1, 1),
(11, 'Prijava u sustav', 'SELECT *FROM korisnik WHERE korisnicko_ime = kmedenjak AND lozinka = kmedenjak007', '07.06.2021_15.24.48', 1, 1),
(12, 'Prijava u sustav', 'SELECT *FROM korisnik WHERE korisnicko_ime = anica123 AND lozinka = lozinka12Ana', '07.06.2021_15.24.48', 2, 1),
(13, 'Prijava u sustav', 'SELECT *FROM korisnik WHERE korisnicko_ime = anica123 AND lozinka = lozinka12Ana', '07.06.2021_15.24.48', 2, 1),
(14, 'Prijava u sustav', 'SELECT *FROM korisnik WHERE korisnicko_ime = anica123 AND lozinka = lozinka12Ana', '07.06.2021_15.24.48', 2, 1),
(15, 'Prijava u sustav', 'SELECT *FROM korisnik WHERE korisnicko_ime = kmedenjak AND lozinka = kmedenjak007', '07.06.2021_15.24.48', 1, 1),
(16, 'Prijava u sustav', 'SELECT *FROM korisnik WHERE korisnicko_ime = anica123 AND lozinka = lozinka12Ana', '07.06.2021_15.46.56', 2, 1),
(17, 'Prijava u sustav', 'SELECT *FROM korisnik WHERE korisnicko_ime = kmedenjak AND lozinka = kmedenjak007', '07.06.2021_15.46.56', 1, 1),
(18, 'Prijava u sustav', 'SELECT *FROM korisnik WHERE korisnicko_ime = jura1412 AND lozinka = jura1412...', '07.06.2021_16.59.13', 3, 1),
(19, 'Prijava u sustav', 'SELECT *FROM korisnik WHERE korisnicko_ime = kmedenjak AND lozinka = kmedenjak007', '07.06.2021_16.59.13', 1, 1),
(20, 'Sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '07.06.2021_16.59.13', 1, 2),
(21, 'Sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe DESC', '07.06.2021_16.59.13', 1, 2),
(22, 'Pretraživanje tablice grupa', 'SELECT * FROM grupa WHERE CONCAT(grupa_id, naziv_grupe, opis_grupe) LIKE % . Grupa 5 . %', '07.06.2021_16.59.13', 1, 2),
(23, 'Pretraživanje tablice grupa', 'SELECT * FROM grupa WHERE CONCAT(grupa_id, naziv_grupe, opis_grupe) LIKE % .  . %', '07.06.2021_16.59.13', 1, 2),
(24, 'Pretraživanje tablice grupa', 'SELECT * FROM grupa WHERE CONCAT(grupa_id, naziv_grupe, opis_grupe) LIKE % . Grupa 50 . %', '07.06.2021_16.59.13', 1, 2),
(25, 'Odjava sa sustava', '-', '07.06.2021_16.59.13', 1, 1),
(26, 'Prijava u sustav', 'SELECT *FROM korisnik WHERE korisnicko_ime = jura1412 AND lozinka = jura1412...', '07.06.2021_16.59.13', 3, 1),
(27, 'Prikaz i sortiranje tablice rođendan', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '07.06.2021_16.59.13', 3, 2),
(28, 'Pretraživanje tablice rođendan', 'SELECT * FROM rodendan WHERE CONCAT(grupa_id, naziv_grupe, opis_grupe) LIKE  Grupa 5  ', '07.06.2021_16.59.13', 3, 2),
(29, 'Odjava sa sustava', '-', '07.06.2021_16.59.13', 3, 1),
(30, 'Prijava u sustav', 'SELECT *FROM korisnik WHERE korisnicko_ime = anica123 AND lozinka = lozinka12Ana', '07.06.2021_16.59.13', 2, 1),
(31, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id =  ORDER BY status ASC', '07.06.2021_16.59.13', 2, 2),
(32, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id =  ORDER BY status ASC', '07.06.2021_16.59.13', 2, 2),
(33, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 2 ORDER BY status ASC', '07.06.2021_16.59.13', 2, 2),
(34, 'Prikaz i sortiranje tablice rođendan', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id = 4 ORDER BY status ASC', '07.06.2021_16.59.13', 2, 2),
(35, 'Prikaz i sortiranje tablice rođendan', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id = 4 ORDER BY broj_djece DESC', '07.06.2021_16.59.13', 2, 2),
(36, 'Prikaz i sortiranje tablice rođendan', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id = 4 ORDER BY datum ASC', '07.06.2021_16.59.13', 2, 2),
(37, 'Prikaz i sortiranje tablice rođendan', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id = 4 ORDER BY datum DESC', '07.06.2021_16.59.13', 2, 2),
(38, 'Prikaz i sortiranje tablice rođendan', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id = 4 ORDER BY status ASC', '07.06.2021_16.59.13', 2, 2),
(39, 'Prikaz i sortiranje tablice rođendan', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id = 4 ORDER BY status ASC', '07.06.2021_16.59.13', 2, 2),
(40, 'Odjava sa sustava', '-', '07.06.2021_16.59.13', 2, 1),
(41, 'Odjava sa sustava', '-', '07.06.2021_16.59.13', 2, 1),
(42, 'Registracija korisnika', 'INSERT INTO korisnik (ime, prezime, korisnicko_ime, godina_rodenja, mjesto, adresa, postanski_broj, spol, telefonski_broj, lozinka, lozinka_sha256, email, uvjeti, status, datum_registracije, uloga_id) VALUES (Marko , Markić, mmarkic, 1996, Varaždin, Maršala Tita 5, 42000, Žensko, +385995426158, Marko1, c909eeddb5584f573a81dfe0ac279e9156326f38b89356718454f18041526ccd, marko@gmail.com, 2021-06-07 02:04:20pm, 1, 10.12.2021., 3)', '07.06.2021_16.59.13', 1, 2),
(43, 'Odjava sa sustava', '-', '07.06.2021_16.59.13', 2, 1),
(44, 'Registracija korisnika', 'INSERT INTO korisnik (ime, prezime, korisnicko_ime, godina_rodenja, mjesto, adresa, postanski_broj, spol, telefonski_broj, lozinka, lozinka_sha256, email, uvjeti, status, datum_registracije, uloga_id) VALUES (Maja, Majić, mmajic, 1998, Koprivnica, Maršala Tita 5, 48000, Žensko, +385995426158, Maja5, c11c48cc7b2a4000a79c99b818712bae1afb0ad5657a5f60f20d9e2f0d271994, maja@gmail.com, 2021-06-07 02:06:15pm, 1, 10.12.2021., 3)', '07.06.2021_16.59.13', 1, 2),
(45, 'Prijava u sustav', 'SELECT *FROM korisnik WHERE korisnicko_ime = kmedenjak AND lozinka = kmedenjak007', '', 1, 1),
(46, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY radnja ASC', '07.06.2021_19.16.26', 1, 2),
(47, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY radnja ASC', '07.06.2021_19.16.26', 1, 2),
(48, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY radnja ASC', '07.06.2021_19.16.26', 1, 2),
(49, 'Odjava sa sustava', '-', '07.06.2021_19.16.26', 1, 1),
(50, 'Prijava u sustav', 'SELECT *FROM korisnik WHERE korisnicko_ime = kmedenjak AND lozinka = kmedenjak007', '', 1, 1),
(51, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '07.06.2021_18.26.42', 1, 2),
(52, 'Prikaz grupa za ažuriranje', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe, k.prezime FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.uloga_id = 2 AND g.grupa_id = 1', '07.06.2021_18.26.42', 1, 2),
(53, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '07.06.2021_18.26.42', 1, 2),
(54, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '07.06.2021_18.26.42', 1, 2),
(55, 'Odjava sa sustava', '-', '07.06.2021_18.26.42', 1, 1),
(56, 'Prijava u sustav', 'SELECT *FROM korisnik WHERE korisnicko_ime = jura1412 AND lozinka = jura1412...', '07.06.2021_18.26.42', 3, 1),
(57, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '07.06.2021_18.26.42', 3, 2),
(58, 'Prikaz i sortiranje tablice rođendan', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id =  ORDER BY status ASC', '07.06.2021_18.26.42', 3, 2),
(59, 'Prikaz i sortiranje tablice rođendan', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id =  ORDER BY status ASC', '07.06.2021_18.26.42', 3, 2),
(60, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '07.06.2021_18.26.42', 3, 2),
(61, 'Prikaz i sortiranje tablice rođendan', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id =  ORDER BY status ASC', '07.06.2021_18.26.42', 3, 2),
(62, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '07.06.2021_18.26.42', 3, 2),
(63, 'Prikaz i sortiranje tablice rođendan', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id =  ORDER BY status ASC', '07.06.2021_18.26.42', 3, 2),
(64, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '07.06.2021_18.26.42', 3, 2),
(65, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '07.06.2021_18.26.42', 3, 2),
(66, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '07.06.2021_18.26.42', 3, 2),
(67, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '07.06.2021_18.26.42', 3, 2),
(68, 'Prikaz i sortiranje tablice rođendan', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id =  ORDER BY status ASC', '07.06.2021_18.26.42', 3, 2),
(69, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '07.06.2021_18.26.42', 3, 2),
(70, 'Prikaz i sortiranje tablice rođendan', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id =  ORDER BY status ASC', '07.06.2021_18.26.42', 3, 2),
(71, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '07.06.2021_18.26.42', 3, 2),
(72, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '07.06.2021_18.26.42', 3, 2),
(73, 'Prikaz i sortiranje tablice rođendan', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id = 4 ORDER BY status ASC', '07.06.2021_18.26.42', 3, 2),
(74, 'Prijava u sustav', 'SELECT *FROM korisnik WHERE korisnicko_ime = kmedenjak AND lozinka = kmedenjak007', '', 1, 1),
(75, 'Odjava sa sustava', '-', '08.06.2021_17.34.14', 1, 1),
(76, 'Prijava u sustav', 'SELECT *FROM korisnik WHERE korisnicko_ime = kmedenjak AND lozinka = kmedenjak007', '08.06.2021_17.34.14', 1, 1),
(77, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '08.06.2021_17.34.14', 1, 2),
(78, 'Prikaz grupa za ažuriranje', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe, k.prezime FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.uloga_id = 2 AND g.grupa_id = 1', '08.06.2021_17.34.14', 1, 2),
(79, 'Ažuriranje grupe', 'UPDATE grupa SET naziv_grupe = Grupa 10, opis_grupe = Grupa se odnosi na djecu u dobi od 3 do 4 godine. WHERE grupa_id = 1', '08.06.2021_17.34.14', 1, 2),
(80, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '08.06.2021_17.34.14', 1, 2),
(81, 'Prikaz grupa za ažuriranje', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe, k.prezime FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.uloga_id = 2 AND g.grupa_id = 2', '08.06.2021_17.34.14', 1, 2),
(82, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '08.06.2021_17.34.14', 1, 2),
(83, 'Prikaz grupa za ažuriranje', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe, k.prezime FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.uloga_id = 2 AND g.grupa_id = 1', '08.06.2021_17.34.14', 1, 2),
(84, 'Ažuriranje grupe', 'UPDATE grupa SET naziv_grupe = Grupa 1, opis_grupe = Grupa se odnosi na djecu u dobi od 3 do 4 godine. WHERE grupa_id = 1', '08.06.2021_17.34.14', 1, 2),
(85, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '08.06.2021_17.34.14', 1, 2),
(86, 'Kreiranje nove grupe', 'INSERT INTO grupa (naziv_grupe, opis_grupe, korisnik_korisnik_id) VALUES (Grupa 10, Grupa za djcu od  15 do 20 godina, 1)', '08.06.2021_17.34.14', 1, 2),
(87, 'Odjava sa sustava', '-', '08.06.2021_17.34.14', 1, 1),
(88, 'Prijava u sustav', 'SELECT *FROM korisnik WHERE korisnicko_ime = jura1412 AND lozinka = jura1412...', '08.06.2021_17.34.14', 3, 1),
(89, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '08.06.2021_17.34.14', 3, 2),
(90, 'Prikaz i sortiranje tablice rođendan', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id = 1 ORDER BY status ASC', '08.06.2021_17.34.14', 3, 2),
(91, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '08.06.2021_17.34.14', 3, 2),
(92, 'Prikaz i sortiranje tablice rođendan', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id = 4 ORDER BY status ASC', '08.06.2021_17.34.14', 3, 2),
(93, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '08.06.2021_17.34.14', 3, 2),
(94, 'Prikaz i sortiranje tablice rođendan', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id = 4 ORDER BY status ASC', '08.06.2021_17.34.14', 3, 2),
(95, 'Prikaz i sortiranje tablice rođendanza preijavljenog modeeratora', 'SELECT r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime FROM rodendan r, rezervacija re, korisnik k WHERE re.korisnik_korisnik_id = k.korisnik_id AND r.rezervacija_rezervacija_id = re.rezervacija_id AND r.korisnik_id = 3 ORDER BY rodendan_id ASC', '08.06.2021_17.34.14', 3, 2),
(96, 'Odjava sa sustava', '-', '08.06.2021_17.34.14', 3, 1),
(99, 'Odjava sa sustava', '-', '2021-06-15 21:54:46', 1, 1),
(100, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 2 ORDER BY status ASC', '2021-06-15 21:59:24', 2, 2),
(101, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 2 ORDER BY status ASC', '2021-06-15 22:01:25', 2, 2),
(102, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 2 ORDER BY status ASC', '2021-06-15 22:02:21', 2, 2),
(103, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 2 ORDER BY status ASC', '2021-06-15 22:07:00', 2, 2),
(104, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 2 ORDER BY status ASC', '2021-06-15 22:10:02', 2, 2),
(105, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 2 ORDER BY status ASC', '2021-06-15 22:10:49', 2, 2),
(106, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 2 ORDER BY status ASC', '2021-06-16 01:12:40', 2, 2),
(107, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 2 ORDER BY status ASC', '2021-06-16 01:18:40', 2, 2),
(108, 'Prikaz rezervacije za ažuriranje', 'SELECT g.naziv_grupe, r.datum, r.broj_djece, s.ImePrezime, r.sudionici_id FROM grupa g, rezervacija r, sudionici_rodendana s WHERE s.sudionici_id = r.sudionici_id AND r.grupa_grupa_id = g.grupa_id AND r.rezervacija_id = 7', '2021-06-16 01:18:44', 2, 2),
(109, 'Ažuriranje rezervacije', 'UPDATE rezervacija SET grupa_grupa_id = 4, broj_djece = 2, datum = 14.10.2021. 22:20:00 WHERE rezervacija_id = 7', '2021-06-16 01:19:04', 2, 2),
(110, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 2 ORDER BY status ASC', '2021-06-16 01:19:04', 2, 2),
(111, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 2 ORDER BY status ASC', '2021-06-16 01:22:18', 2, 2),
(112, 'Unos sudionika rođendana', 'SELECT sudionici_id FROM sudionici_rodendana  WHERE korisnik_id = 2 ORDER BY sudionici_id DESC LIMIT 1', '2021-06-16 01:22:57', 2, 2),
(113, 'Dohvaćanje sudionika rođendana', 'SELECT sudionici_id FROM sudionici_rodendana  WHERE korisnik_id = 2 ORDER BY sudionici_id DESC LIMIT 1', '2021-06-16 01:23:12', 2, 2),
(114, 'Kreiranje nove rezervacije', 'INSERT INTO rezervacija (broj_djece, datum, status, potvrdena, sudionici_id, korisnik_korisnik_id, grupa_grupa_id) VALUES (10, 2021-07-18 18:30:00, U tijeku, 0, 28, 2, 5)', '2021-06-16 01:23:12', 2, 2),
(115, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 2 ORDER BY status ASC', '2021-06-16 01:25:29', 2, 2),
(116, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 2 ORDER BY status ASC', '2021-06-16 01:25:34', 2, 2),
(117, 'Prikaz rezervacije za ažuriranje', 'SELECT g.naziv_grupe, r.datum, r.broj_djece, s.ImePrezime, r.sudionici_id FROM grupa g, rezervacija r, sudionici_rodendana s WHERE s.sudionici_id = r.sudionici_id AND r.grupa_grupa_id = g.grupa_id AND r.rezervacija_id = 23', '2021-06-16 01:25:52', 2, 2),
(118, 'Ažuriranje rezervacije', 'UPDATE rezervacija SET grupa_grupa_id = 8, broj_djece = 10, datum = 18.07.2021. 23:30:00 WHERE rezervacija_id = 23', '2021-06-16 01:26:02', 2, 2),
(119, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 2 ORDER BY status ASC', '2021-06-16 01:26:02', 2, 2),
(120, 'Unos sudionika rođendana', 'SELECT sudionici_id FROM sudionici_rodendana  WHERE korisnik_id = 2 ORDER BY sudionici_id DESC LIMIT 1', '2021-06-16 01:26:45', 2, 2),
(121, 'Dohvaćanje sudionika rođendana', 'SELECT sudionici_id FROM sudionici_rodendana  WHERE korisnik_id = 2 ORDER BY sudionici_id DESC LIMIT 1', '2021-06-16 01:26:53', 2, 2),
(122, 'Kreiranje nove rezervacije', 'INSERT INTO rezervacija (broj_djece, datum, status, potvrdena, sudionici_id, korisnik_korisnik_id, grupa_grupa_id) VALUES (10, 2021-07-18 18:30:00, U tijeku, 0, 29, 2, 5)', '2021-06-16 01:26:53', 2, 2),
(123, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 2 ORDER BY status ASC', '2021-06-16 01:26:55', 2, 2),
(124, 'Unos sudionika rođendana', 'SELECT sudionici_id FROM sudionici_rodendana  WHERE korisnik_id = 2 ORDER BY sudionici_id DESC LIMIT 1', '2021-06-16 01:27:24', 2, 2),
(125, 'Dohvaćanje sudionika rođendana', 'SELECT sudionici_id FROM sudionici_rodendana  WHERE korisnik_id = 2 ORDER BY sudionici_id DESC LIMIT 1', '2021-06-16 01:27:41', 2, 2),
(126, 'Kreiranje nove rezervacije', 'INSERT INTO rezervacija (broj_djece, datum, status, potvrdena, sudionici_id, korisnik_korisnik_id, grupa_grupa_id) VALUES (10, 2021-07-18 23:30:00, U tijeku, 0, 30, 2, 7)', '2021-06-16 01:27:41', 2, 2),
(127, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 2 ORDER BY status ASC', '2021-06-16 01:27:42', 2, 2),
(128, 'Unos sudionika rođendana', 'SELECT sudionici_id FROM sudionici_rodendana  WHERE korisnik_id = 2 ORDER BY sudionici_id DESC LIMIT 1', '2021-06-16 01:28:17', 2, 2),
(129, 'Dohvaćanje sudionika rođendana', 'SELECT sudionici_id FROM sudionici_rodendana  WHERE korisnik_id = 2 ORDER BY sudionici_id DESC LIMIT 1', '2021-06-16 01:28:27', 2, 2),
(130, 'Kreiranje nove rezervacije', 'INSERT INTO rezervacija (broj_djece, datum, status, potvrdena, sudionici_id, korisnik_korisnik_id, grupa_grupa_id) VALUES (12, 2021-07-18 23:30:00, U tijeku, 0, 31, 2, 6)', '2021-06-16 01:28:28', 2, 2),
(131, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 2 ORDER BY status ASC', '2021-06-16 01:28:30', 2, 2),
(132, 'Odjava sa sustava', '-', '2021-06-16 01:29:23', 2, 1),
(133, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '2021-06-16 01:30:09', 3, 2),
(134, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 3 ORDER BY status ASC', '2021-06-16 01:30:11', 3, 2),
(135, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '2021-06-16 01:30:40', 3, 2),
(136, 'Prikaz i sortiranje tablice rođendan', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id = 4 ORDER BY status ASC', '2021-06-16 01:30:43', 3, 2),
(137, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '2021-06-16 01:30:52', 3, 2),
(138, 'Prikaz i sortiranje tablice rođendan', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id = 4 ORDER BY status ASC', '2021-06-16 01:30:54', 3, 2),
(139, 'Kreiranje novog rođendana', 'INSERT INTO rodendan (naziv_rodendana, opis_rodendana, zamjenski_termin, korisnik_id, rezervacija_rezervacija_id)VALUES (Rođendan 15, Kreiran je rođendan broj 15., -, 3, 6)', '2021-06-16 01:31:13', 3, 2),
(140, 'Kreiranje novog rođendana', 'INSERT INTO rodendan (naziv_rodendana, opis_rodendana, zamjenski_termin, korisnik_id, rezervacija_rezervacija_id)VALUES (Rođendan 15, Kreiran je rođendan broj 15., -, 3, 6)', '2021-06-16 01:31:56', 3, 2),
(141, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '2021-06-16 01:32:13', 3, 2),
(142, 'Prikaz i sortiranje tablice rođendan', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id = 4 ORDER BY status ASC', '2021-06-16 01:32:14', 3, 2),
(143, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '2021-06-16 01:32:19', 3, 2),
(144, 'Prikaz i sortiranje tablice rođendan', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id = 6 ORDER BY status ASC', '2021-06-16 01:32:20', 3, 2),
(145, 'Kreiranje novog rođendana', 'INSERT INTO rodendan (naziv_rodendana, opis_rodendana, zamjenski_termin, korisnik_id, rezervacija_rezervacija_id)VALUES (Rođendan 16, Kreiran novi rođendan., -, 3, 26)', '2021-06-16 01:32:40', 3, 2),
(146, 'Prikaz i sortiranje tablice rođendanza preijavljenog modeeratora', 'SELECT r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime FROM rodendan r, rezervacija re, korisnik k WHERE re.korisnik_korisnik_id = k.korisnik_id AND r.rezervacija_rezervacija_id = re.rezervacija_id AND r.korisnik_id = 3 ORDER BY rodendan_id ASC', '2021-06-16 01:33:01', 3, 2),
(147, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '2021-06-16 01:33:07', 3, 2),
(148, 'Prikaz i sortiranje tablice rođendanza preijavljenog modeeratora', 'SELECT r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime FROM rodendan r, rezervacija re, korisnik k WHERE re.korisnik_korisnik_id = k.korisnik_id AND r.rezervacija_rezervacija_id = re.rezervacija_id AND r.korisnik_id = 3 ORDER BY rodendan_id ASC', '2021-06-16 01:33:10', 3, 2),
(149, 'Prikaz datuma za dodavanje zamjenskog termina', 'SELECT datum FROM rezervacija WHERE rezervacija_id = 6', '2021-06-16 01:33:18', 3, 2),
(150, 'Dodavanje zamjenskog termina', 'UPDATE rodendan SET zamjenski_termin = 15.10.2021. 21:30:00 WHERE rezervacija_rezervacija_id = 6', '2021-06-16 01:33:27', 3, 2),
(151, 'Prikaz i sortiranje tablice rođendanza preijavljenog modeeratora', 'SELECT r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime FROM rodendan r, rezervacija re, korisnik k WHERE re.korisnik_korisnik_id = k.korisnik_id AND r.rezervacija_rezervacija_id = re.rezervacija_id AND r.korisnik_id = 3 ORDER BY rodendan_id ASC', '2021-06-16 01:33:27', 3, 2),
(152, 'Prikaz rodendana za ažuriranje', 'SELECT naziv_rodendana, opis_rodendana FROM rodendan WHERE rodendan_id = 11', '2021-06-16 01:33:44', 3, 2),
(153, 'Ažuriranje rođendana', 'UPDATE rodendan SET naziv_rodendana = Rođendan 20, opis_rodendana = Novi rođendan WHERE rodendan_id = 11', '2021-06-16 01:33:49', 3, 2),
(154, 'Prikaz i sortiranje tablice rođendanza preijavljenog modeeratora', 'SELECT r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime FROM rodendan r, rezervacija re, korisnik k WHERE re.korisnik_korisnik_id = k.korisnik_id AND r.rezervacija_rezervacija_id = re.rezervacija_id AND r.korisnik_id = 3 ORDER BY rodendan_id ASC', '2021-06-16 01:33:49', 3, 2),
(155, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 3 ORDER BY status ASC', '2021-06-16 01:34:07', 3, 2),
(156, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '2021-06-16 01:34:41', 3, 2),
(157, 'Prikaz i sortiranje tablice rođendan', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND g.grupa_id = 4 ORDER BY status ASC', '2021-06-16 01:34:44', 3, 2),
(158, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 3 ORDER BY status ASC', '2021-06-16 01:34:59', 3, 2),
(159, 'Prikaz i sortiranje tablice rođendanza preijavljenog modeeratora', 'SELECT r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime FROM rodendan r, rezervacija re, korisnik k WHERE re.korisnik_korisnik_id = k.korisnik_id AND r.rezervacija_rezervacija_id = re.rezervacija_id AND r.korisnik_id = 3 ORDER BY rodendan_id ASC', '2021-06-16 01:36:17', 3, 2),
(160, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 3 ORDER BY status ASC', '2021-06-16 01:36:17', 3, 2),
(161, 'Unos sudionika rođendana', 'SELECT sudionici_id FROM sudionici_rodendana  WHERE korisnik_id = 3 ORDER BY sudionici_id DESC LIMIT 1', '2021-06-16 01:36:56', 3, 2),
(162, 'Dohvaćanje sudionika rođendana', 'SELECT sudionici_id FROM sudionici_rodendana  WHERE korisnik_id = 3 ORDER BY sudionici_id DESC LIMIT 1', '2021-06-16 01:37:09', 3, 2),
(163, 'Kreiranje nove rezervacije', 'INSERT INTO rezervacija (broj_djece, datum, status, potvrdena, sudionici_id, korisnik_korisnik_id, grupa_grupa_id) VALUES (12, 2021-07-18 18:30:00, U tijeku, 0, 32, 3, 4)', '2021-06-16 01:37:09', 3, 2),
(164, 'Prikaz i sortiranje tablice rođendanza preijavljenog modeeratora', 'SELECT r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime FROM rodendan r, rezervacija re, korisnik k WHERE re.korisnik_korisnik_id = k.korisnik_id AND r.rezervacija_rezervacija_id = re.rezervacija_id AND r.korisnik_id = 3 ORDER BY rodendan_id ASC', '2021-06-16 01:37:22', 3, 2),
(165, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 3 ORDER BY status ASC', '2021-06-16 01:37:23', 3, 2),
(166, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '2021-06-16 01:37:26', 3, 2),
(167, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 3 ORDER BY status ASC', '2021-06-16 01:37:27', 3, 2),
(168, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '2021-06-16 01:37:53', 3, 2),
(169, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 3 ORDER BY status ASC', '2021-06-16 01:37:55', 3, 2),
(170, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '2021-06-16 01:38:00', 3, 2),
(171, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 3 ORDER BY naziv_grupe ASC', '2021-06-16 01:38:09', 3, 2),
(172, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 3 ORDER BY status ASC', '2021-06-16 01:38:12', 3, 2),
(173, 'Prikaz rezervacije za ažuriranje', 'SELECT g.naziv_grupe, r.datum, r.broj_djece, s.ImePrezime, r.sudionici_id FROM grupa g, rezervacija r, sudionici_rodendana s WHERE s.sudionici_id = r.sudionici_id AND r.grupa_grupa_id = g.grupa_id AND r.rezervacija_id = 27', '2021-06-16 01:38:13', 3, 2),
(174, 'Prikaz rezervacije za ažuriranje', 'SELECT g.naziv_grupe, r.datum, r.broj_djece, s.ImePrezime, r.sudionici_id FROM grupa g, rezervacija r, sudionici_rodendana s WHERE s.sudionici_id = r.sudionici_id AND r.grupa_grupa_id = g.grupa_id AND r.rezervacija_id = 27', '2021-06-16 01:39:25', 3, 2),
(175, 'Ažuriranje rezervacije', 'UPDATE rezervacija SET grupa_grupa_id = 1, broj_djece = 15, datum = 18.07.2021. 21:30:00 WHERE rezervacija_id = 27', '2021-06-16 01:39:32', 3, 2),
(176, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 3 ORDER BY status ASC', '2021-06-16 01:39:32', 3, 2),
(177, 'Odjava sa sustava', '-', '2021-06-16 01:39:51', 3, 1),
(178, 'Stranica grupe', '-', '2021-06-16 01:40:17', 1, 3),
(179, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '2021-06-16 01:40:17', 1, 2),
(180, 'Stranica grupe', '-', '2021-06-16 01:40:20', 1, 3),
(181, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe DESC', '2021-06-16 01:40:20', 1, 2),
(182, 'Stranica grupe', '-', '2021-06-16 01:40:23', 1, 3),
(183, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY opis_grupe ASC', '2021-06-16 01:40:25', 1, 2),
(184, 'Stranica grupe', '-', '2021-06-16 01:40:25', 1, 3),
(185, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY opis_grupe ASC', '2021-06-16 01:40:25', 1, 2),
(186, 'Stranica grupe', '-', '2021-06-16 01:40:30', 1, 3),
(188, 'Stranica grupe', '-', '2021-06-16 01:41:09', 1, 3),
(189, 'Pretraživanje tablice grupa', 'SELECT * FROM grupa WHERE CONCAT(grupa_id, naziv_grupe, opis_grupe) LIKE % . Grupa 50 . %', '2021-06-16 01:41:09', 1, 2),
(190, 'Stranica grupe', '-', '2021-06-16 01:41:15', 1, 3),
(191, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '2021-06-16 01:41:15', 1, 2),
(192, 'Stranica grupe', '-', '2021-06-16 01:41:21', 1, 3),
(193, 'Pretraživanje tablice grupa', 'SELECT * FROM grupa WHERE CONCAT(grupa_id, naziv_grupe, opis_grupe) LIKE % . Grupa 1 . %', '2021-06-16 01:41:21', 1, 2),
(194, 'Stranica grupe', '-', '2021-06-16 01:41:46', 1, 3),
(195, 'Pretraživanje tablice grupa', 'SELECT * FROM grupa WHERE CONCAT(grupa_id, naziv_grupe, opis_grupe) LIKE % . Grupa 1 . %', '2021-06-16 01:41:46', 1, 2),
(196, 'Prikaz grupa za ažuriranje', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe, k.prezime FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.uloga_id = 2 AND g.grupa_id = 1', '2021-06-16 01:41:48', 1, 2),
(198, 'Stranica grupe', '-', '2021-06-16 01:42:06', 1, 3),
(199, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '2021-06-16 01:42:06', 1, 2),
(200, 'Kreiranje nove grupe', 'INSERT INTO grupa (naziv_grupe, opis_grupe, korisnik_korisnik_id) VALUES (Grupa 1, Grupa za djecu od 3 do 5 godina., 1)', '2021-06-16 01:42:22', 1, 2),
(201, 'Stranica grupe', '-', '2021-06-16 01:42:22', 1, 3),
(202, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '2021-06-16 01:42:22', 1, 2),
(203, 'Dodjeljivanje moderatora', 'INSERT INTO dodjela_moderatora (naziv_dodjele, korisnik_korisnik_id, grupa_grupa_id) VALUES (Dodjela moderatora Jurenec grupi 1., 3, 12)', '2021-06-16 01:43:46', 1, 2),
(204, 'Stranica grupe', '-', '2021-06-16 01:44:02', 1, 3),
(205, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '2021-06-16 01:44:02', 1, 2),
(206, 'Dodjeljivanje moderatora', 'INSERT INTO dodjela_moderatora (naziv_dodjele, korisnik_korisnik_id, grupa_grupa_id) VALUES (Dodjela grupi 1., 3, 12)', '2021-06-16 01:44:18', 1, 2),
(207, 'Stranica grupe', '-', '2021-06-16 01:45:15', 1, 3),
(208, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '2021-06-16 01:45:15', 1, 2),
(209, 'Dodjeljivanje moderatora', 'INSERT INTO dodjela_moderatora (naziv_dodjele, korisnik_korisnik_id, grupa_grupa_id) VALUES (Dodjela moderatora grupi 1., 3, 12)', '2021-06-16 01:45:28', 1, 2),
(210, 'Stranica grupe', '-', '2021-06-16 01:45:48', 1, 3),
(211, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '2021-06-16 01:45:48', 1, 2),
(212, 'Dodjeljivanje moderatora', 'INSERT INTO dodjela_moderatora (naziv_dodjele, korisnik_korisnik_id, grupa_grupa_id) VALUES (Dodjela moderatora grupi 1., 3, 12)', '2021-06-16 01:45:57', 1, 2),
(213, 'Stranica grupe', '-', '2021-06-16 01:46:11', 1, 3),
(214, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '2021-06-16 01:46:11', 1, 2),
(215, 'Stranica grupe', '-', '2021-06-16 01:46:15', 1, 3),
(216, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '2021-06-16 01:46:15', 1, 2),
(217, 'Dodjeljivanje moderatora', 'INSERT INTO dodjela_moderatora (naziv_dodjele, korisnik_korisnik_id, grupa_grupa_id) VALUES (Dodjela moderatora grupi 10., 7, 10)', '2021-06-16 01:47:14', 1, 2),
(218, 'Dodjeljivanje moderatora', 'INSERT INTO dodjela_moderatora (naziv_dodjele, korisnik_korisnik_id, grupa_grupa_id) VALUES (Dodjela moderatora grupi 10., 7, 10)', '2021-06-16 01:47:44', 1, 2),
(219, 'Stranica grupe', '-', '2021-06-16 01:47:44', 1, 3),
(220, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '2021-06-16 01:47:44', 1, 2),
(221, 'Prikaz grupa za ažuriranje', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe, k.prezime FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.uloga_id = 2 AND g.grupa_id = 10', '2021-06-16 01:47:58', 1, 2),
(223, 'Stranica grupe', '-', '2021-06-16 01:48:38', 1, 3),
(224, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '2021-06-16 01:48:38', 1, 2),
(225, 'Prikaz grupa za ažuriranje', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe, k.prezime FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.uloga_id = 2 AND g.grupa_id = 3', '2021-06-16 01:48:49', 1, 2),
(227, 'Prikaz grupa za ažuriranje', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe, k.prezime FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.uloga_id = 2 AND g.grupa_id = 1', '2021-06-16 01:49:18', 1, 2),
(228, 'Stranica grupe', '-', '2021-06-16 01:50:16', 1, 3),
(229, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '2021-06-16 01:50:16', 1, 2),
(230, 'Prikaz grupa za ažuriranje', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe, k.prezime FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.uloga_id = 2 AND g.grupa_id = 1', '2021-06-16 01:50:18', 1, 2),
(231, 'Stranica grupe', '-', '2021-06-16 01:50:40', 1, 3),
(232, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '2021-06-16 01:50:40', 1, 2),
(233, 'Stranica grupe', '-', '2021-06-16 01:51:46', 1, 3),
(234, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '2021-06-16 01:51:46', 1, 2);
INSERT INTO `dnevnik` (`dnevnik_id`, `radnja`, `upit`, `datum_vrijeme`, `korisnik_korisnik_id`, `tip_tip_id`) VALUES
(235, 'Stranica grupe', '-', '2021-06-16 01:52:50', 1, 3),
(236, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '2021-06-16 01:52:50', 1, 2),
(237, 'Odjava sa sustava', '-', '2021-06-16 01:53:12', 1, 1),
(238, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 1 ORDER BY naziv_grupe ASC', '2021-06-16 01:55:35', 1, 2),
(239, 'Prikaz i sortiranje tablice rođendanza preijavljenog modeeratora', 'SELECT r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime FROM rodendan r, rezervacija re, korisnik k WHERE re.korisnik_korisnik_id = k.korisnik_id AND r.rezervacija_rezervacija_id = re.rezervacija_id AND r.korisnik_id = 1 ORDER BY rodendan_id ASC', '2021-06-16 01:55:36', 1, 2),
(240, 'Prikaz i sortiranje tablice rođendan', 'SELECT g.grupa_id, g.naziv_grupe, g.opis_grupe FROM grupa g, dodjela_moderatora dm, korisnik k WHERE g.grupa_id = dm.grupa_grupa_id AND dm.korisnik_korisnik_id = k.korisnik_id AND k.korisnik_id = 1 ORDER BY naziv_grupe ASC', '2021-06-16 01:56:04', 1, 2),
(241, 'Prikaz i sortiranje tablice rođendanza preijavljenog modeeratora', 'SELECT r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime FROM rodendan r, rezervacija re, korisnik k WHERE re.korisnik_korisnik_id = k.korisnik_id AND r.rezervacija_rezervacija_id = re.rezervacija_id AND r.korisnik_id = 1 ORDER BY rodendan_id ASC', '2021-06-16 01:56:07', 1, 2),
(242, 'Prikaz i sortiranje tablice rođendanza preijavljenog modeeratora', 'SELECT r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime FROM rodendan r, rezervacija re, korisnik k WHERE re.korisnik_korisnik_id = k.korisnik_id AND r.rezervacija_rezervacija_id = re.rezervacija_id AND r.korisnik_id = 1 ORDER BY rodendan_id ASC', '2021-06-16 01:57:58', 1, 2),
(243, 'Stranica grupe', '-', '2021-06-16 01:58:01', 1, 3),
(244, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '2021-06-16 01:58:01', 1, 2),
(245, 'Prikaz i sortiranje tablice rođendanza preijavljenog modeeratora', 'SELECT r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime FROM rodendan r, rezervacija re, korisnik k WHERE re.korisnik_korisnik_id = k.korisnik_id AND r.rezervacija_rezervacija_id = re.rezervacija_id AND r.korisnik_id = 1 ORDER BY rodendan_id ASC', '2021-06-16 01:58:01', 1, 2),
(246, 'Stranica grupe', '-', '2021-06-16 02:00:48', 1, 3),
(247, 'Pregled i sortiranje kolona tablice grupa', 'SELECT grupa_id, naziv_grupe, opis_grupe FROM grupa ORDER BY naziv_grupe ASC', '2021-06-16 02:00:48', 1, 2),
(248, 'Prikaz i sortiranje tablice rođendanza preijavljenog modeeratora', 'SELECT r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime FROM rodendan r, rezervacija re, korisnik k WHERE re.korisnik_korisnik_id = k.korisnik_id AND r.rezervacija_rezervacija_id = re.rezervacija_id AND r.korisnik_id = 1 ORDER BY rodendan_id ASC', '2021-06-16 02:00:49', 1, 2),
(249, 'Prikaz i sortiranje tablice rođendanza preijavljenog modeeratora', 'SELECT r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime FROM rodendan r, rezervacija re, korisnik k WHERE re.korisnik_korisnik_id = k.korisnik_id AND r.rezervacija_rezervacija_id = re.rezervacija_id AND r.korisnik_id = 1 ORDER BY naziv_rodendana DESC', '2021-06-16 02:00:53', 1, 2),
(250, 'Pretraživanje tablice rođendan za prijavljenog moderatora', 'SELECT r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime FROM rodendan r, rezervacija re, korisnik k WHERE re.korisnik_korisnik_id = k.korisnik_id AND r.rezervacija_rezervacija_id = re.rezervacija_id AND r.korisnik_id = 1 AND CONCAT(r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime) LIKE Grupa 5 ', '2021-06-16 02:00:56', 1, 2),
(251, 'Pretraživanje tablice rođendan za prijavljenog moderatora', 'SELECT r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime FROM rodendan r, rezervacija re, korisnik k WHERE re.korisnik_korisnik_id = k.korisnik_id AND r.rezervacija_rezervacija_id = re.rezervacija_id AND r.korisnik_id = 1 AND CONCAT(r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime) LIKE 1 ', '2021-06-16 02:00:58', 1, 2),
(252, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 1 ORDER BY status ASC', '2021-06-16 02:01:02', 1, 2),
(253, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 1 ORDER BY status ASC', '2021-06-16 02:03:15', 1, 2),
(254, 'Prikaz i sortiranje tablice rođendanza preijavljenog modeeratora', 'SELECT r.rodendan_id, r.naziv_rodendana, r.opis_rodendana, r.zamjenski_termin, re.rezervacija_id, k.ime, k.prezime FROM rodendan r, rezervacija re, korisnik k WHERE re.korisnik_korisnik_id = k.korisnik_id AND r.rezervacija_rezervacija_id = re.rezervacija_id AND r.korisnik_id = 1 ORDER BY rodendan_id ASC', '2021-06-16 02:03:56', 1, 2),
(255, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 1 ORDER BY status ASC', '2021-06-16 02:03:58', 1, 2),
(256, 'Prikaz i sortiranje tablice rezervacija', 'SELECT r.rezervacija_id, r.broj_djece, r.datum, r.status, s.ImePrezime, g.naziv_grupe, g.opis_grupe FROM rezervacija r, sudionici_rodendana s, grupa g WHERE g.grupa_id = r.grupa_grupa_id AND r.sudionici_id = s.sudionici_id AND s.korisnik_id = 1 ORDER BY status ASC', '2021-06-16 02:05:07', 1, 2),
(257, 'Prikaz rezervacije za ažuriranje', 'SELECT g.naziv_grupe, r.datum, r.broj_djece, s.ImePrezime, r.sudionici_id FROM grupa g, rezervacija r, sudionici_rodendana s WHERE s.sudionici_id = r.sudionici_id AND r.grupa_grupa_id = g.grupa_id AND r.rezervacija_id = 4', '2021-06-16 02:05:09', 1, 2),
(258, 'Odjava sa sustava', '-', '2021-06-16 02:05:19', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dodavanje_materijala`
--

CREATE TABLE `dodavanje_materijala` (
  `dodavanje_id` int(11) NOT NULL,
  `prikazi` tinyint(1) NOT NULL,
  `rezervacija_id` int(11) NOT NULL,
  `materijali_materijali_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dodjela_moderatora`
--

CREATE TABLE `dodjela_moderatora` (
  `dodjela_id` int(11) NOT NULL,
  `naziv_dodjele` varchar(45) NOT NULL,
  `korisnik_korisnik_id` int(11) NOT NULL,
  `grupa_grupa_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dodjela_moderatora`
--

INSERT INTO `dodjela_moderatora` (`dodjela_id`, `naziv_dodjele`, `korisnik_korisnik_id`, `grupa_grupa_id`) VALUES
(1, 'Dodjela grupe 3-4 godina moderatoru', 3, 1),
(2, 'Dodjela grupe 5-6 godina moderatoru', 7, 2),
(3, 'Dodjela grupe 7-8 godina moderatoru', 9, 3),
(4, 'Dodjela grupe 9-10 godina moderatoru', 3, 4),
(5, 'Dodjela grupe 11-12 godina moderatoru', 9, 5),
(6, 'Dodjela grupe 13-14 godina moderatoru', 3, 6),
(7, 'Dodjela grupe 15-16 godina moderatoru', 7, 7),
(8, 'Dodjela grupe 17-20 godina moderatoru', 9, 8),
(13, 'opis', 9, 7),
(14, 'Dodjela grupi 2', 2, 9),
(15, 'Dodjela moderatora grupi 1.', 3, 12),
(16, 'Dodjela moderatora grupi 10.', 7, 10),
(17, 'Dodjela moderatora grupi 10.', 7, 10);

-- --------------------------------------------------------

--
-- Table structure for table `grupa`
--

CREATE TABLE `grupa` (
  `grupa_id` int(11) NOT NULL,
  `naziv_grupe` text NOT NULL,
  `opis_grupe` text,
  `korisnik_korisnik_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grupa`
--

INSERT INTO `grupa` (`grupa_id`, `naziv_grupe`, `opis_grupe`, `korisnik_korisnik_id`) VALUES
(1, 'Grupa 15', 'Grupa se odnosi na djecu u dobi od 3 do 4 godine.', 1),
(2, 'Grupa 2', 'Grupa se odnosi na djecu u dobi od 5 do 6 godina.', 10),
(3, 'Grupa 3', 'Grupa se odnosi na djecu u dobi od 7 do 9 godina.', 1),
(4, 'Grupa 4', 'Grupa se odnosi na djecu u dobi od 9 do 10 godina.', 1),
(5, 'Grupa 5', 'Grupa se odnosi na djecu u dobi od 11 do 12 godina.', 1),
(6, 'Grupa 6', 'Grupa se odnosi na djecu u dobi od 13 do 14 godina.', 10),
(7, 'Grupa 7', 'Grupa se odnosi na djecu u dobi od 15 do 16 godina.', 10),
(8, 'Grupa 8', 'Grupa se odnosi na djecu u dobi od 17 do 20 godina.', 10),
(9, 'Grupa 9', 'Grupa se odnosi na djecu u dobi od 15 do 20 godine.', 1),
(10, 'Grupa 10', 'Grupa za djecu od  15 do 20 godina', 1),
(11, 'Grupa 12', 'Nova grupa', 1),
(12, 'Grupa 1', 'Grupa za djecu od 3 do 5 godina.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `korisnik_id` int(11) NOT NULL,
  `ime` varchar(45) NOT NULL,
  `prezime` varchar(45) NOT NULL,
  `korisnicko_ime` varchar(25) NOT NULL,
  `godina_rodenja` text,
  `mjesto` text,
  `adresa` text,
  `postanski_broj` text,
  `spol` text CHARACTER SET utf32,
  `telefonski_broj` text,
  `lozinka` varchar(25) NOT NULL,
  `lozinka_sha256` char(65) NOT NULL,
  `email` varchar(45) NOT NULL,
  `uvjeti` char(25) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `broj_neuspjesnih_prijava` int(11) DEFAULT NULL,
  `datum_registracije` text,
  `uloga_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`korisnik_id`, `ime`, `prezime`, `korisnicko_ime`, `godina_rodenja`, `mjesto`, `adresa`, `postanski_broj`, `spol`, `telefonski_broj`, `lozinka`, `lozinka_sha256`, `email`, `uvjeti`, `status`, `broj_neuspjesnih_prijava`, `datum_registracije`, `uloga_id`) VALUES
(1, 'Karla', 'Medenjak', 'kmedenjak', NULL, NULL, NULL, NULL, NULL, NULL, 'kmedenjak007', 'B389092EA112787553A9959304CC414DBF7BA00436483C34914AE34139678F0F', 'kmedenjak@foi.hr', '2021-02-11 14:00:00', 1, 0, NULL, 1),
(2, 'Ana', 'Klarić', 'anica123', NULL, NULL, NULL, NULL, NULL, NULL, 'lozinka12Ana', '4A30DDD6C8AAA49B00A59591BC9955CC2DCCAFFE1614DE3F6BD33B0F96752497', 'anica2@gmail.com', '2021-04-14 12:00:00', 1, 0, NULL, 3),
(3, 'Edita', 'Jurenec', 'jura1412', NULL, NULL, NULL, NULL, NULL, NULL, 'jura1412...', 'FFEAD1B45AD01251CDA8A7CF31BB910149D5E0056325BD8274AEA4E8589F96AB', 'edita.jurenec14@gmail.com', '2021-04-07 10:00:00', 1, 0, NULL, 2),
(4, 'Petar', 'Horvat', 'petarH', NULL, NULL, NULL, NULL, NULL, NULL, 'petar45.', 'EB082AFC7EAAB188F10A008AE1086A217591A6A80272F3AFBAE7765D8202D169', 'phorvat@gmail.com', '2021-04-01 19:00:00', 0, NULL, NULL, 3),
(5, 'Ivan', 'Filipović', 'fićo03', NULL, NULL, NULL, NULL, NULL, NULL, 'filip123!.', 'AA25374D549B9198911C3363E8B98D30778994E3717071DE2B99070E380E838C', 'fico03@gmail.com', '2021-04-08 15:00:00', 1, NULL, NULL, 3),
(6, 'Stela', 'Marjančić', 'stels0207', NULL, NULL, NULL, NULL, NULL, NULL, 'neznamlozinku0207', '96193398D383E625B62C6325E9DC13D4D66F6EAEF931A843AAE185E3D517ED14', 'stela.marjancic@gmail.com', '2021-04-13 08:00:00', 0, NULL, NULL, 3),
(7, 'Mirko', 'Vajnaht', 'mvajnaht', NULL, NULL, NULL, NULL, NULL, NULL, 'mirkoV55', '2136FE1CA5C310FF8FAD63A79CB43B3D1D86460455A8078AFE2A04A6BF347F3C', 'mvajnaht@gmail.com', '2021-04-05 10:00:00', 1, NULL, NULL, 2),
(8, 'Viktoria', 'Puhać', 'vikica9', NULL, NULL, NULL, NULL, NULL, NULL, 'vikica..9', 'ED54934F6137E8761A8B962AE438A01ED670216572702882B2D118409C2037C4', 'viktoria.puhac9@gmail.com', '2021-04-02 20:00:00', 1, NULL, NULL, 3),
(9, 'Sara', 'Mijatović', 'SaraMijatovic', NULL, NULL, NULL, NULL, NULL, NULL, 'mijatovicS022', 'AF9BCEBA0674A8A8B42638A46E345860355C1EDD72D8ED51F5CE13EEF14F53C5', 'mijatovic.sara@gmail.com', '2021-04-06 08:00:00', 1, NULL, NULL, 2),
(10, 'Boris', 'Horvat', 'bhorvat', NULL, NULL, NULL, NULL, NULL, NULL, 'boro1.2.3.', 'ECE497F3C32ACB5153FBA0ECEF8221323F440AF2806255A8C2DE6E77D6CC0659', 'bhorvat123@gmail.com', '2021-02-18 16:00:00', 1, NULL, NULL, 1),
(12, 'Karla', 'Medenjak', 'kmedenjak3', '1999', 'Koprivnica', 'Pavla Kvakana 12', '48316', 'Žensko', '+385995426158', 'Karla1', 'ada415f1294507f6973335ad87d59fd424eb6358131beeaa92c9d11ddbd0fb32', 'karli@gmail.com', '2021-06-07 01:59:22pm', 1, NULL, '10.12.2021.', 3),
(13, 'Karla', 'Medenjak', 'kmedenjak3', '1999', 'Koprivnica', 'Pavla Kvakana 12', '48316', 'Žensko', '+385995426158', 'Karla1', '43859f2d1a54d54db13752bb60fe79a547c1fd2eabfba2cf64ede3e712b2c06b', 'karli@gmail.com', '2021-06-07 01:59:44pm', 1, NULL, '10.12.2021.', 3),
(14, 'Marko ', 'Markić', 'mmarkic', '1996', 'Varaždin', 'Maršala Tita 5', '42000', 'Žensko', '+385995426158', 'Marko1', 'c909eeddb5584f573a81dfe0ac279e9156326f38b89356718454f18041526ccd', 'marko@gmail.com', '2021-06-07 02:04:20pm', 1, NULL, '10.12.2021.', 3),
(15, 'Maja', 'Majić', 'mmajic', '1998', 'Koprivnica', 'Maršala Tita 5', '48000', 'Žensko', '+385995426158', 'Maja5', 'c11c48cc7b2a4000a79c99b818712bae1afb0ad5657a5f60f20d9e2f0d271994', 'maja@gmail.com', '2021-06-07 02:06:15pm', 1, NULL, '10.12.2021.', 3),
(16, 'iva', 'Druga', 'iduga', '1999', 'Koprivnica', 'Pavla Kvakana 12', '48000', 'Žensko', '+385995426158', 'iduga', 'e7393a2ff55b5ed488effa24af7bd396b9efc7f2cb3f327d87a2a789b8e7f727', 'iduga@gmail.com', '2021-06-15 09:30:19pm', 1, NULL, '10.12.2021. 21:30:00', 3),
(17, 'Iva', 'Druga', 'idruga', '1999', 'Koprivnica', 'Pavla Kvakana 12', '48000', 'Žensko', '+385995426158', 'idruga', 'e21946e097134a3d872af500c890453141d96abf42d0f5c119e47e57b037b903', 'iduga@gmail.com', '2021-06-15 09:53:51pm', 1, NULL, '10.12.2021. 18:22:30', 3);

-- --------------------------------------------------------

--
-- Table structure for table `materijali`
--

CREATE TABLE `materijali` (
  `materijali_id` int(11) NOT NULL,
  `vrsta` varchar(25) NOT NULL,
  `naziv` varchar(45) DEFAULT NULL,
  `putanja` varchar(150) DEFAULT NULL,
  `opis_materijala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materijali`
--

INSERT INTO `materijali` (`materijali_id`, `vrsta`, `naziv`, `putanja`, `opis_materijala`) VALUES
(1, 'Slika', NULL, NULL, 'Mogu se staviti zapisi formata .png, .jpg., gif.'),
(2, 'Video', NULL, NULL, 'Mogu se stavti zapisi formata .mpg, .avi.'),
(3, 'Audio', NULL, NULL, 'Mogu se staviti zapisi formata .wav, .mp3.'),
(4, 'Link', NULL, NULL, 'Stavlja se URL.'),
(5, 'Dokument', NULL, NULL, 'Mogu se staviti zapisi foramta .pdf, .doc.'),
(6, 'Ostalo', NULL, NULL, 'Stavljaju se svi ostali formati.');

-- --------------------------------------------------------

--
-- Table structure for table `rezervacija`
--

CREATE TABLE `rezervacija` (
  `rezervacija_id` int(11) NOT NULL,
  `broj_djece` int(11) NOT NULL,
  `datum` text NOT NULL,
  `status` varchar(25) DEFAULT NULL,
  `potvrdena` tinyint(1) DEFAULT NULL,
  `sudionici_id` int(11) NOT NULL,
  `korisnik_korisnik_id` int(11) NOT NULL,
  `grupa_grupa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rezervacija`
--

INSERT INTO `rezervacija` (`rezervacija_id`, `broj_djece`, `datum`, `status`, `potvrdena`, `sudionici_id`, `korisnik_korisnik_id`, `grupa_grupa_id`) VALUES
(4, 2, '11.10.2021.', 'Odbijeno', 1, 4, 8, 4),
(6, 2, '11.10.2021.', 'Potvrđeno', 0, 6, 8, 4),
(23, 10, '18.07.2021. 23:30:00', 'U tijeku', 0, 28, 2, 8),
(24, 10, '2021-07-18 18:30:00', 'U tijeku', 0, 29, 2, 5),
(25, 10, '2021-07-18 23:30:00', 'U tijeku', 0, 30, 2, 7),
(26, 12, '2021-07-18 23:30:00', 'Potvrđeno', 0, 31, 2, 6),
(27, 15, '18.07.2021. 21:30:00', 'U tijeku', 0, 32, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rodendan`
--

CREATE TABLE `rodendan` (
  `rodendan_id` int(11) NOT NULL,
  `naziv_rodendana` varchar(45) NOT NULL,
  `opis_rodendana` text NOT NULL,
  `zamjenski_termin` text,
  `korisnik_id` int(11) NOT NULL,
  `rezervacija_rezervacija_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rodendan`
--

INSERT INTO `rodendan` (`rodendan_id`, `naziv_rodendana`, `opis_rodendana`, `zamjenski_termin`, `korisnik_id`, `rezervacija_rezervacija_id`) VALUES
(4, 'Rođendan na temu filmova', 'Za rođendan, organizirana je kino predstava s filmom po želji slavljenika. Od hrane i pića pripremljene su kokice i Coca-Cola.', '20.10.2021.', 9, 4),
(6, 'Proslava 17. rođendana', 'Za rođendan je dgovorena čokoladna torta i sokovi. Od dekoracija pripremljene će biti životinje napravljene od balona.\r\nRođendan ima zamjenski termin zato što je bio rezerviran na isti datum kao i još jedan rođendan.', '15.10.2021. 21:30:00', 7, 6),
(11, 'Rođendan 20', 'Novi rođendan', '20.10.2021.', 3, 4),
(12, 'Rođendan 15', 'Kreiran je rođendan broj 15.', '15.10.2021. 21:30:00', 3, 6),
(13, 'Rođendan 15', 'Kreiran je rođendan broj 15.', '15.10.2021. 21:30:00', 3, 6),
(14, 'Rođendan 16', 'Kreiran novi rođendan.', '-', 3, 26);

-- --------------------------------------------------------

--
-- Table structure for table `sudionici_rodendana`
--

CREATE TABLE `sudionici_rodendana` (
  `sudionici_id` int(11) NOT NULL,
  `ImePrezime` text NOT NULL,
  `korisnik_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sudionici_rodendana`
--

INSERT INTO `sudionici_rodendana` (`sudionici_id`, `ImePrezime`, `korisnik_id`) VALUES
(4, 'Mira Mirić, Melani Vajnaht, Stela Marjančić', 6),
(6, 'Eva Gal, Roko Valent, David Petar Fodor, Marko Markić', 8),
(7, 'Mila Valent, Bruno Katić, Azra Marić', 5),
(8, 'Petra Mesić, Klara Sirić, Matej Mirkić', 4),
(10, 'Eugen Razić, Marija Horvat', 6),
(28, 'Karla Medenjak, Pero Perić, Ivo Ivić', 2),
(29, 'Ana Anić, Mia Mijić', 2),
(30, 'Ana Anić', 2),
(31, 'Karla Medenjak', 2),
(32, 'Karla Medenjak, Ana Anić', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tip`
--

CREATE TABLE `tip` (
  `tip_id` int(11) NOT NULL,
  `naziv_tipa` varchar(45) NOT NULL,
  `opis_tipa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tip`
--

INSERT INTO `tip` (`tip_id`, `naziv_tipa`, `opis_tipa`) VALUES
(1, 'Prijava/Odjava', 'Ovaj tip se odnosi na prijave i odjave od strane korisnika te na zapisivanje vremena tih aktivnosti (korisnik, vrijeme).'),
(2, 'Rad s bazom', 'Odnosni se na rad s bazom od strane korisnika, na postavljen upit i na vrijeme postavljanja zadanog upita (korisnik, upit, vrijeme).'),
(3, 'Ostale radnje', 'Odnosni se na sve preostale radnje koje korisnik može izvršavati te na zapisivanje vremena kada je radnja izvršena (korisnik, vrijeme, radnja).');

-- --------------------------------------------------------

--
-- Table structure for table `uloga`
--

CREATE TABLE `uloga` (
  `uloga_id` int(11) NOT NULL,
  `naziv_uloge` varchar(25) NOT NULL,
  `opis_uloge` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uloga`
--

INSERT INTO `uloga` (`uloga_id`, `naziv_uloge`, `opis_uloge`) VALUES
(1, 'Administrator', 'Pregledava, kreira, ažurira grupe i dodjeljuje im moderatore. Može napraviti sigurnosnu kopiju svij rođendana i materijala iz baze u obliku SQL skripte. Može vratiti podatke iz sigurnosne kopije. Administrator vidi statistiku korištenja sustava pristupa stranicama uz mogućnost filtriranja po korisnicima i vremenskom razdoblju. Ima sva prava kao i sve ostale uloge uz to da ima CRUD kontrole nad svim podacima u sustavu. Ima mogućnost uvida u dnevnik sustava kao i pretraživanje tog dnevnika prema datumu, tipu zapisa i korisniku. Može vidjeti popis blokiranih korisnika i odabranog korisnika može odblokirati. Također može resetirati uvjete korištenja te ima mogućnost konfiguriranja aplikacije.'),
(2, 'Moderator', 'Pregledava, kreira i ažurira rođendane za grupe kojima je dodijeljen. Rođendane kreira temeljen potvrđene rezervacije pri čemu dodatno unosi naziv i opis. Ima mogućnost otkazivanja rođendana te ako ga otkaže, navodi zamjenski termin. Vidi popis svih rezervacija te ih potvrđuje ili odbija. Moderator ima sva prava koja ima i registrirani korisnik.'),
(3, 'Registrirani korisnik', 'Registrirani korisnik je onaj korisnik koji ima kreiran i aktiviran korisnički račun. Ima mogućnost prijave koja se odvija tako da unese svoje korisničko ime i lozinku. Može kreirati i ažurirati rezervacije termina za rođendan. Prilikom rezervacije termina bira grupu i unosi datim termina i broj djece. Vidi sve svoje rezervirane termine te u kojem su oni statusu. Status može biti u tijeku, potvrđen ili odbijen. Može postaviti materijale vezane za rođendane te daje suglasnog za prikaz materijala u javnom prikazu. Vidi galeriju materijala za rođendan te može filtrirati po grupi i definirati koliko materijala se prikazuje po stranici. Ima sva prava kao i neregistrirani korisnik.'),
(4, 'Neregistrirani korisnik', 'Neregistrirani korisnik je korisnik koji nema korisnički račun. Članom sustava može postati tako da se registrira. Registracija se izvršava unosnom osobnih podataka o korisniku, unosom lozinke i potvrde lozinke. Korisnik se smatra registriranim tek nakon aktivacije korisničkog računa. Ima mogućnost pregleda statistike broja rođendana po grupi koja se nalazi na početnoj stranici. Može vidjeti popis korisnika na rođendanu te materijale korisnika koji su prikazani jedino ako je data prethodna suglasnost korisnika.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dnevnik`
--
ALTER TABLE `dnevnik`
  ADD PRIMARY KEY (`dnevnik_id`,`korisnik_korisnik_id`,`tip_tip_id`),
  ADD KEY `fk_dnevnik_korisnik1_idx` (`korisnik_korisnik_id`),
  ADD KEY `fk_dnevnik_tip1_idx` (`tip_tip_id`);

--
-- Indexes for table `dodavanje_materijala`
--
ALTER TABLE `dodavanje_materijala`
  ADD PRIMARY KEY (`dodavanje_id`,`materijali_materijali_id`),
  ADD KEY `fk_dodavanje_materijala_rezervacija1_idx` (`rezervacija_id`),
  ADD KEY `fk_dodavanje_materijala_materijali1_idx` (`materijali_materijali_id`);

--
-- Indexes for table `dodjela_moderatora`
--
ALTER TABLE `dodjela_moderatora`
  ADD PRIMARY KEY (`dodjela_id`,`korisnik_korisnik_id`),
  ADD KEY `fk_dodjela_moderatora_korisnik1_idx` (`korisnik_korisnik_id`),
  ADD KEY `grupa_grupa_id` (`grupa_grupa_id`);

--
-- Indexes for table `grupa`
--
ALTER TABLE `grupa`
  ADD PRIMARY KEY (`grupa_id`,`korisnik_korisnik_id`),
  ADD KEY `fk_grupa_korisnik1_idx` (`korisnik_korisnik_id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`korisnik_id`),
  ADD KEY `fk_korisnik_uloga_idx` (`uloga_id`);

--
-- Indexes for table `materijali`
--
ALTER TABLE `materijali`
  ADD PRIMARY KEY (`materijali_id`);

--
-- Indexes for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD PRIMARY KEY (`rezervacija_id`,`korisnik_korisnik_id`,`grupa_grupa_id`),
  ADD KEY `fk_rezervacija_korisnik1_idx` (`korisnik_korisnik_id`),
  ADD KEY `grupa_grupa_id` (`grupa_grupa_id`),
  ADD KEY `sudionici_id` (`sudionici_id`);

--
-- Indexes for table `rodendan`
--
ALTER TABLE `rodendan`
  ADD PRIMARY KEY (`rodendan_id`,`rezervacija_rezervacija_id`),
  ADD KEY `fk_rodendan_korisnik1_idx` (`korisnik_id`),
  ADD KEY `fk_rodendan_rezervacija1_idx` (`rezervacija_rezervacija_id`);

--
-- Indexes for table `sudionici_rodendana`
--
ALTER TABLE `sudionici_rodendana`
  ADD PRIMARY KEY (`sudionici_id`);

--
-- Indexes for table `tip`
--
ALTER TABLE `tip`
  ADD PRIMARY KEY (`tip_id`);

--
-- Indexes for table `uloga`
--
ALTER TABLE `uloga`
  ADD PRIMARY KEY (`uloga_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dnevnik`
--
ALTER TABLE `dnevnik`
  MODIFY `dnevnik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;
--
-- AUTO_INCREMENT for table `dodavanje_materijala`
--
ALTER TABLE `dodavanje_materijala`
  MODIFY `dodavanje_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `dodjela_moderatora`
--
ALTER TABLE `dodjela_moderatora`
  MODIFY `dodjela_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `grupa`
--
ALTER TABLE `grupa`
  MODIFY `grupa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `korisnik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `materijali`
--
ALTER TABLE `materijali`
  MODIFY `materijali_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `rezervacija`
--
ALTER TABLE `rezervacija`
  MODIFY `rezervacija_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `rodendan`
--
ALTER TABLE `rodendan`
  MODIFY `rodendan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `sudionici_rodendana`
--
ALTER TABLE `sudionici_rodendana`
  MODIFY `sudionici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tip`
--
ALTER TABLE `tip`
  MODIFY `tip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `uloga`
--
ALTER TABLE `uloga`
  MODIFY `uloga_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dnevnik`
--
ALTER TABLE `dnevnik`
  ADD CONSTRAINT `fk_dnevnik_korisnik1` FOREIGN KEY (`korisnik_korisnik_id`) REFERENCES `korisnik` (`korisnik_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_dnevnik_tip1` FOREIGN KEY (`tip_tip_id`) REFERENCES `tip` (`tip_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dodavanje_materijala`
--
ALTER TABLE `dodavanje_materijala`
  ADD CONSTRAINT `fk_dodavanje_materijala_materijali1` FOREIGN KEY (`materijali_materijali_id`) REFERENCES `materijali` (`materijali_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_dodavanje_materijala_rezervacija1` FOREIGN KEY (`rezervacija_id`) REFERENCES `rezervacija` (`rezervacija_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dodjela_moderatora`
--
ALTER TABLE `dodjela_moderatora`
  ADD CONSTRAINT `fk_dodjela_moderatora_korisnik1` FOREIGN KEY (`korisnik_korisnik_id`) REFERENCES `korisnik` (`korisnik_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grupa_grupa_id` FOREIGN KEY (`grupa_grupa_id`) REFERENCES `grupa` (`grupa_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `grupa`
--
ALTER TABLE `grupa`
  ADD CONSTRAINT `fk_grupa_korisnik1` FOREIGN KEY (`korisnik_korisnik_id`) REFERENCES `korisnik` (`korisnik_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD CONSTRAINT `fk_korisnik_uloga` FOREIGN KEY (`uloga_id`) REFERENCES `uloga` (`uloga_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD CONSTRAINT `fk_rezervacija_korisnik1` FOREIGN KEY (`korisnik_korisnik_id`) REFERENCES `korisnik` (`korisnik_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sudionici_id` FOREIGN KEY (`sudionici_id`) REFERENCES `sudionici_rodendana` (`sudionici_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rodendan`
--
ALTER TABLE `rodendan`
  ADD CONSTRAINT `fk_rodendan_korisnik1` FOREIGN KEY (`korisnik_id`) REFERENCES `korisnik` (`korisnik_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rodendan_rezervacija1` FOREIGN KEY (`rezervacija_rezervacija_id`) REFERENCES `rezervacija` (`rezervacija_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
