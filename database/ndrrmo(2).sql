-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2018 at 05:01 PM
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
(6, 'Shit', 'Shit', 'Shit', '1 - Emergent', 'Treated and Released / transferred care CLMMRH', 'O2 Administered   12 12          ', 9);

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
  `enroute` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dispatch`
--

INSERT INTO `dispatch` (`dispatch_id`, `service_no`, `date_time_call`, `ambulance`, `dispatched_for`, `call_location`, `moi_noi`, `patients_on_scene`, `on_board_tl`, `ems`, `driver`, `care_in_progress`, `mass_casualty`, `enroute`) VALUES
(1, '10000', '08/25/2018 11:32 AM', 'Samaritan 1', 'Airway Obstruction', 'Bacolod City', '100', '100', '100', '100', 'Driver A', 'Citizen', 'on', '11:34 am'),
(2, '1009', '08/25/2018 1:41 PM', 'Samaritan 1', 'Airway Obstruction', 'Bacolod City', '123', '123', '123', '123', 'Driver B', 'Citizen', 'No', '1:41 pm'),
(3, '123', '09/01/2018 12:31 AM', 'Samaritan 1', 'Hypertension', 'Bacolod City', '12', '12', '12', '12', 'Driver A', 'Citizen', 'No', '12:31 am'),
(4, '10009', '09/01/2018 12:38 AM', 'Samaritan 1', 'Stroke/CVA', '12', '12', '12', '12', '12', '12', 'Citizen', 'Yes', '12:38 am');

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
(6, 4, 4, 4, 9);

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
(6, '12', '12', '12', '12', '12', 'Extrication Required', 9);

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
(10, 'Patient H', '12', 'Male', '09/11/2018', '4332449', 'Bacolod City', 'Test', 'Test', 'Allergies', '3', 'Unassessed');

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
(1, 'Kurt Dela Torre', 'Alkaid Lamig', 'Peter Sacayle', '09-03-2018', 'This is a statement', 'Legal Documents', 'Alson John Bayon-on'),
(2, 'Peter Dela Cruz', 'Juan Lopez', 'Pedro Araneta', '09/03/2018 11:33 PM', 'This is a statement', 'None', 'Alson John Bayon-on'),
(3, 'Carl Betio', 'Jay Alvin Galoyo', 'Alvin Yanson', '09/03/2018 11:36 PM', 'This is a statement', 'None', 'Gabriel Banua'),
(4, 'Erul John Ubas', 'Alvin Yanson', 'Gabriel Banua', '09/03/2018 11:36 PM', '', 'None', 'Alson John Bayon-on');

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
  `approval` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_transport`
--

INSERT INTO `request_transport` (`request_transport_id`, `date_time`, `requesting_party`, `contact_no`, `patient_name`, `address`, `age`, `gender`, `medical_history`, `special_considerations`, `froma`, `toa`, `fromb`, `gcs`, `bp`, `rr`, `pr`, `sat`, `requesting_approval`, `approval`) VALUES
(5, '09/03/2018 6:51 PM', 'Party YUI', '4332449', 'Pedro Araneta', 'fortune town bacolod city', '29', 'Male', 'geqjhwg', 'Chest Tube Drainage', 'eqweq', 'qweqw', 'weqweqw', 'eqweqw', 'eqweq', 'qeweq', 'qewq', 'qweqw', 'eqweqw', 'eqweqw'),
(6, '09/03/2018 6:52 PM', 'Party E', '1234', 'Patient H', 'Margarita Street', '28', 'Male', 'None', 'Catheter', 'Bacolod City', 'Bacolod City', 'Bacolod City', '12', '12', '12', '12', '12', 'Kurt Dela Torre', 'Alkaid Lamig'),
(7, '09/01/2018 1:32 PM', 'Party GGG', '4332449', 'Pedro Colmenares', 'Andalucia Street', '28', 'Male', 'None', 'Chest Tube Drainage', 'Bacolod City', 'Bacolod City', 'Bacolod City', '10', '10', '10', '10', '10', 'Doctor A', 'Doctor B'),
(8, '09/01/2018 2:11 PM', 'Party G', '4332449', 'Patient DFG', 'Bugnay Rd. Villamonte', '20', 'Male', 'None', 'Chest Tube Drainage', '12', '12', '12', '12', '12', '121', '12', '12', 'Dr. Delatorre', 'Dr. Delatorre'),
(9, '09/02/2018 10:55 AM', 'Three Propis', '433-2449', 'Juan Dela Cruz', 'Lizares Avenue, Bacolod City', '28', 'Male', 'None', '', 'Lizares Avenue, Bacolod City', 'Margarita St., Bacolod City', 'Lizares Avenue, Bacolod City', '12', '12', '12', '12', '12', 'Alson John Bayon-on', 'Carl Betio'),
(10, '09/02/2018 8:22 PM', 'Party ZXC', '433-2449', 'Pedro Dela Cruz', 'Balboa St, Bacolod City, Negros Occidental, Philippines', '20', 'Male', 'None', 'Catheter', 'Balboa St, Bacolod City, Negros Occidental, Philippines', 'Balboa St, Bacolod City, Negros Occidental, Philippines', 'Balboa St, Bacolod City, Negros Occidental, Philippines', '12', '12', '12', '12', '12', 'Peter Sacayle', 'Peter Sacayle'),
(11, '09/03/2018 7:08 PM', 'Party RTY', '433-2449', 'Patient DFG', 'Felisa, Bacolod City, Negros Occidental, Philippines', '20', 'Male', 'None', 'Colostomy', 'Test', 'Test', 'Test', '12', '12', '12', '12', '12', 'Alvin', 'Alvin'),
(12, '09/03/2018 10:20 PM', 'Party Party', '4332449', 'Patient CVB', 'Burgos St, Bacolod City, Negros Occidental, Philippines', '12', 'Male', '12', '02', '12', '12', '12', '12', '12', '12', '12', '12', '12', '12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_role`) VALUES
(133, 'kurt', 'delatorre', 'Administrator'),
(134, 'carls', 'betio', 'Administrator'),
(135, 'alson', 'bayon-on', 'Administrator');

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
(6, '', 'Voice', '12', '12', '12', '12', '12', '12', 'Constricted - L', 'Warm', '9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`assessment_id`);

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
  MODIFY `assessment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dispatch`
--
ALTER TABLE `dispatch`
  MODIFY `dispatch_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `glassgow_coma_scale`
--
ALTER TABLE `glassgow_coma_scale`
  MODIFY `glassgow_coma_scale_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `past_medical_history`
--
ALTER TABLE `past_medical_history`
  MODIFY `past_med_his_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `refusal_treatment`
--
ALTER TABLE `refusal_treatment`
  MODIFY `refusal_treatment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `request_transport`
--
ALTER TABLE `request_transport`
  MODIFY `request_transport_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
--
-- AUTO_INCREMENT for table `vital_signs`
--
ALTER TABLE `vital_signs`
  MODIFY `vital_signs_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
