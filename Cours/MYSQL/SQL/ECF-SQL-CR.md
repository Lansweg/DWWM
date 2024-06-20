# Exercice 1 : Soit la base de données d’un festival de musique. 

1. La liste des titres des représentations 

```
SELECT titre
FROM representation;
```

1. La liste des titres des représentations ayant lieu au théâtre « Mogador » 

```
SELECT titre 
FROM representation 
WHERE lieu = 'Mogador';
```

1. La liste des noms des musiciens et des titres des représentations auxquelles ils participent 

```
SELECT musicien.nomMusicien, representation.titre 
FROM musicien 
JOIN representation ON musicien.idRepresentation = representation.idRepresentation;
```

4. La liste des titres des représentations, les lieux et les tarifs du 25 Juillet 2022 

```
SELECT representation.titre, representation.lieu, programmer.tarif 
FROM representation 
JOIN programmer ON representation.idRepresentation = programmer.idRepresentation 
WHERE programmer.date = '2022-07-25';
```

5. Le nombre des musiciens qui participent à la représentation n°20 

```
SELECT COUNT(*)
FROM musicien
WHERE idRepresentation = 20;
```

6. Les représentations et leurs dates dont le tarif ne dépasse pas 50€

```
SELECT representation.titre, programmer.date 
FROM representation 
JOIN programmer ON representation.idRepresentation = programmer.idRepresentation 
WHERE programmer.tarif <= 50;
```








# Exercice 2 : Soit le modèle logique des données qui représente la base de données d’une agence de voyage en ligne. 

1. Donnez le nom, prenom, email des clients ayant une réservation en cours 

```
SELECT nom, prenom, email
FROM client
WHERE idClient IN (SELECT idClient FROM reservation);
```

2. Donnez le nom, prenom et email des clients n’ayant aucune réservation en cours 

```
SELECT nom, prenom, email
FROM client
LEFT JOIN reservation ON client.idClient = reservation.idClient
WHERE reservation.idClient IS NULL;
```

3. Donnez la destination et liste des clients ayant réservés pour un voyage de plus de 10 jours et coûtant moins de 1000€ 

```
SELECT voyage.Destination, client.nom, client.prenom, client.email
FROM client
JOIN reservation ON client.idClient = reservation.idClient
JOIN voyage ON reservation.idVoyage = voyage.idVoyage
WHERE voyage.duree > 10 AND voyage.prix < 1000;
```

4. La liste des numéros de tous les clients ayant réservés sur tous les voyages proposés

```
SELECT DISTINCT numCB
FROM client;
```
