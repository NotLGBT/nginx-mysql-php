CREATE TABLE IF NOT EXISTS mytable (
    id INT AUTO_INCREMENT PRIMARY KEY,
    data VARCHAR(255) NOT NULL
);

INSERT INTO mytable (data) VALUES ('Data 1'), ('Data 2'), ('Data 3');
