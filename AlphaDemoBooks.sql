-- CREATE TABLE book ( 
-- 	book_id CHAR(13) PRIMARY KEY, 
-- 	language VARCHAR(32) NOT NULL, 
-- 	price INTEGER NOT NULL, 
-- 	date_of_publication DATE,
-- 	book_name VARCHAR(64) NOT NULL,
-- 	format VARCHAR(16) NOT NULL
-- );

INSERT INTO book (book_name, book_id, language, price, date_of_publication, format)
VALUES ('Sun Tzu Art of War', 9781929194308, 'Chinese', 7, '2014-04-21', 'hardcover');

INSERT INTO book (book_name, book_id, language, price, date_of_publication, format)
VALUES ('Batman: The Killing Joke', 9780234971642, 'English', 10, '2008-03-19', 'hardcover');

INSERT INTO book (book_name, book_id, language, price, date_of_publication, format)
VALUES ('Sun Tzu Art of War', 9781929194094, 'English', 7, '2014-04-21', 'paperback');

INSERT INTO book (book_name, book_id, language, price, date_of_publication, format)
VALUES ('Batman: White Knight', 9781401279592, 'English', 11, '2018-10-09', 'paperback');

INSERT INTO book (book_name, book_id, language, price, date_of_publication, format)
VALUES ('Heaven Sword & Dragon Sabre', 9781588991836, 'Chinese', 13, '2005-04-04', 'paperback');