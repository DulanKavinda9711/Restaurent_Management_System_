-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2023 at 08:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theoutercloverest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'admin', 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `product` varchar(20) NOT NULL,
  `quantity` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Veg'),
(2, 'Non Veg');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(10) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_mobile` varchar(10) NOT NULL,
  `contact_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `contact_name`, `contact_email`, `contact_mobile`, `contact_message`) VALUES
(4, 'Dulan', 'dulan@gmail.com', '0702312345', 'Excellent Service. Tatsey Food. ');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` text NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `mobile`, `email`, `address`, `password`) VALUES
('Dulan', '0702312345', 'dulan@gmail.com', 'Kandy, Sri Lanka', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `customer_email` varchar(60) NOT NULL,
  `order_time` datetime NOT NULL,
  `order_summary` varchar(400) NOT NULL,
  `order_total` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `product_title` text NOT NULL,
  `product_img` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `max_quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `product_title`, `product_img`, `product_price`, `product_desc`, `max_quantity`) VALUES
(24, 1, 2, 'Fried Rice Special', 'Fried Rice.jpeg', 800, 'Indulge in the aromatic symphony of our signature fried rice, wok-charred to perfection. Each grain of fragrant jasmine rice dances with the tantalizing flavors of soy sauce, garlic, and sesame oil, embracing a vibrant medley of colorful vegetables. The stir-frying technique locks in the essence of the wok, ensuring a delightful crunch in every bite. Choose from classic vegetable, chicken, beef, or shrimp variations for a satisfying and savory journey that captures the essence of Asian culinary mastery.                              \r\n                          ', 10),
(25, 1, 1, 'Penne Pasta', 'Pasta.jpg', 600, 'Elevate your dining experience with our artisan-crafted pasta dishes. Immerse your senses in a symphony of flavors as al dente pasta mingles with rich, house-made sauces.                               \r\n                          ', 4),
(26, 1, 2, 'Fried spring rolls ', 'springrolls.jpg', 350, 'Embark on a delightful journey with our Crispy Harmony Spring Rolls. Impeccably hand-rolled, these golden wonders unveil a symphony of textures and flavors. Each delicate rice paper parcel embraces a vibrant ensemble of fresh vegetables, aromatic herbs, and your choice of succulent protein, all harmonizing within a crisp, golden shell.                              \r\n                          ', 7),
(27, 1, 1, 'Loaded Tacos', 'Tacos.jpg', 200, 'Experience the vibrant spirit of street food with our mouthwatering tacos. Each handcrafted tortilla cradles a symphony of flavors, from savory grilled meats to fresh, crisp toppings. Elevate your taste buds with a burst of zesty salsa and the perfect dash of lime.                              \r\n                          ', 8),
(28, 2, 2, 'Chicken Biriyani', 'Biriyani.jpg', 750, 'Indulge in the regal allure of our signature biryani—a culinary masterpiece that transcends time and tradition. Fragrant basmati rice, infused with a symphony of aromatic spices, cradles succulent pieces of marinated meat, creating a melody of flavors in every bite.                              \r\n                          ', 6),
(29, 1, 1, 'String hoppers', 'String hoppers.jpg', 250, 'Transport your taste buds to the vibrant streets of Sri Lanka with our exquisite String Hoppers. Delicate nests of steamed rice flour vermicelli, artfully woven into a tapestry, serve as the perfect canvas for an array of flavorful curries.', 5),
(30, 1, 2, 'Egg Hoppers', 'Hoppers.jpg', 25, 'Embark on a culinary journey to Sri Lanka with our exquisite Hoppers. These bowl-shaped, fermented rice flour pancakes boast a delightful crispy edge and a soft, fluffy center. Served with a choice of delectable toppings, from the traditional egg hopper to savory curries, each bite is a symphony of textures and flavors', 10),
(31, 2, 2, 'Kebab', 'Kebab.jpg', 250, 'Indulge your palate in an exquisite journey of flavors with our grilled kebabs. Each skewer is a masterpiece of perfectly seasoned meats, vibrant vegetables, and aromatic spices, all expertly grilled to juicy perfection. ', 10),
(32, 2, 2, 'spaghetti', 'spaghetti with meatballs.jpg', 550, 'Treat yourself to a comforting classic with our Spaghetti and Meatballs. Perfectly al dente spaghetti paired with hand-rolled, savory meatballs, generously coated in rich marinara sauce. Each bite is a nostalgic journey, bringing you the warmth and satisfaction of home-cooked goodness.                              \r\n                          ', 6),
(33, 2, 2, 'Chicken Burger', 'burger.jpg', 650, 'Satisfy your cravings with our mouthwatering burgers, where every bite is a celebration of flavor. Sink your teeth into juicy, handcrafted patties, grilled to perfection and nestled within a fresh, soft bun', 4),
(34, 2, 1, 'Veggie Pastry', 'Vegi pastry.jpg', 100, 'Experience a symphony of flavors in every flaky bite with our Veggie Pastry. This delightful creation features a buttery, golden crust embracing a medley of garden-fresh vegetables, carefully seasoned and baked to perfection.', 10),
(35, 2, 1, 'Cheese pizza', 'Pizza.jpg', 850, 'Indulge in the simplicity of our Classic Cheese Pizza. A canvas of golden, thin crust topped with a perfect blend of melted mozzarella and Parmesan cheeses. Each slice delivers a gooey, savory sensation that embodies the essence of pure pizza perfection. ', 5),
(36, 3, 1, 'Noodles', 'noodles.jpg', 300, 'Embark on a journey of taste and texture with our exquisite noodle dishes. Silken strands of perfectly cooked noodles, expertly crafted to absorb the essence of our signature sauces.', 4),
(37, 3, 2, 'Chicken Kottu', 'Chicken Kottu.jpg', 450, 'Immerse yourself in the rhythm of our Chicken Kottu, a beloved street food sensation elevated to gourmet perfection. Hear the sizzle as our skilled chefs chop and stir-fry tender chicken with an orchestra of spices.', 5),
(38, 3, 0, 'Rice and curry', 'rice and curry.jpg', 200, 'Embark on a culinary journey to the teardrop isle with our Sri Lankan Rice and Curry. Fragrant basmati rice, perfectly cooked and paired with an array of vibrant curries that dance with the flavors of coconut, spices, and aromatic herbs.', 4),
(39, 4, 0, 'Ice Cream', 'ice cream.jpg', 200, 'Indulge in pure bliss with our decadent ice cream. Each velvety scoop is a symphony of rich, creamy flavors, crafted with the finest ingredients. From classic vanilla to indulgent chocolate swirls and adventurous fruit infusions, our ice cream promises to whisk you away to a world of sweet satisfaction.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`) VALUES
(1, 'Breakfast'),
(2, 'Lunch'),
(3, 'Dinner'),
(4, 'Desserts');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservation_id` int(10) NOT NULL,
  `reservation_name` varchar(255) NOT NULL,
  `reservation_mobile` varchar(10) NOT NULL,
  `reservation_email` varchar(255) NOT NULL,
  `reservation_time` time NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_people` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `reservation_name`, `reservation_mobile`, `reservation_email`, `reservation_time`, `reservation_date`, `reservation_people`) VALUES
(6, 'Dulan', '0702312345', 'dulan@gmail.com', '19:43:00', '2023-12-25', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
