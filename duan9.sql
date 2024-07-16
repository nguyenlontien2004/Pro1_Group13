-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2023 lúc 07:33 PM
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
-- Cơ sở dữ liệu: `duan0`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_bl` int(11) NOT NULL,
  `id_tk` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `ngaybinhluan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id_bl`, `id_tk`, `id_sp`, `noidung`, `ngaybinhluan`) VALUES
(1, 1, 18, 'okok', '2023-11-24'),
(2, 1, 16, 'sp đep', '2023-11-24'),
(3, 1, 16, 'ok la', '2023-11-24'),
(4, 1, 16, 'ok la', '2023-11-24'),
(5, 1, 16, 'ok la', '2023-11-24'),
(6, 1, 16, 'ok la', '2023-11-24'),
(7, 1, 16, 'ok la', '2023-11-24'),
(8, 1, 16, 'ok la', '2023-11-24'),
(9, 1, 16, 'ok la', '2023-11-24'),
(10, 1, 16, 'ok la', '2023-11-24'),
(11, 1, 18, 'ok', '2023-11-24'),
(12, 1, 18, 'ok', '2023-11-24'),
(13, 1, 18, 'ok', '2023-11-24'),
(14, 1, 18, 'ok', '2023-11-24'),
(15, 1, 18, 'ok', '2023-11-24'),
(16, 1, 11, 'ok', '2023-11-24'),
(17, 1, 39, 'sp đẹp', '2023-11-30'),
(18, 1, 40, 'đẹp', '2023-11-30');

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
(10, ' Giày Nike Air Jordan 1 x Union Retro High ‘Black Toe’ Like Auth', '1500000', 'jd2.jpg', '40', '150', 'Giày Nike Air Jordan 1 x Union Retro High ‘Black Toe’ Like Auth với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.\r\n\r\nVà nếu bạn cũng là một người đam mê dòng sneaker dễ mang, dễ phố đồ thì không nên bỏ qua mẫu giày siêu phẩm này đâu nhé! Dưới đây là một số hình ảnh của đôi Giày Nike Air Jordan 1 x Union Retro High ‘Black Toe’ Like Auth tại TyHi Sneaker (hàng chuẩn Like Auth bản xịn nhất thị trường).', 26),
(11, ' Giày Nike Air Jordan 1 Retro High OG ‘Palomino’ Like Auth', '1350000', 'jd4.jpg', '42', '134', 'Giày Nike Air Jordan 1 Retro High OG ‘Palomino’ Like Auth với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.\r\n\r\nVà nếu bạn cũng là một người đam mê dòng sneaker dễ mang, dễ phố đồ thì không nên bỏ qua mẫu giày siêu phẩm này đâu nhé! Dưới đây là một số hình ảnh của đôi Giày Nike Air Jordan 1 Retro High OG ‘Palomino’ Like Auth tại TyHi Sneaker (hàng chuẩn Like Auth bản xịn nhất thị trường).', 26),
(13, 'Giày Nike Air Jordan 1 Retro High OG Dark Mocha Like Auth', ' 1200000', 'jd5.jpg', '38', '50', 'Giày Nike Air Jordan 1 Retro High OG Dark Mocha Like Auth với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích. Một đôi giày rất đặc biệt mua 1 được 2 vừa đi được bản cổ cao vừa kéo bỏ đề thành bản cổ thấp.\r\n\r\nVà nếu bạn cũng là một người đam mê dòng sneaker dễ mang, dễ phố đồ thì không nên bỏ qua mẫu giày siêu phẩm này đâu nhé! Dưới đây là một số hình ảnh của đôi Giày Nike Air Jordan 1 Retro High OG Dark Mocha Like Auth tại TyHi Sneaker (hàng chuẩn bản xịn nhất thị trường).', 26),
(15, ' Giày Nike Air Jordan 4 Snorlax Like Auth', '920000', 'jd7.png', '40', '130', 'Giày Nike Air Jordan 4 Snorlax là một phiên bản độc đáo và đáng chú ý của dòng giày Air Jordan 4, được lấy cảm hứng từ nhân vật huyền thoại trong thế giới Pokemon – Snorlax. Đôi giày này mang đến sự kết hợp độc đáo giữa văn hóa sneaker và trò chơi thú vị, thể hiện sự đa dạng và sáng tạo trong thế giới thời trang.\r\n\r\nVà nếu bạn cũng là một người đam mê dòng sneaker trắng thì không nên bỏ qua mẫu giày siêu phẩm này đâu nhé! Dưới đây là một số hình ảnh của đôi Giày Nike Air Jordan 4 Snorlax tại Tyhi Sneaker (hàng chuẩn siêu cấp, bản xịn nhất thị trường)', 26),
(16, 'Giày Nike Air Jordan 4 Retro ‘Pine Green’ Like Auth', '920000', 'jd8.webp', '42', '160', 'Giày Nike Air Jordan 4 Retro ‘Pine Green’ là một phiên bản đặc biệt của dòng giày thể thao Air Jordan 4 của hãng Nike. Đây là một mẫu giày thể thao phối màu chủ đạo là màu xanh lá cây (Pine Green) kết hợp với các chi tiết màu trắng trên thân giày.\r\n\r\nVà nếu bạn cũng là một người đam mê dòng sneaker dễ mang, dễ phố đồ thì không nên bỏ qua mẫu giày siêu phẩm này đâu nhé! Dưới đây là một số thông tin hình ảnh về đôi Giày Nike Air Jordan 4 Retro ‘Pine Green’ tại TyHi Sneaker (hàng chuẩn 1:1, bản xịn nhất thị trường).', 26),
(17, ' Giày Nike Air Jordan 1 Low ‘True Blue Cement’ Like Auth', '920000', 'jd9.jpg', '42', '100', 'Giày Nike Air Jordan 1 Low ‘True Blue Cement’ với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.\r\n\r\nVà nếu bạn cũng là một người đam mê dòng sneaker dễ mang, dễ phố đồ thì không nên bỏ qua mẫu giày siêu phẩm này đâu nhé! Dưới đây là một số hình ảnh của đôi Giày Nike Air Jordan 1 Low ‘True Blue Cement’ Like Auth tại TyHi Sneaker (hàng chuẩn Like Auth bản xịn nhất thị trường).', 26),
(18, 'Giày Nike Air Jordan 4 Retro ‘Black Cat’ 2020 Like Auth', '1350000', 'jd2.jpg', '35', '90', 'Giày Nike Air Jordan 4 Retro ‘Black Cat’ 2020 với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.\r\n\r\nVà nếu bạn cũng là một người đam mê dòng sneaker dễ mang, dễ phố đồ thì không nên bỏ qua mẫu giày siêu phẩm này đâu nhé! Dưới đây là một số hình ảnh của đôi Giày Nike Air Jordan 4 Retro ‘Black Cat’ 2020 Like Auth tại TyHi Sneaker (hàng chuẩn Auth bản xịn nhất thị trường). – Cam kết bản Fake tốt nhất từ nhà máy tốt nhất Trung Quốc.', 26),
(20, 'Giày Air Jordan 1 Low SE ‘Pink Blast’ (WMNS) FB9893-600', '4190000', 'jd12.jpg', '42', '100', 'Giày (WMNS) Air Jordan 1 Low SE ‘Pink Blast’ FB9893-600 là một phiên bản mới nhất của dòng giày Air Jordan cổ điển.\r\n\r\nGiày được làm bằng chất liệu da tổng hợp cao cấp và có màu hồng rực rỡ. Phần đế ngoài được làm bằng cao su và có màu trắng. Trên gót giày có logo Jumpman màu đen.\r\n\r\nGiày (WMNS) Air Jordan 1 Low SE ‘Pink Blast’ FB9893-600 là một lựa chọn tuyệt vời cho những người hâm mộ Air Jordan và những người yêu thích màu hồng. Nó là một đôi giày thời trang và phong cách có thể được mặc trong nhiều dịp khác nhau.', 26),
(25, 'UPER STEAL   Giày Adidas Multix Core Black [FX5119]', '1750000', 'ad1.jpeg', '42', '130', 'Giày Adidas Multix Core Black là một phiên bản sneaker casual của nhà Adidas. Một thiết kế vô cùng đơn giản với những tính năng vượt trội\r\n\r\nThương hiệu: Adidas\r\n\r\nMã sản phẩm: FX5119\r\n\r\nGiới tính: Unisex\r\n\r\nMàu sắc: Core Black\r\n\r\nBảo hành: Sản phẩm được bảo hành 6 tháng kể từ ngày mua (các vấn đề về hở keo, bung chỉ)', 25),
(27, 'Giày Adidas Forum kem sữa siêu cấp', '590000 ', 'ad2.jpg', '41', '150', 'Giày Sneakers là một item không thể thiếu đối với bất kì chàng trai cô gái nào bởi độ “sốt xình xịch” của nó. Hiểu được điều đó, Giày Sneakers Góc Của Nhỏ chuyên cung cấp đa dạng các loại giày cho mọi lứa tuổi, với mức giá phải chăng, cam kết sản phẩm như hình. Mang đến cho khách hàng cảm giác an tâm về sản phẩm khi mua giày tại Nhỏ.', 25),
(28, 'Giày Adidas UltraBoost 22 White Mint Rush Like Auth', '990000', 'ad3.jpg', '39', '120', 'Sale toàn bộ cửa hàng upto 70%Cơ hội bốc thăm nhận IPHONE 15 pro với giá 0đGiao hàng nhanh 60 phút trong nội thành Hà Nội và tp HcmNhận hàng và kiểm tra trước khi thanh toán.Hỗ Trợ đổi trả size linh hoạt', 25),
(30, 'GIày Adidas Treziod Moss Green [GY0045]', '1350000', 'ad5.jpeg', '40', '50', 'Vẫn tiếp tục chốt Asics cho mùa Black Friday nha khách oiii\r\n\r\nCuối tuần củng là tuần cuối sự kiện đang diễn ra rồi ah . kHÁCH nhanh nhanh tranh thủ ghé sang địa chỉ :', 25),
(31, 'Giày Adidas Equipment Plus Boost Triple Black', '1750000', 'ad5.jpg', '38', '100', 'Tinh hoa thiết kế chạy bộ. Giày Adidas Equipment Plus Boost Triple Black/White kết hợp phong cách chạy bộ thập niên 90 với công nghệ tiên tiến nhất thời nay. Đôi giày adidas EQT+ này có lớp đệm Boost đàn hồi, thân giày vừa khít mà thoáng khí cùng các chi tiết 3 Sọc phủ ngoài nâng đỡ.', 25),
(32, 'Giày Adidas Equipment Plus Boost White Like Auth', '850000', 'ad6.jpg', '40', '200', 'Giày Adidas Equipment Plus Boost White/Blue/Orange với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.\r\n\r\nVà nếu bạn cũng là một người đam mê dòng sneaker dễ mang, dễ phố đồ thì không nên bỏ qua mẫu giày siêu phẩm này đâu nhé! Dưới đây là một số hình ảnh của đôi GIÀY ADIDAS EQT TRẮNG SỌC XANH, tại TyHi Sneaker (hàng chuẩn Siêu cấp, bản xịn nhất thị trường).', 25),
(35, 'GIÀY ADIDAS STAN SMITH LUX #CREAM WHITE', '5279000', 'ad9.jpg', '41', '90', 'Giày Adidas Stan Smith Lux #Cream White gồm màu Cream White / Off White / Core Black. Giày thể thao cổ điển với bầu không khí tự nhiên và thiết kế sạch sẽ phù hợp với bạn mọi lúc, mọi nơi. Các chi tiết đường khâu phức tạp làm mượt hình dáng và tăng độ bền. Đế ngoài bằng cao su mang lại kiểu dáng đẹp và lực kéo tuyệt vời trên mặt đất.\r\n\r\nRa đời trên sân quần vợt cách đây 50 năm, Adidas Originals Stan Smith được yêu mến như một biểu tượng phong cách vượt thời gian. Phiên bản mới trở lại này mang đến một thiết kế cao cấp giúp tối đa hóa sức hấp dẫn của những đôi giày thể thao bằng da cổ điển.', 25),
(37, 'Giày Nike Air Force 1 07 LV8 40th Anniversary White Black DQ7658-100', '3050000', 'nk5.jpg', '41', '50', 'Sau 2 năm, vì niềm tin của khách hàng dành cho shop và muốn mang đến cho khách hàng 1 sự an tâm khi mua hàng. Shop đã chính thức khai trương của hàng đầu tiên tại  TP. Hà Nội vào tháng 8 năm 2018.\r\n\r\nĐến nay, shop đã cải tiến showroom trải nghiệm khách hàng tốt hơn với mong muốn khách hàng được trải nghiệm sản phẩm thực tế tại shop và là 1 nơi mua sắm đáng tin cậy.\r\n\r\n', 24),
(38, 'Giày Nike Air Force 1 Low Cream Black Swoosh', '598000', 'nk6.jpg', '38', '80', 'Cam kết chỉ bán giày chuẩn chất lượng từ Rep 1:1 - Like Auth - Best Quality từ các xưởng Best Trung Quốc\r\nHàng có sẵn tại Shop. Không qua bên thứ 3 ---> Chất lượng giày qua kiểm định kỹ càng.\r\nVideo quay review, phân biệt so sánh từng chất lượng khác nhau.\r\nKhách hàng được kiểm tra, đi thử trước khi nhận hàng.\r\nGiao hàng toàn quốc đồng giá 30k, FREESHIP với đơn hàng trên 2 triệu.', 24),
(39, 'NIKE AIR FORCE 1 LOW WHITE BROWN', '900000', 'nk7.jpg', '42', '100', ' Hàng order khoảng 2-3 tuần về, liên hệ shop để được tư vấn cách thức đặt hàng chi tiết.\r\n\r\n Mẫu này có thể có sẵn tại shop, bạn check xem tại danh mục này nhé >> Hàng có sẵn tại shop', 24),
(40, 'Giày Nike Air Force 1 Low 82 Blue 1:1', '900000', 'nk8.jpg', '42', '150', 'SẢN PHẨM CHẤT LƯỢNG CAO\r\nKiên quyết nói không với hàng giả, hàng kém chất lượng\r\n\r\nGiao hàng trên khắp 63 tỉnh thành\r\nGIAO HÀNG TẬN NƠI\r\nGiao hàng trên khắp 63 tỉnh thành\r\n\r\nBạn thoải mái kiểm tra hàng trước khi thanh toán\r\nTHANH TOÁN KHI NHẬN HÀNG\r\nBạn thoải mái kiểm tra hàng trước khi thanh toán\r\n\r\nDễ dàng đổi trả sản phẩm trong 7 ngày kể từ khi nhận hàng\r\nĐỔI TRẢ TRONG 7 NGÀY\r\nDễ dàng đổi trả sản phẩm trong 7 ngày kể từ khi nhận hàng', 24),
(41, 'NIKE AIR MAX 90', '3900000 ', 'nk9.jpg', '41', '99', 'Cửa Hàng Bán Giày Sneaker Adidas, Nike Chính Hãng tại tpHN 100% Authentic nhập trực tiếp từ US, UK, JAPAN @ KINGSHOES.VN nhiệm vụ mang hàng chính hãng đến tay người tiêu dùng Việt Nam !!!', 24);

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
(1, 'nguyen pham truong giang', 'giang1234', 'nptg131104@gmail.com', 967987004, '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(11) NOT NULL,
  `iddh` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` double(10,2) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `iddh`, `idpro`, `soluong`, `dongia`, `tensp`, `img`) VALUES
(1, 1, 40, 1, 900000.00, 'Giày Nike Air Force 1 Low 82 Blue 1:1', 'nk8.jpg'),
(2, 9, 39, 1, 900000.00, 'NIKE AIR FORCE 1 LOW WHITE BROWN', 'nk7.jpg'),
(3, 11, 39, 1, 900000.00, 'NIKE AIR FORCE 1 LOW WHITE BROWN', 'nk7.jpg'),
(4, 14, 40, 1, 900000.00, 'Giày Nike Air Force 1 Low 82 Blue 1:1', 'nk8.jpg'),
(5, 16, 40, 1, 900000.00, 'Giày Nike Air Force 1 Low 82 Blue 1:1', 'nk8.jpg'),
(6, 17, 40, 1, 900000.00, 'Giày Nike Air Force 1 Low 82 Blue 1:1', 'nk8.jpg'),
(7, 19, 27, 1, 590000.00, 'Giày Adidas Forum kem sữa siêu cấp', 'ad2.jpg'),
(8, 21, 38, 1, 598000.00, 'Giày Nike Air Force 1 Low Cream Black Swoosh', 'nk6.jpg'),
(9, 22, 40, 2, 900000.00, 'Giày Nike Air Force 1 Low 82 Blue 1:1', 'nk8.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `madh` varchar(20) NOT NULL,
  `tongdonhang` double(10,2) NOT NULL,
  `phuongthuc` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `hoten` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tell` varchar(20) NOT NULL,
  `pttt` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `madh`, `tongdonhang`, `phuongthuc`, `iduser`, `hoten`, `address`, `email`, `tell`, `pttt`) VALUES
(1, 'shopbh736450', 0.00, 0, 0, 'thien', 'ầgarggr', 'nptg131104@gmail.com', '0396189342', 1),
(2, 'shopbh616107', 0.00, 0, 0, 'thien', 'ầgarggr', 'nptg131104@gmail.com', '0396189342', 1),
(3, 'shopbh529427', 0.00, 0, 0, 'thien', 'ầgarggr', 'nptg131104@gmail.com', '0396189342', 1),
(4, 'shopbh462813', 0.00, 0, 0, 'thien', 'ầgarggr', 'nptg131104@gmail.com', '0396189342', 1),
(5, 'shopbh520285', 0.00, 0, 0, 'thien', 'ầgarggr', 'nptg131104@gmail.com', '0396189342', 1),
(6, 'shopbh898272', 0.00, 0, 0, 'thien', 'ầgarggr', 'nptg131104@gmail.com', '0396189342', 1),
(7, 'shopbh511138', 0.00, 0, 0, 'thien', 'ầgarggr', 'nptg131104@gmail.com', '0396189342', 1),
(8, 'shopbh439214', 0.00, 0, 0, 'thien', 'ầgarggr', 'nptg131104@gmail.com', '0396189342', 1),
(9, 'shopbh448481', 0.00, 0, 0, 'fg', 'fs', 'fbgf@gmail.com', 'dfsgf', 1),
(10, 'shopbh212079', 0.00, 0, 0, 'fg', 'fs', 'fbgf@gmail.com', 'dfsgf', 1),
(11, 'shopbh701559', 0.00, 0, 0, 'nptg', 'nb', 'nptg131104@gmail.com', '0396189342', 1),
(12, 'shopbh196841', 0.00, 0, 0, 'nptg', 'nb', 'nptg131104@gmail.com', '0396189342', 1),
(13, 'shopbh39880', 0.00, 0, 0, 'nptg', 'nb', 'nptg131104@gmail.com', '0396189342', 1),
(14, 'shopbh722522', 0.00, 0, 0, 'dsc', 's', 'nptg131104@gmail.com', '0396189342', 1),
(15, 'shopbh5169', 0.00, 0, 0, 'dsc', 's', 'nptg131104@gmail.com', '0396189342', 1),
(16, 'shopbh750021', 0.00, 0, 0, 'nptg', 'ninh binh', 'nptg131104@gmail.com', '0396189342', 1),
(17, 'shopbh123253', 0.00, 0, 0, 'nptg', 'ầgarggr', 'nptg131104@gmail.com', '0396189342', 1),
(18, 'shopbh584196', 0.00, 0, 0, 'nptg', 'ầgarggr', 'nptg131104@gmail.com', '0396189342', 1),
(19, 'shopbh133179', 0.00, 0, 0, 'nptg', 'hà nội', 'nptg131104@gmail.com', '0967987004', 1),
(20, 'shopbh900105', 0.00, 0, 0, 'nptg', 'hà nội', 'nptg131104@gmail.com', '0967987004', 1),
(21, 'shopbh816228', 0.00, 0, 0, 'nptg', 'nb', 'nptg131104@gmail.com', '0967987004', 1),
(22, 'shopbh856161', 0.00, 0, 0, 'nptg', 'nb', 'nptg131104@gmail.com', '0967987004', 1);

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
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_bl`),
  ADD KEY `kp_bl` (`id_sp`),
  ADD KEY `kp_bl2` (`id_tk`);

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
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_tk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `kp_bl` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`),
  ADD CONSTRAINT `kp_bl2` FOREIGN KEY (`id_tk`) REFERENCES `taikhoan` (`id_tk`);

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
