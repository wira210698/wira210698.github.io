--
-- Table structure for table `tb_comments`
--

CREATE TABLE `tb_comments` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ucapan` varchar(500) NOT NULL,
  `kehadiran` varchar(50) NOT NULL,
  `create_at_timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_comments`
--
ALTER TABLE `tb_comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_comments`
--
ALTER TABLE `tb_comments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

ALTER TABLE tb_comments CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
COMMIT;