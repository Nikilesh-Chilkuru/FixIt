-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2017 at 05:32 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fixit`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `ad_id` int(11) NOT NULL,
  `ad_type` varchar(30) NOT NULL,
  `posted_userId` int(11) NOT NULL,
  `posted_user` varchar(30) NOT NULL,
  `ad_header` varchar(100) NOT NULL,
  `date_posted` datetime NOT NULL,
  `content` text NOT NULL,
  `contact_email` varchar(30) NOT NULL,
  `contact_phone` varchar(15) NOT NULL,
  `reputation` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`ad_id`, `ad_type`, `posted_userId`, `posted_user`, `ad_header`, `date_posted`, `content`, `contact_email`, `contact_phone`, `reputation`) VALUES
(7, 'Cleaning ', 1, 'nikil_chilkuru', 'C & M Cleaning and Maintenance ', '2017-12-06 22:07:20', 'We provide top-class services in cleaning and maintenance for the household purposes.', 'cmcleaning@gmail.com', '812-985-06557', 1),
(8, 'Electronics', 1, 'nikil_chilkuru', 'My Computer Works', '2017-12-06 22:12:20', 'If your computer has been running slow or having other computer challenges, take advantage of the offers that are available on our website, to identify the source of the problem. ', 'cmputer@gmail.com', '812-894-2057', 1),
(9, 'Painting', 1, 'nikil_chilkuru', 'Legacy Doors and Windows LLC', '2017-12-06 22:15:44', 'We provide the facilities of interior design and paintings of the household, especially doors and walls. We also service all of central Indiana and provide free of charge a project estimate based on an informational, not sales presentation.', 'legacydoors@gmail.com', '745-854-9854', 1),
(10, 'Opticals', 1, 'nikil_chilkuru', 'Long Family Eye Care ', '2017-12-06 22:18:32', 'Long Family Eye Care has provided quality eyecare for families in Bloomington and surrounding communities since 1997. We have ample parking and a large, comfortable, handicap accessible office. We stock many brands of contact lenses and carry well over 600 eyeglass frames. Click on our individual photos to learn more about us. ', 'longfamily@gmail.com', '845-784-8955', 1),
(11, 'Hair Salon', 2, 'virat_kohli', 'Mira Hair Salon', '2017-12-06 22:23:58', 'Mira is a Bumble and Bumble Network salon proudly offering hair design as well as personalized skin care and massage.', 'mirahair@gmail.com', '815-895-4578', 1),
(12, 'Storage', 4, 'bhargava_sharma', 'Storage Available', '2017-12-07 15:06:22', 'I have storage space available. Contact If you are looking for storage space!!', 'bharghava@gmail.com', '812456321', 1),
(13, 'It Maintenance', 5, 'nikilesh_chilkuru', 'Computers', '2017-12-07 15:25:03', 'Just contact me...If you need some help', 'nikhileshkarthik7@gmail.com', '8123617568', 1);

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `service_type` varchar(30) NOT NULL,
  `service_title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `posted_userId` int(11) NOT NULL,
  `posted_user` varchar(30) NOT NULL,
  `reputation` int(11) NOT NULL DEFAULT '1',
  `date_posted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `service_type`, `service_title`, `content`, `posted_userId`, `posted_user`, `reputation`, `date_posted`) VALUES
(1, 'Plumbing ', 'Bathroom Plumbing and Services', 'Our professional plumbers deliver fast, dependable service around-the-clock. So whether you experience a plumbing emergency at midnight, on the weekend, or on Thanksgiving Day, we\'ll come to your rescue with our superb plumbing services.', 1, 'anvesh_lingampalli', 6, '2017-12-05 21:08:17'),
(2, 'Computers', 'Anvesh Electronics', 'Beats Studio 2.0 Ear Pads Replacement \r\n\r\nHow to replace your Beats by Dr Dre Studio 2.0 Wired/ Wireless earpads\r\n\r\n1)Detach - Detach the old cushion Grab a butter knife and start separating the cushion from the headphones. We must warn you not to use anything sharper than a butter knife, it can damage your headphones as well as have the potential for injury.\r\n\r\n2)Clean - Clean the remaining adhesive It is very important that you clean the remaining adhesive! If you have any remaining adhesive, there will be a weird gap in-between the headphones and the cushions. You can even use an alcohol wipe to remove the adhesive. The bottom line is, the cleaner the surface, the better the ear pads will stick!\r\n\r\n3) Align - Grab your replacement right side cushion You will see that the right side cushion is the cushion with a gap where the USB port should be. These are not an ordinary cushions, they have an extremely strong and thick adhesive that is crucial for this process to work.\r\n\r\n4)Peel - Peel the adhesive & attach the ear pads So take your ear pad and align the top dowel to the hole, push it in, and then align the bottom one. Apply pressure on the ear pads for a good minute that way you remove any gaps. If you have noticeable gaps, that means you have not aligned the cushion correctly and try again.\r\n\r\n5)Condition - The last most important step! Apply constant pressure on the ear pads by taking a couple of books and putting the headphones on them in a way that applies the most pressure without bending the headphone headband to far. We hope you enjoyed this simple tutorial, if you have any questions, do not hesitate to contact us.', 1, 'anvesh_lingampalli', 3, '2017-12-05 22:13:02'),
(3, 'Electronics ', 'Anvesh Electronics', 'Iphone 7 Battery replacement\r\n\r\nUse this guide to bring life back to your iPhone 7 with a new battery.\r\n\r\n1) Power off your iPhone before beginning disassembly.\r\n\r\n2) Remove the two 3.4 mm pentalobe screws on the bottom edge of the iPhone.\r\n\r\n3) Attach a suction cup to the lower half of the display assembly, just above the home button.\r\n\r\n4) Pull up on the suction cup to create a small gap between the display assembly and the rear case and Insert the flat end of a spudger into the gap.\r\n\r\n5) Slide the spudger to the left along the lower edge of the iPhone.\r\nTwist the spudger to widen the gap between the display and rear case.\r\n\r\n6) Slide the spudger up the left side of the iPhone, starting at the lower edge and moving towards the volume control buttons and silent switch.\r\n\r\n7) Pull up on the suction cup to lift up the display and open the iPhone.\r\nDo not raise the display more than 10Âº as there are ribbon cables along the right edge of the device connecting the display to the logic board.\r\n\r\n8) Remove the following tri-point Y000 screws from the lower connector bracket:\r\n- Three 1.2 mm screws\r\n- One 2.4 mm screw\r\n8) Remove the display assembly.\r\n\r\n9) Use a pair of tweezers with blunt tips to peel back one of the adhesive strips on the lower edge of the battery.\r\n', 1, 'anvesh_lingampalli', 1, '2017-12-05 22:21:26'),
(4, 'Electronics ', 'Xbox 360 HDD Replacement', 'Simple replacement of the actual hard drive in the 360\'s HDD enclosure. Microsoft makes it expensive or difficult to upgrade your hard drive by limiting your options with said upgrade.\r\n\r\nRemove the four T10 Torx screws.\r\nSlide the cover towards the back of the enclosure and remove. There is a small dot of lock-tite on each screw.', 1, 'anvesh_lingampalli', 1, '2017-12-06 01:25:57'),
(5, 'Household', 'Elizabeth Nelser', 'A sticking deadbolt is a common nuisance for homeowners. It can be caused by debris, weather, and general wear and tear. This guide will instruct users how to repair a sticking deadbolt. Fortunately, this is an intermediate fix and the estimated time to complete this repair is thirty to forty-five minutes.\r\n\r\n1) Use a Phillips screwdriver to remove both of the Â¾-inch screws from the strike plate.\r\n\r\n2) Remove both of the 2.5 inch mounting screws from the lock cylinder.\r\n\r\n3) After all four screws have been taken out, slide the latch of the deadbolt out of the door frame.\r\n\r\n4) Insert dry powdered graphite into the key cylinder of the deadbolt.\r\nPlace the key into the cylinder to lubricate and clean the chamber.\r\nIf it is difficult to turn the key, then apply more dry powdered graphite into the cylinder.\r\n\r\n5) Apply the dry powdered graphite to the latch of the deadbolt.\r\nUse a rag to remove excess dry powdered graphite from the latch. \r\n\r\n6) Use a Phillips screwdriver to screw in both of the Â¾-inch screws back into the strike plate.', 1, 'anvesh_lingampalli', 2, '2017-12-06 01:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `article_reviews`
--

CREATE TABLE `article_reviews` (
  `review_id` int(11) NOT NULL,
  `post_type` varchar(15) NOT NULL,
  `article_id` int(11) NOT NULL,
  `review_posted_userId` int(11) NOT NULL,
  `review_posted_username` varchar(30) NOT NULL,
  `review` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article_reviews`
--

INSERT INTO `article_reviews` (`review_id`, `post_type`, `article_id`, `review_posted_userId`, `review_posted_username`, `review`) VALUES
(1, 'article', 1, 1, 'nikil_chilkuru', 'abcd'),
(2, 'article', 1, 1, 'nikil_chilkuru', 'Excellent Service !!'),
(3, 'article', 2, 1, 'nikil_chilkuru', 'Extraordinary Service !!'),
(12, 'article', 1, 1, 'nikil_chilkuru', 'You are an Excellent Plumber'),
(14, 'advertisement', 11, 1, 'nikil_chilkuru', 'Awesome Service !!'),
(15, 'advertisement', 7, 1, 'nikil_chilkuru', 'A good and reliable service'),
(16, 'article', 4, 1, 'nikil_chilkuru', 'Not bad !!'),
(18, 'article', 2, 1, 'nikil_chilkuru', 'This guy is awesome'),
(19, 'article', 3, 1, 'nikil_chilkuru', 'Dependable'),
(21, 'article', 3, 1, 'nikil_chilkuru', 'terrible'),
(22, 'article', 3, 1, 'nikil_chilkuru', 'sucks'),
(23, 'article', 1, 3, 'admin_user', 'admin note : Please include your updated contact'),
(24, 'article', 1, 5, 'nikilesh_chilkuru', 'Good informative article');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `query_id` int(11) NOT NULL,
  `posted_userId` int(11) NOT NULL,
  `posted_user` varchar(30) NOT NULL,
  `query_title` varchar(80) NOT NULL,
  `contact_email` varchar(30) NOT NULL,
  `query` text NOT NULL,
  `date_posted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`query_id`, `posted_userId`, `posted_user`, `query_title`, `contact_email`, `query`, `date_posted`) VALUES
(2, 1, 'nikil_chilkuru', 'Regarding Price', 'anvesh@hotmail.com', 'How can I know the price for a service being offered', '2017-12-14 02:29:02'),
(3, 1, 'nikil_chilkuru', 'Price?', 'lingam@hotmail.com', 'Why don\'t I see the price for a service', '2017-12-14 02:30:01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `service_provider` tinyint(1) NOT NULL,
  `reputation` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `email`, `password`, `service_provider`, `reputation`) VALUES
(1, 'Nikil', 'Chilkuru', 'nikil_chilkuru', 'nchilkur@iu.edu', '827ccb0eea8a706c4c34a16891f84e7b', 0, 9),
(2, 'Virat', 'Kohli', 'virat_kohli', 'kohli234@gmail.com', '07381d072001e1bc281bac1ca74ee049', 0, 1),
(3, 'Admin', 'User', 'admin_user', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 0, 1),
(4, 'Bhargava', 'Sharma', 'bhargava_sharma', 'bharvadl@indiana.edu', 'fcea920f7412b5da7be0cf42b8c93759', 0, 1),
(5, 'Nikilesh', 'Chilkuru', 'nikilesh_chilkuru', 'nikhileshkarthik7@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `article_reviews`
--
ALTER TABLE `article_reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`query_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `article_reviews`
--
ALTER TABLE `article_reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `query_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
