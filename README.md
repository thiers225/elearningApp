# E-Learning Formation

**Version :** Symfony 7.2.2  
**Description :** E-Learning Formation est une plateforme de formation en ligne qui vous permet de suivre des cours en ligne et de passer des examens en ligne.

---

## **Fonctionnalités principales**

1. **Gestion des utilisateurs**
   - Inscription et connexion (étudiants et administrateurs)
   - Profil utilisateur personnalisé

2. **Gestion des cours**
   - Ajout, modification et suppression de cours (par les administrateurs)
   - Affichage des cours disponibles pour les étudiants

3. **Organisation des contenus**
   - Cours divisés en modules et leçons
   - Catégorisation des cours pour une navigation simplifiée

4. **Examens en ligne**
   - Participation aux examens liés à un cours
   - Correction automatique et résultats instantanés

5. **Progression de l'apprentissage**
   - Suivi de l'avancement dans les cours
   - Historique

6. **Tableau de bord administrateur**
   - Statistiques sur les utilisateurs, cours et examens.
   - Gestion des catégories, chapitres et leçons.

---

## **Prérequis**

- **PHP** : Version 8.2 ou supérieure
- **Composer** : Dernière version
- **Symfony CLI** : Version compatible avec Symfony 7.2.2
- **Base de données** : MySQL
- **Serveur Web** : Apache ou Nginx

---

## **Installation**

1. **Cloner le projet** :
   ```bash
   git clone https://github.com/thiers225/elearningApp.git
   cd elearningApp
   ```

2. **Installer les dépendances** :
   ```bash
   composer install
   ```

3. **Configurer les variables d'environnement** :
   - Copier le fichier `.env` et renommer en `.env.local`.
   - Modifier les paramètres de connexion à la base de données :
     ```env
     DATABASE_URL="mysql://username:password@127.0.0.1:3306/db_learning"
     ```

4. **Créer la base de données** :
   ```bash
   symfony console doctrine:database:create
   symfony console doctrine:migrations:migrate
   ```

5. **Lancer le serveur** :
   ```bash
   symfony server:start
   ```
   Accédez à l'application via : [http://localhost:8000](http://localhost:8000).

---

## **Utilisation**

### **En tant qu'utilisateur**
1. Inscrivez-vous ou connectez-vous.
2. Parcourez les cours disponibles.
3. Suivez les cours.

### **En tant qu'administrateur**
1. Connectez-vous avec un compte administrateur.
2. Gérez les cours, modules, leçons et catégories.
3. Consultez les statistiques et surveillez les performances des étudiants.

---

## **Technologies utilisées**

- **Framework** : Symfony 7.2.2
- **Langage** : PHP 8.2+
- **Base de données** : MySQL
- **Frontend** : Twig, HTML, CSS, JavaScript
- **Outils supplémentaires** :
  - Doctrine ORM
  - Symfony CLI

---

**Note** : Les mises à jour et nouvelles fonctionnalités sont ajoutées progressivement.
Merci d'utiliser E-Learning Formation pour vos besoins en formation en ligne ! 🎓


