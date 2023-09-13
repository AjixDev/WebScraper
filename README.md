<h1 align="center">Web Scraper - Crawler - In Development Stage</h1>
<p align="center">PLAM - PHP Laravel Angular MongoDB</p>

<h4 align="center">A basic web scraper app built on top of <a href="https://angular.io/" target="_blank">Angular</a>, <a href="https://laravel.com/" target="_blank">Laravel</a> and <a href="https://www.mongodb.com/" target="_blank">MongoDB</a>.</h4>

<p align="center">
  <a href="#how-to-use">How To Use</a> •
  <a href="#credits">Credits</a> •
</p>

## How To Use

To clone and run this application, you'll need [Git](https://git-scm.com) and [Node.js](https://nodejs.org/en/download/) (which comes with [npm](http://npmjs.com)), [Laravel](https://laravel.com/) and [MongoDB](https://www.mongodb.com/) installed on your computer. Make sure that your php.ini includes mongodb extension.
<br>

<h2>Installation</h2>
<br>
From your command line:

```bash
# Create a new Laravel project (run command from root directory)
$ composer create-project laravel/laravel backend

# Create a new Angular app (run command from root directory)
$ ng new frontend

# Clone this repository
$ git clone https://github.com/AjixDev/WebScraper.git

# Go into the backend directory
$ cd backend

# Install backend dependencies
$ php composer.phar install

# Go into the frontend directory (run command from a new terminal)
$ cd frontend

# Install frontend dependencies
$ npm install

# Run the backend server (runs on laravel default localhost:8000)
$ ng serve

# Run the frontend server (runs on angular default localhost:4200)
$ ng serve
```

<h2>Seeding and Migration</h2>

Database connection settings can be edited directly inside backend\config\database.php. However, the more secure and highly recommended approach is to edit the DB connection details as .env constants.

```bash
# Migrate the web_pages_table collection to the database
$ php artisan migrate
```

## Credits

This software uses the following open source libraries and packages:

- [mongodb/laravel-mongodb](https://github.com/mongodb/laravel-mongodb)
- [guzzlehttp/guzzle](https://packagist.org/packages/guzzlehttp/guzzle)

---

> [ajixdev.github.io](https://ajixdev.github.io/) &nbsp;&middot;&nbsp;
> GitHub [@AjixDev](https://github.com/AjixDev) &nbsp;&middot;&nbsp;
> LinkedIn [@Roy Aji](https://www.linkedin.com/in/roy-aji/)
