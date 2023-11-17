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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO conferences VALUES ('1', 'International Conference on Inventive Material Science Applications (ICIMA)');
INSERT INTO conferences VALUES ('2', 'International Conference on Mechanical, Aerospace and Production Engineering (ICMAPE)');
INSERT INTO conferences VALUES ('3', 'International Conference on Educational Technology, Learning and Social Science (ICETLSS)');
INSERT INTO conferences VALUES ('4', 'International Conference on Environmental Science and Biotechnology (ICESB)');
INSERT INTO conferences VALUES ('5', 'International Conference on Food Technology, Agriculture and Fisheries (ICFTAF)');
INSERT INTO conferences VALUES ('6', 'International Conference on Medical and Health Sciences (ICMHS)');
INSERT INTO conferences VALUES ('7', 'International Conference on Recent Innovations in Computer Science, Engineering and Technology (ICRICSET)');
INSERT INTO conferences VALUES ('8', 'International Conference on Business Management and Humanities (ICBEMH)');
INSERT INTO conferences VALUES ('9', 'International Conference on Applied Science Mathematics and Statistics (ICASMS)');
INSERT INTO conferences VALUES ('10', 'International Conference on Industrial Engineering and Operations Management (ICIEOM)');
INSERT INTO conferences VALUES ('11', 'International Conference on Artificial Intelligence (ICAI)');
INSERT INTO conferences VALUES ('12', 'International Conference on Robotics and Automation (ICRA)');
INSERT INTO conferences VALUES ('13', 'International Conference on Teaching, Education and new learning Technologies (ICTENLT)');
INSERT INTO conferences VALUES ('14', 'International Conference on social science and humanities (ICSSH)');
INSERT INTO conferences VALUES ('15', 'International Conference on Physics (ICP)');
INSERT INTO conferences VALUES ('16', 'Global Conference on Renewable Energy and Climate Change (GCRECC)');
INSERT INTO conferences VALUES ('17', 'International Conference on Agricultural and Biological Sciences (ICABS)');
INSERT INTO conferences VALUES ('18', 'International Conference on Recent Advances in Engineering, Technology and Science (ICRAETS)');
INSERT INTO conferences VALUES ('19', 'International Conference on Business Management and Social Innovation (ICBMSI)');
INSERT INTO conferences VALUES ('20', 'International Conference on arts and humanities (ICAH)');
INSERT INTO conferences VALUES ('21', 'International Conference on Astronomy, Astrophysics, Space Science (ICAASS)');
INSERT INTO conferences VALUES ('22', 'International Conference on Mathematical, Physics, and Dynamics (ICMPD)');
INSERT INTO conferences VALUES ('23', 'International Conference on Big Data and Smart Computing (ICBDSC)');
INSERT INTO conferences VALUES ('24', 'International Research Conference on Arts, Commerce, and Business Management (IRCACBM)');
INSERT INTO conferences VALUES ('25', 'International Conference on Software Engineering and Computer Science (ICSECS)');
INSERT INTO conferences VALUES ('26', 'International Conference on Recent Developments in Social Science and Business Management (ICRDSSBM)');
INSERT INTO conferences VALUES ('27', 'International Conference on Recent Advances in Science, Technology & Engineering (ICRASTE)');
INSERT INTO conferences VALUES ('28', 'International Conference on Environment, Agriculture and Biotechnology (ICEABT)');
INSERT INTO conferences VALUES ('29', 'International Conference on Control System, power and electrical engineering (ICCSPEE)');
INSERT INTO conferences VALUES ('30', 'International Conference on Artificial Intelligence, Robots and Mechanical Engineering (ICAIRME)');
CREATE TABLE `feedback` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(150) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mess` varchar(1000) NOT NULL,
  `approved` int(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fname` (`fname`,`contact`,`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO feedback VALUES ('2', 'JIMMY JAYANT', 'add more info to research sites table', '2147483647', 'jayantjimmy23@gmail.com', 'Please add more information to research sites table.', '0');
INSERT INTO feedback VALUES ('5', 'JOHN DOE', 'movie database', '2147483647', 'jayantjimmy49@gmail.com', 'Please add more information to movie database.', '0');
INSERT INTO feedback VALUES ('7', 'nimmy', 'newspapers', '2147483647', 'nimmynishan19@gmail.com', 'Please add more information to newspapers section.', '0');
INSERT INTO feedback VALUES ('8', 'peter parker', 'culture', '2147483647', 'peterparker@gmail.com', 'Please add more info to culture section.', '0');
CREATE TABLE `journals` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `journalname` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO journals VALUES ('1', 'American Indian and Alaska Native Mental Health Research');
INSERT INTO journals VALUES ('2', 'Annals of Indian Academy of Neurology');
INSERT INTO journals VALUES ('3', 'Contributions to Indian Sociology');
INSERT INTO journals VALUES ('4', 'Indian Chemical Engineer');
INSERT INTO journals VALUES ('5', 'Indian Drugs');
INSERT INTO journals VALUES ('6', 'Indian Economic and Social History Review');
INSERT INTO journals VALUES ('7', 'Indian Economic Review');
INSERT INTO journals VALUES ('8', 'Indian Geotechnical Journal');
INSERT INTO journals VALUES ('9', 'Indian Growth and Development Review');
INSERT INTO journals VALUES ('10', 'Indian Heart Journal');
INSERT INTO journals VALUES ('11', 'Indian Historical Review');
INSERT INTO journals VALUES ('12', 'Indian Journal of Agricultural Biochemistry');
INSERT INTO journals VALUES ('13', 'Indian Journal of Agricultural Economics');
INSERT INTO journals VALUES ('14', 'Indian Journal of Agricultural Research');
INSERT INTO journals VALUES ('15', 'Indian Journal of Agricultural Sciences');
INSERT INTO journals VALUES ('16', 'Indian Journal of Agronomy');
INSERT INTO journals VALUES ('17', 'Indian Journal of Anaesthesia');
INSERT INTO journals VALUES ('18', 'Indian Journal of Animal Research');
INSERT INTO journals VALUES ('19', 'Indian Journal of Animal Sciences');
INSERT INTO journals VALUES ('20', 'Indian Journal of Biochemistry and Biophysics');
INSERT INTO journals VALUES ('21', 'Indian Journal of Biotechnology');
INSERT INTO journals VALUES ('22', 'Indian Journal of Cancer');
INSERT INTO journals VALUES ('23', 'Indian Journal of Chemical Technology');
INSERT INTO journals VALUES ('24', 'Indian Journal of Chemistry – Section A Inorganic, Physical, Theoretical and Analytical Chemistry');
INSERT INTO journals VALUES ('25', 'Indian Journal of Chemistry – Section B Organic and Medicinal Chemistry');
INSERT INTO journals VALUES ('26', 'Indian Journal of Clinical Biochemistry');
INSERT INTO journals VALUES ('27', 'Indian Journal of Community Health');
INSERT INTO journals VALUES ('28', 'Indian Journal of Community Medicine');
INSERT INTO journals VALUES ('29', 'Indian Journal of Computer Science and Engineering');
INSERT INTO journals VALUES ('30', 'Indian Journal of Corporate Governance');
INSERT INTO journals VALUES ('31', 'Indian Journal of Critical Care Medicine');
INSERT INTO journals VALUES ('32', 'Indian Journal of Dental Research');
INSERT INTO journals VALUES ('33', 'Indian Journal of Dermatology');
INSERT INTO journals VALUES ('34', 'Indian Journal of Dermatology, Venereology and Leprology');
INSERT INTO journals VALUES ('35', 'Indian Journal of Economics and Development');
INSERT INTO journals VALUES ('36', 'Indian Journal of Endocrinology and Metabolism');
INSERT INTO journals VALUES ('37', 'Indian Journal of Engineering and Materials Sciences');
INSERT INTO journals VALUES ('38', 'Indian Journal of Entomology');
INSERT INTO journals VALUES ('39', 'Indian Journal of Environmental Protection');
INSERT INTO journals VALUES ('40', 'Indian Journal of Fibre and Textile Research');
INSERT INTO journals VALUES ('41', 'Indian Journal of Finance');
INSERT INTO journals VALUES ('42', 'Indian Journal of Fisheries');
INSERT INTO journals VALUES ('43', 'Indian Journal of Forensic Medicine and Pathology');
INSERT INTO journals VALUES ('44', 'Indian Journal of Gastroenterology');
INSERT INTO journals VALUES ('45', 'Indian Journal of Gender Studies');
INSERT INTO journals VALUES ('46', 'Indian Journal of Genetics and Plant Breeding');
INSERT INTO journals VALUES ('47', 'Indian Journal of Geo-Marine Sciences');
INSERT INTO journals VALUES ('48', 'Indian Journal of Gynecologic Oncology');
INSERT INTO journals VALUES ('49', 'Indian Journal of Hematology and Blood Transfusion');
INSERT INTO journals VALUES ('50', 'Indian Journal of Heterocyclic Chemistry');
INSERT INTO journals VALUES ('51', 'Indian Journal of Horticulture');
INSERT INTO journals VALUES ('52', 'Indian Journal of Human Development');
INSERT INTO journals VALUES ('53', 'Indian Journal of Labour Economics');
INSERT INTO journals VALUES ('54', 'Indian Journal of Leprosy');
INSERT INTO journals VALUES ('55', 'Indian Journal of Marketing');
INSERT INTO journals VALUES ('56', 'Indian Journal of Mathematics');
INSERT INTO journals VALUES ('57', 'Indian Journal of Medical and Paediatric Oncology');
INSERT INTO journals VALUES ('58', 'Indian journal of medical ethics');
INSERT INTO journals VALUES ('59', 'Indian Journal of Medical Microbiology');
INSERT INTO journals VALUES ('60', 'Indian Journal of Medical Research');
INSERT INTO journals VALUES ('61', 'Indian Journal of Medical Research, Supplement');
INSERT INTO journals VALUES ('62', 'Indian Journal of Microbiology');
INSERT INTO journals VALUES ('63', 'Indian Journal of Natural Products and Resources');
INSERT INTO journals VALUES ('64', 'Indian Journal of Nematology');
INSERT INTO journals VALUES ('65', 'Indian Journal of Nephrology');
INSERT INTO journals VALUES ('66', 'Indian Journal of Nuclear Medicine');
INSERT INTO journals VALUES ('67', 'Indian Journal of Occupational and Environmental Medicine');
INSERT INTO journals VALUES ('68', 'Indian Journal of Ophthalmology');
INSERT INTO journals VALUES ('69', 'Indian Journal of Orthopaedics');
INSERT INTO journals VALUES ('70', 'Indian Journal of Otolaryngology and Head and Neck Surgery');
INSERT INTO journals VALUES ('71', 'Indian Journal of Otology');
INSERT INTO journals VALUES ('72', 'Indian Journal of Palliative Care');
INSERT INTO journals VALUES ('73', 'Indian Journal of Pathology and Microbiology');
INSERT INTO journals VALUES ('74', 'Indian Journal of Pediatrics');
INSERT INTO journals VALUES ('75', 'Indian Journal of Pharmaceutical Education and Research');
INSERT INTO journals VALUES ('76', 'Indian Journal of Pharmaceutical Sciences');
INSERT INTO journals VALUES ('77', 'Indian Journal of Pharmacology');
INSERT INTO journals VALUES ('78', 'Indian Journal of Physics');
INSERT INTO journals VALUES ('79', 'Indian Journal of Physiology and Pharmacology');
INSERT INTO journals VALUES ('80', 'Indian Journal of Plastic Surgery');
INSERT INTO journals VALUES ('81', 'Indian Journal of Practical Pediatrics');
INSERT INTO journals VALUES ('82', 'Indian Journal of Psychiatry');
INSERT INTO journals VALUES ('83', 'Indian Journal of Psychological Medicine');
INSERT INTO journals VALUES ('84', 'Indian journal of public health');
INSERT INTO journals VALUES ('85', 'Indian Journal of Pure and Applied Mathematics');
INSERT INTO journals VALUES ('86', 'Indian Journal of Pure and Applied Physics');
INSERT INTO journals VALUES ('87', 'Indian Journal of Radio and Space Physics');
INSERT INTO journals VALUES ('88', 'Indian Journal of Radiology and Imaging');
INSERT INTO journals VALUES ('89', 'Indian Journal of Research in Homoeopathy');
INSERT INTO journals VALUES ('90', 'Indian Journal of Rheumatology');
INSERT INTO journals VALUES ('91', 'Indian Journal of Sexually Transmitted Diseases and AIDS');
INSERT INTO journals VALUES ('92', 'Indian Journal of Small Ruminants');
INSERT INTO journals VALUES ('93', 'Indian Journal of Social Work');
INSERT INTO journals VALUES ('94', 'Indian Journal of Surgery');
INSERT INTO journals VALUES ('95', 'Indian Journal of Surgical Oncology');
INSERT INTO journals VALUES ('96', 'Indian Journal of Thoracic and Cardiovascular Surgery');
INSERT INTO journals VALUES ('97', 'Indian Journal of Traditional Knowledge');
INSERT INTO journals VALUES ('98', 'Indian Journal of Transplantation');
INSERT INTO journals VALUES ('99', 'Indian Journal of Tuberculosis');
INSERT INTO journals VALUES ('100', 'Indian Journal of Urology');
INSERT INTO journals VALUES ('101', 'Indian Law Review');
INSERT INTO journals VALUES ('102', 'Indian Pacing and Electrophysiology Journal');
INSERT INTO journals VALUES ('103', 'Indian Pediatrics');
INSERT INTO journals VALUES ('104', 'Indian Phytopathology');
INSERT INTO journals VALUES ('105', 'Indian Spine Journal');
INSERT INTO journals VALUES ('106', 'Indian Veterinary Journal');
INSERT INTO journals VALUES ('107', 'Indiana');
INSERT INTO journals VALUES ('108', 'Indiana Journal of Global Legal Studies');
INSERT INTO journals VALUES ('109', 'Indiana Law Journal');
INSERT INTO journals VALUES ('110', 'Indiana University Mathematics Journal');
INSERT INTO journals VALUES ('111', 'International Journal of Anglo-Indian Studies');
INSERT INTO journals VALUES ('112', 'IPPTA: Quarterly Journal of Indian Pulp and Paper Technical Association');
INSERT INTO journals VALUES ('113', 'Journal of Indian Academy of Forensic Medicine');
INSERT INTO journals VALUES ('114', 'Journal of Indian Academy of Oral Medicine and Radiology');
INSERT INTO journals VALUES ('115', 'Journal of Indian Association for Child and Adolescent Mental Health');
INSERT INTO journals VALUES ('116', 'Journal of Indian Association of Pediatric Surgeons');
INSERT INTO journals VALUES ('117', 'Journal of Indian Business Research');
INSERT INTO journals VALUES ('118', 'Journal of Indian Council of Philosophical Research');
INSERT INTO journals VALUES ('119', 'Journal of Indian Philosophy');
INSERT INTO journals VALUES ('120', 'Journal of Indian Prosthodontist Society');
INSERT INTO journals VALUES ('121', 'Journal of Indian Society of Periodontology');
INSERT INTO journals VALUES ('122', 'Journal of the Indian Academy of Wood Science');
INSERT INTO journals VALUES ('123', 'Journal of the Indian Chemical Society');
INSERT INTO journals VALUES ('124', 'Journal of the Indian Institute of Science');
INSERT INTO journals VALUES ('125', 'Journal of the Indian Mathematical Society');
INSERT INTO journals VALUES ('126', 'Journal of the Indian Medical Association');
INSERT INTO journals VALUES ('127', 'Journal of the Indian Ocean Region');
INSERT INTO journals VALUES ('128', 'Journal of the Indian Society of Pedodontics and Preventive Dentistry');
INSERT INTO journals VALUES ('129', 'Journal of the Indian Society of Remote Sensing');
INSERT INTO journals VALUES ('130', 'Journal of the Indian Society of Soil Science');
INSERT INTO journals VALUES ('131', 'Journal, Indian Academy of Clinical Medicine');
INSERT INTO journals VALUES ('132', 'New West Indian Guide/Nieuwe West-Indische Gids (NWIG)');
INSERT INTO journals VALUES ('133', 'Prabandhan: Indian Journal of Management');
INSERT INTO journals VALUES ('134', 'Proceedings of the Indian Academy of Sciences: Mathematical Sciences');
INSERT INTO journals VALUES ('135', 'Proceedings of the Indian National Science Academy');
INSERT INTO journals VALUES ('136', 'Sankhya: The Indian Journal of Statistics');
INSERT INTO journals VALUES ('137', 'SCMS Journal of Indian Management');
INSERT INTO journals VALUES ('138', 'Studies in American Indian Literatures');
INSERT INTO journals VALUES ('139', 'Studies in Indian Politics');
INSERT INTO journals VALUES ('140', 'Transactions of the Indian Ceramic Society');
INSERT INTO journals VALUES ('141', 'Transactions of the Indian Institute of Metals');
INSERT INTO journals VALUES ('142', 'Transactions of the Institute of Indian Geographers');
INSERT INTO journals VALUES ('143', 'West Indian Medical Journal');
CREATE TABLE `magazines` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `magazinename` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO magazines VALUES ('1', 'Resonance', 'Indian Academy of Sciences');
INSERT INTO magazines VALUES ('2', 'Current Science', 'Current Science Association');
INSERT INTO magazines VALUES ('3', 'Dream 2047', 'Vigyan Prasar');
INSERT INTO magazines VALUES ('4', 'Jnan o Bijnan', 'Bangiya Bijnan Parishad');
INSERT INTO magazines VALUES ('5', 'Sandarbh', 'Eklavya Foundation');
INSERT INTO magazines VALUES ('6', 'Science Reporter', 'National Institute of Science Communication and Information Resources');
INSERT INTO magazines VALUES ('7', 'Safari', 'Harshal Publications');
INSERT INTO magazines VALUES ('8', 'Bhawana', 'Bhavana Trust');
INSERT INTO magazines VALUES ('9', 'Yojna', 'Ministry of Information & Broadcasting');
INSERT INTO magazines VALUES ('10', 'Vigyan Pragati (Hindi)', 'NISCAIR');
INSERT INTO magazines VALUES ('11', 'Bulletin of Materials Science', 'Indian Academy of Sciences');
INSERT INTO magazines VALUES ('12', 'Science India Magazine', 'Vijnana Bharati');
INSERT INTO magazines VALUES ('13', 'Everyman\'s Science', 'The Indian Science Congress Association');
INSERT INTO magazines VALUES ('14', 'Scientific India', 'Scientific Planet Society');
INSERT INTO magazines VALUES ('15', 'Shaastra', 'Indian Educational Institution');
CREATE TABLE `movies` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `moviename` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO movies VALUES ('1', 'Rocketry');
INSERT INTO movies VALUES ('2', 'Hawaizaada');
INSERT INTO movies VALUES ('3', 'Mission Mangal');
INSERT INTO movies VALUES ('4', 'Parmanu');
INSERT INTO movies VALUES ('5', 'Ek Doctor Ki Maut');
INSERT INTO movies VALUES ('6', 'The Quantum Indians');
INSERT INTO movies VALUES ('7', 'Ramanujan');
INSERT INTO movies VALUES ('8', 'Shakuntala Devi');
CREATE TABLE `newspapers` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `newspapername` varchar(150) NOT NULL,
  `link` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO newspapers VALUES ('1', 'Economic Times', 'https://economictimes.indiatimes.com/');
INSERT INTO newspapers VALUES ('2', 'Hindu', 'https://www.thehindu.com/');
INSERT INTO newspapers VALUES ('3', 'Hindustan Times', 'https://www.hindustantimes.com/');
INSERT INTO newspapers VALUES ('4', 'Indian Express', 'https://indianexpress.com/');
INSERT INTO newspapers VALUES ('5', 'Times Of India', 'https://timesofindia.indiatimes.com/us');
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
  `pass` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `firstname` (`firstname`,`lastname`,`gender`,`dob`,`addr`,`contact`,`email`,`pass`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO researchers VALUES ('40', 'Jimmy', 'Jayant', 'Male', '1993-08-06', 'HOUSE NO - 225, NEAR ARYA SAMAJ MANDIR', '2147483647', 'jayantjimmy49@gmail.com', 'science', '', '', 'https://www.linkedin.com/in/jimmy-jayant-8b79b61a9/', 'Ji@12345');
INSERT INTO researchers VALUES ('41', 'admin', '.', 'Male', '1993-08-06', 'WARD NO-7, NEAR ARYA SAMAJ MANDIR, PUNJABI RAMLILA GROUND,SAMALKHA', '0', 'admin@srpss.com', 'science', '', '', '', 'Ad@12345');
INSERT INTO researchers VALUES ('42', 'Simmy', 'Prashant', 'Male', '1995-10-13', 'HOUSE NO - 225, NEAR ARYA SAMAJ MANDIR', '2147483647', 'simmyprashant01@gmail.com', 'science', '', '', '', 'Si@12345');
INSERT INTO researchers VALUES ('43', 'Ramesh', 'Singh', 'Male', '1970-01-01', 'Rohtak', '2147483647', 'ramesh@gmail.com', 'science', '', '', '', 'Ra@12345');
INSERT INTO researchers VALUES ('44', 'Puneet', 'Kumar', 'Male', '2000-01-01', 'Samalkha', '2147483647', 'puneetkumar@yahoo.com', 'mathematics', '', '', '', 'Pu@12345');
INSERT INTO researchers VALUES ('45', 'Yash', 'Sharma', 'Male', '2010-02-01', 'Panipat', '2147483647', 'yashsharma02@outlook.com', 'engineering', '', '', '', 'Ya@12345');
INSERT INTO researchers VALUES ('48', 'Avneet', 'Kaur', 'Female', '2013-01-01', 'Ambala', '2147483647', 'avneetkaur.01@gmail.com', 'mathematics', '', '', '', 'Av@12345');
INSERT INTO researchers VALUES ('49', 'Prashant', 'Sharma', 'Male', '2012-02-01', 'Karnal', '2147483647', 'prashant22@gmail.com', 'engineering', '', '', '', 'Pra@12345');
INSERT INTO researchers VALUES ('50', 'Gaurav', 'Bhalla', 'Male', '1999-03-01', 'Ram Nagar, Karnal', '2147483647', 'gauravbhalla@gmail.com', 'engineering', '', '', '', 'Ga@12345');
INSERT INTO researchers VALUES ('51', 'Sanjeev', 'Verma', 'Male', '1985-03-02', 'Samalkha', '2147483647', 'sanjee.verma@gmail.com', 'engineering', '', '', '', 'Sa@12345');
INSERT INTO researchers VALUES ('52', 'Manoj', 'Kumar', 'Male', '1980-01-01', 'Chulkana, Samalkha', '2147483647', 'manoj@gmail.com', 'engineering', '', '', '', 'Ma@12345');
INSERT INTO researchers VALUES ('53', 'Ashu', 'Kumar', 'Male', '1995-01-01', 'Samalkha', '2147483647', 'ashu@gmail.com', 'engineering', '', '', '', 'As@12345');
INSERT INTO researchers VALUES ('54', 'Armaan', 'Malik', 'Male', '2015-01-01', 'Model Town, Panipat', '2147483647', 'armaanmalik11@gmail.com', 'science', '', '', '', 'Ar@12345');
CREATE TABLE `researchpapers` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `loggeduser` varchar(150) DEFAULT NULL,
  `category` varchar(150) NOT NULL,
  `topic` varchar(300) NOT NULL,
  `paper` varchar(500) NOT NULL,
  `approved` int(6) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `FK_loggeduser` (`loggeduser`),
  CONSTRAINT `FK_loggeduser` FOREIGN KEY (`loggeduser`) REFERENCES `researchers` (`firstname`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO researchpapers VALUES ('1', 'Jimmy', 'science', 'Quantum Physics', 'waves_quantum.pdf', '1');
INSERT INTO researchpapers VALUES ('2', 'Yash', 'science', 'Relativity', 'relativity.pdf', '1');
CREATE TABLE `researchsites` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `sitename` varchar(100) NOT NULL,
  `headquarter` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO researchsites VALUES ('1', 'Indian Agriculture Research Institute', 'New delhi');
INSERT INTO researchsites VALUES ('2', 'Central Rice Research Institute', 'Cuttack');
INSERT INTO researchsites VALUES ('3', 'Central Sugarcane Research Institute', 'Coimbatore');
INSERT INTO researchsites VALUES ('4', 'Central Potato Research Institute', 'Shimla');
INSERT INTO researchsites VALUES ('5', 'Central Tobacco Research Institute', 'Rajamundry');
INSERT INTO researchsites VALUES ('6', 'Central Road Research Institute', 'New delhi');
INSERT INTO researchsites VALUES ('7', 'National sugar Research Institute', 'Kanpur');
INSERT INTO researchsites VALUES ('8', 'Indian Lac Research Institute', 'Ranchi');
INSERT INTO researchsites VALUES ('9', 'National Dairy Research Institute', 'Karnal (Haryana)');
INSERT INTO researchsites VALUES ('10', 'Central Fuel Research Institute', 'Dhanbad');
INSERT INTO researchsites VALUES ('11', 'Central Leather Research Institute', 'Chennai');
INSERT INTO researchsites VALUES ('12', 'Central Mining Research Institute', 'Dhanbad');
INSERT INTO researchsites VALUES ('13', 'Central Drug Research Institute', 'Lucknow');
INSERT INTO researchsites VALUES ('14', 'Indian Meteorological Observatory', 'Pune & Delhi');
INSERT INTO researchsites VALUES ('15', 'Raman Research Institute', 'Bangalore');
INSERT INTO researchsites VALUES ('16', 'Central Scientific Industrial Organsation', 'Chandigarh');
INSERT INTO researchsites VALUES ('17', 'Central Salt and Marine Chemical Research Institute', 'Bhavnagar');
INSERT INTO researchsites VALUES ('18', 'Archeological Survey of India', 'Kolkata');
INSERT INTO researchsites VALUES ('19', 'Central Jute Technological Research Institute', 'Kolkata');
INSERT INTO researchsites VALUES ('20', 'Central Coconut Research Institute', 'Kasergod, Kerala');
INSERT INTO researchsites VALUES ('21', 'Textile Research Institute', 'Ahmadabad');
INSERT INTO researchsites VALUES ('22', 'All Indian Institute of Medical Science', 'New Delhi');
INSERT INTO researchsites VALUES ('23', 'National Aeronautical Laboratory', 'Bangalore');
INSERT INTO researchsites VALUES ('24', 'National Institute of Oceanography', 'Panaji');
INSERT INTO researchsites VALUES ('25', 'National Geophysics Research Institute', 'Hyderabad');
INSERT INTO researchsites VALUES ('26', 'Indian Institute of Petroleum', 'Dehradun');
INSERT INTO researchsites VALUES ('27', 'Central Building Research Institute', 'Roorkee');
INSERT INTO researchsites VALUES ('28', 'Tata Institute of Fundamental Research', 'Mumbai');
INSERT INTO researchsites VALUES ('29', 'High Altitude Research Laboratory', 'Gulmarg');
INSERT INTO researchsites VALUES ('30', 'National Botanical Research Institute', 'Lucknow');
INSERT INTO researchsites VALUES ('31', 'Central Food Technological Research Institute', 'Mysore');
INSERT INTO researchsites VALUES ('32', 'Central Glass and Ceramic Research Institute', 'Kolkata');
INSERT INTO researchsites VALUES ('33', 'National environmental engineering research institute', 'Nagpur');
INSERT INTO researchsites VALUES ('34', 'Central Electro Chemical Research Institute', 'Karaikudi (Tamil Nadu)');
INSERT INTO researchsites VALUES ('35', 'Indian Institute of Chemical Biology', 'Kolkata');
INSERT INTO researchsites VALUES ('36', 'Industrial Toxicology Research Centre', 'Lucknow');
INSERT INTO researchsites VALUES ('37', 'Central Mechanical Engineering Research Institute', 'Durgapur');
INSERT INTO researchsites VALUES ('38', 'Centre for Cellular and Molecular Biology', 'Hyderabad');
INSERT INTO researchsites VALUES ('39', 'Vikram Sarabhai Space Centre', 'Thiruvananthapuram');
INSERT INTO researchsites VALUES ('40', 'Uranium Corporation of India', 'Jadugoda');
CREATE TABLE `scientists` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `scientistname` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO scientists VALUES ('1', 'C.V. Raman');
INSERT INTO scientists VALUES ('2', 'Meghnad Saha');
INSERT INTO scientists VALUES ('3', 'Homi J. Bhabha');
INSERT INTO scientists VALUES ('4', 'A.P.J. Abdul Kalam');
INSERT INTO scientists VALUES ('5', 'Srinivasa Ramanujan');
INSERT INTO scientists VALUES ('6', 'Satyendra Nath Bose');
INSERT INTO scientists VALUES ('7', 'Jagadish Chandra Bose');
INSERT INTO scientists VALUES ('8', 'Har Gobind Khorana');
INSERT INTO scientists VALUES ('9', 'Vikram Sarabhai');
INSERT INTO scientists VALUES ('10', 'Subrahmanyan Chandrasekhar');
INSERT INTO scientists VALUES ('11', 'Prasanta Chandra Mahalanobis');
INSERT INTO scientists VALUES ('12', 'Salim Ali');
INSERT INTO scientists VALUES ('13', 'Birbal Sahni');
INSERT INTO scientists VALUES ('14', 'Venkatraman Radhakrishnan');
INSERT INTO scientists VALUES ('15', 'Asima Chatterjee');
INSERT INTO scientists VALUES ('16', 'Mokshagundam Visvesvaraya');
INSERT INTO scientists VALUES ('17', 'Prafulla Chandra Ray');
INSERT INTO scientists VALUES ('18', 'Radha Balakrishnan');
INSERT INTO scientists VALUES ('19', 'M.S. Swaminathan');
INSERT INTO scientists VALUES ('20', 'Ashoke Sen');
INSERT INTO scientists VALUES ('21', 'Ambarish Ghosh');
INSERT INTO scientists VALUES ('22', 'Archana Bhattacharyya');
INSERT INTO scientists VALUES ('23', 'Amar Gupta');
INSERT INTO scientists VALUES ('24', 'Amal Kumar Raychaudhuri');
INSERT INTO scientists VALUES ('25', 'Animesh Chakravorty');
INSERT INTO scientists VALUES ('26', 'Ajoy Ghatak');
INSERT INTO scientists VALUES ('27', 'Amitava Raychaudhuri');
INSERT INTO scientists VALUES ('28', 'Anil Kakodkar');
INSERT INTO scientists VALUES ('29', 'Aditi Pant');
INSERT INTO scientists VALUES ('30', 'Amartya Sen');
INSERT INTO scientists VALUES ('31', 'G.N. Ramachandran');
INSERT INTO scientists VALUES ('32', 'Abhik Ghosh');
INSERT INTO scientists VALUES ('33', 'Asoke Nath Mitra');
INSERT INTO scientists VALUES ('34', 'Janaki Ammal');
INSERT INTO scientists VALUES ('35', 'A. Sivathanu Pillai');
INSERT INTO scientists VALUES ('36', 'A.S. Kiran Kumar');
INSERT INTO scientists VALUES ('37', 'Abhay Ashtekar');
INSERT INTO scientists VALUES ('38', 'A.P. Balachandran');
INSERT INTO scientists VALUES ('39', 'Arun K. Pati');
INSERT INTO scientists VALUES ('40', 'A.S. Rao');
INSERT INTO scientists VALUES ('41', 'Anna Mani');
INSERT INTO scientists VALUES ('42', 'Agnikumar G. Vedeshwar');
INSERT INTO scientists VALUES ('43', 'Gautam Radhakrishna Desiraju');
INSERT INTO scientists VALUES ('44', 'Kedareswar Banerjee');
INSERT INTO scientists VALUES ('45', 'Manjula Reddy');
CREATE TABLE `webseries` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `webseriesname` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO webseries VALUES ('1', 'Rocket Boys');
CREATE TABLE `ytchannels` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `channelname` varchar(150) NOT NULL,
  `handle` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `handle` (`handle`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO ytchannels VALUES ('1', 'GetsetflySCIENCE', '@GetSetFly');
INSERT INTO ytchannels VALUES ('2', 'The Knowledge', '@TheKnowledge');
INSERT INTO ytchannels VALUES ('3', 'RE - research', '@REresearch');
INSERT INTO ytchannels VALUES ('4', 'Research Tv India', '@ResearchTvIndia');
INSERT INTO ytchannels VALUES ('5', 'Universe Adventure', '@UniverseAdventure');
INSERT INTO ytchannels VALUES ('6', 'Logical Science', '@VJFKIRAN');
INSERT INTO ytchannels VALUES ('7', 'Indian Scientist', '@Indianscientist137');
