-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2022 lúc 02:18 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hotel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'User'),
(2, 'Admin'),
(3, 'OHR');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tokens`
--

CREATE TABLE `tokens` (
  `user_id` int(11) NOT NULL,
  `token` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tokens`
--

INSERT INTO `tokens` (`user_id`, `token`, `created_at`) VALUES
(36, '08478f995be604304e5d5c985668f6ce', '2021-11-19 15:30:24'),
(36, '1cba373f538df802cc3bb30bdf12b982', '2021-11-17 18:15:37'),
(4, '81b510ab61933283295923fee6c6478c', '2022-11-29 13:02:05'),
(1, '7cc1d286bc8de21ac2f3410fd740ff67', '2022-11-29 13:18:59'),
(4, '5cf44b65199345ccd67bc28db925ff31', '2022-11-29 13:36:09'),
(2, '6f8f6d94e35a2cdae940f38330097a6d', '2022-11-29 13:40:38'),
(2, '140ae73fdf5ea9fa69562e5757650561', '2022-11-29 13:40:55'),
(4, '22d2d8e902f45ef8a325d86986d05d60', '2022-11-29 13:42:56'),
(2, '54c2bea024aaa0d05a4148521fec2428', '2022-11-29 14:13:15'),
(4, 'd2afa6c17fc1004fd07335a812644791', '2022-11-29 14:16:24'),
(4, '7a6aa0da1fa7f9179b89e3c0ecae4159', '2022-11-29 14:17:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(40) NOT NULL,
  `ID` varchar(7) NOT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`username`, `password`, `ID`, `role_id`) VALUES
('lengo', 'b4cbd48886a5331c5eb2fedadabe311c', '1', 1),
('nhatthanh', 'b4cbd48886a5331c5eb2fedadabe311c', '2', 3),
('admin', 'b4cbd48886a5331c5eb2fedadabe311c', '4', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
