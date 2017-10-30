CREATE TABLE teams (
    id int(6) AUTO_INCREMENT PRIMARY KEY,
    name varchar(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE players (
    id int(6) AUTO_INCREMENT PRIMARY KEY,
    team_id int(6),
    name VARCHAR(255),
    familyname VARCHAR(255),
    age int(6),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (team_id) REFERENCES teams(id) ON DELETE CASCADE
 );
