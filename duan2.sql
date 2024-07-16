-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2024 at 02:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan2`
--

-- --------------------------------------------------------

--
-- Table structure for table `bienthesize`
--

CREATE TABLE `bienthesize` (
  `id_bienthe` int(11) NOT NULL,
  `id_sp` int(11) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bienthesize`
--

INSERT INTO `bienthesize` (`id_bienthe`, `id_sp`, `size`, `soluong`) VALUES
(0, 10, '39', 100),
(1, 37, '36', 106),
(2, 37, '37', 12),
(3, 37, '38', 14),
(5, 37, '40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bienthesize2`
--

CREATE TABLE `bienthesize2` (
  `id_bienthe` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `soluong` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bienthesize2`
--

INSERT INTO `bienthesize2` (`id_bienthe`, `id_sp`, `size`, `soluong`) VALUES
(3, 11, '40', '100'),
(4, 10, '40', '52'),
(6, 10, '36', '20'),
(7, 37, '36', '85'),
(8, 41, '41', '85'),
(9, 37, '41', '85'),
(10, 13, '41', '85'),
(11, 39, '41', '8'),
(12, 37, '39', '20');

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id_bl` int(11) NOT NULL,
  `id_tk` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `ngaybinhluan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id_bl`, `id_tk`, `id_sp`, `noidung`, `ngaybinhluan`) VALUES
(1, 1, 18, 'okok', '2023-11-24'),
(21, 2, 13, 'uhuhuhu', '2023-12-09'),
(22, 2, 13, '', '2023-12-09'),
(23, 2, 13, 'uhuhuhu', '2023-12-09'),
(24, 2, 13, 'uhuhuhu', '2023-12-09'),
(25, 2, 13, 'uhuhuhu', '2023-12-09'),
(26, 2, 13, 'uhuhuhu', '2023-12-09'),
(27, 2, 13, 'uhuhuhu', '2023-12-09'),
(28, 2, 13, 'uhuhuhu', '2023-12-09'),
(29, 4, 11, 'gggggggggg', '2024-06-07'),
(30, 4, 11, 'fhth', '2024-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
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
-- Table structure for table `chitietsanpham`
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
-- Table structure for table `ctgiohang`
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
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_dm` int(11) NOT NULL,
  `ten_danhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id_dm`, `ten_danhmuc`) VALUES
(24, 'NIKE'),
(25, 'ADIDAS'),
(26, 'JORDAN');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id_gh` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
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
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `gia_sp` varchar(255) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `luotban` text NOT NULL,
  `mota` text NOT NULL,
  `id_dm` int(11) NOT NULL,
  `id_bienthe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten_sp`, `gia_sp`, `hinh`, `size`, `soluong`, `luotban`, `mota`, `id_dm`, `id_bienthe`) VALUES
(10, ' Giày Nike Air Jordan 1 x Union Retro High ‘Black Toe’ Like Auth', '1500000', 'jd2.jpg', 0, 0, '', 'Giày Nike Air Jordan 1 x Union Retro High ‘Black Toe’ Like Auth với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.\r\n\r\nVà nếu bạn cũng là một người đam mê dòng sneaker dễ mang, dễ phố đồ thì không nên bỏ qua mẫu giày siêu phẩm này đâu nhé! Dưới đây là một số hình ảnh của đôi Giày Nike Air Jordan 1 x Union Retro High ‘Black Toe’ Like Auth tại TyHi Sneaker (hàng chuẩn Like Auth bản xịn nhất thị trường).', 26, 0),
(11, ' Giày Nike Air Jordan 1 Retro High OG ‘Palomino’ Like Auth', '1350000', 'jd4.jpg', 0, 0, '', 'Giày Nike Air Jordan 1 Retro High OG ‘Palomino’ Like Auth với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.\r\n\r\nVà nếu bạn cũng là một người đam mê dòng sneaker dễ mang, dễ phố đồ thì không nên bỏ qua mẫu giày siêu phẩm này đâu nhé! Dưới đây là một số hình ảnh của đôi Giày Nike Air Jordan 1 Retro High OG ‘Palomino’ Like Auth tại TyHi Sneaker (hàng chuẩn Like Auth bản xịn nhất thị trường).', 26, 0),
(13, 'Giày Nike Air Jordan 1 Retro High OG Dark Mocha Like Auth', ' 1200000', 'jd5.jpg', 0, 0, '', 'Giày Nike Air Jordan 1 Retro High OG Dark Mocha Like Auth với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích. Một đôi giày rất đặc biệt mua 1 được 2 vừa đi được bản cổ cao vừa kéo bỏ đề thành bản cổ thấp.\r\n\r\nVà nếu bạn cũng là một người đam mê dòng sneaker dễ mang, dễ phố đồ thì không nên bỏ qua mẫu giày siêu phẩm này đâu nhé! Dưới đây là một số hình ảnh của đôi Giày Nike Air Jordan 1 Retro High OG Dark Mocha Like Auth tại TyHi Sneaker (hàng chuẩn bản xịn nhất thị trường).', 26, 0),
(15, ' Giày Nike Air Jordan 4 Snorlax Like Auth', '920000', 'jd7.png', 0, 0, '', 'Giày Nike Air Jordan 4 Snorlax là một phiên bản độc đáo và đáng chú ý của dòng giày Air Jordan 4, được lấy cảm hứng từ nhân vật huyền thoại trong thế giới Pokemon – Snorlax. Đôi giày này mang đến sự kết hợp độc đáo giữa văn hóa sneaker và trò chơi thú vị, thể hiện sự đa dạng và sáng tạo trong thế giới thời trang.\r\n\r\nVà nếu bạn cũng là một người đam mê dòng sneaker trắng thì không nên bỏ qua mẫu giày siêu phẩm này đâu nhé! Dưới đây là một số hình ảnh của đôi Giày Nike Air Jordan 4 Snorlax tại Tyhi Sneaker (hàng chuẩn siêu cấp, bản xịn nhất thị trường)', 26, 0),
(16, 'Giày Nike Air Jordan 4 Retro ‘Pine Green’ Like Auth', '920000', 'jd8.webp', 0, 0, '', 'Giày Nike Air Jordan 4 Retro ‘Pine Green’ là một phiên bản đặc biệt của dòng giày thể thao Air Jordan 4 của hãng Nike. Đây là một mẫu giày thể thao phối màu chủ đạo là màu xanh lá cây (Pine Green) kết hợp với các chi tiết màu trắng trên thân giày.\r\n\r\nVà nếu bạn cũng là một người đam mê dòng sneaker dễ mang, dễ phố đồ thì không nên bỏ qua mẫu giày siêu phẩm này đâu nhé! Dưới đây là một số thông tin hình ảnh về đôi Giày Nike Air Jordan 4 Retro ‘Pine Green’ tại TyHi Sneaker (hàng chuẩn 1:1, bản xịn nhất thị trường).', 26, 0),
(17, ' Giày Nike Air Jordan 1 Low ‘True Blue Cement’ Like Auth', '920000', 'jd9.jpg', 0, 0, '', 'Giày Nike Air Jordan 1 Low ‘True Blue Cement’ với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.\r\n\r\nVà nếu bạn cũng là một người đam mê dòng sneaker dễ mang, dễ phố đồ thì không nên bỏ qua mẫu giày siêu phẩm này đâu nhé! Dưới đây là một số hình ảnh của đôi Giày Nike Air Jordan 1 Low ‘True Blue Cement’ Like Auth tại TyHi Sneaker (hàng chuẩn Like Auth bản xịn nhất thị trường).', 26, 0),
(18, 'Giày Nike Air Jordan 4 Retro ‘Black Cat’ 2020 Like Auth', '1350000', 'jd2.jpg', 0, 0, '', 'Giày Nike Air Jordan 4 Retro ‘Black Cat’ 2020 với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.\r\n\r\nVà nếu bạn cũng là một người đam mê dòng sneaker dễ mang, dễ phố đồ thì không nên bỏ qua mẫu giày siêu phẩm này đâu nhé! Dưới đây là một số hình ảnh của đôi Giày Nike Air Jordan 4 Retro ‘Black Cat’ 2020 Like Auth tại TyHi Sneaker (hàng chuẩn Auth bản xịn nhất thị trường). – Cam kết bản Fake tốt nhất từ nhà máy tốt nhất Trung Quốc.', 26, 0),
(20, 'Giày Air Jordan 1 Low SE ‘Pink Blast’ (WMNS) FB9893-600', '4190000', 'jd12.jpg', 0, 0, '', 'Giày (WMNS) Air Jordan 1 Low SE ‘Pink Blast’ FB9893-600 là một phiên bản mới nhất của dòng giày Air Jordan cổ điển.\r\n\r\nGiày được làm bằng chất liệu da tổng hợp cao cấp và có màu hồng rực rỡ. Phần đế ngoài được làm bằng cao su và có màu trắng. Trên gót giày có logo Jumpman màu đen.\r\n\r\nGiày (WMNS) Air Jordan 1 Low SE ‘Pink Blast’ FB9893-600 là một lựa chọn tuyệt vời cho những người hâm mộ Air Jordan và những người yêu thích màu hồng. Nó là một đôi giày thời trang và phong cách có thể được mặc trong nhiều dịp khác nhau.', 26, 0),
(25, 'UPER STEAL   Giày Adidas Multix Core Black [FX5119]', '1750000', 'ad1.jpeg', 0, 0, '', 'Giày Adidas Multix Core Black là một phiên bản sneaker casual của nhà Adidas. Một thiết kế vô cùng đơn giản với những tính năng vượt trội\r\n\r\nThương hiệu: Adidas\r\n\r\nMã sản phẩm: FX5119\r\n\r\nGiới tính: Unisex\r\n\r\nMàu sắc: Core Black\r\n\r\nBảo hành: Sản phẩm được bảo hành 6 tháng kể từ ngày mua (các vấn đề về hở keo, bung chỉ)', 25, 0),
(27, 'Giày Adidas Forum kem sữa siêu cấp', '590000 ', 'ad2.jpg', 0, 0, '', 'Giày Sneakers là một item không thể thiếu đối với bất kì chàng trai cô gái nào bởi độ “sốt xình xịch” của nó. Hiểu được điều đó, Giày Sneakers Góc Của Nhỏ chuyên cung cấp đa dạng các loại giày cho mọi lứa tuổi, với mức giá phải chăng, cam kết sản phẩm như hình. Mang đến cho khách hàng cảm giác an tâm về sản phẩm khi mua giày tại Nhỏ.', 25, 0),
(28, 'Giày Adidas UltraBoost 22 White Mint Rush Like Auth', '990000', 'ad3.jpg', 0, 0, '', 'Sale toàn bộ cửa hàng upto 70%Cơ hội bốc thăm nhận IPHONE 15 pro với giá 0đGiao hàng nhanh 60 phút trong nội thành Hà Nội và tp HcmNhận hàng và kiểm tra trước khi thanh toán.Hỗ Trợ đổi trả size linh hoạt', 25, 0),
(30, 'GIày Adidas Treziod Moss Green [GY0045]', '1350000', 'ad5.jpeg', 0, 0, '', 'Vẫn tiếp tục chốt Asics cho mùa Black Friday nha khách oiii\r\n\r\nCuối tuần củng là tuần cuối sự kiện đang diễn ra rồi ah . kHÁCH nhanh nhanh tranh thủ ghé sang địa chỉ :', 25, 0),
(31, 'Giày Adidas Equipment Plus Boost Triple Black', '1750000', 'ad5.jpg', 0, 0, '', 'Tinh hoa thiết kế chạy bộ. Giày Adidas Equipment Plus Boost Triple Black/White kết hợp phong cách chạy bộ thập niên 90 với công nghệ tiên tiến nhất thời nay. Đôi giày adidas EQT+ này có lớp đệm Boost đàn hồi, thân giày vừa khít mà thoáng khí cùng các chi tiết 3 Sọc phủ ngoài nâng đỡ.', 25, 0),
(32, 'Giày Adidas Equipment Plus Boost White Like Auth', '850000', 'ad6.jpg', 0, 0, '', 'Giày Adidas Equipment Plus Boost White/Blue/Orange với thiết kế đẹp, tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.\r\n\r\nVà nếu bạn cũng là một người đam mê dòng sneaker dễ mang, dễ phố đồ thì không nên bỏ qua mẫu giày siêu phẩm này đâu nhé! Dưới đây là một số hình ảnh của đôi GIÀY ADIDAS EQT TRẮNG SỌC XANH, tại TyHi Sneaker (hàng chuẩn Siêu cấp, bản xịn nhất thị trường).', 25, 0),
(35, 'GIÀY ADIDAS STAN SMITH LUX #CREAM WHITE', '5279000', 'ad9.jpg', 0, 0, '', 'Giày Adidas Stan Smith Lux #Cream White gồm màu Cream White / Off White / Core Black. Giày thể thao cổ điển với bầu không khí tự nhiên và thiết kế sạch sẽ phù hợp với bạn mọi lúc, mọi nơi. Các chi tiết đường khâu phức tạp làm mượt hình dáng và tăng độ bền. Đế ngoài bằng cao su mang lại kiểu dáng đẹp và lực kéo tuyệt vời trên mặt đất.\r\n\r\nRa đời trên sân quần vợt cách đây 50 năm, Adidas Originals Stan Smith được yêu mến như một biểu tượng phong cách vượt thời gian. Phiên bản mới trở lại này mang đến một thiết kế cao cấp giúp tối đa hóa sức hấp dẫn của những đôi giày thể thao bằng da cổ điển.', 25, 0),
(37, 'Giày Nike Air Force 1 07 LV8 40th Anniversary White Black DQ7658-100', '3050000', 'nk5.jpg', 0, 0, '', 'Sau 2 năm, vì niềm tin của khách hàng dành cho shop và muốn mang đến cho khách hàng 1 sự an tâm khi mua hàng. Shop đã chính thức khai trương của hàng đầu tiên tại  TP. Hà Nội vào tháng 8 năm 2018.\r\n\r\nĐến nay, shop đã cải tiến showroom trải nghiệm khách hàng tốt hơn với mong muốn khách hàng được trải nghiệm sản phẩm thực tế tại shop và là 1 nơi mua sắm đáng tin cậy.\r\n\r\n', 24, 0),
(38, 'Giày Nike Air Force 1 Low Cream Black Swoosh', '598000', 'nk6.jpg', 0, 0, '', 'Cam kết chỉ bán giày chuẩn chất lượng từ Rep 1:1 - Like Auth - Best Quality từ các xưởng Best Trung Quốc\r\nHàng có sẵn tại Shop. Không qua bên thứ 3 ---> Chất lượng giày qua kiểm định kỹ càng.\r\nVideo quay review, phân biệt so sánh từng chất lượng khác nhau.\r\nKhách hàng được kiểm tra, đi thử trước khi nhận hàng.\r\nGiao hàng toàn quốc đồng giá 30k, FREESHIP với đơn hàng trên 2 triệu.', 24, 0),
(39, 'NIKE AIR FORCE 1 LOW WHITE BROWN', '900000', 'nk7.jpg', 0, 0, '', ' Hàng order khoảng 2-3 tuần về, liên hệ shop để được tư vấn cách thức đặt hàng chi tiết.\r\n\r\n Mẫu này có thể có sẵn tại shop, bạn check xem tại danh mục này nhé >> Hàng có sẵn tại shop', 24, 0),
(40, 'Giày Nike Air Force 1 Low 82 Blue 1:1', '900000', 'nk8.jpg', 0, 0, '', 'SẢN PHẨM CHẤT LƯỢNG CAO\r\nKiên quyết nói không với hàng giả, hàng kém chất lượng\r\n\r\nGiao hàng trên khắp 63 tỉnh thành\r\nGIAO HÀNG TẬN NƠI\r\nGiao hàng trên khắp 63 tỉnh thành\r\n\r\nBạn thoải mái kiểm tra hàng trước khi thanh toán\r\nTHANH TOÁN KHI NHẬN HÀNG\r\nBạn thoải mái kiểm tra hàng trước khi thanh toán\r\n\r\nDễ dàng đổi trả sản phẩm trong 7 ngày kể từ khi nhận hàng\r\nĐỔI TRẢ TRONG 7 NGÀY\r\nDễ dàng đổi trả sản phẩm trong 7 ngày kể từ khi nhận hàng', 24, 0),
(41, 'NIKE AIR MAX 90', '3900000 ', 'nk9.jpg', 0, 0, '', 'Cửa Hàng Bán Giày Sneaker Adidas, Nike Chính Hãng tại tpHN 100% Authentic nhập trực tiếp từ US, UK, JAPAN @ KINGSHOES.VN nhiệm vụ mang hàng chính hãng đến tay người tiêu dùng Việt Nam !!!', 24, 0);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_tk` int(11) NOT NULL,
  `ten_tk` varchar(255) NOT NULL,
  `hinh` text NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt` text NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `giohang` varchar(255) NOT NULL,
  `vaitro` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id_tk`, `ten_tk`, `hinh`, `pass`, `email`, `sdt`, `diachi`, `giohang`, `vaitro`) VALUES
(1, 'nguyen pham truong giang', '', 'giang1234', 'nptg131104@gmail.com', '967987004', 'Trinh Van Bo', '', '1'),
(2, 'admin', '1EDEL1365-2.webp', '123', 'locnguyen1358386@gmail.com', '0363574509', 'ssssssssssssssssssssssssssss ksnkdnskfnksnfksnkfnksfksnfkn ksfnksnfknsfknsk fnsfksfn', '', '1'),
(3, 'user', '', '123', 'meomeo@gmail.com', '123456', 'NB', '[[\"27\",\"Giu00e0y Adidas Forum kem su1eefa siu00eau cu1ea5p\",\"ad2.jpg\",\"590000 \",1]]', '1'),
(4, '52', '', '123456F', 'locnguyen13504kk8386@gmail.com', '0363574509', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
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
-- Dumping data for table `tbl_cart`
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
(9, 22, 40, 2, 900000.00, 'Giày Nike Air Force 1 Low 82 Blue 1:1', 'nk8.jpg'),
(10, 23, 25, 1, 1750000.00, 'UPER STEAL   Giày Adidas Multix Core Black [FX5119', 'ad1.jpeg'),
(11, 23, 40, 1, 900000.00, 'Giày Nike Air Force 1 Low 82 Blue 1:1', 'nk8.jpg'),
(12, 23, 41, 1, 3900000.00, 'NIKE AIR MAX 90', 'nk9.jpg'),
(13, 23, 37, 1, 3050000.00, 'Giày Nike Air Force 1 07 LV8 40th Anniversary Whit', 'nk5.jpg'),
(14, 24, 31, 1, 1750000.00, 'Giày Adidas Equipment Plus Boost Triple Black', 'ad5.jpg'),
(15, 26, 32, 2, 850000.00, 'Giày Adidas Equipment Plus Boost White Like Auth', 'ad6.jpg'),
(16, 28, 38, 1, 598000.00, 'Giày Nike Air Force 1 Low Cream Black Swoosh', 'nk6.jpg'),
(17, 29, 28, 1, 990000.00, 'Giày Adidas UltraBoost 22 White Mint Rush Like Aut', 'ad3.jpg'),
(18, 31, 35, 1, 5279000.00, 'GIÀY ADIDAS STAN SMITH LUX #CREAM WHITE', 'ad9.jpg'),
(19, 33, 32, 1, 850000.00, 'Giày Adidas Equipment Plus Boost White Like Auth', 'ad6.jpg'),
(20, 34, 35, 2, 5279000.00, 'GIÀY ADIDAS STAN SMITH LUX #CREAM WHITE', 'ad9.jpg'),
(21, 34, 28, 2, 990000.00, 'Giày Adidas UltraBoost 22 White Mint Rush Like Aut', 'ad3.jpg'),
(22, 34, 17, 1, 920000.00, ' Giày Nike Air Jordan 1 Low ‘True Blue Cement’ Lik', 'jd9.jpg'),
(23, 35, 40, 1, 900000.00, 'Giày Nike Air Force 1 Low 82 Blue 1:1', 'nk8.jpg'),
(24, 35, 41, 2, 3900000.00, 'NIKE AIR MAX 90', 'nk9.jpg'),
(25, 36, 40, 1, 900000.00, 'Giày Nike Air Force 1 Low 82 Blue 1:1', 'nk8.jpg'),
(26, 37, 31, 1, 1750000.00, 'Giày Adidas Equipment Plus Boost Triple Black', 'ad5.jpg'),
(27, 38, 40, 1, 900000.00, 'Giày Nike Air Force 1 Low 82 Blue 1:1', 'nk8.jpg'),
(28, 38, 38, 1, 598000.00, 'Giày Nike Air Force 1 Low Cream Black Swoosh', 'nk6.jpg'),
(29, 40, 39, 1, 900000.00, 'NIKE AIR FORCE 1 LOW WHITE BROWN', 'nk7.jpg'),
(30, 41, 40, 1, 900000.00, 'Giày Nike Air Force 1 Low 82 Blue 1:1', 'nk8.jpg'),
(31, 42, 20, 1, 4190000.00, 'Giày Air Jordan 1 Low SE ‘Pink Blast’ (WMNS) FB989', 'jd12.jpg'),
(32, 43, 40, 12, 900000.00, 'Giày Nike Air Force 1 Low 82 Blue 1:1', 'nk8.jpg'),
(33, 44, 17, 3, 920000.00, ' Giày Nike Air Jordan 1 Low ‘True Blue Cement’ Lik', 'jd9.jpg'),
(34, 45, 39, 1, 900000.00, 'NIKE AIR FORCE 1 LOW WHITE BROWN', 'nk7.jpg'),
(35, 47, 13, 4, 1200000.00, 'Giày Nike Air Jordan 1 Retro High OG Dark Mocha Li', 'jd5.jpg'),
(36, 47, 11, 7, 1350000.00, ' Giày Nike Air Jordan 1 Retro High OG ‘Palomino’ L', 'jd4.jpg'),
(37, 47, 27, 2, 590000.00, 'Giày Adidas Forum kem sữa siêu cấp', 'ad2.jpg'),
(38, 48, 27, 3, 590000.00, 'Giày Adidas Forum kem sữa siêu cấp', 'ad2.jpg'),
(39, 49, 13, 2, 1200000.00, 'Giày Nike Air Jordan 1 Retro High OG Dark Mocha Li', 'jd5.jpg'),
(40, 52, 11, 4, 1350000.00, ' Giày Nike Air Jordan 1 Retro High OG ‘Palomino’ L', 'jd4.jpg'),
(41, 53, 11, 1, 1350000.00, ' Giày Nike Air Jordan 1 Retro High OG ‘Palomino’ L', 'jd4.jpg'),
(42, 53, 20, 2, 4190000.00, 'Giày Air Jordan 1 Low SE ‘Pink Blast’ (WMNS) FB989', 'jd12.jpg'),
(43, 54, 11, 1, 1350000.00, ' Giày Nike Air Jordan 1 Retro High OG ‘Palomino’ L', 'jd4.jpg'),
(44, 54, 18, 1, 1350000.00, 'Giày Nike Air Jordan 4 Retro ‘Black Cat’ 2020 Like', 'jd2.jpg'),
(45, 55, 11, 1, 1350000.00, ' Giày Nike Air Jordan 1 Retro High OG ‘Palomino’ L', 'jd4.jpg'),
(46, 55, 13, 1, 1200000.00, 'Giày Nike Air Jordan 1 Retro High OG Dark Mocha Li', 'jd5.jpg'),
(47, 55, 18, 1, 1350000.00, 'Giày Nike Air Jordan 4 Retro ‘Black Cat’ 2020 Like', 'jd2.jpg'),
(48, 56, 11, 1, 1350000.00, ' Giày Nike Air Jordan 1 Retro High OG ‘Palomino’ L', 'jd4.jpg'),
(49, 57, 11, 1, 1350000.00, ' Giày Nike Air Jordan 1 Retro High OG ‘Palomino’ L', 'jd4.jpg'),
(50, 59, 10, 1, 1500000.00, ' Giày Nike Air Jordan 1 x Union Retro High ‘Black ', 'jd2.jpg'),
(51, 61, 10, 1, 1500000.00, ' Giày Nike Air Jordan 1 x Union Retro High ‘Black ', 'jd2.jpg'),
(52, 61, 11, 1, 1350000.00, ' Giày Nike Air Jordan 1 Retro High OG ‘Palomino’ L', 'jd4.jpg'),
(53, 62, 10, 5, 1500000.00, ' Giày Nike Air Jordan 1 x Union Retro High ‘Black ', 'jd2.jpg'),
(54, 62, 11, 2, 1350000.00, ' Giày Nike Air Jordan 1 Retro High OG ‘Palomino’ L', 'jd4.jpg'),
(55, 63, 13, 1, 1200000.00, 'Giày Nike Air Jordan 1 Retro High OG Dark Mocha Li', 'jd5.jpg'),
(56, 63, 20, 8, 4190000.00, 'Giày Air Jordan 1 Low SE ‘Pink Blast’ (WMNS) FB989', 'jd12.jpg'),
(57, 64, 18, 1, 1350000.00, 'Giày Nike Air Jordan 4 Retro ‘Black Cat’ 2020 Like', 'jd2.jpg'),
(58, 65, 13, 2, 1200000.00, 'Giày Nike Air Jordan 1 Retro High OG Dark Mocha Li', 'jd5.jpg'),
(59, 65, 15, 7, 920000.00, ' Giày Nike Air Jordan 4 Snorlax Like Auth', 'jd7.png'),
(60, 66, 13, 1, 1200000.00, 'Giày Nike Air Jordan 1 Retro High OG Dark Mocha Li', 'jd5.jpg'),
(61, 67, 11, 1, 1350000.00, ' Giày Nike Air Jordan 1 Retro High OG ‘Palomino’ L', 'jd4.jpg'),
(62, 69, 13, 3, 1200000.00, 'Giày Nike Air Jordan 1 Retro High OG Dark Mocha Li', 'jd5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `madh` varchar(20) NOT NULL,
  `ngaydathang` text NOT NULL,
  `tongdonhang` double(10,2) NOT NULL,
  `iduser` int(11) NOT NULL,
  `hoten` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tell` varchar(20) NOT NULL,
  `pttt` varchar(100) NOT NULL,
  `trangthai` varchar(50) NOT NULL DEFAULT 'doixuly'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `madh`, `ngaydathang`, `tongdonhang`, `iduser`, `hoten`, `address`, `email`, `tell`, `pttt`, `trangthai`) VALUES
(48, 'shopbh535771', '', 590000.00, 0, 'Nguyễn Chiến', 'Hà Nội', 'locnguyen1358386@gmail.com', '0363574509', '1', 'hoanthanhdonhang'),
(49, 'shopbh164845', '', 1200000.00, 0, 'Nguyễn Chiến', 'Hà Nội', 'locnguyen1358386@gmail.com', '0363574509', '1', 'huydonhang'),
(50, 'shopbh437454', '', 1200000.00, 0, 'Nguyễn Chiến', 'Hà Nội', 'locnguyen1358386@gmail.com', '0363574509', '1', 'huydonhang'),
(51, 'shopbh764239', '', 1200000.00, 0, 'Nguyễn Chiến', 'Hà Nội', 'locnguyen1358386@gmail.com', '0363574509', '1', 'doixuly'),
(52, 'shopbh476428', '', 1350000.00, 0, 'Nguyễn Chiến', 'Hà Nội', 'locnguyen1358386@gmail.com', '0363574509', '1', 'doixuly'),
(53, 'shopbh172196', '', 5540000.00, 0, 'Nguyễn Chiến', 'Hà Nội', 'locnguyen1358386@gmail.com', '0363574509', '1', 'donhangdangvanchuyen'),
(54, 'shopbh220216', '', 2700000.00, 0, 'Nguyễn Chiến', 'Hà Nội', 'locnguyen1358386@gmail.com', '0363574509', '1', 'doixuly'),
(55, 'shopbh359666', '', 3900000.00, 0, 'Nguyễn Chiến', 'Hà Nội', 'locnguyen1358386@gmail.com', '0363574509', '1', 'doixuly'),
(56, 'shopbh449243', '', 1350000.00, 0, 'Nguyễn Chiến', 'Hà Nội', 'locnguyen1358386@gmail.com', '0363574509', '1', 'doixuly'),
(57, 'shopbh942033', '06:12:45am 10:12:2023', 1350000.00, 0, 'Nguyễn Chiến', 'Hà Nội', 'locnguyen1358386@gmail.com', '0363574509', '1', 'doixuly'),
(58, 'shopbh405934', '2023-12-10 06:14:15', 1350000.00, 0, 'Nguyễn Chiến', 'Hà Nội', 'locnguyen1358386@gmail.com', '0363574509', '1', 'doixuly'),
(59, 'shopbh179052', '2023-12-10 06:14:23', 1500000.00, 0, 'Nguyễn Chiến', 'Hà Nội', 'locnguyen1358386@gmail.com', '0363574509', '1', 'doixuly'),
(60, 'shopbh654430', '2023-12-10 12:18:43', 1500000.00, 0, 'Nguyễn Chiến', 'Hà Nội', 'locnguyen1358386@gmail.com', '0363574509', '1', 'doixuly'),
(61, 'shopbh154037', '2023-12-10 12:18:59', 2850000.00, 0, 'Nguyễn Chiến', 'Hà Nội', 'locnguyen1358386@gmail.com', '0363574509', '1', 'doixuly'),
(62, 'shopbh283975', '2023-12-10 12:42:43', 0.00, 0, 'Nguyễn Chiến', 'Hà Nội', 'locnguyen1358386@gmail.com', '0363574509', '1', 'doixuly'),
(63, 'shopbh222438', '2023-12-10 21:48:20', 34720000.00, 0, 'user', 'NB', 'meomeo@gmail.com', '123456', '0', 'doixuly'),
(64, 'shopbh692643', '2023-12-10 21:53:59', 1350000.00, 0, 'nptg', 'nb', 'nptg131104@gmail.com', '0967987004', '0', 'doixuly'),
(65, 'shopbh343667', '2023-12-10 22:09:12', 8840000.00, 0, 'nptg', '', 'meomwo@gmail.com', '', '0', 'doixuly'),
(66, 'shopbh262213', '2023-12-10 22:10:49', 1200000.00, 0, 'meommeo', 'nb', 'nptg131104@gmail.com', '0967987004', '0', 'doixuly'),
(67, 'shopbh729362', '2023-12-10 23:28:32', 1350000.00, 0, 'jfhyrthgrwe', 'hhhhhh', 'gg@gmail.com', '0396189342', '0', 'doixuly'),
(68, 'shopbh188526', '2023-12-10 23:29:14', 0.00, 0, 'jfhyrthgrwe', 'hhhhhh', 'gg@gmail.com', '0396189342', '0', 'doixuly'),
(69, 'shopbh662789', '2023-12-11 00:31:13', 3600000.00, 0, 'nguyen pham truong giang', '', 'nptg131104@gmail.com', '967987004', 'VNPAY', 'doixuly'),
(70, 'shopbh508183', '2023-12-11 00:32:33', 3600000.00, 0, 'nguyen pham truong giang', '', 'nptg131104@gmail.com', '967987004', 'VNPAY', 'doixuly');

-- --------------------------------------------------------

--
-- Table structure for table `trangthai`
--

CREATE TABLE `trangthai` (
  `id_tt` int(11) NOT NULL,
  `ten_tt` varchar(255) NOT NULL,
  `hd_tt` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id_vc` int(11) NOT NULL,
  `mavc` varchar(255) NOT NULL,
  `loaivc` varchar(255) NOT NULL,
  `ngaybatdau` date NOT NULL,
  `ngayketthuc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bienthesize`
--
ALTER TABLE `bienthesize`
  ADD PRIMARY KEY (`id_bienthe`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Indexes for table `bienthesize2`
--
ALTER TABLE `bienthesize2`
  ADD PRIMARY KEY (`id_bienthe`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_bl`),
  ADD KEY `kp_bl` (`id_sp`),
  ADD KEY `kp_bl2` (`id_tk`);

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_cthd`),
  ADD KEY `primarykey` (`id_hd`),
  ADD KEY `khoaphu` (`id_sp`);

--
-- Indexes for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD PRIMARY KEY (`id_ctsp`),
  ADD KEY `KF_key` (`id_sp`);

--
-- Indexes for table `ctgiohang`
--
ALTER TABLE `ctgiohang`
  ADD PRIMARY KEY (`id_ctgh`),
  ADD KEY `kp_gh` (`id_hd`),
  ADD KEY `kp_gh2` (`id_sp`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id_gh`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hd`),
  ADD KEY `kp1` (`id_tk`),
  ADD KEY `kp2` (`id_vc`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `fk_air_fl` (`id_dm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_tk`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`id_tt`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id_vc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bienthesize2`
--
ALTER TABLE `bienthesize2`
  MODIFY `id_bienthe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id_cthd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  MODIFY `id_ctsp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ctgiohang`
--
ALTER TABLE `ctgiohang`
  MODIFY `id_ctgh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_gh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_tk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `id_tt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id_vc` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bienthesize`
--
ALTER TABLE `bienthesize`
  ADD CONSTRAINT `bienthesize_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`);

--
-- Constraints for table `bienthesize2`
--
ALTER TABLE `bienthesize2`
  ADD CONSTRAINT `bienthesize2_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`);

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `kp_bl` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`),
  ADD CONSTRAINT `kp_bl2` FOREIGN KEY (`id_tk`) REFERENCES `taikhoan` (`id_tk`);

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `khoaphu` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`),
  ADD CONSTRAINT `primarykey` FOREIGN KEY (`id_hd`) REFERENCES `hoadon` (`id_hd`);

--
-- Constraints for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD CONSTRAINT `KF_key` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`);

--
-- Constraints for table `ctgiohang`
--
ALTER TABLE `ctgiohang`
  ADD CONSTRAINT `kp_gh` FOREIGN KEY (`id_hd`) REFERENCES `chitiethoadon` (`id_cthd`),
  ADD CONSTRAINT `kp_gh2` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `kp1` FOREIGN KEY (`id_tk`) REFERENCES `taikhoan` (`id_tk`),
  ADD CONSTRAINT `kp2` FOREIGN KEY (`id_vc`) REFERENCES `voucher` (`id_vc`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_air_fl` FOREIGN KEY (`id_dm`) REFERENCES `danhmuc` (`id_dm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
