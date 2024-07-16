-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2023 lúc 11:38 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bienthe`
--

CREATE TABLE `bienthe` (
  `id_bt` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `ten_bt` varchar(255) NOT NULL,
  `hangton` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id_cthd` int(11) NOT NULL,
  `id_hd` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia_tai_thoi_diem_ban` int(11) NOT NULL,
  `mausac` varchar(255) NOT NULL,
  `kichthuoc` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsanpham`
--

CREATE TABLE `chitietsanpham` (
  `id_ctsp` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `dongia` double NOT NULL,
  `donvi` varchar(255) NOT NULL,
  `giamgia` double NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctgiohang`
--

CREATE TABLE `ctgiohang` (
  `id_ctgh` int(11) NOT NULL,
  `id_hd` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `mausac` varchar(255) NOT NULL,
  `kichthuoc` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_dm` int(11) NOT NULL,
  `ten_danhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_dm`, `ten_danhmuc`) VALUES
(24, 'NIKE'),
(25, 'ADIDAS'),
(26, 'JORDAN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id_gh` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hd` int(11) NOT NULL,
  `id_tk` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `id_vc` int(11) NOT NULL,
  `phuongthucvanchuyen` varchar(255) NOT NULL,
  `phuongthucthanhtoan` varchar(255) NOT NULL,
  `ngaymuahang` date NOT NULL,
  `trangthai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `gia_sp` varchar(255) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `soluong` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `id_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten_sp`, `gia_sp`, `hinh`, `size`, `soluong`, `mota`, `id_dm`) VALUES
(10, ' Giày Nike Air Jordan 1 x Union Retro High ‘Black Toe’ Like Auth', '1.500.000₫', 'jd2.jpg', '40', '150', 'Giày Nike Air Jordan 1 x Union Retro High ‘Black Toe’ Like Auth với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.\r\n\r\nVà nếu bạn cũng là một người đam mê dòng sneaker dễ mang, dễ phố đồ thì không nên bỏ qua mẫu giày siêu phẩm này đâu nhé! Dưới đây là một số hình ảnh của đôi Giày Nike Air Jordan 1 x Union Retro High ‘Black Toe’ Like Auth tại TyHi Sneaker (hàng chuẩn Like Auth bản xịn nhất thị trường).', 26),
(11, ' Giày Nike Air Jordan 1 Retro High OG ‘Palomino’ Like Auth', '1.350.000₫', 'jd4.jpg', '42', '134', 'Giày Nike Air Jordan 1 Retro High OG ‘Palomino’ Like Auth với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.\r\n\r\nVà nếu bạn cũng là một người đam mê dòng sneaker dễ mang, dễ phố đồ thì không nên bỏ qua mẫu giày siêu phẩm này đâu nhé! Dưới đây là một số hình ảnh của đôi Giày Nike Air Jordan 1 Retro High OG ‘Palomino’ Like Auth tại TyHi Sneaker (hàng chuẩn Like Auth bản xịn nhất thị trường).', 26),
(13, 'Giày Nike Air Jordan 1 Retro High OG Dark Mocha Like Auth', ' 1.200.000₫', 'jd5.jpg', '38', '50', 'Giày Nike Air Jordan 1 Retro High OG Dark Mocha Like Auth với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích. Một đôi giày rất đặc biệt mua 1 được 2 vừa đi được bản cổ cao vừa kéo bỏ đề thành bản cổ thấp.\r\n\r\nVà nếu bạn cũng là một người đam mê dòng sneaker dễ mang, dễ phố đồ thì không nên bỏ qua mẫu giày siêu phẩm này đâu nhé! Dưới đây là một số hình ảnh của đôi Giày Nike Air Jordan 1 Retro High OG Dark Mocha Like Auth tại TyHi Sneaker (hàng chuẩn bản xịn nhất thị trường).', 26),
(15, ' Giày Nike Air Jordan 4 Snorlax Like Auth', '920.000₫', 'jd7.png', '40', '130', 'Giày Nike Air Jordan 4 Snorlax là một phiên bản độc đáo và đáng chú ý của dòng giày Air Jordan 4, được lấy cảm hứng từ nhân vật huyền thoại trong thế giới Pokemon – Snorlax. Đôi giày này mang đến sự kết hợp độc đáo giữa văn hóa sneaker và trò chơi thú vị, thể hiện sự đa dạng và sáng tạo trong thế giới thời trang.\r\n\r\nVà nếu bạn cũng là một người đam mê dòng sneaker trắng thì không nên bỏ qua mẫu giày siêu phẩm này đâu nhé! Dưới đây là một số hình ảnh của đôi Giày Nike Air Jordan 4 Snorlax tại Tyhi Sneaker (hàng chuẩn siêu cấp, bản xịn nhất thị trường)', 26),
(16, 'Giày Nike Air Jordan 4 Retro ‘Pine Green’ Like Auth', '920.000₫', 'jd8.webp', '42', '160', 'Giày Nike Air Jordan 4 Retro ‘Pine Green’ là một phiên bản đặc biệt của dòng giày thể thao Air Jordan 4 của hãng Nike. Đây là một mẫu giày thể thao phối màu chủ đạo là màu xanh lá cây (Pine Green) kết hợp với các chi tiết màu trắng trên thân giày.\r\n\r\nVà nếu bạn cũng là một người đam mê dòng sneaker dễ mang, dễ phố đồ thì không nên bỏ qua mẫu giày siêu phẩm này đâu nhé! Dưới đây là một số thông tin hình ảnh về đôi Giày Nike Air Jordan 4 Retro ‘Pine Green’ tại TyHi Sneaker (hàng chuẩn 1:1, bản xịn nhất thị trường).', 26),
(18, 'Giày Nike Air Jordan 4 Retro ‘Black Cat’ 2020 Like Auth', '1.350.000₫', 'jd2.jpg', '35', '90', 'Giày Nike Air Jordan 4 Retro ‘Black Cat’ 2020 với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.\r\n\r\nVà nếu bạn cũng là một người đam mê dòng sneaker dễ mang, dễ phố đồ thì không nên bỏ qua mẫu giày siêu phẩm này đâu nhé! Dưới đây là một số hình ảnh của đôi Giày Nike Air Jordan 4 Retro ‘Black Cat’ 2020 Like Auth tại TyHi Sneaker (hàng chuẩn Auth bản xịn nhất thị trường). – Cam kết bản Fake tốt nhất từ nhà máy tốt nhất Trung Quốc.', 26),
(20, 'Giày Air Jordan 1 Low SE ‘Pink Blast’ (WMNS) FB9893-600', '4.190.000₫', 'jd12.jpg', '42', '100', 'Giày (WMNS) Air Jordan 1 Low SE ‘Pink Blast’ FB9893-600 là một phiên bản mới nhất của dòng giày Air Jordan cổ điển.\r\n\r\nGiày được làm bằng chất liệu da tổng hợp cao cấp và có màu hồng rực rỡ. Phần đế ngoài được làm bằng cao su và có màu trắng. Trên gót giày có logo Jumpman màu đen.\r\n\r\nGiày (WMNS) Air Jordan 1 Low SE ‘Pink Blast’ FB9893-600 là một lựa chọn tuyệt vời cho những người hâm mộ Air Jordan và những người yêu thích màu hồng. Nó là một đôi giày thời trang và phong cách có thể được mặc trong nhiều dịp khác nhau.', 26);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_tk` int(11) NOT NULL,
  `ten_tk` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `vaitro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_tk`, `ten_tk`, `pass`, `email`, `sdt`, `diachi`, `vaitro`) VALUES
(1, 'nguyen pham truong giang', 'giang1234', 'giang@gmail.com', 967987004, '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

CREATE TABLE `trangthai` (
  `id_tt` int(11) NOT NULL,
  `ten_tt` varchar(255) NOT NULL,
  `hd_tt` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `voucher`
--

CREATE TABLE `voucher` (
  `id_vc` int(11) NOT NULL,
  `mavc` varchar(255) NOT NULL,
  `loaivc` varchar(255) NOT NULL,
  `ngaybatdau` date NOT NULL,
  `ngayketthuc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bienthe`
--
ALTER TABLE `bienthe`
  ADD PRIMARY KEY (`id_bt`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_cthd`),
  ADD KEY `primarykey` (`id_hd`),
  ADD KEY `khoaphu` (`id_sp`);

--
-- Chỉ mục cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD PRIMARY KEY (`id_ctsp`),
  ADD KEY `KF_key` (`id_sp`);

--
-- Chỉ mục cho bảng `ctgiohang`
--
ALTER TABLE `ctgiohang`
  ADD PRIMARY KEY (`id_ctgh`),
  ADD KEY `kp_gh` (`id_hd`),
  ADD KEY `kp_gh2` (`id_sp`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id_gh`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hd`),
  ADD KEY `kp1` (`id_tk`),
  ADD KEY `kp2` (`id_vc`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `fk_air_fl` (`id_dm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_tk`);

--
-- Chỉ mục cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`id_tt`);

--
-- Chỉ mục cho bảng `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id_vc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bienthe`
--
ALTER TABLE `bienthe`
  MODIFY `id_bt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id_cthd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  MODIFY `id_ctsp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ctgiohang`
--
ALTER TABLE `ctgiohang`
  MODIFY `id_ctgh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_gh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_tk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `id_tt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id_vc` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `khoaphu` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`),
  ADD CONSTRAINT `primarykey` FOREIGN KEY (`id_hd`) REFERENCES `hoadon` (`id_hd`);

--
-- Các ràng buộc cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD CONSTRAINT `KF_key` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`);

--
-- Các ràng buộc cho bảng `ctgiohang`
--
ALTER TABLE `ctgiohang`
  ADD CONSTRAINT `kp_gh` FOREIGN KEY (`id_hd`) REFERENCES `chitiethoadon` (`id_cthd`),
  ADD CONSTRAINT `kp_gh2` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `kp1` FOREIGN KEY (`id_tk`) REFERENCES `taikhoan` (`id_tk`),
  ADD CONSTRAINT `kp2` FOREIGN KEY (`id_vc`) REFERENCES `voucher` (`id_vc`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_air_fl` FOREIGN KEY (`id_dm`) REFERENCES `danhmuc` (`id_dm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
