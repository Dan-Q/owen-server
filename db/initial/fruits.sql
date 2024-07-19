CREATE TABLE `fruits` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO `fruits`(`name`) VALUES ('Apple'),('Banana'),('Cherry'),('Date'),('Elderberry'),('Fig'),('Grapefruit');
