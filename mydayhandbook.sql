-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 07:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydayhandbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `camxuc`
--

CREATE TABLE `camxuc` (
  `MaCX` int(11) NOT NULL,
  `TrangThai` varchar(15) NOT NULL,
  `ThoiGian` date NOT NULL,
  `UserName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `camxuc`
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
-- Table structure for table `chitietmuctieu`
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
-- Dumping data for table `chitietmuctieu`
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
(9, '2023-10', 'Tặng quà 20-10 cho mẹ', 'Không hoàn thành', NULL, 'nguyenvana');

-- --------------------------------------------------------

--
-- Table structure for table `congviecquantrong`
--

CREATE TABLE `congviecquantrong` (
  `maCongViec` int(11) NOT NULL,
  `tenCongViec` varchar(100) NOT NULL,
  `thoiGianThucHien` date NOT NULL,
  `ghiChu` varchar(100) DEFAULT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `congviecquantrong`
--

INSERT INTO `congviecquantrong` (`maCongViec`, `tenCongViec`, `thoiGianThucHien`, `ghiChu`, `username`) VALUES
(1, 'Làm đồ án cuối kỳ Phân tích định lượng', '2023-11-01', 'Lúc 13h tại Thư viện trường', 'nguyenvana'),
(2, 'Thi giữa kỳ phát triển ứng dụng', '2023-11-01', 'Thi vấn đáp tại X10.05', 'nguyenvana'),
(3, 'Làm bài phần Listennig Toeic', '2023-11-01', 'Ghi chép lại các từ vựng mới trong bài', 'nguyenvana'),
(4, 'Tập gym 30 phút cơ tay và ngực', '2023-11-01', 'Vào lúc 16h ở Citigym', 'nguyenvana'),
(5, 'Báo cáo tuần PTUD', '2023-11-02', 'Phần giao diện', 'nguyenvana'),
(6, 'Họp đầu tuần PTUD', '2023-11-02', '21h chia công việc cho tuần tiếp theo', 'nguyenvana'),
(7, 'Làm bài tập Toeic phần Reading', '2023-11-02', 'Ghi và học lại từ vựng mới trong bài', 'nguyenvana'),
(8, 'Làm bài tập OOP ôn thi', '2023-11-02', 'Làm bài Giao dịch vàng', 'nguyenvana'),
(9, 'Họp nhóm QTTNTMĐT', '2023-11-03', NULL, 'nguyenvana'),
(10, 'Trực VP Đoàn khoa CNTT', '2023-11-03', NULL, 'nguyenvana'),
(11, 'Kiểm tra thực hành OOP online', '2023-11-03', '21h', 'nguyenvana');

-- --------------------------------------------------------

--
-- Table structure for table `dieutoibieton`
--

CREATE TABLE `dieutoibieton` (
  `MaDBO` int(11) NOT NULL,
  `NoiDung` varchar(100) NOT NULL,
  `ThoiGian` date NOT NULL DEFAULT current_timestamp(),
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dieutoibieton`
--

INSERT INTO `dieutoibieton` (`MaDBO`, `NoiDung`, `ThoiGian`, `username`) VALUES
(1, 'Được tặng quà sinh nhật', '2023-09-10', 'nguyenvana'),
(2, 'Nhận thưởng dẫn văn nghệ khoa CNTT', '2023-10-03', 'nguyenvana'),
(3, 'Nhận chứng nhận hoàn thành xuất sắc chiến dịch Mùa hè xanh', '2023-11-03', 'nguyenvana'),
(4, 'Được bạn cùng lớp bao ăn tối', '2023-11-12', 'nguyenvana'),
(12, 'Thuận sửa code dùm', '2023-11-19', 'nguyenvana'),
(13, 'Yêu em', '2023-11-19', 'nguyenvana'),
(14, 'alo alo', '2023-11-19', 'nguyenvana'),
(15, 'Đi học', '2023-11-20', 'nguyenvana');

-- --------------------------------------------------------

--
-- Table structure for table `motngaycuatoi`
--

CREATE TABLE `motngaycuatoi` (
  `ngayThang` date NOT NULL,
  `luongNuocDaUong` int(11) NOT NULL,
  `trangThai` int(11) NOT NULL,
  `camXucCaNgay` int(11) NOT NULL,
  `ghiChu` varchar(1000) DEFAULT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `motngaycuatoi`
--

INSERT INTO `motngaycuatoi` (`ngayThang`, `luongNuocDaUong`, `trangThai`, `camXucCaNgay`, `ghiChu`, `username`) VALUES
('2023-10-31', 2, 1, 5, NULL, 'nguyenvana'),
('2023-11-01', 3, 0, 3, NULL, 'nguyenvana'),
('2023-11-02', 2, 1, 1, NULL, 'nguyenvana'),
('2023-11-03', 1, 1, 5, NULL, 'nguyenvana'),
('2023-11-04', 3, 0, 2, NULL, 'nguyenvana'),
('2023-11-05', 2, 0, 4, NULL, 'nguyenvana'),
('2023-11-06', 3, 1, 3, NULL, 'nguyenvana'),
('2023-11-07', 3, 1, 5, NULL, 'nguyenvana'),
('2023-11-08', 2, 0, 1, NULL, 'nguyenvana'),
('2023-11-09', 2, 1, 4, NULL, 'nguyenvana'),
('2023-11-10', 1, 0, 2, NULL, 'nguyenvana'),
('2023-11-11', 2, 1, 4, NULL, 'nguyenvana'),
('2023-11-12', 2, 0, 5, NULL, 'nguyenvana'),
('2023-11-13', 3, 1, 4, NULL, 'nguyenvana'),
('2023-11-14', 2, 1, 3, NULL, 'nguyenvana');

-- --------------------------------------------------------

--
-- Table structure for table `motthangnhinlai`
--

CREATE TABLE `motthangnhinlai` (
  `thangNam` date NOT NULL DEFAULT current_timestamp(),
  `username` varchar(50) NOT NULL,
  `than` varchar(500) NOT NULL,
  `tam` varchar(500) NOT NULL,
  `tri` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `motthangnhinlai`
--

INSERT INTO `motthangnhinlai` (`thangNam`, `username`, `than`, `tam`, `tri`) VALUES
('2023-09-30', 'nguyenvana', '- Tập thể dục thể thao\r\n- Tập thể hình', '- Tu tâm tích đức\r\n- Làm lành lánh dữ', '- Học học nữa học mãi\r\n- Sống trọn từng khoảnh khắc'),
('2023-10-31', 'nguyenvana', '- Tập gym 30p mỗi ngày\r\n- Chơi thể thao 30p mỗi ngày', '- Ngủ sớm trước 23h \r\n- Dậy sớm trước 7h để thành công', '- Học Toeic 30p mỗi ngày\r\n- Ôn bài thi OOP'),
('2023-11-19', 'nguyenvana', 'zcxdvdsvxv', 'sdvxcvcvc vcx', 'x vxbvbxcvxcvxv'),
('2023-11-20', 'nguyenvana', 'Sang', 'Xịn', 'Mịn');

-- --------------------------------------------------------

--
-- Table structure for table `muctieuthang`
--

CREATE TABLE `muctieuthang` (
  `ThangNam` varchar(20) NOT NULL,
  `ChuDeThang` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `muctieuthang`
--

INSERT INTO `muctieuthang` (`ThangNam`, `ChuDeThang`, `username`) VALUES
('2023-08', 'Năm học mới', 'nguyenvana'),
('2023-09', 'My Birthday', 'nguyenvana'),
('2023-10', 'Thi giữa kỳ', 'nguyenvana'),
('2023-11', 'Thi cuối kỳ', 'nguyenvana');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
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
-- Dumping data for table `nguoidung`
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
('tien', 'tien', 'tien@gmail.com', '1', '123456789', 0, NULL, NULL),
('vominhtien', 'vominhtien', 'tien@gmail.com', '1', '123456789', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sukien`
--

CREATE TABLE `sukien` (
  `MaSK` int(11) NOT NULL,
  `TenSK` varchar(30) NOT NULL,
  `ThoiGian` datetime NOT NULL,
  `Username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sukien`
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
-- Table structure for table `thoigiannhacnho`
--

CREATE TABLE `thoigiannhacnho` (
  `thoiGian` time NOT NULL,
  `ghiChu` varchar(100) DEFAULT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thoigiannhacnho`
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
-- Table structure for table `thoiquen`
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
-- Dumping data for table `thoiquen`
--

INSERT INTO `thoiquen` (`maThoiQuen`, `tenThoiQuen`, `moTa`, `TQThang`, `username`, `soNgayThucHien`) VALUES
(1, 'Tập gym', 'Tập các động tác tay, ngực 30p trong vòng 21 ngày', '2023-11-01', 'nguyenvana', 10),
(2, 'Học TOEIC', 'Làm bài tập luyện thi Toeic lisening và reading 30p mỗi ngày ', '2023-11-01', 'nguyenvana', 16),
(3, 'Chơi thể thao', 'Mỗi ngày chơi thể thao vào lúc 17h trong vòng 21 ngày', '2023-11-01', 'nguyenvana', 19),
(4, 'Viết nhật ký ', 'Viết nhật ký công việc vào cuối ngày', '2023-10-01', 'nguyenvana', 20),
(5, 'Thức sớm', 'Thức dậy vào lúc 7h hằng ngày', '2023-10-01', 'nguyenvana', 25),
(6, 'Ngủ sớm', 'Ngủ trước 23h mỗi ngày', '2023-10-01', 'nguyenvana', 27);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camxuc`
--
ALTER TABLE `camxuc`
  ADD PRIMARY KEY (`MaCX`),
  ADD KEY `UserName` (`UserName`);

--
-- Indexes for table `chitietmuctieu`
--
ALTER TABLE `chitietmuctieu`
  ADD PRIMARY KEY (`MaMT`),
  ADD KEY `ThangNam` (`ThangNam`),
  ADD KEY `FK_chitietmuctieu_nguoidung` (`username`);

--
-- Indexes for table `congviecquantrong`
--
ALTER TABLE `congviecquantrong`
  ADD PRIMARY KEY (`maCongViec`),
  ADD KEY `FK_nguoidung_congviecquantrong` (`username`);

--
-- Indexes for table `dieutoibieton`
--
ALTER TABLE `dieutoibieton`
  ADD PRIMARY KEY (`MaDBO`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `motngaycuatoi`
--
ALTER TABLE `motngaycuatoi`
  ADD PRIMARY KEY (`ngayThang`),
  ADD KEY `username` (`username`),
  ADD KEY `camXucCaNgay` (`camXucCaNgay`);

--
-- Indexes for table `motthangnhinlai`
--
ALTER TABLE `motthangnhinlai`
  ADD PRIMARY KEY (`thangNam`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `muctieuthang`
--
ALTER TABLE `muctieuthang`
  ADD PRIMARY KEY (`ThangNam`),
  ADD KEY `FK_nguoidung_muctieuthang` (`username`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `sukien`
--
ALTER TABLE `sukien`
  ADD PRIMARY KEY (`MaSK`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `thoigiannhacnho`
--
ALTER TABLE `thoigiannhacnho`
  ADD KEY `username` (`username`);

--
-- Indexes for table `thoiquen`
--
ALTER TABLE `thoiquen`
  ADD PRIMARY KEY (`maThoiQuen`),
  ADD KEY `FK_thoiquen_nguoidung` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camxuc`
--
ALTER TABLE `camxuc`
  MODIFY `MaCX` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `chitietmuctieu`
--
ALTER TABLE `chitietmuctieu`
  MODIFY `MaMT` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `congviecquantrong`
--
ALTER TABLE `congviecquantrong`
  MODIFY `maCongViec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dieutoibieton`
--
ALTER TABLE `dieutoibieton`
  MODIFY `MaDBO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sukien`
--
ALTER TABLE `sukien`
  MODIFY `MaSK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `thoiquen`
--
ALTER TABLE `thoiquen`
  MODIFY `maThoiQuen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `camxuc`
--
ALTER TABLE `camxuc`
  ADD CONSTRAINT `camxuc_ibfk_1` FOREIGN KEY (`UserName`) REFERENCES `nguoidung` (`username`);

--
-- Constraints for table `chitietmuctieu`
--
ALTER TABLE `chitietmuctieu`
  ADD CONSTRAINT `chitietmuctieu_ibfk_1` FOREIGN KEY (`ThangNam`) REFERENCES `muctieuthang` (`ThangNam`);

--
-- Constraints for table `dieutoibieton`
--
ALTER TABLE `dieutoibieton`
  ADD CONSTRAINT `dieutoibieton_ibfk_1` FOREIGN KEY (`username`) REFERENCES `nguoidung` (`username`);

--
-- Constraints for table `motngaycuatoi`
--
ALTER TABLE `motngaycuatoi`
  ADD CONSTRAINT `motngaycuatoi_ibfk_1` FOREIGN KEY (`username`) REFERENCES `nguoidung` (`username`);

--
-- Constraints for table `motthangnhinlai`
--
ALTER TABLE `motthangnhinlai`
  ADD CONSTRAINT `motthangnhinlai_ibfk_1` FOREIGN KEY (`username`) REFERENCES `nguoidung` (`username`);

--
-- Constraints for table `sukien`
--
ALTER TABLE `sukien`
  ADD CONSTRAINT `sukien_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `nguoidung` (`username`);

--
-- Constraints for table `thoigiannhacnho`
--
ALTER TABLE `thoigiannhacnho`
  ADD CONSTRAINT `thoigiannhacnho_ibfk_1` FOREIGN KEY (`username`) REFERENCES `nguoidung` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
