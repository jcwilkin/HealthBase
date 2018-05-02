
CREATE TABLE Employee (
    Username varchar(24) ,
    Passwords varchar(15) ,
    First_Name varchar(15) ,
    Last_Name varchar(15) ,
    Employee_Level int ,
    PRIMARY KEY (Username)
);

CREATE TABLE Composite(
     Username varchar(24) ,
     CLI_ORG_ID varchar(9) ,
     PRIMARY KEY (Username, CLI_ORG_ID)
);


DROP TABLE IF EXISTS Clients;
CREATE TABLE Clients (
    CLI_ORG_ID varchar(9) ,
    LAST_NAME varchar(15) ,
    FIRST_NAME varchar(15) ,
    MAID_NAME varchar(15),
    BIRTH_DATE varchar(8) ,
    AGE varchar(3) ,
    SS_NUMBER varchar(9) ,
    STATE_ID varchar(9) ,
    CLI_STATUS varchar(2) ,
    PRIMARY KEY (CLI_ORG_ID)
);


DROP TABLE IF EXISTS Classification;
CREATE TABLE Classification (
    STATE_ID varchar(9) ,
    SEX varchar(2) ,
    RACE varchar(2) ,
    HISPANIC varchar(2) ,
    EDUCATION varchar(2) ,
    MARITAL varchar(1) ,
    LEG_STATUS varchar(1) ,
    VET_STATUS varchar(1) ,
    CLI_ORG_ID varchar(9) ,
    PRIMARY KEY (STATE_ID)
);

DROP TABLE IF EXISTS Financials;
CREATE TABLE Financials (
    SS_NUMBER varchar(9) ,
    EMPLOYMENT varchar(2) ,
    INCOME_SRC varchar(1) ,
    INCOME_HOUS varchar(6) ,
    INCOME_DEP varchar(2) ,
    ELIG_SSI varchar(2) ,
    ELIG_MCAID varchar(2),
    PAYMENT varchar(2) ,
    CLI_ORG_ID varchar(9),
    PRIMARY KEY (SS_NUMBER)
);


DROP TABLE IF EXISTS Medical;
CREATE TABLE Medical (
    DSC_ID varchar(9) ,
    HANDICAP_1 varchar(2) ,
    HANDICAP_2 varchar(2) ,
    PROBLEM_1 varchar(2) ,
    PROBLEM_2 varchar(2) ,
    DISAB_CATE varchar(1) ,
    DISAB_DUAL varchar(1) ,
    SPMI varchar(1) ,
    SEDC varchar(1) ,
    CLI_ORG_ID varchar(9) ,
    PRIMARY KEY (DSC_ID)
);


DROP TABLE IF EXISTS Treatment;
CREATE TABLE Treatment (
    SS_NUMBER VARCHAR(9),
    ACT_TREAT varchar(9) ,
    INTEGR_TREAT varchar(2) ,
    PROGRAM_CODE varchar(9) ,
    DSC_ID varchar(9) ,
    PRIMARY KEY (SS_NUMBER)
);


DROP TABLE IF EXISTS Services;
CREATE TABLE Services (
    SS_NUMBER varchar(9) ,
    INPAT_SERV varchar(3),
    RESID_SERV varchar(3),
    PARTI_SERV varchar(3),
    OUTPA_SERV varchar(3),
    CASE_SERV varchar(3),
    DSC_ID varchar(9) ,
    PRIMARY KEY (SS_NUMBER)
);

DROP TABLE IF EXISTS Admittence;
CREATE TABLE Admittence (
    SS_NUMBER varchar(9) ,
    RPT_DATE varchar(8) ,
    RCD_TRAN varchar(1),
    ORG_CODE varchar(3) ,
    LOC_CODE varchar(4) ,
    ADM_DATE varchar(8) ,
    ADM_TYPE varchar(1) ,
    ADM_REFFER varchar(2),
    ADM_REFFER_OR varchar(3) ,
    DSC_ID VARCHAR(9) ,
    PRIMARY KEY (SS_NUMBER)
);


DROP TABLE IF EXISTS Discharge;
CREATE TABLE Discharge (
    SS_NUMBER varchar(9) ,
    DIS_STATUS varchar(1) ,
    DIS_DATE varchar(8) ,
    DIS_REFFER varchar(2) ,
    DIS_REFFER_OR varchar(3),
    DIS_CNTY varchar(2) ,
    ENT_DATE varchar(8),
    EXT_DATE varchar(8) ,
    DSC_ID VARCHAR(9) ,
    PRIMARY KEY (SS_NUMBER)
);




ALTER TABLE Composite ADD CONSTRAINT Clients_Composite FOREIGN KEY Clients_Composite (CLI_ORG_ID)
    REFERENCES Clients (CLI_ORG_ID);
    
 ALTER TABLE Composite ADD CONSTRAINT Employee_Composite FOREIGN KEY Employee_Composite(Username)
    REFERENCES Employee(Username);

ALTER TABLE Classification ADD CONSTRAINT Classification_Clients FOREIGN KEY Classification_Clients(CLI_ORG_ID)
    REFERENCES Clients (CLI_ORG_ID);

ALTER TABLE Admittence ADD CONSTRAINT Admittence_Medical FOREIGN KEY Admittence_Medical(DSC_ID)
    REFERENCES Medical(DSC_ID);

ALTER TABLE Financials ADD CONSTRAINT Financials_Clients FOREIGN KEY Financials_Clients(CLI_ORG_ID)
    REFERENCES Clients(CLI_ORG_ID);

ALTER TABLE Medical ADD CONSTRAINT Medical_Clients FOREIGN KEY Medical_Clients(CLI_ORG_ID)
    REFERENCES Clients(CLI_ORG_ID);

ALTER TABLE Discharge ADD CONSTRAINT Discharge_Medical FOREIGN KEY Discharge_Medical(DSC_ID)
    REFERENCES Medical(DSC_ID);

ALTER TABLE Services ADD CONSTRAINT Services_Medical FOREIGN KEY Services_Medical(DSC_ID)
    REFERENCES Medical(DSC_ID);

ALTER TABLE Treatment ADD CONSTRAINT Treatment_Medical FOREIGN KEY Treatment_Medical(DSC_ID)
    REFERENCES Medical(DSC_ID);

INSERT INTO Employee VALUES('Amy1','OleMiss1!','Amy','Ashley',3);
INSERT INTO Employee VALUES('Adam2','OleMiss2!','Adam','Adams',3);
INSERT INTO Employee VALUES('Emily3','OleMiss3!','Emily','Evans',2);
INSERT INTO Employee VALUES('Everett4','OleMiss4!','Everett','Eagle',2);
INSERT INTO Employee VALUES('Eddy6','OleMiss6!','Eddy','Jackson',1);
INSERT INTO Employee VALUES('Eric5','OleMiss5!','Eric','Materson',1);


INSERT INTO Clients VALUES('200812565','Wilkinson','John','Wilkinson','10251994','23','681128667','607247952','02');
INSERT INTO Clients VALUES('200814567','Wilkinson','Carley','Robbins','05021996','22','391803740','312106040','12');

INSERT INTO Composite VALUES('Amy1','200812565');
INSERT INTO Composite VALUES('Amy1','200814567');

INSERT INTO Composite VALUES('Adam2','200812565');
INSERT INTO Composite VALUES('Adam2','200814567');

INSERT INTO Composite VALUES('Emily3','200812565');
INSERT INTO Composite VALUES('Emily3','200814567');

INSERT INTO Composite VALUES('Everett4','200812565');
INSERT INTO Composite VALUES('Everett4','200814567');

INSERT INTO Composite VALUES('Eric5','200812565');
INSERT INTO Composite VALUES('Eric5','200814567');

INSERT INTO Composite VALUES('Eddy6','200812565');
INSERT INTO Composite VALUES('Eddy6','200814567');


INSERT INTO Classification VALUES('607247952','M','W','N','99','M', '1', 'Y','200812565');
INSERT INTO Classification VALUES('312106040','F','W','N','99','M', '1', 'N','200814567');

INSERT INTO Financials VALUES('681128667','08','9','0','00','8','8','01','200812565');
INSERT INTO Financials VALUES('391803740','04','5','4','00','8','8','01','200814567');


INSERT INTO Medical VALUES('6','06','99','98','99','2','2','U','U','200812565');
INSERT INTO Medical VALUES('5','98','99','97','99','2','2','U','U','200814567');


INSERT INTO Treatment VALUES('681128667','U','U','4000','6');
INSERT INTO Treatment VALUES('391803740','N','N','8888','5');


INSERT INTO Services VALUES('681128667','Y','Y','Y','N','Y','6');
INSERT INTO Services VALUES('391803740','N','Y','N','Y','Y','5');


INSERT INTO Admittence VALUES('681128667','10282005','4','301','7860','120113','1','21','2','6');
INSERT INTO Admittence VALUES('391803740','07082011','4','301','7860','07141999','1','21','2','5');

INSERT INTO Discharge VALUES('681128667','8','10282013','98','0','98','10282005','10282013','6');
INSERT INTO Discharge VALUES('391803740','8','07082014','98','0','98','07082011','07082014','5');
