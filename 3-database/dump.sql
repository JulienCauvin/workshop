DROP TABLE IF EXISTS `users`;
CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    email VARCHAR(100) UNIQUE,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `date`)
VALUES
    (1, 'John', 'Doe', 'jdoe@example.com', '2022-01-05 14:23:54'),
    (2, 'Taylor', 'Otwell', 'lambo@example.com', '2015-11-12 09:03:22'),
    (3, 'Matthieu', 'Nicolas', 'mnico@gmail.com', '2022-05-25 09:23:03'),
    (4, 'Jason', 'Yuraq', 'jyu@yahoo.usa', '2021-12-30 07:15:22'),
    (5, 'Aimé', 'Jacquet', 'troiszero@cdm.fr', '2020-07-13 08:12:47'),
    (6, 'Emeric', 'Noé', 'enoe@gmail.com', '2020-10-03 16:15:00'),
    (7, 'Calixte', 'Loann', 'cloann@gmail.com', '2022-10-20 12:00:00'),
    (8, 'Basile', 'Boli', 'bboli@gmail.com', '2014-08-07 15:12:47'),
    (9, 'Boniface', 'Jules', 'bjules@gmail.com', '2020-07-13 10:27:21'),
    (10, 'Jocelyn', 'Gauthier', 'jgauthier@gmail.com', '2021-02-12 09:02:17');
