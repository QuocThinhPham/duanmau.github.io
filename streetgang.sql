-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 29, 2020 lúc 03:53 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `streetgang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `ma_bl` int(100) NOT NULL,
  `noi_dung` varchar(250) DEFAULT NULL,
  `ma_hh` int(11) DEFAULT NULL,
  `ngay_bl` date DEFAULT NULL,
  `ma_kh` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `ma_hh` int(100) NOT NULL,
  `ten_hh` varchar(250) DEFAULT NULL,
  `don_gia` float DEFAULT NULL,
  `hinh` varchar(250) DEFAULT NULL,
  `ngay_nhap` date DEFAULT NULL,
  `mo_ta` varchar(250) DEFAULT NULL,
  `luot_xem` int(11) DEFAULT NULL,
  `ma_lh` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`ma_hh`, `ten_hh`, `don_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `luot_xem`, `ma_lh`) VALUES
(2, 'Áo ca rô', 3000000, 'item-7.jpg', '2020-02-28', 'mới', 1, 8),
(3, 'Quần jean', 5000000, 'item-16.jpg', '2020-02-29', 'cũ', 5, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachang`
--

CREATE TABLE `khachang` (
  `ma_kh` varchar(250) NOT NULL,
  `mat_khau` varchar(250) DEFAULT NULL,
  `ho_ten` varchar(250) DEFAULT NULL,
  `hinh` varchar(250) NOT NULL DEFAULT 'NULL',
  `email` varchar(250) NOT NULL DEFAULT 'NULL',
  `vai_tro` varchar(250) NOT NULL DEFAULT 'NULL',
  `kich_hoat` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachang`
--

INSERT INTO `khachang` (`ma_kh`, `mat_khau`, `ho_ten`, `hinh`, `email`, `vai_tro`, `kich_hoat`) VALUES
('kh10051', '123456', 'NGUYỄN THỊ THÙY DƯƠNG', 'item-2.jpg', 'nthuyduong1712@gmail.com', 'user', 'Kích hoạt'),
('kh12359', '564897', 'Nguyễn Thanh Tú', 'item-9.jpg', 'thanhtu@gmail.com', 'admin', 'Chưa kích hoạt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihang`
--

CREATE TABLE `loaihang` (
  `ma_lh` int(100) NOT NULL,
  `ten_lh` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaihang`
--

INSERT INTO `loaihang` (`ma_lh`, `ten_lh`) VALUES
(8, 'Áo thun tay dài'),
(9, 'Áo thun tay ngắn'),
(10, 'Quẩn sọt'),
(12, 'Quần dài');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `abc2` (`ma_hh`),
  ADD KEY `abc3` (`ma_kh`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `abc1` (`ma_lh`);

--
-- Chỉ mục cho bảng `khachang`
--
ALTER TABLE `khachang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`ma_lh`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `ma_bl` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `ma_hh` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  MODIFY `ma_lh` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `abc2` FOREIGN KEY (`ma_hh`) REFERENCES `hanghoa` (`ma_hh`),
  ADD CONSTRAINT `abc3` FOREIGN KEY (`ma_kh`) REFERENCES `khachang` (`ma_kh`);

--
-- Các ràng buộc cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `abc1` FOREIGN KEY (`ma_lh`) REFERENCES `loaihang` (`ma_lh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
