-- MySQL dump 10.13  Distrib 8.0.22, for macos10.15 (x86_64)
--
-- Host: localhost    Database: coffee_shop
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `style` varchar(500) DEFAULT NULL,
  `total_product` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'coffee','Robusta','15kg'),(2,'coffee Abrica','Rang xay tổng hợp','20kg'),(3,'hoa quả chanh','Chanh ĐÀO','1 rổ'),(4,'hoa quả dưa hấu','Sinh tố','2 quả');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `price_input` float DEFAULT NULL,
  `price_sale` float DEFAULT NULL,
  `expried_date` datetime DEFAULT NULL,
  `packed_type` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Cà phê Buôn Mê Thuật',1,50000,180000,'2021-02-12 00:00:00','Túi'),(2,'Cà phê Buôn Mê Thuật - Chồn',1,80000,250000,'2021-02-12 00:00:00','Kg'),(3,'Cà phê ĐakLak - Rang chưa xay',2,70000,250000,'2021-02-12 00:00:00','Kg'),(4,'Cà phê ĐakLak - Chồn',2,70000,250000,'2021-02-12 00:00:00','Kg'),(5,'Cà phê ĐakLak - Rang Xay',2,70000,250000,'2021-02-12 00:00:00','Kg'),(6,'Cà phê Buôn Mê Thuật 123',NULL,NULL,NULL,NULL,NULL),(7,'Cà phê Buôn Mê Thuật 123',1,89000,230000,'2021-02-12 00:00:00','Tui'),(8,'Cà phê Buôn Mê Thuật 123',1,89000,230000,'2021-02-12 00:00:00','Tui'),(9,'Tra Dao Cam Sa - vi dua hau',1,89000,230000,'2021-02-12 00:00:00','Tui'),(10,'Sinh tố lúa mạch',1,89000,230000,'2021-02-12 00:00:00','Tui'),(11,'Cà phê Buôn Mê Thuật 123',1,89000,230000,'2021-02-12 00:00:00','Thung'),(12,'Tra Dao Cam Sa',1,89000,230000,'2021-02-12 00:00:00','Tui');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publishs`
--

DROP TABLE IF EXISTS `publishs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publishs` (
  `publish_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`publish_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publishs`
--

LOCK TABLES `publishs` WRITE;
/*!40000 ALTER TABLE `publishs` DISABLE KEYS */;
INSERT INTO `publishs` VALUES (1,'Đào Phạm Co.LTD','Tổ 5, Ngách 19/2, Số nhà 245','0999999999','daodungdinh@gmail.com'),(2,'Thắng Cá Chép','Long Biên Hà Nội','0168987654','cachephoarong@gmail.com');
/*!40000 ALTER TABLE `publishs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publishs_products`
--

DROP TABLE IF EXISTS `publishs_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publishs_products` (
  `publish_id` int NOT NULL,
  `product_id` int NOT NULL,
  PRIMARY KEY (`publish_id`,`product_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `publishs_products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  CONSTRAINT `publishs_products_ibfk_2` FOREIGN KEY (`publish_id`) REFERENCES `publishs` (`publish_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publishs_products`
--

LOCK TABLES `publishs_products` WRITE;
/*!40000 ALTER TABLE `publishs_products` DISABLE KEYS */;
INSERT INTO `publishs_products` VALUES (1,1),(1,5);
/*!40000 ALTER TABLE `publishs_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'coffee_shop'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-25 10:14:43
