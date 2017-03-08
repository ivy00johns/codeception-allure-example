<?php
// @env firefox
// @env chrome
// @env phantom
$I = new AcceptanceTester($scenario);

$I->wantTo('logout of the Admin area and land on the Login page');

$I->goToTheAdminLoginPage();
$I->loginAsAnExistingAdmin();
$I->goToTheAdminLogoutPage();
$I->shouldBeOnTheAdminLoginPage();