-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 06:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thuongmai`
--

-- --------------------------------------------------------

--
-- Table structure for table `giasanpham`
--

CREATE TABLE `giasanpham` (
  `IDGia` int(11) NOT NULL,
  `IDSanPham` int(11) NOT NULL,
  `GiaNhap` int(11) NOT NULL,
  `GiaBan` int(11) NOT NULL,
  `HieuLuc` int(11) NOT NULL,
  `NgayCapNhap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giasanpham`
--

INSERT INTO `giasanpham` (`IDGia`, `IDSanPham`, `GiaNhap`, `GiaBan`, `HieuLuc`, `NgayCapNhap`) VALUES
(1, 4, 6500000, 7290000, 365, '2023-02-08'),
(2, 3, 25000000, 28030000, 675, '2023-02-06'),
(3, 6, 5000000, 5770000, 456, '2023-01-04'),
(4, 5, 50000000, 6820000, 365, '2023-01-10'),
(5, 7, 25000000, 30000000, 200, '2023-02-14'),
(6, 8, 20000000, 25000000, 200, '2023-01-04'),
(7, 9, 10000000, 15000000, 365, '2023-01-18'),
(8, 10, 5000000, 6000000, 200, '2023-01-11'),
(9, 11, 10000000, 15000000, 365, '2022-11-18'),
(10, 12, 10000000, 14000000, 200, '2022-10-03'),
(11, 13, 30000000, 50000000, 200, '2022-11-09'),
(12, 14, 25000000, 30000000, 200, '2022-12-13'),
(14, 18, 5000000, 7290000, 456, '2023-01-04'),
(15, 23, 5000000, 9840000, 365, '2023-02-07'),
(16, 24, 1500000, 2400000, 456, '2023-02-14'),
(17, 3, 40000000, 47000000, 0, '2023-03-03'),
(19, 25, 10000000, 15000000, 365, '2021-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `hang`
--

CREATE TABLE `hang` (
  `IDHang` int(11) NOT NULL,
  `TenHang` varchar(250) NOT NULL,
  `MoTa` varchar(1000) NOT NULL,
  `DiaChi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hang`
--

INSERT INTO `hang` (`IDHang`, `TenHang`, `MoTa`, `DiaChi`) VALUES
(1, 'Lucente ', ' Hãng rượu vang Ý nổi tiếng thế giới\r\nLucente là thương hiệu các loại rượu vang nổi tiếng thứ hai của Luce – nhà sản xuất rượu nổi tiếng của Ý. Nó là kết quả của quá trình tuyển chọn nguyên liệu nghiêm ngặt, lựa chọn những trái nho Sangiovese và Merlot tươi tốt nhất để tạo ra loại rượu vang nổi bật nhờ tình dễ chịu, mang đậm phong cách đương đại. Rượu được ủ trong 12 tháng rất kỳ công và cẩn thận trong các hầm rượu của Tenuta Luce trước khi đóng chai.', 'Đà Nẵng'),
(2, 'Hennessy', ' Hãng rượu vang nổi tiếng của Pháp\r\nĐược thành lập năm 1975 tại Cognac, Pháp, Hennessy hay Jas Hennessy là công ty sản xuất và kinh doanh rượu, với lịch sử hoạt động lâu đời. Đồng thời Hennessy còn là đồng lãnh đạo của thương hiệu thời trang xa xỉ Louis Vuitton.\r\n\r\nMỗi năm, công ty tiêu thụ được khoảng 50 triệu chai rượu trên toàn thế giới.\r\n\r\nRượu Hennessy hay còn được gọi là rượu Cognac vì được sản xuất tại thành phố Cognac của vùng Charentes, Pháp, đây cũng là loại rượu nặng được chế biến từ nho với nhiều niên hạn và cách thức pha trộn khác nhau.', 'Đà Nẵng'),
(3, 'Robert Mondavi ', ' Thương hiệu rượu vang nổi tiếng của Mỹ\r\nRobert Mondavi thành lập nhà máy sản xuất các loại rượu vang nổi tiếng cùng tên vào năm 1966 cùng với hai người con trai của mình là Michael và Tim Mondavi tại Thung lũng Napa với mục tiêu tạo ra loại rượu có thể cạnh tranh với các loại rượu vang hảo hạng nhất từ châu Âu.\r\n\r\nVào năm 1968, Mondavi đã tạo ra Sauvignon blanc từ nho vỏ xanh, một loại rượu chưa được ưa chuộng ở California vào thời điểm đó, và đặt tên cho nó là “Fumé Blanc”. Theo thời gian, Fumé Blanc dần được chấp nhận và được coi như một cách gọi khác của loại rượu trắng Sauvignon blanc.', 'Đà Nẵng'),
(4, 'Yellow tail', ' Hãng rượu vang nước Úc thượng hạng\r\nYellow Tail là thương hiệu rượu nổi tiếng của Úc nổi bật với hình ảnh chú Kanguroo màu cam, chân vàng. Được gia đình Casella thành lập vào năm 2001. Ban đầu Yellow Tail chủ yếu cung cấp rượu số lượng lớn cho các nhà máy rượu khác, sau đó họ tập trung vào xuất khẩu. Đến năm 2011, Yellow Tail trở thành rượu vang nhập khẩu số một vào Hoa Kỳ.', 'Đà Nẵng');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `IDLoai` int(11) NOT NULL,
  `TenLoai` varchar(250) NOT NULL,
  `MoTa` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`IDLoai`, `TenLoai`, `MoTa`) VALUES
(1, 'VANG & CHAMPAGNE', 'RƯỢU VANG'),
(2, 'RƯỢU VANG BỊCH', 'RƯỢU VANG'),
(3, 'LỄ & TẶNG', 'RƯỢU VANG');

-- --------------------------------------------------------

--
-- Table structure for table `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `IDNhaCungCap` int(11) NOT NULL,
  `TenNhaCungCap` varchar(250) NOT NULL,
  `DiaChi` varchar(250) NOT NULL,
  `SDT` varchar(1000) NOT NULL,
  `Email` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhacungcap`
--

INSERT INTO `nhacungcap` (`IDNhaCungCap`, `TenNhaCungCap`, `DiaChi`, `SDT`, `Email`) VALUES
(1, 'Lucente', 'Đà Nẵng', '0905987456', 'Lucente@gmail.com'),
(2, 'Hennessy', 'Đà Nẵng', '0906458094', 'Hennessy@gmail.com'),
(3, 'Robert Mondavi', 'Đà Nẵng', '0980876567', 'RobertMondavi@gmail.com'),
(4, 'Yellow tail', 'Đà Nẵng', '0978998765', 'Yellowtail@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `IDSanPham` int(11) NOT NULL,
  `TenSanPham` varchar(250) NOT NULL,
  `IDLoai` int(11) NOT NULL,
  `IDHang` int(11) NOT NULL,
  `IDNhaCungCap` int(11) NOT NULL,
  `MoTaSanPham` varchar(1000) NOT NULL,
  `Hinh` varchar(1000) NOT NULL,
  `TrangThai` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`IDSanPham`, `TenSanPham`, `IDLoai`, `IDHang`, `IDNhaCungCap`, `MoTaSanPham`, `Hinh`, `TrangThai`) VALUES
(3, 'Rượu Champagne Amour De Deutz Rose', 1, 1, 1, 'Rượu Champagne có lẽ là đề tài mà nhiều tín đồ của rượu vang Pháp hướng đến bình phẩm. Một trong số những sự lựa chọn tối ưu của vang Pháp trên thị trường hiện nay đó chính là sự có mặt của chai rượu vang này. Được làm nên từ hai giống nho khác nhau đó là nho Pinot Noir – Chardonnay, chai rượu vang mang đến dư vị hoàn hảo và tuyệt vời của nho. Không những thế chai rượu vang sẽ tuyệt vời phong phú hơn khi chúng có đầy đủ dư vị của nhiều trái cây khác nữa đan xen lẫn lộn. Hương thơm của tuyết tùng, đinh hương hay anh đào làm nên bản tình ca trọn vẹn sâu sắc đối với người dùng rượu mà không dòng vang nào có thể so sánh được với chúng phải không? Ghi điểm còn ở hình thức bên ngoài, màu vàng nhạt nhẹ nhàng như thu hút sự chú ý của những ánh mắt nhìn vào chai rượu vang đầy đặc biệt. Sản phẩm rượu vang này sẽ ngon hơn rất nhiều nếu như chúng được thưởng thức đúng cách. Bạn có thể lựa chọn rượu vang kết hợp dùng với các món ăn được chế biến từ thịt đỏ nướng, sườn ướp gia vị nướng hay thịt cừu.', 'ChampagneAmourDeDeutzRose.jpg', b'1'),
(4, 'Rượu Champagne Ayala Brut Majeur', 1, 2, 2, 'Điểm khác biệt của loại rượu vang nổ này so với những chai rượu vang thông thường đó chính là ở điểm khi mở nắp chai quý vị sẽ nghe thấy một tiếng nổ nhẹ cùng một lớp bọt trắng xóa trên miệng ly khi quý vị rót rượu tạo nên sức hấp dẫn cho loại champagne này. Nồng độ cồn của rượu nhẹ nhàng ở mức 12 %, tanin và axit nhẹ nhàng, hậu vị bền lâu vì thế quý vị có thể sử dụng rượu cho nhiều đối tượng khách hàng kể cả phụ nữ và người già. Hương vị của rượu là sự kết hợp hoàn hảo của nho cùng nhiều loại trái cây chín mọng và một số nguyên liệu tuyển chọn cao cấp mang đến sự đa dạng, tươi ngon, sóng sánh, thơm ngon hơn cho rượu.\r\n\r\nXuất hiện trên thị trường với gam màu vàng nhạt nhẹ nhàng, tươi tắn chắc chắn sẽ ghi điểm sâu sắc trong lòng khách hàng ngay từ khi chúng xuất hiện. Quy trình sản xuất của chai vang vổ này cũng phải trải qua một quy trình sản xuất hết sức phức tạp, những vườn nho được trồng và chăm sóc chu đáo đến vụ thu hoạch chúng được hái thủ công bằng tay sau đó phân loại và đưa và', 'RuouChampagneAyalaBrutMajeur.jpg', b'1'),
(5, 'Rượu Champagne Bollinger La Cote Aux Enfants', 1, 3, 3, 'Nguyên liệu là một yếu tố quyết định thành công của loại Champagne này. Nếu nguyên liệu đảm bảo, tuyển chọn khắt khe sẽ giúp chất lượng rượu tươi ngon hơn. Khui nắp chai và thưởng thức những ly rượu đầu tiên quý vị sẽ cảm nhận được tiếng nổ nhẹ sau đó là những bọt nhỏ li ti bùng nổ, tan chảy trong khoang miệng tạo cảm giác thú vị cho người tiêu dùng. Hương vị của rượu là sự kết hợp của nho Pinot Noir cùng nhiều loại quả chín mọng như anh đào, dâu rừng, việt quất, thạch lựu, mâm xôi hòa quyện cùng vị khoáng chất, ca cao, nấm, muối, than củi, gỗ sồi, thuốc lá, vani, thuốc lá, xì gà, socola, cà phê, tuyết tùng, đinh hương mang đến một hương vị không thể tuyệt vời hơn.\r\n\r\nHuyền bí với thiết kế vỏ và nhãn chai màu đen, khi rót rượu ra ly quý vị sẽ nhận thấy rượu sở hữu gam màu đỏ ruby đậm ánh tím vô cùng hấp dẫn, nồng độ cồn của rượu nhẹ nhàng, êm ái. Trước khi xuất hiện trên thị trường rượu đã trải qua một quy trình sản xuất với nhiều công đoạn được kiểm soát nhiệt độ một cách nghiêm ngặt.', 'Ruou-Champagne-Bollinger-La-Cote-Aux-Enfants.jpg', b'1'),
(6, 'Rượu Champagne Bollinger PNZV15', 1, 4, 4, 'Hướng tới nhiều thành phần khách hàng vì thế khi sản xuất rượu được trang bị một nồng độ cồn nhẹ nhàng, êm ái, cấu trúc rượu ổn định, tanin và axit cân bằng. Hương vị của rượu là sự kết hợp hoàn hảo của những trái nho căng mọng hòa quyện cùng nhiều loại quả tươi vô cùng tươi ngon, hấp dẫn như đào, táo, lê, mơ, mận vàng, dưa gang, cam, chanh, quýt và một số nguyên liệu cao cấp như hạt phỉ, quả hạch, bánh quy, đường nâu, bánh hạnh nhân, quả vả khô tạo nên vị rượu tươi ngon, sóng sánh, đảm bảo dinh dưỡng cho người tiêu dùng. Khi thưởng thức vị rượu sẽ len lỏi và lan tỏa khắp khoang miệng tạo nên những giây phút thật sự thăng hoa sau những giờ học tập và làm việc căng thẳng.\r\n\r\nCấu trúc rượu ổn định, tanin cân bằng, hậu vị bền lâu, để có thể xuất hiện trên thị trường rượu đã phải trải qua một quy trình sản xuất với nhiều công đoạn được kiểm soát nghiêm ngặt. Trong quá trình lên men, ngâm ủ, lão hóa nhà sản xuất đã bổ sung thêm một lượng nấm men và khí CO2 để tạo nên tiếng nổ nhẹ và lớp bọt', 'Ruou-Champagne-Bollinger-PNZV15.jpg', b'1'),
(7, 'Rượu Vang Bịch Alto Rioja', 2, 1, 1, 'Điều mà khách hàng quan tâm nhất khi sở hữu chai rượu vang này có lẽ là với giá thành khá mềm như thế thì liệu hương vị và chất lượng có đảm bảo hay không. Quý khách hàng có thể hoàn toàn tin tưởng về chất lượng cũng như hương vị của loại vang bịch này. Nguyên liệu chính để tạo nên rượu là từ nho Tempranillo. Những trái nho căng mọng đến vụ thu hoạch sẽ được hái thủ công bằng tay và bỏ cuống. Tiếp theo chúng được đưa vào hệ thống nghiền nát lấy dịch và thực hiện quá trình lên men, ngâm ủ, lão hóa một thời gian để đảm bảo sự trưởng thành trước khi đem đi tiêu thụ.\r\n\r\nRượu mang trên mình một lớp áo choàng màu đỏ ruby vô cùng ấn tượng. Khui nắp chai và thưởng thức những ly rượu vang đầu tiên quý vị sẽ cảm nhận được hương vị của nho quyện hòa cùng với nhiều loại trái cây chín mọng như mận, dâu, dâu rừng, anh đào, việt quất xanh, blackberry, blackcurrant; một số loại nguyên liệu và gia vị cao cấp cũng được sử dụng như gỗ sồi, vanilla, thuốc lá, socola, đinh hương, tuyết tùng mang lại sự đa ', 'Ruou-Vang-Bich-Alto-Rioja.jpg', b'1'),
(8, '\r\nRượu Vang Bịch Antiche Terre Venete Bio Farfalla', 2, 4, 4, 'Antiche Terre Venete làm nên rất nhiều những đứa con tinh thần khác nhau, những sản phẩm rượu vang đến từ nhà sản xuất được đánh giá rất cao trên thị trường. Vì thế cho nên không phân biệt dòng vang ở tầm cao cấp thượng hạng hay đại trà bình dân, tất cả đều mang đến cho người dùng sự hài lòng hơn bao giờ hết. Bịch rượu vang này cũng vậy. Nằm trong phân khúc những sản phẩm rượu vang đại trà bình dân phổ biến trên thị trường, rượu tỏ ra mạnh mẽ ấn tượng chưa từng có ngay từ hình thức bên ngoài mà bịch rượu vang đang sở hữu. Khoác lên một diện mạo mới với bịch vỏ rượu có dung tích 2L độc đáo mới mẻ ẩn chứa màu vàng nhạt nhẹ nhàng trong bịch rượu vang, điều đó gây ra không ít sự tò mò đối với người thưởng thức rượu.\r\n\r\nHương vị bên trong vang toát lên sự tinh tế nhẹ nhàng từ hai giống nho cơ bản đó là nho Chardonnay, Garganega. Thi thoảng rượu ghi điểm bởi hương vị của táo xanh, mật ong, chanh dây, ớt chuông xanh và một chút hương thơm nhẹ nhàng của hoa rừng màu trắng. Có được một cấu trúc', 'Ruou-Vang-Bich-Antiche-Terre-Venete-Bio-Farfalla.jpg', b'1'),
(9, 'Giỏ Quà Tết Bằng Da Rượu Chivas 18', 3, 1, 1, 'Quý Khách Có Thể Tùy Ý Thay Đổi Thành Phần Trong Hộp Quà Có Sẵn\r\n\r\nChiết Khấu Cực Cao Cho Người Giới Thiệu\r\n\r\nChúng Tôi Có Trên 6000 Mẫu Rượu Vang Và Rượu Ngoại Nhập Khẩu, Trên 100 Các Loại Bánh Kẹo Nhập Khẩu Khác Nhau. Các Bạn Có Thể Tùy Ý Sắp Xếp Và Lựa Chọn\r\n\r\n Ship Hàng Toàn Quốc – Đóng Gói Chắc Chắn Cẩn Thận\r\n\r\nTrong Quá Trình Đóng Giỏ Quà Tết Toàn Bộ Sản Phẩm Như Bánh Kẹo Và Rượu Vang Sẽ Được Chúng Tôi Dính Bằng Keo Nến Đảm Bảo Sự Chắc Chắn Sau Khi Hoàn Thành Sẽ Được Bọc Lylon Cứng Và Tiến Hành Khò Hút Chân Không Đảm Bảo Chắc Chắn Và Mỹ Quan Đẹp Mắt\r\n\r\n Chúng Tôi Cam Đoan Về Chất Lượng Sản Phẩm, Nếu Có Bất Kì Vấn Đề Gì Liên Quan Đến Chất Lượng Sản Phẩm. Chúng Tôi Xin Chịu Trách Nhiệm Hoàn Toàn Trước Pháp Luật.', 'Gio-Qua-Tet-Bang-Da-Ruou-Chivas-18.jpg', b'1'),
(10, 'Giỏ Quà Tết Bình Dân Rượu Vang Campoferro', 3, 2, 2, '► Quý Khách Có Thể Tùy Ý Thay Đổi Thành Phần Trong Hộp Quà Có Sẵn\r\n\r\n► Chiết Khấu Cực Cao Cho Người Giới Thiệu\r\n\r\n► Chúng Tôi Có Trên 6000 Mẫu Rượu Vang Và Rượu Ngoại Nhập Khẩu, Trên 100 Các Loại Bánh Kẹo Nhập Khẩu Khác Nhau. Các Bạn Có Thể Tùy Ý Sắp Xếp Và Lựa Chọn\r\n\r\n► Ship Hàng Toàn Quốc – Đóng Gói Chắc Chắn Cẩn Thận\r\n\r\n► Trong Quá Trình Đóng Giỏ Quà Tết Toàn Bộ Sản Phẩm Như Bánh Kẹo Và Rượu Vang Sẽ Được Chúng Tôi Dính Bằng Keo Nến Đảm Bảo Sự Chắc Chắn Sau Khi Hoàn Thành Sẽ Được Bọc Lylon Cứng Và Tiến Hành Khò Hút Chân Không Đảm Bảo Chắc Chắn Và Mỹ Quan Đẹp Mắt\r\n\r\n► Chúng Tôi Cam Đoan Về Chất Lượng Sản Phẩm, Nếu Có Bất Kì Vấn Đề Gì Liên Quan Đến Chất Lượng Sản Phẩm. Chúng Tôi Xin Chịu Trách Nhiệm Hoàn Toàn Trước Pháp Luật.', 'Gio-Qua-Tet-Binh-Dan-Ruou-Vang-Campoferro.jpg', b'1'),
(11, 'Rượu Champagne Bottega Diamond', 1, 1, 1, 'Bottega cho ra đời biết bao những sự lựa chọn khác nhau. Chai rượu vang này là một trong số những sản phẩm rượu vang hoàn hảo tuyệt vời đến từ nhà làm rượu. Được làm nên hoàn toàn từ những trái nho trắng đó là nho Pinot Nero, chai rượu vang mang đến sự trải nghiệm đầy ngỡ ngàng đến từ hương vị của nho. Không chỉ dừng lại ở đó khi thưởng thức quý khách hàng còn lần lượt cảm nhận được sự yêu thương trọn vẹn đến từ hương vị của táo xanh, chanh dây, xoài hay bưởi. Có những cung bậc cảm xúc khác nhau. Tất cả những sản phẩm rượu vang ra đời từ nhà làm rượu một lần nữa khẳng định được giá trị và tên tuổi của mình trên thị trường. Vốn dĩ thu hút sự chú ý của quý khách hàng còn là ở hình thức bên ngoài của rượu, chai rượu vang còn là sự ấn tượng bởi màu vàng rơm tươi tắn. Càng lại gần chai rượu vang những tia gợi sóng li ti khi rót chai rượu vang ra ly càng đủ để khiến cho khách hàng ấn tượng về sản phẩm rượu. Nên dùng chai rượu vang thưởng thức kèm cùng với những món ăn khác nhau để cho chai r', 'Ruou-Champagne-Bottega-Diamond.jpg', b'1'),
(12, '\r\nRượu Champagne Bottega Stella', 1, 1, 1, 'Rượu vang Nổ Italia đã từng khiến cho thị trường rượu vang thế giới thêm phần đa dạng phong phú hơn rất nhiều so với những sản phẩm rượu vang đến từ các quốc gia khác nhau trên thế giới. Chai rượu vang này là một trong số những dòng vang nổ cao cấp của thương hiệu sản xuất rượu vang mang tên Bottega. Không ngừng tỏa sáng trên thị trường, những gì thuộc về tính cách của chai rượu vang chẳng bao giờ phụ lòng mong mỏi của thực khách. Có những cảm nhận rất riêng, những gì thuộc về tính cách của chai rượu vang này xuất phát từ chính hương vị bên trong chúng. Nổi bật hơn là hương vị của những trái nho đó là nho Glera (Prosecco), Ribolla Gialla rồi thi thoảng còn là sự đan xen ghi chú đến từ hương vị của táo xanh, chanh dây, chuối, xoài cam hay quýt. Cho dù thời gian có không ngừng trôi đi nhưng những gì thuộc về tính cách của chai rượu vang này quả thực hoàn hảo hơn cả mong đợi dành cho khách hàng dùng vang đến từ khắp các nước. Một khi có cơ hội được tiếp cận với chai rượu vang đó sẽ là một', 'Ruou-Champagne-Bottega-Stella.jpg', b'1'),
(13, '\r\nRượu Vang Bịch Antiche Terre Venete Solo Passione', 2, 2, 2, 'Vẫn là đứa con tinh thần của nhà làm rượu Antiche Terre Venete, nhưng ở bịch rượu vang này chúng có được những cá tính hết sức mới mẻ và độc đáo. Người ta có thể yêu thương chai rượu vang ngay từ lần đầu tiên bắt gặp bởi rượu quá đỗi ấn tượng nhẹ nhàng. Nằm gọn trong bịch vang có dung tích 3L, sản phẩm rượu được thiết kế với hình thức bên ngoài khá bắt mắt. Dần dần khi mở bịch rượu vang ra thưởng thức thì hàng loạt những dư vị có trong sản phẩm rượu vang như tấn công mạnh mẽ vào trong khắp ngõ ngách vị giác của tâm hồn người dùng rượu.\r\n\r\nNhà sản đã lựa chọn nhiều giống nho kết hợp lại với nhau làm nguyên liệu cơ bản để sản xuất ra rượu. Vang có được hương vị tươi tắn và đậm đà là nhờ bởi sự ghi chú hương vị của nho Cabernet Franc, Malbec, Merlot, Petit Verdot, Cabernet Sauvignon. Chỉ cần một lần thưởng thức rượu vang sẽ là một lần khách hàng yêu thương vang mãi mãi. Rượu là kết quả của sự kết hợp hài hòa nhiều tầng lớp hương vị trái cây phong phú. Vang còn mang đến hương vị của tuyết ', 'Ruou-Vang-Bich-Antiche-Terre-Venete-Solo-Passione.jpg', b'1'),
(14, '\r\nRượu Vang Bịch Cantine Ronco Sicilia Rosso', 2, 2, 2, 'Ronco Sicilia có rất nhiều những tác phẩm rượu vang sáng giá khác nhau làm nên vị thế nhất định của mình trên thị trường rượu vang thế giới. Không phân biệt dòng rượu vang cao cấp thượng hạng hay đại trà bình dân, những gì thuộc về tính cách của rượu vang thương hiệu này làm nên dấu ấn riêng dành cho người dùng. Chai rượu vang này quả thực là một trong số những kiệt tác nghệ thuật của nhà sản xuất. Trưởng thành từ sự kết hợp hoàn hảo của hai giống nho Nero D’Avola – Sangiovese, bịch rượu vang này là sự trải nghiệm ngỡ ngàng đến từ hương vị của nho. Không chỉ dừng lại ở đó, khi nếm thử rượu vang còn toát lên được những trải nghiệm hết sức ngỡ ngàng đến từ hương vị của việt quất, gỗ sồi, đinh hương, anh đào và mận chín. Lần đầu tiên ra mắt thị trường, chính phiên bản thiết kế ấn tượng độc đáo là bịch rượu vang 3L đã khiến cho những ánh mắt nhìn vào một cách sâu thẳm. Sở hữu một mức giá hết sức phải chăng không quá đắt đỏ điều đó càng khiến cho rượu vang trở nên gần gũi hơn đối với khách ', 'Ruou-Vang-Bich-Cantine-Ronco-Sicilia-Rosso.jpg', b'1'),
(18, 'Rượu Champagne Carbon F1', 1, 4, 4, 'Carbon đã từng khiến cho nhiều khách hàng dùng vang trên thế giới cảm thấy vô cùng ấn tượng. Những sản phẩm rượu vang ra đời từ nhà sản xuất này được khách hàng đánh giá cao trên thị trường. Chai rượu vang này được biết đến là một trong số những dòng vang nổ cao cấp đến từ nhà làm rượu lọt vào tầm ngắm của nhiều khách hàng dùng vang trên thế giới hiện nay. Sở dĩ người ta yêu thích vang là bởi vì vang sở hữu một hình thức bên ngoài cực kỳ bắt mắt. Màu vàng ánh xanh như mang đến thứ ánh màu tượng trưng cho niềm tin, cho sự lớn mạnh không ngừng hương về một tương lai tươi sáng. Khi thưởng thức trong vòm miệng vang còn lần lượt là những trải nghiệm đến từ hương vị của dâu rừng, thảo mộc, chanh tươi, bưởi, xoài, cam hay quýt. 12.5% làm nên sự cân bằng trong cấu trúc của rượu vang. Sự mượt mà trong từng khoảnh khắc hương vị rượu trở thành yếu tố cơ bản để dẫn dắt khách hàng dùng vang đi qua hết những cung bậc cảm xúc này cho đến những cung bậc cảm xúc khác. Để cho sản phẩm rượu vang này được', 'Ruou-Champagne-Carbon-F1.jpg', b'0'),
(23, 'Rượu Champagne Deutz Demi Sec', 1, 4, 4, 'Đến từ thương hiệu Deutz nước Pháp, chai rượu vang đã từng trở thành món ăn tinh thần đặc biệt không thể thiếu dành cho những bữa tiệc. Những cung bậc cảm xúc khác nhau như ùa về trong tâm trí của người dùng. Kể từ đó sau mỗi lần thưởng thức chai rượu vang là một lần khách hàng cảm thấy ấn tượng rượu một cách đặc biệt mà không phải dòng vang nào cũng có được điều đó. Trưởng thành từ sự kết hợp của những trái cây khác nhau nhưPinot Noir – Pinot Meunier – Chardonnay, sản phẩm rượu vang mang đến sự trải nghiệm vô cùng hoàn hảo đến từ dư vị của những trái nho này. Hơn thế nữa khi thưởng thức người dùng còn lần lượt ấn tượng bởi hương vị của một số trái câu khác nữa đan xen. Nào là hương vị của dâu tây, đinh huơng, anh đào hay thảo mộc rồi còn có ghi chú từ một chút hương vị của mật ong hoặc dâu rừng. 12% chính là nồng độ cồn mà chai rượu vang này đang sở hữu. Có được cấu trúc vang cân bằng nhẹ nhàng kèm theo đó là nồng độ cồn vừa phải, rượu sẽ làm nên trải nghiệm đặc biệt mà chỉ cần 1 lần ', 'Ruou-Champagne-Deutz-Demi-Sec.jpg', b'0'),
(24, '\r\nRượu Champagne Drappier La Grande Sendree', 1, 3, 3, 'Đến từ thương hiệu Drappier nước Pháp, cái tên chai rượu vang này không ngừng tỏa sáng trên thị trường. Người ta biết đến tên tuổi của sản phẩm rượu vang như một món quà tinh thần vô cùng đặc biệt mà ở đó chỉ có sự đắm chìm trong những dư vị vang hoàn hảo và phong phú. Được làm nên từ hai giống nho khác nhau đó là nho Pinot Noir – Chardonnay, chai rượu vang sở hữu một cách đầy đủ và trọn vẹn hương vị của chính hai giống nho này. Ngoài ra khi nếm thử người dùng còn ấn tượng bởi hương vị của anh đào, việt quất hay một chút dư vị của cây táo gai kèm theo hương vị của mật ong hay bánh hạnh nhân. Trong vòm miệng vang trở nên vô cùng hào phóng để tấn công vào hầu hết những ngõ ngách vị giác bởi hương vị tuyệt vời hoàn hảo bên trong sản phẩm rượu.\r\n\r\nĐể có được sự hoàn hảo đến như thế thì chai rượu vang này cần có nghệ thuật dùng rượu riêng. Bạn có thể lựa chọn rượu vang để thưởng thức kèm cùng với các món ăn được chế biến từ thịt đỏ như thịt lợn nướng, thịt bò hay thịt cừu trong điều kiện nh', 'Ruou-Champagne-Drappier-La-Grande-Sendree.jpg', b'0'),
(25, 'Giỏ Quà Tết Doanh Nghiệp Tribuca', 3, 3, 3, '► Quý Khách Có Thể Tùy Ý Thay Đổi Thành Phần Trong Hộp Quà Có Sẵn\r\n\r\n► Chiết Khấu Cực Cao Cho Người Giới Thiệu\r\n\r\n► Chúng Tôi Có Trên 6000 Mẫu Rượu Vang Và Rượu Ngoại Nhập Khẩu, Trên 100 Các Loại Bánh Kẹo Nhập Khẩu Khác Nhau. Các Bạn Có Thể Tùy Ý Sắp Xếp Và Lựa Chọn\r\n\r\n► Ship Hàng Toàn Quốc – Đóng Gói Chắc Chắn Cẩn Thận\r\n\r\n► Trong Quá Trình Đóng Giỏ Quà Tết Toàn Bộ Sản Phẩm Như Bánh Kẹo Và Rượu Vang Sẽ Được Chúng Tôi Dính Bằng Keo Nến Đảm Bảo Sự Chắc Chắn Sau Khi Hoàn Thành Sẽ Được Bọc Lylon Cứng Và Tiến Hành Khò Hút Chân Không Đảm Bảo Chắc Chắn Và Mỹ Quan Đẹp Mắt\r\n\r\n► Chúng Tôi Cam Đoan Về Chất Lượng Sản Phẩm, Nếu Có Bất Kì Vấn Đề Gì Liên Quan Đến Chất Lượng Sản Phẩm. Chúng Tôi Xin Chịu Trách Nhiệm Hoàn Toàn Trước Pháp Luật.', 'Gio-Qua-Tet-Doanh-Nghiep-Tribuca.jpg', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `IDTaiKhoan` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phanquyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`IDTaiKhoan`, `username`, `password`, `phanquyen`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(2, 'nang', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(3, 'KieuLinh', '827ccb0eea8a706c4c34a16891f84e7b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `thongtinkhachang`
--

CREATE TABLE `thongtinkhachang` (
  `IDKhachHang` int(11) NOT NULL,
  `IDTaiKhoan` int(11) NOT NULL,
  `Ten` varchar(100) NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` varchar(25) NOT NULL,
  `SDT` int(11) NOT NULL,
  `CCCD` int(120) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `PhuongThucTT` varchar(255) NOT NULL,
  `time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thongtinkhachang`
--

INSERT INTO `thongtinkhachang` (`IDKhachHang`, `IDTaiKhoan`, `Ten`, `NgaySinh`, `GioiTinh`, `SDT`, `CCCD`, `Email`, `DiaChi`, `PhuongThucTT`, `time`) VALUES
(1, 2, 'Năng', '2016-05-05', 'Nam', 354679154, 1201234554, 'nang@gmail.com', '135 Nguyễn Lương Bằng', 'Thanh toán khi nhận hàng', '2023-05-08 22:07:26.841762'),
(27, 2, 'nang', '2023-05-31', '1', 2147483647, 305889776, 'na@gamil.com', '151/14 Đồng Kè', '2', '2023-05-09 09:54:43.000000'),
(28, 2, 'Ma', '2023-05-03', '2', 2147483647, 305889776, 'doancongnang2704@gmail.com', '120/28 Nguyễn Lương Bằng', '3', '2023-05-09 09:58:09.000000'),
(29, 3, 'Kiều Linh', '2023-04-30', '2', 2147483647, 305889776, 'linhkieu080@gmail.com', '120 Nguyễn Lương Bằng', '3', '2023-05-21 16:03:26.000000'),
(30, 3, 'Kiều Linh', '2003-01-15', '1', 2147483647, 394542645, 'linhkieu080@gmail.com', '120 Nguyễn Lương Bằng', '2', '2023-05-21 16:05:01.000000');

-- --------------------------------------------------------

--
-- Table structure for table `thongtinsanpham`
--

CREATE TABLE `thongtinsanpham` (
  `ID_SanPhamMua` int(11) NOT NULL,
  `Ten_SanPhamMua` varchar(255) NOT NULL,
  `AnhSanPhamMua` varchar(255) NOT NULL,
  `IDSanPham` int(11) NOT NULL,
  `IDKhachHang` int(11) NOT NULL,
  `GiaSPMua` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thongtinsanpham`
--

INSERT INTO `thongtinsanpham` (`ID_SanPhamMua`, `Ten_SanPhamMua`, `AnhSanPhamMua`, `IDSanPham`, `IDKhachHang`, `GiaSPMua`) VALUES
(7, 'Rượu Champagne Amour De Deutz Rose', 'ChampagneAmourDeDeutzRose.jpg', 3, 27, 28030000),
(8, 'Rượu Vang Bịch Alto Rioja', 'Ruou-Vang-Bich-Alto-Rioja.jpg', 7, 28, 30000000),
(9, 'Rượu Champagne Amour De Deutz Rose', 'ChampagneAmourDeDeutzRose.jpg', 3, 29, 28030000),
(10, '\r\nRượu Vang Bịch Antiche Terre Venete Bio Farfalla', 'Ruou-Vang-Bich-Antiche-Terre-Venete-Bio-Farfalla.jpg', 8, 30, 25000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `giasanpham`
--
ALTER TABLE `giasanpham`
  ADD PRIMARY KEY (`IDGia`,`IDSanPham`),
  ADD KEY `IDSanPham` (`IDSanPham`);

--
-- Indexes for table `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`IDHang`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`IDLoai`);

--
-- Indexes for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`IDNhaCungCap`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`IDSanPham`),
  ADD KEY `IDHang` (`IDHang`),
  ADD KEY `IDLoai` (`IDLoai`),
  ADD KEY `IDNhaCungCap` (`IDNhaCungCap`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`IDTaiKhoan`);

--
-- Indexes for table `thongtinkhachang`
--
ALTER TABLE `thongtinkhachang`
  ADD PRIMARY KEY (`IDKhachHang`,`IDTaiKhoan`);

--
-- Indexes for table `thongtinsanpham`
--
ALTER TABLE `thongtinsanpham`
  ADD PRIMARY KEY (`ID_SanPhamMua`),
  ADD KEY `IDKhachHang` (`IDKhachHang`),
  ADD KEY `IDSanPham` (`IDSanPham`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `giasanpham`
--
ALTER TABLE `giasanpham`
  MODIFY `IDGia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hang`
--
ALTER TABLE `hang`
  MODIFY `IDHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `IDLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `IDNhaCungCap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `IDSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `IDTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `thongtinkhachang`
--
ALTER TABLE `thongtinkhachang`
  MODIFY `IDKhachHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `thongtinsanpham`
--
ALTER TABLE `thongtinsanpham`
  MODIFY `ID_SanPhamMua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `giasanpham`
--
ALTER TABLE `giasanpham`
  ADD CONSTRAINT `giasanpham_ibfk_1` FOREIGN KEY (`IDSanPham`) REFERENCES `sanpham` (`IDSanPham`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`IDHang`) REFERENCES `hang` (`IDHang`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`IDLoai`) REFERENCES `loai` (`IDLoai`),
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`IDNhaCungCap`) REFERENCES `nhacungcap` (`IDNhaCungCap`);

--
-- Constraints for table `thongtinsanpham`
--
ALTER TABLE `thongtinsanpham`
  ADD CONSTRAINT `thongtinsanpham_ibfk_1` FOREIGN KEY (`IDKhachHang`) REFERENCES `thongtinkhachang` (`IDKhachHang`),
  ADD CONSTRAINT `thongtinsanpham_ibfk_2` FOREIGN KEY (`IDSanPham`) REFERENCES `sanpham` (`IDSanPham`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
