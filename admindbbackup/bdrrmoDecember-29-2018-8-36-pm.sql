DROP TABLE ambulance;

CREATE TABLE `ambulance` (
  `ambulance_id` int(10) NOT NULL AUTO_INCREMENT,
  `plate_no` varchar(20) NOT NULL,
  `model` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`ambulance_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO ambulance VALUES("1","WRT210","Ambulance - Model A","Unbooked"); 
INSERT INTO ambulance VALUES("2","FYT291","Ambulance - Model B","Unbooked"); 



DROP TABLE assessment;

CREATE TABLE `assessment` (
  `assessment_id` int(10) NOT NULL AUTO_INCREMENT,
  `chief_complaints` varchar(255) NOT NULL,
  `subjective_assessment` varchar(255) NOT NULL,
  `objective_assessment` varchar(255) NOT NULL,
  `priority_level` varchar(50) NOT NULL,
  `patient_disposition` varchar(255) NOT NULL,
  `interventions` varchar(255) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`assessment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO assessment VALUES("1","Test","Test","Test","1 - Emergent","Call Cancelled","Moved to ambulance on stretcher/backboard              ","1"); 
INSERT INTO assessment VALUES("2","From mobile","From mobile","From mobile","2 - Urgent","Treated and Released / transferred care","ET Tube 12 12            ","2"); 
INSERT INTO assessment VALUES("3","123","123","123","3 - Non-urgent","Treated and Released / transferred care ","ET Tube Tube - 100 Level 1            ","3"); 
INSERT INTO assessment VALUES("4","123","123","123","2 - Urgent","Treated and Released / transferred care CLMMRH","ET Tube 12 12            ","4"); 
INSERT INTO assessment VALUES("5","Test","Test","Test","1 - Emergent","Treated and Released / transferred care Riverside","CPR       100 08/25/2018 2:11 PM      ","5"); 
INSERT INTO assessment VALUES("6","Shit","Shit","Shit","1 - Emergent","Treated and Released / transferred care CLMMRH","O2 Administered   12 12          ","9"); 
INSERT INTO assessment VALUES("7","Assessment","Assessment","Assessment","1 - Emergent","Refused Treatment ","Airway Cleared              ","10"); 
INSERT INTO assessment VALUES("8","Best Thesis","Best Thesis","Best Thesis","2 - Urgent","No Treatment Required ","O2 Administered   12 12          ","11"); 
INSERT INTO assessment VALUES("9","Test","Test","Test","3 - Non-urgent","No Treatment Required ","Walked to ambulance              ","12"); 
INSERT INTO assessment VALUES("10","qwe","qwe","qwe","1 - Emergent","Treated / transport to facility ","Moved to ambulance on stretcher/backboard              ","13"); 
INSERT INTO assessment VALUES("11","12","12","12","2 - Urgent","Treated / transport to facility ","Moved to ambulance on stretcher/backboard              ","7"); 
INSERT INTO assessment VALUES("12","Test","Test","Test","1 - Emergent","Refused Treatment ","Moved to ambulance on stretcher/backboard              ","14"); 
INSERT INTO assessment VALUES("13","Test","Test","Test","1","No Treatment Required ","Moved to ambulance on stretcher/backboard              ","15"); 
INSERT INTO assessment VALUES("14","Test","Test","Test","2","No Treatment Required ","OPA / NPA used              ","16"); 
INSERT INTO assessment VALUES("15","Test","Test","Test","1","Treated / transport to facility ","Moved to ambulance on stretcher/backboard              ","17"); 
INSERT INTO assessment VALUES("16","None","None","None","3","Treated / transport to facility ","Moved to ambulance on stretcher/backboard              ","18"); 
INSERT INTO assessment VALUES("17","1","1","1","2","Not of legal age /minor ","OPA / NPA used              ","21"); 
INSERT INTO assessment VALUES("18","1","1","1","3","Behavioral / altered mental status ","ET Tube 1 1            ","22"); 



DROP TABLE call_logs;

CREATE TABLE `call_logs` (
  `call_id` int(10) NOT NULL AUTO_INCREMENT,
  `date_time_call` varchar(50) NOT NULL,
  `complete_address` varchar(100) NOT NULL,
  `emergency` varchar(100) NOT NULL,
  `caller_name` varchar(50) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  PRIMARY KEY (`call_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO call_logs VALUES("1","09/16/2018 11:49 AM","Lizares Avenue, Bacolod City","Accident near 7/112","Kurt Dela Torre","4332449"); 
INSERT INTO call_logs VALUES("2","09/16/2018 11:49 AM","Lacson Avenue, Bacolod City, Negros Occidental, Philippines","Accident sa may Lacson","Peter Sacayle","4332449"); 
INSERT INTO call_logs VALUES("3","09/16/2018 11:56 AM","Balboa St. Eroreco, Bacolod City","Fire","Alkaid Lamig","4332449"); 
INSERT INTO call_logs VALUES("4","09/19/2018 11:51 PM","Banago, Negros Occidental, Philippines","Test","Test","Test"); 
INSERT INTO call_logs VALUES("5","10/14/2018 12:48 AM","Andalucia St., Bacolod City, Negros Occidental, Philippines","Test","Test","Test"); 
INSERT INTO call_logs VALUES("6","11/01/2018 11:57 AM","Burgos St, Bacolod City, Negros Occidental, Philippines","Test","Kurt Dela Torre","4332449"); 
INSERT INTO call_logs VALUES("7","11/01/2018 12:01 PM","Sum-ag Bacolod City","Test","Kurt Dela Torre","4332449"); 
INSERT INTO call_logs VALUES("8","11/01/2018 12:10 PM","Brgy. Langis, Banago, Bacolod City","Test","Kurt Dela Torre","4332449"); 
INSERT INTO call_logs VALUES("9","11/01/2018 4:04 PM","Burgos St., Bacolod City","Test","Kurt Dela Torre","4332449"); 
INSERT INTO call_logs VALUES("10","11/02/2018 3:18 PM","Barangay Cabug, Handumanan, Bacolod City","Test","Kurt Dela Torre","4332449"); 
INSERT INTO call_logs VALUES("11","12/06/2018 6:45 PM","Lizares Avenue, Bacolod City","Test","Kurt Dela Torre","433-2449"); 
INSERT INTO call_logs VALUES("12","12/06/2018 6:48 PM","Hernaez St., Bacolod City","Test","Kurt Dela Torre","433-2449"); 
INSERT INTO call_logs VALUES("13","12/22/2018 11:01 AM","Lizares Avenue, Bacolod City, Negros Occidental, Philippines","Test","Kurt Dela Torre","4332449"); 



DROP TABLE db_backup;

CREATE TABLE `db_backup` (
  `back_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `activity` varchar(15) NOT NULL,
  `date` varchar(12) NOT NULL,
  `time` varchar(12) NOT NULL,
  `activity_status` varchar(100) NOT NULL,
  PRIMARY KEY (`back_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

INSERT INTO db_backup VALUES("29","182","Import","December 24,","10:40 pm","Successfully Imported Database"); 
INSERT INTO db_backup VALUES("30","182","Export","December 24,","10:40 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("31","182","Import","December 24,","10:40 pm","Successfully Imported Database"); 
INSERT INTO db_backup VALUES("32","182","Export","December 29,","8:36 pm","Successfully Exported Database"); 



DROP TABLE dispatch;

CREATE TABLE `dispatch` (
  `dispatch_id` int(10) NOT NULL AUTO_INCREMENT,
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
  `longi` varchar(100) NOT NULL,
  PRIMARY KEY (`dispatch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

INSERT INTO dispatch VALUES("1","10000","08/25/2018 11:32 AM","Samaritan 1","Airway Obstruction","Andalucia Street, Bacolod City","100","100","100","100","Driver A","Citizen","on","11:34 am","August 17, 2018 07:44 pm","Aug","2018","10.6820461","122.969601"); 
INSERT INTO dispatch VALUES("2","10092","08/25/2018 1:41 PM","Samaritan 1","Airway Obstruction","Margarita Street, Bacolod City","123","123","123","123","Driver B","Citizen","No","1:41 pm","August 17, 2018 08:44 pm","Aug","2018","10.659050","122.951010"); 
INSERT INTO dispatch VALUES("3","123","09/01/2018 12:31 AM","Samaritan 1","Hypertension","Margarita Street, Bacolod","12","12","12","12","Driver A","Citizen","No","12:31 am","August 17, 2018 10:10 am","Aug","2018","10.659050","122.951010"); 
INSERT INTO dispatch VALUES("4","100013213","09/01/2018 12:38 AM","Samaritan 1","Stroke/CVA","Lizares Avenue, Bacolod City","12","12","12","12","Driver ABC","Citizen","Yes","12:38 am","September 15, 2018 10:30 am","Sep","2018","10.6597439","122.9458409"); 
INSERT INTO dispatch VALUES("5","1234","09/07/2018 12:25 PM","Samaritan 2","Airway Obstruction","Hernaez Street, Bacolod City","100","100","100","Kurt Dela Torre","Driver A","Citizen","Yes","12:25 pm","September 16, 2018 10:50 am","Sep","2018","122.9470662","122.9470662"); 
INSERT INTO dispatch VALUES("6","1099","09/07/2018 5:36 PM","Samaritan 1","Airway Obstruction","Taculing Barangay Hall, Bacolod City","109","109","109","EMS","Driver ABC","Citizen","Yes","5:37 pm","September 17, 2018 12:44 pm","Sep","2018","10.6493125","122.9472441"); 
INSERT INTO dispatch VALUES("7","100022","09/17/2018 11:10 AM","Samaritan 1","Hypertension","Santa Clara St, Mandalagan","12","1","12","Test","Driver A","Citizen","Yes","11:12 am","September 17, 2018 09:44 pm","Sep","2018","10.6839315","122.970513"); 
INSERT INTO dispatch VALUES("8","123456789","09/23/2018 6:30 PM","Samaritan 1","Stroke/CVA","Lizares Avenue, Bacolod City","20","10","10","10","Driver ABC","Medical Practicioner / First Aider","No","6:30 pm","September 23, 2018 10:44 am","Sep","2018","10.6597439","122.9458409"); 
INSERT INTO dispatch VALUES("9","100999","09/27/2018 12:11 AM","Samaritan 1","Hypertension","Lizares Avenue, Bacolod City","12","12","12","Kurt Dela Torre","Alkaid Lamig","Citizen","No","12:11 am","September 26, 2018 11:44 pm","Sep","2018","10.6597439","122.9458409"); 
INSERT INTO dispatch VALUES("10","121319","09/27/2018 12:23 AM","Samaritan 2","Allergic Reaction","Fiesta Homes Subd., Sum-ag, Bacolod City","12","12","12","Alkaid Lamig","Peter Sacayle","None","No","12:24 am","September 26, 2018 11:44 pm","Sep","2018","10.5964456","122.9181648"); 
INSERT INTO dispatch VALUES("14","2131","09/30/2018 11:28 PM","Samaritan 2","Respiratory Arrest","Hernaez Street, Bacolod City","Kurt Dela Torre","1","1","Peter Sacayle","Alkaid Lamig","Medical Practicioner / First Aider","No","11:29 pm","September 30, 2018 11:29 pm","Sep","2018","10.6618945","122.9471239"); 
INSERT INTO dispatch VALUES("17","100","11/01/2018 10:20 AM","Samaritan 2","Airway Obstruction","Lizares Avenue, Bacolod City, Negros Occidental, Philippines","12","12","12","12","Kurt Dela Torre","Citizen","No","10:20 am","November 1, 2018 10:20 am","Nov","2018","10.6597439","122.9458409"); 
INSERT INTO dispatch VALUES("18","213","11/01/2018 10:23 AM","Samaritan 2","Respiratory Arrest","Lizares Avenue, Bacolod City, Negros Occidental, Philippines","12","12","12","12","Kurt Dela Torre","Medical Practicioner / First Aider","No","10:23 am","November 1, 2018 10:23 am","Nov","2018","10.6597439","122.9458409"); 
INSERT INTO dispatch VALUES("19","123123","11/01/2018 10:29 AM","Samaritan 2","Airway Obstruction","Lizares Avenue, Bacolod City, Negros Occidental, Philippines","12","12","12","12","Kurt Dela Torre","Other Rescue Unit","No","10:29 am","November 1, 2018 10:29 am","Nov","2018","10.6597439","122.9458409"); 
INSERT INTO dispatch VALUES("22","12","11/01/2018 10:47 AM","Samaritan 2","Respiratory Arrest","Fiesta Homes Subd., Sum-ag, Bacolod City","12","1","1","1","Kurt Dela Torre","Medical Practicioner / First Aider","No","10:47 am","November 1, 2018 10:47 am","Nov","2018","10.5964456","122.9181648"); 
INSERT INTO dispatch VALUES("23","12","11/01/2018 11:02 AM","Samaritan 2","Respiratory Distress","Casiana St, Bacolod City, Negros Occidental, Philippines","1","1","1","1","Kurt Dela Torre","Medical Practicioner / First Aider","No","11:02 am","November 1, 2018 11:02 am","Nov","2018","10.6809427","122.9696005"); 
INSERT INTO dispatch VALUES("47","1","11/01/2018 3:13 PM","Samaritan 2","Respiratory Arrest","Brgy. Langis, Banago, Bacolod City","1","1","1","1","Kurt Dela Torre","Other Rescue Unit","No","3:13 pm","November 1, 2018 3:13 pm","Nov","2018","10.705689","122.94957899999997"); 
INSERT INTO dispatch VALUES("48","111111","11/01/2018 4:04 PM","Samaritan 2","Respiratory Distress","Burgos St., Bacolod City","1","2","2","2","Alkaid Lamig","Citizen","No","4:04 pm","November 1, 2018 4:04 pm","Nov","2018","10.6660895","123.03325859999995"); 
INSERT INTO dispatch VALUES("49","10001","11/02/2018 3:20 PM","Samaritan 2","Cardiac Related","Balboa St., Bacolod City, Negros Occidental","1","1","1","1","Alkaid Lamig","Medical Practicioner / First Aider","No","3:20 pm","November 2, 2018 3:20 pm","Nov","2018","10.5986421","122.94745080000007"); 
INSERT INTO dispatch VALUES("50","10001","November 6, 2018 10:42 pm","Samaritan 2","Behavioral Changes","Barangay Cabug, Handumanan, Bacolod City","1","1","1","1","Alkaid Lamig","Citizen","No","10:42 pm","November 6, 2018 10:42 pm","Nov","2018","10.5986421","122.94745080000007"); 
INSERT INTO dispatch VALUES("51","100901","December 22, 2018 11:02 am","Ambulance - Model B","Stroke/CVA","Lizares Avenue, Bacolod City, Negros Occidental, Philippines","1","1","1","1","Alkaid Lamig","Citizen","No","11:02 am","December 22, 2018 11:02 am","Dec","2018","",""); 



DROP TABLE driver;

CREATE TABLE `driver` (
  `driver_id` int(10) NOT NULL AUTO_INCREMENT,
  `driver_name` varchar(100) NOT NULL,
  `age` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `duty_hours` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`driver_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO driver VALUES("1","Kurt Dela Torre","21","male","9:00 AM - 9:00 PM","Unbooked"); 
INSERT INTO driver VALUES("2","Alkaid Lamig","21","Male","9:00 PM - 9:00 AM","Unbooked"); 
INSERT INTO driver VALUES("3","Peter Sacayle","21","Male","9:00 AM - 9:00 PM","Booked"); 



DROP TABLE glassgow_coma_scale;

CREATE TABLE `glassgow_coma_scale` (
  `glassgow_coma_scale_id` int(10) NOT NULL AUTO_INCREMENT,
  `time` varchar(10) NOT NULL,
  `eye` int(10) NOT NULL,
  `verbal` int(10) NOT NULL,
  `motor` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`glassgow_coma_scale_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO glassgow_coma_scale VALUES("1","12:45 pm","3","3","5","1"); 
INSERT INTO glassgow_coma_scale VALUES("2","12:45 pm","2","3","5","2"); 
INSERT INTO glassgow_coma_scale VALUES("3","12:45 pm","4","4","3","3"); 
INSERT INTO glassgow_coma_scale VALUES("4","12:45 pm","3","3","3","4"); 
INSERT INTO glassgow_coma_scale VALUES("5","12:45 pm","3","4","4","5"); 
INSERT INTO glassgow_coma_scale VALUES("6","12:45 pm","4","4","4","9"); 
INSERT INTO glassgow_coma_scale VALUES("7","11:39 pm","3","4","5","10"); 
INSERT INTO glassgow_coma_scale VALUES("8","11:39 pm","2","2","6","11"); 
INSERT INTO glassgow_coma_scale VALUES("9","11:39 pm","3","3","4","12"); 
INSERT INTO glassgow_coma_scale VALUES("10","11:39 pm","2","4","5","13"); 
INSERT INTO glassgow_coma_scale VALUES("11","11:39 pm","2","3","4","7"); 
INSERT INTO glassgow_coma_scale VALUES("12","11:39 pm","2","2","4","14"); 
INSERT INTO glassgow_coma_scale VALUES("13","11:39 pm","3","4","4","15"); 
INSERT INTO glassgow_coma_scale VALUES("14","11:39 pm","3","2","4","16"); 
INSERT INTO glassgow_coma_scale VALUES("15","11:29 pm","1","1","1","17"); 
INSERT INTO glassgow_coma_scale VALUES("16","11:29 pm","3","3","5","18"); 
INSERT INTO glassgow_coma_scale VALUES("17","11:29 pm","3","5","4","21"); 
INSERT INTO glassgow_coma_scale VALUES("18","11:29 pm","3","2","6","22"); 
INSERT INTO glassgow_coma_scale VALUES("19","11:29 pm","3","3","5","22"); 
INSERT INTO glassgow_coma_scale VALUES("20","11:29 pm","3","3","5","23"); 
INSERT INTO glassgow_coma_scale VALUES("21","10:19 pm","2","4","3","23"); 
INSERT INTO glassgow_coma_scale VALUES("22","10:20 pm","2","4","6","23"); 



DROP TABLE items_used;

CREATE TABLE `items_used` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `dispatch_id` int(10) NOT NULL,
  `medical_supply_name` varchar(50) NOT NULL,
  `quantity_used` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO items_used VALUES("1","17","Alcohol","2"); 
INSERT INTO items_used VALUES("2","17","Cotton","0"); 
INSERT INTO items_used VALUES("3","17","Sample","2"); 
INSERT INTO items_used VALUES("4","17","Sample","2"); 
INSERT INTO items_used VALUES("5","47","Sample","2"); 
INSERT INTO items_used VALUES("6","47","Cotton","10"); 
INSERT INTO items_used VALUES("7","47","Alcohol","5"); 
INSERT INTO items_used VALUES("8","17","Shit","10"); 
INSERT INTO items_used VALUES("9","22","Cotton","2"); 
INSERT INTO items_used VALUES("10","22","Cotton","2"); 
INSERT INTO items_used VALUES("11","22","Cotton","6"); 
INSERT INTO items_used VALUES("12","3","Alcohol","105"); 
INSERT INTO items_used VALUES("13","3","Test","105"); 
INSERT INTO items_used VALUES("14","23","Cotton","2"); 
INSERT INTO items_used VALUES("15","23","Shit","2"); 
INSERT INTO items_used VALUES("16","17","Betadine","3"); 



DROP TABLE medical_supply_request;

CREATE TABLE `medical_supply_request` (
  `medical_supply_request_id` int(10) NOT NULL AUTO_INCREMENT,
  `medical_supply_name` varchar(100) NOT NULL,
  `requested_quantity` varchar(10) NOT NULL,
  `date_requested` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `date_approved` varchar(50) NOT NULL,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`medical_supply_request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO medical_supply_request VALUES("1","Sample","100","October 14, 2018 8:44 pm","Approved","Oct","2018","October 21, 2018 10:07 pm","183"); 
INSERT INTO medical_supply_request VALUES("2","Cotton","20","October 14, 2018 8:55 pm","Approved","Oct","2018","November 2, 2018 4:02 pm","183"); 
INSERT INTO medical_supply_request VALUES("4","Cotton","20","October 14, 2018 8:56 pm","Approved","Oct","2018","November 2, 2018 4:05 pm","183"); 
INSERT INTO medical_supply_request VALUES("5","Betadine","200","October 19, 2018 7:48 pm","Approved","Oct","2018","December 1, 2018 7:42 pm","183"); 
INSERT INTO medical_supply_request VALUES("6","Test","100","October 19, 2018 8:27 pm","Approved","Oct","2018","","183"); 
INSERT INTO medical_supply_request VALUES("7","Test","20","October 21, 2018 9:09 pm","Approved","Oct","2018","October 21, 2018 9:12 pm","183"); 
INSERT INTO medical_supply_request VALUES("8","Sample","100","November 1, 2018 6:17 pm","Approved","Nov","2018","November 2, 2018 3:39 pm","183"); 
INSERT INTO medical_supply_request VALUES("9","Sample","50","December 1, 2018 7:35 pm","Approved","Dec","2018","December 1, 2018 7:37 pm","183"); 
INSERT INTO medical_supply_request VALUES("10","Alcohol","10","December 3, 2018 11:24 pm","Approved","Dec","2018","December 3, 2018 11:25 pm","183"); 
INSERT INTO medical_supply_request VALUES("11","Cotton","15","December 3, 2018 11:27 pm","Approved","Dec","2018","December 3, 2018 11:27 pm","183"); 
INSERT INTO medical_supply_request VALUES("13","Sample","10","December 8, 2018 10:32 pm","Approved","Dec","2018","December 29, 2018 5:58 pm","183"); 
INSERT INTO medical_supply_request VALUES("14","Sample","5","December 8, 2018 10:33 pm","Pending","Dec","2018","December 29, 2018 6:41 pm","184"); 



DROP TABLE medical_supply_stocks;

CREATE TABLE `medical_supply_stocks` (
  `stock_id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_id` int(10) NOT NULL,
  `medical_supply_name` varchar(100) NOT NULL,
  `medical_supply_description` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `running_balance` int(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date_created` varchar(50) NOT NULL,
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO medical_supply_stocks VALUES("1","136","Alcohol","This is Alcohol","Savemore","53","Reorder","September 23, 2018"); 
INSERT INTO medical_supply_stocks VALUES("2","136","Cotton","This is Cotton","Libra","28","Reorder","September 23, 2018"); 
INSERT INTO medical_supply_stocks VALUES("3","136","Betadine","This is Betadine","PureGold","100","Reorder","September 23, 2018"); 
INSERT INTO medical_supply_stocks VALUES("4","136","Shit","Shit","Shit","200","Reorder","September 23, 2018"); 
INSERT INTO medical_supply_stocks VALUES("5","136","Sample","Sample","Sample","0","Reorder","September 23, 2018"); 
INSERT INTO medical_supply_stocks VALUES("6","136","Test","This is Test","Avon","365","Reorder","September 25, 2018"); 
INSERT INTO medical_supply_stocks VALUES("7","182","Band Aid","Band Aid","Watsons","0","Reorder","December 8, 2018"); 



DROP TABLE medical_supply_stocks_emt;

CREATE TABLE `medical_supply_stocks_emt` (
  `stock_id` int(10) NOT NULL AUTO_INCREMENT,
  `medical_supply_name` varchar(100) NOT NULL,
  `medical_supply_description` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `running_balance` int(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO medical_supply_stocks_emt VALUES("1","Alcohol","This is Alcohol","Savemore","40","Reorder"); 
INSERT INTO medical_supply_stocks_emt VALUES("2","Cotton","This is Cotton","Libra","18","Reorder"); 
INSERT INTO medical_supply_stocks_emt VALUES("3","Betadine","This is Betadine","PureGold","207","Reorder"); 
INSERT INTO medical_supply_stocks_emt VALUES("5","Sample","Sample","Sample","111","Reorder"); 
INSERT INTO medical_supply_stocks_emt VALUES("6","Test","This is Test","Avon","400","Reorder"); 



DROP TABLE pain_assessment;

CREATE TABLE `pain_assessment` (
  `pain_assessment_id` int(10) NOT NULL AUTO_INCREMENT,
  `onset` varchar(100) NOT NULL,
  `pain` varchar(100) NOT NULL,
  `quality` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `severity` varchar(100) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`pain_assessment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO pain_assessment VALUES("1","Onset","Pain","Quality","Region","10","13"); 
INSERT INTO pain_assessment VALUES("2","12","12","12","12","8","7"); 
INSERT INTO pain_assessment VALUES("3","21","21","21","21","9","14"); 
INSERT INTO pain_assessment VALUES("4","12","12","12","12","1","15"); 
INSERT INTO pain_assessment VALUES("5","12","12","12","12","1","16"); 
INSERT INTO pain_assessment VALUES("6","12","12","12","12","1","17"); 
INSERT INTO pain_assessment VALUES("7","12","12","12","12","7","18"); 
INSERT INTO pain_assessment VALUES("8","1","1","1","1","3","21"); 
INSERT INTO pain_assessment VALUES("9","1","1","1","1","6","22"); 



DROP TABLE past_medical_history;

CREATE TABLE `past_medical_history` (
  `past_med_his_id` int(10) NOT NULL AUTO_INCREMENT,
  `allergy` varchar(50) NOT NULL,
  `medications` varchar(50) NOT NULL,
  `phistory` varchar(50) NOT NULL,
  `last_oral_intake` varchar(50) NOT NULL,
  `events_leading_to` varchar(50) NOT NULL,
  `notes` varchar(50) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`past_med_his_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO past_medical_history VALUES("1","90","90","90","90","90","VA seatbelt used","1"); 
INSERT INTO past_medical_history VALUES("2","12","12","12","12","12","VA seatbelt used","2"); 
INSERT INTO past_medical_history VALUES("3","12","12","12","12","12","VA seatbelt used","3"); 
INSERT INTO past_medical_history VALUES("4","12","12","12","12","12","VA seatbelt used","4"); 
INSERT INTO past_medical_history VALUES("5","12","12","12","12","12","VA seatbelt used","5"); 
INSERT INTO past_medical_history VALUES("6","12","12","12","12","12","Extrication Required","9"); 
INSERT INTO past_medical_history VALUES("7","20","20","20","20","20","VA seatbelt used","10"); 
INSERT INTO past_medical_history VALUES("8","12","12","12","12","12","Extrication Required","11"); 
INSERT INTO past_medical_history VALUES("9","12","12","12","12","12","VA seatbelt used","12"); 
INSERT INTO past_medical_history VALUES("10","12","12","12","12","12","Extrication Required","13"); 
INSERT INTO past_medical_history VALUES("11","12","12","12","12","12","VA seatbelt used","7"); 
INSERT INTO past_medical_history VALUES("12","12","12","12","12","12","Extrication Required","14"); 
INSERT INTO past_medical_history VALUES("13","12","12","12","12","12","Extrication Required","15"); 
INSERT INTO past_medical_history VALUES("14","12","12","12","12","12","VA seatbelt used","16"); 
INSERT INTO past_medical_history VALUES("15","12","12","12","12","12","Extrication Required","17"); 
INSERT INTO past_medical_history VALUES("16","None","None","None","None","None","Helmet","18"); 
INSERT INTO past_medical_history VALUES("17","1","1","1","1","1","Extrication Required","21"); 
INSERT INTO past_medical_history VALUES("18","1","1","1","1","1","Extrication Required","22"); 



DROP TABLE patient;

CREATE TABLE `patient` (
  `patient_id` int(10) NOT NULL AUTO_INCREMENT,
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
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

INSERT INTO patient VALUES("1","Patient A","12","Male","08/08/2000","4332449","Bacolod City","Test","Test","Allergies","1","Assessed"); 
INSERT INTO patient VALUES("2","Patient B","12","Male","08/16/2018","4332449","Bacolod City","Test","Test","DNR","1","Assessed"); 
INSERT INTO patient VALUES("3","Patient C","12","Male","08/16/2000","4332449","Bacolod City","Test","Test","Allergies","2","Assessed"); 
INSERT INTO patient VALUES("4","Patient D","12","Male","08/14/2018","4332449","Bacolod City","Test","Test","Organ Donor","2","Assessed"); 
INSERT INTO patient VALUES("5","Patient E","12","Male","08/08/2018","4332449","Bacolod City","Test","Test","Allergies","2","Assessed"); 
INSERT INTO patient VALUES("6","Patient F","12","Male","08/08/2018","4332449","Bacolod City","Test","Test","None","2","Unassessed"); 
INSERT INTO patient VALUES("7","Patient L","12","Male","08/14/2018","4332449","Bacolod City","Test","Test","Organ Donor","1","Assessed"); 
INSERT INTO patient VALUES("8","Patient H","12","Male","08/13/2018","4332449","bacolod City","Test","Test","Allergies","2","Unassessed"); 
INSERT INTO patient VALUES("9","Patient M","12","Male","08/23/2018","4332449","Bacolod City","Sample","Sample","Allergies","2","Assessed"); 
INSERT INTO patient VALUES("10","Patient H","12","Male","09/11/2018","4332449","Bacolod City","Test","Test","Allergies","3","Assessed"); 
INSERT INTO patient VALUES("11","Alkaid Lamig","21","Male","09/16/2018","4332449","Bacolod City","Peter Sacayle","Brother","None","3","Assessed"); 
INSERT INTO patient VALUES("12","Patient G","20","Male","09/10/2018","4332449","Bacolod","Test","Test","DNR","3","Assessed"); 
INSERT INTO patient VALUES("13","Kurt Dela Torre","20","Male","10/01/2018","4332449","Lizares Avenue, Bacolod City","Test","Test","Organ Donor","6","Assessed"); 
INSERT INTO patient VALUES("14","Patient DFG","30","Male","10/11/2018","4332449","Bacolod City ","Test","Test","Allergies","1","Assessed"); 
INSERT INTO patient VALUES("15","Patient GHJ","32","Male","10/28/2018","4332449","Bacolod City","Test","Test","DNR","1","Assessed"); 
INSERT INTO patient VALUES("16","Patient VBN","20","Male","10/15/2018","4332449","Bacolod City","Test","Test","Allergies","1","Assessed"); 
INSERT INTO patient VALUES("17","Patient GHJ","12","Male","10/09/2018","4332449","Bacolod City","Test","Test","Allergies","1","Assessed"); 
INSERT INTO patient VALUES("18","Patient DFG","23","Male","10/08/2018","4332449","Bacolod City","Test","Test","DNR","4","Assessed"); 
INSERT INTO patient VALUES("19","Patient JKL","20","Male","10/14/2018","4332449","Bacolod City","Test","Test","Allergies","1","Unassessed"); 
INSERT INTO patient VALUES("20","Patient BNM","20","Male","10/01/2018","4332449","Bacolod City","Test","Test","Allergies","4","Unassessed"); 
INSERT INTO patient VALUES("22","Patient YTS","20","Male","11/05/2018","4332449","Bacolod City","Test","Test","Allergies","17","Assessed"); 
INSERT INTO patient VALUES("23","Patient JHG","12","Male","11/05/2018","4332449","Bacolod City","Yes","Yes","Allergies","17","Unassessed"); 



DROP TABLE refusal_treatment;

CREATE TABLE `refusal_treatment` (
  `refusal_treatment_id` int(10) NOT NULL AUTO_INCREMENT,
  `signed` varchar(50) NOT NULL,
  `witness1` varchar(50) NOT NULL,
  `witness2` varchar(50) NOT NULL,
  `date_incident` varchar(50) NOT NULL,
  `statements` varchar(255) NOT NULL,
  `attachment` varchar(50) NOT NULL,
  `prepared_by` varchar(50) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  PRIMARY KEY (`refusal_treatment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO refusal_treatment VALUES("1","Kurt Dela Torre","Peter Sacayle","Alkaid Lamig","09/16/2018 12:41 PM","","None","Alkaid Lamig","Sep","2018"); 
INSERT INTO refusal_treatment VALUES("2","Alkaid Lamig","Peter Sacayle","Kurt Dela Torre","09/16/2018 12:51 PM","","None","Peter Sacayle","Sep","2018"); 
INSERT INTO refusal_treatment VALUES("3","Peter Sacayle","Alkaid Lamigs","Kurt Dela Torre","09/03/2018 11:36 PM","","None","Peter Sacayle","Sep","2018"); 
INSERT INTO refusal_treatment VALUES("6","Juan Dela Cruz","Peter Lopez","John Dela Cruz","09/16/2018 10:54 AM","","None","Me","Sep","2018"); 
INSERT INTO refusal_treatment VALUES("7","Patient A","Kurt Dela Torre","Alkaid Lamig","09/16/2018 12:28 PM","","None","Peter Sacayle","Sep","2018"); 
INSERT INTO refusal_treatment VALUES("8","Patient C","Alkaid Lamig","Peter Sacayle","09/30/2018 12:03 AM","This is refusal","None","Kurt Dela Torre","Sep","2018"); 
INSERT INTO refusal_treatment VALUES("9","Patient E","Kurt Dela Torre","Peter Sacayle","10/19/2018 6:41 PM","No Comment","None","Alkaid Lamig","Oct","2018"); 
INSERT INTO refusal_treatment VALUES("10","Patient A","Kurt Dela Torre","Alkaid Lamig","12/06/2018 7:11 PM","No Comment","Kurt Dela Torre","Alvin Mananquil","Dec","2018"); 



DROP TABLE request_transport;

CREATE TABLE `request_transport` (
  `request_transport_id` int(10) NOT NULL AUTO_INCREMENT,
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
  `year` varchar(20) NOT NULL,
  PRIMARY KEY (`request_transport_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO request_transport VALUES("5","09/03/2018 6:51 PM","Party YUI","4332449","Pedro Araneta","fortune town bacolod city","29","Male","geqjhwg","Chest Tube Drainage","eqweq","qweqw","weqweqw","eqweqw","eqweq","qeweq","qewq","qweqw","eqweqw","eqweqw","September 17, 2018","Sep","2018"); 
INSERT INTO request_transport VALUES("6","09/03/2018 6:52 PM","Party E","1234","Patient H","Margarita Street","28","Male","None","Catheter","Bacolod City","Bacolod City","Bacolod City","12","12","12","12","12","Kurt Dela Torre","Alkaid Lamig","September 17, 2018","Sep","2018"); 
INSERT INTO request_transport VALUES("7","09/01/2018 1:32 PM","Party GGGFFF","4332449","Pedro Colmenares","Andalucia Street","28","Male","None","Chest Tube Drainage","Bacolod City","Bacolod City","Bacolod City","10","10","10","10","10","Doctor A","Doctor B","September 17, 2018","Sep","2018"); 
INSERT INTO request_transport VALUES("8","09/01/2018 2:11 PM","Party G","4332449","Patient DFG","Bugnay Rd. Villamonte","20","Male","None","Chest Tube Drainage","12","12","12","12","12","121","12","12","Dr. Delatorre","Dr. Delatorre","September 17, 2018","Sep","2018"); 
INSERT INTO request_transport VALUES("9","09/02/2018 10:55 AM","Three Propis","433-2449","Juan Dela Cruz","Lizares Avenue, Bacolod City","28","Male","None","","Lizares Avenue, Bacolod City","Margarita St., Bacolod City","Lizares Avenue, Bacolod City","12","12","12","12","12","Alson John Bayon-on","Carl Betio","September 17, 2018","Sep","2018"); 
INSERT INTO request_transport VALUES("10","09/02/2018 8:22 PM","Party ZXC","433-2449","Pedro Dela Cruz","Balboa St, Bacolod City, Negros Occidental, Philippines","20","Male","None","Catheter","Balboa St, Bacolod City, Negros Occidental, Philippines","Balboa St, Bacolod City, Negros Occidental, Philippines","Balboa St, Bacolod City, Negros Occidental, Philippines","12","12","12","12","12","Peter Sacayle","Peter Sacayle","September 17, 2018","Sep","2018"); 
INSERT INTO request_transport VALUES("11","09/03/2018 7:08 PM","Party RTY","433-2449","Patient DFG","Felisa, Bacolod City, Negros Occidental, Philippines","20","Male","None","Colostomy","Test","Test","Test","12","12","12","12","12","Alvin","Alvin","September 17, 2018","Sep","2018"); 
INSERT INTO request_transport VALUES("12","09/03/2018 10:20 PM","Party Party","4332449","Patient CVB","Burgos St, Bacolod City, Negros Occidental, Philippines","12","Male","12","02","12","12","12","12","12","12","12","12","12","12","September 17, 2018","Sep","2018"); 
INSERT INTO request_transport VALUES("13","09/17/2018 10:50 AM","Safetech Guardians","433-2449","Peter Sacayle","Sum-ag, Negros Occidental, Philippines","20","Male","None","Chest Tube Drainage","Sum-ag","Lizares","Lizares","12","12","12","12","12","Test","Test","September 17, 2018","Sep","2018"); 
INSERT INTO request_transport VALUES("14","09/17/2018 10:56 AM","CIT","4332449","Alkaid Lamig","San Juan Street, Sum-ag, Negros Occidental, Philippines","21","Male","None","Catheter","Sum-ag","Lizares","Lizares","20","20","20","20","20","Kurt Dela Torre","Kurt Dela Torre","September 17, 2018","Sep","2018"); 
INSERT INTO request_transport VALUES("15","09/17/2018 11:01 AM","CBA","4332449","Kurt Dela Torre","Molave St, Sum-ag, Negros Occidental, Philippines","20","Male","None","Catheter","Sum-ag","Lizares","Lizares","20","20","20","20","20","Kurt Dela Torre","Kurt Dela Torre","September 17, 2018","Sep","2018"); 
INSERT INTO request_transport VALUES("16","09/19/2018 11:55 PM","Party CVVB","4332449","Alkaid Lamig","Prk. Fiesta Homes Sum-ag Bacolod City","21","Male","None","Chest Tube Drainage","Test","Test","Test","12","12","12","12","12","Peter Sacayle","Peter Sacayle","September 19, 2018","Sep","2018"); 
INSERT INTO request_transport VALUES("17","10/19/2018 11:03 AM","Party QWEASD","4332449","Alkaid Lamig","Sum-ag Bacolod City","21","Male","None","Catheter","Test","Test","Test","12","12","12","12","12","Peter Sacayle","Kurt Dela Torre","October 19, 2018","Oct","2018"); 
INSERT INTO request_transport VALUES("18","10/19/2018 6:22 PM","Party STG","4332449","Alkaid Lamig","Margarita Street","21","Male","None","Catheter","Test","Test","Test","12","21","12","12","12","Peter Sacayle","Kurt Dela Torre","October 19, 2018","Oct","2018"); 
INSERT INTO request_transport VALUES("19","12/01/2018 7:50 PM","Party RTY","4332449","Kurt Dela Torre","Lizares Avenue, Bacolod City","21","Male","None","Catheter","Test","Test","Test","12","120/80","120","120","12","Alkaid Lamig","Peter Sacayle","December 1, 2018","Dec","2018"); 
INSERT INTO request_transport VALUES("20","12/01/2018 8:03 PM","LKJH","4332449","Peter Sacayle","Lizares Avenue, Bacolod City","21","Male","None","NGT","Bacolod City","Bacolod City","Bacolod City","12","120/70","","","12","Alkaid Lamig","Alkaid Lamig","December 1, 2018","Dec","2018"); 
INSERT INTO request_transport VALUES("21","12/01/2018 8:05 PM","Party ABC","4332449","Alkaid Lamig","Lizares Avenue, Bacolod City","21","Male","None","NGT","Bacolod City","Bacolod City","Bacolod City","20","120/70","120","120","20","Kurt Dela Torre","Kurt Dela Torre","December 1, 2018","Dec","2018"); 
INSERT INTO request_transport VALUES("22","12/01/2018 8:08 PM","Party JHG","4332449","Kurt Dela Torre","Lizares Avenue, Bacolod City","21","Male","None","NGT","Bacolod City","Bacolod City","Bacolod City","12","120/80","200","200","12","Alkaid Lamig","Alkaid Lamig","December 1, 2018","Dec","2018"); 



DROP TABLE users;

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `complete_name` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `home_address` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_role` varchar(20) NOT NULL,
  `status` int(1) NOT NULL,
  `date_created` varchar(100) NOT NULL,
  `time_created` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=203 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES("182","Kurt Dela Torre","4332449","Sum-ag Bacolod City","kurt","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagja5948a0b701a40b762d5a1311cc171a0607734ea","Administrator","1","September 28, 2018","11:50 pm"); 
INSERT INTO users VALUES("183","peter sacayle","4332449","Villamonte, Bacolod City","peter","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj60b1cfb0ae85b40c40e85ee2e0da328b638ba643","EMT","1","September 28, 2018","11:51 pm"); 
INSERT INTO users VALUES("184","alkaid lamig","4332449","Mansilingan, Bacolod City","alkaid","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj71c12f2610b2b0f61eb92eaeca53ece710c141e4","EMT","1","September 28, 2018","11:51 pm"); 
INSERT INTO users VALUES("186","juan dela cruz","4332449","Lizares Avenue, Bacolod City","juan","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj2a5c0ba4cb7dcb073059250118e118971f35b5e4","EMT","0","October 14, 2018","5:35 pm"); 
INSERT INTO users VALUES("197","Sample User","4332449","Bacolod City","sample","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj12dea96fec20593566ab75692c9949596833adc9","EMT","1","December 13, 2018","10:30 pm"); 
INSERT INTO users VALUES("199","Test","4332448","Bacolod City","test","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagja94a8fe5ccb19ba61c4c0873d391e987982fbbd3","EMT","1","December 13, 2018","10:50 pm"); 
INSERT INTO users VALUES("202","Alvin Mananquil","4332449","Bacolod City","alvinmis","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagje33b6e9704fd2ada4484495347b2bb1d6b8ad389","EMT","1","December 21, 2018","2:32 pm"); 



DROP TABLE users_activity_log;

CREATE TABLE `users_activity_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date_time` varchar(70) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

INSERT INTO users_activity_log VALUES("3","182","Added New User","December 2, 2018 - 7:09 pm"); 
INSERT INTO users_activity_log VALUES("4","182","Added New User","December 2, 2018 - 7:20 pm"); 
INSERT INTO users_activity_log VALUES("5","182","Added New User","December 3, 2018 - 11:33 am"); 
INSERT INTO users_activity_log VALUES("7","183","Added New Call Log","December 6, 2018 - 6:48 pm"); 
INSERT INTO users_activity_log VALUES("8","183","Used . 2.  .Cotton","December 6, 2018 - 7:08 pm"); 
INSERT INTO users_activity_log VALUES("9","183","Used 2 Shit","December 6, 2018 - 7:08 pm"); 
INSERT INTO users_activity_log VALUES("10","183","Added New Refusal Treatment of Patient A","December 6, 2018 - 7:11 pm"); 
INSERT INTO users_activity_log VALUES("26","182","Added New Medical Supply - Band Aid","December 8, 2018 - 1:14 pm"); 
INSERT INTO users_activity_log VALUES("27","183","Requested 10 Sample","December 8, 2018 - 10:31 pm"); 
INSERT INTO users_activity_log VALUES("28","183","Requested 10 Sample","December 8, 2018 - 10:32 pm"); 
INSERT INTO users_activity_log VALUES("29","184","Requested 10 Sample","December 8, 2018 - 10:33 pm"); 
INSERT INTO users_activity_log VALUES("30","182","Added New User","December 13, 2018 - 10:30 pm"); 
INSERT INTO users_activity_log VALUES("31","182","Added New User","December 13, 2018 - 10:33 pm"); 
INSERT INTO users_activity_log VALUES("32","182","Added New User","December 13, 2018 - 10:50 pm"); 
INSERT INTO users_activity_log VALUES("33","57","Added New User","December 21, 2018 - 2:21 pm"); 
INSERT INTO users_activity_log VALUES("34","183","Used 3 Betadine","December 21, 2018 - 2:27 pm"); 
INSERT INTO users_activity_log VALUES("36","182","Added Alvin Mananquil as New User","December 21, 2018 - 2:32 pm"); 
INSERT INTO users_activity_log VALUES("37","183","Added New Call Log","December 22, 2018 - 11:01 am"); 
INSERT INTO users_activity_log VALUES("38","183","Added New Dispatch","December 22, 2018 - 11:02 am"); 
INSERT INTO users_activity_log VALUES("39","182","Approved Request 5 Sample","December 29, 2018 - 5:58 pm"); 
INSERT INTO users_activity_log VALUES("40","182","Approved Request 10 Sample","December 29, 2018 - 6:33 pm"); 
INSERT INTO users_activity_log VALUES("41","182","Approved Request 10 Sample","December 29, 2018 - 6:33 pm"); 
INSERT INTO users_activity_log VALUES("42","182","Approved Request 10 Sample","December 29, 2018 - 6:33 pm"); 
INSERT INTO users_activity_log VALUES("43","182","Approved Request 10 Sample","December 29, 2018 - 6:33 pm"); 
INSERT INTO users_activity_log VALUES("44","182","Approved Request 10 Sample","December 29, 2018 - 6:33 pm"); 
INSERT INTO users_activity_log VALUES("45","182","Approved Request 10 Sample","December 29, 2018 - 6:34 pm"); 
INSERT INTO users_activity_log VALUES("46","182","Approved Request 10 Sample","December 29, 2018 - 6:38 pm"); 
INSERT INTO users_activity_log VALUES("47","182","Approved Request 10 Sample","December 29, 2018 - 6:40 pm"); 
INSERT INTO users_activity_log VALUES("48","182","Approved Request 10 Sample","December 29, 2018 - 6:41 pm"); 
INSERT INTO users_activity_log VALUES("49","182","Approved Request 5 Sample","December 29, 2018 - 6:59 pm"); 



DROP TABLE vital_signs;

CREATE TABLE `vital_signs` (
  `vital_signs_id` int(10) NOT NULL AUTO_INCREMENT,
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
  `patient_id` varchar(10) NOT NULL,
  PRIMARY KEY (`vital_signs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

INSERT INTO vital_signs VALUES("1","","Voice","90","90","90","90","90","90","Dilated - R","Pale","1"); 
INSERT INTO vital_signs VALUES("2","","Voice","12","12","12","12","12","12","Dilated - R","Pale","2"); 
INSERT INTO vital_signs VALUES("3","","Voice","12","12","12","12","12","12","Sluggish - R","Warm","3"); 
INSERT INTO vital_signs VALUES("4","","Alert","12","12","12","12","12","12","Constricted - L","Flushed","4"); 
INSERT INTO vital_signs VALUES("5","","Voice","12","12","12","12","12","12","Sluggish - L","Moist","5"); 
INSERT INTO vital_signs VALUES("6","","Voice","12","12","12","12","12","12","Constricted - L","Warm","9"); 
INSERT INTO vital_signs VALUES("7","","Pain","202","20","20","20","20","20","Normal - L","Pale","10"); 
INSERT INTO vital_signs VALUES("8","","Alert","12","12","12","12","12","12","Sluggish - R","Flushed","11"); 
INSERT INTO vital_signs VALUES("9","","Voice","12","1212","12","12","12","12","No Response - R","Cyanotic","12"); 
INSERT INTO vital_signs VALUES("10","10:14 PM","Alert","11","11","11","11","11","11","Normal - R","Pale","13"); 
INSERT INTO vital_signs VALUES("11","11:37 AM","Voice","12","12","12","12","12","12","Sluggish - L","Flushed","7"); 
INSERT INTO vital_signs VALUES("12","11:40 AM","Alert","12","12","12","12","12","12","Sluggish - R","Flushed","14"); 
INSERT INTO vital_signs VALUES("13","5:52 PM","Voice","120/80","97","87","77","37","100","Dilated - L","Pale","15"); 
INSERT INTO vital_signs VALUES("14","5:56 PM","Alert","12","49","56","42","20","12","Constricted - L","Warm","16"); 
INSERT INTO vital_signs VALUES("15","5:59 PM","Voice","34","1","1","1","1","12","Sluggish - L","Cyanotic","17"); 
INSERT INTO vital_signs VALUES("16","7:24 PM","Alert","12","90","125","60","48","12","Constricted - R","Unremarkable","18"); 
INSERT INTO vital_signs VALUES("17","11:16 AM","Alert","1","37","116","113","60","1","No Response - R","Jaundiced","21"); 
INSERT INTO vital_signs VALUES("18","11:27 AM","Alert","1","37","121","91","57","1","Sluggish - L","Dry","21"); 
INSERT INTO vital_signs VALUES("19","1:17 PM","Voice","120/80","27","123","93","39","12","Sluggish - L","Flushed","22"); 
INSERT INTO vital_signs VALUES("20","11:11 PM","Alert","120-80","47","34","86","54","1","Normal - R","Moist","23"); 
INSERT INTO vital_signs VALUES("21","11:14 PM","Alert","120/90","27","128","75","23","1","Normal - R","Pale","23"); 
INSERT INTO vital_signs VALUES("22","11:16 PM","Voice","120/70","36","92","56","65","1","Normal - R","Pale","22"); 
INSERT INTO vital_signs VALUES("23","11:19 pm","Voice","120/80","28","84","55","69","1","Normal - R","Warm","21"); 
INSERT INTO vital_signs VALUES("24","11:19 pm","Voice","120/80","28","84","55","69","1","Normal - R","Warm","21"); 
INSERT INTO vital_signs VALUES("25","11:20 pm","Voice","120/80","40","73","60","32","1","Normal - L","Warm","23"); 
INSERT INTO vital_signs VALUES("26","11:32 pm","Voice","120/80","35","131","71","33","12","Constricted - L","Dry","10"); 
INSERT INTO vital_signs VALUES("27","11:33 pm","Pain","120/80","50","64","106","41","12","Sluggish - R","Cyanotic","10"); 



