CREATE DATABASE teleplus;

USE teleplus;

CREATE TABLE system_user (
userid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
password VARCHAR(40)

);

CREATE TABLE customer_service_staff (
csf_id INT PRIMARY KEY,
FOREIGN KEY (csf_id) REFERENCES system_user(userid)
);

CREATE TABLE administrator (
ad_id INT PRIMARY KEY,
FOREIGN KEY (ad_id) REFERENCES system_user(userid)
);

CREATE TABLE manager (
man_id INT PRIMARY KEY,
FOREIGN KEY (man_id) REFERENCES system_user(userid)
);


CREATE TABLE promotion (
pro_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
type VARCHAR(10),
Description VARCHAR(255),
Starting_date DATE,
Ending_date DATE,
csf_id INT,
FOREIGN KEY (csf_id) REFERENCES customer_service_staff(csf_id)
);

CREATE TABLE customers (
cus_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
cus_detail_URL VARCHAR(255),
con_num VARCHAR(10),
csf_id INT,
FOREIGN KEY (csf_id) REFERENCES customer_service_staff(csf_id)
);

CREATE TABLE agreement (
agg_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
status VARCHAR(10),
agg_type VARCHAR(10),
starting_date DATE,
ending_date DATE,
cus_id INT,
FOREIGN KEY (cus_id) REFERENCES customers(cus_id)
);

CREATE TABLE department (
dep_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
dep_name VARCHAR(50)
);

CREATE TABLE inquiry (
inq_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
description TEXT,
inq_date DATE,
cus_id INT,
dep_id INT,
FOREIGN KEY (cus_id) REFERENCES customers(cus_id),
FOREIGN KEY (dep_id) REFERENCES department(dep_id)
);

INSERT INTO system_user (name, password) VALUES ('isira', sha1('abc123'));
INSERT INTO administrator VALUES ('1');
