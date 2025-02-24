CREATE DATABASE LOGIN;

CREATE TABLE LOGIN.users (
    id SERIAL PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

insert into LOGIN.users (username, password) values ('johndoe', 'jD@12345'),
('emily_smith', 'E!m1ly2024'),
('michael99', 'm1k3l3_2024'),
('sarah.jones', 'S@rah9876'),
('william.taylor', 'W1ll!am789'),
('lisa.martin', 'L!s@2025m@rt'),
('daniel_brown', 'D@niel2024!'),
('olivia_wilson', 'Ol!v1@2345'),
('james_clark', 'J@m3s_Clark23'),
('isabella_white', 'I$ab3ll@1Wht');