-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2018 at 07:28 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_corner`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `acc_type` varchar(60) NOT NULL,
  `c_address_id` int(11) NOT NULL,
  `c_fname` varchar(30) DEFAULT NULL,
  `c_mname` varchar(30) DEFAULT NULL,
  `c_lname` varchar(30) DEFAULT NULL,
  `c_pno` varchar(30) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `c_pass` varchar(255) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `acc_type`, `c_address_id`, `c_fname`, `c_mname`, `c_lname`, `c_pno`, `c_email`, `c_pass`, `time_created`) VALUES
(26, 'admin', 26, 'Emmanuelle', 'Mateus', 'Mateo', '9236825841', 'primebeast@ymail.com', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', '2018-03-21 09:09:48'),
(27, 'user', 27, NULL, NULL, NULL, '09353703879', 'genesys0880@gmail.com', '7590e72e87d43394fabd7fc79bfc6197', '2018-03-22 13:31:13');

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `caddress_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `c_id` varchar(255) NOT NULL,
  `address_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`caddress_id`, `address`, `c_id`, `address_id`) VALUES
(22, '281', '22', 1),
(21, 'Playa St., Balut, Tondo, 287C', '21', 1),
(20, '287C Playa St. Balut Tondo', '20', 1),
(23, '287C Playa St. Balut Tondo', '23', 1),
(24, '287C Playa St. Balut Tondo', '24', 1),
(25, '287C Playa St. Balut Tondo', '25', 1),
(26, '287C Playa St. Balut Tondo', '26', 1),
(27, '3424 B.A. Tan St., Barrio Obrero Tondo, Manila', '27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_price` varchar(60) NOT NULL,
  `order_comment` text NOT NULL,
  `order_status` varchar(60) NOT NULL,
  `order_list_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `order_date`, `order_price`, `order_comment`, `order_status`, `order_list_id`, `c_id`, `payment_id`, `address_id`) VALUES
(13, '2018-03-23 06:00:35', '0', '', 'Delivering', 13, 26, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_payment`
--

CREATE TABLE `customer_payment` (
  `payment_id` varchar(60) NOT NULL,
  `c_id` varchar(60) NOT NULL,
  `payment_code` varchar(60) NOT NULL,
  `card_number` int(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `ing_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `ing_name` varchar(60) NOT NULL,
  `ing_quantity` varchar(60) NOT NULL,
  `ing_unit` varchar(60) NOT NULL,
  `ing_price` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`ing_id`, `s_id`, `ing_name`, `ing_quantity`, `ing_unit`, `ing_price`) VALUES
(1, 1, 'Tomato', '34', 'kg', '6'),
(2, 1, 'Potato', '34', 'kg', '6'),
(3, 0, 'Patatas', '', 'kg', ''),
(4, 0, 'Parmesan', '', 'gram/s', ''),
(5, 0, 'Water', '', 'ml/s', '');

-- --------------------------------------------------------

--
-- Table structure for table `ingridients_list`
--

CREATE TABLE `ingridients_list` (
  `ing_list_id` int(11) NOT NULL,
  `ing_id` int(11) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingridients_list`
--

INSERT INTO `ingridients_list` (`ing_list_id`, `ing_id`, `amount`) VALUES
(2, 1, 2),
(2, 2, 2),
(1, 1, 2),
(1, 2, 2),
(3, 2, 3),
(30, 5, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `my_cart`
--

CREATE TABLE `my_cart` (
  `c_id` varchar(255) NOT NULL,
  `r_id` bigint(20) NOT NULL,
  `amount` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_cart`
--

INSERT INTO `my_cart` (`c_id`, `r_id`, `amount`, `price`) VALUES
('26', 30, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_delivery`
--

CREATE TABLE `order_delivery` (
  `deliver_id` varchar(60) NOT NULL,
  `order_id` varchar(60) NOT NULL,
  `delivery_status` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `list_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`list_id`, `r_id`, `price`) VALUES
(13, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `r_id` bigint(20) NOT NULL,
  `ing_list_id` bigint(20) NOT NULL,
  `r_name` varchar(60) NOT NULL,
  `r_type` varchar(255) NOT NULL,
  `r_time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `r_id_region` varchar(60) NOT NULL,
  `r_country` varchar(60) NOT NULL,
  `r_photo` varchar(255) NOT NULL DEFAULT '0.jpeg',
  `recipe_text` text NOT NULL,
  `r_description` text NOT NULL,
  `r_price` int(11) NOT NULL,
  `r_time` int(11) NOT NULL,
  `r_serve` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`r_id`, `ing_list_id`, `r_name`, `r_type`, `r_time_created`, `r_id_region`, `r_country`, `r_photo`, `recipe_text`, `r_description`, `r_price`, `r_time`, `r_serve`) VALUES
(1, 1, 'Blue Tarts', 'Pastry', '2018-03-21 19:50:29', '1', 'Canada', '1.jpg', '1. Prepare muffin pans by rolling out pie dough and cutting 4-inch (approx) circles; fit dough circles into muffin cups; set aside in fridge until ready to fill.\r\n2. In a small bowl, place raisins and cover with hot tap water; let stand on the counter for 30 minutes.\r\n3. In a large bowl, using a wooden spoon, mix together the soft butter, brown sugar, salt and corn syrup; stir well until sugar is dissolved and butter is creamed.\r\n4. Add egg and vanilla and mix well.\r\n5. Drain raisins\r\n6. Retrieve tart shells and divide raisins equally into all shells; then divide butter mixture into all tarts\r\n7. Bake at 400F for 15-20 minutes; filling will be lightly browned but still bubbling.\r\n8. Canadians fall into two camps about butter tarts and are quite loyal to their favourite type: runny or firm.\r\n9. If you like firm, bake them for the full 20 minutes, even adding another minute or two if you wish.\r\n10. Let cooked butter tarts cool in pans for 10 minutes after removing from oven; then remove and place on racks until completely cool.\r\n', 'A butter tart is a type of small pastry tart highly regarded in Canadian cuisine and considered one of Canada\'s quintessential treats. It consists of a filling of butter, sugar, syrup, and egg, baked in a pastry shell until the filling is semi-solid with a crunchy top.', 0, 80, 4),
(4, 4, 'Poutine', '', '2018-03-22 13:45:11', '1', 'Canada', '2.jpeg', '1. Slice the potatoes lengthwise, about 1/4 inch thick. Stack the slices and cut lengthwise into 1/4-inch-thick sticks (or cut the potatoes into fries using a french fry cutter). Place in a large bowl filled with cold water and let sit at least 1 hour, or up to 24 hours for extra-crispy fries. Drain well and pat dry or spin dry in a salad spinner.\r\n2. Make the gravy: Heat 1 tablespoon vegetable oil in a saucepan over medium heat. Add the shallot and garlic and saute until translucent, about 3 minutes. Add the chicken and beef stock, ketchup, vinegar, peppercorns and Worcestershire sauce and bring to a boil.\r\n3. Meanwhile, in a separate saucepan, melt the butter over medium-high heat. Add the flour and make a roux, stirring until slightly browned, 2 to 3 minutes. Whisk the stock mixture into the roux and simmer until reduced by half, about 20 minutes. Season the gravy with salt and pepper and keep warm.\r\n4. Line a baking sheet with a double layer of paper towels. Heat 2 to 3 inches vegetable oil in a heavy-bottomed pot over medium-high heat until a deep-fry thermometer registers 350 degrees F (or use a deep fryer). Fry the potatoes in small batches until whitish yellow, about 8 minutes. Remove with a strainer and drain on the paper towels. Bring the oil temperature to 375 degrees F over high heat. Fry the potatoes in batches again until golden brown, 6 to 8 minutes. Drain on fresh paper towels. Salt and pepper the fries while hot. Strain the gravy.\r\n5. Put the fries in shallow dishes; top with the cheese curds and gravy.\r\n', 'Poutine is a dish originating from the Canadian province of Quebec consisting of French fries and cheese curds topped with a brown gravy.', 0, 0, 0),
(5, 5, 'Smoked Salmon', 'Main', '2018-03-22 13:47:31', '1', 'Canada', '3.jpg', '1. In a bowl, mix together salt, sugar, brown sugar and peppercorns. Spread extra-wide aluminum foil a little longer than the length of the fish and top with an equally long layer of plastic wrap\r\n2. Sprinkle 1/3 of the rub onto the plastic. Lay 1 side of the fish skin down onto the rub. Sprinkle 1/3 of the rub onto the flesh of the salmon. Place second side of salmon, flesh down onto the first side. Use the remaining rub to cover the skin on the top piece.\r\n3. Fold plastic over to cover then close edges of foil together and crimp tightly around the fish. Place wrapped fish onto a plank or sheet pan and top with another plank or pan. Weigh with a heavy phone book or a brick or two and refrigerate for 12 hours. Flip the fish over and refrigerate another 12 hours.\r\n4. Unwrap fish and rinse off the cure with cold water. Pat salmon with paper towels then place in a cool, dry place (not the refrigerator) until the surface of the fish is dry and matte-like, 1 to 3 hours depending on humidity.\r\n5. A fan may be used to speed the process. Smoke fish (see Note) over smoldering hardwood chips or sawdust, keeping the temperature inside the smoker between 150 degrees F and 160 degrees F until the thickest part of the fish registers 150 degrees. \r\n6. erve immediately or cool to room temperature, wrap tightly and refrigerate for up to 3 days. Cook\'s Note: Trout, mackerel, and bluefish also smoke well.\r\n', 'Smoked salmon is a preparation of salmon, typically a fillet that has been cured and hot or cold smoked. Due to its moderately high price, smoked salmon is considered a delicacy.', 0, 0, 0),
(6, 6, 'Split Pea Soup', '', '2018-03-22 13:49:25', '1', 'Canada', '4.jpg', '1. In a large stock pot, cover peas with 2 quarts cold water and soak overnight. If you need a faster method, simmer the peas gently for 2 minutes, and then soak for l hour.\r\n2. Once peas are soaked, add ham bone, onion, salt, pepper and marjoram. Cover, bring to boil and then simmer for 1 1/2 hours, stirring occasionally.\r\n3. Remove bone; cut off meat, dice and return meat to soup. Add celery, carrots and potatoes. Cook slowly, uncovered for 30 to 40 minutes, or until vegetables are tender.\r\n', 'Pea soup or split pea soup is soup made typically from dried peas, such as the split pea. It is, with variations, a part of the cuisine of many cultures. It is most often greyish-green or yellow in color depending on the regional variety of peas used; all are cultivars of Pisum sativum.', 0, 0, 0),
(7, 7, 'Arancini', '', '2018-03-22 13:49:25', '1', 'Italy', '5.jpg', '1. Heat the olive oil in a large saucepan over medium heat. Add onion and garlic, and cook, stirring until onion is soft but not browned. Pour in the rice, and cook stirring for 2 minutes, then stir in the wine, and continue cooking and stirring until the liquid has evaporated. Add hot chicken stock to the rice 1/3 cup at a time, stirring and cooking until the liquid has evaporated before adding more.\r\n2. When the chicken stock has all been added, and the liquid has evaporated, stir in the peas and ham. Season with salt and pepper. Remove from the heat, and stir in the Parmesan cheese. Transfer the risotto to a bowl, and allow to cool slightly.\r\n3. Stir the beaten egg into the risotto. In a small bowl, whisk together the remaining egg and milk with a fork. For each ball, roll 2 tablespoons of the risotto into a ball. Press a piece of the mozzarella cheese into the center, and roll to enclose. Coat lightly with flour, dip into the milk mixture, then roll in bread crumbs to coat.\r\n4. Heat oil for frying in a deep-fryer or large deep saucepan to 350 degrees F (175 degrees C). Fry the balls in small batches until evenly golden, turning as needed. Drain on paper towels. Keep warm in a low oven while the rest are frying.\r\n', 'Arancini are stuffed rice balls which are coated with bread crumbs and then deep fried. They are usually filled with ragù, mozzarella, and peas. A number of regional variants exist which differ in fillings and shape', 0, 0, 0),
(8, 8, 'Tortellini', 'Pasta', '2018-03-22 14:04:53', '1', 'Italy', '6.jpg', '1. In a large pot, bring 2 ½ cups broth to a boil. Add cheese tortellini. Return to a boil and cook about 5 minutes. The tortellini will float to the top when cooked and the internal temperature should be 165ºF for at least 15 seconds. Drain completely.\r\n2. Meanwhile, whisk together remaining 1 ½ cups broth with corn starch. In a large non-stick skillet, melt butter over medium-high heat until foaming. Stir in garlic and basil and cook about 2 minutes.\r\n3. Add broth-cornstarch mixture and bring to a boil; simmer until the mixture thickens. Add the cooked tortellini to the skillet and toss to coat. \r\n4. Pour into a serving dish and garnish with Parmesan cheese and parsley, if desired.\r\n', 'Tortellini are ring-shaped pasta, sometimes also described as \"navel shaped\", hence their alternative name of \"belly button\". They are typically stuffed with a mix of meat or cheese.', 0, 0, 0),
(9, 9, 'Caponata', 'Salad', '2018-03-22 14:04:53', '1', 'Italy', '7.jpg', '1. Roast the eggplant, allow to cool and chop coarsely.\r\n2. Heat 1 tablespoon of the oil over medium heat in a large, heavy nonstick skillet and add the onion and celery. Cook, stirring, until the onion softens, about 5 minutes, and add the garlic. Cook together for a minute, until the garlic begins to smell fragrant, and add the peppers and 1/2 teaspoon of salt. Cook, stirring, until just about tender, about 8 minutes. Add another tablespoon of oil and the eggplant, and stir together for another 5 minutes, until the vegetables are tender. The eggplant will fall apart, which is fine. Season to taste.\r\n3. Add the tomatoes to the pan with about 1/2 teaspoon salt and a pinch of sugar. Cook, stirring and scraping the bottom of the pan often, for 5 to 10 minutes, until the tomatoes have cooked down somewhat and they smell fragrant. Add the capers, olives, remaining sugar, and vinegar. Turn the heat to medium-low and cook, stirring often, for 20 to 30 minutes, until the vegetables are thoroughly tender and the mixture is quite thick, sweet, and fragrant. Season to taste with salt and pepper and remove from the heat. Allow to cool to room temperature. If possible, cover and chill overnight. Serve at room temperature.\r\n', 'Caponata is a Sicilian eggplant dish consisting of a cooked vegetable salad made from chopped fried eggplant and celery seasoned with sweetened vinegar, with capers in a sweet and sour sauce', 0, 0, 0),
(10, 10, 'Pasta e Fagioli', 'Pasta', '2018-03-22 14:09:24', '1', 'Italy', '8.jpg', '1. Heat olive oil in a saucepan over medium heat. Saute carrot, celery and onion until soft. Add garlic and saute briefly. Stir in tomato sauce, chicken broth, pepper, parsley and basil; simmer for 20 minutes.\r\n2. Bring a large pot of lightly salted water to a boil. Add ditalini pasta and cook for 8 minutes or until al dente; drain.\r\n3. Add beans to the sauce mixture and simmer for a few minutes. When pasta is done, stir into sauce and bean mixture.\r\n\r\n', 'Pasta e fagioli, meaning \"pasta and beans\", is a traditional Italian dish. Like many other Italian favorites, including pizza and polenta, the dish started as a peasant dish, being composed of inexpensive ingredients.', 0, 0, 0),
(11, 11, 'Rouladen', 'Main', '2018-03-22 14:09:24', '1', 'Germany', '9.jpg', '1. Spread mustard on one side of each slice of meat. Sprinkle with salt and pepper\r\n2. Place one strip of bacon, dill pickle slice (if using), and a few onion wedges on each slice of meat; roll up and secure with wooden toothpicks. \r\n3. Put oil in dutch oven or other large pan and brown meat; drain.\r\n4. Add broth and bring to a boil. Reduce heat and cover and simmer for 1-1/2 hours or until meat is tender. Remove meat and keep warm.\r\n5. Combine flour and water until smooth and slowly stir into broth.\r\n6. Bring to a boil, stirring constantly until thickened.\r\n7. Remove wooden pics from meat and return to gravy; heat through.\r\n8. Sprinkle with parsley if desired.\r\n', 'Roulade or Rinderrouladen is a German meat dish, usually consisting of bacon, onions, mustard and pickles wrapped in thinly sliced beef which is then cooked', 0, 0, 0),
(12, 12, 'Chicken Schintzel', 'Main', '2018-03-22 14:09:24', '1', 'Germany', '10.jpg', '1. Tenderise the chicken with a meat mallet.\r\n2. Season the flour with salt and pepper.\r\n3. Coat the chicken pieces in the flour.\r\n5. Beat the eggs.\r\n6. Coat the chicken in the egg mixture and place immediately into the breadcrumbs.\r\n7. Heat oil in a pan and fry the schnitzel on both sides until brown and the chicken is cooked through.\r\n8. Alternatively the schnitzel can be baked in an oven for 15-20 minutes at 180°C.\r\n', 'Chicken Schnitzel is a popular and tasty treat served throughout Germany. Schnitzel is Austrian in origin; it was traditionally made with veal (known as Wiener Schnitzel) or pork.', 0, 0, 0),
(13, 13, 'Spaetzle', '', '2018-03-22 14:09:24', '1', 'Germany', '11.jpg', '1. Mix together flour, salt, white pepper, and nutmeg. Beat eggs well, and add alternately with the milk to the dry ingredients. Mix until smooth. \r\n2. Press dough through spaetzle maker, or a large holed sieve or metal grater. \r\n3. Drop a few at a time into simmering liquid. Cook 5 to 8 minutes. Drain well. \r\n4. Saute cooked spaetzle in butter or margarine. Sprinkle chopped fresh parsley on top, and serve.\r\n', 'Spätzle are a kind of soft egg noodle found in the cuisines of southern Germany and Austria, Switzerland, Hungary, Moselle and South Tyrol.', 0, 0, 0),
(14, 14, 'Eitopf', '', '2018-03-22 14:09:24', '', 'Germany', '12.jpg\r\n', '1. Put the first six ingredients into a pot and bring to a boil. Reduce heat and simmer for about 1 hour.\r\n2. Add the herbs.\r\n3. Adjust the seasoning with salt, pepper and Maggi seasoning.\r\n4. Creativity is encouraged.\r\n\r\n', 'A stew is a combination of solid food ingredients that have been cooked in liquid and served in the resultant gravy. Originated in Germany.', 0, 0, 0),
(15, 15, 'Lo Mein', '', '2018-03-22 14:43:13', '2', 'China', '101.jpg', '1. In a small bowl, whisk together soy sauce, sugar, sesame oil, ginger and Sriracha; set aside.\r\n2.In a large pot of boiling water, cook noodles according to package instructions; drain well. \r\n3.Heat olive oil in a large skillet or wok over medium high heat. Add garlic, mushrooms, bell pepper and carrot. Cook, stirring frequently, until tender, about 3-4 minutes. Stir in snow peas and spinach until the spinach has wilted, about 2-3 minutes.\r\n4. Stir in egg noodles and soy sauce mixture, and gently toss to combine. Then serve immediately.\r\n', '', 0, 0, 0),
(16, 16, 'Orange Chicken', 'Main', '2018-03-22 14:43:13', '2', 'China', '116.jpg', '1. Place chicken pieces in a gallon size resealable bag, set aside. Place chicken pieces in a gallon size resealable bag, set aside. Whisk mixture well, then measure out 2/3 cup of the mixture and pour it over the chicken in resealable bag. Whisk mixture well, then measure out 2/3 cup of the mixture and pour it over the chicken in resealable bag. Place bag in a bowl or baking dish and refrigerate 30 minutes. \r\n2. Meanwhile, return remaining sauce mixture over medium heat and bring mixture just to a boil, stirring frequently. In a small bowl whisk together 2 Tbsp cornstarch with 2 Tbsp water then stir mixture into sauce. Reduce heat to medium-low and cook 1 - 2 minutes longer, stirring constantly, until thickened, remove from heat. \r\n3. Pour vegetable oil into a large cast iron dutch oven, filling pot about 1 1/2 - 2-inches deep and heat oil to 350 degrees. Pour vegetable oil into a large cast iron dutch oven, filling pot about 1 1/2 - 2-inches deep and heat oil to 350 degrees. Pour remaining 1 1/4 cups cornstarch into a separate shallow dish. Remove chicken from refrigerator and drain and discard marinade from chicken. \r\n4. Dip chicken pieces into egg followed by cornstarch and toss pieces to evenly coat in cornstarch, then carefully place 1/3 of the chicken pieces into preheated oil and cook for 5 - 7 minutes until golden, turning once during cooking. Using skimmer, remove fried chicken from oil and transfer to a paper towel lined cookie sheet to drain excess oil.\r\n5. Repeat process with remaining chicken working in two more batches. Pour drained fried chicken into a bowl and toss with sauce. Serve warm over white or brown rice garnished with green onions and sesame seeds if desired.\r\n', '', 0, 0, 0),
(17, 17, 'Sesame Chicken Potstickers', 'Main', '2018-03-22 14:43:13', '2', 'China', '102.jpg\r\n', '1. In a large bowl, combine chicken, mushrooms, garlic, green onions, soy sauce, sesame oil, ginger, rice vinegar and white pepper.\r\n2. To assemble the dumplings, place wrappers on a work surface. Spoon 1 tablespoon of the chicken mixture into the center of each wrapper. Using your finger, rub the edges of the wrappers with water. Fold the dough over the filling to create a half-moon shape, pinching the edges to seal.\r\n3. Heat vegetable oil in a large skillet over medium heat. Add potstickers in a single layer and cook until golden and crisp, about 2-3 minutes per side.\r\n4. Serve immediately with soy sauce, if desired.\r\n', '', 0, 0, 0),
(18, 18, 'Wonton Soup', 'Soup', '2018-03-22 14:43:13', '2', 'China', '103.jpg', '1. In a large bowl, mix pork, soy sauce, chives, vinegar, cornstarch, ginger, garlic, red pepper flakes and sesame oil until fully incorporated. \r\n2. Using your finger, wet the edges of wonton wrapper with water. Place half a tablespoon of pork filling in the center of the wonton wrapper. Fold wonton in half diagonally to create a triangle, and seal the edges. Fold the two identical corners in on each other and press again to seal. Repeat until all wonton wrappers are filled. \r\n3.Bring all soup ingredients to a boil. Simmer on low for 10 minutes, then remove ginger and garlic cloves and bring it back to a boil. Lower in wontons and cook for 10 minutes more. Serve into bowls and garnish with green onions.\r\n\r\n', '', 0, 0, 0),
(19, 19, 'Aloo Gobi', 'Main', '2018-03-22 14:43:13', '2', 'India', '104.jpg', '1. In a large skillet, heat the oil. Add the potatoes and cauliflower and cook over moderate heat, stirring, until golden in spots, 7 to 8 minutes. \r\n2. Stir in the garlic, ginger, cumin seeds, mustard seeds, coriander, and curry leaves and cook until fragrant, 1 minute. Season with salt and pepper and add 1 1/2 cups of water.\r\n3. Reduce heat to medium and melt another 2 tablespoons butter. Add the onions, jalapenos, and cinnamon stick. Cook until the onion and the jalapenos are tender, about 8 minutes. Stir in the garlic, ginger, remaining teaspoon garam masala, and paprika and cook until fragrant, about 1 minute. Stir in the garlic, ginger, cumin seeds, mustard seeds, coriander, and curry leaves and cook until fragrant, 1 minute. Season with salt and pepper and add 1 1/2 cups of water. \r\n4. Add the tomatoes and bring mixture to a simmer. Add the chicken and toss to coat in the sauce. Let simmer until the chicken is cooked through, about 8 minutes. \r\n5. Add the cream and the remaining 2 tablespoons butter and stir until the butter has melted. Serve warm over rice with naan. \r\n', '', 0, 0, 0),
(20, 20, 'Indian Butter Chicken', 'Main', '2018-03-22 14:43:13', '2', 'India', '105.jpg', '1. In a large bowl, whisk together yogurt, lemon, turmeric, 1 teaspoon garam masala, and cumin. Toss chicken in mixture and let marinate for 15 minutes. \r\n2. In a large bowl, whisk together yogurt, lemon, turmeric, 1 teaspoon garam masala, and cumin. Toss chicken in mixture and let marinate for 15 minutes. \r\n3. Reduce heat to medium and melt another 2 tablespoons butter. Add the onions, jalapenos, and cinnamon stick. Cook until the onion and the jalapenos are tender, about 8 minutes. Stir in the garlic, ginger, remaining teaspoon garam masala, and paprika and cook until fragrant, about 1 minute. \r\n4. Add the tomatoes and bring mixture to a simmer. Add the chicken and toss to coat in the sauce. Let simmer until the chicken is cooked through, about 8 minutes. \r\n5. Add the cream and the remaining 2 tablespoons butter and stir until the butter has melted. Serve warm over rice with naan. \r\n\r\n', '', 0, 0, 0),
(21, 21, 'Keema Beef Curry', 'Main', '2018-03-22 14:43:13', '2', 'India', '106.jpg', '1. In a large, deep skillet, heat the oil. Add the ground meat and cook over high heat, stirring to break up the lumps, until no longer pink, about 5 minutes. \r\n2. Add the onion, ginger, garlic, and curry powder and season with salt and pepper. Cook over high heat, stirring frequently, until the onion is softened, about 3 minutes. \r\n3. Add the potato, broth, coconut milk, and the tomatoes and their juices and bring to a boil. Cook over moderate heat, stirring occasionally, until the potato is tender, about 15 minutes. \r\n4. Using the back of a spoon, lightly crush some of the potato. Add the peas and cook just until heated through. Serve in bowls with cilantro, naan, and rice.\r\n', '', 0, 0, 0),
(22, 22, 'Punjabi Chicken Curry', 'Main', '2018-03-22 14:43:13', '2', 'India', '107.jpg', '1. In a large, deep skillet, heat the oil. Add the ground meat and cook over high heat, stirring to break up the lumps, until no longer pink, about 5 minutes.Heat the butter in a pan. Add the onion and fry till soft but not brown. Add root ginger, garlic and chillies and continue to fry, stirring. Allow the flavours to infuse for a few minutes before adding the salt, garam masala, turmeric and cumin seeds. Reduce the heat so the spices don’t burn and give the ‘tarka’ as it’s called, a good stir.\r\n2. Add tomatoes, turn up the heat and stir, squashing down the tomatoes to make a smooth paste. This will take 5 or 6 minutes and you should keep stirring the mixture until the liquid has reduced down to a paste. Once it has thickened, add the chicken and stir on a high heat until again, the liquid has reduced completely. \r\n3.Add 600ml (1 pt) water and once this has started to boil, reduce the heat to the lowest setting on a small hob. Squeeze in the lemon juice, add fenugreek leaves and leave to simmer with the lid on for 20 to 30 minutes.\r\n4.Add the chopped coriander leaves, turn the heat up and reduce down to the consistency you like for about 5 to 10 minutes.\r\n', '', 0, 0, 0),
(23, 23, 'Gyudon', 'Main', '2018-03-22 14:43:13', '2', 'Japan', '108.jpg', '1. Gather all the ingredients. \r\n2. Cut the onion and green onion into thin slices and cut the meat into small pieces. \r\n3. Heat the oil in a large frying pan over medium high heat and cook the onions until tender. \r\n4. Add the meat and sugar and cook until no longer pink.\r\n. Add sake, mirin, and soy sauce.\r\n6. Reduce the heat and simmer for 2-3 minutes. \r\n7. If you like to add the egg, slowly and evenly drizzle the beaten egg over the beef. Cook covered until the egg is done. Add the green onion right before removing from the heat. \r\n8. Place the beef and egg on top of steamed rice and pour desired amount of sauce. Top with pickled red ginger.\r\n\r\n', '', 0, 0, 0),
(24, 24, 'Omurice', 'Main', '2018-03-22 14:43:13', '2', 'Japan', '109.jpg', '1.	Gather all the ingredients.\r\n2.	To make tomato sauce, combine ketchup, tomato paste, and water in a small saucepan and mix all together. Set aside.\r\n3.	To make the Fried Rice:\r\na.	Clean the mushrooms with damp towel and slice them.\r\nb.	Slice the onion and dice into small pieces.\r\nc.	Cut the ham into small pieces.In a 10-inch frying pan, heat 1 Tbsp vegetable oil and sauté onion.\r\nd.	Add green peas and mushrooms, and hams.\r\ne.	Season with pinch of kosher salt and freshly ground black pepper.\r\nf.	Add rice and break big chunks of rice into smaller pieces.\r\ng.	When combined well, add 3-4 Tbsp tomato sauce and mix well. Make sure to save some sauce for topping. Divide the fried rice in half.\r\n4.	Make the omelette and put it together (Makes 2 Omurice)\r\na.	Start with the first omurice. Crack 2 eggs in a small bowl and add 1 Tbsp milk and pinch of salt. Whisk all together.\r\nb.	Heat another frying pan over medium high heat and add 1 Tbsp butter. Swirl around and when it’s melted, add the beaten egg.\r\nc.	Quickly swirl around with chopsticks. When the mixture is set but still runny, add half of ketchup rice in the middle. If you feel the pan is getting too hot, remove the pan from the heat and put on top of the damp towel.\r\nd.	Wrap the ketchup rice both sides with egg omelette.  It doesn’t have to be perfectly wrapped, but make sure to create the “edge” around the fried rice with omelette\r\ne.	Place the serving plate under the pan and flip the pan to transfer the omelette rice. \r\nf.	place a piece of paper towel and gently shape the omelettte into a football shape.  Repeat this process to make the second omurice.\r\ng.	When serving, garnish omurice with parsley and drizzle hot tomato sauce.	\r\n\r\n', '', 0, 0, 0),
(25, 25, 'Teriyaki Salmon', 'Main', '2018-03-22 14:43:13', '2', 'Japan', '110.jpg', '1. Gather all the ingredients.\r\n2. Combine the ingredients for Seasonings and mix well until the sugar is mostly dissolved (or you can microwave for seconds). Rinse the salmon and pat dry. Season the salmon with kosher salt and black pepper on both sides.\r\n3. Sprinkle 1/2 Tbsp. of all-purpose flour on one side of salmon and spread evenly. Flip over and sprinkle the rest of flour on the other side. Gently remove the excess flour.\r\n. In a frying pan, add the vegetable oil and melt the butter over medium heat. Don’t burn the butter. If the frying pan gets too hot, reduce heat or remove from the heat temporally.\r\n5. Add the salmon fillets, skin side on the bottom (this will be top when you serve). Cook the salmon for 3 minutes, or until the bottom side is nicely browned, and then flip.\r\n. Add sake and cover with lid. Steam the salmon for 3 minutes, or until it\'s cooked through. Remove the salmon to a plate. \r\n7. Add the seasonings to the pan and increase the heat little bit. When the sauce starts to boil, add salmon back in the pan and spoon the sauce over the salmon. \r\n8. When the sauce thickens, turn off the heat. Plate the salmon on a plate and serve immediately.\r\n', '', 0, 0, 0),
(26, 26, 'Tonkatsu', 'Main', '2018-03-22 14:43:13', '2', 'Japan', '111.jpg', '1. Gather all the ingredients.\r\n2. Adjust an oven rack to the middle position and preheat the oven to 400F (200C). Line a rimmed baking sheet with parchment paper.\r\n3. Combine the panko and oil in a frying pan and toast over medium heat until golden brown. Transfer panko into a shallow dish and allow to cool.\r\n. Get rid of the extra fat and make a couple of slits on the connective tissue between the meat and fat. The reason why you do this is that red meat and fat have different elasticity, and when they are cooked they will shrink and expand at different rates. This will allow Tonkatsu to stay nice and flat and prevent Tonkatsu from curling up.\r\n5. Pound the meat with a meat pounder, or if you don’t have one then just use the back of knife to pound. Mold the extended meat back into original shape with your hands. \r\n6. Sprinkle salt and freshly ground black pepper. \r\n7. Dredge each pork piece in the flour to coat completely and pat off the excess flour. Then dip into the beaten egg and finally coat with the toasted panko. Press on the panko flakes to make sure they adhere to the pork. \r\n8. Place the pork on the prepared baking sheet or even better if you have an oven-safe wire rack (as air goes through on the bottom so panko won\'t get crushed). Bake until the pork is no longer pink inside, about 20 minutes. \r\n>9. Place the pork on the prepared baking sheet or even better if you have an oven-safe wire rack (as air goes through on the bottom so panko won\'t get crushed). Bake until the pork is no longer pink inside, about 20 minutes.\r\n10. To make special sesame tonkatsu sauce, grind black and white sesame seeds in a mortar and add tonkatsu sauce. Mix all together.\r\n', '', 0, 0, 0),
(27, 27, 'Bulgogi', 'Main', '2018-03-22 14:43:13', '2', 'Korea', '112.jpg', '1. Mix all the marinade ingredients in a bowl.\r\n2. Add the sliced beef and mix well.\r\n3. You can grill, pan-fry, or BBQ right after marinating, but it’s best to keep it in the fridge and let it marinate for at least 30 minutes, or overnight for a tougher cut of beef. Serve with ssamjang.\r\n\r\n', '', 0, 0, 0),
(28, 28, 'Bibimbap', 'Main', '2018-03-22 14:43:13', '2', 'Korea', '113.jpg', '. HOW TO PREPARE DRIES FERNBRAKE (GOSARI) FOR USE: \r\n•	If you have presoaked or fresh fernbrake you can use it straight away, but if you have dried fernbrake you\'ll need to get it ready to eat. It\'s fast if you have a pressure cooker, but if you don’t it will take some time\r\n2. RICE:\r\n•	Rinse 2 cups of rice in cold water and scrub the wet rice with your hand. Rinse and drain until the drained water is pretty clear\r\n•	Put the rice in a heavy-bottomed pot. Add 2 cups of water, cover, and soak for 30 minutes.\r\n•	Cook over medium high heat for 7 to 8 minutes until the surface is covered with abundant bubbles that are spluttering noisily and look like they\'re about to overflow the pot. Turn the rice over a few times with a spoon and cover the pot again\r\n•	Turn the heat to very low and simmer for another 10 minutes until the rice is fully cooked and fluffy. Remove from the heat\r\n•	Fluff the rice with a spoon to release excess steam. Let the rice stand, covered, at room temperature to keep it warm\r\n3. SOYBEAN SPROUTS: \r\n•	Put the soy bean sprouts in a pot and add 4 cups water and 2 or 3 teaspoons salt. Cover and cook for 20 minutes over medium high heat. Take out the sprouts with tongs and put them into a bowl, leaving about 1/2 cup of sprouts in the pot with the water you used to boil them. This is the soup to serve with bibimbap later\r\n•	In a bowl, mix the sprouts by hand with 1/2 teaspoons salt, 1 teaspoon minced garlic, and 2 teaspoons sesame oil. Put them on the large platter.\r\n4. SPINACH: \r\n•	Clean the mushrooms with damp towel and slice them.Crack 3 eggs in a bowl and add 1/4 teaspoon salt. Beat it with fork and remove the stringy chalaza.Cut up the blanched spinach a few times and put it in a bowl. Mix by hand with 1 teaspoon garlic, 1 teaspoon sesame oil, 1/2 teaspoon salt, and 1 teaspoon sesame seeds. Cover and put it next to the soy bean sprouts on the platter.\r\n5. OTHER FRESH VEGTABLES: \r\n•	Cut the carrot into matchsticks, put them in a bowl, and mix with a pinch of salt. Let stand for 5 to 10 minutes until sweating.\r\n•	Cut the red bell pepper into halves, deseed, and slice into strips. Put them in a bowl.\r\n•	Cut the zucchini into matchsticks and mix with ½ teaspoon salt.\r\n•	Cut the cucumber into halves lengthwise and slice thinly crosswise. Mix with 1/4 teaspoon salt.\r\n6. BEEF: \r\nCut the beef into matchsticks and put them in a bowl. Then mix with 1 tablespoon minced garlic, 1 tablespoon soy sauce, 1 tablespoon honey, 2 teaspoons sesame oil, and 1 teaspoon sesame seeds with a spoon. Cover and keep in the fridge until ready to use.\r\n 7. MOUNTAIN VEGTABLES:\r\nCut the fernbrake (gosari) a few times into bite size pieces. Set aside. Put the bellflower roots (doraji) in a large bowl. Add 1 or 2 tablespoons salt. Rub for a minute to wilt slightly and release some of the bitterness. Rinse them in cold water a couple of times and drain. If you find some roots are too thick, split them lengthwise. Set aside.\r\nLET\'S COOK! \r\n•	Heat up a pan over medium high heat. Squeeze out excess water from the carrot. Add a few drops of cooking oil to the pan and saute the carrot for 1 minute. Put it on the platter next to the soy bean sprouts and spinach. Clean the pan with wet paper towel or wash it. \r\n•	Heat a few drops of cooking oil in the pan and squeeze out the excess water from the cucumber. Saute with 1/2 teaspoon minced garlic and a few drops of sesame oil for 30 seconds. Put it on the platter. Clean the pan.\r\n•	Heat up the pan with a few drops of cooking oil. Add the red bell pepper and sprinkle a pinch of salt over top. Saute for 30 seconds. Put it on the platter. Clean the pan.\r\n•	Heat up the pan and squeeze out excess water from the zucchini. Add a few drops of cooking oil and saute with 1 teaspoon minced garlic, 1 tablespoon chopped green onion, a drop of sesame oil for 1 minute until slightly softened. Put it on the platter. Clean the pan. \r\n•	Heat up the pan with a few drops of cooking oil. Add the bellflower roots and saute for 2 to 3 minutes. Lower the heat to medium so as not to brown them. Add 1 teaspoon minced garlic and a drop of sesame oil. Stir for another minute until a little softened. Put it on the platter. Clean the pan. \r\n•	Put some sesame oil on the finshed rolls and sprinkle some sesame seeds over top. Cut each roll into 1/4 inch bite size pieces with a sharp knife, occasionally wiping it with a wet paper towel or cloth to clean the starch off and to ease cutting.\r\n•	Heat up the pan. Add a few drops of cooking oil. Stir the gosari for 2 minutes until a little softened. Add 1/2 teaspoon of minced garlic, 2 teaspoons soy sauce, and 2 teaspoons sugar, and keep stirring for another minute. Put it on the platter.\r\n', '', 0, 0, 0),
(29, 29, 'Gimbap', 'Main', '2018-03-22 14:43:13', '2', 'Korea', '114.jpg', 'Rice:\r\n1.	Place freshly made rice in a large, shallow bowl. Gently mix in ½ teaspoon salt and 2 teaspoons sesame oil over top with a rice scoop or a wooden spoon.\r\n2.	Let it cool down enough so it’s no longer steaming. Cover and set aside.\r\nSpinach:\r\n1.	Combine the blanched spinach, 2 minced garlic cloves, ½ teaspoon salt, and 2 teaspoons sesame oil in a bowl.\r\n2.	Mix well by hand and put it on a large platter with the sliced yellow pickled radish.\r\nCarrots:\r\n1.	Combine the carrot matchsticks with ¼ teaspoon salt. Mix well and let it sweat for 5 to 10 minutes. Heat a pan and add a few drops vegetable oil.\r\n2.	Squeeze out excess water from the carrot, then saute for about 1 minute. Put it on the platter next to the spinach.\r\nSteaks:\r\n1.	Trim the fat from the skirt steaks and slice into ¼ inch wide, 3 to 5 inch strips. Put the strips into a bowl. Add 2 teaspoons soy sauce, 1 minced garlic clove, ¼ teaspoon ground black pepper,1 tablespoon plus 1 teaspoon brown (or white) sugar, and 2 teaspoons sesame oil.\r\n2.	Mix well by hand.\r\n3.	Set aside, and let them marinate while we do the egg strips.\r\nEggs:\r\n1.	Crack 3 eggs in a bowl and add ¼ teaspoon salt. Beat it with fork and remove the stringy chalaza.\r\n2.	Drizzle a few drops of oil on a heated 10 to 12 inch non-stick pan. Wipe off the excess with a paper towel so only a thin sheen of oil remains. Turn down the heat to low and pour the egg mixture into the pan. Spread it into a large circle so it fills the pan.\r\n•  When the bottom of the egg is cooked, flip it over with a spatula. Remove from the heat and let it cook slowly in the hot pan for about 5 minutes, with the ultimate goal of keeping the egg as yellow as possible, and not brown. \r\n•  Cut it into ½ inch wide strips. Put it next to the spinach on the platter.\r\nFinish steaks:\r\n1.	Heat up a pan over medium high heat and cook the marinated beef, stirring it with a wooden spoon until well cooked.\r\n\r\n2.	Set aside.\r\nLet’s roll gimbap!\r\n1.	Place a sheet of gim on a bamboo mat with the shiny side down. Evenly spread about ¾ cup of cooked rice over top of it, leaving about 2 inches uncovered on one side of the gim.\r\n2.	Place beef, carrot, yellow pickled radish strip, a few egg strips, and spinach in the center of the rice.\r\n3.	Use both hands to roll the mat (along with gim and rice) over the fillings, so one edge of the rice and gim reaches the opposite edge. This centers the fillings in the roll, so they’ll be nicely in the middle when you slice it.\r\n4.	 Grab the mat with both hands and and press it tightly as you continue rolling the gimbap. Push out the mat as you roll, so it doesn’t get wrapped in the gimbap.\r\n5.	 Remove the roll from the mat at the end and set the finished roll aside with the seam down, to seal it nicely. \r\n6.	Repeat 4 more times with the remaining ingredients. \r\n7.	 Put some sesame oil on the finshed rolls and sprinkle some sesame seeds over top. Cut each roll into ¼ inch bite size pieces with a sharp knife, occasionally wiping it with a wet paper towel or cloth to clean the starch off and to ease cutting.Put it on a plate and serve immediately or pack it in a lunchbox.\r\n', '', 0, 0, 0),
(30, 30, 'Ice Cubes', 'Condiments', '2018-03-23 06:13:24', '3', 'Antartica', '0.jpeg', '1. Get a small, insulated cooler you can fit inside your freezer.\r\n2. Get plastic molds. You’ll use these to freeze your chunks of ice. The blue molds in the video are 2 x 2 x 5 inches; if you want cubes, look at these.\r\n3. Put the molds into the cooler, arranged into lines.\r\n4. Fill the entire cooler with water, so that the molds are flooded. Put the cooler into the freezer with the lid open or removed.\r\n5. Wait until the block is frozen all the way through. Yes, it’s a slow process. Then remove the cooler and the ice block inside. (If it sticks, let it thaw a little.) Set the block in a clean plastic bucket, and leave it out for an hour or so to let it temper.\r\n6. Cut out the molds. Using a serrated knife, carefully score the block in between some molds. Use a mallet on the back of the knife blade to carefully split the ice. If it’s starts cracking like crazy, let it temper a little longer.\r\n7. Once the molds are free, you should be able to slide the blocks of ice out of them pretty easily. If they don’t come out easily, let them warm just a little. The ice that comes out should be almost perfectly clear. There may be some clouding at the top, but this can be cut out using the serrated knife method in the step above.', 'An ice cube is a small, roughly cube-shaped piece of ice (frozen water), conventionally used to cool beverages.', 30, 10, 20);

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `region_id` int(11) NOT NULL,
  `region_name` varchar(255) NOT NULL,
  `region_photo` varchar(255) NOT NULL DEFAULT 'assets/Recipe/img/rec1.jpg',
  `region_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`region_id`, `region_name`, `region_photo`, `region_description`) VALUES
(1, 'West', 'assets/Recipe/img/rec1.jpg', 'Find the best, easy fast meal ideas from Western food recipes.'),
(2, 'East', 'assets/Recipe/img/rec1.jpg', 'Find the best, easy fast meal ideas from Eastern food recipes.'),
(3, 'North', 'assets/Recipe/img/rec1.jpg', 'Northern Dishes');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `s_id` varchar(60) NOT NULL,
  `s_name` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_id` (`c_id`),
  ADD UNIQUE KEY `c_addressid` (`c_address_id`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`caddress_id`),
  ADD UNIQUE KEY `caddress_id` (`caddress_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `customer_payment`
--
ALTER TABLE `customer_payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD UNIQUE KEY `payment_id` (`payment_id`),
  ADD UNIQUE KEY `c_id` (`c_id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`ing_id`);

--
-- Indexes for table `my_cart`
--
ALTER TABLE `my_cart`
  ADD KEY `c_id` (`c_id`,`r_id`);

--
-- Indexes for table `order_delivery`
--
ALTER TABLE `order_delivery`
  ADD PRIMARY KEY (`deliver_id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`r_id`),
  ADD UNIQUE KEY `ing_list_id` (`ing_list_id`),
  ADD UNIQUE KEY `r_id` (`r_id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`region_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `caddress_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `ing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `r_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
