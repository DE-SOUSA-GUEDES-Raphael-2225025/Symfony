# 📋 To-Do List avec Symfony & Tailwind CSS

## 🚀 Description
Ce projet est une application **To-Do List** développée avec **Symfony** et stylisée avec **Tailwind CSS**. Elle permet aux utilisateurs de :

- 📌 Ajouter de nouvelles tâches
- ✅ Marquer les tâches comme complétées
- ✏ Modifier les tâches existantes
- ❌ Supprimer des tâches
- 📊 Voir la progression globale avec une barre de progression
- Affichage de drapeaux grace a une api externe 

## 🛠️ Installation

### 1️⃣ Cloner le dépôt
```sh
git clone https://github.com/votre-repo/todo-list.git
cd todo-list
```

### 2️⃣ Installer les dépendances PHP & JS
```sh
composer install
npm install
```

### 3️⃣ Configurer la base de données
```sh
cp .env .env.local  # Modifier DATABASE_URL dans .env.local
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

### 4️⃣ Lancer le serveur Symfony
```sh
symfony serve
```

### 5️⃣ Compiler les assets avec Webpack Encore
```sh
npm run dev  # Mode développement
# ou
npm run build  # Mode production
```

## 🚀 Accéder à l'application
Après avoir lancé Symfony avec `symfony serve`, ouvrez votre navigateur et accédez à :
```
http://127.0.0.1:8000/login
http://127.0.0.1:8000/task

```
Cela affichera la page principale de la To-Do List.

---

## 👤 **Compte Administrateur**
Un compte administrateur par défaut est disponible pour tester l'application :

- **📧 Adresse email :** `admin@exampl.com`
- **🔑 Mot de passe :** `12345`
