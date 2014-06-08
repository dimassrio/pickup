## PICKUP Build 1.1

### Install

git clone git@github.com:dimassrio/pickup.git

#### SOURCE CODE INSTALL
composer install
npm install
bower install

grunt
grunt cpy

#### DATABASE INSTALL

CREATE DATABASE at PHP MY ADMIN

database_name : pickup

CHANGE DATABASE SETTING at app/config/database.php

php artisan migrate 
// If this show error use composer dump autoload *optional*

php artisan db:seed


### Change
1. Categories = CRU
2. User = AUTH and CRU
3. Vehicles = CRU *not tested yet
4. MAKER = NO UI
5. Change topbar width to grid width.
6. Change topbar menu *look at app/views/include/header
