/*
CREATE TABLE food_ticket (
	id INT NOT NULL AUTO_INCREMENT,
	food_name VARCHAR(255),
	team INT,
	price INT,
	number_of_ticket INT,
	PRIMARY KEY (id)

);

INSERT INTO food_ticket ( food_name, team, price, number_of_ticket) VALUES
( 'rice', 1, 200, 60),
( 'curry', 4, 350, 100),
( 'chicken', 6, 400, 40),
( 'oden', 6, 400, 50),
( 'coffee set', 89, 300, 80),
( 'tea set', 89, 300, 20),
( 'hot dog', 89, 150, 80),
( 'udon', 10, 300, 60),
( 'soba', 10, 300, 40),
( 'zenzai', 11, 299, 50);
*/
CREATE TABLE used_ticket (
	used_number INTEGER NOT NULL AUTO_INCREMENT,
	time TIMESTAMP,
	PRIMARY KEY(used_number)
);

/*
DELETE FROM used_ticket
ORDER BY used_number DESC
LIMIT 1;
*/
