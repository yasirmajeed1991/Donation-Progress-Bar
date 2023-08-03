-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220918.6792b17e72
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2022 at 01:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`id`, `user_name`, `email`, `password`, `mobileno`) VALUES
(6, 'admin', 'test@test.com', 'admin', '0000000000'),
(8, 'admin12', 'admin12@test.com', 'admin12', '000000000');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`name`, `slug`) VALUES
('Afghanistan', 'afghanistan'),
('Aland Islands', 'aland-islands'),
('Albania', 'albania'),
('Algeria', 'algeria'),
('American Samoa', 'american-samoa'),
('Andorra', 'andorra'),
('Angola', 'angola'),
('Anguilla', 'anguilla'),
('Antigua and Barbuda', 'antigua-and-barbuda'),
('Argentina', 'argentina'),
('Armenia', 'armenia'),
('Aruba', 'aruba'),
('Australia', 'australia'),
('Austria', 'austria'),
('Azerbaijan', 'azerbaijan'),
('Bahamas', 'bahamas'),
('Bahrain', 'bahrain'),
('Bangladesh', 'bangladesh'),
('Barbados', 'barbados'),
('Belarus', 'belarus'),
('Belgium', 'belgium'),
('Belize', 'belize'),
('Benin', 'benin'),
('Bermuda', 'bermuda'),
('Bhutan', 'bhutan'),
('Bolivia', 'bolivia'),
('Bosnia and Herzegovina', 'bosnia-and-herzegovina'),
('Botswana', 'botswana'),
('Brazil', 'brazil'),
('British Virgin Islands', 'british-virgin-islands'),
('Brunei Darussalam', 'brunei-darussalam'),
('Bulgaria', 'bulgaria'),
('Burkina Faso', 'burkina-faso'),
('Burundi', 'burundi'),
('Cambodia', 'cambodia'),
('Cameroon', 'cameroon'),
('Canada', 'canada'),
('Cape Verde', 'cape-verde'),
('Cayman Islands', 'cayman-islands'),
('Central African Republic', 'central-african-republic'),
('Chad', 'chad'),
('Chile', 'chile'),
('China', 'china'),
('Colombia', 'colombia'),
('Comoros', 'comoros'),
('Congo', 'congo'),
('Cook Islands', 'cook-islands'),
('Costa Rica', 'costa-rica'),
('Cote d\'Ivoire', 'cote-divoire'),
('Croatia', 'croatia'),
('Cuba', 'cuba'),
('Cyprus', 'cyprus'),
('Czech Republic', 'czech-republic'),
('Democratic Republic of the Congo', 'democratic-republic-of-congo'),
('Denmark', 'denmark'),
('Djibouti', 'djibouti'),
('Dominica', 'dominica'),
('Dominican Republic', 'dominican-republic'),
('Ecuador', 'ecuador'),
('Egypt', 'egypt'),
('El Salvador', 'el-salvador'),
('Equatorial Guinea', 'equatorial-guinea'),
('Eritrea', 'eritrea'),
('Estonia', 'estonia'),
('Ethiopia', 'ethiopia'),
('Faeroe Islands', 'faeroe-islands'),
('Falkland Islands', 'falkland-islands'),
('Fiji', 'fiji'),
('Finland', 'finland'),
('France', 'france'),
('French Guiana', 'french-guiana'),
('French Polynesia', 'french-polynesia'),
('Gabon', 'gabon'),
('Gambia', 'gambia'),
('Georgia', 'georgia'),
('Germany', 'germany'),
('Ghana', 'ghana'),
('Gibraltar', 'gibraltar'),
('Greece', 'greece'),
('Greenland', 'greenland'),
('Grenada', 'grenada'),
('Guadeloupe', 'guadeloupe'),
('Guam', 'guam'),
('Guatemala', 'guatemala'),
('Guernsey', 'guernsey'),
('Guinea', 'guinea'),
('Guinea-Bissau', 'guinea-bissau'),
('Guyana', 'guyana'),
('Haiti', 'haiti'),
('Holy See', 'holy-see'),
('Honduras', 'honduras'),
('Hong Kong', 'hong-kong'),
('Hungary', 'hungary'),
('Iceland', 'iceland'),
('India', 'india'),
('Indonesia', 'indonesia'),
('Iran', 'iran'),
('Iraq', 'iraq'),
('Ireland', 'ireland'),
('Isle of Man', 'isle-of-man'),
('Israel', 'israel'),
('Italy', 'italy'),
('Jamaica', 'jamaica'),
('Japan', 'japan'),
('Jersey', 'jersey'),
('Jordan', 'jordan'),
('Kazakhstan', 'kazakhstan'),
('Kenya', 'kenya'),
('Kiribati', 'kiribati'),
('Kuwait', 'kuwait'),
('Kyrgyzstan', 'kyrgyzstan'),
('Laos', 'laos'),
('Latvia', 'latvia'),
('Lebanon', 'lebanon'),
('Lesotho', 'lesotho'),
('Liberia', 'liberia'),
('Libyan Arab Jamahiriya', 'libyan-arab-jamahiriya'),
('Liechtenstein', 'liechtenstein'),
('Lithuania', 'lithuania'),
('Luxembourg', 'luxembourg'),
('Macao', 'macao'),
('Macedonia', 'macedonia'),
('Madagascar', 'madagascar'),
('Malawi', 'malawi'),
('Malaysia', 'malaysia'),
('Maldives', 'maldives'),
('Mali', 'mali'),
('Malta', 'malta'),
('Marshall Islands', 'marshall-islands'),
('Martinique', 'martinique'),
('Mauritania', 'mauritania'),
('Mauritius', 'mauritius'),
('Mayotte', 'mayotte'),
('Mexico', 'mexico'),
('Micronesia', 'micronesia'),
('Moldova', 'moldova'),
('Monaco', 'monaco'),
('Mongolia', 'mongolia'),
('Montenegro', 'montenegro'),
('Montserrat', 'montserrat'),
('Morocco', 'morocco'),
('Mozambique', 'mozambique'),
('Myanmar', 'myanmar'),
('Namibia', 'namibia'),
('Nauru', 'nauru'),
('Nepal', 'nepal'),
('Netherlands', 'netherlands'),
('Netherlands Antilles', 'netherlands-antilles'),
('New Caledonia', 'new-caledonia'),
('New Zealand', 'new-zealand'),
('Nicaragua', 'nicaragua'),
('Niger', 'niger'),
('Nigeria', 'nigeria'),
('Niue', 'niue'),
('Norfolk Island', 'norfolk-island'),
('North Korea', 'north-korea'),
('Northern Mariana Islands', 'northern-mariana-islands'),
('Norway', 'norway'),
('Oman', 'oman'),
('Pakistan', 'pakistan'),
('Palau', 'palau'),
('Palestine', 'palestine'),
('Panama', 'panama'),
('Papua New Guinea', 'papua-new-guinea'),
('Paraguay', 'paraguay'),
('Peru', 'peru'),
('Philippines', 'philippines'),
('Pitcairn', 'pitcairn'),
('Poland', 'poland'),
('Portugal', 'portugal'),
('Puerto Rico', 'puerto-rico'),
('Qatar', 'qatar'),
('Reunion', 'reunion'),
('Romania', 'romania'),
('Russian Federation', 'russian-federation'),
('Rwanda', 'rwanda'),
('Saint Helena', 'saint-helena'),
('Saint Kitts and Nevis', 'saint-kitts-and-nevis'),
('Saint Lucia', 'saint-lucia'),
('Saint Pierre and Miquelon', 'saint-pierre-and-miquelon'),
('Saint Vincent and the Grenadines', 'saint-vincent-and-grenadines'),
('Saint-Barthelemy', 'saint-barthelemy'),
('Saint-Martin', 'saint-martin'),
('Samoa', 'samoa'),
('San Marino', 'san-marino'),
('Sao Tome and Principe', 'sao-tome-and-principe'),
('Saudi Arabia', 'saudi-arabia'),
('Senegal', 'senegal'),
('Serbia', 'serbia'),
('Seychelles', 'seychelles'),
('Sierra Leone', 'sierra-leone'),
('Singapore', 'singapore'),
('Slovakia', 'slovakia'),
('Slovenia', 'slovenia'),
('Solomon Islands', 'solomon-islands'),
('Somalia', 'somalia'),
('South Africa', 'south-africa'),
('South Korea', 'south-korea'),
('South Sudan', 'south-sudan'),
('Spain', 'spain'),
('Sri Lanka', 'sri-lanka'),
('Sudan', 'sudan'),
('Suriname', 'suriname'),
('Svalbard and Jan Mayen Islands', 'svalbard-and-jan-mayen-islands'),
('Swaziland', 'swaziland'),
('Sweden', 'sweden'),
('Switzerland', 'switzerland'),
('Syrian Arab Republic', 'syrian-arab-republic'),
('Tajikistan', 'tajikistan'),
('Tanzania', 'tanzania'),
('Thailand', 'thailand'),
('Timor-Leste', 'timor-leste'),
('Togo', 'togo'),
('Tokelau', 'tokelau'),
('Tonga', 'tonga'),
('Trinidad and Tobago', 'trinidad-and-tobago'),
('Tunisia', 'tunisia'),
('Turkey', 'turkey'),
('Turkmenistan', 'turkmenistan'),
('Turks and Caicos Islands', 'turks-and-caicos-islands'),
('Tuvalu', 'tuvalu'),
('U.S. Virgin Islands', 'us-virgin-islands'),
('Uganda', 'uganda'),
('Ukraine', 'ukraine'),
('United Arab Emirates', 'united-arab-emirates'),
('United Kingdom', 'united-kingdom'),
('United States', 'united-states'),
('Uruguay', 'uruguay'),
('Uzbekistan', 'uzbekistan'),
('Vanuatu', 'vanuatu'),
('Venezuela', 'venezuela'),
('Viet Nam', 'viet-nam'),
('Wallis and Futuna Islands', 'wallis-and-futuna-islands'),
('Western Sahara', 'western-sahara'),
('Yemen', 'yemen'),
('Zambia', 'zambia'),
('Zimbabwe', 'zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `postalcode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `email`, `amount`, `fullname`, `address`, `country`, `postalcode`, `city`, `state`, `mobile`) VALUES
(19, 'test@test.com', '46', 'test', 'test', 'Australia', '334', 'tes', 'test', '32423423423423'),
(20, 'test@test.com', '1000', 'testss', 'testsstestss', 'Armenia', '4213', 'text', 'text', '234234234342');

-- --------------------------------------------------------

--
-- Table structure for table `funds`
--

CREATE TABLE `funds` (
  `fund` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `funds`
--

INSERT INTO `funds` (`fund`) VALUES
('50000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
