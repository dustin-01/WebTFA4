# WebTFA4

This is the TFA3 CodeIgniter site with login added to the customer and user account pages. The task, profile, and about pages are still here. User avatars can still be uploaded on the edit page.

## Run locally

1. Run `composer install`.
2. Copy `env` to `.env` and set the database details and `app.baseURL`.
3. For a new database, run `php spark migrate` and `php spark db:seed TaskSystemSeeder`. You can import `database.sql` instead. Do not do both.
4. For an existing TFA3 database, run `php spark migrate` or import `upgrade.sql`. Do not do both.
5. Run `php spark serve` and open `http://localhost:8080`.

The local starter account is `dustin` with password `TFA4demo!`. Change this password on the user edit page before putting the site online.

## Pages

- `/` today's tasks
- `/tasks` all tasks
- `/customers` customer list and forms (login required)
- `/users` user list and forms (login required)
- `/login` login page
- `/profile` demo profile
- `/about` about page

The web server needs write access to `public/uploads` for avatars and `writable` for sessions. The `infinityfree-upload` folder is ignored by Git. Its ZIP and private settings are for upload only.
