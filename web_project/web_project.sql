-- --------------------------------------------------------

--
-- Table structure for table `all_comments`
--

CREATE DATABASE web_project;
USE web_project;


CREATE TABLE `all_comments` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_comments`
--

INSERT INTO `all_comments` (`id`, `username`, `comment`) VALUES
(1, 'victor', 'Why do websites hate the coronavirus? They have to use UDP to avoid having to do handshakes'),
(2, 'victoria', 'My life...'),
(3, 'test', 'No jokes here just serious stuff'),
(4, 'victor', 'Sorry i\'ve ran out of ideas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `first_name`, `last_name`, `email`, `address`) VALUES
(1, 'victor', 'pvictor', 'victor', 'vic', 'victor@gmail.com', '4 Cardigan St'),
(2, 'victoria', 'pvictoria', 'victoria', 'vic', 'victoria@gmail.com', '10 Cardigan St'),
(3, 'test', 'test123', 'test', 'te', 'test1020@gmail.com', '15 Cardigan St');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_comments`
--
ALTER TABLE `all_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_comments`
--
ALTER TABLE `all_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

