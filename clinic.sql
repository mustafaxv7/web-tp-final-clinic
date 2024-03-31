CREATE DATABASE IF NOT EXISTS Clinic;
USE Clinic;

CREATE TABLE IF NOT EXISTS Admin (
    admin_id INT NOT NULL AUTO_INCREMENT,
    first_name varchar(50),
    last_name varchar(50),
    email varchar(25),
    admin_password varchar(25),
    PRIMARY KEY (admin_id)
);

CREATE TABLE IF NOT EXISTS Users (
    user_id INT NOT NULL AUTO_INCREMENT,
    first_name varchar(50),
    last_name varchar(50),
    user_address varchar(50),
    phone varchar(10),
    email varchar(25),
    user_password varchar(25),
    is_deleted boolean,
    deleted_at date,
    deleted_reason varchar(50),
    admin_id INT,
    PRIMARY KEY (user_id),
    FOREIGN KEY (admin_id) REFERENCES Admin(admin_id)
);

CREATE TABLE IF NOT EXISTS Doctors(
    doctor_id INT NOT NULL AUTO_INCREMENT,
    first_name varchar(50),
    last_name varchar(50),
    doctor_address varchar(50),
    phone varchar(10),
    email varchar(25),
    doctor_password varchar(25),
    admin_id INT NOT NULL,
    service_id INT NOT NULL,
    PRIMARY KEY (doctor_id),
    FOREIGN KEY (service_id) REFERENCES Service(service_id),
    FOREIGN KEY (admin_id) REFERENCES Admin(admin_id)
);

CREATE TABLE IF NOT EXISTS LookAfter (
    id INT NOT NULL AUTO_INCREMENT,
    appointement date,
    result varchar(255),
    isCompleted boolean,
    user_id INT NOT NULL,
    doctor_id INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES Users(user_id),
    FOREIGN KEY (doctor_id) REFERENCES Doctors(doctor_id)
);

CREATE TABLE IF NOT EXISTS Service(
    service_id INT NOT NULL AUTO_INCREMENT,
    service_name varchar(255),
    admin_id INT NOT NULL,
    PRIMARY KEY (service_id),
    FOREIGN KEY (admin_id) REFERENCES Admin(admin_id)
);
