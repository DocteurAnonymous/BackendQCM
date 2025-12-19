# 🎯 BackendQCM – API QCM (Laravel)

BackendQCM est une API développée avec **Laravel** pour la gestion d’un système de **QCM (Questionnaire à Choix Multiple)**.  
Elle fournit les données nécessaires au frontend (questions, options, réponses correctes, etc.).

---

## 🚀 Technologies utilisées

- PHP (Laravel)
- SQLite / MySQL
- Laravel Migrations & Seeders
- API REST

---

## 📁 Fonctionnalités principales

- Gestion des questionnaires
- Récupération de la liste des questions
- Structure adaptée à un frontend React
- Seeder pour injecter les questions automatiquement


---

## ⚙️ Installation

```bash
git clone https://github.com/DocteurAnonymous/BackendQCM.git
cd BackendQCM
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve
```

## 📦 LIEN VERS LE FRONTEND

https://github.com/DocteurAnonymous/FrontendQCM.git


