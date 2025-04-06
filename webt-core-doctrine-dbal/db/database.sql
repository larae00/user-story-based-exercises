CREATE DATABASE IF NOT EXISTS usarps_championship;
USE usarps_championship;

-- tabelle für die games
CREATE TABLE IF NOT EXISTS game_rounds (
    id INT AUTO_INCREMENT PRIMARY KEY,
    player_name VARCHAR(100) NOT NULL,
    symbol ENUM('rock', 'paper', 'scissors') NOT NULL,
    game_date DATETIME NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)

-- inserts
INSERT INTO game_rounds (player_name, symbol, game_date) VALUES
('Max Mustermann', 'rock', '2024-04-15 10:00:00'),
('Anna Schmidt', 'paper', '2024-04-15 10:15:00'),
('Tom Weber', 'scissors', '2024-04-15 10:30:00'),
('Lisa Müller', 'rock', '2024-04-15 10:45:00'),
('Paul Fischer', 'paper', '2024-04-15 11:00:00');