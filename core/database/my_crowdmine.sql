-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dic 02, 2016 alle 23:28
-- Versione del server: 5.6.33-log
-- PHP Version: 5.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_crowdmine`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `Annuncio`
--

CREATE TABLE IF NOT EXISTS `Annuncio` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_utente` bigint(20) NOT NULL,
  `data` datetime NOT NULL,
  `titolo` varchar(255) NOT NULL,
  `luogo` varchar(255) NOT NULL,
  `stato` enum('revisione','attivo','segnalato','disattivato','ricorso','eliminato','amministratore','revisione_modifica') NOT NULL,
  `retribuzione` int(11) DEFAULT NULL,
  `tipo` enum('domanda','offerta') NOT NULL,
  `descrizione` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_utente` (`id_utente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `Bloccato`
--

CREATE TABLE IF NOT EXISTS `Bloccato` (
  `id_utente` bigint(20) NOT NULL,
  `id_utente_bloccato` bigint(20) NOT NULL,
  PRIMARY KEY (`id_utente`,`id_utente_bloccato`),
  UNIQUE KEY `id_utente` (`id_utente`),
  UNIQUE KEY `id_utente_bloccato` (`id_utente_bloccato`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Candidatura`
--

CREATE TABLE IF NOT EXISTS `Candidatura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_utente` bigint(20) NOT NULL,
  `id_annuncio` bigint(20) NOT NULL,
  `corpo` text NOT NULL,
  `data_risposta` datetime DEFAULT NULL,
  `data_inviata` datetime NOT NULL,
  `richiesta_inviata` enum('inviata','non_inviata','non_valutata') NOT NULL,
  `richiesta_accettata` enum('non_valutato','accettato','rifiutato') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_utente` (`id_utente`),
  UNIQUE KEY `id_annuncio` (`id_annuncio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `Commento`
--

CREATE TABLE IF NOT EXISTS `Commento` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_annuncio` bigint(20) NOT NULL,
  `id_utente` bigint(20) NOT NULL,
  `corpo` text NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_annuncio` (`id_annuncio`),
  UNIQUE KEY `id_utente` (`id_utente`),
  FULLTEXT KEY `corpo` (`corpo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `Competente`
--

CREATE TABLE IF NOT EXISTS `Competente` (
  `id_utente` bigint(20) NOT NULL,
  `id_microcategoria` bigint(20) NOT NULL,
  UNIQUE KEY `id_utente` (`id_utente`),
  UNIQUE KEY `id_microcategoria` (`id_microcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Dispatcher_notifica`
--

CREATE TABLE IF NOT EXISTS `Dispatcher_notifica` (
  `id_utente` bigint(11) NOT NULL,
  `id_notifica` bigint(20) NOT NULL,
  PRIMARY KEY (`id_notifica`),
  UNIQUE KEY `id_notifica` (`id_notifica`),
  UNIQUE KEY `id_utente` (`id_utente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Feedback`
--

CREATE TABLE IF NOT EXISTS `Feedback` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_utente` bigint(20) NOT NULL,
  `id_annuncio` bigint(20) NOT NULL,
  `valutazione` decimal(1,1) NOT NULL,
  `corpo` text,
  `data` datetime NOT NULL,
  `stato` enum('attivato','segnalato','eliminato','amministratore') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_utente` (`id_utente`),
  UNIQUE KEY `id_annuncio` (`id_annuncio`),
  FULLTEXT KEY `corpo` (`corpo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `Interesse`
--

CREATE TABLE IF NOT EXISTS `Interesse` (
  `id_utente` bigint(20) NOT NULL,
  `id_microcategoria` bigint(20) NOT NULL,
  UNIQUE KEY `id_utente` (`id_utente`),
  UNIQUE KEY `id_microcategoria` (`id_microcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Macrocategoria`
--

CREATE TABLE IF NOT EXISTS `Macrocategoria` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `Messaggio`
--

CREATE TABLE IF NOT EXISTS `Messaggio` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `corpo` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `letto` tinyint(1) NOT NULL,
  `id_utente_mittente` bigint(20) NOT NULL,
  `id_utente_destinatario` bigint(20) NOT NULL,
  `stato` enum('attivato','segnalato','eliminato','amministratore') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_utente_mittente` (`id_utente_mittente`),
  UNIQUE KEY `id_utente_destinatario` (`id_utente_destinatario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `Microcategoria`
--

CREATE TABLE IF NOT EXISTS `Microcategoria` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `id_macrocategoria` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_macrocategoria` (`id_macrocategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `Notifica`
--

CREATE TABLE IF NOT EXISTS `Notifica` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `tipo` enum('decisione','risoluzione','inserimento') NOT NULL,
  `letto` tinyint(1) NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `Preferito`
--

CREATE TABLE IF NOT EXISTS `Preferito` (
  `id_utente` bigint(20) NOT NULL,
  `id_annuncio` bigint(20) NOT NULL,
  `data_aggiunta` datetime NOT NULL,
  PRIMARY KEY (`id_utente`,`id_annuncio`),
  UNIQUE KEY `id_utente` (`id_utente`),
  UNIQUE KEY `id_annuncio` (`id_annuncio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Riferito`
--

CREATE TABLE IF NOT EXISTS `Riferito` (
  `id_utente` bigint(20) NOT NULL,
  `id_microcategoria` bigint(20) NOT NULL,
  PRIMARY KEY (`id_utente`,`id_microcategoria`),
  UNIQUE KEY `id_utente` (`id_utente`),
  UNIQUE KEY `id_microcategoria` (`id_microcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Utente`
--

CREATE TABLE IF NOT EXISTS `Utente` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cognome` varchar(255) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `dataNascita` date NOT NULL,
  `citta` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ruolo` enum('utente','moderatore','amministratore') NOT NULL,
  `stato` enum('revisione','attivo','segnalato','disattivato','ricorso','bannato','amministratore','revisione_modifica') NOT NULL,
  `immagine_profilo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `Annuncio`
--
ALTER TABLE `Annuncio`
  ADD CONSTRAINT `Annuncio_ibfk_1` FOREIGN KEY (`id_utente`) REFERENCES `Utente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `Bloccato`
--
ALTER TABLE `Bloccato`
  ADD CONSTRAINT `Bloccato_ibfk_1` FOREIGN KEY (`id_utente`) REFERENCES `Utente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Bloccato_ibfk_2` FOREIGN KEY (`id_utente_bloccato`) REFERENCES `Utente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `Candidatura`
--
ALTER TABLE `Candidatura`
  ADD CONSTRAINT `Candidatura_ibfk_1` FOREIGN KEY (`id_utente`) REFERENCES `Utente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Candidatura_ibfk_2` FOREIGN KEY (`id_annuncio`) REFERENCES `Annuncio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `Commento`
--
ALTER TABLE `Commento`
  ADD CONSTRAINT `Commento_ibfk_1` FOREIGN KEY (`id_annuncio`) REFERENCES `Annuncio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Commento_ibfk_2` FOREIGN KEY (`id_utente`) REFERENCES `Utente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `Competente`
--
ALTER TABLE `Competente`
  ADD CONSTRAINT `Competente_ibfk_1` FOREIGN KEY (`id_utente`) REFERENCES `Utente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Competente_ibfk_2` FOREIGN KEY (`id_microcategoria`) REFERENCES `Microcategoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `Dispatcher_notifica`
--
ALTER TABLE `Dispatcher_notifica`
  ADD CONSTRAINT `Dispatcher_notifica_ibfk_1` FOREIGN KEY (`id_utente`) REFERENCES `Utente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Dispatcher_notifica_ibfk_2` FOREIGN KEY (`id_notifica`) REFERENCES `Notifica` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `Feedback`
--
ALTER TABLE `Feedback`
  ADD CONSTRAINT `Feedback_ibfk_1` FOREIGN KEY (`id_utente`) REFERENCES `Utente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Feedback_ibfk_2` FOREIGN KEY (`id_annuncio`) REFERENCES `Annuncio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `Interesse`
--
ALTER TABLE `Interesse`
  ADD CONSTRAINT `Interesse_ibfk_1` FOREIGN KEY (`id_utente`) REFERENCES `Utente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Interesse_ibfk_2` FOREIGN KEY (`id_microcategoria`) REFERENCES `Microcategoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `Messaggio`
--
ALTER TABLE `Messaggio`
  ADD CONSTRAINT `Messaggio_ibfk_1` FOREIGN KEY (`id_utente_mittente`) REFERENCES `Utente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Messaggio_ibfk_2` FOREIGN KEY (`id_utente_destinatario`) REFERENCES `Utente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `Microcategoria`
--
ALTER TABLE `Microcategoria`
  ADD CONSTRAINT `Microcategoria_ibfk_1` FOREIGN KEY (`id_macrocategoria`) REFERENCES `Macrocategoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `Preferito`
--
ALTER TABLE `Preferito`
  ADD CONSTRAINT `Preferito_ibfk_1` FOREIGN KEY (`id_utente`) REFERENCES `Utente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Preferito_ibfk_2` FOREIGN KEY (`id_annuncio`) REFERENCES `Annuncio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `Riferito`
--
ALTER TABLE `Riferito`
  ADD CONSTRAINT `Riferito_ibfk_1` FOREIGN KEY (`id_utente`) REFERENCES `Utente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Riferito_ibfk_2` FOREIGN KEY (`id_microcategoria`) REFERENCES `Microcategoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
