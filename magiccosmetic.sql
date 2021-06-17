-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2018 at 06:14 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magiccosmetic`
--

-- --------------------------------------------------------

--
-- Table structure for table `manage`
--

CREATE TABLE `manage` (
  `User_ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Status_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manage_order`
--

CREATE TABLE `manage_order` (
  `User_ID` int(11) NOT NULL,
  `Order_ID` int(11) NOT NULL,
  `edit_order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `Detail_ID` int(10) NOT NULL,
  `Order_ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Detail_qty` int(11) NOT NULL,
  `Detail_subtotal` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_ems`
--

CREATE TABLE `order_ems` (
  `Order_ID` int(11) NOT NULL,
  `Ems_code` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_head`
--

CREATE TABLE `order_head` (
  `Order_ID` int(10) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Order_dttm` datetime NOT NULL,
  `Order_fname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Order_lname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Order_addr` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Order_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Order_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Order_qty` int(11) NOT NULL,
  `Order_total` float NOT NULL,
  `Order_status` int(11) NOT NULL,
  `Shipping_ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_pic`
--

CREATE TABLE `order_pic` (
  `Order_ID` int(11) NOT NULL,
  `Order_pic` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Order_con_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` int(11) NOT NULL,
  `Product_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ProType_ID` int(11) NOT NULL,
  `Product_detail` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Product_price` int(11) NOT NULL,
  `Product_stock` int(11) NOT NULL,
  `Product_sold` int(11) NOT NULL,
  `Product_pic` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_name`, `ProType_ID`, `Product_detail`, `Product_price`, `Product_stock`, `Product_sold`, `Product_pic`) VALUES
(1, 'Novo EyeShadow Stick', 1, '      Novo EyeShadow Stick อายแชโดว์ทูโทน ของแท้ 100% เนื้อครีมสีไฮไลท์ กันน้ำ เนื้อเนียน ใช้ง่ายมาก สะดวกมาก\r\nพกพาง่าย หยิบสะดวก พลาดไม่ได้ !!\r\n', 150, 88, 32, 'pvr_5ae766e127e79.jpg'),
(2, 'Novo EyeShadow Stick', 1, '      อายแชโดว์ทูโทน ของแท้ 100% เนื้อครีมสีไฮไลท์ กันน้ำ เนื้อเนียน ใช้ง่ายมาก สะดวกมาก\r\nพกพาง่าย หยิบสะดวก พลาดไม่ได้ !!\r\n', 149, 119, 1, 'pvr_5ae76726421dc.jpg'),
(3, 'Novo EyeShadow Stick', 1, '      อายแชโดว์ทูโทน ของแท้ 100% เนื้อครีมสีไฮไลท์ กันน้ำ เนื้อเนียน ใช้ง่ายมาก สะดวกมาก\r\nพกพาง่าย หยิบสะดวก พลาดไม่ได้ !\r\n!', 149, 160, -80, 'pvr_5ae767528a413.jpg'),
(4, 'Mamonde Creamy Tint ', 1, '      ลิปสติก 3-in-1 รวมลิปสติก ลิปบาล์ม และทิ้นท์ไว้ในแท่งเดียว!', 329, 98, -10, 'pvr_5ae76d091b94d.png'),
(5, 'Mamonde Creamy Tint ', 1, '      “Mamonde Creamy Tint Color Balm” ลิปสติก 3-in-1 รวมลิปสติก ลิปบาล์ม และทิ้นท์ไว้ในแท่งเดียว!', 329, 89, 0, 'pvr_5ae76e720ba39.png'),
(6, 'Mamonde Creamy Tint ', 1, '      “Mamonde Creamy Tint Color Balm” ลิปสติก 3-in-1 รวมลิปสติก ลิปบาล์ม และทิ้นท์ไว้ในแท่งเดียว!', 329, 51, 0, 'pvr_5ae76ec3021b5.jpg'),
(7, 'Neutrogena', 3, 'นูโทรจีนา ไฮโดร บูสท์ ไนท์ คอนเซนเทรท วอเตอร์ เจล 50กรัม', 590, 49, 1, 'pvr_5ae7737096a0a.jpg'),
(8, 'Hiruscar', 3, '      เจลแต้มสิวHiruscar สีเขียว ขนาด4ml', 190, 80, 0, 'pvr_5ae7741a163c3.jpg'),
(9, 'Hada Labo', 2, '      Hada Labo ขวดสีทองนี้เหมาะสำหรับผิวแห้งง่าย แห้งมากกกก  ผู้ที่เคยใช้แล้วบอกว่ามันช่วยเติมความชุ่มชื้นให้กับผิว  (ให้ดูอ่อนเยาว์ไปถึง 3 ปี  ขนาดนั้น!!  ถือได้ว่าเป็นรุ่นที่ใส่ความเป็นโลชั่นเพิ่ม ', 499, 35, 0, 'pvr_5ae7754703ce4.jpg'),
(10, 'Cetaphil', 2, 'ผลิตภัณฑ์ยอดนิยมสูตรเฉพาะของเซตาฟิลที่ได้รับรางวัลมากมายจากกูรูด้านความสวยความงาม เพราะมีสูตรที่อ่อนโยน ปราศจากสบู่ และน้ำหอม สามารถใช้เป็นประจำได้ทุกวันไม่ระคายเคืองผิว ล้างออกง่าย คงความชุ่มชื้น ทำใ', 399, 35, 0, 'pvr_5ae775dff417c.jpg'),
(11, 'Clean&Clear foaming ', 2, 'ควบคุมความมันยาวนานถึง 8 ชม. พร้อมป้องกัน สิว สิวเสี้ยน โดยไม่ทำให้ผิวแห้งตึง 100ml', 99, 54, 0, 'pvr_5ae7768bbff64.png'),
(12, 'Pond\'s Flawless Whit', 3, '      ครีมบำรุงสำหรับกลางวัน เหมาะกับผิวทุกประเภท ใช้เป็นประจำทุกเช้า เนื้อครีมไม่เหนียวเหนอะหนะ เพื่อผิวดูกระจ่างใสจุดด่างดำดูลดเลือน พร้อมให้ผิวกระจ่างใส ห่างไกลจุดด่างดำอย่างที่ไม่เคยมีมาก่อน ', 239, 20, 0, 'pvr_5ae7922d59238.png'),
(13, 'Bioderma Sensibio H2', 2, '    ผลิตภัณฑ์ทำความสะอาดสูตรน้ำที่อ่อนโยนต่อผิวที่บอบบาง แพ้ง่าย รวมประสิทธิภาพการทำความสะอาดที่ล้ำลึก และให้การปกป้องผิวสูงสุดที่สามารถใช้ทำความสะอาดและลบเครื่องสำอางได้ทั่วผิวหน้าจนถึงรอบดวงตา พร้อม', 950, 65, 0, 'pvr_5ae77838eeb13.jpg'),
(15, 'Nivea นีเวีย แอคเน่ ', 2, 'ผลิตภัณฑ์เช็ดทำความสะอาดเครื่องสำอางสูตรน้ำ สำหรับผิวแต่งหน้าจัดเต็ม เป็นสิวสะสม เพราะซิลิโคนในเมคอัพกันน้ำ ล้างออกยากกว่าที่คิด จึงสะสมและบล็อกผิวต้นเหตุหนึ่งของผิวหมอง สิวอุดตันสะสม แตกต่างด้วยนวัตก', 179, 25, 0, 'pvr_5ae779fc9bd64.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `ProType_ID` int(11) NOT NULL,
  `ProType_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`ProType_ID`, `ProType_name`) VALUES
(1, 'เครื่องสำอาง'),
(2, 'ผลิตภัณฑ์ทำความสะอาดใบหน้า'),
(3, 'เวชสำอาจ');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `Shipping_ID` int(11) NOT NULL,
  `Shipping_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`Shipping_ID`, `Shipping_type`, `cost`) VALUES
(1, 'ลงทะเบียน', 30),
(2, 'EMS', 60);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(11) NOT NULL,
  `Username` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `User_fname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `User_lname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `User_add` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `User_email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `User_tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `UserType_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `Username`, `Password`, `User_fname`, `User_lname`, `User_add`, `User_email`, `User_tel`, `UserType_ID`) VALUES
(1, 'admin', '$2y$10$bxU.XXhddh6qLFH32v8KkOUcJ8f9UreoymsY1P24hihPU7yo7rgYa', 'FirstNameADMIN', 'LastNameADMIN', 'หหหหหหหห', 'admin@admin.com', '0885724915', 2),
(2, 'admin2', '$2y$10$XPHCNylI9MPUXc3odROqsO3aRaDbQli95DD/6y3GI2koBNycQVcIW', 'dadadadad', 'แก้วมุกดาสวรรค์', '230/1 หมู่ 14 ต.ศิลา ถ.มิตรภาพ อ.เมือง ขอนแก่น ', 'thaiishchaiwat@gmail.com', '0885724915', 2),
(3, 'user2', '$2y$10$5LOs0ZR.yUYwLs03/KPxoeAr3aq.XfmkkLzy9qPb/ZPJScWivhq1i', '12345', '12345', '12345', '12345@gmail.com', '0885724915', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `UserType_ID` int(11) NOT NULL,
  `UserType_name` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`UserType_ID`, `UserType_name`) VALUES
(1, 'user'),
(2, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manage`
--
ALTER TABLE `manage`
  ADD PRIMARY KEY (`User_ID`,`Product_ID`),
  ADD KEY `Product_ID` (`Product_ID`);

--
-- Indexes for table `manage_order`
--
ALTER TABLE `manage_order`
  ADD PRIMARY KEY (`User_ID`,`Order_ID`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`Detail_ID`);

--
-- Indexes for table `order_ems`
--
ALTER TABLE `order_ems`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `order_head`
--
ALTER TABLE `order_head`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `order_pic`
--
ALTER TABLE `order_pic`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`,`ProType_ID`),
  ADD KEY `ProType_ID` (`ProType_ID`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`ProType_ID`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`Shipping_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`,`UserType_ID`),
  ADD KEY `UserType_ID` (`UserType_ID`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`UserType_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `Detail_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_head`
--
ALTER TABLE `order_head`
  MODIFY `Order_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `ProType_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `Shipping_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `UserType_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `manage`
--
ALTER TABLE `manage`
  ADD CONSTRAINT `manage_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`User_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `manage_ibfk_2` FOREIGN KEY (`Product_ID`) REFERENCES `product` (`Product_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `manage_order`
--
ALTER TABLE `manage_order`
  ADD CONSTRAINT `manage_order_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`User_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ProType_ID`) REFERENCES `product_type` (`ProType_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`UserType_ID`) REFERENCES `usertype` (`UserType_ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
