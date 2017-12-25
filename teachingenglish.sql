-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 25, 2017 lúc 10:12 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `teachingenglish`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `answer`
--

CREATE TABLE `answer` (
  `an_id` int(10) UNSIGNED NOT NULL,
  `an_content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `an_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ' ',
  `an_audio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ' ',
  `an_type` int(11) NOT NULL,
  `qu_id` int(10) UNSIGNED NOT NULL,
  `an_spell` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `an_correct` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `answer`
--

INSERT INTO `answer` (`an_id`, `an_content`, `an_image`, `an_audio`, `an_type`, `qu_id`, `an_spell`, `an_correct`, `created_at`, `updated_at`) VALUES
(12, 'ggggggggg', '/images/20171225091156.png', '', 2, 3, 'ggggggg', 'ggggggggg', '2017-12-25 02:11:56', '2017-12-25 02:11:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `ca_id` int(10) UNSIGNED NOT NULL,
  `ca_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ca_note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`ca_id`, `ca_name`, `ca_note`, `created_at`, `updated_at`) VALUES
(2, 'aaaaaaa', 'sssssss', '2017-12-24 23:49:53', '2017-12-24 23:49:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_19_172512_create_category_table', 1),
(4, '2017_12_19_172741_create_question_table', 1),
(5, '2017_12_19_172755_create_answer_table', 1),
(6, '2017_12_19_175134_add_reference_to_users_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `question`
--

CREATE TABLE `question` (
  `qu_id` int(10) UNSIGNED NOT NULL,
  `qu_content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qu_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qu_audio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qu_type` int(11) NOT NULL,
  `ca_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `question`
--

INSERT INTO `question` (`qu_id`, `qu_content`, `qu_image`, `qu_audio`, `qu_type`, `ca_id`, `created_at`, `updated_at`) VALUES
(3, 'nnnnnnnnnn', '/images/20171225073232.png', '', 2, 2, '2017-12-25 00:32:32', '2017-12-25 01:22:12'),
(4, 'mmmmmmmmmmm', '/images/20171225073312.png', '/audios/20171225084234.mp3', 1, 2, '2017-12-25 00:33:12', '2017-12-25 01:42:34'),
(5, 'ttttttttttttt44444444444', '/images/20171225073726.png', '/audios/20171225084225.mp3', 1, 2, '2017-12-25 00:37:26', '2017-12-25 01:42:25'),
(6, 'yyyyyyyygggggggg', '/images/20171225083928.png', '/audios/20171225084134.mp3', 1, 2, '2017-12-25 00:38:51', '2017-12-25 01:41:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cur_level` int(11) NOT NULL DEFAULT '1',
  `last_signed_on` datetime NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cur_category` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `full_name`, `cur_level`, `last_signed_on`, `is_admin`, `remember_token`, `created_at`, `updated_at`, `cur_category`) VALUES
(1, 'chung', 'nchung1608@gmail.com', '$2y$10$ElmY9D1CJNpv6exYuySFEedCnORNxGkPkYgtj31y1Ho22CLnFwbq6', 'Nguyễn Thành Chung', 1, '2017-12-25 00:00:00', 1, 'yijL1sQKxiFNtVqNMEXvd07e4C6EE843X75bhInU8vaEr7ZQblIyDgVhPBKv', '2017-12-24 19:52:13', '2017-12-24 19:52:13', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`an_id`),
  ADD KEY `answer_qu_id_foreign` (`qu_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ca_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qu_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_cur_category_foreign` (`cur_category`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `answer`
--
ALTER TABLE `answer`
  MODIFY `an_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `ca_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `question`
--
ALTER TABLE `question`
  MODIFY `qu_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_qu_id_foreign` FOREIGN KEY (`qu_id`) REFERENCES `question` (`qu_id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_cur_category_foreign` FOREIGN KEY (`cur_category`) REFERENCES `category` (`ca_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
