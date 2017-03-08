<?php

require_once "Helper/URL_List.php";

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
 */
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * Define custom actions here
     */
    public function goToTheAdminLoginPage() {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminLogin);
    }

    public function goToTheAdminLogoutPage() {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminLogout);
    }

    public function goToRandomAdminPage() {
        $I = $this;

        $admin_url_list = array(
            "/admin/admin/dashboard/",
            "/admin/sales/order/",
            "/admin/sales/invoice/",
            "/admin/sales/shipment/",
            "/admin/sales/creditmemo/",
            "/admin/paypal/billing_agreement/",
            "/admin/sales/transactions/",
            "/admin/catalog/product/",
            "/admin/catalog/category/",
            "/admin/customer/index/",
            "/admin/customer/online/",
            "/admin/catalog_rule/promo_catalog/",
            "/admin/sales_rule/promo_quote/",
            "/admin/admin/email_template/",
            "/admin/newsletter/template/",
            "/admin/newsletter/queue/",
            "/admin/newsletter/subscriber/",
            "/admin/admin/url_rewrite/index/",
            "/admin/search/term/index/",
            "/admin/search/synonyms/index/",
            "/admin/admin/sitemap/",
            "/admin/review/product/index/",
            "/admin/cms/page/",
            "/admin/cms/block/",
            "/admin/admin/widget_instance/",
            "/admin/theme/design_config/",
            "/admin/admin/system_design_theme/",
            "/admin/admin/system_design/",
            "/admin/reports/report_shopcart/product/",
            "/admin/search/term/report/",
            "/admin/reports/report_shopcart/abandoned/",
            "/admin/newsletter/problem/",
            "/admin/reports/report_review/customer/",
            "/admin/reports/report_review/product/",
            "/admin/reports/report_sales/sales/",
            "/admin/reports/report_sales/tax/",
            "/admin/reports/report_sales/invoiced/",
            "/admin/reports/report_sales/shipping/",
            "/admin/reports/report_sales/refunded/",
            "/admin/reports/report_sales/coupons/",
            "/admin/paypal/paypal_reports/",
            "/admin/braintree/report/",
            "/admin/reports/report_customer/totals/",
            "/admin/reports/report_customer/orders/",
            "/admin/reports/report_customer/accounts/",
            "/admin/reports/report_product/viewed/",
            "/admin/reports/report_sales/bestsellers/",
            "/admin/reports/report_product/lowstock/",
            "/admin/reports/report_product/sold/",
            "/admin/reports/report_product/downloads/",
            "/admin/reports/report_statistics/",
            "/admin/admin/system_store/",
            "/admin/admin/system_config/",
            "/admin/checkout/agreement/",
            "/admin/sales/order_status/",
            "/admin/tax/rule/",
            "/admin/tax/rate/",
            "/admin/admin/system_currency/",
            "/admin/admin/system_currencysymbol/",
            "/admin/catalog/product_attribute/",
            "/admin/catalog/product_set/",
            "/admin/review/rating/",
            "/admin/customer/group/",
            "/admin/admin/import/",
            "/admin/admin/export/",
            "/admin/tax/rate/importExport/",
            "/admin/admin/history/",
            "/admin/admin/integration/",
            "/admin/admin/cache/",
            "/admin/backup/index/",
            "/admin/indexer/indexer/list/",
            "/admin/admin/user/",
            "/admin/admin/locks/",
            "/admin/admin/user_role/",
            "/admin/admin/notification/",
            "/admin/admin/system_variable/",
            "/admin/admin/crypt_key/"
        );

        $random_admin_url = array_rand($admin_url_list, 1);

        $I->amOnPage($admin_url_list[$random_admin_url]);

        return $admin_url_list[$random_admin_url];
    }

    // Sales
    public function goToTheAdminSalesOrdersPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminSalesOrders);
    }

    public function goToTheAdminSalesInvoicesPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminSalesInvoices);
    }

    public function goToTheAdminSalesShipmentsPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminSalesShipments);
    }

    public function goToTheAdminSalesCreditMemosPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminSalesCreditMemos);
    }

    public function goToTheAdminSalesBillingAgreementsPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminSalesBillingAgreements);
    }

    public function goToTheAdminSalesTransactionsPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminSalesTransactions);
    }

    // Products
    public function goToTheAdminProductsCatalogPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminProductsCatalog);
    }

    public function goToTheAdminProductsCategoriesPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminProductsCategories);
    }

    // Customers
    public function goToTheAdminCustomersAllCustomersPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminCustomersAllCustomers);
    }

    public function goToTheAdminCustomersNowOnlinePage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminCustomersNowOnline);
    }

    // Marketing
    public function goToTheAdminMarketingCatalogPriceRulePage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminMarketingCatalogPriceRule);
    }

    public function goToTheAdminMarketingCartPriceRulePage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminMarketingCartPriceRules);
    }

    public function goToTheAdminMarketingEmailTemplatesPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminMarketingEmailTemplates);
    }

    public function goToTheAdminMarketingNewsletterTemplatePage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminMarketingNewsletterTemplate);
    }

    public function goToTheAdminMarketingNewsletterQueuePage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminMarketingNewsletterQueue);
    }

    public function goToTheAdminMarketingNewsletterSubscribersPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminMarketingNewsletterSubscribers);
    }

    public function goToTheAdminMarketingURLRewritesPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminMarketingURLRewrites);
    }

    public function goToTheAdminMarketingSearchTermsPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminMarketingSearchTerms);
    }

    public function goToTheAdminMarketingSearchSynonymsPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminMarketingSearchSynonyms);
    }

    public function goToTheAdminMarketingSiteMapPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminMarketingSiteMap);
    }

    public function goToTheAdminMarketingReviewsPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminMarketingReviews);
    }

    // Content
    public function goToTheAdminContentPagesPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminContentPages);
    }

    public function goToTheAdminContentBlocksPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminContentBlocks);
    }

    public function goToTheAdminContentWidgetsPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminContentWidgets);
    }

    public function goToTheAdminContentConfigurationPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminContentConfiguration);
    }

    public function goToTheAdminContentThemesPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminContentThemes);
    }

    public function goToTheAdminContentSchedulePage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminContentSchedule);
    }

    // Reports
    public function goToTheAdminReportsProductsInCartPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminReportsProductsInCart);
    }

    public function goToTheAdminReportsSearchTermsPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminReportsSearchTerms);
    }

    public function goToTheAdminReportsAbandonedCartsPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminReportsAbandonedCArts);
    }

    public function goToTheAdminReportsNewsletterProblemReportsPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminReportsNewsletterProblemReports);
    }

    public function goToTheAdminReportsByCustomersPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminReportsByCustomers);
    }

    public function goToTheAdminReportsByProductsPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminReportsByProducts);
    }

    public function goToTheAdminReportsOrdersPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminReportsOrders);
    }

    public function goToTheAdminReportsTaxPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminReportsTax);
    }

    public function goToTheAdminReportsInvoicedPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminReportsInvoiced);
    }

    public function goToTheAdminReportsShippingPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminReportsShipping);
    }

    public function goToTheAdminReportsRefundsPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminReportsRefunds);
    }

    public function goToTheAdminReportsCouponsPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminReportsCoupons);
    }

    public function goToTheAdminReportsPayPalSettlementPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminReportsPayPalSettlement);
    }

    public function goToTheAdminReportsBraintreeSettlementPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminReportsBraintreeSettlement);
    }

    public function goToTheAdminReportsOrderTotalPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminReportsOrderTotal);
    }

    public function goToTheAdminReportsOrderCountPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminReportsOrderCount);
    }

    public function goToTheAdminReportsNewPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminReportsNew);
    }

    public function goToTheAdminReportsViewsPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminReportsViews);
    }

    public function goToTheAdminReportsBestsellersPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminReportsBestsellers);
    }

    public function goToTheAdminReportsLowStockPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminReportsLowStock);
    }

    public function goToTheAdminReportsOrderedPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminReportsOrdered);
    }

    public function goToTheAdminReportsDownloadsPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminReportsDownloads);
    }

    public function goToTheAdminReportRefreshStatisticsPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminReportsRefreshStatistics);
    }

    // Stores
    public function goToTheAdminStoresAllStoresPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminStoresAllStores);
    }

    public function goToTheAdminStoresConfigurationPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminStoresConfiguration);
    }

    public function goToTheAdminStoresTermsAndConditionsPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminStoresTermsAndConditions);
    }

    public function goToTheAdminStoresOrderStatusPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminStoresOrderStatus);
    }

    public function goToTheAdminStoresTaxRulesPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminStoresTaxRules);
    }

    public function goToTheAdminStoresTaxZonesAndRatesPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminStoresTaxZonesAndRates);
    }

    public function goToTheAdminStoresCurrencyRatesPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminStoresCurrencyRates);
    }

    public function goToTheAdminStoresCurrencySymbolsPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminStoresCurrencySymbols);
    }

    public function goToTheAdminStoresProductPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminStoresProduct);
    }

    public function goToTheAdminStoresAttributeSetPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminStoresAttributeSet);
    }

    public function goToTheAdminStoresRatingPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminStoresRating);
    }

    public function goToTheAdminStoresCustomerGroupsPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminStoresCustomerGroups);
    }

    // System
    public function goToTheAdminSystemImportPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminSystemImport);
    }

    public function goToTheAdminSystemExportPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminSystemExport);
    }

    public function goToTheAdminSystemImportExportTaxRatesPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminSystemImportExportTaxRates);
    }

    public function goToTheAdminSystemImportHistoryPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminSystemImportHistory);
    }

    public function goToTheAdminSystemIntegrationsPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminSystemIntegrations);
    }

    public function goToTheAdminSystemCacheManagementPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminSystemCacheManagement);
    }

    public function goToTheAdminSystemBackupsPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminSystemBackups);
    }

    public function goToTheAdminSystemIndexManagementPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminSystemIndexManagement);
    }

    public function goToTheAdminSystemWebSetupWizardPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminSystemWebSetupWizard);
    }

    public function goToTheAdminSystemAllUsersPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminSystemAllUsers);
    }

    public function goToTheAdminSystemLockedUsersPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminSystemLockedUsers);
    }

    public function goToTheAdminSystemUserRolesPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminSystemUserRoles);
    }

    public function goToTheAdminSystemNotificationsPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminSystemNotifications);
    }

    public function goToTheAdminSystemCustomVariablesPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminSystemCustomVariables);
    }

    public function goToTheAdminSystemManageEncryptionKeyPage()
    {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminSystemManageEncryptionKey);
    }

    public function goToTheAdminFindPartnersAndExtensionsPage() {
        $I = $this;
        $I->amOnPage(\Page\Acceptance\AdminURLList::$adminFindPartnersAndExtensions);
    }

    public function shouldBeOnTheAdminLoginPage() {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminLogin);
    }

    public function shouldBeOnTheAdminDashboardPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminDashboard);
    }

    public function shouldBeOnTheForgotYourPasswordPage() {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminForgotYourPassword);
    }

    // Sales
    public function shouldBeOnTheAdminSalesOrdersPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminSalesOrders);
    }

    public function shouldBeOnTheAdminSalesInvoicesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminSalesInvoices);
    }

    public function shouldBeOnTheAdminSalesShipmentsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminSalesShipments);
    }

    public function shouldBeOnTheAdminSalesCreditMemosPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminSalesCreditMemos);
    }

    public function shouldBeOnTheAdminSalesBillingAgreementsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminSalesBillingAgreements);
    }

    public function shouldBeOnTheAdminSalesTransactionsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminSalesTransactions);
    }

    // Products
    public function shouldBeOnTheAdminProductsCatalogPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminProductsCatalog);
    }

    public function shouldBeOnTheAdminProductsCategoriesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminProductsCategories);
    }

    // Customers
    public function shouldBeOnTheAdminCustomersAllCustomersPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminCustomersAllCustomers);
    }

    public function shouldBeOnTheAdminCustomersNowOnlinePage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminCustomersNowOnline);
    }

    // Marketing
    public function shouldBeOnTheAdminMarketingCatalogPriceRulePage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminMarketingCatalogPriceRule);
    }

    public function shouldBeOnTheAdminMarketingCartPriceRulePage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminMarketingCartPriceRules);
    }

    public function shouldBeOnTheAdminMarketingEmailTemplatesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminMarketingEmailTemplates);
    }

    public function shouldBeOnTheAdminMarketingNewsletterTemplatePage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminMarketingNewsletterTemplate);
    }

    public function shouldBeOnTheAdminMarketingNewsletterQueuePage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminMarketingNewsletterQueue);
    }

    public function shouldBeOnTheAdminMarketingNewsletterSubscribersPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminMarketingNewsletterSubscribers);
    }

    public function shouldBeOnTheAdminMarketingURLRewritesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminMarketingURLRewrites);
    }

    public function shouldBeOnTheAdminMarketingSearchTermsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminMarketingSearchTerms);
    }

    public function shouldBeOnTheAdminMarketingSearchSynonymsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminMarketingSearchSynonyms);
    }

    public function shouldBeOnTheAdminMarketingSiteMapPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminMarketingSiteMap);
    }

    public function shouldBeOnTheAdminMarketingReviewsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminMarketingReviews);
    }

    // Content
    public function shouldBeOnTheAdminContentPagesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminContentPages);
    }

    public function shouldBeOnTheAdminContentBlocksPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminContentBlocks);
    }

    public function shouldBeOnTheAdminContentWidgetsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminContentWidgets);
    }

    public function shouldBeOnTheAdminContentConfigurationPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminContentConfiguration);
    }

    public function shouldBeOnTheAdminContentThemesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminContentThemes);
    }

    public function shouldBeOnTheAdminContentSchedulePage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminContentSchedule);
    }

    // Reports
    public function shouldBeOnTheAdminReportsProductsInCartPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminReportsProductsInCart);
    }

    public function shouldBeOnTheAdminReportsSearchTermsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminReportsSearchTerms);
    }

    public function shouldBeOnTheAdminReportsAbandonedCartsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminReportsAbandonedCArts);
    }

    public function shouldBeOnTheAdminReportsNewsletterProblemReportsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminReportsNewsletterProblemReports);
    }

    public function shouldBeOnTheAdminReportsByCustomersPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminReportsByCustomers);
    }

    public function shouldBeOnTheAdminReportsByProductsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminReportsByProducts);
    }

    public function shouldBeOnTheAdminReportsOrdersPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminReportsOrders);
    }

    public function shouldBeOnTheAdminReportsTaxPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminReportsTax);
    }

    public function shouldBeOnTheAdminReportsInvoicedPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminReportsInvoiced);
    }

    public function shouldBeOnTheAdminReportsShippingPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminReportsShipping);
    }

    public function shouldBeOnTheAdminReportsRefundsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminReportsRefunds);
    }

    public function shouldBeOnTheAdminReportsCouponsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminReportsCoupons);
    }

    public function shouldBeOnTheAdminReportsPayPalSettlementPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminReportsPayPalSettlement);
    }

    public function shouldBeOnTheAdminReportsBraintreeSettlementPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminReportsBraintreeSettlement);
    }

    public function shouldBeOnTheAdminReportsOrderTotalPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminReportsOrderTotal);
    }

    public function shouldBeOnTheAdminReportsOrderCountPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminReportsOrderCount);
    }

    public function shouldBeOnTheAdminReportsNewPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminReportsNew);
    }

    public function shouldBeOnTheAdminReportsViewsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminReportsViews);
    }

    public function shouldBeOnTheAdminReportsBestsellersPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminReportsBestsellers);
    }

    public function shouldBeOnTheAdminReportsLowStockPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminReportsLowStock);
    }

    public function shouldBeOnTheAdminReportsOrderedPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminReportsOrdered);
    }

    public function shouldBeOnTheAdminReportsDownloadsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminReportsDownloads);
    }

    public function shouldBeOnTheAdminReportRefreshStatisticsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminReportsRefreshStatistics);
    }

    // Stores
    public function shouldBeOnTheAdminStoresAllStoresPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminStoresAllStores);
    }

    public function shouldBeOnTheAdminStoresConfigurationPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminStoresConfiguration);
    }

    public function shouldBeOnTheAdminStoresTermsAndConditionsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminStoresTermsAndConditions);
    }

    public function shouldBeOnTheAdminStoresOrderStatusPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminStoresOrderStatus);
    }

    public function shouldBeOnTheAdminStoresTaxRulesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminStoresTaxRules);
    }

    public function shouldBeOnTheAdminStoresTaxZonesAndRatesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminStoresTaxZonesAndRates);
    }

    public function shouldBeOnTheAdminStoresCurrencyRatesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminStoresCurrencyRates);
    }

    public function shouldBeOnTheAdminStoresCurrencySymbolsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminStoresCurrencySymbols);
    }

    public function shouldBeOnTheAdminStoresProductPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminStoresProduct);
    }

    public function shouldBeOnTheAdminStoresAttributeSetPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminStoresAttributeSet);
    }

    public function shouldBeOnTheAdminStoresRatingPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminStoresRating);
    }

    public function shouldBeOnTheAdminStoresCustomerGroupsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminStoresCustomerGroups);
    }

    // System
    public function shouldBeOnTheAdminSystemImportPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminSystemImport);
    }

    public function shouldBeOnTheAdminSystemExportPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminSystemExport);
    }

    public function shouldBeOnTheAdminSystemImportExportTaxRatesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminSystemImportExportTaxRates);
    }

    public function shouldBeOnTheAdminSystemImportHistoryPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminSystemImportHistory);
    }

    public function shouldBeOnTheAdminSystemIntegrationsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminSystemIntegrations);
    }

    public function shouldBeOnTheAdminSystemCacheManagementPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminSystemCacheManagement);
    }

    public function shouldBeOnTheAdminSystemBackupsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminSystemBackups);
    }

    public function shouldBeOnTheAdminSystemIndexManagementPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminSystemIndexManagement);
    }

    public function shouldBeOnTheAdminSystemWebSetupWizardPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminSystemWebSetupWizard);
    }

    public function shouldBeOnTheAdminSystemAllUsersPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminSystemAllUsers);
    }

    public function shouldBeOnTheAdminSystemLockedUsersPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminSystemLockedUsers);
    }

    public function shouldBeOnTheAdminSystemUserRolesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminSystemUserRoles);
    }

    public function shouldBeOnTheAdminSystemNotificationsPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminSystemNotifications);
    }

    public function shouldBeOnTheAdminSystemCustomVariablesPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminSystemCustomVariables);
    }

    public function shouldBeOnTheAdminSystemManageEncryptionKeyPage()
    {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminSystemManageEncryptionKey);
    }

    public function shouldBeOnTheAdminFindPartnersAndExtensionsPage() {
        $I = $this;
        $I->seeCurrentUrlEquals(\Page\Acceptance\AdminURLList::$adminFindPartnersAndExtensions);
    }

    // Login Helpers
    public function closeAdminNotification() {
        $I = $this;

        try {
            $I->see('.modal-popup h1 + .action-close');
            // Continue to do this if it's present

        } catch (Exception $e) {
            // Do this if it's not present.
            $I->click('.modal-popup h1 + .action-close');
            $I->wait(1);
        }
    }

    public function loginAsTheFollowingAdmin($username, $password) {
        $I = $this;
        $I->fillField('login[username]', $username);
        $I->fillField('login[password]', $password);
        $I->click('Sign in');
        $I->closeAdminNotification();
    }

    public function loginAsAnExistingAdmin() {
        $I = $this;
        $I->fillField('login[username]', 'admin');
        $I->fillField('login[password]', 'admin123');
        $I->click('Sign in');
        $I->closeAdminNotification();
    }
}
