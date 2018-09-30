-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2018 at 01:09 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id7318069_ndrrmo`
--

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
(1, 'Test', 'Test', 'Test', '1 - Emergent', 'Call Cancelled', 'Moved to ambulance on stretcher/backboard              ', 1),
(2, 'From mobile', 'From mobile', 'From mobile', '2 - Urgent', 'Treated and Released / transferred care', 'ET Tube 12 12            ', 2),
(3, '123', '123', '123', '3 - Non-urgent', 'Treated and Released / transferred care ', 'ET Tube Tube - 100 Level 1            ', 3),
(4, '123', '123', '123', '2 - Urgent', 'Treated and Released / transferred care CLMMRH', 'ET Tube 12 12            ', 4),
(5, 'Test', 'Test', 'Test', '1 - Emergent', 'Treated and Released / transferred care Riverside', 'CPR       100 08/25/2018 2:11 PM      ', 5),
(6, 'Shit', 'Shit', 'Shit', '1 - Emergent', 'Treated and Released / transferred care CLMMRH', 'O2 Administered   12 12          ', 9),
(7, 'Assessment', 'Assessment', 'Assessment', '1 - Emergent', 'Refused Treatment ', 'Airway Cleared              ', 10);

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
(1, '09/16/2018 11:49 AM', 'Lizares Avenue, Bacolod City', 'Accident near 7/11', 'Kurt Dela Torre', '4332449'),
(2, '09/16/2018 11:49 AM', 'Lacson Avenue, Bacolod City, Negros Occidental, Philippines', 'Accident sa may Lacson', 'Peter Sacayle', '4332449'),
(3, '09/16/2018 11:56 AM', 'Balboa St. Eroreco, Bacolod City', 'Fire', 'Alkaid Lamig', '4332449'),
(4, '09/19/2018 11:51 PM', 'Banago, Negros Occidental, Philippines', 'Test', 'Test', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `db_backup`
--

CREATE TABLE `db_backup` (
  `back_up_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `activity` varchar(15) NOT NULL,
  `date` varchar(12) NOT NULL,
  `time` varchar(12) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dispatch`
--

INSERT INTO `dispatch` (`dispatch_id`, `service_no`, `date_time_call`, `ambulance`, `dispatched_for`, `call_location`, `moi_noi`, `patients_on_scene`, `on_board_tl`, `ems`, `driver`, `care_in_progress`, `mass_casualty`, `enroute`, `date_created`, `month`, `year`) VALUES
(1, '10000', '08/25/2018 11:32 AM', 'Samaritan 1', 'Airway Obstruction', 'Andalucia Street, Bacolod City', '100', '100', '100', '100', 'Driver A', 'Citizen', 'on', '11:34 am', 'August 17, 2018 07:44 pm', 'Aug', '2018'),
(2, '1009', '08/25/2018 1:41 PM', 'Samaritan 1', 'Airway Obstruction', 'Bacolod City', '123', '123', '123', '123', 'Driver B', 'Citizen', 'No', '1:41 pm', 'August 17, 2018 08:44 pm', 'Aug', '2018'),
(3, '123', '09/01/2018 12:31 AM', 'Samaritan 1', 'Hypertension', 'Bacolod City', '12', '12', '12', '12', 'Driver A', 'Citizen', 'No', '12:31 am', 'August 17, 2018 10:10 am', 'Aug', '2018'),
(4, '10009', '09/01/2018 12:38 AM', 'Samaritan 1', 'Stroke/CVA', '12', '12', '12', '12', '12', '12', 'Citizen', 'Yes', '12:38 am', 'September 15, 2018 10:30 am', 'Sep', '2018'),
(5, '1234', '09/07/2018 12:25 PM', 'Samaritan 2', 'Airway Obstruction', 'Bacolod City', '100', '100', '100', 'Kurt Dela Torre', 'Driver A', 'Citizen', 'Yes', '12:25 pm', 'September 16, 2018 10:50 am', 'Sep', '2018'),
(6, '1099', '09/07/2018 5:36 PM', 'Samaritan 1', 'Airway Obstruction', 'Taculing Barangay Hall, Bacolod City, Negros Occidental, Philippines', '109', '109', '109', 'EMS', 'Driver ABC', 'Citizen', 'Yes', '5:37 pm', 'September 17, 2018 12:44 pm', 'Sep', '2018'),
(7, '100022', '09/17/2018 11:10 AM', 'Samaritan 1', 'Hypertension', 'Santa Clara St, Mandalagan, Negros Occidental, Philippines', '12', '1', '12', 'Test', 'Driver A', 'Citizen', 'Yes', '11:12 am', 'September 17, 2018 09:44 pm', 'Sep', '2018'),
(8, '100999', '09/23/2018 6:30 PM', 'Samaritan 1', 'Stroke/CVA', 'Lizares Avenue, Bacolod City, Negros Occidental, Philippines', '20', '10', '10', '10', 'Driver ABC', 'Medical Practicioner / First Aider', 'No', '6:30 pm', 'September 23, 2018 10:44 am', 'Sep', '2018'),
(9, '100999', '09/27/2018 12:11 AM', 'Samaritan 1', 'Hypertension', 'Lizares Avenue, Bacolod City, Negros Occidental, Philippines', '12', '12', '12', 'Kurt Dela Torre', 'Alkaid Lamig', 'Citizen', 'No', '12:11 am', 'September 26, 2018 11:44 pm', 'Sep', '2018'),
(10, '121319', '09/27/2018 12:23 AM', 'Samaritan 2', 'Allergic Reaction', 'Sum-ag, Bacolod City, Negros Occidental, Philippines', '12', '12', '12', 'Alkaid Lamig', 'Peter Sacayle', 'None', 'No', '12:24 am', 'September 26, 2018 11:44 pm', 'Sep', '2018'),
(11, '23412', '09/27/2018 10:44 PM', 'Samaritan 1', 'Major Trauma', 'Lacson, Bacolod City, Negros Occidental, Philippines', '102', '12', '12', 'Test', 'Driver ABC', 'Citizen', 'No', '10:44 pm', 'September 27, 2018 10:44 pm', 'Sep', '2018'),
(12, '127381', '09/27/2018 11:02 PM', 'Samaritan 1', 'Respiratory Distress', 'Margarita, Bacolod City, Negros Occidental, Philippines', '12', '12', '12', '12', 'Driver ZXC', 'Citizen', 'No', '11:03 pm', 'September 27, 2018 11:03 pm', 'Sep', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `glassgow_coma_scale`
--

CREATE TABLE `glassgow_coma_scale` (
  `glassgow_coma_scale_id` int(10) NOT NULL,
  `eye` int(10) NOT NULL,
  `verbal` int(10) NOT NULL,
  `motor` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `glassgow_coma_scale`
--

INSERT INTO `glassgow_coma_scale` (`glassgow_coma_scale_id`, `eye`, `verbal`, `motor`, `patient_id`) VALUES
(1, 3, 3, 5, 1),
(2, 2, 3, 5, 2),
(3, 4, 4, 3, 3),
(4, 3, 3, 3, 4),
(5, 3, 4, 4, 5),
(6, 4, 4, 4, 9),
(7, 3, 4, 5, 10);

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
(1, 136, 'Alcohol', 'This is Alcohol', 'Savemore', 30, 'Reorder', 'September 23, 2018'),
(2, 136, 'Cotton', 'This is Cotton', 'Libra', 23, 'Reorder', 'September 23, 2018'),
(3, 136, 'Betadine', 'This is Betadine', 'PureGold', 100, 'Reorder', 'September 23, 2018'),
(4, 136, 'Shit', 'Shit', 'Shit', 200, 'Reorder', 'September 23, 2018'),
(5, 136, 'Sample', 'Sample', 'Sample', 10, 'Reorder', 'September 23, 2018'),
(6, 136, 'Test', 'This is Test', 'Avon', 505, 'Reorder', 'September 25, 2018');

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
(7, '20', '20', '20', '20', '20', 'VA seatbelt used', 10);

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
(1, 'Patient A', '12', 'Male', '08/08/2000', '4332449', 'Bacolod City', 'Test', 'Test', 'Allergies', '1', 'Assessed'),
(2, 'Patient B', '12', 'Male', '08/16/2018', '4332449', 'Bacolod City', 'Test', 'Test', 'DNR', '1', 'Assessed'),
(3, 'Patient C', '12', 'Male', '08/16/2000', '4332449', 'Bacolod City', 'Test', 'Test', 'Allergies', '2', 'Assessed'),
(4, 'Patient D', '12', 'Male', '08/14/2018', '4332449', 'Bacolod City', 'Test', 'Test', 'Organ Donor', '2', 'Assessed'),
(5, 'Patient E', '12', 'Male', '08/08/2018', '4332449', 'Bacolod City', 'Test', 'Test', 'Allergies', '2', 'Assessed'),
(6, 'Patient F', '12', 'Male', '08/08/2018', '4332449', 'Bacolod City', 'Test', 'Test', 'None', '2', 'Unassessed'),
(7, 'Patient L', '12', 'Male', '08/14/2018', '4332449', 'Bacolod City', 'Test', 'Test', 'Organ Donor', '1', 'Unassessed'),
(8, 'Patient H', '12', 'Male', '08/13/2018', '4332449', 'bacolod City', 'Test', 'Test', 'Allergies', '2', 'Unassessed'),
(9, 'Patient M', '12', 'Male', '08/23/2018', '4332449', 'Bacolod City', 'Sample', 'Sample', 'Allergies', '2', 'Assessed'),
(10, 'Patient H', '12', 'Male', '09/11/2018', '4332449', 'Bacolod City', 'Test', 'Test', 'Allergies', '3', 'Assessed'),
(11, 'Alkaid Lamig', '21', 'Male', '09/16/2018', '4332449', 'Bacolod City', 'Peter Sacayle', 'Brother', 'None', '3', 'Unassessed'),
(12, 'Patient G', '20', 'Male', '09/10/2018', '4332449', 'Bacolod', 'Test', 'Test', 'DNR', '3', 'Unassessed');

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
  `prepared_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refusal_treatment`
--

INSERT INTO `refusal_treatment` (`refusal_treatment_id`, `signed`, `witness1`, `witness2`, `date_incident`, `statements`, `attachment`, `prepared_by`) VALUES
(1, 'Kurt Dela Torre', 'Peter Sacayle', 'Alkaid Lamig', '09/16/2018 12:41 PM', '', 'None', 'Alkaid Lamig'),
(2, 'Alkaid Lamig', 'Peter Sacayle', 'Kurt Dela Torre', '09/16/2018 12:51 PM', '', 'None', 'Peter Sacayle'),
(3, 'Peter Sacayle', 'Kurt Dela Torre', 'Kurt Dela Torre', '09/03/2018 11:36 PM', 'This is a statement', 'None', 'Peter Sacayle'),
(6, 'Juan Dela Cruz', 'Peter Lopez', 'John Dela Cruz', '09/16/2018 10:54 AM', '', 'None', 'Me'),
(7, 'Patient A', 'Kurt Dela Torre', 'Alkaid Lamig', '09/16/2018 12:28 PM', '', 'None', 'Peter Sacayle'),
(8, 'Patient C', 'Alkaid Lamig', 'Peter Sacayle', '09/30/2018 12:03 AM', 'This is refusal', 'None', 'Kurt Dela Torre');

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
  `date_created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_transport`
--

INSERT INTO `request_transport` (`request_transport_id`, `date_time`, `requesting_party`, `contact_no`, `patient_name`, `address`, `age`, `gender`, `medical_history`, `special_considerations`, `froma`, `toa`, `fromb`, `gcs`, `bp`, `rr`, `pr`, `sat`, `requesting_approval`, `approval`, `date_created`) VALUES
(5, '09/03/2018 6:51 PM', 'Party YUI', '4332449', 'Pedro Araneta', 'fortune town bacolod city', '29', 'Male', 'geqjhwg', 'Chest Tube Drainage', 'eqweq', 'qweqw', 'weqweqw', 'eqweqw', 'eqweq', 'qeweq', 'qewq', 'qweqw', 'eqweqw', 'eqweqw', ''),
(6, '09/03/2018 6:52 PM', 'Party E', '1234', 'Patient H', 'Margarita Street', '28', 'Male', 'None', 'Catheter', 'Bacolod City', 'Bacolod City', 'Bacolod City', '12', '12', '12', '12', '12', 'Kurt Dela Torre', 'Alkaid Lamig', ''),
(7, '09/01/2018 1:32 PM', 'Party GGG', '4332449', 'Pedro Colmenares', 'Andalucia Street', '28', 'Male', 'None', 'Chest Tube Drainage', 'Bacolod City', 'Bacolod City', 'Bacolod City', '10', '10', '10', '10', '10', 'Doctor A', 'Doctor B', ''),
(8, '09/01/2018 2:11 PM', 'Party G', '4332449', 'Patient DFG', 'Bugnay Rd. Villamonte', '20', 'Male', 'None', 'Chest Tube Drainage', '12', '12', '12', '12', '12', '121', '12', '12', 'Dr. Delatorre', 'Dr. Delatorre', ''),
(9, '09/02/2018 10:55 AM', 'Three Propis', '433-2449', 'Juan Dela Cruz', 'Lizares Avenue, Bacolod City', '28', 'Male', 'None', '', 'Lizares Avenue, Bacolod City', 'Margarita St., Bacolod City', 'Lizares Avenue, Bacolod City', '12', '12', '12', '12', '12', 'Alson John Bayon-on', 'Carl Betio', ''),
(10, '09/02/2018 8:22 PM', 'Party ZXC', '433-2449', 'Pedro Dela Cruz', 'Balboa St, Bacolod City, Negros Occidental, Philippines', '20', 'Male', 'None', 'Catheter', 'Balboa St, Bacolod City, Negros Occidental, Philippines', 'Balboa St, Bacolod City, Negros Occidental, Philippines', 'Balboa St, Bacolod City, Negros Occidental, Philippines', '12', '12', '12', '12', '12', 'Peter Sacayle', 'Peter Sacayle', ''),
(11, '09/03/2018 7:08 PM', 'Party RTY', '433-2449', 'Patient DFG', 'Felisa, Bacolod City, Negros Occidental, Philippines', '20', 'Male', 'None', 'Colostomy', 'Test', 'Test', 'Test', '12', '12', '12', '12', '12', 'Alvin', 'Alvin', ''),
(12, '09/03/2018 10:20 PM', 'Party Party', '4332449', 'Patient CVB', 'Burgos St, Bacolod City, Negros Occidental, Philippines', '12', 'Male', '12', '02', '12', '12', '12', '12', '12', '12', '12', '12', '12', '12', ''),
(13, '09/17/2018 10:50 AM', 'Safetech Guardians', '433-2449', 'Peter Sacayle', 'Sum-ag, Negros Occidental, Philippines', '20', 'Male', 'None', 'Chest Tube Drainage', 'Sum-ag', 'Lizares', 'Lizares', '12', '12', '12', '12', '12', 'Test', 'Test', 'September 17, 2018'),
(14, '09/17/2018 10:56 AM', 'CIT', '4332449', 'Alkaid Lamig', 'San Juan Street, Sum-ag, Negros Occidental, Philippines', '21', 'Male', 'None', 'Catheter', 'Sum-ag', 'Lizares', 'Lizares', '20', '20', '20', '20', '20', 'Kurt Dela Torre', 'Kurt Dela Torre', 'September 17, 2018'),
(15, '09/17/2018 11:01 AM', 'CBA', '4332449', 'Kurt Dela Torre', 'Molave St, Sum-ag, Negros Occidental, Philippines', '20', 'Male', 'None', 'Catheter', 'Sum-ag', 'Lizares', 'Lizares', '20', '20', '20', '20', '20', 'Kurt Dela Torre', 'Kurt Dela Torre', 'September 17, 2018'),
(16, '09/19/2018 11:55 PM', 'Party CVVB', '4332449', 'Alkaid Lamig', 'Prk. Fiesta Homes Sum-ag Bacolod City', '21', 'Male', 'None', 'Chest Tube Drainage', 'Test', 'Test', 'Test', '12', '12', '12', '12', '12', 'Peter Sacayle', 'Peter Sacayle', 'September 19, 2018');

-- --------------------------------------------------------

--
-- Table structure for table `timeinout`
--

CREATE TABLE `timeinout` (
  `timeinout_id` int(10) NOT NULL,
  `time` varchar(50) NOT NULL,
  `emt_id_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeinout`
--

INSERT INTO `timeinout` (`timeinout_id`, `time`, `emt_id_number`) VALUES
(15, '12:50:04 AM', 'r475364643'),
(16, '12:50:37 AM', '4254232'),
(17, '12:50:44 AM', '234623536'),
(18, '01:01:58 AM', '355435435'),
(19, '01:01:58 AM', 'ewqeqeqw76'),
(20, '01:07:38 AM', '535353'),
(21, '01:08:02 AM', 'e5264532645236'),
(22, '12:05:11 PM', '4737374'),
(23, '01:28:19 PM', '1234567890'),
(24, '01:34:29 PM', '4332449'),
(25, '12:07:05 AM', '21312312');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `complete_name` varchar(100) NOT NULL,
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

INSERT INTO `users` (`user_id`, `complete_name`, `username`, `password`, `user_role`, `status`, `date_created`, `time_created`) VALUES
(182, 'kurt dela torre', 'kurt', 'STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagja5948a0b701a40b762d5a1311cc171a0607734ea', 'Administrator', 1, 'September 28, 2018', '11:50 pm'),
(183, 'peter sacayle', 'peter', 'STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj60b1cfb0ae85b40c40e85ee2e0da328b638ba643', 'EMT', 1, 'September 28, 2018', '11:51 pm'),
(184, 'alkaid lamig', 'alkaid', 'STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj71c12f2610b2b0f61eb92eaeca53ece710c141e4', 'EMT', 1, 'September 28, 2018', '11:51 pm');

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
(1, '', 'Voice', '90', '90', '90', '90', '90', '90', 'Dilated - R', 'Pale', '1'),
(2, '', 'Voice', '12', '12', '12', '12', '12', '12', 'Dilated - R', 'Pale', '2'),
(3, '', 'Voice', '12', '12', '12', '12', '12', '12', 'Sluggish - R', 'Warm', '3'),
(4, '', 'Alert', '12', '12', '12', '12', '12', '12', 'Constricted - L', 'Flushed', '4'),
(5, '', 'Voice', '12', '12', '12', '12', '12', '12', 'Sluggish - L', 'Moist', '5'),
(6, '', 'Voice', '12', '12', '12', '12', '12', '12', 'Constricted - L', 'Warm', '9'),
(7, '', 'Pain', '202', '20', '20', '20', '20', '20', 'Normal - L', 'Pale', '10');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `glassgow_coma_scale`
--
ALTER TABLE `glassgow_coma_scale`
  ADD PRIMARY KEY (`glassgow_coma_scale_id`);

--
-- Indexes for table `medical_supply_stocks`
--
ALTER TABLE `medical_supply_stocks`
  ADD PRIMARY KEY (`stock_id`);

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
-- Indexes for table `timeinout`
--
ALTER TABLE `timeinout`
  ADD PRIMARY KEY (`timeinout_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vital_signs`
--
ALTER TABLE `vital_signs`
  ADD PRIMARY KEY (`vital_signs_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `assessment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `call_logs`
--
ALTER TABLE `call_logs`
  MODIFY `call_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `db_backup`
--
ALTER TABLE `db_backup`
  MODIFY `back_up_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dispatch`
--
ALTER TABLE `dispatch`
  MODIFY `dispatch_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `glassgow_coma_scale`
--
ALTER TABLE `glassgow_coma_scale`
  MODIFY `glassgow_coma_scale_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `medical_supply_stocks`
--
ALTER TABLE `medical_supply_stocks`
  MODIFY `stock_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `past_medical_history`
--
ALTER TABLE `past_medical_history`
  MODIFY `past_med_his_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `refusal_treatment`
--
ALTER TABLE `refusal_treatment`
  MODIFY `refusal_treatment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `request_transport`
--
ALTER TABLE `request_transport`
  MODIFY `request_transport_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `timeinout`
--
ALTER TABLE `timeinout`
  MODIFY `timeinout_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;
--
-- AUTO_INCREMENT for table `vital_signs`
--
ALTER TABLE `vital_signs`
  MODIFY `vital_signs_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
