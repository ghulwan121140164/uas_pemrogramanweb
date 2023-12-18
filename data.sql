USE anime_list;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO"

START TRANSACTION;

CREATE TABLE anime (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    genre VARCHAR(100) NOT NULL,
    rating FLOAT NOT NULL
);

INSERT INTO anime (title, genre, rating) VALUES
('One Piece', 'Action, Adventure, Comedy', 8.5),
('Naruto', 'Action, Adventure', 8.3),
('Attack on Titan', 'Action, Drama, Fantasy', 9.0),
('My Hero Academia', 'Action, Comedy, Super Power', 8.7),
('Demon Slayer', 'Action, Demons, Historical', 9.1),
('Fullmetal Alchemist: Brotherhood', 'Action, Adventure, Drama', 9.2),
('Death Note', 'Mystery, Psychological, Thriller', 9.0),
('One Punch Man', 'Action, Comedy, Super Power', 8.7),
('Dragon Ball Z', 'Action, Adventure, Comedy', 8.6),
('Sword Art Online', 'Action, Adventure, Fantasy', 7.6);