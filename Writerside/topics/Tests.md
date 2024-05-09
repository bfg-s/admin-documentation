# Tests

To run the tests, you need to add the `vendor/bfg/admin/tests/Unit` and `vendor/bfg/admin/tests/Feature` directories to your main `phpunit.xml` file:
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
Once you have added the directories to the `phpunit.xml` file, you can run the tests using the command:
```bash
./vendor/bin/phpunit
```
![image_5.png](image_5.png)
