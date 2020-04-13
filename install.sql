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
