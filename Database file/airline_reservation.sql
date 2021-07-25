

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` varchar(20) NOT NULL,
  `pwd` varchar(30) DEFAULT NULL,
  `staff_id` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `admin` (`admin_id`, `pwd`, `staff_id`, `name`, `email`) VALUES
('admin1', 'admin1', 'admin1', 'Kristina', 'mojmail1@gmail.com'),
('admin2', 'admin2', 'admin1', 'Andjela', 'mojmail2@gmail.com');



CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` varchar(20) NOT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `address` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `customer` (`customer_id`, `pwd`, `name`, `email`, `phone_no`, `address`) VALUES
('milica', 'milica007', 'milica_name', 'milica_email', '12345', 'milica_address'),
('andrija', 'andrija04', 'andrija', 'andrijagmail@gmail.com', '993498570', 'andrijina adresa');


CREATE TABLE IF NOT EXISTS `flight_details` (
  `flight_no` varchar(10) NOT NULL,
  `from_city` varchar(20) DEFAULT NULL,
  `to_city` varchar(20) DEFAULT NULL,
  `departure_date` date NOT NULL,
  `arrival_date` date DEFAULT NULL,
  `departure_time` time DEFAULT NULL,
  `arrival_time` time DEFAULT NULL,
  `seats_economy` int(5) DEFAULT NULL,
  `seats_business` int(5) DEFAULT NULL,
  `price_economy` int(10) DEFAULT NULL,
  `price_business` int(10) DEFAULT NULL,
  `jet_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `flight_details` (`flight_no`, `from_city`, `to_city`, `departure_date`, `arrival_date`, `departure_time`, `arrival_time`, `seats_economy`, `seats_business`, `price_economy`, `price_business`, `jet_id`) VALUES
('AA101', 'Nis', 'Pariz', '2020-12-01', '2020-12-02', '21:00:00', '01:00:00', 195, 96, 5000, 7500, '10001'),
('AA102', 'Nis', 'Pariz', '2020-12-01', '2020-12-01', '10:00:00', '12:00:00', 200, 73, 2500, 3000, '10002'),
('AA103', 'Nis', 'Moskva', '2020-12-03', '2020-12-03', '17:00:00', '17:45:00', 150, 75, 1200, 1500, '10004'),
('AA104', 'Nis', 'Bukurest', '2020-12-04', '2020-12-04', '09:00:00', '09:17:00', 37, 4, 500, 750, '10003');





CREATE TABLE IF NOT EXISTS `frequent_flier_details` (
  `frequent_flier_no` varchar(20) NOT NULL,
  `customer_id` varchar(20) DEFAULT NULL,
  `mileage` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `frequent_flier_details` (`frequent_flier_no`, `customer_id`, `mileage`) VALUES
('10001000', 'milica', 375);



CREATE TABLE IF NOT EXISTS `jet_details` (
  `jet_id` varchar(10) NOT NULL,
  `jet_type` varchar(20) DEFAULT NULL,
  `total_capacity` int(5) DEFAULT NULL,
  `active` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `jet_details` (`jet_id`, `jet_type`, `total_capacity`, `active`) VALUES
('10001', 'Dreamliner', 300, 'Yes'),
('10002', 'Airbus A380', 275, 'Yes'),
('10003', 'ATR', 50, 'Yes'),
('10004', 'Boeing 737', 225, 'Yes'),
('10007', 'Test_Model', 250, 'Yes'),
('AIR707MAX', 'AIRBUS 707 MX', 400, 'Yes'),
('AIRBUS69', 'AIRBUS69-5526', 780, 'Yes'),
('AIRBUS70', 'AIRBUS69-5527', 654, 'Yes'),
('AIRBUS707', 'AIRBUS69-5527', 655, 'Yes'),
('AIRBUS707M', '707 MAX', 596, 'Yes'),
('BOING707', 'BOING707-5569', 485, 'Yes');


CREATE TABLE IF NOT EXISTS `passengers` (
  `passenger_id` int(10) NOT NULL,
  `pnr` varchar(15) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `meal_choice` varchar(5) DEFAULT NULL,
  `frequent_flier_no` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `passengers` (`passenger_id`, `pnr`, `name`, `age`, `gender`, `meal_choice`, `frequent_flier_no`) VALUES
(1, '2369143', 'andrija', 20, 'male', 'yes', NULL),
(1, '3027167', 'milica_name', 10, 'female', 'yes', NULL),
(1, '8503285', 'milica_name', 10, 'female', 'yes', '10001000'),
(2, '2369143', 'andrija', 51, 'male', 'yes', NULL),
(2, '6980157', 'milica', 9, 'female', 'yes', NULL),
(3, '1669050', 'milica_name', 10, 'female', 'yes', NULL),
(3, '2369143', 'andrija', 10, 'male', 'yes', NULL),
(3, '3773951', 'milica', 11, 'female', 'yes', '10001000'),
(3, '4797983', 'milica_name', 10, 'female', 'yes', '10001000'),
(4, '2369143', 'andrija', 42, 'male', 'yes', NULL);



CREATE TABLE IF NOT EXISTS `payment_details` (
  `payment_id` varchar(20) NOT NULL,
  `pnr` varchar(15) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `payment_amount` int(6) DEFAULT NULL,
  `payment_mode` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `payment_details` (`payment_id`, `pnr`, `payment_date`, `payment_amount`, `payment_mode`) VALUES

('142539461', '3773951', '2020-11-25', 4050, 'credit card'),
('165125569', '8503285', '2020-11-25', 7500, 'net banking'),

('467972527', '2369143', '2020-11-26', 33400, 'debit card'),
('557778944', '6980157', '2020-11-26', 11700, 'credit card'),


('862686553', '3027167', '2020-11-25', 10700, 'debit card');



DELIMITER //
CREATE TRIGGER `update_ticket_after_payment` AFTER INSERT ON `payment_details`
 FOR EACH ROW UPDATE ticket_details
     SET booking_status='CONFIRMED', payment_id= NEW.payment_id
   WHERE pnr = NEW.pnr
//
DELIMITER ;



CREATE TABLE IF NOT EXISTS `ticket_details` (
  `pnr` varchar(15) NOT NULL,
  `date_of_reservation` date DEFAULT NULL,
  `flight_no` varchar(10) DEFAULT NULL,
  `journey_date` date DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL,
  `booking_status` varchar(20) DEFAULT NULL,
  `no_of_passengers` int(5) DEFAULT NULL,
  `lounge_access` varchar(5) DEFAULT NULL,
  `priority_checkin` varchar(5) DEFAULT NULL,
  `insurance` varchar(5) DEFAULT NULL,
  `payment_id` varchar(20) DEFAULT NULL,
  `customer_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `ticket_details` (`pnr`, `date_of_reservation`, `flight_no`, `journey_date`, `class`, `booking_status`, `no_of_passengers`, `lounge_access`, `priority_checkin`, `insurance`, `payment_id`, `customer_id`) VALUES
('2369143', '2020-11-26', 'AA101', '2020-12-01', 'business', 'CONFIRMED', 4, 'yes', 'yes', 'yes', '467972527', 'andrija'),
('3027167', '2020-11-25', 'AA101', '2020-12-01', 'economy', 'CONFIRMED', 2, 'no', 'no', 'yes', '862686553', 'milica'),
('3773951', '2020-11-25', 'AA104', '2020-12-04', 'economy', 'CONFIRMED', 3, 'yes', 'yes', 'yes', '142539461', 'milica'),
('6980157', '2020-11-26', 'AA101', '2020-12-01', 'economy', 'CANCELED', 2, 'yes', 'yes', 'yes', '557778944', 'milica'),
('8503285', '2020-11-25', 'AA102', '2020-12-01', 'business', 'CONFIRMED', 2, 'yes', 'yes', 'no', '165125569', 'milica');


ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`);


ALTER TABLE `customer`
 ADD PRIMARY KEY (`customer_id`);


ALTER TABLE `flight_details`
 ADD PRIMARY KEY (`flight_no`,`departure_date`), ADD KEY `jet_id` (`jet_id`);


ALTER TABLE `frequent_flier_details`
 ADD PRIMARY KEY (`frequent_flier_no`), ADD KEY `customer_id` (`customer_id`);


ALTER TABLE `jet_details`
 ADD PRIMARY KEY (`jet_id`);


ALTER TABLE `passengers`
 ADD PRIMARY KEY (`passenger_id`,`pnr`), ADD KEY `pnr` (`pnr`), ADD KEY `frequent_flier_no` (`frequent_flier_no`);


ALTER TABLE `payment_details`
 ADD PRIMARY KEY (`payment_id`), ADD KEY `pnr` (`pnr`);


ALTER TABLE `ticket_details`
 ADD PRIMARY KEY (`pnr`), ADD KEY `customer_id` (`customer_id`), ADD KEY `journey_date` (`journey_date`), ADD KEY `flight_no` (`flight_no`), ADD KEY `flight_no_2` (`flight_no`,`journey_date`);


ALTER TABLE `flight_details`
ADD CONSTRAINT `flight_details_ibfk_1` FOREIGN KEY (`jet_id`) REFERENCES `jet_details` (`jet_id`) ON DELETE CASCADE ON UPDATE CASCADE;


ALTER TABLE `frequent_flier_details`
ADD CONSTRAINT `frequent_flier_details_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;


ALTER TABLE `passengers`
ADD CONSTRAINT `passengers_ibfk_1` FOREIGN KEY (`pnr`) REFERENCES `ticket_details` (`pnr`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `passengers_ibfk_2` FOREIGN KEY (`frequent_flier_no`) REFERENCES `frequent_flier_details` (`frequent_flier_no`) ON UPDATE CASCADE;


ALTER TABLE `payment_details`
ADD CONSTRAINT `payment_details_ibfk_1` FOREIGN KEY (`pnr`) REFERENCES `ticket_details` (`pnr`) ON UPDATE CASCADE;


ALTER TABLE `ticket_details`
ADD CONSTRAINT `ticket_details_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `ticket_details_ibfk_3` FOREIGN KEY (`flight_no`, `journey_date`) REFERENCES `flight_details` (`flight_no`, `departure_date`) ON DELETE SET NULL ON UPDATE CASCADE;

