-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2019 at 09:16 PM
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
  `fc_catagory` int(5) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_item`
--

INSERT INTO `food_item` (`f_id`, `food_name`, `price`, `img`, `f_description`, `fc_catagory`) VALUES
(1, 'Blue Berry', 50, 'images/155802610372225cdd9777b3c6b.jpg', 'Contaminant free, Fresh and pure, No added preservative', 1),
(2, 'Clear Lemon', 40, 'images/1558026175100395cdd97bf653ef.jpg', 'Long shelf life,  Excellent taste, Free from artificial preservative', 1),
(3, 'Clear Masala', 40, 'images/155802629793805cdd9839c69a4.jpg', 'Contaminant free, Fresh and pure, No added preservative', 1),
(4, 'Cream Soda', 50, 'images/1558026361167865cdd987918392.jpg', 'A sweet carbonated drink with a vanilla flavor', 1),
(5, 'Ghatt Mango', 50, 'images/1558026390169095cdd98963d3e6.jpg', 'Contaminant free, Fresh and pure, No added preservative', 1),
(6, 'Masala Soda', 40, 'images/1558026436178585cdd98c46720a.jpg', 'Maximum taste. Zero calories', 1),
(7, 'Sahi Gulab Rose', 50, 'images/1558026486327235cdd98f627a16.jpg', 'Contaminant free, Fresh and pure, No added preservative', 1),
(8, 'Coca Cola Light', 0, 'images/155802652159875cdd991928828.jpg', 'sugar and calorie free with a deliciously crisp taste', 1),
(9, 'Soda Water', 30, 'images/1558026651263845cdd999b69e7e.jpg', 'A sweet carbonated drink ', 1),
(10, 'Ginger ale', 40, 'images/1558026688203205cdd99c081faf.jpg', 'sugar and calorie free with a deliciously crisp taste', 1),
(11, 'Litchi Soft drink', 40, 'images/1558026743153855cdd99f73459d.jpg', 'Free from contaminants,  Long shelf life, No preservatives added', 1),
(12, 'Water', 25, 'images/1558026910258225cdd9a9e6d5a7.jpg', 'Fresh and Pure', 1),
(13, 'Blueberry Soft Drink', 50, 'images/1558027072291935cdd9b4062aff.jpg', 'Free from artificial colors Pure and fresh Excellent taste', 1),
(14, 'Black Current soft drink', 50, 'images/1558027104317585cdd9b60b2ece.jpg', 'Long shelf life,  Excellent taste, Free from artificial preservative', 1),
(15, 'Cold Drinks (Sprite, Coca Cola, Thums up, 7 up)', 40, 'images/1558027192179675cdd9bb8202fb.jpg', 'A sweet carbonated drink ', 1),
(16, 'Banana shake', 70, 'images/1558027237181115cdd9be533b1b.jpg', 'Maximum taste. Zero calories', 2),
(17, 'Fresh Mango shake', 75, 'images/155802728393605cdd9c13c6c76.jpg', 'sugar and calorie free with a deliciously crisp taste', 2),
(18, 'Chocolate Shake', 80, 'images/15580274393965cdd9caef41ea.jpg', 'Long shelf life,  Excellent taste', 2),
(19, 'Chunky Monkey Milkshake', 85, 'images/155802747685855cdd9cd48559c.jpg', 'A sweet carbonated drink ', 2),
(20, 'Chocolate Peanut Butter Milkshake', 75, 'images/15580275352135cdd9d0f1f3ff.jpg', 'Long shelf life,  Excellent taste, Free from artificial preservative', 2),
(21, 'Malted Milkshake', 70, 'images/1558027570137105cdd9d32c52c6.jpg', 'Maximum taste. Zero calories', 2),
(22, 'Blueberry Breakfast Milkshake', 80, 'images/1558027603289065cdd9d53164b3.jpg', 'A sweet carbonated drink ', 2),
(23, 'Fresh Coconut juice ', 60, 'images/155802789740595cdd9e796705f.jpg', 'Maximum taste. Zero calories', 2),
(24, 'Lemon juice', 50, 'images/1558027930168155cdd9e9aa4865.jpg', 'Maximum taste. Zero calories', 2),
(25, 'Fresh Watermelon juice', 50, 'images/1558028015311645cdd9eef1c64b.jpg', 'Maximum taste. Zero calories', 2),
(26, 'Cranberry juice', 60, 'images/1558028090256605cdd9f3a4c8e5.jpg', 'A sweet carbonated drink ', 2),
(27, 'Rose''s Lime juice', 50, 'images/155802812596695cdd9f5d48afd.jpg', 'Long shelf life,  Excellent taste, Free from artificial preservative', 2),
(28, 'Lassi', 60, 'images/1558028155192265cdd9f7b13ba5.jpg', 'sugar and calorie free with a deliciously crisp taste', 2),
(29, 'Mango Lassi', 70, 'images/1558028209197815cdd9fb1c9e09.jpg', 'A sweet carbonated drink with a mango flavor', 2),
(30, 'coffee', 40, 'images/1558028235108725cdd9fcbc8802.jpg', 'Trust the taste. Share the tradition', 3),
(31, 'Hot tea', 30, 'images/1558028372218415cdda05445e6b.jpg', 'Trust the taste. Share the tradition', 3),
(32, 'Green tea', 35, 'images/155802840957075cdda0790f594.jpg', 'Taste of relaxation', 3),
(33, 'Hot Chocolate Tea', 55, 'images/155802843520885cdda093e637f.jpg', 'Keep heart delight', 3),
(34, 'Harbal Tea', 50, 'images/1558028461127265cdda0ad784d3.jpg', 'A healthy sip! Say Aahhhha!!', 3),
(35, 'Irish coffee', 65, 'images/1558028492228495cdda0cce7ae4.jpg', ' Balance and harmony for body and mind', 3),
(36, 'Butter Tea', 70, 'images/1558028518201515cdda0e6c4ba4.jpg', 'Blended to make every day a little better', 3),
(37, 'Caramel Coconut Iced coffee', 80, 'images/1558028553324865cdda109870e1.jpg', 'Tasty Healthy Nutritious', 4),
(38, 'Chocolate Peanut Butter Iced coffee', 90, 'images/1558028587194955cdda12bab5a1.jpg', ' A deliciously crisp taste', 4),
(39, 'Vietnamese Iced coffee', 90, '', 'Trust the taste. Share the tradition', 4),
(40, 'Cold Brewed coffee', 90, '', 'A mind refreshment drink ', 4),
(41, 'Iced Caramel Macchiato', 95, '', 'Long shelf life,  Excellent taste, Free from artificial preservative', 4),
(42, 'Creamy Iced coffee', 85, '', 'A teasty sip! Say Aahhhha!!', 4),
(43, 'Cappuccino on Ice', 100, '', 'Long shelf life,  Excellent taste, Free from artificial preservative', 4),
(44, 'Luger Burger', 65, 'images/1558028633324685cdda159bcf68.jpg', 'Burger and divine taste', 5),
(45, ' Whiskey King Burger', 85, 'images/1558028683185575cdda18b3544d.jpg', 'Get Your Burger''s Worth', 5),
(46, 'Chargrilled Burger with Roquefort Cheese', 99, 'images/1558028725302445cdda1b5bf67b.jpg', 'Quality Just Tastes Better!', 5),
(47, ' Dyer’s Deep-Fried Burger', 85, 'images/155802875490745cdda1d2bcd76.jpg', 'Tastier burgers and more funner!', 5),
(48, 'Cheeseburger', 70, 'images/1558028779300935cdda1ebf3fc8.jpg', 'It''s Flaming Tasty', 5),
(49, ' Raw Steak Tartare Burger', 85, 'images/1558028808131225cdda20849e2b.jpg', 'The original flame-grilled taste', 5),
(50, 'Buckhorn Burger', 65, 'images/155802883280195cdda220d7031.jpg', 'Tastier burgers and more funner!', 5),
(51, 'Double Patty Cheeseburger', 99, 'images/1558028863206245cdda23fbf029.jpg', 'Burger King- It just tastes better', 5),
(52, ' Steamed Cheeseburger', 65, 'images/155802917312145cdda375ed840.jpg', 'When you have it your way, it just tastes better', 5),
(53, 'Peanut Butter Bacon Burger', 80, 'images/155802921564315cdda39f81330.jpg', 'Taste Is King', 5),
(54, 'Green-Chile Burgers with Fried Eggs', 85, '', 'Quality Just Tastes Better!', 5),
(55, 'Chile-Stuffed Cheeseburger', 99, '', 'Tastier burgers and more funner!', 5),
(56, 'Macaroni And Cheese Pizza', 150, 'images/1558029107285375cdda3334f488.jpg', 'Crispy Crust,with Luxurious Cheese', 6),
(57, 'Butternut Squash and Crispy Sage Pizza', 130, 'images/1558029058133765cdda3025d181.jpg', 'Crispy Crust with Savory Sauce', 6),
(58, 'Buffalo Chicken Pizza Sticks', 160, 'images/1558029017167825cdda2d9c2f35.jpg', 'Pizza and divine taste', 6),
(59, 'Hummus And Grilled Zucchini Pizzas', 130, 'images/1558028989239455cdda2bd84e00.jpg', 'Long shelf life,  Excellent taste, Free from artificial preservative', 6),
(60, 'Chicken Alfredo Pizza', 160, 'images/15580289619635cdda2a1695d3.jpg', 'Crispy Crust and  Luxurious Cheese', 6),
(61, 'Savoy Cabbage And Sunchoke Pizza', 140, '', 'Crispy Crust and  Luxurious Cheese', 6),
(62, 'Squid Pizza With Saffron Aioli', 170, '', 'Crispy Crust and  Luxurious Cheese', 6),
(63, 'Turkish Ground-Lamb Pizzas', 160, '', 'Crispy Crust with Savory Sauce', 6),
(64, 'Loaded Baked Potato Pizza', 130, '', 'Crispy Crust,with Luxurious Cheese', 6),
(65, 'Blueberry Pizza with Whipped Ricotta + Caramelized', 210, '', 'Crispy Crust with Savory Sauce', 6),
(66, 'Crispy Calamari Rings', 90, 'images/155802965026135cdda552d8a97.jpg', 'crispy alongside parsley sprig and thai chilli sauce', 7),
(67, 'Chicken Shami Kebab', 110, 'images/1558029388216125cdda44cd3abe.jpg', 'spicy morsels of chicken with red chilli flakes.', 7),
(68, 'Chicken Tikka Croquette', 120, 'images/1558029688239835cdda57876afa.jpg', 'Succulent deep fried meat kebabs', 7),
(69, 'Murgh Highway Tikka', 90, 'images/1558029718260445cdda596ab5d4.jpg', 'spicy boneless morsels of chicken with red chilli flakes', 7),
(70, 'Marinated Kebab', 100, 'images/1558030084119785cdda7040c960.jpg', 'Succulent deep fried meat kebabs', 7),
(71, 'Crispy Chicken fry', 90, 'images/1558030051267785cdda6e30773b.jpg', 'Crispy Crust,with Luxurious Cheese', 7),
(72, 'Chicken Cutlate', 110, 'images/1558030024187575cdda6c856d65.jpg', 'Delicious & crispy fried ', 7),
(73, 'Kakori Kebabs', 150, 'images/1558031577235495cddacd9a2f32.jpg', 'Long shelf life,  Excellent taste, Free from artificial preservative', 7),
(74, 'Microwave Paneer Tikka', 120, 'images/155803154433515cddacb801166.jpg', 'Crispy Crust,with Luxurious Cheese', 7),
(75, 'Cheese Balls', 130, 'images/1558031503123725cddac8fda14b.jpg', 'crispy alongside parsley sprig ', 7),
(76, ' Chicken Satay', 170, 'images/1558031456280545cddac6027d14.jpg', 'It''s Flaming Tasty', 7),
(77, ' Bhuna Masala Chicken Wings', 180, '', 'Delicious & crispy fried ', 7),
(78, 'Crumb-Fried Chicken', 170, '', 'crispy alongside parsley sprig and thai chilli sauce', 7),
(79, 'Hara Bhara Kebab', 140, '', 'Crispy Crust and  Luxurious Cheese', 7),
(80, 'Crispy Paneer Schezwan', 140, 'images/1558032519108145cddb0873c75f.jpg', 'crispy alongside parsley sprig ', 7),
(81, 'Dry Chilli Baby Corn', 130, 'images/1558032494150975cddb06e2317a.jpg', 'Crispy Crust and  Luxurious Cheese', 7),
(82, 'Crispy chili baby corn', 140, 'images/1558032467321925cddb0539b70a.jpg', 'crispy alongside parsley sprig and thai chilli sauce', 7),
(83, 'Mushroom 65', 170, 'images/15580324148355cddb01ec2adc.jpg', 'Delicious & crispy fried ', 7),
(84, 'Paneer Tikka Dry', 130, 'images/1558032000176685cddae80bb6c3.jpg', 'Delicious & crispy fried ', 7),
(85, 'Paneer 65', 110, 'images/1558031968289145cddae605d6ec.jpg', 'Crispy Crust and  Luxurious Cheese', 7),
(86, 'Blueberry Cheesecake Ice Cream', 130, 'images/1558030370102995cdda82250714.jpg', 'Change the World, One Scoop at a time.', 8),
(87, 'Ice Cream Cookie Dessert', 140, 'images/155803023296755cdda7987a749.jpg', 'A taste of heaven on earth.', 8),
(88, 'Lemon Gelato', 130, 'images/155803026086165cdda7b4efa50.jpg', 'A taste of heaven on earth.', 8),
(89, 'Summer Celebration Ice Cream Cake', 150, 'images/1558030296135055cdda7d8383e2.jpg', 'A smile in every scoop', 8),
(90, 'Cherry Bombs', 150, 'images/1558030320297985cdda7f076899.jpg', 'A taste of heaven on earth.', 8),
(91, 'Baked Alaska Cups', 170, 'images/1558030411214155cdda84bb1f56.jpg', 'A taste of heaven on earth.', 8),
(92, 'Toasted Java Chip Crumble', 140, 'images/1558030440192885cdda868ee8a7.jpg', 'A taste of heaven on earth.', 8),
(93, 'Crepes with Chocolate Ice Cream and Raspberry Coul', 180, 'images/155803046652975cdda882dd3e9.jpg', 'A taste of heaven on earth.', 8);
