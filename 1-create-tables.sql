/*
Hackathon - GRANTS

From Florida Department of Agriculture and Consumer Services
grants.fdacs.gov

====
Urban and Community Forestry Grants - Grant Awards
www.fs.usda.gov/managing-land/urban-forests/ucf/2023-grant-funding

====
GREEN MIAMI - Dade County Matching Grant
www.miamidade.gov/global/service.page?Mduid_service=ser1540844322968915

*/

# CREATE TABLE IF NOT EXISTS grant_opportunities (
DROP TABLE IF EXISTS grant_opportunities;
CREATE TABLE grant_opportunities (
    opportunity_id smallint unsigned primary key auto_increment,
    opportunity_title varchar(255),
    opportunity_url varchar(255),
    short_description varchar(255),
    division varchar(255),
    status varchar(25),
    posted_date date,
    close_date date,
    requirements text,
    guidelines text,
    timeline text,
    funding_amount decimal(10,2),
    flag boolean,
    partner varchar(255),
    city varchar(25),
    state varchar(25),
    notes varchar(255)
);

/*Table for grant_opportunity category e.g. restoration, tree planting etc.*/
CREATE TABLE categories (
    category_id smallint unsigned primary key  auto_increment,
    opportunity_id smallint,
    category_name varchar(255)
);


/*Table for Contact person/s for each opportunity*/

CREATE TABLE contacts (
    contact_id smallint unsigned primary key auto_increment,
    opportunity_id smallint,
    first_name varchar(55),
    last_name varchar(55),
    phone_number varchar(25),
    email varchar(55),
    address varchar(55),
    city varchar(25),
    state varchar(25),
    zip varchar(10),
    notes varchar(255)
);

/*This is Table for Supporting Documents for a specific opportunity*/
CREATE TABLE documents (
    document_id smallint unsigned primary key auto_increment,
    opportunity_id smallint,
    document_name varchar(55),
    document_url varchar(255)
);


show tables;

show columns from grant_opportunities;

describe grant_opportunities;



