-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 09, 2024 at 08:24 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Trendings', 'Inactive', '2023-12-09 05:36:49', '2023-12-09 13:40:57'),
(2, 'Yvette Hawkins', 'Active', '2023-12-09 13:43:19', '2023-12-09 13:43:19'),
(3, 'Yvette Hawkins', 'Active', '2023-12-09 13:43:51', '2023-12-09 13:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `students` int NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses_category`
--

CREATE TABLE `courses_category` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses_category`
--

INSERT INTO `courses_category` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'How to cooks', 'Inactive', '2023-12-07 18:21:29', '2023-12-08 03:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedule` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speakers` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events_attendees`
--

CREATE TABLE `events_attendees` (
  `id` bigint UNSIGNED NOT NULL,
  `event_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_categories`
--

CREATE TABLE `event_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_categories`
--

INSERT INTO `event_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'WorkShops s', 'workshops-s', '2023-12-19 19:41:03', '2023-12-19 19:46:28');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `order`, `created_at`, `updated_at`) VALUES
(3, 'What kind of food processing course do we offer?', 'Foodpreneurs Hub offers short courses and a Food Business Program. The short courses are readily available on the school page all you have to do is click on the specific course available pay and start learning. Once you pay you have 30 days to complete the course. On the other hand, the food business program is a 3 months long intensive program focused on helping Aspiring food entrepreneurs start their food processing businesses.', 1, '2024-01-09 23:24:06', '2024-01-09 23:24:06'),
(4, 'Who can join the Foodpreneurs Hub Community?', 'You are welcome to join the FH community if you own a food business, work in a food company, or want to own a food processing business.', 2, '2024-01-09 23:24:43', '2024-01-09 23:24:43'),
(5, 'How can I enroll in a course?', 'You can enroll in the short courses on the school page by clicking on the —- button. Pay for the course and take the course at your convenience within 30 days. Click on the apply button to apply by paying for the application fees and filling out the application form for the food business program. After careful consideration of your application, successful candidates will be contacted to enroll in the program.', 3, '2024-01-09 23:25:04', '2024-01-09 23:25:04'),
(6, 'How can I contribute to the Foodpreneurs Hub blog?', 'Kindly send your articles on food processing with your name, short bio, and social media links or handles to article@foodpreneurshub.com and your articles will be published in your name after careful review by our editors.', 4, '2024-01-09 23:25:22', '2024-01-09 23:25:22'),
(7, 'How can I get support if I have questions or encounter issues with the platform?', 'Send an email with your enquiry or issues to support@foodpreneurshub.com and we will respond within 24 hrs.', 5, '2024-01-09 23:25:59', '2024-01-09 23:25:59'),
(8, 'Can I cancel or change my course enrollment ?', 'Unfortunately, you can not cancel or change your course enrollment. And there are no refunds once payment has been made.', 6, '2024-01-09 23:26:26', '2024-01-09 23:26:26'),
(9, 'Do you offer any certificate upon course completion?', 'Yes, we do offer certificates to students who have completed all the modules, and assignments and also met the criteria of completing the short course and business program.', 7, '2024-01-09 23:26:48', '2024-01-09 23:26:48');

-- --------------------------------------------------------

--
-- Table structure for table `foodprocessings`
--

CREATE TABLE `foodprocessings` (
  `id` bigint UNSIGNED NOT NULL,
  `category` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foodprocessings_categories`
--

CREATE TABLE `foodprocessings_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foodprocessings_categories`
--

INSERT INTO `foodprocessings_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Amazons', 'amazons', '2023-12-14 07:10:57', '2023-12-14 07:19:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(21, '2023_12_05_121636_create_events_table', 2),
(22, '2023_12_05_122628_create_blog_categories_table', 2),
(23, '2023_12_05_122637_create_blogs_table', 2),
(24, '2023_12_05_133513_create_professionals_table', 3),
(25, '2023_12_05_134318_create_events_attendees_table', 4),
(26, '2023_12_05_134708_create_subscribers_table', 4),
(27, '2023_12_05_135036_create_faqs_table', 4),
(28, '2023_12_05_135244_create_testimonials_table', 4),
(29, '2023_12_05_135431_create_success_stories_table', 4),
(30, '2023_12_07_113828_create_courses_category_table', 4),
(31, '2023_12_19_105424_create_event_categories_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professionals`
--

CREATE TABLE `professionals` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` int DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `socials` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `awards` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `philanthropy` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `signature` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `achievements` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `views` int NOT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `is_entrepreneur` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professionals`
--

INSERT INTO `professionals` (`id`, `name`, `slug`, `role`, `experience`, `image`, `location`, `socials`, `description`, `awards`, `philanthropy`, `signature`, `tag`, `achievements`, `views`, `is_featured`, `is_entrepreneur`, `created_at`, `updated_at`) VALUES
(5, 'Jane Does', 'jane-does', 'Chef, Entrepreneur', 8, 'professionals/WM8HpELL26duHaJO35n90QKkx5ScNKtbFXLzJUDS.png', 'Lagos, Nigeria', '[{\"facebook\":null,\"twitter\":null,\"linkedin\":null}]', '<p>John is a dedicated mentor and educator, sharing his knowledge with aspiring chefs and food enthusiasts. He has lectured at culinary schools and conducted workshops on culinary entrepreneurship, inspiring the next generation of culinary talents.</p><p>In addition to his culinary prowess, John is a savvy entrepreneur. He founded and successfully operates several food-related ventures, including restaurants, catering services, and a line of gourmet food products. His ability to blend creativity with business acumen has earned him recognition in both the culinary and entrepreneurial spheres.</p>', 'Throughout his career, John has received numerous awards and accolades, including several culinary competition victories and recognition for his contributions to the food industry.', 'John is also passionate about giving back to the community. He actively supports local food charities and initiatives focused on reducing food waste and promoting sustainability.', 'Known for his creative flair, John\'s signature style combines traditional techniques with a contemporary twist. His dishes are a reflection of his culinary philosophy: fresh, seasonal, and sustainable ingredients, expertly crafted into mouthwatering experiences.', '[\"Food Scientist\",\" Chef\",\" Entrepreneur\",\"\",\"\",\"\"]', '[{\"achievement_title\":\"NYU\",\"achievement_duration\":\"Feb 2020 - Oct 2023\",\"achievement_description\":\"Bachelor of Science in Business Administration (BSBA)\"},{\"achievement_title\":\"Founder and CEO\",\"achievement_duration\":\"Jan 2022 - Present\",\"achievement_description\":\"Food and Food Company\"}]', 0, 1, 1, '2024-01-10 00:12:22', '2024-01-10 00:46:34'),
(6, 'Alyssia Tayla', 'alyssia-tayla', 'International Cook, Entrepreneur', 3, 'professionals/UfZNeVFdDzqDiZAiPTtxmIxQ9KKDdqulGSZK3uNI.png', 'Moscow, Russia', '[{\"facebook\":null,\"twitter\":null,\"linkedin\":null}]', '<p>John is a dedicated mentor and educator, sharing his knowledge with aspiring chefs and food enthusiasts. He has lectured at culinary schools and conducted workshops on culinary entrepreneurship, inspiring the next generation of culinary talents.</p><p>In addition to his culinary prowess, John is a savvy entrepreneur. He founded and successfully operates several food-related ventures, including restaurants, catering services, and a line of gourmet food products. His ability to blend creativity with business acumen has earned him recognition in both the culinary and entrepreneurial spheres.</p>', 'Throughout his career, John has received numerous awards and accolades, including several culinary competition victories and recognition for his contributions to the food industry.', 'John is also passionate about giving back to the community. He actively supports local food charities and initiatives focused on reducing food waste and promoting sustainability.', 'Known for his creative flair, John\'s signature style combines traditional techniques with a contemporary twist. His dishes are a reflection of his culinary philosophy: fresh, seasonal, and sustainable ingredients, expertly crafted into mouthwatering experiences.', '[\"Food Scientist\",\" Chef\",\" Entrepreneur\",\"\"]', '[{\"achievement_title\":\"NYU\",\"achievement_duration\":\"Feb 2020 - Oct 2023\",\"achievement_description\":\"Bachelor of Science in Business Administration (BSBA)\"},{\"achievement_title\":\"Founder and CEO\",\"achievement_duration\":\"Jan 2022 - Present\",\"achievement_description\":\"Food and Food Company\"}]', 0, 0, 1, '2024-01-10 00:12:22', '2024-01-10 02:08:20'),
(7, 'Cherie Oluwayemisi', 'cherie-oluwayemisi', 'Entrepreneur, CEO Tiegar Foods', 2, 'professionals/jq4KpLt9wf1m6jrN2qGfDkWwQjxC2fCusuR40Chj.png', 'Lagos, Nigeria', '[{\"facebook\":null,\"twitter\":null,\"linkedin\":null}]', '<p>John is a dedicated mentor and educator, sharing his knowledge with aspiring chefs and food enthusiasts. He has lectured at culinary schools and conducted workshops on culinary entrepreneurship, inspiring the next generation of culinary talents.</p><p>In addition to his culinary prowess, John is a savvy entrepreneur. He founded and successfully operates several food-related ventures, including restaurants, catering services, and a line of gourmet food products. His ability to blend creativity with business acumen has earned him recognition in both the culinary and entrepreneurial spheres.</p>', 'Throughout his career, John has received numerous awards and accolades, including several culinary competition victories and recognition for his contributions to the food industry.', 'John is also passionate about giving back to the community. He actively supports local food charities and initiatives focused on reducing food waste and promoting sustainability.', 'Known for his creative flair, John\'s signature style combines traditional techniques with a contemporary twist. His dishes are a reflection of his culinary philosophy: fresh, seasonal, and sustainable ingredients, expertly crafted into mouthwatering experiences.', '[\"Food Scientist\",\" Chef\",\" Entrepreneur\",\"\"]', '[{\"achievement_title\":\"NYU\",\"achievement_duration\":\"Feb 2020 - Oct 2023\",\"achievement_description\":\"Bachelor of Science in Business Administration (BSBA)\"},{\"achievement_title\":\"Founder and CEO\",\"achievement_duration\":\"Jan 2022 - Present\",\"achievement_description\":\"Food and Food Company\"}]', 0, 0, 0, '2024-01-10 00:12:22', '2024-01-10 00:20:50'),
(8, 'Ike Rowina', 'ike-rowina', 'Chef, Influencer', 6, 'professionals/3ZblORyZMC7cK0XmhCzq53aOFThtTtzICjDYLeYp.png', 'London, United Kingdom', '[{\"facebook\":null,\"twitter\":null,\"linkedin\":null}]', '<p>John is a dedicated mentor and educator, sharing his knowledge with aspiring chefs and food enthusiasts. He has lectured at culinary schools and conducted workshops on culinary entrepreneurship, inspiring the next generation of culinary talents.</p><p>In addition to his culinary prowess, John is a savvy entrepreneur. He founded and successfully operates several food-related ventures, including restaurants, catering services, and a line of gourmet food products. His ability to blend creativity with business acumen has earned him recognition in both the culinary and entrepreneurial spheres.</p>', 'Throughout his career, John has received numerous awards and accolades, including several culinary competition victories and recognition for his contributions to the food industry.', 'John is also passionate about giving back to the community. He actively supports local food charities and initiatives focused on reducing food waste and promoting sustainability.', 'Known for his creative flair, John\'s signature style combines traditional techniques with a contemporary twist. His dishes are a reflection of his culinary philosophy: fresh, seasonal, and sustainable ingredients, expertly crafted into mouthwatering experiences.', '[\"Food Scientist\",\" Chef\",\" Entrepreneur\",\"\"]', '[{\"achievement_title\":\"NYU\",\"achievement_duration\":\"Feb 2020 - Oct 2023\",\"achievement_description\":\"Bachelor of Science in Business Administration (BSBA)\"},{\"achievement_title\":\"Founder and CEO\",\"achievement_duration\":\"Jan 2022 - Present\",\"achievement_description\":\"Food and Food Company\"}]', 0, 0, 1, '2024-01-10 00:12:22', '2024-01-10 00:33:46'),
(9, 'Dana Tanya Sabi', 'dana-tanya-sabi', 'Food Scientist', 3, 'professionals/IkMNeQADjWlUzHlcF7ut69c5NtyS0ZO9PErBTPO8.png', 'Toronto, Canada', '[{\"facebook\":null,\"twitter\":null,\"linkedin\":null}]', '<p>John is a dedicated mentor and educator, sharing his knowledge with aspiring chefs and food enthusiasts. He has lectured at culinary schools and conducted workshops on culinary entrepreneurship, inspiring the next generation of culinary talents.</p><p>In addition to his culinary prowess, John is a savvy entrepreneur. He founded and successfully operates several food-related ventures, including restaurants, catering services, and a line of gourmet food products. His ability to blend creativity with business acumen has earned him recognition in both the culinary and entrepreneurial spheres.</p>', 'Throughout his career, John has received numerous awards and accolades, including several culinary competition victories and recognition for his contributions to the food industry.', 'John is also passionate about giving back to the community. He actively supports local food charities and initiatives focused on reducing food waste and promoting sustainability.', 'Known for his creative flair, John\'s signature style combines traditional techniques with a contemporary twist. His dishes are a reflection of his culinary philosophy: fresh, seasonal, and sustainable ingredients, expertly crafted into mouthwatering experiences.', '[\"Food Scientist\",\" Chef\",\" Entrepreneur\",\"\"]', '[{\"achievement_title\":\"NYU\",\"achievement_duration\":\"Feb 2020 - Oct 2023\",\"achievement_description\":\"Bachelor of Science in Business Administration (BSBA)\"},{\"achievement_title\":\"Founder and CEO\",\"achievement_duration\":\"Jan 2022 - Present\",\"achievement_description\":\"Food and Food Company\"}]', 0, 1, 0, '2024-01-10 00:12:22', '2024-01-10 00:47:40');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('newsletter','community','ebook') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `name`, `type`, `created_at`, `updated_at`) VALUES
(3, 'mail@mail.com', NULL, 'newsletter', NULL, NULL),
(4, 'asljakls@sa.sacs', 'Mayowa', 'ebook', NULL, NULL),
(5, 'saas@a.asa', 'sasa', 'community', NULL, NULL),
(6, 'mayowatope119@gmail.com', NULL, 'newsletter', '2024-01-09 23:49:57', '2024-01-09 23:49:57'),
(7, 'mayowatope119@gmail.com', NULL, 'community', '2024-01-09 23:53:46', '2024-01-09 23:53:46'),
(8, 'vodi@mailinator.com', 'Ishmael Golden', 'ebook', '2024-01-09 23:59:08', '2024-01-09 23:59:08'),
(9, 'poxab@mailinator.com', 'Keegan Carroll', 'ebook', '2024-01-10 04:10:14', '2024-01-10 04:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `success_stories`
--

CREATE TABLE `success_stories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `success_stories`
--

INSERT INTO `success_stories` (`id`, `name`, `role`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Joelle Cross', 'Tempora ut qui verit', 'Nisi odio qui verita', '2023-12-09 15:57:28', '2023-12-09 16:01:44'),
(3, 'Kendall Barrys', 'Aute est illum id d', 'Quaerat harum sunt', '2023-12-09 15:58:44', '2023-12-09 15:58:44');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'support@food.com', '2023-12-04 23:48:38', '$2y$12$PN5m6J6T02T9IDXSqEYb1u8qsVc9l/4u4RpU3hNHqIXOOHG7KvmMO', NULL, '2023-12-04 23:48:38', '2023-12-04 23:48:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_category_id_foreign` (`category_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses_category`
--
ALTER TABLE `courses_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_attendees`
--
ALTER TABLE `events_attendees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_attendees_event_id_foreign` (`event_id`);

--
-- Indexes for table `event_categories`
--
ALTER TABLE `event_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodprocessings`
--
ALTER TABLE `foodprocessings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodprocessings_categories`
--
ALTER TABLE `foodprocessings_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `professionals`
--
ALTER TABLE `professionals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `success_stories`
--
ALTER TABLE `success_stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses_category`
--
ALTER TABLE `courses_category`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events_attendees`
--
ALTER TABLE `events_attendees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_categories`
--
ALTER TABLE `event_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `foodprocessings`
--
ALTER TABLE `foodprocessings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `foodprocessings_categories`
--
ALTER TABLE `foodprocessings_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professionals`
--
ALTER TABLE `professionals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `success_stories`
--
ALTER TABLE `success_stories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `blog_categories` (`id`);

--
-- Constraints for table `events_attendees`
--
ALTER TABLE `events_attendees`
  ADD CONSTRAINT `events_attendees_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
