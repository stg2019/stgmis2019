DROP TABLE ambulance;

CREATE TABLE `ambulance` (
  `ambulance_id` int(10) NOT NULL AUTO_INCREMENT,
  `plate_no` varchar(20) NOT NULL,
  `vehicle_name` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`ambulance_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO ambulance VALUES("1","WRT210","Samaritan 1","Unbook"); 
INSERT INTO ambulance VALUES("2","FYT291","Samaritan 2","Unbook"); 
INSERT INTO ambulance VALUES("3","WMQ130","Samaritan 3","Unbook"); 
INSERT INTO ambulance VALUES("4","EQL297","Samaritan 4","Unbook"); 
INSERT INTO ambulance VALUES("5","WYV881","Ford","Unbook"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

INSERT INTO assessment VALUES("1","NA","NA","NA","1 - Emergent","Call Cancelled","Moved to ambulance on stretcher/backboard              ","1"); 
INSERT INTO assessment VALUES("2","NA","NA","NA","2 - Urgent","Treated and Released / transferred care","ET Tube 12 12            ","2"); 
INSERT INTO assessment VALUES("3","NA","NA","NA","3 - Non-urgent","Treated and Released / transferred care ","ET Tube Tube - 100 Level 1            ","3"); 
INSERT INTO assessment VALUES("4","NA","NA","NA","2 - Urgent","Treated and Released / transferred care CLMMRH","ET Tube 12 12            ","4"); 
INSERT INTO assessment VALUES("5","NA","NA","NA","1 - Emergent","Treated and Released / transferred care Riverside","CPR       100 08/25/2018 2:11 PM      ","5"); 
INSERT INTO assessment VALUES("6","NA","NA","NA","1 - Emergent","Treated and Released / transferred care CLMMRH","O2 Administered   12 12          ","9"); 
INSERT INTO assessment VALUES("7","Assessment","Assessment","Assessment","1 - Emergent","Refused Treatment ","Airway Cleared              ","10"); 
INSERT INTO assessment VALUES("8","NA","NA","NA","2 - Urgent","No Treatment Required ","O2 Administered   12 12          ","11"); 
INSERT INTO assessment VALUES("9","NA","NA","NA","3 - Non-urgent","No Treatment Required ","Walked to ambulance              ","12"); 
INSERT INTO assessment VALUES("10","NA","NA","NA","1 - Emergent","Treated / transport to facility ","Moved to ambulance on stretcher/backboard              ","13"); 
INSERT INTO assessment VALUES("11","12","12","12","2 - Urgent","Treated / transport to facility ","Moved to ambulance on stretcher/backboard              ","7"); 
INSERT INTO assessment VALUES("12","Test","Test","Test","1 - Emergent","Refused Treatment ","Moved to ambulance on stretcher/backboard              ","14"); 
INSERT INTO assessment VALUES("13","Test","Test","Test","1","No Treatment Required ","Moved to ambulance on stretcher/backboard              ","15"); 
INSERT INTO assessment VALUES("14","Test","Test","Test","2","No Treatment Required ","OPA / NPA used              ","16"); 
INSERT INTO assessment VALUES("15","Test","Test","Test","1","Treated / transport to facility ","Moved to ambulance on stretcher/backboard              ","17"); 
INSERT INTO assessment VALUES("16","None","None","None","3","Treated / transport to facility ","Moved to ambulance on stretcher/backboard              ","18"); 
INSERT INTO assessment VALUES("17","1","1","1","2","Not of legal age /minor ","OPA / NPA used              ","21"); 
INSERT INTO assessment VALUES("18","1","1","1","3","Behavioral / altered mental status ","ET Tube 1 1            ","22"); 
INSERT INTO assessment VALUES("19","NA","NA","NA","3","Treated / transport to facility ","Walked to ambulance              ","28"); 
INSERT INTO assessment VALUES("20","NA","NA","NA","2","Treated / transport to facility ","Moved to ambulance on stretcher/backboard              ","30"); 
INSERT INTO assessment VALUES("21","NA","NA","NA","2","Treated / transport to facility ","Moved to ambulance on stretcher/backboard              ","34"); 
INSERT INTO assessment VALUES("22","NA","NA","NA","1","Treated / transport to facility ","Walked to ambulance              ","35"); 
INSERT INTO assessment VALUES("23","NA","NA","NA","2","Treated / transport to facility ","Moved to ambulance on stretcher/backboard              ","36"); 
INSERT INTO assessment VALUES("24","NA","NA","NA","2","Treated / transport to facility ","Walked to ambulance              ","37"); 
INSERT INTO assessment VALUES("25","NA","NA","NA","2","Treated / transport to facility ","Walked to ambulance              ","38"); 
INSERT INTO assessment VALUES("26","NA","Patient suffer cardiac arrest","NA","3","Treated / transport to facility ","Moved to ambulance on stretcher/backboard              ","39"); 
INSERT INTO assessment VALUES("27","NA","NA","NA","3","Treated / transport to facility ","Moved to ambulance on stretcher/backboard              ","40"); 
INSERT INTO assessment VALUES("28","NA","NA","NA","3","Treated / transport to facility ","Airway Cleared              ","41"); 
INSERT INTO assessment VALUES("29","NA","NA","NA","2","Treated / transport to facility ","Moved to ambulance on stretcher/backboard              ","42"); 
INSERT INTO assessment VALUES("30","NA","NA","NA","3","Treated / transport to facility ","Moved to ambulance on stretcher/backboard              ","44"); 
INSERT INTO assessment VALUES("31","NA","Patient Cardiac Arrest","NA","3","Treated / transport to facility ","Moved to ambulance on stretcher/backboard              ","45"); 
INSERT INTO assessment VALUES("32","NA","Food poison","NA","3","Treated / transport to facility ","Moved to ambulance on stretcher/backboard              ","48"); 
INSERT INTO assessment VALUES("33","NA","Dead on arrival","Committed Suicide","2","Dead at scene ","Moved to ambulance on stretcher/backboard              ","50"); 
INSERT INTO assessment VALUES("34","NA","NA","Na","2","Treated / transport to facility ","Moved to ambulance on stretcher/backboard              ","51"); 
INSERT INTO assessment VALUES("35","NA","NA","NA","3","Treated / transport to facility ","Moved to ambulance on stretcher/backboard              ","53"); 
INSERT INTO assessment VALUES("36","NA","NA","NA","3","Treated / transport to facility ","Moved to ambulance on stretcher/backboard              ","55"); 
INSERT INTO assessment VALUES("37","NA","NA","NA","2","No Treatment Required ","Walked to ambulance              ","57"); 
INSERT INTO assessment VALUES("38","NA","NA","NA","3","Treated / transport to facility ","Moved to ambulance on stretcher/backboard              ","59"); 
INSERT INTO assessment VALUES("39","NA","NA","NA","2","Treated / transport to facility ","Moved to ambulance on stretcher/backboard              ","61"); 
INSERT INTO assessment VALUES("40","NA","NA","NA","3","No Treatment Required ","Moved to ambulance on stretcher/backboard              ","66"); 



DROP TABLE call_logs;

CREATE TABLE `call_logs` (
  `call_id` int(10) NOT NULL AUTO_INCREMENT,
  `date_time_call` varchar(50) NOT NULL,
  `complete_address` varchar(100) NOT NULL,
  `emergency` varchar(100) NOT NULL,
  `caller_name` varchar(50) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  PRIMARY KEY (`call_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

INSERT INTO call_logs VALUES("1","09/16/2018 11:49 AM","Lizares Avenue, Bacolod City","Accident near 7/112","Kurt Dela Torre","4332449"); 
INSERT INTO call_logs VALUES("2","09/16/2018 11:49 AM","Lacson Avenue, Bacolod City, Negros Occidental, Philippines","Accident sa may Lacson","Peter Sacayle","4332449"); 
INSERT INTO call_logs VALUES("3","09/16/2018 11:56 AM","Balboa St. Eroreco, Bacolod City","Fires","Alkaid Lamig","4332449"); 
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
INSERT INTO call_logs VALUES("14","01/05/2019 1:03 PM","Andalucia Street, Eroreco, Bacolod City","Test","Kurt Dela Torre","4332449"); 
INSERT INTO call_logs VALUES("15","01/17/2019 4:52 PM","Lacson Street, Bacolod City","Car Accident","Ryan Callejas","09019201920"); 
INSERT INTO call_logs VALUES("16","01/23/2019 10:38 AM","Lizares Extension","Motor Accident","Jose Torres","0910293403"); 
INSERT INTO call_logs VALUES("17","01/19/2019 1:13 PM","Brgy. Bata","Car related accident","Joseph Cawit","09212930405"); 
INSERT INTO call_logs VALUES("18","01/17/2019 11:32 PM","Brgy. Taculing","Gun shot","Ryan Hermosa","0921931031"); 
INSERT INTO call_logs VALUES("19","01/17/2019 11:40 PM","Homesite","Animal Related","Henjie Ruiz","09439203211"); 
INSERT INTO call_logs VALUES("20","01/17/2019 11:56 PM","Lasalle Avenue","Motor Accident","Krizza Reyes","0920310341"); 
INSERT INTO call_logs VALUES("21","01/18/2019 12:11 AM","Mandalagan","Animal bites","Angelo Garcia","0912910210"); 
INSERT INTO call_logs VALUES("22","01/18/2019 12:18 AM","Banago","NA","Mark Salazar","0921029301"); 
INSERT INTO call_logs VALUES("23","01/19/2019 12:31 AM","UNO-R Ville, Mansilingan","NA","Angelo Reyes","09129102101"); 
INSERT INTO call_logs VALUES("24","01/19/2019 8:47 AM","Airport Subdivision","Major Trauma","Joshua Tueres","0912929301"); 
INSERT INTO call_logs VALUES("25","01/18/2019 1:01 AM","Barangay Handumanan","Motor Accident","Mark Reyes","091201021"); 
INSERT INTO call_logs VALUES("26","01/18/2019 1:11 AM","Alijis","Car Accident","Jerome Marquez","0921029101"); 
INSERT INTO call_logs VALUES("27","01/18/2019 1:16 AM","Pahanocoy","Emergency","Jose Villa","0920192011"); 
INSERT INTO call_logs VALUES("28","01/18/2019 1:26 AM","Barangay 38","Drunk and waster person","Jessica Jimenez","0920193045"); 
INSERT INTO call_logs VALUES("29","01/18/2019 1:34 AM","Country Homes Alijis","Cardiac Arrest","Maria Zarragoza","02914910491"); 
INSERT INTO call_logs VALUES("30","01/18/2019 1:40 AM","Lacson Street","Emergency related to robbery","Emman Nemenzo ","02910930147"); 
INSERT INTO call_logs VALUES("31","01/18/2019 1:50 AM","Paglaum Village","Animal Bites","Ricardo Suarez","034-3103"); 
INSERT INTO call_logs VALUES("32","01/18/2019 1:55 AM","Camelll Homes, Mandalagan","Food Poison","Isabelle Ramos","034-1212"); 
INSERT INTO call_logs VALUES("33","01/18/2019 10:19 AM","SM City Bacolod","Suicide","Rene Forca","09129310301"); 
INSERT INTO call_logs VALUES("34","01/18/2019 10:31 AM","Taculing","NA","Janiel Alcano","09201029301"); 
INSERT INTO call_logs VALUES("35","01/18/2019 10:45 AM","Sum-ag","Motor Accident","Elmer Haro","0902910201"); 
INSERT INTO call_logs VALUES("36","01/18/2019 10:59 AM","Pahanocoy","Multiple Car Accident","Romeo Marquez","0902019201"); 
INSERT INTO call_logs VALUES("37","01/18/2019 11:09 AM","Mansilingan","NA","Rosario Suarez","0920192012"); 
INSERT INTO call_logs VALUES("38","01/18/2019 11:23 AM","Villa Angela","Behavioral","Kristel Hahn","0909210291"); 
INSERT INTO call_logs VALUES("39","01/18/2019 11:26 AM","Country Homes Alijis","Stabbeb","Kurt Dela Torre","0921021029"); 
INSERT INTO call_logs VALUES("40","01/18/2019 11:35 AM","Homsite","Car Accident","Janeil Alcano","0920129101"); 
INSERT INTO call_logs VALUES("41","01/18/2019 12:20 PM","Mandalagan","Motor Accident","Gonzalo Reyes","034-1221"); 
INSERT INTO call_logs VALUES("42","01/18/2019 12:29 PM","Tangub","NA","Jose Delos Reyes","091019201"); 
INSERT INTO call_logs VALUES("43","01/18/2019 12:40 PM","Punta-taytay","NA","Gielou Lirazan","09201920121"); 
INSERT INTO call_logs VALUES("44","01/18/2019 12:45 PM","Brgy. Granada","NA","Stephen Yanson","0921029101"); 
INSERT INTO call_logs VALUES("45","01/18/2019 12:49 PM","Lizares Street","Hit and run","Mccoy Cruz","0921029103"); 
INSERT INTO call_logs VALUES("46","01/18/2019 1:06 PM","Banago ","Drug Overdosed","Anonymous","0920102010"); 
INSERT INTO call_logs VALUES("47","01/18/2019 1:22 PM","Eroreco","Gun shots","Kenneth Garcia","0929284911"); 
INSERT INTO call_logs VALUES("48","01/18/2019 1:30 PM","Libertad","Head injury","Dennzel Cuachon","0902910291"); 
INSERT INTO call_logs VALUES("49","01/18/2019 1:38 PM","Mandalagan, Negros Occidental, Philippines","Heat Stroke","Benjamin Franklin","0923013910"); 
INSERT INTO call_logs VALUES("50","01/18/2019 1:51 PM","North Highway","Multiple Vehicle Accident with mass casualty","Will Cortez","034-2192"); 
INSERT INTO call_logs VALUES("51","01/18/2019 3:34 PM","Alijis","NA","Carlo Reyes","0123981209"); 
INSERT INTO call_logs VALUES("52","01/24/2019 12:00 PM","Balboa St., Bacolod City, Negros Occidental","Car Accident","Rommel Adricula","4332449"); 



DROP TABLE db_backup;

CREATE TABLE `db_backup` (
  `back_up_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `activity` varchar(15) NOT NULL,
  `date` varchar(12) NOT NULL,
  `time` varchar(12) NOT NULL,
  `activity_status` varchar(100) NOT NULL,
  PRIMARY KEY (`back_up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

INSERT INTO db_backup VALUES("29","182","Import","December 24,","10:40 pm","Successfully Imported Database"); 
INSERT INTO db_backup VALUES("30","182","Export","December 24,","10:40 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("31","182","Import","December 24,","10:40 pm","Successfully Imported Database"); 
INSERT INTO db_backup VALUES("32","182","Export","December 29,","8:36 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("33","182","Export","December 29,","8:36 pm","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("34","182","Export","December 31,","12:04 am","Successfully Exported Database"); 
INSERT INTO db_backup VALUES("35","182","Import","January 6, 2","12:09 am","Successfully Imported Database"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

INSERT INTO dispatch VALUES("1","EMS-0001","08/25/2018 11:32 AM","Samaritan 1","Airway Obstruction","Andalucia Street, Bacolod City","","1","100","100","Kurt Dela Torre","Citizen","on","11:34 am","August 17, 2018 07:44 pm","Aug","2018","10.6820461","122.969601"); 
INSERT INTO dispatch VALUES("2","EMS-0002","08/25/2018 1:41 PM","Samaritan 1","Airway Obstruction","Margarita Street, Bacolod City","123","1","123","123","Alkaid  Lamig","Citizen","No","1:41 pm","August 17, 2018 08:44 pm","Aug","2018","10.659050","122.951010"); 
INSERT INTO dispatch VALUES("3","EMS-0003","09/01/2018 12:31 AM","Samaritan 1","Hypertension","Margarita Street, Bacolod","12","1","12","12","Alkaid Lamig","Citizen","No","12:31 am","August 17, 2018 10:10 am","Aug","2018","10.659050","122.951010"); 
INSERT INTO dispatch VALUES("4","EMS-0004","09/01/2018 12:38 AM","Samaritan 1","Stroke/CVA","Lizares Avenue, Bacolod City","12","2","12","12","Alvin Mananquil","Citizen","Yes","12:38 am","September 15, 2018 10:30 am","Sep","2018","10.6597439","122.9458409"); 
INSERT INTO dispatch VALUES("5","EMS-0005","09/07/2018 12:25 PM","Samaritan 2","Airway Obstruction","Hernaez Street, Bacolod City","100","2","100","Kurt Dela Torre","Peter Sacayle","Citizen","Yes","12:25 pm","September 16, 2018 10:50 am","Sep","2018","122.9470662","122.9470662"); 
INSERT INTO dispatch VALUES("6","EMS-0006","09/07/2018 5:36 PM","Samaritan 1","Airway Obstruction","Taculing Barangay Hall, Bacolod City","109","1","109","EMS","Peter Sacayle","Citizen","Yes","5:37 pm","September 17, 2018 12:44 pm","Sep","2018","10.6493125","122.9472441"); 
INSERT INTO dispatch VALUES("7","EMS-0007","09/17/2018 11:10 AM","Samaritan 1","Hypertension","Santa Clara St, Mandalagan","12","1","12","Test","Kurt Dela Torre","Citizen","Yes","11:12 am","September 17, 2018 09:44 pm","Sep","2018","10.6839315","122.970513"); 
INSERT INTO dispatch VALUES("8","EMS-0008","09/23/2018 6:30 PM","Samaritan 1","Stroke/CVA","Lizares Avenue, Bacolod City","20","1","10","10","Alvin Mananquil","Medical Practicioner / First Aider","No","6:30 pm","September 23, 2018 10:44 am","Sep","2018","10.6597439","122.9458409"); 
INSERT INTO dispatch VALUES("9","EMS-0009","09/27/2018 12:11 AM","Samaritan 1","Hypertension","Lizares Avenue, Bacolod City","12","1","12","Kurt Dela Torre","Alkaid Lamig","Citizen","No","12:11 am","September 26, 2018 11:44 pm","Sep","2018","10.6597439","122.9458409"); 
INSERT INTO dispatch VALUES("10","EMS-0010","09/27/2018 12:23 AM","Samaritan 2","Allergic Reaction","Fiesta Homes Subd., Sum-ag, Bacolod City","12","2","12","Alkaid Lamig","Peter Sacayle","None","No","12:24 am","September 26, 2018 11:44 pm","Sep","2018","10.5964456","122.9181648"); 
INSERT INTO dispatch VALUES("14","EMS-0011","09/30/2018 11:28 PM","Samaritan 2","Respiratory Arrest","Hernaez Street, Bacolod City","Kurt Dela Torre","1","1","Peter Sacayle","Alkaid Lamig","Medical Practicioner / First Aider","No","11:29 pm","September 30, 2018 11:29 pm","Sep","2018","10.6618945","122.9471239"); 
INSERT INTO dispatch VALUES("17","EMS-0012","11/01/2018 10:20 AM","Samaritan 2","Airway Obstruction","Lizares Avenue, Bacolod City, Negros Occidental, Philippines","12","2","12","12","Kurt Dela Torre","Citizen","No","10:20 am","November 1, 2018 10:20 am","Nov","2018","10.6597439","122.9458409"); 
INSERT INTO dispatch VALUES("18","EMS-0013","11/01/2018 10:23 AM","Samaritan 2","Respiratory Arrest","Lizares Avenue, Bacolod City, Negros Occidental, Philippines","12","12","12","12","Kurt Dela Torre","Medical Practicioner / First Aider","No","10:23 am","November 1, 2018 10:23 am","Nov","2018","10.6597439","122.9458409"); 
INSERT INTO dispatch VALUES("19","EMS-0014","11/01/2018 10:29 AM","Samaritan 2","Airway Obstruction","Lizares Avenue, Bacolod City, Negros Occidental, Philippines","12","12","12","12","Kurt Dela Torre","Other Rescue Unit","No","10:29 am","November 1, 2018 10:29 am","Nov","2018","10.6597439","122.9458409"); 
INSERT INTO dispatch VALUES("22","EMS-0015","11/01/2018 10:47 AM","Samaritan 2","Respiratory Arrest","Fiesta Homes Subd., Sum-ag, Bacolod City","12","1","1","1","Kurt Dela Torre","Medical Practicioner / First Aider","No","10:47 am","November 1, 2018 10:47 am","Nov","2018","10.5964456","122.9181648"); 
INSERT INTO dispatch VALUES("23","EMS-0016","11/01/2018 11:02 AM","Samaritan 2","Respiratory Distress","Casiana St, Bacolod City, Negros Occidental, Philippines","1","1","1","1","Kurt Dela Torre","Medical Practicioner / First Aider","No","11:02 am","November 1, 2018 11:02 am","Nov","2018","10.6809427","122.9696005"); 
INSERT INTO dispatch VALUES("47","EMS-0017","11/01/2018 3:13 PM","Samaritan 2","Respiratory Arrest","Brgy. Langis, Banago, Bacolod City","1","1","1","1","Kurt Dela Torre","Other Rescue Unit","No","3:13 pm","November 1, 2018 3:13 pm","Nov","2018","10.705689","122.94957899999997"); 
INSERT INTO dispatch VALUES("48","EMS-0018","11/01/2018 4:04 PM","Samaritan 2","Respiratory Distress","Burgos St., Bacolod City","1","2","2","2","Alkaid Lamig","Citizen","No","4:04 pm","November 1, 2018 4:04 pm","Nov","2018","10.6660895","123.03325859999995"); 
INSERT INTO dispatch VALUES("49","EMS-0019","11/02/2018 3:20 PM","Samaritan 2","Cardiac Related","Balboa St., Bacolod City, Negros Occidental","1","1","1","1","Alkaid Lamig","Medical Practicioner / First Aider","No","3:20 pm","November 2, 2018 3:20 pm","Nov","2018","10.5986421","122.94745080000007"); 
INSERT INTO dispatch VALUES("50","EMS-0020","November 6, 2018 10:42 pm","Samaritan 2","Behavioral Changes","Barangay Cabug, Handumanan, Bacolod City","1","1","1","1","Alkaid Lamig","Citizen","No","10:42 pm","November 6, 2018 10:42 pm","Nov","2018","10.5986421","122.94745080000007"); 
INSERT INTO dispatch VALUES("51","EMS-0021","December 22, 2018 11:02 am","Ambulance - Model B","Stroke/CVA","Lizares Avenue, Bacolod City, Negros Occidental, Philippines","1","1","1","1","Alkaid Lamig","Citizen","No","11:02 am","December 22, 2018 11:02 am","Dec","2018","",""); 
INSERT INTO dispatch VALUES("52","EMS-0022","05/20/2019 1:07 PM","Samaritan 2","Hypertension","Andalucia Street, Bacolod City","1","1","1","Alkaid Lamig","Alvin Mananquil","None","No","1:07 pm","January 6, 2019 12:07 am","Jan","2019","",""); 
INSERT INTO dispatch VALUES("53","EMS-0023","January 17, 2019 4:55 pm","Samaritan 3","Major Trauma","Lacson Street, Bacolod City","Accident","1","0219","0010","Arianne Torres","None","No","4:55 pm","January 17, 2019 4:55 pm","Jan","2019","",""); 
INSERT INTO dispatch VALUES("54","EMS-0024","January 17, 2019 10:42 pm","Samaritan 1","Bleeding/Hemorrhage","Lizares Extension","Stab wounds ","1","0012","0121","Elmer Haro","None","No","10:42 pm","January 17, 2019 10:42 pm","Jan","2019","",""); 
INSERT INTO dispatch VALUES("55","EMS-0025","January 17, 2019 11:17 pm","Samaritan 2","Major Trauma","Brgy. Bata","Car Accident","2","0221","2312","Alvin Mananquil","None","No","11:17 pm","January 17, 2019 11:17 pm","Jan","2019","",""); 
INSERT INTO dispatch VALUES("56","EMS-0026","January 17, 2019 11:34 pm","Samaritan 1","Bleeding/Hemorrhage","Brgy. Taculing","Gun shot wounded","1","0192","1903","Alkaid Lamig","None","No","11:34 pm","January 17, 2019 11:34 pm","Jan","2019","",""); 
INSERT INTO dispatch VALUES("57","EMS-0027","January 17, 2019 11:50 pm","Samaritan 2","Animal Bites/Sting","Homesite","Animat Bites","1","09102","23121","Kurt Dela Torre","Citizen","No","11:50 pm","January 17, 2019 11:50 pm","Jan","2019","",""); 
INSERT INTO dispatch VALUES("58","EMS-0028","01/17/2019 11:59 PM","Samaritan 1","Head Injury","Lasalle Avenue","Accident","1","213133","42321","Alvin Manaquil","None","No","11:59 pm","January 17, 2019 11:59 pm","Feb","2019","",""); 
INSERT INTO dispatch VALUES("59","EMS-0029","January 18, 2019 12:13 am","Samaritan 2","Animal Bites/Sting","Capitol","Animal Bites","1","09201","20203","Arianne Torres","None","No","12:13 am","January 18, 2019 12:13 am","Feb","2019","",""); 
INSERT INTO dispatch VALUES("60","EMS-0030","January 18, 2019 12:21 am","Samaritan 1","Seizure","Banago","Possible Stroke","1","21913","09210","#","","No","12:21 am","January 18, 2019 12:21 am","Feb","2019","",""); 
INSERT INTO dispatch VALUES("61","EMS-0031","January 18, 2019 12:34 am","Samaritan 2","Cardiac Related","UNO-R Ville, Mansilingan","Cardiac Arrest","1","09210","09213","Kurt Dela Torre","None","Yes","12:34 am","January 18, 2019 12:34 am","Feb","2019","",""); 
INSERT INTO dispatch VALUES("62","EMS-0032","January 18, 2019 12:52 am","Samaritan 4","Major Trauma","Airport Subdivision","Trauma","2","09019","00921","Elmer Haro","None","No","12:52 am","January 18, 2019 12:52 am","Feb","2019","",""); 
INSERT INTO dispatch VALUES("63","EMS-0033","January 18, 2019 1:04 am","Samaritan 1","Spinal Injury","Barangay Handumanan","Accident","1","99021","22131","Alkaid Lamig","None","No","1:04 am","January 18, 2019 1:04 am","Feb","2019","",""); 
INSERT INTO dispatch VALUES("64","EMS-0034","January 18, 2019 1:12 am","Samaritan 3","Head Injury","Alijis","Accident","1","09102","29101","Alvin Mananquil","None","No","1:12 am","January 18, 2019 1:12 am","Mar","2019","",""); 
INSERT INTO dispatch VALUES("65","EMS-0035","01/18/2019 1:22 AM","Samaritan 1","Stroke/CVA","Pahanocoy","Mild Stroke","1","19201","29102","Elmer Haro","None","No","1:21 am","January 18, 2019 1:21 am","Mar","2019","",""); 
INSERT INTO dispatch VALUES("66","EMS-0036","January 18, 2019 1:36 am","Samaritan 1","Cardiac Related","Country Homes Alijis","Cardiac Arrest","1","10201","1201","Arianne Torres","Medical Practicioner / First Aider","No","1:36 am","January 18, 2019 1:36 am","Mar","2019","",""); 
INSERT INTO dispatch VALUES("67","EMS-0037","January 18, 2019 1:43 am","Samaritan 1","Amputation","Lacson Street","Stab wounds","1","29181","29301","Kurt Dela Torre","None","No","1:43 am","January 18, 2019 1:43 am","Mar","2019","",""); 
INSERT INTO dispatch VALUES("68","EMS-0038","January 18, 2019 1:52 am","Samaritan 1","Animal Bites/Sting","Paglaum Village","Animal Bites","1","292122","219201","Alvin Mananquil","None","No","1:52 am","January 18, 2019 1:52 am","Apr","2019","",""); 
INSERT INTO dispatch VALUES("69","EMS-0039","01/18/2019 1:58 AM","Samaritan 4","Poisoning","Camelll Homes, Mandalagan","Food Poison","2","2121","2019","Alkaid Lamig","Citizen","No","1:57 am","January 18, 2019 1:57 am","Apr","2019","",""); 
INSERT INTO dispatch VALUES("70","EMS-0040","January 18, 2019 10:23 am","Samaritan 2","Suicide/Attempted Suicide","SM City Bacolod","Head Bleeding","1","092910","291021","Arianne Torres","None","No","10:23 am","January 18, 2019 10:23 am","Apr","2019","",""); 
INSERT INTO dispatch VALUES("71","EMS-0041","January 18, 2019 10:37 am","Samaritan 1","Fracture/Dislocation","Taculing","Bone Fracture","1","09019","90191","Kurt Dela Torre","None","No","10:37 am","January 18, 2019 10:37 am","May","2019","",""); 
INSERT INTO dispatch VALUES("72","EMS-0042","January 18, 2019 10:47 am","Samaritan 1","Major Trauma","Sum-ag","NA","2","09019","10210","Alvin Mananquil","None","No","10:47 am","January 18, 2019 10:47 am","May","2019","",""); 
INSERT INTO dispatch VALUES("73","EMS-0043","January 18, 2019 11:02 am","Samaritan 1","Major Trauma","Pahanocoy","Trauma","4","90190","21021","Alkaid Lamig","Other Rescue Unit","No","11:02 am","January 18, 2019 11:02 am","May","2019","",""); 
INSERT INTO dispatch VALUES("74","EMS-0044","January 18, 2019 11:16 am","Samaritan 3","Behavioral Changes","Mansilingan","Psyschological","1","90291","2183","Kurt Dela Torre","Medical Practicioner / First Aider","No","11:16 am","January 18, 2019 11:16 am","May","2019","",""); 
INSERT INTO dispatch VALUES("75","EMS-0045","January 18, 2019 11:30 am","Samaritan 4","Behavioral Changes","Country Homes Alijis","Psychological","1","9021","2192","Kurt Dela Torre","None","No","11:30 am","January 18, 2019 11:30 am","May","2019","",""); 
INSERT INTO dispatch VALUES("76","EMS-0046","January 18, 2019 11:40 am","Samaritan 2","Trauma Penetrating","Homsite","NA","2","09201","2211","Alkaid Lamig","None","No","11:40 am","January 18, 2019 11:40 am","May","2019","",""); 
INSERT INTO dispatch VALUES("77","EMS-0047","January 18, 2019 12:22 pm","Ford","Major Trauma","Mandalagan","Fractured Bones","3","09011","09101","Kurt Dela Torre","","No","12:22 pm","January 18, 2019 12:22 pm","Jun","2019","",""); 
INSERT INTO dispatch VALUES("78","EMS-0048","January 18, 2019 12:31 pm","Samaritan 4","Hazardous materials","Tangub","Hazard","2","09019","90192","Alvin Mananquil","Medical Practicioner / First Aider","No","12:31 pm","January 18, 2019 12:31 pm","Jun","2019","",""); 
INSERT INTO dispatch VALUES("79","EMS-0049","January 18, 2019 12:42 pm","Samaritan 1","Nausea/Vomiting","Punta-taytay","NA","1","09101","21901","Arianne Torres","Medical Practicioner / First Aider","No","12:42 pm","January 18, 2019 12:42 pm","Jun","2019","",""); 
INSERT INTO dispatch VALUES("80","EMS-0050","January 18, 2019 12:46 pm","Samaritan 4","Increased Body Temperature","Brgy. Granada","NA","1","09090","2231","Elmer Haro","Medical Practicioner / First Aider","No","12:46 pm","January 18, 2019 12:46 pm","Jun","2019","",""); 
INSERT INTO dispatch VALUES("81","EMS-0051","January 18, 2019 12:51 pm","Samaritan 4","Bleeding/Hemorrhage","Lizares Street","NA","1","23135","23211","Kurt Dela Torre","None","Yes","12:51 pm","January 18, 2019 12:51 pm","Jan","2019","",""); 
INSERT INTO dispatch VALUES("82","EMS-0052","January 18, 2019 1:12 pm","Samaritan 1","Substance Abuse","Banago ","Substance Abuse","1","9019","2189","Alvin Mananquil","None","No","1:12 pm","January 18, 2019 1:12 pm","Jan","2019","",""); 
INSERT INTO dispatch VALUES("83","EMS-0053","January 18, 2019 1:25 pm","Ford","Unconscious/Unresponsive","Eroreco","NA","1","89218","21311","Kurt Dela Torre","","No","1:25 pm","January 18, 2019 1:25 pm","Jan","2019","",""); 
INSERT INTO dispatch VALUES("84","EMS-0054","January 18, 2019 1:33 pm","Ford","Unconscious/Unresponsive","Libertad","Head injury","1","3121","3124","Kurt Dela Torre","","No","1:33 pm","January 18, 2019 1:33 pm","Jan","2019","",""); 
INSERT INTO dispatch VALUES("85","EMS-0055","January 18, 2019 1:42 pm","Samaritan 3","Major Trauma","Mandalagan, Negros Occidental, Philippines","Motor Accident","3","2131","2321","Elmer Haro","None","No","1:42 pm","January 18, 2019 1:42 pm","Jan","2019","10.6855122","122.97475120000001"); 
INSERT INTO dispatch VALUES("86","EMS-0057","01/18/2019 1:55 PM","Samaritan 1","Respiratory Distress","North Highway","NA","7","2131","3121","Alvin Mananquil","","Yes","1:54 pm","January 18, 2019 1:54 pm","Jan","2019","",""); 
INSERT INTO dispatch VALUES("87","EMS-0056","January 18, 2019 3:36 pm","Samaritan 3","Head Injury","Alijis","NA","1","12413","66544","Alvin Mananquil","None","No","3:36 pm","January 18, 2019 3:36 pm","Jan","2019","",""); 
INSERT INTO dispatch VALUES("88","EMT20190088","January 24, 2019 12:03 pm","Samaritan 1","Hypertension","Balboa St., Bacolod City, Negros Occidental","1","1","1","Alvin Mananquil","Alkaid Lamig","None","No","12:03 pm","January 24, 2019 12:03 pm","Jan","2019","10.6815761","122.96972600000004"); 



DROP TABLE driver;

CREATE TABLE `driver` (
  `driver_id` int(10) NOT NULL AUTO_INCREMENT,
  `driver_name` varchar(100) NOT NULL,
  `age` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `home_address` varchar(100) NOT NULL,
  `duty_hours` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`driver_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO driver VALUES("1","Kurt Dela Torre","21","Male","4332449","Bacolod City","9:00 AM - 9:00 PM","Unbook"); 
INSERT INTO driver VALUES("2","Alkaid Lamig","21","Male","4332449","Bacolod City","9:00 PM - 9:00 AM","Unbook"); 
INSERT INTO driver VALUES("3","Peter Sacayle","21","Male","4332449","Bacolod City","9:00 AM - 9:00 PM","Booked"); 
INSERT INTO driver VALUES("4","Elmer Haro","40","Male","4332449 local 181","Sum-ag Bacolod City","9:00 AM - 9:00 PM","Unbook"); 
INSERT INTO driver VALUES("5","Alvin Mananquil","40","Male","4332449","Bacolod City","9:00 PM - 9:00 AM","Unbook"); 
INSERT INTO driver VALUES("6","Arianne Torres","27","Male","4332449","Bacolod City","9:00 AM - 9:00 PM","Unbook"); 



DROP TABLE glassgow_coma_scale;

CREATE TABLE `glassgow_coma_scale` (
  `glassgow_coma_scale_id` int(10) NOT NULL AUTO_INCREMENT,
  `time` varchar(10) NOT NULL,
  `eye` int(10) NOT NULL,
  `verbal` int(10) NOT NULL,
  `motor` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  PRIMARY KEY (`glassgow_coma_scale_id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

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
INSERT INTO glassgow_coma_scale VALUES("23","6:20 pm","1","1","1","22"); 
INSERT INTO glassgow_coma_scale VALUES("24","4:43 pm","3","2","4","27"); 
INSERT INTO glassgow_coma_scale VALUES("25","4:47 pm","2","4","3","28"); 
INSERT INTO glassgow_coma_scale VALUES("26","4:51 pm","3","2","5","29"); 
INSERT INTO glassgow_coma_scale VALUES("27","4:59 pm","3","2","4","30"); 
INSERT INTO glassgow_coma_scale VALUES("28","10:56 pm","3","3","4","31"); 
INSERT INTO glassgow_coma_scale VALUES("29","11:21 pm","2","3","2","32"); 
INSERT INTO glassgow_coma_scale VALUES("30","11:23 pm","3","3","5","33"); 
INSERT INTO glassgow_coma_scale VALUES("31","11:38 pm","3","3","5","34"); 
INSERT INTO glassgow_coma_scale VALUES("32","11:54 pm","3","3","4","35"); 
INSERT INTO glassgow_coma_scale VALUES("33","12:02 am","2","3","3","36"); 
INSERT INTO glassgow_coma_scale VALUES("34","12:16 am","3","2","6","37"); 
INSERT INTO glassgow_coma_scale VALUES("35","12:28 am","3","3","3","38"); 
INSERT INTO glassgow_coma_scale VALUES("36","12:31 am","3","3","4","24"); 
INSERT INTO glassgow_coma_scale VALUES("37","12:47 am","3","4","3","39"); 
INSERT INTO glassgow_coma_scale VALUES("38","12:57 am","3","3","5","40"); 
INSERT INTO glassgow_coma_scale VALUES("39","1:01 am","2","3","4","41"); 
INSERT INTO glassgow_coma_scale VALUES("40","1:10 am","3","3","5","42"); 
INSERT INTO glassgow_coma_scale VALUES("41","1:15 am","3","3","5","43"); 
INSERT INTO glassgow_coma_scale VALUES("42","1:26 am","3","3","4","44"); 
INSERT INTO glassgow_coma_scale VALUES("43","1:40 am","1","1","1","45"); 
INSERT INTO glassgow_coma_scale VALUES("44","1:50 am","1","1","1","46"); 
INSERT INTO glassgow_coma_scale VALUES("45","1:55 am","3","3","5","47"); 
INSERT INTO glassgow_coma_scale VALUES("46","2:00 am","3","4","3","48"); 
INSERT INTO glassgow_coma_scale VALUES("47","10:28 am","1","1","1","50"); 
INSERT INTO glassgow_coma_scale VALUES("48","10:42 am","2","4","3","51"); 
INSERT INTO glassgow_coma_scale VALUES("49","10:51 am","3","3","4","52"); 
INSERT INTO glassgow_coma_scale VALUES("50","10:58 am","3","3","5","53"); 
INSERT INTO glassgow_coma_scale VALUES("51","11:06 am","2","3","4","54"); 
INSERT INTO glassgow_coma_scale VALUES("52","11:07 am","3","2","5","55"); 
INSERT INTO glassgow_coma_scale VALUES("53","11:20 am","3","3","4","56"); 
INSERT INTO glassgow_coma_scale VALUES("54","11:26 am","3","3","5","56"); 
INSERT INTO glassgow_coma_scale VALUES("55","11:32 am","2","4","3","57"); 
INSERT INTO glassgow_coma_scale VALUES("56","11:35 am","2","3","4","57"); 
INSERT INTO glassgow_coma_scale VALUES("57","11:42 am","3","4","3","58"); 
INSERT INTO glassgow_coma_scale VALUES("58","11:44 am","3","3","5","59"); 
INSERT INTO glassgow_coma_scale VALUES("59","12:25 pm","3","2","5","60"); 
INSERT INTO glassgow_coma_scale VALUES("60","12:28 pm","3","3","5","61"); 
INSERT INTO glassgow_coma_scale VALUES("61","12:35 pm","3","2","5","62"); 
INSERT INTO glassgow_coma_scale VALUES("62","12:37 pm","2","3","3","63"); 
INSERT INTO glassgow_coma_scale VALUES("63","12:48 pm","3","2","5","65"); 
INSERT INTO glassgow_coma_scale VALUES("64","1:19 pm","2","4","3","66"); 
INSERT INTO glassgow_coma_scale VALUES("65","1:28 pm","3","2","4","67"); 
INSERT INTO glassgow_coma_scale VALUES("66","1:38 pm","3","2","5","68"); 
INSERT INTO glassgow_coma_scale VALUES("67","1:44 pm","3","2","5","69"); 
INSERT INTO glassgow_coma_scale VALUES("68","1:47 pm","3","2","4","70"); 
INSERT INTO glassgow_coma_scale VALUES("69","1:49 pm","3","3","5","71"); 
INSERT INTO glassgow_coma_scale VALUES("70","2:17 pm","3","3","3","72"); 
INSERT INTO glassgow_coma_scale VALUES("71","2:18 pm","3","3","5","73"); 
INSERT INTO glassgow_coma_scale VALUES("72","2:19 pm","3","3","5","74"); 
INSERT INTO glassgow_coma_scale VALUES("73","2:20 pm","3","2","3","75"); 
INSERT INTO glassgow_coma_scale VALUES("74","2:20 pm","3","2","3","76"); 
INSERT INTO glassgow_coma_scale VALUES("75","2:21 pm","3","3","5","77"); 
INSERT INTO glassgow_coma_scale VALUES("76","2:22 pm","3","2","5","78"); 
INSERT INTO glassgow_coma_scale VALUES("77","2:36 pm","3","3","3","79"); 



DROP TABLE items_used;

CREATE TABLE `items_used` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `dispatch_id` int(10) NOT NULL,
  `medical_supply_name` varchar(50) NOT NULL,
  `quantity_used` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

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
INSERT INTO items_used VALUES("17","17","Alcohol","30"); 
INSERT INTO items_used VALUES("18","4","Alcohol","2"); 
INSERT INTO items_used VALUES("19","4","Cotton","2"); 
INSERT INTO items_used VALUES("20","4","Betadine","1"); 
INSERT INTO items_used VALUES("21","4","Gloves","1"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

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
INSERT INTO medical_supply_request VALUES("14","Sample","3","December 8, 2018 10:33 pm","Pending","Dec","2018","December 29, 2018 6:41 pm","184"); 
INSERT INTO medical_supply_request VALUES("15","Alcohol","0","December 30, 2018 5:46 pm","Pending","Dec","2018","Pending","183"); 
INSERT INTO medical_supply_request VALUES("16","Alcohol","0","January 6, 2019 3:46 pm","Pending","Jan","2019","Pending","183"); 
INSERT INTO medical_supply_request VALUES("17","Cotton","20","January 24, 2019 11:31 am","Pending","Jan","2019","Pending","183"); 



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

INSERT INTO medical_supply_stocks VALUES("1","136","Alcohol","EMS","Savemore","28","Reorder","September 23, 2018"); 
INSERT INTO medical_supply_stocks VALUES("2","136","Cotton","EMS","Libra","28","Reorder","September 23, 2018"); 
INSERT INTO medical_supply_stocks VALUES("3","136","Betadine","EMS","PureGold","100","Reorder","September 23, 2018"); 
INSERT INTO medical_supply_stocks VALUES("4","136","Gloves","EMS","SM","200","Reorder","September 23, 2018"); 
INSERT INTO medical_supply_stocks VALUES("5","136","Sample","EMS","Sample","98","Reorder","September 23, 2018"); 
INSERT INTO medical_supply_stocks VALUES("6","136","Syringe","EMS","Avon","365","Reorder","September 25, 2018"); 
INSERT INTO medical_supply_stocks VALUES("7","182","Band Aid","EMS","Watsons","100","Reorder","December 8, 2018"); 



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

INSERT INTO medical_supply_stocks_emt VALUES("1","Alcohol","First Aid","Supplier A","33","Reorder"); 
INSERT INTO medical_supply_stocks_emt VALUES("2","Cotton","First Aid","Supplier A","13","Reorder"); 
INSERT INTO medical_supply_stocks_emt VALUES("3","Betadine","First Aid","Supplier B","206","Reorder"); 
INSERT INTO medical_supply_stocks_emt VALUES("5","Gloves","First Aid","Supplier A","110","Reorder"); 
INSERT INTO medical_supply_stocks_emt VALUES("6","Syringe","First Aid","Supplier B","400","Reorder"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

INSERT INTO pain_assessment VALUES("1","Onset","Pain","Quality","Region","10","13"); 
INSERT INTO pain_assessment VALUES("2","12","12","12","12","8","7"); 
INSERT INTO pain_assessment VALUES("3","21","21","21","21","9","14"); 
INSERT INTO pain_assessment VALUES("4","12","12","12","12","1","15"); 
INSERT INTO pain_assessment VALUES("5","12","12","12","12","1","16"); 
INSERT INTO pain_assessment VALUES("6","12","12","12","12","1","17"); 
INSERT INTO pain_assessment VALUES("7","12","12","12","12","7","18"); 
INSERT INTO pain_assessment VALUES("8","1","1","1","1","3","21"); 
INSERT INTO pain_assessment VALUES("9","1","1","1","1","6","22"); 
INSERT INTO pain_assessment VALUES("10","NA","Severe","7 out of 10","NA","7","28"); 
INSERT INTO pain_assessment VALUES("11","NA","Severe","7 out of 10","NA","6","30"); 
INSERT INTO pain_assessment VALUES("12","NA","Severe","7 out of 10","NA","7","34"); 
INSERT INTO pain_assessment VALUES("13","NA","5 out of 10","NA","NA","5","35"); 
INSERT INTO pain_assessment VALUES("14","NA","7 out of 10","severe","NA","6","36"); 
INSERT INTO pain_assessment VALUES("15","NA","9 out of 10","severe","NA","8","37"); 
INSERT INTO pain_assessment VALUES("16","NA","Severe","7 out of 10","NA","5","38"); 
INSERT INTO pain_assessment VALUES("17","NA","NA","severe","NA","5","39"); 
INSERT INTO pain_assessment VALUES("18","NA","7 out of 10","severe","NA","4","40"); 
INSERT INTO pain_assessment VALUES("19","NA","Severe","7 out of 10","NA","4","41"); 
INSERT INTO pain_assessment VALUES("20","NA","7 out of 10","severe","NA","5","42"); 
INSERT INTO pain_assessment VALUES("21","NA","NA","NA","NA","6","44"); 
INSERT INTO pain_assessment VALUES("22","NA","Severe","NA","NA","5","45"); 
INSERT INTO pain_assessment VALUES("23","NA","7 out of 10","severe","NA","6","48"); 
INSERT INTO pain_assessment VALUES("24","NA","NA","NA","NA","1","50"); 
INSERT INTO pain_assessment VALUES("25","NA","Severe","7 out of 10","NA","6","51"); 
INSERT INTO pain_assessment VALUES("26","NA","NA","NA","NA","7","53"); 
INSERT INTO pain_assessment VALUES("27","NA","7 out of 10","severe","NA","7","55"); 
INSERT INTO pain_assessment VALUES("28","NA","NA","NA","NA","6","57"); 
INSERT INTO pain_assessment VALUES("29","NA","Severe","NA","NA","7","59"); 
INSERT INTO pain_assessment VALUES("30","NA","NA","NA","NA","7","61"); 
INSERT INTO pain_assessment VALUES("31","NA","NA","NA","NA","6","66"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

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
INSERT INTO past_medical_history VALUES("19","None","None","None","None","None","Extrication Required","28"); 
INSERT INTO past_medical_history VALUES("20","None","None","None","None","None","Helmet","30"); 
INSERT INTO past_medical_history VALUES("21","None","None","None","None","None","Extrication Required","34"); 
INSERT INTO past_medical_history VALUES("22","None","None","None","None","None","Extrication Required","35"); 
INSERT INTO past_medical_history VALUES("23","None","None","None","None","None","Extrication Required","36"); 
INSERT INTO past_medical_history VALUES("24","None","None","None","None","None","Extrication Required","37"); 
INSERT INTO past_medical_history VALUES("25","None","None","None","None","None","Extrication Required","38"); 
INSERT INTO past_medical_history VALUES("26","Seafod","Maintenance","NA","Pork","Eating Pork","Extrication Required","39"); 
INSERT INTO past_medical_history VALUES("27","None","None","None","None","None","Extrication Required","40"); 
INSERT INTO past_medical_history VALUES("28","None","None","None","None","None","Extrication Required","41"); 
INSERT INTO past_medical_history VALUES("29","None","None","None","None","None","Helmet","42"); 
INSERT INTO past_medical_history VALUES("30","None","None","None","None","None","Extrication Required","44"); 
INSERT INTO past_medical_history VALUES("31","None","None","None","None","None","Extrication Required","45"); 
INSERT INTO past_medical_history VALUES("32","None","None","None","Chicken","Eating Contaminated Food","Extrication Required","48"); 
INSERT INTO past_medical_history VALUES("33","None","None","None","None","None","Extrication Required","50"); 
INSERT INTO past_medical_history VALUES("34","None","None","None","None","None","","51"); 
INSERT INTO past_medical_history VALUES("35","None","None","None","None","None","VA seatbelt used","53"); 
INSERT INTO past_medical_history VALUES("36","None","None","None","None","None","VA seatbelt used","55"); 
INSERT INTO past_medical_history VALUES("37","None","None","None","None","None","Extrication Required","57"); 
INSERT INTO past_medical_history VALUES("38","None","None","None","None","None","Extrication Required","59"); 
INSERT INTO past_medical_history VALUES("39","NA","NA","NA","NA","NA","Extrication Required","61"); 
INSERT INTO past_medical_history VALUES("40","NA","None","NA","NA","None","Extrication Required","66"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

INSERT INTO patient VALUES("1","Janiel Alcano","20","Male","08/08/2000","4332449","Bacolod City","NA","NA","Allergies","1","Assessed"); 
INSERT INTO patient VALUES("2","Kyan Ricabo","21","Male","08/16/2018","4332449","Bacolod City","NA","NA","DNR","1","Assessed"); 
INSERT INTO patient VALUES("3","Dyniel Keith Cataluña","20","Male","08/16/2000","4332449","Bacolod City","NA","NA","Allergies","2","Assessed"); 
INSERT INTO patient VALUES("4","Michael Callejas","21","Male","08/14/2018","4332449","Bacolod City","NA","NA","Organ Donor","2","Assessed"); 
INSERT INTO patient VALUES("5","Sweet Manhuyod","50","Male","08/08/2018","4332449","Bacolod City","NA","NA","Allergies","2","Assessed"); 
INSERT INTO patient VALUES("6","Erul John Ubas","21","Male","08/08/2018","4332449","Bacolod City","NA","NA","None","2","Unassessed"); 
INSERT INTO patient VALUES("7","Kim Tabanda","31","Male","08/14/2018","4332449","Bacolod City","NA","NA","Organ Donor","1","Assessed"); 
INSERT INTO patient VALUES("8","Brian Mallo","21","Male","08/13/2018","4332449","bacolod City","NA","NA","Allergies","2","Unassessed"); 
INSERT INTO patient VALUES("9","Joey Franco","20","Male","08/23/2018","4332449","Bacolod City","NA","NA","Allergies","2","Assessed"); 
INSERT INTO patient VALUES("10","Stephen Yanson","12","Male","09/11/2018","4332449","Bacolod City","NA","NA","Allergies","3","Assessed"); 
INSERT INTO patient VALUES("11","Alkaid Lamig","21","Male","09/16/2018","4332449","Bacolod City","NA","NA","None","3","Assessed"); 
INSERT INTO patient VALUES("12","Peter Sacayle","20","Male","09/10/2018","4332449","Bacolod","NA","NA","DNR","3","Assessed"); 
INSERT INTO patient VALUES("13","Kurt Dela Torre","20","Male","10/01/2018","4332449","Lizares Avenue, Bacolod City","NA","NA","Organ Donor","6","Assessed"); 
INSERT INTO patient VALUES("14","Denzel Cuachon","30","Male","10/11/2018","4332449","Bacolod City ","NA","NA","Allergies","1","Assessed"); 
INSERT INTO patient VALUES("15","Juan Dela Cruz","32","Male","10/28/2018","4332449","Bacolod City","NA","NA","DNR","1","Assessed"); 
INSERT INTO patient VALUES("16","Carlos Solidarios","20","Male","10/15/2018","4332449","Bacolod City","NA","NA","Allergies","1","Assessed"); 
INSERT INTO patient VALUES("17","Mikko Cortez","12","Male","10/09/2018","4332449","Bacolod City","Test","Test","Allergies","1","Assessed"); 
INSERT INTO patient VALUES("18","Carlo Santillan","23","Male","10/08/1996","4332449","Bacolod City","NA","NA","DNR","4","Assessed"); 
INSERT INTO patient VALUES("19","Dawn Jaudines","20","Male","10/14/2018","4332449","Bacolod City","NA","NA","Allergies","1","Unassessed"); 
INSERT INTO patient VALUES("20","Ariane Torres","25","Male","10/01/2018","4332449","Bacolod City","NA","NA","Allergies","4","Unassessed"); 
INSERT INTO patient VALUES("22","Elmer Haro","40","Male","11/05/2018","4332449","Bacolod City","NA","NA","Allergies","17","Assessed"); 
INSERT INTO patient VALUES("23","Kenneth Cayetano","21","Male","11/05/2018","4332449","Bacolod City","NA","NA","Allergies","17","Unassessed"); 
INSERT INTO patient VALUES("24","Clark Canlog","21","Male","12/17/2018","4332449","Bacolod City","NA","NA","None","17","Unassessed"); 
INSERT INTO patient VALUES("25","Alvin Mananquil","40","Male","12/30/2018","4332449","Bacolod City","Test","Test","DNR","17","Unassessed"); 
INSERT INTO patient VALUES("26","Rommel Adricula","40","Male","12/30/1980","4332449","Bacolod City","Test","Test","DNR","17","Unassessed"); 
INSERT INTO patient VALUES("27","Alvaro Morata","23","Male","10/12/1995","09091101901","San Carlos City","NA","NA","Others","10","Unassessed"); 
INSERT INTO patient VALUES("28","Dexter Famoso","21","Male","01/21/1996","09091190291","Handumanan","NA","NA","Others","7","Assessed"); 
INSERT INTO patient VALUES("29","Mark Jagonoy","21","Male","07/12/1997","09019201921","Toboso","NA","None","None","8","Unassessed"); 
INSERT INTO patient VALUES("30","Dyniel Cuachon","54","","12/06/1965","090910291","La Carlota","NA","NA","None","53","Assessed"); 
INSERT INTO patient VALUES("31","Christian Santos ","30","Male","10/06/1990","None","Brgy. Taculing, Bacolod City","NA","NA","None","54","Unassessed"); 
INSERT INTO patient VALUES("32","Jessa Mae Bautista","26","Female","08/23/1991","None","Talisay City","No","None","None","55","Unassessed"); 
INSERT INTO patient VALUES("33","Angelo Reyes","27","Male","07/23/1990","None","Talisay City","no","None","None","55","Unassessed"); 
INSERT INTO patient VALUES("34","Jerome Ocampo","30","Male","10/31/1988","None","Brgy Taculing","None","None","None","56","Assessed"); 
INSERT INTO patient VALUES("35","Jayson Castro","18","Male","03/21/2000","None","Homsite","None","None","None","57","Assessed"); 
INSERT INTO patient VALUES("36","Bea Ong","20","Female","07/03/1998","None","Mandalagan Bacolod City","None","None","None","58","Assessed"); 
INSERT INTO patient VALUES("37","Jenny Lopez","20","Female","08/25/1998","None","Cadiz City","None","None","None","59","Assessed"); 
INSERT INTO patient VALUES("38","Erica Juarez","50","Female","01/02/1969","None","Brgy. Banago","no","None","None","60","Assessed"); 
INSERT INTO patient VALUES("39","Adrian Sevilla","49","Male","02/07/1980","None","UNO-R Ville, Mansilingan","None","None","Others","61","Assessed"); 
INSERT INTO patient VALUES("40","Daniel De Guzman","35","Male","02/15/1987","None","Airport Subdivision","None","None","None","62","Assessed"); 
INSERT INTO patient VALUES("41","James Yulo","47","Male","01/19/1985","None","Airport Subdivision","None","None","None","62","Assessed"); 
INSERT INTO patient VALUES("42","Michelle Gumabao","29","Female","06/17/1988","None","Handumanan","None","None","None","63","Assessed"); 
INSERT INTO patient VALUES("43","Angelo Garcia","25","Male","09/10/1995","None","Bago City","None","None","Allergies","64","Unassessed"); 
INSERT INTO patient VALUES("44","Thomas Salazar","45","Male","08/16/1980","None","Pahanocoy","None","None","None","65","Assessed"); 
INSERT INTO patient VALUES("45","Justin Rivera","75","Male","10/31/1945","None","Country Homes Alijist","None","None","None","66","Assessed"); 
INSERT INTO patient VALUES("46","Jessa Mae Flores","24","Female","06/18/1994","None","Brgy. Granada","None","None","None","67","Unassessed"); 
INSERT INTO patient VALUES("47","Cardo Dalisay","30","Male","07/12/1989","None","Paglaum Village","None","None","None","68","Unassessed"); 
INSERT INTO patient VALUES("48","Kenneth Andrada","24","Male","08/12/1995","None","Camella Homes Mandalagan","None","None","None","69","Assessed"); 
INSERT INTO patient VALUES("49","Jenny Dy","25","Female","12/20/1994","None","Brgy. Banago","None","NA","None","69","Unassessed"); 
INSERT INTO patient VALUES("50","Jose Enriquez","35","Male","12/07/1980","None","Barangay Tangub","No","None","None","70","Assessed"); 
INSERT INTO patient VALUES("51","Jessa Enriquez","30","Female","03/10/1990","None","Taculing","None","None","None","71","Assessed"); 
INSERT INTO patient VALUES("52","Alkaid Lamig","21","Male","09/10/1997","None","Sum-ag","No","None","None","72","Unassessed"); 
INSERT INTO patient VALUES("53","Kim Tabanda","20","Male","09/10/1996","None","Cadiz City","None","None","None","72","Assessed"); 
INSERT INTO patient VALUES("54","Josefina Rodriguez","29","Female","03/19/1992","None","Bago City","NA","NA","None","73","Unassessed"); 
INSERT INTO patient VALUES("55","Christian Rodriguez","25","Male","08/12/1995","None","Bago City","NA","NA","None","73","Assessed"); 
INSERT INTO patient VALUES("56","Michael Mallo","21","Male","01/19/1998","None","Mansilingan","None","None","None","74","Unassessed"); 
INSERT INTO patient VALUES("57","Dyniel Cataluna","21","Male","01/29/1997","None","Country Homes Alijis","None","None","None","75","Assessed"); 
INSERT INTO patient VALUES("58","Shane Dy","26","Female","09/12/1995","None","Brgy. Granada","No","None","None","76","Unassessed"); 
INSERT INTO patient VALUES("59","Jayson Dy","25","Male","01/21/1995","None","Brgy. Granada","No","None","None","76","Assessed"); 
INSERT INTO patient VALUES("60","Christy Martinez","28","Female","01/02/1994","092212121","Barangay Bata","NA","NA","Others","77","Unassessed"); 
INSERT INTO patient VALUES("61","Mikko Reyes","21","Male","01/10/1998","None","San Carlos City","NO","NA","None","77","Assessed"); 
INSERT INTO patient VALUES("62","Daniel Yanson","28","Male","05/25/1993","None","Mansilingan","None","None","None","78","Unassessed"); 
INSERT INTO patient VALUES("63","Michelle Ramos","26","Female","03/18/1998","None","Mansilingan","No","NA","None","78","Unassessed"); 
INSERT INTO patient VALUES("64","Shanky Lirazan","24","Female","01/02/1995","None","Punta-taytay","No","None","None","79","Unassessed"); 
INSERT INTO patient VALUES("65","Jess Latoza","20","Male","09/07/1999","None","Brgy. Granada","NA","NA","None","80","Unassessed"); 
INSERT INTO patient VALUES("66","Francis Tirol","22","Male","01/12/1996","None","Banago","None","None","None","82","Assessed"); 
INSERT INTO patient VALUES("67","Erul Grapes","21","Male","01/23/1997","None","Eroreco","None","NA","None","83","Unassessed"); 
INSERT INTO patient VALUES("68","Peter Go","42","Male","01/04/1979","None","Escalante","None","NA","None","84","Unassessed"); 
INSERT INTO patient VALUES("69","Precious De Guzman","27","Female","09/06/1993","None","Mansilingan","NA","None","None","85","Unassessed"); 
INSERT INTO patient VALUES("70","Ryan Hilario","26","Male","10/31/1994","None","NA","No","None","None","85","Unassessed"); 
INSERT INTO patient VALUES("71","Chelzar De Asis","23","Male","03/22/1995","None","Toboso","No","NA","None","85","Unassessed"); 
INSERT INTO patient VALUES("72","Juan Gevila","23","Male","10/31/1996","None","San Carlos City","NO","NA","None","86","Unassessed"); 
INSERT INTO patient VALUES("73","Vince Pomar","22","Male","12/12/1996","None","San Carlos City","NO","NA","None","86","Unassessed"); 
INSERT INTO patient VALUES("74","Ralph Yanong","23","Male","05/07/1995","None","Escalante City","No","NA","None","86","Unassessed"); 
INSERT INTO patient VALUES("75","Dennis Zapanta","24","Male","09/23/1995","None","Sagay City","No","NA","None","86","Unassessed"); 
INSERT INTO patient VALUES("76","Renz Cui","23","","07/01/1996","None","San Carlos City","NA","NA","None","86","Unassessed"); 
INSERT INTO patient VALUES("77","Michael Yu","22","Male","07/12/1995","None","San Carlos City","No","NA","None","86","Unassessed"); 
INSERT INTO patient VALUES("78","Raina Reyes","25","Female","01/23/1995","None","Cebu City","No","NA","None","86","Unassessed"); 
INSERT INTO patient VALUES("79","Charles Santillan","35","Male","01/03/1985","None","Hinigaran","no","None","None","81","Unassessed"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO refusal_treatment VALUES("1","Kurt Dela Torre","Peter Sacayle","Alkaid Lamig","09/16/2018 12:41 PM","","None","Alkaid Lamig","Sep","2018"); 
INSERT INTO refusal_treatment VALUES("2","Alkaid Lamig","Peter Sacayle","Kurt Dela Torre","09/16/2018 12:51 PM","","None","Peter Sacayle","Sep","2018"); 
INSERT INTO refusal_treatment VALUES("3","Justin Rivera","Dyniel Cataluna","","09/03/2018 11:36 PM","","None","Peter Sacayle","Sep","2018"); 
INSERT INTO refusal_treatment VALUES("6","Juan Dela Cruz","Peter Lopez","John Dela Cruz","09/16/2018 10:54 AM","","None","Kurt","Sep","2018"); 
INSERT INTO refusal_treatment VALUES("7","Raina Reyes","Willem Cui","","09/16/2018 12:28 PM","","None","Peter Sacayle","Sep","2018"); 
INSERT INTO refusal_treatment VALUES("8","Kyan Ricabo","Janiel Alcano","","09/30/2018 12:03 AM","","None","Kurt Dela Torre","Sep","2018"); 
INSERT INTO refusal_treatment VALUES("9","Michael Yu","Jose Ricardo","","10/19/2018 6:41 PM","","None","Alkaid Lamig","Oct","2018"); 
INSERT INTO refusal_treatment VALUES("10","Chelzar De Asis","Jaya Delos Reyes","","12/06/2018 7:11 PM","","Kurt Dela Torre","Alvin Mananquil","Dec","2018"); 
INSERT INTO refusal_treatment VALUES("11","Kim Tabanda","Kurt Dela Torre","Alkaid Lamig","01/06/2018 12:00 AM","","None","Peter Sacayle","Jan","2019"); 



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
INSERT INTO users VALUES("183","Peter Sacayle","4332449","Villamonte, Bacolod City","peter","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj60b1cfb0ae85b40c40e85ee2e0da328b638ba643","EMT","1","September 28, 2018","11:51 pm"); 
INSERT INTO users VALUES("184","Alkaid Lamig","4332449","Mansilingan, Bacolod City","alkaid","STG3Wim4UAAAAAIX3525VGdasGfWty2w2N67dagj71c12f2610b2b0f61eb92eaeca53ece710c141e4","EMT","1","September 28, 2018","11:51 pm"); 
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
) ENGINE=InnoDB AUTO_INCREMENT=375 DEFAULT CHARSET=latin1;

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
INSERT INTO users_activity_log VALUES("50","183","Used 30 Alcohol","December 30, 2018 - 5:45 pm"); 
INSERT INTO users_activity_log VALUES("51","183","Requested 20 Alcohol","December 30, 2018 - 5:46 pm"); 
INSERT INTO users_activity_log VALUES("52","182","Approved Request 10 Alcohol","December 30, 2018 - 5:47 pm"); 
INSERT INTO users_activity_log VALUES("53","182","Approved Request 5 Alcohol","December 30, 2018 - 6:12 pm"); 
INSERT INTO users_activity_log VALUES("54","182","Approved Request 2 Alcohol","December 30, 2018 - 6:15 pm"); 
INSERT INTO users_activity_log VALUES("55","182","Added New Stocks 100 Band Aid","December 30, 2018 - 6:16 pm"); 
INSERT INTO users_activity_log VALUES("56","183","Added Glassgow Scale","December 30, 2018 - 6:20 pm"); 
INSERT INTO users_activity_log VALUES("57","182","Added Elmer Haro as New Driver","December 30, 2018 - 8:18 pm"); 
INSERT INTO users_activity_log VALUES("58","183","Edited a Call Log","December 30, 2018 - 8:29 pm"); 
INSERT INTO users_activity_log VALUES("59","182","Edited Driver Information of Elmer Haros","December 30, 2018 - 8:56 pm"); 
INSERT INTO users_activity_log VALUES("60","182","Edited Driver Information of Elmer Haro","December 30, 2018 - 8:56 pm"); 
INSERT INTO users_activity_log VALUES("61","182","Edited Driver Information of Elmer Haro","December 30, 2018 - 8:57 pm"); 
INSERT INTO users_activity_log VALUES("62","182","Edited Driver Information of Elmer Haro","December 30, 2018 - 8:57 pm"); 
INSERT INTO users_activity_log VALUES("63","182","Edited Driver Information of Elmer Haro","December 30, 2018 - 8:57 pm"); 
INSERT INTO users_activity_log VALUES("64","182","Edited Driver Information of Elmer Haro","December 30, 2018 - 9:38 pm"); 
INSERT INTO users_activity_log VALUES("65","182","Edited Driver Information of Elmer Haros","December 30, 2018 - 9:38 pm"); 
INSERT INTO users_activity_log VALUES("66","182","Edited Driver Information of Elmer Haro","December 30, 2018 - 9:39 pm"); 
INSERT INTO users_activity_log VALUES("67","182","Added Alvin Mananquil as New Driver","December 30, 2018 - 9:39 pm"); 
INSERT INTO users_activity_log VALUES("68","182","Added  as New Driver","December 30, 2018 - 10:56 pm"); 
INSERT INTO users_activity_log VALUES("69","182","Added Montero as New Ambulance","December 30, 2018 - 11:03 pm"); 
INSERT INTO users_activity_log VALUES("70","182","Added MUX as New Ambulance","December 30, 2018 - 11:03 pm"); 
INSERT INTO users_activity_log VALUES("71","182","Edited Ambulance Information of MUX","December 30, 2018 - 11:15 pm"); 
INSERT INTO users_activity_log VALUES("72","182","Edited Ambulance Information of MUXS","December 30, 2018 - 11:15 pm"); 
INSERT INTO users_activity_log VALUES("73","182","Edited Ambulance Information of MUX","December 30, 2018 - 11:15 pm"); 
INSERT INTO users_activity_log VALUES("74","182","Edited Ambulance Information of Samaritan 3","December 30, 2018 - 11:15 pm"); 
INSERT INTO users_activity_log VALUES("75","182","Edited Ambulance Information of Samaritan 4","December 30, 2018 - 11:15 pm"); 
INSERT INTO users_activity_log VALUES("76","182","Added Ford as New Ambulance","December 30, 2018 - 11:47 pm"); 
INSERT INTO users_activity_log VALUES("77","183","Added New Patient","December 31, 2018 - 12:08 am"); 
INSERT INTO users_activity_log VALUES("78","183","Added Vital Signs","December 31, 2018 - 6:31 pm"); 
INSERT INTO users_activity_log VALUES("79","183","Added Vital Signs","December 31, 2018 - 6:39 pm"); 
INSERT INTO users_activity_log VALUES("80","182","Edited Driver Information of Alkaid Lamigs","December 31, 2018 - 10:03 pm"); 
INSERT INTO users_activity_log VALUES("81","182","Edited Driver Information of Alkaid Lamig","December 31, 2018 - 10:03 pm"); 
INSERT INTO users_activity_log VALUES("82","182","Added Arianne Torres as New Driver","December 31, 2018 - 10:27 pm"); 
INSERT INTO users_activity_log VALUES("83","183","Added New Call Log","January 5, 2019 - 1:04 pm"); 
INSERT INTO users_activity_log VALUES("84","183","Added New Dispatch","January 5, 2019 - 1:07 pm"); 
INSERT INTO users_activity_log VALUES("85","183","Edited a Dispatch Record","January 5, 2019 - 1:08 pm"); 
INSERT INTO users_activity_log VALUES("86","183","Added New Refusal for Treatment of Patient JHG","January 6, 2019 - 2:41 pm"); 
INSERT INTO users_activity_log VALUES("87","183","Added New Patient","January 6, 2019 - 3:17 pm"); 
INSERT INTO users_activity_log VALUES("88","183","Added New Patient","January 6, 2019 - 3:31 pm"); 
INSERT INTO users_activity_log VALUES("89","183","Requested 5 Alcohol","January 6, 2019 - 3:46 pm"); 
INSERT INTO users_activity_log VALUES("90","184","Added New Patient","January 17, 2019 - 4:42 pm"); 
INSERT INTO users_activity_log VALUES("91","184","Added Vital Signs","January 17, 2019 - 4:43 pm"); 
INSERT INTO users_activity_log VALUES("92","184","Added Glassgow Scale","January 17, 2019 - 4:43 pm"); 
INSERT INTO users_activity_log VALUES("93","184","Added New Patient","January 17, 2019 - 4:45 pm"); 
INSERT INTO users_activity_log VALUES("94","0","Added Patient Assessment","January 17, 2019 - 4:47 pm"); 
INSERT INTO users_activity_log VALUES("95","184","Added Vital Signs","January 17, 2019 - 4:47 pm"); 
INSERT INTO users_activity_log VALUES("96","184","Added Glassgow Scale","January 17, 2019 - 4:47 pm"); 
INSERT INTO users_activity_log VALUES("97","184","Added New Patient","January 17, 2019 - 4:50 pm"); 
INSERT INTO users_activity_log VALUES("98","184","Added Vital Signs","January 17, 2019 - 4:50 pm"); 
INSERT INTO users_activity_log VALUES("99","184","Added Glassgow Scale","January 17, 2019 - 4:51 pm"); 
INSERT INTO users_activity_log VALUES("100","184","Added New Call Log","January 17, 2019 - 4:53 pm"); 
INSERT INTO users_activity_log VALUES("101","184","Added New Dispatch","January 17, 2019 - 4:55 pm"); 
INSERT INTO users_activity_log VALUES("102","184","Added New Patient","January 17, 2019 - 4:57 pm"); 
INSERT INTO users_activity_log VALUES("103","0","Added Patient Assessment","January 17, 2019 - 4:58 pm"); 
INSERT INTO users_activity_log VALUES("104","184","Added Vital Signs","January 17, 2019 - 4:59 pm"); 
INSERT INTO users_activity_log VALUES("105","184","Added Glassgow Scale","January 17, 2019 - 4:59 pm"); 
INSERT INTO users_activity_log VALUES("106","184","Added New Call Log","January 17, 2019 - 10:41 pm"); 
INSERT INTO users_activity_log VALUES("107","184","Added New Dispatch","January 17, 2019 - 10:42 pm"); 
INSERT INTO users_activity_log VALUES("108","184","Added New Patient","January 17, 2019 - 10:43 pm"); 
INSERT INTO users_activity_log VALUES("109","184","Added Vital Signs","January 17, 2019 - 10:55 pm"); 
INSERT INTO users_activity_log VALUES("110","184","Added Glassgow Scale","January 17, 2019 - 10:56 pm"); 
INSERT INTO users_activity_log VALUES("111","184","Added New Call Log","January 17, 2019 - 11:16 pm"); 
INSERT INTO users_activity_log VALUES("112","184","Added New Dispatch","January 17, 2019 - 11:17 pm"); 
INSERT INTO users_activity_log VALUES("113","184","Added New Patient","January 17, 2019 - 11:20 pm"); 
INSERT INTO users_activity_log VALUES("114","184","Added Vital Signs","January 17, 2019 - 11:21 pm"); 
INSERT INTO users_activity_log VALUES("115","184","Added Glassgow Scale","January 17, 2019 - 11:21 pm"); 
INSERT INTO users_activity_log VALUES("116","184","Added New Patient","January 17, 2019 - 11:22 pm"); 
INSERT INTO users_activity_log VALUES("117","184","Added Vital Signs","January 17, 2019 - 11:23 pm"); 
INSERT INTO users_activity_log VALUES("118","184","Added Glassgow Scale","January 17, 2019 - 11:23 pm"); 
INSERT INTO users_activity_log VALUES("119","184","Added New Call Log","January 17, 2019 - 11:33 pm"); 
INSERT INTO users_activity_log VALUES("120","184","Added New Dispatch","January 17, 2019 - 11:34 pm"); 
INSERT INTO users_activity_log VALUES("121","184","Added New Patient","January 17, 2019 - 11:36 pm"); 
INSERT INTO users_activity_log VALUES("122","184","Added Vital Signs","January 17, 2019 - 11:38 pm"); 
INSERT INTO users_activity_log VALUES("123","184","Added Glassgow Scale","January 17, 2019 - 11:38 pm"); 
INSERT INTO users_activity_log VALUES("124","0","Added Patient Assessment","January 17, 2019 - 11:39 pm"); 
INSERT INTO users_activity_log VALUES("125","184","Added New Call Log","January 17, 2019 - 11:48 pm"); 
INSERT INTO users_activity_log VALUES("126","184","Added New Dispatch","January 17, 2019 - 11:50 pm"); 
INSERT INTO users_activity_log VALUES("127","184","Added New Patient","January 17, 2019 - 11:51 pm"); 
INSERT INTO users_activity_log VALUES("128","184","Added Vital Signs","January 17, 2019 - 11:54 pm"); 
INSERT INTO users_activity_log VALUES("129","184","Added Glassgow Scale","January 17, 2019 - 11:54 pm"); 
INSERT INTO users_activity_log VALUES("130","0","Added Patient Assessment","January 17, 2019 - 11:56 pm"); 
INSERT INTO users_activity_log VALUES("131","184","Added New Call Log","January 17, 2019 - 11:58 pm"); 
INSERT INTO users_activity_log VALUES("132","184","Added New Dispatch","January 17, 2019 - 11:59 pm"); 
INSERT INTO users_activity_log VALUES("133","184","Edited a Dispatch Record","January 17, 2019 - 11:59 pm"); 
INSERT INTO users_activity_log VALUES("134","184","Added New Patient","January 18, 2019 - 12:01 am"); 
INSERT INTO users_activity_log VALUES("135","184","Added Vital Signs","January 18, 2019 - 12:02 am"); 
INSERT INTO users_activity_log VALUES("136","184","Added Glassgow Scale","January 18, 2019 - 12:02 am"); 
INSERT INTO users_activity_log VALUES("137","0","Added Patient Assessment","January 18, 2019 - 12:03 am"); 
INSERT INTO users_activity_log VALUES("138","184","Added New Call Log","January 18, 2019 - 12:12 am"); 
INSERT INTO users_activity_log VALUES("139","184","Added New Dispatch","January 18, 2019 - 12:13 am"); 
INSERT INTO users_activity_log VALUES("140","184","Added New Patient","January 18, 2019 - 12:16 am"); 
INSERT INTO users_activity_log VALUES("141","184","Added Vital Signs","January 18, 2019 - 12:16 am"); 
INSERT INTO users_activity_log VALUES("142","184","Added Glassgow Scale","January 18, 2019 - 12:16 am"); 
INSERT INTO users_activity_log VALUES("143","0","Added Patient Assessment","January 18, 2019 - 12:17 am"); 
INSERT INTO users_activity_log VALUES("144","184","Added New Call Log","January 18, 2019 - 12:19 am"); 
INSERT INTO users_activity_log VALUES("145","184","Added New Dispatch","January 18, 2019 - 12:21 am"); 
INSERT INTO users_activity_log VALUES("146","184","Added New Patient","January 18, 2019 - 12:22 am"); 
INSERT INTO users_activity_log VALUES("147","0","Added Patient Assessment","January 18, 2019 - 12:26 am"); 
INSERT INTO users_activity_log VALUES("148","184","Added Vital Signs","January 18, 2019 - 12:27 am"); 
INSERT INTO users_activity_log VALUES("149","184","Added Glassgow Scale","January 18, 2019 - 12:28 am"); 
INSERT INTO users_activity_log VALUES("150","184","Added Vital Signs","January 18, 2019 - 12:29 am"); 
INSERT INTO users_activity_log VALUES("151","184","Added Glassgow Scale","January 18, 2019 - 12:31 am"); 
INSERT INTO users_activity_log VALUES("152","184","Added New Call Log","January 18, 2019 - 12:33 am"); 
INSERT INTO users_activity_log VALUES("153","184","Added New Dispatch","January 18, 2019 - 12:34 am"); 
INSERT INTO users_activity_log VALUES("154","184","Added New Patient","January 18, 2019 - 12:44 am"); 
INSERT INTO users_activity_log VALUES("155","184","Added Vital Signs","January 18, 2019 - 12:45 am"); 
INSERT INTO users_activity_log VALUES("156","0","Added Patient Assessment","January 18, 2019 - 12:47 am"); 
INSERT INTO users_activity_log VALUES("157","184","Added Glassgow Scale","January 18, 2019 - 12:47 am"); 
INSERT INTO users_activity_log VALUES("158","184","Added New Call Log","January 18, 2019 - 12:51 am"); 
INSERT INTO users_activity_log VALUES("159","184","Added New Dispatch","January 18, 2019 - 12:52 am"); 
INSERT INTO users_activity_log VALUES("160","184","Added New Patient","January 18, 2019 - 12:53 am"); 
INSERT INTO users_activity_log VALUES("161","0","Added Patient Assessment","January 18, 2019 - 12:54 am"); 
INSERT INTO users_activity_log VALUES("162","184","Added Vital Signs","January 18, 2019 - 12:57 am"); 
INSERT INTO users_activity_log VALUES("163","184","Added Glassgow Scale","January 18, 2019 - 12:57 am"); 
INSERT INTO users_activity_log VALUES("164","184","Added New Patient","January 18, 2019 - 12:59 am"); 
INSERT INTO users_activity_log VALUES("165","0","Added Patient Assessment","January 18, 2019 - 1:00 am"); 
INSERT INTO users_activity_log VALUES("166","184","Added Vital Signs","January 18, 2019 - 1:01 am"); 
INSERT INTO users_activity_log VALUES("167","184","Added Glassgow Scale","January 18, 2019 - 1:01 am"); 
INSERT INTO users_activity_log VALUES("168","184","Added New Call Log","January 18, 2019 - 1:03 am"); 
INSERT INTO users_activity_log VALUES("169","184","Added New Dispatch","January 18, 2019 - 1:04 am"); 
INSERT INTO users_activity_log VALUES("170","184","Added New Patient","January 18, 2019 - 1:05 am"); 
INSERT INTO users_activity_log VALUES("171","0","Added Patient Assessment","January 18, 2019 - 1:06 am"); 
INSERT INTO users_activity_log VALUES("172","184","Added Vital Signs","January 18, 2019 - 1:10 am"); 
INSERT INTO users_activity_log VALUES("173","184","Added Glassgow Scale","January 18, 2019 - 1:10 am"); 
INSERT INTO users_activity_log VALUES("174","184","Added New Call Log","January 18, 2019 - 1:11 am"); 
INSERT INTO users_activity_log VALUES("175","184","Added New Dispatch","January 18, 2019 - 1:12 am"); 
INSERT INTO users_activity_log VALUES("176","184","Added New Patient","January 18, 2019 - 1:14 am"); 
INSERT INTO users_activity_log VALUES("177","184","Added Vital Signs","January 18, 2019 - 1:14 am"); 
INSERT INTO users_activity_log VALUES("178","184","Added Glassgow Scale","January 18, 2019 - 1:15 am"); 
INSERT INTO users_activity_log VALUES("179","184","Added New Call Log","January 18, 2019 - 1:17 am"); 
INSERT INTO users_activity_log VALUES("180","184","Added New Dispatch","January 18, 2019 - 1:21 am"); 
INSERT INTO users_activity_log VALUES("181","184","Edited a Dispatch Record","January 18, 2019 - 1:21 am"); 
INSERT INTO users_activity_log VALUES("182","184","Edited a Dispatch Record","January 18, 2019 - 1:22 am"); 
INSERT INTO users_activity_log VALUES("183","184","Added New Patient","January 18, 2019 - 1:24 am"); 
INSERT INTO users_activity_log VALUES("184","0","Added Patient Assessment","January 18, 2019 - 1:25 am"); 
INSERT INTO users_activity_log VALUES("185","184","Added Vital Signs","January 18, 2019 - 1:25 am"); 
INSERT INTO users_activity_log VALUES("186","184","Added Glassgow Scale","January 18, 2019 - 1:26 am"); 
INSERT INTO users_activity_log VALUES("187","184","Added New Call Log","January 18, 2019 - 1:28 am"); 
INSERT INTO users_activity_log VALUES("188","184","Added New Call Log","January 18, 2019 - 1:35 am"); 
INSERT INTO users_activity_log VALUES("189","184","Added New Dispatch","January 18, 2019 - 1:36 am"); 
INSERT INTO users_activity_log VALUES("190","184","Added New Patient","January 18, 2019 - 1:37 am"); 
INSERT INTO users_activity_log VALUES("191","184","Added Vital Signs","January 18, 2019 - 1:38 am"); 
INSERT INTO users_activity_log VALUES("192","0","Added Patient Assessment","January 18, 2019 - 1:39 am"); 
INSERT INTO users_activity_log VALUES("193","184","Added Glassgow Scale","January 18, 2019 - 1:40 am"); 
INSERT INTO users_activity_log VALUES("194","184","Added New Call Log","January 18, 2019 - 1:42 am"); 
INSERT INTO users_activity_log VALUES("195","184","Added New Dispatch","January 18, 2019 - 1:43 am"); 
INSERT INTO users_activity_log VALUES("196","184","Added New Patient","January 18, 2019 - 1:45 am"); 
INSERT INTO users_activity_log VALUES("197","184","Added Vital Signs","January 18, 2019 - 1:50 am"); 
INSERT INTO users_activity_log VALUES("198","184","Added Glassgow Scale","January 18, 2019 - 1:50 am"); 
INSERT INTO users_activity_log VALUES("199","184","Added New Call Log","January 18, 2019 - 1:51 am"); 
INSERT INTO users_activity_log VALUES("200","184","Added New Dispatch","January 18, 2019 - 1:52 am"); 
INSERT INTO users_activity_log VALUES("201","184","Added New Patient","January 18, 2019 - 1:54 am"); 
INSERT INTO users_activity_log VALUES("202","184","Added Vital Signs","January 18, 2019 - 1:54 am"); 
INSERT INTO users_activity_log VALUES("203","184","Added Glassgow Scale","January 18, 2019 - 1:55 am"); 
INSERT INTO users_activity_log VALUES("204","184","Added New Call Log","January 18, 2019 - 1:56 am"); 
INSERT INTO users_activity_log VALUES("205","184","Added New Dispatch","January 18, 2019 - 1:57 am"); 
INSERT INTO users_activity_log VALUES("206","184","Edited a Dispatch Record","January 18, 2019 - 1:58 am"); 
INSERT INTO users_activity_log VALUES("207","184","Added New Patient","January 18, 2019 - 1:59 am"); 
INSERT INTO users_activity_log VALUES("208","184","Added Vital Signs","January 18, 2019 - 2:00 am"); 
INSERT INTO users_activity_log VALUES("209","184","Added Glassgow Scale","January 18, 2019 - 2:00 am"); 
INSERT INTO users_activity_log VALUES("210","0","Added Patient Assessment","January 18, 2019 - 2:02 am"); 
INSERT INTO users_activity_log VALUES("211","184","Added New Patient","January 18, 2019 - 2:03 am"); 
INSERT INTO users_activity_log VALUES("212","184","Added Vital Signs","January 18, 2019 - 2:04 am"); 
INSERT INTO users_activity_log VALUES("213","184","Added New Call Log","January 18, 2019 - 10:21 am"); 
INSERT INTO users_activity_log VALUES("214","184","Added New Dispatch","January 18, 2019 - 10:23 am"); 
INSERT INTO users_activity_log VALUES("215","184","Added New Patient","January 18, 2019 - 10:27 am"); 
INSERT INTO users_activity_log VALUES("216","184","Added Vital Signs","January 18, 2019 - 10:28 am"); 
INSERT INTO users_activity_log VALUES("217","184","Added Glassgow Scale","January 18, 2019 - 10:28 am"); 
INSERT INTO users_activity_log VALUES("218","0","Added Patient Assessment","January 18, 2019 - 10:29 am"); 
INSERT INTO users_activity_log VALUES("219","184","Added New Call Log","January 18, 2019 - 10:34 am"); 
INSERT INTO users_activity_log VALUES("220","184","Added New Dispatch","January 18, 2019 - 10:37 am"); 
INSERT INTO users_activity_log VALUES("221","184","Added New Patient","January 18, 2019 - 10:40 am"); 
INSERT INTO users_activity_log VALUES("222","184","Added Vital Signs","January 18, 2019 - 10:42 am"); 
INSERT INTO users_activity_log VALUES("223","184","Added Glassgow Scale","January 18, 2019 - 10:42 am"); 
INSERT INTO users_activity_log VALUES("224","0","Added Patient Assessment","January 18, 2019 - 10:44 am"); 
INSERT INTO users_activity_log VALUES("225","184","Added New Call Log","January 18, 2019 - 10:46 am"); 
INSERT INTO users_activity_log VALUES("226","184","Added New Dispatch","January 18, 2019 - 10:47 am"); 
INSERT INTO users_activity_log VALUES("227","184","Added New Patient","January 18, 2019 - 10:50 am"); 
INSERT INTO users_activity_log VALUES("228","184","Added Vital Signs","January 18, 2019 - 10:51 am"); 
INSERT INTO users_activity_log VALUES("229","184","Added Glassgow Scale","January 18, 2019 - 10:51 am"); 
INSERT INTO users_activity_log VALUES("230","184","Added New Patient","January 18, 2019 - 10:53 am"); 
INSERT INTO users_activity_log VALUES("231","0","Added Patient Assessment","January 18, 2019 - 10:54 am"); 
INSERT INTO users_activity_log VALUES("232","184","Added Vital Signs","January 18, 2019 - 10:58 am"); 
INSERT INTO users_activity_log VALUES("233","184","Added Glassgow Scale","January 18, 2019 - 10:58 am"); 
INSERT INTO users_activity_log VALUES("234","184","Added New Call Log","January 18, 2019 - 11:00 am"); 
INSERT INTO users_activity_log VALUES("235","184","Added New Dispatch","January 18, 2019 - 11:02 am"); 
INSERT INTO users_activity_log VALUES("236","184","Added New Patient","January 18, 2019 - 11:04 am"); 
INSERT INTO users_activity_log VALUES("237","184","Added New Patient","January 18, 2019 - 11:04 am"); 
INSERT INTO users_activity_log VALUES("238","184","Added Vital Signs","January 18, 2019 - 11:06 am"); 
INSERT INTO users_activity_log VALUES("239","184","Added Glassgow Scale","January 18, 2019 - 11:06 am"); 
INSERT INTO users_activity_log VALUES("240","184","Added Vital Signs","January 18, 2019 - 11:07 am"); 
INSERT INTO users_activity_log VALUES("241","184","Added Glassgow Scale","January 18, 2019 - 11:07 am"); 
INSERT INTO users_activity_log VALUES("242","0","Added Patient Assessment","January 18, 2019 - 11:08 am"); 
INSERT INTO users_activity_log VALUES("243","184","Added New Call Log","January 18, 2019 - 11:13 am"); 
INSERT INTO users_activity_log VALUES("244","184","Added New Dispatch","January 18, 2019 - 11:16 am"); 
INSERT INTO users_activity_log VALUES("245","184","Added New Patient","January 18, 2019 - 11:18 am"); 
INSERT INTO users_activity_log VALUES("246","184","Added Vital Signs","January 18, 2019 - 11:19 am"); 
INSERT INTO users_activity_log VALUES("247","184","Added Glassgow Scale","January 18, 2019 - 11:20 am"); 
INSERT INTO users_activity_log VALUES("248","184","Added New Call Log","January 18, 2019 - 11:24 am"); 
INSERT INTO users_activity_log VALUES("249","184","Added Vital Signs","January 18, 2019 - 11:26 am"); 
INSERT INTO users_activity_log VALUES("250","184","Added Glassgow Scale","January 18, 2019 - 11:26 am"); 
INSERT INTO users_activity_log VALUES("251","184","Added New Call Log","January 18, 2019 - 11:28 am"); 
INSERT INTO users_activity_log VALUES("252","184","Added New Dispatch","January 18, 2019 - 11:30 am"); 
INSERT INTO users_activity_log VALUES("253","184","Added New Patient","January 18, 2019 - 11:31 am"); 
INSERT INTO users_activity_log VALUES("254","184","Added Vital Signs","January 18, 2019 - 11:32 am"); 
INSERT INTO users_activity_log VALUES("255","184","Added Glassgow Scale","January 18, 2019 - 11:32 am"); 
INSERT INTO users_activity_log VALUES("256","0","Added Patient Assessment","January 18, 2019 - 11:34 am"); 
INSERT INTO users_activity_log VALUES("257","184","Added Glassgow Scale","January 18, 2019 - 11:35 am"); 
INSERT INTO users_activity_log VALUES("258","184","Added New Call Log","January 18, 2019 - 11:36 am"); 
INSERT INTO users_activity_log VALUES("259","184","Added New Dispatch","January 18, 2019 - 11:40 am"); 
INSERT INTO users_activity_log VALUES("260","184","Added New Patient","January 18, 2019 - 11:41 am"); 
INSERT INTO users_activity_log VALUES("261","184","Added Vital Signs","January 18, 2019 - 11:42 am"); 
INSERT INTO users_activity_log VALUES("262","184","Added Glassgow Scale","January 18, 2019 - 11:42 am"); 
INSERT INTO users_activity_log VALUES("263","184","Added New Patient","January 18, 2019 - 11:43 am"); 
INSERT INTO users_activity_log VALUES("264","184","Added Vital Signs","January 18, 2019 - 11:44 am"); 
INSERT INTO users_activity_log VALUES("265","184","Added Glassgow Scale","January 18, 2019 - 11:44 am"); 
INSERT INTO users_activity_log VALUES("266","0","Added Patient Assessment","January 18, 2019 - 11:45 am"); 
INSERT INTO users_activity_log VALUES("267","184","Added New Call Log","January 18, 2019 - 12:21 pm"); 
INSERT INTO users_activity_log VALUES("268","184","Added New Dispatch","January 18, 2019 - 12:22 pm"); 
INSERT INTO users_activity_log VALUES("269","184","Added New Patient","January 18, 2019 - 12:24 pm"); 
INSERT INTO users_activity_log VALUES("270","184","Added Vital Signs","January 18, 2019 - 12:24 pm"); 
INSERT INTO users_activity_log VALUES("271","184","Added Glassgow Scale","January 18, 2019 - 12:25 pm"); 
INSERT INTO users_activity_log VALUES("272","184","Added New Patient","January 18, 2019 - 12:27 pm"); 
INSERT INTO users_activity_log VALUES("273","184","Added Vital Signs","January 18, 2019 - 12:28 pm"); 
INSERT INTO users_activity_log VALUES("274","184","Added Glassgow Scale","January 18, 2019 - 12:28 pm"); 
INSERT INTO users_activity_log VALUES("275","0","Added Patient Assessment","January 18, 2019 - 12:29 pm"); 
INSERT INTO users_activity_log VALUES("276","184","Added New Call Log","January 18, 2019 - 12:30 pm"); 
INSERT INTO users_activity_log VALUES("277","184","Added New Dispatch","January 18, 2019 - 12:31 pm"); 
INSERT INTO users_activity_log VALUES("278","184","Added New Patient","January 18, 2019 - 12:34 pm"); 
INSERT INTO users_activity_log VALUES("279","184","Added Vital Signs","January 18, 2019 - 12:35 pm"); 
INSERT INTO users_activity_log VALUES("280","184","Added Glassgow Scale","January 18, 2019 - 12:35 pm"); 
INSERT INTO users_activity_log VALUES("281","184","Added New Patient","January 18, 2019 - 12:36 pm"); 
INSERT INTO users_activity_log VALUES("282","184","Added Vital Signs","January 18, 2019 - 12:37 pm"); 
INSERT INTO users_activity_log VALUES("283","184","Added Glassgow Scale","January 18, 2019 - 12:37 pm"); 
INSERT INTO users_activity_log VALUES("284","184","Added New Call Log","January 18, 2019 - 12:41 pm"); 
INSERT INTO users_activity_log VALUES("285","184","Added New Dispatch","January 18, 2019 - 12:42 pm"); 
INSERT INTO users_activity_log VALUES("286","184","Added New Patient","January 18, 2019 - 12:44 pm"); 
INSERT INTO users_activity_log VALUES("287","184","Added New Call Log","January 18, 2019 - 12:45 pm"); 
INSERT INTO users_activity_log VALUES("288","184","Added New Dispatch","January 18, 2019 - 12:46 pm"); 
INSERT INTO users_activity_log VALUES("289","184","Added New Patient","January 18, 2019 - 12:48 pm"); 
INSERT INTO users_activity_log VALUES("290","184","Added Vital Signs","January 18, 2019 - 12:48 pm"); 
INSERT INTO users_activity_log VALUES("291","184","Added Glassgow Scale","January 18, 2019 - 12:48 pm"); 
INSERT INTO users_activity_log VALUES("292","184","Added New Call Log","January 18, 2019 - 12:50 pm"); 
INSERT INTO users_activity_log VALUES("293","184","Added New Dispatch","January 18, 2019 - 12:51 pm"); 
INSERT INTO users_activity_log VALUES("294","184","Added New Call Log","January 18, 2019 - 1:08 pm"); 
INSERT INTO users_activity_log VALUES("295","184","Added New Dispatch","January 18, 2019 - 1:12 pm"); 
INSERT INTO users_activity_log VALUES("296","184","Added New Patient","January 18, 2019 - 1:17 pm"); 
INSERT INTO users_activity_log VALUES("297","184","Added Vital Signs","January 18, 2019 - 1:19 pm"); 
INSERT INTO users_activity_log VALUES("298","184","Added Glassgow Scale","January 18, 2019 - 1:19 pm"); 
INSERT INTO users_activity_log VALUES("299","0","Added Patient Assessment","January 18, 2019 - 1:21 pm"); 
INSERT INTO users_activity_log VALUES("300","184","Added New Call Log","January 18, 2019 - 1:24 pm"); 
INSERT INTO users_activity_log VALUES("301","184","Added New Dispatch","January 18, 2019 - 1:25 pm"); 
INSERT INTO users_activity_log VALUES("302","184","Added New Patient","January 18, 2019 - 1:27 pm"); 
INSERT INTO users_activity_log VALUES("303","184","Added Vital Signs","January 18, 2019 - 1:28 pm"); 
INSERT INTO users_activity_log VALUES("304","184","Added Glassgow Scale","January 18, 2019 - 1:28 pm"); 
INSERT INTO users_activity_log VALUES("305","184","Added New Call Log","January 18, 2019 - 1:32 pm"); 
INSERT INTO users_activity_log VALUES("306","184","Added New Dispatch","January 18, 2019 - 1:33 pm"); 
INSERT INTO users_activity_log VALUES("307","184","Added New Patient","January 18, 2019 - 1:35 pm"); 
INSERT INTO users_activity_log VALUES("308","184","Added Vital Signs","January 18, 2019 - 1:38 pm"); 
INSERT INTO users_activity_log VALUES("309","184","Added Glassgow Scale","January 18, 2019 - 1:38 pm"); 
INSERT INTO users_activity_log VALUES("310","184","Added New Call Log","January 18, 2019 - 1:39 pm"); 
INSERT INTO users_activity_log VALUES("311","184","Added New Dispatch","January 18, 2019 - 1:42 pm"); 
INSERT INTO users_activity_log VALUES("312","184","Added New Patient","January 18, 2019 - 1:43 pm"); 
INSERT INTO users_activity_log VALUES("313","184","Added Vital Signs","January 18, 2019 - 1:44 pm"); 
INSERT INTO users_activity_log VALUES("314","184","Added Vital Signs","January 18, 2019 - 1:44 pm"); 
INSERT INTO users_activity_log VALUES("315","184","Added Glassgow Scale","January 18, 2019 - 1:44 pm"); 
INSERT INTO users_activity_log VALUES("316","184","Added New Patient","January 18, 2019 - 1:45 pm"); 
INSERT INTO users_activity_log VALUES("317","184","Added Vital Signs","January 18, 2019 - 1:47 pm"); 
INSERT INTO users_activity_log VALUES("318","184","Added Glassgow Scale","January 18, 2019 - 1:47 pm"); 
INSERT INTO users_activity_log VALUES("319","184","Added New Patient","January 18, 2019 - 1:49 pm"); 
INSERT INTO users_activity_log VALUES("320","184","Added Glassgow Scale","January 18, 2019 - 1:49 pm"); 
INSERT INTO users_activity_log VALUES("321","184","Added Vital Signs","January 18, 2019 - 1:49 pm"); 
INSERT INTO users_activity_log VALUES("322","184","Added New Call Log","January 18, 2019 - 1:53 pm"); 
INSERT INTO users_activity_log VALUES("323","184","Added New Dispatch","January 18, 2019 - 1:54 pm"); 
INSERT INTO users_activity_log VALUES("324","184","Edited a Dispatch Record","January 18, 2019 - 1:55 pm"); 
INSERT INTO users_activity_log VALUES("325","184","Edited a Dispatch Record","January 18, 2019 - 1:56 pm"); 
INSERT INTO users_activity_log VALUES("326","184","Added New Patient","January 18, 2019 - 1:57 pm"); 
INSERT INTO users_activity_log VALUES("327","184","Added New Patient","January 18, 2019 - 1:57 pm"); 
INSERT INTO users_activity_log VALUES("328","184","Added New Patient","January 18, 2019 - 1:58 pm"); 
INSERT INTO users_activity_log VALUES("329","184","Added New Patient","January 18, 2019 - 2:01 pm"); 
INSERT INTO users_activity_log VALUES("330","184","Added New Patient","January 18, 2019 - 2:04 pm"); 
INSERT INTO users_activity_log VALUES("331","184","Added New Patient","January 18, 2019 - 2:07 pm"); 
INSERT INTO users_activity_log VALUES("332","184","Added New Patient","January 18, 2019 - 2:12 pm"); 
INSERT INTO users_activity_log VALUES("333","184","Added Vital Signs","January 18, 2019 - 2:13 pm"); 
INSERT INTO users_activity_log VALUES("334","184","Added Glassgow Scale","January 18, 2019 - 2:17 pm"); 
INSERT INTO users_activity_log VALUES("335","184","Added Vital Signs","January 18, 2019 - 2:18 pm"); 
INSERT INTO users_activity_log VALUES("336","184","Added Glassgow Scale","January 18, 2019 - 2:18 pm"); 
INSERT INTO users_activity_log VALUES("337","184","Added Vital Signs","January 18, 2019 - 2:19 pm"); 
INSERT INTO users_activity_log VALUES("338","184","Added Glassgow Scale","January 18, 2019 - 2:19 pm"); 
INSERT INTO users_activity_log VALUES("339","184","Added Vital Signs","January 18, 2019 - 2:20 pm"); 
INSERT INTO users_activity_log VALUES("340","184","Added Glassgow Scale","January 18, 2019 - 2:20 pm"); 
INSERT INTO users_activity_log VALUES("341","184","Added Vital Signs","January 18, 2019 - 2:20 pm"); 
INSERT INTO users_activity_log VALUES("342","184","Added Glassgow Scale","January 18, 2019 - 2:20 pm"); 
INSERT INTO users_activity_log VALUES("343","184","Added Vital Signs","January 18, 2019 - 2:21 pm"); 
INSERT INTO users_activity_log VALUES("344","184","Added Glassgow Scale","January 18, 2019 - 2:21 pm"); 
INSERT INTO users_activity_log VALUES("345","184","Added Vital Signs","January 18, 2019 - 2:22 pm"); 
INSERT INTO users_activity_log VALUES("346","184","Added Glassgow Scale","January 18, 2019 - 2:22 pm"); 
INSERT INTO users_activity_log VALUES("347","184","Added New Patient","January 18, 2019 - 2:34 pm"); 
INSERT INTO users_activity_log VALUES("348","184","Added Vital Signs","January 18, 2019 - 2:35 pm"); 
INSERT INTO users_activity_log VALUES("349","184","Added Glassgow Scale","January 18, 2019 - 2:36 pm"); 
INSERT INTO users_activity_log VALUES("350","184","Added New Call Log","January 18, 2019 - 3:35 pm"); 
INSERT INTO users_activity_log VALUES("351","184","Added New Dispatch","January 18, 2019 - 3:36 pm"); 
INSERT INTO users_activity_log VALUES("352","184","Edited a Dispatch Record","January 18, 2019 - 3:36 pm"); 
INSERT INTO users_activity_log VALUES("353","184","Edited Refusal for Treatment Record","January 18, 2019 - 3:46 pm"); 
INSERT INTO users_activity_log VALUES("354","184","Edited Refusal for Treatment Record","January 18, 2019 - 3:47 pm"); 
INSERT INTO users_activity_log VALUES("355","184","Edited Refusal for Treatment Record","January 18, 2019 - 3:47 pm"); 
INSERT INTO users_activity_log VALUES("356","184","Edited Refusal for Treatment Record","January 18, 2019 - 3:47 pm"); 
INSERT INTO users_activity_log VALUES("357","184","Edited Refusal for Treatment Record","January 18, 2019 - 3:51 pm"); 
INSERT INTO users_activity_log VALUES("358","184","Edited Refusal for Treatment Record","January 18, 2019 - 3:51 pm"); 
INSERT INTO users_activity_log VALUES("359","184","Edited Refusal for Treatment Record","January 18, 2019 - 3:51 pm"); 
INSERT INTO users_activity_log VALUES("360","183","Requested 20 Cotton","January 24, 2019 - 11:31 am"); 
INSERT INTO users_activity_log VALUES("361","183","Added New Call Log","January 24, 2019 - 12:01 pm"); 
INSERT INTO users_activity_log VALUES("362","183","Added New Dispatch","January 24, 2019 - 12:02 pm"); 
INSERT INTO users_activity_log VALUES("363","183","Added New Dispatch","January 24, 2019 - 12:03 pm"); 
INSERT INTO users_activity_log VALUES("364","182","Approved Request 2 Sample","January 24, 2019 - 12:14 pm"); 
INSERT INTO users_activity_log VALUES("365","182","Approved Request 3 Alcohol","January 24, 2019 - 12:38 pm"); 
INSERT INTO users_activity_log VALUES("366","182","Approved Request 5 Alcohol","January 24, 2019 - 12:43 pm"); 
INSERT INTO users_activity_log VALUES("367","183","Added New Dispatch","January 24, 2019 - 1:37 pm"); 
INSERT INTO users_activity_log VALUES("368","183","Ended Dispatchment Driver","January 24, 2019 - 1:44 pm"); 
INSERT INTO users_activity_log VALUES("369","183","Ended Dispatchment Driver","January 24, 2019 - 1:45 pm"); 
INSERT INTO users_activity_log VALUES("370","183","Used 2 Alcohol","January 24, 2019 - 10:50 pm"); 
INSERT INTO users_activity_log VALUES("371","183","Used 2 Cotton","January 24, 2019 - 10:52 pm"); 
INSERT INTO users_activity_log VALUES("372","183","Used 1 Betadine","January 24, 2019 - 10:58 pm"); 
INSERT INTO users_activity_log VALUES("373","183","Used 1 Gloves","January 24, 2019 - 11:01 pm"); 
INSERT INTO users_activity_log VALUES("374","183","Ended Dispatchment Driver","January 24, 2019 - 11:07 pm"); 



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
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

INSERT INTO vital_signs VALUES("1","10:14 PM","Voice","90","90","90","90","90","90","Dilated - R","Pale","1"); 
INSERT INTO vital_signs VALUES("2","10:14 PM","Voice","12","12","12","12","12","12","Dilated - R","Pale","2"); 
INSERT INTO vital_signs VALUES("3","10:14 PM","Voice","12","12","12","12","12","12","Sluggish - R","Warm","3"); 
INSERT INTO vital_signs VALUES("4","10:14 PM","Alert","12","12","12","12","12","12","Constricted - L","Flushed","4"); 
INSERT INTO vital_signs VALUES("5","10:14 PM","Voice","12","12","12","12","12","12","Sluggish - L","Moist","5"); 
INSERT INTO vital_signs VALUES("6","10:14 PM","Voice","12","12","12","12","12","12","Constricted - L","Warm","9"); 
INSERT INTO vital_signs VALUES("7","10:14 PM","Pain","202","20","20","20","20","20","Normal - L","Pale","10"); 
INSERT INTO vital_signs VALUES("8","10:14 PM","Alert","12","12","12","12","12","12","Sluggish - R","Flushed","11"); 
INSERT INTO vital_signs VALUES("9","10:14 PM","Voice","12","1212","12","12","12","12","No Response - R","Cyanotic","12"); 
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
INSERT INTO vital_signs VALUES("22","11:16 PM","Voice","110/70","36","92","56","65","1","Normal - R","Pale","22"); 
INSERT INTO vital_signs VALUES("23","11:19 pm","Voice","120/80","28","84","55","69","1","Normal - R","Warm","21"); 
INSERT INTO vital_signs VALUES("24","11:19 pm","Voice","120/80","28","84","55","69","1","Normal - R","Warm","21"); 
INSERT INTO vital_signs VALUES("25","11:20 pm","Voice","120/80","40","73","60","32","1","Normal - L","Warm","23"); 
INSERT INTO vital_signs VALUES("26","11:32 pm","Voice","120/80","35","131","71","33","12","Constricted - L","Dry","10"); 
INSERT INTO vital_signs VALUES("27","11:33 pm","Pain","120/80","50","64","106","41","12","Sluggish - R","Cyanotic","10"); 
INSERT INTO vital_signs VALUES("28","6:31 pm","Alert","100/60","25","42","47","33","10","No Response - R","Dry","22"); 
INSERT INTO vital_signs VALUES("29","6:39 pm","","120/80","39","88","87","57","89","Constricted - L","Jaundiced","13"); 
INSERT INTO vital_signs VALUES("30","4:43 pm","Pain","120/20","32","82","56","37","NA","Constricted - R","Dry","27"); 
INSERT INTO vital_signs VALUES("31","4:47 pm","Voice","120/20","49","52","112","47","None","Sluggish - R","Dry","28"); 
INSERT INTO vital_signs VALUES("32","4:50 pm","Alert","120/20","36","95","65","76","None","Constricted - R","Flushed","29"); 
INSERT INTO vital_signs VALUES("33","4:59 pm","Alert","120/20","51","48","106","36","None","Constricted - R","Dry","30"); 
INSERT INTO vital_signs VALUES("34","10:55 pm","Pain","130/40","39","77","81","37","None","Dilated - R","Warm","31"); 
INSERT INTO vital_signs VALUES("35","11:21 pm","Pain","140/30","91","87","88","38","None","Normal - L","Pale","32"); 
INSERT INTO vital_signs VALUES("36","11:23 pm","Voice","120/30","80","85","82","38","None","Normal - L","Cyanotic","33"); 
INSERT INTO vital_signs VALUES("37","11:38 pm","Pain","140/60","97","83","81","37","None","Constricted - R","Warm","34"); 
INSERT INTO vital_signs VALUES("38","11:54 pm","Pain","120/30","94","85","86","37","None","Normal - R","Warm","35"); 
INSERT INTO vital_signs VALUES("39","12:02 am","Unresponsive","130/40","94","70","88","37","None","Dilated - L","Dry","36"); 
INSERT INTO vital_signs VALUES("40","12:16 am","Pain","120/20","92","85","78","36","None","Dilated - L","Moist","37"); 
INSERT INTO vital_signs VALUES("41","12:27 am","Unresponsive","120/30","87","84","66","37","None","No Response - R","Warm","38"); 
INSERT INTO vital_signs VALUES("42","12:29 am","Pain","120/20","58","70","66","38","None","Dilated - R","Jaundiced","24"); 
INSERT INTO vital_signs VALUES("43","12:45 am","Pain","120/30","95","78","66","37","None","Sluggish - R","Unremarkable","39"); 
INSERT INTO vital_signs VALUES("44","12:57 am","","120/30","90","77","77","38","None","Normal - L","Warm","40"); 
INSERT INTO vital_signs VALUES("45","1:01 am","Voice","120/30","96","81","82","36","None","Dilated - L","Unremarkable","41"); 
INSERT INTO vital_signs VALUES("46","1:10 am","Alert","120/30","92","79","74","36","None","Dilated - R","Flushed","42"); 
INSERT INTO vital_signs VALUES("47","1:14 am","Voice","120/30","96","84","84","51","None","Dilated - L","Warm","43"); 
INSERT INTO vital_signs VALUES("48","1:25 am","Alert","120/30","91","84","69","38","None","Dilated - L","Pale","44"); 
INSERT INTO vital_signs VALUES("49","1:38 am","Unresponsive","120/30","95","61","76","37","None","Dilated - L","Unremarkable","45"); 
INSERT INTO vital_signs VALUES("50","1:50 am","Alert","120/30","96","84","66","37","None","Constricted - R","Warm","46"); 
INSERT INTO vital_signs VALUES("51","1:54 am","Pain","120/30","95","79","78","37","None","Dilated - R","Warm","47"); 
INSERT INTO vital_signs VALUES("52","2:00 am","Voice","120/20","94","79","77","39","None","Dilated - L","Pale","48"); 
INSERT INTO vital_signs VALUES("53","2:04 am","Unresponsive","120/30","96","68","74","38","None","No Response - R","Moist","49"); 
INSERT INTO vital_signs VALUES("54","10:28 am","Unresponsive","000/00","1","1","1","30","None","No Response - R","Warm","50"); 
INSERT INTO vital_signs VALUES("55","10:42 am","Pain","120/80","94","83","67","37","None","Normal - R","Warm","51"); 
INSERT INTO vital_signs VALUES("56","10:51 am","Pain","120/80","93","85","61","37","None","Constricted - R","Warm","52"); 
INSERT INTO vital_signs VALUES("57","10:58 am","Pain","120/80","91","87","72","37","None","Normal - L","Warm","53"); 
INSERT INTO vital_signs VALUES("58","11:06 am","Pain","120/80","90","72","65","37","None","Dilated - L","Warm","54"); 
INSERT INTO vital_signs VALUES("59","11:07 am","Voice","120/80","63","75","65","36","None","Constricted - R","Dry","55"); 
INSERT INTO vital_signs VALUES("60","11:19 am","Alert","120/80","94","82","66","36","None","Normal - L","Warm","56"); 
INSERT INTO vital_signs VALUES("61","11:26 am","Alert","120/80","89","82","76","37","None","Normal - L","Warm","56"); 
INSERT INTO vital_signs VALUES("62","11:32 am","Alert","120/80","92","69","77","37","None","No Response - R","Warm","57"); 
INSERT INTO vital_signs VALUES("63","11:42 am","Alert","120/80","87","80","59","37","None","No Response - R","Warm","58"); 
INSERT INTO vital_signs VALUES("64","11:44 am","Voice","120/80","89","80","61","36","None","Normal - R","Warm","59"); 
INSERT INTO vital_signs VALUES("65","12:24 pm","Pain","120/80","94","68","70","36","None","Dilated - R","Warm","60"); 
INSERT INTO vital_signs VALUES("66","12:28 pm","Alert","120/80","94","60","52","35","None","Normal - L","Warm","61"); 
INSERT INTO vital_signs VALUES("67","12:35 pm","Pain","120/80","95","75","58","37","None","Sluggish - R","Dry","62"); 
INSERT INTO vital_signs VALUES("68","12:37 pm","Alert","120/80","94","78","54","36","None","Normal - R","Dry","63"); 
INSERT INTO vital_signs VALUES("69","12:48 pm","Voice","120/80","94","80","65","40","None","Normal - R","Flushed","65"); 
INSERT INTO vital_signs VALUES("70","1:19 pm","Unresponsive","120/80","92","73","62","36","None","Normal - L","Warm","66"); 
INSERT INTO vital_signs VALUES("71","1:28 pm","Unresponsive","120/30","95","77","58","36","None","No Response - R","Warm","67"); 
INSERT INTO vital_signs VALUES("72","1:38 pm","Pain","120/60","96","64","55","36","None","Sluggish - R","Dry","68"); 
INSERT INTO vital_signs VALUES("73","1:44 pm","Pain","130/80","95","89","58","36","None","No Response - L","Warm","69"); 
INSERT INTO vital_signs VALUES("74","1:44 pm","Pain","130/80","95","89","58","36","None","No Response - L","Warm","69"); 
INSERT INTO vital_signs VALUES("75","1:47 pm","Voice","120/80","95","78","74","37","None","Normal - L","Dry","70"); 
INSERT INTO vital_signs VALUES("76","1:49 pm","Pain","120/80","96","72","63","35","None","No Response - R","Pale","71"); 
INSERT INTO vital_signs VALUES("77","2:13 pm","Pain","120/80","96","82","58","36","None","No Response - L","Dry","72"); 
INSERT INTO vital_signs VALUES("78","2:18 pm","Pain","120/80","95","87","66","37","None","Dilated - R","Warm","73"); 
INSERT INTO vital_signs VALUES("79","2:19 pm","Alert","120/80","87","87","64","38","None","Sluggish - L","Jaundiced","74"); 
INSERT INTO vital_signs VALUES("80","2:20 pm","Pain","120/80","96","89","87","36","None","Dilated - L","Warm","75"); 
INSERT INTO vital_signs VALUES("81","2:20 pm","Voice","120/80","99","87","61","36","None","Sluggish - L","Warm","76"); 
INSERT INTO vital_signs VALUES("82","2:21 pm","Voice","120/80","92","89","63","37","None","Normal - R","Warm","77"); 
INSERT INTO vital_signs VALUES("83","2:22 pm","Pain","120/80","94","84","59","38","None","Normal - L","Dry","78"); 
INSERT INTO vital_signs VALUES("84","2:35 pm","Pain","120/80","95","85","64","35","None","No Response - L","Warm","79"); 



