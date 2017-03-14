<?php


class TestCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->goToTheAdminLoginPage();
        $I->loginAsAnExistingAdmin();
    }
    
    /**
     * @env phantomjs
     * @env chrome
     * @group example
     * @group test
     */
    public function accessTheSalesOrdersPage(AcceptanceTester $I)
    {
        $I->goToTheAdminSalesOrdersPage();
        $I->shouldBeOnTheAdminSalesOrdersPage();
        $I->see('Orders');
    }

    /**
     * @env phantomjs
     * @env chrome
     * @group example
     * @group test
     */
    public function accessTheProductsCatalogPage(AcceptanceTester $I)
    {
        $I->goToTheAdminProductsCatalogPage();
        $I->shouldBeOnTheAdminProductsCatalogPage();
        $I->see('Catalog');
    }
}
