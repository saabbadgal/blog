-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2020 at 04:45 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(4, 'Learn Marketing', 'learn-marketing', '2020-07-06 06:52:39', '2020-07-06 06:52:39'),
(5, 'Tips and Tricks', 'tips-and-tricks', '2020-07-06 06:52:50', '2020-07-06 06:52:50'),
(6, 'Learn Digital Marketing', 'learn-digital-marketing', '2020-07-06 07:05:44', '2020-07-06 07:05:44'),
(7, 'Tips and Tricks-DM', 'tips-and-tricks-dm', '2020-07-06 07:06:37', '2020-07-06 07:06:37');

-- --------------------------------------------------------

--
-- Table structure for table `category_posts`
--

CREATE TABLE `category_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_posts`
--

INSERT INTO `category_posts` (`id`, `category_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 4, 1, NULL, NULL),
(2, 5, 1, NULL, NULL),
(3, 6, 1, NULL, NULL),
(4, 7, 1, NULL, NULL),
(5, 4, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `metas`
--

CREATE TABLE `metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `metas`
--

INSERT INTO `metas` (`id`, `title`, `description`, `keywords`, `author`, `status`, `created_at`, `updated_at`) VALUES
(8, '1st', '1st', '1st', '1st', 0, '2020-07-03 02:13:58', '2020-07-03 02:23:26'),
(9, 'Learn Marketing Organization', '2nd', '2nd', '2nd', 1, '2020-07-03 02:16:24', '2020-07-12 18:35:13'),
(10, '3rd', '3rd', '3rd', '3rd', 0, '2020-07-03 02:16:39', '2020-07-03 02:19:25'),
(11, '4th', '4th', '4th', '4th', 0, '2020-07-03 02:16:59', '2020-07-03 02:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_10_110233_create_posts_table', 1),
(5, '2020_06_10_111331_create_tags_table', 1),
(6, '2020_06_10_111528_create_categories_table', 1),
(7, '2020_06_10_111655_create_category_posts_table', 1),
(8, '2020_06_10_111713_create_post_tags_table', 1),
(9, '2020_06_13_110523_create_post_paragraphs_table', 1),
(10, '2020_06_13_121757_create_roles_table', 1),
(11, '2020_06_16_075502_add_user_id_field_in_posts_table', 1),
(12, '2020_06_17_080720_add_image_field_in_post_paragraph_table', 1),
(13, '2020_06_17_120432_create_post_users_table', 1),
(14, '2020_06_19_120631_add_image_width_height_field_in_posts_table', 2),
(15, '2020_06_19_123622_add_image_width_height_field_in_post_paragraph_table', 3),
(16, '2020_07_03_052633_add_column_posts_table', 4),
(17, '2020_07_03_053030_add_column_paragraph_table', 5),
(20, '2020_07_03_070001_create_metas_table', 6),
(23, '2020_07_03_081454_add_c', 7),
(24, '2020_07_03_081734_add_columns_posts_table', 8),
(25, '2020_07_03_053633_add_column_posts_table', 9),
(26, '2020_07_04_082916_create_profiles_table', 10),
(27, '2020_07_04_130611_create_subscriber_table', 11),
(28, '2020_07_04_131447_create_jobs_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `posted_by` int(11) NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `like` bigint(20) UNSIGNED DEFAULT NULL,
  `dislike` bigint(20) UNSIGNED DEFAULT NULL,
  `sort` bigint(20) UNSIGNED NOT NULL,
  `reading_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `width` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `subtitle`, `slug`, `status`, `posted_by`, `body`, `image`, `like`, `dislike`, `sort`, `reading_time`, `created_at`, `updated_at`, `user_id`, `width`, `height`, `meta_title`, `meta_description`, `meta_keywords`, `image_alt`) VALUES
(1, 'HOW TO DRIVE ENGAGEMENT THROUGH INSTAGRAM CAPTIONS ?', 'HOW TO DRIVE ENGAGEMENT THROUGH INSTAGRAM CAPTIONS ?', 'how-to-drive-engagement-through-instagram-captions', 1, 4, '<p>If you want your account to gain higher visibility and build an online community around your brand increasing the engagement should be your goal for most of your Instagram posts. And however, Instagram started as a visual platform but it\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&#39;s not about the images anymore. You need to have a great image that\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&#39;ll grab someone\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&#39;s attention as they scroll down. But there\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&#39;s also sometimes else that\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&#39;ll definitely gonna stop someone\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&#39;s attention as they scroll down if it\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&#39;s worthy. So what\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&#39;s that something else? 1.Instagram captions As you start to improve the Instagram caption you write, there are the top 10 easy to deploy that will make sure that the entire process is easier for you. try to follow all these tips and you \\\\\\\\\\\\\\\\\\\\\\\\&#39;ll be on the path to creating engagement driving post. Use your Instagram captions to add value to your followers. 2. 150 character = more engagement Research by sprout social showed that most engaging Instagram post has captions between 140 -150 character. Short and sweet Instagram captions are considered to be good Instagram captions because they are easier for the followers to read . Although longer captions can also drive engagement and engagement more meaningful it\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&#39;s less likely that every follower who sees it will definitely read it whole which leads to lower engagement level overall. 3. Show capability through your Instagram captions .The very effective way engagement through your Instagram captions is simple: write simple and good captions full of value. Creating content that legit valuable that people can\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&#39;t help but want to engage with it. remember consistency and authenticity add values to your content. You could share actionable how-tos, provocative insights, original inspiration, and much more 150 characters should be your aim before you have to click \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;more\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot; to view the rest. You only see 140 characters of the caption in the main feed. So what makes the followers read your longer captions? 4. Your 140 characters should be enticing Do not let the important information bury at the end of your caption. lead with the main idea and ensure that people will want to find out more about it. 5. Share a story lately, research has shown that humans remember things 22 times more when told a story. To keep readers engrossed all the way to the end and help them remember your point long after they have moved on, use more stories in your Instagram caption. 6.Guide for engagement Great Instagram captions give applied instructions on how you can engage this could be through the question to answer in comments suggestions to save your shared force or a prompt to tag their friends Asking for a particular form of engagement takes away to discuss and makes followers more likely to engage. lev apparel ✨ clothing brand in one of the one of their post lately I just did this were asking their followers to answer a question in the comments https://instagram.com/lev.apparel?igshid=1bfezeghuqzgh Ask your audience to do something after reading your caption. like answer a question in the comments. 6.Create easy to read Instagram captions. Much customization in captions isn\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&#39;t allowed by Instagram. you cannot use bolded text or different font sizes to break up the text and eventually it will become easy to end up with a block of small, uniform text that\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&#39;s challenging to read. People won\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&#39;t probably engage with your brand if they can\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&#39;t easily read it. This is the reason why you must get creative and use simple tricks to break up your captions into paragraphs. use emojis, punctuations and all caps to create makeshift layout and headings. Taylor Tieman attorney recently used these tactics to make her long caption easy-to-read https://instagram.com/taylormtieman_esq?igshid=shewsqywl2bt remember to use emojis cabs to break captions into easy-to-read chunks and line breaks. 7.Boost your writing skills Many among us now understand that our images are supposed to be interesting and captivating but the same thing goes for your captions as well. Just the way you use photography or design skills to create an eye-catching image you must use creative writing skills to create a caption that\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&#39;s fun to read for your followers. Use adjectives, stories, and imagery to bring your ideas to life. for example, try to be specific to avoid cliche or vagueness as possible. To have an idea on how to write Instagram captions creatively, take a glance at this lately captions by copywriter Laura Belgrade who is also known as talking shrimps. she uses an interesting adjective to create word pictures, hyper-specific analogies, personal stories for her followers:) Remember to use creative writing skills to make captions fun to read 8.Choose a specific Instagram caption style. Just as aesthetic as your consistent Instagram grid, your Instagram captions style should also be consistent. this will make your brand recognizable and feel cohesive in your follower\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&#39;s feeds which leads to higher engagement . By deciding on a consistent post structure and common elements, you can easily define your caption style. ask yourself the following questions to start by : 🔑Will I be using dashes, ellipses in periods to make line breaks? 🔑Will I be using emojis? how often? which ones? 🔑 I will start and end with each option. 🔑 Will I be using all caps or asterisk for emphasis? Have your social✨. a social media strategist how is structure her captions the same way to maintain a recognizable brand. Remember to style your caption to create a consistent recognizable look. 💛Using hashtags in the right way. Hashtags no doubt, drive engagement and allow random people to see your post and that is what we actually need higher engagement. but this is possible only when you are using hashtags correctly. Keep these few tips in mind when using hashtags: 🔑 use local hashtags. 🔑separate hashtags from main captions. 🔑use both niche hashtags and popular hashtags. 🔑use those hashtags that are relevant to your content. For instance, randy candle co.✨ Candle brand used a variety of different hashtags on posts, from broader to local hashtags, all rangers. Use hashtags correctly in captions to reach more people and increase engagement. 9.Mentioning users in your Instagram captions Extend your post reach to their audience by mentioning other users in your Instagram caption. if it\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&#39;s relevant to your post. People are likely to view your post and share it, when you mention someone else. because they receive a notification and all those extra views are likely to lead to more engagement. Do not mention another account in caption unless the caption has something in common or relevant otherwise it\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&#39;s more likely to look like a stamp https://instagram.com/stanczak.retail.consulting?igshid=tlqxiz92ves if relevant tag other users in your captions to increase your reach and engagement. 10. It\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&#39;s good to get personal in your Instagram caption It legitly humanizes brand when they share personal content about the people and the decision behind the brand on Instagram .and when your followers are able to relate they are more likely to engage with their content and this is for sure that when your audience share a related story about themselves in turn, it makes the level of conversation more deep happening on your post. For inspiration look at a recent post by vision quest shoes, there the founder shared her \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot;why\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&quot; for starting the brand with a selfie. https://instagram.com/visionquestshoes?igshid=die91wbqly4y Personal stories in caption do humanize your brand and engage followers. 11.To Drive engagement are crucial Images are initial interest to get your audience to stop scrolling and contemplate, for a moment only but else it\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&#39;s up to your Instagram caption to keep them reading, do something and prompt them to engage in more meaningful way through your post and these engagements make your thirst more likely to become a part of your community, buy your product or service or read out to collaborate. 12. What can take your followers beyond Instagram? Although you have not much control over how your followers see your content, still it\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\&#39;s a source of visibility for your brand. To reach your followers on your own terms, convert them into email subscribers. emails will make sure that your audience is up-to-date on your latest offers, products, and services. Bottom line: Your Instagram caption plays an important role as your Instagram image, especially when it comes to driving engagement. I hope that this article will enable you to write great Instagram captions to drive engagement.</p>', '1597478527.jpeg', NULL, NULL, 1, '13', '2020-07-27 00:04:03', '2020-08-15 02:32:07', 4, '', '', 'HOW TO DRIVE ENGAGEMENT THROUGH INSTAGRAM CAPTIONS ?', 'If you want your account to gain higher visibility', 'Instagram Marketing', '12 instagram Hacks: A cheat sheet for instagram influencers.'),
(2, 'New Post', 'New Post', 'new-post', 1, 1, 'New Post New Post New Post New Post New Post New Post New Post New Post New Post New Post New Post New Post New Post New Post New Post New Post New Post New Post New Post New Post New Post', '1596076240.jpeg', NULL, NULL, 22, '22', '2020-07-30 09:30:40', '2020-07-30 09:30:40', 1, '', '', 'New Post', 'New Post', 'New Post', 'New Post');

-- --------------------------------------------------------

--
-- Table structure for table `post_paragraph`
--

CREATE TABLE `post_paragraph` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, '1', '8', NULL, NULL),
(2, '2', '7', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_users`
--

CREATE TABLE `post_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linked` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `logo`, `facebook`, `instagram`, `linked`, `gmail`, `phone`, `created_at`, `updated_at`) VALUES
(1, '1594547999.png', 'https://www.facebook.com/learnmarketingorganization-114528943659602/?ref=bookmarks', 'https://www.facebook.com/learnmarketingorganization-114528943659602/?ref=bookmarks', 'https://www.facebook.com/learnmarketingorganization-114528943659602/?ref=bookmarks', 'learnmarketingorganization@gmail.com', '9781305319', '2020-07-04 03:38:15', '2020-07-12 16:59:59');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nickname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `slider` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider`) VALUES
(7, '1596044598.png'),
(8, '1596045106.png');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(2, 'Saab', 'Saabbadgalj5@gmail.com', '2020-07-06 04:11:24', '2020-07-06 04:11:24'),
(4, 'Saab Badgal', 'user@gmail.com', '2020-07-07 01:53:51', '2020-07-07 01:53:51'),
(5, 'Saab Badgal', 'Saabbadgal@gmail.com', '2020-07-11 03:09:44', '2020-07-11 03:09:44'),
(6, 'learnmarketing.org', 'learnmarketing.org@domstat.su', '2020-07-15 05:41:54', '2020-07-15 05:41:54');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(7, 'Marketing', 'marketing', '2020-07-10 09:36:37', '2020-07-10 09:36:37'),
(8, 'Digital Marketing', 'digital-marketing', '2020-07-10 09:36:52', '2020-07-10 09:36:52'),
(9, 'Alamdeep Singh', 'alamdeep-singh', '2020-07-10 09:37:05', '2020-07-10 09:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
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

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Saab Badgal', 1, 'Saabbadgal@gmail.com', NULL, '$2y$10$ckFis/zqUIetsu0py3qmyuJ5Cs9y62wccF5sFvWU02zvZf70hO0ui', NULL, '2020-06-19 06:06:49', '2020-06-19 06:06:49'),
(2, 'Alamdeep Singh', 1, 'alamdeepsingh@gmail.com', NULL, '$2y$10$w.5.b.KsNxfsxkPocHkDMuiS77pemf3iaHD.kkIydK0UNZ8d16Onu', NULL, '2020-06-21 05:12:18', '2020-06-21 05:12:18'),
(3, 'Alamdeep Singh', 1, 'alamdeepsinghdigitalmarketing@gmail.com', NULL, '$2y$10$zmLde34TWnlA6rYhg6Fyc.ggvibcWWxtYf67EBjLHstpr1ZwI46VC', 'dYordxT50UuJVtOgVtay4B27DlmVEmFRXRsZqN9PPiHLEMmtH7z01g2IVDXD', '2020-07-09 17:56:14', '2020-07-09 17:56:14'),
(4, 'Admin', 1, 'admin@gmail.com', NULL, '$2y$10$7C7DJhIw.Vij2p6sZIKgb.zVpkv0kFy393OsVrgDMN7k35oCQ6A5y', NULL, '2020-07-10 08:56:30', '2020-07-10 08:56:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_posts`
--
ALTER TABLE `category_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`(191));

--
-- Indexes for table `metas`
--
ALTER TABLE `metas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_paragraph`
--
ALTER TABLE `post_paragraph`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_users`
--
ALTER TABLE `post_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category_posts`
--
ALTER TABLE `category_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metas`
--
ALTER TABLE `metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_paragraph`
--
ALTER TABLE `post_paragraph`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_users`
--
ALTER TABLE `post_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
