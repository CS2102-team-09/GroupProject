const queryString = "DROP TABLE book;\n" +
    "CREATE TABLE book (\n" +
    "    book_id VARCHAR(100) PRIMARY KEY,\n" +
    "    name VARCHAR(100),\n" +
    "    price NUMERIC,\n" +
    "    date_of_publication DATE\n" +
    ");\n" +
    "INSERT INTO book VALUES ('PHP01', 'Complete PHP 01', 19.99, '2018-09-21');\n" +
    "INSERT INTO book VALUES ('PHP02', 'Complete PHP 02', 19.99, '2018-09-21');\n" +
    "INSERT INTO book VALUES ('PHP03', 'Complete PHP 03', 19.99, '2018-09-21');\n" +
    "INSERT INTO book VALUES ('PHP04', 'Complete PHP 04', 19.99, '2018-09-21');\n" +
    "INSERT INTO book VALUES ('PHP05', 'Complete PHP 04', 19.99, '2018-09-21');\n" +
    "INSERT INTO book VALUES ('PHP06', 'Complete PHP 06', 19.99, '2018-09-21');\n" +
    "INSERT INTO book VALUES ('PHP07', 'Complete PHP 07', 19.99, '2018-09-21');\n" +
    "INSERT INTO book VALUES ('PHP08', 'Complete PHP 08', 19.99, '2018-09-21');\n" +
    "INSERT INTO book VALUES ('PHP09', 'Complete PHP 09', 19.99, '2018-09-21');\n" +
    "INSERT INTO book VALUES ('PHP10', 'Complete PHP 10', 19.99, '2018-09-21');\n" +
    "INSERT INTO book VALUES ('PHP11', 'Complete PHP 11', 19.99, '2018-09-21');\n" +
    "INSERT INTO book VALUES ('PHP12', 'Complete PHP 12', 19.99, '2018-09-21');\n" +
    "INSERT INTO book VALUES ('PHP13', 'Complete PHP 13', 19.99, '2018-09-21');\n" +
    "INSERT INTO book VALUES ('PHP14', 'Complete PHP 14', 19.99, '2018-09-21');\n" +
    "INSERT INTO book VALUES ('PHP15', 'Complete PHP 15', 19.99, '2018-09-21');";

export default queryString;
