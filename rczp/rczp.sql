-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 11, 2025 at 02:13 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rczp`
--
CREATE DATABASE IF NOT EXISTS `rczp` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `rczp`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL COMMENT '用户名',
  `password` varchar(255) DEFAULT NULL COMMENT '密码',
  `name` varchar(255) DEFAULT NULL COMMENT '姓名',
  `create_time` varchar(255) DEFAULT NULL,
  `update_time` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`, `create_time`, `update_time`, `status`) VALUES
(1, 'admin', 'admin', 'admin', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

DROP TABLE IF EXISTS `application`;
CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `job_id` int(11) DEFAULT NULL COMMENT '职位',
  `company_id` int(11) DEFAULT NULL COMMENT '公司ID',
  `content` varchar(4000) DEFAULT NULL COMMENT '介绍',
  `user_id` varchar(40) DEFAULT NULL COMMENT '会员',
  `create_time` varchar(255) DEFAULT NULL COMMENT '发布时间',
  `update_time` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` text COMMENT '公司回复',
  `file` varchar(255) DEFAULT NULL COMMENT '简历'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='求职申请';

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `job_id`, `company_id`, `content`, `user_id`, `create_time`, `update_time`, `status`, `remark`, `file`) VALUES
(1, 1, 1, '我很好，牛', '1', '2025-05-09 18:54:20', '2025-05-09 20:24:58', 1, '请在05-20号早上10点到XXX路XXX公司面试。', NULL),
(2, 1, 1, 'asda', '1', '2025-05-11 13:57:53', '2025-05-11 13:57:53', 0, NULL, NULL),
(3, 1, 1, '阿萨德', '1', '2025-05-11 13:59:00', '2025-05-11 13:59:00', 0, NULL, 'upload/user/250511015857_1355739117.docx');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `username` varchar(40) DEFAULT NULL COMMENT '用户名',
  `password` varchar(40) DEFAULT NULL COMMENT '密码',
  `name` varchar(255) DEFAULT NULL COMMENT '姓名',
  `phone` varchar(255) DEFAULT NULL COMMENT '联系电话',
  `address` varchar(255) DEFAULT NULL COMMENT '地址',
  `intro` text COMMENT '公司介绍',
  `create_time` varchar(255) DEFAULT NULL,
  `update_time` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `username`, `password`, `name`, `phone`, `address`, `intro`, `create_time`, `update_time`, `status`) VALUES
(1, 'company', '123123', '牛的狠有限公司', '020-12312312', 'XX北京XXX', '公司介绍,软件开发，牛的跟', '2025-05-09 16:17:56', '2025-05-09 16:17:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

DROP TABLE IF EXISTS `guestbook`;
CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL,
  `content` varchar(4000) DEFAULT NULL COMMENT '留言',
  `username` varchar(40) DEFAULT NULL COMMENT '用户',
  `create_time` varchar(255) DEFAULT NULL COMMENT '时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`id`, `content`, `username`, `create_time`) VALUES
(1, 'asdasd', '牛的狠有限公司', '2025-05-09 16:24:45'),
(2, 'asdasd', '牛的狠有限公司', '2025-05-09 16:24:45'),
(3, 'asd', '张三', '2025-05-09 19:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

DROP TABLE IF EXISTS `job`;
CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL COMMENT '招聘岗位',
  `salary` varchar(255) DEFAULT NULL COMMENT '薪资',
  `treatment` varchar(255) DEFAULT NULL COMMENT '待遇',
  `requirement` text COMMENT '招聘要求',
  `create_time` varchar(255) DEFAULT NULL COMMENT '发布时间',
  `update_time` varchar(255) DEFAULT NULL,
  `company_id` varchar(40) DEFAULT NULL COMMENT '公司',
  `status` tinyint(1) DEFAULT '1' COMMENT '状态:0=待审核，1=已审核'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `title`, `salary`, `treatment`, `requirement`, `create_time`, `update_time`, `company_id`, `status`) VALUES
(1, 'Java 程序员', '10000', '年薪20W 五险一金', '精通JAVA22', '2025-05-09 16:55:22', '2025-05-09 20:21:28', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(40) DEFAULT NULL COMMENT '用户名',
  `password` varchar(40) DEFAULT NULL COMMENT '密码',
  `name` varchar(255) DEFAULT NULL COMMENT '姓名',
  `phone` varchar(255) DEFAULT NULL COMMENT '联系电话',
  `address` varchar(255) DEFAULT NULL COMMENT '联系地址',
  `edu` varchar(255) DEFAULT NULL COMMENT '学历',
  `age` varchar(255) DEFAULT NULL COMMENT '年龄',
  `gender` varchar(255) DEFAULT NULL COMMENT '性别',
  `create_time` varchar(255) DEFAULT NULL,
  `update_time` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `graduation` varchar(255) DEFAULT NULL COMMENT '毕业时间',
  `computer` varchar(255) DEFAULT NULL COMMENT '计算机能力',
  `english` varchar(255) DEFAULT NULL COMMENT '英语能力',
  `educational` text COMMENT '教育背景',
  `experience` text COMMENT '工作经历',
  `evaluation` text COMMENT '自我评价'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `phone`, `address`, `edu`, `age`, `gender`, `create_time`, `update_time`, `status`, `graduation`, `computer`, `english`, `educational`, `experience`, `evaluation`) VALUES
(1, 'zhangsan', '123123', '张三', '13800138000', '北京', '本科', '23', '男', '2025-05-09 16:16:40', '2025-05-09 19:04:08', 1, '25年6月', '二级', '六级', 'XXX 大学 计算机', 'sXXX 公司 实习 JAVA', '牛ss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
