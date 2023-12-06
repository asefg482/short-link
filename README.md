<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# ShortLinker - Laravel Link Shortener Project

ShortLinker is a simple project that utilizes the Laravel framework to create a link shortening service. With ShortLinker, you can turn long links into short and memorable ones.

## Installation

To install the project, clone the repository and install dependencies:

```bash
git clone https://github.com/yourusername/ShortLinker.git
cd ShortLinker
composer install
```

Rename the .env.example file to .env and configure your database settings and other necessary configurations in the .env file. Then run the following commands:

```bash
php artisan key:generate
php artisan migrate
```

Usage
After installation, you can easily use the following commands to create and manage links:

php artisan link:shorten {url}: Shorten a link
php artisan link:stats {code}: Get link statistics
Contribution
If you'd like to contribute to the development of this project, we welcome your collaboration. To contribute, fork the repository, make changes in a new branch, and finally, submit a pull request.

License
This project is released under the MIT License. For more information, read the license file.
