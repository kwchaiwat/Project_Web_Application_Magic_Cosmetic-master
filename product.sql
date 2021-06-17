-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2018 at 04:03 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `product`
--


--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_name`, `ProType_ID`, `Product_detail`, `Product_price`, `Product_stock`, `Product_sold`, `Product_pic`) VALUES
(1, 'Novo EyeShadow Stick #1', 1, '      Novo EyeShadow Stick อายแชโดว์ทูโทน ของแท้ 100% เนื้อครีมสีไฮไลท์ กันน้ำ เนื้อเนียน ใช้ง่ายมาก สะดวกมาก\r\nพกพาง่าย หยิบสะดวก พลาดไม่ได้ !!\r\n', 150, 88, 32, 'pvr_5ae766e127e79.jpg'),
(2, 'Novo EyeShadow Stick #5', 1, '      อายแชโดว์ทูโทน ของแท้ 100% เนื้อครีมสีไฮไลท์ กันน้ำ เนื้อเนียน ใช้ง่ายมาก สะดวกมาก\r\nพกพาง่าย หยิบสะดวก พลาดไม่ได้ !!\r\n', 149, 119, 1, 'pvr_5ae76726421dc.jpg'),
(3, 'Novo EyeShadow Stick #6', 1, '      อายแชโดว์ทูโทน ของแท้ 100% เนื้อครีมสีไฮไลท์ กันน้ำ เนื้อเนียน ใช้ง่ายมาก สะดวกมาก\r\nพกพาง่าย หยิบสะดวก พลาดไม่ได้ !\r\n!', 149, 160, -80, 'pvr_5ae767528a413.jpg'),
(4, 'Mamonde Creamy Tint Color Balm #12', 1, '      ลิปสติก 3-in-1 รวมลิปสติก ลิปบาล์ม และทิ้นท์ไว้ในแท่งเดียว!', 329, 98, -10, 'pvr_5ae76d091b94d.png'),
(5, 'Mamonde Creamy Tint Color Balm #16', 1, '      “Mamonde Creamy Tint Color Balm” ลิปสติก 3-in-1 รวมลิปสติก ลิปบาล์ม และทิ้นท์ไว้ในแท่งเดียว!', 329, 89, 0, 'pvr_5ae76e720ba39.png'),
(6, 'Mamonde Creamy Tint Color Balm #20', 1, '      “Mamonde Creamy Tint Color Balm” ลิปสติก 3-in-1 รวมลิปสติก ลิปบาล์ม และทิ้นท์ไว้ในแท่งเดียว!', 329, 51, 0, 'pvr_5ae76ec3021b5.jpg'),
(7, 'Neutrogena', 3, 'นูโทรจีนา ไฮโดร บูสท์ ไนท์ คอนเซนเทรท วอเตอร์ เจล 50กรัม', 590, 49, 1, 'pvr_5ae7737096a0a.jpg'),
(8, 'Hiruscar', 3, '      เจลแต้มสิวHiruscar สีเขียว ขนาด4ml', 190, 80, 0, 'pvr_5ae7741a163c3.jpg'),
(9, 'Hada Labo', 2, '      Hada Labo ขวดสีทองนี้เหมาะสำหรับผิวแห้งง่าย แห้งมากกกก  ผู้ที่เคยใช้แล้วบอกว่ามันช่วยเติมความชุ่มชื้นให้กับผิว  (ให้ดูอ่อนเยาว์ไปถึง 3 ปี  ขนาดนั้น!!  ถือได้ว่าเป็นรุ่นที่ใส่ความเป็นโลชั่นเพิ่ม ', 499, 35, 0, 'pvr_5ae7754703ce4.jpg'),
(10, 'Cetaphil', 2, 'ผลิตภัณฑ์ยอดนิยมสูตรเฉพาะของเซตาฟิลที่ได้รับรางวัลมากมายจากกูรูด้านความสวยความงาม เพราะมีสูตรที่อ่อนโยน ปราศจากสบู่ และน้ำหอม สามารถใช้เป็นประจำได้ทุกวันไม่ระคายเคืองผิว ล้างออกง่าย คงความชุ่มชื้น ทำใ', 399, 35, 0, 'pvr_5ae775dff417c.jpg'),
(11, 'Clean&Clear foaming face watch', 2, 'ควบคุมความมันยาวนานถึง 8 ชม. พร้อมป้องกัน สิว สิวเสี้ยน โดยไม่ทำให้ผิวแห้งตึง 100ml', 99, 54, 0, 'pvr_5ae7768bbff64.png'),
(12, 'Pond''s Flawless White Re-Brightening Night Treatment ', 3, '      ครีมบำรุงสำหรับกลางวัน เหมาะกับผิวทุกประเภท ใช้เป็นประจำทุกเช้า เนื้อครีมไม่เหนียวเหนอะหนะ เพื่อผิวดูกระจ่างใสจุดด่างดำดูลดเลือน พร้อมให้ผิวกระจ่างใส ห่างไกลจุดด่างดำอย่างที่ไม่เคยมีมาก่อน ', 239, 20, 0, 'pvr_5ae7922d59238.png'),
(13, 'Bioderma Sensibio H2O', 2, '    ผลิตภัณฑ์ทำความสะอาดสูตรน้ำที่อ่อนโยนต่อผิวที่บอบบาง แพ้ง่าย รวมประสิทธิภาพการทำความสะอาดที่ล้ำลึก และให้การปกป้องผิวสูงสุดที่สามารถใช้ทำความสะอาดและลบเครื่องสำอางได้ทั่วผิวหน้าจนถึงรอบดวงตา พร้อม', 950, 65, 0, 'pvr_5ae77838eeb13.jpg'),
(15, 'Nivea นีเวีย แอคเน่ แคร์ เมคอัพ เคลียร์ คลีนซิ่ง วอเตอร์', 2, 'ผลิตภัณฑ์เช็ดทำความสะอาดเครื่องสำอางสูตรน้ำ สำหรับผิวแต่งหน้าจัดเต็ม เป็นสิวสะสม เพราะซิลิโคนในเมคอัพกันน้ำ ล้างออกยากกว่าที่คิด จึงสะสมและบล็อกผิวต้นเหตุหนึ่งของผิวหมอง สิวอุดตันสะสม แตกต่างด้วยนวัตก', 179, 25, 0, 'pvr_5ae779fc9bd64.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`,`ProType_ID`),
  ADD KEY `ProType_ID` (`ProType_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ProType_ID`) REFERENCES `product_type` (`ProType_ID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
