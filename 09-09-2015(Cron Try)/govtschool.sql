-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2015 at 08:22 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `govtschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `executive`
--

CREATE TABLE IF NOT EXISTS `executive` (
  `id` int(11) NOT NULL,
  `name_en` varchar(30) NOT NULL,
  `name_bn` varchar(30) NOT NULL,
  `designation_en` varchar(15) NOT NULL,
  `designation_bn` varchar(15) NOT NULL,
  `category` varchar(15) NOT NULL,
  `image` varchar(100) NOT NULL,
  `details_en` longtext NOT NULL,
  `details_bn` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `executive`
--

INSERT INTO `executive` (`id`, `name_en`, `name_bn`, `designation_en`, `designation_bn`, `category`, `image`, `details_en`, `details_bn`, `created_at`, `updated_at`) VALUES
(4, 'Dr. Dan Scarsbrook', 'Principle', 'Principle', 'Principle', '', '1440223273.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse aliquam, tellus id pellentesque viverra, metus lacus lobortis augue, sed malesuada urna sapien id orci. Maecenas pharetra mauris quis tincidunt egestas. Sed condimentum felis quis nulla varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam diam diam, porttitor quis mollis non, suscipit id tellus. Nullam a ultrices sem, vel tincidunt felis. Sed eu suscipit erat. Nam malesuada, leo porta rhoncus blandit, ipsum tellus fringilla mi, ac pretium nisl turpis sit amet purus. Mauris pellentesque tincidunt lacus commodo lobortis. Nulla consectetur scelerisque molestie.', '', '2015-08-22 05:24:06', '2015-08-22 06:01:13');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `id` int(11) NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `title_bn` varchar(200) NOT NULL,
  `description_en` varchar(2000) NOT NULL,
  `description_bn` varchar(2000) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `title_en`, `title_bn`, `description_en`, `description_bn`, `created_at`, `updated_at`) VALUES
(1, 'National Aviation University', 'National Aviation University', '<p>After reading the January 1975 issue of Popular Electronics that demonstrated the Altair 8800, Gates contacted Micro Instrumentation and Telemetry Systems (MITS), the creators of the new microcomputer, to inform them that he and others were working on a BASIC interpreter for the platform.</p>\r\n', '<p>After reading the January 1975 issue of Popular Electronics that demonstrated the Altair 8800, Gates contacted Micro Instrumentation and Telemetry Systems (MITS), the creators of the new microcomputer, to inform them that he and others were working on a BASIC interpreter for the platform.</p>\r\n', '2015-08-13 10:39:41', '2015-08-13 10:39:41');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `id` int(11) NOT NULL,
  `phrase` longtext COLLATE utf8_unicode_ci NOT NULL,
  `english` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `bengali` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=235 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `phrase`, `english`, `bengali`, `created_at`, `updated_at`) VALUES
(1, 'login', 'login', 'লগইন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'account_type', 'account type', 'অ্যাকাউন্ট টাইপ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'admin', 'admin', 'অ্যাডমিন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'teacher', 'teacher', 'শিক্ষক', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'student', 'student', 'ছাত্র', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'parent', 'parent', 'পিতা বা মাতা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'email', 'email', 'ইমেইল', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'password', 'password', 'পাসওয়ার্ড', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'forgot_password', 'forgot password ?', 'পাসওয়ার্ড ভুলে গেছেন?', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'reset_password', 'reset password', 'পাসওয়ার্ড রিসেট', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'reset', 'reset', 'রিসেট করুন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'admin_dashboard', 'admin dashboard', 'অ্যাডমিন ড্যাশবোর্ড', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'account', 'account', 'হিসাব', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'profile', 'profile', 'পরিলেখ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'change_password', 'change password', 'পাসওয়ার্ড পরিবর্তন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'logout', 'logout', 'লগ আউট', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'panel', 'panel', 'প্যানেল', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'dashboard_help', 'dashboard help', 'ড্যাশবোর্ড সহায়তা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'dashboard', 'dashboard', 'ড্যাশবোর্ড', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'student_help', 'student help', 'শিক্ষার্থীর সাহায্য', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'teacher_help', 'teacher help', 'শিক্ষক সাহায্য', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'subject_help', 'subject help', 'বিষয় সাহায্য', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'subject', 'subject', 'বিষয়', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'class_help', 'class help', 'বর্গ সাহায্য', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'class', 'class', 'বর্গ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'exam_help', 'exam help', 'পরীক্ষায় সাহায্য', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'exam', 'exam', 'পরীক্ষা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'marks_help', 'marks help', 'চিহ্ন সাহায্য', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'marks-attendance', 'marks-attendance', 'চিহ্ন-উপস্থিতির', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'grade_help', 'grade help', 'গ্রেড সাহায্য', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'exam-grade', 'exam-grade', 'পরীক্ষার শ্রেণী', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'class_routine_help', 'class routine help', 'ক্লাসের রুটিন সাহায্য', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'class_routine', 'class routine', 'ক্লাসের রুটিন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'invoice_help', 'invoice help', 'চালান সাহায্য', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'payment', 'payment', 'প্রদান', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'book_help', 'book help', 'বইয়ের সাহায্য', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'library', 'library', 'লাইব্রেরি', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'transport_help', 'transport help', 'যানবাহনের সাহায্য', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'transport', 'transport', 'পরিবহন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'dormitory_help', 'dormitory help', 'আস্তানা সাহায্য', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'dormitory', 'dormitory', 'শ্রমিক - আস্তানা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'noticeboard_help', 'noticeboard help', 'নোটিশবোর্ড সাহায্য', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'noticeboard-event', 'noticeboard-event', 'নোটিশবোর্ড-ইভেন্ট', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'bed_ward_help', 'bed ward help', 'বিছানা ওয়ার্ড সাহায্য', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'settings', 'settings', 'সেটিংস', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'system_settings', 'system settings', 'সিস্টেম সেটিংস', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'manage_language', 'manage language', 'ভাষা ও পরিচালনা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'backup_restore', 'backup restore', 'ব্যাকআপ পুনঃস্থাপন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'profile_help', 'profile help', 'সাহায্য প্রোফাইল', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'manage_student', 'manage student', 'শিক্ষার্থী ও পরিচালনা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'manage_teacher', 'manage teacher', 'শিক্ষক ও পরিচালনা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'noticeboard', 'noticeboard', 'নোটিশবোর্ড', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'language', 'language', 'ভাষা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'backup', 'backup', 'ব্যাকআপ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'calendar_schedule', 'calendar schedule', 'ক্যালেন্ডার সময়সূচী', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'select_a_class', 'select a class', 'একটি শ্রেণী নির্বাচন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'student_list', 'student list', 'শিক্ষার্থীর তালিকা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'add_student', 'add student', 'ছাত্র যোগ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'roll', 'roll', 'রোল', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'photo', 'photo', 'ছবি', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'student_name', 'student name', 'শিক্ষার্থীর নাম', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'address', 'address', 'ঠিকানা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'options', 'options', 'অপশন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'marksheet', 'marksheet', 'marksheet', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'id_card', 'id card', 'আইডি কার্ড', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'edit', 'edit', 'সম্পাদন করা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'delete', 'delete', 'মুছে ফেলা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'personal_profile', 'personal profile', 'ব্যক্তিগত প্রোফাইল', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'academic_result', 'academic result', 'একাডেমিক ফলাফল', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'name', 'name', 'নাম', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'birthday', 'birthday', 'জন্মদিন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'sex', 'sex', 'লিঙ্গ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'male', 'male', 'পুরুষ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'female', 'female', 'মহিলা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'religion', 'religion', 'ধর্ম', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'blood_group', 'blood group', 'রক্তের বিভাগ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'phone', 'phone', 'ফোন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'father_name', 'father name', 'পিতার নাম', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'mother_name', 'mother name', 'মায়ের নাম', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'edit_student', 'edit student', 'সম্পাদনা ছাত্র', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'teacher_list', 'teacher list', 'শিক্ষক তালিকা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'add_teacher', 'add teacher', 'শিক্ষক যোগ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'teacher_name', 'teacher name', 'শিক্ষক নাম', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'edit_teacher', 'edit teacher', 'সম্পাদনা শিক্ষক', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'manage_parent', 'manage parent', 'অভিভাবক ও পরিচালনা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'parent_list', 'parent list', 'মূল তালিকা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'parent_name', 'parent name', 'মূল নাম', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'relation_with_student', 'relation with student', 'ছাত্রদের সঙ্গে সম্পর্ক', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'parent_email', 'parent email', 'মূল ইমেইল', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'parent_phone', 'parent phone', 'ঊর্ধ্বতন ফোন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'parrent_address', 'parrent address', 'parrent ঠিকানা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'parrent_occupation', 'parrent occupation', 'parrent বৃত্তি', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'add', 'add', 'যোগ করা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'parent_of', 'parent of', 'অভিভাবক', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'profession', 'profession', 'পেশা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'edit_parent', 'edit parent', 'সম্পাদনা ঊর্ধ্বতন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 'add_parent', 'add parent', 'ঊর্ধ্বতন যোগ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'manage_subject', 'manage subject', 'বিষয় ও পরিচালনা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'subject_list', 'subject list', 'বিষয় তালিকা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'add_subject', 'add subject', 'বিষয় যোগ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'subject_name', 'subject name', 'বিষয় নাম', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'edit_subject', 'edit subject', 'সম্পাদনা বিষয়', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'manage_class', 'manage class', 'ক্লাস ও পরিচালনা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'class_list', 'class list', 'বর্গ তালিকা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'add_class', 'add class', 'ক্লাসে যোগ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 'class_name', 'class name', 'শ্রেণীর নাম', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'numeric_name', 'numeric name', 'সাংখ্যিক নাম', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 'name_numeric', 'name numeric', 'সাংখ্যিক নাম দিন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'edit_class', 'edit class', 'সম্পাদনা বর্গ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'manage_exam', 'manage exam', 'পরীক্ষা পরিচালনা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'exam_list', 'exam list', 'পরীক্ষার তালিকা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 'add_exam', 'add exam', 'পরীক্ষার যোগ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'exam_name', 'exam name', 'পরীক্ষার নাম', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'date', 'date', 'তারিখ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 'comment', 'comment', 'মন্তব্য', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 'edit_exam', 'edit exam', 'সম্পাদনা পরীক্ষা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 'manage_exam_marks', 'manage exam marks', 'পরীক্ষা চিহ্ন ও পরিচালনা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 'manage_marks', 'manage marks', 'চিহ্ন ও পরিচালনা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 'select_exam', 'select exam', 'পরীক্ষার নির্বাচন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 'select_class', 'select class', 'বর্গ নির্বাচন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 'select_subject', 'select subject', 'বিষয় নির্বাচন করুন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 'select_an_exam', 'select an exam', 'একটি পরীক্ষা নির্বাচন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 'mark_obtained', 'mark obtained', 'চিহ্নিত প্রাপ্ত', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 'attendance', 'attendance', 'উপস্থিতি', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 'manage_grade', 'manage grade', 'গ্রেড পরিচালনা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 'grade_list', 'grade list', 'গ্রেড তালিকা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 'add_grade', 'add grade', 'গ্রেড যোগ করুন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 'grade_name', 'grade name', 'গ্রেড নাম', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 'grade_point', 'grade point', 'গ্রেড পয়েন্ট', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 'mark_from', 'mark from', 'চিহ্ন থেকে', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 'mark_upto', 'mark upto', 'পর্যন্ত চিহ্নিত', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 'edit_grade', 'edit grade', 'সম্পাদনা গ্রেড', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 'manage_class_routine', 'manage class routine', 'ক্লাসের রুটিন পরিচালনা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 'class_routine_list', 'class routine list', 'ক্লাসের রুটিন তালিকা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 'add_class_routine', 'add class routine', 'ক্লাসের রুটিন যুক্ত', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 'day', 'day', 'দিন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 'starting_time', 'starting time', 'সময়ের শুরু', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 'ending_time', 'ending time', 'সময় শেষ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 'edit_class_routine', 'edit class routine', 'সম্পাদনা ক্লাস রুটিন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 'manage_invoice/payment', 'manage invoice/payment', 'চালান / পেমেন্ট পরিচালনা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 'invoice/payment_list', 'invoice/payment list', 'চালান / পেমেন্ট তালিকা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 'add_invoice/payment', 'add invoice/payment', 'চালান / পেমেন্ট যোগ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 'title', 'title', 'খেতাব', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 'description', 'description', 'বিবরণ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 'amount', 'amount', 'পরিমাণ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 'status', 'status', 'অবস্থা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 'view_invoice', 'view invoice', 'দেখুন চালান', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 'paid', 'paid', 'পরিশোধ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 'unpaid', 'unpaid', 'অবৈতনিক', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 'add_invoice', 'add invoice', 'চালান যোগ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 'payment_to', 'payment to', 'পেমেন্ট', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 'bill_to', 'bill to', 'বিল', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 'invoice_title', 'invoice title', 'চালান শিরোনাম', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 'invoice_id', 'invoice id', 'চালান আইডি', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 'edit_invoice', 'edit invoice', 'সম্পাদনা চালান', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 'manage_library_books', 'manage library books', 'লাইব্রেরির বই ও পরিচালনা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 'book_list', 'book list', 'পাঠ্যতালিকা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 'add_book', 'add book', 'বই যোগ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 'book_name', 'book name', 'বইয়ের নাম', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 'author', 'author', 'লেখক', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 'price', 'price', 'দাম', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, 'available', 'available', 'উপলব্ধ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, 'unavailable', 'unavailable', 'অপ্রাপ্য', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, 'edit_book', 'edit book', 'সম্পাদনা বই', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, 'manage_transport', 'manage transport', 'পরিবহন ও পরিচালনা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, 'transport_list', 'transport list', 'পরিবহন তালিকা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, 'add_transport', 'add transport', 'পরিবহন যোগ করুন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, 'route_name', 'route name', 'রুট নাম', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, 'number_of_vehicle', 'number of vehicle', 'গাড়ীর সংখ্যা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, 'route_fare', 'route fare', 'রুট করবেন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, 'edit_transport', 'edit transport', 'সম্পাদনা পরিবহন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(172, 'manage_dormitory', 'manage dormitory', 'আস্তানা ও পরিচালনা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(173, 'dormitory_list', 'dormitory list', 'আস্তানা তালিকা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(174, 'add_dormitory', 'add dormitory', 'আস্তানা যোগ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(175, 'dormitory_name', 'dormitory name', 'আস্তানা নাম', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(176, 'number_of_room', 'number of room', 'ঘরের সংখ্যা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(177, 'manage_noticeboard', 'manage noticeboard', 'নোটিশবোর্ড পরিচালনা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(178, 'noticeboard_list', 'noticeboard list', 'নোটিশবোর্ড তালিকা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(179, 'add_noticeboard', 'add noticeboard', 'নোটিশবোর্ড যোগ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(180, 'notice', 'notice', 'বিজ্ঞপ্তি', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(181, 'add_notice', 'add notice', 'নোটিশ যোগ করুন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(182, 'edit_noticeboard', 'edit noticeboard', 'সম্পাদনা নোটিশবোর্ড', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(183, 'system_name', 'system name', 'সিস্টেমের নাম', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(184, 'save', 'save', 'রক্ষা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(185, 'system_title', 'system title', 'সিস্টেম শিরোনাম', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(186, 'paypal_email', 'paypal email', 'PayPal ইমেইল', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(187, 'currency', 'currency', 'মুদ্রা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(188, 'phrase_list', 'phrase list', 'ফ্রেজ তালিকা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(189, 'add_phrase', 'add phrase', 'শব্দগুচ্ছ যুক্ত', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(190, 'add_language', 'add language', 'ভাষা যুক্ত', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(191, 'phrase', 'phrase', 'বাক্য', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(192, 'manage_backup_restore', 'manage backup restore', 'ব্যাকআপ পুনঃস্থাপন ও পরিচালনা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(193, 'restore', 'restore', 'প্রত্যর্পণ করা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(194, 'mark', 'mark', 'ছাপ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(195, 'grade', 'grade', 'গ্রেড', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(196, 'invoice', 'invoice', 'চালান', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(197, 'book', 'book', 'বই', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(198, 'all', 'all', 'সব', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(199, 'upload_&_restore_from_backup', 'upload &amp; restore from backup', 'আপলোড &amp; ব্যাকআপ থেকে পুনঃস্থাপন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(200, 'manage_profile', 'manage profile', 'প্রফাইলটি পরিচালনা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(201, 'update_profile', 'update profile', 'প্রোফাইল আপডেট', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(202, 'new_password', 'new password', 'নতুন পাসওয়ার্ড', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(203, 'confirm_new_password', 'confirm new password', 'নতুন পাসওয়ার্ড নিশ্চিত করুন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(204, 'update_password', 'update password', 'পাসওয়ার্ড আপডেট', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(205, 'teacher_dashboard', 'teacher dashboard', 'শিক্ষক ড্যাশবোর্ড', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(206, 'backup_restore_help', 'backup restore help', 'ব্যাকআপ পুনঃস্থাপন সাহায্য', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(207, 'student_dashboard', 'student dashboard', 'ছাত্র ড্যাশবোর্ড', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(208, 'parent_dashboard', 'parent dashboard', 'অভিভাবক ড্যাশবোর্ড', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(209, 'view_marks', 'view marks', 'দেখুন চিহ্ন', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(210, 'delete_language', 'delete language', 'ভাষা মুছতে', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(211, 'settings_updated', 'settings updated', 'সেটিংস আপডেট', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(212, 'update_phrase', 'update phrase', 'আপডেট ফ্রেজ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(213, 'login_failed', 'login failed', 'লগইন ব্যর্থ হয়েছে', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(214, 'live_chat', 'live chat', 'লাইভ চ্যাট', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(215, 'client 1', 'client 1', 'ক্লায়েন্টের 1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(216, 'buyer', 'buyer', 'ক্রেতা', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(217, 'purchase_code', 'purchase code', 'ক্রয় কোড', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(218, 'system_email', 'system email', 'সিস্টেম ইমেইল', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(219, 'option', 'option', 'বিকল্প', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(220, 'edit_phrase', 'edit phrase', 'সম্পাদনা ফ্রেজ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(221, 'welcome', 'Welcome!', 'স্বাগতম ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(222, 'home', 'Home', 'হোম', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(223, 'aboutus', 'About Us', 'আমাদের সম্পকে ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(224, 'news', 'News', 'সংবাদ ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(225, 'event', 'Event', 'ইভেন্ট', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(226, 'result', 'Result', 'ফলাফল ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(227, 'students', 'Students', 'ছাত্রছাত্রী ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(228, 'contact', 'Contact', 'যোগাযোগ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(229, 'call', 'Call', 'কল', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(230, 'faq', 'FAQ', 'ফেক ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(231, 'about_history', '', '', '0000-00-00 00:00:00', '2015-08-16 09:31:01'),
(232, 'about_history_title', '', '', '0000-00-00 00:00:00', '2015-08-16 09:31:01'),
(233, 'aboutus_history', 'History', 'প্রতিষ্ঠানের ইতিহাস', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(234, 'executive', 'Executive Body', 'নির্বাহী', '2015-08-16 00:00:00', '2015-08-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `user_type_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'shahin', '$2y$10$rlWWxSBfUYgGYJbabhXTaea2S3f3dahibYzpqRmkRxDg34UtRNvZm', 'john@foo.com', 2, 1, 'qsUdJtCoedYC32m8r7LWDPixt4GNx7QAh7ap7RzPbC6ifaE5bNs6xAVi3Uzk', '2015-02-22 00:00:00', '2015-08-22 23:55:46'),
(7, 'superadmin', '$2y$10$rlWWxSBfUYgGYJbabhXTaea2S3f3dahibYzpqRmkRxDg34UtRNvZm', 'john@foo.com', 2, 1, 'HcGw9jkKj6PyLY2w1MLNeBpOkyO6IlfWmAQZI57XkgqKiCuSsT1n1qTo4eOo', '2015-02-22 00:00:00', '2015-07-27 12:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(11) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `title`, `created_at`, `updated_at`) VALUES
(2, 'superadmin', '2015-02-11 00:00:00', '2015-02-22 09:40:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `executive`
--
ALTER TABLE `executive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD KEY `users_fk1` (`user_type_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `executive`
--
ALTER TABLE `executive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=235;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `FK_users_to_usr_type` FOREIGN KEY (`user_type_id`) REFERENCES `user_type` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
