-- Table: Employee
CREATE TABLE Employee (
    Username varchar(24) NOT NULL,
    Passwords varchar(24) NOT NULL,
    First_Name varchar(15) NOT NULL,
    Last_Name varchar(15) NOT NULL,
    Tier1 bool NOT NULL,
    Tier2 bool NOT NULL,
    Tier3 bool NOT NULL,
    PRIMARY KEY (Username)
);

-- Table: CompositeLogin
CREATE TABLE CompositeLogin (
    Username varchar(24) NOT NULL,
    CLI_ORG_ID varchar(9) NOT NULL,
    PRIMARY KEY (Username,CLI_ORG_ID)
);

-- Table: Client
CREATE TABLE Client (
    CLI_ORG_ID varchar(9) NOT NULL,
    LAST_NAME varchar(15) NOT NULL,
    FIRST_NAME varchar(15) NOT NULL,
    MAID_NAME varchar(15) NULL,
    BIRTH_DATE varchar(8) NULL,
    AGE varchar(3) NULL,
    SS_NUMBER varchar(9) NOT NULL,
    STATE_ID varchar(9) NOT NULL,
    CLI_STATUS varchar(2) NOT NULL,
    PRIMARY KEY (CLI_ORG_ID)
);

-- Table: Classification
CREATE TABLE Classification (
    STATE_ID varchar(9) NOT NULL,
    SEX varchar(2) NOT NULL,
    RACE varchar(2) NOT NULL,
    HISPANIC varchar(2) NOT NULL,
    EDUCATION varchar(2) NULL,
    MARITAL varchar(1) NULL,
    LEG_STATUS varchar(1) NULL,
    VET_STATUS varchar(1) NULL,
    CLI_ORG_ID varchar(9) NOT NULL,
    PRIMARY KEY (STATE_ID)
);

-- Table: Financials
CREATE TABLE Financials (
    SS_NUMBER varchar(9) NOT NULL,
    EMPLOYMENT varchar(2) NULL,
    INCOME_SRC varchar(1) NULL,
    INCOME_HOUS varchar(6) NULL,
    INCOME_DEP varchar(2) NULL,
    ELIG_SSI varchar(2) NULL,
    ELIG_MCAID varchar(2) NULL,
    PAYMENT varchar(2) NULL,
    CLI_ORG_ID varchar(9) NOT NULL,
    PRIMARY KEY (SS_NUMBER)
);

-- Table: Medical
CREATE TABLE Medical (
    DSC_ID varchar(9) NOT NULL,
    HANDICAP_1 varchar(2) NULL,
    HANDICAP_2 varchar(2) NULL,
    PROBLEM_1 varchar(2) NULL,
    PROBLEM_2 varchar(2) NULL,
    DISAB_CATE varchar(1) NULL,
    DISAB_DUAL varchar(1) NULL,
    SPMI varchar(1) NULL,
    SEDC varchar(1) NULL,
    CLI_ORG_ID varchar(9) NOT NULL,
    PRIMARY KEY (DSC_ID)
);

-- Table: Treatment
CREATE TABLE Treatment (
    ACT_TREAT varchar(9) NOT NULL,
    INTEGR_TREAT varchar(2) NULL,
    PROGRAM_CODE varchar(9) NULL,
    DSC_ID varchar(9) NOT NULL,
    PRIMARY KEY (ACT_TREAT)
);

-- Table: Services
CREATE TABLE Services (
    SS_NUMBER varchar(9) NOT NULL,
    INPAT_SERV varchar(3) NULL,
    RESID_SERV varchar(3) NULL,
    PARTI_SERV varchar(3) NULL,
    OUTPA_SERV varchar(3) NULL,
    CASE_SERV varchar(3) NULL,
    DSC_ID varchar(9) NOT NULL,
    PRIMARY KEY (SS_NUMBER)
);

CREATE TABLE Admittence (
    SS_NUMBER varchar(9) NOT NULL,
    RPT_DATE varchar(8) NULL,
    RCD_TRAN varchar(1) NULL,
    ORG_CODE varchar(3) NULL,
    LOC_CODE varchar(4) NULL,
    ADM_DATE varchar(8) NULL,
    ADM_TYPE varchar(1) NULL,
    ADM_REFFER varchar(2) NULL,
    ADM_REFFER_OR varchar(3) NULL,
    DSC_ID VARCHAR(9) NOT NULL,
    PRIMARY KEY (SS_NUMBER)
);


-- Table: Discharge
CREATE TABLE Discharge (
    SS_NUMBER varchar(9) NOT NULL,
    DIS_STATUS varchar(1) NULL,
    DIS_DATE varchar(8) NULL,
    DIS_REFFER varchar(2) NULL,
    DIS_REFFER_OR varchar(3) NULL,
    DIS_CNTY varchar(2) NULL,
    ENT_DATE varchar(8) NULL,
    EXT_DATE varchar(8) NULL,
    DSC_ID VARCHAR(9) NOT NULL,
    PRIMARY KEY (SS_NUMBER)
);



-- foreign keys
-- Reference: Admittence_Medical (table: Admittence)
ALTER TABLE Admittence ADD CONSTRAINT Admittence_Medical FOREIGN KEY Admittence_Medical(DSC_ID)
    REFERENCES Medical(DSC_ID);

-- Reference: Classification_Client (table: Classification)
ALTER TABLE Classification ADD CONSTRAINT Classification_Client FOREIGN KEY Classification_Client(CLI_ORG_ID)
    REFERENCES Client(CLI_ORG_ID);

-- Reference: CompositeLogin_Client (table: CompositeLogin)
ALTER TABLE CompositeLogin ADD CONSTRAINT Client_CompositeLogin FOREIGN KEY Client_CompositeLogin(CLI_ORG_ID)
    REFERENCES Client(CLI_ORG_ID);

-- Reference: CompositeLogin_Employee (table: CompositeLogin)
ALTER TABLE CompositeLogin ADD CONSTRAINT Employee_CompositeLogin FOREIGN KEY Employee_CompositeLogin(Username)
    REFERENCES Employee(Username);
    
ALTER TABLE Composite ADD CONSTRAINT Employee_Composite FOREIGN KEY Employee_Composite(Username)
    REFERENCES Employee(Username);

-- Reference: Discharge_Medical (table: Discharge)
ALTER TABLE Discharge ADD CONSTRAINT Discharge_Medical FOREIGN KEY Discharge_Medical(DSC_ID)
    REFERENCES Medical(DSC_ID);

-- Reference: Financials_Client (table: Financials)
ALTER TABLE Financials ADD CONSTRAINT Financials_Client FOREIGN KEY Financials_Client(CLI_ORG_ID)
    REFERENCES Client(CLI_ORG_ID);

-- Reference: Medical_Client (table: Medical)
ALTER TABLE Medical ADD CONSTRAINT Medical_Client FOREIGN KEY Medical_Client(CLI_ORG_ID)
    REFERENCES Client(CLI_ORG_ID);

-- Reference: Services_Medical (table: Services)
ALTER TABLE Services ADD CONSTRAINT Services_Medical FOREIGN KEY Services_Medical(DSC_ID)
    REFERENCES Medical(DSC_ID);

-- Reference: Treatment_Medical (table: Treatment)
ALTER TABLE Treatment ADD CONSTRAINT Treatment_Medical FOREIGN KEY Treatment_Medical(DSC_ID)
    REFERENCES Medical(DSC_ID);



--INSERT INTO Employee VALUES('Amy1','OleMiss1!','Amy','Ashley',false, false, true);
INSERT INTO Employee VALUES('Adam2','OleMiss2!','Adam','Adams',false,false,true);
INSERT INTO Employee VALUES('Emily3','OleMiss3!','Emily','Evans',true,false,false);
INSERT INTO Employee VALUES('Everett4','OleMiss4!','Everett','Eagle',true,false,false);
INSERT INTO Employee VALUES('Elle5','OleMiss5!','Elle','Ellens',true,false,false);
INSERT INTO Employee VALUES('Eddy6','OleMiss6!','Eddy','Jackson',false,true,false);
INSERT INTO Employee VALUES('Eric7','OleMiss7!','Eric','Materson',false,true,false);
INSERT INTO Employee VALUES('Emma8','OleMiss8','Emma','Watson',false,true,false);


--INSERT INTO CompositeLogin VALUES('Adam2','ClI_ORG_ID');
INSERT INTO CompositeLogin VALUES('Adam2','200812565');
INSERT INTO CompositeLogin VALUES('Adam2','200813432');
INSERT INTO CompositeLogin VALUES('Adam2','200814567');

INSERT INTO CompositeLogin VALUES('Emily3','200812565');
INSERT INTO CompositeLogin VALUES('Emily3','200813432');
INSERT INTO CompositeLogin VALUES('Emily3','200814567');

INSERT INTO CompositeLogin VALUES('Everett4','200812565');
INSERT INTO CompositeLogin VALUES('Everett4','200813432');
INSERT INTO CompositeLogin VALUES('Everett4','200814567');

INSERT INTO CompositeLogin VALUES('Elle5','200812565');
INSERT INTO CompositeLogin VALUES('Elle5','200813432');
INSERT INTO CompositeLogin VALUES('Elle5','200814567');

INSERT INTO CompositeLogin VALUES('Eddy6','200812565');
INSERT INTO CompositeLogin VALUES('Eddy6','200813432');
INSERT INTO CompositeLogin VALUES('Eddy6','200814567');

INSERT INTO CompositeLogin VALUES('Eric7','200812565');
INSERT INTO CompositeLogin VALUES('Eric7','200813432');
INSERT INTO CompositeLogin VALUES('Eric7','200814567');

INSERT INTO CompositeLogin VALUES('Emma8','200812565');
INSERT INTO CompositeLogin VALUES('Emma8','200813432');
INSERT INTO CompositeLogin VALUES('Emma8','200814567');


--INSERT INTO Client VALUES('ClI_ORG_ID','LAST_NAME','FIRST_NAME','MAID_NAME','BIRTH_DATE','AGE','SS_NUMBER','STATE_ID','CLI_STATUS');
INSERT INTO Client VALUES('200812565','Wilkinson','John','Wilkinson','10251994','23','681128667','607247952','02');
INSERT INTO Client VALUES('200813432','Raby','Jason','Raby','02031985','31','047443083','649225870','570652144','09');
INSERT INTO Client VALUES('200814567','Wilkinson','Carley','Robbins','05021996','AGE','391803740','312106040','12');

-- INSERT INTO Classification VALUES('STATE_ID','SEX','RACE','Hispanic','Education','Marital', 'Leg_status', 'Vet_Status','CLI_ORG_ID');
INSERT INTO Classification VALUES('607247952','M','W','N','99','M', '1', 'Y','200812565');
INSERT INTO Classification VALUES('570652144','M','B','Y','98','S', '0', 'N','200813432');
INSERT INTO Classification VALUES('312106040','F','W','N','99','M', '1', 'N','200814567');

-- INSERT INTO Financials VALUES('SS_NUMBER','EMPLOYMENT','INCOME_SRC','INCOME_HOUS','INCOME_DEP','ELIG_SSI','ELIG_MCAID','PAYMENT','CLI_ORG_ID')
INSERT INTO Financials VALUES('681128667','08','9','0','00','8','8','01','200812565');
INSERT INTO Financials VALUES('649225870','06','2','0','00','8','8','01','200813432');
INSERT INTO Financials VALUES('391803740','04','5','4','00','8','8','01','200814567');

--INSERT INTO Medical VALUES('DSC_ID', 'HANDICAP_1','HANDICAP_2','PROBLEM_1', 'PROBLEM_2','DISAB_CATE','DISAB_DUAL','SPMI','SEDC','CLI_ORG_ID');
INSERT INTO Medical VALUES('6','06','99','98','99','2','2','U','U','200812565');
INSERT INTO Medical VALUES('2','06','99','98','99','2','2','U','U','200813432');
INSERT INTO Medical VALUES('5','98','99','97','99','2','2','U','U','200814567');

--INSERT INTO Treatment VALUES('ACT_TREAT','INTEGR_TREAT','PROGRAM_CODE','DSC_ID');
INSERT INTO Treatment VALUES('U','U','4000','6');
INSERT INTO Treatment VALUES('U','U','4000','2');
INSERT INTO Treatment VALUES('N','N','8888','5');


--INSERT INTO Services VALUES('SS_NUMBER','INAPT_SERV','RESID_SERV','OUTPA_SER','CASE_SER','DSC_ID');
INSERT INTO Services VALUES('681128667','Y','Y','Y','N','6');
INSERT INTO Services VALUES('649225870','Y','N','N','Y','2');
INSERT INTO Services VALUES('391803740','N','Y','N','Y','5');


--INSERT INTO Admittence VALUES('SS_NUMBER','RPT_DATE','RCD_TRAN','ORG_CODE','LOC_CODE','ADM_DATE','ADM_TYPE','ADM_REFFER','ADM_REFFER_OR','DSC_ID');
INSERT INTO Admittence VALUES('681128667','10282005','4','301','7860','120113','1','21','2','6');
INSERT INTO Admittence VALUES('649225870','01231998','4','301','7860','03141998','1','21','1','2');
INSERT INTO Admittence VALUES('391803740','07082011','4','301','7860','07141999','1','21','2','5');


--INSERT INTO Discharge VALUES('SS_NUMBER','DIS_STATUS','DIS_DATE','DIS_REFFER','DIS_REFFER_OR','DIS_CNTY','ENT_DATE','EXT_DATE','DSC_ID');
INSERT INTO Discharge VALUES('681128667','8','10282013','98','0','98','10282005','10282013','6');
INSERT INTO Discharge VALUES('649225870','8','01232004','98','0','98','01231998','01232004','2');
INSERT INTO Discharge VALUES('391803740','8','07082014','98','0','98','07082011','07082014','5');
