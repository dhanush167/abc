-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2018 at 10:53 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(21, 'Bishop College '),
(22, 'Methodist College'),
(25, 'Ananda collage'),
(26, 'lynda Collage'),
(27, 'codeacodemy collage'),
(28, 'team treehouse collage');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(12) NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` varchar(255) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` varchar(12) NOT NULL,
  `post_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_tags`, `post_comment_count`, `post_status`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`) VALUES
(28, 'tutorial', '4', 'perfect', 21, 'maths', ' Belinda', '2018-01-21', '81.jpg', 'realworld to replicate the old ways of doing things while actively\r\ngenerating new modes of expression; how we learn to trust a new technol-\r\nogy and the new and strange sorts of texts that it produces; how we expand\r\nthe notion of who can write and who canâ€™t; and how we free our readers and\r\nwriters while at the same time trying to regulate their activities\r\n        '),
(29, 'youtube', '4', 'complete', 21, 'javascript', ' google', '2018-01-21', '25.jpg', 'dhanushka. The typewriter wasnâ€™t universally embraced as a writ-\r\ning tool when it appeared in the l870s because its texts were impersonal, it\r\nweakened handwriting skills, and it made too much noise. And computers,\r\nnow the writerâ€™s tool of choice, are still blamed by skeptics for a variety of ills,\r\nincluding destroying the English language, slowing down the writing process,\r\nspeeding writing up to the point of recklessness, complicating it, trivializing\r\nit, and encouraging people to write who may, as Thoreau might put it, have\r\nnothing to say '),
(30, 'root', '4', 'incomplete', 22, 'yahoo', ' ishan', '2017-08-19', '12 (1).jpg', 'well. Even so, there are always trust issues with text, and even the most wired\r\nusers have some internet activity that they shun: they may choose to have\r\ntheir paycheck deposited electronically, but they wonâ€™t pay bills online; they\r\nmay embrace virtual shopping but draw the line at online dating services;\r\nthey may have found their soul mate on JDate but balk at the idea of citing\r\nWikipedia in a research paper.\r\nWorse yet, thereâ€™s a lot of dark matter in cyberspace: fraud, hate, and\r\nexploitation abound online, not to mention inconsistency and inaccuracy and\r\na whole lot of cyberjunk. Weâ€™re still in the process of sorting the good from\r\nthe bad online, the useful from the spam. Weâ€™re still in the process of fi guring\r\nout just what to use the internet for. And weâ€™re still learning to trust the web,\r\neven as we become ever more dependent on it for the things that we need to\r\ndo every day '),
(31, 'underscore', '4', 'underscore', 26, 'belinda', ' wordpress', '2017-08-19', '02.jpg', ' It got me so excited! After that, I was like a sponge, and I took everything I\r\nlearned and ran with it! I became so confident in my skills and ability, that\r\nshortly after graduating, I was able to quickly and easily get myself my very first\r\nstudio job as a Front-End Web Developer in Calgary, Alberta. I really loved the\r\ngig! The people were awesome, the vibe was great; we played foosball, made\r\nfancy espresso drinks, ate pizza, worked late on cool projects, drank beer, you\r\nname it! It was a DREAM job! For a little while anyway... Eventually it wore off\r\non me, and just became normal, mundane, even boring'),
(32, 'chrome', '4', 'premade', 28, 'filezera', ' god zarc', '2017-08-19', '01.jpg', ' I love my wife. And when I would leave every day to go to work, something just\r\nfelt wrong. I hated leaving. I hated being away from her. '),
(33, 'oop', '4', 'amazing', 21, 'helloworld', 'amritha', '2017-11-19', '9.jpg', ' Let us say that John Doe has two email addresses while ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(3, 'dhanushka', '123', 'Rick', ' Ricky', 'rick123@gmail.com', '', 'subscriber', ''),
(4, 'peterson', '147582561', 'williams', ' peterson', 'peterson@10gmail.com', '', 'subscriber', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
