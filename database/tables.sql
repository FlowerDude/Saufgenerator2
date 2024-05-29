############################# TABLE CREATION #############################
DROP TABLE items;
DROP TABLE drinks;
DROP TABLE users;
DROP TABLE sessions;

CREATE TABLE sessions (id int auto_increment NOT NULL, sessionkey varchar(100), targetpoints int,  PRIMARY KEY(id));
CREATE TABLE users (id int auto_increment NOT NULL, username varchar(100), points int, fk_session int, PRIMARY KEY(id), FOREIGN KEY(fk_session) REFERENCES sessions(id) ON DELETE CASCADE);
CREATE TABLE drinks (id int auto_increment NOT NULL, drinkname varchar(100), measurement varchar(10), fk_session int, PRIMARY KEY(id), FOREIGN KEY(fk_session) REFERENCES sessions(id) ON DELETE CASCADE);
CREATE TABLE items (id int auto_increment NOT NULL, keyname varchar(100), fk_user int, PRIMARY KEY(id), FOREIGN KEY(fk_user) REFERENCES users(id) ON DELETE CASCADE);

############################# TEST DATA #############################
INSERT INTO sessions (sessionkey, targetpoints) VALUES ('UNIQUE_SESSION_ID_TEST', 999);
INSERT INTO users (username, points, fk_session) VALUES ('Sammy', 420, 1);
INSERT INTO users (username, points, fk_session) VALUES ('Marcel', 69, 1);
INSERT INTO users (username, points, fk_session) VALUES ('Dud3', -42, 1);
INSERT INTO drinks (drinkname, measurement, fk_session) VALUES ('Vodka', 'CL', 1);
INSERT INTO drinks (drinkname, measurement, fk_session) VALUES ('Beer', 'Finger', 1);
INSERT INTO drinks (drinkname, measurement, fk_session) VALUES ('Bud Light', 'L', 1);
INSERT INTO items (keyname, fk_user) VALUES ('FINGER_GUNS', 1);
INSERT INTO items (keyname, fk_user) VALUES ('DO_NOTHING', 1);
INSERT INTO items (keyname, fk_user) VALUES ('DROGGELBECHER', 3);
