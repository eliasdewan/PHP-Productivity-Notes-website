-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2023 at 10:43 PM
-- Server version: 10.0.34-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_k2056101`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `answerId` int(8) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(2000) NOT NULL,
  `category` varchar(50) NOT NULL,
  `sortOrder` int(8) NOT NULL,
  `taskId` int(8) NOT NULL,
  `userId` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answerId`, `question`, `answer`, `category`, `sortOrder`, `taskId`, `userId`, `timestamp`) VALUES
(38, 'What is your goal?', 'My goal is to complete a 10K race within the next six months.', 'Fitness', 1, 0, 27, '2023-05-02 13:26:15'),
(39, 'How will you achieve that?', 'I will achieve that by following a structured training program and gradually increasing my running distance and speed over time.', 'Fitness', 2, 0, 27, '2023-05-02 13:26:15'),
(40, 'What resources do you need?', 'I need a good pair of running shoes, comfortable clothes, and access to a gym or outdoor running trail.', 'Fitness', 3, 0, 27, '2023-05-02 13:26:15'),
(41, 'Where can you find the resources you need?', 'I can purchase running shoes and clothes online or at a local sports store, and I can find a suitable running trail or gym in my area through online research.', 'Fitness', 4, 0, 27, '2023-05-02 13:26:15'),
(42, 'What are the potential obstacles or challenges?', 'Some potential obstacles or challenges include injury, lack of motivation, and time constraints.', 'Fitness', 5, 0, 27, '2023-05-02 13:26:15'),
(43, 'How will you overcome the obstacles or challenges?', 'I will overcome obstacles or challenges by taking rest days as needed, finding an accountability partner, and prioritizing my workouts in my schedule.', 'Fitness', 6, 0, 27, '2023-05-02 13:26:15'),
(44, 'Who can you ask for help or support?', 'I can ask my friends who are also interested in fitness, or I can hire a personal trainer.', 'Fitness', 7, 0, 27, '2023-05-02 13:26:15'),
(45, 'When do you want to achieve your goal?', 'I want to achieve my goal of running a 10K race within the next six months.', 'Fitness', 8, 0, 27, '2023-05-02 13:26:15'),
(46, 'How will you measure your progress?', 'I will measure my progress by tracking my running distance, time, and speed using a fitness app.', 'Fitness', 9, 0, 27, '2023-05-02 13:26:15'),
(47, 'What are the potential risks?', 'Some potential risks include injury or overtraining if I push myself too hard or don\'t take adequate rest days.', 'Fitness', 10, 0, 27, '2023-05-02 13:26:15'),
(48, 'How will you manage or mitigate the risks?', 'I will manage or mitigate the risks by following a safe and gradual training plan, listening to my body, and taking rest days as needed.', 'Fitness', 11, 0, 27, '2023-05-02 13:26:15'),
(49, 'What are the potential benefits?', 'The potential benefits include improved cardiovascular health, increased endurance, and a sense of accomplishment.', 'Fitness', 12, 0, 27, '2023-05-02 13:26:15'),
(50, 'What is your goal?', 'to finish this', 'UNSET', 0, 0, 34, '2023-05-02 19:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge`
--

CREATE TABLE `knowledge` (
  `knowledgeId` int(11) NOT NULL,
  `knowledgeTitle` varchar(200) NOT NULL,
  `knowledgeDescription` varchar(1000) NOT NULL,
  `knowledgeCategory` varchar(20) NOT NULL,
  `userId` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sortOrder` int(255) NOT NULL,
  `isDocument` tinyint(1) NOT NULL,
  `fixed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `knowledge`
--

INSERT INTO `knowledge` (`knowledgeId`, `knowledgeTitle`, `knowledgeDescription`, `knowledgeCategory`, `userId`, `timestamp`, `sortOrder`, `isDocument`, `fixed`) VALUES
(1, 'Work effectively', 'Eliminate or minimize external distractions: Close the door, put your phone in another room, \r\nturn off notifications on your computer, and use noise-cancelling headphones or earplugs to block out noise.\r\n\r\nCreate a distraction-free workspace: Set up a \r\ndedicated workspace that is free from clutter and other distractions.\r\n\r\nCreate a distraction-free schedule: Block out specific times on \r\nyour calendar for focused work, and communicate this schedule to others so they know not to interrupt you during those times.\r\n\r\nTrain your mind to focus: Practice concentration by starting \r\nwith short periods of focused work and gradually increasing the length of time you can sustain your attention.\r\n\r\nTake breaks to recharge: Take regular breaks to recharge your \r\nenergy and avoid burnout, but use these breaks intentionally and avoid distractions during this time.', 'book', 0, '2023-05-02 12:28:09', 0, 0, 1),
(2, 'Pomodoro timer website', 'https://pomofocus.io/app', 'web', 0, '2023-05-02 12:03:08', 0, 0, 1),
(3, 'Google Scolar', 'https://scholar.google.com/', 'web', 0, '2023-05-02 12:02:03', 0, 0, 1),
(4, 'Pomodoro Timer', '<iframe src=\"https://pomofocus.io/\" style=\"border:0px #ffffff none;\" name=\"myiFrame\" scrolling=\"no\" frameborder=\"1\" marginheight=\"0px\" marginwidth=\"0px\" height=\"400px\" width=\"100%px\" allowfullscreen></iframe>', 'iframe', 0, '2023-05-02 11:54:29', 0, 0, 1),
(5, 'Google scolar alternative', 'https://www.scinapse.io/', 'web', 0, '2023-05-02 12:19:25', 0, 0, 1),
(6, 'Goal setting', 'Define your goals: Clearly define what you want to achieve. Be specific, measurable, and realistic in your goal setting. Make sure your goals are challenging but achievable.\r\n\r\nWrite your goals down: Write your goals down on paper or in a digital document. This makes them more tangible and helps you to focus on them.\r\n\r\nBreak down your goals: Break your goals down into smaller, more manageable steps. This makes them less overwhelming and helps you to focus on what needs to be done.\r\n\r\nCreate a timeline: Set a timeline for achieving your goals. This helps you to stay focused and motivated, and gives you a deadline to work towards.\r\n\r\nIdentify obstacles: Identify potential obstacles that might prevent you from achieving your goals, and come up with strategies to overcome them.\r\n\r\nStay accountable: Share your goals with someone else, such as a friend, family member, or coach. This helps you to stay accountable and motivated.\r\n\r\nCelebrate your achievements: When you achieve a goal, take ti', 'book', 0, '2023-05-02 12:43:38', 0, 0, 1),
(7, 'Work strategy plan', 'Define your goals: Clearly define what you want to achieve. Be specific, measurable, and realistic in your goal setting. Make sure your goals are challenging but achievable.\r\n\r\nWrite your goals down: Write your goals down on paper or in a digital document. This makes them more tangible and helps you to focus on them.\r\n\r\nBreak down your goals: Break your goals down into smaller, more manageable steps. This makes them less overwhelming and helps you to focus on what needs to be done.\r\n\r\nCreate a timeline: Set a timeline for achieving your goals. This helps you to stay focused and motivated, and gives you a deadline to work towards.\r\n\r\nIdentify obstacles: Identify potential obstacles that might prevent you from achieving your goals, and come up with strategies to overcome them.\r\n\r\nStay accountable: Share your goals with someone else, such as a friend, family member, or coach. This helps you to stay accountable and motivated.\r\n\r\nCelebrate your achievements: When you achieve a goal, take ti', 'book', 0, '2023-05-02 12:59:38', 0, 0, 1),
(8, 'SMART goal SETTING', '<ol>  <li><strong>#Specific:</strong> Define the goal clearly, addressing the \"what,\" \"why,\" and \"how.\"</li>  <li><strong>#Measurable:</strong> Set concrete criteria to track progress and measure outcomes.</li>  <li><strong>#Achievable:</strong> Ensure the goal is realistic, attainable, and considers available resources.</li>  <li><strong>#Relevant:</strong> Align the goal with broader objectives, values, and long-term plans.</li>  <li><strong>#TimeBound:</strong> Establish a specific deadline or timeframe to create a sense of urgency.</li></ol>', 'iframe', 0, '2023-05-02 13:04:44', 0, 0, 1),
(21, 'Pomodoro Website', 'https://studywithme.io/aesthetic-pomodoro-timer/', 'web', 0, '2023-04-28 18:37:39', 0, 0, 0),
(29, 'Hot Uk deals website', 'https://www.hotukdeals.com/', 'web', 0, '2023-04-29 15:43:33', 0, 0, 0),
(33, 'youtube', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/2Lt8zvoReoQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'iframe', 0, '2023-04-29 15:05:13', 0, 0, 0),
(41, 'Youtube', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/nBpXIOYY0UY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'iframe', 27, '2023-04-30 08:26:52', 0, 0, 0),
(42, 'FROM SESSION', 'https://docs.linkpreview.net/', 'web', 27, '2023-04-30 10:08:45', 0, 0, 0),
(43, 'HELLO', 'https://www.w3schools.com/css/css_align.asp', 'web', 27, '2023-04-30 10:09:56', 0, 0, 0),
(44, 'create a iframe', '<div style=\"width: 100%\"><iframe width=\"100%\" height=\"600\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed\"><a href=\"https://www.maps.ie/distance-area-calculator.html\">measure area map</a></iframe></div>', 'iframe', 27, '2023-04-30 13:01:48', 0, 0, 0),
(57, 'timer', '<iframe src=\"https://pomofocus.io/\" style=\"border:0px #ffffff none;\" name=\"myiFrame\" scrolling=\"no\" frameborder=\"1\" marginheight=\"0px\" marginwidth=\"0px\" height=\"400px\" width=\"100%\" allowfullscreen></iframe>', 'iframe', 27, '2023-05-02 11:53:02', 0, 0, 0),
(62, '..', '..', 'book', 34, '2023-05-02 18:44:07', 0, 0, 0),
(63, '<p>', 'https://mydesktop.kingsto', 'web', 34, '2023-05-02 18:54:02', 0, 0, 0),
(64, 'ff', '<?php echo \"Hello World\"; ?>', 'book', 34, '2023-05-02 18:59:22', 0, 0, 0),
(67, 'test broken html', 'ng>#Specific:</strong> Define the goal clearly, addressing the \"what,\" \"why,\" and \"how.\"</li>  <li><strong>#Measurable:</strong> Set concrete criteria to track progress and measure outcomes.</li>  <li><strong>#Achievable:</strong> Ensure the goal is realistic, attainable, and considers available resources.</li>  <li><strong>#Relevant:</strong> Align the goal with broader objectives, values, and long-term plans.</li>  <l', 'web', 34, '2023-05-02 19:06:09', 0, 0, 0),
(68, 'test broken html iframe', 'ng>#Specific:</strong> Define the goal clearly, addressing the \"what,\" \"why,\" and \"how.\"</li>  <li><strong>#Measurable:</strong> Set concrete criteria to track progress and measure outcomes.</li>  <li><strong>#Achievable:</strong> Ensure the goal is realistic, attainable, and considers available resources.</li>  <li><strong>#Relevant:</strong> Align the goal with broader objectives, values, and long-term plans.</li>  <l', 'iframe', 34, '2023-05-02 19:06:26', 0, 0, 0),
(69, 'Kingston web', 'https://canvas.kingston.ac.uk/courses/23356/pages/week-24-revision', 'web', 36, '2023-05-02 19:17:13', 0, 0, 0),
(70, 'test', 'https://www.nngroup.com/articles/ten-usability-heuristics/', 'web', 34, '2023-05-02 19:17:53', 0, 0, 0),
(71, 'picture', 'https://www.facebook.com/HipHopDX.UK/photos/a.515298981942954/2581870651952433/?__cft__[0]=AZUP3T2RvnPs7oqWcraj403D-0YRVukrvHZMwRn2M_mqwoApCbIQxenz5RHr6Fmi79WeMsb7gv_IATPPw_-vYr8thro-5QX0H0QnODCd4DKPzyrxuhO0ngcuqUYfWjP08--uPvkVdlx0Kj9WG6-WogUw14MEm53HQD7nG4iKFC_X57hBSWgpBrCnPXz4nhgc9mUJxbjgF5IGP69BvyOMItSC&__tn__=EH-R', 'web', 36, '2023-05-02 19:18:18', 0, 0, 0),
(72, 'picture', 'https://www.facebook.com/HipHopDX.UK/photos/a.515298981942954/2581870651952433/?__cft__[0]=AZUP3T2RvnPs7oqWcraj403D-0YRVukrvHZMwRn2M_mqwoApCbIQxenz5RHr6Fmi79WeMsb7gv_IATPPw_-vYr8thro-5QX0H0QnODCd4DKPzyrxuhO0ngcuqUYfWjP08--uPvkVdlx0Kj9WG6-WogUw14MEm53HQD7nG4iKFC_X57hBSWgpBrCnPXz4nhgc9mUJxbjgF5IGP69BvyOMItSC&__tn__=EH-R', 'web', 36, '2023-05-02 19:19:18', 0, 0, 0),
(73, 'picture', 'https://www.facebook.com/HipHopDX.UK/photos/a.515298981942954/2581870651952433/?__cft__[0]=AZUP3T2RvnPs7oqWcraj403D-0YRVukrvHZMwRn2M_mqwoApCbIQxenz5RHr6Fmi79WeMsb7gv_IATPPw_-vYr8thro-5QX0H0QnODCd4DKPzyrxuhO0ngcuqUYfWjP08--uPvkVdlx0Kj9WG6-WogUw14MEm53HQD7nG4iKFC_X57hBSWgpBrCnPXz4nhgc9mUJxbjgF5IGP69BvyOMItSC&__tn__=EH-R', 'web', 36, '2023-05-02 19:19:18', 0, 0, 0),
(74, 'picture', 'https://www.facebook.com/HipHopDX.UK/photos/a.515298981942954/2581870651952433/?__cft__[0]=AZUP3T2RvnPs7oqWcraj403D-0YRVukrvHZMwRn2M_mqwoApCbIQxenz5RHr6Fmi79WeMsb7gv_IATPPw_-vYr8thro-5QX0H0QnODCd4DKPzyrxuhO0ngcuqUYfWjP08--uPvkVdlx0Kj9WG6-WogUw14MEm53HQD7nG4iKFC_X57hBSWgpBrCnPXz4nhgc9mUJxbjgF5IGP69BvyOMItSC&__tn__=EH-R', 'web', 36, '2023-05-02 19:19:18', 0, 0, 0),
(75, 'picture', 'https://www.facebook.com/HipHopDX.UK/photos/a.515298981942954/2581870651952433/?__cft__[0]=AZUP3T2RvnPs7oqWcraj403D-0YRVukrvHZMwRn2M_mqwoApCbIQxenz5RHr6Fmi79WeMsb7gv_IATPPw_-vYr8thro-5QX0H0QnODCd4DKPzyrxuhO0ngcuqUYfWjP08--uPvkVdlx0Kj9WG6-WogUw14MEm53HQD7nG4iKFC_X57hBSWgpBrCnPXz4nhgc9mUJxbjgF5IGP69BvyOMItSC&__tn__=EH-R', 'web', 36, '2023-05-02 19:19:18', 0, 0, 0),
(76, 'picture', 'https://www.facebook.com/HipHopDX.UK/photos/a.515298981942954/2581870651952433/?__cft__[0]=AZUP3T2RvnPs7oqWcraj403D-0YRVukrvHZMwRn2M_mqwoApCbIQxenz5RHr6Fmi79WeMsb7gv_IATPPw_-vYr8thro-5QX0H0QnODCd4DKPzyrxuhO0ngcuqUYfWjP08--uPvkVdlx0Kj9WG6-WogUw14MEm53HQD7nG4iKFC_X57hBSWgpBrCnPXz4nhgc9mUJxbjgF5IGP69BvyOMItSC&__tn__=EH-R', 'web', 36, '2023-05-02 19:19:19', 0, 0, 0),
(77, 'picture', 'https://www.facebook.com/HipHopDX.UK/photos/a.515298981942954/2581870651952433/?__cft__[0]=AZUP3T2RvnPs7oqWcraj403D-0YRVukrvHZMwRn2M_mqwoApCbIQxenz5RHr6Fmi79WeMsb7gv_IATPPw_-vYr8thro-5QX0H0QnODCd4DKPzyrxuhO0ngcuqUYfWjP08--uPvkVdlx0Kj9WG6-WogUw14MEm53HQD7nG4iKFC_X57hBSWgpBrCnPXz4nhgc9mUJxbjgF5IGP69BvyOMItSC&__tn__=EH-R', 'web', 36, '2023-05-02 19:19:19', 0, 0, 0),
(78, 'YouTube', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FcjOlcWaaU8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'iframe', 36, '2023-05-02 19:20:58', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `projectid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectid`, `userid`, `priority`, `title`) VALUES
(0, 3, 3, 'so,ng title'),
(1, 1, 1, 'tiele of the first'),
(2, 1, 3, 'some example title 2'),
(3, 2, 3, 'the trile in for'),
(2147483647, 1, 2, 'and l;ps title');

-- --------------------------------------------------------

--
-- Table structure for table `scenario`
--

CREATE TABLE `scenario` (
  `scenarionumber` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `category` varchar(50) NOT NULL,
  `color` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sortOrder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scenario`
--

INSERT INTO `scenario` (`scenarionumber`, `question`, `category`, `color`, `timestamp`, `sortOrder`) VALUES
(23, 'What is your goal?', 'Discovery', 'Violet', '2023-05-02 11:07:50', 0),
(24, 'How will you achieve that?', 'Discovery', 'Turquoise', '2023-05-02 11:07:50', 0),
(25, 'What resources do you need?', 'Discovery', 'Blue', '2023-05-02 11:07:50', 0),
(26, 'Where can you find the resources you need?', 'Discovery', 'Teal', '2023-05-02 11:07:50', 0),
(27, 'What are the potential obstacles or challenges?', 'Discovery', 'Maroon', '2023-05-02 11:07:50', 0),
(28, 'How will you overcome the obstacles or challenges?', 'Discovery', 'Maroon', '2023-05-02 11:07:50', 0),
(29, 'Who can you ask for help or support?', 'Discovery', 'Orange', '2023-05-02 11:07:50', 0),
(30, 'When do you want to achieve your goal?', 'Discovery', 'Fuscia', '2023-05-02 11:07:50', 0),
(31, 'How will you measure your progress?', 'Discovery', 'Red', '2023-05-02 11:07:50', 0),
(32, 'What are the potential risks?', 'Discovery', 'Khaki', '2023-05-02 11:07:50', 0),
(33, 'How will you manage or mitigate the risks?', 'Discovery', 'Violet', '2023-05-02 11:07:50', 0),
(34, 'What are the potential benefits?', 'Discovery', 'Puce', '2023-05-02 11:07:50', 0),
(35, 'How will you maximize the benefits?', 'Discovery', 'Aquamarine', '2023-05-02 11:07:50', 0),
(36, 'Who will be affected by your goal?', 'Discovery', 'Goldenrod', '2023-05-02 11:07:50', 0),
(37, 'How will you involve or communicate with those affected?', 'Discovery', 'Fuscia', '2023-05-02 11:07:50', 0),
(38, 'What are the ethical implications?', 'Discovery', 'Green', '2023-05-02 11:07:50', 0),
(39, 'How will you ensure ethical considerations are addressed?', 'Discovery', 'Goldenrod', '2023-05-02 11:07:50', 0),
(40, 'What are the alternative options or approaches?', 'Discovery', 'Yellow', '2023-05-02 11:07:50', 0),
(41, 'How do they compare to your current plan?', 'Discovery', 'Puce', '2023-05-02 11:07:50', 0),
(42, 'What can you learn from past experiences or mistakes?', 'Discovery', 'Teal', '2023-05-02 11:07:50', 0),
(43, 'How can you apply the lessons learned?', 'Discovery', 'Green', '2023-05-02 11:07:50', 0),
(44, 'What are the potential unintended consequences?', 'Discovery', 'Orange', '2023-05-02 11:07:50', 0),
(45, 'How will you minimize or avoid the unintended consequences?', 'Discovery', 'Red', '2023-05-02 11:07:50', 0),
(46, 'What is the expected outcome?', 'Discovery', 'Green', '2023-05-02 11:07:50', 0),
(47, 'How will you evaluate the outcome?', 'Discovery', 'Crimson', '2023-05-02 11:07:50', 0),
(48, 'What changes or adjustments might be necessary?', 'Discovery', 'Teal', '2023-05-02 11:07:50', 0),
(49, 'How will you incorporate feedback or new information?', 'Discovery', 'Maroon', '2023-05-02 11:07:50', 0),
(50, 'What are the short-term and long-term implications?', 'Discovery', 'Blue', '2023-05-02 11:07:50', 0),
(51, 'How will you address both short-term and long-term implications?', 'Discovery', 'Fuscia', '2023-05-02 11:07:51', 0),
(52, 'What are the potential opportunities for growth or innovation?', 'Discovery', 'Puce', '2023-05-02 11:07:51', 0),
(53, '======================  REFLECTION =======================', 'Reflection', 'Indigo', '2023-05-02 11:13:22', 0),
(54, 'What did you do?', 'Reflection', 'Puce', '2023-05-02 11:13:22', 0),
(55, 'What was the outcome?', 'Reflection', 'Indigo', '2023-05-02 11:13:22', 0),
(56, 'What difficulties did you face?', 'Reflection', 'Yellow', '2023-05-02 11:13:22', 0),
(57, 'How did you overcome the difficulties?', 'Reflection', 'Teal', '2023-05-02 11:13:22', 0),
(58, 'What did you discover?', 'Reflection', 'Indigo', '2023-05-02 11:13:23', 0),
(59, 'What lessons did you learn?', 'Reflection', 'Orange', '2023-05-02 11:13:23', 0),
(60, 'How can you apply the lessons learned?', 'Reflection', 'Aquamarine', '2023-05-02 11:13:23', 0),
(61, 'What surprised you?', 'Reflection', 'Orange', '2023-05-02 11:13:23', 0),
(62, 'What did you enjoy?', 'Reflection', 'Mauv', '2023-05-02 11:13:23', 0),
(63, 'What didn\'t go as planned?', 'Reflection', 'Teal', '2023-05-02 11:13:23', 0),
(64, 'What could you have done differently?', 'Reflection', 'Puce', '2023-05-02 11:13:23', 0),
(65, 'What did you do well?', 'Reflection', 'Goldenrod', '2023-05-02 11:13:23', 0),
(66, 'What feedback did you receive?', 'Reflection', 'Maroon', '2023-05-02 11:13:23', 0),
(67, 'How will you incorporate feedback or new information?', 'Reflection', 'Aquamarine', '2023-05-02 11:13:23', 0),
(68, 'What were the short-term and long-term implications?', 'Reflection', 'Green', '2023-05-02 11:13:23', 0),
(69, 'What are the potential unintended consequences?', 'Reflection', 'Yellow', '2023-05-02 11:13:23', 0),
(70, 'How can you minimize or avoid the unintended consequences?', 'Reflection', 'Fuscia', '2023-05-02 11:13:23', 0),
(71, 'What are the ethical implications?', 'Reflection', 'Teal', '2023-05-02 11:13:23', 0),
(72, 'How did you ensure ethical considerations were addressed?', 'Reflection', 'Orange', '2023-05-02 11:13:23', 0),
(73, 'What are the alternative options or approaches?', 'Reflection', 'Blue', '2023-05-02 11:13:23', 0),
(74, 'How do they compare to what you did?', 'Reflection', 'Puce', '2023-05-02 11:13:23', 0),
(75, 'What were the potential risks?', 'Reflection', 'Khaki', '2023-05-02 11:13:23', 0),
(76, 'How did you manage or mitigate the risks?', 'Reflection', 'Goldenrod', '2023-05-02 11:13:23', 0),
(77, 'What are the potential benefits?', 'Reflection', 'Khaki', '2023-05-02 11:13:23', 0),
(78, 'How did you maximize the benefits?', 'Reflection', 'Red', '2023-05-02 11:13:23', 0),
(79, 'Who else was affected by what you did?', 'Reflection', 'Blue', '2023-05-02 11:13:23', 0),
(80, 'How did you involve or communicate with those affected?', 'Reflection', 'Crimson', '2023-05-02 11:13:23', 0),
(81, 'What are the potential opportunities for growth or innovation?', 'Reflection', 'Khaki', '2023-05-02 11:13:23', 0),
(82, 'What changes or adjustments might be necessary?', 'Reflection', 'Blue', '2023-05-02 11:13:23', 0),
(83, 'What is your goal?', 'Discovery', 'Violet', '2023-05-02 11:29:44', 0),
(84, 'How will you achieve that?', 'Discovery', 'Turquoise', '2023-05-02 11:29:44', 0),
(85, 'What resources do you need?', 'Discovery', 'Blue', '2023-05-02 11:29:44', 0),
(86, 'Where can you find the resources you need?', 'Discovery', 'Teal', '2023-05-02 11:29:44', 0),
(87, 'What are the potential obstacles or challenges?', 'Discovery', 'Maroon', '2023-05-02 11:29:44', 0),
(88, 'How will you overcome the obstacles or challenges?', 'Discovery', 'Maroon', '2023-05-02 11:29:44', 0),
(89, 'Who can you ask for help or support?', 'Discovery', 'Orange', '2023-05-02 11:29:44', 0),
(90, 'When do you want to achieve your goal?', 'Discovery', 'Fuscia', '2023-05-02 11:29:44', 0),
(91, 'How will you measure your progress?', 'Discovery', 'Red', '2023-05-02 11:29:44', 0),
(92, 'What are the potential risks?', 'Discovery', 'Khaki', '2023-05-02 11:29:44', 0),
(93, 'How will you manage or mitigate the risks?', 'Discovery', 'Violet', '2023-05-02 11:29:44', 0),
(94, 'What are the potential benefits?', 'Discovery', 'Puce', '2023-05-02 11:29:45', 0),
(95, 'How will you maximize the benefits?', 'Discovery', 'Aquamarine', '2023-05-02 11:29:45', 0),
(96, 'Who will be affected by your goal?', 'Discovery', 'Goldenrod', '2023-05-02 11:29:45', 0),
(97, 'How will you involve or communicate with those affected?', 'Discovery', 'Fuscia', '2023-05-02 11:29:45', 0),
(98, 'What are the ethical implications?', 'Discovery', 'Green', '2023-05-02 11:29:45', 0),
(99, 'How will you ensure ethical considerations are addressed?', 'Discovery', 'Goldenrod', '2023-05-02 11:29:45', 0),
(100, 'What are the alternative options or approaches?', 'Discovery', 'Yellow', '2023-05-02 11:29:45', 0),
(101, 'How do they compare to your current plan?', 'Discovery', 'Puce', '2023-05-02 11:29:45', 0),
(102, 'What can you learn from past experiences or mistakes?', 'Discovery', 'Teal', '2023-05-02 11:29:45', 0),
(103, 'How can you apply the lessons learned?', 'Discovery', 'Green', '2023-05-02 11:29:45', 0),
(104, 'What are the potential unintended consequences?', 'Discovery', 'Orange', '2023-05-02 11:29:45', 0),
(105, 'How will you minimize or avoid the unintended consequences?', 'Discovery', 'Red', '2023-05-02 11:29:45', 0),
(106, 'What is the expected outcome?', 'Discovery', 'Green', '2023-05-02 11:29:45', 0),
(107, 'How will you evaluate the outcome?', 'Discovery', 'Crimson', '2023-05-02 11:29:45', 0),
(108, 'What changes or adjustments might be necessary?', 'Discovery', 'Teal', '2023-05-02 11:29:45', 0),
(109, 'How will you incorporate feedback or new information?', 'Discovery', 'Maroon', '2023-05-02 11:29:45', 0),
(110, 'What are the short-term and long-term implications?', 'Discovery', 'Blue', '2023-05-02 11:29:45', 0),
(111, 'How will you address both short-term and long-term implications?', 'Discovery', 'Fuscia', '2023-05-02 11:29:45', 0),
(112, 'What are the potential opportunities for growth or innovation?', 'Discovery', 'Puce', '2023-05-02 11:29:45', 0),
(113, '======================  REFLECTION =======================', 'Reflection', 'Indigo', '2023-05-02 11:29:57', 0),
(114, 'What did you do?', 'Reflection', 'Puce', '2023-05-02 11:29:57', 0),
(115, 'What was the outcome?', 'Reflection', 'Indigo', '2023-05-02 11:29:57', 0),
(116, 'What difficulties did you face?', 'Reflection', 'Yellow', '2023-05-02 11:29:57', 0),
(117, 'How did you overcome the difficulties?', 'Reflection', 'Teal', '2023-05-02 11:29:57', 0),
(118, 'What did you discover?', 'Reflection', 'Indigo', '2023-05-02 11:29:57', 0),
(119, 'What lessons did you learn?', 'Reflection', 'Orange', '2023-05-02 11:29:57', 0),
(120, 'How can you apply the lessons learned?', 'Reflection', 'Aquamarine', '2023-05-02 11:29:57', 0),
(121, 'What surprised you?', 'Reflection', 'Orange', '2023-05-02 11:29:57', 0),
(122, 'What did you enjoy?', 'Reflection', 'Mauv', '2023-05-02 11:29:57', 0),
(123, 'What didn\'t go as planned?', 'Reflection', 'Teal', '2023-05-02 11:29:57', 0),
(124, 'What could you have done differently?', 'Reflection', 'Puce', '2023-05-02 11:29:57', 0),
(125, 'What did you do well?', 'Reflection', 'Goldenrod', '2023-05-02 11:29:57', 0),
(126, 'What feedback did you receive?', 'Reflection', 'Maroon', '2023-05-02 11:29:57', 0),
(127, 'How will you incorporate feedback or new information?', 'Reflection', 'Aquamarine', '2023-05-02 11:29:57', 0),
(128, 'What were the short-term and long-term implications?', 'Reflection', 'Green', '2023-05-02 11:29:57', 0),
(129, 'What are the potential unintended consequences?', 'Reflection', 'Yellow', '2023-05-02 11:29:57', 0),
(130, 'How can you minimize or avoid the unintended consequences?', 'Reflection', 'Fuscia', '2023-05-02 11:29:57', 0),
(131, 'What are the ethical implications?', 'Reflection', 'Teal', '2023-05-02 11:29:57', 0),
(132, 'How did you ensure ethical considerations were addressed?', 'Reflection', 'Orange', '2023-05-02 11:29:57', 0),
(133, 'What are the alternative options or approaches?', 'Reflection', 'Blue', '2023-05-02 11:29:57', 0),
(134, 'How do they compare to what you did?', 'Reflection', 'Puce', '2023-05-02 11:29:57', 0),
(135, 'What were the potential risks?', 'Reflection', 'Khaki', '2023-05-02 11:29:57', 0),
(136, 'How did you manage or mitigate the risks?', 'Reflection', 'Goldenrod', '2023-05-02 11:29:57', 0),
(137, 'What are the potential benefits?', 'Reflection', 'Khaki', '2023-05-02 11:29:57', 0),
(138, 'How did you maximize the benefits?', 'Reflection', 'Red', '2023-05-02 11:29:57', 0),
(139, 'Who else was affected by what you did?', 'Reflection', 'Blue', '2023-05-02 11:29:57', 0),
(140, 'How did you involve or communicate with those affected?', 'Reflection', 'Crimson', '2023-05-02 11:29:57', 0),
(141, 'What are the potential opportunities for growth or innovation?', 'Reflection', 'Khaki', '2023-05-02 11:29:57', 0),
(142, 'What changes or adjustments might be necessary?', 'Reflection', 'Blue', '2023-05-02 11:29:57', 0);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `sectionid` int(11) NOT NULL,
  `color` varchar(20) NOT NULL,
  `timecreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `progress` int(11) NOT NULL,
  `taskId` int(11) NOT NULL,
  `title` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`sectionid`, `color`, `timecreated`, `progress`, `taskId`, `title`) VALUES
(1, 'Pink', '2023-01-27 09:52:17', 100, 1, 'Re-engineer'),
(2, 'Fuscia', '2023-01-27 09:52:17', 88, 1, 'workforce'),
(3, 'Purple', '2023-01-27 09:52:17', 22, 3, 'Intuitive'),
(4, 'Violet', '2023-01-27 09:52:17', 11, 2, 'interactive'),
(5, 'Orange', '2023-01-27 09:52:17', 78, 4, 'Adaptive'),
(6, 'Indigo', '2023-01-27 09:52:17', 20, 3, 'Optional'),
(7, 'Aquamarine', '2023-01-27 09:52:17', 37, 1, 'Business-fo'),
(8, 'Green', '2023-01-27 09:52:17', 53, 1, 'frame'),
(9, 'Teal', '2023-01-27 09:52:17', 93, 2, 'radical'),
(10, 'Fuscia', '2023-01-27 09:52:17', 20, 5, 'Operative'),
(11, 'Maroon', '2023-01-27 09:52:17', 37, 2, 'Monitored'),
(12, 'Violet', '2023-01-27 09:52:17', 8, 5, 'Inverse'),
(13, 'Aquamarine', '2023-01-27 09:52:17', 68, 1, 'support'),
(14, 'Crimson', '2023-01-27 09:52:17', 31, 5, 'pricing str'),
(15, 'Mauv', '2023-01-27 09:52:17', 41, 2, 'adapter'),
(16, 'Yellow', '2023-01-27 09:52:17', 2, 1, 'algorithm'),
(17, 'Teal', '2023-01-27 09:52:17', 90, 4, 'static'),
(18, 'Yellow', '2023-01-27 09:52:17', 69, 4, 'hub'),
(19, 'Pink', '2023-01-27 09:52:17', 93, 3, 'Grass-roots'),
(20, 'Puce', '2023-01-27 09:52:17', 46, 2, 'Mandatory');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `taskId` int(11) NOT NULL,
  `taskDescription` varchar(3000) NOT NULL,
  `priority` varchar(11) NOT NULL,
  `taskTitle` varchar(200) NOT NULL,
  `timeAllocation` varchar(8) NOT NULL,
  `dueDate` datetime NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sortOrder` int(255) NOT NULL,
  `projectId` int(8) NOT NULL,
  `userId` int(8) NOT NULL,
  `progress` int(11) NOT NULL,
  `isDocument` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`taskId`, `taskDescription`, `priority`, `taskTitle`, `timeAllocation`, `dueDate`, `timestamp`, `sortOrder`, `projectId`, `userId`, `progress`, `isDocument`) VALUES
(1, 'vel augue vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis', '3', 'Indigo', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(2, 'velit eu est congue elementum in hac habitasse platea dictumst morbi vestibulum velit id', '2', 'Green', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(3, 'cras in purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes', '1', 'Red', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(4, 'eleifend donec ut dolor morbi vel lectus in quam fringilla rhoncus mauris enim', '2', 'Yellow', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(5, 'magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus', '2', 'Orange', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(6, 'convallis eget eleifend luctus ultricies eu nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante', '3', 'Maroon', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(7, 'sit amet lobortis sapien sapien non mi integer ac neque duis bibendum morbi non quam nec dui luctus rutrum nulla', '2', 'Puce', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(8, 'lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris', '3', 'Yellow', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(9, 'erat tortor sollicitudin mi sit amet lobortis sapien sapien non mi', '3', 'Pink', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(10, 'luctus et ultrices posuere cubilia curae duis faucibus accumsan odio curabitur', '3', 'Blue', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(11, 'congue diam id ornare imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed augue aliquam', '3', 'Red', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(12, 'tellus in sagittis dui vel nisl duis ac nibh fusce lacus purus aliquet', '2', 'Purple', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(13, 'sapien a libero nam dui proin leo odio porttitor id consequat in consequat ut nulla sed accumsan felis', '3', 'Red', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(14, 'lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh in lectus pellentesque', '3', 'Pink', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(15, 'quam nec dui luctus rutrum nulla tellus in sagittis dui vel nisl', '3', 'Red', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(16, 'vel augue vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum', '3', 'Yellow', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(17, 'tortor risus dapibus augue vel accumsan tellus nisi eu orci mauris lacinia sapien quis libero', '2', 'Maroon', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(18, 'eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna', '3', 'Turquoise', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(19, 'pede venenatis non sodales sed tincidunt eu felis fusce posuere felis sed lacus morbi sem mauris laoreet ut', '3', 'Goldenrod', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(20, 'potenti cras in purus eu magna vulputate luctus cum sociis natoque penatibus et magnis', '1', 'Aquamarine', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(21, 'in eleifend quam a odio in hac habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt', '3', 'Crimson', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(22, 'in magna bibendum imperdiet nullam orci pede venenatis non sodales sed tincidunt eu felis fusce', '2', 'Yellow', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(23, 'nunc donec quis orci eget orci vehicula condimentum curabitur in libero ut', '3', 'Goldenrod', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(24, 'malesuada in imperdiet et commodo vulputate justo in blandit ultrices enim lorem', '3', 'Fuscia', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(25, 'cursus vestibulum proin eu mi nulla ac enim in tempor turpis', '2', 'Teal', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(26, 'leo pellentesque ultrices mattis odio donec vitae nisi nam ultrices libero non mattis', '1', 'Red', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(27, 'donec dapibus duis at velit eu est congue elementum in hac', '3', 'Yellow', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(28, 'vel est donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est lacinia nisi venenatis tristique', '1', 'Aquamarine', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(29, 'at turpis a pede posuere nonummy integer non velit donec diam neque vestibulum eget vulputate ut ultrices vel', '2', 'Yellow', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(30, 'non sodales sed tincidunt eu felis fusce posuere felis sed lacus morbi', '2', 'Goldenrod', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(31, 'sit amet consectetuer adipiscing elit proin risus praesent lectus vestibulum quam sapien varius ut blandit non interdum in', '3', 'Khaki', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(32, 'dui luctus rutrum nulla tellus in sagittis dui vel nisl duis ac nibh fusce lacus purus', '1', 'Violet', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(33, 'vulputate nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta', '2', 'Aquamarine', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(34, 'odio cras mi pede malesuada in imperdiet et commodo vulputate justo in blandit ultrices enim lorem ipsum dolor sit', '1', 'Indigo', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(35, 'nibh ligula nec sem duis aliquam convallis nunc proin at turpis a', '1', 'Green', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(36, 'orci luctus et ultrices posuere cubilia curae duis faucibus accumsan odio curabitur convallis duis consequat dui nec', '1', 'Purple', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(37, 'tortor id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed justo pellentesque viverra pede ac', '2', 'Orange', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(38, 'eleifend quam a odio in hac habitasse platea dictumst maecenas ut massa quis augue luctus', '2', 'Red', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(39, 'et magnis dis parturient montes nascetur ridiculus mus etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida', '1', 'Teal', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(40, 'et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi', '3', 'Green', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(41, 'adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc proin at', '3', 'Puce', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(42, 'ante vivamus tortor duis mattis egestas metus aenean fermentum donec ut mauris eget massa tempor convallis nulla neque', '1', 'Red', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(43, 'pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum nulla nunc purus phasellus', '3', 'Yellow', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(44, 'sed tristique in tempus sit amet sem fusce consequat nulla nisl nunc nisl duis bibendum felis sed interdum venenatis', '2', 'Aquamarine', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(45, 'mattis odio donec vitae nisi nam ultrices libero non mattis pulvinar', '3', 'Goldenrod', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(46, 'orci luctus et ultrices posuere cubilia curae nulla dapibus dolor vel', '2', 'Goldenrod', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(47, 'eu felis fusce posuere felis sed lacus morbi sem mauris laoreet ut', '2', 'Violet', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(48, 'morbi vestibulum velit id pretium iaculis diam erat fermentum justo nec condimentum neque sapien', '2', 'Fuscia', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(49, 'neque sapien placerat ante nulla justo aliquam quis turpis eget elit sodales scelerisque', '1', 'Red', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(50, 'tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc commodo placerat', '1', 'Indigo', '00:00:00', '0000-00-00 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(51, 'something', '1', 'fail', '00:00:00', '2023-04-19 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(52, 'will this change', '1', 'some thing', '00:00:00', '2023-04-19 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(53, 'will this change', '1', 'some thing', '00:00:00', '2023-04-19 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(54, 'will this change', '1', 'some thing', '00:00:00', '2023-04-19 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(55, 'will this change', '1', 'some thing', '00:00:00', '2023-04-19 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(56, 'will this change', '1', 'some thing', '00:00:00', '2023-04-19 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(57, 'will this change', '1', 'some thing', '00:00:00', '2023-04-19 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(58, 'something', '1', 'fail', '00:00:00', '2023-04-19 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(59, 'something', '1', 'fail', '00:00:00', '2023-04-19 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(60, 'description adding', '1', 'want a title', '00:00:00', '2023-04-19 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(61, 'I want to add th list using the formula.....\r\n', '1', 'Create the list', '00:00:00', '2023-04-19 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(62, 'I want to add th list using the formula.....\r\n', '1', 'Create the list', '00:00:00', '2023-04-19 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(63, 'I want to add th list using the formula.....\r\n', '1', 'Create the list', '00:00:00', '2023-04-19 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(64, 'I think i can make this work \r\nmulti line \r\n', '1', 'My title is this good ', '00:00:00', '2023-04-19 00:00:00', '2023-04-26 18:05:10', 0, 0, 0, 0, 0),
(87, '', '1', 'Textarea', '00:00:00', '2023-04-19 00:00:00', '2023-04-29 07:41:07', 0, 0, 0, 0, 0),
(88, '<p>hello this is special</p>\r\n<p><strong>TEXT</strong></p>', '1', 'Textarea', '00:00:00', '2023-04-19 00:00:00', '2023-04-29 07:41:20', 0, 0, 0, 0, 0),
(104, '', '1', 'hello, ', '00:00:00', '2023-04-19 00:00:00', '2023-04-29 09:20:50', 0, 0, 0, 0, 0),
(105, '<p>i see how it works</p>', '1', 'it works', '00:00:00', '2023-04-19 00:00:00', '2023-04-29 13:10:24', 0, 0, 0, 0, 0),
(111, '<p>dfgdfgd</p>\r\n<p>dfg</p>\r\n<p>sdf</p>\r\n<p>sdfg</p>\r\n<p>dsfgdsfs</p>', '1', 'a doc', '00:00:00', '2023-04-19 00:00:00', '2023-04-29 09:51:01', 0, 0, 0, 0, 1),
(129, '<p>here im going to make normal then transform</p>', '1', 'document creation testings', '00:00:00', '2023-04-19 00:00:00', '2023-04-29 13:13:55', 0, 0, 0, 0, 0),
(144, '<p>hello</p>', '1', 'editor', '00:00:00', '2023-04-19 00:00:00', '2023-04-29 13:40:37', 0, 0, 0, 0, 1),
(169, '', '1', 'sdfsdf', '00:00:00', '2023-04-19 00:00:00', '2023-04-29 14:22:41', 0, 0, 0, 0, 0),
(172, 'work', '1', 'hello', '00:00:00', '2023-04-19 00:00:00', '2023-04-29 14:40:07', 0, 0, 0, 0, 0),
(176, 'this is my document', '1', 'hello', '00:00:00', '2023-04-19 00:00:00', '2023-04-29 21:52:31', 0, 0, 0, 0, 0),
(178, '<p>normal document</p>', '1', 'hello ', '00:00:00', '2023-04-19 00:00:00', '2023-04-29 22:55:17', 0, 0, 0, 0, 1),
(180, 'add anything', '1', 'gtml', '00:00:00', '2023-04-19 00:00:00', '2023-04-29 22:07:35', 0, 0, 0, 0, 0),
(182, '<p>hello</p>', '1', 'did this daile', '00:00:00', '2023-04-19 00:00:00', '2023-04-29 22:55:03', 0, 0, 0, 0, 1),
(184, '<p>hellp</p>', '1', 'title', '00:00:00', '2023-04-19 00:00:00', '2023-04-29 22:54:08', 0, 0, 0, 0, 1),
(189, '<p>asdasd</p>\r\n<p>hello what do you offer</p>', '1', 'hello', '00:00:00', '2023-04-19 00:00:00', '2023-04-29 22:53:58', 0, 0, 0, 0, 1),
(190, 'what do you do', '1', 'hello', '00:00:00', '2023-04-19 00:00:00', '2023-04-29 22:31:33', 0, 0, 0, 0, 1),
(191, '<p>&nbsp;same thing</p>', '1', 'same thing', '00:00:00', '2023-04-19 00:00:00', '2023-04-29 22:32:19', 0, 0, 0, 0, 1),
(196, '<p>this is what it looks like#</p>\r\n<p>agian</p>', '1', 'hello', '00:00:00', '2023-04-19 00:00:00', '2023-04-29 22:53:38', 0, 0, 0, 0, 1),
(197, '<p>simple</p>', '1', 'hello ', '00:00:00', '2023-04-19 00:00:00', '2023-04-29 22:53:06', 0, 0, 0, 0, 1),
(198, 'if you want to save with html', '1', 'this ', '00:00:00', '2023-04-19 00:00:00', '2023-04-29 22:56:39', 0, 0, 0, 0, 1),
(199, 'normal test', '1', 'help', '00:00:00', '2023-04-19 00:00:00', '2023-04-29 23:02:50', 0, 0, 0, 0, 0),
(200, '<p>create</p>\r\n<p>This will be my html</p>\r\n<p>&nbsp;</p>', '1', 'hello', '00:00:00', '2023-04-19 00:00:00', '2023-04-30 06:58:33', 0, 0, 27, 0, 1),
(201, '<p>i know this hello</p>\r\n<p><img src=\"https://www.maps.ie/assets/css/img/maps-ie-logo.png\"></p>', 'low', 'help', '00:00:00', '2023-04-19 00:00:00', '2023-04-30 13:48:06', 0, 0, 27, 0, 1),
(265, '<h1>Learn HTML</h1><p>Study HTML basics and practice by creating simple web pages.</p><p><img src=\"https://www.w3schools.com/images/w3schools_green.jpg\" alt=\"W3Schools\"></p>', 'low', 'HTML Basics', '00:00:00', '2023-04-19 00:00:00', '2023-04-30 13:48:06', 0, 0, 27, 0, 1),
(266, '<h1>Learn CSS</h1><p>Study CSS fundamentals and enhance your web design skills.</p><p><img src=\"https://www.w3schools.com/images/w3schools_blue.jpg\" alt=\"W3Schools\"></p>', 'medium', 'CSS Fundamentals', '00:00:00', '2023-04-20 00:00:00', '2023-04-30 13:48:06', 0, 0, 27, 0, 1),
(267, '<h1>Learn JavaScript</h1><p>Explore JavaScript concepts and build interactive web applications.</p><p><img src=\"https://www.w3schools.com/images/w3schools_red.jpg\" alt=\"W3Schools\"></p>', 'high', 'JavaScript Concepts', '00:00:00', '2023-04-21 00:00:00', '2023-04-30 13:48:06', 0, 0, 27, 0, 1),
(268, '<h1>Learn Python</h1><p>Dive into Python programming and build simple applications.</p><p><img src=\"https://www.python.org/static/community_logos/python-logo-master-v3-TM.png\" alt=\"Python\"></p>', 'low', 'Python Programming', '00:00:00', '2023-04-22 00:00:00', '2023-04-30 13:48:06', 0, 0, 27, 0, 1),
(269, '<h1>Build a Portfolio</h1><p>Create an online portfolio showcasing your coding projects and skills.</p><p><img src=\"https://i.imgur.com/5ZgYQZQ.png\" alt=\"Portfolio\"></p>', 'medium', 'Online Portfolio', '00:00:00', '2023-04-23 00:00:00', '2023-04-30 13:48:06', 0, 0, 27, 0, 1),
(270, '<h1>Learn Git</h1><p>Master version control with Git and collaborate on projects effectively.</p><p><img src=\"https://git-scm.com/images/logos/downloads/Git-Icon-1788C.png\" alt=\"Git\"></p>', 'high', 'Git Mastery', '00:00:00', '2023-04-24 00:00:00', '2023-04-30 13:48:06', 0, 0, 27, 0, 1),
(271, '<p>&lt;p&gt;asdasddsfsdffdgdf&lt;/p</p>', 'normal', 'title', '00:05', '2023-05-03 18:59:00', '2023-05-02 19:00:43', 0, 0, 34, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `logged` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `password`, `logged`) VALUES
(1, 'Dottie', 'discrete', '2023-01-27 09:33:58'),
(2, 'Dalt', 'flexibility', '2023-01-27 09:33:58'),
(3, 'Byram', 'Assimilated', '2023-01-27 09:33:58'),
(15, 'k2056101', 'testpass', '2023-04-30 00:59:10'),
(20, 'create', 'dfsfsdf', '2023-04-30 01:05:52'),
(21, 'create', 'sdads', '2023-04-30 01:13:35'),
(22, 'create', 'sdfsdf', '2023-04-30 01:13:41'),
(23, 'create', 'fsdfsdfsd', '2023-04-30 01:20:39'),
(24, 'hjasdkajks', 'sdfsdfsf', '2023-04-30 01:22:50'),
(25, 'create', 'sdfsdfsf', '2023-04-30 01:23:05'),
(26, 'create', 'sdfsdfsdf', '2023-04-30 01:25:29'),
(27, 'test', 'hello', '2023-04-30 01:26:48'),
(28, 'myuser', 'test', '2023-05-02 17:23:28'),
(29, 'heelo', 'test', '2023-05-02 17:24:17'),
(30, 'dfdf', 'hellosdfsd', '2023-05-02 17:24:21'),
(31, 'do', 'do', '2023-05-02 17:30:33'),
(32, 're', 're', '2023-05-02 17:31:15'),
(33, 'ttt', 'ttt', '2023-05-02 17:35:55'),
(34, 'rrr', 'rrr', '2023-05-02 17:36:34'),
(35, 'K1936055', 'Juliet@1992', '2023-05-02 19:12:36'),
(36, 'alpha', '1234', '2023-05-02 19:15:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answerId`);

--
-- Indexes for table `knowledge`
--
ALTER TABLE `knowledge`
  ADD PRIMARY KEY (`knowledgeId`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`projectid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `scenario`
--
ALTER TABLE `scenario`
  ADD PRIMARY KEY (`scenarionumber`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`sectionid`),
  ADD KEY `projectid` (`taskId`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`taskId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `answerId` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `knowledge`
--
ALTER TABLE `knowledge`
  MODIFY `knowledgeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `projectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9223372036854775807;

--
-- AUTO_INCREMENT for table `scenario`
--
ALTER TABLE `scenario`
  MODIFY `scenarionumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `sectionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `taskId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
