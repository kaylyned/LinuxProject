use mysql;
GO
drop database IF EXISTS dbHero;
GO
create database dbHero;
GO
use dbHero;
GO

/* USERS */

create table tbUser
(
userName VARCHAR (20),
PRIMARY KEY(userName),
userPassword VARCHAR(20),
PathIm VARCHAR(120)
);
GO

  /* STORED PROCS FOR USERS */

delimiter //

create procedure spCreateUser
  (
    _userName VARCHAR(20),
    _userPassword VARCHAR (20),
    _PathIm VARCHAR(120)

  )
  BEGIN
  INSERT INTO tbUser(userName, userPassword, PathIm) VALUES
                  (_userName, _userPassword, _PathIm);

  END//
  GO

create procedure spUPath
  (
    _userName VARCHAR(20),
    _PathIm VARCHAR(120)
  )
  BEGIN
UPDATE tbUser SET
PathIm = _PathIm
WHERE userName = _userName;
  END//
  GO

create procedure spLogin
  (
    _userName VARCHAR(20),
    _userPassword VARCHAR (20)
  )
BEGIN
SELECT * FROM tbUser WHERE userName = _userName && userPassword = _userPassword;
END//
GO

delimiter ;

GO


           /* HERO */

create table tbHero
  (
    heroID INT NOT NULL AUTO_INCREMENT,
    heroName VARCHAR(60),
    heroAge INT,
    userName VARCHAR(20),
    heroGender VARCHAR(2),
    heroWorld VARCHAR(50),
    heroColor VARCHAR(60),
    PRIMARY KEY (heroID),
    FOREIGN KEY (userName) REFERENCES tbUser(userName)
  );
  GO


  /* STORED PROCS HEROES*/

delimiter //


create procedure spCreateHero
  (
    _heroAge INT,
    _heroName VARCHAR(60),
    _heroWorld VARCHAR(50),
    _heroColor VARCHAR(60),
    _heroGender VARCHAR(2),
    _userName VARCHAR(20)

  )
  BEGIN
  INSERT INTO tbHero (heroAge, heroName, heroWorld, heroColor, heroGender, userName)VALUES
                  (_heroAge, _heroName, _heroWorld, _heroColor, _heroGender, _userName);

END//
GO

create procedure spUpdateHero
  (
    _heroID INT,
    _heroName VARCHAR(60),
    _heroAge INT,
    _heroGender VARCHAR(2),
    _heroWorld VARCHAR(50),
    _heroColor VARCHAR(60)

  )
  BEGIN
  UPDATE tbHero SET
  heroName = _heroName,
  heroColor = _heroColor,
  heroAge = _heroAge,
  heroGender = _heroGender,
  heroWorld = _heroWorld
  WHERE heroID = _heroID;
  END//


create procedure spDeleteHero
    (
      _heroID INT
    )
    BEGIN
    DELETE FROM tbHero WHERE heroID = _heroID;
    END//
    GO


    create procedure spReadHero
      (
        _heroID INT

      )
    BEGIN
    SELECT * FROM tbUser inner join tbHero on
    tbUser.userName = tbHero.userName
    WHERE heroID = _heroID;
    END//
    GO



/*READ ALL */


  create procedure spReadAll
    (

    )
    BEGIN
    SELECT * FROM tbUser;
    END//
    GO


      create procedure spReadAllH
        (

        )
        BEGIN
        SELECT * FROM tbHero inner join tbUser on
        tbHero.userName = tbUser.userName;
        END//
        GO


delimiter ;

                   /* CALL CREATE USER */

CALL spCreateUser('wrenjaymes','passcode', 'dragon.jpeg');
CALL spCreateUser('ghostman','password', 'dragon.jpeg');
CALL spCreateUser('mastersupreme','password', 'dragon.jpeg');
CALL spCreateUser('hoomantwo','password', 'dragon.jpeg');
CALL spCreateUser('hoomanthree','password', 'dragon.jpeg');

                        /* CALL HERO PROCS */

CALL spCreateHero (555, 'Praise The Sun Man', 'Lothric', 'Grey','XY','ghostman');
CALL spCreateHero (227, 'Master Supreme', 'Hell','Black: like the soul','XX', 'mastersupreme');
CALL spCreateHero ( 4, 'Captain Panic', 'Here','Brown','XY', 'hoomantwo');

                      /* CALL UPDATE HERO */

/*CALL spUpdateHero (1, 'Praise The Sun Man', 'XY', 'Lothric','Orange', 114);*/

                     /* CALL READ HERO */
CALL spReadHero(2);

                    /* CALL DELETE HERO */
CALL spDeleteHero(0);

                     /* CALL READ ALL */

CALL spReadAllH();
