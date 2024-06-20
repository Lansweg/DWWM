

# Exercice 1 : Discographie

>Un fan de rock souhaite créer un site consacré à ses groupes préférés. Il doit donc tenir l'inventaire des disques, avec pour chacun d'eux le titre, l'artiste, le label et l'année. En ce qui concerne les groupes et les musiciens, une analyse fine montre que le problème est redoutable - on se contentera ici d'une approche simple.

**On traitera successivement de deux hypothèses :**
*Etablir le MCD dans ces deux cas.*

- La discothèque ne comprend aucune compilation de différents artistes
- La discothèque comprend des compilations

# Exercice 2 : Casse automobile

>Une casse automobile souhaite gérer son stock de pièces. Chaque pièce est identifiée par une référence, une catégorie (carrosserie, mécanique, électricité, etc.), une date de récupération et un prix de vente. On souhaite également pouvoir établir une correspondance entre les pièces et les véhicules pour lesquels elles conviennent, ces véhicules étant repérés par marque, modèle et année.

**Etablir le MCD adéquat dans les deux hypothèses suivantes :**
*Etablir le MCD dans ces deux cas.*

- Toutes les pièces d'une même référence possèdent un prix unique
- Chaque pièce possède un prix propre.

# Exercice 3 : La bibliothèque

>Une bibliothèque de prêt dispose d'un certain nombre d'ouvrages, classés par rayon (Littérature, Histoire, Géographie, etc.). Chaque ouvrage est l'œuvre d'un ou plusieurs auteurs, et doit également être référencé selon un certain nombre de mots-clés. 
>Chaque adhérent peut emprunter jusqu'à 5 livres en même temps, et dispose d'un certain délai passé lequel il doit recevoir des relances puis des pénalités.

**On se place dans quatre cas successifs, de complexité croissante :**

1. La bibliothèque ne possède qu'un seul exemplaire de chaque ouvrage. Elle enregistre
uniquement les emprunts présents (il n'y a pas d'historique des emprunts passés).

2. La bibliothèque ne possède qu'un seul exemplaire de chaque ouvrage, mais elle tient un
historique de tous les emprunts qui ont été effectués.

3. La bibliothèque tient un historique et elle est maintenant susceptible de posséder plusieurs
exemplaires de certains ouvrages

4. En plus de cela, il existe une bibliothèque centrale et des antennes locales. Chaque antenne
possède un fonds qui lui est propre, et peut de surcroit se procurer certains ouvrages auprès
de la bibliothèque centrale (mais pas d'une autre bibliothèque locale). Tout adhérent peut
automatiquement emprunter des ouvrages dans toutes les antennes locales
Etablir le MCD dans les quatre cas





ouvrage
classé par rayon 
plusieurs auteur 
référencé selon un certain nbr de mots clé 

adhérent 
5 livre en même temps
un délai pénalité 