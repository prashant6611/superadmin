-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2024 at 10:38 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtreewcp_dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `logo` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `email`, `logo`) VALUES
(1, 'admin@', '123456', 'prashantraikwar482@gmail.com', '1584451945guru-purnima-12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(250) NOT NULL,
  `file` varchar(350) NOT NULL,
  `link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `title`, `file`, `link`) VALUES
(5, '', '1588330112logo1.jpg', ''),
(9, '', '1588330162logo5.jpg', ''),
(10, '', '1588330168logo6.jpg', ''),
(12, '', '1588330186logo8.jpg', ''),
(14, '', '1588330238logo10.jpg', ''),
(15, '', '1588330246logo11.jpg', ''),
(16, '', '1588330254logo12.jpg', ''),
(17, '', '1588330284logo13.jpg', ''),
(18, '', '1588330291logo14.jpg', ''),
(20, '', '1588330309logo16.jpg', ''),
(23, '', '1588330486logo21.jpg', ''),
(24, '', '1588330541logo16.jpg', ''),
(25, '', '1588330565logo23.jpg', ''),
(27, '', '1588330581logo25.jpg', ''),
(29, '', '1588330638logo27.jpg', ''),
(30, '', '1588330651logo28.jpg', ''),
(32, '', '1588330686logo30.jpg', ''),
(35, '', '1588330809logo33.jpg', ''),
(36, '', '1588330821logo34.jpg', ''),
(39, '', '1588330924logo37.jpg', ''),
(40, '', '1588330938logo38.jpg', ''),
(43, '', '1588331001logo41.jpg', ''),
(44, '', '1588331014logo42.jpg', ''),
(45, '', '1588331053logo43.jpg', ''),
(48, '', '1588331210logo45.jpg', ''),
(49, '', '1588331221logo47.jpg', ''),
(51, '', '1588331245logo49.jpg', ''),
(54, '', '1588331409logo52.jpg', ''),
(57, '', '1588331437logo55.jpg', ''),
(58, '', '1588331453logo56.jpg', ''),
(59, '', '1588331465logo57.jpg', ''),
(60, '', '1588331472logo58.jpg', ''),
(61, '', '1588331480logo59.jpg', ''),
(62, '', '1588331819logo60.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int NOT NULL,
  `name` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `detail` longtext NOT NULL,
  `file` varchar(350) NOT NULL,
  `status` varchar(45) NOT NULL,
  `date` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `title`, `detail`, `file`, `status`, `date`) VALUES
(21, 'Money tree wc jabalpur ', 'none', 'none', '1597750076VALUE FUND.jpg', '0', '18/08/2020'),
(22, 'Money tree wc jbp', 'none', 'none', '1597750088RETIREMENT PLAN.jpg', '0', '18/08/2020'),
(23, 'Money tree wc', 'none', 'none', '1597750229RETAIL INVESTOR.jpg', '0', '18/08/2020'),
(24, 'money tree wealth', 'none', 'none', '1597750260money-tree-office1.jpg', '0', '18/08/2020'),
(25, 'money tree wealth creation', 'none', 'none', '1597750275money-tree-office.jpg', '0', '18/08/2020'),
(26, 'money tree wealth creation point', 'none', 'none', '1597750293HIGER EARNING VISIBILITY.jpg', '0', '18/08/2020'),
(27, 'money tree', 'none', 'none', '1597750320PLAN.jpg', '0', '18/08/2020'),
(28, 'money tree wcp', 'none', 'none', '1597750340NPS.jpg', '0', '18/08/2020'),
(29, 'money tree jabalpur', 'none', 'none', '1597750404MUTUAL FUNDS.jpg', '0', '18/08/2020'),
(30, 'financial service jbp', 'none', 'none', '1597750446FUNDS.jpg', '0', '18/08/2020'),
(31, 'investment service jabalpur', 'none', 'none', '1597750471FD VS PVT FD VS FMP.jpg', '0', '18/08/2020'),
(32, 'fund services jabalpur', 'none', 'none', '1597750504EXPERT SPEAK.jpg', '0', '18/08/2020');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `heading` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `detail` longtext NOT NULL,
  `file` varchar(350) NOT NULL,
  `status` varchar(45) NOT NULL,
  `date` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `heading`, `title`, `detail`, `file`, `status`, `date`) VALUES
(7, 'Sensex dives 1,375 pts, Nifty gives up 8,300; Nestle jumps 4%', 'none', '<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:georgia,serif\"><span style=\"font-size:16px\">Equity benchmark indices traded weak on Monday as market mood remained sombre with most investors believing that the stimulus package announced by the government and Reserve Bank of India will have limited effect until the actual impact of coronavirus is known. The BSE S&amp;P Sensex closed 1,375 points or 4.61 percent lower to 28,440 while the Nifty 50 edged lower by 379 points or 4.38 percent to 8,281.</span></span></span></p>\r\n', '', '0', '18th August 2020 '),
(8, 'Deferment of discretionary spending credit negative for retail industry: ICRA ', 'none', '<p><span style=\"font-family:georgia,serif\"><span style=\"font-size:16px\"><span style=\"color:rgb(0, 0, 0)\">With consumers forced to defer their discretionary spends, revenues and profitability, will be adversely impacted in the short-term, which in turn affect credit profile of the Indian retail industry.</span></span></span><br />\r\n&nbsp;</p>\r\n\r\n<div style=\"background: transparent; font-size: 12px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(0, 0, 0); font-family: arial;\">&nbsp;</div>\r\n', '', '0', '18th August 2020 '),
(9, 'Manic Monday! Sensex tumbles 1,375 points, Rs 2.85 lakh crore wiped off  ', 'none', '<p style=\"text-align: justify;\"><span style=\"font-family:georgia,serif\"><span style=\"font-size:16px\"><span style=\"color:rgb(0, 0, 0)\">MUMBAI: Benchmark indices Sensex and Nifty started the week with a fresh slide as rapidly-spreading coronavirus continued to disrupt lives and businesses across the globe, making investors worry about the economic of the pandemic.</span><br />\r\n<br />\r\n<span style=\"color:rgb(0, 0, 0)\">The 30-share Sensex fell 4.61 per cent or 1,375 points to close at 28,440, while the 50-share Nifty tumbled 4.28 per cent or 371 points to close at 8,289.</span><br />\r\n<br />\r\n<span style=\"color:rgb(0, 0, 0)\">The day&rsquo;s meltdown wiped off Rs 2.85 lakh crore from the market capitalization of BSE-listed com&nbsp;..</span></span></span></p>\r\n', '', '0', '18th August 2020 '),
(10, 'Coronavirus outbreak: Sebi relaxes guidelines for default recognition by rating agencies  ', 'none', '<p style=\"text-align: justify;\"><span style=\"font-family:georgia,serif\"><span style=\"font-size:16px\"><span style=\"color:rgb(0, 0, 0)\">The markets regulator said it felt a need for temporary relaxations in compliance by CRAs in view of the developments arising due to Covid-19 pandemic</span></span></span></p>\r\n', '', '0', '18th August 2020 '),
(11, 'RBI changes SLBC convenors in view of bank mergers', 'none', '<p style=\"text-align:justify\"><span style=\"font-family:georgia,serif\"><span style=\"font-size:16px\">The Reserve Bank of India (RBI) on Monday proposed to change the convenors of State Level Bankers&#39; Committee (SLBC) in view of the merger of 10 public sector banks into 4 with effect from 1 April.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:georgia,serif\"><span style=\"font-size:16px\">With the mega-merger, 6 public sector banks will cease to exist from April 1, necessitating changes in the convenorship.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:georgia,serif\"><span style=\"font-size:16px\">The convenorship of merged banks will be transferred to anchor banks. The government on March 4 notified the amalgamation scheme as part of its consolidation plan to create bigger and stronger banks in the public sector.</span></span></p>\r\n', '', '0', '18th August 2020 '),
(12, 'World shares extend losses as toll from pandemic surges', 'none', '<p style=\"text-align:justify\"><span style=\"font-family:georgia,serif\"><span style=\"font-size:16px\">World markets started the week with fresh losses as countries reported surging numbers of infections from the coronavirus that are forcing shutdowns of travel and business in many regions.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:georgia,serif\"><span style=\"font-size:16px\">Shares fell in London, Paris, and Tokyo but surged 7 percent in Australia after the government promised more recession-fighting stimulus.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:georgia,serif\"><span style=\"font-size:16px\">&ldquo;We want to keep the engine of our economy running through this crisis,&quot; Prime Minister Scott Morrison told reporters in Canberra. His unprecedented $130 billion package includes wage subsidies of up to USD 1,500 per two weeks to businesses to keep workers on the job.</span></span></p>\r\n', '', '0', '13th November 2021 ');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int NOT NULL,
  `main_page` varchar(100) DEFAULT NULL,
  `sub_page` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `keyword` longtext,
  `description` longtext,
  `metatag` longtext,
  `detail` longtext,
  `status` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `main_page`, `sub_page`, `title`, `keyword`, `description`, `metatag`, `detail`, `status`, `date`) VALUES
(1, 'About', 'Who We Are | Money Tree wc Jbp', 'About Money Tree Wealth Creation Point Jabalpur', 'Financial consulting firm,\r\n mutual funds,\r\n fixed deposit,\r\n demat & trading,\r\n motilal oswal demat account opening,\r\n  bonds & ncds, financial services,\r\n  financial planning, jabalpur firm,\r\n  mutual fund schemes,\r\n   mutual fund plans in india,\r\n    jbp wealth point, \r\n    finance services in mp,\r\n    jbp finance services,', 'Money Tree Wealth Creation is A very good financial advisory firm with full knowledgable persons to guide you to your wealth opportunities', 'money tree jabalpur, money tree wealth creation point, finance, insurance, bonds, ncds, fixed deposit, mutual funds, demat & trading, financial planning, investment service, wealth management, commodities, insurance planning, nbfc, pms, nri service, business growth', '<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:georgia,serif\">Prashant With<strong> </strong>the fast-changing world, we need to change ourselves. If we want to move along with the rapidly-evolving world, we need to set aside personal, professional and financial goals. Financial goals can be both short term and long term. Achieving these goals starts with making a well-structured financial plan, a roadmap that reduces financial risks and uncertainties. Money Tree, an end-to-end wealth management service provider, walks along with you in this journey and helps you fulfil your financial goals with a customized and holistic approach.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:georgia,serif\">At Money Tree, we do not believe in &lsquo;one size fits all&rsquo; policy and hence offer a bouquet of financial products and services that work towards your financial planning requirements and future goals. Established in the year 2016, Money Tree, a sub-broker of Motilal Oswal Financial Services Ltd., is currently servicing around 1,500 satisfied customers spread across India as well as abroad.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:georgia,serif\">Our services and products are spread across different asset categories like equity, gold, real estate and debt. We fulfil your investment needs through a variety of products such as stocks, mutual funds, derivative, insurance, fixed deposit, NCDs, currency derivatives and bonds, amongst others.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:georgia,serif\">Money Tree takes pride in giving its customers a smooth and convenient trading experience on numerous platforms &ndash; online / mobile / phone call to customer care executives / visit to branch office.&nbsp;</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:georgia,serif\">Based on our collected information, data analysis, news and thorough market research we give you precise tips and guidance that empowers you to make right investments decisions.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:georgia,serif\">We help you grow your wealth.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><strong>Registered office/Corporate office</strong></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:georgia,serif\">Money Tree<br />\r\nPoddar House,<br />\r\nWrite Town, Jabalpur<br />\r\nContact 0761 4015719&nbsp;/ +91 8818886346</span></span></span></p>\r\n', '0', '17/03/2020'),
(2, 'About', 'Awards & Milestone', 'Awards and Milestones | Money Tree Wealth Creation Point Jabalpur MP', 'Financial consulting firm,\r\n            awards of money tree,\r\n            honors of money tree,\r\n            money tree jabalpur,\r\n            mutual funds,\r\n            fixed deposit,\r\n            demat & trading,\r\n            motilal oswal demat account opening,\r\n            bonds & ncds, financial services,\r\n            financial planning, jabalpur firm,\r\n            jbp wealth point, \r\n            finance services in mp,\r\n            jbp finance services', 'Money Tree Wealth Creation is A very good financial advisory firm with full knowledgable persons to guide you to your wealth opportunities', 'money tree jabalpur, money tree wealth creation point, finance, insurance, bonds, ncds, fixed deposit, mutual funds, demat & trading, financial planning, investment service, wealth management, commodities, insurance planning, nbfc, pms, nri service, business growth', '<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:georgia,serif\">We at Money Tree are committed towards going an extra mile to meet the satisfaction of our esteemed customers. Our consistent efforts to give best services to our customers has won us several coveted awards and recognitions from renowned names of the financial world. Money Tree is deeply honored to bag these prestigious awards and hopes to serve its customers better in future too.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:georgia,serif\"><strong>Money Tree has been awarded at various occasions&nbsp;from Esteemed Organisations which include:</strong></span></span></span><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:georgia,serif\"><strong>&nbsp;</strong></span></span></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:georgia,serif\"><strong>--</strong>&nbsp; &nbsp; HDFC Life Insurance Company Ltd.</span></span></span></li>\r\n</ul>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:georgia,serif\"><strong>--</strong>&nbsp; &nbsp; Aditya Birla Capital Ltd.</span></span></span></li>\r\n</ul>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-size:16px\"><span style=\"font-family:georgia,serif\"><strong>--</strong>&nbsp; &nbsp; ICICI Prudential Asset Management Company Ltd.</span></span></span></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '0', '19/05/2016'),
(3, 'Products', 'Mutual Funds', 'null', 'null', 'null', '', '<p style=\"text-align:justify\"><span style=\"font-family:georgia,serif\"><span style=\"font-size:16px\">Content Will updated soon...</span></span></p>\r\n', '0', '22/05/2016'),
(4, 'Products', 'Fixed Deposits', 'null', 'null', 'null', '', '<p><span style=\"color:#696969\"><span style=\"font-family:georgia,serif; font-size:16px\">Content Will updated soon...</span></span></p>\r\n', '0', '21/05/2016'),
(5, 'Products', 'Bonds & NCD', 'Bond & NCD ', 'This is Page of NCD', 'NCD', '', '<h4><span style=\"color:#696969\"><span style=\"font-family:georgia,serif; font-size:16px\">Content Will updated soon...</span></span></h4>\r\n', '0', '22/05/2016'),
(6, 'Products', 'Demat & Trading', 'null', 'null', 'null', '', '<h4>&nbsp;</h4>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#000000\"><span style=\"font-family:georgia,serif\"><strong>Demat -</strong></span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#696969\"><span style=\"font-family:georgia,serif\"><span style=\"font-size:medium\">Money Tree has tied up with Motilal Oswal Financial Services Ltd. and Kotak Securities Ltd. for providing Demat and Trading account services.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', '0', '03/04/2015'),
(7, 'Services', 'Financial Planning', 'null', 'null', 'null', '', '<h4>&nbsp;</h4>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\"><span style=\"font-family:georgia,serif; font-size:16px\">Content Will updated soon...</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n', NULL, NULL),
(8, 'Services', 'Investment Services', '', '', '', '', '<h4>&nbsp;</h4>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:georgia,serif; font-size:16px\">Content Will updated soon...</span></p>\r\n', NULL, NULL),
(9, 'Services', 'What is Wealth?', '', '', '', '', '<p><span style=\"font-family:georgia,serif; font-size:16px\">Content Will updated soon...</span></p>\r\n', NULL, NULL),
(10, 'Services', 'Commodities', '', '', '', '', '<h4>&nbsp;</h4>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:georgia,serif; font-size:16px\">Content Will updated soon...</span></p>\r\n', NULL, NULL),
(11, 'Services', 'Insurance Planning', '', '', '', '', '<h4>&nbsp;</h4>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:georgia,serif; font-size:16px\">Content Will updated soon...</span></p>\r\n', NULL, NULL),
(12, 'Services', 'NBFC', '', '', '', '', '<h4>&nbsp;</h4>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:georgia,serif; font-size:16px\">Content Will updated soon...</span></p>\r\n', NULL, NULL),
(13, 'Services', 'PMS', '', '', '', '', '<h4>&nbsp;</h4>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:georgia,serif; font-size:16px\">Content Will updated soon...</span></p>\r\n', NULL, NULL),
(14, 'Services', 'NRI Services', '', '', '', '', '<p style=\"text-align:justify\"><span style=\"font-family:georgia,serif; font-size:16px\">Content Will updated soon...</span></p>\r\n', NULL, NULL),
(16, 'Investor Login', 'Investor Login', '', '', '', '', '<h2>ofa Client&nbsp;</h2>\r\n\r\n<p>To Invest in Money Tree,<br />\r\nYou have to download OFA Client App in your Android Phone or IPhone</p>\r\n', NULL, NULL),
(17, 'Contact Us', 'Contact us', '', '', '', '', '<div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right address\">\r\n<address>\r\n<p><span style=\"font-family:courier new,courier,monospace\"><span style=\"font-size:14px\"><span style=\"color:#696969\">Money Tree, Poddar House,<br />\r\nWrite Town, Jabalpur</span></span></span><br />\r\n<span style=\"font-family:courier new,courier,monospace\"><span style=\"font-size:14px\"><span style=\"color:#696969\">Madhya Pradesh</span></span></span></p>\r\n</address>\r\n\r\n<address>\r\n<p><span style=\"font-family:courier new,courier,monospace\"><span style=\"font-size:14px\"><span style=\"color:#696969\">info@moneytreewc.co.in</span></span></span>&nbsp;</p>\r\n\r\n<p><span style=\"font-family:courier new,courier,monospace\"><span style=\"font-size:14px\"><span style=\"color:#696969\">0761 4015719</span></span></span><br />\r\n<span style=\"font-family:courier new,courier,monospace\"><span style=\"font-size:14px\"><span style=\"color:#696969\">+91 881 888 6346</span></span></span></p>\r\n</address>\r\n</div>\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int NOT NULL,
  `name` varchar(250) NOT NULL,
  `company` varchar(250) NOT NULL,
  `detail` longtext NOT NULL,
  `file` varchar(350) NOT NULL,
  `status` varchar(45) NOT NULL,
  `date` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `company`, `detail`, `file`, `status`, `date`) VALUES
(3, 'Money Tree CLIENT', 'HDFC', '<p><span style=\"color:rgb(0, 0, 0); font-family:monospace; font-size:medium\">I am really impressed by the quality of services I receive from Money Tree</span></p>\r\n', '15854793639.jpg', '0', '29/03/2020');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int NOT NULL,
  `name` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `file` longtext NOT NULL,
  `status` varchar(45) NOT NULL,
  `date` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `name`, `title`, `file`, `status`, `date`) VALUES
(3, 'Basic of Stock market & its function ', 'What is Stock Exchange - NSE & BSE role in Market', '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/gCHUGgcGV48\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '0', '29/03/2020'),
(5, ' Sensex à¤®à¥‡à¤‚ 475 à¤…à¤‚à¤• à¤Šà¤ªà¤°, Nifty 8425 à¤•à¥‡ à¤†à¤¸à¤ªà¤¾à¤¸', ' Sensex à¤®à¥‡à¤‚ 475 à¤…à¤‚à¤• à¤Šà¤ªà¤°, Nifty 8425 à¤•à¥‡ à¤†à¤¸à¤ªà¤¾à¤¸', '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/gtKxgs2DnXQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '0', '29/03/2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
