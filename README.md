# Welcome to the example Codeception + Allure Test Suite!

## Prereqs
* Codeception, Allure and Robo are PHP based applications installed via Composer so you will need to have Composer installed in order to run the following. Please visit the [Composer](https://getcomposer.org/) homepage for installation instructions.

* The Suite needs to be configured in the `.suite.yml` file in the `/tests/` directory depending on the Test Suite that you are working on: `tests/XXXXXXX.suite.yml`


### /tests/acceptance.suite.yml
    ...
    url: "http://127.0.0.1:32769"
    ...


### /tests/_support/AcceptanceTester.php
* Edit the following section of code at the bottom of the `AcceptanceTester.php` file if the Admin Credentials differ:

    ```
    ...
    public function loginAsAnExistingAdmin() {
        $I = $this;
        $I->fillField('login[username]', 'admin');
        $I->fillField('login[password]', 'admin123');
        $I->click('Sign in');
        $I->closeAdminNotification();
    }
    ...
    ```

### Running the Tests
* Once you have Composer installed you will need to install the Project Dependencies. Open a Terminal Window. CD to the Project Directory and run the following command:

    ```
    cd [LOCATION_OF_GITHUB_REPO]
    composer install
    ```

* **You will need to install Allure's CLI tool, please visit this page for instructions**: http://wiki.qatools.ru/display/AL/Allure+Commandline

* Next you will need to start a Selenium server so we can run the tests (This will vary based on your local setup).


* Then open a New Terminal Window.


* Finally to kick off the entire E2E Test Suite run the following command:

    ```
    robo test
    ```

* To kick off an example test with 2 test cases run the following command:

    ```
    robo example
    ```


## Testing Environments

* You can run a subset of Tests by editing the `RoboFile.php` or running `codecept` directly:

    ```codecept run --env chrome```

    ```codecept run --env firefox```

    ```codecept run --env phantomjs```

    ```codecept run --env chrome --group slow```

### RoboFile.php

Edit the following command to change the Tests that the command `robo test` executes:

    ...
    $this->_exec('codecept run --env chrome');
    ...



#### TROUBLESHOOTING
* TimeZone Error - http://stackoverflow.com/questions/18768276/codeception-datetime-error
* TimeZone List - http://php.net/manual/en/timezones.america.php