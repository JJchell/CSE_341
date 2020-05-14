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
	cookie_name VARCHAR(30) NOT NULL,dr
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

