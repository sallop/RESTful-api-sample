CREATE DATABASE demo;
GRANT ALL PRIVILEGES ON * . * TO 'tycc'@'localhost';
FLUSH PRIVILEGES;

USE demo;

CREATE tABLE Orders (
	OrderID INTEGER,
	CustomerID INTEGER,
	EmployeeID INTEGER,
	OrderDate DATE,
	ShipperID INTEGER
);

CREATE TABLE Shippers (
	ShipperID INTEGER,
	ShipperName VARCHAR(32),
	Phone VARCHAR(32)
);

CREATE TABLE Employees (
	EmployeeID INTEGER,
	LastName VARCHAR(16),
	FirstName VARCHAR(16),
	BirthDate DATE,
	Photo VARCHAR(32),
	Notes VARCHAR(64)
);

-- /home/sallop/bazaar
-- LOAD DATA INFILE '/home/sallop/bazaar/Orders.csv' INTO TABLE Orders;
-- LOAD DATA INFILE '/home/sallop/bazaar/Shippers.csv' INTO TABLE Shippers;
-- LOAD DATA INFILE '/home/sallop/bazaar/Employees.csv' INTO TABLE Employees;

LOAD DATA LOCAL INFILE '/home/sallop/bazaar/Orders.csv'
INTO TABLE Orders
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'
;
LOAD DATA LOCAL INFILE '/home/sallop/bazaar/Shippers.csv'
INTO TABLE Shippers
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'
;

LOAD DATA LOCAL INFILE '/home/sallop/bazaar/Employees.csv' INTO TABLE Employees
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\n'
;


