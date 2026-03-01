#  Architecture en Couches (Controller / Service / DAO)
## Description
Ce projet PHP illustre une architecture complète pour la gestion des étudiants et des filières.
Il met en œuvre un modèle MVC enrichi avec :

- Entités validées (Etudiant, Filiere).

- DAO robustes pour la persistance (EtudiantDao, FiliereDao).

- Services métier (EtudiantService, FiliereService) pour orchestrer la logique métier et les transactions.

- Contrôleur applicatif (AppController) pour gérer les requêtes et réponses.

- Logger pour tracer les erreurs PDO et métier.

- Factory (AppFactory) pour centraliser l’injection des dépendances.

- Script de test qui démontre les cas d’usage et la robustesse des validations.
## Project Structure
```
project/
├── config/
│   └── db.php
├── src/
│   ├── Container/
│   │   └── AppFactory.php
│   ├── Controller/
│   │   ├── AppController.php
│   │   └── Response.php
│   ├── Dao/
│   │   ├── EtudiantDao.php
│   │   └── FiliereDao.php
│   ├── Database/
│   │   └── DBConnection.php
│   ├── Dto/
│   │   ├── EtudiantCreateDTO.php
│   │   ├── EtudiantUpdateDTO.php
│   │   └── FiliereCreateDTO.php
│   ├── Entity/
│   │   ├── Etudiant.php
│   │   └── Filiere.php
│   ├── Exception/
│   │   └── BusinessException.php
│   └── Log/
│       └── Logger.php
├── test/
│   └── test_lab4.php
└── README.md
