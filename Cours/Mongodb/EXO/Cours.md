
{
  _id: ObjectId('663897f468deb0c339433ccc'),
  Code: 'ABW',
  Name: 'Aruba',
  Continent: 'North America',
  Region: 'Caribbean',
  SurfaceArea: 193,
  IndepYear: 'NA',
  Population: 103000,
  LifeExpectancy: 78.4,
  GNP: 828,
  GNPOld: 793,
  LocalName: 'Aruba',
  GovernmentForm: 'Nonmetropolitan Territory of The Netherlands',
  HeadOfState: 'Beatrix',
  Capital: { ID: 129, Name: 'Oranjestad', District: '–', Population: 29034 },
  Code2: 'AW',
  OffLang: [ { Language: 'Dutch', Percentage: 5.3 } ],
  NotOffLang: [
    { Language: 'English', Percentage: 9.5 },
    { Language: 'Papiamento', Percentage: 76.7 },
    { Language: 'Spanish', Percentage: 7.4 }
  ]
}


A faire : 
1. **Déterminer le nombre exact de pays
	- ```db.world.countDocuments()```

2. **Lister les différents continents
	- ```db.world.aggregate([{$group: { _id: "$Continent"}}])```
	- ````db.world.distinct("Continent")


3. **Lister les informations de la France
	- ```db.world.find({ "Name": "France" }); ```


4. **Lister les pays du continent européen, ayant une population inférieure à 100000 habitants 
	-  ```db.world.find({ "Continent": "Europe", "Population": { $lt: 100000 } });


5. **Lister les pays indépendants du continent océanique
	-  ```db.world.find({ "Continent": "Oceania", "IndepYear": { $ne: "NA" } });


6. **Quel est le plus gros continent en terme de surface ? (Un seul continent affiché à la fin) 
```
db.world.aggregate([{ 
	$group: 
		{ _id: "$Continent", 
			totalSurface: { 
				$sum: "$SurfaceArea" }}},
	{$sort: { totalSurface: -1 }}, 
	{ $limit: 1 }
]);
```




7. **Donner par continents le nombre de pays, la population totale et en bonus le nombre de pays indépendant 
```
db.world.aggregate([{ 
	$group: { _id: "$Continent",
		nombreDePays: { $sum: 1 },
		populationTotale: { $sum: "$Population" },
		nombreDePaysIndependants: { $sum: { 
			$cond: { 
				if: { 
					$ne: ["$IndepYear", "NA"] },
					then: 1, 
				else: 0 } } } }} ]);
```


8. **Donner la population totale des villes de France 
	-  ```db.world.findOne({ "Code": "FRA" }).Population


9. **Donner la capitale (uniquement nom de la ville et population) de France 
	-  ``` db.world.findOne({ "Code": "FRA" }, { "Capital.Name": 1, "Capital.Population": 1 });


10. **Quelles sont les langues parlées dans plus de 15 pays ?
	-  ```db.world.aggregate([ { $unwind: "$OffLang" }, { $group: { _id: "$OffLang.Language", count: { $sum: 1 } }}, { $match: { count: { $gt: 15 }}} ]);


