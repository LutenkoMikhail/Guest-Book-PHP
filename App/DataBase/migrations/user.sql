--
-- Table structure `users`
--
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE (name),
  Primary key(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;