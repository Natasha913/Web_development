-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2021 at 08:21 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_p`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nid` int(20) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `nid`, `num`) VALUES
(3, 'natasha kainat', 'natasha1288', 'Mahi123#', 1234567897, 1681080446),
(4, 'mala', 'mala124', 'Mala1234#', 2147483647, 171803332),
(5, 'Kynat', 'Kynat12', 'Kynat123#', 2147483647, 1681080446);

-- --------------------------------------------------------

--
-- Table structure for table `allbook`
--

CREATE TABLE `allbook` (
  `id` int(5) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_id` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `qty` int(10) NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `allbooks`
--

CREATE TABLE `allbooks` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `c_id` int(10) NOT NULL,
  `qty` int(50) NOT NULL,
  `categories` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `des` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allbooks`
--

INSERT INTO `allbooks` (`id`, `name`, `c_id`, `qty`, `categories`, `price`, `des`, `img`) VALUES
(1, 'ddd', 1, 466, '23', 0, 'kll', 'storage/book_images/6106d7a7b8d74.png'),
(2, 'ddd', 1, 466, '23', 0, 'kll', 'storage/book_images/6106d7fc281ff.png'),
(3, 'natasha kainat', 1, 466, '23', 0, 'hjk', 'storage/book_images/6106d81f4279d.');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cid` int(10) NOT NULL,
  `quantity` int(50) NOT NULL,
  `price` int(20) NOT NULL,
  `description` text NOT NULL,
  `pimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cid` int(10) NOT NULL,
  `categories` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `des` text NOT NULL,
  `pimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `cid`, `categories`, `price`, `des`, `pimage`) VALUES
(1, 'natasha kainat', 1, '23', 0, 'hjk', 'storage/book_images/6106d86803a07.');

-- --------------------------------------------------------

--
-- Table structure for table `b_owner`
--

CREATE TABLE `b_owner` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nid` int(17) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b_owner`
--

INSERT INTO `b_owner` (`id`, `name`, `username`, `nid`, `pass`, `number`) VALUES
(2, 'natasha kainat', 'natasha12', 0, '', 1681080446),
(3, 'natasha kainat', 'natasha12', 1234567867, '', 1681080448),
(4, 'natasha kainat', 'natasha136', 2147483647, '', 1681080449),
(5, 'natasha kainat', 'natasha1363', 2147483647, '', 1681089334),
(6, 'natasha kainat', 'natasha122', 0, '', 1681080441),
(7, 'jahjsdhdj', 'gdhdjhkj12', 2147483647, '', 1681080445),
(9, 'Lila das', 'lina123', 0, '', 1688503332),
(10, 'natasha kainat', 'natasha1234', 0, '', 1681080466),
(11, 'Kynatun Mahin', 'natasha143', 0, '12345678234', 1681080447);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'horro'),
(7, 'Natasha'),
(6, 'nocat'),
(4, 'novel'),
(3, 'Romantic'),
(5, 'song bangla');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(5) NOT NULL,
  `com` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `com`) VALUES
(1, 'not good'),
(2, 'bad customer service'),
(3, 'good'),
(4, 'good'),
(5, 'excellent'),
(6, 'useful page'),
(7, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `cus`
--

CREATE TABLE `cus` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nid` int(20) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cus`
--

INSERT INTO `cus` (`id`, `name`, `username`, `password`, `nid`, `num`) VALUES
(7, 'Adrita Das', 'Adrita Das', 'Adri123#', 2147483647, 1918743399),
(8, 'Monish ', 'monisha12', 'Monisha123', 2147483647, 1814654329),
(9, 'Mohona Islam', 'mohona12', 'Mohona123#', 2147483647, 1716545453),
(10, 'Rahim Ali', 'rahimali', 'Rahim123#', 2147483647, 1916547687),
(11, 'Shimu Akter', 'Shimu Akter', 'Shimu123#', 2147483647, 1714534326);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nid` int(20) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deliv`
--

CREATE TABLE `deliv` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nid` int(20) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliv`
--

INSERT INTO `deliv` (`id`, `name`, `username`, `password`, `nid`, `num`) VALUES
(3, 'josim  mia', 'josim134', 'Josim#123', 2147483647, 1815050985),
(4, 'Ovijit Shaha', 'ovijit1', 'Ovijit123#', 2147483647, 1681080446),
(5, 'Korim Ahmed', 'Korim113', 'Korim123#', 2147483647, 1681080448);

-- --------------------------------------------------------

--
-- Table structure for table `newbook`
--

CREATE TABLE `newbook` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `categories` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `description` text NOT NULL,
  `pimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newbook`
--

INSERT INTO `newbook` (`id`, `name`, `quantity`, `categories`, `price`, `description`, `pimage`) VALUES
(21, 'Florida', 20, 'Short Stories', 300, '**A BARACK OBAMA BOOK OF THE YEAR****2018 ', 'storage/book_images/61115c4e99ea8.png'),
(22, 'Circe', 23, 'Horror', 444, 'circe', 'storage/book_images/611180c7486f2.png'),
(23, 'Life of pi', 19, 'Action and Adventure', 299, 'Life of pi', 'storage/book_images/611180f7d95ce.png');

-- --------------------------------------------------------

--
-- Table structure for table `off`
--

CREATE TABLE `off` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `day` date NOT NULL,
  `howmany` int(10) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `off`
--

INSERT INTO `off` (`id`, `name`, `day`, `howmany`, `status`) VALUES
(12, 'natasha ', '2021-04-21', 2, 'done'),
(16, 'Rohim', '2021-04-21', 2, 'done'),
(17, 'Mahin', '2021-04-03', 3, 'request'),
(18, 'Shifat', '2021-04-09', 1, 'request'),
(19, 'Shifat', '2021-04-09', 1, 'request');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nid` int(20) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `name`, `username`, `password`, `nid`, `num`) VALUES
(7, 'Rahim Islam', 'rahim122', 'Rahim123#', 2131134568, 1655803332),
(19, 'Anika Rahman', 'Anika113', 'Anika123#', 2147483647, 1918087870);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `nid` int(20) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `address`, `payment`, `quantity`, `nid`, `num`) VALUES
(1, 'natasha kainat', 'baddanagar', '0', 1, 0, 1688503332),
(6, 'natasha kainat', 'asghjkl', '0', 2, 1234567891, 2147483647),
(7, 'shahariar', 'baddanagar', '0', 4, 2147483647, 1681080449),
(8, 'adnun', 'mirpur', 'Bkash', 3, 1234567834, 1688503332);

-- --------------------------------------------------------

--
-- Table structure for table `paymentt`
--

CREATE TABLE `paymentt` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `nid` int(20) NOT NULL,
  `num` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentt`
--

INSERT INTO `paymentt` (`id`, `name`, `address`, `payment`, `quantity`, `nid`, `num`) VALUES
(4, 'Shimu Akter', 'mirpur', 'Bkash', 2, 1234567891, 1681080449);

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `nid` int(20) NOT NULL,
  `num` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`id`, `name`, `address`, `payment`, `quantity`, `nid`, `num`) VALUES
(1, 'Shipra Islam', 'New Market', 'Nogod', 1, 2147483647, 1717089876);

-- --------------------------------------------------------

--
-- Table structure for table `rentt`
--

CREATE TABLE `rentt` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `nid` int(20) NOT NULL,
  `num` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rentt`
--

INSERT INTO `rentt` (`id`, `name`, `address`, `payment`, `quantity`, `nid`, `num`) VALUES
(3, 'Natasha', 'baddanagar', 'Debit Card', 1, 2147483647, 1675543920);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(5) NOT NULL,
  `rate` varchar(10) NOT NULL,
  `reviews` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `rate`, `reviews`) VALUES
(1, '***', 'good'),
(2, '**', 'fine'),
(3, '*', 'bad'),
(4, '*', 'bad'),
(5, '**', 'bad'),
(6, '**', 'good'),
(7, '*', 'very bad'),
(8, '*****', 'Excellent');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`) VALUES
(2, 'Rahim', 'rahim123', 'Rahim12#', ''),
(3, 'natasha kainat', 'natasha13', 'Mahi123?', ''),
(4, 'Adnan Shaha', 'adnan12', 'Adnan123#', ''),
(5, 'natasha kainat', 'natasha12', 'Mahi12345#', 'adn@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`nid`);

--
-- Indexes for table `allbook`
--
ALTER TABLE `allbook`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `b_id` (`b_id`);

--
-- Indexes for table `allbooks`
--
ALTER TABLE `allbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `b_id` (`cid`),
  ADD UNIQUE KEY `c_id` (`cid`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `b_owner`
--
ALTER TABLE `b_owner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`nid`,`number`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cus`
--
ALTER TABLE `cus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`nid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`nid`);

--
-- Indexes for table `deliv`
--
ALTER TABLE `deliv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newbook`
--
ALTER TABLE `newbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `off`
--
ALTER TABLE `off`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`nid`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nid` (`nid`);

--
-- Indexes for table `paymentt`
--
ALTER TABLE `paymentt`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nid` (`nid`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nid` (`nid`);

--
-- Indexes for table `rentt`
--
ALTER TABLE `rentt`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nid` (`nid`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `allbook`
--
ALTER TABLE `allbook`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `allbooks`
--
ALTER TABLE `allbooks`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `b_owner`
--
ALTER TABLE `b_owner`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cus`
--
ALTER TABLE `cus`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deliv`
--
ALTER TABLE `deliv`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `newbook`
--
ALTER TABLE `newbook`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `off`
--
ALTER TABLE `off`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `paymentt`
--
ALTER TABLE `paymentt`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rentt`
--
ALTER TABLE `rentt`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `fk_book_categories` FOREIGN KEY (`cid`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
