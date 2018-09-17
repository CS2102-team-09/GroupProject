CREATE TABLE book ( 
	book_id CHAR(13) PRIMARY KEY, 
	language VARCHAR(32) NOT NULL, 
	price INTEGER NOT NULL, 
	date_of_publication DATE,
	book_name VARCHAR(64) NOT NULL,
	format VARCHAR(16) NOT NULL
);