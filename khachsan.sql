-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 04, 2022 lúc 05:43 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `khachsan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_comment` int(11) NOT NULL,
  `noidung` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `ngaybinhluan` date NOT NULL,
  `id_phong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id_comment`, `noidung`, `id_user`, `ngaybinhluan`, `id_phong`) VALUES
(1, 'fgfhf', 1, '2022-11-19', 0),
(2, 'hggh', 1, '2022-11-19', 0),
(4, 'ùehodsngkfgjdri', 1, '2022-11-29', 71),
(6, 'gjfjghjgyh', 1, '2022-11-29', 69),
(8, 'pohpgkhogh', 1, '2022-12-02', 50),
(9, 'trhth', 1, '2022-12-03', 4),
(10, 'nhgmg', 1, '2022-12-03', 71),
(11, 'dep <333\r\n', 1, '2022-12-03', 63),
(12, 'gfgdfhdf', 1, '2022-12-03', 2),
(13, 'dep <3333333\r\n', 11, '2022-12-04', 70);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `datphong`
--

CREATE TABLE `datphong` (
  `id_order` int(11) NOT NULL,
  `id_phong` int(11) NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sokhach` int(2) NOT NULL,
  `ngayden` date NOT NULL,
  `ngaytra` date NOT NULL,
  `tongtien` float(10,2) NOT NULL,
  `giaodich` tinyint(2) NOT NULL DEFAULT 0,
  `tinhtrang` tinyint(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `datphong`
--

INSERT INTO `datphong` (`id_order`, `id_phong`, `id_user`, `sokhach`, `ngayden`, `ngaytra`, `tongtien`, `giaodich`, `tinhtrang`) VALUES
(202, 1, '4', 2, '2023-01-11', '2023-01-14', 10350000.00, 0, 1),
(208, 67, '1', 2, '2022-12-09', '2022-12-11', 4000000.00, 0, 0),
(209, 69, '1', 2, '2022-12-24', '2022-12-27', 9000000.00, 0, 0),
(210, 71, '1', 2, '2022-12-27', '2022-12-31', 12000000.00, 0, 0),
(211, 4, '1', 2, '2023-01-04', '2022-12-07', 4500000.00, 0, 1),
(212, 4, '1', 2, '2022-12-08', '2022-12-11', 4500000.00, 0, 0),
(213, 1, '1', 2, '2022-12-03', '2022-12-07', 6000000.00, 0, 0),
(214, 50, '1', 2, '2022-12-17', '2022-12-19', 3600000.00, 0, 0),
(215, 67, '1', 2, '2022-12-25', '2022-12-27', 4000000.00, 0, 0),
(216, 67, '1', 2, '2022-12-31', '2023-01-03', 6000000.00, 0, 1),
(217, 63, '1', 2, '2023-01-01', '2023-01-04', 5400000.00, 0, 1),
(237, 69, '11', 1, '2022-12-10', '2022-12-12', 6000000.00, 0, 0),
(238, 69, '11', 2, '2022-12-14', '2022-12-16', 6000000.00, 0, 0),
(241, 69, '11', 1, '2023-01-13', '2023-01-15', 6000000.00, 0, 1),
(242, 69, '11', 1, '2022-12-30', '2023-01-01', 6000000.00, 0, 1),
(243, 69, '11', 1, '2022-12-24', '2022-12-26', 6000000.00, 0, 0),
(244, 69, '11', 1, '2023-01-07', '2023-01-09', 6000000.00, 0, 1),
(245, 69, '11', 2, '2023-01-01', '2023-01-03', 6000000.00, 0, 1),
(246, 69, '11', 2, '2023-01-29', '2023-02-01', 9000000.00, 0, 1),
(247, 67, '11', 2, '2022-12-18', '2022-12-20', 4000000.00, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_bill` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_phong` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `role` tinyint(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id_bill`, `id_order`, `id_phong`, `id_user`, `tongtien`, `role`) VALUES
(1, 214, 50, 1, 3600000, 1),
(2, 213, 1, 1, 6000000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hotro`
--

CREATE TABLE `hotro` (
  `id_hotro` int(11) NOT NULL,
  `name_user` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tel` int(10) NOT NULL,
  `ghichu` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hotro`
--

INSERT INTO `hotro` (`id_hotro`, `name_user`, `tel`, `ghichu`) VALUES
(1, 'LeLanAnh', 838397376, 'fffgfgf'),
(2, 'LeLanAnh', 838397376, 'thỵytjyj'),
(3, 'LeLanAnh', 838397376, 'thỵytjyj'),
(4, 'LeLanAnh', 838397376, 'thỵytjyj'),
(5, 'LeLanAnh', 838397376, 'gnhgkh'),
(6, 'LeLanAnh', 838397376, 'fdggfgd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiphong`
--

CREATE TABLE `loaiphong` (
  `id_loaiphong` int(11) NOT NULL,
  `name_loaiphong` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaiphong`
--

INSERT INTO `loaiphong` (`id_loaiphong`, `name_loaiphong`) VALUES
(1, 'Chưa Xác Định'),
(2, 'Superior Room'),
(3, 'Deluxe Room'),
(4, 'Signature Room'),
(7, 'Luxury Suite Room');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `id_phong` int(11) NOT NULL,
  `name_phong` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `price_sale` double(10,2) NOT NULL,
  `sokhach` int(2) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mota` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `id_loaiphong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`id_phong`, `name_phong`, `price`, `price_sale`, `sokhach`, `img`, `mota`, `id_loaiphong`) VALUES
(1, 'Superior Room S20', 1500000.00, 0.00, 2, 'room4_portrait.jpg', 'Khu vực phòng khách rộng rãi với đi văng có thể kê thêm 1 giường phụ. Khi ngồi trên ghế dài của ban công hướng Nam, bạn có thể tận hưởng\r\n                                                                                     cảnh quan tuyệt đẹp của Matterhorn, một chút không khí trong lành của núi non và ánh nắng chiều dịu nhẹ.', 2),
(2, 'Superior Room P21', 1500000.00, 0.00, 2, 'room2_portrait.jpg', 'Khu vực phòng khách rộng rãi với đi văng có thể kê thêm 1 giường phụ. Khi ngồi trên ghế dài của ban công hướng Nam, bạn có thể tận hưởng\r\n                                                                                     cảnh quan tuyệt đẹp của Matterhorn, một chút không khí trong lành của núi non và ánh nắng chiều dịu nhẹ.', 2),
(4, 'Superior Room P22', 1500000.00, 0.00, 2, 'room3_portrait.jpg', 'Khu vực phòng khách rộng rãi với đi văng có thể kê thêm 1 giường phụ. Khi ngồi trên ghế dài của ban công hướng Nam, bạn có thể tận hưởng\r\n                                                                                     cảnh quan tuyệt đẹp của Matterhorn, một chút không khí trong lành của núi non và ánh nắng chiều dịu nhẹ.', 2),
(49, 'Superior Room P23', 1500000.00, 0.00, 2, 'food-on-a-table-in-a-hotel-room-PU969F8.jpg', 'Khu vực phòng khách rộng rãi với đi văng có thể kê thêm 1 giường phụ. Khi ngồi trên ghế dài của ban công hướng Nam, bạn có thể tận hưởng\r\n                                                                                     cảnh quan tuyệt đẹp của Matterhorn, một chút không khí trong lành của núi non và ánh nắng chiều dịu nhẹ.', 2),
(50, 'Deluxe Room D20', 1800000.00, 0.00, 2, 'food-on-a-table-in-a-hotel-room-PU969F8.jpg', 'Khu vực phòng khách rộng rãi với đi văng có thể kê thêm 1 giường phụ. Khi ngồi trên ghế dài của ban công hướng Nam, bạn có thể tận hưởng\r\n                                                                                     cảnh quan tuyệt đẹp của Matterhorn, một chút không khí trong lành của núi non và ánh nắng chiều dịu nhẹ.', 3),
(51, 'Deluxe Room D21', 1800000.00, 0.00, 2, 'room1_portrait.jpg', 'Khu vực phòng khách rộng rãi với đi văng có thể kê thêm 1 giường phụ. Khi ngồi trên ghế dài của ban công hướng Nam, bạn có thể tận hưởng\r\n                                                                                     cảnh quan tuyệt đẹp của Matterhorn, một chút không khí trong lành của núi non và ánh nắng chiều dịu nhẹ.', 3),
(59, 'Deluxe Room D22', 1800000.00, 0.00, 2, 'room2_portrait.jpg', 'Khu vực phòng khách rộng rãi với đi văng có thể kê thêm 1 giường phụ. Khi ngồi trên ghế dài của ban công hướng Nam, bạn có thể tận hưởng\r\n                                                                                     cảnh quan tuyệt đẹp của Matterhorn, một chút không khí trong lành của núi non và ánh nắng chiều dịu nhẹ.', 3),
(63, 'Deluxe Room D23', 1800000.00, 0.00, 2, 'room3_portrait.jpg', 'Khu vực phòng khách rộng rãi với đi văng có thể kê thêm 1 giường phụ. Khi ngồi trên ghế dài của ban công hướng Nam, bạn có thể tận hưởng\r\n                                                                                     cảnh quan tuyệt đẹp của Matterhorn, một chút không khí trong lành của núi non và ánh nắng chiều dịu nhẹ.', 3),
(64, 'Signature Room S20', 2000000.00, 0.00, 3, 'food-on-a-table-in-a-hotel-room-PU969F8.jpg', 'Khu vực phòng khách rộng rãi với đi văng có thể kê thêm 1 giường phụ. Khi ngồi trên ghế dài của ban công hướng Nam, bạn có thể tận hưởng\r\n                                                                                     cảnh quan tuyệt đẹp của Matterhorn, một chút không khí trong lành của núi non và ánh nắng chiều dịu nhẹ.', 4),
(65, 'Signature Room S21', 2000000.00, 0.00, 3, 'room4_portrait.jpg', 'Khu vực phòng khách rộng rãi với đi văng có thể kê thêm 1 giường phụ. Khi ngồi trên ghế dài của ban công hướng Nam, bạn có thể tận hưởng\r\n                                                                                     cảnh quan tuyệt đẹp của Matterhorn, một chút không khí trong lành của núi non và ánh nắng chiều dịu nhẹ.', 4),
(66, 'Signature Room S22', 2000000.00, 0.00, 3, 'room3_portrait.jpg', 'Khu vực phòng khách rộng rãi với đi văng có thể kê thêm 1 giường phụ. Khi ngồi trên ghế dài của ban công hướng Nam, bạn có thể tận hưởng\r\n                                                                                     cảnh quan tuyệt đẹp của Matterhorn, một chút không khí trong lành của núi non và ánh nắng chiều dịu nhẹ.', 4),
(67, 'Signature Room S23', 2000000.00, 0.00, 3, 'room2_portrait.jpg', 'Khu vực phòng khách rộng rãi với đi văng có thể kê thêm 1 giường phụ. Khi ngồi trên ghế dài của ban công hướng Nam, bạn có thể tận hưởng\r\n                                                                                     cảnh quan tuyệt đẹp của Matterhorn, một chút không khí trong lành của núi non và ánh nắng chiều dịu nhẹ.', 4),
(68, 'Luxury Room L20', 3000000.00, 0.00, 4, 'room1_portrait.jpg', 'Khu vực phòng khách rộng rãi với đi văng có thể kê thêm 1 giường phụ. Khi ngồi trên ghế dài của ban công hướng Nam, bạn có thể tận hưởng\r\n                                                                                     cảnh quan tuyệt đẹp của Matterhorn, một chút không khí trong lành của núi non và ánh nắng chiều dịu nhẹ.', 7),
(69, 'Luxury Room L21', 3000000.00, 0.00, 4, 'room2_portrait.jpg', 'Khu vực phòng khách rộng rãi với đi văng có thể kê thêm 1 giường phụ. Khi ngồi trên ghế dài của ban công hướng Nam, bạn có thể tận hưởng\r\n                                                                                     cảnh quan tuyệt đẹp của Matterhorn, một chút không khí trong lành của núi non và ánh nắng chiều dịu nhẹ.', 7),
(70, 'Luxury Room L22', 3000000.00, 0.00, 4, 'room4_portrait.jpg', 'Khu vực phòng khách rộng rãi với đi văng có thể kê thêm 1 giường phụ. Khi ngồi trên ghế dài của ban công hướng Nam, bạn có thể tận hưởng\r\n                                                                                     cảnh quan tuyệt đẹp của Matterhorn, một chút không khí trong lành của núi non và ánh nắng chiều dịu nhẹ.', 7),
(71, 'Luxury Room L23', 3000000.00, 0.00, 4, 'food-on-a-table-in-a-hotel-room-PU969F8.jpg', 'Khu vực phòng khách rộng rãi với đi văng có thể kê thêm 1 giường phụ. Khi ngồi trên ghế dài của ban công hướng Nam, bạn có thể tận hưởng\r\n                                                                                     cảnh quan tuyệt đẹp của Matterhorn, một chút không khí trong lành của núi non và ánh nắng chiều dịu nhẹ.', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tel` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `role` tinyint(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_user`, `username`, `password`, `email`, `tel`, `address`, `role`) VALUES
(1, 'lananh', 'Lananh261', 'anhllph19505@fpt.edu.vn', '0838397376', '512 tran khat chan,p.Pho Hue, HBT, HN', 1),
(5, 'lananh12345', '12345', 'anhllph19505@fpt.edu.vn', '0838397376', '512 tran khat chan', 0),
(6, 'lananh123', '123456', 'anhllph19505@fpt.edu.vn', '0838397376', '512 tran khat chan', 0),
(7, 'lananh123456', '12345', 'anhllph19505@fpt.edu.vn', '0838397376', '512 tran khat chan', 0),
(8, 'lananh5454', '12345', 'anhllph19505@fpt.edu.vn', '0838397376', '512 tran khat chan', 0),
(9, 'lananh123321', '123456', 'anhllph19505@fpt.edu.vn', '0838397376', '512 tran khat chan', 0),
(10, 'lananh3456', '12345', 'anhllph19505@fpt.edu.vn', '0838397376', '512 tran khat chan', 0),
(11, 'llnhne', 'Lananh261', 'anhllph19505@fpt.edu.vn', '0838397376', '512 tran khat chan', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_phong` (`id_phong`);

--
-- Chỉ mục cho bảng `datphong`
--
ALTER TABLE `datphong`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_phong` (`id_phong`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `iduser` (`id_user`),
  ADD KEY `idphong` (`id_phong`);

--
-- Chỉ mục cho bảng `hotro`
--
ALTER TABLE `hotro`
  ADD PRIMARY KEY (`id_hotro`);

--
-- Chỉ mục cho bảng `loaiphong`
--
ALTER TABLE `loaiphong`
  ADD PRIMARY KEY (`id_loaiphong`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`id_phong`),
  ADD KEY `iddm` (`id_loaiphong`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `datphong`
--
ALTER TABLE `datphong`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_bill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hotro`
--
ALTER TABLE `hotro`
  MODIFY `id_hotro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `loaiphong`
--
ALTER TABLE `loaiphong`
  MODIFY `id_loaiphong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `phong`
--
ALTER TABLE `phong`
  MODIFY `id_phong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `taikhoan` (`id_user`);

--
-- Các ràng buộc cho bảng `datphong`
--
ALTER TABLE `datphong`
  ADD CONSTRAINT `id_phong` FOREIGN KEY (`id_phong`) REFERENCES `phong` (`id_phong`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `idphong` FOREIGN KEY (`id_phong`) REFERENCES `phong` (`id_phong`),
  ADD CONSTRAINT `iduser` FOREIGN KEY (`id_user`) REFERENCES `taikhoan` (`id_user`);

--
-- Các ràng buộc cho bảng `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `iddm` FOREIGN KEY (`id_loaiphong`) REFERENCES `loaiphong` (`id_loaiphong`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
