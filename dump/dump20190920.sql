-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Окт 01 2019 г., 18:22
-- Версия сервера: 5.7.24-27
-- Версия PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `u0701138_agency`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`id`, `title`) VALUES
(3, 'Why women should choose our agency?'),
(5, 'Why Ukrainian woman?');

-- --------------------------------------------------------

--
-- Структура таблицы `blog_items`
--

CREATE TABLE `blog_items` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `order_num` varchar(50) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `headline` varchar(250) DEFAULT NULL,
  `text1` text,
  `text2` text,
  `img` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blog_items`
--

INSERT INTO `blog_items` (`id`, `blog_id`, `order_num`, `type`, `headline`, `text1`, `text2`, `img`) VALUES
(13, 5, 'upload_file_name_n1', '1', 'Beautiful', 'Our women are the most beautiful single ladies in Kiev. Ukrainian and Russian ladies are known as one of the most beautiful women.\r\nThey take care of themselves, doing sports regularly, taking care of health. \r\nThey also love to be stylish: elegant dress and nice make-up, they are princesses who are waiting for the right man', '', 'blog-img-1.jpg'),
(14, 5, 'upload_file_name_n2', '2', 'Educated and intelligent', 'Every woman in our agency has high education and knows at least 1 foreign language.\r\nThey know etiquette and are friendly and communicative', '', 'blog-img-2.jpg'),
(15, 5, 'upload_file_name_n3', '1', 'Family-oriented', 'Every Ukrainian woman dreams to find a reliable man and to build a strong family together.\r\nThey love children and think that their main role in life is to be a good wife and the best mother!', '', 'blog-img-3.jpg'),
(16, 5, 'upload_file_name_n4', '2', 'Loyal and sincere', 'A rarity in the world but typical for Ukrainian women characteristic', '', 'blog-img-4.jpg'),
(17, 5, 'upload_file_name_n5', '1', 'Trusting and honest', 'Our ladies are honest about their intentions and want to create sincere and loyal relationship with their man. Russian and Ukrainian women are known as the most trusting and loyal wives', '', 'blog-img-5.jpg'),
(18, 3, 'upload_file_name_n0', '3', 'Agency services are free for women', '', '', 'blog-img-6.jpg'),
(19, 3, 'upload_file_name_n1', '4', 'Only the most reliable and serious mean', '', '', 'blog-img-2.jpg'),
(20, 3, 'upload_file_name_n2', '3', 'Safety and confidentiality are guaranteed', '', '', 'blog-img-8.jpg'),
(21, 3, 'upload_file_name_n3', '4', 'Personal assistance', '', '', 'blog-img-9.jpg'),
(22, 3, 'upload_file_name_n4', '3', 'Individual approach', '', '', 'blog-img-10.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `girls`
--

CREATE TABLE `girls` (
  `id` int(11) NOT NULL,
  `num` varchar(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `city` varchar(250) DEFAULT NULL,
  `height` varchar(150) DEFAULT NULL,
  `weight` varchar(150) DEFAULT NULL,
  `age` varchar(150) DEFAULT NULL,
  `color_eye` varchar(250) DEFAULT NULL,
  `color_heir` varchar(250) DEFAULT NULL,
  `education` varchar(250) DEFAULT NULL,
  `profession` varchar(250) DEFAULT NULL,
  `occupation` varchar(250) DEFAULT NULL,
  `religion` varchar(250) DEFAULT NULL,
  `smoking` varchar(250) DEFAULT NULL,
  `alcohol` varchar(250) DEFAULT NULL,
  `lang_eng` varchar(250) DEFAULT NULL,
  `lang_other` varchar(500) DEFAULT NULL,
  `family_status` varchar(250) DEFAULT NULL,
  `children_count` int(11) DEFAULT NULL,
  `about` mediumtext,
  `man_age` varchar(250) DEFAULT NULL,
  `man_about` mediumtext,
  `mail` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `public` int(1) NOT NULL DEFAULT '0',
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `girls`
--

INSERT INTO `girls` (`id`, `num`, `name`, `l_name`, `city`, `height`, `weight`, `age`, `color_eye`, `color_heir`, `education`, `profession`, `occupation`, `religion`, `smoking`, `alcohol`, `lang_eng`, `lang_other`, `family_status`, `children_count`, `about`, `man_age`, `man_about`, `mail`, `phone`, `public`, `date_created`) VALUES
(28, '', 'Olga', 'Seniv', 'Kiev', '155', '55', '30', 'blue', 'brown', 'Higher', 'Lawyer', 'Lawyer', 'Christianity', 'no', '155', 'basic', 'Russian', 'never married', 0, 'I am a good girl, honest and very loyal. I am from a good family and loving my family very much. My friends say that I have a very mild character but sometimes I can be a strong woman:) I know how to make compromises and I am here not for playing games.\r\n\r\nI adore listening to music, reading books, travelling, everyday life, work on myself, religion, history, spirituality.\r\n', '30-60', 'I dream of the future, a bright future, which I can create only with you, my future husband!', 'seniv.olga@mail.ru', '0671909446', 1, 1568660738),
(29, '', 'Natalia', 'Pilipchuk ', 'Kiev', '159', '57', '52', 'Blue', 'Blond', 'Higher ', 'Stylist ', 'Stylist ', 'Orthodox ', 'No ', 'Sometimes ', 'basic', 'Ukrainian , Russian ', 'Divorced ', 1, 'I’m very sensitive and tender person . I hate lies and I appreciate family traditions.', '50-90', 'I’m looking for a serious man to create a strong family and normal relations .', '', '+380502503583', 0, 1568701424),
(31, '', 'Поал', 'Прао', 'Kiev', '', '', '', '', '', '', '', '', '', '', '', 'basic', '', '', 0, '', '', '', '', '', 0, 1568703306),
(32, '', 'Natalia ', 'Pilipchuk ', 'Kiev', '159', '58', '52', 'Blue', 'Blond ', 'Higher ', 'Stylist ', 'Stylist ', 'Orthodox ', 'No ', '159', 'basic', 'Ukrainian , Russian ', 'Divorced ', 1, 'I’m very sensitive and positive person . I always smile and appreciate real friendship.', '50-75', 'I’m looking for a serious and family oriented man with established character , who doesn’t lie. I want real happy family . Adventures and mutual respect .', '', '+380502503583', 1, 1568705661),
(33, '', 'Alina', 'Kesar', 'another region', '165', '57', '28', 'blue', 'blond', 'Incomplete higher', 'Lawyer', 'Stylist', 'Ortodox', 'No', 'Ocasionally', 'basic', 'no', 'single, never married', 0, 'I am very positive woman with good heart and sense of humor, that is why I have a lot of friends next to me. I am very family oriented and sincere. I think I am charming lady and my soul is very pure and shining.\r\nI am very sportive and I practice a lot of sports. I like reading books about psychology and another books about human relations.\r\nI want to find a man with good heart, who is not greedy and who is ready for family. I appreciate honesty in my future husband.', '30-60', '', '2370700306@ukr.net', '0675581000', 1, 1568706528),
(34, '', 'Svetlana ', 'Ostapenko', 'Kiev', '165', '50', '35', 'Brown ', 'Brown ', 'Higher ', 'Nurse', 'Nurse', 'Orthodox ', 'No ', '165', 'basic', '', 'Divorced ', 1, 'I’m a family oriented woman ', '35-45', 'Looking for a sincere man who is ready for family .', '', '', 1, 1568706993),
(35, '', 'Anastasia', 'Kalenik ', 'another region', '164', '55', '21', 'Brown', 'Blond', 'Student ', 'Student ', 'Manager', 'Orthodox ', 'Sometimes ', '164', 'basic', '', 'Not married ', 0, 'I’m a nice girl :) Believe it or not:) ', '25-45', 'I want to find a serious man to create a happy family , to travel together and live happy life .', '', '+380930693905', 1, 1568707462),
(36, '', 'Olga ', 'Kovaleva', 'Kiev', '170', '59', '35', 'Green ', 'Brown ', 'Higher ', 'Psychologist ', 'Psychologist ', 'Orthodox ', 'No ', '170', 'basic', '', 'Divorced ', 0, 'Nice woman ,good sense of humor . ', '35-55', 'Waiting for my  “the number one”', '', '+380638531329', 1, 1568707922),
(37, '', 'Larisa', 'Zubchenko ', 'Kiev', '166', '60', '46', 'Blue', 'Blond ', 'Higher ', 'Lawyer ', 'Notary ', 'Orthodox ', 'No ', '166', 'basic', '', 'Divorced ', 1, 'I’m mature and educated woman with good manners and very nice sense of humor ', '45-65', 'Looking for family oriented man who appreciates traditions and who is ready for happy life ', '', '+380674659181', 1, 1568708510),
(38, '', 'Viktoriya', 'Remezovskaya', 'Kiev', '170', '50', '27', 'blue', 'blond', 'Higher', 'Psychologist', 'Director', 'Orthodox', 'No', 'Ocasionally', 'basic', 'no', 'single, never married', 0, 'I am very feminine lady, who believes in dreams and kindness. I am looking for my king. I am ready to create family and take care about my husband and kids. I have many hobbies and I am artistic person. ', '30-60', 'kind and generous', 'viktoriyareina@netemail.com', '0931242480', 1, 1568708806),
(39, '', 'Larissa ', 'Kornienko', 'Kiev', '167', '62', '44', 'Blue', 'Blond ', 'Higher ', 'Dentist ', 'Dentist ', 'Orthodox ', 'No ', '167', 'basic', '', 'Divorced ', 0, 'I’m a good woman . I’m completely happy in my life , just one important thing I need is to find a man who will be my soulmate ', '45-70', 'Looking for a serious man , no games , no drama . Happy together forever ', '', '+380502581910', 1, 1568708815),
(40, '', 'Alena ', 'Klemenko ', 'Kiev', '173', '55', '47', 'Blue ', 'Blond ', 'Higher ', 'Stylist ', 'Stylist ', 'Orthodox ', 'Yes ', 'Sometimes ', 'basic', '', 'Divorced ', 2, 'I’m a nice woman , with good sense of humor , sensitive and positive . I know how to make a man happy ', '45-75', 'I’m looking for a man who can take care of me . And I want to make his life happy .', '', '+380632017047', 0, 1568709534),
(41, '', 'Vladislava', 'Vdovkina', 'Kiev', '172', '57', '27', 'green', 'brown', 'Incomplete higher', 'Information management', 'DJ, model', 'Orthodox', 'No', 'Ocasionally', 'basic', 'no', 'single, never married', 0, 'I am active and energetic woman. I am looking for a kind, careful, responsible man, who is smart and not lazy. I appreciate honesty and think it is basis for any kind of relationship.', '25-60', '', 'vronskaya@icloud.com', '0687139616', 0, 1568709719),
(42, '', 'Alena ', 'Klemenko ', 'Kiev', '172', '57', '45', 'Blue ', 'Blond ', 'Higher ', 'Stylist ', 'Stylist ', 'Orthodox ', 'Yes ', '172', 'basic', '', 'Divorced ', 2, 'I know how to make my man happy . I am a little bossy but the same time very sensitive woman .', '45-75', 'I need a man who will make me happy . I will give him more love than ever .', '', '+380632017047', 1, 1568709738),
(43, '', 'Vladislava', 'Vdovkina', 'Kiev', '172', '57', '27', 'green', 'brown', 'Incomplete higher', 'Information management', 'DJ, model', 'Orthodox', 'No', 'Ocasionally', 'basic', 'no', 'single, never married', 0, 'I am active and energetic woman. Looking for responsible, smart, kind and not lazy man. I appreciate honesty and think it is basis for any kind of relationships.', '25-60', '', 'vronskaya@icloud.com', '0687139616', 1, 1568709881),
(44, '', 'Nadezhda ', 'Kutcher ', 'Kiev', '179', '58', '27', 'Blue ', 'Blond ', 'Higher ', 'TV host ', 'TVhost ', 'Orthodox ', 'No ', '179', 'basic', '', 'Not married ', 0, 'I’m a nice woman , kind ,calm and good hearted . I appreciate family traditions and friendship ', '29-59', 'I’m looking for a good Man I can trust to and to create a strong family together .', '', '+380935068935', 1, 1568710112),
(45, '', 'Marina ', 'Gonchar ', 'Kiev', '160', '49', '24', 'Brown ', 'Brown ', 'Student ', 'Student ', 'Tourism-manager ', 'Orthodox ', 'No ', '160', 'basic', '', 'Not married ', 0, 'Good girl :)', '25-45', 'A nice sincere man ', '', '+380951269251', 1, 1568710607),
(46, '', 'Elena ', 'Manzhos ', 'Kiev', '173', '62', '27', 'Blue ', 'Blond ', 'Higher ', 'Management ', 'Manager ', 'Orthodox ', 'Sometimes ', '173', 'basic', '', 'Single ', 0, 'I’m a kind woman , ready for family . I love children a lot ', '27-47', 'I want to find a nice guy to share happy days ', '', '+380970803150', 1, 1568711073),
(47, '', 'Tatiana', 'Zolkina', 'Kiev', '172', '59', '31', 'green', 'light brown', 'Higher', 'Linguist, medical', 'Writer', 'Orthodox', 'No', '172', 'good', 'German-basic', 'single, never married', 0, 'I am classy, intelligent,sensuel, sophysticated and cultural  lady  ... I am sweet and flexible  like a cat that needs care, love and protection, at the same I am strong and know what I want in this life. I want to be with a man who will be my friend, lover, supporter and just my second part.\r\nIt is so difficult to find in what I am not interested in. I love traveling very much and I would like to travel all over the world ... I like to leran new cultures and foreign languages. I like sports , specially yoga. I love dancing and I was told that I am a great dancer. I also love reading books with the sense of philosophy. One day i want to write my own book.\r\nI am looking for the one and only one man to be my king. A confident, classy gentleman who knows what he wants in life and appreciates quality in everything.... Is it you?', '25-60', '', 'tetianazolkina@gmail.com', '0958185690', 1, 1568711179),
(48, '', 'Maria ', 'Sisoeva ', 'Kiev', '163', '53', '24', 'Dark brown ', 'Brown ', 'Higher ', 'Model ', 'Manager ', 'Orthodox ', 'No ', '163', 'basic', '', 'Single ', 0, 'Good woman , happy , smiling . Kind heart and good sense of humor ', '23-53', 'I need a serious man who knows how to take care of woman .', '', '+380636031196', 1, 1568711555),
(50, '', 'Irina (Ekaterina) ', 'Bartkova ', 'Kiev', '172', '56', '32', 'Blue ', 'Blond ', 'Higher ', 'Manager ', 'Manager ', 'Orthodox ', 'No ', '172', 'basic', '', 'Single ', 0, 'Normal woman who is tired to be single . I’m kind and nice , educated and good mannered ', '36-65', 'I want to find a man who wants serious relations ', '', '+380731526310', 1, 1568711779),
(51, '', 'Sofiya', 'Dunaevskaya', 'Kiev', '173', '61', '34', 'grey-green', 'blond', 'Higher', 'Lawyer', 'Lawyer', 'Orthodox', 'No', '173', 'basic', 'no', 'single, never married', 0, 'Emotional, but this is more of my plus than minus. I can flare up, but very quickly leave.  Leader by nature, but ready to share these laurels with a beloved man. Fun and easy to talk to. I consider myself not very stupid, but sometimes I am a “blond woman”)). In some places I am a difficult person, but my friends adore me.\r\nMy Interests and hobbies are cinema and modern theater. I regularly engage in self-development in the professional field. I love to travel.\r\nWhat I am looking for in a man, who is a charismatic person with a strong energy, leadership qualities, sense of humor. You can write a lot about ideals, but “chemistry” decides a lot in life', '30-60', '', 'dunaevskaya.sofia@gmail.com', '0983003055', 1, 1568711845);

-- --------------------------------------------------------

--
-- Структура таблицы `man`
--

CREATE TABLE `man` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `l_name` varchar(250) DEFAULT NULL,
  `age` varchar(250) DEFAULT NULL,
  `mail` varchar(250) DEFAULT NULL,
  `addr` varchar(250) DEFAULT NULL,
  `professional` mediumtext,
  `is_married` varchar(250) DEFAULT NULL,
  `kids_about` mediumtext,
  `partner_about` mediumtext,
  `girl_about` mediumtext,
  `ukr_girl_about` mediumtext,
  `is_know_cultural` varchar(250) DEFAULT NULL,
  `requirement` mediumtext,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `man`
--

INSERT INTO `man` (`id`, `name`, `l_name`, `age`, `mail`, `addr`, `professional`, `is_married`, `kids_about`, `partner_about`, `girl_about`, `ukr_girl_about`, `is_know_cultural`, `requirement`, `date_created`) VALUES
(1, 'Name', 'Lastname', '25', 'mail@mail.com', 'addr', '', 'married', 'kind', 'parthneer', 'interest', 'ukr', 'cult', 'reqierement', 1564841969),
(2, 'Name', 'Lastname', '25', 'mail@mail.com', 'addr', '', 'married', 'kind', 'parthneer', 'interest', 'ukr', 'cult', 'reqierement', 1564841976),
(3, 'Name', 'Lastname', '25', 'mail@mail.com', 'addr', '', 'married', 'kind', 'parthneer', 'interest', 'ukr', 'cult', 'reqierement', 1564841981),
(4, '', '', '', '', '', '', '', '', '', '', '', '', '', 1565766379),
(5, 'Name', 's_name', '123', 'mail@mail.com', 'addr', '111', '222', '333', '444', '555', '666', '777', '888', 1565766439),
(6, '1', '2', '3', '4@sdf', '5', '6', '7', '8', '9', '0', 'q', 'w', 'e', 1565766491),
(7, '111', '222', '333', '444@dsf', '555', '666', '777', '888', '999', '000', '???', '???', '???', 1567014914),
(8, '', '', '', '', '', '', '', '', '', '', '', '', '', 1567021238),
(9, 'Testmen', '21', '12', '321@wsefrw', '123', '23er', 'erwer', 'werwer', 'vjv', 'bkjhb', 'kjhkj', 'kjhkj', 'kjhkj', 1568654718),
(10, 'Khaled ', 'Alsaeed ', '42', 'alsaeedk97@gmail.com', 'Saudi Arabia - Riyadh', 'Teacher', 'Yes ', 'Yes - 13', 'I am looking for a girl honest good love all Makarem ethics and hate lying and loving and be with me in my joy and sadness and a heart always on me and always attracts me with her attractive smile and movements and clothes exciting to my heart and Toukdni every morning with her soft voice and soft hands on my body and participate in raising our children good education and love dialogue with me in things  Many in an atmosphere full of love and tranquility does not know anger at all but be very calm wife and very peaceful like me I am and want to have children as soon as possible', 'Physical appearance', 'Beauty', 'If a great goal between the two parties is marriage, I do not think that culture will be a barrier and we all know that love at first sight', 'I just want you to be in constant contact with me, whether you are in Saudi Arabia or Ukraine, so that you can make sure that I have completed my marriage and wrote a marriage contract to one of your girls in your esteemed office.', 1568720388),
(11, 'Ahmed', 'A', '39', 'chicagoblue03@gmail.com', 'Saudi ', 'Engineer ', 'Yes', 'Two ', 'Good manners and beautiful ', 'Between 23-33\r\nBlonde \r\nFit\r\n', 'Beautiful and sexy', 'Yes', 'I am just looking for a regular date now. Or some friends with benefits.. nothing serious \r\n\r\nSorry I have not attached any pictures for now. I just wanna know if I could find what I am looking for first then we can go from there. \r\n\r\nAs I said I am not looking for a marriage relationship. I am looking for a date based on respect and dignity. ', 1568906442),
(12, 'Adam', 'Zack', '41', 'abfsm2878@yahoo.com', 'Calgary, Canada ', 'Software engineer ', 'I’m divorced ', 'No kids', 'An easygoing, down to earth, fun, loving and caring. Vegetarian, don’t smoke, don’t drink. Fit, someone who enjoys hiking, camping, traveling. ', '28-36. Fit, athletic. Looking for an outdoorsy person, who enjoys spending sometime in the nature, mountains. \r\nWell educated person, family oriented. ', 'I have couple of friends who got married recently to Ukrainian girls', 'Yes', '', 1568945088);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `login` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `login`, `password`) VALUES
(1, 'Admin', 'admin', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blog_items`
--
ALTER TABLE `blog_items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `girls`
--
ALTER TABLE `girls`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `man`
--
ALTER TABLE `man`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `blog_items`
--
ALTER TABLE `blog_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `girls`
--
ALTER TABLE `girls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT для таблицы `man`
--
ALTER TABLE `man`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
