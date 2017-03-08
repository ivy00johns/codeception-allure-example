<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */

class RoboFile extends \Robo\Tasks
{
    use Robo\Task\Base\loadShortcuts;

    // define public methods as commands
    function test() {
        $this->_exec('codecept run --env chrome');

        $result1 = $this->_exec('allure generate tests/_output/allure-results');
        if ($result1->wasSuccessful()) {
            $this->_exec('allure report open');
        }
    }

    function example() {
        $this->_exec('codecept run --env chrome --group example');

        $result1 = $this->_exec('allure generate tests/_output/allure-results');
        if ($result1->wasSuccessful()) {
            $this->_exec('allure report open');
        }
    }
}