#!/bin/bash

# S'assurer que le script est lancé à partir du bon répertoire
cd "$(dirname "$0")"

# Installer les dépendances
composer install

# Lancer les tests
php ./bin/phpunit