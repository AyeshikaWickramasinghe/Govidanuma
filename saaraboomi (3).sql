-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 07:35 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saaraboomi`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `body`, `created_at`, `updated_at`) VALUES
(12, 1, 1, 'test1', '2021-04-29 14:19:52', '2021-04-29 14:19:52'),
(16, 1, 1, 'test2', '2021-04-29 14:24:26', '2021-04-29 14:24:26'),
(17, 1, 1, 'test3', '2021-04-29 14:25:42', '2021-04-29 14:25:42'),
(18, 1, 1, 'test4', '2021-04-29 14:34:05', '2021-04-29 14:34:05'),
(19, 1, 1, 'final', '2021-04-29 15:01:47', '2021-04-29 15:01:47'),
(20, 1, 1, 'comment', '2021-05-01 04:48:00', '2021-05-01 04:48:00'),
(21, 1, 1, 'i know ', '2021-05-10 16:11:25', '2021-05-10 16:11:25'),
(22, 1, 1, 'i know solution', '2021-05-16 07:29:01', '2021-05-16 07:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `disease_data`
--

CREATE TABLE `disease_data` (
  `disease` varchar(255) NOT NULL,
  `solution` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disease_data`
--

INSERT INTO `disease_data` (`disease`, `solution`) VALUES
('Corn Northern Leaf Blight', 'රෝග ව්‍යාප්තිය\r\nමෙම රෝගයට හේතු වන දිලීරයේ බීජාණු ආසාදිත කෙත්වල සිට සුළඟින් දුර ප්‍රවාහනය කළ හැකිය. කෙත්වතු තුළ සහ ඒවා අතර පැතිරීම සුළං සමග හමන බීජාණු මගින් සිදු වේ.\r\n\r\nප්‍රතිකාර\r\nබඩ ඉරිඟු පසට යට කිරිම එක් උපක්‍රමයක් වන නමුත් කුඩා උද්‍යානයක් සමඟ හානියට පත් ශාක ඉවත් කර විනාශ කිරීම වඩාත් අර්ථවත් කරයි.\r\nඋතුරු ඉරිඟු කොළ අංගමාරයට ප්‍රතිකාර කිරීම යනු දිලීර නාශක භාවිතා කිරීමයි. බොහෝ ගෙවතු වගාකරුවන් සඳහා මෙම පියවර අවශ්‍ය නොවේ, නමුත් ඔබට නරක ආසාදනයක් ඇත්නම්, ඔබට මෙම රසායනික ප්‍රතිකාරය උත්සාහ කිරීමට අවශ්‍ය විය හැකිය. ආසාදනය සාමාන්‍යයෙන් ආරම්භ වන්නේ සේදීමේ කාලය තුළ වන අතර දිලීර නාශක යෙදිය යුතු අවස්ථාව මෙයයි'),
('Grape Esca (Black Measles)', 'රෝග ලක්ෂණ\r\nඑස්කා, බොට්‍රියෝස්ෆේරියා ඩයිබැක්, යුටිපා ඩයිබැක් සහ ෆොමොප්සිස් ඩයිබැක් විවිධ දැව ආසාදන දිලීර නිසා ඇති වන “කඳ රෝග” වල සංකීර්ණයකි. එස්කා හි පත්‍ර රෝග ලක්ෂණය වන්නේ අන්තර්වාර “ඉරි” ය. රතු වගාවන්හි තද රතු පැහැයෙන් සහ සුදු වගාවන්හි කහ පැහැයෙන් ආරම්භ වන “ඉරි” වියළී ගොස් නෙරෝටික් බවට පත්වේ. වැඩෙන සමයේදී ඕනෑම වේලාවක පත්‍ර රෝග ලක්ෂණ ඇතිවිය හැක. රෝග ලක්ෂණ සහිත කොළ සම්පූර්ණයෙන්ම වියළී නොමේරූ ලෙස පහත වැටෙනු ඇත. \r\n\r\nප්‍රතිකාර\r\nවර්තමානයේ සරම්ප සඳහා ඵලදායි කළමනාකරණ උපාය මාර්ග නොමැත. කුඩා මිදි වතු සහිත වයින් මිදි වගා කරන්නන් බොහෝ විට අස්වැන්න නෙළීමට පෙර ක්ෂේත්‍ර කාර්ය මණ්ඩලය විසින් ආසාදිත පලතුරු ඉවත් කරනු ඇත. සරම්ප රෝගයට ගොදුරු වූ මුද්දරප්පලම් අස්වැන්න නෙළන කාලය තුළ හෝ ඇසුරුම් නිවසේදී ඉවතලනු ලබන අතර සමහර මිදි වගා කරන්නන් මිදි වැල මත පලතුරු ඉතිරි කරනු ලැබේ. වර්තමාන පර්යේෂණයන්හි අවධානය යොමු වී ඇත්තේ දිලීර ආසාදන වලින් කප්පාදු කරන තුවාල ආරක්ෂා කිරීම සඳහා ය.'),
('Potato Early blight', 'රෝග ව්‍යාප්තිය\r\nවැසි, වාරිමාර්ග, කෘමීන් සහ උද්‍යාන මෙවලම් මගින් පැතිරෙයි.\r\n\r\nප්‍රතිකාර\r\n\r\nහොඳම පාලනය සඳහා, තඹ මත පදනම් වූ දිලීර නාශක යෙදීම සිදු කල හැක. රෝගය මුලින්ම ඇති වූ විට ප්‍රතිකාර ආරම්භ කරන්න, අවශ්‍ය පරිදි සෑම දින 7-10 කට වරක් නැවත නැවත කරන්න.\r\n\r\nආසාදිත ශාක කොටස් පිළිස්සීම හෝ බෑග් කිරීම. කොම්පෝස්ට් කරන්න එපා.'),
('Tomato Bacterial spot', 'රෝග ව්‍යාප්තිය\r\nනව වගාවන් සඳහා: ආසාදිත බීජ මත මෙන්ම අවසාන බෝගයේ නටබුන් තුළ පසෙහි ඉතිරිව ඇති බැක්ටීරියා වලින්.\r\nශාක අතර: වැසි ඇද හැලීමෙන්, පොදු වාරිමාර්ග මගින්, කොළ මත පස විසිරී යන විට අතින් ජලය දැමීමෙන්; තෙත් පැල ස්පර්ශ කිරීමෙන් හෝ හැසිරවීමෙනි.\r\nවිවිධ උද්‍යානවල බෝග අතර: සුළං හමන වැසි හෝ වාරිමාර්ග ජලය මගින් නිපදවන මීදුමක.\r\nබීජ පැල සඳහා: බීජ මගින් බැක්ටීරියා හෝ තවාන් පසෙහි බැක්ටීරියා මගින්. \r\n\r\nබෝග අවශේෂ, පස, බීජ හා වල් ධාරක වල  බැක්ටීරියා රැදි පවතී.\r\n\r\nප්‍රතිකාර\r\nතඹ දිලීර නාශක යනු බැක්ටීරියා පත්‍ර ලප සඳහා වඩාත් නිර්දේශිත ප්‍රතිකාරයයි. වර්ෂාවකට පෙර හෝ පසුව ඔබට තඹ දිලීර නාශක ඉසින භාවිතා කළ හැකිය, නමුත් වැසි වැටෙන අතරතුර තඹ දිලීර නාශක සමඟ ප්‍රතිකාර නොකරන්න. ඔබ බැක්ටීරියා පත්‍රයේ සලකුණු දකින්නේ නම්, දින හතක් හෝ 10 ක් සඳහා තඹ දිලීර නාශකයක් සමග ඉසින්න, ඉන්පසු සතියකට පසු නැවත ඉසින්න. වියළි කාලගුණය තුළ සෑම දින 10 කට වරක් සහ වැසි සහිත කාලගුණය තුළ සෑම දින පහක් හෝ හතක් සඳහා නඩත්තු ප්‍රතිකාර සිදු කරන්න.'),
('Invalid Image', 'හදුනා නොගත් රෝගයකි');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'hansi', 'dhulanjala@gmail.com', 774231723, 'yui', '2021-04-29 09:35:57', '2021-04-29 09:35:57'),
(1, 'hansi', 'dhulanjala@gmail.com', 774231723, 'yui', '2021-04-29 09:37:54', '2021-04-29 09:37:54'),
(1, 'wid', 'hansi.2017589@iit.ac.lk', 774231723, 'nope', '2021-04-29 09:38:39', '2021-04-29 09:38:39'),
(1, 'hansi', 'dhulanjala@gmail.com', 774231723, 'done', '2021-05-01 04:47:15', '2021-05-01 04:47:15'),
(1, 'hansi', 'dhulanjala@gmail.com', 774231723, 'known disease', '2021-05-10 16:10:59', '2021-05-10 16:10:59'),
(1, 'hansi', 'dhulanjala@gmail.com', 774231723, 'knonwn disease', '2021-05-13 11:38:37', '2021-05-13 11:38:37'),
(1, 'hansi', 'dhulanjala@gmail.com', 774231723, 'known image', '2021-05-13 12:36:18', '2021-05-13 12:36:18'),
(1, 'hansi', 'dhulanjala@gmail.com', 774231723, 'known image', '2021-05-16 07:28:11', '2021-05-16 07:28:11'),
(1, 'hansi', 'dhulanjala@gmail.com', 774231723, 'known imahe', '2021-05-16 12:25:45', '2021-05-16 12:25:45'),
(1, 'hansi', 'dhulanjala@gmail.com', 774231723, 'known', '2021-05-17 10:00:33', '2021-05-17 10:00:33');

-- --------------------------------------------------------

--
-- Table structure for table `replie`
--

CREATE TABLE `replie` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replie`
--

INSERT INTO `replie` (`id`, `user_id`, `comment_id`, `body`, `created_at`, `updated_at`) VALUES
(8, 1, 10, 'io', '2021-04-25 05:25:31', '2021-04-25 05:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passcode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `passcode`) VALUES
(1, 'Hansi', 'iit@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replie`
--
ALTER TABLE `replie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `replie`
--
ALTER TABLE `replie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
