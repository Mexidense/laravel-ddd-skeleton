# Domain-Driven Design in Laravel

## Installation

- Clone repository:
    ```batch
    git clone git@github.com:Mexidense/ddd-laravel-skeleton.git
    ```

- Install packages:
    ```batch
    composer install  
    ```

- Generate & set application key
    ```batch
    php artisan key:generate
    ```

## Usage

- Run server
    ```batch
    php artisan serve
    ```

## Directories

- src: Contains code sources of the whole of application.
    - Common/Infrastructure: Contains all of related common infrastructure that the application may need to share.
        - Laravel: Contains required files for Laravel framework. The file paths are set up on Application.php file.
    - Users: Contains all of related user domain. Following the layered architecture, here we have:
        - Infrastructure
        - Application
        - Domain
- test:
    - Common: All unit and feature tests.
    - Users: All unit and feature tests.

```batch
.
├── src
│   ├── Common
│   │   └── Infrastructure
│   │       ├── Console
│   │       ├── Events
│   │       ├── Http
│   │       │   ├── Controllers
│   │       │   ├── Exceptions
│   │       │   ├── Middleware
│   │       │   ├── Routes
│   │       │   └── Security
│   │       └── Laravel
│   │           ├── bootstrap
│   │           │   └── cache
│   │           ├── config
│   │           ├── database
│   │           │   ├── factories
│   │           │   ├── migrations
│   │           │   └── seeders
│   │           ├── public
│   │           ├── resources
│   │           │   ├── css
│   │           │   ├── js
│   │           │   ├── lang
│   │           │   │   └── en
│   │           │   └── views
│   │           └── storage
│   │               ├── app
│   │               │   └── public
│   │               ├── framework
│   │               │   ├── cache
│   │               │   │   └── data
│   │               │   ├── sessions
│   │               │   ├── testing
│   │               │   └── views
│   │               └── logs
│   └── Users
│       ├── Application
│       ├── Domain
│       └── Infrastructure
│           ├── EloquentModels
│           └── Http
│               └── Routes
└── tests
    ├── Common
    │   ├── Feature
    │   └── Unit
    └── Users
        ├── Feature
        └── Unit

```
