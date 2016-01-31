CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sequence` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `new_window` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `details`, `link`, `sequence`, `status`, `new_window`, `created_at`, `updated_at`, `image`, `user_id`) VALUES
(1, 'slider title', 'slider details', '', 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '490703.jpg', 0),
(2, 'slider Nmae', 'sdfds', '', 1, 0, 0, '2015-11-05 03:01:09', '2015-11-05 03:01:09', 'n/a', 0),
(3, 'sdf', 's', '', 1, 0, 1, '2015-11-05 03:02:22', '2015-11-05 03:02:22', 'n/a', 0),
(4, 'ssss', 'sss', '', 2, 0, 1, '2015-11-05 03:06:37', '2015-11-05 03:06:37', '6.png', 0),
(5, 'HSBC Bank (exp) edit', 'asdas', '', 11, 0, 1, '2015-11-05 03:07:28', '2015-11-05 03:07:28', '6.png', 0),
(6, 'HSBC Bank (exp)', 'sdf', '', 2, 0, 1, '2015-11-05 03:08:17', '2015-11-05 03:08:17', '6.png', 0),
(7, 'HSBC Bank (exp)', 'sdf', '', 2, 0, 0, '2015-11-05 03:09:10', '2015-11-05 03:09:10', '6.png', 0),
(8, 'sdfsdfs', 'sdf', '', 2, 0, 1, '2015-11-05 03:10:18', '2015-11-05 03:10:18', '6.png', 0),
(9, 'HSBC Bank (exp)', 'sdf', '', 3, 0, 0, '2015-11-05 03:35:46', '2015-11-05 03:35:46', '41956.jpg', 0),
(10, '6', '6', '', 6, 0, 1, '2015-11-05 03:36:13', '2015-11-05 03:36:13', '20111.png', 0),
(12, 'HSBC Bank (exp)', 'sfsdf', '', 2, 0, 1, '2015-11-09 01:10:57', '2015-11-09 01:10:57', '91200.jpg', 3),
(13, 'Slider titile', 'hi', '', 1, 0, 1, '2015-11-09 23:56:10', '2015-11-09 23:56:10', '90475.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
