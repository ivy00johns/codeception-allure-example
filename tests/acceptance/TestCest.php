<?php


class TestCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->goToTheAdminLoginPage();
        $I->loginAsAnExistingAdmin();
    }

    public function _after(AcceptanceTester $I)
    {
    }

    /**
     * @group example
     */
    public function accessTheSalesOrdersPage(AcceptanceTester $I)
    {
        $I->goToTheAdminSalesOrdersPage();
        $I->shouldBeOnTheAdminSalesOrdersPage();
        $I->see('Orders');
    }
}
