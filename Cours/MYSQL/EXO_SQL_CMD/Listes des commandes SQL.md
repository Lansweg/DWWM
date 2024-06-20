```sql
1
---
select * from personnage;
select * from arme;
select nom, levelMin from arme; 
select nom, surnom, level from personnage;
SELECT nom AS Pseudo, level AS Niveau FROM personnage;
SELECT libelle AS "Types d'armes du jeu" FROM typearme;


2
---
select count(idArme) AS "Nombre d'armes" from arme;
select count(idPersonnage) AS "Nombre de personnage" from personnage;
select avg(level) from personnage;
select sum(baseForce) as "Points de force", sum(baseAgi) as "points d'agilité", sum(baseIntel) as "Points d'intel du jeu" from classe;

select min(levelMin) as "MIN(levelMin)", max(levelmin) as "MAX(levelMin)" from arme;
select nom, sum(baseforce + baseAgi + baseIntel) from classe group by nom;


3
---
select concat(nom, surnom) as "Personnage" from personnage;
select concat(nom, ' ',
baseForce, '-', 'f',
':',
' ',
baseAgi, '-', 'a',
':',
' ',
baseIntel, '-', 'i')
from classe;
select left(nom,6) from personnage;
select concat(left(nom,5), ' ', description) as "classe" from classe;


4
---
select * from arme where levelMin > 5;
select * from arme where degat < 25;
select nom, surnom from personnage where level = 10;
select * from typearme where estDistance = 1;


5
---
select * from arme where levelMin between 4 and 8
select * from personnage where idPersonnage <= 3 and level = 10;
select * from arme where levelMin < 4 or levelMin > 8;
select * from arme where idArme <= 2 or degat >= 30;
select * from arme where idArme between 1 and 2 or degat between 25 and 40;
SELECT * FROM personnage WHERE level != 8 AND (level > 7 OR level < 6);
SELECT COUNT(*) AS "Lvl -10" FROM personnage WHERE level <> 10;
SELECT AVG(degat) AS "degat" FROM arme WHERE levelMin BETWEEN 3 AND 7;


6
---
SELECT * FROM personnage WHERE nom LIKE 'l%';
SELECT * FROM personnage WHERE nom LIKE 'l%er';
SELECT * FROM arme WHERE nom LIKE '%bois%';
SELECT * FROM arme WHERE nom LIKE 'A_B%';
SELECT * FROM arme WHERE idArme IN (1, 2, 4, 5, 7);
SELECT * FROM personnage WHERE idPersonnage IN (2, 3, 4, 6) AND level = 10;
SELECT * FROM personnage WHERE surnom IS NOT NULL AND surnom != '';
SELECT * FROM personnage WHERE surnom IS NULL;
SELECT * FROM personnage LIMIT 3;
SELECT * FROM personnage LIMIT 2 OFFSET 3;


----------------------------------------------------------------------------


1
SELECT * FROM personnage 
INNER JOIN classe ON personnage.idClasse = classe.idClasse;

SELECT arme.nom, arme.levelMin, arme.degat, typearme.libelle, typearme.estDistance 
FROM arme 
INNER JOIN typearme ON arme.idTypeArme = typearme.idTypeArme;


2
SELECT personnage.nom, classe.nom 
FROM personnage 
INNER JOIN classe ON personnage.idClasse = classe.idClasse;

SELECT personnage.nom, arme.nom, arme.levelMin, arme.degat 
FROM personnage 
JOIN arme ON personnage.idArmeUtilise = arme.idArme

SELECT personnage.nom, arme.nom, arme.levelMin, arme.degat, typearme.libelle AS type_arme, typearme.estDistance 
FROM personnage 
JOIN arme ON personnage.idArmeUtilise = arme.idArme 
JOIN typearme ON arme.idTypeArme = typearme.idTypeArme;


3
SELECT personnage.nom, personnage.level, arme.nom, arme.levelMin 
FROM personnage 
JOIN dispose ON personnage.idPersonnage = dispose.idPersonnage  
JOIN arme ON dispose.idArme = arme.idArme;

SELECT arme.nom, arme.levelMin, arme.degat, typearme.libelle 
FROM arme 
JOIN typearme ON arme.idTypeArme = typearme.idTypeArme 
WHERE typearme.estDistance = 0;

SELECT personnage.nom, arme.nom, typearme.libelle 
FROM personnage 
JOIN classe ON personnage.idClasse = classe.idClasse 
JOIN arme ON personnage.idArmeUtilise = arme.idArme 
JOIN typearme ON arme.idTypeArme = typearme.idTypeArme 
WHERE classe.idClasse = 1;


4
SELECT personnage.idPersonnage, personnage.nom, arme.nom, typearme.libelle  
FROM arme 
INNER JOIN typearme ON arme.idTypeArme = typearme.idTypeArme 
INNER JOIN dispose ON arme.idArme = dispose.idArme 
INNER JOIN personnage ON dispose.idPersonnage = personnage.idPersonnage 
WHERE personnage.level = 10;

SELECT personnage.idPersonnage, personnage.nom, arme.nom, typearme.libelle 
FROM arme 
INNER JOIN typearme ON arme.idTypeArme = typearme.idTypeArme 
INNER JOIN dispose ON arme.idArme = dispose.idArme 
INNER JOIN personnage ON dispose.idPersonnage = personnage.idPersonnage 
WHERE personnage.level = 10 
ORDER BY personnage.idPersonnage;

SELECT AVG(arme.degat) 
FROM arme 
INNER JOIN typearme ON arme.idTypeArme = typearme.idTypeArme 
WHERE typearme.estDistance = 1;

SELECT distinct personnage.nom 
FROM personnage 
INNER JOIN dispose ON personnage.idPersonnage = dispose.idPersonnage 
INNER JOIN arme ON dispose.idArme = arme.idArme 
INNER JOIN typearme ON arme.idTypeArme = typearme.idTypeArme 
WHERE typearme.libelle LIKE 'a%';



5
SELECT  libelle, arme.nom 
FROM arme 
RIGHT JOIN typearme ON typearme.idTypeArme = arme.idTypeArme;

SELECT  libelle, arme.nom 
FROM arme 
RIGHT JOIN typearme ON typearme.idTypeArme = arme.idTypeArme;

SELECT arme.*, personnage.*
FROM arme 
LEFT JOIN personnage ON arme.idArme = personnage.idArmeUtilise 
ORDER BY arme.levelMin;

SELECT arme.idArme, arme.nom, dispose.idPersonnage, personnage.nom 
FROM dispose 
RIGHT JOIN arme ON dispose.idArme = arme.idArme 
LEFT JOIN personnage ON dispose.idPersonnage = personnage.idPersonnage 
ORDER BY arme.idArme;


```



Les groupements

```sql
1
SELECT typearme.libelle, COUNT(arme.idArme) 
FROM arme 
JOIN typearme ON arme.idTypeArme = typearme.idTypeArme
GROUP BY typearme.libelle 
ORDER BY arme.idArme;

SELECT classe.nom, classe.description, COUNT(personnage.idPersonnage) 
FROM classe 
JOIN personnage personnage ON classe.idClasse = personnage.idClasse 
GROUP BY classe.nom;

SELECT personnage.nom, COUNT(dispose.idArme)
FROM personnage 
JOIN dispose ON personnage.idPersonnage = dispose.idPersonnage
GROUP BY personnage.nom 
ORDER BY dispose.idArme;

SELECT classe.nom, personnage.nom, COUNT(dispose.idArme) 
FROM personnage 
JOIN dispose ON personnage.idPersonnage = dispose.idPersonnage
JOIN classe ON personnage.idClasse = classe.idClasse
WHERE classe.nom = 'Guerrier'
GROUP BY personnage.nom;

SELECT arme.nom, COUNT(personnage.idPersonnage) 
FROM arme 
LEFT JOIN dispose ON arme.idArme = dispose.idArme 
LEFT JOIN personnage ON personnage.idPersonnage = dispose.idPersonnage 
GROUP BY arme.idArme, arme.nom;

SELECT classe.nom, AVG(personnage.level) 
FROM classe 
JOIN personnage  ON classe.idClasse = personnage.idClasse
GROUP BY classe.nom;

2

SELECT classe.nom, AVG(personnage.level) 
FROM classe 
JOIN personnage ON classe.idClasse = personnage.idClasse
GROUP BY classe.nom
HAVING AVG(personnage.level) >= 9;

SELECT arme.nom, COUNT(dispose.idPersonnage) 
FROM arme
JOIN dispose ON arme.idArme = dispose.idArme
GROUP BY arme.nom
HAVING COUNT(dispose.idPersonnage) BETWEEN 1 AND 2 
ORDER BY dispose.idPersonnage;


SELECT typearme.libelle, COUNT(arme.idArme) 
FROM typearme 
LEFT JOIN arme ON typearme.idTypeArme = arme.idTypeArme
WHERE estDistance = 0 
GROUP BY typearme.idTypeArme, typearme.libelle  
HAVING count(arme.idArme) <= 1 
ORDER BY arme.idArme;


```




# Les requêtes imbriquées

```sql

SELECT arme.nom, arme.degat 
FROM arme
WHERE degat > (SELECT AVG(degat) FROM arme);

SELECT *
FROM personnage
WHERE level < (SELECT AVG(level) FROM personnage);


SELECT personnage.idPersonnage, personnage.nom, personnage.surnom, personnage.level, personnage.idArmeUtilise, personnage.idClasse 
FROM personnage
WHERE level > (SELECT AVG(p.level) 
               FROM personnage p 
               INNER JOIN classe c ON p.idClasse = c.idClasse 
               WHERE c.nom = 'Archer');


--SELECT COUNT(arme.idArme)
--FROM arme
--JOIN typearme ON arme.idTypeArme = typearme.idTypeArme
--WHERE typearme.estDistance = 1
--GROUP BY typearme.libelle
--ORDER BY COUNT(arme.idArme) DESC
--LIMIT 1;

SELECT MAX(Nombre_Occurrences)
FROM (
    SELECT typearme.libelle, COUNT(*) AS Nombre_Occurrences
    FROM arme
    JOIN typearme ON arme.idTypeArme = typearme.idTypeArme
    WHERE typearme.estDistance = 1
    GROUP BY typearme.libelle
) AS Occurrences
GROUP BY libelle
ORDER BY MAX(Nombre_Occurrences) DESC
LIMIT 1;























-- describe pour voir l'interieur d'une base de donnée 
CREATE TABLE attaque (
    idAttaque INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(60),
    baseDegat INT,
    test TINYINT
);


ALTER TABLE attaque
ADD nom VARCHAR(60),
ADD baseDegat INT,
ADD test TINYINT;

ALTER TABLE attaque
MODIFY test VARCHAR(50);

ALTER TABLE attaque
CHANGE test toto INT;


CREATE TABLE attaque (
    idAttaque INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(60),
    baseDegat INT,
    toto INT
);

CREATE TABLE utilise (
	idUtilise INT AUTO_INCREMENT PRIMARY KEY,
    idPersonnage INT,
    idAttaque INT,
    levelAttaque INT,
    FOREIGN KEY (idPersonnage) REFERENCES personnage(idPersonnage),
    FOREIGN KEY (idAttaque) REFERENCES attaque(idAttaque)
);

INSERT INTO utilise (idAttaque, idPersonnage, levelAttaque) VALUES 
('1', '1', '2'),
('2', '1', '2'),
('2', '2', '1'),
('4', '3', '2'),
('1', '5', '3'),
('4', '5', '3');



INSERT INTO attaque (idAttaque, nom, baseDegat)VALUES 
(1, 'attaque1', 10),
(2, 'attaque2', 10),
(3, 'attaque3', 10),
(4, 'attaque4', 10);


UPDATE attaque
SET baseDegat = 50
WHERE idAttaque IN (2, 3);


ALTER TABLE personnage
ADD COLUMN date_naissance DATE;

UPDATE personnage 
SET date_naissance = '2006-08-10' 
WHERE idPersonnage = 1;
UPDATE personnage 
SET date_naissance = '2004-07-09' 
WHERE idPersonnage = 2;
UPDATE personnage 
SET date_naissance = '2003-01-02' 
WHERE idPersonnage = 3;
UPDATE personnage 
SET date_naissance = '2007-07-01' 
WHERE idPersonnage = 4; 
UPDATE personnage 
SET date_naissance = '2010-05-08' 
WHERE idPersonnage = 5; 
UPDATE personnage 
SET date_naissance = '2001-11-09' 
WHERE idPersonnage = 6; 
UPDATE personnage 
SET date_naissance = '2005-07-03' 
WHERE idPersonnage = 7; 


```

