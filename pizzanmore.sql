-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 01, 2012 at 03:01 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foodorderingsystem`
--
CREATE DATABASE `foodorderingsystem` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `foodorderingsystem`;

-- --------------------------------------------------------

--
-- Table structure for table `201_john_orders`
--

CREATE TABLE IF NOT EXISTS `201_john_orders` (
  `product_id` varchar(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `201_john_orders`
--

INSERT INTO `201_john_orders` (`product_id`, `product_name`, `product_price`, `quantity`, `total_price`) VALUES
('burg01', 'Indian Chicken Burger', 105, 3, 315),
('burg04', 'Pinto Burger', 155, 1, 155),
('pizza03', 'Zesty Chicken Pizza', 360, 2, 720),
('refr02', 'Fanta Bottle', 30, 1, 30);

-- --------------------------------------------------------

--
-- Table structure for table `202_zubin_orders`
--

CREATE TABLE IF NOT EXISTS `202_zubin_orders` (
  `product_id` varchar(10) DEFAULT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `202_zubin_orders`
--

INSERT INTO `202_zubin_orders` (`product_id`, `product_name`, `product_price`, `quantity`, `total_price`) VALUES
('burg01', 'Indian Chicken Burger', 105, 3, 315),
('burg04', 'Pinto Burger', 155, 1, 155),
('pizza03', 'Zesty Chicken Pizza', 360, 1, 360);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `residence` bigint(150) NOT NULL,
  `cell_phone` bigint(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `room_number` varchar(10) NOT NULL,
  `floor_number` varchar(10) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  ` pincode` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `secret_question` varchar(50) NOT NULL,
  `secret_answer` varchar(50) NOT NULL,
  `isadmin` varchar(10) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `first_name`, `middle_name`, `last_name`, `residence`, `cell_phone`, `email`, `room_number`, `floor_number`, `street`, `city`, ` pincode`, `username`, `password`, `secret_question`, `secret_answer`, `isadmin`) VALUES
(201, 'John', 'Peter', 'Smith', 2222068135, 9819542720, 'jsmith@gmail.com', '101', '26', 'Seventh Avenue', 'Miami', 600002, 'jsmith', 'audi_a6', 'What is your first phone number?', '2233', 'yes'),
(202, 'Zubin', 'Kerman', 'Kadva', 2222068135, 9819542720, 'zubinkadva@hotmail.com', '605', '4', 'JSS Road', 'Mumbai', 400002, 'zkk', 'aud', 'What is the name of your favourite teacher?', 'Miss Me', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` varchar(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_description` text NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_description`, `product_category`, `product_price`, `product_image`) VALUES
('burg01', 'Indian Chicken Burger', 'Mango chutney rounds off this delicious Indian inspired burger.', 'burgers', 105, 'images_menu/2660_l.jpg'),
('burg02', 'Spicy Chicken Burger', 'Spicy and classic Indian burger with hot n'' spicy herbs', 'burgers', 135, 'images_menu/spicy indian-bu.jpg'),
('burg03', 'Black Bean Burger', 'Home made quick black bean burger with spicy sauce and ketchup', 'burgers', 165, 'images_menu/bean-burger-l.jpg'),
('burg04', 'Pinto Burger', 'Hominy Pinto Burger with roasted Pablono Chiles', 'burgers', 155, 'images_menu/pinto-burgers.jpg'),
('pizza01', 'Tomato & Cheese Pizza', 'Classic Pizza with tomato and cheese\r\n2.5 Inches\r\nServes 2', 'pizza', 170, 'images_menu/cheese & tomato.jpg'),
('pizza02', 'Farm House', 'Onion, Crisp Capsicum, Mushroom and Fresh Tomato\r\n25.4 cms. 10"\r\nServes 2', 'pizza', 255, 'images_menu/farm house.jpg'),
('pizza03', 'Zesty Chicken Pizza', 'Zesty Chicken Sausage, Barbeque Chicken, Capsicum and Red Paprika\r\n25.4 cms. 10"\r\nServes 2', 'pizza', 360, 'images_menu/zesty.jpg'),
('pizza04', 'Chicken Mexicana', 'Onion, Fresh Tomato, Red Pepper, Hot n'' Spicy Chicken, Sprinkled with Exotic Mexican Herbs', 'pizza', 360, 'images_menu/Dish14-chicken-mexicana.jpg'),
('refr01', 'Coke Bottle ', '600 ml.', 'refreshments', 30, 'images_menu/coke-bottle.jpg'),
('refr02', 'Fanta Bottle', '600 ml.', 'refreshments', 30, 'images_menu/fanta-600-ml-bottle.jpg'),
('refr03', 'Sprite Bottle', '600 ml.', 'refreshments', 30, 'images_menu/sprite.jpg'),
('side01', 'Butterscotch Mousse Cake', 'Cold Dessert Mousse Cake with a tinge of Butterscotch Flavour', 'side_orders', 59, 'images_menu/butterscotch mousse cake.jpg'),
('side02', 'Chicken Kickers', 'Hot n'' Fresh Chicken Pieces (Boneless) with Spicy Herbs and Tartar Sauce Dip\r\n5 pcs.', 'side_orders', 105, 'images_menu/chicken Kickers.jpg'),
('side03', 'Chicken Wings', 'Spicy Chicken Legs (with Bone) covered in Spicy Tangy Sauce', 'side_orders', 110, 'images_menu/chicken wings.jpg'),
('side04', 'Potato Wedges', 'Crispy Potato Chips thick in size with delicious spicy covering', 'side_orders', 55, 'images_menu/potato wedges.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
