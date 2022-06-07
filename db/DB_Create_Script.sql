
DROP TABLE IF EXISTS CUSTOMERS;
DROP TABLE IF EXISTS PRODUCTS;
DROP TABLE IF EXISTS EVENTS;

CREATE TABLE CUSTOMERS
(
CUSTID INTEGER PRIMARY KEY,
FIRSTNAME varchar(64),
LASTNAME varchar(64),
ADDRESS varchar(255),
PHONE varchar(40),
CONCERN varchar(250)
);

INSERT INTO CUSTOMERS (FIRSTNAME, LASTNAME, ADDRESS, PHONE, CONCERN) 
VALUES ('John', 'Smith', '5 Fictitious Street, Springfield', 'Smitho.luvs.jess@hotmail.com', 'my meal was TOO Hot!'),
('Fred', 'Jones', '12 Some Place, Gotham', 'jones467@mailg.com', 'I lost my keys in the snow, can you please try and find it.'),
('Bob', 'Bee', '50 Fifty Court, Brisbane', 'bob.b@fakemail.com', 'When is it a good time to come to the snow?');

CREATE TABLE PRODUCTS
(
PRODID INTEGER PRIMARY KEY,
PRODUCTNAME varchar(64),
MANUFACTURER varchar(64),
DESCRIPTION varchar(255),
PRICE float
);

INSERT INTO PRODUCTS (PRODUCTNAME, MANUFACTURER, DESCRIPTION, PRICE) 
VALUES ('Blender', 'Breville', 'A fantastic wand blender', '99.99'),
('Coffee Master', 'Sunbeam', 'Single boiler machine with grinder attachment', '699.99'),
('Teapot', 'TeeeeeStore', 'China teapot', '19.99');


CREATE TABLE EVENTS (
	EVENTID	INTEGER,
	EVENTNAME	varchar(64),
	LOCATION	varchar(64),
	DESCRIPTION	varchar(255),
	DATE	varchar(10),
	TIME	varchar(20),
	IMAGE	varchar(100)
)

INSERT INTO EVENTS (EVENTNAME, LOCATION, DESCRIPTION, DATE, TIME, IMAGE)
VALUES ('First Day of the Season', 'Snowy Mountain', "Come and celbrate the opening day of a new season, there will be heaps of fun competitions to work the rust of your knees and music and DJ's to keep you energised.", '10 June', '8:00 am - 4:00 pm', './images/ski-pic5.jpg'),
('Snowy Mountain Slalom Darby', 'SM Slalom Field', "Slalom racing is all about who can get to the bottom the fastest following the alotted course. racing classes inlcude, Under 14's boys and girls, Under 18's Boys and Girls, Open age Boys and Girls. Prizes will be available for 1st 2nd and 3rd place. Can't wait to see you there!", '29 - 30 June','8:00 am - 4:00 pm','./images/ski-pic5.jpg'),


