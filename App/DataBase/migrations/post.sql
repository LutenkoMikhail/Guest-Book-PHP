--
-- Table structure `posts`
--
CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL auto_increment,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `is_published` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  Primary key(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
