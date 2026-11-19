DROP TABLE IF EXISTS uczniowie2;

CREATE TABLE uczniowie2 (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    imie TEXT NOT NULL,
    nazwisko TEXT NOT NULL
);

INSERT INTO uczniowie2 (imie, nazwisko) VALUES
('Jan', 'Kowalski'),
('Anna', 'Nowak'),
('Piotr', 'Zielinski');