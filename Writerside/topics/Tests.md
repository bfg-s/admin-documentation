# Tests

Для запуска тестов необходимо выполнить добавление в ваш основной файл `phpunit.xml` директории `vendor/bfg/admin/tests/Unit` и `vendor/bfg/admin/tests/Feature`:
```xml
...
    <testsuites>
        <testsuite name="Unit">
            <directory>tests/Unit</directory>
        </testsuite>
        <testsuite name="Feature">
            <directory>tests/Feature</directory>
        </testsuite>
        <testsuite name="Bfg Admin Unit">
            <directory>vendor/bfg/admin/tests/Unit</directory>
        </testsuite>
        <testsuite name="Bfg Admin Feature">
            <directory>vendor/bfg/admin/tests/Feature</directory>
        </testsuite>
    </testsuites>
...
```
После того как вы добавили директории в файл `phpunit.xml`, вы можете запустить тесты с помощью команды:
```bash
./vendor/bin/phpunit
```
![image_5.png](image_5.png)
