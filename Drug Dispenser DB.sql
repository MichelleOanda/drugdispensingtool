CREATE  DATABASE IF NOT EXISTS DrugDispenser;
CREATE TABLE IF NOT EXISTS DrugDispenser.Patient (
patientname VARCHAR(30) NOT NULL,
patientPhone_number INT(12) NOT NULL,
patientSSN INT(15) NOT NULL,
patient_email VARCHAR(25) NOT NULL,
patient_age INT(3) NOT NULL,
patient_address VARCHAR (15),
doctorSSN INT(15) NOT NULL,
primaryDoctor VARCHAR (30),
prescriptionID VARCHAR(30),
PRIMARY KEY (patientSSN),CONSTRAINT `Doctor_FK` FOREIGN KEY (`doctorSSN`) REFERENCES Doctor(`doctorSSN`),
CONSTRAINT `Prescription_FK` FOREIGN KEY (`prescriptionID`) REFERENCES Prescription(`prescriptionID`));

CREATE TABLE IF NOT EXISTS DrugDispenser.Doctor(
doctorname VARCHAR(30) NOT NULL,
doctorPhone_number INT(12) NOT NULL,
doctorSSN INT(15) NOT NULL,
doctor_age INT(10) NOT NULL,
doctor_address VARCHAR (15),
doctor_email VARCHAR(25) NOT NULL,
specialty VARCHAR(20) NOT NULL,
patientSSN INT(15) NOT NULL,
years_experience INT(10) NOT NULL,
prescriptionID VARCHAR(30),
PRIMARY KEY (doctorSSN),
CONSTRAINT `Patient_FK` FOREIGN KEY (`patientSSN`) REFERENCES Patient(`patientSSN`),
CONSTRAINT `Prescription_FK` FOREIGN KEY (`prescriptionID`) REFERENCES Prescription(`prescriptionID`));

CREATE TABLE IF NOT EXISTS DrugDispenser.Pharmacy(
pharmacyName VARCHAR(30) NOT NULL,
pharmID VARCHAR(15) NOT NULL,
pharmPhone_number INT(12) NOT NULL,
pharm_address VARCHAR (15) NOT NULL,
pharm_email VARCHAR(25) NOT NULL,
druglist VARCHAR (1000) NOT NULL,
contractID VARCHAR(10) NOT NULL,
contractSupervisor VARCHAR(15) NOT NULL,
PRIMARY KEY(pharmID),
CONSTRAINT `Contract_FK1` FOREIGN KEY (`contractID`) REFERENCES Contract(`contractID`),
CONSTRAINT `Contract_FK2` FOREIGN KEY (`contractSupervisor`) REFERENCES Contract(`contractSupervisor`));

CREATE TABLE IF NOT EXISTS DrugDispenser.PharmaceuticalCompany(
pharmCo_name VARCHAR(30) NOT NULL,
pharmCoID VARCHAR(20) NOT NULL,
pharmCo_phone_number INT(12) NOT NULL,
pharmCo_address VARCHAR (15) NOT NULL,
pharrmCo_email VARCHAR(25) NOT NULL,
drug_trade_name VARCHAR (1000) NOT NULL,
contractID VARCHAR(10) NOT NULL,
PRIMARY KEY(pharmCoID),
CONSTRAINT `Contract_FK` FOREIGN KEY (`contractID`) REFERENCES Contract(`contractID`));

CREATE TABLE IF NOT EXISTS DrugDispenser.Contract(
contractID VARCHAR(10) NOT NULL,
startDate DATE,
endDate DATE,
contractText VARCHAR(1000) NOT NULL,
contractSupervisor VARCHAR(15) NOT NULL,
PRIMARY KEY(contractID));

CREATE TABLE IF NOT EXISTS DrugDispenser.Drugs(
tradeName VARCHAR(15) NOT NULL,
DrugID VARCHAR(15) NOT NULL,
formulae VARCHAR (30) NOT NULL,
pharmCoID VARCHAR(20) NOT NULL,
manufactureDate DATE,
expiryDate DATE,
PRIMARY KEY(DrugID),
CONSTRAINT `PharmCo_FK` FOREIGN KEY (`pharmCoID`) REFERENCES PharmaceuticalCompanY(`pharmCoID`));

CREATE TABLE IF NOT EXISTS DrugDispenser.Prescription(
prescriptionID VARCHAR(15) NOT NULL,
issueDate DATE,
quantity INT(15) NOT NULL,
PRIMARY KEY (prescriptionID));




