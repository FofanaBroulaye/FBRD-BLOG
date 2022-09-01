-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 01 sep. 2022 à 12:10
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `laravel_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Occaecati rerum facilis explicabo veritatis et.', '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(2, 'Culpa illo pariatur dolor veniam ut.', '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(3, 'Quam atque tempora quis pariatur sunt.', '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(4, 'Voluptatibus sed adipisci nisi velit a molestiae voluptatem.', '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(5, 'Labore quisquam consequuntur nihil non ea eligendi.', '2022-08-25 14:13:39', '2022-08-25 14:13:39');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_12_093929_create_posts_table', 1),
(6, '2022_08_12_094158_create_categories_table', 1),
(7, '2022_08_25_141023_add_photo_to_users_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Voluptas vitae est ullam non id est dolores.', 'Dolore rerum iusto sed minima totam voluptatibus adipisci. Et ipsum consequatur sit. Qui vel omnis omnis possimus voluptatibus ab. Quaerat consequuntur provident odit blanditiis excepturi accusamus. Mollitia libero hic quae distinctio alias molestiae. Quam placeat id non sapiente voluptatem eum.', 'https://via.placeholder.com/1000', 1, 4, '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(2, 'Ducimus explicabo saepe error iusto.', 'Eaque et vel aspernatur. Rerum ex et aperiam sequi ut et ratione minima. Consequatur et laudantium omnis qui nulla perferendis. Eum esse qui et magnam aspernatur voluptas officiis pariatur. Ipsam molestiae corrupti minus et aperiam. Delectus consectetur et cupiditate accusantium.', 'https://via.placeholder.com/1000', 2, 5, '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(3, 'Dolorem quia soluta molestiae explicabo impedit qui dolore rerum labore qui.', 'Aut nulla quisquam ad temporibus. Cum ex doloremque quis aut officiis provident quos. Vel ut explicabo veritatis necessitatibus neque sapiente. Ut omnis quia ut atque quo rem ut qui. Eaque est magni numquam et in dignissimos. Saepe aut eos ipsa qui aut qui.', 'https://via.placeholder.com/1000', 2, 5, '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(4, 'Voluptas asperiores consectetur rerum voluptatibus accusamus ex doloribus ut.', 'Officia deserunt aut expedita libero aut. Voluptate iusto at quia at. Aut quod officiis sint magnam quia. Corporis nulla qui dolorem dolores aspernatur corporis corrupti. Dignissimos aliquam soluta neque ut laborum. Et nemo vitae voluptas ea non reprehenderit.', 'https://via.placeholder.com/1000', 3, 4, '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(5, 'Ducimus vitae velit esse aut eum omnis maxime libero nulla quo libero.', 'Et quae quia esse velit unde similique et. Totam praesentium quos repellendus voluptatem quam. Blanditiis consequatur voluptas placeat eveniet. Quam officiis deleniti beatae explicabo aut maiores. Corrupti tempore rerum quod. Repellat qui ad dolorem.', 'https://via.placeholder.com/1000', 3, 4, '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(6, 'Et sit ut cupiditate quia sit tempore reprehenderit consequuntur minima.', 'Ab quos excepturi qui soluta in non. Praesentium repellat perferendis velit. Est dolor laborum eos nulla. Est quae voluptatem ratione dicta. Eum similique quo ut rerum voluptatum eaque. Nostrum sed aliquid dolorum enim aperiam nam.', 'https://via.placeholder.com/1000', 4, 4, '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(7, 'Delectus molestiae facere non ipsam delectus et nesciunt voluptatem minima et quibusdam.', 'Id rem asperiores omnis dolorem ut. Deserunt consequuntur voluptatem et. Vel in molestiae quia. Deleniti consequuntur vitae optio hic. Ipsum et corporis consequatur similique ratione debitis placeat. Quis at veritatis non ab voluptatem voluptatem natus.', 'https://via.placeholder.com/1000', 4, 4, '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(8, 'Repudiandae corrupti vel quas sit autem laborum qui perspiciatis labore similique ut ut.', 'Sunt officiis asperiores ut quia perspiciatis ipsam quas doloremque. Exercitationem fugiat consectetur cupiditate maiores. Ut ut qui laborum soluta. Quisquam est rerum consequuntur quod expedita unde. Cum adipisci velit iste quidem reprehenderit et rem. Ab perferendis odio voluptas sit illum sunt omnis sapiente.', 'https://via.placeholder.com/1000', 4, 4, '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(9, 'Fuga sit ea pariatur placeat velit eius.', 'YTERYURE', 'photos/BGQ3nRJjpf4vn6WBsFkta6aehgP8M8OsMCuqnhXL.jpg', 5, 9, '2022-08-25 14:13:39', '2022-08-25 15:32:11'),
(10, 'Alias aliquid magnam quis iusto dolor.', 'Dolorem est eum voluptatem et aut facere quaerat ipsum. Dicta cumque est nam in ipsa soluta sint. Ea quisquam distinctio aut atque. Ipsam repellat exercitationem tenetur quas molestiae. Sed aspernatur est nulla est dolores quisquam. Numquam placeat sed aspernatur ea quaerat consequatur aliquid.', 'https://via.placeholder.com/1000', 6, 3, '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(11, 'Ex ut qui enim inventore illum quidem.', 'Dolore quis suscipit fugiat aliquid cumque rerum. Nesciunt veniam libero nihil laborum odit rem et rem. Consequatur veniam voluptatibus hic in accusantium quas saepe voluptatem. Dolorem quis voluptatibus maxime quaerat eum quia voluptatem aut. Velit dignissimos dolores distinctio. Et omnis ab officia placeat vel consequatur.', 'https://via.placeholder.com/1000', 6, 3, '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(12, 'Doloribus quisquam qui quod tempore amet nulla consequatur ut enim pariatur.', 'Ut eum iusto ea commodi est sint optio. Voluptas voluptatum doloribus velit veritatis. Corrupti in cupiditate tenetur et cupiditate. Id ipsa vero ipsa rerum nobis aut. Sit aliquid ab et at. Iste qui velit est dolor placeat quibusdam minima.', 'https://via.placeholder.com/1000', 6, 3, '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(13, 'Ducimus id esse aut odit facere ut earum architecto veritatis aperiam in rerum.', 'Sit animi assumenda itaque necessitatibus eos. Praesentium ad cum ea blanditiis voluptas. Suscipit quibusdam sint eum nisi. Amet est sit distinctio perspiciatis quis sed labore. Non exercitationem minus deserunt voluptas eos. Ipsam enim et quas assumenda autem itaque qui quam.', 'https://via.placeholder.com/1000', 7, 1, '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(14, 'Eius aut maxime consequuntur exercitationem minima.', 'Nam cumque expedita dolor alias sequi. Saepe laudantium fugiat provident dolore ea. Natus doloribus sit cum voluptatem sit ea officia quo. Beatae quasi placeat autem. Perferendis voluptatibus sit laborum et. Ratione et omnis sed fuga inventore.', 'https://via.placeholder.com/1000', 7, 1, '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(15, 'Aliquam totam est consectetur quod ratione ipsa.', 'Qui corporis velit repellendus perferendis voluptatem voluptatem laboriosam recusandae. Adipisci sint eveniet commodi magnam. Veniam maxime dolorum facere fuga qui consequatur. Molestias distinctio et iure qui molestias. Debitis veniam ipsa minima tenetur molestias. Molestiae aut corporis quae nisi amet numquam.', 'https://via.placeholder.com/1000', 7, 1, '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(16, 'Laboriosam explicabo ut et omnis quia porro rerum id.', 'Et molestias aut ipsa rerum quo nostrum officia. Quaerat eveniet pariatur et quam saepe id. Ipsa et aliquam natus consequatur et laborum. Dolore odit culpa doloribus repellendus occaecati. Pariatur qui dolorem quod. Et accusantium sed ea est facilis libero doloremque.', 'https://via.placeholder.com/1000', 8, 5, '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(17, 'Aut nemo praesentium in illum enim dolores.', 'Cupiditate dolores neque voluptatem dolorem non. Est et voluptas quisquam voluptates. A reiciendis cumque odit quae ea possimus dolores aut. Sunt non numquam consectetur sunt nobis adipisci aut autem. Molestiae modi facere aperiam non culpa dignissimos. Saepe necessitatibus ut molestias alias.', 'https://via.placeholder.com/1000', 8, 5, '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(18, 'Dolorem explicabo sunt quis rem.', 'Asperiores eligendi sequi ea dolorum excepturi enim sunt. Quaerat occaecati nam quas ut qui quia vitae. Velit natus molestiae consequatur fuga. Quo ratione autem sed officia. Ipsam temporibus aut est et dicta. Voluptatem qui non reprehenderit explicabo qui.', 'https://via.placeholder.com/1000', 9, 5, '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(19, 'Reprehenderit voluptatem id consequatur reprehenderit asperiores magnam doloremque.', 'Facere distinctio illo in nihil eaque sit necessitatibus. Fugit non sed quae fuga. Rerum hic non blanditiis perspiciatis sed cumque quia. Rerum earum hic dolore velit. Odio minus perferendis ratione dolores enim doloribus et. Quod distinctio consequatur accusamus quaerat.', 'https://via.placeholder.com/1000', 10, 5, '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(20, 'Perferendis fuga optio tempore accusamus molestiae.', 'Necessitatibus repudiandae reiciendis assumenda nam velit qui dolores mollitia. Quasi reiciendis amet ad quis blanditiis autem facilis nemo. Fugiat nemo quasi laborum possimus nihil omnis nemo. Omnis asperiores id recusandae est. Qui ex aut quisquam rerum molestiae. Reprehenderit minus exercitationem dignissimos eum veniam quia.', 'https://via.placeholder.com/1000', 10, 5, '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(21, 'Chimpanzé', 'gftfyt', 'photos/unKiRWU3EAdBeOlBqmlCynegJNQ65Wn7HYul1DLP.jpg', 14, 3, '2022-08-25 15:21:54', '2022-08-25 15:21:54');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Maya Kunze', 'phahn@example.net', '2022-08-25 14:13:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8VgtrW53lC', '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(2, 'Gregory Considine MD', 'harber.jada@example.com', '2022-08-25 14:13:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qHvTDoKYIe', '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(3, 'Syble Macejkovic', 'green34@example.net', '2022-08-25 14:13:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2WV1yUSPWM', '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(4, 'Dr. Stella Von', 'nicole.ferry@example.com', '2022-08-25 14:13:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '47RmktR9Ms', '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(5, 'Agustina Cruickshank DDS', 'bednar.sydnie@example.org', '2022-08-25 14:13:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'osWmbFTpF6', '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(6, 'Jeramy Renner', 'mario.dooley@example.org', '2022-08-25 14:13:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NbFMoxHkK3', '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(7, 'Foster Grady', 'rondricka@example.com', '2022-08-25 14:13:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'r6bKcN9Q2S', '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(8, 'Braeden Witting', 'gsenger@example.org', '2022-08-25 14:13:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CYTxmt7dUV', '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(9, 'Miss Bette Fadel', 'larson.brent@example.net', '2022-08-25 14:13:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yjyoRbUYRg', '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(10, 'Roberto Howell', 'murray.skylar@example.net', '2022-08-25 14:13:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pvMWPeBOR9', '2022-08-25 14:13:39', '2022-08-25 14:13:39'),
(11, 'AMINATA DIALLO d', 'assunta.reichert@example.org', NULL, '$2y$10$nSdIgjkHf5EwjHUZV3pm2.L0JgPVOa8muRG2wZFsJmxHw.SH3O/6i', NULL, '2022-08-25 14:22:08', '2022-08-25 14:22:08'),
(12, 'admin 2d', 'fofana97@gmail.com', NULL, '$2y$10$tZ738W84BHBpy/7.gcfNWumNAE52lSLUp396Gy2AZZFQAY4/XvJA6', NULL, '2022-08-25 14:56:31', '2022-08-25 14:56:31'),
(13, 'Konaté Adama', 'admin@gmail.com', NULL, '$2y$10$6rOJ.Y6qfxRtC943fQLqZOXPSH9WD7VnQuITB04ib5l13r6Q3fPZa', NULL, '2022-08-25 15:05:52', '2022-08-25 15:05:52'),
(14, 'AMINATA DIALLO DIABY', 'showell@example.org', NULL, '$2y$10$zT39YK1dxqtP72jWTZC5oOQQFqb94CPFIpK5cMIKdBT24Pj/QPA8m', NULL, '2022-08-25 15:21:32', '2022-08-25 15:21:32'),
(15, 'Fofana Broulaye', 'fofanabr97@gmail.com', NULL, '$2y$10$nsoVVkZTkA5paaazmEb3SOpnd2Pj.h8fu89TqZEWjQQ0AvnSRFNUu', NULL, '2022-08-25 15:31:13', '2022-08-25 15:31:13');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
