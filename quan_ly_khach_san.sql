-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2021 lúc 10:45 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quan_ly_khach_san`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `details_description` text COLLATE utf8_unicode_ci NOT NULL,
  `is_hot` tinyint(1) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `view` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `article`
--

INSERT INTO `article` (`id`, `title`, `slug`, `image`, `summary`, `details_description`, `is_hot`, `active`, `view`, `created_at`, `updated_at`) VALUES
(3, '6 quán cà phê nhất định phải ghé nếu đến TP.HCM', '6-quan-ca-phe-nhat-dinh-phai-ghe-neu-den-tp-hcm', './public/upload/article/cafe_3_4.jpg', '  Khi các ngân hàng tăng vốn điều lệ thông qua bán vốn cho đối tác chiến lược, chia cổ tức hay phát hành cổ phiếu thưởng \"khủng\" chưa kịp lắng xuống,...                             \r\n                                \r\n                                \r\n                                \r\n                                \r\n                                \r\n                                ', '<p>Anh cũng khuy&ecirc;n mọi người kh&ocirc;ng n&ecirc;n ngồi l&ecirc;n tấm phủ trang tr&iacute;, đặt ph&iacute;a cuối hoặc giữa giường (bed runner). &quot;H&atilde;y tin t&ocirc;i, họ chẳng bao giờ giặt ch&uacute;ng đ&acirc;u. V&igrave; vậy, đừng chạm v&agrave;o n&oacute;&quot;, anh n&oacute;i.</p>\r\n\r\n<p><img alt=\"Miguel khuyến cáo mọi người không nên ngồi lên những gấm phủ trang trí giường trong các khách sạn. Ảnh: Amazon\" src=\"https://i1-dulich.vnecdn.net/2021/10/12/Untitled-3-7053-1634007182.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=1Poqt014-qwHTq-NWzMSOA\" style=\"margin:0px; width:469px\" /></p>\r\n\r\n<p>Miguel khuyến c&aacute;o mọi người kh&ocirc;ng n&ecirc;n ngồi l&ecirc;n những gấm phủ trang tr&iacute; giường trong c&aacute;c kh&aacute;ch sạn. Ảnh:&nbsp;<em>Amazon</em></p>\r\n\r\n<p>Miguel cũng tiết lộ kể từ khi dịch bệnh b&ugrave;ng ph&aacute;t, anh bắt đầu c&oacute; th&oacute;i quen mang theo những tấm phủ bồn cầu loại d&ugrave;ng một lần v&agrave; đặt ch&uacute;ng l&ecirc;n mỗi lần c&oacute; nhu cầu. Anh cũng mang theo cốc, muối v&agrave; hạt ti&ecirc;u, một bộ dao k&eacute;o bằng tre c&aacute; nh&acirc;n c&ugrave;ng c&agrave; ph&ecirc; g&oacute;i v&igrave; nhiều kh&aacute;ch sạn kh&ocirc;ng cung cấp đồ uống miễn ph&iacute; n&agrave;y. Miguel n&oacute;i rằng anh kh&ocirc;ng muốn thức dậy v&agrave;o buổi s&aacute;ng v&agrave; nhận ra đ&atilde; bỏ lỡ bữa s&aacute;ng, cũng như kh&ocirc;ng c&oacute; bất kỳ g&oacute;i c&agrave; ph&ecirc; hay đồ uống n&agrave;o trong ph&ograve;ng.</p>\r\n\r\n<p>Ngo&agrave;i ra, nam tiếp vi&ecirc;n cũng mang theo một chiếc khăn nhỏ đề ph&ograve;ng trường hợp kh&aacute;ch sạn kh&ocirc;ng cung cấp khăn, hoặc anh cần d&ugrave;ng ở những nơi kh&aacute;c. V&agrave; điều cuối c&ugrave;ng, anh muốn du kh&aacute;ch mang theo một cuốn sổ nhỏ ghi số điện li&ecirc;n lạc của đại sứ qu&aacute;n nước m&igrave;nh. &quot;Nghe c&oacute; vẻ cực đoan, nhưng bạn kh&ocirc;ng bao giờ biết được chuyện g&igrave; sẽ xảy ra với m&igrave;nh v&agrave;o ng&agrave;y mai. Ng&agrave;y nay, thế giới đang phải đối mặt với chiến tranh v&agrave; thi&ecirc;n tai, bệnh dịch. Điều quan trọng l&agrave; trong trường hợp cần thiết, bạn sẽ biết c&aacute;ch li&ecirc;n lạc với quốc gia của m&igrave;nh v&agrave; th&ocirc;ng b&aacute;o cho họ biết về việc m&igrave;nh cần hỗ trợ để được hồi hương&quot;.</p>\r\n', 1, 1, 0, '2021-10-07 11:38:59', '2021-10-07 20:49:26'),
(4, 'Khai trương khách sạn dưới lòng đất đầu tiên trên thế giới', 'khai-truong-khach-san-duoi-long-dat-dau-tien-tren-the-gioi', './public/upload/article/news_0_photo-7-154233400744952298365_390-200.jpg', 'Nằm sâu 88m trong một mỏ đá, khách sạn này có tổng cộng 18 tầng, trong đó 16 tầng dưới lòng đất.', '<p>ádsadaad</p>\r\n>>', 0, 1, 0, '2021-10-07 21:24:36', '2021-10-07 21:24:36'),
(5, 'Chrome thông báo cho người dùng trang web nào không an toàn', 'chrome-thong-bao-cho-nguoi-dung-trang-web-nao-khong-an-toan', './public/upload/article/news_0_f_pix_3_390-200.jpg', 'Hôm nay, Google chính thức tung ra một phiên bản Chrome mới với tính năng thông báo cho người dùng biết trang web nào là không an toàn.                                               ', 'fsdfdsf>>>', 1, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `phone`, `password`, `active`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Chu Minh Hiệp', 'chuminhhiep02112000@gmail.com', '0394599500', 'e10adc3949ba59abbe56e057f20f883e', 1, './public/upload/customer/d2.jpg', '2021-10-07 09:27:28', '2021-10-08 03:45:37'),
(5, 'Chu Minh Hiệp', 'chuminhhiep02112001@gmail.com', '0394599502', 'e10adc3949ba59abbe56e057f20f883e', 1, './public/upload/customer/d3_35.jpg', '2021-10-08 03:30:15', '2021-10-08 03:30:15'),
(6, 'Chu Minh Hiệp', 'chuminhhiep0211@gmail.com', '0394599505', 'e10adc3949ba59abbe56e057f20f883e', 0, './public/upload/user/d3.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `contents` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `code`, `user_id`, `name`, `email`, `phone`, `total`, `status`, `start`, `end`, `contents`, `created_at`, `updated_at`) VALUES
(1, 'HD_0232', 43, '1', '2', '3', 6, 4, '2021-10-05', '2021-10-12', 'Do không đến', '2021-10-05 03:33:07', '2021-10-08 02:29:48'),
(2, '2', 2, NULL, '2', '2', 2, 2, '2021-10-05', '2021-10-07', '', '2021-10-12 01:33:59', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `count_people` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `room_id`, `price`, `count_people`) VALUES
(1, 43, 2, 1000000, 2),
(3, 2, 3, 1000, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `details_description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `count_people` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`id`, `title`, `slug`, `summary`, `details_description`, `image`, `price`, `count_people`, `status`, `active`, `created_at`, `updated_at`) VALUES
(2, 'Căn hộ 822 phòng ngủ 2 người', 'can-ho-822-phong-ngu-2-nguoi', '    sdsadsad                                    \r\n                                ', '                                                                                                            <p>sadsada</p>\r\n                                                                                                ', './public/upload/user/20181204_142321_001.jpg', 200000, 2, 1, 1, '2021-10-07 21:25:41', '2021-10-07 21:50:37'),
(3, 'Căn hộ 201 phòng ngủ 3 người', 'can-ho-201-phong-ngu-3-nguoi', '123456                                    \r\n                                ', '                                                                        <p>sdsadasda</p>\r\n                                                                ', './public/upload/user/20181204_140518_001.jpg', 250000, 3, 1, 1, '2021-10-07 21:26:35', '2021-10-07 21:48:42'),
(5, 'Phòng số 202 phòng ngủ dành cho 3 người', 'phong-so-202-phong-ngu-danh-cho-3-nguoi', ' 56/4 Nguyễn Thông, phường 9, District 3, Ho Chi Minh City, Vietnam - » Quận 3 » Thành Phố Hồ Chí Minh                                                             ', '<p>Căn hộ 853 :&nbsp;<strong>01 ph&ograve;ng ngủ, 01 toilet va bếp sinh hoạt, diện tich căn hộ 90m2 đầy đủ tiện nghi sinh hoạt k&egrave;m theo</strong><br />\r\n- Giường<br />\r\n- Tủ đồ, b&agrave;n trang điểm<br />\r\n- B&agrave;n ăn<br />\r\n- M&aacute;y lạnh, Tivi, m&aacute;y giặt, l&ograve; nướng, l&ograve; vi s&oacute;ng.<br />\r\n- Bếp ga, nồi cơm điện, ấm đun nước n&oacute;ng.<br />\r\n- Nồi nấu, ch&atilde;o, ly, t&aacute;ch, ch&eacute;n , dĩa, t&ocirc;, đũa, muỗng.<br />\r\n- B&agrave;n ủi, m&aacute;y sấy t&oacute;c.<br />\r\nKhu vực trung t&acirc;m quận 3, giao th&ocirc;ng thuận tiện đến các địa điểm l&agrave;m việc, vui chơi, giải tr&iacute;.&nbsp;<br />\r\nKhu nh&agrave; y&ecirc;n tĩnh cách mặt đường, chỗ nghĩ ngơi l&yacute; tưởng sau một ng&agrave;y l&agrave;m việc mệt nhọc.<br />\r\nBảo vệ 24/24, kh&ocirc;ng giới hạn thời gian.&nbsp;<br />\r\nXe hơi v&agrave;o tận cổng.<br />\r\nC&oacute; hầm đỗ xe hơi.<br />\r\nDịch vụ ph&ograve;ng miễn phí, dọn dẹp cách ng&agrave;y.<br />\r\nNh&acirc;n vi&ecirc;n phục vụ tận t&igrave;nh vui vẻ đ&aacute;p ứng mọi nhu cầu hợp l&yacute; của qu&yacute; &nbsp;kh&aacute;ch.</p>\r\n', './public/upload/user/20181204_140824_001.jpg', 300000, 3, 0, 1, NULL, NULL),
(6, 'Căn hộ 101 phòng ngủ', 'can-ho-101-phong-ngu', 'dsad                                                                    ', '   ádasd                                                                 ', './public/upload/room/20181204_142525_001.jpg', 150000, 2, 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `password`, `image`, `active`, `created_at`, `updated_at`) VALUES
(43, 'Chu Minh Hiệp 1', 'user@gmail.com', '0394599502', 'e10adc3949ba59abbe56e057f20f883e', './public/upload/user/d3_83.jpg', 1, NULL, NULL),
(44, 'Chu Minh Hiệp', 'test@test.com', '0394599504', 'e10adc3949ba59abbe56e057f20f883e', './public/upload/user/7.jpg', 1, NULL, NULL),
(45, 'Mr.Hiep', 'hiep@gmail.com', '1234567890', 'e10adc3949ba59abbe56e057f20f883e', './public/upload/user/agent.jpg', 1, NULL, NULL),
(47, 'Chu Minh Hiệp', 'chuminhhiep0211233221@gmail.com', '0394599501', '13fd12a538bf632da77dccbab822dc13', './public/upload/user/8.jpg', 1, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`phone`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
