-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 16, 2025 at 09:19 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion_shop`
--

DELIMITER $$
--
-- Functions
--
DROP FUNCTION IF EXISTS `fnStripTags`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `fnStripTags` (`Dirty` VARCHAR(4000)) RETURNS VARCHAR(4000) CHARSET utf8mb3 DETERMINISTIC BEGIN
  DECLARE iStart, iEnd, iLength   INT;

  WHILE locate('<', Dirty) > 0 AND locate('>', Dirty, locate('<', Dirty)) > 0
  DO
    BEGIN
      SET iStart = locate('<', Dirty), iEnd = locate('>', Dirty, locate('<', Dirty));
      SET iLength = (iEnd - iStart) + 1;
      IF iLength > 0 THEN
        BEGIN
          SET Dirty = insert(Dirty, iStart, iLength, '');
        END;
      END IF;
    END;
  END WHILE;
  set Dirty=REPLACE(Dirty,"$nbsp;","");
  RETURN Dirty;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

DROP TABLE IF EXISTS `tbl_comments`;
CREATE TABLE IF NOT EXISTS `tbl_comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `text` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `enable` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`id`, `name`, `text`, `enable`) VALUES
(1, 'سارا محمدی', '«کیفیت لباس‌های نکستژن فوق‌العاده است! من عاشق این برند هستم و به همه توصیه می‌کنم.»', 1),
(2, 'علی کریمی', '«سرعت ارسال عالی و بسته‌بندی مرتب. از خریدم کاملاً راضی هستم.»', 1),
(3, 'مریم رضایی', '«تنوع محصولات زیاد و قیمت‌ها مناسب است. پشتیبانی هم خیلی سریع پاسخگو بود.»', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contacts`
--

DROP TABLE IF EXISTS `tbl_contacts`;
CREATE TABLE IF NOT EXISTS `tbl_contacts` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` int NOT NULL,
  `ip` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_contacts`
--

INSERT INTO `tbl_contacts` (`id`, `fullname`, `phone`, `email`, `text`, `date`, `ip`) VALUES
(1, 'ali', '02176223549', 'aliagha@gmail.com', 'test', 1744562237, '::1'),
(2, 'ali', '02176223549', 'aliagha@gmail.com', 'test', 1744562991, '127.0.0.1'),
(3, 'mina', '09120234153', 'minabala@yahoo.com', 'this is test', 1744563099, '::1'),
(4, 'mina', '09120234153', 'minabala@yahoo.com', 'this is test', 1744563597, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menus`
--

DROP TABLE IF EXISTS `tbl_menus`;
CREATE TABLE IF NOT EXISTS `tbl_menus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parent_id` int NOT NULL,
  `title` varchar(50) NOT NULL,
  `target_type` enum('Internal','External') NOT NULL,
  `target` varchar(300) NOT NULL,
  `new_window` tinyint(1) NOT NULL,
  `sort` int NOT NULL,
  `enable` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_menus`
--

INSERT INTO `tbl_menus` (`id`, `parent_id`, `title`, `target_type`, `target`, `new_window`, `sort`, `enable`) VALUES
(1, 0, 'خانه', 'Internal', 'main', 0, 1, 1),
(2, 0, 'زنانه', 'Internal', 'blog', 0, 2, 1),
(3, 0, 'مردانه', 'Internal', 'gallery', 0, 3, 1),
(4, 0, 'بچگانه', 'Internal', 'projects', 0, 4, 1),
(5, 0, 'جدیدترین ها', 'Internal', 'about', 0, 5, 1),
(6, 0, 'تخفیف ها', 'Internal', 'contact', 0, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

DROP TABLE IF EXISTS `tbl_pages`;
CREATE TABLE IF NOT EXISTS `tbl_pages` (
  `name` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `seo_title` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `link_title` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `text` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `keywords` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `description` varchar(1500) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `custom_page` tinyint(1) NOT NULL,
  `custom_url` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `enable` tinyint(1) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`name`, `title`, `seo_title`, `link_title`, `text`, `keywords`, `description`, `custom_page`, `custom_url`, `enable`) VALUES
('about-us', 'about-us', 'about us', 'about_us', '', 'about us', 'about us', 0, 'about-us', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

DROP TABLE IF EXISTS `tbl_products`;
CREATE TABLE IF NOT EXISTS `tbl_products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `description` varchar(1500) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `details` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `price` int NOT NULL,
  `enable` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

DROP TABLE IF EXISTS `tbl_services`;
CREATE TABLE IF NOT EXISTS `tbl_services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `icon` varchar(30) NOT NULL,
  `sort` int NOT NULL,
  `enable` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`id`, `title`, `text`, `icon`, `sort`, `enable`) VALUES
(1, 'خدمت اول', '<p>\n					لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم ...\n				</p>', 'fi-ok', 1, 1),
(2, 'خدمت دوم', '<p>\n					لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم ...\n				</p>', 'fi-gift', 2, 1),
(3, 'خدمت سوم', '<p>\n					لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم ...\n				</p>', 'fi-compass', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

DROP TABLE IF EXISTS `tbl_settings`;
CREATE TABLE IF NOT EXISTS `tbl_settings` (
  `name` varchar(50) NOT NULL,
  `value` text NOT NULL,
  `description` text NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`name`, `value`, `description`, `enable`) VALUES
('service_title', 'خدمات شرکت', 'عنوان بخش سرویس در صفحه اصلی', 1),
('portfolio_title', 'آخرین نمونه کارها', 'عنوان بخش پورتفولیو در صفحه اصلی', 1),
('site_title', 'فروشگاه لباس | نکسترن', 'عنوان سایت', 1),
('site_keywords', 'فروشگاه لباس | نکسترن', 'کلمات کلیدی', 1),
('site_description', 'فروشگاه لباس | نکسترن', 'توضیحات سایت', 1),
('blog_title', 'آخرین های وبلاگ', 'عنوان بخش آخرین بلاگ در صفحه اصلی', 1),
('main_why', '{\"Titel\":\"چرا باید شرکت ما را انتخاب نمایید\",\"Text\":\"\n\\r\\n\\t\\t\\tلورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.\\r\\n\\t\\t<\\/p>\\r\\n\\t\\t\n\n\\r\\n\\t\\t\\tدر این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.\\r\\n\\t\\t<\\/p>\\r\\n\\t\\t\n\n\\r\\n\\t\\t\\t\nخلاقیت در طراحی<\\/li>\\r\\n\\t\\t\\t\nطراحی و چاپ ست اداری<\\/li>\\r\\n\\t\\t\\t\nطراحی و چاپ کارت ویزیت<\\/li>\\r\\n\\t\\t\\t\nمشاور تبلیغات و بازاریابی<\\/li>\\r\\n\\t\\t\\t\nفروش محصولات گرافیکی و آموزشی<\\/li>\\r\\n\\t\\t\\t\nطراحی و چاپ بسته بندی های کارخانجات<\\/li>\\r\\n\\t\\t\\t\nطراحی و برنامه نویسی اختصاصی وبسایت<\\/li>\\r\\n\\t\\t<\\/ul>\'\",\"ImageURL\":\"assets\\/img\\/10.png\"}', 'متن صفحه چرا', 1),
('main_slogan', '{\"Text\":\"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.\",\"Link\":\"http:\\/\\/www.webim.ir\\/\",\"ButtonTitle\":\"مشاهده توصیه...\",\"NewWindow\":true}', 'متن قسمت شعار', 1),
('social_network', '{\"Facebook\":{\"Icon\":\"fi-facebook-squared\",\"Link\":\"https:\\/\\/facebook.com\\/\"},\"Linkedin\":{\"Icon\":\"fi-linkedin-squared\",\"Link\":\"https:\\/\\/linkedin.com\\/\"},\"Twitter\":{\"Icon\":\"fi-twitter-squared\",\"Link\":\"https:\\/\\/twitter.com\\/\"},\"GooglePlus\":{\"Icon\":\"fi-gplus-squared\",\"Link\":\"https:\\/\\/plus.google.com\\/\"}}', 'فوتر شبکه های اجتماعی', 1),
('main_footer', '{\"Footer\":{\"IconPhone\":\"fi-phone-squared\",\"Phone\":\"041-35574907\",\"IconQuestion\":\"fi-question\",\"QuestionText\":\"سوالات متداول\"}}', 'فوتر بالا قسمت وسط', 1),
('main_address', '{\"Address\":{\"Title\":\"اطلاعات تماس\",\"IconPhone\":\"fi-phone-1\",\"Phone\":\"041-33356089\",\"Address\":\"آذربایجان شرقی - تبریز - آبـرسان ، خیابان پاستـور جدید ، تقاطـع ۱۳ آبـان ، پلاک ۹۵ طبـقه دوم\",\"Email\":\"lemontheme.com@gmail.com\",\"IconEmail\":\"fi-mail\",\"ImageURL\":\"assets\\/img\\/company-logo-black.png\"}}', 'قسمت آدرس و اطلاعات تماس در فوتر', 1),
('main_copyright', '{\"CopyRight\":{\"Title\":\"تمامی حقوق سایت اعم از قالب و محتوا برای وبیم محفوظ می باشد \",\"URL\":\"http:\\/\\/lemontheme.com\\/\",\"ImageUrl\":\"assets\\/img\\/lemontheme.png\"}}', 'فوتر قسمت کپی رایت', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sliders`
--

DROP TABLE IF EXISTS `tbl_sliders`;
CREATE TABLE IF NOT EXISTS `tbl_sliders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `more` varchar(50) NOT NULL,
  `sort` int NOT NULL,
  `enable` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbl_sliders`
--

INSERT INTO `tbl_sliders` (`id`, `title`, `description`, `more`, `sort`, `enable`) VALUES
(1, 'بهار ۱۴۰۴ با استایل جدید!', 'مجموعه جدید بهاره با طراحی منحصر به فرد و پارچه‌های با کیفیت', 'مشاهده کالکشن', 1, 1),
(2, 'تخفیف‌های ویژه زمستانه', 'تا ۵۰٪ تخفیف برای انواع لباس‌های زمستانی', 'خرید با تخفیف', 2, 1),
(3, 'استایل منحصر به فرد', 'خاص‌ترین طرح‌ها برای شخصیت متفاوت شما', '', 3, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
