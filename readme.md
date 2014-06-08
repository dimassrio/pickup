## PICKUP Build 1.1

### Install

git clone git@github.com:dimassrio/pickup.git

#### SOURCE CODE INSTALL
1. composer install
2. npm install
3. bower install

4. grunt
5. grunt cpy

#### DATABASE INSTALL

1. CREATE DATABASE at PHP MY ADMIN

database_name : pickup

2. CHANGE DATABASE SETTING at app/config/database.php

3. php artisan migrate 
// If this show error use composer dump autoload *optional*

4. php artisan db:seed


### Change
1. Categories = CRU
2. User = AUTH and CRU
3. Vehicles = CRU *not tested yet
4. MAKER = NO UI
5. Change topbar width to grid width.
6. Change topbar menu *look at app/views/include/header
