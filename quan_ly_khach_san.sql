-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 16, 2021 lúc 11:21 AM
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
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `article`
--

INSERT INTO `article` (`id`, `title`, `slug`, `image`, `summary`, `details_description`, `is_hot`, `active`, `view`, `created_at`, `updated_at`) VALUES
(3, '6 quán cà phê nhất định phải ghé nếu đến TP.HCM', '6-quan-ca-phe-nhat-dinh-phai-ghe-neu-den-tp-hcm', './public/upload/article/cafe_3_4.jpg', '  Khi các ngân hàng tăng vốn điều lệ thông qua bán vốn cho đối tác chiến lược, chia cổ tức hay phát hành cổ phiếu thưởng \"khủng\" chưa kịp lắng xuống,...                             \r\n                                \r\n                                \r\n                                \r\n                                \r\n                                \r\n                                ', '<p>Anh cũng khuy&ecirc;n mọi người kh&ocirc;ng n&ecirc;n ngồi l&ecirc;n tấm phủ trang tr&iacute;, đặt ph&iacute;a cuối hoặc giữa giường (bed runner). &quot;H&atilde;y tin t&ocirc;i, họ chẳng bao giờ giặt ch&uacute;ng đ&acirc;u. V&igrave; vậy, đừng chạm v&agrave;o n&oacute;&quot;, anh n&oacute;i.</p>\r\n\r\n<p><img alt=\"Miguel khuyến cáo mọi người không nên ngồi lên những gấm phủ trang trí giường trong các khách sạn. Ảnh: Amazon\" src=\"https://i1-dulich.vnecdn.net/2021/10/12/Untitled-3-7053-1634007182.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=1Poqt014-qwHTq-NWzMSOA\" style=\"margin:0px; width:469px\" /></p>\r\n\r\n<p>Miguel khuyến c&aacute;o mọi người kh&ocirc;ng n&ecirc;n ngồi l&ecirc;n những gấm phủ trang tr&iacute; giường trong c&aacute;c kh&aacute;ch sạn. Ảnh:&nbsp;<em>Amazon</em></p>\r\n\r\n<p>Miguel cũng tiết lộ kể từ khi dịch bệnh b&ugrave;ng ph&aacute;t, anh bắt đầu c&oacute; th&oacute;i quen mang theo những tấm phủ bồn cầu loại d&ugrave;ng một lần v&agrave; đặt ch&uacute;ng l&ecirc;n mỗi lần c&oacute; nhu cầu. Anh cũng mang theo cốc, muối v&agrave; hạt ti&ecirc;u, một bộ dao k&eacute;o bằng tre c&aacute; nh&acirc;n c&ugrave;ng c&agrave; ph&ecirc; g&oacute;i v&igrave; nhiều kh&aacute;ch sạn kh&ocirc;ng cung cấp đồ uống miễn ph&iacute; n&agrave;y. Miguel n&oacute;i rằng anh kh&ocirc;ng muốn thức dậy v&agrave;o buổi s&aacute;ng v&agrave; nhận ra đ&atilde; bỏ lỡ bữa s&aacute;ng, cũng như kh&ocirc;ng c&oacute; bất kỳ g&oacute;i c&agrave; ph&ecirc; hay đồ uống n&agrave;o trong ph&ograve;ng.</p>\r\n\r\n<p>Ngo&agrave;i ra, nam tiếp vi&ecirc;n cũng mang theo một chiếc khăn nhỏ đề ph&ograve;ng trường hợp kh&aacute;ch sạn kh&ocirc;ng cung cấp khăn, hoặc anh cần d&ugrave;ng ở những nơi kh&aacute;c. V&agrave; điều cuối c&ugrave;ng, anh muốn du kh&aacute;ch mang theo một cuốn sổ nhỏ ghi số điện li&ecirc;n lạc của đại sứ qu&aacute;n nước m&igrave;nh. &quot;Nghe c&oacute; vẻ cực đoan, nhưng bạn kh&ocirc;ng bao giờ biết được chuyện g&igrave; sẽ xảy ra với m&igrave;nh v&agrave;o ng&agrave;y mai. Ng&agrave;y nay, thế giới đang phải đối mặt với chiến tranh v&agrave; thi&ecirc;n tai, bệnh dịch. Điều quan trọng l&agrave; trong trường hợp cần thiết, bạn sẽ biết c&aacute;ch li&ecirc;n lạc với quốc gia của m&igrave;nh v&agrave; th&ocirc;ng b&aacute;o cho họ biết về việc m&igrave;nh cần hỗ trợ để được hồi hương&quot;.</p>\r\n', 1, 1, 0, '2021-10-07 11:38:59', '2021-10-07 20:49:26'),
(4, 'Khai trương khách sạn dưới lòng đất đầu tiên trên thế giới', 'khai-truong-khach-san-duoi-long-dat-dau-tien-tren-the-gioi', './public/upload/article/news_0_photo-7-154233400744952298365_390-200.jpg', 'Nằm sâu 88m trong một mỏ đá, khách sạn này có tổng cộng 18 tầng, trong đó 16 tầng dưới lòng đất.', '<p>ádsadaad</p>\r\n>>', 0, 1, 6, '2021-10-07 21:24:36', '2021-10-07 21:24:36'),
(5, 'Chrome thông báo cho người dùng trang web nào không an toàn', 'chrome-thong-bao-cho-nguoi-dung-trang-web-nao-khong-an-toan', './public/upload/article/news_0_f_pix_3_390-200.jpg', 'Hôm nay, Google chính thức tung ra một phiên bản Chrome mới với tính năng thông báo cho người dùng biết trang web nào là không an toàn.                                               ', 'fsdfdsf>>>', 1, 1, 4, '2021-10-14 02:00:27', NULL),
(6, 'CÁC DỰ ÁN ĐÃ THỰC HIỆN', 'cac-du-an-da-thuc-hien', './public/upload/article/Kinh-nghiệm.jpg', 'Với chúng tôi, mỗi dự án đều là một cơ hội tuyệt vời để trau dồi và bổ trợ thêm kiến thức.                                                                    ', '<p><em>Ng&agrave;y 2/9, Heaven Gate Hotel O Quy Ho đ&atilde; ch&iacute;nh thức khai trương, trở th&agrave;nh kh&aacute;ch sạn được đầu tư quy m&ocirc; lớn nhất tr&ecirc;n đỉnh đ&egrave;o &Ocirc; Quy Hồ.</em></p>\r\n\r\n<p>&nbsp;<img alt=\"\" src=\"https://vnhog.com/files/images/tin-tuc/khai-truong-heaven-gate-hotel-o-quy-ho/4.jpg\" style=\"width:593.25px\" /></p>\r\n\r\n<p>V&agrave;o ng&agrave;y lễ khai trương trọng đại n&agrave;y, kh&aacute;ch sạn vinh dự được đ&oacute;n tiếp c&aacute;c l&atilde;nh đạo của tỉnh Lai Ch&acirc;u, huyện Tam Đường c&ugrave;ng nhiều ban ng&agrave;nh kh&aacute;c.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://vnhog.com/files/images/tin-tuc/khai-truong-heaven-gate-hotel-o-quy-ho/2.jpg\" style=\"width:622.297px\" /></p>\r\n\r\n<p>Heaven Gate Hotel O Quy Ho thuộc khu sinh th&aacute;i đỉnh đ&egrave;o Ho&agrave;ng Li&ecirc;n, một dự &aacute;n quy m&ocirc; lớn tr&ecirc;n đỉnh đ&egrave;o &Ocirc; Quy Hồ do C&ocirc;ng ty cổ phần Pusamcap đầu tư. Kh&aacute;ch sạn sở hữu 45 ph&ograve;ng nghỉ tiện nghi hiện đại ti&ecirc;u chuẩn 4 sao c&ugrave;ng nh&agrave; h&agrave;ng 2 tầng với diện t&iacute;ch 500m2&nbsp;v&agrave; hệ thống Spa hiện đại.</p>\r\n\r\n<p><img alt=\"\" src=\"https://vnhog.com/files/images/tin-tuc/khai-truong-heaven-gate-hotel-o-quy-ho/3.jpg\" style=\"width:622.297px\" /></p>\r\n\r\n<p>Heaven Gate Hotel O Quy Ho đang ho&agrave;n tiện những chi tiết cuối c&ugrave;ng để c&oacute; thể mang đến cho du kh&aacute;ch những dịch vụ ho&agrave;n hảo nhất trong ng&agrave;y đ&oacute;n kh&aacute;ch&nbsp;đầu ti&ecirc;n v&agrave;o 20/9 n&agrave;y.</p>\r\n', 0, 1, 2, '2021-10-14 02:00:12', NULL),
(7, 'CẦU KÍNH RỒNG MÂY SAPA CHÍNH THỨC KHAI TRƯƠNG', 'cau-kinh-rong-may-sapa-chinh-thuc-khai-truong', './public/upload/article/Untitled-1.jpg', '  Sapa luôn nằm trong TOP những địa điểm du lịch nổi tiếng nhất Việt Nam. Sapa luôn quyến rũ du khách bởi vẻ đẹp hoang sơ, hung vĩ của núi rừng Tây Bắc                                                                    ', '<p>Ng&agrave;y 16/11/2019, c&acirc;y cầu k&iacute;nh thứ 2 được khai th&aacute;c v&agrave; x&acirc;y dựng tại Việt Nam ch&iacute;nh thức khai trương.&nbsp;<strong>Cầu K&iacute;nh Rồng M&acirc;y</strong>&nbsp;l&agrave; c&acirc;y cầu k&iacute;nh cao nhất Việt Nam thời điểm hiện tại. S&agrave;n cầu lắp gh&eacute;p bởi 3 lớp k&iacute;nh d&agrave;y, mỗi lớp hơn 2cm d&aacute;n với nhau bằng keo đặc biệt v&agrave; tổng chiều d&agrave;y mặt k&iacute;nh l&agrave; 7cm.&nbsp;<br />\r\n&nbsp;<br />\r\n<strong>Khu du lịch cầu k&iacute;nh Rồng M&acirc;y</strong>&nbsp;nằm tại vị tr&iacute; Cổng Trời thuộc đỉnh đ&egrave;o &Ocirc; Quy Hồ tuyệt đẹp cao hơn 2200m, c&aacute;ch&nbsp;<strong>thị trấn Sa Pa&nbsp;</strong>16km v&agrave; c&aacute;p treo Fansipan&nbsp;7km đi về ph&iacute;a Lai Ch&acirc;u, c&oacute; đường giao th&ocirc;ng thuận tiện. Đ&acirc;y l&agrave; một quần thể c&ocirc;ng tr&igrave;nh du lịch ngắm cảnh, văn ho&aacute;, khu vui chơi mạo hiểm v&agrave; c&aacute;c hệ thống nh&agrave; h&agrave;ng, kh&aacute;ch sạn nghỉ dưỡng đẳng cấp.<br />\r\n&nbsp;<br />\r\n<img alt=\"\" src=\"https://vnhog.com/files/images/tin-tuc/Untitled-1(1).jpg\" style=\"height:477px; width:800px\" /><br />\r\n<br />\r\nLần đầu ti&ecirc;n xuất hiện tại Việt Nam thang m&aacute;y lồng k&iacute;nh trong suốt chiều cao hơn 300m chinh phục đỉnh n&uacute;i &Ocirc; Quy Hồ. Thang m&aacute;y sẽ đưa du kh&aacute;ch xuy&ecirc;n qua c&aacute;c tầng m&acirc;y, thỏa sức h&ograve;a m&igrave;nh v&agrave;o thi&ecirc;n nhi&ecirc;n, c&oacute; thể ngắm nh&igrave;n đỉnh n&uacute;i Fansipan h&ugrave;ng vĩ v&agrave; quang cảnh n&uacute;i rừng T&acirc;y Bắc<br />\r\n<br />\r\nKh&ocirc;ng những thế, khi du kh&aacute;ch bước ch&acirc;n ra khỏi thang m&aacute;y sẽ bắt gặp cầu k&iacute;nh trong suốt vươn ra khỏi v&aacute;ch n&uacute;i 60m, hệ thống cầu k&iacute;nh d&agrave;i hơn 500m gắn liền v&agrave;o v&aacute;ch n&uacute;i đ&aacute; ở độ cao hơn 1000m so với độ cao của khe n&uacute;i sẽ đem lại cho du kh&aacute;ch những trải nghiệm đ&aacute;ng nhớ! Hệ thống thang m&aacute;y v&agrave; cầu k&iacute;nh được x&acirc;y dựng theo ti&ecirc;u chuẩn quốc tế, đảm bảo an to&agrave;n trong mọi điều kiện.<br />\r\n<br />\r\n<img alt=\"\" src=\"https://vnhog.com/files/images/tin-tuc/photo-13-15739558603921484357114.jpeg\" style=\"height:413px; width:620px\" /><br />\r\n<br />\r\n<img alt=\"\" src=\"https://vnhog.com/files/images/tin-tuc/photo-7-1573955860370370433454.jpeg\" /><br />\r\n<br />\r\n<img alt=\"\" src=\"https://vnhog.com/files/images/tin-tuc/photo-3-1573955860355737040145.jpeg\" style=\"height:903px; width:640px\" /><br />\r\n<strong>Cầu k&iacute;nh Rồng M&acirc;y Sa Pa</strong>&nbsp;thu h&uacute;t du kh&aacute;ch bởi quang cảnh thi&ecirc;n nhi&ecirc;n kỳ vỹ đẹp đến m&ecirc; l&ograve;ng của v&ugrave;ng đất sương m&ugrave; với những n&uacute;i đ&aacute; nhấp nh&ocirc; của T&acirc;y Bắc.&nbsp;Đứng tr&ecirc;n cầu k&iacute;nh, kh&aacute;ch du lịch sẽ c&oacute; cảm gi&aacute;c lững lờ như đang bay&nbsp;hay ph&oacute;ng tầm mắt ra xa, thưởng ngoạn khung cảnh thi&ecirc;n nhi&ecirc;n h&ugrave;ng vĩ&nbsp;v&agrave; cảm nhận được gi&oacute; &agrave;o ạt thổi, m&acirc;y vần vũ bay&hellip; của một trong tứ đại đỉnh đ&egrave;o.&nbsp;<br />\r\n<br />\r\nH&atilde;y thử một lần trải nghiệm dạo bước tr&ecirc;n cầu k&iacute;nh n&agrave;y nh&eacute;</p>\r\n\r\n<p>&gt;</p>\r\n\r\n<p>&gt;</p>\r\n', 0, 1, 33, '2021-10-14 01:58:13', NULL);

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
  `active` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 : disable , 1 enable',
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `phone`, `password`, `active`, `image`, `created_at`, `updated_at`) VALUES
(6, 'Chu Minh Hiệp', 'chuminhhiep0211@gmail.com', '0394599505', 'e807f1fcf82d132f9bb018ca6738a19f', 1, './public/upload/user/d3.jpg', NULL, NULL),
(7, 'Chu Minh Hiệp IT01', 'admin@gmail.com', '0394599509', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL, '2021-10-15 03:13:16', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mã code',
  `user_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price_room` int(11) NOT NULL COMMENT 'Giá phòng / ngày  khi đặt',
  `count_people` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'số người thuê',
  `total` int(11) NOT NULL COMMENT 'Tổng tiền',
  `status` tinyint(1) NOT NULL COMMENT 'Trạng thái',
  `start` date NOT NULL COMMENT 'Ngày bắt đầu',
  `end` date NOT NULL COMMENT 'Ngày kết thúc',
  `sum_day` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'Tổng ngày thuê',
  `contents` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Thanh toán onlinr',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `code`, `user_id`, `room_id`, `name`, `email`, `phone`, `price_room`, `count_people`, `total`, `status`, `start`, `end`, `sum_day`, `contents`, `payment`, `created_at`, `updated_at`) VALUES
(1, 'DP1634375871', 2, 3, 'Chu Minh Hiệp', 'chuminhhiep0211@gmail.com.vn', '0394599502', 250000, 1, 250000, 1, '2021-10-16', '2021-10-16', 1, '123456', 0, '2021-10-16 09:17:51', NULL),
(2, 'DP1634376022', 3, 6, 'Chu Minh Hiệp', 'admin@gmail.com', '0394599503', 150000, 1, 150000, 0, '2021-10-16', '2021-10-16', 1, 'dsada', 0, '2021-10-16 09:20:22', NULL),
(3, 'DP1634376065', 3, 6, 'Chu Minh Hiệp', 'admin@gmail.com', '0394599503', 150000, 1, 300000, 0, '2021-10-22', '2021-10-23', 2, '', 0, '2021-10-16 09:21:05', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `p_order_id` int(11) DEFAULT NULL COMMENT 'Mã đơn hàng ',
  `order_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `p_user_id` int(11) DEFAULT NULL,
  `p_money` int(11) DEFAULT NULL COMMENT 'Số tiền thanh toán',
  `p_note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nội dung thanh toán',
  `p_vnp_response_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Mã phản hồi',
  `p_code_vnpay` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Mã giao dịch vnpay',
  `p_code_bank` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Mã ngân hàng',
  `p_time` datetime DEFAULT NULL COMMENT 'Thời gian chuyển khoản',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`id`, `title`, `slug`, `summary`, `details_description`, `image`, `price`, `count_people`, `active`, `created_at`, `updated_at`) VALUES
(2, 'Căn hộ 822 phòng ngủ 2 người', 'can-ho-822-phong-ngu-2-nguoi', '     sdsadsad                                    \r\n                                ', '<p>sadsada</p>\r\n', './public/upload/user/20181204_142321_001.jpg', 200000, 2, 0, '2021-10-07 21:25:41', '2021-10-07 21:50:37'),
(3, 'Căn hộ 201 phòng ngủ 3 người', 'can-ho-201-phong-ngu-3-nguoi', ' 123456                                    \r\n                                ', '<p>sdsadasda</p>\r\n', './public/upload/user/20181204_140518_001.jpg', 250000, 3, 1, '2021-10-07 21:26:35', '2021-10-07 21:48:42'),
(5, 'Phòng số 202 phòng ngủ dành cho 3 người', 'phong-so-202-phong-ngu-danh-cho-3-nguoi', '    56/4 Nguyễn Thông, phường 9, District 3, Ho Chi Minh City, Vietnam - » Quận 3 » Thành Phố Hồ Chí Minh                                                             ', '<p>Căn hộ 853 :&nbsp;<strong>01 ph&ograve;ng ngủ, 01 toilet va bếp sinh hoạt, diện tich căn hộ 90m2 đầy đủ tiện nghi sinh hoạt k&egrave;m theo</strong><br />\r\n- Giường<br />\r\n- Tủ đồ, b&agrave;n trang điểm<br />\r\n- B&agrave;n ăn<br />\r\n- M&aacute;y lạnh, Tivi, m&aacute;y giặt, l&ograve; nướng, l&ograve; vi s&oacute;ng.<br />\r\n- Bếp ga, nồi cơm điện, ấm đun nước n&oacute;ng.<br />\r\n- Nồi nấu, ch&atilde;o, ly, t&aacute;ch, ch&eacute;n , dĩa, t&ocirc;, đũa, muỗng.<br />\r\n- B&agrave;n ủi, m&aacute;y sấy t&oacute;c.<br />\r\nKhu vực trung t&acirc;m quận 3, giao th&ocirc;ng thuận tiện đến các địa điểm l&agrave;m việc, vui chơi, giải tr&iacute;.&nbsp;<br />\r\nKhu nh&agrave; y&ecirc;n tĩnh cách mặt đường, chỗ nghĩ ngơi l&yacute; tưởng sau một ng&agrave;y l&agrave;m việc mệt nhọc.<br />\r\nBảo vệ 24/24, kh&ocirc;ng giới hạn thời gian.&nbsp;<br />\r\nXe hơi v&agrave;o tận cổng.<br />\r\nC&oacute; hầm đỗ xe hơi.<br />\r\nDịch vụ ph&ograve;ng miễn phí, dọn dẹp cách ng&agrave;y.<br />\r\nNh&acirc;n vi&ecirc;n phục vụ tận t&igrave;nh vui vẻ đ&aacute;p ứng mọi nhu cầu hợp l&yacute; của qu&yacute; &nbsp;kh&aacute;ch.</p>\r\n', './public/upload/user/20181204_140824_001.jpg', 300000, 3, 1, NULL, NULL),
(6, 'Căn hộ 101 phòng ngủ', 'can-ho-101-phong-ngu', '  dsad                                                                    ', '<p>&aacute;dasd</p>\r\n', './public/upload/room/20181204_142525_001.jpg', 150000, 2, 1, NULL, NULL);

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
(1, 'Chu Minh Hiệp', 'chuminhhiep0211@gmail.com', '0394599501', 'e10adc3949ba59abbe56e057f20f883e', NULL, 0, NULL, NULL),
(2, 'Chu Minh Hiệp', 'chuminhhiep0211@gmail.com.vn', '0394599502', 'e10adc3949ba59abbe56e057f20f883e', NULL, 1, NULL, NULL),
(3, 'Chu Minh Hiệp', 'admin@gmail.com', '0394599503', 'e10adc3949ba59abbe56e057f20f883e', NULL, 1, NULL, NULL);

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
-- Chỉ mục cho bảng `payment`
--
ALTER TABLE `payment`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
