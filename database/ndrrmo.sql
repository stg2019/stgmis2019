-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2019 at 05:08 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ndrrmo`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambulance`
--

CREATE TABLE `ambulance` (
  `ambulance_id` int(10) NOT NULL,
  `plate_no` varchar(20) NOT NULL,
  `vehicle_name` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ambulance`
--

INSERT INTO `ambulance` (`ambulance_id`, `plate_no`, `vehicle_name`, `status`) VALUES
(1, 'WRT210', 'Samaritan 1', 'Unbook'),
(2, 'FYT291', 'Samaritan 2', 'Unbook'),
(3, 'WMQ130', 'Samaritan 3', 'Unbook'),
(4, 'EQL297', 'Samaritan 4', 'Unbook'),
(5, 'WYV881', 'Ford', 'Unbook');

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `assessment_id` int(10) NOT NULL,
  `chief_complaints` varchar(255) NOT NULL,
  `subjective_assessment` varchar(255) NOT NULL,
  `objective_assessment` varchar(255) NOT NULL,
  `priority_level` varchar(50) NOT NULL,
  `patient_disposition` varchar(255) NOT NULL,
  `interventions` varchar(255) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`assessment_id`, `chief_complaints`, `subjective_assessment`, `objective_assessment`, `priority_level`, `patient_disposition`, `interventions`, `patient_id`) VALUES
(1, 'NA', 'NA', 'NA', '1 - Emergent', 'Call Cancelled', 'Moved to ambulance on stretcher/backboard              ', 1),
(2, 'NA', 'NA', 'NA', '2 - Urgent', 'Treated and Released / transferred care', 'ET Tube 12 12            ', 2),
(3, 'NA', 'NA', 'NA', '3 - Non-urgent', 'Treated and Released / transferred care ', 'ET Tube Tube - 100 Level 1            ', 3),
(4, 'NA', 'NA', 'NA', '2 - Urgent', 'Treated and Released / transferred care CLMMRH', 'ET Tube 12 12            ', 4),
(5, 'NA', 'NA', 'NA', '1 - Emergent', 'Treated and Released / transferred care Riverside', 'CPR       100 08/25/2018 2:11 PM      ', 5),
(6, 'NA', 'NA', 'NA', '1 - Emergent', 'Treated and Released / transferred care CLMMRH', 'O2 Administered   12 12          ', 9),
(7, 'Assessment', 'Assessment', 'Assessment', '1 - Emergent', 'Refused Treatment ', 'Airway Cleared              ', 10),
(8, 'NA', 'NA', 'NA', '2 - Urgent', 'No Treatment Required ', 'O2 Administered   12 12          ', 11),
(9, 'NA', 'NA', 'NA', '3 - Non-urgent', 'No Treatment Required ', 'Walked to ambulance              ', 12),
(10, 'NA', 'NA', 'NA', '1 - Emergent', 'Treated / transport to facility ', 'Moved to ambulance on stretcher/backboard              ', 13),
(11, '12', '12', '12', '2 - Urgent', 'Treated / transport to facility ', 'Moved to ambulance on stretcher/backboard              ', 7),
(12, 'Test', 'Test', 'Test', '1 - Emergent', 'Refused Treatment ', 'Moved to ambulance on stretcher/backboard              ', 14),
(13, 'Test', 'Test', 'Test', '1', 'No Treatment Required ', 'Moved to ambulance on stretcher/backboard              ', 15),
(14, 'Test', 'Test', 'Test', '2', 'No Treatment Required ', 'OPA / NPA used              ', 16),
(15, 'Test', 'Test', 'Test', '1', 'Treated / transport to facility ', 'Moved to ambulance on stretcher/backboard              ', 17),
(16, 'None', 'None', 'None', '3', 'Treated / transport to facility ', 'Moved to ambulance on stretcher/backboard              ', 18),
(17, '1', '1', '1', '2', 'Not of legal age /minor ', 'OPA / NPA used              ', 21),
(18, '1', '1', '1', '3', 'Behavioral / altered mental status ', 'ET Tube 1 1            ', 22),
(19, 'NA', 'NA', 'NA', '3', 'Treated / transport to facility ', 'Walked to ambulance              ', 28),
(20, 'NA', 'NA', 'NA', '2', 'Treated / transport to facility ', 'Moved to ambulance on stretcher/backboard              ', 30),
(21, 'NA', 'NA', 'NA', '2', 'Treated / transport to facility ', 'Moved to ambulance on stretcher/backboard              ', 34),
(22, 'NA', 'NA', 'NA', '1', 'Treated / transport to facility ', 'Walked to ambulance              ', 35),
(23, 'NA', 'NA', 'NA', '2', 'Treated / transport to facility ', 'Moved to ambulance on stretcher/backboard              ', 36),
(24, 'NA', 'NA', 'NA', '2', 'Treated / transport to facility ', 'Walked to ambulance              ', 37),
(25, 'NA', 'NA', 'NA', '2', 'Treated / transport to facility ', 'Walked to ambulance              ', 38),
(26, 'NA', 'Patient suffer cardiac arrest', 'NA', '3', 'Treated / transport to facility ', 'Moved to ambulance on stretcher/backboard              ', 39),
(27, 'NA', 'NA', 'NA', '3', 'Treated / transport to facility ', 'Moved to ambulance on stretcher/backboard              ', 40),
(28, 'NA', 'NA', 'NA', '3', 'Treated / transport to facility ', 'Airway Cleared              ', 41),
(29, 'NA', 'NA', 'NA', '2', 'Treated / transport to facility ', 'Moved to ambulance on stretcher/backboard              ', 42),
(30, 'NA', 'NA', 'NA', '3', 'Treated / transport to facility ', 'Moved to ambulance on stretcher/backboard              ', 44),
(31, 'NA', 'Patient Cardiac Arrest', 'NA', '3', 'Treated / transport to facility ', 'Moved to ambulance on stretcher/backboard              ', 45),
(32, 'NA', 'Food poison', 'NA', '3', 'Treated / transport to facility ', 'Moved to ambulance on stretcher/backboard              ', 48),
(33, 'NA', 'Dead on arrival', 'Committed Suicide', '2', 'Dead at scene ', 'Moved to ambulance on stretcher/backboard              ', 50),
(34, 'NA', 'NA', 'Na', '2', 'Treated / transport to facility ', 'Moved to ambulance on stretcher/backboard              ', 51),
(35, 'NA', 'NA', 'NA', '3', 'Treated / transport to facility ', 'Moved to ambulance on stretcher/backboard              ', 53),
(36, 'NA', 'NA', 'NA', '3', 'Treated / transport to facility ', 'Moved to ambulance on stretcher/backboard              ', 55),
(37, 'NA', 'NA', 'NA', '2', 'No Treatment Required ', 'Walked to ambulance              ', 57),
(38, 'NA', 'NA', 'NA', '3', 'Treated / transport to facility ', 'Moved to ambulance on stretcher/backboard              ', 59),
(39, 'NA', 'NA', 'NA', '2', 'Treated / transport to facility ', 'Moved to ambulance on stretcher/backboard              ', 61),
(40, 'NA', 'NA', 'NA', '3', 'No Treatment Required ', 'Moved to ambulance on stretcher/backboard              ', 66);

-- --------------------------------------------------------

--
-- Table structure for table `call_logs`
--

CREATE TABLE `call_logs` (
  `call_id` int(10) NOT NULL,
  `date_time_call` varchar(50) NOT NULL,
  `complete_address` varchar(100) NOT NULL,
  `emergency` varchar(100) NOT NULL,
  `caller_name` varchar(50) NOT NULL,
  `contact_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `call_logs`
--

INSERT INTO `call_logs` (`call_id`, `date_time_call`, `complete_address`, `emergency`, `caller_name`, `contact_no`) VALUES
(1, '09/16/2018 11:49 AM', 'Lizares Avenue, Bacolod City', 'Accident near 7/112', 'Kurt Dela Torre', '4332449'),
(2, '09/16/2018 11:49 AM', 'Lacson Avenue, Bacolod City, Negros Occidental, Philippines', 'Accident sa may Lacson', 'Peter Sacayle', '4332449'),
(3, '09/16/2018 11:56 AM', 'Balboa St. Eroreco, Bacolod City', 'Fires', 'Alkaid Lamig', '4332449'),
(4, '09/19/2018 11:51 PM', 'Banago, Negros Occidental, Philippines', 'Test', 'Test', 'Test'),
(5, '10/14/2018 12:48 AM', 'Andalucia St., Bacolod City, Negros Occidental, Philippines', 'Test', 'Test', 'Test'),
(6, '11/01/2018 11:57 AM', 'Burgos St, Bacolod City, Negros Occidental, Philippines', 'Test', 'Kurt Dela Torre', '4332449'),
(7, '11/01/2018 12:01 PM', 'Sum-ag Bacolod City', 'Test', 'Kurt Dela Torre', '4332449'),
(8, '11/01/2018 12:10 PM', 'Brgy. Langis, Banago, Bacolod City', 'Test', 'Kurt Dela Torre', '4332449'),
(9, '11/01/2018 4:04 PM', 'Burgos St., Bacolod City', 'Test', 'Kurt Dela Torre', '4332449'),
(10, '11/02/2018 3:18 PM', 'Barangay Cabug, Handumanan, Bacolod City', 'Test', 'Kurt Dela Torre', '4332449'),
(11, '12/06/2018 6:45 PM', 'Lizares Avenue, Bacolod City', 'Test', 'Kurt Dela Torre', '433-2449'),
(12, '12/06/2018 6:48 PM', 'Hernaez St., Bacolod City', 'Test', 'Kurt Dela Torre', '433-2449'),
(13, '12/22/2018 11:01 AM', 'Lizares Avenue, Bacolod City, Negros Occidental, Philippines', 'Test', 'Kurt Dela Torre', '4332449'),
(14, '01/05/2019 1:03 PM', 'Andalucia Street, Eroreco, Bacolod City', 'Test', 'Kurt Dela Torre', '4332449'),
(15, '01/17/2019 4:52 PM', 'Lacson Street, Bacolod City', 'Car Accident', 'Ryan Callejas', '09019201920'),
(16, '01/23/2019 10:38 AM', 'Lizares Extension', 'Motor Accident', 'Jose Torres', '0910293403'),
(17, '01/19/2019 1:13 PM', 'Brgy. Bata', 'Car related accident', 'Joseph Cawit', '09212930405'),
(18, '01/17/2019 11:32 PM', 'Brgy. Taculing', 'Gun shot', 'Ryan Hermosa', '0921931031'),
(19, '01/17/2019 11:40 PM', 'Homesite', 'Animal Related', 'Henjie Ruiz', '09439203211'),
(20, '01/17/2019 11:56 PM', 'Lasalle Avenue', 'Motor Accident', 'Krizza Reyes', '0920310341'),
(21, '01/18/2019 12:11 AM', 'Mandalagan', 'Animal bites', 'Angelo Garcia', '0912910210'),
(22, '01/18/2019 12:18 AM', 'Banago', 'NA', 'Mark Salazar', '0921029301'),
(23, '01/19/2019 12:31 AM', 'UNO-R Ville, Mansilingan', 'NA', 'Angelo Reyes', '09129102101'),
(24, '01/19/2019 8:47 AM', 'Airport Subdivision', 'Major Trauma', 'Joshua Tueres', '0912929301'),
(25, '01/18/2019 1:01 AM', 'Barangay Handumanan', 'Motor Accident', 'Mark Reyes', '091201021'),
(26, '01/18/2019 1:11 AM', 'Alijis', 'Car Accident', 'Jerome Marquez', '0921029101'),
(27, '01/18/2019 1:16 AM', 'Pahanocoy', 'Emergency', 'Jose Villa', '0920192011'),
(28, '01/18/2019 1:26 AM', 'Barangay 38', 'Drunk and waster person', 'Jessica Jimenez', '0920193045'),
(29, '01/18/2019 1:34 AM', 'Country Homes Alijis', 'Cardiac Arrest', 'Maria Zarragoza', '02914910491'),
(30, '01/18/2019 1:40 AM', 'Lacson Street', 'Emergency related to robbery', 'Emman Nemenzo ', '02910930147'),
(31, '01/18/2019 1:50 AM', 'Paglaum Village', 'Animal Bites', 'Ricardo Suarez', '034-3103'),
(32, '01/18/2019 1:55 AM', 'Camelll Homes, Mandalagan', 'Food Poison', 'Isabelle Ramos', '034-1212'),
(33, '01/18/2019 10:19 AM', 'SM City Bacolod', 'Suicide', 'Rene Forca', '09129310301'),
(34, '01/18/2019 10:31 AM', 'Taculing', 'NA', 'Janiel Alcano', '09201029301'),
(35, '01/18/2019 10:45 AM', 'Sum-ag', 'Motor Accident', 'Elmer Haro', '0902910201'),
(36, '01/18/2019 10:59 AM', 'Pahanocoy', 'Multiple Car Accident', 'Romeo Marquez', '0902019201'),
(37, '01/18/2019 11:09 AM', 'Mansilingan', 'NA', 'Rosario Suarez', '0920192012'),
(38, '01/18/2019 11:23 AM', 'Villa Angela', 'Behavioral', 'Kristel Hahn', '0909210291'),
(39, '01/18/2019 11:26 AM', 'Country Homes Alijis', 'Stabbeb', 'Kurt Dela Torre', '0921021029'),
(40, '01/18/2019 11:35 AM', 'Homsite', 'Car Accident', 'Janeil Alcano', '0920129101'),
(41, '01/18/2019 12:20 PM', 'Mandalagan', 'Motor Accident', 'Gonzalo Reyes', '034-1221'),
(42, '01/18/2019 12:29 PM', 'Tangub', 'NA', 'Jose Delos Reyes', '091019201'),
(43, '01/18/2019 12:40 PM', 'Punta-taytay', 'NA', 'Gielou Lirazan', '09201920121'),
(44, '01/18/2019 12:45 PM', 'Brgy. Granada', 'NA', 'Stephen Yanson', '0921029101'),
(45, '01/18/2019 12:49 PM', 'Lizares Street', 'Hit and run', 'Mccoy Cruz', '0921029103'),
(46, '01/18/2019 1:06 PM', 'Banago ', 'Drug Overdosed', 'Anonymous', '0920102010'),
(47, '01/18/2019 1:22 PM', 'Eroreco', 'Gun shots', 'Kenneth Garcia', '0929284911'),
(48, '01/18/2019 1:30 PM', 'Libertad', 'Head injury', 'Dennzel Cuachon', '0902910291'),
(49, '01/18/2019 1:38 PM', 'Mandalagan, Negros Occidental, Philippines', 'Heat Stroke', 'Benjamin Franklin', '0923013910'),
(50, '01/18/2019 1:51 PM', 'North Highway', 'Multiple Vehicle Accident with mass casualty', 'Will Cortez', '034-2192'),
(51, '01/18/2019 3:34 PM', 'Alijis', 'NA', 'Carlo Reyes', '0123981209'),
(52, '01/24/2019 12:00 PM', 'Balboa St., Bacolod City, Negros Occidental', 'Car Accident', 'Rommel Adricula', '4332449');

-- --------------------------------------------------------

--
-- Table structure for table `db_backup`
--

CREATE TABLE `db_backup` (
  `back_up_id` int(10) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `activity` varchar(15) NOT NULL,
  `date` varchar(12) NOT NULL,
  `time` varchar(12) NOT NULL,
  `activity_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_backup`
--

INSERT INTO `db_backup` (`back_up_id`, `user_id`, `activity`, `date`, `time`, `activity_status`) VALUES
(29, '182', 'Import', 'December 24,', '10:40 pm', 'Successfully Imported Database'),
(30, '182', 'Export', 'December 24,', '10:40 pm', 'Successfully Exported Database'),
(31, '182', 'Import', 'December 24,', '10:40 pm', 'Successfully Imported Database'),
(32, '182', 'Export', 'December 29,', '8:36 pm', 'Successfully Exported Database'),
(33, '182', 'Export', 'December 29,', '8:36 pm', 'Successfully Exported Database'),
(34, '182', 'Export', 'December 31,', '12:04 am', 'Successfully Exported Database'),
(35, '182', 'Import', 'January 6, 2', '12:09 am', 'Successfully Imported Database'),
(36, '182', 'Export', 'January 24, ', '11:36 pm', 'Successfully Exported Database');

-- --------------------------------------------------------

--
-- Table structure for table `dispatch`
--

CREATE TABLE `dispatch` (
  `dispatch_id` int(10) NOT NULL,
  `service_no` varchar(50) NOT NULL,
  `date_time_call` varchar(50) NOT NULL,
  `ambulance` varchar(50) NOT NULL,
  `dispatched_for` varchar(50) NOT NULL,
  `call_location` varchar(100) NOT NULL,
  `moi_noi` varchar(50) NOT NULL,
  `patients_on_scene` varchar(50) NOT NULL,
  `on_board_tl` varchar(50) NOT NULL,
  `ems` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `care_in_progress` varchar(50) NOT NULL,
  `mass_casualty` varchar(50) NOT NULL,
  `enroute` varchar(20) NOT NULL,
  `date_created` varchar(100) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `longi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dispatch`
--

INSERT INTO `dispatch` (`dispatch_id`, `service_no`, `date_time_call`, `ambulance`, `dispatched_for`, `call_location`, `moi_noi`, `patients_on_scene`, `on_board_tl`, `ems`, `driver`, `care_in_progress`, `mass_casualty`, `enroute`, `date_created`, `month`, `year`, `lat`, `longi`) VALUES
(1, 'EMS-0001', '08/25/2018 11:32 AM', 'Samaritan 1', 'Airway Obstruction', 'Andalucia Street, Bacolod City', '', '1', '100', '100', 'Kurt Dela Torre', 'Citizen', 'on', '11:34 am', 'August 17, 2018 07:44 pm', 'Aug', '2018', '10.6820461', '122.969601'),
(2, 'EMS-0002', '08/25/2018 1:41 PM', 'Samaritan 1', 'Airway Obstruction', 'Margarita Street, Bacolod City', '123', '1', '123', '123', 'Alkaid  Lamig', 'Citizen', 'No', '1:41 pm', 'August 17, 2018 08:44 pm', 'Aug', '2018', '10.659050', '122.951010'),
(3, 'EMS-0003', '09/01/2018 12:31 AM', 'Samaritan 1', 'Hypertension', 'Margarita Street, Bacolod', '12', '1', '12', '12', 'Alkaid Lamig', 'Citizen', 'No', '12:31 am', 'August 17, 2018 10:10 am', 'Aug', '2018', '10.659050', '122.951010'),
(4, 'EMS-0004', '09/01/2018 12:38 AM', 'Samaritan 1', 'Stroke/CVA', 'Lizares Avenue, Bacolod City', '12', '2', '12', '12', 'Alvin Mananquil', 'Citizen', 'Yes', '12:38 am', 'September 15, 2018 10:30 am', 'Sep', '2018', '10.6597439', '122.9458409'),
(5, 'EMS-0005', '09/07/2018 12:25 PM', 'Samaritan 2', 'Airway Obstruction', 'Hernaez Street, Bacolod City', '100', '2', '100', 'Kurt Dela Torre', 'Peter Sacayle', 'Citizen', 'Yes', '12:25 pm', 'September 16, 2018 10:50 am', 'Sep', '2018', '122.9470662', '122.9470662'),
(6, 'EMS-0006', '09/07/2018 5:36 PM', 'Samaritan 1', 'Airway Obstruction', 'Taculing Barangay Hall, Bacolod City', '109', '1', '109', 'EMS', 'Peter Sacayle', 'Citizen', 'Yes', '5:37 pm', 'September 17, 2018 12:44 pm', 'Sep', '2018', '10.6493125', '122.9472441'),
(7, 'EMS-0007', '09/17/2018 11:10 AM', 'Samaritan 1', 'Hypertension', 'Santa Clara St, Mandalagan', '12', '1', '12', 'Test', 'Kurt Dela Torre', 'Citizen', 'Yes', '11:12 am', 'September 17, 2018 09:44 pm', 'Sep', '2018', '10.6839315', '122.970513'),
(8, 'EMS-0008', '09/23/2018 6:30 PM', 'Samaritan 1', 'Stroke/CVA', 'Lizares Avenue, Bacolod City', '20', '1', '10', '10', 'Alvin Mananquil', 'Medical Practicioner / First Aider', 'No', '6:30 pm', 'September 23, 2018 10:44 am', 'Sep', '2018', '10.6597439', '122.9458409'),
(9, 'EMS-0009', '09/27/2018 12:11 AM', 'Samaritan 1', 'Hypertension', 'Lizares Avenue, Bacolod City', '12', '1', '12', 'Kurt Dela Torre', 'Alkaid Lamig', 'Citizen', 'No', '12:11 am', 'September 26, 2018 11:44 pm', 'Sep', '2018', '10.6597439', '122.9458409'),
(10, 'EMS-0010', '09/27/2018 12:23 AM', 'Samaritan 2', 'Allergic Reaction', 'Fiesta Homes Subd., Sum-ag, Bacolod City', '12', '2', '12', 'Alkaid Lamig', 'Peter Sacayle', 'None', 'No', '12:24 am', 'September 26, 2018 11:44 pm', 'Sep', '2018', '10.5964456', '122.9181648'),
(14, 'EMS-0011', '09/30/2018 11:28 PM', 'Samaritan 2', 'Respiratory Arrest', 'Hernaez Street, Bacolod City', 'Kurt Dela Torre', '1', '1', 'Peter Sacayle', 'Alkaid Lamig', 'Medical Practicioner / First Aider', 'No', '11:29 pm', 'September 30, 2018 11:29 pm', 'Sep', '2018', '10.6618945', '122.9471239'),
(17, 'EMS-0012', '11/01/2018 10:20 AM', 'Samaritan 2', 'Airway Obstruction', 'Lizares Avenue, Bacolod City, Negros Occidental, Philippines', '12', '2', '12', '12', 'Kurt Dela Torre', 'Citizen', 'No', '10:20 am', 'November 1, 2018 10:20 am', 'Nov', '2018', '10.6597439', '122.9458409'),
(18, 'EMS-0013', '11/01/2018 10:23 AM', 'Samaritan 2', 'Respiratory Arrest', 'Lizares Avenue, Bacolod City, Negros Occidental, Philippines', '12', '12', '12', '12', 'Kurt Dela Torre', 'Medical Practicioner / First Aider', 'No', '10:23 am', 'November 1, 2018 10:23 am', 'Nov', '2018', '10.6597439', '122.9458409'),
(19, 'EMS-0014', '11/01/2018 10:29 AM', 'Samaritan 2', 'Airway Obstruction', 'Lizares Avenue, Bacolod City, Negros Occidental, Philippines', '12', '12', '12', '12', 'Kurt Dela Torre', 'Other Rescue Unit', 'No', '10:29 am', 'November 1, 2018 10:29 am', 'Nov', '2018', '10.6597439', '122.9458409'),
(22, 'EMS-0015', '11/01/2018 10:47 AM', 'Samaritan 2', 'Respiratory Arrest', 'Fiesta Homes Subd., Sum-ag, Bacolod City', '12', '1', '1', '1', 'Kurt Dela Torre', 'Medical Practicioner / First Aider', 'No', '10:47 am', 'November 1, 2018 10:47 am', 'Nov', '2018', '10.5964456', '122.9181648'),
(23, 'EMS-0016', '11/01/2018 11:02 AM', 'Samaritan 2', 'Respiratory Distress', 'Casiana St, Bacolod City, Negros Occidental, Philippines', '1', '1', '1', '1', 'Kurt Dela Torre', 'Medical Practicioner / First Aider', 'No', '11:02 am', 'November 1, 2018 11:02 am', 'Nov', '2018', '10.6809427', '122.9696005'),
(47, 'EMS-0017', '11/01/2018 3:13 PM', 'Samaritan 2', 'Respiratory Arrest', 'Brgy. Langis, Banago, Bacolod City', '1', '1', '1', '1', 'Kurt Dela Torre', 'Other Rescue Unit', 'No', '3:13 pm', 'November 1, 2018 3:13 pm', 'Nov', '2018', '10.705689', '122.94957899999997'),
(48, 'EMS-0018', '11/01/2018 4:04 PM', 'Samaritan 2', 'Respiratory Distress', 'Burgos St., Bacolod City', '1', '2', '2', '2', 'Alkaid Lamig', 'Citizen', 'No', '4:04 pm', 'November 1, 2018 4:04 pm', 'Nov', '2018', '10.6660895', '123.03325859999995'),
(49, 'EMS-0019', '11/02/2018 3:20 PM', 'Samaritan 2', 'Cardiac Related', 'Balboa St., Bacolod City, Negros Occidental', '1', '1', '1', '1', 'Alkaid Lamig', 'Medical Practicioner / First Aider', 'No', '3:20 pm', 'November 2, 2018 3:20 pm', 'Nov', '2018', '10.5986421', '122.94745080000007'),
(50, 'EMS-0020', 'November 6, 2018 10:42 pm', 'Samaritan 2', 'Behavioral Changes', 'Barangay Cabug, Handumanan, Bacolod City', '1', '1', '1', '1', 'Alkaid Lamig', 'Citizen', 'No', '10:42 pm', 'November 6, 2018 10:42 pm', 'Nov', '2018', '10.5986421', '122.94745080000007'),
(51, 'EMS-0021', 'December 22, 2018 11:02 am', 'Ambulance - Model B', 'Stroke/CVA', 'Lizares Avenue, Bacolod City, Negros Occidental, Philippines', '1', '1', '1', '1', 'Alkaid Lamig', 'Citizen', 'No', '11:02 am', 'December 22, 2018 11:02 am', 'Dec', '2018', '', ''),
(52, 'EMS-0022', '05/20/2019 1:07 PM', 'Samaritan 2', 'Hypertension', 'Andalucia Street, Bacolod City', '1', '1', '1', 'Alkaid Lamig', 'Alvin Mananquil', 'None', 'No', '1:07 pm', 'January 6, 2019 12:07 am', 'Jan', '2019', '', ''),
(53, 'EMS-0023', 'January 17, 2019 4:55 pm', 'Samaritan 3', 'Major Trauma', 'Lacson Street, Bacolod City', 'Accident', '1', '0219', '0010', 'Arianne Torres', 'None', 'No', '4:55 pm', 'January 17, 2019 4:55 pm', 'Jan', '2019', '', ''),
(54, 'EMS-0024', 'January 17, 2019 10:42 pm', 'Samaritan 1', 'Bleeding/Hemorrhage', 'Lizares Extension', 'Stab wounds ', '1', '0012', '0121', 'Elmer Haro', 'None', 'No', '10:42 pm', 'January 17, 2019 10:42 pm', 'Jan', '2019', '', ''),
(55, 'EMS-0025', 'January 17, 2019 11:17 pm', 'Samaritan 2', 'Major Trauma', 'Brgy. Bata', 'Car Accident', '2', '0221', '2312', 'Alvin Mananquil', 'None', 'No', '11:17 pm', 'January 17, 2019 11:17 pm', 'Jan', '2019', '', ''),
(56, 'EMS-0026', 'January 17, 2019 11:34 pm', 'Samaritan 1', 'Bleeding/Hemorrhage', 'Brgy. Taculing', 'Gun shot wounded', '1', '0192', '1903', 'Alkaid Lamig', 'None', 'No', '11:34 pm', 'January 17, 2019 11:34 pm', 'Jan', '2019', '', ''),
(57, 'EMS-0027', 'January 17, 2019 11:50 pm', 'Samaritan 2', 'Animal Bites/Sting', 'Homesite', 'Animat Bites', '1', '09102', '23121', 'Kurt Dela Torre', 'Citizen', 'No', '11:50 pm', 'January 17, 2019 11:50 pm', 'Jan', '2019', '', ''),
(58, 'EMS-0028', '01/17/2019 11:59 PM', 'Samaritan 1', 'Head Injury', 'Lasalle Avenue', 'Accident', '1', '213133', '42321', 'Alvin Manaquil', 'None', 'No', '11:59 pm', 'January 17, 2019 11:59 pm', 'Feb', '2019', '', ''),
(59, 'EMS-0029', 'January 18, 2019 12:13 am', 'Samaritan 2', 'Animal Bites/Sting', 'Capitol', 'Animal Bites', '1', '09201', '20203', 'Arianne Torres', 'None', 'No', '12:13 am', 'January 18, 2019 12:13 am', 'Feb', '2019', '', ''),
(60, 'EMS-0030', 'January 18, 2019 12:21 am', 'Samaritan 1', 'Seizure', 'Banago', 'Possible Stroke', '1', '21913', '09210', '#', '', 'No', '12:21 am', 'January 18, 2019 12:21 am', 'Feb', '2019', '', ''),
(61, 'EMS-0031', 'January 18, 2019 12:34 am', 'Samaritan 2', 'Cardiac Related', 'UNO-R Ville, Mansilingan', 'Cardiac Arrest', '1', '09210', '09213', 'Kurt Dela Torre', 'None', 'Yes', '12:34 am', 'January 18, 2019 12:34 am', 'Feb', '2019', '', ''),
(62, 'EMS-0032', 'January 18, 2019 12:52 am', 'Samaritan 4', 'Major Trauma', 'Airport Subdivision', 'Trauma', '2', '09019', '00921', 'Elmer Haro', 'None', 'No', '12:52 am', 'January 18, 2019 12:52 am', 'Feb', '2019', '', ''),
(63, 'EMS-0033', 'January 18, 2019 1:04 am', 'Samaritan 1', 'Spinal Injury', 'Barangay Handumanan', 'Accident', '1', '99021', '22131', 'Alkaid Lamig', 'None', 'No', '1:04 am', 'January 18, 2019 1:04 am', 'Feb', '2019', '', ''),
(64, 'EMS-0034', 'January 18, 2019 1:12 am', 'Samaritan 3', 'Head Injury', 'Alijis', 'Accident', '1', '09102', '29101', 'Alvin Mananquil', 'None', 'No', '1:12 am', 'January 18, 2019 1:12 am', 'Mar', '2019', '', ''),
(65, 'EMS-0035', '01/18/2019 1:22 AM', 'Samaritan 1', 'Stroke/CVA', 'Pahanocoy', 'Mild Stroke', '1', '19201', '29102', 'Elmer Haro', 'None', 'No', '1:21 am', 'January 18, 2019 1:21 am', 'Mar', '2019', '', ''),
(66, 'EMS-0036', 'January 18, 2019 1:36 am', 'Samaritan 1', 'Cardiac Related', 'Country Homes Alijis', 'Cardiac Arrest', '1', '10201', '1201', 'Arianne Torres', 'Medical Practicioner / First Aider', 'No', '1:36 am', 'January 18, 2019 1:36 am', 'Mar', '2019', '', ''),
(67, 'EMS-0037', 'January 18, 2019 1:43 am', 'Samaritan 1', 'Amputation', 'Lacson Street', 'Stab wounds', '1', '29181', '29301', 'Kurt Dela Torre', 'None', 'No', '1:43 am', 'January 18, 2019 1:43 am', 'Mar', '2019', '', ''),
(68, 'EMS-0038', 'January 18, 2019 1:52 am', 'Samaritan 1', 'Animal Bites/Sting', 'Paglaum Village', 'Animal Bites', '1', '292122', '219201', 'Alvin Mananquil', 'None', 'No', '1:52 am', 'January 18, 2019 1:52 am', 'Apr', '2019', '', ''),
(69, 'EMS-0039', '01/18/2019 1:58 AM', 'Samaritan 4', 'Poisoning', 'Camelll Homes, Mandalagan', 'Food Poison', '2', '2121', '2019', 'Alkaid Lamig', 'Citizen', 'No', '1:57 am', 'January 18, 2019 1:57 am', 'Apr', '2019', '', ''),
(70, 'EMS-0040', 'January 18, 2019 10:23 am', 'Samaritan 2', 'Suicide/Attempted Suicide', 'SM City Bacolod', 'Head Bleeding', '1', '092910', '291021', 'Arianne Torres', 'None', 'No', '10:23 am', 'January 18, 2019 10:23 am', 'Apr', '2019', '', ''),
(71, 'EMS-0041', 'January 18, 2019 10:37 am', 'Samaritan 1', 'Fracture/Dislocation', 'Taculing', 'Bone Fracture', '1', '09019', '90191', 'Kurt Dela Torre', 'None', 'No', '10:37 am', 'January 18, 2019 10:37 am', 'May', '2019', '', ''),
(72, 'EMS-0042', 'January 18, 2019 10:47 am', 'Samaritan 1', 'Major Trauma', 'Sum-ag', 'NA', '2', '09019', '10210', 'Alvin Mananquil', 'None', 'No', '10:47 am', 'January 18, 2019 10:47 am', 'May', '2019', '', ''),
(73, 'EMS-0043', 'January 18, 2019 11:02 am', 'Samaritan 1', 'Major Trauma', 'Pahanocoy', 'Trauma', '4', '90190', '21021', 'Alkaid Lamig', 'Other Rescue Unit', 'No', '11:02 am', 'January 18, 2019 11:02 am', 'May', '2019', '', ''),
(74, 'EMS-0044', 'January 18, 2019 11:16 am', 'Samaritan 3', 'Behavioral Changes', 'Mansilingan', 'Psyschological', '1', '90291', '2183', 'Kurt Dela Torre', 'Medical Practicioner / First Aider', 'No', '11:16 am', 'January 18, 2019 11:16 am', 'May', '2019', '', ''),
(75, 'EMS-0045', 'January 18, 2019 11:30 am', 'Samaritan 4', 'Behavioral Changes', 'Country Homes Alijis', 'Psychological', '1', '9021', '2192', 'Kurt Dela Torre', 'None', 'No', '11:30 am', 'January 18, 2019 11:30 am', 'May', '2019', '', ''),
(76, 'EMS-0046', 'January 18, 2019 11:40 am', 'Samaritan 2', 'Trauma Penetrating', 'Homsite', 'NA', '2', '09201', '2211', 'Alkaid Lamig', 'None', 'No', '11:40 am', 'January 18, 2019 11:40 am', 'May', '2019', '', ''),
(77, 'EMS-0047', 'January 18, 2019 12:22 pm', 'Ford', 'Major Trauma', 'Mandalagan', 'Fractured Bones', '3', '09011', '09101', 'Kurt Dela Torre', '', 'No', '12:22 pm', 'January 18, 2019 12:22 pm', 'Jun', '2019', '', ''),
(78, 'EMS-0048', 'January 18, 2019 12:31 pm', 'Samaritan 4', 'Hazardous materials', 'Tangub', 'Hazard', '2', '09019', '90192', 'Alvin Mananquil', 'Medical Practicioner / First Aider', 'No', '12:31 pm', 'January 18, 2019 12:31 pm', 'Jun', '2019', '', ''),
(79, 'EMS-0049', 'January 18, 2019 12:42 pm', 'Samaritan 1', 'Nausea/Vomiting', 'Punta-taytay', 'NA', '1', '09101', '21901', 'Arianne Torres', 'Medical Practicioner / First Aider', 'No', '12:42 pm', 'January 18, 2019 12:42 pm', 'Jun', '2019', '', ''),
(80, 'EMS-0050', 'January 18, 2019 12:46 pm', 'Samaritan 4', 'Increased Body Temperature', 'Brgy. Granada', 'NA', '1', '09090', '2231', 'Elmer Haro', 'Medical Practicioner / First Aider', 'No', '12:46 pm', 'January 18, 2019 12:46 pm', 'Jun', '2019', '', ''),
(81, 'EMS-0051', 'January 18, 2019 12:51 pm', 'Samaritan 4', 'Bleeding/Hemorrhage', 'Lizares Street', 'NA', '1', '23135', '23211', 'Kurt Dela Torre', 'None', 'Yes', '12:51 pm', 'January 18, 2019 12:51 pm', 'Jan', '2019', '', ''),
(82, 'EMS-0052', 'January 18, 2019 1:12 pm', 'Samaritan 1', 'Substance Abuse', 'Banago ', 'Substance Abuse', '1', '9019', '2189', 'Alvin Mananquil', 'None', 'No', '1:12 pm', 'January 18, 2019 1:12 pm', 'Jan', '2019', '', ''),
(83, 'EMS-0053', 'January 18, 2019 1:25 pm', 'Ford', 'Unconscious/Unresponsive', 'Eroreco', 'NA', '1', '89218', '21311', 'Kurt Dela Torre', '', 'No', '1:25 pm', 'January 18, 2019 1:25 pm', 'Jan', '2019', '', ''),
(84, 'EMS-0054', 'January 18, 2019 1:33 pm', 'Ford', 'Unconscious/Unresponsive', 'Libertad', 'Head injury', '1', '3121', '3124', 'Kurt Dela Torre', '', 'No', '1:33 pm', 'January 18, 2019 1:33 pm', 'Jan', '2019', '', ''),
(85, 'EMS-0055', 'January 18, 2019 1:42 pm', 'Samaritan 3', 'Major Trauma', 'Mandalagan, Negros Occidental, Philippines', 'Motor Accident', '3', '2131', '2321', 'Elmer Haro', 'None', 'No', '1:42 pm', 'January 18, 2019 1:42 pm', 'Jan', '2019', '10.6855122', '122.97475120000001'),
(86, 'EMS-0057', '01/18/2019 1:55 PM', 'Samaritan 1', 'Respiratory Distress', 'North Highway', 'NA', '7', '2131', '3121', 'Alvin Mananquil', '', 'Yes', '1:54 pm', 'January 18, 2019 1:54 pm', 'Jan', '2019', '', ''),
(87, 'EMS-0056', 'January 18, 2019 3:36 pm', 'Samaritan 3', 'Head Injury', 'Alijis', 'NA', '1', '12413', '66544', 'Alvin Mananquil', 'None', 'No', '3:36 pm', 'January 18, 2019 3:36 pm', 'Jan', '2019', '', ''),
(88, 'EMT20190088', 'January 24, 2019 12:03 pm', 'Samaritan 1', 'Hypertension', 'Balboa St., Bacolod City, Negros Occidental', '1', '1', '1', 'Alvin Mananquil', 'Alkaid Lamig', 'None', 'No', '12:03 pm', 'January 24, 2019 12:03 pm', 'Jan', '2019', '10.6815761', '122.96972600000004');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` int(10) NOT NULL,
  `driver_name` varchar(100) NOT NULL,
  `age` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `home_address` varchar(100) NOT NULL,
  `duty_hours` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `driver_name`, `age`, `gender`, `contact_number`, `home_address`, `duty_hours`, `status`) VALUES
(1, 'Kurt Dela Torre', '21', 'Male', '4332449', 'Bacolod City', '9:00 AM - 9:00 PM', 'Unbook'),
(2, 'Alkaid Lamig', '21', 'Male', '4332449', 'Bacolod City', '9:00 PM - 9:00 AM', 'Unbook'),
(3, 'Peter Sacayle', '21', 'Male', '4332449', 'Bacolod City', '9:00 AM - 9:00 PM', 'Booked'),
(4, 'Elmer Haro', '40', 'Male', '4332449 local 181', 'Sum-ag Bacolod City', '9:00 AM - 9:00 PM', 'Unbook'),
(5, 'Alvin Mananquil', '40', 'Male', '4332449', 'Bacolod City', '9:00 PM - 9:00 AM', 'Unbook'),
(6, 'Arianne Torres', '27', 'Male', '4332449', 'Bacolod City', '9:00 AM - 9:00 PM', 'Unbook');

-- --------------------------------------------------------

--
-- Table structure for table `glassgow_coma_scale`
--

CREATE TABLE `glassgow_coma_scale` (
  `glassgow_coma_scale_id` int(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `eye` int(10) NOT NULL,
  `verbal` int(10) NOT NULL,
  `motor` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `glassgow_coma_scale`
--

INSERT INTO `glassgow_coma_scale` (`glassgow_coma_scale_id`, `time`, `eye`, `verbal`, `motor`, `patient_id`) VALUES
(1, '12:45 pm', 3, 3, 5, 1),
(2, '12:45 pm', 2, 3, 5, 2),
(3, '12:45 pm', 4, 4, 3, 3),
(4, '12:45 pm', 3, 3, 3, 4),
(5, '12:45 pm', 3, 4, 4, 5),
(6, '12:45 pm', 4, 4, 4, 9),
(7, '11:39 pm', 3, 4, 5, 10),
(8, '11:39 pm', 2, 2, 6, 11),
(9, '11:39 pm', 3, 3, 4, 12),
(10, '11:39 pm', 2, 4, 5, 13),
(11, '11:39 pm', 2, 3, 4, 7),
(12, '11:39 pm', 2, 2, 4, 14),
(13, '11:39 pm', 3, 4, 4, 15),
(14, '11:39 pm', 3, 2, 4, 16),
(15, '11:29 pm', 1, 1, 1, 17),
(16, '11:29 pm', 3, 3, 5, 18),
(17, '11:29 pm', 3, 5, 4, 21),
(18, '11:29 pm', 3, 2, 6, 22),
(19, '11:29 pm', 3, 3, 5, 22),
(20, '11:29 pm', 3, 3, 5, 23),
(21, '10:19 pm', 2, 4, 3, 23),
(22, '10:20 pm', 2, 4, 6, 23),
(23, '6:20 pm', 1, 1, 1, 22),
(24, '4:43 pm', 3, 2, 4, 27),
(25, '4:47 pm', 2, 4, 3, 28),
(26, '4:51 pm', 3, 2, 5, 29),
(27, '4:59 pm', 3, 2, 4, 30),
(28, '10:56 pm', 3, 3, 4, 31),
(29, '11:21 pm', 2, 3, 2, 32),
(30, '11:23 pm', 3, 3, 5, 33),
(31, '11:38 pm', 3, 3, 5, 34),
(32, '11:54 pm', 3, 3, 4, 35),
(33, '12:02 am', 2, 3, 3, 36),
(34, '12:16 am', 3, 2, 6, 37),
(35, '12:28 am', 3, 3, 3, 38),
(36, '12:31 am', 3, 3, 4, 24),
(37, '12:47 am', 3, 4, 3, 39),
(38, '12:57 am', 3, 3, 5, 40),
(39, '1:01 am', 2, 3, 4, 41),
(40, '1:10 am', 3, 3, 5, 42),
(41, '1:15 am', 3, 3, 5, 43),
(42, '1:26 am', 3, 3, 4, 44),
(43, '1:40 am', 1, 1, 1, 45),
(44, '1:50 am', 1, 1, 1, 46),
(45, '1:55 am', 3, 3, 5, 47),
(46, '2:00 am', 3, 4, 3, 48),
(47, '10:28 am', 1, 1, 1, 50),
(48, '10:42 am', 2, 4, 3, 51),
(49, '10:51 am', 3, 3, 4, 52),
(50, '10:58 am', 3, 3, 5, 53),
(51, '11:06 am', 2, 3, 4, 54),
(52, '11:07 am', 3, 2, 5, 55),
(53, '11:20 am', 3, 3, 4, 56),
(54, '11:26 am', 3, 3, 5, 56),
(55, '11:32 am', 2, 4, 3, 57),
(56, '11:35 am', 2, 3, 4, 57),
(57, '11:42 am', 3, 4, 3, 58),
(58, '11:44 am', 3, 3, 5, 59),
(59, '12:25 pm', 3, 2, 5, 60),
(60, '12:28 pm', 3, 3, 5, 61),
(61, '12:35 pm', 3, 2, 5, 62),
(62, '12:37 pm', 2, 3, 3, 63),
(63, '12:48 pm', 3, 2, 5, 65),
(64, '1:19 pm', 2, 4, 3, 66),
(65, '1:28 pm', 3, 2, 4, 67),
(66, '1:38 pm', 3, 2, 5, 68),
(67, '1:44 pm', 3, 2, 5, 69),
(68, '1:47 pm', 3, 2, 4, 70),
(69, '1:49 pm', 3, 3, 5, 71),
(70, '2:17 pm', 3, 3, 3, 72),
(71, '2:18 pm', 3, 3, 5, 73),
(72, '2:19 pm', 3, 3, 5, 74),
(73, '2:20 pm', 3, 2, 3, 75),
(74, '2:20 pm', 3, 2, 3, 76),
(75, '2:21 pm', 3, 3, 5, 77),
(76, '2:22 pm', 3, 2, 5, 78),
(77, '2:36 pm', 3, 3, 3, 79);

-- --------------------------------------------------------

--
-- Table structure for table `items_used`
--

CREATE TABLE `items_used` (
  `id` int(10) NOT NULL,
  `dispatch_id` int(10) NOT NULL,
  `medical_supply_name` varchar(50) NOT NULL,
  `quantity_used` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items_used`
--

INSERT INTO `items_used` (`id`, `dispatch_id`, `medical_supply_name`, `quantity_used`) VALUES
(1, 17, 'Alcohol', 2),
(2, 17, 'Cotton', 0),
(3, 17, 'Sample', 2),
(4, 17, 'Sample', 2),
(5, 47, 'Sample', 2),
(6, 47, 'Cotton', 10),
(7, 47, 'Alcohol', 5),
(8, 17, 'Shit', 10),
(9, 22, 'Cotton', 2),
(10, 22, 'Cotton', 2),
(11, 22, 'Cotton', 6),
(12, 3, 'Alcohol', 105),
(13, 3, 'Test', 105),
(14, 23, 'Cotton', 2),
(15, 23, 'Shit', 2),
(16, 17, 'Betadine', 3),
(17, 17, 'Alcohol', 30),
(18, 4, 'Alcohol', 2),
(19, 4, 'Cotton', 2),
(20, 4, 'Betadine', 1),
(21, 4, 'Gloves', 1);

-- --------------------------------------------------------

--
-- Table structure for table `medical_supply_request`
--

CREATE TABLE `medical_supply_request` (
  `medical_supply_request_id` int(10) NOT NULL,
  `medical_supply_name` varchar(100) NOT NULL,
  `requested_quantity` varchar(10) NOT NULL,
  `date_requested` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `date_approved` varchar(50) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_supply_request`
--

INSERT INTO `medical_supply_request` (`medical_supply_request_id`, `medical_supply_name`, `requested_quantity`, `date_requested`, `status`, `month`, `year`, `date_approved`, `user_id`) VALUES
(1, 'Sample', '100', 'October 14, 2018 8:44 pm', 'Approved', 'Oct', '2018', 'October 21, 2018 10:07 pm', 183),
(2, 'Cotton', '20', 'October 14, 2018 8:55 pm', 'Approved', 'Oct', '2018', 'November 2, 2018 4:02 pm', 183),
(4, 'Cotton', '20', 'October 14, 2018 8:56 pm', 'Approved', 'Oct', '2018', 'November 2, 2018 4:05 pm', 183),
(5, 'Betadine', '200', 'October 19, 2018 7:48 pm', 'Approved', 'Oct', '2018', 'December 1, 2018 7:42 pm', 183),
(6, 'Test', '100', 'October 19, 2018 8:27 pm', 'Approved', 'Oct', '2018', '', 183),
(7, 'Test', '20', 'October 21, 2018 9:09 pm', 'Approved', 'Oct', '2018', 'October 21, 2018 9:12 pm', 183),
(8, 'Sample', '100', 'November 1, 2018 6:17 pm', 'Approved', 'Nov', '2018', 'November 2, 2018 3:39 pm', 183),
(9, 'Sample', '50', 'December 1, 2018 7:35 pm', 'Approved', 'Dec', '2018', 'December 1, 2018 7:37 pm', 183),
(10, 'Alcohol', '10', 'December 3, 2018 11:24 pm', 'Approved', 'Dec', '2018', 'December 3, 2018 11:25 pm', 183),
(11, 'Cotton', '15', 'December 3, 2018 11:27 pm', 'Approved', 'Dec', '2018', 'December 3, 2018 11:27 pm', 183),
(13, 'Sample', '10', 'December 8, 2018 10:32 pm', 'Approved', 'Dec', '2018', 'December 29, 2018 5:58 pm', 183),
(14, 'Sample', '3', 'December 8, 2018 10:33 pm', 'Pending', 'Dec', '2018', 'December 29, 2018 6:41 pm', 184),
(15, 'Alcohol', '0', 'December 30, 2018 5:46 pm', 'Pending', 'Dec', '2018', 'Pending', 183),
(16, 'Alcohol', '0', 'January 6, 2019 3:46 pm', 'Pending', 'Jan', '2019', 'Pending', 183),
(17, 'Cotton', '20', 'January 24, 2019 11:31 am', 'Pending', 'Jan', '2019', 'Pending', 183);

-- --------------------------------------------------------

--
-- Table structure for table `medical_supply_stocks`
--

CREATE TABLE `medical_supply_stocks` (
  `stock_id` int(10) NOT NULL,
  `admin_id` int(10) NOT NULL,
  `medical_supply_name` varchar(100) NOT NULL,
  `medical_supply_description` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `running_balance` int(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date_created` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_supply_stocks`
--

INSERT INTO `medical_supply_stocks` (`stock_id`, `admin_id`, `medical_supply_name`, `medical_supply_description`, `supplier`, `running_balance`, `status`, `date_created`) VALUES
(1, 136, 'Alcohol', 'EMS', 'Savemore', 28, 'Reorder', 'September 23, 2018'),
(2, 136, 'Cotton', 'EMS', 'Libra', 28, 'Reorder', 'September 23, 2018'),
(3, 136, 'Betadine', 'EMS', 'PureGold', 100, 'Reorder', 'September 23, 2018'),
(4, 136, 'Gloves', 'EMS', 'SM', 200, 'Reorder', 'September 23, 2018'),
(5, 136, 'Sample', 'EMS', 'Sample', 98, 'Reorder', 'September 23, 2018'),
(6, 136, 'Syringe', 'EMS', 'Avon', 365, 'Reorder', 'September 25, 2018'),
(7, 182, 'Band Aid', 'EMS', 'Watsons', 100, 'Reorder', 'December 8, 2018');

-- --------------------------------------------------------

--
-- Table structure for table `medical_supply_stocks_emt`
--

CREATE TABLE `medical_supply_stocks_emt` (
  `stock_id` int(10) NOT NULL,
  `medical_supply_name` varchar(100) NOT NULL,
  `medical_supply_description` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `running_balance` int(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_supply_stocks_emt`
--

INSERT INTO `medical_supply_stocks_emt` (`stock_id`, `medical_supply_name`, `medical_supply_description`, `supplier`, `running_balance`, `status`) VALUES
(1, 'Alcohol', 'First Aid', 'Supplier A', 33, 'Reorder'),
(2, 'Cotton', 'First Aid', 'Supplier A', 13, 'Reorder'),
(3, 'Betadine', 'First Aid', 'Supplier B', 206, 'Reorder'),
(5, 'Gloves', 'First Aid', 'Supplier A', 110, 'Reorder'),
(6, 'Syringe', 'First Aid', 'Supplier B', 400, 'Reorder');

-- --------------------------------------------------------

--
-- Table structure for table `pain_assessment`
--

CREATE TABLE `pain_assessment` (
  `pain_assessment_id` int(10) NOT NULL,
  `onset` varchar(100) NOT NULL,
  `pain` varchar(100) NOT NULL,
  `quality` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `severity` varchar(100) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pain_assessment`
--

INSERT INTO `pain_assessment` (`pain_assessment_id`, `onset`, `pain`, `quality`, `region`, `severity`, `patient_id`) VALUES
(1, 'Onset', 'Pain', 'Quality', 'Region', '10', 13),
(2, '12', '12', '12', '12', '8', 7),
(3, '21', '21', '21', '21', '9', 14),
(4, '12', '12', '12', '12', '1', 15),
(5, '12', '12', '12', '12', '1', 16),
(6, '12', '12', '12', '12', '1', 17),
(7, '12', '12', '12', '12', '7', 18),
(8, '1', '1', '1', '1', '3', 21),
(9, '1', '1', '1', '1', '6', 22),
(10, 'NA', 'Severe', '7 out of 10', 'NA', '7', 28),
(11, 'NA', 'Severe', '7 out of 10', 'NA', '6', 30),
(12, 'NA', 'Severe', '7 out of 10', 'NA', '7', 34),
(13, 'NA', '5 out of 10', 'NA', 'NA', '5', 35),
(14, 'NA', '7 out of 10', 'severe', 'NA', '6', 36),
(15, 'NA', '9 out of 10', 'severe', 'NA', '8', 37),
(16, 'NA', 'Severe', '7 out of 10', 'NA', '5', 38),
(17, 'NA', 'NA', 'severe', 'NA', '5', 39),
(18, 'NA', '7 out of 10', 'severe', 'NA', '4', 40),
(19, 'NA', 'Severe', '7 out of 10', 'NA', '4', 41),
(20, 'NA', '7 out of 10', 'severe', 'NA', '5', 42),
(21, 'NA', 'NA', 'NA', 'NA', '6', 44),
(22, 'NA', 'Severe', 'NA', 'NA', '5', 45),
(23, 'NA', '7 out of 10', 'severe', 'NA', '6', 48),
(24, 'NA', 'NA', 'NA', 'NA', '1', 50),
(25, 'NA', 'Severe', '7 out of 10', 'NA', '6', 51),
(26, 'NA', 'NA', 'NA', 'NA', '7', 53),
(27, 'NA', '7 out of 10', 'severe', 'NA', '7', 55),
(28, 'NA', 'NA', 'NA', 'NA', '6', 57),
(29, 'NA', 'Severe', 'NA', 'NA', '7', 59),
(30, 'NA', 'NA', 'NA', 'NA', '7', 61),
(31, 'NA', 'NA', 'NA', 'NA', '6', 66);

-- --------------------------------------------------------

--
-- Table structure for table `past_medical_history`
--

CREATE TABLE `past_medical_history` (
  `past_med_his_id` int(10) NOT NULL,
  `allergy` varchar(50) NOT NULL,
  `medications` varchar(50) NOT NULL,
  `phistory` varchar(50) NOT NULL,
  `last_oral_intake` varchar(50) NOT NULL,
  `events_leading_to` varchar(50) NOT NULL,
  `notes` varchar(50) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `past_medical_history`
--

INSERT INTO `past_medical_history` (`past_med_his_id`, `allergy`, `medications`, `phistory`, `last_oral_intake`, `events_leading_to`, `notes`, `patient_id`) VALUES
(1, '90', '90', '90', '90', '90', 'VA seatbelt used', 1),
(2, '12', '12', '12', '12', '12', 'VA seatbelt used', 2),
(3, '12', '12', '12', '12', '12', 'VA seatbelt used', 3),
(4, '12', '12', '12', '12', '12', 'VA seatbelt used', 4),
(5, '12', '12', '12', '12', '12', 'VA seatbelt used', 5),
(6, '12', '12', '12', '12', '12', 'Extrication Required', 9),
(7, '20', '20', '20', '20', '20', 'VA seatbelt used', 10),
(8, '12', '12', '12', '12', '12', 'Extrication Required', 11),
(9, '12', '12', '12', '12', '12', 'VA seatbelt used', 12),
(10, '12', '12', '12', '12', '12', 'Extrication Required', 13),
(11, '12', '12', '12', '12', '12', 'VA seatbelt used', 7),
(12, '12', '12', '12', '12', '12', 'Extrication Required', 14),
(13, '12', '12', '12', '12', '12', 'Extrication Required', 15),
(14, '12', '12', '12', '12', '12', 'VA seatbelt used', 16),
(15, '12', '12', '12', '12', '12', 'Extrication Required', 17),
(16, 'None', 'None', 'None', 'None', 'None', 'Helmet', 18),
(17, '1', '1', '1', '1', '1', 'Extrication Required', 21),
(18, '1', '1', '1', '1', '1', 'Extrication Required', 22),
(19, 'None', 'None', 'None', 'None', 'None', 'Extrication Required', 28),
(20, 'None', 'None', 'None', 'None', 'None', 'Helmet', 30),
(21, 'None', 'None', 'None', 'None', 'None', 'Extrication Required', 34),
(22, 'None', 'None', 'None', 'None', 'None', 'Extrication Required', 35),
(23, 'None', 'None', 'None', 'None', 'None', 'Extrication Required', 36),
(24, 'None', 'None', 'None', 'None', 'None', 'Extrication Required', 37),
(25, 'None', 'None', 'None', 'None', 'None', 'Extrication Required', 38),
(26, 'Seafod', 'Maintenance', 'NA', 'Pork', 'Eating Pork', 'Extrication Required', 39),
(27, 'None', 'None', 'None', 'None', 'None', 'Extrication Required', 40),
(28, 'None', 'None', 'None', 'None', 'None', 'Extrication Required', 41),
(29, 'None', 'None', 'None', 'None', 'None', 'Helmet', 42),
(30, 'None', 'None', 'None', 'None', 'None', 'Extrication Required', 44),
(31, 'None', 'None', 'None', 'None', 'None', 'Extrication Required', 45),
(32, 'None', 'None', 'None', 'Chicken', 'Eating Contaminated Food', 'Extrication Required', 48),
(33, 'None', 'None', 'None', 'None', 'None', 'Extrication Required', 50),
(34, 'None', 'None', 'None', 'None', 'None', '', 51),
(35, 'None', 'None', 'None', 'None', 'None', 'VA seatbelt used', 53),
(36, 'None', 'None', 'None', 'None', 'None', 'VA seatbelt used', 55),
(37, 'None', 'None', 'None', 'None', 'None', 'Extrication Required', 57),
(38, 'None', 'None', 'None', 'None', 'None', 'Extrication Required', 59),
(39, 'NA', 'NA', 'NA', 'NA', 'NA', 'Extrication Required', 61),
(40, 'NA', 'None', 'NA', 'NA', 'None', 'Extrication Required', 66);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(10) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `home_address` varchar(50) NOT NULL,
  `next_to_kin` varchar(50) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `directives` varchar(50) NOT NULL,
  `dispatch_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `age`, `gender`, `date_of_birth`, `contact_no`, `home_address`, `next_to_kin`, `relationship`, `directives`, `dispatch_id`, `status`) VALUES
(1, 'Janiel Alcano', '20', 'Male', '08/08/2000', '4332449', 'Bacolod City', 'NA', 'NA', 'Allergies', '1', 'Assessed'),
(2, 'Kyan Ricabo', '21', 'Male', '08/16/2018', '4332449', 'Bacolod City', 'NA', 'NA', 'DNR', '1', 'Assessed'),
(3, 'Dyniel Keith Cataluña', '20', 'Male', '08/16/2000', '4332449', 'Bacolod City', 'NA', 'NA', 'Allergies', '2', 'Assessed'),
(4, 'Michael Callejas', '21', 'Male', '08/14/2018', '4332449', 'Bacolod City', 'NA', 'NA', 'Organ Donor', '2', 'Assessed'),
(5, 'Sweet Manhuyod', '50', 'Male', '08/08/2018', '4332449', 'Bacolod City', 'NA', 'NA', 'Allergies', '2', 'Assessed'),
(6, 'Erul John Ubas', '21', 'Male', '08/08/2018', '4332449', 'Bacolod City', 'NA', 'NA', 'None', '2', 'Unassessed'),
(7, 'Kim Tabanda', '31', 'Male', '08/14/2018', '4332449', 'Bacolod City', 'NA', 'NA', 'Organ Donor', '1', 'Assessed'),
(8, 'Brian Mallo', '21', 'Male', '08/13/2018', '4332449', 'bacolod City', 'NA', 'NA', 'Allergies', '2', 'Unassessed'),
(9, 'Joey Franco', '20', 'Male', '08/23/2018', '4332449', 'Bacolod City', 'NA', 'NA', 'Allergies', '2', 'Assessed'),
(10, 'Stephen Yanson', '12', 'Male', '09/11/2018', '4332449', 'Bacolod City', 'NA', 'NA', 'Allergies', '3', 'Assessed'),
(11, 'Alkaid Lamig', '21', 'Male', '09/16/2018', '4332449', 'Bacolod City', 'NA', 'NA', 'None', '3', 'Assessed'),
(12, 'Peter Sacayle', '20', 'Male', '09/10/2018', '4332449', 'Bacolod', 'NA', 'NA', 'DNR', '3', 'Assessed'),
(13, 'Kurt Dela Torre', '20', 'Male', '10/01/2018', '4332449', 'Lizares Avenue, Bacolod City', 'NA', 'NA', 'Organ Donor', '6', 'Assessed'),
(14, 'Denzel Cuachon', '30', 'Male', '10/11/2018', '4332449', 'Bacolod City ', 'NA', 'NA', 'Allergies', '1', 'Assessed'),
(15, 'Juan Dela Cruz', '32', 'Male', '10/28/2018', '4332449', 'Bacolod City', 'NA', 'NA', 'DNR', '1', 'Assessed'),
(16, 'Carlos Solidarios', '20', 'Male', '10/15/2018', '4332449', 'Bacolod City', 'NA', 'NA', 'Allergies', '1', 'Assessed'),
(17, 'Mikko Cortez', '12', 'Male', '10/09/2018', '4332449', 'Bacolod City', 'Test', 'Test', 'Allergies', '1', 'Assessed'),
(18, 'Carlo Santillan', '23', 'Male', '10/08/1996', '4332449', 'Bacolod City', 'NA', 'NA', 'DNR', '4', 'Assessed'),
(19, 'Dawn Jaudines', '20', 'Male', '10/14/2018', '4332449', 'Bacolod City', 'NA', 'NA', 'Allergies', '1', 'Unassessed'),
(20, 'Ariane Torres', '25', 'Male', '10/01/2018', '4332449', 'Bacolod City', 'NA', 'NA', 'Allergies', '4', 'Unassessed'),
(22, 'Elmer Haro', '40', 'Male', '11/05/2018', '4332449', 'Bacolod City', 'NA', 'NA', 'Allergies', '17', 'Assessed'),
(23, 'Kenneth Cayetano', '21', 'Male', '11/05/2018', '4332449', 'Bacolod City', 'NA', 'NA', 'Allergies', '17', 'Unassessed'),
(24, 'Clark Canlog', '21', 'Male', '12/17/2018', '4332449', 'Bacolod City', 'NA', 'NA', 'None', '17', 'Unassessed'),
(25, 'Alvin Mananquil', '40', 'Male', '12/30/2018', '4332449', 'Bacolod City', 'Test', 'Test', 'DNR', '17', 'Unassessed'),
(26, 'Rommel Adricula', '40', 'Male', '12/30/1980', '4332449', 'Bacolod City', 'Test', 'Test', 'DNR', '17', 'Unassessed'),
(27, 'Alvaro Morata', '23', 'Male', '10/12/1995', '09091101901', 'San Carlos City', 'NA', 'NA', 'Others', '10', 'Unassessed'),
(28, 'Dexter Famoso', '21', 'Male', '01/21/1996', '09091190291', 'Handumanan', 'NA', 'NA', 'Others', '7', 'Assessed'),
(29, 'Mark Jagonoy', '21', 'Male', '07/12/1997', '09019201921', 'Toboso', 'NA', 'None', 'None', '8', 'Unassessed'),
(30, 'Dyniel Cuachon', '54', '', '12/06/1965', '090910291', 'La Carlota', 'NA', 'NA', 'None', '53', 'Assessed'),
(31, 'Christian Santos ', '30', 'Male', '10/06/1990', 'None', 'Brgy. Taculing, Bacolod City', 'NA', 'NA', 'None', '54', 'Unassessed'),
(32, 'Jessa Mae Bautista', '26', 'Female', '08/23/1991', 'None', 'Talisay City', 'No', 'None', 'None', '55', 'Unassessed'),
(33, 'Angelo Reyes', '27', 'Male', '07/23/1990', 'None', 'Talisay City', 'no', 'None', 'None', '55', 'Unassessed'),
(34, 'Jerome Ocampo', '30', 'Male', '10/31/1988', 'None', 'Brgy Taculing', 'None', 'None', 'None', '56', 'Assessed'),
(35, 'Jayson Castro', '18', 'Male', '03/21/2000', 'None', 'Homsite', 'None', 'None', 'None', '57', 'Assessed'),
(36, 'Bea Ong', '20', 'Female', '07/03/1998', 'None', 'Mandalagan Bacolod City', 'None', 'None', 'None', '58', 'Assessed'),
(37, 'Jenny Lopez', '20', 'Female', '08/25/1998', 'None', 'Cadiz City', 'None', 'None', 'None', '59', 'Assessed'),
(38, 'Erica Juarez', '50', 'Female', '01/02/1969', 'None', 'Brgy. Banago', 'no', 'None', 'None', '60', 'Assessed'),
(39, 'Adrian Sevilla', '49', 'Male', '02/07/1980', 'None', 'UNO-R Ville, Mansilingan', 'None', 'None', 'Others', '61', 'Assessed'),
(40, 'Daniel De Guzman', '35', 'Male', '02/15/1987', 'None', 'Airport Subdivision', 'None', 'None', 'None', '62', 'Assessed'),
(41, 'James Yulo', '47', 'Male', '01/19/1985', 'None', 'Airport Subdivision', 'None', 'None', 'None', '62', 'Assessed'),
(42, 'Michelle Gumabao', '29', 'Female', '06/17/1988', 'None', 'Handumanan', 'None', 'None', 'None', '63', 'Assessed'),
(43, 'Angelo Garcia', '25', 'Male', '09/10/1995', 'None', 'Bago City', 'None', 'None', 'Allergies', '64', 'Unassessed'),
(44, 'Thomas Salazar', '45', 'Male', '08/16/1980', 'None', 'Pahanocoy', 'None', 'None', 'None', '65', 'Assessed'),
(45, 'Justin Rivera', '75', 'Male', '10/31/1945', 'None', 'Country Homes Alijist', 'None', 'None', 'None', '66', 'Assessed'),
(46, 'Jessa Mae Flores', '24', 'Female', '06/18/1994', 'None', 'Brgy. Granada', 'None', 'None', 'None', '67', 'Unassessed'),
(47, 'Cardo Dalisay', '30', 'Male', '07/12/1989', 'None', 'Paglaum Village', 'None', 'None', 'None', '68', 'Unassessed'),
(48, 'Kenneth Andrada', '24', 'Male', '08/12/1995', 'None', 'Camella Homes Mandalagan', 'None', 'None', 'None', '69', 'Assessed'),
(49, 'Jenny Dy', '25', 'Female', '12/20/1994', 'None', 'Brgy. Banago', 'None', 'NA', 'None', '69', 'Unassessed'),
(50, 'Jose Enriquez', '35', 'Male', '12/07/1980', 'None', 'Barangay Tangub', 'No', 'None', 'None', '70', 'Assessed'),
(51, 'Jessa Enriquez', '30', 'Female', '03/10/1990', 'None', 'Taculing', 'None', 'None', 'None', '71', 'Assessed'),
(52, 'Alkaid Lamig', '21', 'Male', '09/10/1997', 'None', 'Sum-ag', 'No', 'None', 'None', '72', 'Unassessed'),
(53, 'Kim Tabanda', '20', 'Male', '09/10/1996', 'None', 'Cadiz City', 'None', 'None', 'None', '72', 'Assessed'),
(54, 'Josefina Rodriguez', '29', 'Female', '03/19/1992', 'None', 'Bago City', 'NA', 'NA', 'None', '73', 'Unassessed'),
(55, 'Christian Rodriguez', '25', 'Male', '08/12/1995', 'None', 'Bago City', 'NA', 'NA', 'None', '73', 'Assessed'),
(56, 'Michael Mallo', '21', 'Male', '01/19/1998', 'None', 'Mansilingan', 'None', 'None', 'None', '74', 'Unassessed'),
(57, 'Dyniel Cataluna', '21', 'Male', '01/29/1997', 'None', 'Country Homes Alijis', 'None', 'None', 'None', '75', 'Assessed'),
(58, 'Shane Dy', '26', 'Female', '09/12/1995', 'None', 'Brgy. Granada', 'No', 'None', 'None', '76', 'Unassessed'),
(59, 'Jayson Dy', '25', 'Male', '01/21/1995', 'None', 'Brgy. Granada', 'No', 'None', 'None', '76', 'Assessed'),
(60, 'Christy Martinez', '28', 'Female', '01/02/1994', '092212121', 'Barangay Bata', 'NA', 'NA', 'Others', '77', 'Unassessed'),
(61, 'Mikko Reyes', '21', 'Male', '01/10/1998', 'None', 'San Carlos City', 'NO', 'NA', 'None', '77', 'Assessed'),
(62, 'Daniel Yanson', '28', 'Male', '05/25/1993', 'None', 'Mansilingan', 'None', 'None', 'None', '78', 'Unassessed'),
(63, 'Michelle Ramos', '26', 'Female', '03/18/1998', 'None', 'Mansilingan', 'No', 'NA', 'None', '78', 'Unassessed'),
(64, 'Shanky Lirazan', '24', 'Female', '01/02/1995', 'None', 'Punta-taytay', 'No', 'None', 'None', '79', 'Unassessed'),
(65, 'Jess Latoza', '20', 'Male', '09/07/1999', 'None', 'Brgy. Granada', 'NA', 'NA', 'None', '80', 'Unassessed'),
(66, 'Francis Tirol', '22', 'Male', '01/12/1996', 'None', 'Banago', 'None', 'None', 'None', '82', 'Assessed'),
(67, 'Erul Grapes', '21', 'Male', '01/23/1997', 'None', 'Eroreco', 'None', 'NA', 'None', '83', 'Unassessed'),
(68, 'Peter Go', '42', 'Male', '01/04/1979', 'None', 'Escalante', 'None', 'NA', 'None', '84', 'Unassessed'),
(69, 'Precious De Guzman', '27', 'Female', '09/06/1993', 'None', 'Mansilingan', 'NA', 'None', 'None', '85', 'Unassessed'),
(70, 'Ryan Hilario', '26', 'Male', '10/31/1994', 'None', 'NA', 'No', 'None', 'None', '85', 'Unassessed'),
(71, 'Chelzar De Asis', '23', 'Male', '03/22/1995', 'None', 'Toboso', 'No', 'NA', 'None', '85', 'Unassessed'),
(72, 'Juan Gevila', '23', 'Male', '10/31/1996', 'None', 'San Carlos City', 'NO', 'NA', 'None', '86', 'Unassessed'),
(73, 'Vince Pomar', '22', 'Male', '12/12/1996', 'None', 'San Carlos City', 'NO', 'NA', 'None', '86', 'Unassessed'),
(74, 'Ralph Yanong', '23', 'Male', '05/07/1995', 'None', 'Escalante City', 'No', 'NA', 'None', '86', 'Unassessed'),
(75, 'Dennis Zapanta', '24', 'Male', '09/23/1995', 'None', 'Sagay City', 'No', 'NA', 'None', '86', 'Unassessed'),
(76, 'Renz Cui', '23', '', '07/01/1996', 'None', 'San Carlos City', 'NA', 'NA', 'None', '86', 'Unassessed'),
(77, 'Michael Yu', '22', 'Male', '07/12/1995', 'None', 'San Carlos City', 'No', 'NA', 'None', '86', 'Unassessed'),
(78, 'Raina Reyes', '25', 'Female', '01/23/1995', 'None', 'Cebu City', 'No', 'NA', 'None', '86', 'Unassessed'),
(79, 'Charles Santillan', '35', 'Male', '01/03/1985', 'None', 'Hinigaran', 'no', 'None', 'None', '81', 'Unassessed');

-- --------------------------------------------------------

--
-- Table structure for table `refusal_treatment`
--

CREATE TABLE `refusal_treatment` (
  `refusal_treatment_id` int(10) NOT NULL,
  `signed` varchar(50) NOT NULL,
  `witness1` varchar(50) NOT NULL,
  `witness2` varchar(50) NOT NULL,
  `date_incident` varchar(50) NOT NULL,
  `statements` varchar(255) NOT NULL,
  `attachment` varchar(50) NOT NULL,
  `prepared_by` varchar(50) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refusal_treatment`
--

INSERT INTO `refusal_treatment` (`refusal_treatment_id`, `signed`, `witness1`, `witness2`, `date_incident`, `statements`, `attachment`, `prepared_by`, `month`, `year`) VALUES
(1, 'Kurt Dela Torre', 'Peter Sacayle', 'Alkaid Lamig', '09/16/2018 12:41 PM', '', 'None', 'Alkaid Lamig', 'Sep', '2018'),
(2, 'Alkaid Lamig', 'Peter Sacayle', 'Kurt Dela Torre', '09/16/2018 12:51 PM', '', 'None', 'Peter Sacayle', 'Sep', '2018'),
(3, 'Justin Rivera', 'Dyniel Cataluna', '', '09/03/2018 11:36 PM', '', 'None', 'Peter Sacayle', 'Sep', '2018'),
(6, 'Juan Dela Cruz', 'Peter Lopez', 'John Dela Cruz', '09/16/2018 10:54 AM', '', 'None', 'Kurt', 'Sep', '2018'),
(7, 'Raina Reyes', 'Willem Cui', '', '09/16/2018 12:28 PM', '', 'None', 'Peter Sacayle', 'Sep', '2018'),
(8, 'Kyan Ricabo', 'Janiel Alcano', '', '09/30/2018 12:03 AM', '', 'None', 'Kurt Dela Torre', 'Sep', '2018'),
(9, 'Michael Yu', 'Jose Ricardo', '', '10/19/2018 6:41 PM', '', 'None', 'Alkaid Lamig', 'Oct', '2018'),
(10, 'Chelzar De Asis', 'Jaya Delos Reyes', '', '12/06/2018 7:11 PM', '', 'Kurt Dela Torre', 'Alvin Mananquil', 'Dec', '2018'),
(11, 'Kim Tabanda', 'Kurt Dela Torre', 'Alkaid Lamig', '01/06/2018 12:00 AM', '', 'None', 'Peter Sacayle', 'Jan', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `request_transport`
--

CREATE TABLE `request_transport` (
  `request_transport_id` int(10) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `requesting_party` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `age` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `medical_history` varchar(100) NOT NULL,
  `special_considerations` varchar(50) NOT NULL,
  `froma` varchar(100) NOT NULL,
  `toa` varchar(100) NOT NULL,
  `fromb` varchar(100) NOT NULL,
  `gcs` varchar(50) NOT NULL,
  `bp` varchar(50) NOT NULL,
  `rr` varchar(50) NOT NULL,
  `pr` varchar(50) NOT NULL,
  `sat` varchar(50) NOT NULL,
  `requesting_approval` varchar(50) NOT NULL,
  `approval` varchar(50) NOT NULL,
  `date_created` varchar(100) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_transport`
--

INSERT INTO `request_transport` (`request_transport_id`, `date_time`, `requesting_party`, `contact_no`, `patient_name`, `address`, `age`, `gender`, `medical_history`, `special_considerations`, `froma`, `toa`, `fromb`, `gcs`, `bp`, `rr`, `pr`, `sat`, `requesting_approval`, `approval`, `date_created`, `month`, `year`) VALUES
(5, '09/03/2018 6:51 PM', 'Party YUI', '4332449', 'Pedro Araneta', 'fortune town bacolod city', '29', 'Male', 'geqjhwg', 'Chest Tube Drainage', 'eqweq', 'qweqw', 'weqweqw', 'eqweqw', 'eqweq', 'qeweq', 'qewq', 'qweqw', 'eqweqw', 'eqweqw', 'September 17, 2018', 'Sep', '2018'),
(6, '09/03/2018 6:52 PM', 'Party E', '1234', 'Patient H', 'Margarita Street', '28', 'Male', 'None', 'Catheter', 'Bacolod City', 'Bacolod City', 'Bacolod City', '12', '12', '12', '12', '12', 'Kurt Dela Torre', 'Alkaid Lamig', 'September 17, 2018', 'Sep', '2018'),
(7, '09/01/2018 1:32 PM', 'Party GGGFFF', '4332449', 'Pedro Colmenares', 'Andalucia Street', '28', 'Male', 'None', 'Chest Tube Drainage', 'Bacolod City', 'Bacolod City', 'Bacolod City', '10', '10', '10', '10', '10', 'Doctor A', 'Doctor B', 'September 17, 2018', 'Sep', '2018'),
(8, '09/01/2018 2:11 PM', 'Party G', '4332449', 'Patient DFG', 'Bugnay Rd. Villamonte', '20', 'Male', 'None', 'Chest Tube Drainage', '12', '12', '12', '12', '12', '121', '12', '12', 'Dr. Delatorre', 'Dr. Delatorre', 'September 17, 2018', 'Sep', '2018'),
(9, '09/02/2018 10:55 AM', 'Three Propis', '433-2449', 'Juan Dela Cruz', 'Lizares Avenue, Bacolod City', '28', 'Male', 'None', '', 'Lizares Avenue, Bacolod City', 'Margarita St., Bacolod City', 'Lizares Avenue, Bacolod City', '12', '12', '12', '12', '12', 'Alson John Bayon-on', 'Carl Betio', 'September 17, 2018', 'Sep', '2018'),
(10, '09/02/2018 8:22 PM', 'Party ZXC', '433-2449', 'Pedro Dela Cruz', 'Balboa St, Bacolod City, Negros Occidental, Philippines', '20', 'Male', 'None', 'Catheter', 'Balboa St, Bacolod City, Negros Occidental, Philippines', 'Balboa St, Bacolod City, Negros Occidental, Philippines', 'Balboa St, Bacolod City, Negros Occidental, Philippines', '12', '12', '12', '12', '12', 'Peter Sacayle', 'Peter Sacayle', 'September 17, 2018', 'Sep', '2018'),
(11, '09/03/2018 7:08 PM', 'Party RTY', '433-2449', 'Patient DFG', 'Felisa, Bacolod City, Negros Occidental, Philippines', '20', 'Male', 'None', 'Colostomy', 'Test', 'Test', 'Test', '12', '12', '12', '12', '12', 'Alvin', 'Alvin', 'September 17, 2018', 'Sep', '2018'),
(12, '09/03/2018 10:20 PM', 'Party Party', '4332449', 'Patient CVB', 'Burgos St, Bacolod City, Negros Occidental, Philippines', '12', 'Male', '12', '02', '12', '12', '12', '12', '12', '12', '12', '12', '12', '12', 'September 17, 2018', 'Sep', '2018'),
(13, '09/17/2018 10:50 AM', 'Safetech Guardians', '433-2449', 'Peter Sacayle', 'Sum-ag, Negros Occidental, Philippines', '20', 'Male', 'None', 'Chest Tube Drainage', 'Sum-ag', 'Lizares', 'Lizares', '12', '12', '12', '12', '12', 'Test', 'Test', 'September 17, 2018', 'Sep', '2018'),
(14, '09/17/2018 10:56 AM', 'CIT', '4332449', 'Alkaid Lamig', 'San Juan Street, Sum-ag, Negros Occidental, Philippines', '21', 'Male', 'None', 'Catheter', 'Sum-ag', 'Lizares', 'Lizares', '20', '20', '20', '20', '20', 'Kurt Dela Torre', 'Kurt Dela Torre', 'September 17, 2018', 'Sep', '2018'),
(15, '09/17/2018 11:01 AM', 'CBA', '4332449', 'Kurt Dela Torre', 'Molave St, Sum-ag, Negros Occidental, Philippines', '20', 'Male', 'None', 'Catheter', 'Sum-ag', 'Lizares', 'Lizares', '20', '20', '20', '20', '20', 'Kurt Dela Torre', 'Kurt Dela Torre', 'September 17, 2018', 'Sep', '2018'),
(16, '09/19/2018 11:55 PM', 'Party CVVB', '4332449', 'Alkaid Lamig', 'Prk. Fiesta Homes Sum-ag Bacolod City', '21', 'Male', 'None', 'Chest Tube Drainage', 'Test', 'Test', 'Test', '12', '12', '12', '12', '12', 'Peter Sacayle', 'Peter Sacayle', 'September 19, 2018', 'Sep', '2018'),
(17, '10/19/2018 11:03 AM', 'Party QWEASD', '4332449', 'Alkaid Lamig', 'Sum-ag Bacolod City', '21', 'Male', 'None', 'Catheter', 'Test', 'Test', 'Test', '12', '12', '12', '12', '12', 'Peter Sacayle', 'Kurt Dela Torre', 'October 19, 2018', 'Oct', '2018'),
(18, '10/19/2018 6:22 PM', 'Party STG', '4332449', 'Alkaid Lamig', 'Margarita Street', '21', 'Male', 'None', 'Catheter', 'Test', 'Test', 'Test', '12', '21', '12', '12', '12', 'Peter Sacayle', 'Kurt Dela Torre', 'October 19, 2018', 'Oct', '2018'),
(19, '12/01/2018 7:50 PM', 'Party RTY', '4332449', 'Kurt Dela Torre', 'Lizares Avenue, Bacolod City', '21', 'Male', 'None', 'Catheter', 'Test', 'Test', 'Test', '12', '120/80', '120', '120', '12', 'Alkaid Lamig', 'Peter Sacayle', 'December 1, 2018', 'Dec', '2018'),
(20, '12/01/2018 8:03 PM', 'LKJH', '4332449', 'Peter Sacayle', 'Lizares Avenue, Bacolod City', '21', 'Male', 'None', 'NGT', 'Bacolod City', 'Bacolod City', 'Bacolod City', '12', '120/70', '', '', '12', 'Alkaid Lamig', 'Alkaid Lamig', 'December 1, 2018', 'Dec', '2018'),
(21, '12/01/2018 8:05 PM', 'Party ABC', '4332449', 'Alkaid Lamig', 'Lizares Avenue, Bacolod City', '21', 'Male', 'None', 'NGT', 'Bacolod City', 'Bacolod City', 'Bacolod City', '20', '120/70', '120', '120', '20', 'Kurt Dela Torre', 'Kurt Dela Torre', 'December 1, 2018', 'Dec', '2018'),
(22, '12/01/2018 8:08 PM', 'Party JHG', '4332449', 'Kurt Dela Torre', 'Lizares Avenue, Bacolod City', '21', 'Male', 'None', 'NGT', 'Bacolod City', 'Bacolod City', 'Bacolod City', '12', '120/80', '200', '200', '12', 'Alkaid Lamig', 'Alkaid Lamig', 'December 1, 2018', 'Dec', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `complete_name` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `home_address` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_role` varchar(20) NOT NULL,
  `status` int(1) NOT NULL,
  `date_created` varchar(100) NOT NULL,
  `time_created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `complete_name`, `contact_no`, `home_address`, `username`, `password`, `user_role`, `status`, `date_created`, `time_created`) VALUES
(182, 'Kurt Dela Torre', '4332449', 'Sum-ag Bacolod City', 'kurt', 'STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagja5948a0b701a40b762d5a1311cc171a0607734ea', 'Administrator', 1, 'September 28, 2018', '11:50 pm'),
(183, 'Peter Sacayle', '4332449', 'Villamonte, Bacolod City', 'peter', 'STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj60b1cfb0ae85b40c40e85ee2e0da328b638ba643', 'EMT', 1, 'September 28, 2018', '11:51 pm'),
(184, 'Alkaid Lamig', '4332449', 'Mansilingan, Bacolod City', 'alkaid', 'STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj71c12f2610b2b0f61eb92eaeca53ece710c141e4', 'EMT', 1, 'September 28, 2018', '11:51 pm'),
(186, 'juan dela cruz', '4332449', 'Lizares Avenue, Bacolod City', 'juan', 'STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj2a5c0ba4cb7dcb073059250118e118971f35b5e4', 'EMT', 0, 'October 14, 2018', '5:35 pm'),
(197, 'Sample User', '4332449', 'Bacolod City', 'sample', 'STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj12dea96fec20593566ab75692c9949596833adc9', 'EMT', 1, 'December 13, 2018', '10:30 pm'),
(199, 'Test', '4332448', 'Bacolod City', 'test', 'STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagja94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'EMT', 1, 'December 13, 2018', '10:50 pm'),
(202, 'Alvin Mananquil', '4332449', 'Bacolod City', 'alvinmis', 'STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagje33b6e9704fd2ada4484495347b2bb1d6b8ad389', 'EMT', 1, 'December 21, 2018', '2:32 pm');

-- --------------------------------------------------------

--
-- Table structure for table `users_activity_log`
--

CREATE TABLE `users_activity_log` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date_time` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_activity_log`
--

INSERT INTO `users_activity_log` (`log_id`, `user_id`, `action`, `date_time`) VALUES
(3, 182, 'Added New User', 'December 2, 2018 - 7:09 pm'),
(4, 182, 'Added New User', 'December 2, 2018 - 7:20 pm'),
(5, 182, 'Added New User', 'December 3, 2018 - 11:33 am'),
(7, 183, 'Added New Call Log', 'December 6, 2018 - 6:48 pm'),
(8, 183, 'Used . 2.  .Cotton', 'December 6, 2018 - 7:08 pm'),
(9, 183, 'Used 2 Shit', 'December 6, 2018 - 7:08 pm'),
(10, 183, 'Added New Refusal Treatment of Patient A', 'December 6, 2018 - 7:11 pm'),
(26, 182, 'Added New Medical Supply - Band Aid', 'December 8, 2018 - 1:14 pm'),
(27, 183, 'Requested 10 Sample', 'December 8, 2018 - 10:31 pm'),
(28, 183, 'Requested 10 Sample', 'December 8, 2018 - 10:32 pm'),
(29, 184, 'Requested 10 Sample', 'December 8, 2018 - 10:33 pm'),
(30, 182, 'Added New User', 'December 13, 2018 - 10:30 pm'),
(31, 182, 'Added New User', 'December 13, 2018 - 10:33 pm'),
(32, 182, 'Added New User', 'December 13, 2018 - 10:50 pm'),
(33, 57, 'Added New User', 'December 21, 2018 - 2:21 pm'),
(34, 183, 'Used 3 Betadine', 'December 21, 2018 - 2:27 pm'),
(36, 182, 'Added Alvin Mananquil as New User', 'December 21, 2018 - 2:32 pm'),
(37, 183, 'Added New Call Log', 'December 22, 2018 - 11:01 am'),
(38, 183, 'Added New Dispatch', 'December 22, 2018 - 11:02 am'),
(39, 182, 'Approved Request 5 Sample', 'December 29, 2018 - 5:58 pm'),
(40, 182, 'Approved Request 10 Sample', 'December 29, 2018 - 6:33 pm'),
(41, 182, 'Approved Request 10 Sample', 'December 29, 2018 - 6:33 pm'),
(42, 182, 'Approved Request 10 Sample', 'December 29, 2018 - 6:33 pm'),
(43, 182, 'Approved Request 10 Sample', 'December 29, 2018 - 6:33 pm'),
(44, 182, 'Approved Request 10 Sample', 'December 29, 2018 - 6:33 pm'),
(45, 182, 'Approved Request 10 Sample', 'December 29, 2018 - 6:34 pm'),
(46, 182, 'Approved Request 10 Sample', 'December 29, 2018 - 6:38 pm'),
(47, 182, 'Approved Request 10 Sample', 'December 29, 2018 - 6:40 pm'),
(48, 182, 'Approved Request 10 Sample', 'December 29, 2018 - 6:41 pm'),
(49, 182, 'Approved Request 5 Sample', 'December 29, 2018 - 6:59 pm'),
(50, 183, 'Used 30 Alcohol', 'December 30, 2018 - 5:45 pm'),
(51, 183, 'Requested 20 Alcohol', 'December 30, 2018 - 5:46 pm'),
(52, 182, 'Approved Request 10 Alcohol', 'December 30, 2018 - 5:47 pm'),
(53, 182, 'Approved Request 5 Alcohol', 'December 30, 2018 - 6:12 pm'),
(54, 182, 'Approved Request 2 Alcohol', 'December 30, 2018 - 6:15 pm'),
(55, 182, 'Added New Stocks 100 Band Aid', 'December 30, 2018 - 6:16 pm'),
(56, 183, 'Added Glassgow Scale', 'December 30, 2018 - 6:20 pm'),
(57, 182, 'Added Elmer Haro as New Driver', 'December 30, 2018 - 8:18 pm'),
(58, 183, 'Edited a Call Log', 'December 30, 2018 - 8:29 pm'),
(59, 182, 'Edited Driver Information of Elmer Haros', 'December 30, 2018 - 8:56 pm'),
(60, 182, 'Edited Driver Information of Elmer Haro', 'December 30, 2018 - 8:56 pm'),
(61, 182, 'Edited Driver Information of Elmer Haro', 'December 30, 2018 - 8:57 pm'),
(62, 182, 'Edited Driver Information of Elmer Haro', 'December 30, 2018 - 8:57 pm'),
(63, 182, 'Edited Driver Information of Elmer Haro', 'December 30, 2018 - 8:57 pm'),
(64, 182, 'Edited Driver Information of Elmer Haro', 'December 30, 2018 - 9:38 pm'),
(65, 182, 'Edited Driver Information of Elmer Haros', 'December 30, 2018 - 9:38 pm'),
(66, 182, 'Edited Driver Information of Elmer Haro', 'December 30, 2018 - 9:39 pm'),
(67, 182, 'Added Alvin Mananquil as New Driver', 'December 30, 2018 - 9:39 pm'),
(68, 182, 'Added  as New Driver', 'December 30, 2018 - 10:56 pm'),
(69, 182, 'Added Montero as New Ambulance', 'December 30, 2018 - 11:03 pm'),
(70, 182, 'Added MUX as New Ambulance', 'December 30, 2018 - 11:03 pm'),
(71, 182, 'Edited Ambulance Information of MUX', 'December 30, 2018 - 11:15 pm'),
(72, 182, 'Edited Ambulance Information of MUXS', 'December 30, 2018 - 11:15 pm'),
(73, 182, 'Edited Ambulance Information of MUX', 'December 30, 2018 - 11:15 pm'),
(74, 182, 'Edited Ambulance Information of Samaritan 3', 'December 30, 2018 - 11:15 pm'),
(75, 182, 'Edited Ambulance Information of Samaritan 4', 'December 30, 2018 - 11:15 pm'),
(76, 182, 'Added Ford as New Ambulance', 'December 30, 2018 - 11:47 pm'),
(77, 183, 'Added New Patient', 'December 31, 2018 - 12:08 am'),
(78, 183, 'Added Vital Signs', 'December 31, 2018 - 6:31 pm'),
(79, 183, 'Added Vital Signs', 'December 31, 2018 - 6:39 pm'),
(80, 182, 'Edited Driver Information of Alkaid Lamigs', 'December 31, 2018 - 10:03 pm'),
(81, 182, 'Edited Driver Information of Alkaid Lamig', 'December 31, 2018 - 10:03 pm'),
(82, 182, 'Added Arianne Torres as New Driver', 'December 31, 2018 - 10:27 pm'),
(83, 183, 'Added New Call Log', 'January 5, 2019 - 1:04 pm'),
(84, 183, 'Added New Dispatch', 'January 5, 2019 - 1:07 pm'),
(85, 183, 'Edited a Dispatch Record', 'January 5, 2019 - 1:08 pm'),
(86, 183, 'Added New Refusal for Treatment of Patient JHG', 'January 6, 2019 - 2:41 pm'),
(87, 183, 'Added New Patient', 'January 6, 2019 - 3:17 pm'),
(88, 183, 'Added New Patient', 'January 6, 2019 - 3:31 pm'),
(89, 183, 'Requested 5 Alcohol', 'January 6, 2019 - 3:46 pm'),
(90, 184, 'Added New Patient', 'January 17, 2019 - 4:42 pm'),
(91, 184, 'Added Vital Signs', 'January 17, 2019 - 4:43 pm'),
(92, 184, 'Added Glassgow Scale', 'January 17, 2019 - 4:43 pm'),
(93, 184, 'Added New Patient', 'January 17, 2019 - 4:45 pm'),
(94, 0, 'Added Patient Assessment', 'January 17, 2019 - 4:47 pm'),
(95, 184, 'Added Vital Signs', 'January 17, 2019 - 4:47 pm'),
(96, 184, 'Added Glassgow Scale', 'January 17, 2019 - 4:47 pm'),
(97, 184, 'Added New Patient', 'January 17, 2019 - 4:50 pm'),
(98, 184, 'Added Vital Signs', 'January 17, 2019 - 4:50 pm'),
(99, 184, 'Added Glassgow Scale', 'January 17, 2019 - 4:51 pm'),
(100, 184, 'Added New Call Log', 'January 17, 2019 - 4:53 pm'),
(101, 184, 'Added New Dispatch', 'January 17, 2019 - 4:55 pm'),
(102, 184, 'Added New Patient', 'January 17, 2019 - 4:57 pm'),
(103, 0, 'Added Patient Assessment', 'January 17, 2019 - 4:58 pm'),
(104, 184, 'Added Vital Signs', 'January 17, 2019 - 4:59 pm'),
(105, 184, 'Added Glassgow Scale', 'January 17, 2019 - 4:59 pm'),
(106, 184, 'Added New Call Log', 'January 17, 2019 - 10:41 pm'),
(107, 184, 'Added New Dispatch', 'January 17, 2019 - 10:42 pm'),
(108, 184, 'Added New Patient', 'January 17, 2019 - 10:43 pm'),
(109, 184, 'Added Vital Signs', 'January 17, 2019 - 10:55 pm'),
(110, 184, 'Added Glassgow Scale', 'January 17, 2019 - 10:56 pm'),
(111, 184, 'Added New Call Log', 'January 17, 2019 - 11:16 pm'),
(112, 184, 'Added New Dispatch', 'January 17, 2019 - 11:17 pm'),
(113, 184, 'Added New Patient', 'January 17, 2019 - 11:20 pm'),
(114, 184, 'Added Vital Signs', 'January 17, 2019 - 11:21 pm'),
(115, 184, 'Added Glassgow Scale', 'January 17, 2019 - 11:21 pm'),
(116, 184, 'Added New Patient', 'January 17, 2019 - 11:22 pm'),
(117, 184, 'Added Vital Signs', 'January 17, 2019 - 11:23 pm'),
(118, 184, 'Added Glassgow Scale', 'January 17, 2019 - 11:23 pm'),
(119, 184, 'Added New Call Log', 'January 17, 2019 - 11:33 pm'),
(120, 184, 'Added New Dispatch', 'January 17, 2019 - 11:34 pm'),
(121, 184, 'Added New Patient', 'January 17, 2019 - 11:36 pm'),
(122, 184, 'Added Vital Signs', 'January 17, 2019 - 11:38 pm'),
(123, 184, 'Added Glassgow Scale', 'January 17, 2019 - 11:38 pm'),
(124, 0, 'Added Patient Assessment', 'January 17, 2019 - 11:39 pm'),
(125, 184, 'Added New Call Log', 'January 17, 2019 - 11:48 pm'),
(126, 184, 'Added New Dispatch', 'January 17, 2019 - 11:50 pm'),
(127, 184, 'Added New Patient', 'January 17, 2019 - 11:51 pm'),
(128, 184, 'Added Vital Signs', 'January 17, 2019 - 11:54 pm'),
(129, 184, 'Added Glassgow Scale', 'January 17, 2019 - 11:54 pm'),
(130, 0, 'Added Patient Assessment', 'January 17, 2019 - 11:56 pm'),
(131, 184, 'Added New Call Log', 'January 17, 2019 - 11:58 pm'),
(132, 184, 'Added New Dispatch', 'January 17, 2019 - 11:59 pm'),
(133, 184, 'Edited a Dispatch Record', 'January 17, 2019 - 11:59 pm'),
(134, 184, 'Added New Patient', 'January 18, 2019 - 12:01 am'),
(135, 184, 'Added Vital Signs', 'January 18, 2019 - 12:02 am'),
(136, 184, 'Added Glassgow Scale', 'January 18, 2019 - 12:02 am'),
(137, 0, 'Added Patient Assessment', 'January 18, 2019 - 12:03 am'),
(138, 184, 'Added New Call Log', 'January 18, 2019 - 12:12 am'),
(139, 184, 'Added New Dispatch', 'January 18, 2019 - 12:13 am'),
(140, 184, 'Added New Patient', 'January 18, 2019 - 12:16 am'),
(141, 184, 'Added Vital Signs', 'January 18, 2019 - 12:16 am'),
(142, 184, 'Added Glassgow Scale', 'January 18, 2019 - 12:16 am'),
(143, 0, 'Added Patient Assessment', 'January 18, 2019 - 12:17 am'),
(144, 184, 'Added New Call Log', 'January 18, 2019 - 12:19 am'),
(145, 184, 'Added New Dispatch', 'January 18, 2019 - 12:21 am'),
(146, 184, 'Added New Patient', 'January 18, 2019 - 12:22 am'),
(147, 0, 'Added Patient Assessment', 'January 18, 2019 - 12:26 am'),
(148, 184, 'Added Vital Signs', 'January 18, 2019 - 12:27 am'),
(149, 184, 'Added Glassgow Scale', 'January 18, 2019 - 12:28 am'),
(150, 184, 'Added Vital Signs', 'January 18, 2019 - 12:29 am'),
(151, 184, 'Added Glassgow Scale', 'January 18, 2019 - 12:31 am'),
(152, 184, 'Added New Call Log', 'January 18, 2019 - 12:33 am'),
(153, 184, 'Added New Dispatch', 'January 18, 2019 - 12:34 am'),
(154, 184, 'Added New Patient', 'January 18, 2019 - 12:44 am'),
(155, 184, 'Added Vital Signs', 'January 18, 2019 - 12:45 am'),
(156, 0, 'Added Patient Assessment', 'January 18, 2019 - 12:47 am'),
(157, 184, 'Added Glassgow Scale', 'January 18, 2019 - 12:47 am'),
(158, 184, 'Added New Call Log', 'January 18, 2019 - 12:51 am'),
(159, 184, 'Added New Dispatch', 'January 18, 2019 - 12:52 am'),
(160, 184, 'Added New Patient', 'January 18, 2019 - 12:53 am'),
(161, 0, 'Added Patient Assessment', 'January 18, 2019 - 12:54 am'),
(162, 184, 'Added Vital Signs', 'January 18, 2019 - 12:57 am'),
(163, 184, 'Added Glassgow Scale', 'January 18, 2019 - 12:57 am'),
(164, 184, 'Added New Patient', 'January 18, 2019 - 12:59 am'),
(165, 0, 'Added Patient Assessment', 'January 18, 2019 - 1:00 am'),
(166, 184, 'Added Vital Signs', 'January 18, 2019 - 1:01 am'),
(167, 184, 'Added Glassgow Scale', 'January 18, 2019 - 1:01 am'),
(168, 184, 'Added New Call Log', 'January 18, 2019 - 1:03 am'),
(169, 184, 'Added New Dispatch', 'January 18, 2019 - 1:04 am'),
(170, 184, 'Added New Patient', 'January 18, 2019 - 1:05 am'),
(171, 0, 'Added Patient Assessment', 'January 18, 2019 - 1:06 am'),
(172, 184, 'Added Vital Signs', 'January 18, 2019 - 1:10 am'),
(173, 184, 'Added Glassgow Scale', 'January 18, 2019 - 1:10 am'),
(174, 184, 'Added New Call Log', 'January 18, 2019 - 1:11 am'),
(175, 184, 'Added New Dispatch', 'January 18, 2019 - 1:12 am'),
(176, 184, 'Added New Patient', 'January 18, 2019 - 1:14 am'),
(177, 184, 'Added Vital Signs', 'January 18, 2019 - 1:14 am'),
(178, 184, 'Added Glassgow Scale', 'January 18, 2019 - 1:15 am'),
(179, 184, 'Added New Call Log', 'January 18, 2019 - 1:17 am'),
(180, 184, 'Added New Dispatch', 'January 18, 2019 - 1:21 am'),
(181, 184, 'Edited a Dispatch Record', 'January 18, 2019 - 1:21 am'),
(182, 184, 'Edited a Dispatch Record', 'January 18, 2019 - 1:22 am'),
(183, 184, 'Added New Patient', 'January 18, 2019 - 1:24 am'),
(184, 0, 'Added Patient Assessment', 'January 18, 2019 - 1:25 am'),
(185, 184, 'Added Vital Signs', 'January 18, 2019 - 1:25 am'),
(186, 184, 'Added Glassgow Scale', 'January 18, 2019 - 1:26 am'),
(187, 184, 'Added New Call Log', 'January 18, 2019 - 1:28 am'),
(188, 184, 'Added New Call Log', 'January 18, 2019 - 1:35 am'),
(189, 184, 'Added New Dispatch', 'January 18, 2019 - 1:36 am'),
(190, 184, 'Added New Patient', 'January 18, 2019 - 1:37 am'),
(191, 184, 'Added Vital Signs', 'January 18, 2019 - 1:38 am'),
(192, 0, 'Added Patient Assessment', 'January 18, 2019 - 1:39 am'),
(193, 184, 'Added Glassgow Scale', 'January 18, 2019 - 1:40 am'),
(194, 184, 'Added New Call Log', 'January 18, 2019 - 1:42 am'),
(195, 184, 'Added New Dispatch', 'January 18, 2019 - 1:43 am'),
(196, 184, 'Added New Patient', 'January 18, 2019 - 1:45 am'),
(197, 184, 'Added Vital Signs', 'January 18, 2019 - 1:50 am'),
(198, 184, 'Added Glassgow Scale', 'January 18, 2019 - 1:50 am'),
(199, 184, 'Added New Call Log', 'January 18, 2019 - 1:51 am'),
(200, 184, 'Added New Dispatch', 'January 18, 2019 - 1:52 am'),
(201, 184, 'Added New Patient', 'January 18, 2019 - 1:54 am'),
(202, 184, 'Added Vital Signs', 'January 18, 2019 - 1:54 am'),
(203, 184, 'Added Glassgow Scale', 'January 18, 2019 - 1:55 am'),
(204, 184, 'Added New Call Log', 'January 18, 2019 - 1:56 am'),
(205, 184, 'Added New Dispatch', 'January 18, 2019 - 1:57 am'),
(206, 184, 'Edited a Dispatch Record', 'January 18, 2019 - 1:58 am'),
(207, 184, 'Added New Patient', 'January 18, 2019 - 1:59 am'),
(208, 184, 'Added Vital Signs', 'January 18, 2019 - 2:00 am'),
(209, 184, 'Added Glassgow Scale', 'January 18, 2019 - 2:00 am'),
(210, 0, 'Added Patient Assessment', 'January 18, 2019 - 2:02 am'),
(211, 184, 'Added New Patient', 'January 18, 2019 - 2:03 am'),
(212, 184, 'Added Vital Signs', 'January 18, 2019 - 2:04 am'),
(213, 184, 'Added New Call Log', 'January 18, 2019 - 10:21 am'),
(214, 184, 'Added New Dispatch', 'January 18, 2019 - 10:23 am'),
(215, 184, 'Added New Patient', 'January 18, 2019 - 10:27 am'),
(216, 184, 'Added Vital Signs', 'January 18, 2019 - 10:28 am'),
(217, 184, 'Added Glassgow Scale', 'January 18, 2019 - 10:28 am'),
(218, 0, 'Added Patient Assessment', 'January 18, 2019 - 10:29 am'),
(219, 184, 'Added New Call Log', 'January 18, 2019 - 10:34 am'),
(220, 184, 'Added New Dispatch', 'January 18, 2019 - 10:37 am'),
(221, 184, 'Added New Patient', 'January 18, 2019 - 10:40 am'),
(222, 184, 'Added Vital Signs', 'January 18, 2019 - 10:42 am'),
(223, 184, 'Added Glassgow Scale', 'January 18, 2019 - 10:42 am'),
(224, 0, 'Added Patient Assessment', 'January 18, 2019 - 10:44 am'),
(225, 184, 'Added New Call Log', 'January 18, 2019 - 10:46 am'),
(226, 184, 'Added New Dispatch', 'January 18, 2019 - 10:47 am'),
(227, 184, 'Added New Patient', 'January 18, 2019 - 10:50 am'),
(228, 184, 'Added Vital Signs', 'January 18, 2019 - 10:51 am'),
(229, 184, 'Added Glassgow Scale', 'January 18, 2019 - 10:51 am'),
(230, 184, 'Added New Patient', 'January 18, 2019 - 10:53 am'),
(231, 0, 'Added Patient Assessment', 'January 18, 2019 - 10:54 am'),
(232, 184, 'Added Vital Signs', 'January 18, 2019 - 10:58 am'),
(233, 184, 'Added Glassgow Scale', 'January 18, 2019 - 10:58 am'),
(234, 184, 'Added New Call Log', 'January 18, 2019 - 11:00 am'),
(235, 184, 'Added New Dispatch', 'January 18, 2019 - 11:02 am'),
(236, 184, 'Added New Patient', 'January 18, 2019 - 11:04 am'),
(237, 184, 'Added New Patient', 'January 18, 2019 - 11:04 am'),
(238, 184, 'Added Vital Signs', 'January 18, 2019 - 11:06 am'),
(239, 184, 'Added Glassgow Scale', 'January 18, 2019 - 11:06 am'),
(240, 184, 'Added Vital Signs', 'January 18, 2019 - 11:07 am'),
(241, 184, 'Added Glassgow Scale', 'January 18, 2019 - 11:07 am'),
(242, 0, 'Added Patient Assessment', 'January 18, 2019 - 11:08 am'),
(243, 184, 'Added New Call Log', 'January 18, 2019 - 11:13 am'),
(244, 184, 'Added New Dispatch', 'January 18, 2019 - 11:16 am'),
(245, 184, 'Added New Patient', 'January 18, 2019 - 11:18 am'),
(246, 184, 'Added Vital Signs', 'January 18, 2019 - 11:19 am'),
(247, 184, 'Added Glassgow Scale', 'January 18, 2019 - 11:20 am'),
(248, 184, 'Added New Call Log', 'January 18, 2019 - 11:24 am'),
(249, 184, 'Added Vital Signs', 'January 18, 2019 - 11:26 am'),
(250, 184, 'Added Glassgow Scale', 'January 18, 2019 - 11:26 am'),
(251, 184, 'Added New Call Log', 'January 18, 2019 - 11:28 am'),
(252, 184, 'Added New Dispatch', 'January 18, 2019 - 11:30 am'),
(253, 184, 'Added New Patient', 'January 18, 2019 - 11:31 am'),
(254, 184, 'Added Vital Signs', 'January 18, 2019 - 11:32 am'),
(255, 184, 'Added Glassgow Scale', 'January 18, 2019 - 11:32 am'),
(256, 0, 'Added Patient Assessment', 'January 18, 2019 - 11:34 am'),
(257, 184, 'Added Glassgow Scale', 'January 18, 2019 - 11:35 am'),
(258, 184, 'Added New Call Log', 'January 18, 2019 - 11:36 am'),
(259, 184, 'Added New Dispatch', 'January 18, 2019 - 11:40 am'),
(260, 184, 'Added New Patient', 'January 18, 2019 - 11:41 am'),
(261, 184, 'Added Vital Signs', 'January 18, 2019 - 11:42 am'),
(262, 184, 'Added Glassgow Scale', 'January 18, 2019 - 11:42 am'),
(263, 184, 'Added New Patient', 'January 18, 2019 - 11:43 am'),
(264, 184, 'Added Vital Signs', 'January 18, 2019 - 11:44 am'),
(265, 184, 'Added Glassgow Scale', 'January 18, 2019 - 11:44 am'),
(266, 0, 'Added Patient Assessment', 'January 18, 2019 - 11:45 am'),
(267, 184, 'Added New Call Log', 'January 18, 2019 - 12:21 pm'),
(268, 184, 'Added New Dispatch', 'January 18, 2019 - 12:22 pm'),
(269, 184, 'Added New Patient', 'January 18, 2019 - 12:24 pm'),
(270, 184, 'Added Vital Signs', 'January 18, 2019 - 12:24 pm'),
(271, 184, 'Added Glassgow Scale', 'January 18, 2019 - 12:25 pm'),
(272, 184, 'Added New Patient', 'January 18, 2019 - 12:27 pm'),
(273, 184, 'Added Vital Signs', 'January 18, 2019 - 12:28 pm'),
(274, 184, 'Added Glassgow Scale', 'January 18, 2019 - 12:28 pm'),
(275, 0, 'Added Patient Assessment', 'January 18, 2019 - 12:29 pm'),
(276, 184, 'Added New Call Log', 'January 18, 2019 - 12:30 pm'),
(277, 184, 'Added New Dispatch', 'January 18, 2019 - 12:31 pm'),
(278, 184, 'Added New Patient', 'January 18, 2019 - 12:34 pm'),
(279, 184, 'Added Vital Signs', 'January 18, 2019 - 12:35 pm'),
(280, 184, 'Added Glassgow Scale', 'January 18, 2019 - 12:35 pm'),
(281, 184, 'Added New Patient', 'January 18, 2019 - 12:36 pm'),
(282, 184, 'Added Vital Signs', 'January 18, 2019 - 12:37 pm'),
(283, 184, 'Added Glassgow Scale', 'January 18, 2019 - 12:37 pm'),
(284, 184, 'Added New Call Log', 'January 18, 2019 - 12:41 pm'),
(285, 184, 'Added New Dispatch', 'January 18, 2019 - 12:42 pm'),
(286, 184, 'Added New Patient', 'January 18, 2019 - 12:44 pm'),
(287, 184, 'Added New Call Log', 'January 18, 2019 - 12:45 pm'),
(288, 184, 'Added New Dispatch', 'January 18, 2019 - 12:46 pm'),
(289, 184, 'Added New Patient', 'January 18, 2019 - 12:48 pm'),
(290, 184, 'Added Vital Signs', 'January 18, 2019 - 12:48 pm'),
(291, 184, 'Added Glassgow Scale', 'January 18, 2019 - 12:48 pm'),
(292, 184, 'Added New Call Log', 'January 18, 2019 - 12:50 pm'),
(293, 184, 'Added New Dispatch', 'January 18, 2019 - 12:51 pm'),
(294, 184, 'Added New Call Log', 'January 18, 2019 - 1:08 pm'),
(295, 184, 'Added New Dispatch', 'January 18, 2019 - 1:12 pm'),
(296, 184, 'Added New Patient', 'January 18, 2019 - 1:17 pm'),
(297, 184, 'Added Vital Signs', 'January 18, 2019 - 1:19 pm'),
(298, 184, 'Added Glassgow Scale', 'January 18, 2019 - 1:19 pm'),
(299, 0, 'Added Patient Assessment', 'January 18, 2019 - 1:21 pm'),
(300, 184, 'Added New Call Log', 'January 18, 2019 - 1:24 pm'),
(301, 184, 'Added New Dispatch', 'January 18, 2019 - 1:25 pm'),
(302, 184, 'Added New Patient', 'January 18, 2019 - 1:27 pm'),
(303, 184, 'Added Vital Signs', 'January 18, 2019 - 1:28 pm'),
(304, 184, 'Added Glassgow Scale', 'January 18, 2019 - 1:28 pm'),
(305, 184, 'Added New Call Log', 'January 18, 2019 - 1:32 pm'),
(306, 184, 'Added New Dispatch', 'January 18, 2019 - 1:33 pm'),
(307, 184, 'Added New Patient', 'January 18, 2019 - 1:35 pm'),
(308, 184, 'Added Vital Signs', 'January 18, 2019 - 1:38 pm'),
(309, 184, 'Added Glassgow Scale', 'January 18, 2019 - 1:38 pm'),
(310, 184, 'Added New Call Log', 'January 18, 2019 - 1:39 pm'),
(311, 184, 'Added New Dispatch', 'January 18, 2019 - 1:42 pm'),
(312, 184, 'Added New Patient', 'January 18, 2019 - 1:43 pm'),
(313, 184, 'Added Vital Signs', 'January 18, 2019 - 1:44 pm'),
(314, 184, 'Added Vital Signs', 'January 18, 2019 - 1:44 pm'),
(315, 184, 'Added Glassgow Scale', 'January 18, 2019 - 1:44 pm'),
(316, 184, 'Added New Patient', 'January 18, 2019 - 1:45 pm'),
(317, 184, 'Added Vital Signs', 'January 18, 2019 - 1:47 pm'),
(318, 184, 'Added Glassgow Scale', 'January 18, 2019 - 1:47 pm'),
(319, 184, 'Added New Patient', 'January 18, 2019 - 1:49 pm'),
(320, 184, 'Added Glassgow Scale', 'January 18, 2019 - 1:49 pm'),
(321, 184, 'Added Vital Signs', 'January 18, 2019 - 1:49 pm'),
(322, 184, 'Added New Call Log', 'January 18, 2019 - 1:53 pm'),
(323, 184, 'Added New Dispatch', 'January 18, 2019 - 1:54 pm'),
(324, 184, 'Edited a Dispatch Record', 'January 18, 2019 - 1:55 pm'),
(325, 184, 'Edited a Dispatch Record', 'January 18, 2019 - 1:56 pm'),
(326, 184, 'Added New Patient', 'January 18, 2019 - 1:57 pm'),
(327, 184, 'Added New Patient', 'January 18, 2019 - 1:57 pm'),
(328, 184, 'Added New Patient', 'January 18, 2019 - 1:58 pm'),
(329, 184, 'Added New Patient', 'January 18, 2019 - 2:01 pm'),
(330, 184, 'Added New Patient', 'January 18, 2019 - 2:04 pm'),
(331, 184, 'Added New Patient', 'January 18, 2019 - 2:07 pm'),
(332, 184, 'Added New Patient', 'January 18, 2019 - 2:12 pm'),
(333, 184, 'Added Vital Signs', 'January 18, 2019 - 2:13 pm'),
(334, 184, 'Added Glassgow Scale', 'January 18, 2019 - 2:17 pm'),
(335, 184, 'Added Vital Signs', 'January 18, 2019 - 2:18 pm'),
(336, 184, 'Added Glassgow Scale', 'January 18, 2019 - 2:18 pm'),
(337, 184, 'Added Vital Signs', 'January 18, 2019 - 2:19 pm'),
(338, 184, 'Added Glassgow Scale', 'January 18, 2019 - 2:19 pm'),
(339, 184, 'Added Vital Signs', 'January 18, 2019 - 2:20 pm'),
(340, 184, 'Added Glassgow Scale', 'January 18, 2019 - 2:20 pm'),
(341, 184, 'Added Vital Signs', 'January 18, 2019 - 2:20 pm'),
(342, 184, 'Added Glassgow Scale', 'January 18, 2019 - 2:20 pm'),
(343, 184, 'Added Vital Signs', 'January 18, 2019 - 2:21 pm'),
(344, 184, 'Added Glassgow Scale', 'January 18, 2019 - 2:21 pm'),
(345, 184, 'Added Vital Signs', 'January 18, 2019 - 2:22 pm'),
(346, 184, 'Added Glassgow Scale', 'January 18, 2019 - 2:22 pm'),
(347, 184, 'Added New Patient', 'January 18, 2019 - 2:34 pm'),
(348, 184, 'Added Vital Signs', 'January 18, 2019 - 2:35 pm'),
(349, 184, 'Added Glassgow Scale', 'January 18, 2019 - 2:36 pm'),
(350, 184, 'Added New Call Log', 'January 18, 2019 - 3:35 pm'),
(351, 184, 'Added New Dispatch', 'January 18, 2019 - 3:36 pm'),
(352, 184, 'Edited a Dispatch Record', 'January 18, 2019 - 3:36 pm'),
(353, 184, 'Edited Refusal for Treatment Record', 'January 18, 2019 - 3:46 pm'),
(354, 184, 'Edited Refusal for Treatment Record', 'January 18, 2019 - 3:47 pm'),
(355, 184, 'Edited Refusal for Treatment Record', 'January 18, 2019 - 3:47 pm'),
(356, 184, 'Edited Refusal for Treatment Record', 'January 18, 2019 - 3:47 pm'),
(357, 184, 'Edited Refusal for Treatment Record', 'January 18, 2019 - 3:51 pm'),
(358, 184, 'Edited Refusal for Treatment Record', 'January 18, 2019 - 3:51 pm'),
(359, 184, 'Edited Refusal for Treatment Record', 'January 18, 2019 - 3:51 pm'),
(360, 183, 'Requested 20 Cotton', 'January 24, 2019 - 11:31 am'),
(361, 183, 'Added New Call Log', 'January 24, 2019 - 12:01 pm'),
(362, 183, 'Added New Dispatch', 'January 24, 2019 - 12:02 pm'),
(363, 183, 'Added New Dispatch', 'January 24, 2019 - 12:03 pm'),
(364, 182, 'Approved Request 2 Sample', 'January 24, 2019 - 12:14 pm'),
(365, 182, 'Approved Request 3 Alcohol', 'January 24, 2019 - 12:38 pm'),
(366, 182, 'Approved Request 5 Alcohol', 'January 24, 2019 - 12:43 pm'),
(367, 183, 'Added New Dispatch', 'January 24, 2019 - 1:37 pm'),
(368, 183, 'Ended Dispatchment Driver', 'January 24, 2019 - 1:44 pm'),
(369, 183, 'Ended Dispatchment Driver', 'January 24, 2019 - 1:45 pm'),
(370, 183, 'Used 2 Alcohol', 'January 24, 2019 - 10:50 pm'),
(371, 183, 'Used 2 Cotton', 'January 24, 2019 - 10:52 pm'),
(372, 183, 'Used 1 Betadine', 'January 24, 2019 - 10:58 pm'),
(373, 183, 'Used 1 Gloves', 'January 24, 2019 - 11:01 pm'),
(374, 183, 'Ended Dispatchment Driver', 'January 24, 2019 - 11:07 pm');

-- --------------------------------------------------------

--
-- Table structure for table `vital_signs`
--

CREATE TABLE `vital_signs` (
  `vital_signs_id` int(10) NOT NULL,
  `time` varchar(50) NOT NULL,
  `loc` varchar(50) NOT NULL,
  `bp` varchar(50) NOT NULL,
  `sa` varchar(50) NOT NULL,
  `pr` varchar(50) NOT NULL,
  `rr` varchar(50) NOT NULL,
  `temp` varchar(50) NOT NULL,
  `rbs` varchar(50) NOT NULL,
  `pupils` varchar(50) NOT NULL,
  `skin` varchar(50) NOT NULL,
  `patient_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vital_signs`
--

INSERT INTO `vital_signs` (`vital_signs_id`, `time`, `loc`, `bp`, `sa`, `pr`, `rr`, `temp`, `rbs`, `pupils`, `skin`, `patient_id`) VALUES
(1, '10:14 PM', 'Voice', '90', '90', '90', '90', '90', '90', 'Dilated - R', 'Pale', '1'),
(2, '10:14 PM', 'Voice', '12', '12', '12', '12', '12', '12', 'Dilated - R', 'Pale', '2'),
(3, '10:14 PM', 'Voice', '12', '12', '12', '12', '12', '12', 'Sluggish - R', 'Warm', '3'),
(4, '10:14 PM', 'Alert', '12', '12', '12', '12', '12', '12', 'Constricted - L', 'Flushed', '4'),
(5, '10:14 PM', 'Voice', '12', '12', '12', '12', '12', '12', 'Sluggish - L', 'Moist', '5'),
(6, '10:14 PM', 'Voice', '12', '12', '12', '12', '12', '12', 'Constricted - L', 'Warm', '9'),
(7, '10:14 PM', 'Pain', '202', '20', '20', '20', '20', '20', 'Normal - L', 'Pale', '10'),
(8, '10:14 PM', 'Alert', '12', '12', '12', '12', '12', '12', 'Sluggish - R', 'Flushed', '11'),
(9, '10:14 PM', 'Voice', '12', '1212', '12', '12', '12', '12', 'No Response - R', 'Cyanotic', '12'),
(10, '10:14 PM', 'Alert', '11', '11', '11', '11', '11', '11', 'Normal - R', 'Pale', '13'),
(11, '11:37 AM', 'Voice', '12', '12', '12', '12', '12', '12', 'Sluggish - L', 'Flushed', '7'),
(12, '11:40 AM', 'Alert', '12', '12', '12', '12', '12', '12', 'Sluggish - R', 'Flushed', '14'),
(13, '5:52 PM', 'Voice', '120/80', '97', '87', '77', '37', '100', 'Dilated - L', 'Pale', '15'),
(14, '5:56 PM', 'Alert', '12', '49', '56', '42', '20', '12', 'Constricted - L', 'Warm', '16'),
(15, '5:59 PM', 'Voice', '34', '1', '1', '1', '1', '12', 'Sluggish - L', 'Cyanotic', '17'),
(16, '7:24 PM', 'Alert', '12', '90', '125', '60', '48', '12', 'Constricted - R', 'Unremarkable', '18'),
(17, '11:16 AM', 'Alert', '1', '37', '116', '113', '60', '1', 'No Response - R', 'Jaundiced', '21'),
(18, '11:27 AM', 'Alert', '1', '37', '121', '91', '57', '1', 'Sluggish - L', 'Dry', '21'),
(19, '1:17 PM', 'Voice', '120/80', '27', '123', '93', '39', '12', 'Sluggish - L', 'Flushed', '22'),
(20, '11:11 PM', 'Alert', '120-80', '47', '34', '86', '54', '1', 'Normal - R', 'Moist', '23'),
(21, '11:14 PM', 'Alert', '120/90', '27', '128', '75', '23', '1', 'Normal - R', 'Pale', '23'),
(22, '11:16 PM', 'Voice', '110/70', '36', '92', '56', '65', '1', 'Normal - R', 'Pale', '22'),
(23, '11:19 pm', 'Voice', '120/80', '28', '84', '55', '69', '1', 'Normal - R', 'Warm', '21'),
(24, '11:19 pm', 'Voice', '120/80', '28', '84', '55', '69', '1', 'Normal - R', 'Warm', '21'),
(25, '11:20 pm', 'Voice', '120/80', '40', '73', '60', '32', '1', 'Normal - L', 'Warm', '23'),
(26, '11:32 pm', 'Voice', '120/80', '35', '131', '71', '33', '12', 'Constricted - L', 'Dry', '10'),
(27, '11:33 pm', 'Pain', '120/80', '50', '64', '106', '41', '12', 'Sluggish - R', 'Cyanotic', '10'),
(28, '6:31 pm', 'Alert', '100/60', '25', '42', '47', '33', '10', 'No Response - R', 'Dry', '22'),
(29, '6:39 pm', '', '120/80', '39', '88', '87', '57', '89', 'Constricted - L', 'Jaundiced', '13'),
(30, '4:43 pm', 'Pain', '120/20', '32', '82', '56', '37', 'NA', 'Constricted - R', 'Dry', '27'),
(31, '4:47 pm', 'Voice', '120/20', '49', '52', '112', '47', 'None', 'Sluggish - R', 'Dry', '28'),
(32, '4:50 pm', 'Alert', '120/20', '36', '95', '65', '76', 'None', 'Constricted - R', 'Flushed', '29'),
(33, '4:59 pm', 'Alert', '120/20', '51', '48', '106', '36', 'None', 'Constricted - R', 'Dry', '30'),
(34, '10:55 pm', 'Pain', '130/40', '39', '77', '81', '37', 'None', 'Dilated - R', 'Warm', '31'),
(35, '11:21 pm', 'Pain', '140/30', '91', '87', '88', '38', 'None', 'Normal - L', 'Pale', '32'),
(36, '11:23 pm', 'Voice', '120/30', '80', '85', '82', '38', 'None', 'Normal - L', 'Cyanotic', '33'),
(37, '11:38 pm', 'Pain', '140/60', '97', '83', '81', '37', 'None', 'Constricted - R', 'Warm', '34'),
(38, '11:54 pm', 'Pain', '120/30', '94', '85', '86', '37', 'None', 'Normal - R', 'Warm', '35'),
(39, '12:02 am', 'Unresponsive', '130/40', '94', '70', '88', '37', 'None', 'Dilated - L', 'Dry', '36'),
(40, '12:16 am', 'Pain', '120/20', '92', '85', '78', '36', 'None', 'Dilated - L', 'Moist', '37'),
(41, '12:27 am', 'Unresponsive', '120/30', '87', '84', '66', '37', 'None', 'No Response - R', 'Warm', '38'),
(42, '12:29 am', 'Pain', '120/20', '58', '70', '66', '38', 'None', 'Dilated - R', 'Jaundiced', '24'),
(43, '12:45 am', 'Pain', '120/30', '95', '78', '66', '37', 'None', 'Sluggish - R', 'Unremarkable', '39'),
(44, '12:57 am', '', '120/30', '90', '77', '77', '38', 'None', 'Normal - L', 'Warm', '40'),
(45, '1:01 am', 'Voice', '120/30', '96', '81', '82', '36', 'None', 'Dilated - L', 'Unremarkable', '41'),
(46, '1:10 am', 'Alert', '120/30', '92', '79', '74', '36', 'None', 'Dilated - R', 'Flushed', '42'),
(47, '1:14 am', 'Voice', '120/30', '96', '84', '84', '51', 'None', 'Dilated - L', 'Warm', '43'),
(48, '1:25 am', 'Alert', '120/30', '91', '84', '69', '38', 'None', 'Dilated - L', 'Pale', '44'),
(49, '1:38 am', 'Unresponsive', '120/30', '95', '61', '76', '37', 'None', 'Dilated - L', 'Unremarkable', '45'),
(50, '1:50 am', 'Alert', '120/30', '96', '84', '66', '37', 'None', 'Constricted - R', 'Warm', '46'),
(51, '1:54 am', 'Pain', '120/30', '95', '79', '78', '37', 'None', 'Dilated - R', 'Warm', '47'),
(52, '2:00 am', 'Voice', '120/20', '94', '79', '77', '39', 'None', 'Dilated - L', 'Pale', '48'),
(53, '2:04 am', 'Unresponsive', '120/30', '96', '68', '74', '38', 'None', 'No Response - R', 'Moist', '49'),
(54, '10:28 am', 'Unresponsive', '000/00', '1', '1', '1', '30', 'None', 'No Response - R', 'Warm', '50'),
(55, '10:42 am', 'Pain', '120/80', '94', '83', '67', '37', 'None', 'Normal - R', 'Warm', '51'),
(56, '10:51 am', 'Pain', '120/80', '93', '85', '61', '37', 'None', 'Constricted - R', 'Warm', '52'),
(57, '10:58 am', 'Pain', '120/80', '91', '87', '72', '37', 'None', 'Normal - L', 'Warm', '53'),
(58, '11:06 am', 'Pain', '120/80', '90', '72', '65', '37', 'None', 'Dilated - L', 'Warm', '54'),
(59, '11:07 am', 'Voice', '120/80', '63', '75', '65', '36', 'None', 'Constricted - R', 'Dry', '55'),
(60, '11:19 am', 'Alert', '120/80', '94', '82', '66', '36', 'None', 'Normal - L', 'Warm', '56'),
(61, '11:26 am', 'Alert', '120/80', '89', '82', '76', '37', 'None', 'Normal - L', 'Warm', '56'),
(62, '11:32 am', 'Alert', '120/80', '92', '69', '77', '37', 'None', 'No Response - R', 'Warm', '57'),
(63, '11:42 am', 'Alert', '120/80', '87', '80', '59', '37', 'None', 'No Response - R', 'Warm', '58'),
(64, '11:44 am', 'Voice', '120/80', '89', '80', '61', '36', 'None', 'Normal - R', 'Warm', '59'),
(65, '12:24 pm', 'Pain', '120/80', '94', '68', '70', '36', 'None', 'Dilated - R', 'Warm', '60'),
(66, '12:28 pm', 'Alert', '120/80', '94', '60', '52', '35', 'None', 'Normal - L', 'Warm', '61'),
(67, '12:35 pm', 'Pain', '120/80', '95', '75', '58', '37', 'None', 'Sluggish - R', 'Dry', '62'),
(68, '12:37 pm', 'Alert', '120/80', '94', '78', '54', '36', 'None', 'Normal - R', 'Dry', '63'),
(69, '12:48 pm', 'Voice', '120/80', '94', '80', '65', '40', 'None', 'Normal - R', 'Flushed', '65'),
(70, '1:19 pm', 'Unresponsive', '120/80', '92', '73', '62', '36', 'None', 'Normal - L', 'Warm', '66'),
(71, '1:28 pm', 'Unresponsive', '120/30', '95', '77', '58', '36', 'None', 'No Response - R', 'Warm', '67'),
(72, '1:38 pm', 'Pain', '120/60', '96', '64', '55', '36', 'None', 'Sluggish - R', 'Dry', '68'),
(73, '1:44 pm', 'Pain', '130/80', '95', '89', '58', '36', 'None', 'No Response - L', 'Warm', '69'),
(74, '1:44 pm', 'Pain', '130/80', '95', '89', '58', '36', 'None', 'No Response - L', 'Warm', '69'),
(75, '1:47 pm', 'Voice', '120/80', '95', '78', '74', '37', 'None', 'Normal - L', 'Dry', '70'),
(76, '1:49 pm', 'Pain', '120/80', '96', '72', '63', '35', 'None', 'No Response - R', 'Pale', '71'),
(77, '2:13 pm', 'Pain', '120/80', '96', '82', '58', '36', 'None', 'No Response - L', 'Dry', '72'),
(78, '2:18 pm', 'Pain', '120/80', '95', '87', '66', '37', 'None', 'Dilated - R', 'Warm', '73'),
(79, '2:19 pm', 'Alert', '120/80', '87', '87', '64', '38', 'None', 'Sluggish - L', 'Jaundiced', '74'),
(80, '2:20 pm', 'Pain', '120/80', '96', '89', '87', '36', 'None', 'Dilated - L', 'Warm', '75'),
(81, '2:20 pm', 'Voice', '120/80', '99', '87', '61', '36', 'None', 'Sluggish - L', 'Warm', '76'),
(82, '2:21 pm', 'Voice', '120/80', '92', '89', '63', '37', 'None', 'Normal - R', 'Warm', '77'),
(83, '2:22 pm', 'Pain', '120/80', '94', '84', '59', '38', 'None', 'Normal - L', 'Dry', '78'),
(84, '2:35 pm', 'Pain', '120/80', '95', '85', '64', '35', 'None', 'No Response - L', 'Warm', '79');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambulance`
--
ALTER TABLE `ambulance`
  ADD PRIMARY KEY (`ambulance_id`);

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`assessment_id`);

--
-- Indexes for table `call_logs`
--
ALTER TABLE `call_logs`
  ADD PRIMARY KEY (`call_id`);

--
-- Indexes for table `db_backup`
--
ALTER TABLE `db_backup`
  ADD PRIMARY KEY (`back_up_id`);

--
-- Indexes for table `dispatch`
--
ALTER TABLE `dispatch`
  ADD PRIMARY KEY (`dispatch_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `glassgow_coma_scale`
--
ALTER TABLE `glassgow_coma_scale`
  ADD PRIMARY KEY (`glassgow_coma_scale_id`);

--
-- Indexes for table `items_used`
--
ALTER TABLE `items_used`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_supply_request`
--
ALTER TABLE `medical_supply_request`
  ADD PRIMARY KEY (`medical_supply_request_id`);

--
-- Indexes for table `medical_supply_stocks`
--
ALTER TABLE `medical_supply_stocks`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `medical_supply_stocks_emt`
--
ALTER TABLE `medical_supply_stocks_emt`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `pain_assessment`
--
ALTER TABLE `pain_assessment`
  ADD PRIMARY KEY (`pain_assessment_id`);

--
-- Indexes for table `past_medical_history`
--
ALTER TABLE `past_medical_history`
  ADD PRIMARY KEY (`past_med_his_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `refusal_treatment`
--
ALTER TABLE `refusal_treatment`
  ADD PRIMARY KEY (`refusal_treatment_id`);

--
-- Indexes for table `request_transport`
--
ALTER TABLE `request_transport`
  ADD PRIMARY KEY (`request_transport_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_activity_log`
--
ALTER TABLE `users_activity_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `vital_signs`
--
ALTER TABLE `vital_signs`
  ADD PRIMARY KEY (`vital_signs_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambulance`
--
ALTER TABLE `ambulance`
  MODIFY `ambulance_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `assessment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `call_logs`
--
ALTER TABLE `call_logs`
  MODIFY `call_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `db_backup`
--
ALTER TABLE `db_backup`
  MODIFY `back_up_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `dispatch`
--
ALTER TABLE `dispatch`
  MODIFY `dispatch_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `glassgow_coma_scale`
--
ALTER TABLE `glassgow_coma_scale`
  MODIFY `glassgow_coma_scale_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `items_used`
--
ALTER TABLE `items_used`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `medical_supply_request`
--
ALTER TABLE `medical_supply_request`
  MODIFY `medical_supply_request_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `medical_supply_stocks`
--
ALTER TABLE `medical_supply_stocks`
  MODIFY `stock_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `medical_supply_stocks_emt`
--
ALTER TABLE `medical_supply_stocks_emt`
  MODIFY `stock_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pain_assessment`
--
ALTER TABLE `pain_assessment`
  MODIFY `pain_assessment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `past_medical_history`
--
ALTER TABLE `past_medical_history`
  MODIFY `past_med_his_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `refusal_treatment`
--
ALTER TABLE `refusal_treatment`
  MODIFY `refusal_treatment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `request_transport`
--
ALTER TABLE `request_transport`
  MODIFY `request_transport_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;
--
-- AUTO_INCREMENT for table `users_activity_log`
--
ALTER TABLE `users_activity_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=375;
--
-- AUTO_INCREMENT for table `vital_signs`
--
ALTER TABLE `vital_signs`
  MODIFY `vital_signs_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
