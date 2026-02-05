-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2026 at 07:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.5.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srpss`
--

-- --------------------------------------------------------

--
-- Table structure for table `afghanistan`
--

CREATE TABLE `afghanistan` (
  `id` int(6) NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestmp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `afghanistan`
--

INSERT INTO `afghanistan` (`id`, `insname`, `link`, `timestmp`) VALUES
(1, 'Public Library of the Afghanistan Science Academy', 'https://asa.gov.af/en/public-library-afghanistan-science-academy', '2024-11-26 20:29:08'),
(2, 'Museum of Science and Technology', 'http://www.museum.af/en/home/', '2024-11-26 20:29:08');

-- --------------------------------------------------------

--
-- Table structure for table `albania`
--

CREATE TABLE `albania` (
  `id` int(6) NOT NULL,
  `insname` varchar(512) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestmp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `algeria`
--

CREATE TABLE `algeria` (
  `id` int(6) NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestmp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `andorra`
--

CREATE TABLE `andorra` (
  `id` int(6) NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestmp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `angola`
--

CREATE TABLE `angola` (
  `id` int(6) NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestmp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `antigua_and_barbuda`
--

CREATE TABLE `antigua_and_barbuda` (
  `id` int(6) NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestmp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `argentina`
--

CREATE TABLE `argentina` (
  `id` int(6) NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestmp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `armenia`
--

CREATE TABLE `armenia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestmp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `australia`
--

CREATE TABLE `australia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestmp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `austria`
--

CREATE TABLE `austria` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `azerbaijan`
--

CREATE TABLE `azerbaijan` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bahamas`
--

CREATE TABLE `bahamas` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bahrain`
--

CREATE TABLE `bahrain` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bangladesh`
--

CREATE TABLE `bangladesh` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `barbados`
--

CREATE TABLE `barbados` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `belarus`
--

CREATE TABLE `belarus` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `belgium`
--

CREATE TABLE `belgium` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `belize`
--

CREATE TABLE `belize` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `benin`
--

CREATE TABLE `benin` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bhutan`
--

CREATE TABLE `bhutan` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bolivia`
--

CREATE TABLE `bolivia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bosnia_and_herzegovina`
--

CREATE TABLE `bosnia_and_herzegovina` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `botswana`
--

CREATE TABLE `botswana` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brazil`
--

CREATE TABLE `brazil` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brunei`
--

CREATE TABLE `brunei` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bulgaria`
--

CREATE TABLE `bulgaria` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `burkina_faso`
--

CREATE TABLE `burkina_faso` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `burundi`
--

CREATE TABLE `burundi` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cabo_verde`
--

CREATE TABLE `cabo_verde` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cambodia`
--

CREATE TABLE `cambodia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cameroon`
--

CREATE TABLE `cameroon` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `canada`
--

CREATE TABLE `canada` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `central_african_republic`
--

CREATE TABLE `central_african_republic` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chad`
--

CREATE TABLE `chad` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chile`
--

CREATE TABLE `chile` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `china`
--

CREATE TABLE `china` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `colombia`
--

CREATE TABLE `colombia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comoros`
--

CREATE TABLE `comoros` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `congo_congo_brazzaville`
--

CREATE TABLE `congo_congo_brazzaville` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `congo_democratic_republic_of_the_congo_kinshasa`
--

CREATE TABLE `congo_democratic_republic_of_the_congo_kinshasa` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `costa_rica`
--

CREATE TABLE `costa_rica` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `croatia`
--

CREATE TABLE `croatia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cuba`
--

CREATE TABLE `cuba` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cyprus`
--

CREATE TABLE `cyprus` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `czechia`
--

CREATE TABLE `czechia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `denmark`
--

CREATE TABLE `denmark` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `djibouti`
--

CREATE TABLE `djibouti` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dominica`
--

CREATE TABLE `dominica` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dominican_republic`
--

CREATE TABLE `dominican_republic` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ecuador`
--

CREATE TABLE `ecuador` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `egypt`
--

CREATE TABLE `egypt` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `el_salvador`
--

CREATE TABLE `el_salvador` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `equatorial_guinea`
--

CREATE TABLE `equatorial_guinea` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eritrea`
--

CREATE TABLE `eritrea` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `estonia`
--

CREATE TABLE `estonia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eswatini`
--

CREATE TABLE `eswatini` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ethiopia`
--

CREATE TABLE `ethiopia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fiji`
--

CREATE TABLE `fiji` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `finland`
--

CREATE TABLE `finland` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `france`
--

CREATE TABLE `france` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gabon`
--

CREATE TABLE `gabon` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gambia`
--

CREATE TABLE `gambia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `georgia`
--

CREATE TABLE `georgia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `germany`
--

CREATE TABLE `germany` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ghana`
--

CREATE TABLE `ghana` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `greece`
--

CREATE TABLE `greece` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grenada`
--

CREATE TABLE `grenada` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guatemala`
--

CREATE TABLE `guatemala` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guinea`
--

CREATE TABLE `guinea` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guinea_bissau`
--

CREATE TABLE `guinea_bissau` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guyana`
--

CREATE TABLE `guyana` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `haiti`
--

CREATE TABLE `haiti` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `honduras`
--

CREATE TABLE `honduras` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hungary`
--

CREATE TABLE `hungary` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iceland`
--

CREATE TABLE `iceland` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `india`
--

CREATE TABLE `india` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `indonesia`
--

CREATE TABLE `indonesia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iran`
--

CREATE TABLE `iran` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iraq`
--

CREATE TABLE `iraq` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ireland`
--

CREATE TABLE `ireland` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `israel`
--

CREATE TABLE `israel` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `italy`
--

CREATE TABLE `italy` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jamaica`
--

CREATE TABLE `jamaica` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `japan`
--

CREATE TABLE `japan` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jordan`
--

CREATE TABLE `jordan` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kazakhstan`
--

CREATE TABLE `kazakhstan` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kenya`
--

CREATE TABLE `kenya` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kiribati`
--

CREATE TABLE `kiribati` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kuwait`
--

CREATE TABLE `kuwait` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kyrgyzstan`
--

CREATE TABLE `kyrgyzstan` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laos`
--

CREATE TABLE `laos` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `latvia`
--

CREATE TABLE `latvia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lebanon`
--

CREATE TABLE `lebanon` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lesotho`
--

CREATE TABLE `lesotho` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `liberia`
--

CREATE TABLE `liberia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `libya`
--

CREATE TABLE `libya` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `liechtenstein`
--

CREATE TABLE `liechtenstein` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lithuania`
--

CREATE TABLE `lithuania` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `luxembourg`
--

CREATE TABLE `luxembourg` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `madagascar`
--

CREATE TABLE `madagascar` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `malawi`
--

CREATE TABLE `malawi` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `malaysia`
--

CREATE TABLE `malaysia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maldives`
--

CREATE TABLE `maldives` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mali`
--

CREATE TABLE `mali` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `malta`
--

CREATE TABLE `malta` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marshall_islands`
--

CREATE TABLE `marshall_islands` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mauritania`
--

CREATE TABLE `mauritania` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mauritius`
--

CREATE TABLE `mauritius` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mexico`
--

CREATE TABLE `mexico` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `micronesia`
--

CREATE TABLE `micronesia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `moldova`
--

CREATE TABLE `moldova` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `monaco`
--

CREATE TABLE `monaco` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mongolia`
--

CREATE TABLE `mongolia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `montenegro`
--

CREATE TABLE `montenegro` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `morocco`
--

CREATE TABLE `morocco` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mozambique`
--

CREATE TABLE `mozambique` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `namibia`
--

CREATE TABLE `namibia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nauru`
--

CREATE TABLE `nauru` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nepal`
--

CREATE TABLE `nepal` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `netherlands`
--

CREATE TABLE `netherlands` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_zealand`
--

CREATE TABLE `new_zealand` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nicaragua`
--

CREATE TABLE `nicaragua` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `niger`
--

CREATE TABLE `niger` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nigeria`
--

CREATE TABLE `nigeria` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `north_korea`
--

CREATE TABLE `north_korea` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `north_macedonia`
--

CREATE TABLE `north_macedonia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `norway`
--

CREATE TABLE `norway` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oman`
--

CREATE TABLE `oman` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pakistan`
--

CREATE TABLE `pakistan` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `palau`
--

CREATE TABLE `palau` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `panama`
--

CREATE TABLE `panama` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `papua_new_guinea`
--

CREATE TABLE `papua_new_guinea` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paraguay`
--

CREATE TABLE `paraguay` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peru`
--

CREATE TABLE `peru` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `philippines`
--

CREATE TABLE `philippines` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poland`
--

CREATE TABLE `poland` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portugal`
--

CREATE TABLE `portugal` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qatar`
--

CREATE TABLE `qatar` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `romania`
--

CREATE TABLE `romania` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `russia`
--

CREATE TABLE `russia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rwanda`
--

CREATE TABLE `rwanda` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sao_tome_and_principe`
--

CREATE TABLE `sao_tome_and_principe` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `saudi_arabia`
--

CREATE TABLE `saudi_arabia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `senegal`
--

CREATE TABLE `senegal` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `serbia`
--

CREATE TABLE `serbia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seychelles`
--

CREATE TABLE `seychelles` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sierra_leone`
--

CREATE TABLE `sierra_leone` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `singapore`
--

CREATE TABLE `singapore` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slovakia`
--

CREATE TABLE `slovakia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slovenia`
--

CREATE TABLE `slovenia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `solomon_islands`
--

CREATE TABLE `solomon_islands` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `somalia`
--

CREATE TABLE `somalia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `south_africa`
--

CREATE TABLE `south_africa` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `south_korea`
--

CREATE TABLE `south_korea` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `south_sudan`
--

CREATE TABLE `south_sudan` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spain`
--

CREATE TABLE `spain` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sri_lanka`
--

CREATE TABLE `sri_lanka` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sudan`
--

CREATE TABLE `sudan` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suriname`
--

CREATE TABLE `suriname` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sweden`
--

CREATE TABLE `sweden` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `switzerland`
--

CREATE TABLE `switzerland` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tajikistan`
--

CREATE TABLE `tajikistan` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tanzania`
--

CREATE TABLE `tanzania` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thailand`
--

CREATE TABLE `thailand` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `togo`
--

CREATE TABLE `togo` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tonga`
--

CREATE TABLE `tonga` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trinidad_and_tobago`
--

CREATE TABLE `trinidad_and_tobago` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tunisia`
--

CREATE TABLE `tunisia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `turkey`
--

CREATE TABLE `turkey` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `turkmenistan`
--

CREATE TABLE `turkmenistan` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tuvalu`
--

CREATE TABLE `tuvalu` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uganda`
--

CREATE TABLE `uganda` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ukraine`
--

CREATE TABLE `ukraine` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `united_arab_emirates`
--

CREATE TABLE `united_arab_emirates` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `united_kingdom`
--

CREATE TABLE `united_kingdom` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `united_states`
--

CREATE TABLE `united_states` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uruguay`
--

CREATE TABLE `uruguay` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uzbekistan`
--

CREATE TABLE `uzbekistan` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vanuatu`
--

CREATE TABLE `vanuatu` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vatican_city`
--

CREATE TABLE `vatican_city` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `venezuela`
--

CREATE TABLE `venezuela` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vietnam`
--

CREATE TABLE `vietnam` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wales`
--

CREATE TABLE `wales` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `yemen`
--

CREATE TABLE `yemen` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zambia`
--

CREATE TABLE `zambia` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zimbabwe`
--

CREATE TABLE `zimbabwe` (
  `id` int(6) UNSIGNED NOT NULL,
  `insname` varchar(100) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `afghanistan`
--
ALTER TABLE `afghanistan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `institute` (`insname`),
  ADD UNIQUE KEY `inslink` (`link`);

--
-- Indexes for table `albania`
--
ALTER TABLE `albania`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `insname` (`insname`),
  ADD UNIQUE KEY `albanialink` (`link`);

--
-- Indexes for table `algeria`
--
ALTER TABLE `algeria`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `algeria_insname` (`insname`),
  ADD UNIQUE KEY `algeria_link` (`link`);

--
-- Indexes for table `andorra`
--
ALTER TABLE `andorra`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `andorra_insname` (`insname`),
  ADD UNIQUE KEY `andorra_link` (`link`);

--
-- Indexes for table `angola`
--
ALTER TABLE `angola`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `angola_insname` (`insname`),
  ADD UNIQUE KEY `angola_link` (`link`);

--
-- Indexes for table `antigua_and_barbuda`
--
ALTER TABLE `antigua_and_barbuda`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `antigua_insname` (`insname`),
  ADD UNIQUE KEY `antigua_link` (`link`);

--
-- Indexes for table `argentina`
--
ALTER TABLE `argentina`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `argentina_insname` (`insname`),
  ADD UNIQUE KEY `argentina_link` (`link`);

--
-- Indexes for table `armenia`
--
ALTER TABLE `armenia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `armenia_insname` (`insname`),
  ADD UNIQUE KEY `armenia_link` (`link`);

--
-- Indexes for table `australia`
--
ALTER TABLE `australia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `australia_insname` (`insname`),
  ADD UNIQUE KEY `australia_link` (`link`);

--
-- Indexes for table `austria`
--
ALTER TABLE `austria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `azerbaijan`
--
ALTER TABLE `azerbaijan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bahamas`
--
ALTER TABLE `bahamas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bahrain`
--
ALTER TABLE `bahrain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bangladesh`
--
ALTER TABLE `bangladesh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barbados`
--
ALTER TABLE `barbados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `belarus`
--
ALTER TABLE `belarus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `belgium`
--
ALTER TABLE `belgium`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `belize`
--
ALTER TABLE `belize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `benin`
--
ALTER TABLE `benin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bhutan`
--
ALTER TABLE `bhutan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bolivia`
--
ALTER TABLE `bolivia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bosnia_and_herzegovina`
--
ALTER TABLE `bosnia_and_herzegovina`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `botswana`
--
ALTER TABLE `botswana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brazil`
--
ALTER TABLE `brazil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brunei`
--
ALTER TABLE `brunei`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bulgaria`
--
ALTER TABLE `bulgaria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `burkina_faso`
--
ALTER TABLE `burkina_faso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `burundi`
--
ALTER TABLE `burundi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cabo_verde`
--
ALTER TABLE `cabo_verde`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cambodia`
--
ALTER TABLE `cambodia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cameroon`
--
ALTER TABLE `cameroon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `canada`
--
ALTER TABLE `canada`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `central_african_republic`
--
ALTER TABLE `central_african_republic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chad`
--
ALTER TABLE `chad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chile`
--
ALTER TABLE `chile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `china`
--
ALTER TABLE `china`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colombia`
--
ALTER TABLE `colombia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comoros`
--
ALTER TABLE `comoros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `congo_congo_brazzaville`
--
ALTER TABLE `congo_congo_brazzaville`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `congo_democratic_republic_of_the_congo_kinshasa`
--
ALTER TABLE `congo_democratic_republic_of_the_congo_kinshasa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costa_rica`
--
ALTER TABLE `costa_rica`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `croatia`
--
ALTER TABLE `croatia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cuba`
--
ALTER TABLE `cuba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cyprus`
--
ALTER TABLE `cyprus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `czechia`
--
ALTER TABLE `czechia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `denmark`
--
ALTER TABLE `denmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `djibouti`
--
ALTER TABLE `djibouti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dominica`
--
ALTER TABLE `dominica`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dominican_republic`
--
ALTER TABLE `dominican_republic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecuador`
--
ALTER TABLE `ecuador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `egypt`
--
ALTER TABLE `egypt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `el_salvador`
--
ALTER TABLE `el_salvador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equatorial_guinea`
--
ALTER TABLE `equatorial_guinea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eritrea`
--
ALTER TABLE `eritrea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estonia`
--
ALTER TABLE `estonia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eswatini`
--
ALTER TABLE `eswatini`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ethiopia`
--
ALTER TABLE `ethiopia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fiji`
--
ALTER TABLE `fiji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finland`
--
ALTER TABLE `finland`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `france`
--
ALTER TABLE `france`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gabon`
--
ALTER TABLE `gabon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambia`
--
ALTER TABLE `gambia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `georgia`
--
ALTER TABLE `georgia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `germany`
--
ALTER TABLE `germany`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ghana`
--
ALTER TABLE `ghana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `greece`
--
ALTER TABLE `greece`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grenada`
--
ALTER TABLE `grenada`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guatemala`
--
ALTER TABLE `guatemala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guinea`
--
ALTER TABLE `guinea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guinea_bissau`
--
ALTER TABLE `guinea_bissau`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guyana`
--
ALTER TABLE `guyana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `haiti`
--
ALTER TABLE `haiti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `honduras`
--
ALTER TABLE `honduras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hungary`
--
ALTER TABLE `hungary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iceland`
--
ALTER TABLE `iceland`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `india`
--
ALTER TABLE `india`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indonesia`
--
ALTER TABLE `indonesia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iran`
--
ALTER TABLE `iran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iraq`
--
ALTER TABLE `iraq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ireland`
--
ALTER TABLE `ireland`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `israel`
--
ALTER TABLE `israel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `italy`
--
ALTER TABLE `italy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jamaica`
--
ALTER TABLE `jamaica`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `japan`
--
ALTER TABLE `japan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jordan`
--
ALTER TABLE `jordan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kazakhstan`
--
ALTER TABLE `kazakhstan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kenya`
--
ALTER TABLE `kenya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kiribati`
--
ALTER TABLE `kiribati`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuwait`
--
ALTER TABLE `kuwait`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kyrgyzstan`
--
ALTER TABLE `kyrgyzstan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laos`
--
ALTER TABLE `laos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latvia`
--
ALTER TABLE `latvia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lebanon`
--
ALTER TABLE `lebanon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesotho`
--
ALTER TABLE `lesotho`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `liberia`
--
ALTER TABLE `liberia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `libya`
--
ALTER TABLE `libya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `liechtenstein`
--
ALTER TABLE `liechtenstein`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lithuania`
--
ALTER TABLE `lithuania`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `luxembourg`
--
ALTER TABLE `luxembourg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `madagascar`
--
ALTER TABLE `madagascar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `malawi`
--
ALTER TABLE `malawi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `malaysia`
--
ALTER TABLE `malaysia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maldives`
--
ALTER TABLE `maldives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mali`
--
ALTER TABLE `mali`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `malta`
--
ALTER TABLE `malta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marshall_islands`
--
ALTER TABLE `marshall_islands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mauritania`
--
ALTER TABLE `mauritania`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mauritius`
--
ALTER TABLE `mauritius`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mexico`
--
ALTER TABLE `mexico`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `micronesia`
--
ALTER TABLE `micronesia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moldova`
--
ALTER TABLE `moldova`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monaco`
--
ALTER TABLE `monaco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mongolia`
--
ALTER TABLE `mongolia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `montenegro`
--
ALTER TABLE `montenegro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `morocco`
--
ALTER TABLE `morocco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mozambique`
--
ALTER TABLE `mozambique`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `namibia`
--
ALTER TABLE `namibia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nauru`
--
ALTER TABLE `nauru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nepal`
--
ALTER TABLE `nepal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `netherlands`
--
ALTER TABLE `netherlands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_zealand`
--
ALTER TABLE `new_zealand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nicaragua`
--
ALTER TABLE `nicaragua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `niger`
--
ALTER TABLE `niger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nigeria`
--
ALTER TABLE `nigeria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `north_korea`
--
ALTER TABLE `north_korea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `north_macedonia`
--
ALTER TABLE `north_macedonia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `norway`
--
ALTER TABLE `norway`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oman`
--
ALTER TABLE `oman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakistan`
--
ALTER TABLE `pakistan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `palau`
--
ALTER TABLE `palau`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panama`
--
ALTER TABLE `panama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `papua_new_guinea`
--
ALTER TABLE `papua_new_guinea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paraguay`
--
ALTER TABLE `paraguay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peru`
--
ALTER TABLE `peru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `philippines`
--
ALTER TABLE `philippines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poland`
--
ALTER TABLE `poland`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portugal`
--
ALTER TABLE `portugal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qatar`
--
ALTER TABLE `qatar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `romania`
--
ALTER TABLE `romania`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `russia`
--
ALTER TABLE `russia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rwanda`
--
ALTER TABLE `rwanda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sao_tome_and_principe`
--
ALTER TABLE `sao_tome_and_principe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saudi_arabia`
--
ALTER TABLE `saudi_arabia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senegal`
--
ALTER TABLE `senegal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serbia`
--
ALTER TABLE `serbia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seychelles`
--
ALTER TABLE `seychelles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sierra_leone`
--
ALTER TABLE `sierra_leone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `singapore`
--
ALTER TABLE `singapore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slovakia`
--
ALTER TABLE `slovakia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slovenia`
--
ALTER TABLE `slovenia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solomon_islands`
--
ALTER TABLE `solomon_islands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `somalia`
--
ALTER TABLE `somalia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `south_africa`
--
ALTER TABLE `south_africa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `south_korea`
--
ALTER TABLE `south_korea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `south_sudan`
--
ALTER TABLE `south_sudan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spain`
--
ALTER TABLE `spain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sri_lanka`
--
ALTER TABLE `sri_lanka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sudan`
--
ALTER TABLE `sudan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suriname`
--
ALTER TABLE `suriname`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sweden`
--
ALTER TABLE `sweden`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `switzerland`
--
ALTER TABLE `switzerland`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tajikistan`
--
ALTER TABLE `tajikistan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanzania`
--
ALTER TABLE `tanzania`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thailand`
--
ALTER TABLE `thailand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `togo`
--
ALTER TABLE `togo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tonga`
--
ALTER TABLE `tonga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trinidad_and_tobago`
--
ALTER TABLE `trinidad_and_tobago`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tunisia`
--
ALTER TABLE `tunisia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turkey`
--
ALTER TABLE `turkey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turkmenistan`
--
ALTER TABLE `turkmenistan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuvalu`
--
ALTER TABLE `tuvalu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uganda`
--
ALTER TABLE `uganda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ukraine`
--
ALTER TABLE `ukraine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `united_arab_emirates`
--
ALTER TABLE `united_arab_emirates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `united_kingdom`
--
ALTER TABLE `united_kingdom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `united_states`
--
ALTER TABLE `united_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uruguay`
--
ALTER TABLE `uruguay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uzbekistan`
--
ALTER TABLE `uzbekistan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vanuatu`
--
ALTER TABLE `vanuatu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vatican_city`
--
ALTER TABLE `vatican_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venezuela`
--
ALTER TABLE `venezuela`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vietnam`
--
ALTER TABLE `vietnam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wales`
--
ALTER TABLE `wales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yemen`
--
ALTER TABLE `yemen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zambia`
--
ALTER TABLE `zambia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zimbabwe`
--
ALTER TABLE `zimbabwe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `afghanistan`
--
ALTER TABLE `afghanistan`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `albania`
--
ALTER TABLE `albania`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `algeria`
--
ALTER TABLE `algeria`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `andorra`
--
ALTER TABLE `andorra`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `angola`
--
ALTER TABLE `angola`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `antigua_and_barbuda`
--
ALTER TABLE `antigua_and_barbuda`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `argentina`
--
ALTER TABLE `argentina`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `armenia`
--
ALTER TABLE `armenia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `australia`
--
ALTER TABLE `australia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `austria`
--
ALTER TABLE `austria`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `azerbaijan`
--
ALTER TABLE `azerbaijan`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bahamas`
--
ALTER TABLE `bahamas`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bahrain`
--
ALTER TABLE `bahrain`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bangladesh`
--
ALTER TABLE `bangladesh`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barbados`
--
ALTER TABLE `barbados`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `belarus`
--
ALTER TABLE `belarus`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `belgium`
--
ALTER TABLE `belgium`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `belize`
--
ALTER TABLE `belize`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `benin`
--
ALTER TABLE `benin`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bhutan`
--
ALTER TABLE `bhutan`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bolivia`
--
ALTER TABLE `bolivia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bosnia_and_herzegovina`
--
ALTER TABLE `bosnia_and_herzegovina`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `botswana`
--
ALTER TABLE `botswana`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brazil`
--
ALTER TABLE `brazil`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brunei`
--
ALTER TABLE `brunei`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bulgaria`
--
ALTER TABLE `bulgaria`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `burkina_faso`
--
ALTER TABLE `burkina_faso`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `burundi`
--
ALTER TABLE `burundi`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cabo_verde`
--
ALTER TABLE `cabo_verde`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cambodia`
--
ALTER TABLE `cambodia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cameroon`
--
ALTER TABLE `cameroon`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `canada`
--
ALTER TABLE `canada`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `central_african_republic`
--
ALTER TABLE `central_african_republic`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chad`
--
ALTER TABLE `chad`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chile`
--
ALTER TABLE `chile`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `china`
--
ALTER TABLE `china`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colombia`
--
ALTER TABLE `colombia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comoros`
--
ALTER TABLE `comoros`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `congo_congo_brazzaville`
--
ALTER TABLE `congo_congo_brazzaville`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `congo_democratic_republic_of_the_congo_kinshasa`
--
ALTER TABLE `congo_democratic_republic_of_the_congo_kinshasa`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `costa_rica`
--
ALTER TABLE `costa_rica`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `croatia`
--
ALTER TABLE `croatia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cuba`
--
ALTER TABLE `cuba`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cyprus`
--
ALTER TABLE `cyprus`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `czechia`
--
ALTER TABLE `czechia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `denmark`
--
ALTER TABLE `denmark`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `djibouti`
--
ALTER TABLE `djibouti`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dominica`
--
ALTER TABLE `dominica`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dominican_republic`
--
ALTER TABLE `dominican_republic`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ecuador`
--
ALTER TABLE `ecuador`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `egypt`
--
ALTER TABLE `egypt`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `el_salvador`
--
ALTER TABLE `el_salvador`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `equatorial_guinea`
--
ALTER TABLE `equatorial_guinea`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eritrea`
--
ALTER TABLE `eritrea`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estonia`
--
ALTER TABLE `estonia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eswatini`
--
ALTER TABLE `eswatini`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ethiopia`
--
ALTER TABLE `ethiopia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fiji`
--
ALTER TABLE `fiji`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `finland`
--
ALTER TABLE `finland`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `france`
--
ALTER TABLE `france`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gabon`
--
ALTER TABLE `gabon`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambia`
--
ALTER TABLE `gambia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `georgia`
--
ALTER TABLE `georgia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `germany`
--
ALTER TABLE `germany`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ghana`
--
ALTER TABLE `ghana`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `greece`
--
ALTER TABLE `greece`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grenada`
--
ALTER TABLE `grenada`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guatemala`
--
ALTER TABLE `guatemala`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guinea`
--
ALTER TABLE `guinea`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guinea_bissau`
--
ALTER TABLE `guinea_bissau`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guyana`
--
ALTER TABLE `guyana`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `haiti`
--
ALTER TABLE `haiti`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `honduras`
--
ALTER TABLE `honduras`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hungary`
--
ALTER TABLE `hungary`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iceland`
--
ALTER TABLE `iceland`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `india`
--
ALTER TABLE `india`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `indonesia`
--
ALTER TABLE `indonesia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iran`
--
ALTER TABLE `iran`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iraq`
--
ALTER TABLE `iraq`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ireland`
--
ALTER TABLE `ireland`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `israel`
--
ALTER TABLE `israel`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `italy`
--
ALTER TABLE `italy`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jamaica`
--
ALTER TABLE `jamaica`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `japan`
--
ALTER TABLE `japan`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jordan`
--
ALTER TABLE `jordan`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kazakhstan`
--
ALTER TABLE `kazakhstan`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kenya`
--
ALTER TABLE `kenya`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kiribati`
--
ALTER TABLE `kiribati`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuwait`
--
ALTER TABLE `kuwait`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kyrgyzstan`
--
ALTER TABLE `kyrgyzstan`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laos`
--
ALTER TABLE `laos`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `latvia`
--
ALTER TABLE `latvia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lebanon`
--
ALTER TABLE `lebanon`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lesotho`
--
ALTER TABLE `lesotho`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `liberia`
--
ALTER TABLE `liberia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `libya`
--
ALTER TABLE `libya`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `liechtenstein`
--
ALTER TABLE `liechtenstein`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lithuania`
--
ALTER TABLE `lithuania`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `luxembourg`
--
ALTER TABLE `luxembourg`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `madagascar`
--
ALTER TABLE `madagascar`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `malawi`
--
ALTER TABLE `malawi`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `malaysia`
--
ALTER TABLE `malaysia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maldives`
--
ALTER TABLE `maldives`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mali`
--
ALTER TABLE `mali`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `malta`
--
ALTER TABLE `malta`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marshall_islands`
--
ALTER TABLE `marshall_islands`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mauritania`
--
ALTER TABLE `mauritania`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mauritius`
--
ALTER TABLE `mauritius`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mexico`
--
ALTER TABLE `mexico`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `micronesia`
--
ALTER TABLE `micronesia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `moldova`
--
ALTER TABLE `moldova`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `monaco`
--
ALTER TABLE `monaco`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mongolia`
--
ALTER TABLE `mongolia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `montenegro`
--
ALTER TABLE `montenegro`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `morocco`
--
ALTER TABLE `morocco`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mozambique`
--
ALTER TABLE `mozambique`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `namibia`
--
ALTER TABLE `namibia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nauru`
--
ALTER TABLE `nauru`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nepal`
--
ALTER TABLE `nepal`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `netherlands`
--
ALTER TABLE `netherlands`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `new_zealand`
--
ALTER TABLE `new_zealand`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nicaragua`
--
ALTER TABLE `nicaragua`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `niger`
--
ALTER TABLE `niger`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nigeria`
--
ALTER TABLE `nigeria`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `north_korea`
--
ALTER TABLE `north_korea`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `north_macedonia`
--
ALTER TABLE `north_macedonia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `norway`
--
ALTER TABLE `norway`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oman`
--
ALTER TABLE `oman`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pakistan`
--
ALTER TABLE `pakistan`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `palau`
--
ALTER TABLE `palau`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `panama`
--
ALTER TABLE `panama`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `papua_new_guinea`
--
ALTER TABLE `papua_new_guinea`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paraguay`
--
ALTER TABLE `paraguay`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peru`
--
ALTER TABLE `peru`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `philippines`
--
ALTER TABLE `philippines`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poland`
--
ALTER TABLE `poland`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portugal`
--
ALTER TABLE `portugal`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qatar`
--
ALTER TABLE `qatar`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `romania`
--
ALTER TABLE `romania`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `russia`
--
ALTER TABLE `russia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rwanda`
--
ALTER TABLE `rwanda`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sao_tome_and_principe`
--
ALTER TABLE `sao_tome_and_principe`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saudi_arabia`
--
ALTER TABLE `saudi_arabia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `senegal`
--
ALTER TABLE `senegal`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `serbia`
--
ALTER TABLE `serbia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seychelles`
--
ALTER TABLE `seychelles`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sierra_leone`
--
ALTER TABLE `sierra_leone`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `singapore`
--
ALTER TABLE `singapore`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slovakia`
--
ALTER TABLE `slovakia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slovenia`
--
ALTER TABLE `slovenia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `solomon_islands`
--
ALTER TABLE `solomon_islands`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `somalia`
--
ALTER TABLE `somalia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `south_africa`
--
ALTER TABLE `south_africa`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `south_korea`
--
ALTER TABLE `south_korea`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `south_sudan`
--
ALTER TABLE `south_sudan`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spain`
--
ALTER TABLE `spain`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sri_lanka`
--
ALTER TABLE `sri_lanka`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sudan`
--
ALTER TABLE `sudan`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suriname`
--
ALTER TABLE `suriname`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sweden`
--
ALTER TABLE `sweden`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `switzerland`
--
ALTER TABLE `switzerland`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tajikistan`
--
ALTER TABLE `tajikistan`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tanzania`
--
ALTER TABLE `tanzania`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thailand`
--
ALTER TABLE `thailand`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `togo`
--
ALTER TABLE `togo`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tonga`
--
ALTER TABLE `tonga`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trinidad_and_tobago`
--
ALTER TABLE `trinidad_and_tobago`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tunisia`
--
ALTER TABLE `tunisia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `turkey`
--
ALTER TABLE `turkey`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `turkmenistan`
--
ALTER TABLE `turkmenistan`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tuvalu`
--
ALTER TABLE `tuvalu`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uganda`
--
ALTER TABLE `uganda`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ukraine`
--
ALTER TABLE `ukraine`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `united_arab_emirates`
--
ALTER TABLE `united_arab_emirates`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `united_kingdom`
--
ALTER TABLE `united_kingdom`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `united_states`
--
ALTER TABLE `united_states`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uruguay`
--
ALTER TABLE `uruguay`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uzbekistan`
--
ALTER TABLE `uzbekistan`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vanuatu`
--
ALTER TABLE `vanuatu`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vatican_city`
--
ALTER TABLE `vatican_city`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `venezuela`
--
ALTER TABLE `venezuela`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vietnam`
--
ALTER TABLE `vietnam`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wales`
--
ALTER TABLE `wales`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `yemen`
--
ALTER TABLE `yemen`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zambia`
--
ALTER TABLE `zambia`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zimbabwe`
--
ALTER TABLE `zimbabwe`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
