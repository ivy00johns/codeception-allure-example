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
    function allureGenerate() {
        return $this->_exec('allure generate tests/_output/allure-results/ -o tests/_output/allure-report/');
    }

    function allureOpen() {
        $this->_exec('allure report open --report-dir tests/_output/allure-report/');
    }

    function allureReport() {
        $result1 = $this->allureGenerate();

        if ($result1->wasSuccessful()) {
            $this->allureOpen();
        }
    }

    function chrome() {
        $this->_exec('codecept run --env chrome');
    }

    function firefox() {
        $this->_exec('codecept run --env chrome');
    }

    function phantomjs() {
        $this->_exec('codecept run --env phantomjs');
    }

    function test() {
        $this->chrome();
        $this->allureReport();
    }

    function example() {
        $this->_exec('codecept run --env chrome --group example');
        $this->allureReport();
    }
}