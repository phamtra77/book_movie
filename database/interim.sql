-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 14, 2022 lúc 02:51 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `interim`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking_event`
--

CREATE TABLE `booking_event` (
  `id` int(11) NOT NULL,
  `ticket_id` varchar(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_type` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `no_of_seats` int(11) NOT NULL,
  `amount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `booking_event`
--

INSERT INTO `booking_event` (`id`, `ticket_id`, `customer_name`, `email`, `event_name`, `event_type`, `location`, `date`, `time`, `no_of_seats`, `amount`) VALUES
(2, 'BKID6841', 'Aarti Patel', 'paartip30@gmail.com', ' Carnival Party', ' Others', 'The Oberoi Grand,Kolkata', '2021-01-01', '6:00 PM - 10:00 PM', 3, '1500');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking_movie`
--

CREATE TABLE `booking_movie` (
  `id` int(11) NOT NULL,
  `ticket_id` varchar(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `movie_name` varchar(100) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `theatre_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `show_time` varchar(20) DEFAULT NULL,
  `no_of_seats` int(11) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `seat_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `booking_movie`
--

INSERT INTO `booking_movie` (`id`, `ticket_id`, `customer_name`, `email`, `movie_name`, `city_name`, `theatre_name`, `date`, `show_time`, `no_of_seats`, `amount`, `seat_no`) VALUES
(41, 'BKID6175', 'Aarti Patel', 'paartip30@gmail.com', 'The Outpost', 'Bhubaneswar', 'Maharaj Cinema', '2021-01-10', '9:00 AM', 1, '250', ''),
(42, 'BKID8679', 'Anjan Guha', 'guha.anjan1@gmail.com', 'Gunjan Saxena', 'Kolkata', 'Laxmii Cinemas', '2021-01-10', '11:30 AM', 5, '1750', ''),
(43, 'BKID4559', 'Anjan Guha', 'guha.anjan1@gmail.com', 'Bloodshot', 'Kolkata', 'IMAX 3D', '2021-01-08', '11:30 AM', 5, '1750', ''),
(44, 'BKID6251', 'jaym das', 'jaym@gmail.com', 'Gunjan Saxena', 'Kolkata', 'PVR Cinema', '2021-01-10', '11:30 AM', 2, '500', ''),
(46, 'BKID5915', 'tra', 'phamthutra77200@gmail.com', 'SPIDER MAN: NO WAY HOME', 'Pune', 'Ramoji FilmCity', '2022-01-15', '9:00 AM', 2, '500', ''),
(47, 'BKID8015', 'tra', 'phamthutra77200@gmail.com', ' Cổng Địa Ngục Guimoon', 'TP. Vinh', 'Galaxy Cinema', '2022-01-15', '4:30 PM', 3, '750', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contactusquery`
--

CREATE TABLE `contactusquery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `EmailId` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `ContactNumber` char(11) CHARACTER SET latin1 DEFAULT NULL,
  `Message` longtext CHARACTER SET latin1 DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contactusquery`
--

INSERT INTO `contactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`, `status`) VALUES
(9, 'Tra', 'phamthutra77200@gmail.com', '0396203792', 'Web b? ích', '2022-01-14 13:49:47', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `event_date` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `cost` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_type`, `description`, `event_date`, `time`, `location`, `cost`, `image`) VALUES
(3, 'Stocks and Shares Speech', 'Talk Show', 'A Speech on Stock Markets and Liquidity Funds.', '2020-12-06', '10:00 AM - 12:00 PM', 'Mayfair,Bhubaneswar', 200, '../images/harshad.jpg'),
(4, 'Bhavin Shah', 'Motivational', 'Motivational Speech', '2020-12-16', '4:00 PM - 5:00 PM', 'University of Calcutta,Kolkata', 250, '../images/motivational.jpg'),
(5, 'Business Seminar', 'Seminar', 'Adam Plander: Marketing Leader', '2020-12-08', '9:00 AM - 12:00 PM', 'Online', 300, '../images/corporateseminar.jpg'),
(6, 'Carnival Party', 'Others', 'Live Music', '2021-01-01', '6:00 PM - 10:00 PM', 'The Oberoi Grand,Kolkata', 500, '../images/carnival.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `location`
--

INSERT INTO `location` (`id`, `city_name`) VALUES
(1, 'TP. Vinh'),
(2, 'TP. Hà Nội'),
(3, 'TP. Hồ Chí Minh'),
(4, 'TP. Đà Nẵng'),
(5, 'TP. Hà Tĩnh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(100) NOT NULL,
  `movie_type` varchar(20) DEFAULT NULL,
  `language` varchar(30) NOT NULL,
  `duration` varchar(30) DEFAULT NULL,
  `movie_cast` varchar(100) NOT NULL,
  `director` varchar(50) NOT NULL,
  `release_date` date NOT NULL,
  `rating` decimal(4,1) DEFAULT NULL,
  `image` varchar(200) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `movie_type`, `language`, `duration`, `movie_cast`, `director`, `release_date`, `rating`, `image`, `link`) VALUES
(15, 'SPIDER MAN: NO WAY HOME', 'Phim viễn tưởng', 'Hindi', '150 phút', 'Tom Holland, Zendaya, Benedict Cumberbatch, Jon Favreau, Jacob Batalon, Marisa Tomei', 'Jon Watts', '2021-12-17', '5.0', '../images/cgB1hLnZUvKAz6YJubwkGCap4OReMS09.jpg', 'https://www.youtube.com/watch?v=rWmCAJxZIPg'),
(16, ' Cổng Địa Ngục Guimoon', 'Phim kinh dị', 'Hindi', '85 phút', 'Kim Kang-woo, Kim So-hye, Lee Jung-hyoung, Hong Jin-gi', 'Sim Deok-geun', '2022-01-14', '4.0', '../images/guimoon-teaser_poster_1_.jpg', 'https://www.youtube.com/watch?v=mCMfNoWKCRk'),
(17, 'Cua lại vợ bầu', 'Phim hài', 'Telugu', '120 phút', 'Trấn Thành, Ninh Dương Lan Ngọc, Anh Tú', 'Nhất Trung', '2021-02-02', '4.8', '../images/MV5BZDFkOWFkZjAtYmI4Zi00NDEzLWIyMjYtNzEzOTZkNjNhYTQzXkEyXkFqcGdeQXVyNDc0Njc1NTY@._V1_.jpg', 'https://www.youtube.com/watch?v=l8vTMxuvz6Y'),
(18, 'PETER RABBIT 2: THE RUNAWAY', 'Phim hoạt hình', 'Hindi', '120 phút', 'Rose Byrne, Domhnall Gleeson, James Corden ', 'Will Gluck', '2022-01-28', '4.0', '../images/tho-peter-2.jpg', 'https://www.youtube.com/watch?v=euGHcnyUo84'),
(19, 'Bẫy ngọt ngào', 'Phim tình cảm', 'Telugu', '95 phút', 'Minh Hằng, Diệu Nhi, Bảo Anh, Thuận Nguyễn', 'Đinh Hà Uyên Thư', '2022-01-28', '6.1', '../images/main-poster_bnn_copy_1_.jpg', 'https://www.youtube.com/watch?v=reyG2qWzG-M'),
(20, 'NO TIME TO DIE', 'Phim hành động', 'Hindi', '164 phút', 'Daniel Craig, Rami Malek, Naomie Harris, Léa Seydoux', 'Cary Joji Fukunaga', '2021-12-21', '8.6', '../images/download.jpg', 'https://www.youtube.com/watch?v=N_gD9-Oa0fg'),
(21, 'Sing 2', 'Phim hoạt hình', 'Hindi', '100 phút', '  Matthew McConaughey, Scarlett Johansson, Reese Witherspoon', 'Garth Jennings', '2022-02-01', '7.6', '../images/Dau-Truong-Am-Nhac-2-Sing-2-2021-poster.jpg', 'https://www.youtube.com/watch?v=EPZu5MA2uqI'),
(22, 'The Batman', 'Phim viễn tưởng', 'Hindi', '150 phút', 'Robert Pattinson, Colin Farrell, Zoe Kravitz, Andy Serkis ', 'Matt Reeves', '2022-03-04', '7.6', '../images/MV5BYTExZTdhY2ItNGQ1YS00NjJlLWIxMjYtZTI1MzNlMzY0OTk4XkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_FMjpg_UX1000_.jpg', 'https://www.youtube.com/watch?v=mqqft2x_Aa4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `review_rating`
--

CREATE TABLE `review_rating` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `show_watched` varchar(100) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `review` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `review_rating`
--

INSERT INTO `review_rating` (`id`, `name`, `show_watched`, `rating`, `review`) VALUES
(1, 'Anjan Guha', 'The Outpost', '5.7', 'Good'),
(2, 'Anjan Kumar Guha', 'Gunjan Saxena', '8.9', 'Excellent Movie'),
(3, 'Anjan Kumar Guha', 'The Outpost', '6.2', 'good'),
(4, 'subhrajeet', 'Gunjan Saxena', '6.2', 'good'),
(5, 'Tra', 'SPIDER MAN: NO WAY HOME', '', 'Sieeuuu hayyyy'),
(6, 'Tra', 'SPIDER MAN: NO WAY HOME', '', 'Sieeuuu hayyyy'),
(7, 'Tra', 'SPIDER MAN: NO WAY HOME', '4.8', 'Siêu hayyy'),
(8, 'Tra', 'Cổng Địa Ngục Guimoon', '4.0', 'Chưa xem chưa biết');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theatre`
--

CREATE TABLE `theatre` (
  `id` int(11) NOT NULL,
  `theatre_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` char(15) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `theatre`
--

INSERT INTO `theatre` (`id`, `theatre_name`, `email`, `contact_no`, `location`) VALUES
(1, 'Galaxy Cinema', 'galaxy_cinema@gmail.com', '067455555555', 'TP. Vinh'),
(2, 'CGV Cinemas', 'cgv_cinema@gmail.com', ' 03417895644', 'TP. Hà Tĩnh'),
(3, 'VRC Cinema', 'crv_cinema@gmail.com', ' 03478999633', 'TP. Đà Nẵng'),
(4, 'Platinum Cineplex Times City', 'platinum@gmail.com', ' 89996663331', 'TP. Hà Nội'),
(5, '12/9 Cinema', '12/9_cinema@gmail.com', ' 7888966633', 'TP. Hồ Chí Minh'),
(6, 'Lotte cinema', 'lottle_cinema@gmail.com', ' 78945612378', 'TP. Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact_no` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `contact_no`) VALUES
(11, 'tra', 'phamthutra77200@gmail.com', 'tra77', '0396203792');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `booking_event`
--
ALTER TABLE `booking_event`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `booking_movie`
--
ALTER TABLE `booking_movie`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contactusquery`
--
ALTER TABLE `contactusquery`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Chỉ mục cho bảng `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Chỉ mục cho bảng `review_rating`
--
ALTER TABLE `review_rating`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `booking_event`
--
ALTER TABLE `booking_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `booking_movie`
--
ALTER TABLE `booking_movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `contactusquery`
--
ALTER TABLE `contactusquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `review_rating`
--
ALTER TABLE `review_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `theatre`
--
ALTER TABLE `theatre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
