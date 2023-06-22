-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Jun 2023 um 13:47
-- Server-Version: 10.4.18-MariaDB
-- PHP-Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cocktails_webfull_db`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cocktails`
--

CREATE TABLE `cocktails` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(250) NOT NULL,
  `summary` varchar(250) NOT NULL,
  `full_text` text NOT NULL,
  `category` tinyint(3) UNSIGNED DEFAULT NULL COMMENT '0.without cat, 1.Cocktails with Rum, 2.  Cocktails mit Cognac\r\n',
  `image` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `cocktails`
--

INSERT INTO `cocktails` (`id`, `id_user`, `name`, `summary`, `full_text`, `category`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'test', 'test', 'Lorem ipsum lorem ipsum', 0, 'image.jpg', '2023-06-21 13:03:24', '2023-06-21 13:03:24'),
(2, 1, 'Turnbuckle Cocktail with Maracuja', 'The Turnbuckle cocktail with maracuja is a refreshing and fruity cocktail that incorporates maracuja (passion fruit) as one of its key ingredients.', ' <p class=\"lead\">The Turnbuckle cocktail with maracuja is a refreshing and fruity cocktail that incorporates maracuja (passion fruit) as one of its key ingredients. It is a popular choice for those who enjoy tropical and tangy flavors in their cocktails.</p>\r\n\r\n    <h3>Recipe:</h3>\r\n    <p>Here\'s a general recipe to make the Turnbuckle cocktail with maracuja:</p>\r\n\r\n    <h4>Ingredients:</h4>\r\n    <ul>\r\n        <li>2 ounces of rum (white or dark)</li>\r\n        <li>1 ounce of maracuja (passion fruit) juice or puree</li>\r\n        <li>1/2 ounce of lime juice</li>\r\n        <li>1/2 ounce of simple syrup (adjust according to taste)</li>\r\n        <li>Ice cubes</li>\r\n        <li>Passion fruit garnish (optional)</li>\r\n    </ul>\r\n\r\n    <h4>Instructions:</h4>\r\n    <ol>\r\n        <li>Fill a cocktail shaker with ice cubes.</li>\r\n        <li>Add the rum, maracuja juice or puree, lime juice, and simple syrup to the shaker.</li>\r\n        <li>Shake the mixture vigorously for about 15-20 seconds to chill the ingredients and mix them well.</li>\r\n        <li>Strain the cocktail into a chilled glass filled with ice cubes.</li>\r\n        <li>Optionally, garnish with a slice of passion fruit on the rim or floating in the drink.</li>\r\n        <li>Serve and enjoy your Turnbuckle cocktail with maracuja!</li>\r\n    </ol>\r\n\r\n', 1, 'maracuja.jpg', '2023-06-21 13:03:24', '2023-06-21 13:03:24'),
(3, 2, 'Wardroom Cocktail', 'The Wardroom cocktail is a unique blend of flavors where Cognac meets Rum and Port Wine.', ' <p>The Wardroom cocktail is a unique blend of flavors where Cognac meets Rum meets Port Wine. It is a sophisticated and rich cocktail that combines the smoothness of Cognac, the complexity of Rum, and the sweetness of Port Wine. It is a perfect choice for those who enjoy complex and balanced cocktails.</p>\r\n\r\n    <h3>Recipe:</h3>\r\n    <p>Here\'s a general recipe to make the Wardroom cocktail:</p>\r\n\r\n    <h4>Ingredients:</h4>\r\n    <ul>\r\n        <li>1 ounce of Cognac</li>\r\n        <li>1 ounce of Rum</li>\r\n        <li>1/2 ounce of Port Wine</li>\r\n        <li>1/4 ounce of simple syrup (adjust according to taste)</li>\r\n        <li>2 dashes of Angostura bitters</li>\r\n        <li>Ice cubes</li>\r\n        <li>Orange peel or cherry for garnish (optional)</li>\r\n    </ul>\r\n\r\n    <h4>Instructions:</h4>\r\n    <ol>\r\n        <li>Fill a mixing glass with ice cubes.</li>\r\n        <li>Add the Cognac, Rum, Port Wine, simple syrup, and Angostura bitters to the glass.</li>\r\n        <li>Stir the mixture gently for about 20-30 seconds to chill the ingredients and combine the flavors.</li>\r\n        <li>Strain the cocktail into a chilled cocktail glass.</li>\r\n        <li>Optionally, garnish with a twist of orange peel or a cherry.</li>\r\n        <li>Serve and enjoy your Wardroom cocktail!</li>\r\n    </ol>', 2, 'wardroom.jpg', '2023-06-21 13:13:18', '2023-06-21 13:13:18'),
(4, 1, 'Morning Melancholia', 'The Morning Melancholia cocktail is a delightful blend where Cognac Sour meets Chartreuse & Orgeat.', '<p>The Morning Melancholia cocktail is a delightful blend where Cognac Sour meets Chartreuse & Orgeat. It is a balanced and aromatic cocktail that combines the richness of Cognac, the herbal notes of Chartreuse, and the sweetness of Orgeat syrup. It is a perfect choice for those who enjoy complex and flavorful cocktails.</p>\r\n\r\n    <h3>Recipe:</h3>\r\n    <p>Here\'s a general recipe to make the Morning Melancholia cocktail:</p>\r\n\r\n    <h4>Ingredients:</h4>\r\n    <ul>\r\n        <li>1 1/2 ounces of Cognac</li>\r\n        <li>1/2 ounce of Chartreuse (green or yellow)</li>\r\n        <li>1/2 ounce of Orgeat syrup</li>\r\n        <li>3/4 ounce of lemon juice</li>\r\n        <li>1/2 ounce of simple syrup (adjust according to taste)</li>\r\n        <li>Ice cubes</li>\r\n        <li>Lemon twist or cherry for garnish (optional)</li>\r\n    </ul>\r\n\r\n    <h4>Instructions:</h4>\r\n    <ol>\r\n        <li>Fill a cocktail shaker with ice cubes.</li>\r\n        <li>Add the Cognac, Chartreuse, Orgeat syrup, lemon juice, and simple syrup to the shaker.</li>\r\n        <li>Shake the mixture vigorously for about 15-20 seconds to chill the ingredients and mix them well.</li>\r\n        <li>Strain the cocktail into a chilled glass filled with ice cubes.</li>\r\n        <li>Optionally, garnish with a twist of lemon peel or a cherry.</li>\r\n        <li>Serve and enjoy your Morning Melancholia cocktail!</li>\r\n    </ol>', 2, 'Morning-Melancholia-Cocktail-Rezept.jpg', '2023-06-21 13:31:40', '2023-06-21 13:31:40'),
(5, 2, 'Calimocho Cocktail', 'The Calimocho cocktail is a refreshing fusion where red wine meets cola. ', '<p>The Calimocho cocktail is a refreshing fusion of red wine and cola. Originating from the Basque region of Spain, it is a simple and popular drink that combines the rich flavors of red wine with the sweetness and effervescence of cola. The Calimocho is a versatile cocktail that can be enjoyed on its own or as a base for adding other ingredients to create variations.</p>\r\n\r\n    <h3>Recipe:</h3>\r\n    <p>Here\'s a basic recipe to make the Calimocho cocktail:</p>\r\n\r\n    <h4>Ingredients:</h4>\r\n    <ul>\r\n        <li>4 parts red wine (such as Rioja or any other dry red wine)</li>\r\n        <li>2 parts cola</li>\r\n        <li>Ice cubes</li>\r\n        <li>Lemon or lime wedges for garnish (optional)</li>\r\n    </ul>\r\n\r\n    <h4>Instructions:</h4>\r\n    <ol>\r\n        <li>Fill a glass with ice cubes.</li>\r\n        <li>Pour the red wine into the glass, filling it about 4/5 of the way.</li>\r\n        <li>Slowly pour the cola into the glass, allowing it to mix with the red wine.</li>\r\n        <li>Gently stir the mixture to ensure it is well combined.</li>\r\n        <li>Optionally, garnish with a wedge of lemon or lime.</li>\r\n        <li>Serve and enjoy your Calimocho cocktail!</li>\r\n    </ol>', 3, 'Calimocho-Cocktail.jpg', '2023-06-21 13:31:40', '2023-06-21 13:31:40');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `motto` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `motto`, `created_at`, `updated_at`) VALUES
(1, 'Olivier', 'Ishimwe', 'oli@oli.com', '123', 'I believe I can fly', '2023-06-21 12:31:17', '2023-06-21 12:31:17'),
(2, 'Aline', 'Herbst', 'ah@aline.com', '123', 'Carp Diem', '2023-06-21 12:31:17', '2023-06-21 12:31:17');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `cocktails`
--
ALTER TABLE `cocktails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_von_users` (`id_user`) USING BTREE;

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `cocktails`
--
ALTER TABLE `cocktails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `cocktails`
--
ALTER TABLE `cocktails`
  ADD CONSTRAINT `user_id_von_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
