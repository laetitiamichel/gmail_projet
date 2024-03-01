Lien du site = [accueil](https://laetitiamichel.github.io/gmail_projet_militelo/)

# ARBRE EURISTIQUE

![ARBRE_GMAIL](https://hackmd.io/_uploads/r1RiewMip.png)

# CHARTE GRAPHIQUE =

![ChartreGraphiqueGmail](https://hackmd.io/_uploads/r1y3vo8Y6.png)

![ChartreGraphiqueFormulaire](https://hackmd.io/_uploads/HJjnPj8tT.png)


# TYPOGRAPHIE =
![typographieGmail](https://hackmd.io/_uploads/By4pPiLK6.png)




# MCD

Le MCD a été réalisé sur mocodo:
Il existe une table avec les différents champs rentrés par l'utilisateur, avec comme clef primaire l'ID_user
```
UTILISATEURS: ID, nom, prenom, mail, password

```
![MCD_GMAIL](https://hackmd.io/_uploads/rJH4Wvfja.png)

# SCHEMA RELATIONNEL

UTILISATEURS:( ~~ID~~, nom, prenom, mail, password)

# SQL

```
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `ID` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prenom` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `mail` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

```

# CREATION BASE DE DONNEES

Effectuée sur LARAGON:

![LARAGON_table_GMAIL](https://hackmd.io/_uploads/BJkJGwMip.png)

![données_laragon_gmail](https://hackmd.io/_uploads/rkcJfDMs6.png)



