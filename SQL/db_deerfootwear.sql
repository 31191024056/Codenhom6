-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 25, 2022 lúc 03:13 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_deerfootwear`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`) VALUES
(1, 'Giày Nam'),
(2, 'Giày Nữ'),
(3, 'Phụ Kiện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `id_donhang` int(11) NOT NULL,
  `trangthai` varchar(50) DEFAULT NULL,
  `tenkhachhang` varchar(50) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `diachi` varchar(200) NOT NULL,
  `ghichu` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`id_donhang`, `trangthai`, `tenkhachhang`, `sdt`, `email`, `diachi`, `ghichu`) VALUES
(9919, 'chưa giao hàng', 'Nhom6', '0999999999', 'nhom6@gmail.com', '279 Nguyễn Tri Phương, quận 10, TP.HCM', 'Cảm ơn thầy và các bạn đã lắng nghe. Xin gửi lời chúc sức khỏe và thành công nhé!');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donsanpham`
--

CREATE TABLE `tbl_donsanpham` (
  `id_donsanpham` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `size` int(2) NOT NULL,
  `soluong` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_donsanpham`
--

INSERT INTO `tbl_donsanpham` (`id_donsanpham`, `id_donhang`, `id_sanpham`, `size`, `soluong`) VALUES
(16, 9919, 7, 39, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(350) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `price_discount` int(11) DEFAULT NULL,
  `img_link` varchar(500) NOT NULL,
  `mota` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `id_danhmuc`, `price`, `price_discount`, `img_link`, `mota`) VALUES
(1, 'VINTAS MISTER NE - HIGH TOP - CHOCOLATE BROWN', 1, 650000, NULL, 'https://ananas.vn/wp-content/uploads/pro_AV00101_1.jpg', 'Sử dụng vải canvas NE phối hợp cùng da lộn, Vintas Mister phiên bản mới gia tăng thêm độ thoải mái khi lên chân, đồng thời vẫn nguyên vẹn diện mạo cổ điển đầy cuốn hút.'),
(2, 'TRACK 6 CLASS E - LOW TOP - CRAFTSMAN BLUE', 1, 495000, NULL, 'https://ananas.vn/wp-content/uploads/pro_A6T009_1.jpg', 'Track 6 Class E (Essential, Enthusiasm) là bộ sản phẩm mang trên mình những yếu tố cơ bản trong cuộc sống thường ngày. '),
(3, 'URBAS RULER - LOW TOP - SILVER PINK', 2, 590000, NULL, 'https://ananas.vn/wp-content/uploads/Pro_AV00126_1.jpeg', 'Vẻ ngoài với màu sắc tươi tắn, hiện đại. Urbas Ruler mang trên mình một chức năng khiến không ít người bất ngờ'),
(4, 'VINTAS FLANNEL - LOW TOP - CEMENT', 2, 690000, NULL, 'https://ananas.vn/wp-content/uploads/pro_AV00116_1.jpg', 'Khoác lên thân giày một lớp áo mới theo đúng nghĩa đen với thiết kế đánh dấu sự xuất hiện lần đầu tiên của chất vải Flannel trên các dáng sản phẩm quen thuộc từ Ananas.'),
(5, 'VINTAS TEMPERATE - HIGH TOP - DUSTY OLIVE', 1, 770000, NULL, 'https://ananas.vn/wp-content/uploads/pro_A61111_1.jpg', 'Má ngoài Suede (da lộn), má trong phủ vải canvas kèm theo các chi tiết phối trộn chất da Nappa nâu trầm điềm đạm là ý đồ sắp xếp làm nên Vintas Temperate Pack. '),
(6, 'URBAS UNSETTLING - HIGH TOP - STARLIGHT/LAVENDER', 2, 420000, NULL, 'https://ananas.vn/wp-content/uploads/pro_A61106_1.jpg', 'Sở hữu công thức pha màu \"khó chịu\". Urbas Unsettling tạo nên điểm nhấn mạnh mẽ, gây kích thích thị giác thông qua sự đối lập trong từng gam màu. '),
(7, 'ANANAS X DORAEMON 50 YEARS PATTAS - WHITE/SUNRISE 50TH', 1, 950000, NULL, 'https://ananas.vn/wp-content/uploads/pro_A61112_1.jpg', 'Ananas x Doraemon 50 Years Pattas thể hiện chân thật nét vẽ nguyên bản của bộ truyện từ cái nhìn đầu tiên. Sử dụng chất liệu Action Leather (da) phủ khắp thân giày, pha trộn cùng các chi tiết đắt giá được sắp đặt hợp lí. '),
(8, 'CREAS FLIP-FLAP - HIGH TOP - MAGENTA-SNORKEL BLUE PINK', 2, 690000, NULL, 'https://ananas.vn/wp-content/uploads/pro_creas_A61084_1.jpg', 'Ananas Creas Flip-Flap được sản xuất với số lượng giới hạn. Ngẫu hứng, đảo nghịch và truyền tải \"bí quyết\" của sự hạnh phúc. Xem kĩ hình để rõ hơn các chi tiết thiết kế đặc biệt trên sản phẩm'),
(9, 'BASAS MONO - HIGH TOP - ALL DARK GREY', 1, 490000, NULL, 'https://ananas.vn/wp-content/uploads/pro_basas_A61079_1.jpg', 'Dáng giày high top cá tính, kết hợp upper và phần đế \"ton-sur-ton\" đã giúp \"Basas Mono\" Pack trở nên thu hút. Đôi giày này hứa hẹn sẽ là một điểm nhấn thú vị cho mọi set đồ của bạn.'),
(10, 'URBAS CORLURAY - LOW TOP - FADED PINK', 2, 590000, NULL, 'https://ananas.vn/wp-content/uploads/pro_A61090_1_1jpg.jpg', 'Lấy cảm hứng từ kì nghỉ Xuân 2020 \"dài hạn đặc biệt\" vượt qua cả mùa Hạ để chạm đến mùa Thu, “Corluray Pack” ra đời với nét cách điệu mới mẻ, hiếm thấy ở dòng Urbas. Chất liệu Corduroy với tên gọi khác Elephant Cord (nhung gân sợi to) lần đầu tiên được sử dụng trên thân giày, gây ấn tượng cùng những phối màu như những tia nắng cuối Xuân ấm áp.'),
(11, 'URBAS RETROSPECTIVE - LOW TOP - YELLOW SUBMARINE', 2, 650000, NULL, 'https://ananas.vn/wp-content/uploads/Pro_AV00129_1.jpeg', 'Với việc đưa những chiếc đế cao su \"xuyên thấu\" rực rỡ trở lại, kết hợp cùng phần upper bằng vải canvas với những màu sắc tươi rói, Urbas Retrospective đã khắc họa nên bức tranh đầy sinh động về một thời kỳ phát triển rực rỡ của thời trang và nghệ thuật của những thập kỉ trước. Đây chắc chắn sẽ là lựa chọn không thể thiếu trong tủ đồ đối với những bạn trẻ đang tìm kiếm nguồn cảm hứng cổ điển trong phong cách thời trang hiện đại và độc đáo của bản thân.'),
(12, 'URBAS RETROSPECTIVE - MID TOP - YELLOW SUBMARINE', 2, 720000, NULL, 'https://ananas.vn/wp-content/uploads/Pro_AV00131_1.jpeg', 'Với việc đưa những chiếc đế cao su \"xuyên thấu\" rực rỡ trở lại, kết hợp cùng phần upper bằng vải canvas với những màu sắc tươi rói, Urbas Retrospective đã khắc họa nên bức tranh đầy sinh động về một thời kỳ phát triển rực rỡ của thời trang và nghệ thuật của những thập kỉ trước. Đây chắc chắn sẽ là lựa chọn không thể thiếu trong tủ đồ đối với những bạn trẻ đang tìm kiếm nguồn cảm hứng cổ điển trong phong cách thời trang hiện đại và độc đáo của bản thân.'),
(13, 'ANANAS X DORAEMON 50 YEARS PATTAS - WHITE/CORYDALIS 50TH', 2, 890000, NULL, 'https://ananas.vn/wp-content/uploads/pro_A61113_1.jpg', 'Ananas x Doraemon 50 Years Pattas thể hiện chân thật nét vẽ nguyên bản của bộ truyện từ cái nhìn đầu tiên. Sử dụng chất liệu Action Leather (da) phủ khắp thân giày, pha trộn cùng các chi tiết đắt giá được sắp đặt hợp lí.'),
(14, 'BASAS SIMPLE LIFE NE - MULE - WHITE', 2, 1150000, NULL, 'https://ananas.vn/wp-content/uploads/pro_AV00005_1.jpg', 'Phù hợp hoàn hảo với nhịp sống mới của giới trẻ, Basas Simple Life NE - Mule tinh giản vấn đề thắt dây với chi tiết hở gót độc đáo, mang đến khả năng lên chân nhanh gọn nhưng vẫn đảm bảo trọn vẹn nét thanh lịch trong diện mạo, qua đó nhấn mạnh chất “Simple Life” đặc trưng của thiết kế. '),
(15, 'TRACK 6 OG - LOW TOP - 70S WHITE', 1, 990000, NULL, 'https://ananas.vn/wp-content/uploads/pro_track6_A6T001_1.jpg', 'Với cảm hứng từ Retro Sneakers và âm nhạc giai đoạn 1970s, Ananas Track 6 ra đời với danh hiệu là mẫu giày Cold Cement đầu tiên của Ananas - một thương hiệu giày Vulcanized. Chất liệu Storm Leather đáng giá \"càn quét\" toàn bộ bề mặt upper cùng những chi tiết thiết kế đặc trưng và mang nhiều ý nghĩa.'),
(16, 'BASAS MONO - HIGH TOP - ALL WHITE', 1, 490000, NULL, 'https://ananas.vn/wp-content/uploads/pro_basas_A61078_1.jpg', 'Dáng giày high top cá tính, kết hợp upper và phần đế \"ton-sur-ton\" đã giúp \"Basas Mono\" Pack trở nên thu hút. Đôi giày này hứa hẹn sẽ là một điểm nhấn thú vị cho mọi set đồ của bạn.'),
(17, 'TRACK 6 SUEDE MOONPHASE - LOW TOP - GREY PEPPLE', 1, 1200000, NULL, 'https://ananas.vn/wp-content/uploads/pro_A6T005_1.jpg', 'Dựa trên cảm hứng từ việc tái hiện những sắc xám (Grey) khác nhau hoà cùng những trạng thái ánh sáng trên bề mặt mặt trăng, Ananas Track 6 Suede Moonphase Pack sử dụng chất liệu da lộn (suede) đặc trưng, được phủ toàn bộ thân giày với tông màu sáng tối sắp xếp hài hoà hợp lý. '),
(18, 'BASAS MONO - LOW TOP - DARK GREY', 1, 450000, NULL, 'https://ananas.vn/wp-content/uploads/stu_basas_A61007_1.jpg', 'Vẻ ngoài cổ điển. Chất màu đơn giản cùng phần đế tiệp màu, \"ton-sur-ton\" với upper. Basas \"Mono\" Pack hứa hẹn sẽ là một điểm nhấn đầy thú vị cho tủ giày của bạn.'),
(19, 'TRUCKER HAT - BE POSITIVE - BLACK/WHITE', 3, 250000, NULL, 'https://ananas.vn/wp-content/uploads/pro_ATH005_1.jpg', 'Trucker Hat - Be Positive màu Black/White đơn giản cùng artwork “Be Positive” mang nét tích cực của nhịp sống hiện đại. Với chất vải thun lạnh từ sợi Polyester có đệm mút và phần hậu dùng lưới mesh thông thoáng đặc trưng của Trucker Hat, đây chắc chắn là yếu tố ghi điểm cho những ngày quay cuồng, đầu bù tóc rối mà vẫn tự tin bứt phá chất tôi riêng biệt.'),
(20, 'BLANK SHOELACES - WHITE', 3, 35000, NULL, 'https://ananas.vn/wp-content/uploads/pro_ALB002_1.jpg', 'Dây giày trơn màu White, dạng ống rỗng, thích hợp để thay mới hoặc mix màu cho đôi Low Top, High Top của bạn thêm khác biệt.'),
(21, 'INVISIBLE SOCKS PACK - DISCOVERYOU - WHITE', 3, 95000, NULL, 'https://ananas.vn/wp-content/uploads/pro_ANS023_1.jpg', 'Vớ Discover You ẩn hình, khó thấy. Tạo cảm giác thoải mái, êm ái và chắc chắn tàng hình khi mang trong giày.'),
(22, 'BUCKET HAT - GO SKATE - BEIGE', 3, 285000, NULL, 'https://ananas.vn/wp-content/uploads/pro_ABH002_1-2.jpg', 'Chiếc Bucket Hat với phối màu Beige trung tính, thiết kế đơn giản nhằm thể hiện artwork màu sắc, nhấn mạnh thông điệp \"Go Skate\" mang nhiều năng lượng tích cực, thể hiện cái tôi riêng biệt.'),
(23, 'BASEBALL CAP - GO BANANAS - WASHED BLACK/TAN', 3, 325000, NULL, 'https://ananas.vn/wp-content/uploads/pro_ABC010_1.jpg', 'Baseball Cap - Go Bananas sở hữu vẻ ngoài bụi bặm bằng hiệu ứng Khaki washed. Chiếc mũ mang thông điệp \"Go Bananas\" thể hiện tinh thần nổi loạn tích cực theo cách riêng biệt'),
(24, 'ANKLET SOCKS - ANANAS TYPO - MIMOSA', 3, 85000, NULL, 'https://ananas.vn/wp-content/uploads/pro_sock_AAS003_1.jpg', 'Vớ cổ trung có chất liệu và công năng như vớ vô hình nhưng lộ diện vừa đủ, kín kín hở hở, nhấn nhá sinh động nên chỉ phù hợp để mang từ sáng thứ \"high\" đến tối chủ nhật.'),
(25, 'BASEBALL CAP - ANANAS SYMBOL - MUSTARD', 3, 380000, NULL, 'https://ananas.vn/wp-content/uploads/pro_ABC102_1.jpg', 'Dễ dàng mix & match với nhiều loại trang phục và phong cách thời trang khác nhau, Baseball cap với thiết kế cổ điển trong phối màu cuốn hút cùng hoạ tiết thêu 3D tỉ mỉ'),
(26, 'SNAPBACK TRUCKER HAT - PINEAPPLE OR ANANAS - ALL BLACK', 3, 490000, NULL, 'https://ananas.vn/wp-content/uploads/pro_snapback_ATH002_1.jpg', 'Phối màu All Black bí ẩn giúp nổi bật dòng chữ \"Pineapple or Ananas\" và hình thêu cách điệu quả Dứa màu sắc. Với ưu điểm kết hợp của Snapback và Trucker Hat'),
(27, 'BASEBALL CAP - LIVE IN THE MOMENT - BROWN', 3, 275000, NULL, 'https://ananas.vn/wp-content/uploads/pro_ABC005_1.jpg', 'Dễ dàng mix & match với nhiều loại trang phục và phong cách thời trang khác nhau, mũ bóng chày có thiết kế cổ điển cùng hoạ tiết thêu đơn giản chính là món phụ kiện không thể thiếu trong tủ đồ nhà bạn.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanphamimg`
--

CREATE TABLE `tbl_sanphamimg` (
  `id_img` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `img_link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanphamimg`
--

INSERT INTO `tbl_sanphamimg` (`id_img`, `id_sanpham`, `img_link`) VALUES
(1, 1, 'https://ananas.vn/wp-content/uploads/pro_AV00101_1.jpg'),
(2, 1, 'https://ananas.vn/wp-content/uploads/pro_AV00101_2.jpg'),
(3, 1, 'https://ananas.vn/wp-content/uploads/pro_AV00101_3.jpg'),
(4, 1, 'https://ananas.vn/wp-content/uploads/pro_AV00101_4.jpg'),
(5, 2, 'https://ananas.vn/wp-content/uploads/pro_A6T009_2.jpg'),
(6, 2, 'https://ananas.vn/wp-content/uploads/pro_A6T009_3.jpg'),
(7, 2, 'https://ananas.vn/wp-content/uploads/pro_A6T009_4.jpg'),
(8, 2, 'https://ananas.vn/wp-content/uploads/pro_A6T009_5.jpg'),
(9, 3, 'https://ananas.vn/wp-content/uploads/Pro_AV00126_2.jpeg'),
(10, 3, 'https://ananas.vn/wp-content/uploads/Pro_AV00126_3.jpeg'),
(11, 3, 'https://ananas.vn/wp-content/uploads/Pro_AV00126_4.jpeg'),
(12, 3, 'https://ananas.vn/wp-content/uploads/Pro_AV00126_5.jpeg'),
(13, 4, 'https://ananas.vn/wp-content/uploads/pro_AV00116_2.jpg'),
(14, 4, 'https://ananas.vn/wp-content/uploads/pro_AV00116_3.jpg'),
(15, 4, 'https://ananas.vn/wp-content/uploads/pro_AV00116_4.jpg'),
(16, 4, 'https://ananas.vn/wp-content/uploads/pro_AV00116_5.jpg'),
(17, 5, 'https://ananas.vn/wp-content/uploads/pro_A61111_2.jpg'),
(18, 5, 'https://ananas.vn/wp-content/uploads/pro_A61111_3.jpg'),
(19, 5, 'https://ananas.vn/wp-content/uploads/pro_A61111_4.jpg'),
(20, 5, 'https://ananas.vn/wp-content/uploads/pro_A61111_5.jpg'),
(21, 6, 'https://ananas.vn/wp-content/uploads/pro_A61106_2.jpg'),
(22, 6, 'https://ananas.vn/wp-content/uploads/pro_A61106_3.jpg'),
(23, 6, 'https://ananas.vn/wp-content/uploads/pro_A61106_4.jpg'),
(24, 6, 'https://ananas.vn/wp-content/uploads/pro_A61106_5.jpg'),
(29, 7, 'https://ananas.vn/wp-content/uploads/pro_A61112_2.jpg'),
(30, 7, 'https://ananas.vn/wp-content/uploads/pro_A61112_3.jpg'),
(31, 7, 'https://ananas.vn/wp-content/uploads/pro_A61112_4.jpg'),
(32, 7, 'https://ananas.vn/wp-content/uploads/pro_A61112_5.jpg'),
(33, 8, 'https://ananas.vn/wp-content/uploads/pro_creas_A61084_2.jpg'),
(34, 8, 'https://ananas.vn/wp-content/uploads/pro_creas_A61084_3.jpg'),
(35, 8, 'https://ananas.vn/wp-content/uploads/pro_creas_A61084_4.jpg'),
(36, 8, 'https://ananas.vn/wp-content/uploads/pro_creas_A61084_5.jpg'),
(37, 9, 'https://ananas.vn/wp-content/uploads/pro_basas_A61079_2.jpg'),
(38, 9, 'https://ananas.vn/wp-content/uploads/pro_basas_A61079_3.jpg'),
(39, 9, 'https://ananas.vn/wp-content/uploads/pro_basas_A61079_4.jpg'),
(40, 9, 'https://ananas.vn/wp-content/uploads/pro_basas_A61079_5.jpg'),
(41, 10, 'https://ananas.vn/wp-content/uploads/pro_A61090_7.jpg'),
(42, 10, 'https://ananas.vn/wp-content/uploads/pro_A61090_3.jpg'),
(43, 10, 'https://ananas.vn/wp-content/uploads/pro_A61090_4.jpg'),
(44, 10, 'https://ananas.vn/wp-content/uploads/pro_A61090_6.jpg'),
(45, 11, 'https://ananas.vn/wp-content/uploads/Pro_AV00129_2.jpeg'),
(46, 11, 'https://ananas.vn/wp-content/uploads/Pro_AV00129_3.jpeg'),
(47, 11, 'https://ananas.vn/wp-content/uploads/Pro_AV00129_4.jpeg'),
(48, 11, 'https://ananas.vn/wp-content/uploads/Pro_AV00129_5.jpeg'),
(49, 12, 'https://ananas.vn/wp-content/uploads/Pro_AV00131_2.jpeg'),
(50, 12, 'https://ananas.vn/wp-content/uploads/Pro_AV00131_3.jpeg'),
(51, 12, 'https://ananas.vn/wp-content/uploads/Pro_AV00131_4.jpeg'),
(52, 12, 'https://ananas.vn/wp-content/uploads/Pro_AV00131_5.jpeg'),
(53, 13, 'https://ananas.vn/wp-content/uploads/pro_A61113_5.jpg'),
(54, 13, 'https://ananas.vn/wp-content/uploads/pro_A61113_2.jpg'),
(55, 13, 'https://ananas.vn/wp-content/uploads/pro_A61113_3.jpg'),
(56, 13, 'https://ananas.vn/wp-content/uploads/pro_A61113_4.jpg'),
(57, 14, 'https://ananas.vn/wp-content/uploads/pro_AV00005_2.jpg'),
(58, 14, 'https://ananas.vn/wp-content/uploads/pro_AV00005_3.jpg'),
(59, 14, 'https://ananas.vn/wp-content/uploads/pro_AV00005_4.jpg'),
(60, 14, 'https://ananas.vn/wp-content/uploads/pro_AV00005_5.jpg'),
(61, 15, 'https://ananas.vn/wp-content/uploads/pro_track6_A6T001_2.jpg'),
(62, 15, 'https://ananas.vn/wp-content/uploads/pro_track6_A6T001_3.jpg'),
(63, 15, 'https://ananas.vn/wp-content/uploads/pro_track6_A6T001_4.jpg'),
(64, 15, 'https://ananas.vn/wp-content/uploads/pro_track6_A6T001_5.jpg'),
(65, 16, 'https://ananas.vn/wp-content/uploads/pro_basas_A61078_2.jpg'),
(66, 16, 'https://ananas.vn/wp-content/uploads/pro_basas_A61078_3.jpg'),
(67, 16, 'https://ananas.vn/wp-content/uploads/pro_basas_A61078_4.jpg'),
(68, 16, 'https://ananas.vn/wp-content/uploads/pro_basas_A61078_5.jpg'),
(69, 17, 'https://ananas.vn/wp-content/uploads/pro_A6T005_2.jpg'),
(70, 17, 'https://ananas.vn/wp-content/uploads/pro_A6T005_3.jpg'),
(71, 17, 'https://ananas.vn/wp-content/uploads/pro_A6T005_4.jpg'),
(72, 17, 'https://ananas.vn/wp-content/uploads/pro_A6T005_5.jpg'),
(73, 18, 'https://ananas.vn/wp-content/uploads/stu_basas_A61007_2.jpg'),
(74, 18, 'https://ananas.vn/wp-content/uploads/stu_basas_A61007_3.jpg'),
(75, 18, 'https://ananas.vn/wp-content/uploads/stu_basas_A61007_4.jpg'),
(76, 18, 'https://ananas.vn/wp-content/uploads/stu_basas_A61007_5.jpg'),
(77, 19, 'https://ananas.vn/wp-content/uploads/pro_ATH005_2.jpg'),
(78, 19, 'https://ananas.vn/wp-content/uploads/pro_ATH005_3.jpg'),
(81, 20, 'https://ananas.vn/wp-content/uploads/pro_ALB002_1.jpg'),
(82, 20, 'https://ananas.vn/wp-content/uploads/pro_ALB002_2.jpg'),
(83, 20, 'https://ananas.vn/wp-content/uploads/pro_ALB002_3.jpg'),
(84, 21, 'https://ananas.vn/wp-content/uploads/pro_ANS023_1.jpg'),
(85, 21, 'https://ananas.vn/wp-content/uploads/Detail_1.jpg'),
(86, 22, 'https://ananas.vn/wp-content/uploads/pro_ABH002_1-2.jpg'),
(87, 22, 'https://ananas.vn/wp-content/uploads/pro_ABH002_2.jpg'),
(88, 22, 'https://ananas.vn/wp-content/uploads/pro_ABH002_3.jpg'),
(89, 22, 'https://ananas.vn/wp-content/uploads/pro_ABH002_4.jpg'),
(90, 23, 'https://ananas.vn/wp-content/uploads/pro_ABC010_1.jpg'),
(91, 23, 'https://ananas.vn/wp-content/uploads/pro_ABC010_2.jpg'),
(92, 23, 'https://ananas.vn/wp-content/uploads/pro_ABC010_3.jpg'),
(93, 23, 'https://ananas.vn/wp-content/uploads/pro_ABC010_4.jpg'),
(94, 24, 'https://ananas.vn/wp-content/uploads/pro_sock_AAS003_1.jpg'),
(95, 24, 'https://ananas.vn/wp-content/uploads/pro_sock_AAS003_2.jpg'),
(96, 24, 'https://ananas.vn/wp-content/uploads/bs01070-1.jpg'),
(97, 24, 'https://ananas.vn/wp-content/uploads/bs01583-1.jpg'),
(98, 25, 'https://ananas.vn/wp-content/uploads/pro_ABC102_1.jpg'),
(99, 25, 'https://ananas.vn/wp-content/uploads/pro_ABC102_2.jpg'),
(100, 25, 'https://ananas.vn/wp-content/uploads/pro_baseball_ABC102_3.jpg'),
(101, 26, 'https://ananas.vn/wp-content/uploads/pro_snapback_ATH002_1.jpg'),
(102, 26, 'https://ananas.vn/wp-content/uploads/pro_snapback_ATH002_2.jpg'),
(103, 26, 'https://ananas.vn/wp-content/uploads/pro_snapback_ATH002_3.jpg'),
(104, 27, 'https://ananas.vn/wp-content/uploads/pro_ABC005_1.jpg'),
(105, 27, 'https://ananas.vn/wp-content/uploads/pro_ABC005_2.jpg'),
(106, 27, 'https://ananas.vn/wp-content/uploads/pro_cap_ABC005_2.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`id_donhang`);

--
-- Chỉ mục cho bảng `tbl_donsanpham`
--
ALTER TABLE `tbl_donsanpham`
  ADD PRIMARY KEY (`id_donsanpham`),
  ADD KEY `id_donhang` (`id_donhang`,`id_sanpham`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_sanphamimg`
--
ALTER TABLE `tbl_sanphamimg`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_donsanpham`
--
ALTER TABLE `tbl_donsanpham`
  MODIFY `id_donsanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `tbl_sanphamimg`
--
ALTER TABLE `tbl_sanphamimg`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_donsanpham`
--
ALTER TABLE `tbl_donsanpham`
  ADD CONSTRAINT `tbl_donsanpham_ibfk_1` FOREIGN KEY (`id_donhang`) REFERENCES `tbl_donhang` (`id_donhang`),
  ADD CONSTRAINT `tbl_donsanpham_ibfk_2` FOREIGN KEY (`id_sanpham`) REFERENCES `tbl_sanpham` (`id_sanpham`);

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `tbl_sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `tbl_danhmuc` (`id_danhmuc`);

--
-- Các ràng buộc cho bảng `tbl_sanphamimg`
--
ALTER TABLE `tbl_sanphamimg`
  ADD CONSTRAINT `tbl_sanphamimg_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `tbl_sanpham` (`id_sanpham`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
