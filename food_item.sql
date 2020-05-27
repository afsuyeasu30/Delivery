-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2019 at 08:48 AM
-- Server version: 5.1.54
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_item`
--

CREATE TABLE IF NOT EXISTS `food_item` (
  `f_id` int(4) NOT NULL,
  `food_name` varchar(50) NOT NULL,
  `price` int(4) NOT NULL,
  `img` varchar(70) NOT NULL,
  `f_description` varchar(255) NOT NULL,
  `fc_category` int(5) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_item`
--

INSERT INTO `food_item` (`f_id`, `food_name`, `price`, `img`, `f_description`, `fc_category`) VALUES
(1, 'Blue Berry', 50, '', 'Contaminant free, Fresh and pure, No added preservative', 1),
(2, 'Clear Lemon', 40, '', 'Long shelf life,  Excellent taste, Free from artificial preservative', 1),
(3, 'Clear Masala', 40, '', 'Contaminant free, Fresh and pure, No added preservative', 1),
(4, 'Cream Soda', 50, '', 'A sweet carbonated drink with a vanilla flavor', 1),
(5, 'Ghatt Mango', 50, '', 'Contaminant free, Fresh and pure, No added preservative', 1),
(6, 'Masala Soda', 40, '', 'Maximum taste. Zero calories', 1),
(7, 'Sahi Gulab Rose', 50, '', 'Contaminant free, Fresh and pure, No added preservative', 1),
(8, 'Coca Cola Light', 0, '', 'sugar and calorie free with a deliciously crisp taste', 1),
(9, 'Soda Water', 30, '', 'A sweet carbonated drink ', 1),
(10, 'Ginger ale', 40, '', 'sugar and calorie free with a deliciously crisp taste', 1),
(11, 'Litchi Soft drink', 40, '', 'Free from contaminants,  Long shelf life, No preservatives added', 1),
(12, 'Water', 25, '', 'Fresh and Pure', 1),
(13, 'Blueberry Soft Drink', 50, '', 'Free from artificial colors Pure and fresh Excellent taste', 1),
(14, 'Black Current soft drink', 50, '', 'Long shelf life,  Excellent taste, Free from artificial preservative', 1),
(15, 'Cold Drinks (Sprite, Coca Cola, Thums up, 7 up)', 40, '', 'A sweet carbonated drink ', 1),
(16, 'Banana shake', 70, '', 'Maximum taste. Zero calories', 2),
(17, 'Fresh Mango shake', 75, '', 'sugar and calorie free with a deliciously crisp taste', 2),
(18, 'Chocolate Shake', 80, '', 'Long shelf life,  Excellent taste', 2),
(19, 'Chunky Monkey Milkshake', 85, '', 'A sweet carbonated drink ', 2),
(20, 'Chocolate Peanut Butter Milkshake', 75, '', 'Long shelf life,  Excellent taste, Free from artificial preservative', 2),
(21, 'Malted Milkshake', 70, '', 'Maximum taste. Zero calories', 2),
(22, 'Blueberry Breakfast Milkshake', 80, '', 'A sweet carbonated drink ', 2),
(23, 'Fresh Coconut juice ', 60, '', 'Maximum taste. Zero calories', 2),
(24, 'Lemon juice', 50, '', 'Maximum taste. Zero calories', 2),
(25, 'Fresh Watermelon juice', 50, '', 'Maximum taste. Zero calories', 2),
(26, 'Cranberry juice', 60, '', 'A sweet carbonated drink ', 2),
(27, 'Rose''s Lime juice', 50, '', 'Long shelf life,  Excellent taste, Free from artificial preservative', 2),
(28, 'Lassi', 60, '', 'sugar and calorie free with a deliciously crisp taste', 2),
(29, 'Mango Lassi', 70, '', 'A sweet carbonated drink with a mango flavor', 2),
(30, 'coffee', 40, '', 'Trust the taste. Share the tradition', 3),
(31, 'Hot tea', 30, '', 'Trust the taste. Share the tradition', 3),
(32, 'Green tea', 35, '', 'Taste of relaxation', 3),
(33, 'Hot Chocolate Tea', 55, '', 'Keep heart delight', 3),
(34, 'Harbal Tea', 50, '', 'A healthy sip! Say Aahhhha!!', 3),
(35, 'Irish coffee', 65, '', ' Balance and harmony for body and mind', 3),
(36, 'Butter Tea', 70, '', 'Blended to make every day a little better', 3),
(37, 'Caramel Coconut Iced coffee', 80, '', 'Tasty Healthy Nutritious', 4),
(38, 'Chocolate Peanut Butter Iced coffee', 90, '', ' A deliciously crisp taste', 4),
(39, 'Vietnamese Iced coffee', 90, '', 'Trust the taste. Share the tradition', 4),
(40, 'Cold Brewed coffee', 90, '', 'A mind refreshment drink ', 4),
(41, 'Iced Caramel Macchiato', 95, '', 'Long shelf life,  Excellent taste, Free from artificial preservative', 4),
(42, 'Creamy Iced coffee', 85, '', 'A teasty sip! Say Aahhhha!!', 4),
(43, 'Cappuccino on Ice', 100, '', 'Long shelf life,  Excellent taste, Free from artificial preservative', 4),
(44, 'Luger Burger', 65, '', 'Burger and divine taste', 5),
(45, ' Whiskey King Burger', 85, '', 'Get Your Burger''s Worth', 5),
(46, 'Chargrilled Burger with Roquefort Cheese', 99, '', 'Quality Just Tastes Better!', 5),
(47, ' Dyer’s Deep-Fried Burger', 85, '', 'Tastier burgers and more funner!', 5),
(48, 'Cheeseburger', 70, '', 'It''s Flaming Tasty', 5),
(49, ' Raw Steak Tartare Burger', 85, '', 'The original flame-grilled taste', 5),
(50, 'Buckhorn Burger', 65, '', 'Tastier burgers and more funner!', 5),
(51, 'Double Patty Cheeseburger', 99, '', 'Burger King- It just tastes better', 5),
(52, ' Steamed Cheeseburger', 65, '', 'When you have it your way, it just tastes better', 5),
(53, 'Peanut Butter Bacon Burger', 80, '', 'Taste Is King', 5),
(54, 'Green-Chile Burgers with Fried Eggs', 85, '', 'Quality Just Tastes Better!', 5),
(55, 'Chile-Stuffed Cheeseburger', 99, '', 'Tastier burgers and more funner!', 5),
(56, 'Macaroni And Cheese Pizza', 150, '', 'Crispy Crust,with Luxurious Cheese', 6),
(57, 'Butternut Squash and Crispy Sage Pizza', 130, '', 'Crispy Crust with Savory Sauce', 6),
(58, 'Buffalo Chicken Pizza Sticks', 160, '', 'Pizza and divine taste', 6),
(59, 'Hummus And Grilled Zucchini Pizzas', 130, '', 'Long shelf life,  Excellent taste, Free from artificial preservative', 6),
(60, 'Chicken Alfredo Pizza', 160, '', 'Crispy Crust and  Luxurious Cheese', 6),
(61, 'Savoy Cabbage And Sunchoke Pizza', 140, '', 'Crispy Crust and  Luxurious Cheese', 6),
(62, 'Squid Pizza With Saffron Aioli', 170, '', 'Crispy Crust and  Luxurious Cheese', 6),
(63, 'Turkish Ground-Lamb Pizzas', 160, '', 'Crispy Crust with Savory Sauce', 6),
(64, 'Loaded Baked Potato Pizza', 130, '', 'Crispy Crust,with Luxurious Cheese', 6),
(65, 'Blueberry Pizza with Whipped Ricotta + Caramelized', 210, '', 'Crispy Crust with Savory Sauce', 6),
(66, 'Crispy Calamari Rings', 90, '', 'crispy alongside parsley sprig and thai chilli sauce', 7),
(67, 'Chicken Shami Kebab', 110, '', 'spicy morsels of chicken with red chilli flakes.', 7),
(68, 'Chicken Tikka Croquette', 120, '', 'Succulent deep fried meat kebabs', 7),
(69, 'Murgh Highway Tikka', 90, '', 'spicy boneless morsels of chicken with red chilli flakes', 7),
(70, 'Marinated Kebab', 100, '', 'Succulent deep fried meat kebabs', 7),
(71, 'Crispy Chicken fry', 90, '', 'Crispy Crust,with Luxurious Cheese', 7),
(72, 'Chicken Cutlate', 110, '', 'Delicious & crispy fried ', 7),
(73, 'Kakori Kebabs', 150, '', 'Long shelf life,  Excellent taste, Free from artificial preservative', 7),
(74, 'Microwave Paneer Tikka', 120, '', 'Crispy Crust,with Luxurious Cheese', 7),
(75, 'Cheese Balls', 130, '', 'crispy alongside parsley sprig ', 7),
(76, ' Chicken Satay', 170, '', 'It''s Flaming Tasty', 7),
(77, ' Bhuna Masala Chicken Wings', 180, '', 'Delicious & crispy fried ', 7),
(78, 'Crumb-Fried Chicken', 170, '', 'crispy alongside parsley sprig and thai chilli sauce', 7),
(79, 'Hara Bhara Kebab', 140, '', 'Crispy Crust and  Luxurious Cheese', 7),
(80, 'Crispy Paneer Schezwan', 140, '', 'crispy alongside parsley sprig ', 7),
(81, 'Dry Chilli Baby Corn', 130, '', 'Crispy Crust and  Luxurious Cheese', 7),
(82, 'Crispy chili baby corn', 140, '', 'crispy alongside parsley sprig and thai chilli sauce', 7),
(83, 'Mushroom 65', 170, '', 'Delicious & crispy fried ', 7),
(84, 'Paneer Tikka Dry', 130, '', 'Delicious & crispy fried ', 7),
(85, 'Paneer 65', 110, '', 'Crispy Crust and  Luxurious Cheese', 7),
(86, 'Blueberry Cheesecake Ice Cream', 130, '', 'Change the World, One Scoop at a time.', 8),
(87, 'Ice Cream Cookie Dessert', 140, '', 'A taste of heaven on earth.', 8),
(88, 'Lemon Gelato', 130, '', 'A taste of heaven on earth.', 8),
(89, 'Summer Celebration Ice Cream Cake', 150, '', 'A smile in every scoop', 8),
(90, 'Cherry Bombs', 150, '', 'A taste of heaven on earth.', 8),
(91, 'Baked Alaska Cups', 170, '', 'A taste of heaven on earth.', 8),
(92, 'Toasted Java Chip Crumble', 140, '', 'A taste of heaven on earth.', 8),
(93, 'Crepes with Chocolate Ice Cream and Raspberry Coul', 180, '', 'A taste of heaven on earth.', 8);
