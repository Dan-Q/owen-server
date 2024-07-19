## Owen Server

An experimental/prototype/demonstration CRUD system to try to get a friend started.

Unless you're Owen, it's probably not suitable for you.

Even if you ARE Owen, it might not be.

Tread carefully.

### Getting started

1. Install [Docker Desktop](https://www.docker.com/products/docker-desktop/) and make sure it's running.
2. Clone this repository (download a copy of it!).
3. In a command prompt/terminal, navigate to the directory you checked out.
4. Run `docker compose up`
5. See the application at http://localhost:8080/ (its source code is in `src/`)
6. Browse/edit the database at https://localhost:8081/ (the database is called "mydatabase")
7. Press `CTRL-C` in the command prompt/terminal to kill the application when you're done. The contents of the database and your code won't be affected (they'll still be there when you run `docker compose up` next time!)

### Understand

- Docker is your virtualisation platform. It makes it easy to simulate running a server on your computer. It's configured in `compose.yml` to provide:
  - a PHP-capable web server running on `localhost:8080` (further configured in `Dockerfile`),
  - PHPMyAdmin, a convenient web-based front end for managing your database, running on `locahost:8081`, and
  - a database server to which both connect
- The database stores its files in `db/storage`, but they're not really designed for you to read! You can delete `db/storage` and then restart your Docker containers to wipe the database though.
- When starting from scratch, the database container runs the scripts in `db/initial`: I've put a script that creates a "fruits" table and puts some sample data in it
  - You can design/edit tables in PHPMyAdmin and then use the "Export" tool to turn them into .sql files (to put in the `db/initial` folder) for next time you start from scratch.
- The code in `src/` is made available via your webserver. `index.php` is the "root" page you sdee at http://localhost:8080/. I'm sure you can work out what the other pages do by trial and error! `src/` is where you'll do most of your work!

