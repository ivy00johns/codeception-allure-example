<?php
// @env firefox
// @env chrome
// @env phantomjs
// @group smoke
$I = new AcceptanceTester($scenario);
$I->wantTo('make sure you cannot access Admin pages after logging out');

$I->goToTheAdminLoginPage();
$I->loginAsAnExistingAdmin();
$I->goToTheAdminLogoutPage();

$I->goToRandomAdminPage();
$I->shouldBeOnTheAdminLoginPage();

$I->goToRandomAdminPage();
$I->shouldBeOnTheAdminLoginPage();

$I->goToRandomAdminPage();
$I->shouldBeOnTheAdminLoginPage();