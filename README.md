Navatech Yii 2 CMS
===============================
INSTALL
-------------------

### Install via Composer

This is the preferred way of installing Yii 2.0. If you do not have Composer yet, you may install it by following the instructions here.

After installing Composer, run the following command to install the Composer Asset Plugin:

```
composer global require "fxp/composer-asset-plugin:~1.1.1"
```
Now choose one of the application templates to start installing Yii 2.0. An application template is a package that contains a skeleton Web application written in Yii.

```
composer create-project navatech/yii2-cms your-project-path 1.0
```

Then run migration:
```
php yii migrate
```

**Note**: That you may be prompted to enter your GitHub username and password during the installation process. This is normal. Just enter them and continue.

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
