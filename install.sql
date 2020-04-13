CREATE TABLE Customer
(
  customer_id INT(10) NOT NULL,
  name VARCHAR(30) NOT NULL,
  phone_number CHAR(15) NOT NULL,
  address VARCHAR(225) NOT NULL,
  email VARCHAR(225) NOT NULL,
  PRIMARY KEY (customer_id)
);

CREATE TABLE CarType
(
  type_id INT(15) NOT NULL,
  car_description VARCHAR(30) NOT NULL,
  passenger_capacity INT NOT NULL,
  PRIMARY KEY (type_id)
);

CREATE TABLE Booking
(
  book_id INT(10) NOT NULL,
  bill_amount INT NOT NULL,
  book_date DATE NOT NULL,
  book_days INT NOT NULL,
  driver_option INT NOT NULL,
  deposit_amount INT NOT NULL,
  pick_up VARCHAR(225) NOT NULL,
  drop_off VARCHAR(225) NOT NULL,
  bill_status INT NOT NULL,
  billing_date DATE NOT NULL,
  customer_id INT(10) NOT NULL,
  driver_id INT(10) NOT NULL,
  registration_number INT(30) NOT NULL,
  PRIMARY KEY (book_id),
  FOREIGN KEY (customer_id) REFERENCES Customer(customer_id),
  FOREIGN KEY (driver_id) REFERENCES Driver(driver_id),
  FOREIGN KEY (registration_number) REFERENCES Car(registration_number)

);



CREATE TABLE Driver
(
  driver_id INT(10) NOT NULL,
  driver_status INT NOT NULL,
  dname VARCHAR(30) NOT NULL,
  dphone_number CHAR(15) NOT NULL,
  demail VARCHAR(225) NOT NULL,
  daddress VARCHAR(225) NOT NULL,
  PRIMARY KEY (driver_id)
  );

CREATE TABLE Garage
(
  Garage_id INT(30) NOT NULL,
  garage_location VARCHAR(30) NOT NULL,
  PRIMARY KEY (Garage_id)
);

CREATE TABLE Car
(
  maintenance_date DATE NOT NULL,
  registration_number INT(30) NOT NULL,
  work_done VARCHAR(30) NOT NULL,
  oneday_price INT(20) NOT NULL, 
  date_work_done DATE NOT NULL,
  type_id INT(15) NOT NULL,
  Garage_id INT(30) NOT NULL,
  PRIMARY KEY (registration_number),
  FOREIGN KEY (type_id) REFERENCES CarType(type_id),
  FOREIGN KEY (Garage_id) REFERENCES Garage(Garage_id)
);

INSERT INTO `Customer` (`customer_id`,`name`,`phone_number`,`address`,`email`) VALUES (10001,"William","722-92-384252","Bogyoke Aung San Rd. 223","ipsum@intempus.org");
INSERT INTO `Customer` (`customer_id`,`name`,`phone_number`,`address`,`email`) VALUES (10002,"Snow","321-95-547241","Bahan Rd. 332","Morbi@tristiquesenectuset.com");
INSERT INTO `Customer` (`customer_id`,`name`,`phone_number`,`address`,`email`) VALUES (10003,"Google","187-28-550239","35 street Between 29-30","ultricies@luctuslobortis.org");
INSERT INTO `Customer` (`customer_id`,`name`,`phone_number`,`address`,`email`) VALUES (10004,"Yahoo","952-54-874831","Insein Rd. 392","et@eratvolutpat.edu");
INSERT INTO `Customer` (`customer_id`,`name`,`phone_number`,`address`,`email`) VALUES (10005,"NCT","825-20-189531","Hleden Rd. 009","facilisis.vitae.orci@hendreritid.com");


INSERT INTO `Garage` (`Garage_id`,`garage_location`) VALUES (11,"Bogyoke Rd. 112");
INSERT INTO `Garage` (`Garage_id`,`garage_location`) VALUES (12,"Hleden Rd. 314" );

INSERT INTO `Driver` (`driver_id`,`driver_status`,`dname`,`dphone_number`,`demail`,`daddress`) VALUES (1001,"1","Myra","000-99-888888","Howareyou30@gmail.com","Say Yone Street No.7");
INSERT INTO `Driver` (`driver_id`,`driver_status`,`dname`,`dphone_number`,`demail`,`daddress`) VALUES (1002,"0","Htet","009-22-100000","htethtet01@gmail.com","U Wisarya Street No 2");

INSERT INTO `CarType` (`type_id`,`car_description`,`passenger_capacity`) VALUES (1,"Camper Van",4);
INSERT INTO `CarType` (`type_id`,`car_description`,`passenger_capacity`) VALUES (2,"Convertible",4);
INSERT INTO `CarType` (`type_id`,`car_description`,`passenger_capacity`) VALUES (3,"SUV",7);
INSERT INTO `CarType` (`type_id`,`car_description`,`passenger_capacity`) VALUES (4,"Mini Van",7);

INSERT INTO `Car` (`registration_number`,`work_done`,`maintenance_date`,`date_work_done`,`oneday_price`,`type_id`,`Garage_id` ) VALUES (201,"Fixed Tire","2020-07-18","2019-11-15",3000,1,11);
INSERT INTO `Car` (`registration_number`,`work_done`,`maintenance_date`,`date_work_done`,`oneday_price`,`type_id`,`Garage_id` ) VALUES (202,"Change Engine","2020-08-14","2019-10-11",1500,3,12);
INSERT INTO `Car` (`registration_number`,`work_done`,`maintenance_date`,`date_work_done`,`oneday_price`,`type_id`,`Garage_id` ) VALUES (203,"Repaint Body","2020-07-18","2019-11-15",1200,2,11);
INSERT INTO `Car` (`registration_number`,`work_done`,`maintenance_date`,`date_work_done`,`oneday_price`,`type_id`,`Garage_id` ) VALUES (204,"Filled gas tire","2020-04-08","2020-03-25",2000,4,12);

INSERT INTO `Booking` (`book_id`,`bill_amount`,`book_date`, `book_days`,`driver_option`,`deposit_amount`,`pick_up`,`drop_off`,`bill_status`,`billing_date`, `customer_id`, `driver_id`, `registration_number` ) VALUES (101,15000,"2020-04-08",5,1,1500,"Hleden","Hleden",1,"2020-04-12",10001, 1003, 201);
INSERT INTO `Booking` (`book_id`,`bill_amount`,`book_date`, `book_days`,`driver_option`,`deposit_amount`,`pick_up`,`drop_off`,`bill_status`,`billing_date`, `customer_id`, `driver_id`, `registration_number` ) VALUES (102,8000,"2020-04-19",4,1,800,"Bogyoke","Bogyoke",0,"2020-04-23",10004, 1001, 203);

UPDATE Booking, Car SET bill_amount = book_days*oneday_price WHERE Booking.registration_number = Car.registration_number
UPDATE Booking SET deposit_amount = (bill_amount*10)/100




