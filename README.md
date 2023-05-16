# Système d'inscription aux formations universitaires de licences professionnelles

Ce référentiel contient le code source d'un site web d'inscription aux formations universitaires de licences professionnelles, développé avec les technologies suivantes : PHP, Laravel, CSS, HTML, JavaScript et MySQL. Le site comprend trois acteurs principaux : l'administrateur, l'enseignant (chef de filière) et l'étudiant.

## Fonctionnalités principales

### Pour les étudiants

- Les étudiants peuvent créer un compte et se connecter au site.
- Une fois connectés, les étudiants peuvent remplir leur profil en fournissant des informations telles que leur nom, leur adresse, leur numéro de téléphone, etc.
- Les étudiants peuvent consulter la liste des différentes formations disponibles et soumettre leur candidature pour celles qui les intéressent.
- Les étudiants peuvent suivre l'état de leur candidature et recevoir des notifications concernant les mises à jour.

### Pour les enseignants

- Les enseignants peuvent se connecter en utilisant leurs identifiants.
- Les enseignants ont accès à une liste d'étudiants inscrits dans leur filière.
- Les enseignants peuvent filtrer les étudiants en utilisant des critères spécifiques et ajouter des commentaires à leur sujet.
- Les enseignants peuvent générer un fichier Excel contenant les informations des étudiants filtrés et l'envoyer à l'administrateur.

### Pour l'administrateur

- L'administrateur a un compte spécial avec des privilèges étendus.
- L'administrateur peut gérer les différentes filières et formations disponibles.
- L'administrateur peut ajouter de nouveaux enseignants au système.
- L'administrateur peut recevoir le fichier Excel généré par les enseignants et gérer l'affectation des salles pour les concours.

## Technologies utilisées

- Laravel : Framework PHP pour le développement back-end
- HTML, CSS, JavaScript : Développement front-end pour l'interface utilisateur
- Bootstrap : Framework CSS pour un design réactif et esthétique
- MySQL : Base de données relationnelle pour le stockage des informations sur les restaurants et les réservations

## Installation

1. Clonez le dépôt GitHub :
git clone https://github.com/Anass-NB/precandidature-pfe

2. Accédez au répertoire du projet :
cd precandidature-pfe

3. Installez les dépendances PHP via Composer :
composer install

4. Copiez le fichier d'environnement :
cp .env.example .env

5. Générez la clé d'application :
php artisan key:generate

6. Configurez votre base de données dans le fichier `.env`.

7. Exécutez les migrations et les seeders :
php artisan migrate --seed

8. Démarrez le serveur de développement :
php artisan serve

9. Accédez au site web dans votre navigateur à l'adresse `http://localhost:8000`.

## Contribution

Les contributions sont les bienvenues ! Si vous souhaitez contribuer à ce projet, veuillez suivre les étapes suivantes :

1. Fork du dépôt
2. Créez une nouvelle branche (`git checkout -b feature/ajouter-fonctionnalite`)
3. Effectuez vos modifications
4. Committez vos changements (`git commit -am 'Ajouter une fonctionnalité'`)
5. Push vers la branche (`git push origin feature/ajouter-fonctionnalite`)
6. Ouvrez une Pull Request

## Auteurs

- EL JADI Soufiane eljadi.souf@gmail.com
- NABIL Anass Anass-NB

## Licence

Ce projet est sous licence [MIT](LICENSE).
