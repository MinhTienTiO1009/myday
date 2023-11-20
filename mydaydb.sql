-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2023 lúc 04:23 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mydaydb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `camxuc`
--

CREATE TABLE `camxuc` (
  `MaCX` int(11) NOT NULL,
  `TrangThai` varchar(15) NOT NULL,
  `ThoiGian` date NOT NULL,
  `UserName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `camxuc`
--

INSERT INTO `camxuc` (`MaCX`, `TrangThai`, `ThoiGian`, `UserName`) VALUES
(1, 'Bình thường', '2023-11-01', 'nguyenvana'),
(2, 'Tệ', '2023-11-02', 'nguyenvana'),
(3, 'Hạnh phúc', '2023-11-03', 'nguyenvana'),
(4, 'Buồn', '2023-11-04', 'nguyenvana'),
(5, 'Vui vẻ', '2023-11-05', 'nguyenvana'),
(6, 'Bình thường', '2023-11-06', 'nguyenvana'),
(7, 'Hạnh phúc', '2023-11-07', 'nguyenvana'),
(8, 'Tệ', '2023-11-08', 'nguyenvana'),
(9, 'Vui vẻ', '2023-11-09', 'nguyenvana'),
(10, 'Buồn', '2023-11-10', 'nguyenvana'),
(11, 'Vui vẻ', '2023-11-11', 'nguyenvana'),
(12, 'Hạnh phúc', '2023-11-12', 'nguyenvana'),
(13, 'Vui vẻ', '2023-11-13', 'nguyenvana'),
(14, 'Bình thường', '2023-11-14', 'nguyenvana'),
(15, 'Hạnh phúc', '2023-10-31', 'nguyenvana');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietmuctieu`
--

CREATE TABLE `chitietmuctieu` (
  `MaMT` int(10) NOT NULL,
  `ThangNam` varchar(20) NOT NULL,
  `TenMucTieu` varchar(50) NOT NULL,
  `TrangThai` varchar(20) NOT NULL,
  `GhiChu` varchar(100) DEFAULT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietmuctieu`
--

INSERT INTO `chitietmuctieu` (`MaMT`, `ThangNam`, `TenMucTieu`, `TrangThai`, `GhiChu`, `username`) VALUES
(1, '2023-08', 'Đạt mốc TOEIC 450', 'Không hoàn thành', NULL, 'nguyenvana'),
(2, '2023-08', 'Tăng 2kg trong vòng 21 ngày', 'Đã hoàn thành', NULL, 'nguyenvana'),
(3, '2023-08', 'Tập gym 30p mỗi ngày', 'Đã hoàn thành', NULL, 'nguyenvana'),
(4, '2023-09', 'Đạt mốc TOEIC 450', 'Đã hoàn thành', NULL, 'nguyenvana'),
(5, '2023-09', 'Đạt ít nhất 8đ thi giữ kỳ các môn', 'Không hoàn thành', NULL, 'nguyenvana'),
(6, '2023-09', 'Tổ chức sinh nhật cho bản thân', 'Đã hoàn thành', NULL, 'nguyenvana'),
(7, '2023-10', 'Dẫn các chương trình văn nghệ khoa CNTT', 'Đã hoàn thành', NULL, 'nguyenvana'),
(8, '2023-10', 'Soạn đề cương thi giữa kỳ thật tốt các môn', 'Đã hoàn thành', NULL, 'nguyenvana'),
(9, '2023-10', 'Tặng quà 20-10 cho mẹ', 'Không hoàn thành', NULL, 'nguyenvana'),
(10, '2023-11', '1', '', '', 'test4'),
(11, '2023-11', '2', '', '', 'test4'),
(12, '2023-11', '3', '', '', 'test4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congviecquantrong`
--

CREATE TABLE `congviecquantrong` (
  `maCongViec` int(11) NOT NULL,
  `tenCongViec` varchar(100) DEFAULT NULL,
  `thoiGianThucHien` date DEFAULT NULL,
  `maDSCongViec` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `congviecquantrong`
--

INSERT INTO `congviecquantrong` (`maCongViec`, `tenCongViec`, `thoiGianThucHien`, `maDSCongViec`) VALUES
(15, 'test 10', '2023-11-20', 'test4-2023-11-20'),
(16, 'test 101', '2023-11-20', 'test4-2023-11-20'),
(17, 'test 102', '2023-11-20', 'test4-2023-11-20'),
(18, 'test 103', '2023-11-20', 'test4-2023-11-20'),
(19, 'test 104', '2023-11-20', 'test4-2023-11-20'),
(20, 'test 105', '2023-11-20', 'test4-2023-11-20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dieutoibieton`
--

CREATE TABLE `dieutoibieton` (
  `MaDBO` int(11) NOT NULL,
  `NoiDung` varchar(100) NOT NULL,
  `ThoiGian` date NOT NULL DEFAULT current_timestamp(),
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dieutoibieton`
--

INSERT INTO `dieutoibieton` (`MaDBO`, `NoiDung`, `ThoiGian`, `username`) VALUES
(1, 'Được tặng quà sinh nhật', '2023-09-10', 'nguyenvana'),
(2, 'Nhận thưởng dẫn văn nghệ khoa CNTT', '2023-10-03', 'nguyenvana'),
(3, 'Nhận chứng nhận hoàn thành xuất sắc chiến dịch Mùa hè xanh', '2023-11-03', 'nguyenvana'),
(4, 'Được bạn cùng lớp bao ăn tối', '2023-11-12', 'nguyenvana'),
(12, 'Thuận sửa code dùm', '2023-11-19', 'nguyenvana'),
(13, 'Yêu em', '2023-11-19', 'nguyenvana'),
(14, 'alo alo', '2023-11-19', 'nguyenvana'),
(15, 'Đi học', '2023-11-20', 'nguyenvana'),
(16, 'hôm nay học nhiều', '2023-11-20', 'test4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `motngaycuatoi`
--

CREATE TABLE `motngaycuatoi` (
  `ngayThang` date NOT NULL,
  `luongNuocDaUong` int(11) DEFAULT NULL,
  `trangThai` int(11) DEFAULT NULL,
  `camXucCaNgay` int(11) DEFAULT NULL,
  `ghiChu` varchar(1000) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `maDSCongViec` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `motngaycuatoi`
--

INSERT INTO `motngaycuatoi` (`ngayThang`, `luongNuocDaUong`, `trangThai`, `camXucCaNgay`, `ghiChu`, `username`, `maDSCongViec`) VALUES
('2023-11-20', 2, 2, 2, 'default', 'phanhaitrieu1', 'phanhaitrieu1-2023-11-20'),
('2023-11-20', 2, 5, 2, 'default', 'phanhaitrieu', 'phanhaitrieu2023-11-20'),
('2023-11-20', 0, 0, 0, 'test4-2023-11-20', 'test4', 'test4-2023-11-20'),
('2023-11-20', 5, 4, 1, 'trieutest1-2023-11-20', 'trieutest1', 'trieutest1-2023-11-20'),
('2023-11-20', 5, 4, 1, 'trieutest2-2023-11-20', 'trieutest2', 'trieutest2-2023-11-20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `motthangnhinlai`
--

CREATE TABLE `motthangnhinlai` (
  `thangNam` date NOT NULL DEFAULT current_timestamp(),
  `username` varchar(50) NOT NULL,
  `than` varchar(500) NOT NULL,
  `tam` varchar(500) NOT NULL,
  `tri` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `motthangnhinlai`
--

INSERT INTO `motthangnhinlai` (`thangNam`, `username`, `than`, `tam`, `tri`) VALUES
('2023-09-30', 'nguyenvana', '- Tập thể dục thể thao\r\n- Tập thể hình', '- Tu tâm tích đức\r\n- Làm lành lánh dữ', '- Học học nữa học mãi\r\n- Sống trọn từng khoảnh khắc'),
('2023-10-31', 'nguyenvana', '- Tập gym 30p mỗi ngày\r\n- Chơi thể thao 30p mỗi ngày', '- Ngủ sớm trước 23h \r\n- Dậy sớm trước 7h để thành công', '- Học Toeic 30p mỗi ngày\r\n- Ôn bài thi OOP'),
('2023-11-19', 'nguyenvana', 'zcxdvdsvxv', 'sdvxcvcvc vcx', 'x vxbvbxcvxcvxv'),
('2023-11-20', 'nguyenvana', 'Sang', 'Xịn', 'Mịn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muctieuthang`
--

CREATE TABLE `muctieuthang` (
  `ThangNam` varchar(20) NOT NULL,
  `ChuDeThang` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `muctieuthang`
--

INSERT INTO `muctieuthang` (`ThangNam`, `ChuDeThang`, `username`) VALUES
('2023-08', 'Năm học mới', 'nguyenvana'),
('2023-09', 'My Birthday', 'nguyenvana'),
('2023-10', 'Thi giữa kỳ', 'nguyenvana'),
('2023-11', 'Thi cuối kỳ', 'nguyenvana');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `username` varchar(50) NOT NULL,
  `tenNguoiDung` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `matKhau` varchar(100) NOT NULL,
  `soDT` varchar(10) NOT NULL,
  `gioitinh` int(11) NOT NULL,
  `ngaySinh` date DEFAULT NULL,
  `diaChi` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`username`, `tenNguoiDung`, `email`, `matKhau`, `soDT`, `gioitinh`, `ngaySinh`, `diaChi`) VALUES
('123', '123', 'tien@gmail.com', '2002', '111111111', 0, NULL, NULL),
('nguyenvana', 'Nguyen Van A', 'nguyenvana@example.com', 'Pwd202300', '097862870', 1, '1988-05-31', '1/5 District 4, Ho Chi Minh City'),
('nguyenvanb', 'Nguyen Van B', 'nguyenvanb@example.com', 'Pwd202301', '093466989', 1, '1970-03-24', '2/5 District 3, Ho Chi Minh City'),
('nguyenvanc', 'Nguyen Van C', 'nguyenvanc@example.com', 'Pwd202302', '094140893', 0, '1997-10-25', '3/5 District 7, Ho Chi Minh City'),
('nguyenvand', 'Nguyen Van D', 'nguyenvand@example.com', 'Pwd202303', '099538430', 1, '1999-02-01', '4/5 District 6, Ho Chi Minh City'),
('nguyenvane', 'Nguyen Van E', 'nguyenvane@example.com', 'Pwd202304', '092060628', 1, '1979-02-27', '5/5 District 4, Ho Chi Minh City'),
('nguyenvanf', 'Nguyen Van F', 'nguyenvanf@example.com', 'Pwd202305', '092303677', 1, '1994-11-12', '6/5 District 12, Ho Chi Minh City'),
('nguyenvang', 'Nguyen Van G', 'nguyenvang@example.com', 'Pwd202306', '095588671', 0, '1971-12-16', '7/5 District 12, Ho Chi Minh City'),
('nguyenvanh', 'Nguyen Van H', 'nguyenvanh@example.com', 'Pwd202307', '095407599', 0, '2001-10-06', '8/5 District 1, Ho Chi Minh City'),
('nguyenvani', 'Nguyen Van I', 'nguyenvani@example.com', 'Pwd202308', '091169490', 0, '1988-05-13', '9/5 District 12, Ho Chi Minh City'),
('nguyenvanj', 'Nguyen Van J', 'nguyenvanj@example.com', 'Pwd202309', '091041840', 1, '1976-10-06', '10/5 District 3, Ho Chi Minh City'),
('Son Minh Thuan ', 'Son Minh Thuan ', 'thuan@gmail.com', '18112002', '0765944734', 0, NULL, NULL),
('test4', ' test4', 'trieuphan3701@gmail.com', 'trieuphan37@', 'trieuphan3', 0, '0000-00-00', 'hcm'),
('thuan', 'thuan', 'thuan@gmail.com', '18112002', '0765944734', 0, NULL, NULL),
('tien', 'tien', 'tien@gmail.com', '1', '123456789', 0, NULL, NULL),
('vominhtien', 'vominhtien', 'tien@gmail.com', '1', '123456789', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sukien`
--

CREATE TABLE `sukien` (
  `MaSK` int(11) NOT NULL,
  `TenSK` varchar(30) NOT NULL,
  `ThoiGian` datetime NOT NULL,
  `Username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sukien`
--

INSERT INTO `sukien` (`MaSK`, `TenSK`, `ThoiGian`, `Username`) VALUES
(1, 'Phụ nữ Việt Nam', '2023-10-20 16:35:14', 'nguyenvana'),
(2, 'Sinh nhật bạn Dũng', '2023-03-21 16:35:14', 'nguyenvana'),
(3, 'Ngày nhà giáo Việt Nam', '2023-11-20 16:38:57', 'nguyenvana'),
(4, 'My birthday', '2023-09-10 16:38:57', 'nguyenvana'),
(5, 'Báo cáo PTUD', '2023-11-22 16:40:25', 'nguyenvana'),
(6, 'Thi thực hành OOP', '2023-11-17 16:40:25', 'nguyenvana');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoigiannhacnho`
--

CREATE TABLE `thoigiannhacnho` (
  `thoiGian` time NOT NULL,
  `ghiChu` varchar(100) DEFAULT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thoigiannhacnho`
--

INSERT INTO `thoigiannhacnho` (`thoiGian`, `ghiChu`, `username`) VALUES
('12:24:00', 'Note 1', 'nguyenvand'),
('14:15:00', 'Note 71', 'nguyenvanj'),
('11:07:00', 'Note 41', 'nguyenvand'),
('09:49:00', 'Note 10', 'nguyenvane'),
('04:23:00', 'Note 23', 'nguyenvand'),
('12:58:00', 'Note 12', 'nguyenvanb'),
('14:37:00', 'Note 44', 'nguyenvanc'),
('15:48:00', 'Note 19', 'nguyenvanc'),
('02:16:00', 'Note 93', 'nguyenvang'),
('22:00:00', 'Review công việc của bạn', 'nguyenvana');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoiquen`
--

CREATE TABLE `thoiquen` (
  `maThoiQuen` int(11) NOT NULL,
  `tenThoiQuen` varchar(50) NOT NULL,
  `moTa` varchar(200) DEFAULT NULL,
  `TQThang` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `soNgayThucHien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thoiquen`
--

INSERT INTO `thoiquen` (`maThoiQuen`, `tenThoiQuen`, `moTa`, `TQThang`, `username`, `soNgayThucHien`) VALUES
(1, 'Tập gym', 'Tập các động tác tay, ngực 30p trong vòng 21 ngày', '2023-11-01', 'nguyenvana', 10),
(2, 'Học TOEIC', 'Làm bài tập luyện thi Toeic lisening và reading 30p mỗi ngày ', '2023-11-01', 'nguyenvana', 16),
(3, 'Chơi thể thao', 'Mỗi ngày chơi thể thao vào lúc 17h trong vòng 21 ngày', '2023-11-01', 'nguyenvana', 19),
(4, 'Viết nhật ký ', 'Viết nhật ký công việc vào cuối ngày', '2023-10-01', 'nguyenvana', 20),
(5, 'Thức sớm', 'Thức dậy vào lúc 7h hằng ngày', '2023-10-01', 'nguyenvana', 25),
(6, 'Ngủ sớm', 'Ngủ trước 23h mỗi ngày', '2023-10-01', 'nguyenvana', 27),
(7, 'an trua', 'mo ta', '2023-11-20', 'nguyenvana', 0),
(8, 'an trua', 'mo ta', '2023-11-04', 'nguyenvana', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `camxuc`
--
ALTER TABLE `camxuc`
  ADD PRIMARY KEY (`MaCX`),
  ADD KEY `UserName` (`UserName`);

--
-- Chỉ mục cho bảng `chitietmuctieu`
--
ALTER TABLE `chitietmuctieu`
  ADD PRIMARY KEY (`MaMT`),
  ADD KEY `ThangNam` (`ThangNam`),
  ADD KEY `FK_chitietmuctieu_nguoidung` (`username`);

--
-- Chỉ mục cho bảng `congviecquantrong`
--
ALTER TABLE `congviecquantrong`
  ADD PRIMARY KEY (`maCongViec`),
  ADD KEY `fkcongviecquantrong_motngaycuatoi` (`maDSCongViec`);

--
-- Chỉ mục cho bảng `dieutoibieton`
--
ALTER TABLE `dieutoibieton`
  ADD PRIMARY KEY (`MaDBO`),
  ADD KEY `username` (`username`);

--
-- Chỉ mục cho bảng `motngaycuatoi`
--
ALTER TABLE `motngaycuatoi`
  ADD PRIMARY KEY (`maDSCongViec`),
  ADD KEY `fk_motngaycuatoi_nguoidung` (`username`);

--
-- Chỉ mục cho bảng `motthangnhinlai`
--
ALTER TABLE `motthangnhinlai`
  ADD PRIMARY KEY (`thangNam`),
  ADD KEY `username` (`username`);

--
-- Chỉ mục cho bảng `muctieuthang`
--
ALTER TABLE `muctieuthang`
  ADD PRIMARY KEY (`ThangNam`),
  ADD KEY `FK_nguoidung_muctieuthang` (`username`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `sukien`
--
ALTER TABLE `sukien`
  ADD PRIMARY KEY (`MaSK`),
  ADD KEY `Username` (`Username`);

--
-- Chỉ mục cho bảng `thoigiannhacnho`
--
ALTER TABLE `thoigiannhacnho`
  ADD KEY `username` (`username`);

--
-- Chỉ mục cho bảng `thoiquen`
--
ALTER TABLE `thoiquen`
  ADD PRIMARY KEY (`maThoiQuen`),
  ADD KEY `FK_thoiquen_nguoidung` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `camxuc`
--
ALTER TABLE `camxuc`
  MODIFY `MaCX` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `chitietmuctieu`
--
ALTER TABLE `chitietmuctieu`
  MODIFY `MaMT` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `congviecquantrong`
--
ALTER TABLE `congviecquantrong`
  MODIFY `maCongViec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `dieutoibieton`
--
ALTER TABLE `dieutoibieton`
  MODIFY `MaDBO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `sukien`
--
ALTER TABLE `sukien`
  MODIFY `MaSK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `thoiquen`
--
ALTER TABLE `thoiquen`
  MODIFY `maThoiQuen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `camxuc`
--
ALTER TABLE `camxuc`
  ADD CONSTRAINT `camxuc_ibfk_1` FOREIGN KEY (`UserName`) REFERENCES `nguoidung` (`username`);

--
-- Các ràng buộc cho bảng `chitietmuctieu`
--
ALTER TABLE `chitietmuctieu`
  ADD CONSTRAINT `chitietmuctieu_ibfk_1` FOREIGN KEY (`ThangNam`) REFERENCES `muctieuthang` (`ThangNam`),
  ADD CONSTRAINT `chitietmuctieu_ibfk_2` FOREIGN KEY (`username`) REFERENCES `nguoidung` (`username`);

--
-- Các ràng buộc cho bảng `congviecquantrong`
--
ALTER TABLE `congviecquantrong`
  ADD CONSTRAINT `fkcongviecquantrong_motngaycuatoi` FOREIGN KEY (`maDSCongViec`) REFERENCES `motngaycuatoi` (`maDSCongViec`);

--
-- Các ràng buộc cho bảng `dieutoibieton`
--
ALTER TABLE `dieutoibieton`
  ADD CONSTRAINT `dieutoibieton_ibfk_1` FOREIGN KEY (`username`) REFERENCES `nguoidung` (`username`);

--
-- Các ràng buộc cho bảng `motngaycuatoi`
--
ALTER TABLE `motngaycuatoi`
  ADD CONSTRAINT `fk_motngaycuatoi_nguoidung` FOREIGN KEY (`username`) REFERENCES `nguoidung` (`username`);

--
-- Các ràng buộc cho bảng `motthangnhinlai`
--
ALTER TABLE `motthangnhinlai`
  ADD CONSTRAINT `motthangnhinlai_ibfk_1` FOREIGN KEY (`username`) REFERENCES `nguoidung` (`username`);

--
-- Các ràng buộc cho bảng `sukien`
--
ALTER TABLE `sukien`
  ADD CONSTRAINT `sukien_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `nguoidung` (`username`);

--
-- Các ràng buộc cho bảng `thoigiannhacnho`
--
ALTER TABLE `thoigiannhacnho`
  ADD CONSTRAINT `thoigiannhacnho_ibfk_1` FOREIGN KEY (`username`) REFERENCES `nguoidung` (`username`);

--
-- Các ràng buộc cho bảng `thoiquen`
--
ALTER TABLE `thoiquen`
  ADD CONSTRAINT `thoiquen_ibfk_1` FOREIGN KEY (`username`) REFERENCES `nguoidung` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
