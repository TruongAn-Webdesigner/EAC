-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2020 lúc 02:16 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `eac`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_ad` int(11) NOT NULL,
  `name_ad` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` int(11) DEFAULT NULL,
  `position` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_ad` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_ad`, `name_ad`, `email`, `sdt`, `position`, `pass`, `img_ad`) VALUES
(1, 'Nguyễn Trường An', 'truongan123@gmail.com', 123456789, 'leader', '12345678', NULL),
(2, 'Nguyễn Đức Công', 'duccongnguyen14102001@gmail.com', 962595677, 'member', 'duccong1410', NULL),
(3, 'Lê Trâm Anh', 'tramanh123@gmail.com', 123456789, 'member', '12345678', NULL),
(4, 'Bùi Kim Ngân', 'kimngan123@gmail.com', 123456789, 'member', '12345678', NULL),
(5, 'Hồ Thị lan', 'lanho123@gmail.com', 123456789, 'member', '12345678', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiettour`
--

CREATE TABLE `chitiettour` (
  `id_chitiet` int(11) NOT NULL,
  `id_tour` int(11) DEFAULT NULL,
  `id_kh` int(11) DEFAULT NULL,
  `id_kv` int(11) DEFAULT NULL,
  `id_ks` int(11) DEFAULT NULL,
  `ngaydi` date NOT NULL,
  `ngayve` date NOT NULL,
  `price_ct` double(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiettour`
--

INSERT INTO `chitiettour` (`id_chitiet`, `id_tour`, `id_kh`, `id_kv`, `id_ks`, `ngaydi`, `ngayve`, `price_ct`) VALUES
(1, 1, NULL, 1, 1, '2020-11-20', '2020-11-21', 5999000.00),
(2, 2, NULL, 2, 2, '2020-11-20', '2020-11-21', 5999000.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangky`
--

CREATE TABLE `dangky` (
  `id_kh_dk` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` int(50) DEFAULT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dangky`
--

INSERT INTO `dangky` (`id_kh_dk`, `name`, `email`, `sdt`, `pass`) VALUES
(1, 'Người đăng ký thứ 1', 'hothilan@gmail.com', 1234567, '12345'),
(2, 'Người Đăng ký thứ 2', 'hothilan1@gmail.com', 32143211, '12345678');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsachkh`
--

CREATE TABLE `danhsachkh` (
  `id_kh` int(11) NOT NULL,
  `id_ct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhsachkh`
--

INSERT INTO `danhsachkh` (`id_kh`, `id_ct`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diadiem`
--

CREATE TABLE `diadiem` (
  `id_dd` int(11) NOT NULL,
  `name_dd` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rating_dd` int(11) NOT NULL DEFAULT 5,
  `id_kv` int(11) DEFAULT NULL,
  `img_dd` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_cttour` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diadiem`
--

INSERT INTO `diadiem` (`id_dd`, `name_dd`, `rating_dd`, `id_kv`, `img_dd`, `id_cttour`) VALUES
(1, 'Bà Nà Hills', 5, 1, 'img.png', 1),
(2, 'Cù Lao Chàm\r\n', 4, 1, 'img1.png', 1),
(3, 'Nhà Thờ Đức Bà', 4, 2, 'img1.png', 2),
(4, 'landmark 81', 4, 2, 'img1.png', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id_kh` int(11) NOT NULL,
  `name_kh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email_kh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdt_kh` int(50) NOT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id_kh`, `name_kh`, `email_kh`, `sdt_kh`, `pass`) VALUES
(1, 'Hồ Thị Lan', 'hothilan@gmail.com', 123456789, '12345678'),
(2, 'Kim Ngân', 'hothilan1@gmail.com', 1234567821, '123456789'),
(3, 'Nguyễn Đức Công', 'duccong1410@gmail.com', 962595677, 'duccong1410'),
(4, 'Trâm anh', 'tramanh123@gmail.com', 962595678, '12345678'),
(5, 'Trường An', 'truongan123@gmail.com', 962595679, '12345678');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachsan`
--

CREATE TABLE `khachsan` (
  `id_ks` int(11) NOT NULL,
  `name_ks` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_dd` int(11) DEFAULT NULL,
  `rate_ks` int(11) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachsan`
--

INSERT INTO `khachsan` (`id_ks`, `name_ks`, `id_dd`, `rate_ks`) VALUES
(1, 'Khách sạn 1', 1, 4),
(2, 'Khách sạn 2', 2, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuvuc`
--

CREATE TABLE `khuvuc` (
  `id_kv` int(11) NOT NULL,
  `name_kv` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuvuc`
--

INSERT INTO `khuvuc` (`id_kv`, `name_kv`) VALUES
(1, 'Đà Nẵng'),
(2, 'TP-HCM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `id_kh_dk` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`id_kh_dk`, `email`, `pass`) VALUES
(1, 'hothilan@gmail.com', '12345'),
(2, 'hothilan1@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `noidungbocuc`
--

CREATE TABLE `noidungbocuc` (
  `id_noidung` int(11) NOT NULL,
  `noidung` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` date NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 5,
  `id_dd` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `noidungbocuc`
--

INSERT INTO `noidungbocuc` (`id_noidung`, `noidung`, `ngaydang`, `rating`, `id_dd`) VALUES
(1, 'Đẹp xức xắc luoonggg nhengg', '2020-11-01', 3, 1),
(2, 'Chòi đắc quỷ thằng thiên địa oi', '2020-11-02', 5, 2),
(3, 'Bà Nà được mệnh danh là “Lá phổi xanh” của miền Trung của Việt Nam…Với vẻ đẹp lung linh, cùng khí hậu trong lành, thời tiết bốn mùa trong một ngày làm say đắm lòng người. Đến với tour Bà Nà Hills 1 ngày, Quý khách sẽ thỏa thích vui chơi tại Bà Nà Hills Fantasy Park – khu vui chơi giải trí trong nhà với diện tích 21.000m2 đẳng cấp quốc tế. Đáp ứng nhu cầu vui chơi giải trí của mọi lứa tuổi bằng các trò chơi vui nhộn phù hợp với trẻ em cũng như những trò chơi cảm giác mạnh cho người lớn. Cùng iViVu khám phá ngay hôm nay! ', '2020-11-20', 5, 1),
(4, 'Bà Nà được mệnh danh là “Lá phổi xanh” của miền Trung của Việt Nam…Với vẻ đẹp lung linh, cùng khí hậu trong lành, thời tiết bốn mùa trong một ngày làm say đắm lòng người. Đến với tour Bà Nà Hills 1 ngày, Quý khách sẽ thỏa thích vui chơi tại Bà Nà Hills Fantasy Park – khu vui chơi giải trí trong nhà với diện tích 21.000m2 đẳng cấp quốc tế. Đáp ứng nhu cầu vui chơi giải trí của mọi lứa tuổi bằng các trò chơi vui nhộn phù hợp với trẻ em cũng như những trò chơi cảm giác mạnh cho người lớn. Cùng iViVu khám phá ngay hôm nay! ', '2020-11-20', 5, 2),
(5, 'Là một dự án của tập đoàn Vingroup, Landmark 81 được khai trương vào tháng 7.2018. Với chiều cao là 470m tính đến ăng ten, đây hiện là tòa nhà cao nhất Việt Nam. Trước đó kỷ lục này thuộc về tòa nhà Keangnam Hanoi Landmark Tower với chiều cao 345m (tính đến ăng ten). Hiện Landmark 81 cũng đang là tòa nhà cao nhất Đông Nam Á, trước đó danh hiệu này thuộc về tòa tháp Twin Tower ở Malaysia với chiều cao 452m. Landmark 81 SkyView nằm trọn ở 3 lầu cao nhất của Landmark 81 sẽ đem đến cho các bạn rất nhiều trải nghiệm thú vị. Để lên Đài Quan Sát, bạn sẽ được đi từ tầng B1 lên tầng 79 với thang máy đặc biệt có vận tốc siêu nhanh là 8m/s nha.', '2020-11-20', 5, 4),
(6, 'Nhà thờ Đức bà tọa lạc tại quận 1 nơi rất nhiều du khách từ khắp các nước du lịch đến đây đều thích ghé qua chiêm ngưỡng kiến trúc cổ kính tuyệt đẹp. Các bạn có thể chụp choạt sống ảo lên view cực đẹp nha, chụp khi nắng lên sẽ càng đẹp hơn nữa không cần chỉnh effect luôn, cả phía trước và phía sau nhà thờ các bạn đều có thể chụp được. Đi vài lần mình vẫn thắc mắc không biết có thể đi vào bên trong tham quan được không nhỉ. Kế nhà thờ còn có công viên, đứng đó bạn có thể nghe thấy mọi thứ tiếng từ Anh, Pháp, Hàn, Trung,.. ', '2020-11-20', 5, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `id_tour` int(11) NOT NULL,
  `name_tour` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_tour` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_noidung` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`id_tour`, `name_tour`, `img_tour`, `id_noidung`) VALUES
(1, 'Đà Nẵng', 'hinh.png', 1),
(2, 'TP-HCM', 'hinh1.png', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_ad`);

--
-- Chỉ mục cho bảng `chitiettour`
--
ALTER TABLE `chitiettour`
  ADD PRIMARY KEY (`id_chitiet`),
  ADD KEY `fk_chitettour_tour` (`id_tour`),
  ADD KEY `fk_chitettour_khuvuc` (`id_kv`),
  ADD KEY `fk_chitettour_khachsan` (`id_ks`);

--
-- Chỉ mục cho bảng `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`id_kh_dk`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `danhsachkh`
--
ALTER TABLE `danhsachkh`
  ADD PRIMARY KEY (`id_kh`,`id_ct`),
  ADD KEY `fk_danhsachkh_chitiettour` (`id_ct`);

--
-- Chỉ mục cho bảng `diadiem`
--
ALTER TABLE `diadiem`
  ADD PRIMARY KEY (`id_dd`),
  ADD KEY `fk_diadiem` (`id_kv`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Chỉ mục cho bảng `khachsan`
--
ALTER TABLE `khachsan`
  ADD PRIMARY KEY (`id_ks`);

--
-- Chỉ mục cho bảng `khuvuc`
--
ALTER TABLE `khuvuc`
  ADD PRIMARY KEY (`id_kv`);

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_kh_dk`),
  ADD UNIQUE KEY `pass` (`pass`),
  ADD UNIQUE KEY `pass_2` (`pass`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `noidungbocuc`
--
ALTER TABLE `noidungbocuc`
  ADD PRIMARY KEY (`id_noidung`),
  ADD KEY `fk_noidungbocuc_diadiem` (`id_dd`);

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id_tour`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_ad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `chitiettour`
--
ALTER TABLE `chitiettour`
  MODIFY `id_chitiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `dangky`
--
ALTER TABLE `dangky`
  MODIFY `id_kh_dk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `diadiem`
--
ALTER TABLE `diadiem`
  MODIFY `id_dd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `khachsan`
--
ALTER TABLE `khachsan`
  MODIFY `id_ks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `khuvuc`
--
ALTER TABLE `khuvuc`
  MODIFY `id_kv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `id_kh_dk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `noidungbocuc`
--
ALTER TABLE `noidungbocuc`
  MODIFY `id_noidung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `id_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiettour`
--
ALTER TABLE `chitiettour`
  ADD CONSTRAINT `fk_chitettour_khachsan` FOREIGN KEY (`id_ks`) REFERENCES `khachsan` (`id_ks`),
  ADD CONSTRAINT `fk_chitettour_khuvuc` FOREIGN KEY (`id_kv`) REFERENCES `khuvuc` (`id_kv`),
  ADD CONSTRAINT `fk_chitettour_tour` FOREIGN KEY (`id_tour`) REFERENCES `tour` (`id_tour`);

--
-- Các ràng buộc cho bảng `danhsachkh`
--
ALTER TABLE `danhsachkh`
  ADD CONSTRAINT `fk_danhsachkh_chitiettour` FOREIGN KEY (`id_ct`) REFERENCES `chitiettour` (`id_chitiet`),
  ADD CONSTRAINT `fk_danhsachkh_khachhang` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id_kh`);

--
-- Các ràng buộc cho bảng `diadiem`
--
ALTER TABLE `diadiem`
  ADD CONSTRAINT `fk_diadiem` FOREIGN KEY (`id_kv`) REFERENCES `khuvuc` (`id_kv`);

--
-- Các ràng buộc cho bảng `noidungbocuc`
--
ALTER TABLE `noidungbocuc`
  ADD CONSTRAINT `fk_noidungbocuc_diadiem` FOREIGN KEY (`id_dd`) REFERENCES `diadiem` (`id_dd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
