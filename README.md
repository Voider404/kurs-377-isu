<p align="center">
    <h1 align="center">Информационная среда СПб ГБ ПОУ«Радиотехнический колледж» </h1>
    <br>
</p>

Порядок установки
-------------------
* composer update
* php yii migrate/up --migrationPath=@vendor/dektrium/yii2-user/migrations
* php yii migrate/up --migrationPath=@yii/rbac/migrations
* php yii migrate

Роли и пользователи
-------------------

| Роль          | Логин | Пароль |
|:--------------|:------|:-------|
| Администратор | admin | 123456 |
 

Список зависимостей
-------------------

* [yii2-user](https://github.com/dektrium/yii2-user)  
* [yii2-rbac](https://github.com/dektrium/yii2-rbac)  
* [AdminLTE](https://github.com/dmstr/yii2-adminlte-asset)  

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 7.2.0.


