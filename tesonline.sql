-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2024 pada 13.41
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tesonline`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `administrators`
--

CREATE TABLE `administrators` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','manajer admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `administrators`
--

INSERT INTO `administrators` (`id`, `name`, `address`, `email`, `password`, `role`) VALUES
(1, 'Arya', 'marelan', 'arya@gmail.com', 'arya123', 'admin'),
(2, 'Anton', 'marelan', 'anton@gmail.com', 'anton123', 'manajer admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `jawaban` text NOT NULL,
  `benar` tinyint(1) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `answers`
--

INSERT INTO `answers` (`id`, `jawaban`, `benar`, `question_id`) VALUES
(1, 'Bab : Buku', 1, 1),
(2, 'Rima : Puisi', 0, 1),
(3, 'Lagu : Musik', 0, 1),
(4, 'Halaman : Novel', 0, 1),
(5, 'Ketidakteraturan', 0, 3),
(6, 'Pembentukan', 0, 3),
(7, 'Konflik', 0, 3),
(8, 'Harmoni', 1, 3),
(9, 'Melakukan perbaikan dalam xxx', 1, 5),
(10, 'Dengan cara membuat xxxx', 0, 5),
(11, 'Melakukan dan mencari apa yang xxx', 0, 5),
(12, 'Tidak ada yang benar', 0, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('Admin', 4, 1717424295),
('MTR', 3, 1717424091),
('STD', 2, 1716831952);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `group_code` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES
('/*', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/administrators/*', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/administrators/create', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/administrators/delete', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/administrators/index', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/administrators/update', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/administrators/view', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/answers/*', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/answers/create', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/answers/delete', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/answers/index', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/answers/update', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/answers/view', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/bidangs/*', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/bidangs/create', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/bidangs/delete', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/bidangs/index', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/bidangs/update', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/bidangs/view', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/dashboard/*', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/dashboard/dua', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/dashboard/empat', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/dashboard/index', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/dashboard/tiga', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/debug/*', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/debug/default/*', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/debug/default/db-explain', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/debug/default/download-mail', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/debug/default/index', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/debug/default/toolbar', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/debug/default/view', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/debug/user/*', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/debug/user/reset-identity', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/debug/user/set-identity', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/essay-answers/*', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/essay-answers/create', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/essay-answers/delete', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/essay-answers/index', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/essay-answers/update', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/essay-answers/view', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/exam-results/*', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/exam-results/create', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/exam-results/delete', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/exam-results/index', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/exam-results/update', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/exam-results/view', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/exams/*', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/exams/create', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/exams/delete', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/exams/index', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/exams/update', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/exams/view', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/gii/*', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/gii/default/*', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/gii/default/action', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/gii/default/diff', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/gii/default/index', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/gii/default/preview', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/gii/default/view', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/jurusan-bidang/*', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/jurusan-bidang/create', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/jurusan-bidang/delete', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/jurusan-bidang/index', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/jurusan-bidang/update', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/jurusan-bidang/view', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/jurusans/*', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/jurusans/create', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/jurusans/delete', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/jurusans/index', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/jurusans/update', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/jurusans/view', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/mentors/*', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/mentors/create', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/mentors/delete', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/mentors/index', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/mentors/update', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/mentors/view', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/questions/*', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/questions/create', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/questions/delete', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/questions/index', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/questions/update', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/questions/view', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/quizresults/*', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/quizresults/create', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/quizresults/delete', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/quizresults/index', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/quizresults/update', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/quizresults/view', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/site/*', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/site/about', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/site/captcha', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/site/contact', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/site/dashboard', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/site/error', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/site/forgot', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/site/gagal', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/site/getwaktu', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/site/index', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/site/login', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/site/logout', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/site/newcontact', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/site/newlogin', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/site/profile', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/site/quiz', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/site/register', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/site/submitquiz', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/site/templatequiz', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/site/tps', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/site/webvimark', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/students/*', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/students/create', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/students/delete', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/students/index', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/students/update', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/students/view', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/*', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/user-management/auth-item-group/*', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/auth-item-group/bulk-activate', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/auth-item-group/bulk-deactivate', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/auth-item-group/bulk-delete', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/auth-item-group/create', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/auth-item-group/delete', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/auth-item-group/grid-page-size', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/auth-item-group/grid-sort', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/auth-item-group/index', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/auth-item-group/toggle-attribute', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/auth-item-group/update', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/auth-item-group/view', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/auth/*', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/auth/captcha', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/auth/change-own-password', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/user-management/auth/confirm-email', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/auth/confirm-email-receive', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/auth/confirm-registration-email', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/auth/login', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/auth/logout', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/auth/password-recovery', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/auth/password-recovery-receive', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/auth/registration', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/permission/*', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/permission/bulk-activate', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/permission/bulk-deactivate', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/permission/bulk-delete', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/permission/create', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/permission/delete', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/permission/grid-page-size', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/permission/grid-sort', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/permission/index', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/permission/refresh-routes', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/permission/set-child-permissions', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/permission/set-child-routes', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/permission/toggle-attribute', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/permission/update', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/permission/view', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/role/*', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/role/bulk-activate', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/role/bulk-deactivate', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/role/bulk-delete', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/role/create', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/role/delete', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/role/grid-page-size', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/role/grid-sort', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/role/index', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/role/set-child-permissions', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/role/set-child-roles', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/role/toggle-attribute', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/role/update', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/role/view', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/user-permission/*', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/user-permission/set', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/user-management/user-permission/set-roles', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/user-management/user-visit-log/*', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/user-visit-log/bulk-activate', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/user-visit-log/bulk-deactivate', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/user-visit-log/bulk-delete', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/user-visit-log/create', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/user-visit-log/delete', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/user-visit-log/grid-page-size', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/user-visit-log/grid-sort', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/user-visit-log/index', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/user-visit-log/toggle-attribute', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/user-visit-log/update', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/user-visit-log/view', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/user/*', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/user/bulk-activate', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/user-management/user/bulk-deactivate', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/user-management/user/bulk-delete', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/user-management/user/change-password', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/user-management/user/create', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/user-management/user/delete', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/user-management/user/grid-page-size', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/user-management/user/grid-sort', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/user/index', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/user-management/user/toggle-attribute', 3, NULL, NULL, NULL, 1716831899, 1716831899, NULL),
('/user-management/user/update', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('/user-management/user/view', 3, NULL, NULL, NULL, 1716349783, 1716349783, NULL),
('Admin', 1, 'Admin', NULL, NULL, 1716349783, 1716349783, NULL),
('assignRolesToUsers', 2, 'Assign roles to users', NULL, NULL, 1716349783, 1716349783, 'userManagement'),
('bindUserToIp', 2, 'Bind user to IP', NULL, NULL, 1716349783, 1716349783, 'userManagement'),
('changeOwnPassword', 2, 'Change own password', NULL, NULL, 1716349783, 1716349783, 'userCommonPermissions'),
('changeUserPassword', 2, 'Change user password', NULL, NULL, 1716349783, 1716349783, 'userManagement'),
('commonPermission', 2, 'Common permission', NULL, NULL, 1716349783, 1716349783, NULL),
('createUsers', 2, 'Create users', NULL, NULL, 1716349783, 1716349783, 'userManagement'),
('deleteUsers', 2, 'Delete users', NULL, NULL, 1716349783, 1716349783, 'userManagement'),
('editUserEmail', 2, 'Edit user email', NULL, NULL, 1716349783, 1716349783, 'userManagement'),
('editUsers', 2, 'Edit users', NULL, NULL, 1716349783, 1716349783, 'userManagement'),
('MTR', 1, 'Mentor', NULL, NULL, 1716832066, 1716832128, NULL),
('STD', 1, 'Student', NULL, NULL, 1716831841, 1716832096, NULL),
('viewRegistrationIp', 2, 'View registration IP', NULL, NULL, 1716349783, 1716349783, 'userManagement'),
('viewUserEmail', 2, 'View user email', NULL, NULL, 1716349783, 1716349783, 'userManagement'),
('viewUserRoles', 2, 'View user roles', NULL, NULL, 1716349783, 1716349783, 'userManagement'),
('viewUsers', 2, 'View users', NULL, NULL, 1716349783, 1716349783, 'userManagement'),
('viewVisitLog', 2, 'View visit log', NULL, NULL, 1716349783, 1716349783, 'userManagement');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('Admin', 'assignRolesToUsers'),
('Admin', 'changeOwnPassword'),
('Admin', 'changeUserPassword'),
('Admin', 'createUsers'),
('Admin', 'deleteUsers'),
('Admin', 'editUsers'),
('Admin', 'viewUsers'),
('assignRolesToUsers', '/user-management/user-permission/set'),
('assignRolesToUsers', '/user-management/user-permission/set-roles'),
('assignRolesToUsers', 'viewUserRoles'),
('assignRolesToUsers', 'viewUsers'),
('changeOwnPassword', '/user-management/auth/change-own-password'),
('changeUserPassword', '/user-management/user/change-password'),
('changeUserPassword', 'viewUsers'),
('createUsers', '/user-management/user/create'),
('createUsers', 'viewUsers'),
('deleteUsers', '/user-management/user/bulk-delete'),
('deleteUsers', '/user-management/user/delete'),
('deleteUsers', 'viewUsers'),
('editUserEmail', 'viewUserEmail'),
('editUsers', '/user-management/user/bulk-activate'),
('editUsers', '/user-management/user/bulk-deactivate'),
('editUsers', '/user-management/user/update'),
('editUsers', 'viewUsers'),
('viewUsers', '/user-management/user/grid-page-size'),
('viewUsers', '/user-management/user/index'),
('viewUsers', '/user-management/user/view');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_item_group`
--

CREATE TABLE `auth_item_group` (
  `code` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_item_group`
--

INSERT INTO `auth_item_group` (`code`, `name`, `created_at`, `updated_at`) VALUES
('userCommonPermissions', 'User common permission', 1716349783, 1716349783),
('userManagement', 'User management', 1716349783, 1716349783);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidangs`
--

CREATE TABLE `bidangs` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bidangs`
--

INSERT INTO `bidangs` (`id`, `nama`) VALUES
(4, 'All'),
(10, 'KELTI ILMU TANAH DAN AGRONOMI'),
(9, 'KELTI PEMULIAAN TANAMAN'),
(12, 'KELTI PROTEKSI TANAMAN'),
(11, 'KELTI SOSIO TEKNIK EKONOMI DAN LINGKUNGAN'),
(13, 'LABORATORIUM PELAYANAN'),
(8, 'PRODUKSI'),
(5, 'SUS BHT'),
(1, 'UKDP'),
(6, 'UNIT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `essay_answers`
--

CREATE TABLE `essay_answers` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `jawaban` text NOT NULL,
  `nilai` int(11) DEFAULT NULL,
  `komentar` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `essay_answers`
--

INSERT INTO `essay_answers` (`id`, `student_id`, `question_id`, `jawaban`, `nilai`, `komentar`, `created_at`) VALUES
(1, 1, 2, '<p>oppa</p>', NULL, NULL, '2024-06-09 22:24:39'),
(2, 1, 4, '<p>ppks</p>', NULL, NULL, '2024-06-09 22:25:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `nama_ujian` varchar(255) NOT NULL,
  `bidang_id` int(11) NOT NULL,
  `keterangan_ujian` text DEFAULT NULL,
  `tanggal_pelaksanaan_ujian` date DEFAULT NULL,
  `tanggal_selesai_ujian` date DEFAULT NULL,
  `durasi_pengerjaan_ujian` time DEFAULT NULL,
  `jlh_soal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `exams`
--

INSERT INTO `exams` (`id`, `nama_ujian`, `bidang_id`, `keterangan_ujian`, `tanggal_pelaksanaan_ujian`, `tanggal_selesai_ujian`, `durasi_pengerjaan_ujian`, `jlh_soal`) VALUES
(1, 'Tes Potensi Akademik (TPA)', 4, 'Tes Potensi Akademik (TPA) merupakan jenis psikotes yang biasa digunakan dalam seleksi masuk perguruan tinggi maupun proses rekrutmen tenaga kerja. Dari hasil tes ini, kemampuan berpikir kritis serta kecerdasan intelektual pendaf', '2024-06-11', '2024-06-18', '01:00:00', 0),
(2, 'Tes Bidang UKDP', 1, 'Soal soal yang akan diberikan oleh mentor yang memegang bagian program studi', '2024-06-12', '2024-06-19', '00:15:00', 0),
(3, 'Tes Bidang Produksi', 8, 'Soal soal yang akan diberikan oleh mentor yang memegang bagian program studi', '2024-05-23', '2024-05-29', '00:30:00', 2),
(4, 'Tes Bidang Unit', 6, 'Soal soal yang akan diberikan oleh mentor yang memegang bagian program studi.', '2024-05-23', '2024-05-29', '00:30:00', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `exam_results`
--

CREATE TABLE `exam_results` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `skor` int(11) NOT NULL,
  `waktu_selesai` time DEFAULT NULL,
  `jlh_benar_essay` int(11) NOT NULL,
  `jlh_benar_pilgan` int(11) NOT NULL,
  `tgl_mulai` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `skor_essay` int(11) NOT NULL,
  `skor_pilgan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `exam_results`
--

INSERT INTO `exam_results` (`id`, `exam_id`, `student_id`, `skor`, `waktu_selesai`, `jlh_benar_essay`, `jlh_benar_pilgan`, `tgl_mulai`, `skor_essay`, `skor_pilgan`) VALUES
(1, 1, 1, 0, '00:00:00', 0, 1, '2024-06-09 15:24:58', 0, 10),
(2, 2, 1, 0, '00:00:00', 0, 0, '2024-06-09 15:25:23', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusans`
--

CREATE TABLE `jurusans` (
  `id` int(11) NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusans`
--

INSERT INTO `jurusans` (`id`, `nama_jurusan`) VALUES
(4, 'Agribisnis'),
(5, 'Biologi'),
(2, 'Fisika'),
(3, 'Kimia'),
(1, 'Teknologi Informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan_bidang`
--

CREATE TABLE `jurusan_bidang` (
  `id` int(11) NOT NULL,
  `bidang_id` int(11) NOT NULL,
  `jurusan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan_bidang`
--

INSERT INTO `jurusan_bidang` (`id`, `bidang_id`, `jurusan_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mentors`
--

CREATE TABLE `mentors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `bidang_id` int(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `photo` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mentors`
--

INSERT INTO `mentors` (`id`, `name`, `nip`, `bidang_id`, `date_of_birth`, `email`, `password`, `address`, `photo`) VALUES
(6, 'Alek', '1234344122', 8, '2002-02-12', 'ada@gmail.com', 'alek123', 'jcity', NULL),
(7, 'pilja', '1283791873981', 6, '2002-02-12', 'adapilja@gmail.com', 'pilja123', 'pancing', NULL),
(8, 'opa', '8294718741981', 1, '2002-02-12', 'opa@gmail.com', 'opa123', 'simalingkar', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1716349777),
('m140602_111327_create_menu_table', 1717744772),
('m140608_173539_create_user_table', 1716349782),
('m140611_133903_init_rbac', 1716349782),
('m140808_073114_create_auth_item_group_table', 1716349782),
('m140809_072112_insert_superadmin_to_user', 1716349783),
('m140809_073114_insert_common_permisison_to_auth_item', 1716349783),
('m141023_141535_create_user_visit_log', 1716349783),
('m141116_115804_add_bind_to_ip_and_registration_ip_to_user', 1716349783),
('m141121_194858_split_browser_and_os_column', 1716349783),
('m141201_220516_add_email_and_email_confirmed_to_user', 1716349783),
('m141207_001649_create_basic_user_permissions', 1716349783),
('m160312_050000_create_user', 1717744772);

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `tipe_pertanyaan` enum('pilihan_ganda','esai') NOT NULL,
  `exam_id` int(11) NOT NULL,
  `bidang_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `questions`
--

INSERT INTO `questions` (`id`, `pertanyaan`, `mentor_id`, `tipe_pertanyaan`, `exam_id`, `bidang_id`) VALUES
(1, 'Babak : Drama = ... : ...', 6, 'pilihan_ganda', 1, NULL),
(2, 'Apa kepanjangan PPKS?', 6, 'esai', 1, NULL),
(3, 'Konformitas = ...', 6, 'pilihan_ganda', 1, NULL),
(4, 'Bagaimana cara kamu mengatasi adanya xxxxx?', 8, 'esai', 2, NULL),
(5, 'Cara yang yang paling tepat dalam menangani masalah xxx adalah?', 8, 'pilihan_ganda', 2, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `quiz_results`
--

CREATE TABLE `quiz_results` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `answers_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `quiz_results`
--

INSERT INTO `quiz_results` (`id`, `student_id`, `answers_id`, `created_at`) VALUES
(1, 1, 1, '2024-06-09 15:24:39'),
(2, 1, 5, '2024-06-09 15:24:39'),
(3, 1, 11, '2024-06-09 15:25:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `asal_universitas` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` text DEFAULT NULL,
  `entry_year` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fakultas` varchar(255) DEFAULT NULL,
  `photo` blob DEFAULT NULL,
  `exam_id` int(11) UNSIGNED NOT NULL,
  `jurusan_id` int(11) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`id`, `name`, `nim`, `asal_universitas`, `date_of_birth`, `address`, `entry_year`, `email`, `password`, `fakultas`, `photo`, `exam_id`, `jurusan_id`, `jenis_kelamin`) VALUES
(7, 'Andi', '211402106', 'USU', '2002-10-10', 'marelan', 2024, 'andi@gmail.com', '123456', 'ilkom-ti', 0x416e64692e706e67, 1, 1, 'L'),
(8, 'Azis', '211402002', 'USU', '2002-01-08', 'medan', 2023, 'azis11@gmail.com', 'azis123', 'Teknik', NULL, 1, 2, 'L');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `superadmin` smallint(6) DEFAULT 0,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `registration_ip` varchar(15) DEFAULT NULL,
  `bind_to_ip` varchar(255) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `email_confirmed` smallint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `confirmation_token`, `status`, `superadmin`, `created_at`, `updated_at`, `registration_ip`, `bind_to_ip`, `email`, `email_confirmed`) VALUES
(1, 'superadmin', 'X8fyWcOdk88V0R61zErPJz6Q-MHasBDX', '$2y$13$59VRjdjq/xDwFRBCRBm1.uKo2s1Cqk7n8TSMHUIzh7hLn6nC9xkPm', NULL, 1, 1, 1716349783, 1716349783, NULL, NULL, NULL, 0),
(2, 'arya', 'FUujooScDdBOTJ8LL_tS8mWp2TSjHty4', '$2y$13$Ozx0755lUTIFT0PGqtpqd.6VxeohsRaT4xEMfz6nd8VnUkT/GdPmW', NULL, 1, 0, 1716831618, 1716831618, '::1', '', NULL, 0),
(3, 'deldip', 'LKqHiZpiEAg-CFA68mWhkDGm8JeMsB9O', '$2y$13$IplUs2JKjMje0h5gKXf5aeSm5NH/NzVq3N9fTN2TGZVc3YbieC65G', NULL, 1, 0, 1717423955, 1717423955, '::1', '', NULL, 0),
(4, 'alek', 'F3gqdfAFz4on2w5ingVbWMD8nOVqrebG', '$2y$13$7gdtNn/UgSdoIobJO/zmfeTqgeyRg3dxp/OE2B6XwvpUk.5/r7VK2', NULL, 1, 0, 1717424214, 1717424214, '::1', '', NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_visit_log`
--

CREATE TABLE `user_visit_log` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `language` char(2) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `visit_time` int(11) NOT NULL,
  `browser` varchar(30) DEFAULT NULL,
  `os` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_visit_log`
--

INSERT INTO `user_visit_log` (`id`, `token`, `ip`, `language`, `user_agent`, `user_id`, `visit_time`, `browser`, `os`) VALUES
(1, '664d7a0e5515e', '::1', 'id', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 1, 1716353550, 'Chrome', 'Windows'),
(2, '664d7e29e9df3', '::1', 'id', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 1, 1716354601, 'Chrome', 'Windows'),
(3, '664d7fa751a95', '::1', 'id', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 1, 1716354983, 'Chrome', 'Windows'),
(4, '664d99e01b39c', '::1', 'id', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 1, 1716361696, 'Chrome', 'Windows'),
(5, '664d9e0083d64', '::1', 'id', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 1, 1716362752, 'Chrome', 'Windows'),
(6, '66545d09caae7', '::1', 'id', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 1, 1716804873, 'Chrome', 'Windows'),
(7, '6654821ae5101', '::1', 'id', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 1, 1716814362, 'Chrome', 'Windows'),
(8, '6654c583031af', '::1', 'id', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 2, 1716831619, 'Chrome', 'Windows'),
(9, '6654c5c364c1d', '::1', 'id', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 1, 1716831683, 'Chrome', 'Windows'),
(10, '6654db7b99464', '::1', 'id', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 1, 1716837243, 'Chrome', 'Windows'),
(11, '6656437958ee4', '::1', 'id', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 1, 1716929401, 'Chrome', 'Windows'),
(12, '665ccc34234c0', '::1', 'id', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 1, 1717357620, 'Chrome', 'Windows'),
(13, '665dcf5434980', '::1', 'id', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 3, 1717423956, 'Chrome', 'Windows'),
(14, '665dcfb5d3c05', '::1', 'id', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 1, 1717424053, 'Chrome', 'Windows'),
(15, '665dd0026d719', '::1', 'id', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 3, 1717424130, 'Chrome', 'Windows'),
(16, '665dd056b37cc', '::1', 'id', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 4, 1717424214, 'Chrome', 'Windows'),
(17, '665dd08240507', '::1', 'id', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 1, 1717424258, 'Chrome', 'Windows'),
(18, '665dd0c7adfa4', '::1', 'id', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 4, 1717424327, 'Chrome', 'Windows'),
(19, '6662ac9018948', '::1', 'id', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 1, 1717742736, 'Chrome', 'Windows'),
(20, '6665c001ef7c5', '::1', 'id', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 1, 1717944322, 'Chrome', 'Windows'),
(21, '6665ccb538e81', '::1', 'en', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 1, 1717947573, 'Chrome', 'Windows'),
(22, '66682abe4ee25', '::1', 'id', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 1, 1718102718, 'Chrome', 'Windows');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indeks untuk tabel `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`),
  ADD KEY `fk_auth_item_group_code` (`group_code`);

--
-- Indeks untuk tabel `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indeks untuk tabel `auth_item_group`
--
ALTER TABLE `auth_item_group`
  ADD PRIMARY KEY (`code`);

--
-- Indeks untuk tabel `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indeks untuk tabel `bidangs`
--
ALTER TABLE `bidangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indeks untuk tabel `essay_answers`
--
ALTER TABLE `essay_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indeks untuk tabel `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bidang_id` (`bidang_id`);

--
-- Indeks untuk tabel `exam_results`
--
ALTER TABLE `exam_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_id` (`exam_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indeks untuk tabel `jurusans`
--
ALTER TABLE `jurusans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_jurusan` (`nama_jurusan`);

--
-- Indeks untuk tabel `jurusan_bidang`
--
ALTER TABLE `jurusan_bidang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bidang_id` (`bidang_id`),
  ADD KEY `jurusan_id` (`jurusan_id`);

--
-- Indeks untuk tabel `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `bidang_id` (`bidang_id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Indeks untuk tabel `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indeks untuk tabel `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mentor_id` (`mentor_id`),
  ADD KEY `exam_id` (`exam_id`),
  ADD KEY `questions_ibfk_3` (`bidang_id`);

--
-- Indeks untuk tabel `quiz_results`
--
ALTER TABLE `quiz_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_student_id` (`student_id`),
  ADD KEY `answers_id` (`answers_id`);

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `exam_id` (`exam_id`),
  ADD KEY `students_ibfk_1` (`jurusan_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_visit_log`
--
ALTER TABLE `user_visit_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `bidangs`
--
ALTER TABLE `bidangs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `essay_answers`
--
ALTER TABLE `essay_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `exam_results`
--
ALTER TABLE `exam_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jurusans`
--
ALTER TABLE `jurusans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jurusan_bidang`
--
ALTER TABLE `jurusan_bidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `quiz_results`
--
ALTER TABLE `quiz_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_visit_log`
--
ALTER TABLE `user_visit_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Ketidakleluasaan untuk tabel `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_assignment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_auth_item_group_code` FOREIGN KEY (`group_code`) REFERENCES `auth_item_group` (`code`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `essay_answers`
--
ALTER TABLE `essay_answers`
  ADD CONSTRAINT `essay_answers_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `essay_answers_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Ketidakleluasaan untuk tabel `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_ibfk_2` FOREIGN KEY (`bidang_id`) REFERENCES `bidangs` (`id`);

--
-- Ketidakleluasaan untuk tabel `exam_results`
--
ALTER TABLE `exam_results`
  ADD CONSTRAINT `exam_results_ibfk_1` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`),
  ADD CONSTRAINT `exam_results_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `jurusan_bidang`
--
ALTER TABLE `jurusan_bidang`
  ADD CONSTRAINT `jurusan_bidang_ibfk_1` FOREIGN KEY (`bidang_id`) REFERENCES `bidangs` (`id`),
  ADD CONSTRAINT `jurusan_bidang_ibfk_2` FOREIGN KEY (`jurusan_id`) REFERENCES `jurusans` (`id`);

--
-- Ketidakleluasaan untuk tabel `mentors`
--
ALTER TABLE `mentors`
  ADD CONSTRAINT `mentors_ibfk_1` FOREIGN KEY (`bidang_id`) REFERENCES `bidangs` (`id`);

--
-- Ketidakleluasaan untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`mentor_id`) REFERENCES `mentors` (`id`),
  ADD CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`),
  ADD CONSTRAINT `questions_ibfk_3` FOREIGN KEY (`bidang_id`) REFERENCES `bidangs` (`id`);

--
-- Ketidakleluasaan untuk tabel `quiz_results`
--
ALTER TABLE `quiz_results`
  ADD CONSTRAINT `fk_student_id` FOREIGN KEY (`student_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `quiz_results_ibfk_1` FOREIGN KEY (`answers_id`) REFERENCES `answers` (`id`);

--
-- Ketidakleluasaan untuk tabel `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`jurusan_id`) REFERENCES `jurusans` (`id`);

--
-- Ketidakleluasaan untuk tabel `user_visit_log`
--
ALTER TABLE `user_visit_log`
  ADD CONSTRAINT `user_visit_log_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
