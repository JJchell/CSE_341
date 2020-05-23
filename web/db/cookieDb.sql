DROP TABLE order_details;
DROP TABLE orders;
DROP TABLE cookies;
DROP TABLE scout;


CREATE TABLE scout (
	scout_id SERIAL PRIMARY KEY,
	first_name VARCHAR(30) NOT NULL,
	last_name VARCHAR(30) NOT NULL,
	date_of_birth DATE,
	user_name VARCHAR(30) NOT NULL,
	password VARCHAR(30) NOT NULL,
	email VARCHAR(30) NOT NULL,
	phone INTEGER NOT NULL	
);

CREATE TABLE cookies (	
	cookie_id SERIAL PRIMARY KEY,
	cookie_name VARCHAR(30) NOT NULL,
    cookies_on_hand INT 
); 

CREATE TABLE orders(
	order_id SERIAL PRIMARY KEY,
	scout_id INT REFERENCES scout (scout_id)
);

CREATE TABLE order_details (
	order_id INT REFERENCES orders (order_id),
	scout_id INT REFERENCES scout (scout_id),
	PRIMARY KEY (order_id,scout_id),
    quantity_ordered INT
	
);



INSERT INTO cookies(cookie_name, cookies_on_hand) VALUES ('Caramel deLites', 50);
INSERT INTO cookies(cookie_name, cookies_on_hand) VALUES ('Peanut Butter Sandwich', 50);
INSERT INTO cookies(cookie_name, cookies_on_hand) VALUES ('Peanut Butter Patties', 50);
INSERT INTO cookies(cookie_name, cookies_on_hand) VALUES ('Thin Mints', 50);
INSERT INTO cookies(cookie_name, cookies_on_hand) VALUES ('Shortbread', 50);
INSERT INTO cookies(cookie_name, cookies_on_hand) VALUES ('Thanks-a-lot', 50);
INSERT INTO cookies(cookie_name, cookies_on_hand) VALUES ('Lemonades', 50);
INSERT INTO cookies(cookie_name, cookies_on_hand) VALUES ('Smores', 50);

INSERT INTO scout(first_name, last_name, date_of_birth, user_name, password, email, phone) VALUES ('Jessie', 'Chell', '10-04-04', 'username', 'password', '123@email.com', 5550001);
INSERT INTO scout(first_name, last_name, date_of_birth, user_name, password, email, phone) VALUES ('Samantha', 'Chell', '11-07-07', 'username', 'password', '123@email.com', 5550002);
INSERT INTO scout(first_name, last_name, date_of_birth, user_name, password, email, phone) VALUES ('Jaen', 'Gray', '12-25-04', 'username', 'password', '123@email.com', 5550003);
INSERT INTO scout(first_name, last_name, date_of_birth, user_name, password, email, phone) VALUES ('Carol', 'Danvers', '10-15-09', 'username', 'password', '123@email.com', 5550004);
INSERT INTO scout(first_name, last_name, date_of_birth, user_name, password, email, phone) VALUES ('Wanda', 'Maximoff', '02-4-11', 'username', 'password', '123@email.com', 5550005);
INSERT INTO scout(first_name, last_name, date_of_birth, user_name, password, email, phone) VALUES ('Emma', 'Frost', '08-05-10', 'username', 'password', '123@email.com', 5550006);
INSERT INTO scout(first_name, last_name, date_of_birth, user_name, password, email, phone) VALUES ('Peggy', 'Carter', '04-10-08', 'username', 'password', '123@email.com', 5550007);
INSERT INTO scout(first_name, last_name, date_of_birth, user_name, password, email, phone) VALUES ('MJ', 'Watson', '07-1-10', 'username', 'password', '123@email.com', 5550008);
INSERT INTO scout(first_name, last_name, date_of_birth, user_name, password, email, phone) VALUES ('Natasha', 'Romanova', '05-26-06', 'username', 'password', '123@email.com', 5550009);
INSERT INTO scout(first_name, last_name, date_of_birth, user_name, password, email, phone) VALUES ('Ann Marie', 'LeBeau', '06-14-04', 'username', 'password', '123@email.com', 5551010);
