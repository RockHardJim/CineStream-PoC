# CineStream PoC

Cinestream is a simple popcorn time api based application that allows users to stream content stored on torrents directly on the browser in html5

## Steps To Setup The Project
1. In the projects root folder, run `composer install`  to install dependencies
2. Create a MySQL or Postgress database
3. Create an `.env` file and paste the following into it
> make sure to fill in the database values correctly

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:gGOtuZDXIdmCaYWgvFPohmrsRt6LNtbR94QqkhwmdOE=
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000/

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cinestream
DB_USERNAME=root
DB_PASSWORD=root

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
```

4. Run `php artisan migrate:fresh`
> add a record in the `settings` table, in the applications database
```
name: name of your site
description: description of your site
keywords: your sites keywords
live: 1
url: your sites url
```
5. Run `php artisan serve` 

You should now be able to view the project at <http://127.0.0.1:8000>