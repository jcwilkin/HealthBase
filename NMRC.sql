-- Table: Admittence
CREATE TABLE Admittence (
    CLI_ORG_ID varchar(9) NOT NULL,
    RPT_DATE varchar(8) NOT NULL,
    RCD_TRAN varchar(1) NOT NULL,
    ORG_CODE varchar(3) NOT NULL,
    LOC_CODE varchar(4) NOT NULL,
    ADM_DATE varchar(8) NOT NULL,
    ADM_TYPE varchar(1) NOT NULL,
    ADM_REFFER varchar(2) NOT NULL,
    ADM_REFFER_OR varchar(3) NOT NULL,
    Medical_DSC_ID int NOT NULL,
    CONSTRAINT Admittence_pk PRIMARY KEY (CLI_ORG_ID)
) COMMENT 'When Started';

-- Table: Classification
CREATE TABLE Classification (
    STATE_ID varchar(9) NOT NULL,
    SEX varchar(2) NOT NULL,
    RACE varchar(2) NOT NULL,
    HISPANIC varchar(2) NOT NULL,
    EDUCATION varchar(2) NOT NULL,
    MARITAL varchar(1) NOT NULL,
    LEG_STATUS varchar(1) NOT NULL,
    VET_STATUS varchar(1) NOT NULL,
    Client_CLI_ORG_ID varchar(9) NOT NULL,
    CONSTRAINT Classification_pk PRIMARY KEY (STATE_ID)
) COMMENT 'Traits of the Client';

-- Table: Client
CREATE TABLE Client (
    CLI_ORG_ID varchar(9) NOT NULL,
    LAST_NAME varchar(15) NOT NULL,
    FIRST_NAME varchar(15) NOT NULL,
    MAID_NAME varchar(15) NOT NULL,
    BIRTH_DATE varchar(8) NOT NULL,
    AGE varchar(3) NOT NULL,
    SS_NUMBER varchar(9) NOT NULL,
    STATE_ID varchar(9) NOT NULL,
    EMP_ID varchar(24) NOT NULL,
    CLI_STATUS varchar(2) NOT NULL,
    Employee_Emp_ID varchar(24) NOT NULL,
    CONSTRAINT Client_pk PRIMARY KEY (CLI_ORG_ID)
) COMMENT 'This is the Clients Basic information';

-- Table: Discharge
CREATE TABLE Discharge (
    CLI_ORG_ID varchar(9),
    DIS_STATUS varchar(1),
    DIS_DATE varchar(8),
    DIS_REFFER varchar(2),
    DIS_REFFER_OR varchar(3),
    DIS_CNTY varchar(2),
    ENT_DATE varchar(8),
    EXT_DATE varchar(8),
    Admittence_CLI_ORG_ID varchar(9) NOT NULL,
    CONSTRAINT Discharge_pk PRIMARY KEY (CLI_ORG_ID)
) COMMENT 'Patients Discharge';

-- Table: Employee
CREATE TABLE Employee (
    Emp_ID varchar(24) NOT NULL,
    First_Name varchar(15) NOT NULL,
    Last_Name varchar(15) NOT NULL,
    Username varchar(15) NOT NULL,
    Login_Username varchar(24) NOT NULL,
    Tier1 int NOT NULL,
    Tier2 int NOT NULL,
    Tier3 int NOT NULL,
    CONSTRAINT Employee_pk PRIMARY KEY (Emp_ID)
) COMMENT 'Information about Employee to create user account';

-- Table: Financials
CREATE TABLE Financials (
    SS_NUMBER varchar(9) NOT NULL,
    EMPLOYMENT varchar(2) NOT NULL,
    INCOME_SRC varchar(1) NOT NULL,
    INCOME_HOUS varchar(6) NOT NULL,
    INCOME_DEP varchar(2) NOT NULL,
    ELIG_SSI int NOT NULL,
    ELIG_MCAID int NOT NULL,
    PAYMENT varchar(2) NOT NULL,
    Client_CLI_ORG_ID varchar(9) NOT NULL,
    CONSTRAINT Financials_pk PRIMARY KEY (SS_NUMBER)
) COMMENT 'Income and Aid';

-- Table: Login
CREATE TABLE Login (
    Username varchar(24) NOT NULL,
    Password varchar(24) NOT NULL,
    Emp_ID varchar(24) NOT NULL,
    CONSTRAINT Login_pk PRIMARY KEY (Username)
) COMMENT 'Contains the Information for Logging into the Web Interface.';

-- Table: Medical
CREATE TABLE Medical (
    DSC_ID int NOT NULL,
    HANDICAP_1 varchar(2) NOT NULL,
    HANDICAP_2 varchar(2) NOT NULL,
    PROBLEM_1 varchar(2) NOT NULL,
    PROBLEM_2 varchar(2) NOT NULL,
    DISAB_CATE varchar(1) NOT NULL,
    DISAB_DUAL varchar(1) NOT NULL,
    SPMI varchar(1) NOT NULL,
    SEDC varchar(1) NOT NULL,
    CLI_ORG_ID varchar(9) NOT NULL,
    Client_CLI_ORG_ID varchar(9) NOT NULL,
    CONSTRAINT Medical_pk PRIMARY KEY (DSC_ID)
) COMMENT 'MEDICAL DIAGNOSIS';

-- Table: Services
CREATE TABLE Services (
    INPAT_SERV varchar(3) NOT NULL,
    RESID_SERV varchar(3) NOT NULL,
    PARTI_SERV varchar(3) NOT NULL,
    OUTPA_SERV varchar(3) NOT NULL,
    CASE_SERV varchar(3) NOT NULL,
    DSC_ID int NOT NULL,
    Medical_DSC_ID int NOT NULL,
    CONSTRAINT Services_pk PRIMARY KEY (DSC_ID)
) COMMENT 'Services offered';

-- Table: Treatment
CREATE TABLE Treatment (
    DCD_ID int NOT NULL,
    INTEGR_TREAT varchar(2) NOT NULL,
    ACT_TREAT int NOT NULL,
    PROGRAM_CODE int NOT NULL,
    Services_DSC_ID int NOT NULL,
    CONSTRAINT Treatment_pk PRIMARY KEY (DCD_ID)
) COMMENT 'Treatment for medical service';

-- foreign keys
-- Reference: Admittence_Medical (table: Admittence)
ALTER TABLE Admittence ADD CONSTRAINT Admittence_Medical FOREIGN KEY Admittence_Medical (Medical_DSC_ID)
    REFERENCES Medical (DSC_ID);

-- Reference: Classification_Client (table: Classification)
ALTER TABLE Classification ADD CONSTRAINT Classification_Client FOREIGN KEY Classification_Client (Client_CLI_ORG_ID)
    REFERENCES Client (CLI_ORG_ID);

-- Reference: Client_Employee (table: Client)
ALTER TABLE Client ADD CONSTRAINT Client_Employee FOREIGN KEY Client_Employee (Employee_Emp_ID)
    REFERENCES Employee (Emp_ID);

-- Reference: Discharge_Admittence (table: Discharge)
ALTER TABLE Discharge ADD CONSTRAINT Discharge_Admittence FOREIGN KEY Discharge_Admittence (Admittence_CLI_ORG_ID)
    REFERENCES Admittence (CLI_ORG_ID);

-- Reference: Employee_Login (table: Employee)
ALTER TABLE Employee ADD CONSTRAINT Employee_Login FOREIGN KEY Employee_Login (Login_Username)
    REFERENCES Login (Username);

-- Reference: Financials_Client (table: Financials)
ALTER TABLE Financials ADD CONSTRAINT Financials_Client FOREIGN KEY Financials_Client (Client_CLI_ORG_ID)
    REFERENCES Client (CLI_ORG_ID);

-- Reference: Medical_Client (table: Medical)
ALTER TABLE Medical ADD CONSTRAINT Medical_Client FOREIGN KEY Medical_Client (Client_CLI_ORG_ID)
    REFERENCES Client (CLI_ORG_ID);

-- Reference: Services_Medical (table: Services)
ALTER TABLE Services ADD CONSTRAINT Services_Medical FOREIGN KEY Services_Medical (Medical_DSC_ID)
    REFERENCES Medical (DSC_ID);

-- Reference: Treatment_Services (table: Treatment)
ALTER TABLE Treatment ADD CONSTRAINT Treatment_Services FOREIGN KEY Treatment_Services (Services_DSC_ID)
    REFERENCES Services (DSC_ID);



