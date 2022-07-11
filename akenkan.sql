-- drop database akenkan;
create database akenkan;
use akenkan;

/*Relates to Akenkan users*/
CREATE TABLE users(
	user_id INT AUTO_INCREMENT,
	email VARCHAR(100) UNIQUE,
	password VARCHAR(150) NOT NULL,
	display_name VARCHAR(100),
	account_status enum("active","suspended", "deleted") DEFAULT "active",
	role enum("admin", "buyer") DEFAULT "buyer",
	PRIMARY KEY (user_id)
);

CREATE TABLE claims(
	claim_id INT AUTO_INCREMENT,
	user_id INT,
	message TINYTEXT,
	claim_status enum("closed","opened") DEFAULT "opened",
	PRIMARY KEY (claim_id)
);


CREATE TABLE publisher(
	publisher_id INT AUTO_INCREMENT,
	publisher_name VARCHAR(200) NOT NULL,
	PRIMARY KEY (publisher_id)
);

CREATE TABLE author(
	author_id INT AUTO_INCREMENT,
	author_name VARCHAR(200),
	PRIMARY KEY (author_id)
);

/*Relates to the genres of books*/
CREATE TABLE genres(
	genre_name VARCHAR(80),
	PRIMARY KEY (genre_name)
);



/*Relates to the books being sold on Akenkan*/
CREATE TABLE books(
	book_id VARCHAR(120), /*Not int because it corresponds to the books isbn number (which is unique)*/
	title VARCHAR(250) NOT NULL,
	image_location VARCHAR(200),
	description TINYTEXT NOT NULL,
	publish_date DATETIME NOT NULL,
	book_status enum ("published","draft","deleted") DEFAULT "published",
	date_added DATETIME NOT NULL,
	publisher_id INT NOT NULL,
	author_id INT NOT NULL,
	price DOUBLE NOT NULL,
	PRIMARY KEY (book_id),
	FOREIGN KEY (publisher_id) REFERENCES publisher(publisher_id),
	FOREIGN KEY (author_id) REFERENCES author(author_id)
);



/*Relates to users' cart. If user is not logged in, user_id is null. IP address is required for all*/
CREATE TABLE cart(
	user_id INT,
	ip_address VARCHAR(25) NOT NULL,
	book_id VARCHAR(120),
	quantity INT,
	FOREIGN KEY (user_id) REFERENCES users(user_id),
	FOREIGN KEY (book_id) REFERENCES books(book_id)
);



/*Relates to the genres to which a book belongs. A book can be in several categories*/
CREATE TABLE book_genres(
	book_id VARCHAR(120),
	genre_name VARCHAR(80),
	FOREIGN KEY (book_id) REFERENCES books(book_id),
	FOREIGN KEY (genre_name) REFERENCES genres(genre_name)
);

/*Ensure that a book cannot be added to a genre twice*/
CREATE UNIQUE INDEX uq_book_genres
  ON book_genres(book_id, genre_name);

CREATE TABLE orders(
	user_id INT NOT NULL,
	order_id INT AUTO_INCREMENT NOT NULL,
	transaction_id VARCHAR(150) NOT NULL, /*Links to the payment provider's transaction id*/
	billing_address VARCHAR(200) NOT NULL,
	amount DOUBLE NOT NULL,
	order_status enum("processing","in shipping", "delivered") DEFAULT  "processing",
	PRIMARY KEY (order_id),
	FOREIGN KEY (user_id) REFERENCES users(user_id)
);



CREATE TABLE order_item(
	order_id INT NOT NULL,
	book_id VARCHAR(120) NOT NULL,
	quantity INT NOT NULL,
	PRIMARY KEY (order_id,book_id),
	FOREIGN KEY (order_id) REFERENCES orders(order_id),
	FOREIGN KEY (book_id) REFERENCES books(book_id)
);

CREATE TABLE reviews(
	user_id INT,
	book_id VARCHAR(120),
	num_of_stars INT,
	review_comment TINYTEXT,
	PRIMARY KEY (user_id, book_id),
	FOREIGN KEY (book_id) REFERENCES books(book_id),
	FOREIGN KEY (user_id) REFERENCES users(user_id)

);


