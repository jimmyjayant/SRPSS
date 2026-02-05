-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2026 at 07:23 AM
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
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(6) UNSIGNED NOT NULL,
  `awardsname` varchar(100) NOT NULL,
  `timestmp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `awardsname`, `timestmp`) VALUES
(1, 'India Science Award', '2024-02-17 18:18:18'),
(2, 'Shanti Swarup Bhatnagar Prize for Science and Technology', '2024-02-17 18:18:58'),
(3, 'G. D. Birla Award for Scientific Research', '2024-02-17 18:22:04'),
(4, 'H. K. Firodia Awards', '2024-02-17 18:35:37'),
(5, 'VASVIK Industrial Research Award', '2024-02-17 18:35:37'),
(6, 'Om Prakash Bhasin Award', '2024-02-17 18:35:37'),
(7, 'SASTRA-CNR Rao Award', '2024-02-17 18:35:37'),
(8, 'National Bioscience Award for Career Development', '2024-02-17 18:35:37'),
(9, 'SASTRA Ramanujan Prize', '2024-02-17 18:35:37'),
(10, 'Aryabhata Award', '2024-02-17 18:35:37'),
(11, 'Kalinga Prize', '2024-02-17 18:35:37'),
(12, 'Infosys Prize', '2024-02-17 18:35:37'),
(13, 'Vigyan Gaurav Award', '2024-02-17 18:35:37'),
(14, 'Jamnalal Bajaj Award', '2024-02-17 18:35:37'),
(15, 'Faculty Research Awards', '2024-02-17 18:35:37'),
(16, 'Dr. B. C. Roy Award', '2024-02-17 18:35:37');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `chatmsg` varchar(1000) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `conferences`
--

CREATE TABLE `conferences` (
  `id` int(6) UNSIGNED NOT NULL,
  `conferencename` varchar(450) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conferences`
--

INSERT INTO `conferences` (`id`, `conferencename`, `timestamp`) VALUES
(1, 'International Conference on Inventive Material Science Applications (ICIMA)', '2024-02-09 19:24:22'),
(2, 'International Conference on Mechanical, Aerospace and Production Engineering (ICMAPE)', '2024-02-09 19:24:22'),
(3, 'International Conference on Educational Technology, Learning and Social Science (ICETLSS)', '2024-02-09 19:24:22'),
(4, 'International Conference on Environmental Science and Biotechnology (ICESB)', '2024-02-09 19:24:22'),
(5, 'International Conference on Food Technology, Agriculture and Fisheries (ICFTAF)', '2024-02-09 19:24:22'),
(6, 'International Conference on Medical and Health Sciences (ICMHS)', '2024-02-09 19:24:22'),
(7, 'International Conference on Recent Innovations in Computer Science, Engineering and Technology (ICRICSET)', '2024-02-09 19:24:22'),
(8, 'International Conference on Business Management and Humanities (ICBEMH)', '2024-02-09 19:24:22'),
(9, 'International Conference on Applied Science Mathematics and Statistics (ICASMS)', '2024-02-09 19:24:22'),
(10, 'International Conference on Industrial Engineering and Operations Management (ICIEOM)', '2024-02-09 19:24:22'),
(11, 'International Conference on Artificial Intelligence (ICAI)', '2024-02-09 19:24:22'),
(12, 'International Conference on Robotics and Automation (ICRA)', '2024-02-09 19:24:22'),
(13, 'International Conference on Teaching, Education and new learning Technologies (ICTENLT)', '2024-02-09 19:24:22'),
(14, 'International Conference on social science and humanities (ICSSH)', '2024-02-09 19:24:22'),
(15, 'International Conference on Physics (ICP)', '2024-02-09 19:24:22'),
(16, 'Global Conference on Renewable Energy and Climate Change (GCRECC)', '2024-02-09 19:24:22'),
(17, 'International Conference on Agricultural and Biological Sciences (ICABS)', '2024-02-09 19:24:22'),
(18, 'International Conference on Recent Advances in Engineering, Technology and Science (ICRAETS)', '2024-02-09 19:24:22'),
(19, 'International Conference on Business Management and Social Innovation (ICBMSI)', '2024-02-09 19:24:22'),
(20, 'International Conference on arts and humanities (ICAH)', '2024-02-09 19:24:22'),
(21, 'International Conference on Astronomy, Astrophysics, Space Science (ICAASS)', '2024-02-09 19:24:22'),
(22, 'International Conference on Mathematical, Physics, and Dynamics (ICMPD)', '2024-02-09 19:24:22'),
(23, 'International Conference on Big Data and Smart Computing (ICBDSC)', '2024-02-09 19:24:22'),
(24, 'International Research Conference on Arts, Commerce, and Business Management (IRCACBM)', '2024-02-09 19:24:22'),
(25, 'International Conference on Software Engineering and Computer Science (ICSECS)', '2024-02-09 19:24:22'),
(26, 'International Conference on Recent Developments in Social Science and Business Management (ICRDSSBM)', '2024-02-09 19:24:22'),
(27, 'International Conference on Recent Advances in Science, Technology & Engineering (ICRASTE)', '2024-02-09 19:24:22'),
(28, 'International Conference on Environment, Agriculture and Biotechnology (ICEABT)', '2024-02-09 19:24:22'),
(29, 'International Conference on Control System, power and electrical engineering (ICCSPEE)', '2024-02-09 19:24:22'),
(30, 'International Conference on Artificial Intelligence, Robots and Mechanical Engineering (ICAIRME)', '2024-02-09 19:24:22');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(6) UNSIGNED NOT NULL,
  `fname` varchar(150) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mess` varchar(1000) NOT NULL,
  `approved` int(1) DEFAULT 0,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `id` int(6) UNSIGNED NOT NULL,
  `journalname` varchar(150) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`id`, `journalname`, `timestamp`) VALUES
(1, 'American Indian and Alaska Native Mental Health Research', '2024-02-09 19:28:41'),
(2, 'Annals of Indian Academy of Neurology', '2024-02-09 19:28:41'),
(3, 'Contributions to Indian Sociology', '2024-02-09 19:28:41'),
(4, 'Indian Chemical Engineer', '2024-02-09 19:28:41'),
(5, 'Indian Drugs', '2024-02-09 19:28:41'),
(6, 'Indian Economic and Social History Review', '2024-02-09 19:28:41'),
(7, 'Indian Economic Review', '2024-02-09 19:28:41'),
(8, 'Indian Geotechnical Journal', '2024-02-09 19:28:41'),
(9, 'Indian Growth and Development Review', '2024-02-09 19:28:41'),
(10, 'Indian Heart Journal', '2024-02-09 19:28:41'),
(11, 'Indian Historical Review', '2024-02-09 19:28:41'),
(12, 'Indian Journal of Agricultural Biochemistry', '2024-02-09 19:28:41'),
(13, 'Indian Journal of Agricultural Economics', '2024-02-09 19:28:41'),
(14, 'Indian Journal of Agricultural Research', '2024-02-09 19:28:41'),
(15, 'Indian Journal of Agricultural Sciences', '2024-02-09 19:28:41'),
(16, 'Indian Journal of Agronomy', '2024-02-09 19:28:41'),
(17, 'Indian Journal of Anaesthesia', '2024-02-09 19:28:41'),
(18, 'Indian Journal of Animal Research', '2024-02-09 19:28:41'),
(19, 'Indian Journal of Animal Sciences', '2024-02-09 19:28:41'),
(20, 'Indian Journal of Biochemistry and Biophysics', '2024-02-09 19:28:41'),
(21, 'Indian Journal of Biotechnology', '2024-02-09 19:28:41'),
(22, 'Indian Journal of Cancer', '2024-02-09 19:28:41'),
(23, 'Indian Journal of Chemical Technology', '2024-02-09 19:28:41'),
(24, 'Indian Journal of Chemistry – Section A Inorganic, Physical, Theoretical and Analytical Chemistry', '2024-02-09 19:28:41'),
(25, 'Indian Journal of Chemistry – Section B Organic and Medicinal Chemistry', '2024-02-09 19:28:41'),
(26, 'Indian Journal of Clinical Biochemistry', '2024-02-09 19:28:41'),
(27, 'Indian Journal of Community Health', '2024-02-09 19:28:41'),
(28, 'Indian Journal of Community Medicine', '2024-02-09 19:28:41'),
(29, 'Indian Journal of Computer Science and Engineering', '2024-02-09 19:28:41'),
(30, 'Indian Journal of Corporate Governance', '2024-02-09 19:28:41'),
(31, 'Indian Journal of Critical Care Medicine', '2024-02-09 19:28:41'),
(32, 'Indian Journal of Dental Research', '2024-02-09 19:28:41'),
(33, 'Indian Journal of Dermatology', '2024-02-09 19:28:41'),
(34, 'Indian Journal of Dermatology, Venereology and Leprology', '2024-02-09 19:28:41'),
(35, 'Indian Journal of Economics and Development', '2024-02-09 19:28:41'),
(36, 'Indian Journal of Endocrinology and Metabolism', '2024-02-09 19:28:41'),
(37, 'Indian Journal of Engineering and Materials Sciences', '2024-02-09 19:28:41'),
(38, 'Indian Journal of Entomology', '2024-02-09 19:28:41'),
(39, 'Indian Journal of Environmental Protection', '2024-02-09 19:28:41'),
(40, 'Indian Journal of Fibre and Textile Research', '2024-02-09 19:28:41'),
(41, 'Indian Journal of Finance', '2024-02-09 19:28:41'),
(42, 'Indian Journal of Fisheries', '2024-02-09 19:28:41'),
(43, 'Indian Journal of Forensic Medicine and Pathology', '2024-02-09 19:28:41'),
(44, 'Indian Journal of Gastroenterology', '2024-02-09 19:28:41'),
(45, 'Indian Journal of Gender Studies', '2024-02-09 19:28:41'),
(46, 'Indian Journal of Genetics and Plant Breeding', '2024-02-09 19:28:41'),
(47, 'Indian Journal of Geo-Marine Sciences', '2024-02-09 19:28:41'),
(48, 'Indian Journal of Gynecologic Oncology', '2024-02-09 19:28:41'),
(49, 'Indian Journal of Hematology and Blood Transfusion', '2024-02-09 19:28:41'),
(50, 'Indian Journal of Heterocyclic Chemistry', '2024-02-09 19:28:41'),
(51, 'Indian Journal of Horticulture', '2024-02-09 19:28:41'),
(52, 'Indian Journal of Human Development', '2024-02-09 19:28:41'),
(53, 'Indian Journal of Labour Economics', '2024-02-09 19:28:41'),
(54, 'Indian Journal of Leprosy', '2024-02-09 19:28:41'),
(55, 'Indian Journal of Marketing', '2024-02-09 19:28:41'),
(56, 'Indian Journal of Mathematics', '2024-02-09 19:28:41'),
(57, 'Indian Journal of Medical and Paediatric Oncology', '2024-02-09 19:28:41'),
(58, 'Indian journal of medical ethics', '2024-02-09 19:28:41'),
(59, 'Indian Journal of Medical Microbiology', '2024-02-09 19:28:41'),
(60, 'Indian Journal of Medical Research', '2024-02-09 19:28:41'),
(61, 'Indian Journal of Medical Research, Supplement', '2024-02-09 19:28:41'),
(62, 'Indian Journal of Microbiology', '2024-02-09 19:28:41'),
(63, 'Indian Journal of Natural Products and Resources', '2024-02-09 19:28:41'),
(64, 'Indian Journal of Nematology', '2024-02-09 19:28:41'),
(65, 'Indian Journal of Nephrology', '2024-02-09 19:28:41'),
(66, 'Indian Journal of Nuclear Medicine', '2024-02-09 19:28:41'),
(67, 'Indian Journal of Occupational and Environmental Medicine', '2024-02-09 19:28:41'),
(68, 'Indian Journal of Ophthalmology', '2024-02-09 19:28:41'),
(69, 'Indian Journal of Orthopaedics', '2024-02-09 19:28:41'),
(70, 'Indian Journal of Otolaryngology and Head and Neck Surgery', '2024-02-09 19:28:41'),
(71, 'Indian Journal of Otology', '2024-02-09 19:28:41'),
(72, 'Indian Journal of Palliative Care', '2024-02-09 19:28:41'),
(73, 'Indian Journal of Pathology and Microbiology', '2024-02-09 19:28:41'),
(74, 'Indian Journal of Pediatrics', '2024-02-09 19:28:41'),
(75, 'Indian Journal of Pharmaceutical Education and Research', '2024-02-09 19:28:41'),
(76, 'Indian Journal of Pharmaceutical Sciences', '2024-02-09 19:28:41'),
(77, 'Indian Journal of Pharmacology', '2024-02-09 19:28:41'),
(78, 'Indian Journal of Physics', '2024-02-09 19:28:41'),
(79, 'Indian Journal of Physiology and Pharmacology', '2024-02-09 19:28:41'),
(80, 'Indian Journal of Plastic Surgery', '2024-02-09 19:28:41'),
(81, 'Indian Journal of Practical Pediatrics', '2024-02-09 19:28:41'),
(82, 'Indian Journal of Psychiatry', '2024-02-09 19:28:41'),
(83, 'Indian Journal of Psychological Medicine', '2024-02-09 19:28:41'),
(84, 'Indian journal of public health', '2024-02-09 19:28:41'),
(85, 'Indian Journal of Pure and Applied Mathematics', '2024-02-09 19:28:41'),
(86, 'Indian Journal of Pure and Applied Physics', '2024-02-09 19:28:41'),
(87, 'Indian Journal of Radio and Space Physics', '2024-02-09 19:28:41'),
(88, 'Indian Journal of Radiology and Imaging', '2024-02-09 19:28:41'),
(89, 'Indian Journal of Research in Homoeopathy', '2024-02-09 19:28:41'),
(90, 'Indian Journal of Rheumatology', '2024-02-09 19:28:41'),
(91, 'Indian Journal of Sexually Transmitted Diseases and AIDS', '2024-02-09 19:28:41'),
(92, 'Indian Journal of Small Ruminants', '2024-02-09 19:28:41'),
(93, 'Indian Journal of Social Work', '2024-02-09 19:28:41'),
(94, 'Indian Journal of Surgery', '2024-02-09 19:28:41'),
(95, 'Indian Journal of Surgical Oncology', '2024-02-09 19:28:41'),
(96, 'Indian Journal of Thoracic and Cardiovascular Surgery', '2024-02-09 19:28:41'),
(97, 'Indian Journal of Traditional Knowledge', '2024-02-09 19:28:41'),
(98, 'Indian Journal of Transplantation', '2024-02-09 19:28:41'),
(99, 'Indian Journal of Tuberculosis', '2024-02-09 19:28:41'),
(100, 'Indian Journal of Urology', '2024-02-09 19:28:41'),
(101, 'Indian Law Review', '2024-02-09 19:28:41'),
(102, 'Indian Pacing and Electrophysiology Journal', '2024-02-09 19:28:41'),
(103, 'Indian Pediatrics', '2024-02-09 19:28:41'),
(104, 'Indian Phytopathology', '2024-02-09 19:28:41'),
(105, 'Indian Spine Journal', '2024-02-09 19:28:41'),
(106, 'Indian Veterinary Journal', '2024-02-09 19:28:41'),
(107, 'Indiana', '2024-02-09 19:28:41'),
(108, 'Indiana Journal of Global Legal Studies', '2024-02-09 19:28:41'),
(109, 'Indiana Law Journal', '2024-02-09 19:28:41'),
(110, 'Indiana University Mathematics Journal', '2024-02-09 19:28:41'),
(111, 'International Journal of Anglo-Indian Studies', '2024-02-09 19:28:41'),
(112, 'IPPTA: Quarterly Journal of Indian Pulp and Paper Technical Association', '2024-02-09 19:28:41'),
(113, 'Journal of Indian Academy of Forensic Medicine', '2024-02-09 19:28:41'),
(114, 'Journal of Indian Academy of Oral Medicine and Radiology', '2024-02-09 19:28:41'),
(115, 'Journal of Indian Association for Child and Adolescent Mental Health', '2024-02-09 19:28:41'),
(116, 'Journal of Indian Association of Pediatric Surgeons', '2024-02-09 19:28:41'),
(117, 'Journal of Indian Business Research', '2024-02-09 19:28:41'),
(118, 'Journal of Indian Council of Philosophical Research', '2024-02-09 19:28:41'),
(119, 'Journal of Indian Philosophy', '2024-02-09 19:28:41'),
(120, 'Journal of Indian Prosthodontist Society', '2024-02-09 19:28:41'),
(121, 'Journal of Indian Society of Periodontology', '2024-02-09 19:28:41'),
(122, 'Journal of the Indian Academy of Wood Science', '2024-02-09 19:28:41'),
(123, 'Journal of the Indian Chemical Society', '2024-02-09 19:28:41'),
(124, 'Journal of the Indian Institute of Science', '2024-02-09 19:28:41'),
(125, 'Journal of the Indian Mathematical Society', '2024-02-09 19:28:41'),
(126, 'Journal of the Indian Medical Association', '2024-02-09 19:28:41'),
(127, 'Journal of the Indian Ocean Region', '2024-02-09 19:28:41'),
(128, 'Journal of the Indian Society of Pedodontics and Preventive Dentistry', '2024-02-09 19:28:41'),
(129, 'Journal of the Indian Society of Remote Sensing', '2024-02-09 19:28:41'),
(130, 'Journal of the Indian Society of Soil Science', '2024-02-09 19:28:41'),
(131, 'Journal, Indian Academy of Clinical Medicine', '2024-02-09 19:28:41'),
(132, 'New West Indian Guide/Nieuwe West-Indische Gids (NWIG)', '2024-02-09 19:28:41'),
(133, 'Prabandhan: Indian Journal of Management', '2024-02-09 19:28:41'),
(134, 'Proceedings of the Indian Academy of Sciences: Mathematical Sciences', '2024-02-09 19:28:41'),
(135, 'Proceedings of the Indian National Science Academy', '2024-02-09 19:28:41'),
(136, 'Sankhya: The Indian Journal of Statistics', '2024-02-09 19:28:41'),
(137, 'SCMS Journal of Indian Management', '2024-02-09 19:28:41'),
(138, 'Studies in American Indian Literatures', '2024-02-09 19:28:41'),
(139, 'Studies in Indian Politics', '2024-02-09 19:28:41'),
(140, 'Transactions of the Indian Ceramic Society', '2024-02-09 19:28:41'),
(141, 'Transactions of the Indian Institute of Metals', '2024-02-09 19:28:41'),
(142, 'Transactions of the Institute of Indian Geographers', '2024-02-09 19:28:41'),
(143, 'West Indian Medical Journal', '2024-02-09 19:28:41');

-- --------------------------------------------------------

--
-- Table structure for table `magazines`
--

CREATE TABLE `magazines` (
  `id` int(6) UNSIGNED NOT NULL,
  `magazinename` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `magazines`
--

INSERT INTO `magazines` (`id`, `magazinename`, `publisher`, `timestamp`) VALUES
(1, 'Resonance', 'Indian Academy of Sciences', '2024-02-09 19:29:23'),
(2, 'Current Science', 'Current Science Association', '2024-02-09 19:29:23'),
(3, 'Dream 2047', 'Vigyan Prasar', '2024-02-09 19:29:23'),
(4, 'Jnan o Bijnan', 'Bangiya Bijnan Parishad', '2024-02-09 19:29:23'),
(5, 'Sandarbh', 'Eklavya Foundation', '2024-02-09 19:29:23'),
(6, 'Science Reporter', 'National Institute of Science Communication and Information Resources', '2024-02-09 19:29:23'),
(7, 'Safari', 'Harshal Publications', '2024-02-09 19:29:23'),
(8, 'Bhawana', 'Bhavana Trust', '2024-02-09 19:29:23'),
(9, 'Yojna', 'Ministry of Information & Broadcasting', '2024-02-09 19:29:23'),
(10, 'Vigyan Pragati (Hindi)', 'NISCAIR', '2024-02-09 19:29:23'),
(11, 'Bulletin of Materials Science', 'Indian Academy of Sciences', '2024-02-09 19:29:23'),
(12, 'Science India Magazine', 'Vijnana Bharati', '2024-02-09 19:29:23'),
(13, 'Everyman\'s Science', 'The Indian Science Congress Association', '2024-02-09 19:29:23'),
(14, 'Scientific India', 'Scientific Planet Society', '2024-02-09 19:29:23'),
(15, 'Shaastra', 'Indian Educational Institution', '2024-02-09 19:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(6) UNSIGNED NOT NULL,
  `moviename` varchar(250) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `moviename`, `timestamp`) VALUES
(1, 'Rocketry', '2024-02-09 19:29:49'),
(2, 'Hawaizaada', '2024-02-09 19:29:49'),
(3, 'Mission Mangal', '2024-02-09 19:29:49'),
(4, 'Parmanu', '2024-02-09 19:29:49'),
(5, 'Ek Doctor Ki Maut', '2024-02-09 19:29:49'),
(6, 'The Quantum Indians', '2024-02-09 19:29:49'),
(7, 'Ramanujan', '2024-02-09 19:29:49'),
(8, 'Shakuntala Devi', '2024-02-09 19:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `newspapers`
--

CREATE TABLE `newspapers` (
  `id` int(6) UNSIGNED NOT NULL,
  `newspapername` varchar(150) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newspapers`
--

INSERT INTO `newspapers` (`id`, `newspapername`, `link`, `timestamp`) VALUES
(1, 'Economic Times', 'https://economictimes.indiatimes.com/', '2024-02-09 19:30:16'),
(2, 'Hindu', 'https://www.thehindu.com/', '2024-02-09 19:30:16'),
(3, 'Hindustan Times', 'https://www.hindustantimes.com/', '2024-02-09 19:30:16'),
(4, 'Indian Express', 'https://indianexpress.com/', '2024-02-09 19:30:16'),
(5, 'Times Of India', 'https://timesofindia.indiatimes.com/us', '2024-02-09 19:30:16');

-- --------------------------------------------------------

--
-- Table structure for table `observatory`
--

CREATE TABLE `observatory` (
  `id` int(6) UNSIGNED NOT NULL,
  `observatoryname` varchar(200) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `observatory`
--

INSERT INTO `observatory` (`id`, `observatoryname`, `dt`) VALUES
(1, 'Kodaikanal Solar Observatory Museum', '2024-02-17 19:09:41'),
(2, 'Gauribidanuru Radio Observatory', '2024-02-17 19:09:41'),
(3, 'Vainu Bappu Observatory', '2024-02-17 19:09:41'),
(4, 'Madras Observatory', '2024-02-17 19:09:41'),
(5, 'Girawali Observatory - IUCAA', '2024-02-17 19:09:41'),
(6, 'Allahabad Observatory', '2024-02-17 19:30:35'),
(7, 'Mount Abu InfraRed Observatory', '2024-02-17 19:30:35'),
(8, 'Devasthal Observatory', '2024-02-17 19:30:35'),
(9, 'Aryabhatta Research Institute of Observational Sciences', '2024-02-17 19:30:35'),
(10, 'Colaba Observatory', '2024-02-17 19:30:35'),
(11, 'Giant Metrewave Radio Telescope', '2024-02-17 19:30:35'),
(12, 'Indian Astronomical Observatory', '2024-02-17 19:30:35'),
(13, 'International Liquid Mirror Telescope', '2024-02-17 19:30:35'),
(14, 'Madhava Observatory', '2024-02-17 19:30:35'),
(15, 'Major Atmospheric Cerenkov Experiment Telescope', '2024-02-17 19:30:35'),
(16, 'Pachmarhi Telescope Array', '2024-02-17 19:30:35'),
(17, 'Trivandrum Observatory', '2024-02-17 19:30:35'),
(18, 'Udaipur Solar Observatory', '2024-02-17 19:30:35'),
(19, 'Ooty Radio Telescope', '2024-02-17 19:30:35');

-- --------------------------------------------------------

--
-- Table structure for table `researchers`
--

CREATE TABLE `researchers` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `addr` varchar(300) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `researchcategory` varchar(15) NOT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `linkedin` varchar(100) DEFAULT NULL,
  `pass` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usersessionid` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `researchers`
--

INSERT INTO `researchers` (`id`, `firstname`, `lastname`, `gender`, `dob`, `addr`, `contact`, `email`, `researchcategory`, `twitter`, `facebook`, `linkedin`, `pass`, `timestamp`, `usersessionid`) VALUES
(57, 'John', 'Doe', 'Male', '2000-01-01', 'house no-1, gwalior, madhya pradesh', 2147483647, 'johndoe@gmail.com', 'science', '', '', '', '$2y$12$H7vmzhkMDgUCk3HLtetpZ.bQiuyGABfKpIcqrHjw9FdPJ6aKPM8r.', '2026-02-04 09:10:37', 'aa975d743a82e812f555e12837cdb721'),
(58, 'admin', '.', 'Male', '0000-00-00', 'house no-1', 0, 'admin@srpss.com', '', NULL, NULL, NULL, 'Ad@12345', '2026-02-05 06:45:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `researchpapers`
--

CREATE TABLE `researchpapers` (
  `id` int(6) UNSIGNED NOT NULL,
  `loggeduser` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `category` varchar(150) NOT NULL,
  `topic` varchar(300) NOT NULL,
  `paper` varchar(500) NOT NULL,
  `approved` int(6) DEFAULT 0,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `researchsites`
--

CREATE TABLE `researchsites` (
  `id` int(6) UNSIGNED NOT NULL,
  `sitename` varchar(100) NOT NULL,
  `headquarter` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `researchsites`
--

INSERT INTO `researchsites` (`id`, `sitename`, `headquarter`, `timestamp`) VALUES
(1, 'Indian Agriculture Research Institute', 'New delhi', '2024-02-09 19:31:36'),
(2, 'Central Rice Research Institute', 'Cuttack', '2024-02-09 19:31:36'),
(3, 'Central Sugarcane Research Institute', 'Coimbatore', '2024-02-09 19:31:36'),
(4, 'Central Potato Research Institute', 'Shimla', '2024-02-09 19:31:36'),
(5, 'Central Tobacco Research Institute', 'Rajamundry', '2024-02-09 19:31:36'),
(6, 'Central Road Research Institute', 'New delhi', '2024-02-09 19:31:36'),
(7, 'National sugar Research Institute', 'Kanpur', '2024-02-09 19:31:36'),
(8, 'Indian Lac Research Institute', 'Ranchi', '2024-02-09 19:31:36'),
(9, 'National Dairy Research Institute', 'Karnal (Haryana)', '2024-02-09 19:31:36'),
(10, 'Central Fuel Research Institute', 'Dhanbad', '2024-02-09 19:31:36'),
(11, 'Central Leather Research Institute', 'Chennai', '2024-02-09 19:31:36'),
(12, 'Central Mining Research Institute', 'Dhanbad', '2024-02-09 19:31:36'),
(13, 'Central Drug Research Institute', 'Lucknow', '2024-02-09 19:31:36'),
(14, 'Indian Meteorological Observatory', 'Pune & Delhi', '2024-02-09 19:31:36'),
(15, 'Raman Research Institute', 'Bangalore', '2024-02-09 19:31:36'),
(16, 'Central Scientific Industrial Organsation', 'Chandigarh', '2024-02-09 19:31:36'),
(17, 'Central Salt and Marine Chemical Research Institute', 'Bhavnagar', '2024-02-09 19:31:36'),
(18, 'Archeological Survey of India', 'Kolkata', '2024-02-09 19:31:36'),
(19, 'Central Jute Technological Research Institute', 'Kolkata', '2024-02-09 19:31:36'),
(20, 'Central Coconut Research Institute', 'Kasergod, Kerala', '2024-02-09 19:31:36'),
(21, 'Textile Research Institute', 'Ahmadabad', '2024-02-09 19:31:36'),
(22, 'All Indian Institute of Medical Science', 'New Delhi', '2024-02-09 19:31:36'),
(23, 'National Aeronautical Laboratory', 'Bangalore', '2024-02-09 19:31:36'),
(24, 'National Institute of Oceanography', 'Panaji', '2024-02-09 19:31:36'),
(25, 'National Geophysics Research Institute', 'Hyderabad', '2024-02-09 19:31:36'),
(26, 'Indian Institute of Petroleum', 'Dehradun', '2024-02-09 19:31:36'),
(27, 'Central Building Research Institute', 'Roorkee', '2024-02-09 19:31:36'),
(28, 'Tata Institute of Fundamental Research', 'Mumbai', '2024-02-09 19:31:36'),
(29, 'High Altitude Research Laboratory', 'Gulmarg', '2024-02-09 19:31:36'),
(30, 'National Botanical Research Institute', 'Lucknow', '2024-02-09 19:31:36'),
(31, 'Central Food Technological Research Institute', 'Mysore', '2024-02-09 19:31:36'),
(32, 'Central Glass and Ceramic Research Institute', 'Kolkata', '2024-02-09 19:31:36'),
(33, 'National environmental engineering research institute', 'Nagpur', '2024-02-09 19:31:36'),
(34, 'Central Electro Chemical Research Institute', 'Karaikudi (Tamil Nadu)', '2024-02-09 19:31:36'),
(35, 'Indian Institute of Chemical Biology', 'Kolkata', '2024-02-09 19:31:36'),
(36, 'Industrial Toxicology Research Centre', 'Lucknow', '2024-02-09 19:31:36'),
(37, 'Central Mechanical Engineering Research Institute', 'Durgapur', '2024-02-09 19:31:36'),
(38, 'Centre for Cellular and Molecular Biology', 'Hyderabad', '2024-02-09 19:31:36'),
(39, 'Vikram Sarabhai Space Centre', 'Thiruvananthapuram', '2024-02-09 19:31:36'),
(40, 'Uranium Corporation of India', 'Jadugoda', '2024-02-09 19:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `scientists`
--

CREATE TABLE `scientists` (
  `id` int(6) UNSIGNED NOT NULL,
  `scientistname` varchar(250) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scientists`
--

INSERT INTO `scientists` (`id`, `scientistname`, `timestamp`) VALUES
(1, 'C.V. Raman', '2024-02-09 19:32:03'),
(2, 'Meghnad Saha', '2024-02-09 19:32:03'),
(3, 'Homi J. Bhabha', '2024-02-09 19:32:03'),
(4, 'A.P.J. Abdul Kalam', '2024-02-09 19:32:03'),
(5, 'Srinivasa Ramanujan', '2024-02-09 19:32:03'),
(6, 'Satyendra Nath Bose', '2024-02-09 19:32:03'),
(7, 'Jagadish Chandra Bose', '2024-02-09 19:32:03'),
(8, 'Har Gobind Khorana', '2024-02-09 19:32:03'),
(9, 'Vikram Sarabhai', '2024-02-09 19:32:03'),
(10, 'Subrahmanyan Chandrasekhar', '2024-02-09 19:32:03'),
(11, 'Prasanta Chandra Mahalanobis', '2024-02-09 19:32:03'),
(12, 'Salim Ali', '2024-02-09 19:32:03'),
(13, 'Birbal Sahni', '2024-02-09 19:32:03'),
(14, 'Venkatraman Radhakrishnan', '2024-02-09 19:32:03'),
(15, 'Asima Chatterjee', '2024-02-09 19:32:03'),
(16, 'Mokshagundam Visvesvaraya', '2024-02-09 19:32:03'),
(17, 'Prafulla Chandra Ray', '2024-02-09 19:32:03'),
(18, 'Radha Balakrishnan', '2024-02-09 19:32:03'),
(19, 'M.S. Swaminathan', '2024-02-09 19:32:03'),
(20, 'Ashoke Sen', '2024-02-09 19:32:03'),
(21, 'Ambarish Ghosh', '2024-02-09 19:32:03'),
(22, 'Archana Bhattacharyya', '2024-02-09 19:32:03'),
(23, 'Amar Gupta', '2024-02-09 19:32:03'),
(24, 'Amal Kumar Raychaudhuri', '2024-02-09 19:32:03'),
(25, 'Animesh Chakravorty', '2024-02-09 19:32:03'),
(26, 'Ajoy Ghatak', '2024-02-09 19:32:03'),
(27, 'Amitava Raychaudhuri', '2024-02-09 19:32:03'),
(28, 'Anil Kakodkar', '2024-02-09 19:32:03'),
(29, 'Aditi Pant', '2024-02-09 19:32:03'),
(30, 'Amartya Sen', '2024-02-09 19:32:03'),
(31, 'G.N. Ramachandran', '2024-02-09 19:32:03'),
(32, 'Abhik Ghosh', '2024-02-09 19:32:03'),
(33, 'Asoke Nath Mitra', '2024-02-09 19:32:03'),
(34, 'Janaki Ammal', '2024-02-09 19:32:03'),
(35, 'A. Sivathanu Pillai', '2024-02-09 19:32:03'),
(36, 'A.S. Kiran Kumar', '2024-02-09 19:32:03'),
(37, 'Abhay Ashtekar', '2024-02-09 19:32:03'),
(38, 'A.P. Balachandran', '2024-02-09 19:32:03'),
(39, 'Arun K. Pati', '2024-02-09 19:32:03'),
(40, 'A.S. Rao', '2024-02-09 19:32:03'),
(41, 'Anna Mani', '2024-02-09 19:32:03'),
(42, 'Agnikumar G. Vedeshwar', '2024-02-09 19:32:03'),
(43, 'Gautam Radhakrishna Desiraju', '2024-02-09 19:32:03'),
(44, 'Kedareswar Banerjee', '2024-02-09 19:32:03'),
(45, 'Manjula Reddy', '2024-02-09 19:32:03'),
(46, 'Venki Ramakrishnan', '2024-05-15 05:38:54');

-- --------------------------------------------------------

--
-- Table structure for table `telescopeworkshop`
--

CREATE TABLE `telescopeworkshop` (
  `id` int(6) NOT NULL,
  `workshopname` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `telescopeworkshop`
--

INSERT INTO `telescopeworkshop` (`id`, `workshopname`, `link`) VALUES
(1, 'Vigyan Prasar', 'https://vigyanprasar.gov.in/workshop-on-astronomical-telescope-making/'),
(2, 'Nehru Centre Mumbai', 'https://www.nehrucentremumbai.in/'),
(3, 'Association of Bangalore Amateur Astronomers', 'https://abaaonline.blogspot.com/'),
(4, 'CESSI', 'http://www.cessi.in/tmw/'),
(5, 'IUCAA', 'https://scipop.iucaa.in/Amateurs/telemaking.html'),
(6, 'Indian Centre for Space Physics', 'https://csp.res.in/index.php?name=VnR4TzhWS1k4SlA2cE4ralRFaGE5dz09OjoxMjM0NTY3ODkxMjM0NTY3'),
(7, 'AXSX', 'https://axsx.in/telescope-making/'),
(8, 'Ecoskool Astronomy', 'https://ecoskoolastronomy.com/workshop/'),
(9, 'Skywatchers India', 'http://www.skywatchersindia.com/workshops.html'),
(10, 'IIT Kanpur', 'https://ifacet.iitk.ac.in/product/make-your-own-telescope/'),
(11, 'Unstop', 'https://unstop.com/workshops-webinars/refractive-telescope-making-workshop-brahmand-tesseract-70-pandit-deendayal-energy-university-gandhinagar-274646'),
(12, 'Chinmaya Vidyalaya', 'https://blog.openspacefoundation.in/telescope-construction-workshop-chinmaya-vidyalaya-nagapattinam/'),
(13, 'Astron', 'https://astron-soc.in/asi2019/workshop2'),
(14, 'AICASE', 'https://aicase.in/telescope-training/'),
(15, 'Aperture Telescope', 'https://aperturetelescopes.com/contact/');

-- --------------------------------------------------------

--
-- Table structure for table `usernotif`
--

CREATE TABLE `usernotif` (
  `id` int(6) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `usrnotification` varchar(255) DEFAULT NULL,
  `timestmp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(6) UNSIGNED NOT NULL,
  `device` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `port` int(6) NOT NULL,
  `requesttime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `webseries`
--

CREATE TABLE `webseries` (
  `id` int(6) UNSIGNED NOT NULL,
  `webseriesname` varchar(150) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `webseries`
--

INSERT INTO `webseries` (`id`, `webseriesname`, `timestamp`) VALUES
(1, 'Rocket Boys', '2024-02-09 19:32:29');

-- --------------------------------------------------------

--
-- Table structure for table `ytchannels`
--

CREATE TABLE `ytchannels` (
  `id` int(6) UNSIGNED NOT NULL,
  `channelname` varchar(150) NOT NULL,
  `handle` varchar(150) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ytchannels`
--

INSERT INTO `ytchannels` (`id`, `channelname`, `handle`, `timestamp`) VALUES
(1, 'GetsetflySCIENCE', '@GetSetFly', '2024-02-09 19:32:46'),
(2, 'The Knowledge', '@TheKnowledge', '2024-02-09 19:32:46'),
(3, 'RE - research', '@REresearch', '2024-02-09 19:32:46'),
(4, 'Research Tv India', '@ResearchTvIndia', '2024-02-09 19:32:46'),
(5, 'Universe Adventure', '@UniverseAdventure', '2024-02-09 19:32:46'),
(6, 'Logical Science', '@VJFKIRAN', '2024-02-09 19:32:46'),
(7, 'Indian Scientist', '@Indianscientist137', '2024-02-09 19:32:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conferences`
--
ALTER TABLE `conferences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `magazines`
--
ALTER TABLE `magazines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newspapers`
--
ALTER TABLE `newspapers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `observatory`
--
ALTER TABLE `observatory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `researchers`
--
ALTER TABLE `researchers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `firstname` (`firstname`,`lastname`,`gender`,`dob`,`addr`,`contact`,`email`),
  ADD KEY `idx_lastname` (`lastname`),
  ADD KEY `idx_email` (`email`);

--
-- Indexes for table `researchpapers`
--
ALTER TABLE `researchpapers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_loggeduser` (`loggeduser`),
  ADD KEY `FK_email` (`email`);

--
-- Indexes for table `researchsites`
--
ALTER TABLE `researchsites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scientists`
--
ALTER TABLE `scientists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telescopeworkshop`
--
ALTER TABLE `telescopeworkshop`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `workshopname` (`workshopname`),
  ADD UNIQUE KEY `link` (`link`);

--
-- Indexes for table `usernotif`
--
ALTER TABLE `usernotif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `firstname` (`firstname`),
  ADD KEY `fk_usernotif_lastname` (`lastname`),
  ADD KEY `fk_usernotif_email` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webseries`
--
ALTER TABLE `webseries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ytchannels`
--
ALTER TABLE `ytchannels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `handle` (`handle`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `conferences`
--
ALTER TABLE `conferences`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `magazines`
--
ALTER TABLE `magazines`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `newspapers`
--
ALTER TABLE `newspapers`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `observatory`
--
ALTER TABLE `observatory`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `researchers`
--
ALTER TABLE `researchers`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `researchpapers`
--
ALTER TABLE `researchpapers`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `researchsites`
--
ALTER TABLE `researchsites`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `scientists`
--
ALTER TABLE `scientists`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `telescopeworkshop`
--
ALTER TABLE `telescopeworkshop`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `usernotif`
--
ALTER TABLE `usernotif`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=367;

--
-- AUTO_INCREMENT for table `webseries`
--
ALTER TABLE `webseries`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ytchannels`
--
ALTER TABLE `ytchannels`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `researchpapers`
--
ALTER TABLE `researchpapers`
  ADD CONSTRAINT `FK_email` FOREIGN KEY (`email`) REFERENCES `researchers` (`email`),
  ADD CONSTRAINT `FK_loggeduser` FOREIGN KEY (`loggeduser`) REFERENCES `researchers` (`firstname`);

--
-- Constraints for table `usernotif`
--
ALTER TABLE `usernotif`
  ADD CONSTRAINT `fk_usernotif_email` FOREIGN KEY (`email`) REFERENCES `researchers` (`email`),
  ADD CONSTRAINT `fk_usernotif_lastname` FOREIGN KEY (`lastname`) REFERENCES `researchers` (`lastname`),
  ADD CONSTRAINT `usernotif_ibfk_1` FOREIGN KEY (`firstname`) REFERENCES `researchers` (`firstname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
