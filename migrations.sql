
CREATE TABLE users (
   id INT NOT NULL AUTO_INCREMENT PRIMARY  KEY,
   username VARCHAR (50),
   pass VARCHAR(50)   
);



INSERT INTO users
(username, pass)
VALUES 
("CATA", "galerts");

SELECT * FROM users;


-- Uztaisīt HTML formu, kas ļauj pievienot lietotāju
-- 1. Sāksim ar PHP. uztaisīsim index.php







/*CREATE TABLE zvaigznes (
   id INT NOT NULL AUTO_INCREMENT PRIMARY  KEY,
   image VARCHAR (255),
   user_id INT
	  
);


INSERT INTO zvaigznes
(image,user_id)
VALUES
("stars1.png", 1);

SELECT * FROM stars;







