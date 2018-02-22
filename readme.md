"# siteVitrine" 

# Install project 

```
git clone https://github.com/chouti44/siteVitrine
cd siteVitrine
composer update 
.env.exemple copier et remplacer par .env
php artisan key:generate
php artisan route:scan 
modifier les connexion à la bdd .env
php artisan migrate

```
# Démarrage du serveur PHP

```bash
php artisan serve
```