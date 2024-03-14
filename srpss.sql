CREATE TABLE `awards` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `awardsname` varchar(100) NOT NULL,
  `timestmp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO awards VALUES ('1', 'India Science Award', '2024-02-17 23:48:18');
INSERT INTO awards VALUES ('2', 'Shanti Swarup Bhatnagar Prize for Science and Technology', '2024-02-17 23:48:58');
INSERT INTO awards VALUES ('3', 'G. D. Birla Award for Scientific Research', '2024-02-17 23:52:04');
INSERT INTO awards VALUES ('4', 'H. K. Firodia Awards', '2024-02-18 00:05:37');
INSERT INTO awards VALUES ('5', 'VASVIK Industrial Research Award', '2024-02-18 00:05:37');
INSERT INTO awards VALUES ('6', 'Om Prakash Bhasin Award', '2024-02-18 00:05:37');
INSERT INTO awards VALUES ('7', 'SASTRA-CNR Rao Award', '2024-02-18 00:05:37');
INSERT INTO awards VALUES ('8', 'National Bioscience Award for Career Development', '2024-02-18 00:05:37');
INSERT INTO awards VALUES ('9', 'SASTRA Ramanujan Prize', '2024-02-18 00:05:37');
INSERT INTO awards VALUES ('10', 'Aryabhata Award', '2024-02-18 00:05:37');
INSERT INTO awards VALUES ('11', 'Kalinga Prize', '2024-02-18 00:05:37');
INSERT INTO awards VALUES ('12', 'Infosys Prize', '2024-02-18 00:05:37');
INSERT INTO awards VALUES ('13', 'Vigyan Gaurav Award', '2024-02-18 00:05:37');
INSERT INTO awards VALUES ('14', 'Jamnalal Bajaj Award', '2024-02-18 00:05:37');
INSERT INTO awards VALUES ('15', 'Faculty Research Awards', '2024-02-18 00:05:37');
INSERT INTO awards VALUES ('16', 'Dr. B. C. Roy Award', '2024-02-18 00:05:37');
CREATE TABLE `chat` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `chatmsg` varchar(1000) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO chat VALUES ('3', 'Jimmy', 'Hello Everyone, this is Jimmy Jayant here. I am glad to be a part of this group chat. This is my first message.', '2023-09-10 14:57:48');
INSERT INTO chat VALUES ('4', 'Yash', 'Hello everyone, this is yash here. I am glad to be a part of this group chat. This is my first message here.', '2023-09-10 14:58:16');
INSERT INTO chat VALUES ('5', 'Jimmy', 'hello', '2023-09-10 20:14:39');
INSERT INTO chat VALUES ('6', 'Jimmy', 'Now it is great that the group chat feature is working properly.', '2023-09-10 22:07:30');
INSERT INTO chat VALUES ('7', 'admin', 'Hello this is SRPSS admin here, I am glad that you are enjoying this platform. Will bring more features very soon.', '2023-09-11 00:34:42');
INSERT INTO chat VALUES ('8', 'admin', 'Hello this is SRPSS admin here, I am glad that you are enjoying this platform. Will bring more features very soon.', '2023-09-11 00:39:43');
INSERT INTO chat VALUES ('9', 'Jimmy', 'So the group chat feature is being enhanced more and more to accommodate new features.', '2023-09-11 00:53:59');
INSERT INTO chat VALUES ('10', 'Jimmy', 'So the group chat feature is being enhanced more and more to accommodate new features.', '2023-09-11 00:54:45');
INSERT INTO chat VALUES ('11', 'admin', 'Hello Everyone, a custom error page has been added to the website.', '2023-09-21 11:22:58');
CREATE TABLE `conferences` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `conferencename` varchar(450) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO conferences VALUES ('1', 'International Conference on Inventive Material Science Applications (ICIMA)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('2', 'International Conference on Mechanical, Aerospace and Production Engineering (ICMAPE)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('3', 'International Conference on Educational Technology, Learning and Social Science (ICETLSS)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('4', 'International Conference on Environmental Science and Biotechnology (ICESB)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('5', 'International Conference on Food Technology, Agriculture and Fisheries (ICFTAF)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('6', 'International Conference on Medical and Health Sciences (ICMHS)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('7', 'International Conference on Recent Innovations in Computer Science, Engineering and Technology (ICRICSET)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('8', 'International Conference on Business Management and Humanities (ICBEMH)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('9', 'International Conference on Applied Science Mathematics and Statistics (ICASMS)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('10', 'International Conference on Industrial Engineering and Operations Management (ICIEOM)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('11', 'International Conference on Artificial Intelligence (ICAI)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('12', 'International Conference on Robotics and Automation (ICRA)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('13', 'International Conference on Teaching, Education and new learning Technologies (ICTENLT)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('14', 'International Conference on social science and humanities (ICSSH)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('15', 'International Conference on Physics (ICP)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('16', 'Global Conference on Renewable Energy and Climate Change (GCRECC)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('17', 'International Conference on Agricultural and Biological Sciences (ICABS)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('18', 'International Conference on Recent Advances in Engineering, Technology and Science (ICRAETS)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('19', 'International Conference on Business Management and Social Innovation (ICBMSI)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('20', 'International Conference on arts and humanities (ICAH)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('21', 'International Conference on Astronomy, Astrophysics, Space Science (ICAASS)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('22', 'International Conference on Mathematical, Physics, and Dynamics (ICMPD)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('23', 'International Conference on Big Data and Smart Computing (ICBDSC)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('24', 'International Research Conference on Arts, Commerce, and Business Management (IRCACBM)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('25', 'International Conference on Software Engineering and Computer Science (ICSECS)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('26', 'International Conference on Recent Developments in Social Science and Business Management (ICRDSSBM)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('27', 'International Conference on Recent Advances in Science, Technology & Engineering (ICRASTE)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('28', 'International Conference on Environment, Agriculture and Biotechnology (ICEABT)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('29', 'International Conference on Control System, power and electrical engineering (ICCSPEE)', '2024-02-10 00:54:22');
INSERT INTO conferences VALUES ('30', 'International Conference on Artificial Intelligence, Robots and Mechanical Engineering (ICAIRME)', '2024-02-10 00:54:22');
CREATE TABLE `feedback` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(150) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mess` varchar(1000) NOT NULL,
  `approved` int(1) DEFAULT 0,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO feedback VALUES ('2', 'JIMMY JAYANT', 'add more info to research sites table', '2147483647', 'jayantjimmy23@gmail.com', 'Please add more information to research sites table.', '-1', '2024-02-13 00:19:58');
INSERT INTO feedback VALUES ('7', 'nimmy', 'newspapers', '2147483647', 'nimmynishan19@gmail.com', 'Please add more information to newspapers section.', '0', '2024-02-10 00:55:03');
INSERT INTO feedback VALUES ('8', 'peter parker', 'culture', '2147483647', 'peterparker@gmail.com', 'Please add more info to culture section.', '1', '2024-02-13 00:19:49');
INSERT INTO feedback VALUES ('14', 'Jimmy Jayant', 'dhfghsfth', '2147483647', 'jayantjimmy49@gmail.com', 'zdhsdfhsdhsrh', '-1', '2024-02-17 22:49:43');
INSERT INTO feedback VALUES ('17', 'Jimmy Jayant', 'Research Papers Approval', '2147483647', 'jayantjimmy49@gmail.com', 'Please approve research papers as soon as possible.', '0', '2024-02-15 00:23:51');
CREATE TABLE `journals` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `journalname` varchar(150) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO journals VALUES ('1', 'American Indian and Alaska Native Mental Health Research', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('2', 'Annals of Indian Academy of Neurology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('3', 'Contributions to Indian Sociology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('4', 'Indian Chemical Engineer', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('5', 'Indian Drugs', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('6', 'Indian Economic and Social History Review', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('7', 'Indian Economic Review', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('8', 'Indian Geotechnical Journal', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('9', 'Indian Growth and Development Review', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('10', 'Indian Heart Journal', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('11', 'Indian Historical Review', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('12', 'Indian Journal of Agricultural Biochemistry', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('13', 'Indian Journal of Agricultural Economics', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('14', 'Indian Journal of Agricultural Research', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('15', 'Indian Journal of Agricultural Sciences', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('16', 'Indian Journal of Agronomy', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('17', 'Indian Journal of Anaesthesia', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('18', 'Indian Journal of Animal Research', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('19', 'Indian Journal of Animal Sciences', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('20', 'Indian Journal of Biochemistry and Biophysics', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('21', 'Indian Journal of Biotechnology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('22', 'Indian Journal of Cancer', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('23', 'Indian Journal of Chemical Technology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('24', 'Indian Journal of Chemistry – Section A Inorganic, Physical, Theoretical and Analytical Chemistry', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('25', 'Indian Journal of Chemistry – Section B Organic and Medicinal Chemistry', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('26', 'Indian Journal of Clinical Biochemistry', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('27', 'Indian Journal of Community Health', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('28', 'Indian Journal of Community Medicine', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('29', 'Indian Journal of Computer Science and Engineering', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('30', 'Indian Journal of Corporate Governance', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('31', 'Indian Journal of Critical Care Medicine', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('32', 'Indian Journal of Dental Research', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('33', 'Indian Journal of Dermatology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('34', 'Indian Journal of Dermatology, Venereology and Leprology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('35', 'Indian Journal of Economics and Development', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('36', 'Indian Journal of Endocrinology and Metabolism', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('37', 'Indian Journal of Engineering and Materials Sciences', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('38', 'Indian Journal of Entomology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('39', 'Indian Journal of Environmental Protection', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('40', 'Indian Journal of Fibre and Textile Research', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('41', 'Indian Journal of Finance', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('42', 'Indian Journal of Fisheries', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('43', 'Indian Journal of Forensic Medicine and Pathology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('44', 'Indian Journal of Gastroenterology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('45', 'Indian Journal of Gender Studies', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('46', 'Indian Journal of Genetics and Plant Breeding', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('47', 'Indian Journal of Geo-Marine Sciences', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('48', 'Indian Journal of Gynecologic Oncology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('49', 'Indian Journal of Hematology and Blood Transfusion', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('50', 'Indian Journal of Heterocyclic Chemistry', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('51', 'Indian Journal of Horticulture', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('52', 'Indian Journal of Human Development', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('53', 'Indian Journal of Labour Economics', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('54', 'Indian Journal of Leprosy', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('55', 'Indian Journal of Marketing', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('56', 'Indian Journal of Mathematics', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('57', 'Indian Journal of Medical and Paediatric Oncology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('58', 'Indian journal of medical ethics', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('59', 'Indian Journal of Medical Microbiology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('60', 'Indian Journal of Medical Research', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('61', 'Indian Journal of Medical Research, Supplement', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('62', 'Indian Journal of Microbiology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('63', 'Indian Journal of Natural Products and Resources', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('64', 'Indian Journal of Nematology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('65', 'Indian Journal of Nephrology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('66', 'Indian Journal of Nuclear Medicine', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('67', 'Indian Journal of Occupational and Environmental Medicine', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('68', 'Indian Journal of Ophthalmology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('69', 'Indian Journal of Orthopaedics', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('70', 'Indian Journal of Otolaryngology and Head and Neck Surgery', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('71', 'Indian Journal of Otology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('72', 'Indian Journal of Palliative Care', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('73', 'Indian Journal of Pathology and Microbiology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('74', 'Indian Journal of Pediatrics', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('75', 'Indian Journal of Pharmaceutical Education and Research', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('76', 'Indian Journal of Pharmaceutical Sciences', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('77', 'Indian Journal of Pharmacology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('78', 'Indian Journal of Physics', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('79', 'Indian Journal of Physiology and Pharmacology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('80', 'Indian Journal of Plastic Surgery', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('81', 'Indian Journal of Practical Pediatrics', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('82', 'Indian Journal of Psychiatry', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('83', 'Indian Journal of Psychological Medicine', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('84', 'Indian journal of public health', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('85', 'Indian Journal of Pure and Applied Mathematics', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('86', 'Indian Journal of Pure and Applied Physics', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('87', 'Indian Journal of Radio and Space Physics', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('88', 'Indian Journal of Radiology and Imaging', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('89', 'Indian Journal of Research in Homoeopathy', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('90', 'Indian Journal of Rheumatology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('91', 'Indian Journal of Sexually Transmitted Diseases and AIDS', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('92', 'Indian Journal of Small Ruminants', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('93', 'Indian Journal of Social Work', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('94', 'Indian Journal of Surgery', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('95', 'Indian Journal of Surgical Oncology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('96', 'Indian Journal of Thoracic and Cardiovascular Surgery', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('97', 'Indian Journal of Traditional Knowledge', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('98', 'Indian Journal of Transplantation', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('99', 'Indian Journal of Tuberculosis', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('100', 'Indian Journal of Urology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('101', 'Indian Law Review', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('102', 'Indian Pacing and Electrophysiology Journal', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('103', 'Indian Pediatrics', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('104', 'Indian Phytopathology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('105', 'Indian Spine Journal', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('106', 'Indian Veterinary Journal', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('107', 'Indiana', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('108', 'Indiana Journal of Global Legal Studies', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('109', 'Indiana Law Journal', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('110', 'Indiana University Mathematics Journal', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('111', 'International Journal of Anglo-Indian Studies', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('112', 'IPPTA: Quarterly Journal of Indian Pulp and Paper Technical Association', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('113', 'Journal of Indian Academy of Forensic Medicine', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('114', 'Journal of Indian Academy of Oral Medicine and Radiology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('115', 'Journal of Indian Association for Child and Adolescent Mental Health', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('116', 'Journal of Indian Association of Pediatric Surgeons', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('117', 'Journal of Indian Business Research', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('118', 'Journal of Indian Council of Philosophical Research', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('119', 'Journal of Indian Philosophy', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('120', 'Journal of Indian Prosthodontist Society', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('121', 'Journal of Indian Society of Periodontology', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('122', 'Journal of the Indian Academy of Wood Science', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('123', 'Journal of the Indian Chemical Society', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('124', 'Journal of the Indian Institute of Science', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('125', 'Journal of the Indian Mathematical Society', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('126', 'Journal of the Indian Medical Association', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('127', 'Journal of the Indian Ocean Region', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('128', 'Journal of the Indian Society of Pedodontics and Preventive Dentistry', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('129', 'Journal of the Indian Society of Remote Sensing', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('130', 'Journal of the Indian Society of Soil Science', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('131', 'Journal, Indian Academy of Clinical Medicine', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('132', 'New West Indian Guide/Nieuwe West-Indische Gids (NWIG)', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('133', 'Prabandhan: Indian Journal of Management', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('134', 'Proceedings of the Indian Academy of Sciences: Mathematical Sciences', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('135', 'Proceedings of the Indian National Science Academy', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('136', 'Sankhya: The Indian Journal of Statistics', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('137', 'SCMS Journal of Indian Management', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('138', 'Studies in American Indian Literatures', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('139', 'Studies in Indian Politics', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('140', 'Transactions of the Indian Ceramic Society', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('141', 'Transactions of the Indian Institute of Metals', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('142', 'Transactions of the Institute of Indian Geographers', '2024-02-10 00:58:41');
INSERT INTO journals VALUES ('143', 'West Indian Medical Journal', '2024-02-10 00:58:41');
CREATE TABLE `magazines` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `magazinename` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO magazines VALUES ('1', 'Resonance', 'Indian Academy of Sciences', '2024-02-10 00:59:23');
INSERT INTO magazines VALUES ('2', 'Current Science', 'Current Science Association', '2024-02-10 00:59:23');
INSERT INTO magazines VALUES ('3', 'Dream 2047', 'Vigyan Prasar', '2024-02-10 00:59:23');
INSERT INTO magazines VALUES ('4', 'Jnan o Bijnan', 'Bangiya Bijnan Parishad', '2024-02-10 00:59:23');
INSERT INTO magazines VALUES ('5', 'Sandarbh', 'Eklavya Foundation', '2024-02-10 00:59:23');
INSERT INTO magazines VALUES ('6', 'Science Reporter', 'National Institute of Science Communication and Information Resources', '2024-02-10 00:59:23');
INSERT INTO magazines VALUES ('7', 'Safari', 'Harshal Publications', '2024-02-10 00:59:23');
INSERT INTO magazines VALUES ('8', 'Bhawana', 'Bhavana Trust', '2024-02-10 00:59:23');
INSERT INTO magazines VALUES ('9', 'Yojna', 'Ministry of Information & Broadcasting', '2024-02-10 00:59:23');
INSERT INTO magazines VALUES ('10', 'Vigyan Pragati (Hindi)', 'NISCAIR', '2024-02-10 00:59:23');
INSERT INTO magazines VALUES ('11', 'Bulletin of Materials Science', 'Indian Academy of Sciences', '2024-02-10 00:59:23');
INSERT INTO magazines VALUES ('12', 'Science India Magazine', 'Vijnana Bharati', '2024-02-10 00:59:23');
INSERT INTO magazines VALUES ('13', 'Everyman\'s Science', 'The Indian Science Congress Association', '2024-02-10 00:59:23');
INSERT INTO magazines VALUES ('14', 'Scientific India', 'Scientific Planet Society', '2024-02-10 00:59:23');
INSERT INTO magazines VALUES ('15', 'Shaastra', 'Indian Educational Institution', '2024-02-10 00:59:23');
CREATE TABLE `movies` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `moviename` varchar(250) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO movies VALUES ('1', 'Rocketry', '2024-02-10 00:59:49');
INSERT INTO movies VALUES ('2', 'Hawaizaada', '2024-02-10 00:59:49');
INSERT INTO movies VALUES ('3', 'Mission Mangal', '2024-02-10 00:59:49');
INSERT INTO movies VALUES ('4', 'Parmanu', '2024-02-10 00:59:49');
INSERT INTO movies VALUES ('5', 'Ek Doctor Ki Maut', '2024-02-10 00:59:49');
INSERT INTO movies VALUES ('6', 'The Quantum Indians', '2024-02-10 00:59:49');
INSERT INTO movies VALUES ('7', 'Ramanujan', '2024-02-10 00:59:49');
INSERT INTO movies VALUES ('8', 'Shakuntala Devi', '2024-02-10 00:59:49');
CREATE TABLE `newspapers` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `newspapername` varchar(150) NOT NULL,
  `link` varchar(512) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO newspapers VALUES ('1', 'Economic Times', 'https://economictimes.indiatimes.com/', '2024-02-10 01:00:16');
INSERT INTO newspapers VALUES ('2', 'Hindu', 'https://www.thehindu.com/', '2024-02-10 01:00:16');
INSERT INTO newspapers VALUES ('3', 'Hindustan Times', 'https://www.hindustantimes.com/', '2024-02-10 01:00:16');
INSERT INTO newspapers VALUES ('4', 'Indian Express', 'https://indianexpress.com/', '2024-02-10 01:00:16');
INSERT INTO newspapers VALUES ('5', 'Times Of India', 'https://timesofindia.indiatimes.com/us', '2024-02-10 01:00:16');
CREATE TABLE `observatory` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `observatoryname` varchar(200) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO observatory VALUES ('1', 'Kodaikanal Solar Observatory Museum', '2024-02-18 00:39:41');
INSERT INTO observatory VALUES ('2', 'Gauribidanuru Radio Observatory', '2024-02-18 00:39:41');
INSERT INTO observatory VALUES ('3', 'Vainu Bappu Observatory', '2024-02-18 00:39:41');
INSERT INTO observatory VALUES ('4', 'Madras Observatory', '2024-02-18 00:39:41');
INSERT INTO observatory VALUES ('5', 'Girawali Observatory - IUCAA', '2024-02-18 00:39:41');
INSERT INTO observatory VALUES ('6', 'Allahabad Observatory', '2024-02-18 01:00:35');
INSERT INTO observatory VALUES ('7', 'Mount Abu InfraRed Observatory', '2024-02-18 01:00:35');
INSERT INTO observatory VALUES ('8', 'Devasthal Observatory', '2024-02-18 01:00:35');
INSERT INTO observatory VALUES ('9', 'Aryabhatta Research Institute of Observational Sciences', '2024-02-18 01:00:35');
INSERT INTO observatory VALUES ('10', 'Colaba Observatory', '2024-02-18 01:00:35');
INSERT INTO observatory VALUES ('11', 'Giant Metrewave Radio Telescope', '2024-02-18 01:00:35');
INSERT INTO observatory VALUES ('12', 'Indian Astronomical Observatory', '2024-02-18 01:00:35');
INSERT INTO observatory VALUES ('13', 'International Liquid Mirror Telescope', '2024-02-18 01:00:35');
INSERT INTO observatory VALUES ('14', 'Madhava Observatory', '2024-02-18 01:00:35');
INSERT INTO observatory VALUES ('15', 'Major Atmospheric Cerenkov Experiment Telescope', '2024-02-18 01:00:35');
INSERT INTO observatory VALUES ('16', 'Pachmarhi Telescope Array', '2024-02-18 01:00:35');
INSERT INTO observatory VALUES ('17', 'Trivandrum Observatory', '2024-02-18 01:00:35');
INSERT INTO observatory VALUES ('18', 'Udaipur Solar Observatory', '2024-02-18 01:00:35');
INSERT INTO observatory VALUES ('19', 'Ooty Radio Telescope', '2024-02-18 01:00:35');
CREATE TABLE `researchers` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
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
  `usersessionid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `firstname` (`firstname`,`lastname`,`gender`,`dob`,`addr`,`contact`,`email`),
  KEY `idx_lastname` (`lastname`),
  KEY `idx_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO researchers VALUES ('40', 'Jimmy', 'Jayant', 'Male', '1993-08-06', 'HOUSE NO - 225, NEAR ARYA SAMAJ MANDIR', '2147483647', 'jayantjimmy49@gmail.com', 'science', '', '', 'https://www.linkedin.com/in/jimmy-jayant-8b79b61a9/', '$2y$10$NJkmU67s3kQIuIOyAbq1uuMHlSvzDWUwJhMOsLLRtnYJvgVcTVKdS', '2024-03-15 01:24:27', 'aiks40b0eedln1i5ae2pueaufq');
INSERT INTO researchers VALUES ('41', 'admin', '.', 'Male', '1993-08-06', 'WARD NO-7, NEAR ARYA SAMAJ MANDIR, PUNJABI RAMLILA GROUND,SAMALKHA', '0', 'admin@srpss.com', 'science', '', '', '', '$2y$10$WatDb1D44/.MgDr9iVqsCuWryT5aF3o2GmQ5TG5hv8eLcDHg4xbhO', '2024-03-15 01:32:19', 'qbuo01rhiff2522ma6bffe1tuf');
INSERT INTO researchers VALUES ('42', 'Simmy', 'Prashant', 'Male', '1995-10-13', 'HOUSE NO - 225, NEAR ARYA SAMAJ MANDIR', '2147483647', 'simmyprashant01@gmail.com', 'science', '', '', '', '$2y$10$IC5PT7GDpOgVfJEaA7qATutTlHIBjL6sV2t7dlxZOWceUE3S25b3q', '2024-02-14 23:29:18', 'NULL');
INSERT INTO researchers VALUES ('43', 'Ramesh', 'Singh', 'Male', '1970-01-01', 'Rohtak', '2147483647', 'ramesh@gmail.com', 'science', '', '', '', '$2y$10$6t0LODG.aev9o1vL9I3JN.LsmH7PhJ.Mf5N3jExLVtcg.g/mpM1R6', '2024-02-14 23:29:18', 'NULL');
INSERT INTO researchers VALUES ('44', 'Puneet', 'Kumar', 'Male', '2000-01-01', 'Samalkha', '2147483647', 'puneetkumar@yahoo.com', 'mathematics', '', '', '', '$2y$10$ncKLrJ2NjaAy4ldlgceCCeEiTxJHt7C4KVGyqVIet3KisDdZP2SXW', '2024-02-14 23:29:18', 'NULL');
INSERT INTO researchers VALUES ('45', 'Yash', 'Sharma', 'Male', '2010-02-01', 'Panipat', '2147483647', 'yashsharma02@outlook.com', 'engineering', '', '', '', '$2y$10$7/wrqMJKGxBwv6x6N6OQyuWZjDjE2CytDG61qO0zg3KuGvsRGZkTu', '2024-02-14 23:29:18', 'NULL');
INSERT INTO researchers VALUES ('48', 'Avneet', 'Kaur', 'Female', '2013-01-01', 'Ambala', '2147483647', 'avneetkaur.01@gmail.com', 'mathematics', '', '', '', '$2y$10$41cXOx/Oh9hfuz29rIHcnuJIgZiRSQBt3OHYTJuQkfizJ56jNS.eS', '2024-02-14 23:29:18', 'NULL');
INSERT INTO researchers VALUES ('49', 'Prashant', 'Sharma', 'Male', '2012-02-01', 'Karnal', '2147483647', 'prashant22@gmail.com', 'engineering', '', '', '', '$2y$10$nzMzV1qVCPFVOd7/uF7K6ekQeb7m8EFqhkvcMwUNNTd/YtqQ.CZWu', '2024-02-14 23:29:18', 'NULL');
INSERT INTO researchers VALUES ('50', 'Gaurav', 'Bhalla', 'Male', '1999-03-01', 'Ram Nagar, Karnal', '2147483647', 'gauravbhalla@gmail.com', 'engineering', '', '', '', '$2y$10$Tt/jjUwM5ANz4Y4IzUtYp.5P6RmceznrplLmhjv8NsleW5ABabv7O', '2024-02-14 23:29:18', 'NULL');
INSERT INTO researchers VALUES ('51', 'Sanjeev', 'Verma', 'Male', '1985-03-02', 'Samalkha', '2147483647', 'sanjee.verma@gmail.com', 'engineering', '', '', '', '$2y$10$Jp1SrtWIvXNaaAnnsRVEGu/BbibTexanCUCRGtdTcGjhvaBZjCwIi', '2024-02-14 23:29:18', 'NULL');
INSERT INTO researchers VALUES ('52', 'Manoj', 'Kumar', 'Male', '1980-01-01', 'Chulkana, Samalkha', '2147483647', 'manoj@gmail.com', 'engineering', '', '', '', '$2y$10$HtwI2.t4/0RRXqm/X2c6MuhRQdTyZuVGfXSUtMKaUomzXxrkTw20m', '2024-02-14 23:29:18', 'NULL');
INSERT INTO researchers VALUES ('53', 'Ashu', 'Kumar', 'Male', '1995-01-01', 'Samalkha', '2147483647', 'ashu@gmail.com', 'engineering', '', '', '', '$2y$10$28l7c2YFE6U5xHzWoTtAd.RT3mHQtTR4G5ONkuNyGSEuEPxB46Fvy', '2024-02-14 23:29:18', 'NULL');
INSERT INTO researchers VALUES ('54', 'Armaan', 'Malik', 'Male', '2015-01-01', 'Model Town, Panipat', '2147483647', 'armaanmalik11@gmail.com', 'science', '', '', '', '$2y$10$5dWR2NOPGTurmhbTQsEnBeQ.hd.AC43f9MUAjGGAKaXpP6JS2nSq6', '2024-02-14 23:29:18', 'NULL');
INSERT INTO researchers VALUES ('55', 'Suresh', 'Kumar', 'Male', '2000-01-01', 'Pitampura, New Delhi', '2147483647', 'sureshkumar@gmail.com', 'science', '', '', '', '$2y$10$x8PkBkdqQbDDBQNCSUN0G.oGN8ApL1DpNWpvJ4ryocdBCgWpS9c6S', '2024-02-14 16:27:41', 'NULL');
CREATE TABLE `researchpapers` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `loggeduser` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `category` varchar(150) NOT NULL,
  `topic` varchar(300) NOT NULL,
  `paper` varchar(500) NOT NULL,
  `approved` int(6) DEFAULT 0,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `FK_loggeduser` (`loggeduser`),
  KEY `FK_email` (`email`),
  CONSTRAINT `FK_email` FOREIGN KEY (`email`) REFERENCES `researchers` (`email`),
  CONSTRAINT `FK_loggeduser` FOREIGN KEY (`loggeduser`) REFERENCES `researchers` (`firstname`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO researchpapers VALUES ('3', 'Jimmy', 'jayantjimmy49@gmail.com', 'science', 'Quantum Physics', 'waves_quantum.pdf', '0', '2024-02-11 16:08:37');
INSERT INTO researchpapers VALUES ('4', 'Yash', 'yashsharma02@outlook.com', 'science', 'Relativity', 'relativity.pdf', '0', '2024-02-11 16:09:20');
CREATE TABLE `researchsites` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `sitename` varchar(100) NOT NULL,
  `headquarter` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO researchsites VALUES ('1', 'Indian Agriculture Research Institute', 'New delhi', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('2', 'Central Rice Research Institute', 'Cuttack', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('3', 'Central Sugarcane Research Institute', 'Coimbatore', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('4', 'Central Potato Research Institute', 'Shimla', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('5', 'Central Tobacco Research Institute', 'Rajamundry', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('6', 'Central Road Research Institute', 'New delhi', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('7', 'National sugar Research Institute', 'Kanpur', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('8', 'Indian Lac Research Institute', 'Ranchi', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('9', 'National Dairy Research Institute', 'Karnal (Haryana)', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('10', 'Central Fuel Research Institute', 'Dhanbad', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('11', 'Central Leather Research Institute', 'Chennai', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('12', 'Central Mining Research Institute', 'Dhanbad', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('13', 'Central Drug Research Institute', 'Lucknow', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('14', 'Indian Meteorological Observatory', 'Pune & Delhi', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('15', 'Raman Research Institute', 'Bangalore', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('16', 'Central Scientific Industrial Organsation', 'Chandigarh', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('17', 'Central Salt and Marine Chemical Research Institute', 'Bhavnagar', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('18', 'Archeological Survey of India', 'Kolkata', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('19', 'Central Jute Technological Research Institute', 'Kolkata', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('20', 'Central Coconut Research Institute', 'Kasergod, Kerala', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('21', 'Textile Research Institute', 'Ahmadabad', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('22', 'All Indian Institute of Medical Science', 'New Delhi', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('23', 'National Aeronautical Laboratory', 'Bangalore', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('24', 'National Institute of Oceanography', 'Panaji', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('25', 'National Geophysics Research Institute', 'Hyderabad', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('26', 'Indian Institute of Petroleum', 'Dehradun', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('27', 'Central Building Research Institute', 'Roorkee', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('28', 'Tata Institute of Fundamental Research', 'Mumbai', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('29', 'High Altitude Research Laboratory', 'Gulmarg', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('30', 'National Botanical Research Institute', 'Lucknow', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('31', 'Central Food Technological Research Institute', 'Mysore', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('32', 'Central Glass and Ceramic Research Institute', 'Kolkata', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('33', 'National environmental engineering research institute', 'Nagpur', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('34', 'Central Electro Chemical Research Institute', 'Karaikudi (Tamil Nadu)', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('35', 'Indian Institute of Chemical Biology', 'Kolkata', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('36', 'Industrial Toxicology Research Centre', 'Lucknow', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('37', 'Central Mechanical Engineering Research Institute', 'Durgapur', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('38', 'Centre for Cellular and Molecular Biology', 'Hyderabad', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('39', 'Vikram Sarabhai Space Centre', 'Thiruvananthapuram', '2024-02-10 01:01:36');
INSERT INTO researchsites VALUES ('40', 'Uranium Corporation of India', 'Jadugoda', '2024-02-10 01:01:36');
CREATE TABLE `scientists` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `scientistname` varchar(250) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO scientists VALUES ('1', 'C.V. Raman', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('2', 'Meghnad Saha', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('3', 'Homi J. Bhabha', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('4', 'A.P.J. Abdul Kalam', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('5', 'Srinivasa Ramanujan', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('6', 'Satyendra Nath Bose', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('7', 'Jagadish Chandra Bose', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('8', 'Har Gobind Khorana', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('9', 'Vikram Sarabhai', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('10', 'Subrahmanyan Chandrasekhar', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('11', 'Prasanta Chandra Mahalanobis', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('12', 'Salim Ali', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('13', 'Birbal Sahni', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('14', 'Venkatraman Radhakrishnan', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('15', 'Asima Chatterjee', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('16', 'Mokshagundam Visvesvaraya', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('17', 'Prafulla Chandra Ray', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('18', 'Radha Balakrishnan', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('19', 'M.S. Swaminathan', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('20', 'Ashoke Sen', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('21', 'Ambarish Ghosh', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('22', 'Archana Bhattacharyya', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('23', 'Amar Gupta', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('24', 'Amal Kumar Raychaudhuri', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('25', 'Animesh Chakravorty', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('26', 'Ajoy Ghatak', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('27', 'Amitava Raychaudhuri', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('28', 'Anil Kakodkar', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('29', 'Aditi Pant', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('30', 'Amartya Sen', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('31', 'G.N. Ramachandran', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('32', 'Abhik Ghosh', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('33', 'Asoke Nath Mitra', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('34', 'Janaki Ammal', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('35', 'A. Sivathanu Pillai', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('36', 'A.S. Kiran Kumar', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('37', 'Abhay Ashtekar', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('38', 'A.P. Balachandran', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('39', 'Arun K. Pati', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('40', 'A.S. Rao', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('41', 'Anna Mani', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('42', 'Agnikumar G. Vedeshwar', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('43', 'Gautam Radhakrishna Desiraju', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('44', 'Kedareswar Banerjee', '2024-02-10 01:02:03');
INSERT INTO scientists VALUES ('45', 'Manjula Reddy', '2024-02-10 01:02:03');
CREATE TABLE `telescopeworkshop` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `workshopname` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `workshopname` (`workshopname`),
  UNIQUE KEY `link` (`link`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO telescopeworkshop VALUES ('1', 'Vigyan Prasar', 'https://vigyanprasar.gov.in/workshop-on-astronomical-telescope-making/');
INSERT INTO telescopeworkshop VALUES ('2', 'Nehru Centre Mumbai', 'https://www.nehrucentremumbai.in/');
INSERT INTO telescopeworkshop VALUES ('3', 'Association of Bangalore Amateur Astronomers', 'https://abaaonline.blogspot.com/');
INSERT INTO telescopeworkshop VALUES ('4', 'CESSI', 'http://www.cessi.in/tmw/');
INSERT INTO telescopeworkshop VALUES ('5', 'IUCAA', 'https://scipop.iucaa.in/Amateurs/telemaking.html');
INSERT INTO telescopeworkshop VALUES ('6', 'Indian Centre for Space Physics', 'https://csp.res.in/index.php?name=VnR4TzhWS1k4SlA2cE4ralRFaGE5dz09OjoxMjM0NTY3ODkxMjM0NTY3');
INSERT INTO telescopeworkshop VALUES ('7', 'AXSX', 'https://axsx.in/telescope-making/');
INSERT INTO telescopeworkshop VALUES ('8', 'Ecoskool Astronomy', 'https://ecoskoolastronomy.com/workshop/');
INSERT INTO telescopeworkshop VALUES ('9', 'Skywatchers India', 'http://www.skywatchersindia.com/workshops.html');
INSERT INTO telescopeworkshop VALUES ('10', 'IIT Kanpur', 'https://ifacet.iitk.ac.in/product/make-your-own-telescope/');
INSERT INTO telescopeworkshop VALUES ('11', 'Unstop', 'https://unstop.com/workshops-webinars/refractive-telescope-making-workshop-brahmand-tesseract-70-pandit-deendayal-energy-university-gandhinagar-274646');
INSERT INTO telescopeworkshop VALUES ('12', 'Chinmaya Vidyalaya', 'https://blog.openspacefoundation.in/telescope-construction-workshop-chinmaya-vidyalaya-nagapattinam/');
INSERT INTO telescopeworkshop VALUES ('13', 'Astron', 'https://astron-soc.in/asi2019/workshop2');
INSERT INTO telescopeworkshop VALUES ('14', 'AICASE', 'https://aicase.in/telescope-training/');
INSERT INTO telescopeworkshop VALUES ('15', 'Aperture Telescope', 'https://aperturetelescopes.com/contact/');
CREATE TABLE `usernotif` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `usrnotification` varchar(255) DEFAULT NULL,
  `timestmp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `firstname` (`firstname`),
  KEY `fk_usernotif_lastname` (`lastname`),
  KEY `fk_usernotif_email` (`email`),
  CONSTRAINT `fk_usernotif_email` FOREIGN KEY (`email`) REFERENCES `researchers` (`email`),
  CONSTRAINT `fk_usernotif_lastname` FOREIGN KEY (`lastname`) REFERENCES `researchers` (`lastname`),
  CONSTRAINT `usernotif_ibfk_1` FOREIGN KEY (`firstname`) REFERENCES `researchers` (`firstname`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO usernotif VALUES ('43', 'Jimmy', 'Jayant', 'jayantjimmy49@gmail.com', 'cjxfgjxfgjxfg', '2024-02-13 16:22:37');
INSERT INTO usernotif VALUES ('44', 'Armaan', 'Malik', 'armaanmalik11@gmail.com', 'The admin is sending notification to all users.', '2024-02-13 16:23:15');
INSERT INTO usernotif VALUES ('45', 'Ashu', 'Kumar', 'ashu@gmail.com', 'The admin is sending notification to all users.', '2024-02-13 16:23:15');
INSERT INTO usernotif VALUES ('46', 'Avneet', 'Kaur', 'avneetkaur.01@gmail.com', 'The admin is sending notification to all users.', '2024-02-13 16:23:15');
INSERT INTO usernotif VALUES ('47', 'Gaurav', 'Bhalla', 'gauravbhalla@gmail.com', 'The admin is sending notification to all users.', '2024-02-13 16:23:15');
INSERT INTO usernotif VALUES ('48', 'Jimmy', 'Jayant', 'jayantjimmy49@gmail.com', 'The admin is sending notification to all users.', '2024-02-13 16:23:15');
INSERT INTO usernotif VALUES ('49', 'Manoj', 'Kumar', 'manoj@gmail.com', 'The admin is sending notification to all users.', '2024-02-13 16:23:15');
INSERT INTO usernotif VALUES ('50', 'Prashant', 'Sharma', 'prashant22@gmail.com', 'The admin is sending notification to all users.', '2024-02-13 16:23:15');
INSERT INTO usernotif VALUES ('51', 'Puneet', 'Kumar', 'puneetkumar@yahoo.com', 'The admin is sending notification to all users.', '2024-02-13 16:23:15');
INSERT INTO usernotif VALUES ('52', 'Ramesh', 'Singh', 'ramesh@gmail.com', 'The admin is sending notification to all users.', '2024-02-13 16:23:15');
INSERT INTO usernotif VALUES ('53', 'Sanjeev', 'Verma', 'sanjee.verma@gmail.com', 'The admin is sending notification to all users.', '2024-02-13 16:23:15');
INSERT INTO usernotif VALUES ('54', 'Simmy', 'Prashant', 'simmyprashant01@gmail.com', 'The admin is sending notification to all users.', '2024-02-13 16:23:15');
INSERT INTO usernotif VALUES ('55', 'Yash', 'Sharma', 'yashsharma02@outlook.com', 'The admin is sending notification to all users.', '2024-02-13 16:23:15');
CREATE TABLE `webseries` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `webseriesname` varchar(150) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO webseries VALUES ('1', 'Rocket Boys', '2024-02-10 01:02:29');
CREATE TABLE `ytchannels` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `channelname` varchar(150) NOT NULL,
  `handle` varchar(150) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `handle` (`handle`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO ytchannels VALUES ('1', 'GetsetflySCIENCE', '@GetSetFly', '2024-02-10 01:02:46');
INSERT INTO ytchannels VALUES ('2', 'The Knowledge', '@TheKnowledge', '2024-02-10 01:02:46');
INSERT INTO ytchannels VALUES ('3', 'RE - research', '@REresearch', '2024-02-10 01:02:46');
INSERT INTO ytchannels VALUES ('4', 'Research Tv India', '@ResearchTvIndia', '2024-02-10 01:02:46');
INSERT INTO ytchannels VALUES ('5', 'Universe Adventure', '@UniverseAdventure', '2024-02-10 01:02:46');
INSERT INTO ytchannels VALUES ('6', 'Logical Science', '@VJFKIRAN', '2024-02-10 01:02:46');
INSERT INTO ytchannels VALUES ('7', 'Indian Scientist', '@Indianscientist137', '2024-02-10 01:02:46');
