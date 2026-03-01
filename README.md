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
```
 Example Execution

<img width="771" height="87" alt="image" src="https://github.com/user-attachments/assets/36e98dec-aec1-4b0f-bd1c-a72d720ed92a" />

<img width="1013" height="113" alt="image" src="https://github.com/user-attachments/assets/d3d115bc-d5d3-4722-9c5b-d386aedf30ca" />

 Author

- 👤 Majjati Mohamed Taha
- 🏫 Programmation orientée objet et fonctionnelle : PHP
- 🎓 Instructor : Mr. LACHGAR
- 📅 1 mars 2026
