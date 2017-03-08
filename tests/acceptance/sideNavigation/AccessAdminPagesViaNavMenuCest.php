<?php

use Page\Acceptance\SideNavigation as SideNav;

class AccessAdminPagesViaNavMenuCest
{
    public function _before(AcceptanceTester $I)
    {
        $sideNavMenu = new SideNav($I);
        $I->goToTheAdminLoginPage();
        $I->loginAsAnExistingAdmin();
    }

    // Dashboard Menu Test
    /**
     * @env chrome
     * @env firefox
     * @group slow
     */
    public function shouldLandOnTheDashboardPage(AcceptanceTester $I, SideNav $sideNavMenu)
    {
        $I->wantTo('see if I can access the DASHBOARD Page using the Side Nav Menus');
        $I->goToRandomAdminPage();
        $sideNavMenu->iClickOnDashboardInTheSideNavMenu($I);
        $I->shouldBeOnTheAdminDashboardPage();
        $I->see('Dashboard');
    }

    // Sales Menu Tests
    /**
     * @env chrome
     * @env firefox
     * @group slow
     */
    public function shouldLandOnEachOfTheSalesPages(AcceptanceTester $I, SideNav $sideNavMenu) {
        $I->wantTo('see if I can access each of the SALES Admin Pages using the Side Nav Menus');
        $sideNavMenu->iClickOnSalesInTheSideNavMenu($I);
        $sideNavMenu->iClickOnOrdersInTheSalesNavMenu($I);
        $I->shouldBeOnTheAdminSalesOrdersPage();
        $I->see('Orders');

        $sideNavMenu->iClickOnSalesInTheSideNavMenu($I);
        $sideNavMenu->iClickOnInvoicesInTheSalesNavMenu($I);
        $I->shouldBeOnTheAdminSalesInvoicesPage();
        $I->see('Invoices');

        $sideNavMenu->iClickOnSalesInTheSideNavMenu($I);
        $sideNavMenu->iClickOnShipmentsInTheSalesNavMenu($I);
        $I->shouldBeOnTheAdminSalesShipmentsPage();
        $I->see('Shipments');

        $sideNavMenu->iClickOnSalesInTheSideNavMenu($I);
        $sideNavMenu->iClickOnCreditMemosInTheSalesNavMenu($I);
        $I->shouldBeOnTheAdminSalesCreditMemosPage();
        $I->see('Credit Memos');

        $sideNavMenu->iClickOnSalesInTheSideNavMenu($I);
        $sideNavMenu->iClickOnBillingAgreementsInTheSalesNavMenu($I);
        $I->shouldBeOnTheAdminSalesBillingAgreementsPage();
        $I->see('Billing Agreements');

        $sideNavMenu->iClickOnSalesInTheSideNavMenu($I);
        $sideNavMenu->iClickOnTransactionsInTheSalesNavMenu($I);
        $I->shouldBeOnTheAdminSalesTransactionsPage();
        $I->see('Transactions');
    }

    // Products Menu Tests
    /**
     * @env chrome
     * @env firefox
     * @group slow
     */
    public function shouldLandOnEachOfTheProductsPages(AcceptanceTester $I, SideNav $sideNavMenu) {
        $I->wantTo('see if I can access each of the PRODUCTS Admin Pages using the Side Nav Menus');
        $sideNavMenu->iClickOnProductsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnCatalogInTheProductNavMenu($I);
        $I->shouldBeOnTheAdminProductsCatalogPage();
        $I->see('Catalog');

        $sideNavMenu->iClickOnProductsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnCategoriesInTheProductNavMenu($I);
        $I->shouldBeOnTheAdminProductsCategoriesPage();
        $I->see('Default Category');
    }

    // Customers Menu Tests
    /**
     * @env chrome
     * @env firefox
     * @group slow
     */
    public function shouldLanOnEachOfTheCustomersPages(AcceptanceTester $I, SideNav $sideNavMenu) {
        $I->wantTo('see if I can access each of the CUSTOMERS Admin Pages using the Side Nav Menus');
        $sideNavMenu->iClickOnCustomersInTheSideNavMenu($I);
        $sideNavMenu->iClickOnAllCustomersInTheCustomersNavMenu($I);
        $I->shouldBeOnTheAdminCustomersAllCustomersPage();
        $I->see('Customers');

        $sideNavMenu->iClickOnCustomersInTheSideNavMenu($I);
        $sideNavMenu->iClickOnNowOnlineInTheCustomersNavMenu($I);
        $I->shouldBeOnTheAdminCustomersNowOnlinePage();
        $I->see('Customers Now Online');
    }

    // Marketing Menu Tests
    /**
     * @env chrome
     * @env firefox
     * @group slow
     */
    public function shouldLandOnEachOfTheMarketingPages(AcceptanceTester $I, SideNav $sideNavMenu) {
        $I->wantTo('see if I can access each of the MARKETING Admin Pages using the Side Nav Menus');
        $sideNavMenu->iClickOnMarketingInTheSideNavMenu($I);
        $sideNavMenu->iClickOnCatalogPriceRulesInTheMarketingNavMenu($I);
        $I->shouldBeOnTheAdminMarketingCatalogPriceRulePage();
        $I->see('Catalog Price Rule');

        $sideNavMenu->iClickOnMarketingInTheSideNavMenu($I);
        $sideNavMenu->iClickOnCartPriceRulesInTheMarketingNavMenu($I);
        $I->shouldBeOnTheAdminMarketingCartPriceRulePage();
        $I->see('Cart Price Rules');

        $sideNavMenu->iClickOnMarketingInTheSideNavMenu($I);
        $sideNavMenu->iClickOnEmailTemplatesInTheMarketingNavMenu($I);
        $I->shouldBeOnTheAdminMarketingEmailTemplatesPage();
        $I->see('Email Templates');

        $sideNavMenu->iClickOnMarketingInTheSideNavMenu($I);
        $sideNavMenu->iClickOnNewsletterTemplatesInTheMarketingNavMenu($I);
        $I->shouldBeOnTheAdminMarketingNewsletterTemplatePage();
        $I->see('Newsletter Templates');

        $sideNavMenu->iClickOnMarketingInTheSideNavMenu($I);
        $sideNavMenu->iClickOnNewsletterQueueInTheMarketingNavMenu($I);
        $I->shouldBeOnTheAdminMarketingNewsletterQueuePage();
        $I->see('Newsletter Queue');

        $sideNavMenu->iClickOnMarketingInTheSideNavMenu($I);
        $sideNavMenu->iClickOnNewsletterSubscribersInTheMarketingNavMenu($I);
        $I->shouldBeOnTheAdminMarketingNewsletterSubscribersPage();
        $I->see('Newsletter Subscribers');

        $sideNavMenu->iClickOnMarketingInTheSideNavMenu($I);
        $sideNavMenu->iClickOnURLRewritesInTheMarketingNavMenu($I);
        $I->shouldBeOnTheAdminMarketingURLRewritesPage();
        $I->see('URL Rewrites');

        $sideNavMenu->iClickOnMarketingInTheSideNavMenu($I);
        $sideNavMenu->iClickOnSearchTermsInTheMarketingNavMenu($I);
        $I->shouldBeOnTheAdminMarketingSearchTermsPage();
        $I->see('Search Terms');

        $sideNavMenu->iClickOnMarketingInTheSideNavMenu($I);
        $sideNavMenu->iClickOnSearchSynonymsInTheMarketingNavMenu($I);
        $I->shouldBeOnTheAdminMarketingSearchSynonymsPage();
        $I->see('Search Synonyms');

        $sideNavMenu->iClickOnMarketingInTheSideNavMenu($I);
        $sideNavMenu->iClickOnSiteMapInTheMarketingNavMenu($I);
        $I->shouldBeOnTheAdminMarketingSiteMapPage();
        $I->see('Site Map');

        $sideNavMenu->iClickOnMarketingInTheSideNavMenu($I);
        $sideNavMenu->iClickOnContentReviewsInTheMarketingNavMenu($I);
        $I->shouldBeOnTheAdminMarketingReviewsPage();
        $I->see('Reviews');
    }

    // Content Menu Tests
    /**
     * @env chrome
     * @env firefox
     * @group slow
     */
    public function shouldLandOnEachOfTheContentPages(AcceptanceTester $I, SideNav $sideNavMenu) {
        $I->wantTo('see if I can access each of the CONTENT Admin Pages using the Side Nav Menus');
        $sideNavMenu->iClickOnContentInTheSideNavMenu($I);
        $sideNavMenu->iClickOnPagesInTheContentNavMenu($I);
        $I->shouldBeOnTheAdminContentPagesPage();
        $I->see('Pages');

        $sideNavMenu->iClickOnContentInTheSideNavMenu($I);
        $sideNavMenu->iClickOnBlocksInTheContentNavMenu($I);
        $I->shouldBeOnTheAdminContentBlocksPage();
        $I->see('Blocks');

        $sideNavMenu->iClickOnContentInTheSideNavMenu($I);
        $sideNavMenu->iClickOnWidgetsInTheContentNavMenu($I);
        $I->shouldBeOnTheAdminContentWidgetsPage();
        $I->see('Widgets');

        $sideNavMenu->iClickOnContentInTheSideNavMenu($I);
        $sideNavMenu->iClickOnConfigurationInTheContentNavMenu($I);
        $I->shouldBeOnTheAdminContentConfigurationPage();
        $I->see('Design Configuration');

        $sideNavMenu->iClickOnContentInTheSideNavMenu($I);
        $sideNavMenu->iClickOnThemesInTheContentNavMenu($I);
        $I->shouldBeOnTheAdminContentThemesPage();
        $I->see('Themes');

        $sideNavMenu->iClickOnContentInTheSideNavMenu($I);
        $sideNavMenu->iClickOnScheduleInTheContentNavMenu($I);
        $I->shouldBeOnTheAdminContentSchedulePage();
        $I->see('Store Design Schedule');
    }

    // Reports Menu Tests
    /**
     * @env chrome
     * @env firefox
     * @group slow
     */
    public function shouldLandOnEachOfTheReportsPages(AcceptanceTester $I, SideNav $sideNavMenu) {
        $I->wantTo('see if I can access each of the REPORTS Admin Pages using the Side Nav Menu');
        $sideNavMenu->iClickOnReportsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnProductsInCartInTheReportsNavMenu($I);
        $I->shouldBeOnTheAdminReportsProductsInCartPage();
        $I->see('Products in Carts');

        $sideNavMenu->iClickOnReportsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnSearchTermsInTheReportsNavMenu($I);
        $I->shouldBeOnTheAdminReportsSearchTermsPage();
        $I->see('Search Terms Report');

        $sideNavMenu->iClickOnReportsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnAbandonedCartsInTheReportsNavMenu($I);
        $I->shouldBeOnTheAdminReportsAbandonedCartsPage();
        $I->see('Abandoned Carts');

        $sideNavMenu->iClickOnReportsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnNewsletterProblemReportsInTheReportsNavMenu($I);
        $I->shouldBeOnTheAdminReportsNewsletterProblemReportsPage();
        $I->see('Newsletter Problems Report');

        $sideNavMenu->iClickOnReportsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnByCustomersInTheReportsNavMenu($I);
        $I->shouldBeOnTheAdminReportsByCustomersPage();
        $I->see('Customer Reviews Report');

        $sideNavMenu->iClickOnReportsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnByProductsInTheReportsNavMenu($I);
        $I->shouldBeOnTheAdminReportsByProductsPage();
        $I->see('Product Reviews Report');

        $sideNavMenu->iClickOnReportsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnOrdersInTheReportsNavMenu($I);
        $I->shouldBeOnTheAdminReportsOrdersPage();
        $I->see('Orders Report');

        $sideNavMenu->iClickOnReportsInTheSideNavMenu($I);
        $sideNavMenu->iClickOTaxnInTheReportsNavMenu($I);
        $I->shouldBeOnTheAdminReportsTaxPage();
        $I->see('Tax Report');

        $sideNavMenu->iClickOnReportsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnInvoicedInTheReportsNavMenu($I);
        $I->shouldBeOnTheAdminReportsInvoicedPage();
        $I->see('Invoice Report');

        $sideNavMenu->iClickOnReportsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnShippingInTheReportsNavMenu($I);
        $I->shouldBeOnTheAdminReportsShippingPage();
        $I->see('Shipping Report');

        $sideNavMenu->iClickOnReportsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnRefundsInTheReportsNavMenu($I);
        $I->shouldBeOnTheAdminReportsRefundsPage();
        $I->see('Refunds Report');

        $sideNavMenu->iClickOnReportsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnCouponsInTheReportsNavMenu($I);
        $I->shouldBeOnTheAdminReportsCouponsPage();
        $I->see('Coupons Report');

        $sideNavMenu->iClickOnReportsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnPaypalSettlementInTheReportsNavMenu($I);
        $I->shouldBeOnTheAdminReportsPayPalSettlementPage();
        $I->see('PayPal Settlement Reports');

        $sideNavMenu->iClickOnReportsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnBraintreeSettlementInTheReportsNavMenu($I);
        $I->shouldBeOnTheAdminReportsBraintreeSettlementPage();
        $I->see('Braintree Settlement Report');

        $sideNavMenu->iClickOnReportsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnOrderTotalInTheReportsNavMenu($I);
        $I->shouldBeOnTheAdminReportsOrderTotalPage();
        $I->see('Order Total Report');

        $sideNavMenu->iClickOnReportsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnOrderCountInTheReportsNavMenu($I);
        $I->shouldBeOnTheAdminReportsOrderCountPage();
        $I->see('Order Count Report');

        $sideNavMenu->iClickOnReportsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnNewInTheReportsNavMenu($I);
        $I->shouldBeOnTheAdminReportsNewPage();
        $I->see('New Accounts Report');

        $sideNavMenu->iClickOnReportsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnViewsInTheReportsNavMenu($I);
        $I->shouldBeOnTheAdminReportsViewsPage();
        $I->see('Product Views Report');

        $sideNavMenu->iClickOnReportsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnBestSellersInTheReportsNavMenu($I);
        $I->shouldBeOnTheAdminReportsBestsellersPage();
        $I->see('Bestsellers Report');

        $sideNavMenu->iClickOnReportsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnLowStockInTheReportsNavMenu($I);
        $I->shouldBeOnTheAdminReportsLowStockPage();
        $I->see('Low Stock Report');

        $sideNavMenu->iClickOnReportsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnOrderedInTheReportsNavMenu($I);
        $I->shouldBeOnTheAdminReportsOrderedPage();
        $I->see('Ordered Products Report');

        $sideNavMenu->iClickOnReportsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnDownloadsInTheReportsNavMenu($I);
        $I->shouldBeOnTheAdminReportsDownloadsPage();
        $I->see('Downloads Report');

        $sideNavMenu->iClickOnReportsInTheSideNavMenu($I);
        $sideNavMenu->iClickOnRefreshStatisticsInTheReportsNavMenu($I);
        $I->shouldBeOnTheAdminReportRefreshStatisticsPage();
        $I->see('Refresh Statistics');
    }

    // Stores Menu Tests
    /**
     * @env chrome
     * @env firefox
     * @group slow
     */
    public function shouldLandOnEachOfTheStoresPages(AcceptanceTester $I, SideNav $sideNavMenu) {
        $I->wantTo('see if I can access each of the STORES Admin Pages using the Side Nav Menu');
        $sideNavMenu->iClickOnStoresInTheSideNavMenu($I);
        $sideNavMenu->iClickOnAllStoresInTheStoresNavMenu($I);
        $I->shouldBeOnTheAdminStoresAllStoresPage();
        $I->see('Stores');

        $sideNavMenu->iClickOnStoresInTheSideNavMenu($I);
        $sideNavMenu->iClickOnConfigurationInTheStoresNavMenu($I);
        $I->shouldBeOnTheAdminStoresConfigurationPage();
        $I->see('Configuration');

        $sideNavMenu->iClickOnStoresInTheSideNavMenu($I);
        $sideNavMenu->iClickOnTermsAndConditionsInTheStoresNavMenu($I);
        $I->shouldBeOnTheAdminStoresTermsAndConditionsPage();
        $I->see('Terms and Conditions');

        $sideNavMenu->iClickOnStoresInTheSideNavMenu($I);
        $sideNavMenu->iClickOnOrderStatusInTheStoresNavMenu($I);
        $I->shouldBeOnTheAdminStoresOrderStatusPage();
        $I->see('Order Status');

        $sideNavMenu->iClickOnStoresInTheSideNavMenu($I);
        $sideNavMenu->iClickOnTaxRuleInTheStoresNavMenu($I);
        $I->shouldBeOnTheAdminStoresTaxRulesPage();
        $I->see('Tax Rules');

        $sideNavMenu->iClickOnStoresInTheSideNavMenu($I);
        $sideNavMenu->iClickOnTaxZonesAndRatesInTheStoresNavMenu($I);
        $I->shouldBeOnTheAdminStoresTaxZonesAndRatesPage();
        $I->see('Tax Zones and Rates');

        $sideNavMenu->iClickOnStoresInTheSideNavMenu($I);
        $sideNavMenu->iClickOnCurrencyRatesInTheStoresNavMenu($I);
        $I->shouldBeOnTheAdminStoresCurrencyRatesPage();
        $I->see('Currency Rates');

        $sideNavMenu->iClickOnStoresInTheSideNavMenu($I);
        $sideNavMenu->iClickOnCurrencySymbolsInTheStoresNavMenu($I);
        $I->shouldBeOnTheAdminStoresCurrencySymbolsPage();
        $I->see('Currency Symbols');

        $sideNavMenu->iClickOnStoresInTheSideNavMenu($I);
        $sideNavMenu->iClickOnProductInTheStoresNavMenu($I);
        $I->shouldBeOnTheAdminStoresProductPage();
        $I->see('Product Attributes');

        $sideNavMenu->iClickOnStoresInTheSideNavMenu($I);
        $sideNavMenu->iClickOnAttributesSetInTheStoresNavMenu($I);
        $I->shouldBeOnTheAdminStoresAttributeSetPage();
        $I->see('Attribute Sets');

        $sideNavMenu->iClickOnStoresInTheSideNavMenu($I);
        $sideNavMenu->iClickOnRatingsInTheStoresNavMenu($I);
        $I->shouldBeOnTheAdminStoresRatingPage();
        $I->see('Ratings');

        $sideNavMenu->iClickOnStoresInTheSideNavMenu($I);
        $sideNavMenu->iClickOnCustomerGroupInTheStoresNavMenu($I);
        $I->shouldBeOnTheAdminStoresCustomerGroupsPage();
        $I->see('Customer Groups');
    }

    // System Menu Tests
    /**
     * @env chrome
     * @env firefox
     * @group slow
     */
    public function shouldLandOnEachOfTheSystemPages(AcceptanceTester $I, SideNav $sideNavMenu) {
        $I->wantTo('see if I can access each of the SYSTEM Admin Pages using the Side Nav Menu');
        $sideNavMenu->iClickOnSystemInTheSideNavMenu($I);
        $sideNavMenu->iClickOnImportInTheSystemNavMenu($I);
        $I->shouldBeOnTheAdminSystemImportPage();
        $I->see('Import');

        $sideNavMenu->iClickOnSystemInTheSideNavMenu($I);
        $sideNavMenu->iClickOnExportInTheSystemNavMenu($I);
        $I->shouldBeOnTheAdminSystemExportPage();
        $I->see('Export');

        $sideNavMenu->iClickOnSystemInTheSideNavMenu($I);
        $sideNavMenu->iClickOnImportExportTaxRatesInTheSystemNavMenu($I);
        $I->shouldBeOnTheAdminSystemImportExportTaxRatesPage();
        $I->see('Import and Export Tax Rates');

        $sideNavMenu->iClickOnSystemInTheSideNavMenu($I);
        $sideNavMenu->iClickOnImportHistoryInTheSystemNavMenu($I);
        $I->shouldBeOnTheAdminSystemImportHistoryPage();
        $I->see('Import History');

        $sideNavMenu->iClickOnSystemInTheSideNavMenu($I);
        $sideNavMenu->iClickOnIntegrationsInTheSystemNavMenu($I);
        $I->shouldBeOnTheAdminSystemIntegrationsPage();
        $I->see('Integrations');

        $sideNavMenu->iClickOnSystemInTheSideNavMenu($I);
        $sideNavMenu->iClickOnCacheManagementInTheSystemNavMenu($I);
        $I->shouldBeOnTheAdminSystemCacheManagementPage();
        $I->see('Cache Management');

        $sideNavMenu->iClickOnSystemInTheSideNavMenu($I);
        $sideNavMenu->iClickOnBackupsInTheSystemNavMenu($I);
        $I->shouldBeOnTheAdminSystemBackupsPage();
        $I->see('Backups');

        $sideNavMenu->iClickOnSystemInTheSideNavMenu($I);
        $sideNavMenu->iClickOnIndexManagementInTheSystemNavMenu($I);
        $I->shouldBeOnTheAdminSystemIndexManagementPage();
        $I->see('Index Management');

        $sideNavMenu->iClickOnSystemInTheSideNavMenu($I);
        $sideNavMenu->iClickOnAllUsersInTheSystemNavMenu($I);
        $I->shouldBeOnTheAdminSystemAllUsersPage();
        $I->see('Users');

        $sideNavMenu->iClickOnSystemInTheSideNavMenu($I);
        $sideNavMenu->iClickOnLockedUsersInTheSystemNavMenu($I);
        $I->shouldBeOnTheAdminSystemLockedUsersPage();
        $I->see('Locked Users');

        $sideNavMenu->iClickOnSystemInTheSideNavMenu($I);
        $sideNavMenu->iClickOnUserRolesInTheSystemNavMenu($I);
        $I->shouldBeOnTheAdminSystemUserRolesPage();
        $I->see('Roles');

        $sideNavMenu->iClickOnSystemInTheSideNavMenu($I);
        $sideNavMenu->iClickOnNotificationsInTheSystemNavMenu($I);
        $I->shouldBeOnTheAdminSystemNotificationsPage();
        $I->see('Notifications');

        $sideNavMenu->iClickOnSystemInTheSideNavMenu($I);
        $sideNavMenu->iClickOnCustomVariablesInTheSystemNavMenu($I);
        $I->shouldBeOnTheAdminSystemCustomVariablesPage();
        $I->see('Custom Variables');

        $sideNavMenu->iClickOnSystemInTheSideNavMenu($I);
        $sideNavMenu->iClickOnManageEncryptionKeyInTheSystemNavMenu($I);
        $I->shouldBeOnTheAdminSystemManageEncryptionKeyPage();
        $I->see('Encryption Key');
    }

    /**
     * @env chrome
     * @env firefox
     * @group slow
     */
    public function shouldLandOnTheWebSetupWizardPage(AcceptanceTester $I, SideNav $sideNavMenu) {
        $I->wantTo('see if I can access the Web Setup Wizard Admin Page using the Side Nav Menu');
        $sideNavMenu->iClickOnSystemInTheSideNavMenu($I);
        $sideNavMenu->iClickOnWebSetupWizardInTheSystemNavMenu($I);
        $I->shouldBeOnTheAdminSystemWebSetupWizardPage();
        $I->see('Setup Wizard');
        $I->goToTheAdminLogoutPage();
    }

    /**
     * @env chrome
     * @env firefox
     * @group slow
     */
    public function shouldLandOnThePartnersAndExtensionsPage(AcceptanceTester $I, SideNav $sideNavMenu) {
        $I->wantTo('see if I can access the Partners and Extensions Admin Page using the Side Nav Menu');
        $sideNavMenu->iClickOnFindPartnersAndExtensionsInTheSideNavMenu($I);
        $I->shouldBeOnTheAdminFindPartnersAndExtensionsPage();
        $I->see('Magento Marketplace');
    }

}
