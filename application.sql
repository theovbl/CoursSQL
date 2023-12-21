CREATE DATABASE application;

USE application;


CREATE TABLE software (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    contact VARCHAR(255),
    version VARCHAR(255) NOT NULL,
    description TEXT,
    bug_id INT(11),
    CONSTRAINT BugExist FOREIGN KEY (bug_id) REFERENCES bug (id)
);

CREATE TABLE component (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    contact VARCHAR(255),
    description TEXT,
    software_id INT(11) NOT NULL,
    bug_id INT(11),
    CONSTRAINT SoftwareExist FOREIGN KEY (software_id) REFERENCES software(id),
    CONSTRAINT BugExist FOREIGN KEY (bug_id) REFERENCES bug (id)

);

CREATE TABLE package (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    version VARCHAR(255) NOT NULL,
    maintainer VARCHAR(255),
    description TEXT,
    software_id INT(11) NOT NULL,
    bug_id INT(11),
    CONSTRAINT SoftwareExist FOREIGN KEY (software_id) REFERENCES software(id),
    CONSTRAINT BugExist FOREIGN KEY (bug_id) REFERENCES bug (id)
);

CREATE TABLE bug (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    author VARCHAR(255) NOT NULL,
    owner VARCHAR(255) NOT NULL,
    created DATETIME DEFAULT current_timestamp,
    updated DATETIME,
    resolved DATETIME,
    severity ENUM ('1','2','3','4','5'),
    status ENUM ('unsolved', 'resolved'),
    summary VARCHAR(255),
    description TEXT,
    CONSTRAINT AuthorExist FOREIGN KEY (author) REFERENCES attachement (author)
);

CREATE TABLE symptom (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    keyword VARCHAR(255),
    description TEXT,
    bug_id INT(11) NOT NULL,
    CONSTRAINT BugExist FOREIGN KEY (bug_id) REFERENCES bug (id)
);

CREATE TABLE attachement (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    author VARCHAR(255) NOT NULL,
    created DATETIME DEFAULT current_timestamp,
    body TEXT NOT NULL
);

CREATE TABLE plaftorm (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    bug_id INT(11) NOT NULL,
    CONSTRAINT BugExist FOREIGN KEY (bug_id) REFERENCES bug (id)
);

