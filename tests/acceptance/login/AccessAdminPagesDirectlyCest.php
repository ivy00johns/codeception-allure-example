<?php


class AccessAdminPagesDirectlyCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->goToTheAdminLoginPage();
        $I->loginAsAnExistingAdmin();
    }

    /**
     * @env chrome
     * @env firefox
     * @env phantom
     * @group slow
     */
    public function shouldBeAbleToAccessEachAdminPageDirectly(AcceptanceTester $I)
    {
        $I->goToTheAdminSalesOrdersPage();
        $I->shouldBeOnTheAdminSalesOrdersPage();
        $I->see('Orders');

        $I->goToTheAdminSalesInvoicesPage();
        $I->shouldBeOnTheAdminSalesInvoicesPage();
        $I->see('Invoices');

        $I->goToTheAdminSalesShipmentsPage();
        $I->shouldBeOnTheAdminSalesShipmentsPage();
        $I->see('Shipments');

        $I->goToTheAdminSalesCreditMemosPage();
        $I->shouldBeOnTheAdminSalesCreditMemosPage();
        $I->see('Credit Memos');

        $I->goToTheAdminSalesBillingAgreementsPage();
        $I->shouldBeOnTheAdminSalesBillingAgreementsPage();
        $I->see('Billing Agreements');

        $I->goToTheAdminSalesTransactionsPage();
        $I->shouldBeOnTheAdminSalesTransactionsPage();
        $I->see('Transactions');

        $I->goToTheAdminProductsCatalogPage();
        $I->shouldBeOnTheAdminProductsCatalogPage();
        $I->see('Catalog');

        $I->goToTheAdminProductsCategoriesPage();
        $I->shouldBeOnTheAdminProductsCategoriesPage();
        $I->see('Default Category');

        $I->goToTheAdminCustomersAllCustomersPage();
        $I->shouldBeOnTheAdminCustomersAllCustomersPage();
        $I->see('Customers');

        $I->goToTheAdminCustomersNowOnlinePage();
        $I->shouldBeOnTheAdminCustomersNowOnlinePage();
        $I->see('Customers Now Online');

        $I->goToTheAdminMarketingCatalogPriceRulePage();
        $I->shouldBeOnTheAdminMarketingCatalogPriceRulePage();
        $I->see('Catalog Price Rule');

        $I->goToTheAdminMarketingCartPriceRulePage();
        $I->shouldBeOnTheAdminMarketingCartPriceRulePage();
        $I->see('Cart Price Rules');

        $I->goToTheAdminMarketingEmailTemplatesPage();
        $I->shouldBeOnTheAdminMarketingEmailTemplatesPage();
        $I->see('Email Templates');

        $I->goToTheAdminMarketingNewsletterTemplatePage();
        $I->shouldBeOnTheAdminMarketingNewsletterTemplatePage();
        $I->see('Newsletter Templates');

        $I->goToTheAdminMarketingNewsletterQueuePage();
        $I->shouldBeOnTheAdminMarketingNewsletterQueuePage();
        $I->see('Newsletter Queue');

        $I->goToTheAdminMarketingNewsletterSubscribersPage();
        $I->shouldBeOnTheAdminMarketingNewsletterSubscribersPage();
        $I->see('Newsletter Subscribers');

        $I->goToTheAdminMarketingURLRewritesPage();
        $I->shouldBeOnTheAdminMarketingURLRewritesPage();
        $I->see('URL Rewrites');

        $I->goToTheAdminMarketingSearchTermsPage();
        $I->shouldBeOnTheAdminMarketingSearchTermsPage();
        $I->see('Search Terms');

        $I->goToTheAdminMarketingSearchSynonymsPage();
        $I->shouldBeOnTheAdminMarketingSearchSynonymsPage();
        $I->see('Search Synonyms');

        $I->goToTheAdminMarketingSiteMapPage();
        $I->shouldBeOnTheAdminMarketingSiteMapPage();
        $I->see('Site Map');

        $I->goToTheAdminMarketingReviewsPage();
        $I->shouldBeOnTheAdminMarketingReviewsPage();
        $I->see('Reviews');

        $I->goToTheAdminContentPagesPage();
        $I->shouldBeOnTheAdminContentPagesPage();
        $I->see('Pages');

        $I->goToTheAdminContentBlocksPage();
        $I->shouldBeOnTheAdminContentBlocksPage();
        $I->see('Blocks');

        $I->goToTheAdminContentWidgetsPage();
        $I->shouldBeOnTheAdminContentWidgetsPage();
        $I->see('Widgets');

        $I->goToTheAdminContentConfigurationPage();
        $I->shouldBeOnTheAdminContentConfigurationPage();
        $I->see('Design Configuration');

        $I->goToTheAdminContentThemesPage();
        $I->shouldBeOnTheAdminContentThemesPage();
        $I->see('Themes');

        $I->goToTheAdminContentSchedulePage();
        $I->shouldBeOnTheAdminContentSchedulePage();
        $I->see('Store Design Schedule');

        $I->goToTheAdminReportsProductsInCartPage();
        $I->shouldBeOnTheAdminReportsProductsInCartPage();
        $I->see('Products in Carts');

        $I->goToTheAdminReportsSearchTermsPage();
        $I->shouldBeOnTheAdminReportsSearchTermsPage();
        $I->see('Search Terms Report');

        $I->goToTheAdminReportsAbandonedCartsPage();
        $I->shouldBeOnTheAdminReportsAbandonedCartsPage();
        $I->see('Abandoned Carts');

        $I->goToTheAdminReportsNewsletterProblemReportsPage();
        $I->shouldBeOnTheAdminReportsNewsletterProblemReportsPage();
        $I->see('Newsletter Problems Report');

        $I->goToTheAdminReportsByCustomersPage();
        $I->shouldBeOnTheAdminReportsByCustomersPage();
        $I->see('Customer Reviews Report');

        $I->goToTheAdminReportsByProductsPage();
        $I->shouldBeOnTheAdminReportsByProductsPage();
        $I->see('Product Reviews Report');

        $I->goToTheAdminReportsOrdersPage();
        $I->shouldBeOnTheAdminReportsOrdersPage();
        $I->see('Orders Report');

        $I->goToTheAdminReportsTaxPage();
        $I->shouldBeOnTheAdminReportsTaxPage();
        $I->see('Tax Report');

        $I->goToTheAdminReportsInvoicedPage();
        $I->shouldBeOnTheAdminReportsInvoicedPage();
        $I->see('Invoice Report');

        $I->goToTheAdminReportsShippingPage();
        $I->shouldBeOnTheAdminReportsShippingPage();
        $I->see('Shipping Report');

        $I->goToTheAdminReportsRefundsPage();
        $I->shouldBeOnTheAdminReportsRefundsPage();
        $I->see('Refunds Report');

        $I->goToTheAdminReportsCouponsPage();
        $I->shouldBeOnTheAdminReportsCouponsPage();
        $I->see('Coupons Report');

        $I->goToTheAdminReportsPayPalSettlementPage();
        $I->shouldBeOnTheAdminReportsPayPalSettlementPage();
        $I->see('PayPal Settlement Reports');

        $I->goToTheAdminReportsBraintreeSettlementPage();
        $I->shouldBeOnTheAdminReportsBraintreeSettlementPage();
        $I->see('Braintree Settlement Report');

        $I->goToTheAdminReportsOrderTotalPage();
        $I->shouldBeOnTheAdminReportsOrderTotalPage();
        $I->see('Order Total Report');

        $I->goToTheAdminReportsOrderCountPage();
        $I->shouldBeOnTheAdminReportsOrderCountPage();
        $I->see('Order Count Report');

        $I->goToTheAdminReportsNewPage();
        $I->shouldBeOnTheAdminReportsNewPage();
        $I->see('New Accounts Report');

        $I->goToTheAdminReportsViewsPage();
        $I->shouldBeOnTheAdminReportsViewsPage();
        $I->see('Product Views Report');

        $I->goToTheAdminReportsBestsellersPage();
        $I->shouldBeOnTheAdminReportsBestsellersPage();
        $I->see('Bestsellers Report');

        $I->goToTheAdminReportsLowStockPage();
        $I->shouldBeOnTheAdminReportsLowStockPage();
        $I->see('Low Stock Report');

        $I->goToTheAdminReportsOrderedPage();
        $I->shouldBeOnTheAdminReportsOrderedPage();
        $I->see('Ordered Products Report');

        $I->goToTheAdminReportsDownloadsPage();
        $I->shouldBeOnTheAdminReportsDownloadsPage();
        $I->see('Downloads Report');

        $I->goToTheAdminReportRefreshStatisticsPage();
        $I->shouldBeOnTheAdminReportRefreshStatisticsPage();
        $I->see('Refresh Statistics');

        $I->goToTheAdminStoresAllStoresPage();
        $I->shouldBeOnTheAdminStoresAllStoresPage();
        $I->see('Stores');

        $I->goToTheAdminStoresConfigurationPage();
        $I->shouldBeOnTheAdminStoresConfigurationPage();
        $I->see('Configuration');

        $I->goToTheAdminStoresTermsAndConditionsPage();
        $I->shouldBeOnTheAdminStoresTermsAndConditionsPage();
        $I->see('Terms and Conditions');

        $I->goToTheAdminStoresOrderStatusPage();
        $I->shouldBeOnTheAdminStoresOrderStatusPage();
        $I->see('Order Status');

        $I->goToTheAdminStoresTaxRulesPage();
        $I->shouldBeOnTheAdminStoresTaxRulesPage();
        $I->see('Tax Rules');

        $I->goToTheAdminStoresTaxZonesAndRatesPage();
        $I->shouldBeOnTheAdminStoresTaxZonesAndRatesPage();
        $I->see('Tax Zones and Rates');

        $I->goToTheAdminStoresCurrencyRatesPage();
        $I->shouldBeOnTheAdminStoresCurrencyRatesPage();
        $I->see('Currency Rates');

        $I->goToTheAdminStoresCurrencySymbolsPage();
        $I->shouldBeOnTheAdminStoresCurrencySymbolsPage();
        $I->see('Currency Symbols');

        $I->goToTheAdminStoresProductPage();
        $I->shouldBeOnTheAdminStoresProductPage();
        $I->see('Product Attributes');

        $I->goToTheAdminStoresAttributeSetPage();
        $I->shouldBeOnTheAdminStoresAttributeSetPage();
        $I->see('Attribute Sets');

        $I->goToTheAdminStoresRatingPage();
        $I->shouldBeOnTheAdminStoresRatingPage();
        $I->see('Ratings');

        $I->goToTheAdminStoresCustomerGroupsPage();
        $I->shouldBeOnTheAdminStoresCustomerGroupsPage();
        $I->see('Customer Groups');

        $I->goToTheAdminSystemImportPage();
        $I->shouldBeOnTheAdminSystemImportPage();
        $I->see('Import');

        $I->goToTheAdminSystemExportPage();
        $I->shouldBeOnTheAdminSystemExportPage();
        $I->see('Export');

        $I->goToTheAdminSystemImportExportTaxRatesPage();
        $I->shouldBeOnTheAdminSystemImportExportTaxRatesPage();
        $I->see('Import and Export Tax Rates');

        $I->goToTheAdminSystemImportHistoryPage();
        $I->shouldBeOnTheAdminSystemImportHistoryPage();
        $I->see('Import History');

        $I->goToTheAdminSystemIntegrationsPage();
        $I->shouldBeOnTheAdminSystemIntegrationsPage();
        $I->see('Integrations');

        $I->goToTheAdminSystemCacheManagementPage();
        $I->shouldBeOnTheAdminSystemCacheManagementPage();
        $I->see('Cache Management');

        $I->goToTheAdminSystemBackupsPage();
        $I->shouldBeOnTheAdminSystemBackupsPage();
        $I->see('Backups');

        $I->goToTheAdminSystemIndexManagementPage();
        $I->shouldBeOnTheAdminSystemIndexManagementPage();
        $I->see('Index Management');

        $I->goToTheAdminSystemAllUsersPage();
        $I->shouldBeOnTheAdminSystemAllUsersPage();
        $I->see('Users');

        $I->goToTheAdminSystemLockedUsersPage();
        $I->shouldBeOnTheAdminSystemLockedUsersPage();
        $I->see('Locked Users');

        $I->goToTheAdminSystemUserRolesPage();
        $I->shouldBeOnTheAdminSystemUserRolesPage();
        $I->see('Roles');

        $I->goToTheAdminSystemNotificationsPage();
        $I->shouldBeOnTheAdminSystemNotificationsPage();
        $I->see('Notifications');

        $I->goToTheAdminSystemCustomVariablesPage();
        $I->shouldBeOnTheAdminSystemCustomVariablesPage();
        $I->see('Custom Variables');

        $I->goToTheAdminSystemManageEncryptionKeyPage();
        $I->shouldBeOnTheAdminSystemManageEncryptionKeyPage();
        $I->see('Encryption Key');
    }
}
