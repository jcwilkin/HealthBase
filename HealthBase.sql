-- Table: Employee
CREATE TABLE Employee (
    Username varchar(24) NOT NULL,
    Passwords varchar(24) NOT NULL,
    First_Name varchar(15) NOT NULL,
    Last_Name varchar(15) NOT NULL,
    Tier1 int NOT NULL,
    Tier2 int NOT NULL,
    Tier3 int NOT NULL,
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
    AGE int(3) NULL,
    SS_NUMBER varchar(9) NOT NULL,
    STATE_ID varchar(9) NOT NULL,
    EMP_ID varchar(24) NOT NULL,
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
    DSC_ID int NOT NULL,
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
    ACT_TREAT int NOT NULL,
    INTEGR_TREAT varchar(2) NULL,
    PROGRAM_CODE int NULL,
    DSC_ID int NOT NULL,
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
    DSC_ID int NOT NULL,
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
    DSC_ID int NOT NULL,
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
    DSC_ID int NOT NULL,
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



