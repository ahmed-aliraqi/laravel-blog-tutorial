# Installation

- [Installing Laravel](#installation)
- [Packages](#packages)
- [Dashboard Template](#dashboard-template)

<a name="installation"></a>
### Installing Laravel

Laravel utilizes [Composer](https://getcomposer.org) to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine.

#### Via Laravel Installer

First, download the Laravel installer using Composer:

    composer global require "laravel/installer"

Make sure to place the `$HOME/.composer/vendor/bin` directory (or the equivalent directory for your OS) in your $PATH so the `laravel` executable can be located by your system.

Once installed, the `laravel new` command will create a fresh Laravel installation in the directory you specify. For instance, `laravel new blog` will create a directory named `blog` containing a fresh Laravel installation with all of Laravel's dependencies already installed:

    laravel new blog

#### Via Composer Create-Project

Alternatively, you may also install Laravel by issuing the Composer `create-project` command in your terminal:

    composer create-project --prefer-dist laravel/laravel blog

<a name="packages"></a>
### Packages

- [Laravel Collective (Forms & HTML)](https://laravelcollective.com/docs/5.4/html)
- [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar)
- [Eloquent Media](https://github.com/ahmed-aliraqi/eloquent-media)

<a name="dashboard-template"></a>
### Dashboard Template
- [Gentelella](https://github.com/puikinsh/gentelella)
- [Gentelella (demo)](https://colorlib.com/polygon/gentelella/index.html)

