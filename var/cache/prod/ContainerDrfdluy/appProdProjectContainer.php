<?php

namespace ContainerDrfdluy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class appProdProjectContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $parameters;
    private $targetDirs = array();

    public function __construct(array $buildParameters = array(), $containerDir = __DIR__)
    {
        $dir = $this->targetDirs[0] = \dirname($containerDir);
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->normalizedIds = array(
            'appbundle\\controller\\advancedcontroller' => 'AppBundle\\Controller\\AdvancedController',
            'appbundle\\controller\\blogcontroller' => 'AppBundle\\Controller\\BlogController',
            'appbundle\\controller\\category\\examplecontroller' => 'AppBundle\\Controller\\Category\\ExampleController',
            'appbundle\\controller\\contentcontroller' => 'AppBundle\\Controller\\ContentController',
            'appbundle\\controller\\defaultcontroller' => 'AppBundle\\Controller\\DefaultController',
            'appbundle\\controller\\newscontroller' => 'AppBundle\\Controller\\NewsController',
            'appbundle\\controller\\newslettercontroller' => 'AppBundle\\Controller\\NewsletterController',
            'appbundle\\controller\\securecontroller' => 'AppBundle\\Controller\\SecureController',
            'appbundle\\controller\\web2printcontroller' => 'AppBundle\\Controller\\Web2printController',
            'appbundle\\document\\areabrick\\blockquote' => 'AppBundle\\Document\\Areabrick\\Blockquote',
            'appbundle\\eventlistener\\testlistener' => 'AppBundle\\EventListener\\TestListener',
            'appbundle\\linkgenerator\\newslinkgenerator' => 'AppBundle\\LinkGenerator\\NewsLinkGenerator',
            'appbundle\\sitemaps\\newsgenerator' => 'AppBundle\\Sitemaps\\NewsGenerator',
            'appbundle\\templating\\helper\\languageswitcher' => 'AppBundle\\Templating\\Helper\\LanguageSwitcher',
            'pimcore\\analytics\\google\\config\\configprovider' => 'Pimcore\\Analytics\\Google\\Config\\ConfigProvider',
            'pimcore\\analytics\\google\\config\\siteconfigprovider' => 'Pimcore\\Analytics\\Google\\Config\\SiteConfigProvider',
            'pimcore\\analytics\\google\\tracker' => 'Pimcore\\Analytics\\Google\\Tracker',
            'pimcore\\analytics\\piwik\\api\\apiclient' => 'Pimcore\\Analytics\\Piwik\\Api\\ApiClient',
            'pimcore\\analytics\\piwik\\api\\sitesmanager' => 'Pimcore\\Analytics\\Piwik\\Api\\SitesManager',
            'pimcore\\analytics\\piwik\\config\\config' => 'Pimcore\\Analytics\\Piwik\\Config\\Config',
            'pimcore\\analytics\\piwik\\config\\configprovider' => 'Pimcore\\Analytics\\Piwik\\Config\\ConfigProvider',
            'pimcore\\analytics\\piwik\\eventlistener\\cachelistener' => 'Pimcore\\Analytics\\Piwik\\EventListener\\CacheListener',
            'pimcore\\analytics\\piwik\\eventlistener\\indexsettingslistener' => 'Pimcore\\Analytics\\Piwik\\EventListener\\IndexSettingsListener',
            'pimcore\\analytics\\piwik\\eventlistener\\trackingcodelistener' => 'Pimcore\\Analytics\\Piwik\\EventListener\\TrackingCodeListener',
            'pimcore\\analytics\\piwik\\reportbroker' => 'Pimcore\\Analytics\\Piwik\\ReportBroker',
            'pimcore\\analytics\\piwik\\widgetbroker' => 'Pimcore\\Analytics\\Piwik\\WidgetBroker',
            'pimcore\\analytics\\siteid\\siteidprovider' => 'Pimcore\\Analytics\\SiteId\\SiteIdProvider',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\assetcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\classcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\classificationstorecontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\dataobjectcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\dataobjecthelpercontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\documentcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\documenttag\\renderletcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentTag\\RenderletController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\elementcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\elementcontrollerbase' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementControllerBase',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\emailcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\EmailController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\external\\adminercontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\AdminerController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\external\\linfocontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\LinfoController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\external\\opcachecontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\OpcacheController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\foldercontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\FolderController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\hardlinkcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\HardlinkController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\indexcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\IndexController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\installcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\InstallController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\linkcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LinkController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\logcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LogController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\logincontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LoginController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\misccontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\newslettercontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\NewsletterController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\pagecontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PageController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\portalcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\printcontainercontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintcontainerController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\printpagecontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\printpagecontrollerbase' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageControllerBase',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\quantityvaluecontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\QuantityValueController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\recyclebincontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\RecyclebinController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\redirectscontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\RedirectsController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\settingscontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\snippetcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SnippetController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\tagscontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TagsController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\targetingcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TargetingController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\translationcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\usercontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\variantscontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\VariantsController',
            'pimcore\\bundle\\adminbundle\\controller\\admin\\workflowcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\WorkflowController',
            'pimcore\\bundle\\adminbundle\\controller\\extensionmanager\\extensionmanagercontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\ExtensionManager\\ExtensionManagerController',
            'pimcore\\bundle\\adminbundle\\controller\\gdpr\\admincontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\AdminController',
            'pimcore\\bundle\\adminbundle\\controller\\gdpr\\assetcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\AssetController',
            'pimcore\\bundle\\adminbundle\\controller\\gdpr\\dataobjectcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\DataObjectController',
            'pimcore\\bundle\\adminbundle\\controller\\gdpr\\pimcoreuserscontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\PimcoreUsersController',
            'pimcore\\bundle\\adminbundle\\controller\\gdpr\\sentmailcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\SentMailController',
            'pimcore\\bundle\\adminbundle\\controller\\reports\\analyticscontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\AnalyticsController',
            'pimcore\\bundle\\adminbundle\\controller\\reports\\customreportcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\CustomReportController',
            'pimcore\\bundle\\adminbundle\\controller\\reports\\piwikcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\PiwikController',
            'pimcore\\bundle\\adminbundle\\controller\\reports\\qrcodecontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\QrcodeController',
            'pimcore\\bundle\\adminbundle\\controller\\reports\\reportscontrollerbase' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\ReportsControllerBase',
            'pimcore\\bundle\\adminbundle\\controller\\reports\\settingscontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\SettingsController',
            'pimcore\\bundle\\adminbundle\\controller\\rest\\classcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ClassController',
            'pimcore\\bundle\\adminbundle\\controller\\rest\\element\\assetcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\AssetController',
            'pimcore\\bundle\\adminbundle\\controller\\rest\\element\\dataobjectcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DataObjectController',
            'pimcore\\bundle\\adminbundle\\controller\\rest\\element\\documentcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DocumentController',
            'pimcore\\bundle\\adminbundle\\controller\\rest\\element\\tagcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\TagController',
            'pimcore\\bundle\\adminbundle\\controller\\rest\\imagecontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ImageController',
            'pimcore\\bundle\\adminbundle\\controller\\rest\\infocontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\InfoController',
            'pimcore\\bundle\\adminbundle\\controller\\searchadmin\\searchcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Searchadmin\\SearchController',
            'pimcore\\bundle\\adminbundle\\controller\\update\\indexcontroller' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Update\\IndexController',
            'pimcore\\bundle\\adminbundle\\eventlistener\\adminauthenticationdoublechecklistener' => 'Pimcore\\Bundle\\AdminBundle\\EventListener\\AdminAuthenticationDoubleCheckListener',
            'pimcore\\bundle\\adminbundle\\eventlistener\\adminexceptionlistener' => 'Pimcore\\Bundle\\AdminBundle\\EventListener\\AdminExceptionListener',
            'pimcore\\bundle\\adminbundle\\eventlistener\\bruteforceprotectionlistener' => 'Pimcore\\Bundle\\AdminBundle\\EventListener\\BruteforceProtectionListener',
            'pimcore\\bundle\\adminbundle\\eventlistener\\csrfprotectionlistener' => 'Pimcore\\Bundle\\AdminBundle\\EventListener\\CsrfProtectionListener',
            'pimcore\\bundle\\adminbundle\\eventlistener\\enablepreviewtimesliderlistener' => 'Pimcore\\Bundle\\AdminBundle\\EventListener\\EnablePreviewTimeSliderListener',
            'pimcore\\bundle\\adminbundle\\eventlistener\\gridconfiglistener' => 'Pimcore\\Bundle\\AdminBundle\\EventListener\\GridConfigListener',
            'pimcore\\bundle\\adminbundle\\eventlistener\\httpcachelistener' => 'Pimcore\\Bundle\\AdminBundle\\EventListener\\HttpCacheListener',
            'pimcore\\bundle\\adminbundle\\eventlistener\\importconfiglistener' => 'Pimcore\\Bundle\\AdminBundle\\EventListener\\ImportConfigListener',
            'pimcore\\bundle\\adminbundle\\eventlistener\\twofactorlistener' => 'Pimcore\\Bundle\\AdminBundle\\EventListener\\TwoFactorListener',
            'pimcore\\bundle\\adminbundle\\eventlistener\\usagestatisticslistener' => 'Pimcore\\Bundle\\AdminBundle\\EventListener\\UsageStatisticsListener',
            'pimcore\\bundle\\adminbundle\\eventlistener\\userperspectivelistener' => 'Pimcore\\Bundle\\AdminBundle\\EventListener\\UserPerspectiveListener',
            'pimcore\\bundle\\adminbundle\\gdpr\\dataprovider\\assets' => 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\Assets',
            'pimcore\\bundle\\adminbundle\\gdpr\\dataprovider\\dataobjects' => 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\DataObjects',
            'pimcore\\bundle\\adminbundle\\gdpr\\dataprovider\\manager' => 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\Manager',
            'pimcore\\bundle\\adminbundle\\gdpr\\dataprovider\\pimcoreusers' => 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\PimcoreUsers',
            'pimcore\\bundle\\adminbundle\\gdpr\\dataprovider\\sentmail' => 'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\SentMail',
            'pimcore\\bundle\\adminbundle\\security\\user\\tokenstorageuserresolver' => 'Pimcore\\Bundle\\AdminBundle\\Security\\User\\TokenStorageUserResolver',
            'pimcore\\bundle\\adminbundle\\security\\user\\userchecker' => 'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserChecker',
            'pimcore\\bundle\\adminbundle\\security\\user\\userloader' => 'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserLoader',
            'pimcore\\bundle\\adminbundle\\security\\user\\userprovider' => 'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserProvider',
            'pimcore\\bundle\\adminbundle\\session\\adminsessionbagconfigurator' => 'Pimcore\\Bundle\\AdminBundle\\Session\\AdminSessionBagConfigurator',
            'pimcore\\bundle\\adminbundle\\session\\handler\\adminsessionhandler' => 'Pimcore\\Bundle\\AdminBundle\\Session\\Handler\\AdminSessionHandler',
            'pimcore\\bundle\\corebundle\\command\\bundle\\disablecommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\DisableCommand',
            'pimcore\\bundle\\corebundle\\command\\bundle\\enablecommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\EnableCommand',
            'pimcore\\bundle\\corebundle\\command\\bundle\\helper\\poststatechange' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\Helper\\PostStateChange',
            'pimcore\\bundle\\corebundle\\command\\bundle\\installcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\InstallCommand',
            'pimcore\\bundle\\corebundle\\command\\bundle\\listcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\ListCommand',
            'pimcore\\bundle\\corebundle\\command\\bundle\\uninstallcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\UninstallCommand',
            'pimcore\\bundle\\corebundle\\command\\bundle\\updatecommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\UpdateCommand',
            'pimcore\\bundle\\corebundle\\command\\cacheclearcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\CacheClearCommand',
            'pimcore\\bundle\\corebundle\\command\\cachewarmingcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\CacheWarmingCommand',
            'pimcore\\bundle\\corebundle\\command\\classesrebuildcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\ClassesRebuildCommand',
            'pimcore\\bundle\\corebundle\\command\\composer\\normalizeconfigcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Composer\\NormalizeConfigCommand',
            'pimcore\\bundle\\corebundle\\command\\definition\\import\\classcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Definition\\Import\\ClassCommand',
            'pimcore\\bundle\\corebundle\\command\\definition\\import\\fieldcollectioncommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Definition\\Import\\FieldCollectionCommand',
            'pimcore\\bundle\\corebundle\\command\\definition\\import\\objectbrickcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Definition\\Import\\ObjectBrickCommand',
            'pimcore\\bundle\\corebundle\\command\\deleteclassificationstorecommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\DeleteClassificationStoreCommand',
            'pimcore\\bundle\\corebundle\\command\\document\\generatepagepreviews' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Document\\GeneratePagePreviews',
            'pimcore\\bundle\\corebundle\\command\\document\\migratetagnamingstrategycommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Document\\MigrateTagNamingStrategyCommand',
            'pimcore\\bundle\\corebundle\\command\\emaillogscleanupcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\EmailLogsCleanupCommand',
            'pimcore\\bundle\\corebundle\\command\\internalmodeldaomappinggeneratorcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\InternalModelDaoMappingGeneratorCommand',
            'pimcore\\bundle\\corebundle\\command\\internalnewsletterdocumentsendcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\InternalNewsletterDocumentSendCommand',
            'pimcore\\bundle\\corebundle\\command\\internalunicodecldrlanguageterritorygeneratorcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\InternalUnicodeCldrLanguageTerritoryGeneratorCommand',
            'pimcore\\bundle\\corebundle\\command\\internalupdateprocessorcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\InternalUpdateProcessorCommand',
            'pimcore\\bundle\\corebundle\\command\\internalvideoconvertercommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\InternalVideoConverterCommand',
            'pimcore\\bundle\\corebundle\\command\\lowqualityimagepreviewcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\LowQualityImagePreviewCommand',
            'pimcore\\bundle\\corebundle\\command\\maintenancecommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\MaintenanceCommand',
            'pimcore\\bundle\\corebundle\\command\\mysqltoolscommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\MysqlToolsCommand',
            'pimcore\\bundle\\corebundle\\command\\resetpasswordcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\ResetPasswordCommand',
            'pimcore\\bundle\\corebundle\\command\\runscriptcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\RunScriptCommand',
            'pimcore\\bundle\\corebundle\\command\\runupdatescriptcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\RunUpdateScriptCommand',
            'pimcore\\bundle\\corebundle\\command\\searchbackendreindexcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\SearchBackendReindexCommand',
            'pimcore\\bundle\\corebundle\\command\\targeting\\migrateelementnamescommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Targeting\\MigrateElementNamesCommand',
            'pimcore\\bundle\\corebundle\\command\\thumbnailsimagecommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\ThumbnailsImageCommand',
            'pimcore\\bundle\\corebundle\\command\\thumbnailsoptimizeimagescommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\ThumbnailsOptimizeImagesCommand',
            'pimcore\\bundle\\corebundle\\command\\thumbnailsvideocommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\ThumbnailsVideoCommand',
            'pimcore\\bundle\\corebundle\\command\\updatecommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\UpdateCommand',
            'pimcore\\bundle\\corebundle\\command\\web2printpdfcreationcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Web2PrintPdfCreationCommand',
            'pimcore\\bundle\\corebundle\\controller\\publicservicescontroller' => 'Pimcore\\Bundle\\CoreBundle\\Controller\\PublicServicesController',
            'pimcore\\bundle\\corebundle\\eventlistener\\controllerviewmodellistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\ControllerViewModelListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\elementtagslistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\ElementTagsListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\eventedcontrollerlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\EventedControllerListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\blockstatelistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\BlockStateListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\contenttemplatelistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\ContentTemplateListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\cookiepolicynoticelistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\CookiePolicyNoticeListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\documentfallbacklistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\DocumentFallbackListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\documentmetadatalistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\DocumentMetaDataListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\editmodelistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\EditmodeListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\elementlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\ElementListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\frontendroutinglistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\FrontendRoutingListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\fullpagecachelistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\FullPageCacheListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\googleanalyticscodelistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\GoogleAnalyticsCodeListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\googlesearchconsoleverificationlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\GoogleSearchConsoleVerificationListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\googletagmanagerlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\GoogleTagManagerListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\hardlinkcanonicallistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\HardlinkCanonicalListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\internalwysiwyghtmlattributefilterlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\InternalWysiwygHtmlAttributeFilterListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\localelistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\LocaleListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\outputtimestamplistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\OutputTimestampListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\frontend\\tagmanagerlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\TagManagerListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\maintenancepagelistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\MaintenancePageListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\pimcorecontextlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\PimcoreContextListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\pimcoreheaderlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\PimcoreHeaderListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\responseexceptionlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\ResponseExceptionListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\responseheaderlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\ResponseHeaderListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\responsestacklistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\ResponseStackListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\searchbackendlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\SearchBackendListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\templatecontrollerlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\TemplateControllerListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\translationdebuglistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\TranslationDebugListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\uuidlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\UUIDListener',
            'pimcore\\bundle\\corebundle\\eventlistener\\workflowmanagementlistener' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\WorkflowManagementListener',
            'pimcore\\cache\\core\\corehandlerinterface' => 'Pimcore\\Cache\\Core\\CoreHandlerInterface',
            'pimcore\\cache\\pool\\pimcorecacheitempoolinterface' => 'Pimcore\\Cache\\Pool\\PimcoreCacheItemPoolInterface',
            'pimcore\\cache\\runtime' => 'Pimcore\\Cache\\Runtime',
            'pimcore\\cache\\symfony\\cacheclearer' => 'Pimcore\\Cache\\Symfony\\CacheClearer',
            'pimcore\\composer\\config\\configmerger' => 'Pimcore\\Composer\\Config\\ConfigMerger',
            'pimcore\\composer\\config\\normalizer\\endroidqrcoderenamedpackagenormalizer' => 'Pimcore\\Composer\\Config\\Normalizer\\EndroidQrCodeRenamedPackageNormalizer',
            'pimcore\\composer\\config\\normalizer\\php7platformnormalizer' => 'Pimcore\\Composer\\Config\\Normalizer\\Php7PlatformNormalizer',
            'pimcore\\config\\reportconfigwriter' => 'Pimcore\\Config\\ReportConfigWriter',
            'pimcore\\controller\\argumentvalueresolver\\documentvalueresolver' => 'Pimcore\\Controller\\ArgumentValueResolver\\DocumentValueResolver',
            'pimcore\\controller\\argumentvalueresolver\\editmodevalueresolver' => 'Pimcore\\Controller\\ArgumentValueResolver\\EditmodeValueResolver',
            'pimcore\\controller\\argumentvalueresolver\\templatevarsvalueresolver' => 'Pimcore\\Controller\\ArgumentValueResolver\\TemplateVarsValueResolver',
            'pimcore\\controller\\argumentvalueresolver\\viewmodelvalueresolver' => 'Pimcore\\Controller\\ArgumentValueResolver\\ViewModelValueResolver',
            'pimcore\\controller\\argumentvalueresolver\\websiteconfigvalueresolver' => 'Pimcore\\Controller\\ArgumentValueResolver\\WebsiteConfigValueResolver',
            'pimcore\\controller\\config\\confignormalizer' => 'Pimcore\\Controller\\Config\\ConfigNormalizer',
            'pimcore\\controller\\config\\controllerdataprovider' => 'Pimcore\\Controller\\Config\\ControllerDataProvider',
            'pimcore\\dataobject\\consent\\service' => 'Pimcore\\DataObject\\Consent\\Service',
            'pimcore\\dataobject\\gridcolumnconfig\\service' => 'Pimcore\\DataObject\\GridColumnConfig\\Service',
            'pimcore\\dataobject\\import\\resolver\\code' => 'Pimcore\\DataObject\\Import\\Resolver\\Code',
            'pimcore\\dataobject\\import\\resolver\\filename' => 'Pimcore\\DataObject\\Import\\Resolver\\Filename',
            'pimcore\\dataobject\\import\\resolver\\fullpath' => 'Pimcore\\DataObject\\Import\\Resolver\\Fullpath',
            'pimcore\\dataobject\\import\\resolver\\getby' => 'Pimcore\\DataObject\\Import\\Resolver\\GetBy',
            'pimcore\\dataobject\\import\\resolver\\id' => 'Pimcore\\DataObject\\Import\\Resolver\\Id',
            'pimcore\\dataobject\\import\\service' => 'Pimcore\\DataObject\\Import\\Service',
            'pimcore\\db\\connection' => 'Pimcore\\Db\\Connection',
            'pimcore\\document\\renderer\\documentrenderer' => 'Pimcore\\Document\\Renderer\\DocumentRenderer',
            'pimcore\\document\\tag\\block\\blockstatestack' => 'Pimcore\\Document\\Tag\\Block\\BlockStateStack',
            'pimcore\\document\\tag\\delegatingtaghandler' => 'Pimcore\\Document\\Tag\\DelegatingTagHandler',
            'pimcore\\document\\tag\\namingstrategy\\namingstrategyinterface' => 'Pimcore\\Document\\Tag\\NamingStrategy\\NamingStrategyInterface',
            'pimcore\\document\\tag\\taghandlerinterface' => 'Pimcore\\Document\\Tag\\TagHandlerInterface',
            'pimcore\\extension\\bundle\\pimcorebundlemanager' => 'Pimcore\\Extension\\Bundle\\PimcoreBundleManager',
            'pimcore\\extension\\config' => 'Pimcore\\Extension\\Config',
            'pimcore\\extension\\document\\areabrick\\areabrickmanager' => 'Pimcore\\Extension\\Document\\Areabrick\\AreabrickManager',
            'pimcore\\extension\\document\\areabrick\\areabrickmanagerinterface' => 'Pimcore\\Extension\\Document\\Areabrick\\AreabrickManagerInterface',
            'pimcore\\featuretoggles\\featuremanagerinterface' => 'Pimcore\\FeatureToggles\\FeatureManagerInterface',
            'pimcore\\http\\clientfactory' => 'Pimcore\\Http\\ClientFactory',
            'pimcore\\http\\request\\resolver\\documentresolver' => 'Pimcore\\Http\\Request\\Resolver\\DocumentResolver',
            'pimcore\\http\\request\\resolver\\editmoderesolver' => 'Pimcore\\Http\\Request\\Resolver\\EditmodeResolver',
            'pimcore\\http\\request\\resolver\\outputtimestampresolver' => 'Pimcore\\Http\\Request\\Resolver\\OutputTimestampResolver',
            'pimcore\\http\\request\\resolver\\pimcorecontextresolver' => 'Pimcore\\Http\\Request\\Resolver\\PimcoreContextResolver',
            'pimcore\\http\\request\\resolver\\responseheaderresolver' => 'Pimcore\\Http\\Request\\Resolver\\ResponseHeaderResolver',
            'pimcore\\http\\request\\resolver\\siteresolver' => 'Pimcore\\Http\\Request\\Resolver\\SiteResolver',
            'pimcore\\http\\request\\resolver\\templateresolver' => 'Pimcore\\Http\\Request\\Resolver\\TemplateResolver',
            'pimcore\\http\\request\\resolver\\templatevarsresolver' => 'Pimcore\\Http\\Request\\Resolver\\TemplateVarsResolver',
            'pimcore\\http\\request\\resolver\\viewmodelresolver' => 'Pimcore\\Http\\Request\\Resolver\\ViewModelResolver',
            'pimcore\\http\\requesthelper' => 'Pimcore\\Http\\RequestHelper',
            'pimcore\\http\\response\\codeinjector' => 'Pimcore\\Http\\Response\\CodeInjector',
            'pimcore\\http\\responsehelper' => 'Pimcore\\Http\\ResponseHelper',
            'pimcore\\http\\responsestack' => 'Pimcore\\Http\\ResponseStack',
            'pimcore\\httpkernel\\cachewarmer\\mkdircachewarmer' => 'Pimcore\\HttpKernel\\CacheWarmer\\MkdirCacheWarmer',
            'pimcore\\kernel' => 'Pimcore\\Kernel',
            'pimcore\\localization\\intlformatter' => 'Pimcore\\Localization\\IntlFormatter',
            'pimcore\\localization\\locale' => 'Pimcore\\Localization\\Locale',
            'pimcore\\localization\\localeservice' => 'Pimcore\\Localization\\LocaleService',
            'pimcore\\log\\applicationlogger' => 'Pimcore\\Log\\ApplicationLogger',
            'pimcore\\log\\handler\\applicationloggerdb' => 'Pimcore\\Log\\Handler\\ApplicationLoggerDb',
            'pimcore\\migrations\\configuration\\configurationfactory' => 'Pimcore\\Migrations\\Configuration\\ConfigurationFactory',
            'pimcore\\model\\document\\service' => 'Pimcore\\Model\\Document\\Service',
            'pimcore\\model\\factory' => 'Pimcore\\Model\\Factory',
            'pimcore\\model\\factoryinterface' => 'Pimcore\\Model\\FactoryInterface',
            'pimcore\\model\\schedule\\manager\\procedural' => 'Pimcore\\Model\\Schedule\\Manager\\Procedural',
            'pimcore\\navigation\\renderer\\breadcrumbs' => 'Pimcore\\Navigation\\Renderer\\Breadcrumbs',
            'pimcore\\navigation\\renderer\\menu' => 'Pimcore\\Navigation\\Renderer\\Menu',
            'pimcore\\routing\\dynamic\\documentroutehandler' => 'Pimcore\\Routing\\Dynamic\\DocumentRouteHandler',
            'pimcore\\routing\\redirect\\csv' => 'Pimcore\\Routing\\Redirect\\Csv',
            'pimcore\\sitemap\\document\\documenttreegenerator' => 'Pimcore\\Sitemap\\Document\\DocumentTreeGenerator',
            'pimcore\\sitemap\\element\\filter\\propertiesfilter' => 'Pimcore\\Sitemap\\Element\\Filter\\PropertiesFilter',
            'pimcore\\sitemap\\element\\filter\\publishedfilter' => 'Pimcore\\Sitemap\\Element\\Filter\\PublishedFilter',
            'pimcore\\sitemap\\element\\processor\\modificationdateprocessor' => 'Pimcore\\Sitemap\\Element\\Processor\\ModificationDateProcessor',
            'pimcore\\sitemap\\element\\processor\\propertiesprocessor' => 'Pimcore\\Sitemap\\Element\\Processor\\PropertiesProcessor',
            'pimcore\\sitemap\\eventlistener\\sitemapgeneratorlistener' => 'Pimcore\\Sitemap\\EventListener\\SitemapGeneratorListener',
            'pimcore\\sitemap\\urlgenerator' => 'Pimcore\\Sitemap\\UrlGenerator',
            'pimcore\\targeting\\actionhandler\\assigntargetgroup' => 'Pimcore\\Targeting\\ActionHandler\\AssignTargetGroup',
            'pimcore\\targeting\\actionhandler\\codesnippet' => 'Pimcore\\Targeting\\ActionHandler\\CodeSnippet',
            'pimcore\\targeting\\actionhandler\\delegatingactionhandler' => 'Pimcore\\Targeting\\ActionHandler\\DelegatingActionHandler',
            'pimcore\\targeting\\actionhandler\\redirect' => 'Pimcore\\Targeting\\ActionHandler\\Redirect',
            'pimcore\\targeting\\conditionmatcher' => 'Pimcore\\Targeting\\ConditionMatcher',
            'pimcore\\targeting\\dataloader' => 'Pimcore\\Targeting\\DataLoader',
            'pimcore\\targeting\\dataprovider\\device' => 'Pimcore\\Targeting\\DataProvider\\Device',
            'pimcore\\targeting\\dataprovider\\geoip' => 'Pimcore\\Targeting\\DataProvider\\GeoIp',
            'pimcore\\targeting\\dataprovider\\geolocation' => 'Pimcore\\Targeting\\DataProvider\\GeoLocation',
            'pimcore\\targeting\\dataprovider\\piwik' => 'Pimcore\\Targeting\\DataProvider\\Piwik',
            'pimcore\\targeting\\dataprovider\\targetingstorage' => 'Pimcore\\Targeting\\DataProvider\\TargetingStorage',
            'pimcore\\targeting\\dataprovider\\visitedpagescounter' => 'Pimcore\\Targeting\\DataProvider\\VisitedPagesCounter',
            'pimcore\\targeting\\debug\\overridehandler' => 'Pimcore\\Targeting\\Debug\\OverrideHandler',
            'pimcore\\targeting\\document\\documenttargetingconfigurator' => 'Pimcore\\Targeting\\Document\\DocumentTargetingConfigurator',
            'pimcore\\targeting\\eventlistener\\documenttargetgrouplistener' => 'Pimcore\\Targeting\\EventListener\\DocumentTargetGroupListener',
            'pimcore\\targeting\\eventlistener\\fullpagecachecookiecleanuplistener' => 'Pimcore\\Targeting\\EventListener\\FullPageCacheCookieCleanupListener',
            'pimcore\\targeting\\eventlistener\\maintenancelistener' => 'Pimcore\\Targeting\\EventListener\\MaintenanceListener',
            'pimcore\\targeting\\eventlistener\\piwikvisitoridlistener' => 'Pimcore\\Targeting\\EventListener\\PiwikVisitorIdListener',
            'pimcore\\targeting\\eventlistener\\targetinglistener' => 'Pimcore\\Targeting\\EventListener\\TargetingListener',
            'pimcore\\targeting\\eventlistener\\toolbarlistener' => 'Pimcore\\Targeting\\EventListener\\ToolbarListener',
            'pimcore\\targeting\\eventlistener\\visitedpagescountlistener' => 'Pimcore\\Targeting\\EventListener\\VisitedPagesCountListener',
            'pimcore\\targeting\\service\\visitedpagescounter' => 'Pimcore\\Targeting\\Service\\VisitedPagesCounter',
            'pimcore\\targeting\\storage\\targetingstorageinterface' => 'Pimcore\\Targeting\\Storage\\TargetingStorageInterface',
            'pimcore\\targeting\\visitorinfostorage' => 'Pimcore\\Targeting\\VisitorInfoStorage',
            'pimcore\\templating\\helper\\action' => 'Pimcore\\Templating\\Helper\\Action',
            'pimcore\\templating\\helper\\cache' => 'Pimcore\\Templating\\Helper\\Cache',
            'pimcore\\templating\\helper\\device' => 'Pimcore\\Templating\\Helper\\Device',
            'pimcore\\templating\\helper\\getallparams' => 'Pimcore\\Templating\\Helper\\GetAllParams',
            'pimcore\\templating\\helper\\getparam' => 'Pimcore\\Templating\\Helper\\GetParam',
            'pimcore\\templating\\helper\\glossary' => 'Pimcore\\Templating\\Helper\\Glossary',
            'pimcore\\templating\\helper\\headlink' => 'Pimcore\\Templating\\Helper\\HeadLink',
            'pimcore\\templating\\helper\\headmeta' => 'Pimcore\\Templating\\Helper\\HeadMeta',
            'pimcore\\templating\\helper\\headscript' => 'Pimcore\\Templating\\Helper\\HeadScript',
            'pimcore\\templating\\helper\\headstyle' => 'Pimcore\\Templating\\Helper\\HeadStyle',
            'pimcore\\templating\\helper\\headtitle' => 'Pimcore\\Templating\\Helper\\HeadTitle',
            'pimcore\\templating\\helper\\inc' => 'Pimcore\\Templating\\Helper\\Inc',
            'pimcore\\templating\\helper\\inlinescript' => 'Pimcore\\Templating\\Helper\\InlineScript',
            'pimcore\\templating\\helper\\navigation' => 'Pimcore\\Templating\\Helper\\Navigation',
            'pimcore\\templating\\helper\\pimcoreurl' => 'Pimcore\\Templating\\Helper\\PimcoreUrl',
            'pimcore\\templating\\helper\\placeholder' => 'Pimcore\\Templating\\Helper\\Placeholder',
            'pimcore\\templating\\helper\\weblink' => 'Pimcore\\Templating\\Helper\\WebLink',
            'pimcore\\templating\\helper\\websiteconfig' => 'Pimcore\\Templating\\Helper\\WebsiteConfig',
            'pimcore\\tool\\assetsinstaller' => 'Pimcore\\Tool\\AssetsInstaller',
            'pimcore\\tool\\restclient' => 'Pimcore\\Tool\\RestClient',
            'pimcore\\translation\\translator' => 'Pimcore\\Translation\\Translator',
            'scheb\\twofactorbundle\\security\\twofactor\\provider\\google\\googleauthenticator' => 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\Google\\GoogleAuthenticator',
            'scheb\\twofactorbundle\\security\\twofactor\\provider\\google\\googleauthenticatorinterface' => 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\Google\\GoogleAuthenticatorInterface',
            'scheb\\twofactorbundle\\security\\twofactor\\twofactorfirewallcontext' => 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\TwoFactorFirewallContext',
            'symfony\\bundle\\frameworkbundle\\controller\\redirectcontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController',
            'symfony\\bundle\\frameworkbundle\\controller\\templatecontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController',
        );
        $this->syntheticIds = array(
            'Pimcore\\Cache\\Runtime' => true,
            'Pimcore\\Extension\\Config' => true,
            'kernel' => true,
        );
        $this->methodMap = array(
            'Pimcore\\Analytics\\Google\\Config\\ConfigProvider' => 'getConfigProviderService',
            'Pimcore\\Analytics\\Google\\Tracker' => 'getTrackerService',
            'Pimcore\\Analytics\\Piwik\\Config\\ConfigProvider' => 'getConfigProvider2Service',
            'Pimcore\\Analytics\\Piwik\\EventListener\\TrackingCodeListener' => 'getTrackingCodeListenerService',
            'Pimcore\\Analytics\\SiteId\\SiteIdProvider' => 'getSiteIdProviderService',
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\AdminAuthenticationDoubleCheckListener' => 'getAdminAuthenticationDoubleCheckListenerService',
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\BruteforceProtectionListener' => 'getBruteforceProtectionListenerService',
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\CsrfProtectionListener' => 'getCsrfProtectionListenerService',
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\EnablePreviewTimeSliderListener' => 'getEnablePreviewTimeSliderListenerService',
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\HttpCacheListener' => 'getHttpCacheListenerService',
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\UsageStatisticsListener' => 'getUsageStatisticsListenerService',
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\UserPerspectiveListener' => 'getUserPerspectiveListenerService',
            'Pimcore\\Bundle\\AdminBundle\\Security\\User\\TokenStorageUserResolver' => 'getTokenStorageUserResolverService',
            'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserLoader' => 'getUserLoaderService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\EventedControllerListener' => 'getEventedControllerListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\BlockStateListener' => 'getBlockStateListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\CookiePolicyNoticeListener' => 'getCookiePolicyNoticeListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\DocumentFallbackListener' => 'getDocumentFallbackListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\DocumentMetaDataListener' => 'getDocumentMetaDataListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\EditmodeListener' => 'getEditmodeListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\ElementListener' => 'getElementListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\FrontendRoutingListener' => 'getFrontendRoutingListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\FullPageCacheListener' => 'getFullPageCacheListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\GoogleAnalyticsCodeListener' => 'getGoogleAnalyticsCodeListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\GoogleSearchConsoleVerificationListener' => 'getGoogleSearchConsoleVerificationListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\GoogleTagManagerListener' => 'getGoogleTagManagerListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\HardlinkCanonicalListener' => 'getHardlinkCanonicalListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\InternalWysiwygHtmlAttributeFilterListener' => 'getInternalWysiwygHtmlAttributeFilterListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\LocaleListener' => 'getLocaleListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\OutputTimestampListener' => 'getOutputTimestampListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\TagManagerListener' => 'getTagManagerListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\MaintenancePageListener' => 'getMaintenancePageListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\PimcoreContextListener' => 'getPimcoreContextListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\PimcoreHeaderListener' => 'getPimcoreHeaderListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\ResponseHeaderListener' => 'getResponseHeaderListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\ResponseStackListener' => 'getResponseStackListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\TemplateControllerListener' => 'getTemplateControllerListenerService',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\TranslationDebugListener' => 'getTranslationDebugListenerService',
            'Pimcore\\Controller\\Config\\ConfigNormalizer' => 'getConfigNormalizerService',
            'Pimcore\\Document\\Tag\\Block\\BlockStateStack' => 'getBlockStateStackService',
            'Pimcore\\Extension\\Bundle\\PimcoreBundleManager' => 'getPimcoreBundleManagerService',
            'Pimcore\\FeatureToggles\\FeatureManagerInterface' => 'getFeatureManagerInterfaceService',
            'Pimcore\\Http\\RequestHelper' => 'getRequestHelperService',
            'Pimcore\\Http\\Request\\Resolver\\DocumentResolver' => 'getDocumentResolverService',
            'Pimcore\\Http\\Request\\Resolver\\EditmodeResolver' => 'getEditmodeResolverService',
            'Pimcore\\Http\\Request\\Resolver\\OutputTimestampResolver' => 'getOutputTimestampResolverService',
            'Pimcore\\Http\\Request\\Resolver\\PimcoreContextResolver' => 'getPimcoreContextResolverService',
            'Pimcore\\Http\\Request\\Resolver\\ResponseHeaderResolver' => 'getResponseHeaderResolverService',
            'Pimcore\\Http\\Request\\Resolver\\SiteResolver' => 'getSiteResolverService',
            'Pimcore\\Http\\ResponseHelper' => 'getResponseHelperService',
            'Pimcore\\Http\\ResponseStack' => 'getResponseStackService',
            'Pimcore\\Http\\Response\\CodeInjector' => 'getCodeInjectorService',
            'Pimcore\\Model\\Document\\Service' => 'getServiceService',
            'Pimcore\\Routing\\Dynamic\\DocumentRouteHandler' => 'getDocumentRouteHandlerService',
            'Pimcore\\Targeting\\ActionHandler\\DelegatingActionHandler' => 'getDelegatingActionHandlerService',
            'Pimcore\\Targeting\\ConditionMatcher' => 'getConditionMatcherService',
            'Pimcore\\Targeting\\DataLoader' => 'getDataLoaderService',
            'Pimcore\\Targeting\\Debug\\OverrideHandler' => 'getOverrideHandlerService',
            'Pimcore\\Targeting\\Document\\DocumentTargetingConfigurator' => 'getDocumentTargetingConfiguratorService',
            'Pimcore\\Targeting\\EventListener\\TargetingListener' => 'getTargetingListenerService',
            'Pimcore\\Targeting\\EventListener\\ToolbarListener' => 'getToolbarListenerService',
            'Pimcore\\Targeting\\Storage\\TargetingStorageInterface' => 'getTargetingStorageInterfaceService',
            'Pimcore\\Targeting\\VisitorInfoStorage' => 'getVisitorInfoStorageService',
            'Pimcore\\Templating\\Helper\\Action' => 'getActionService',
            'Pimcore\\Templating\\Helper\\Glossary' => 'getGlossaryService',
            'Pimcore\\Templating\\Helper\\HeadMeta' => 'getHeadMetaService',
            'Pimcore\\Templating\\Helper\\Inc' => 'getIncService',
            'Pimcore\\Templating\\Helper\\Navigation' => 'getNavigationService',
            'Pimcore\\Translation\\Translator' => 'getTranslatorService',
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cmf_routing.dynamic_router' => 'getCmfRouting_DynamicRouterService',
            'cmf_routing.enhancer.route_content' => 'getCmfRouting_Enhancer_RouteContentService',
            'cmf_routing.final_matcher' => 'getCmfRouting_FinalMatcherService',
            'cmf_routing.generator' => 'getCmfRouting_GeneratorService',
            'cmf_routing.nested_matcher' => 'getCmfRouting_NestedMatcherService',
            'cmf_routing.persistence.doctrine.route_condition_metadata_listener' => 'getCmfRouting_Persistence_Doctrine_RouteConditionMetadataListenerService',
            'cmf_routing.route_provider' => 'getCmfRouting_RouteProviderService',
            'cmf_routing.router' => 'getCmfRouting_RouterService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'controller_resolver' => 'getControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'event_dispatcher' => 'getEventDispatcherService',
            'file_locator' => 'getFileLocatorService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'fragment.handler' => 'getFragment_HandlerService',
            'http_kernel' => 'getHttpKernelService',
            'locale_listener' => 'getLocaleListener2Service',
            'logger' => 'getLoggerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.nested' => 'getMonolog_Handler_NestedService',
            'monolog.logger.admin' => 'getMonolog_Logger_AdminService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.init' => 'getMonolog_Logger_InitService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.routing' => 'getMonolog_Logger_RoutingService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.processor.psr_log_message' => 'getMonolog_Processor_PsrLogMessageService',
            'pimcore.cache.core.handler' => 'getPimcore_Cache_Core_HandlerService',
            'pimcore.cache.core.pool.doctrine' => 'getPimcore_Cache_Core_Pool_DoctrineService',
            'pimcore.cache.core.write_lock' => 'getPimcore_Cache_Core_WriteLockService',
            'pimcore.implementation_loader.document.tag' => 'getPimcore_ImplementationLoader_Document_TagService',
            'pimcore.routing.router.request_context' => 'getPimcore_Routing_Router_RequestContextService',
            'pimcore.service.context.pimcore_context_guesser' => 'getPimcore_Service_Context_PimcoreContextGuesserService',
            'pimcore.service.request_matcher_factory' => 'getPimcore_Service_RequestMatcherFactoryService',
            'pimcore.templating.action_renderer' => 'getPimcore_Templating_ActionRendererService',
            'pimcore.templating.engine.php' => 'getPimcore_Templating_Engine_PhpService',
            'pimcore.templating.engine.twig' => 'getPimcore_Templating_Engine_TwigService',
            'pimcore.templating.include_renderer' => 'getPimcore_Templating_IncludeRendererService',
            'pimcore.templating.tag_renderer' => 'getPimcore_Templating_TagRendererService',
            'pimcore.templating.view_helper.placeholder.container_service' => 'getPimcore_Templating_ViewHelper_Placeholder_ContainerServiceService',
            'pimcore.twig.extension.document_tag' => 'getPimcore_Twig_Extension_DocumentTagService',
            'pimcore.twig.extension.glossary' => 'getPimcore_Twig_Extension_GlossaryService',
            'pimcore.twig.extension.helpers' => 'getPimcore_Twig_Extension_HelpersService',
            'pimcore.twig.extension.navigation' => 'getPimcore_Twig_Extension_NavigationService',
            'pimcore.twig.extension.pimcore_object' => 'getPimcore_Twig_Extension_PimcoreObjectService',
            'pimcore.twig.extension.subrequest' => 'getPimcore_Twig_Extension_SubrequestService',
            'pimcore.twig.extension.templating_helper' => 'getPimcore_Twig_Extension_TemplatingHelperService',
            'pimcore_admin.security.bruteforce_protection_handler' => 'getPimcoreAdmin_Security_BruteforceProtectionHandlerService',
            'request_stack' => 'getRequestStackService',
            'resolve_controller_name_subscriber' => 'getResolveControllerNameSubscriberService',
            'response_listener' => 'getResponseListenerService',
            'router_listener' => 'getRouterListenerService',
            'scheb_two_factor.security.authentication.trust_resolver' => 'getSchebTwoFactor_Security_Authentication_TrustResolverService',
            'scheb_two_factor.trusted_cookie_response_listener' => 'getSchebTwoFactor_TrustedCookieResponseListenerService',
            'scheb_two_factor.trusted_jwt_encoder' => 'getSchebTwoFactor_TrustedJwtEncoderService',
            'scheb_two_factor.trusted_token_storage' => 'getSchebTwoFactor_TrustedTokenStorageService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map' => 'getSecurity_Firewall_MapService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'templating' => 'getTemplatingService',
            'templating.globals' => 'getTemplating_GlobalsService',
            'templating.helper.actions' => 'getTemplating_Helper_ActionsService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.extension.weblink' => 'getTwig_Extension_WeblinkService',
            'twig.loader' => 'getTwig_LoaderService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'web_link.add_link_header_listener' => 'getWebLink_AddLinkHeaderListenerService',
        );
        $this->fileMap = array(
            'AppBundle\\Controller\\AdvancedController' => 'getAdvancedControllerService.php',
            'AppBundle\\Controller\\BlogController' => 'getBlogControllerService.php',
            'AppBundle\\Controller\\Category\\ExampleController' => 'getExampleControllerService.php',
            'AppBundle\\Controller\\ContentController' => 'getContentControllerService.php',
            'AppBundle\\Controller\\DefaultController' => 'getDefaultControllerService.php',
            'AppBundle\\Controller\\NewsController' => 'getNewsControllerService.php',
            'AppBundle\\Controller\\NewsletterController' => 'getNewsletterControllerService.php',
            'AppBundle\\Controller\\SecureController' => 'getSecureControllerService.php',
            'AppBundle\\Controller\\Web2printController' => 'getWeb2printControllerService.php',
            'AppBundle\\Document\\Areabrick\\Blockquote' => 'getBlockquoteService.php',
            'AppBundle\\EventListener\\TestListener' => 'getTestListenerService.php',
            'AppBundle\\LinkGenerator\\NewsLinkGenerator' => 'getNewsLinkGeneratorService.php',
            'AppBundle\\Sitemaps\\NewsGenerator' => 'getNewsGeneratorService.php',
            'AppBundle\\Templating\\Helper\\LanguageSwitcher' => 'getLanguageSwitcherService.php',
            'Pimcore\\Analytics\\Google\\Config\\SiteConfigProvider' => 'getSiteConfigProviderService.php',
            'Pimcore\\Analytics\\Piwik\\Api\\ApiClient' => 'getApiClientService.php',
            'Pimcore\\Analytics\\Piwik\\Api\\SitesManager' => 'getSitesManagerService.php',
            'Pimcore\\Analytics\\Piwik\\Config\\Config' => 'getConfigService.php',
            'Pimcore\\Analytics\\Piwik\\EventListener\\CacheListener' => 'getCacheListenerService.php',
            'Pimcore\\Analytics\\Piwik\\EventListener\\IndexSettingsListener' => 'getIndexSettingsListenerService.php',
            'Pimcore\\Analytics\\Piwik\\ReportBroker' => 'getReportBrokerService.php',
            'Pimcore\\Analytics\\Piwik\\WidgetBroker' => 'getWidgetBrokerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController' => 'getAssetControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController' => 'getClassControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController' => 'getClassificationstoreControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController' => 'getDataObjectControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController' => 'getDataObjectHelperControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController' => 'getDocumentControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentTag\\RenderletController' => 'getRenderletControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController' => 'getElementControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementControllerBase' => 'getElementControllerBaseService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\EmailController' => 'getEmailControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\AdminerController' => 'getAdminerControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\LinfoController' => 'getLinfoControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\OpcacheController' => 'getOpcacheControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\FolderController' => 'getFolderControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\HardlinkController' => 'getHardlinkControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\IndexController' => 'getIndexControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\InstallController' => 'getInstallControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LinkController' => 'getLinkControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LogController' => 'getLogControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LoginController' => 'getLoginControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController' => 'getMiscControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\NewsletterController' => 'getNewsletterController2Service.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PageController' => 'getPageControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController' => 'getPortalControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintcontainerController' => 'getPrintcontainerControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageController' => 'getPrintpageControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageControllerBase' => 'getPrintpageControllerBaseService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\QuantityValueController' => 'getQuantityValueControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\RecyclebinController' => 'getRecyclebinControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\RedirectsController' => 'getRedirectsControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController' => 'getSettingsControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SnippetController' => 'getSnippetControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TagsController' => 'getTagsControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TargetingController' => 'getTargetingControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController' => 'getTranslationControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController' => 'getUserControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\VariantsController' => 'getVariantsControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\WorkflowController' => 'getWorkflowControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\ExtensionManager\\ExtensionManagerController' => 'getExtensionManagerControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\AdminController' => 'getAdminControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\AssetController' => 'getAssetController2Service.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\DataObjectController' => 'getDataObjectController2Service.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\PimcoreUsersController' => 'getPimcoreUsersControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\SentMailController' => 'getSentMailControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\AnalyticsController' => 'getAnalyticsControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\CustomReportController' => 'getCustomReportControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\PiwikController' => 'getPiwikControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\QrcodeController' => 'getQrcodeControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\ReportsControllerBase' => 'getReportsControllerBaseService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\SettingsController' => 'getSettingsController2Service.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ClassController' => 'getClassController2Service.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\AssetController' => 'getAssetController3Service.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DataObjectController' => 'getDataObjectController3Service.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DocumentController' => 'getDocumentController2Service.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\TagController' => 'getTagControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ImageController' => 'getImageControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\InfoController' => 'getInfoControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Searchadmin\\SearchController' => 'getSearchControllerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Controller\\Update\\IndexController' => 'getIndexController2Service.php',
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\AdminExceptionListener' => 'getAdminExceptionListenerService.php',
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\GridConfigListener' => 'getGridConfigListenerService.php',
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\ImportConfigListener' => 'getImportConfigListenerService.php',
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\TwoFactorListener' => 'getTwoFactorListenerService.php',
            'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\Assets' => 'getAssetsService.php',
            'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\DataObjects' => 'getDataObjectsService.php',
            'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\Manager' => 'getManagerService.php',
            'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\PimcoreUsers' => 'getPimcoreUsersService.php',
            'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\SentMail' => 'getSentMailService.php',
            'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserChecker' => 'getUserCheckerService.php',
            'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserProvider' => 'getUserProviderService.php',
            'Pimcore\\Bundle\\AdminBundle\\Session\\AdminSessionBagConfigurator' => 'getAdminSessionBagConfiguratorService.php',
            'Pimcore\\Bundle\\AdminBundle\\Session\\Handler\\AdminSessionHandler' => 'getAdminSessionHandlerService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\DisableCommand' => 'getDisableCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\EnableCommand' => 'getEnableCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\Helper\\PostStateChange' => 'getPostStateChangeService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\InstallCommand' => 'getInstallCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\ListCommand' => 'getListCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\UninstallCommand' => 'getUninstallCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\UpdateCommand' => 'getUpdateCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\CacheClearCommand' => 'getCacheClearCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\CacheWarmingCommand' => 'getCacheWarmingCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\ClassesRebuildCommand' => 'getClassesRebuildCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\Composer\\NormalizeConfigCommand' => 'getNormalizeConfigCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\Definition\\Import\\ClassCommand' => 'getClassCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\Definition\\Import\\FieldCollectionCommand' => 'getFieldCollectionCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\Definition\\Import\\ObjectBrickCommand' => 'getObjectBrickCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\DeleteClassificationStoreCommand' => 'getDeleteClassificationStoreCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\Document\\GeneratePagePreviews' => 'getGeneratePagePreviewsService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\Document\\MigrateTagNamingStrategyCommand' => 'getMigrateTagNamingStrategyCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\EmailLogsCleanupCommand' => 'getEmailLogsCleanupCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\InternalModelDaoMappingGeneratorCommand' => 'getInternalModelDaoMappingGeneratorCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\InternalNewsletterDocumentSendCommand' => 'getInternalNewsletterDocumentSendCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\InternalUnicodeCldrLanguageTerritoryGeneratorCommand' => 'getInternalUnicodeCldrLanguageTerritoryGeneratorCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\InternalUpdateProcessorCommand' => 'getInternalUpdateProcessorCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\InternalVideoConverterCommand' => 'getInternalVideoConverterCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\LowQualityImagePreviewCommand' => 'getLowQualityImagePreviewCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\MaintenanceCommand' => 'getMaintenanceCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\MysqlToolsCommand' => 'getMysqlToolsCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\ResetPasswordCommand' => 'getResetPasswordCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\RunScriptCommand' => 'getRunScriptCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\RunUpdateScriptCommand' => 'getRunUpdateScriptCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\SearchBackendReindexCommand' => 'getSearchBackendReindexCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\Targeting\\MigrateElementNamesCommand' => 'getMigrateElementNamesCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\ThumbnailsImageCommand' => 'getThumbnailsImageCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\ThumbnailsOptimizeImagesCommand' => 'getThumbnailsOptimizeImagesCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\ThumbnailsVideoCommand' => 'getThumbnailsVideoCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\UpdateCommand' => 'getUpdateCommand2Service.php',
            'Pimcore\\Bundle\\CoreBundle\\Command\\Web2PrintPdfCreationCommand' => 'getWeb2PrintPdfCreationCommandService.php',
            'Pimcore\\Bundle\\CoreBundle\\Controller\\PublicServicesController' => 'getPublicServicesControllerService.php',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\ControllerViewModelListener' => 'getControllerViewModelListenerService.php',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\ElementTagsListener' => 'getElementTagsListenerService.php',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\ContentTemplateListener' => 'getContentTemplateListenerService.php',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\ResponseExceptionListener' => 'getResponseExceptionListenerService.php',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\SearchBackendListener' => 'getSearchBackendListenerService.php',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\UUIDListener' => 'getUUIDListenerService.php',
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\WorkflowManagementListener' => 'getWorkflowManagementListenerService.php',
            'Pimcore\\Cache\\Symfony\\CacheClearer' => 'getCacheClearerService.php',
            'Pimcore\\Composer\\Config\\ConfigMerger' => 'getConfigMergerService.php',
            'Pimcore\\Composer\\Config\\Normalizer\\EndroidQrCodeRenamedPackageNormalizer' => 'getEndroidQrCodeRenamedPackageNormalizerService.php',
            'Pimcore\\Composer\\Config\\Normalizer\\Php7PlatformNormalizer' => 'getPhp7PlatformNormalizerService.php',
            'Pimcore\\Config\\ReportConfigWriter' => 'getReportConfigWriterService.php',
            'Pimcore\\Controller\\ArgumentValueResolver\\DocumentValueResolver' => 'getDocumentValueResolverService.php',
            'Pimcore\\Controller\\ArgumentValueResolver\\EditmodeValueResolver' => 'getEditmodeValueResolverService.php',
            'Pimcore\\Controller\\ArgumentValueResolver\\TemplateVarsValueResolver' => 'getTemplateVarsValueResolverService.php',
            'Pimcore\\Controller\\ArgumentValueResolver\\ViewModelValueResolver' => 'getViewModelValueResolverService.php',
            'Pimcore\\Controller\\ArgumentValueResolver\\WebsiteConfigValueResolver' => 'getWebsiteConfigValueResolverService.php',
            'Pimcore\\Controller\\Config\\ControllerDataProvider' => 'getControllerDataProviderService.php',
            'Pimcore\\DataObject\\Consent\\Service' => 'getService2Service.php',
            'Pimcore\\DataObject\\GridColumnConfig\\Service' => 'getService3Service.php',
            'Pimcore\\DataObject\\Import\\Resolver\\Code' => 'getCodeService.php',
            'Pimcore\\DataObject\\Import\\Resolver\\Filename' => 'getFilenameService.php',
            'Pimcore\\DataObject\\Import\\Resolver\\Fullpath' => 'getFullpathService.php',
            'Pimcore\\DataObject\\Import\\Resolver\\GetBy' => 'getGetByService.php',
            'Pimcore\\DataObject\\Import\\Resolver\\Id' => 'getIdService.php',
            'Pimcore\\DataObject\\Import\\Service' => 'getService4Service.php',
            'Pimcore\\Document\\Renderer\\DocumentRenderer' => 'getDocumentRendererService.php',
            'Pimcore\\Document\\Tag\\DelegatingTagHandler' => 'getDelegatingTagHandlerService.php',
            'Pimcore\\Extension\\Document\\Areabrick\\AreabrickManager' => 'getAreabrickManagerService.php',
            'Pimcore\\HttpKernel\\CacheWarmer\\MkdirCacheWarmer' => 'getMkdirCacheWarmerService.php',
            'Pimcore\\Http\\ClientFactory' => 'getClientFactoryService.php',
            'Pimcore\\Http\\Request\\Resolver\\TemplateResolver' => 'getTemplateResolverService.php',
            'Pimcore\\Http\\Request\\Resolver\\TemplateVarsResolver' => 'getTemplateVarsResolverService.php',
            'Pimcore\\Http\\Request\\Resolver\\ViewModelResolver' => 'getViewModelResolverService.php',
            'Pimcore\\Localization\\IntlFormatter' => 'getIntlFormatterService.php',
            'Pimcore\\Localization\\LocaleService' => 'getLocaleServiceService.php',
            'Pimcore\\Log\\ApplicationLogger' => 'getApplicationLoggerService.php',
            'Pimcore\\Log\\Handler\\ApplicationLoggerDb' => 'getApplicationLoggerDbService.php',
            'Pimcore\\Migrations\\Configuration\\ConfigurationFactory' => 'getConfigurationFactoryService.php',
            'Pimcore\\Model\\Factory' => 'getFactoryService.php',
            'Pimcore\\Model\\Schedule\\Manager\\Procedural' => 'getProceduralService.php',
            'Pimcore\\Navigation\\Renderer\\Breadcrumbs' => 'getBreadcrumbsService.php',
            'Pimcore\\Navigation\\Renderer\\Menu' => 'getMenuService.php',
            'Pimcore\\Routing\\Redirect\\Csv' => 'getCsvService.php',
            'Pimcore\\Sitemap\\Document\\DocumentTreeGenerator' => 'getDocumentTreeGeneratorService.php',
            'Pimcore\\Sitemap\\Element\\Filter\\PropertiesFilter' => 'getPropertiesFilterService.php',
            'Pimcore\\Sitemap\\Element\\Filter\\PublishedFilter' => 'getPublishedFilterService.php',
            'Pimcore\\Sitemap\\Element\\Processor\\ModificationDateProcessor' => 'getModificationDateProcessorService.php',
            'Pimcore\\Sitemap\\Element\\Processor\\PropertiesProcessor' => 'getPropertiesProcessorService.php',
            'Pimcore\\Sitemap\\EventListener\\SitemapGeneratorListener' => 'getSitemapGeneratorListenerService.php',
            'Pimcore\\Sitemap\\UrlGenerator' => 'getUrlGeneratorService.php',
            'Pimcore\\Targeting\\ActionHandler\\AssignTargetGroup' => 'getAssignTargetGroupService.php',
            'Pimcore\\Targeting\\ActionHandler\\CodeSnippet' => 'getCodeSnippetService.php',
            'Pimcore\\Targeting\\ActionHandler\\Redirect' => 'getRedirectService.php',
            'Pimcore\\Targeting\\DataProvider\\Device' => 'getDeviceService.php',
            'Pimcore\\Targeting\\DataProvider\\GeoIp' => 'getGeoIpService.php',
            'Pimcore\\Targeting\\DataProvider\\GeoLocation' => 'getGeoLocationService.php',
            'Pimcore\\Targeting\\DataProvider\\Piwik' => 'getPiwikService.php',
            'Pimcore\\Targeting\\DataProvider\\TargetingStorage' => 'getTargetingStorageService.php',
            'Pimcore\\Targeting\\DataProvider\\VisitedPagesCounter' => 'getVisitedPagesCounterService.php',
            'Pimcore\\Targeting\\EventListener\\DocumentTargetGroupListener' => 'getDocumentTargetGroupListenerService.php',
            'Pimcore\\Targeting\\EventListener\\FullPageCacheCookieCleanupListener' => 'getFullPageCacheCookieCleanupListenerService.php',
            'Pimcore\\Targeting\\EventListener\\MaintenanceListener' => 'getMaintenanceListenerService.php',
            'Pimcore\\Targeting\\EventListener\\PiwikVisitorIdListener' => 'getPiwikVisitorIdListenerService.php',
            'Pimcore\\Targeting\\EventListener\\VisitedPagesCountListener' => 'getVisitedPagesCountListenerService.php',
            'Pimcore\\Targeting\\Service\\VisitedPagesCounter' => 'getVisitedPagesCounter2Service.php',
            'Pimcore\\Templating\\Helper\\Cache' => 'getCacheService.php',
            'Pimcore\\Templating\\Helper\\Device' => 'getDevice2Service.php',
            'Pimcore\\Templating\\Helper\\GetAllParams' => 'getGetAllParamsService.php',
            'Pimcore\\Templating\\Helper\\GetParam' => 'getGetParamService.php',
            'Pimcore\\Templating\\Helper\\HeadLink' => 'getHeadLinkService.php',
            'Pimcore\\Templating\\Helper\\HeadScript' => 'getHeadScriptService.php',
            'Pimcore\\Templating\\Helper\\HeadStyle' => 'getHeadStyleService.php',
            'Pimcore\\Templating\\Helper\\HeadTitle' => 'getHeadTitleService.php',
            'Pimcore\\Templating\\Helper\\InlineScript' => 'getInlineScriptService.php',
            'Pimcore\\Templating\\Helper\\PimcoreUrl' => 'getPimcoreUrlService.php',
            'Pimcore\\Templating\\Helper\\Placeholder' => 'getPlaceholderService.php',
            'Pimcore\\Templating\\Helper\\WebLink' => 'getWebLinkService.php',
            'Pimcore\\Templating\\Helper\\WebsiteConfig' => 'getWebsiteConfigService.php',
            'Pimcore\\Tool\\AssetsInstaller' => 'getAssetsInstallerService.php',
            'Pimcore\\Tool\\RestClient' => 'getRestClientService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'annotations.cache' => 'getAnnotations_CacheService.php',
            'annotations.cache_warmer' => 'getAnnotations_CacheWarmerService.php',
            'app.area.brick.embed' => 'getApp_Area_Brick_EmbedService.php',
            'app.area.brick.featurette' => 'getApp_Area_Brick_FeaturetteService.php',
            'app.area.brick.gallery_carousel' => 'getApp_Area_Brick_GalleryCarouselService.php',
            'app.area.brick.gallery_folder' => 'getApp_Area_Brick_GalleryFolderService.php',
            'app.area.brick.gallery_single_images' => 'getApp_Area_Brick_GallerySingleImagesService.php',
            'app.area.brick.headlines' => 'getApp_Area_Brick_HeadlinesService.php',
            'app.area.brick.horizontal_line' => 'getApp_Area_Brick_HorizontalLineService.php',
            'app.area.brick.icon_teaser_row' => 'getApp_Area_Brick_IconTeaserRowService.php',
            'app.area.brick.image' => 'getApp_Area_Brick_ImageService.php',
            'app.area.brick.image_hotspot_marker' => 'getApp_Area_Brick_ImageHotspotMarkerService.php',
            'app.area.brick.pdf' => 'getApp_Area_Brick_PdfService.php',
            'app.area.brick.standard_teaser_row' => 'getApp_Area_Brick_StandardTeaserRowService.php',
            'app.area.brick.tabbed_slider_text' => 'getApp_Area_Brick_TabbedSliderTextService.php',
            'app.area.brick.text_accordion' => 'getApp_Area_Brick_TextAccordionService.php',
            'app.area.brick.time_slider_featurette' => 'getApp_Area_Brick_TimeSliderFeaturetteService.php',
            'app.area.brick.video' => 'getApp_Area_Brick_VideoService.php',
            'app.area.brick.wysiwyg' => 'getApp_Area_Brick_WysiwygService.php',
            'app.area.brick.wysiwyg_with_images' => 'getApp_Area_Brick_WysiwygWithImagesService.php',
            'app.security.user_provider' => 'getApp_Security_UserProviderService.php',
            'argument_resolver.default' => 'getArgumentResolver_DefaultService.php',
            'argument_resolver.request' => 'getArgumentResolver_RequestService.php',
            'argument_resolver.request_attribute' => 'getArgumentResolver_RequestAttributeService.php',
            'argument_resolver.service' => 'getArgumentResolver_ServiceService.php',
            'argument_resolver.session' => 'getArgumentResolver_SessionService.php',
            'argument_resolver.variadic' => 'getArgumentResolver_VariadicService.php',
            'cache.annotations' => 'getCache_AnnotationsService.php',
            'cache.app' => 'getCache_AppService.php',
            'cache.default_clearer' => 'getCache_DefaultClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.property_access' => 'getCache_PropertyAccessService.php',
            'cache.serializer' => 'getCache_SerializerService.php',
            'cache.system' => 'getCache_SystemService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache.validator' => 'getCache_ValidatorService.php',
            'cache_clearer' => 'getCacheClearer2Service.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'cmf_routing.redirect_controller' => 'getCmfRouting_RedirectControllerService.php',
            'cmf_routing.route_type_form_type' => 'getCmfRouting_RouteTypeFormTypeService.php',
            'cmf_routing.validator.route_defaults' => 'getCmfRouting_Validator_RouteDefaultsService.php',
            'console.command.about' => 'getConsole_Command_AboutService.php',
            'console.command.appbundle_command_awesomecommand' => 'getConsole_Command_AppbundleCommandAwesomecommandService.php',
            'console.command.assets_install' => 'getConsole_Command_AssetsInstallService.php',
            'console.command.cache_clear' => 'getConsole_Command_CacheClearService.php',
            'console.command.cache_pool_clear' => 'getConsole_Command_CachePoolClearService.php',
            'console.command.cache_pool_prune' => 'getConsole_Command_CachePoolPruneService.php',
            'console.command.cache_warmup' => 'getConsole_Command_CacheWarmupService.php',
            'console.command.config_debug' => 'getConsole_Command_ConfigDebugService.php',
            'console.command.config_dump_reference' => 'getConsole_Command_ConfigDumpReferenceService.php',
            'console.command.container_debug' => 'getConsole_Command_ContainerDebugService.php',
            'console.command.debug_autowiring' => 'getConsole_Command_DebugAutowiringService.php',
            'console.command.event_dispatcher_debug' => 'getConsole_Command_EventDispatcherDebugService.php',
            'console.command.form_debug' => 'getConsole_Command_FormDebugService.php',
            'console.command.pimcore_migrations_command_executecommand' => 'getConsole_Command_PimcoreMigrationsCommandExecutecommandService.php',
            'console.command.pimcore_migrations_command_generatecommand' => 'getConsole_Command_PimcoreMigrationsCommandGeneratecommandService.php',
            'console.command.pimcore_migrations_command_latestcommand' => 'getConsole_Command_PimcoreMigrationsCommandLatestcommandService.php',
            'console.command.pimcore_migrations_command_migratecommand' => 'getConsole_Command_PimcoreMigrationsCommandMigratecommandService.php',
            'console.command.pimcore_migrations_command_statuscommand' => 'getConsole_Command_PimcoreMigrationsCommandStatuscommandService.php',
            'console.command.pimcore_migrations_command_versioncommand' => 'getConsole_Command_PimcoreMigrationsCommandVersioncommandService.php',
            'console.command.router_debug' => 'getConsole_Command_RouterDebugService.php',
            'console.command.router_match' => 'getConsole_Command_RouterMatchService.php',
            'console.command.translation_debug' => 'getConsole_Command_TranslationDebugService.php',
            'console.command.translation_update' => 'getConsole_Command_TranslationUpdateService.php',
            'console.command.xliff_lint' => 'getConsole_Command_XliffLintService.php',
            'console.command.yaml_lint' => 'getConsole_Command_YamlLintService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'console.error_listener' => 'getConsole_ErrorListenerService.php',
            'deprecated.form.registry' => 'getDeprecated_Form_RegistryService.php',
            'deprecated.form.registry.csrf' => 'getDeprecated_Form_Registry_CsrfService.php',
            'doctrine.database_create_command' => 'getDoctrine_DatabaseCreateCommandService.php',
            'doctrine.database_drop_command' => 'getDoctrine_DatabaseDropCommandService.php',
            'doctrine.generate_entities_command' => 'getDoctrine_GenerateEntitiesCommandService.php',
            'doctrine.mapping_import_command' => 'getDoctrine_MappingImportCommandService.php',
            'doctrine_cache.contains_command' => 'getDoctrineCache_ContainsCommandService.php',
            'doctrine_cache.delete_command' => 'getDoctrineCache_DeleteCommandService.php',
            'doctrine_cache.flush_command' => 'getDoctrineCache_FlushCommandService.php',
            'doctrine_cache.stats_command' => 'getDoctrineCache_StatsCommandService.php',
            'filesystem' => 'getFilesystemService.php',
            'form.server_params' => 'getForm_ServerParamsService.php',
            'form.type.birthday' => 'getForm_Type_BirthdayService.php',
            'form.type.button' => 'getForm_Type_ButtonService.php',
            'form.type.checkbox' => 'getForm_Type_CheckboxService.php',
            'form.type.choice' => 'getForm_Type_ChoiceService.php',
            'form.type.collection' => 'getForm_Type_CollectionService.php',
            'form.type.country' => 'getForm_Type_CountryService.php',
            'form.type.currency' => 'getForm_Type_CurrencyService.php',
            'form.type.date' => 'getForm_Type_DateService.php',
            'form.type.datetime' => 'getForm_Type_DatetimeService.php',
            'form.type.email' => 'getForm_Type_EmailService.php',
            'form.type.file' => 'getForm_Type_FileService.php',
            'form.type.form' => 'getForm_Type_FormService.php',
            'form.type.hidden' => 'getForm_Type_HiddenService.php',
            'form.type.integer' => 'getForm_Type_IntegerService.php',
            'form.type.language' => 'getForm_Type_LanguageService.php',
            'form.type.locale' => 'getForm_Type_LocaleService.php',
            'form.type.money' => 'getForm_Type_MoneyService.php',
            'form.type.number' => 'getForm_Type_NumberService.php',
            'form.type.password' => 'getForm_Type_PasswordService.php',
            'form.type.percent' => 'getForm_Type_PercentService.php',
            'form.type.radio' => 'getForm_Type_RadioService.php',
            'form.type.range' => 'getForm_Type_RangeService.php',
            'form.type.repeated' => 'getForm_Type_RepeatedService.php',
            'form.type.reset' => 'getForm_Type_ResetService.php',
            'form.type.search' => 'getForm_Type_SearchService.php',
            'form.type.submit' => 'getForm_Type_SubmitService.php',
            'form.type.text' => 'getForm_Type_TextService.php',
            'form.type.textarea' => 'getForm_Type_TextareaService.php',
            'form.type.time' => 'getForm_Type_TimeService.php',
            'form.type.timezone' => 'getForm_Type_TimezoneService.php',
            'form.type.url' => 'getForm_Type_UrlService.php',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService.php',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService.php',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService.php',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService.php',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService.php',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService.php',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService.php',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService.php',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService.php',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService.php',
            'monolog.logger.console' => 'getMonolog_Logger_ConsoleService.php',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService.php',
            'monolog.logger.pimcore' => 'getMonolog_Logger_PimcoreService.php',
            'monolog.logger.pimcore.maintenance' => 'getMonolog_Logger_Pimcore_MaintenanceService.php',
            'monolog.logger.pimcore_admin.session' => 'getMonolog_Logger_PimcoreAdmin_SessionService.php',
            'monolog.logger.pimcore_api' => 'getMonolog_Logger_PimcoreApiService.php',
            'monolog.logger.session' => 'getMonolog_Logger_SessionService.php',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService.php',
            'pimcore.analytics.google.fallback_service_locator' => 'getPimcore_Analytics_Google_FallbackServiceLocatorService.php',
            'pimcore.bundle_locator' => 'getPimcore_BundleLocatorService.php',
            'pimcore.cache.core.pool.array' => 'getPimcore_Cache_Core_Pool_ArrayService.php',
            'pimcore.cache.core.pool.filesystem' => 'getPimcore_Cache_Core_Pool_FilesystemService.php',
            'pimcore.cache.core.symfony_adapter.array' => 'getPimcore_Cache_Core_SymfonyAdapter_ArrayService.php',
            'pimcore.cache.core.symfony_adapter.filesystem' => 'getPimcore_Cache_Core_SymfonyAdapter_FilesystemService.php',
            'pimcore.custom_report.adapter.factories' => 'getPimcore_CustomReport_Adapter_FactoriesService.php',
            'pimcore.custom_report.adapter.factory.analytics' => 'getPimcore_CustomReport_Adapter_Factory_AnalyticsService.php',
            'pimcore.custom_report.adapter.factory.sql' => 'getPimcore_CustomReport_Adapter_Factory_SqlService.php',
            'pimcore.data_object.grid_column_config.operator.factory.anonymizer' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_AnonymizerService.php',
            'pimcore.data_object.grid_column_config.operator.factory.any_getter' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_AnyGetterService.php',
            'pimcore.data_object.grid_column_config.operator.factory.arithmetic' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_ArithmeticService.php',
            'pimcore.data_object.grid_column_config.operator.factory.asset_metadata_getter' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_AssetMetadataGetterService.php',
            'pimcore.data_object.grid_column_config.operator.factory.base64' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_Base64Service.php',
            'pimcore.data_object.grid_column_config.operator.factory.boolean' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_BooleanService.php',
            'pimcore.data_object.grid_column_config.operator.factory.boolean_formatter' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_BooleanFormatterService.php',
            'pimcore.data_object.grid_column_config.operator.factory.case_converter' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_CaseConverterService.php',
            'pimcore.data_object.grid_column_config.operator.factory.char_counter' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_CharCounterService.php',
            'pimcore.data_object.grid_column_config.operator.factory.concatenator' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_ConcatenatorService.php',
            'pimcore.data_object.grid_column_config.operator.factory.date_formatter' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_DateFormatterService.php',
            'pimcore.data_object.grid_column_config.operator.factory.element_counter' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_ElementCounterService.php',
            'pimcore.data_object.grid_column_config.operator.factory.field_collection_getter' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_FieldCollectionGetterService.php',
            'pimcore.data_object.grid_column_config.operator.factory.is_equal' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_IsEqualService.php',
            'pimcore.data_object.grid_column_config.operator.factory.json' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_JsonService.php',
            'pimcore.data_object.grid_column_config.operator.factory.lf_expander' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_LfExpanderService.php',
            'pimcore.data_object.grid_column_config.operator.factory.locale_switcher' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_LocaleSwitcherService.php',
            'pimcore.data_object.grid_column_config.operator.factory.merge' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_MergeService.php',
            'pimcore.data_object.grid_column_config.operator.factory.object_brick_getter' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_ObjectBrickGetterService.php',
            'pimcore.data_object.grid_column_config.operator.factory.object_field_getter' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_ObjectFieldGetterService.php',
            'pimcore.data_object.grid_column_config.operator.factory.php' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_PhpService.php',
            'pimcore.data_object.grid_column_config.operator.factory.php_code' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_PhpCodeService.php',
            'pimcore.data_object.grid_column_config.operator.factory.required_by' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_RequiredByService.php',
            'pimcore.data_object.grid_column_config.operator.factory.string_contains' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_StringContainsService.php',
            'pimcore.data_object.grid_column_config.operator.factory.string_replace' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_StringReplaceService.php',
            'pimcore.data_object.grid_column_config.operator.factory.substring' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_SubstringService.php',
            'pimcore.data_object.grid_column_config.operator.factory.text' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_TextService.php',
            'pimcore.data_object.grid_column_config.operator.factory.translate_value' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_TranslateValueService.php',
            'pimcore.data_object.grid_column_config.operator.factory.trimmer' => 'getPimcore_DataObject_GridColumnConfig_Operator_Factory_TrimmerService.php',
            'pimcore.data_object.grid_column_config.value.factory.date' => 'getPimcore_DataObject_GridColumnConfig_Value_Factory_DateService.php',
            'pimcore.data_object.grid_column_config.value.factory.datetime' => 'getPimcore_DataObject_GridColumnConfig_Value_Factory_DatetimeService.php',
            'pimcore.data_object.grid_column_config.value.factory.default' => 'getPimcore_DataObject_GridColumnConfig_Value_Factory_DefaultService.php',
            'pimcore.data_object.grid_column_config.value.factory.href' => 'getPimcore_DataObject_GridColumnConfig_Value_Factory_HrefService.php',
            'pimcore.data_object.grid_column_config.value.factory.objects' => 'getPimcore_DataObject_GridColumnConfig_Value_Factory_ObjectsService.php',
            'pimcore.data_object.import.operator.factory.base64' => 'getPimcore_DataObject_Import_Operator_Factory_Base64Service.php',
            'pimcore.data_object.import.operator.factory.iterator' => 'getPimcore_DataObject_Import_Operator_Factory_IteratorService.php',
            'pimcore.data_object.import.operator.factory.locale_switcher' => 'getPimcore_DataObject_Import_Operator_Factory_LocaleSwitcherService.php',
            'pimcore.data_object.import.operator.factory.object_brick_setter' => 'getPimcore_DataObject_Import_Operator_Factory_ObjectBrickSetterService.php',
            'pimcore.data_object.import.operator.factory.php_code' => 'getPimcore_DataObject_Import_Operator_Factory_PhpCodeService.php',
            'pimcore.data_object.import.operator.factory.published' => 'getPimcore_DataObject_Import_Operator_Factory_PublishedService.php',
            'pimcore.data_object.import.operator.factory.splitter' => 'getPimcore_DataObject_Import_Operator_Factory_SplitterService.php',
            'pimcore.data_object.import.operator.factory.unserialize' => 'getPimcore_DataObject_Import_Operator_Factory_UnserializeService.php',
            'pimcore.data_object.import.value.factory.default' => 'getPimcore_DataObject_Import_Value_Factory_DefaultService.php',
            'pimcore.document.newsletter.factory.csv' => 'getPimcore_Document_Newsletter_Factory_CsvService.php',
            'pimcore.document.newsletter.factory.default' => 'getPimcore_Document_Newsletter_Factory_DefaultService.php',
            'pimcore.document.newsletter.factory.report' => 'getPimcore_Document_Newsletter_Factory_ReportService.php',
            'pimcore.document.tag.naming.migration.strategy.analyze' => 'getPimcore_Document_Tag_Naming_Migration_Strategy_AnalyzeService.php',
            'pimcore.document.tag.naming.migration.strategy.render' => 'getPimcore_Document_Tag_Naming_Migration_Strategy_RenderService.php',
            'pimcore.document.tag.naming.strategy.legacy' => 'getPimcore_Document_Tag_Naming_Strategy_LegacyService.php',
            'pimcore.document.tag.naming.strategy.nested' => 'getPimcore_Document_Tag_Naming_Strategy_NestedService.php',
            'pimcore.http_client' => 'getPimcore_HttpClientService.php',
            'pimcore.implementation_loader.object.data' => 'getPimcore_ImplementationLoader_Object_DataService.php',
            'pimcore.implementation_loader.object.layout' => 'getPimcore_ImplementationLoader_Object_LayoutService.php',
            'pimcore.newsletter.address_source_adapter.factories' => 'getPimcore_Newsletter_AddressSourceAdapter_FactoriesService.php',
            'pimcore.templating.view_helper.translate' => 'getPimcore_Templating_ViewHelper_TranslateService.php',
            'pimcore.templating.view_helper.translate_admin' => 'getPimcore_Templating_ViewHelper_TranslateAdminService.php',
            'pimcore.web_path_resolver' => 'getPimcore_WebPathResolverService.php',
            'pimcore_admin.security.admin_authenticator' => 'getPimcoreAdmin_Security_AdminAuthenticatorService.php',
            'pimcore_admin.security.logout_success_handler' => 'getPimcoreAdmin_Security_LogoutSuccessHandlerService.php',
            'pimcore_admin.security.password_encoder_factory' => 'getPimcoreAdmin_Security_PasswordEncoderFactoryService.php',
            'pimcore_admin.security.webservice_authenticator' => 'getPimcoreAdmin_Security_WebserviceAuthenticatorService.php',
            'pimcore_admin.serializer' => 'getPimcoreAdmin_SerializerService.php',
            'pimcore_admin.webservice.service' => 'getPimcoreAdmin_Webservice_ServiceService.php',
            'presta_sitemap.dump_command' => 'getPrestaSitemap_DumpCommandService.php',
            'presta_sitemap.dumper_default' => 'getPrestaSitemap_DumperDefaultService.php',
            'presta_sitemap.eventlistener.route_annotation' => 'getPrestaSitemap_Eventlistener_RouteAnnotationService.php',
            'presta_sitemap.generator_default' => 'getPrestaSitemap_GeneratorDefaultService.php',
            'property_accessor' => 'getPropertyAccessorService.php',
            'router.cache_warmer' => 'getRouter_CacheWarmerService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'scheb_two_factor.authenticated_token_handler' => 'getSchebTwoFactor_AuthenticatedTokenHandlerService.php',
            'scheb_two_factor.authentication_context_factory' => 'getSchebTwoFactor_AuthenticationContextFactoryService.php',
            'scheb_two_factor.default_backup_code_manager' => 'getSchebTwoFactor_DefaultBackupCodeManagerService.php',
            'scheb_two_factor.default_trusted_device_manager' => 'getSchebTwoFactor_DefaultTrustedDeviceManagerService.php',
            'scheb_two_factor.firewall_context' => 'getSchebTwoFactor_FirewallContextService.php',
            'scheb_two_factor.form_controller' => 'getSchebTwoFactor_FormControllerService.php',
            'scheb_two_factor.ip_whitelist_handler' => 'getSchebTwoFactor_IpWhitelistHandlerService.php',
            'scheb_two_factor.null_backup_code_manager' => 'getSchebTwoFactor_NullBackupCodeManagerService.php',
            'scheb_two_factor.null_trusted_device_manager' => 'getSchebTwoFactor_NullTrustedDeviceManagerService.php',
            'scheb_two_factor.persister.doctrine' => 'getSchebTwoFactor_Persister_DoctrineService.php',
            'scheb_two_factor.persister_factory.doctrine' => 'getSchebTwoFactor_PersisterFactory_DoctrineService.php',
            'scheb_two_factor.provider_handler' => 'getSchebTwoFactor_ProviderHandlerService.php',
            'scheb_two_factor.provider_registry' => 'getSchebTwoFactor_ProviderRegistryService.php',
            'scheb_two_factor.security.access.authenticated_voter' => 'getSchebTwoFactor_Security_Access_AuthenticatedVoterService.php',
            'scheb_two_factor.security.google' => 'getSchebTwoFactor_Security_GoogleService.php',
            'scheb_two_factor.security.google.form_renderer' => 'getSchebTwoFactor_Security_Google_FormRendererService.php',
            'scheb_two_factor.security.google.provider' => 'getSchebTwoFactor_Security_Google_ProviderService.php',
            'scheb_two_factor.security.google_authenticator' => 'getSchebTwoFactor_Security_GoogleAuthenticatorService.php',
            'scheb_two_factor.trusted_device_handler' => 'getSchebTwoFactor_TrustedDeviceHandlerService.php',
            'security.access.authenticated_voter' => 'getSecurity_Access_AuthenticatedVoterService.php',
            'security.access.expression_voter' => 'getSecurity_Access_ExpressionVoterService.php',
            'security.access.role_hierarchy_voter' => 'getSecurity_Access_RoleHierarchyVoterService.php',
            'security.access_listener' => 'getSecurity_AccessListenerService.php',
            'security.access_map' => 'getSecurity_AccessMapService.php',
            'security.authentication.basic_entry_point.admin_webdav' => 'getSecurity_Authentication_BasicEntryPoint_AdminWebdavService.php',
            'security.authentication.failure_handler.two_factor.admin' => 'getSecurity_Authentication_FailureHandler_TwoFactor_AdminService.php',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService.php',
            'security.authentication.listener.anonymous.admin' => 'getSecurity_Authentication_Listener_Anonymous_AdminService.php',
            'security.authentication.listener.anonymous.demo_cms_fw' => 'getSecurity_Authentication_Listener_Anonymous_DemoCmsFwService.php',
            'security.authentication.listener.basic.admin_webdav' => 'getSecurity_Authentication_Listener_Basic_AdminWebdavService.php',
            'security.authentication.listener.form.demo_cms_fw' => 'getSecurity_Authentication_Listener_Form_DemoCmsFwService.php',
            'security.authentication.listener.guard.admin' => 'getSecurity_Authentication_Listener_Guard_AdminService.php',
            'security.authentication.listener.guard.webservice' => 'getSecurity_Authentication_Listener_Guard_WebserviceService.php',
            'security.authentication.listener.two_factor.admin' => 'getSecurity_Authentication_Listener_TwoFactor_AdminService.php',
            'security.authentication.provider.anonymous.admin.two_factor_decorator' => 'getSecurity_Authentication_Provider_Anonymous_Admin_TwoFactorDecoratorService.php',
            'security.authentication.provider.anonymous.demo_cms_fw.two_factor_decorator' => 'getSecurity_Authentication_Provider_Anonymous_DemoCmsFw_TwoFactorDecoratorService.php',
            'security.authentication.provider.dao.admin_webdav.two_factor_decorator' => 'getSecurity_Authentication_Provider_Dao_AdminWebdav_TwoFactorDecoratorService.php',
            'security.authentication.provider.dao.demo_cms_fw.two_factor_decorator' => 'getSecurity_Authentication_Provider_Dao_DemoCmsFw_TwoFactorDecoratorService.php',
            'security.authentication.provider.guard.admin.two_factor_decorator' => 'getSecurity_Authentication_Provider_Guard_Admin_TwoFactorDecoratorService.php',
            'security.authentication.provider.guard.webservice.two_factor_decorator' => 'getSecurity_Authentication_Provider_Guard_Webservice_TwoFactorDecoratorService.php',
            'security.authentication.provider.two_factor.admin' => 'getSecurity_Authentication_Provider_TwoFactor_AdminService.php',
            'security.authentication.session_strategy.admin' => 'getSecurity_Authentication_SessionStrategy_AdminService.php',
            'security.authentication.session_strategy.admin_webdav' => 'getSecurity_Authentication_SessionStrategy_AdminWebdavService.php',
            'security.authentication.success_handler.two_factor.admin' => 'getSecurity_Authentication_SuccessHandler_TwoFactor_AdminService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.channel_listener' => 'getSecurity_ChannelListenerService.php',
            'security.command.user_password_encoder' => 'getSecurity_Command_UserPasswordEncoderService.php',
            'security.context_listener.0' => 'getSecurity_ContextListener_0Service.php',
            'security.context_listener.1' => 'getSecurity_ContextListener_1Service.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'security.csrf.token_storage' => 'getSecurity_Csrf_TokenStorageService.php',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService.php',
            'security.firewall.map.context.admin' => 'getSecurity_Firewall_Map_Context_AdminService.php',
            'security.firewall.map.context.admin_webdav' => 'getSecurity_Firewall_Map_Context_AdminWebdavService.php',
            'security.firewall.map.context.demo_cms_fw' => 'getSecurity_Firewall_Map_Context_DemoCmsFwService.php',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService.php',
            'security.firewall.map.context.webservice' => 'getSecurity_Firewall_Map_Context_WebserviceService.php',
            'security.firewall_config.two_factor.admin' => 'getSecurity_FirewallConfig_TwoFactor_AdminService.php',
            'security.http_utils' => 'getSecurity_HttpUtilsService.php',
            'security.logout.handler.csrf_token_clearing' => 'getSecurity_Logout_Handler_CsrfTokenClearingService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'security.request_matcher.atqb9bo' => 'getSecurity_RequestMatcher_Atqb9boService.php',
            'security.request_matcher.sfovvhf' => 'getSecurity_RequestMatcher_SfovvhfService.php',
            'security.request_matcher.z8xqmvs' => 'getSecurity_RequestMatcher_Z8xqmvsService.php',
            'security.request_matcher.zfhj2lw' => 'getSecurity_RequestMatcher_Zfhj2lwService.php',
            'security.user_checker' => 'getSecurity_UserCheckerService.php',
            'security.user_value_resolver' => 'getSecurity_UserValueResolverService.php',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService.php',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService.php',
            'serializer' => 'getSerializerService.php',
            'serializer.mapping.cache.symfony' => 'getSerializer_Mapping_Cache_SymfonyService.php',
            'serializer.mapping.cache_warmer' => 'getSerializer_Mapping_CacheWarmerService.php',
            'service_locator..b6w.uo' => 'getServiceLocator__B6w_UoService.php',
            'service_locator.0s1uji8' => 'getServiceLocator_0s1uji8Service.php',
            'service_locator.1c8fqkj' => 'getServiceLocator_1c8fqkjService.php',
            'service_locator.1yqhykp' => 'getServiceLocator_1yqhykpService.php',
            'service_locator.1znnpd6' => 'getServiceLocator_1znnpd6Service.php',
            'service_locator.3jz_lg1' => 'getServiceLocator_3jzLg1Service.php',
            'service_locator.4uauzey' => 'getServiceLocator_4uauzeyService.php',
            'service_locator.8qrn8um' => 'getServiceLocator_8qrn8umService.php',
            'service_locator.agtlh51' => 'getServiceLocator_Agtlh51Service.php',
            'service_locator.bwebjcr' => 'getServiceLocator_BwebjcrService.php',
            'service_locator.cbzp4i_' => 'getServiceLocator_Cbzp4iService.php',
            'service_locator.d10iogx' => 'getServiceLocator_D10iogxService.php',
            'service_locator.db9xi.y' => 'getServiceLocator_Db9xi_YService.php',
            'service_locator.dh5ddfz' => 'getServiceLocator_Dh5ddfzService.php',
            'service_locator.dprwx.u' => 'getServiceLocator_Dprwx_UService.php',
            'service_locator.gvtprlr' => 'getServiceLocator_GvtprlrService.php',
            'service_locator.i3ny_lf' => 'getServiceLocator_I3nyLfService.php',
            'service_locator.iio8lwe' => 'getServiceLocator_Iio8lweService.php',
            'service_locator.ioqbxym' => 'getServiceLocator_IoqbxymService.php',
            'service_locator.iwwuhoe' => 'getServiceLocator_IwwuhoeService.php',
            'service_locator.j8yggm3' => 'getServiceLocator_J8yggm3Service.php',
            'service_locator.j_cvd6q' => 'getServiceLocator_JCvd6qService.php',
            'service_locator.kyfk0vs' => 'getServiceLocator_Kyfk0vsService.php',
            'service_locator.oasldpk' => 'getServiceLocator_OasldpkService.php',
            'service_locator.ot.xa.b' => 'getServiceLocator_Ot_Xa_BService.php',
            'service_locator.oxznqdz' => 'getServiceLocator_OxznqdzService.php',
            'service_locator.psov4wx' => 'getServiceLocator_Psov4wxService.php',
            'service_locator.pvfxjaz' => 'getServiceLocator_PvfxjazService.php',
            'service_locator.qpxe2g9' => 'getServiceLocator_Qpxe2g9Service.php',
            'service_locator.qyiysja' => 'getServiceLocator_QyiysjaService.php',
            'service_locator.se7cmaa' => 'getServiceLocator_Se7cmaaService.php',
            'service_locator.xk2bh7e' => 'getServiceLocator_Xk2bh7eService.php',
            'service_locator.yh0z7ol' => 'getServiceLocator_Yh0z7olService.php',
            'service_locator.yqmz4h5' => 'getServiceLocator_Yqmz4h5Service.php',
            'service_locator.zz.snxj' => 'getServiceLocator_Zz_SnxjService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'session' => 'getSessionService.php',
            'session.handler' => 'getSession_HandlerService.php',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService.php',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService.php',
            'session.storage.native' => 'getSession_Storage_NativeService.php',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService.php',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService.php',
            'swiftmailer.mailer.newsletter_mailer' => 'getSwiftmailer_Mailer_NewsletterMailerService.php',
            'swiftmailer.mailer.newsletter_mailer.transport' => 'getSwiftmailer_Mailer_NewsletterMailer_TransportService.php',
            'swiftmailer.mailer.pimcore_mailer' => 'getSwiftmailer_Mailer_PimcoreMailerService.php',
            'swiftmailer.mailer.pimcore_mailer.transport' => 'getSwiftmailer_Mailer_PimcoreMailer_TransportService.php',
            'swiftmailer.plugin.redirecting' => 'getSwiftmailer_Plugin_RedirectingService.php',
            'swiftmailer.transport.mailinvoker' => 'getSwiftmailer_Transport_MailinvokerService.php',
            'templating.cache_warmer.template_paths' => 'getTemplating_CacheWarmer_TemplatePathsService.php',
            'templating.filename_parser' => 'getTemplating_FilenameParserService.php',
            'templating.finder' => 'getTemplating_FinderService.php',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService.php',
            'templating.helper.code' => 'getTemplating_Helper_CodeService.php',
            'templating.helper.form' => 'getTemplating_Helper_FormService.php',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService.php',
            'templating.helper.request' => 'getTemplating_Helper_RequestService.php',
            'templating.helper.router' => 'getTemplating_Helper_RouterService.php',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService.php',
            'templating.helper.session' => 'getTemplating_Helper_SessionService.php',
            'templating.helper.slots' => 'getTemplating_Helper_SlotsService.php',
            'templating.helper.stopwatch' => 'getTemplating_Helper_StopwatchService.php',
            'templating.helper.translator' => 'getTemplating_Helper_TranslatorService.php',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService.php',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService.php',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService.php',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService.php',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService.php',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService.php',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService.php',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService.php',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService.php',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService.php',
            'translation.extractor' => 'getTranslation_ExtractorService.php',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService.php',
            'translation.loader' => 'getTranslation_LoaderService.php',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService.php',
            'translation.loader.dat' => 'getTranslation_Loader_DatService.php',
            'translation.loader.ini' => 'getTranslation_Loader_IniService.php',
            'translation.loader.json' => 'getTranslation_Loader_JsonService.php',
            'translation.loader.mo' => 'getTranslation_Loader_MoService.php',
            'translation.loader.php' => 'getTranslation_Loader_PhpService.php',
            'translation.loader.po' => 'getTranslation_Loader_PoService.php',
            'translation.loader.qt' => 'getTranslation_Loader_QtService.php',
            'translation.loader.res' => 'getTranslation_Loader_ResService.php',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService.php',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService.php',
            'translation.reader' => 'getTranslation_ReaderService.php',
            'translation.warmer' => 'getTranslation_WarmerService.php',
            'translation.writer' => 'getTranslation_WriterService.php',
            'twig.cache_warmer' => 'getTwig_CacheWarmerService.php',
            'twig.command.debug' => 'getTwig_Command_DebugService.php',
            'twig.command.lint' => 'getTwig_Command_LintService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService.php',
            'twig.form.renderer' => 'getTwig_Form_RendererService.php',
            'twig.profile' => 'getTwig_ProfileService.php',
            'twig.runtime.httpkernel' => 'getTwig_Runtime_HttpkernelService.php',
            'twig.template_cache_warmer' => 'getTwig_TemplateCacheWarmerService.php',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService.php',
            'uri_signer' => 'getUriSignerService.php',
            'validator' => 'getValidatorService.php',
            'validator.builder' => 'getValidator_BuilderService.php',
            'validator.email' => 'getValidator_EmailService.php',
            'validator.expression' => 'getValidator_ExpressionService.php',
            'validator.mapping.cache_warmer' => 'getValidator_Mapping_CacheWarmerService.php',
        );
        $this->privates = array(
            'Pimcore\\Cache\\Core\\CoreHandlerInterface' => true,
            'Pimcore\\Cache\\Pool\\PimcoreCacheItemPoolInterface' => true,
            'Pimcore\\Document\\Tag\\NamingStrategy\\NamingStrategyInterface' => true,
            'Pimcore\\Document\\Tag\\TagHandlerInterface' => true,
            'Pimcore\\Extension\\Document\\Areabrick\\AreabrickManagerInterface' => true,
            'Pimcore\\Model\\FactoryInterface' => true,
            'pimcore.app_logger' => true,
            'pimcore.app_logger.default' => true,
            'pimcore.area.brick_manager' => true,
            'scheb_two_factor.backup_code_manager' => true,
            'scheb_two_factor.persister' => true,
            'scheb_two_factor.trusted_device_manager' => true,
            'security.authentication.session_strategy.demo_cms_fw' => true,
            'security.authentication.session_strategy.webservice' => true,
            'session.storage' => true,
            'swiftmailer.mailer' => true,
            'swiftmailer.transport' => true,
            'AppBundle\\Document\\Areabrick\\Blockquote' => true,
            'AppBundle\\EventListener\\TestListener' => true,
            'AppBundle\\Sitemaps\\NewsGenerator' => true,
            'Pimcore\\Analytics\\Google\\Config\\ConfigProvider' => true,
            'Pimcore\\Analytics\\Google\\Config\\SiteConfigProvider' => true,
            'Pimcore\\Analytics\\Google\\Tracker' => true,
            'Pimcore\\Analytics\\Piwik\\Api\\ApiClient' => true,
            'Pimcore\\Analytics\\Piwik\\Api\\SitesManager' => true,
            'Pimcore\\Analytics\\Piwik\\Config\\Config' => true,
            'Pimcore\\Analytics\\Piwik\\Config\\ConfigProvider' => true,
            'Pimcore\\Analytics\\Piwik\\EventListener\\CacheListener' => true,
            'Pimcore\\Analytics\\Piwik\\EventListener\\IndexSettingsListener' => true,
            'Pimcore\\Analytics\\Piwik\\EventListener\\TrackingCodeListener' => true,
            'Pimcore\\Analytics\\Piwik\\ReportBroker' => true,
            'Pimcore\\Analytics\\Piwik\\WidgetBroker' => true,
            'Pimcore\\Analytics\\SiteId\\SiteIdProvider' => true,
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\AdminAuthenticationDoubleCheckListener' => true,
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\AdminExceptionListener' => true,
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\BruteforceProtectionListener' => true,
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\EnablePreviewTimeSliderListener' => true,
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\GridConfigListener' => true,
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\HttpCacheListener' => true,
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\ImportConfigListener' => true,
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\TwoFactorListener' => true,
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\UsageStatisticsListener' => true,
            'Pimcore\\Bundle\\AdminBundle\\EventListener\\UserPerspectiveListener' => true,
            'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\Assets' => true,
            'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\DataObjects' => true,
            'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\Manager' => true,
            'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\PimcoreUsers' => true,
            'Pimcore\\Bundle\\AdminBundle\\GDPR\\DataProvider\\SentMail' => true,
            'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserChecker' => true,
            'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserLoader' => true,
            'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserProvider' => true,
            'Pimcore\\Bundle\\AdminBundle\\Session\\AdminSessionBagConfigurator' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\DisableCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\EnableCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\Helper\\PostStateChange' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\InstallCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\ListCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\UninstallCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\UpdateCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\CacheClearCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\CacheWarmingCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\ClassesRebuildCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\Composer\\NormalizeConfigCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\Definition\\Import\\ClassCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\Definition\\Import\\FieldCollectionCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\Definition\\Import\\ObjectBrickCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\DeleteClassificationStoreCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\Document\\GeneratePagePreviews' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\Document\\MigrateTagNamingStrategyCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\EmailLogsCleanupCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\InternalModelDaoMappingGeneratorCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\InternalNewsletterDocumentSendCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\InternalUnicodeCldrLanguageTerritoryGeneratorCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\InternalUpdateProcessorCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\InternalVideoConverterCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\LowQualityImagePreviewCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\MaintenanceCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\MysqlToolsCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\ResetPasswordCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\RunScriptCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\RunUpdateScriptCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\SearchBackendReindexCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\Targeting\\MigrateElementNamesCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\ThumbnailsImageCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\ThumbnailsOptimizeImagesCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\ThumbnailsVideoCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\UpdateCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\Command\\Web2PrintPdfCreationCommand' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\ControllerViewModelListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\ElementTagsListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\EventedControllerListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\BlockStateListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\ContentTemplateListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\DocumentFallbackListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\DocumentMetaDataListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\EditmodeListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\ElementListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\FrontendRoutingListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\GoogleSearchConsoleVerificationListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\HardlinkCanonicalListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\InternalWysiwygHtmlAttributeFilterListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\LocaleListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\OutputTimestampListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\MaintenancePageListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\PimcoreContextListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\PimcoreHeaderListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\ResponseExceptionListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\ResponseHeaderListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\ResponseStackListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\SearchBackendListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\TemplateControllerListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\TranslationDebugListener' => true,
            'Pimcore\\Bundle\\CoreBundle\\EventListener\\UUIDListener' => true,
            'Pimcore\\Composer\\Config\\Normalizer\\EndroidQrCodeRenamedPackageNormalizer' => true,
            'Pimcore\\Composer\\Config\\Normalizer\\Php7PlatformNormalizer' => true,
            'Pimcore\\Config\\ReportConfigWriter' => true,
            'Pimcore\\Controller\\ArgumentValueResolver\\DocumentValueResolver' => true,
            'Pimcore\\Controller\\ArgumentValueResolver\\EditmodeValueResolver' => true,
            'Pimcore\\Controller\\ArgumentValueResolver\\TemplateVarsValueResolver' => true,
            'Pimcore\\Controller\\ArgumentValueResolver\\ViewModelValueResolver' => true,
            'Pimcore\\Controller\\ArgumentValueResolver\\WebsiteConfigValueResolver' => true,
            'Pimcore\\Controller\\Config\\ConfigNormalizer' => true,
            'Pimcore\\DataObject\\Import\\Resolver\\Code' => true,
            'Pimcore\\DataObject\\Import\\Resolver\\Filename' => true,
            'Pimcore\\DataObject\\Import\\Resolver\\Fullpath' => true,
            'Pimcore\\DataObject\\Import\\Resolver\\GetBy' => true,
            'Pimcore\\DataObject\\Import\\Resolver\\Id' => true,
            'Pimcore\\DataObject\\Import\\Service' => true,
            'Pimcore\\Document\\Renderer\\DocumentRenderer' => true,
            'Pimcore\\Document\\Tag\\Block\\BlockStateStack' => true,
            'Pimcore\\Document\\Tag\\DelegatingTagHandler' => true,
            'Pimcore\\Extension\\Document\\Areabrick\\AreabrickManager' => true,
            'Pimcore\\HttpKernel\\CacheWarmer\\MkdirCacheWarmer' => true,
            'Pimcore\\Http\\ResponseStack' => true,
            'Pimcore\\Http\\Response\\CodeInjector' => true,
            'Pimcore\\Localization\\IntlFormatter' => true,
            'Pimcore\\Localization\\LocaleService' => true,
            'Pimcore\\Log\\ApplicationLogger' => true,
            'Pimcore\\Log\\Handler\\ApplicationLoggerDb' => true,
            'Pimcore\\Model\\Factory' => true,
            'Pimcore\\Navigation\\Renderer\\Breadcrumbs' => true,
            'Pimcore\\Navigation\\Renderer\\Menu' => true,
            'Pimcore\\Routing\\Dynamic\\DocumentRouteHandler' => true,
            'Pimcore\\Routing\\Redirect\\Csv' => true,
            'Pimcore\\Sitemap\\Document\\DocumentTreeGenerator' => true,
            'Pimcore\\Sitemap\\Element\\Filter\\PropertiesFilter' => true,
            'Pimcore\\Sitemap\\Element\\Filter\\PublishedFilter' => true,
            'Pimcore\\Sitemap\\Element\\Processor\\ModificationDateProcessor' => true,
            'Pimcore\\Sitemap\\Element\\Processor\\PropertiesProcessor' => true,
            'Pimcore\\Sitemap\\EventListener\\SitemapGeneratorListener' => true,
            'Pimcore\\Sitemap\\UrlGenerator' => true,
            'Pimcore\\Targeting\\ActionHandler\\AssignTargetGroup' => true,
            'Pimcore\\Targeting\\ActionHandler\\CodeSnippet' => true,
            'Pimcore\\Targeting\\ActionHandler\\DelegatingActionHandler' => true,
            'Pimcore\\Targeting\\ActionHandler\\Redirect' => true,
            'Pimcore\\Targeting\\ConditionMatcher' => true,
            'Pimcore\\Targeting\\DataLoader' => true,
            'Pimcore\\Targeting\\DataProvider\\Device' => true,
            'Pimcore\\Targeting\\DataProvider\\GeoIp' => true,
            'Pimcore\\Targeting\\DataProvider\\GeoLocation' => true,
            'Pimcore\\Targeting\\DataProvider\\Piwik' => true,
            'Pimcore\\Targeting\\DataProvider\\TargetingStorage' => true,
            'Pimcore\\Targeting\\DataProvider\\VisitedPagesCounter' => true,
            'Pimcore\\Targeting\\Debug\\OverrideHandler' => true,
            'Pimcore\\Targeting\\EventListener\\DocumentTargetGroupListener' => true,
            'Pimcore\\Targeting\\EventListener\\FullPageCacheCookieCleanupListener' => true,
            'Pimcore\\Targeting\\EventListener\\MaintenanceListener' => true,
            'Pimcore\\Targeting\\EventListener\\PiwikVisitorIdListener' => true,
            'Pimcore\\Targeting\\EventListener\\TargetingListener' => true,
            'Pimcore\\Targeting\\EventListener\\ToolbarListener' => true,
            'Pimcore\\Targeting\\EventListener\\VisitedPagesCountListener' => true,
            'Pimcore\\Targeting\\Service\\VisitedPagesCounter' => true,
            'Pimcore\\Targeting\\Storage\\TargetingStorageInterface' => true,
            'Pimcore\\Targeting\\VisitorInfoStorage' => true,
            'Pimcore\\Templating\\Helper\\Action' => true,
            'Pimcore\\Templating\\Helper\\Cache' => true,
            'Pimcore\\Templating\\Helper\\Device' => true,
            'Pimcore\\Templating\\Helper\\GetAllParams' => true,
            'Pimcore\\Templating\\Helper\\GetParam' => true,
            'Pimcore\\Templating\\Helper\\Glossary' => true,
            'Pimcore\\Templating\\Helper\\HeadLink' => true,
            'Pimcore\\Templating\\Helper\\HeadMeta' => true,
            'Pimcore\\Templating\\Helper\\HeadScript' => true,
            'Pimcore\\Templating\\Helper\\HeadStyle' => true,
            'Pimcore\\Templating\\Helper\\HeadTitle' => true,
            'Pimcore\\Templating\\Helper\\Inc' => true,
            'Pimcore\\Templating\\Helper\\InlineScript' => true,
            'Pimcore\\Templating\\Helper\\Navigation' => true,
            'Pimcore\\Templating\\Helper\\PimcoreUrl' => true,
            'Pimcore\\Templating\\Helper\\Placeholder' => true,
            'Pimcore\\Templating\\Helper\\WebLink' => true,
            'Pimcore\\Templating\\Helper\\WebsiteConfig' => true,
            'Pimcore\\Translation\\Translator' => true,
            'annotation_reader' => true,
            'annotations.cache' => true,
            'annotations.cache_warmer' => true,
            'annotations.reader' => true,
            'app.area.brick.embed' => true,
            'app.area.brick.featurette' => true,
            'app.area.brick.gallery_carousel' => true,
            'app.area.brick.gallery_folder' => true,
            'app.area.brick.gallery_single_images' => true,
            'app.area.brick.headlines' => true,
            'app.area.brick.horizontal_line' => true,
            'app.area.brick.icon_teaser_row' => true,
            'app.area.brick.image' => true,
            'app.area.brick.image_hotspot_marker' => true,
            'app.area.brick.pdf' => true,
            'app.area.brick.standard_teaser_row' => true,
            'app.area.brick.tabbed_slider_text' => true,
            'app.area.brick.text_accordion' => true,
            'app.area.brick.time_slider_featurette' => true,
            'app.area.brick.video' => true,
            'app.area.brick.wysiwyg' => true,
            'app.area.brick.wysiwyg_with_images' => true,
            'app.security.user_provider' => true,
            'argument_resolver.default' => true,
            'argument_resolver.request' => true,
            'argument_resolver.request_attribute' => true,
            'argument_resolver.service' => true,
            'argument_resolver.session' => true,
            'argument_resolver.variadic' => true,
            'assets.context' => true,
            'assets.packages' => true,
            'cache.annotations' => true,
            'cache.default_clearer' => true,
            'cache.property_access' => true,
            'cache.serializer' => true,
            'cache.validator' => true,
            'cmf_routing.dynamic_router' => true,
            'cmf_routing.enhancer.route_content' => true,
            'cmf_routing.final_matcher' => true,
            'cmf_routing.generator' => true,
            'cmf_routing.nested_matcher' => true,
            'cmf_routing.persistence.doctrine.route_condition_metadata_listener' => true,
            'cmf_routing.redirect_controller' => true,
            'cmf_routing.route_type_form_type' => true,
            'cmf_routing.router' => true,
            'cmf_routing.validator.route_defaults' => true,
            'config_cache_factory' => true,
            'console.command.about' => true,
            'console.command.assets_install' => true,
            'console.command.cache_clear' => true,
            'console.command.cache_pool_clear' => true,
            'console.command.cache_pool_prune' => true,
            'console.command.cache_warmup' => true,
            'console.command.config_debug' => true,
            'console.command.config_dump_reference' => true,
            'console.command.container_debug' => true,
            'console.command.debug_autowiring' => true,
            'console.command.event_dispatcher_debug' => true,
            'console.command.form_debug' => true,
            'console.command.router_debug' => true,
            'console.command.router_match' => true,
            'console.command.translation_debug' => true,
            'console.command.translation_update' => true,
            'console.command.xliff_lint' => true,
            'console.command.yaml_lint' => true,
            'console.error_listener' => true,
            'controller_name_converter' => true,
            'controller_resolver' => true,
            'debug.debug_handlers_listener' => true,
            'debug.file_link_formatter' => true,
            'debug.stopwatch' => true,
            'deprecated.form.registry' => true,
            'deprecated.form.registry.csrf' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.generate_entities_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine_cache.contains_command' => true,
            'doctrine_cache.delete_command' => true,
            'doctrine_cache.flush_command' => true,
            'doctrine_cache.stats_command' => true,
            'file_locator' => true,
            'form.registry' => true,
            'form.resolved_type_factory' => true,
            'form.server_params' => true,
            'form.type.choice' => true,
            'form.type.form' => true,
            'form.type_extension.csrf' => true,
            'form.type_extension.form.http_foundation' => true,
            'form.type_extension.form.validator' => true,
            'form.type_extension.repeated.validator' => true,
            'form.type_extension.submit.validator' => true,
            'form.type_extension.upload.validator' => true,
            'form.type_guesser.validator' => true,
            'fragment.handler' => true,
            'fragment.renderer.inline' => true,
            'kernel.class_cache.cache_warmer' => true,
            'locale_listener' => true,
            'logger' => true,
            'monolog.handler.console' => true,
            'monolog.handler.main' => true,
            'monolog.handler.nested' => true,
            'monolog.handler.null_internal' => true,
            'monolog.processor.psr_log_message' => true,
            'pimcore.cache.core.pool.array' => true,
            'pimcore.cache.core.pool.doctrine' => true,
            'pimcore.cache.core.pool.filesystem' => true,
            'pimcore.cache.core.symfony_adapter.array' => true,
            'pimcore.cache.core.symfony_adapter.filesystem' => true,
            'pimcore.cache.core.write_lock' => true,
            'pimcore.custom_report.adapter.factory.analytics' => true,
            'pimcore.custom_report.adapter.factory.sql' => true,
            'pimcore.data_object.grid_column_config.operator.factory.anonymizer' => true,
            'pimcore.data_object.grid_column_config.operator.factory.any_getter' => true,
            'pimcore.data_object.grid_column_config.operator.factory.arithmetic' => true,
            'pimcore.data_object.grid_column_config.operator.factory.asset_metadata_getter' => true,
            'pimcore.data_object.grid_column_config.operator.factory.base64' => true,
            'pimcore.data_object.grid_column_config.operator.factory.boolean' => true,
            'pimcore.data_object.grid_column_config.operator.factory.boolean_formatter' => true,
            'pimcore.data_object.grid_column_config.operator.factory.case_converter' => true,
            'pimcore.data_object.grid_column_config.operator.factory.char_counter' => true,
            'pimcore.data_object.grid_column_config.operator.factory.concatenator' => true,
            'pimcore.data_object.grid_column_config.operator.factory.date_formatter' => true,
            'pimcore.data_object.grid_column_config.operator.factory.element_counter' => true,
            'pimcore.data_object.grid_column_config.operator.factory.field_collection_getter' => true,
            'pimcore.data_object.grid_column_config.operator.factory.is_equal' => true,
            'pimcore.data_object.grid_column_config.operator.factory.json' => true,
            'pimcore.data_object.grid_column_config.operator.factory.lf_expander' => true,
            'pimcore.data_object.grid_column_config.operator.factory.locale_switcher' => true,
            'pimcore.data_object.grid_column_config.operator.factory.merge' => true,
            'pimcore.data_object.grid_column_config.operator.factory.object_brick_getter' => true,
            'pimcore.data_object.grid_column_config.operator.factory.object_field_getter' => true,
            'pimcore.data_object.grid_column_config.operator.factory.php' => true,
            'pimcore.data_object.grid_column_config.operator.factory.php_code' => true,
            'pimcore.data_object.grid_column_config.operator.factory.required_by' => true,
            'pimcore.data_object.grid_column_config.operator.factory.string_contains' => true,
            'pimcore.data_object.grid_column_config.operator.factory.string_replace' => true,
            'pimcore.data_object.grid_column_config.operator.factory.substring' => true,
            'pimcore.data_object.grid_column_config.operator.factory.text' => true,
            'pimcore.data_object.grid_column_config.operator.factory.translate_value' => true,
            'pimcore.data_object.grid_column_config.operator.factory.trimmer' => true,
            'pimcore.data_object.grid_column_config.value.factory.date' => true,
            'pimcore.data_object.grid_column_config.value.factory.datetime' => true,
            'pimcore.data_object.grid_column_config.value.factory.default' => true,
            'pimcore.data_object.grid_column_config.value.factory.href' => true,
            'pimcore.data_object.grid_column_config.value.factory.objects' => true,
            'pimcore.data_object.import.operator.factory.base64' => true,
            'pimcore.data_object.import.operator.factory.iterator' => true,
            'pimcore.data_object.import.operator.factory.locale_switcher' => true,
            'pimcore.data_object.import.operator.factory.object_brick_setter' => true,
            'pimcore.data_object.import.operator.factory.php_code' => true,
            'pimcore.data_object.import.operator.factory.published' => true,
            'pimcore.data_object.import.operator.factory.splitter' => true,
            'pimcore.data_object.import.operator.factory.unserialize' => true,
            'pimcore.data_object.import.value.factory.default' => true,
            'pimcore.document.newsletter.factory.csv' => true,
            'pimcore.document.newsletter.factory.default' => true,
            'pimcore.document.newsletter.factory.report' => true,
            'pimcore.document.tag.naming.migration.strategy.analyze' => true,
            'pimcore.document.tag.naming.migration.strategy.render' => true,
            'pimcore.document.tag.naming.strategy.legacy' => true,
            'pimcore.document.tag.naming.strategy.nested' => true,
            'pimcore.http_client' => true,
            'pimcore.templating.view_helper.translate' => true,
            'pimcore.templating.view_helper.translate_admin' => true,
            'pimcore_admin.security.password_encoder_factory' => true,
            'presta_sitemap.dumper_default' => true,
            'presta_sitemap.eventlistener.route_annotation' => true,
            'presta_sitemap.generator_default' => true,
            'property_accessor' => true,
            'resolve_controller_name_subscriber' => true,
            'response_listener' => true,
            'router.cache_warmer' => true,
            'router_listener' => true,
            'scheb_two_factor.authenticated_token_handler' => true,
            'scheb_two_factor.authentication_context_factory' => true,
            'scheb_two_factor.default_backup_code_manager' => true,
            'scheb_two_factor.default_trusted_device_manager' => true,
            'scheb_two_factor.ip_whitelist_handler' => true,
            'scheb_two_factor.null_backup_code_manager' => true,
            'scheb_two_factor.null_trusted_device_manager' => true,
            'scheb_two_factor.persister.doctrine' => true,
            'scheb_two_factor.persister_factory.doctrine' => true,
            'scheb_two_factor.provider_handler' => true,
            'scheb_two_factor.provider_registry' => true,
            'scheb_two_factor.security.access.authenticated_voter' => true,
            'scheb_two_factor.security.authentication.trust_resolver' => true,
            'scheb_two_factor.security.google' => true,
            'scheb_two_factor.security.google.form_renderer' => true,
            'scheb_two_factor.security.google.provider' => true,
            'scheb_two_factor.trusted_cookie_response_listener' => true,
            'scheb_two_factor.trusted_device_handler' => true,
            'scheb_two_factor.trusted_jwt_encoder' => true,
            'scheb_two_factor.trusted_token_storage' => true,
            'security.access.authenticated_voter' => true,
            'security.access.decision_manager' => true,
            'security.access.expression_voter' => true,
            'security.access.role_hierarchy_voter' => true,
            'security.access_listener' => true,
            'security.access_map' => true,
            'security.authentication.basic_entry_point.admin_webdav' => true,
            'security.authentication.failure_handler.two_factor.admin' => true,
            'security.authentication.guard_handler' => true,
            'security.authentication.listener.anonymous.admin' => true,
            'security.authentication.listener.anonymous.demo_cms_fw' => true,
            'security.authentication.listener.basic.admin_webdav' => true,
            'security.authentication.listener.form.demo_cms_fw' => true,
            'security.authentication.listener.guard.admin' => true,
            'security.authentication.listener.guard.webservice' => true,
            'security.authentication.listener.two_factor.admin' => true,
            'security.authentication.manager' => true,
            'security.authentication.provider.anonymous.admin.two_factor_decorator' => true,
            'security.authentication.provider.anonymous.demo_cms_fw.two_factor_decorator' => true,
            'security.authentication.provider.dao.admin_webdav.two_factor_decorator' => true,
            'security.authentication.provider.dao.demo_cms_fw.two_factor_decorator' => true,
            'security.authentication.provider.guard.admin.two_factor_decorator' => true,
            'security.authentication.provider.guard.webservice.two_factor_decorator' => true,
            'security.authentication.provider.two_factor.admin' => true,
            'security.authentication.session_strategy.admin' => true,
            'security.authentication.session_strategy.admin_webdav' => true,
            'security.authentication.success_handler.two_factor.admin' => true,
            'security.channel_listener' => true,
            'security.command.user_password_encoder' => true,
            'security.context_listener.0' => true,
            'security.context_listener.1' => true,
            'security.csrf.token_storage' => true,
            'security.encoder_factory' => true,
            'security.firewall' => true,
            'security.firewall.map' => true,
            'security.firewall.map.context.admin' => true,
            'security.firewall.map.context.admin_webdav' => true,
            'security.firewall.map.context.demo_cms_fw' => true,
            'security.firewall.map.context.dev' => true,
            'security.firewall.map.context.webservice' => true,
            'security.firewall_config.two_factor.admin' => true,
            'security.http_utils' => true,
            'security.logout.handler.csrf_token_clearing' => true,
            'security.logout_url_generator' => true,
            'security.rememberme.response_listener' => true,
            'security.request_matcher.atqb9bo' => true,
            'security.request_matcher.sfovvhf' => true,
            'security.request_matcher.z8xqmvs' => true,
            'security.request_matcher.zfhj2lw' => true,
            'security.role_hierarchy' => true,
            'security.user_checker' => true,
            'security.user_value_resolver' => true,
            'security.validator.user_password' => true,
            'sensio_framework_extra.cache.listener' => true,
            'sensio_framework_extra.controller.listener' => true,
            'sensio_framework_extra.converter.datetime' => true,
            'sensio_framework_extra.converter.doctrine.orm' => true,
            'sensio_framework_extra.converter.listener' => true,
            'sensio_framework_extra.converter.manager' => true,
            'sensio_framework_extra.security.listener' => true,
            'sensio_framework_extra.view.listener' => true,
            'serializer.mapping.cache.symfony' => true,
            'serializer.mapping.cache_warmer' => true,
            'service_locator..b6w.uo' => true,
            'service_locator.0s1uji8' => true,
            'service_locator.1c8fqkj' => true,
            'service_locator.1yqhykp' => true,
            'service_locator.1znnpd6' => true,
            'service_locator.3jz_lg1' => true,
            'service_locator.4uauzey' => true,
            'service_locator.8qrn8um' => true,
            'service_locator.agtlh51' => true,
            'service_locator.bwebjcr' => true,
            'service_locator.cbzp4i_' => true,
            'service_locator.d10iogx' => true,
            'service_locator.db9xi.y' => true,
            'service_locator.dh5ddfz' => true,
            'service_locator.dprwx.u' => true,
            'service_locator.gvtprlr' => true,
            'service_locator.i3ny_lf' => true,
            'service_locator.iio8lwe' => true,
            'service_locator.ioqbxym' => true,
            'service_locator.iwwuhoe' => true,
            'service_locator.j8yggm3' => true,
            'service_locator.j_cvd6q' => true,
            'service_locator.kyfk0vs' => true,
            'service_locator.oasldpk' => true,
            'service_locator.ot.xa.b' => true,
            'service_locator.oxznqdz' => true,
            'service_locator.psov4wx' => true,
            'service_locator.pvfxjaz' => true,
            'service_locator.qpxe2g9' => true,
            'service_locator.qyiysja' => true,
            'service_locator.se7cmaa' => true,
            'service_locator.xk2bh7e' => true,
            'service_locator.yh0z7ol' => true,
            'service_locator.yqmz4h5' => true,
            'service_locator.zz.snxj' => true,
            'session.handler' => true,
            'session.save_listener' => true,
            'session.storage.filesystem' => true,
            'session.storage.metadata_bag' => true,
            'session.storage.native' => true,
            'session.storage.php_bridge' => true,
            'session_listener' => true,
            'streamed_response_listener' => true,
            'swiftmailer.email_sender.listener' => true,
            'swiftmailer.plugin.redirecting' => true,
            'swiftmailer.transport.mailinvoker' => true,
            'templating.cache_warmer.template_paths' => true,
            'templating.filename_parser' => true,
            'templating.finder' => true,
            'templating.globals' => true,
            'templating.helper.actions' => true,
            'templating.helper.assets' => true,
            'templating.helper.code' => true,
            'templating.helper.form' => true,
            'templating.helper.logout_url' => true,
            'templating.helper.request' => true,
            'templating.helper.router' => true,
            'templating.helper.security' => true,
            'templating.helper.session' => true,
            'templating.helper.slots' => true,
            'templating.helper.stopwatch' => true,
            'templating.helper.translator' => true,
            'templating.locator' => true,
            'templating.name_parser' => true,
            'translation.dumper.csv' => true,
            'translation.dumper.ini' => true,
            'translation.dumper.json' => true,
            'translation.dumper.mo' => true,
            'translation.dumper.php' => true,
            'translation.dumper.po' => true,
            'translation.dumper.qt' => true,
            'translation.dumper.res' => true,
            'translation.dumper.xliff' => true,
            'translation.dumper.yml' => true,
            'translation.extractor' => true,
            'translation.extractor.php' => true,
            'translation.loader' => true,
            'translation.loader.csv' => true,
            'translation.loader.dat' => true,
            'translation.loader.ini' => true,
            'translation.loader.json' => true,
            'translation.loader.mo' => true,
            'translation.loader.php' => true,
            'translation.loader.po' => true,
            'translation.loader.qt' => true,
            'translation.loader.res' => true,
            'translation.loader.xliff' => true,
            'translation.loader.yml' => true,
            'translation.reader' => true,
            'translation.warmer' => true,
            'translation.writer' => true,
            'translator.default' => true,
            'translator_listener' => true,
            'twig.cache_warmer' => true,
            'twig.command.debug' => true,
            'twig.command.lint' => true,
            'twig.exception_listener' => true,
            'twig.extension.weblink' => true,
            'twig.form.renderer' => true,
            'twig.loader' => true,
            'twig.profile' => true,
            'twig.runtime.httpkernel' => true,
            'twig.template_cache_warmer' => true,
            'twig.translation.extractor' => true,
            'uri_signer' => true,
            'validate_request_listener' => true,
            'validator.builder' => true,
            'validator.email' => true,
            'validator.expression' => true,
            'validator.mapping.cache_warmer' => true,
            'web_link.add_link_header_listener' => true,
        );
        $this->aliases = array(
            'Pimcore\\Cache\\Core\\CoreHandlerInterface' => 'pimcore.cache.core.handler',
            'Pimcore\\Cache\\Pool\\PimcoreCacheItemPoolInterface' => 'pimcore.cache.core.pool.doctrine',
            'Pimcore\\Db\\Connection' => 'doctrine.dbal.default_connection',
            'Pimcore\\Document\\Tag\\NamingStrategy\\NamingStrategyInterface' => 'pimcore.document.tag.naming.strategy.nested',
            'Pimcore\\Document\\Tag\\TagHandlerInterface' => 'Pimcore\\Document\\Tag\\DelegatingTagHandler',
            'Pimcore\\Extension\\Document\\Areabrick\\AreabrickManagerInterface' => 'Pimcore\\Extension\\Document\\Areabrick\\AreabrickManager',
            'Pimcore\\Kernel' => 'kernel',
            'Pimcore\\Localization\\Locale' => 'Pimcore\\Localization\\LocaleService',
            'Pimcore\\Model\\FactoryInterface' => 'Pimcore\\Model\\Factory',
            'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\Google\\GoogleAuthenticator' => 'scheb_two_factor.security.google_authenticator',
            'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Provider\\Google\\GoogleAuthenticatorInterface' => 'scheb_two_factor.security.google_authenticator',
            'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\TwoFactorFirewallContext' => 'scheb_two_factor.firewall_context',
            'cache.app_clearer' => 'cache.default_clearer',
            'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'doctrine_cache.contains_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'doctrine_cache.delete_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'doctrine_cache.flush_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'doctrine_cache.stats_command',
            'console.command.pimcore_bundle_corebundle_command_bundle_disablecommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\DisableCommand',
            'console.command.pimcore_bundle_corebundle_command_bundle_enablecommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\EnableCommand',
            'console.command.pimcore_bundle_corebundle_command_bundle_installcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\InstallCommand',
            'console.command.pimcore_bundle_corebundle_command_bundle_listcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\ListCommand',
            'console.command.pimcore_bundle_corebundle_command_bundle_uninstallcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\UninstallCommand',
            'console.command.pimcore_bundle_corebundle_command_bundle_updatecommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Bundle\\UpdateCommand',
            'console.command.pimcore_bundle_corebundle_command_cacheclearcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\CacheClearCommand',
            'console.command.pimcore_bundle_corebundle_command_cachewarmingcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\CacheWarmingCommand',
            'console.command.pimcore_bundle_corebundle_command_classesrebuildcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\ClassesRebuildCommand',
            'console.command.pimcore_bundle_corebundle_command_composer_normalizeconfigcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Composer\\NormalizeConfigCommand',
            'console.command.pimcore_bundle_corebundle_command_definition_import_classcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Definition\\Import\\ClassCommand',
            'console.command.pimcore_bundle_corebundle_command_definition_import_fieldcollectioncommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Definition\\Import\\FieldCollectionCommand',
            'console.command.pimcore_bundle_corebundle_command_definition_import_objectbrickcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Definition\\Import\\ObjectBrickCommand',
            'console.command.pimcore_bundle_corebundle_command_deleteclassificationstorecommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\DeleteClassificationStoreCommand',
            'console.command.pimcore_bundle_corebundle_command_document_generatepagepreviews' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Document\\GeneratePagePreviews',
            'console.command.pimcore_bundle_corebundle_command_document_migratetagnamingstrategycommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Document\\MigrateTagNamingStrategyCommand',
            'console.command.pimcore_bundle_corebundle_command_emaillogscleanupcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\EmailLogsCleanupCommand',
            'console.command.pimcore_bundle_corebundle_command_internalmodeldaomappinggeneratorcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\InternalModelDaoMappingGeneratorCommand',
            'console.command.pimcore_bundle_corebundle_command_internalnewsletterdocumentsendcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\InternalNewsletterDocumentSendCommand',
            'console.command.pimcore_bundle_corebundle_command_internalunicodecldrlanguageterritorygeneratorcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\InternalUnicodeCldrLanguageTerritoryGeneratorCommand',
            'console.command.pimcore_bundle_corebundle_command_internalupdateprocessorcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\InternalUpdateProcessorCommand',
            'console.command.pimcore_bundle_corebundle_command_internalvideoconvertercommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\InternalVideoConverterCommand',
            'console.command.pimcore_bundle_corebundle_command_lowqualityimagepreviewcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\LowQualityImagePreviewCommand',
            'console.command.pimcore_bundle_corebundle_command_maintenancecommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\MaintenanceCommand',
            'console.command.pimcore_bundle_corebundle_command_mysqltoolscommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\MysqlToolsCommand',
            'console.command.pimcore_bundle_corebundle_command_resetpasswordcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\ResetPasswordCommand',
            'console.command.pimcore_bundle_corebundle_command_runscriptcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\RunScriptCommand',
            'console.command.pimcore_bundle_corebundle_command_runupdatescriptcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\RunUpdateScriptCommand',
            'console.command.pimcore_bundle_corebundle_command_searchbackendreindexcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\SearchBackendReindexCommand',
            'console.command.pimcore_bundle_corebundle_command_targeting_migrateelementnamescommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Targeting\\MigrateElementNamesCommand',
            'console.command.pimcore_bundle_corebundle_command_thumbnailsimagecommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\ThumbnailsImageCommand',
            'console.command.pimcore_bundle_corebundle_command_thumbnailsoptimizeimagescommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\ThumbnailsOptimizeImagesCommand',
            'console.command.pimcore_bundle_corebundle_command_thumbnailsvideocommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\ThumbnailsVideoCommand',
            'console.command.pimcore_bundle_corebundle_command_updatecommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\UpdateCommand',
            'console.command.pimcore_bundle_corebundle_command_web2printpdfcreationcommand' => 'Pimcore\\Bundle\\CoreBundle\\Command\\Web2PrintPdfCreationCommand',
            'database_connection' => 'doctrine.dbal.default_connection',
            'mailer' => 'swiftmailer.mailer.pimcore_mailer',
            'pimcore.app_logger' => 'Pimcore\\Log\\ApplicationLogger',
            'pimcore.app_logger.db_writer' => 'Pimcore\\Log\\Handler\\ApplicationLoggerDb',
            'pimcore.app_logger.default' => 'Pimcore\\Log\\ApplicationLogger',
            'pimcore.area.brick_manager' => 'Pimcore\\Extension\\Document\\Areabrick\\AreabrickManager',
            'pimcore.cache.core.pool' => 'pimcore.cache.core.pool.doctrine',
            'pimcore.cache.runtime' => 'Pimcore\\Cache\\Runtime',
            'pimcore.controller.config.config_normalizer' => 'Pimcore\\Controller\\Config\\ConfigNormalizer',
            'pimcore.controller.config.controller_data_provider' => 'Pimcore\\Controller\\Config\\ControllerDataProvider',
            'pimcore.document.renderer' => 'Pimcore\\Document\\Renderer\\DocumentRenderer',
            'pimcore.document.tag.block_state_stack' => 'Pimcore\\Document\\Tag\\Block\\BlockStateStack',
            'pimcore.document.tag.handler' => 'Pimcore\\Document\\Tag\\DelegatingTagHandler',
            'pimcore.document.tag.naming.strategy' => 'pimcore.document.tag.naming.strategy.nested',
            'pimcore.document_service' => 'Pimcore\\Model\\Document\\Service',
            'pimcore.event_listener.frontend.cookie_policy_notice' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\CookiePolicyNoticeListener',
            'pimcore.event_listener.frontend.full_page_cache' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\FullPageCacheListener',
            'pimcore.event_listener.frontend.google_analytics_code' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\GoogleAnalyticsCodeListener',
            'pimcore.event_listener.frontend.google_tag_manager' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\GoogleTagManagerListener',
            'pimcore.event_listener.frontend.tag_manager' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\Frontend\\TagManagerListener',
            'pimcore.event_listener.workflow_management' => 'Pimcore\\Bundle\\CoreBundle\\EventListener\\WorkflowManagementListener',
            'pimcore.extension.bundle_manager' => 'Pimcore\\Extension\\Bundle\\PimcoreBundleManager',
            'pimcore.extension.config' => 'Pimcore\\Extension\\Config',
            'pimcore.http.request_helper' => 'Pimcore\\Http\\RequestHelper',
            'pimcore.http.response_helper' => 'Pimcore\\Http\\ResponseHelper',
            'pimcore.locale' => 'Pimcore\\Localization\\LocaleService',
            'pimcore.locale.intl_formatter' => 'Pimcore\\Localization\\IntlFormatter',
            'pimcore.maintenance.schedule_manager' => 'Pimcore\\Model\\Schedule\\Manager\\Procedural',
            'pimcore.model.factory' => 'Pimcore\\Model\\Factory',
            'pimcore.rest_client' => 'Pimcore\\Tool\\RestClient',
            'pimcore.service.request.document_resolver' => 'Pimcore\\Http\\Request\\Resolver\\DocumentResolver',
            'pimcore.service.request.editmode_resolver' => 'Pimcore\\Http\\Request\\Resolver\\EditmodeResolver',
            'pimcore.service.request.output_timestamp_resolver' => 'Pimcore\\Http\\Request\\Resolver\\OutputTimestampResolver',
            'pimcore.service.request.pimcore_context_resolver' => 'Pimcore\\Http\\Request\\Resolver\\PimcoreContextResolver',
            'pimcore.service.request.response_header_resolver' => 'Pimcore\\Http\\Request\\Resolver\\ResponseHeaderResolver',
            'pimcore.service.request.site_resolver' => 'Pimcore\\Http\\Request\\Resolver\\SiteResolver',
            'pimcore.service.request.template_resolver' => 'Pimcore\\Http\\Request\\Resolver\\TemplateResolver',
            'pimcore.service.request.template_vars_resolver' => 'Pimcore\\Http\\Request\\Resolver\\TemplateVarsResolver',
            'pimcore.service.request.view_model_resolver' => 'Pimcore\\Http\\Request\\Resolver\\ViewModelResolver',
            'pimcore.templating.engine.delegating' => 'templating',
            'pimcore.templating.view_helper.action' => 'Pimcore\\Templating\\Helper\\Action',
            'pimcore.templating.view_helper.cache' => 'Pimcore\\Templating\\Helper\\Cache',
            'pimcore.templating.view_helper.device' => 'Pimcore\\Templating\\Helper\\Device',
            'pimcore.templating.view_helper.get_all_params' => 'Pimcore\\Templating\\Helper\\GetAllParams',
            'pimcore.templating.view_helper.get_param' => 'Pimcore\\Templating\\Helper\\GetParam',
            'pimcore.templating.view_helper.glossary' => 'Pimcore\\Templating\\Helper\\Glossary',
            'pimcore.templating.view_helper.head_link' => 'Pimcore\\Templating\\Helper\\HeadLink',
            'pimcore.templating.view_helper.head_meta' => 'Pimcore\\Templating\\Helper\\HeadMeta',
            'pimcore.templating.view_helper.head_script' => 'Pimcore\\Templating\\Helper\\HeadScript',
            'pimcore.templating.view_helper.head_style' => 'Pimcore\\Templating\\Helper\\HeadStyle',
            'pimcore.templating.view_helper.head_title' => 'Pimcore\\Templating\\Helper\\HeadTitle',
            'pimcore.templating.view_helper.inc' => 'Pimcore\\Templating\\Helper\\Inc',
            'pimcore.templating.view_helper.inline_script' => 'Pimcore\\Templating\\Helper\\InlineScript',
            'pimcore.templating.view_helper.navigation' => 'Pimcore\\Templating\\Helper\\Navigation',
            'pimcore.templating.view_helper.pimcore_url' => 'Pimcore\\Templating\\Helper\\PimcoreUrl',
            'pimcore.templating.view_helper.placeholder' => 'Pimcore\\Templating\\Helper\\Placeholder',
            'pimcore.tool.assets_installer' => 'Pimcore\\Tool\\AssetsInstaller',
            'pimcore.translator' => 'Pimcore\\Translation\\Translator',
            'pimcore_admin.security.token_storage_user_resolver' => 'Pimcore\\Bundle\\AdminBundle\\Security\\User\\TokenStorageUserResolver',
            'pimcore_admin.security.user_checker' => 'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserChecker',
            'pimcore_admin.security.user_loader' => 'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserLoader',
            'pimcore_admin.security.user_provider' => 'Pimcore\\Bundle\\AdminBundle\\Security\\User\\UserProvider',
            'presta_sitemap.dumper' => 'presta_sitemap.dumper_default',
            'presta_sitemap.generator' => 'presta_sitemap.generator_default',
            'router' => 'cmf_routing.router',
            'scheb_two_factor.backup_code_manager' => 'scheb_two_factor.null_backup_code_manager',
            'scheb_two_factor.persister' => 'scheb_two_factor.persister.doctrine',
            'scheb_two_factor.trusted_device_manager' => 'scheb_two_factor.null_trusted_device_manager',
            'security.authentication.session_strategy.demo_cms_fw' => 'security.authentication.session_strategy.admin_webdav',
            'security.authentication.session_strategy.webservice' => 'security.authentication.session_strategy.admin',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.pimcore_mailer',
            'swiftmailer.transport' => 'swiftmailer.mailer.pimcore_mailer.transport',
            'translator' => 'Pimcore\\Translation\\Translator',
        );
    }

    public function getRemovedIds()
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    protected function createProxy($class, \Closure $factory)
    {
        class_exists($class, false) || $this->load("{$class}.php");

        return $factory();
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\EventListener\CsrfProtectionListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\EventListener\CsrfProtectionListener
     */
    protected function getCsrfProtectionListenerService()
    {
        $this->services['Pimcore\Bundle\AdminBundle\EventListener\CsrfProtectionListener'] = $instance = new \Pimcore\Bundle\AdminBundle\EventListener\CsrfProtectionListener(array(), ${($_ = isset($this->services['pimcore.templating.engine.php']) ? $this->services['pimcore.templating.engine.php'] : $this->getPimcore_Templating_Engine_PhpService()) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['monolog.logger.admin']) ? $this->services['monolog.logger.admin'] : $this->getMonolog_Logger_AdminService()) && false ?: '_'});
        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver
     */
    protected function getTokenStorageUserResolverService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver'] = new \Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\CookiePolicyNoticeListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\CookiePolicyNoticeListener
     */
    protected function getCookiePolicyNoticeListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\CookiePolicyNoticeListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\CookiePolicyNoticeListener(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});

        $instance->loadTemplateFromResource('@PimcoreCoreBundle/Resources/misc/cookie-policy-default-template.html');
        $instance->setTranslator(${($_ = isset($this->services['Pimcore\Translation\Translator']) ? $this->services['Pimcore\Translation\Translator'] : $this->getTranslatorService()) && false ?: '_'});
        $instance->setResponseHelper(${($_ = isset($this->services['Pimcore\Http\ResponseHelper']) ? $this->services['Pimcore\Http\ResponseHelper'] : $this->services['Pimcore\Http\ResponseHelper'] = new \Pimcore\Http\ResponseHelper()) && false ?: '_'});
        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\FullPageCacheListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\FullPageCacheListener
     */
    protected function getFullPageCacheListenerService()
    {
        $a = ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'};

        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FullPageCacheListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\FullPageCacheListener(${($_ = isset($this->services['Pimcore\Targeting\VisitorInfoStorage']) ? $this->services['Pimcore\Targeting\VisitorInfoStorage'] : $this->services['Pimcore\Targeting\VisitorInfoStorage'] = new \Pimcore\Targeting\VisitorInfoStorage()) && false ?: '_'}, new \Pimcore\Cache\FullPage\SessionStatus('_sf2_meta', $a), $a);

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleAnalyticsCodeListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleAnalyticsCodeListener
     */
    protected function getGoogleAnalyticsCodeListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleAnalyticsCodeListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleAnalyticsCodeListener(${($_ = isset($this->services['Pimcore\Analytics\Google\Tracker']) ? $this->services['Pimcore\Analytics\Google\Tracker'] : $this->getTrackerService()) && false ?: '_'});

        $instance->setResponseHelper(${($_ = isset($this->services['Pimcore\Http\ResponseHelper']) ? $this->services['Pimcore\Http\ResponseHelper'] : $this->services['Pimcore\Http\ResponseHelper'] = new \Pimcore\Http\ResponseHelper()) && false ?: '_'});
        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleTagManagerListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleTagManagerListener
     */
    protected function getGoogleTagManagerListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleTagManagerListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleTagManagerListener(${($_ = isset($this->services['Pimcore\Analytics\SiteId\SiteIdProvider']) ? $this->services['Pimcore\Analytics\SiteId\SiteIdProvider'] : $this->getSiteIdProviderService()) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->getTemplatingService()) && false ?: '_'});

        $instance->setResponseHelper(${($_ = isset($this->services['Pimcore\Http\ResponseHelper']) ? $this->services['Pimcore\Http\ResponseHelper'] : $this->services['Pimcore\Http\ResponseHelper'] = new \Pimcore\Http\ResponseHelper()) && false ?: '_'});
        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\TagManagerListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\TagManagerListener
     */
    protected function getTagManagerListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\TagManagerListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\TagManagerListener(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\EditmodeResolver']) ? $this->services['Pimcore\Http\Request\Resolver\EditmodeResolver'] : $this->getEditmodeResolverService()) && false ?: '_'});

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});
        $instance->setResponseHelper(${($_ = isset($this->services['Pimcore\Http\ResponseHelper']) ? $this->services['Pimcore\Http\ResponseHelper'] : $this->services['Pimcore\Http\ResponseHelper'] = new \Pimcore\Http\ResponseHelper()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'Pimcore\Extension\Bundle\PimcoreBundleManager' shared autowired service.
     *
     * @return \Pimcore\Extension\Bundle\PimcoreBundleManager
     */
    protected function getPimcoreBundleManagerService()
    {
        return $this->services['Pimcore\Extension\Bundle\PimcoreBundleManager'] = new \Pimcore\Extension\Bundle\PimcoreBundleManager(new \Pimcore\Extension\Bundle\Config\StateConfig(${($_ = isset($this->services['Pimcore\Extension\Config']) ? $this->services['Pimcore\Extension\Config'] : $this->get('Pimcore\Extension\Config')) && false ?: '_'}), new \Pimcore\Extension\Bundle\PimcoreBundleLocator(new \Pimcore\Composer\PackageInfo(), $this->parameters['pimcore.extensions.bundles.search_paths']), ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['cmf_routing.router']) ? $this->services['cmf_routing.router'] : $this->getCmfRouting_RouterService()) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\FeatureToggles\FeatureManagerInterface' autowired service.
     *
     * @return \Pimcore\FeatureToggles\FeatureManagerInterface
     */
    protected function getFeatureManagerInterfaceService()
    {
        return \Pimcore::getFeatureManager();
    }

    /*
     * Gets the public 'Pimcore\Http\RequestHelper' shared autowired service.
     *
     * @return \Pimcore\Http\RequestHelper
     */
    protected function getRequestHelperService()
    {
        return $this->services['Pimcore\Http\RequestHelper'] = new \Pimcore\Http\RequestHelper(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Http\Request\Resolver\DocumentResolver' shared autowired service.
     *
     * @return \Pimcore\Http\Request\Resolver\DocumentResolver
     */
    protected function getDocumentResolverService()
    {
        return $this->services['Pimcore\Http\Request\Resolver\DocumentResolver'] = new \Pimcore\Http\Request\Resolver\DocumentResolver(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Http\Request\Resolver\EditmodeResolver' shared autowired service.
     *
     * @return \Pimcore\Http\Request\Resolver\EditmodeResolver
     */
    protected function getEditmodeResolverService()
    {
        $this->services['Pimcore\Http\Request\Resolver\EditmodeResolver'] = $instance = new \Pimcore\Http\Request\Resolver\EditmodeResolver(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\UserLoader']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserLoader'] : $this->getUserLoaderService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->getRequestHelperService()) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['monolog.logger.init']) ? $this->services['monolog.logger.init'] : $this->getMonolog_Logger_InitService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'Pimcore\Http\Request\Resolver\OutputTimestampResolver' shared autowired service.
     *
     * @return \Pimcore\Http\Request\Resolver\OutputTimestampResolver
     */
    protected function getOutputTimestampResolverService()
    {
        return $this->services['Pimcore\Http\Request\Resolver\OutputTimestampResolver'] = new \Pimcore\Http\Request\Resolver\OutputTimestampResolver(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Http\Request\Resolver\PimcoreContextResolver' shared autowired service.
     *
     * @return \Pimcore\Http\Request\Resolver\PimcoreContextResolver
     */
    protected function getPimcoreContextResolverService()
    {
        return $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] = new \Pimcore\Http\Request\Resolver\PimcoreContextResolver(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['pimcore.service.context.pimcore_context_guesser']) ? $this->services['pimcore.service.context.pimcore_context_guesser'] : $this->getPimcore_Service_Context_PimcoreContextGuesserService()) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Http\Request\Resolver\ResponseHeaderResolver' shared autowired service.
     *
     * @return \Pimcore\Http\Request\Resolver\ResponseHeaderResolver
     */
    protected function getResponseHeaderResolverService()
    {
        return $this->services['Pimcore\Http\Request\Resolver\ResponseHeaderResolver'] = new \Pimcore\Http\Request\Resolver\ResponseHeaderResolver(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Http\Request\Resolver\SiteResolver' shared autowired service.
     *
     * @return \Pimcore\Http\Request\Resolver\SiteResolver
     */
    protected function getSiteResolverService()
    {
        return $this->services['Pimcore\Http\Request\Resolver\SiteResolver'] = new \Pimcore\Http\Request\Resolver\SiteResolver(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
    }

    /*
     * Gets the public 'Pimcore\Http\ResponseHelper' shared autowired service.
     *
     * @return \Pimcore\Http\ResponseHelper
     */
    protected function getResponseHelperService()
    {
        return $this->services['Pimcore\Http\ResponseHelper'] = new \Pimcore\Http\ResponseHelper();
    }

    /*
     * Gets the public 'Pimcore\Model\Document\Service' shared autowired service.
     *
     * @return \Pimcore\Model\Document\Service
     */
    protected function getServiceService()
    {
        return $this->services['Pimcore\Model\Document\Service'] = new \Pimcore\Model\Document\Service();
    }

    /*
     * Gets the public 'Pimcore\Targeting\Document\DocumentTargetingConfigurator' shared autowired service.
     *
     * @return \Pimcore\Targeting\Document\DocumentTargetingConfigurator
     */
    protected function getDocumentTargetingConfiguratorService()
    {
        return $this->services['Pimcore\Targeting\Document\DocumentTargetingConfigurator'] = new \Pimcore\Targeting\Document\DocumentTargetingConfigurator(${($_ = isset($this->services['Pimcore\Targeting\VisitorInfoStorage']) ? $this->services['Pimcore\Targeting\VisitorInfoStorage'] : $this->services['Pimcore\Targeting\VisitorInfoStorage'] = new \Pimcore\Targeting\VisitorInfoStorage()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->getRequestHelperService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\UserLoader']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserLoader'] : $this->getUserLoaderService()) && false ?: '_'}, ${($_ = isset($this->services['pimcore.cache.core.handler']) ? $this->services['pimcore.cache.core.handler'] : $this->getPimcore_Cache_Core_HandlerService()) && false ?: '_'});
    }

    /*
     * Gets the public 'cmf_routing.route_provider' shared autowired service.
     *
     * @return \Pimcore\Routing\DynamicRouteProvider
     */
    protected function getCmfRouting_RouteProviderService()
    {
        $this->services['cmf_routing.route_provider'] = $instance = new \Pimcore\Routing\DynamicRouteProvider(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\SiteResolver']) ? $this->services['Pimcore\Http\Request\Resolver\SiteResolver'] : $this->getSiteResolverService()) && false ?: '_'});

        $instance->addHandler(${($_ = isset($this->services['Pimcore\Routing\Dynamic\DocumentRouteHandler']) ? $this->services['Pimcore\Routing\Dynamic\DocumentRouteHandler'] : $this->getDocumentRouteHandlerService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], array(), 'default', '');
    }

    /*
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $a->addEventSubscriber(${($_ = isset($this->services['cmf_routing.persistence.doctrine.route_condition_metadata_listener']) ? $this->services['cmf_routing.persistence.doctrine.route_condition_metadata_listener'] : $this->services['cmf_routing.persistence.doctrine.route_condition_metadata_listener'] = new \Symfony\Cmf\Bundle\RoutingBundle\Doctrine\RouteConditionMetadataListener()) && false ?: '_'});

        return $this->services['doctrine.dbal.default_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array())) && false ?: '_'}->createConnection(array('driver' => 'pdo_mysql', 'host' => 'localhost', 'port' => '3306', 'dbname' => 'bitnami_pimcore', 'user' => 'bn_pimcore', 'password' => 'd019e67e46', 'charset' => 'UTF8MB4', 'driverOptions' => array(), 'wrapperClass' => '\\Pimcore\\Db\\Connection', 'defaultTableOptions' => array('charset' => 'UTF8MB4', 'collate' => 'utf8mb4_unicode_ci')), new \Doctrine\DBAL\Configuration(), $a, array('enum' => 'string', 'bit' => 'boolean'));
    }

    /*
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addListener('scheb_two_factor.authentication.complete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\EventListener\TwoFactorListener']) ? $this->services['Pimcore\Bundle\AdminBundle\EventListener\TwoFactorListener'] : $this->services['Pimcore\Bundle\AdminBundle\EventListener\TwoFactorListener'] = new \Pimcore\Bundle\AdminBundle\EventListener\TwoFactorListener()) && false ?: '_'};
        }, 1 => 'onAuthenticationComplete'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['scheb_two_factor.trusted_cookie_response_listener']) ? $this->services['scheb_two_factor.trusted_cookie_response_listener'] : $this->getSchebTwoFactor_TrustedCookieResponseListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleAnalyticsCodeListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleAnalyticsCodeListener'] : $this->getGoogleAnalyticsCodeListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -110);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\CookiePolicyNoticeListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\CookiePolicyNoticeListener'] : $this->getCookiePolicyNoticeListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -109);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleTagManagerListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleTagManagerListener'] : $this->getGoogleTagManagerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -108);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\TagManagerListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\TagManagerListener'] : $this->getTagManagerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -107);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FullPageCacheListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FullPageCacheListener'] : $this->getFullPageCacheListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 6);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FullPageCacheListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FullPageCacheListener'] : $this->getFullPageCacheListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -120);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FullPageCacheListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FullPageCacheListener'] : $this->getFullPageCacheListenerService()) && false ?: '_'};
        }, 1 => 'stopPropagationCheck'), 100);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\MaintenancePageListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\MaintenancePageListener'] : $this->getMaintenancePageListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 620);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['response_listener']) ? $this->services['response_listener'] : $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['streamed_response_listener']) ? $this->services['streamed_response_listener'] : $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListener2Service()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListener2Service()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['validate_request_listener']) ? $this->services['validate_request_listener'] : $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 256);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['resolve_controller_name_subscriber']) ? $this->services['resolve_controller_name_subscriber'] : $this->getResolveControllerNameSubscriberService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load('getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleError'), -128);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load('getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['session.save_listener']) ? $this->services['session.save_listener'] : $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->getTranslatorListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 10);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->getTranslatorListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->getDebug_DebugHandlersListenerService()) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->getDebug_DebugHandlersListenerService()) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 32);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'), -64);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['web_link.add_link_header_listener']) ? $this->services['web_link.add_link_header_listener'] : $this->services['web_link.add_link_header_listener'] = new \Symfony\Component\WebLink\EventListener\AddLinkHeaderListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 8);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['security.rememberme.response_listener']) ? $this->services['security.rememberme.response_listener'] : $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['twig.exception_listener']) ? $this->services['twig.exception_listener'] : $this->load('getTwig_ExceptionListenerService.php')) && false ?: '_'};
        }, 1 => 'onKernelException'), -128);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'};
        }, 1 => 'onCommand'), 255);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'};
        }, 1 => 'onTerminate'), -255);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.controller.listener']) ? $this->services['sensio_framework_extra.controller.listener'] : $this->getSensioFrameworkExtra_Controller_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.converter.listener']) ? $this->services['sensio_framework_extra.converter.listener'] : $this->getSensioFrameworkExtra_Converter_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this)) && false ?: '_'};
        }, 1 => 'onKernelController'), -128);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this)) && false ?: '_'};
        }, 1 => 'onKernelView'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.security.listener']) ? $this->services['sensio_framework_extra.security.listener'] : $this->getSensioFrameworkExtra_Security_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('presta_sitemap.populate', array(0 => function () {
            return ${($_ = isset($this->services['presta_sitemap.eventlistener.route_annotation']) ? $this->services['presta_sitemap.eventlistener.route_annotation'] : $this->load('getPrestaSitemap_Eventlistener_RouteAnnotationService.php')) && false ?: '_'};
        }, 1 => 'registerRouteAnnotation'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FrontendRoutingListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FrontendRoutingListener'] : $this->getFrontendRoutingListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 512);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FrontendRoutingListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FrontendRoutingListener'] : $this->getFrontendRoutingListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'), 64);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\PimcoreContextListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\PimcoreContextListener'] : $this->getPimcoreContextListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentFallbackListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentFallbackListener'] : $this->getDocumentFallbackListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 20);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\PimcoreHeaderListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\PimcoreHeaderListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\PimcoreHeaderListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\PimcoreHeaderListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\LocaleListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\LocaleListener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 1);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\LocaleListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\LocaleListener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\TranslationDebugListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\TranslationDebugListener'] : $this->getTranslationDebugListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\ElementListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\ElementListener'] : $this->getElementListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 3);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\HardlinkCanonicalListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\HardlinkCanonicalListener'] : $this->getHardlinkCanonicalListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\BlockStateListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\BlockStateListener'] : $this->getBlockStateListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\BlockStateListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\BlockStateListener'] : $this->getBlockStateListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentMetaDataListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentMetaDataListener'] : $this->getDocumentMetaDataListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\ControllerViewModelListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\ControllerViewModelListener'] : $this->load('getControllerViewModelListenerService.php')) && false ?: '_'};
        }, 1 => 'onKernelView'), 10);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\ContentTemplateListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\ContentTemplateListener'] : $this->load('getContentTemplateListenerService.php')) && false ?: '_'};
        }, 1 => 'onKernelView'), 16);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\EventedControllerListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\EventedControllerListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\EventedControllerListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\EventedControllerListener()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\EventedControllerListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\EventedControllerListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\EventedControllerListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\EventedControllerListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\TemplateControllerListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\TemplateControllerListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\TemplateControllerListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\TemplateControllerListener($this)) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\TemplateControllerListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\TemplateControllerListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\TemplateControllerListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\TemplateControllerListener($this)) && false ?: '_'};
        }, 1 => 'onKernelView'), 32);
        $instance->addListener('pimcore.dataobject.postAdd', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener()) && false ?: '_'};
        }, 1 => 'onElementPostAdd'), 0);
        $instance->addListener('pimcore.document.postAdd', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener()) && false ?: '_'};
        }, 1 => 'onElementPostAdd'), 0);
        $instance->addListener('pimcore.asset.postAdd', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener()) && false ?: '_'};
        }, 1 => 'onElementPostAdd'), 0);
        $instance->addListener('pimcore.dataobject.postDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener()) && false ?: '_'};
        }, 1 => 'onElementPostDelete'), 0);
        $instance->addListener('pimcore.document.postDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener()) && false ?: '_'};
        }, 1 => 'onElementPostDelete'), 0);
        $instance->addListener('pimcore.asset.postDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener()) && false ?: '_'};
        }, 1 => 'onElementPostDelete'), 0);
        $instance->addListener('pimcore.admin.dataobject.get.preSendData', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener()) && false ?: '_'};
        }, 1 => 'onAdminElementGetPreSendData'), 0);
        $instance->addListener('pimcore.admin.asset.get.preSendData', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener()) && false ?: '_'};
        }, 1 => 'onAdminElementGetPreSendData'), 0);
        $instance->addListener('pimcore.admin.document.get.preSendData', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\WorkflowManagementListener()) && false ?: '_'};
        }, 1 => 'onAdminElementGetPreSendData'), 0);
        $instance->addListener('pimcore.dataobject.postCopy', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener()) && false ?: '_'};
        }, 1 => 'onPostCopy'), 0);
        $instance->addListener('pimcore.document.postCopy', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener()) && false ?: '_'};
        }, 1 => 'onPostCopy'), 0);
        $instance->addListener('pimcore.asset.postCopy', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener()) && false ?: '_'};
        }, 1 => 'onPostCopy'), 0);
        $instance->addListener('pimcore.asset.postDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\ElementTagsListener()) && false ?: '_'};
        }, 1 => 'onPostAssetDelete'), -9999);
        $instance->addListener('pimcore.dataobject.postAdd', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener()) && false ?: '_'};
        }, 1 => 'onPostAddElement'), 0);
        $instance->addListener('pimcore.document.postAdd', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener()) && false ?: '_'};
        }, 1 => 'onPostAddElement'), 0);
        $instance->addListener('pimcore.asset.postAdd', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener()) && false ?: '_'};
        }, 1 => 'onPostAddElement'), 0);
        $instance->addListener('pimcore.dataobject.preDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener()) && false ?: '_'};
        }, 1 => 'onPreDeleteElement'), 0);
        $instance->addListener('pimcore.document.preDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener()) && false ?: '_'};
        }, 1 => 'onPreDeleteElement'), 0);
        $instance->addListener('pimcore.asset.preDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener()) && false ?: '_'};
        }, 1 => 'onPreDeleteElement'), 0);
        $instance->addListener('pimcore.dataobject.postUpdate', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener()) && false ?: '_'};
        }, 1 => 'onPostUpdateElement'), 0);
        $instance->addListener('pimcore.document.postUpdate', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener()) && false ?: '_'};
        }, 1 => 'onPostUpdateElement'), 0);
        $instance->addListener('pimcore.asset.postUpdate', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\SearchBackendListener()) && false ?: '_'};
        }, 1 => 'onPostUpdateElement'), 0);
        $instance->addListener('pimcore.dataobject.postAdd', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\UUIDListener()) && false ?: '_'};
        }, 1 => 'onPostAdd'), 0);
        $instance->addListener('pimcore.document.postAdd', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\UUIDListener()) && false ?: '_'};
        }, 1 => 'onPostAdd'), 0);
        $instance->addListener('pimcore.asset.postAdd', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\UUIDListener()) && false ?: '_'};
        }, 1 => 'onPostAdd'), 0);
        $instance->addListener('pimcore.class.postAdd', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\UUIDListener()) && false ?: '_'};
        }, 1 => 'onPostAdd'), 0);
        $instance->addListener('pimcore.dataobject.postDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\UUIDListener()) && false ?: '_'};
        }, 1 => 'onPostDelete'), 0);
        $instance->addListener('pimcore.document.postDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\UUIDListener()) && false ?: '_'};
        }, 1 => 'onPostDelete'), 0);
        $instance->addListener('pimcore.asset.postDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\UUIDListener()) && false ?: '_'};
        }, 1 => 'onPostDelete'), 0);
        $instance->addListener('pimcore.class.postDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] : $this->services['Pimcore\Bundle\CoreBundle\EventListener\UUIDListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\UUIDListener()) && false ?: '_'};
        }, 1 => 'onPostDelete'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\ResponseExceptionListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\ResponseExceptionListener'] : $this->load('getResponseExceptionListenerService.php')) && false ?: '_'};
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\ResponseHeaderListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\ResponseHeaderListener'] : $this->getResponseHeaderListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 32);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\EditmodeListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\EditmodeListener'] : $this->getEditmodeListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\EditmodeListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\EditmodeListener'] : $this->getEditmodeListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\ResponseStackListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\ResponseStackListener'] : $this->getResponseStackListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 24);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\InternalWysiwygHtmlAttributeFilterListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\InternalWysiwygHtmlAttributeFilterListener'] : $this->getInternalWysiwygHtmlAttributeFilterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleSearchConsoleVerificationListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleSearchConsoleVerificationListener'] : $this->getGoogleSearchConsoleVerificationListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 64);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\OutputTimestampListener']) ? $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\OutputTimestampListener'] : $this->getOutputTimestampListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('pimcore.test.kernel.booted', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Migrations\Configuration\ConfigurationFactory']) ? $this->services['Pimcore\Migrations\Configuration\ConfigurationFactory'] : $this->load('getConfigurationFactoryService.php')) && false ?: '_'};
        }, 1 => 'reset'), 0);
        $instance->addListener('pimcore.admin.reports.save_settings', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Analytics\Piwik\EventListener\CacheListener']) ? $this->services['Pimcore\Analytics\Piwik\EventListener\CacheListener'] : $this->load('getCacheListenerService.php')) && false ?: '_'};
        }, 1 => 'onSaveSettings'), 0);
        $instance->addListener('pimcore.admin.index.settings', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Analytics\Piwik\EventListener\IndexSettingsListener']) ? $this->services['Pimcore\Analytics\Piwik\EventListener\IndexSettingsListener'] : $this->load('getIndexSettingsListenerService.php')) && false ?: '_'};
        }, 1 => 'addIndexSettings'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Analytics\Piwik\EventListener\TrackingCodeListener']) ? $this->services['Pimcore\Analytics\Piwik\EventListener\TrackingCodeListener'] : $this->getTrackingCodeListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -110);
        $instance->addListener('presta_sitemap.populate', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Sitemap\EventListener\SitemapGeneratorListener']) ? $this->services['Pimcore\Sitemap\EventListener\SitemapGeneratorListener'] : $this->load('getSitemapGeneratorListenerService.php')) && false ?: '_'};
        }, 1 => 'onPopulateSitemap'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Targeting\EventListener\TargetingListener']) ? $this->services['Pimcore\Targeting\EventListener\TargetingListener'] : $this->getTargetingListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 7);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Targeting\EventListener\TargetingListener']) ? $this->services['Pimcore\Targeting\EventListener\TargetingListener'] : $this->getTargetingListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -115);
        $instance->addListener('pimcore.targeting.pre_resolve', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Targeting\EventListener\TargetingListener']) ? $this->services['Pimcore\Targeting\EventListener\TargetingListener'] : $this->getTargetingListenerService()) && false ?: '_'};
        }, 1 => 'onPreResolve'), 0);
        $instance->addListener('pimcore.tracking.piwik.code.tracking_data', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Targeting\EventListener\PiwikVisitorIdListener']) ? $this->services['Pimcore\Targeting\EventListener\PiwikVisitorIdListener'] : $this->load('getPiwikVisitorIdListenerService.php')) && false ?: '_'};
        }, 1 => 'onPiwikTrackingData'), 0);
        $instance->addListener('pimcore.targeting.pre_resolve', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Targeting\EventListener\DocumentTargetGroupListener']) ? $this->services['Pimcore\Targeting\EventListener\DocumentTargetGroupListener'] : $this->load('getDocumentTargetGroupListenerService.php')) && false ?: '_'};
        }, 1 => 'onVisitorInfoResolve'), 0);
        $instance->addListener('pimcore.cache.full_page.prepare_response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Targeting\EventListener\FullPageCacheCookieCleanupListener']) ? $this->services['Pimcore\Targeting\EventListener\FullPageCacheCookieCleanupListener'] : $this->services['Pimcore\Targeting\EventListener\FullPageCacheCookieCleanupListener'] = new \Pimcore\Targeting\EventListener\FullPageCacheCookieCleanupListener()) && false ?: '_'};
        }, 1 => 'onPrepareFullPageCacheResponse'), 0);
        $instance->addListener('pimcore.targeting.visited_pages_count_match', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Targeting\EventListener\VisitedPagesCountListener']) ? $this->services['Pimcore\Targeting\EventListener\VisitedPagesCountListener'] : $this->load('getVisitedPagesCountListenerService.php')) && false ?: '_'};
        }, 1 => 'onVisitedPagesCountMatch'), 0);
        $instance->addListener('pimcore.targeting.post_resolve', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Targeting\EventListener\VisitedPagesCountListener']) ? $this->services['Pimcore\Targeting\EventListener\VisitedPagesCountListener'] : $this->load('getVisitedPagesCountListenerService.php')) && false ?: '_'};
        }, 1 => 'onPostResolveVisitorInfo'), 0);
        $instance->addListener('pimcore.system.maintenance', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Targeting\EventListener\MaintenanceListener']) ? $this->services['Pimcore\Targeting\EventListener\MaintenanceListener'] : $this->load('getMaintenanceListenerService.php')) && false ?: '_'};
        }, 1 => 'onPimcoreMaintenance'), 0);
        $instance->addListener('pimcore.targeting.pre_resolve', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Targeting\EventListener\ToolbarListener']) ? $this->services['Pimcore\Targeting\EventListener\ToolbarListener'] : $this->getToolbarListenerService()) && false ?: '_'};
        }, 1 => 'onPreResolve'), -10);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Targeting\EventListener\ToolbarListener']) ? $this->services['Pimcore\Targeting\EventListener\ToolbarListener'] : $this->getToolbarListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -127);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\EventListener\BruteforceProtectionListener']) ? $this->services['Pimcore\Bundle\AdminBundle\EventListener\BruteforceProtectionListener'] : $this->getBruteforceProtectionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\EventListener\BruteforceProtectionListener']) ? $this->services['Pimcore\Bundle\AdminBundle\EventListener\BruteforceProtectionListener'] : $this->getBruteforceProtectionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\EventListener\AdminAuthenticationDoubleCheckListener']) ? $this->services['Pimcore\Bundle\AdminBundle\EventListener\AdminAuthenticationDoubleCheckListener'] : $this->getAdminAuthenticationDoubleCheckListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\EventListener\CsrfProtectionListener']) ? $this->services['Pimcore\Bundle\AdminBundle\EventListener\CsrfProtectionListener'] : $this->getCsrfProtectionListenerService()) && false ?: '_'};
        }, 1 => 'handleRequest'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\EventListener\AdminExceptionListener']) ? $this->services['Pimcore\Bundle\AdminBundle\EventListener\AdminExceptionListener'] : $this->load('getAdminExceptionListenerService.php')) && false ?: '_'};
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('pimcore.class.postDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\EventListener\GridConfigListener']) ? $this->services['Pimcore\Bundle\AdminBundle\EventListener\GridConfigListener'] : $this->services['Pimcore\Bundle\AdminBundle\EventListener\GridConfigListener'] = new \Pimcore\Bundle\AdminBundle\EventListener\GridConfigListener()) && false ?: '_'};
        }, 1 => 'onClassDelete'), 0);
        $instance->addListener('pimcore.user.postDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\EventListener\GridConfigListener']) ? $this->services['Pimcore\Bundle\AdminBundle\EventListener\GridConfigListener'] : $this->services['Pimcore\Bundle\AdminBundle\EventListener\GridConfigListener'] = new \Pimcore\Bundle\AdminBundle\EventListener\GridConfigListener()) && false ?: '_'};
        }, 1 => 'onUserDelete'), 0);
        $instance->addListener('pimcore.dataobject.postDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\EventListener\GridConfigListener']) ? $this->services['Pimcore\Bundle\AdminBundle\EventListener\GridConfigListener'] : $this->services['Pimcore\Bundle\AdminBundle\EventListener\GridConfigListener'] = new \Pimcore\Bundle\AdminBundle\EventListener\GridConfigListener()) && false ?: '_'};
        }, 1 => 'onObjectDelete'), 0);
        $instance->addListener('pimcore.class.postDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\EventListener\ImportConfigListener']) ? $this->services['Pimcore\Bundle\AdminBundle\EventListener\ImportConfigListener'] : $this->services['Pimcore\Bundle\AdminBundle\EventListener\ImportConfigListener'] = new \Pimcore\Bundle\AdminBundle\EventListener\ImportConfigListener()) && false ?: '_'};
        }, 1 => 'onClassDelete'), 0);
        $instance->addListener('pimcore.user.postDelete', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\EventListener\ImportConfigListener']) ? $this->services['Pimcore\Bundle\AdminBundle\EventListener\ImportConfigListener'] : $this->services['Pimcore\Bundle\AdminBundle\EventListener\ImportConfigListener'] = new \Pimcore\Bundle\AdminBundle\EventListener\ImportConfigListener()) && false ?: '_'};
        }, 1 => 'onUserDelete'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\EventListener\HttpCacheListener']) ? $this->services['Pimcore\Bundle\AdminBundle\EventListener\HttpCacheListener'] : $this->getHttpCacheListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\EventListener\UserPerspectiveListener']) ? $this->services['Pimcore\Bundle\AdminBundle\EventListener\UserPerspectiveListener'] : $this->getUserPerspectiveListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\EventListener\UsageStatisticsListener']) ? $this->services['Pimcore\Bundle\AdminBundle\EventListener\UsageStatisticsListener'] : $this->getUsageStatisticsListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\EventListener\EnablePreviewTimeSliderListener']) ? $this->services['Pimcore\Bundle\AdminBundle\EventListener\EnablePreviewTimeSliderListener'] : $this->getEnablePreviewTimeSliderListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('pimcore.dataobject.preUpdate', array(0 => function () {
            return ${($_ = isset($this->services['AppBundle\EventListener\TestListener']) ? $this->services['AppBundle\EventListener\TestListener'] : $this->services['AppBundle\EventListener\TestListener'] = new \AppBundle\EventListener\TestListener()) && false ?: '_'};
        }, 1 => 'onObjectPreUpdate'), 0);

        return $instance;
    }

    /*
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->getForm_RegistryService()) && false ?: '_'}, ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory()) && false ?: '_'});
    }

    /*
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['controller_resolver']) ? $this->services['controller_resolver'] : $this->getControllerResolverService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['argument_resolver.request_attribute']) ? $this->services['argument_resolver.request_attribute'] : $this->services['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['argument_resolver.request']) ? $this->services['argument_resolver.request'] : $this->services['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['argument_resolver.session']) ? $this->services['argument_resolver.session'] : $this->services['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.user_value_resolver']) ? $this->services['security.user_value_resolver'] : $this->load('getSecurity_UserValueResolverService.php')) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['Pimcore\Controller\ArgumentValueResolver\DocumentValueResolver']) ? $this->services['Pimcore\Controller\ArgumentValueResolver\DocumentValueResolver'] : $this->load('getDocumentValueResolverService.php')) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['Pimcore\Controller\ArgumentValueResolver\ViewModelValueResolver']) ? $this->services['Pimcore\Controller\ArgumentValueResolver\ViewModelValueResolver'] : $this->load('getViewModelValueResolverService.php')) && false ?: '_'};
            yield 6 => ${($_ = isset($this->services['Pimcore\Controller\ArgumentValueResolver\EditmodeValueResolver']) ? $this->services['Pimcore\Controller\ArgumentValueResolver\EditmodeValueResolver'] : $this->load('getEditmodeValueResolverService.php')) && false ?: '_'};
            yield 7 => ${($_ = isset($this->services['Pimcore\Controller\ArgumentValueResolver\TemplateVarsValueResolver']) ? $this->services['Pimcore\Controller\ArgumentValueResolver\TemplateVarsValueResolver'] : $this->load('getTemplateVarsValueResolverService.php')) && false ?: '_'};
            yield 8 => ${($_ = isset($this->services['Pimcore\Controller\ArgumentValueResolver\WebsiteConfigValueResolver']) ? $this->services['Pimcore\Controller\ArgumentValueResolver\WebsiteConfigValueResolver'] : $this->services['Pimcore\Controller\ArgumentValueResolver\WebsiteConfigValueResolver'] = new \Pimcore\Controller\ArgumentValueResolver\WebsiteConfigValueResolver()) && false ?: '_'};
            yield 9 => ${($_ = isset($this->services['argument_resolver.service']) ? $this->services['argument_resolver.service'] : $this->load('getArgumentResolver_ServiceService.php')) && false ?: '_'};
            yield 10 => ${($_ = isset($this->services['argument_resolver.default']) ? $this->services['argument_resolver.default'] : $this->services['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()) && false ?: '_'};
            yield 11 => ${($_ = isset($this->services['argument_resolver.variadic']) ? $this->services['argument_resolver.variadic'] : $this->services['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()) && false ?: '_'};
        }, 12)));
    }

    /*
     * Gets the public 'monolog.logger.admin' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_AdminService()
    {
        $this->services['monolog.logger.admin'] = $instance = new \Symfony\Bridge\Monolog\Logger('admin');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.init' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_InitService()
    {
        $this->services['monolog.logger.init'] = $instance = new \Symfony\Bridge\Monolog\Logger('init');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.routing' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RoutingService()
    {
        $this->services['monolog.logger.routing'] = $instance = new \Symfony\Bridge\Monolog\Logger('routing');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.security' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'pimcore.cache.core.handler' shared autowired service.
     *
     * @return \Pimcore\Cache\Core\EventDispatchingCoreHandler
     */
    protected function getPimcore_Cache_Core_HandlerService()
    {
        $this->services['pimcore.cache.core.handler'] = $instance = new \Pimcore\Cache\Core\EventDispatchingCoreHandler(${($_ = isset($this->services['pimcore.cache.core.pool.doctrine']) ? $this->services['pimcore.cache.core.pool.doctrine'] : $this->getPimcore_Cache_Core_Pool_DoctrineService()) && false ?: '_'}, ${($_ = isset($this->services['pimcore.cache.core.write_lock']) ? $this->services['pimcore.cache.core.write_lock'] : $this->getPimcore_Cache_Core_WriteLockService()) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'pimcore.implementation_loader.document.tag' shared autowired service.
     *
     * @return \Pimcore\Model\Document\Tag\Loader\TagLoader
     */
    protected function getPimcore_ImplementationLoader_Document_TagService()
    {
        return $this->services['pimcore.implementation_loader.document.tag'] = new \Pimcore\Model\Document\Tag\Loader\TagLoader(array(0 => new \Pimcore\Model\Document\Tag\Loader\PrefixLoader(array(0 => '\\Pimcore\\Model\\Document\\Tag\\', 1 => '\\Document_Tag_'))));
    }

    /*
     * Gets the public 'pimcore.routing.router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getPimcore_Routing_Router_RequestContextService()
    {
        return $this->services['pimcore.routing.router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the public 'pimcore.service.context.pimcore_context_guesser' shared autowired service.
     *
     * @return \Pimcore\Http\Context\PimcoreContextGuesser
     */
    protected function getPimcore_Service_Context_PimcoreContextGuesserService()
    {
        $this->services['pimcore.service.context.pimcore_context_guesser'] = $instance = new \Pimcore\Http\Context\PimcoreContextGuesser(${($_ = isset($this->services['pimcore.service.request_matcher_factory']) ? $this->services['pimcore.service.request_matcher_factory'] : $this->services['pimcore.service.request_matcher_factory'] = new \Pimcore\Http\RequestMatcherFactory()) && false ?: '_'});

        $instance->addContextRoutes('profiler', array(0 => array('path' => '^/_(profiler|wdt)', 'route' => false, 'host' => false, 'methods' => array())));
        $instance->addContextRoutes('admin', array(0 => array('path' => '^/admin', 'route' => false, 'host' => false, 'methods' => array()), 1 => array('route' => '^pimcore_admin_', 'path' => false, 'host' => false, 'methods' => array())));
        $instance->addContextRoutes('webservice', array(0 => array('path' => '^/webservice', 'route' => false, 'host' => false, 'methods' => array()), 1 => array('route' => '^pimcore_webservice', 'path' => false, 'host' => false, 'methods' => array())));
        $instance->addContextRoutes('plugin', array(0 => array('path' => '^/plugin', 'route' => false, 'host' => false, 'methods' => array())));
        $instance->addContextRoutes('install', array(0 => array('path' => '^/install', 'route' => false, 'host' => false, 'methods' => array())));

        return $instance;
    }

    /*
     * Gets the public 'pimcore.service.request_matcher_factory' shared autowired service.
     *
     * @return \Pimcore\Http\RequestMatcherFactory
     */
    protected function getPimcore_Service_RequestMatcherFactoryService()
    {
        return $this->services['pimcore.service.request_matcher_factory'] = new \Pimcore\Http\RequestMatcherFactory();
    }

    /*
     * Gets the public 'pimcore.templating.action_renderer' shared autowired service.
     *
     * @return \Pimcore\Templating\Renderer\ActionRenderer
     */
    protected function getPimcore_Templating_ActionRendererService()
    {
        return $this->services['pimcore.templating.action_renderer'] = new \Pimcore\Templating\Renderer\ActionRenderer(${($_ = isset($this->services['templating.helper.actions']) ? $this->services['templating.helper.actions'] : $this->getTemplating_Helper_ActionsService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Controller\Config\ConfigNormalizer']) ? $this->services['Pimcore\Controller\Config\ConfigNormalizer'] : $this->services['Pimcore\Controller\Config\ConfigNormalizer'] = new \Pimcore\Controller\Config\ConfigNormalizer(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'});
    }

    /*
     * Gets the public 'pimcore.templating.engine.php' shared service.
     *
     * @return \Pimcore\Templating\PhpEngine
     */
    protected function getPimcore_Templating_Engine_PhpService()
    {
        $this->services['pimcore.templating.engine.php'] = $instance = new \Pimcore\Templating\PhpEngine(${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'}, new \Symfony\Component\DependencyInjection\ServiceLocator(array('AppBundle\\Templating\\Helper\\LanguageSwitcher' => function () {
            return ${($_ = isset($this->services['AppBundle\Templating\Helper\LanguageSwitcher']) ? $this->services['AppBundle\Templating\Helper\LanguageSwitcher'] : $this->load('getLanguageSwitcherService.php')) && false ?: '_'};
        }, 'Pimcore\\Templating\\Helper\\Action' => function () {
            return ${($_ = isset($this->services['Pimcore\Templating\Helper\Action']) ? $this->services['Pimcore\Templating\Helper\Action'] : $this->getActionService()) && false ?: '_'};
        }, 'Pimcore\\Templating\\Helper\\Cache' => function () {
            return ${($_ = isset($this->services['Pimcore\Templating\Helper\Cache']) ? $this->services['Pimcore\Templating\Helper\Cache'] : $this->load('getCacheService.php')) && false ?: '_'};
        }, 'Pimcore\\Templating\\Helper\\Device' => function () {
            return ${($_ = isset($this->services['Pimcore\Templating\Helper\Device']) ? $this->services['Pimcore\Templating\Helper\Device'] : $this->services['Pimcore\Templating\Helper\Device'] = new \Pimcore\Templating\Helper\Device()) && false ?: '_'};
        }, 'Pimcore\\Templating\\Helper\\GetAllParams' => function () {
            return ${($_ = isset($this->services['Pimcore\Templating\Helper\GetAllParams']) ? $this->services['Pimcore\Templating\Helper\GetAllParams'] : $this->load('getGetAllParamsService.php')) && false ?: '_'};
        }, 'Pimcore\\Templating\\Helper\\GetParam' => function () {
            return ${($_ = isset($this->services['Pimcore\Templating\Helper\GetParam']) ? $this->services['Pimcore\Templating\Helper\GetParam'] : $this->load('getGetParamService.php')) && false ?: '_'};
        }, 'Pimcore\\Templating\\Helper\\Glossary' => function () {
            return ${($_ = isset($this->services['Pimcore\Templating\Helper\Glossary']) ? $this->services['Pimcore\Templating\Helper\Glossary'] : $this->getGlossaryService()) && false ?: '_'};
        }, 'Pimcore\\Templating\\Helper\\HeadLink' => function () {
            return ${($_ = isset($this->services['Pimcore\Templating\Helper\HeadLink']) ? $this->services['Pimcore\Templating\Helper\HeadLink'] : $this->load('getHeadLinkService.php')) && false ?: '_'};
        }, 'Pimcore\\Templating\\Helper\\HeadMeta' => function () {
            return ${($_ = isset($this->services['Pimcore\Templating\Helper\HeadMeta']) ? $this->services['Pimcore\Templating\Helper\HeadMeta'] : $this->getHeadMetaService()) && false ?: '_'};
        }, 'Pimcore\\Templating\\Helper\\HeadScript' => function () {
            return ${($_ = isset($this->services['Pimcore\Templating\Helper\HeadScript']) ? $this->services['Pimcore\Templating\Helper\HeadScript'] : $this->load('getHeadScriptService.php')) && false ?: '_'};
        }, 'Pimcore\\Templating\\Helper\\HeadStyle' => function () {
            return ${($_ = isset($this->services['Pimcore\Templating\Helper\HeadStyle']) ? $this->services['Pimcore\Templating\Helper\HeadStyle'] : $this->load('getHeadStyleService.php')) && false ?: '_'};
        }, 'Pimcore\\Templating\\Helper\\HeadTitle' => function () {
            return ${($_ = isset($this->services['Pimcore\Templating\Helper\HeadTitle']) ? $this->services['Pimcore\Templating\Helper\HeadTitle'] : $this->load('getHeadTitleService.php')) && false ?: '_'};
        }, 'Pimcore\\Templating\\Helper\\Inc' => function () {
            return ${($_ = isset($this->services['Pimcore\Templating\Helper\Inc']) ? $this->services['Pimcore\Templating\Helper\Inc'] : $this->getIncService()) && false ?: '_'};
        }, 'Pimcore\\Templating\\Helper\\InlineScript' => function () {
            return ${($_ = isset($this->services['Pimcore\Templating\Helper\InlineScript']) ? $this->services['Pimcore\Templating\Helper\InlineScript'] : $this->load('getInlineScriptService.php')) && false ?: '_'};
        }, 'Pimcore\\Templating\\Helper\\Navigation' => function () {
            return ${($_ = isset($this->services['Pimcore\Templating\Helper\Navigation']) ? $this->services['Pimcore\Templating\Helper\Navigation'] : $this->getNavigationService()) && false ?: '_'};
        }, 'Pimcore\\Templating\\Helper\\PimcoreUrl' => function () {
            return ${($_ = isset($this->services['Pimcore\Templating\Helper\PimcoreUrl']) ? $this->services['Pimcore\Templating\Helper\PimcoreUrl'] : $this->load('getPimcoreUrlService.php')) && false ?: '_'};
        }, 'Pimcore\\Templating\\Helper\\Placeholder' => function () {
            return ${($_ = isset($this->services['Pimcore\Templating\Helper\Placeholder']) ? $this->services['Pimcore\Templating\Helper\Placeholder'] : $this->load('getPlaceholderService.php')) && false ?: '_'};
        }, 'Pimcore\\Templating\\Helper\\WebLink' => function () {
            return ${($_ = isset($this->services['Pimcore\Templating\Helper\WebLink']) ? $this->services['Pimcore\Templating\Helper\WebLink'] : $this->load('getWebLinkService.php')) && false ?: '_'};
        }, 'Pimcore\\Templating\\Helper\\WebsiteConfig' => function () {
            return ${($_ = isset($this->services['Pimcore\Templating\Helper\WebsiteConfig']) ? $this->services['Pimcore\Templating\Helper\WebsiteConfig'] : $this->services['Pimcore\Templating\Helper\WebsiteConfig'] = new \Pimcore\Templating\Helper\WebsiteConfig()) && false ?: '_'};
        }, 'pimcore.templating.view_helper.translate' => function () {
            return ${($_ = isset($this->services['pimcore.templating.view_helper.translate']) ? $this->services['pimcore.templating.view_helper.translate'] : $this->load('getPimcore_Templating_ViewHelper_TranslateService.php')) && false ?: '_'};
        }, 'pimcore.templating.view_helper.translate_admin' => function () {
            return ${($_ = isset($this->services['pimcore.templating.view_helper.translate_admin']) ? $this->services['pimcore.templating.view_helper.translate_admin'] : $this->load('getPimcore_Templating_ViewHelper_TranslateAdminService.php')) && false ?: '_'};
        }, 'templating.helper.actions' => function () {
            return ${($_ = isset($this->services['templating.helper.actions']) ? $this->services['templating.helper.actions'] : $this->getTemplating_Helper_ActionsService()) && false ?: '_'};
        }, 'templating.helper.assets' => function () {
            return ${($_ = isset($this->services['templating.helper.assets']) ? $this->services['templating.helper.assets'] : $this->load('getTemplating_Helper_AssetsService.php')) && false ?: '_'};
        }, 'templating.helper.code' => function () {
            return ${($_ = isset($this->services['templating.helper.code']) ? $this->services['templating.helper.code'] : $this->load('getTemplating_Helper_CodeService.php')) && false ?: '_'};
        }, 'templating.helper.form' => function () {
            return ${($_ = isset($this->services['templating.helper.form']) ? $this->services['templating.helper.form'] : $this->load('getTemplating_Helper_FormService.php')) && false ?: '_'};
        }, 'templating.helper.logout_url' => function () {
            return ${($_ = isset($this->services['templating.helper.logout_url']) ? $this->services['templating.helper.logout_url'] : $this->load('getTemplating_Helper_LogoutUrlService.php')) && false ?: '_'};
        }, 'templating.helper.request' => function () {
            return ${($_ = isset($this->services['templating.helper.request']) ? $this->services['templating.helper.request'] : $this->load('getTemplating_Helper_RequestService.php')) && false ?: '_'};
        }, 'templating.helper.router' => function () {
            return ${($_ = isset($this->services['templating.helper.router']) ? $this->services['templating.helper.router'] : $this->load('getTemplating_Helper_RouterService.php')) && false ?: '_'};
        }, 'templating.helper.security' => function () {
            return ${($_ = isset($this->services['templating.helper.security']) ? $this->services['templating.helper.security'] : $this->load('getTemplating_Helper_SecurityService.php')) && false ?: '_'};
        }, 'templating.helper.session' => function () {
            return ${($_ = isset($this->services['templating.helper.session']) ? $this->services['templating.helper.session'] : $this->load('getTemplating_Helper_SessionService.php')) && false ?: '_'};
        }, 'templating.helper.slots' => function () {
            return ${($_ = isset($this->services['templating.helper.slots']) ? $this->services['templating.helper.slots'] : $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper()) && false ?: '_'};
        }, 'templating.helper.stopwatch' => function () {
            return ${($_ = isset($this->services['templating.helper.stopwatch']) ? $this->services['templating.helper.stopwatch'] : $this->load('getTemplating_Helper_StopwatchService.php')) && false ?: '_'};
        }, 'templating.helper.translator' => function () {
            return ${($_ = isset($this->services['templating.helper.translator']) ? $this->services['templating.helper.translator'] : $this->load('getTemplating_Helper_TranslatorService.php')) && false ?: '_'};
        })), ${($_ = isset($this->services['templating.loader']) ? $this->services['templating.loader'] : $this->getTemplating_LoaderService()) && false ?: '_'}, ${($_ = isset($this->services['templating.globals']) ? $this->services['templating.globals'] : $this->services['templating.globals'] = new \Pimcore\Templating\GlobalVariables($this)) && false ?: '_'});

        $instance->setCharset('UTF-8');
        $instance->setHelpers(array('slots' => 'templating.helper.slots', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'assets' => 'templating.helper.assets', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'stopwatch' => 'templating.helper.stopwatch', 'logout_url' => 'templating.helper.logout_url', 'security' => 'templating.helper.security', 'action' => 'Pimcore\\Templating\\Helper\\Action', 'getParam' => 'Pimcore\\Templating\\Helper\\GetParam', 'getAllParams' => 'Pimcore\\Templating\\Helper\\GetAllParams', 'glossary' => 'Pimcore\\Templating\\Helper\\Glossary', 'inc' => 'Pimcore\\Templating\\Helper\\Inc', 'pimcoreUrl' => 'Pimcore\\Templating\\Helper\\PimcoreUrl', 'placeholder' => 'Pimcore\\Templating\\Helper\\Placeholder', 'headTitle' => 'Pimcore\\Templating\\Helper\\HeadTitle', 'headLink' => 'Pimcore\\Templating\\Helper\\HeadLink', 'headScript' => 'Pimcore\\Templating\\Helper\\HeadScript', 'inlineScript' => 'Pimcore\\Templating\\Helper\\InlineScript', 'headStyle' => 'Pimcore\\Templating\\Helper\\HeadStyle', 'headMeta' => 'Pimcore\\Templating\\Helper\\HeadMeta', 'webLink' => 'Pimcore\\Templating\\Helper\\WebLink', 'device' => 'Pimcore\\Templating\\Helper\\Device', 'cache' => 'Pimcore\\Templating\\Helper\\Cache', 'navigation' => 'Pimcore\\Templating\\Helper\\Navigation', 'websiteConfig' => 'Pimcore\\Templating\\Helper\\WebsiteConfig', 'translate' => 'pimcore.templating.view_helper.translate', 'translateAdmin' => 'pimcore.templating.view_helper.translate_admin', 'languageSwitcher' => 'AppBundle\\Templating\\Helper\\LanguageSwitcher'));
        $instance->addHelperBroker(new \Pimcore\Templating\HelperBroker\HelperShortcuts(${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->getRequestHelperService()) && false ?: '_'}));
        $instance->addHelperBroker(new \Pimcore\Templating\HelperBroker\TemplatingHelper());
        $instance->addHelperBroker(new \Pimcore\Templating\HelperBroker\DocumentTag(${($_ = isset($this->services['pimcore.templating.tag_renderer']) ? $this->services['pimcore.templating.tag_renderer'] : $this->getPimcore_Templating_TagRendererService()) && false ?: '_'}));
        $instance->addHelperBroker(new \Pimcore\Templating\HelperBroker\DocumentMethod());

        return $instance;
    }

    /*
     * Gets the public 'pimcore.templating.engine.twig' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine
     */
    protected function getPimcore_Templating_Engine_TwigService()
    {
        return $this->services['pimcore.templating.engine.twig'] = new \Symfony\Bundle\TwigBundle\TwigEngine(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'}, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /*
     * Gets the public 'pimcore.templating.include_renderer' shared autowired service.
     *
     * @return \Pimcore\Templating\Renderer\IncludeRenderer
     */
    protected function getPimcore_Templating_IncludeRendererService()
    {
        return $this->services['pimcore.templating.include_renderer'] = new \Pimcore\Templating\Renderer\IncludeRenderer(${($_ = isset($this->services['pimcore.templating.action_renderer']) ? $this->services['pimcore.templating.action_renderer'] : $this->getPimcore_Templating_ActionRendererService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Targeting\Document\DocumentTargetingConfigurator']) ? $this->services['Pimcore\Targeting\Document\DocumentTargetingConfigurator'] : $this->getDocumentTargetingConfiguratorService()) && false ?: '_'});
    }

    /*
     * Gets the public 'pimcore.templating.tag_renderer' shared autowired service.
     *
     * @return \Pimcore\Templating\Renderer\TagRenderer
     */
    protected function getPimcore_Templating_TagRendererService()
    {
        $this->services['pimcore.templating.tag_renderer'] = $instance = new \Pimcore\Templating\Renderer\TagRenderer(${($_ = isset($this->services['pimcore.implementation_loader.document.tag']) ? $this->services['pimcore.implementation_loader.document.tag'] : $this->getPimcore_ImplementationLoader_Document_TagService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\EditmodeResolver']) ? $this->services['Pimcore\Http\Request\Resolver\EditmodeResolver'] : $this->getEditmodeResolverService()) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'pimcore.templating.view_helper.placeholder.container_service' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\Placeholder\ContainerService
     */
    protected function getPimcore_Templating_ViewHelper_Placeholder_ContainerServiceService()
    {
        $this->services['pimcore.templating.view_helper.placeholder.container_service'] = $instance = new \Pimcore\Templating\Helper\Placeholder\ContainerService();

        $instance->setEventDispatcher(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'pimcore.twig.extension.document_tag' shared autowired service.
     *
     * @return \Pimcore\Twig\Extension\DocumentTagExtension
     */
    protected function getPimcore_Twig_Extension_DocumentTagService()
    {
        return $this->services['pimcore.twig.extension.document_tag'] = new \Pimcore\Twig\Extension\DocumentTagExtension(${($_ = isset($this->services['pimcore.templating.tag_renderer']) ? $this->services['pimcore.templating.tag_renderer'] : $this->getPimcore_Templating_TagRendererService()) && false ?: '_'});
    }

    /*
     * Gets the public 'pimcore.twig.extension.glossary' shared autowired service.
     *
     * @return \Pimcore\Twig\Extension\GlossaryExtension
     */
    protected function getPimcore_Twig_Extension_GlossaryService()
    {
        return $this->services['pimcore.twig.extension.glossary'] = new \Pimcore\Twig\Extension\GlossaryExtension(${($_ = isset($this->services['Pimcore\Templating\Helper\Glossary']) ? $this->services['Pimcore\Templating\Helper\Glossary'] : $this->getGlossaryService()) && false ?: '_'});
    }

    /*
     * Gets the public 'pimcore.twig.extension.helpers' shared autowired service.
     *
     * @return \Pimcore\Twig\Extension\HelpersExtension
     */
    protected function getPimcore_Twig_Extension_HelpersService()
    {
        return $this->services['pimcore.twig.extension.helpers'] = new \Pimcore\Twig\Extension\HelpersExtension();
    }

    /*
     * Gets the public 'pimcore.twig.extension.navigation' shared autowired service.
     *
     * @return \Pimcore\Twig\Extension\NavigationExtension
     */
    protected function getPimcore_Twig_Extension_NavigationService()
    {
        return $this->services['pimcore.twig.extension.navigation'] = new \Pimcore\Twig\Extension\NavigationExtension(${($_ = isset($this->services['Pimcore\Templating\Helper\Navigation']) ? $this->services['Pimcore\Templating\Helper\Navigation'] : $this->getNavigationService()) && false ?: '_'});
    }

    /*
     * Gets the public 'pimcore.twig.extension.pimcore_object' shared autowired service.
     *
     * @return \Pimcore\Twig\Extension\PimcoreObjectExtension
     */
    protected function getPimcore_Twig_Extension_PimcoreObjectService()
    {
        return $this->services['pimcore.twig.extension.pimcore_object'] = new \Pimcore\Twig\Extension\PimcoreObjectExtension();
    }

    /*
     * Gets the public 'pimcore.twig.extension.subrequest' shared autowired service.
     *
     * @return \Pimcore\Twig\Extension\SubrequestExtension
     */
    protected function getPimcore_Twig_Extension_SubrequestService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['pimcore.twig.extension.subrequest'] = $this->createProxy('SubrequestExtension_ac4dffd', function () {
                return \SubrequestExtension_ac4dffd::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getPimcore_Twig_Extension_SubrequestService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return new \Pimcore\Twig\Extension\SubrequestExtension(${($_ = isset($this->services['Pimcore\Templating\Helper\Inc']) ? $this->services['Pimcore\Templating\Helper\Inc'] : $this->getIncService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Templating\Helper\Action']) ? $this->services['Pimcore\Templating\Helper\Action'] : $this->getActionService()) && false ?: '_'});
    }

    /*
     * Gets the public 'pimcore.twig.extension.templating_helper' shared autowired service.
     *
     * @return \Pimcore\Twig\Extension\TemplatingHelperExtension
     */
    protected function getPimcore_Twig_Extension_TemplatingHelperService()
    {
        return $this->services['pimcore.twig.extension.templating_helper'] = new \Pimcore\Twig\Extension\TemplatingHelperExtension(${($_ = isset($this->services['pimcore.templating.engine.php']) ? $this->services['pimcore.templating.engine.php'] : $this->getPimcore_Templating_Engine_PhpService()) && false ?: '_'});
    }

    /*
     * Gets the public 'pimcore_admin.security.bruteforce_protection_handler' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Security\BruteforceProtectionHandler
     */
    protected function getPimcoreAdmin_Security_BruteforceProtectionHandlerService()
    {
        $this->services['pimcore_admin.security.bruteforce_protection_handler'] = $instance = new \Pimcore\Bundle\AdminBundle\Security\BruteforceProtectionHandler(${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->getRequestHelperService()) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->getMonolog_Logger_SecurityService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.access.decision_manager']) ? $this->services['security.access.decision_manager'] : $this->getSecurity_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /*
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /*
     * Gets the public 'templating' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\DelegatingEngine
     */
    protected function getTemplatingService()
    {
        $this->services['templating'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\DelegatingEngine($this, array());

        $instance->addEngine(${($_ = isset($this->services['pimcore.templating.engine.php']) ? $this->services['pimcore.templating.engine.php'] : $this->getPimcore_Templating_Engine_PhpService()) && false ?: '_'});
        $instance->addEngine(${($_ = isset($this->services['pimcore.templating.engine.twig']) ? $this->services['pimcore.templating.engine.twig'] : $this->getPimcore_Templating_Engine_TwigService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the public 'templating.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /*
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig\Environment(${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->getTwig_LoaderService()) && false ?: '_'}, array('debug' => false, 'strict_variables' => false, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => $this->parameters['twig.form.resources'], 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8', 'default_path' => ($this->targetDirs[3].'/templates'), 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $a = ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'};

        $b = new \Symfony\Bridge\Twig\AppVariable();
        $b->setEnvironment('prod');
        $b->setDebug(false);
        if ($this->has('security.token_storage')) {
            $b->setTokenStorage(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'});
        }
        if ($this->has('request_stack')) {
            $b->setRequestStack($a);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(${($_ = isset($this->services['Pimcore\Translation\Translator']) ? $this->services['Pimcore\Translation\Translator'] : $this->getTranslatorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->getAssets_PackagesService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL)) && false ?: '_'}, ($this->targetDirs[3].'/app'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(${($_ = isset($this->services['cmf_routing.router']) ? $this->services['cmf_routing.router'] : $this->getCmfRouting_RouterService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}, false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($a, ${($_ = isset($this->services['pimcore.routing.router.request_context']) ? $this->services['pimcore.routing.router.request_context'] : $this->getPimcore_Routing_Router_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(${($_ = isset($this->services['twig.extension.weblink']) ? $this->services['twig.extension.weblink'] : $this->getTwig_Extension_WeblinkService()) && false ?: '_'});
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(${($_ = isset($this->services['pimcore.twig.extension.helpers']) ? $this->services['pimcore.twig.extension.helpers'] : $this->services['pimcore.twig.extension.helpers'] = new \Pimcore\Twig\Extension\HelpersExtension()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['pimcore.twig.extension.document_tag']) ? $this->services['pimcore.twig.extension.document_tag'] : $this->getPimcore_Twig_Extension_DocumentTagService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['pimcore.twig.extension.subrequest']) ? $this->services['pimcore.twig.extension.subrequest'] : $this->getPimcore_Twig_Extension_SubrequestService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['pimcore.twig.extension.pimcore_object']) ? $this->services['pimcore.twig.extension.pimcore_object'] : $this->services['pimcore.twig.extension.pimcore_object'] = new \Pimcore\Twig\Extension\PimcoreObjectExtension()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['pimcore.twig.extension.templating_helper']) ? $this->services['pimcore.twig.extension.templating_helper'] : $this->getPimcore_Twig_Extension_TemplatingHelperService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['pimcore.twig.extension.navigation']) ? $this->services['pimcore.twig.extension.navigation'] : $this->getPimcore_Twig_Extension_NavigationService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['pimcore.twig.extension.glossary']) ? $this->services['pimcore.twig.extension.glossary'] : $this->getPimcore_Twig_Extension_GlossaryService()) && false ?: '_'});
        $instance->addExtension(new \Pimcore\Twig\Extension\AssetCompressExtension());
        $instance->addExtension(new \Pimcore\Twig\Extension\WebsiteConfigExtension());
        $instance->addExtension(new \Pimcore\Twig\Extension\DumpExtension());
        $instance->addExtension(new \Phive\Twig\Extensions\Deferred\DeferredExtension());
        $instance->addExtension(new \Twig_Extensions_Extension_Text());
        $instance->addGlobal('app', $b);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ${($_ = isset($this->services['twig.runtime.httpkernel']) ? $this->services['twig.runtime.httpkernel'] : $this->load('getTwig_Runtime_HttpkernelService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\FormRenderer' => function () {
            return ${($_ = isset($this->services['twig.form.renderer']) ? $this->services['twig.form.renderer'] : $this->load('getTwig_Form_RendererService.php')) && false ?: '_'};
        }))));
        $instance->addGlobal('container', $this);
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Analytics\Google\Config\ConfigProvider' shared autowired service.
     *
     * @return \Pimcore\Analytics\Google\Config\ConfigProvider
     */
    protected function getConfigProviderService()
    {
        return $this->services['Pimcore\Analytics\Google\Config\ConfigProvider'] = new \Pimcore\Analytics\Google\Config\ConfigProvider();
    }

    /*
     * Gets the private 'Pimcore\Analytics\Google\Tracker' shared autowired service.
     *
     * @return \Pimcore\Analytics\Google\Tracker
     */
    protected function getTrackerService()
    {
        $this->services['Pimcore\Analytics\Google\Tracker'] = $instance = new \Pimcore\Analytics\Google\Tracker(${($_ = isset($this->services['Pimcore\Analytics\SiteId\SiteIdProvider']) ? $this->services['Pimcore\Analytics\SiteId\SiteIdProvider'] : $this->getSiteIdProviderService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Analytics\Google\Config\ConfigProvider']) ? $this->services['Pimcore\Analytics\Google\Config\ConfigProvider'] : $this->services['Pimcore\Analytics\Google\Config\ConfigProvider'] = new \Pimcore\Analytics\Google\Config\ConfigProvider()) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->getTemplatingService()) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Analytics\Piwik\Config\ConfigProvider' shared autowired service.
     *
     * @return \Pimcore\Analytics\Piwik\Config\ConfigProvider
     */
    protected function getConfigProvider2Service()
    {
        return $this->services['Pimcore\Analytics\Piwik\Config\ConfigProvider'] = new \Pimcore\Analytics\Piwik\Config\ConfigProvider();
    }

    /*
     * Gets the private 'Pimcore\Analytics\Piwik\EventListener\TrackingCodeListener' shared autowired service.
     *
     * @return \Pimcore\Analytics\Piwik\EventListener\TrackingCodeListener
     */
    protected function getTrackingCodeListenerService()
    {
        $this->services['Pimcore\Analytics\Piwik\EventListener\TrackingCodeListener'] = $instance = new \Pimcore\Analytics\Piwik\EventListener\TrackingCodeListener(new \Pimcore\Analytics\Piwik\Tracker(${($_ = isset($this->services['Pimcore\Analytics\SiteId\SiteIdProvider']) ? $this->services['Pimcore\Analytics\SiteId\SiteIdProvider'] : $this->getSiteIdProviderService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Analytics\Piwik\Config\ConfigProvider']) ? $this->services['Pimcore\Analytics\Piwik\Config\ConfigProvider'] : $this->services['Pimcore\Analytics\Piwik\Config\ConfigProvider'] = new \Pimcore\Analytics\Piwik\Config\ConfigProvider()) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->getTemplatingService()) && false ?: '_'}));

        $instance->setResponseHelper(${($_ = isset($this->services['Pimcore\Http\ResponseHelper']) ? $this->services['Pimcore\Http\ResponseHelper'] : $this->services['Pimcore\Http\ResponseHelper'] = new \Pimcore\Http\ResponseHelper()) && false ?: '_'});
        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Analytics\SiteId\SiteIdProvider' shared autowired service.
     *
     * @return \Pimcore\Analytics\SiteId\SiteIdProvider
     */
    protected function getSiteIdProviderService()
    {
        return $this->services['Pimcore\Analytics\SiteId\SiteIdProvider'] = new \Pimcore\Analytics\SiteId\SiteIdProvider(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\SiteResolver']) ? $this->services['Pimcore\Http\Request\Resolver\SiteResolver'] : $this->getSiteResolverService()) && false ?: '_'});
    }

    /*
     * Gets the private 'Pimcore\Bundle\AdminBundle\EventListener\AdminAuthenticationDoubleCheckListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\EventListener\AdminAuthenticationDoubleCheckListener
     */
    protected function getAdminAuthenticationDoubleCheckListenerService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\EventListener\AdminAuthenticationDoubleCheckListener'] = new \Pimcore\Bundle\AdminBundle\EventListener\AdminAuthenticationDoubleCheckListener(${($_ = isset($this->services['pimcore.service.request_matcher_factory']) ? $this->services['pimcore.service.request_matcher_factory'] : $this->services['pimcore.service.request_matcher_factory'] = new \Pimcore\Http\RequestMatcherFactory()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver'] : $this->getTokenStorageUserResolverService()) && false ?: '_'}, $this->parameters['pimcore.admin.unauthenticated_routes']);
    }

    /*
     * Gets the private 'Pimcore\Bundle\AdminBundle\EventListener\BruteforceProtectionListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\EventListener\BruteforceProtectionListener
     */
    protected function getBruteforceProtectionListenerService()
    {
        $this->services['Pimcore\Bundle\AdminBundle\EventListener\BruteforceProtectionListener'] = $instance = new \Pimcore\Bundle\AdminBundle\EventListener\BruteforceProtectionListener(${($_ = isset($this->services['pimcore_admin.security.bruteforce_protection_handler']) ? $this->services['pimcore_admin.security.bruteforce_protection_handler'] : $this->getPimcoreAdmin_Security_BruteforceProtectionHandlerService()) && false ?: '_'});

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\AdminBundle\EventListener\EnablePreviewTimeSliderListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\EventListener\EnablePreviewTimeSliderListener
     */
    protected function getEnablePreviewTimeSliderListenerService()
    {
        $this->services['Pimcore\Bundle\AdminBundle\EventListener\EnablePreviewTimeSliderListener'] = $instance = new \Pimcore\Bundle\AdminBundle\EventListener\EnablePreviewTimeSliderListener(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\OutputTimestampResolver']) ? $this->services['Pimcore\Http\Request\Resolver\OutputTimestampResolver'] : $this->getOutputTimestampResolverService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->getRequestHelperService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\EditmodeResolver']) ? $this->services['Pimcore\Http\Request\Resolver\EditmodeResolver'] : $this->getEditmodeResolverService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\DocumentResolver']) ? $this->services['Pimcore\Http\Request\Resolver\DocumentResolver'] : $this->getDocumentResolverService()) && false ?: '_'});

        $instance->setResponseHelper(${($_ = isset($this->services['Pimcore\Http\ResponseHelper']) ? $this->services['Pimcore\Http\ResponseHelper'] : $this->services['Pimcore\Http\ResponseHelper'] = new \Pimcore\Http\ResponseHelper()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\AdminBundle\EventListener\HttpCacheListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\EventListener\HttpCacheListener
     */
    protected function getHttpCacheListenerService()
    {
        $this->services['Pimcore\Bundle\AdminBundle\EventListener\HttpCacheListener'] = $instance = new \Pimcore\Bundle\AdminBundle\EventListener\HttpCacheListener(${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->getRequestHelperService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\ResponseHelper']) ? $this->services['Pimcore\Http\ResponseHelper'] : $this->services['Pimcore\Http\ResponseHelper'] = new \Pimcore\Http\ResponseHelper()) && false ?: '_'});

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\AdminBundle\EventListener\UsageStatisticsListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\EventListener\UsageStatisticsListener
     */
    protected function getUsageStatisticsListenerService()
    {
        $this->services['Pimcore\Bundle\AdminBundle\EventListener\UsageStatisticsListener'] = $instance = new \Pimcore\Bundle\AdminBundle\EventListener\UsageStatisticsListener(${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver'] : $this->getTokenStorageUserResolverService()) && false ?: '_'});

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\AdminBundle\EventListener\UserPerspectiveListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\EventListener\UserPerspectiveListener
     */
    protected function getUserPerspectiveListenerService()
    {
        $this->services['Pimcore\Bundle\AdminBundle\EventListener\UserPerspectiveListener'] = $instance = new \Pimcore\Bundle\AdminBundle\EventListener\UserPerspectiveListener(${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver'] : $this->getTokenStorageUserResolverService()) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['monolog.logger.admin']) ? $this->services['monolog.logger.admin'] : $this->getMonolog_Logger_AdminService()) && false ?: '_'});
        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\AdminBundle\Security\User\UserLoader' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Security\User\UserLoader
     */
    protected function getUserLoaderService()
    {
        return $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserLoader'] = new \Pimcore\Bundle\AdminBundle\Security\User\UserLoader(${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\TokenStorageUserResolver'] : $this->getTokenStorageUserResolverService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->getRequestHelperService()) && false ?: '_'});
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\EventedControllerListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\EventedControllerListener
     */
    protected function getEventedControllerListenerService()
    {
        return $this->services['Pimcore\Bundle\CoreBundle\EventListener\EventedControllerListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\EventedControllerListener();
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\BlockStateListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\BlockStateListener
     */
    protected function getBlockStateListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\BlockStateListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\BlockStateListener(${($_ = isset($this->services['Pimcore\Document\Tag\Block\BlockStateStack']) ? $this->services['Pimcore\Document\Tag\Block\BlockStateStack'] : $this->services['Pimcore\Document\Tag\Block\BlockStateStack'] = new \Pimcore\Document\Tag\Block\BlockStateStack()) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentFallbackListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentFallbackListener
     */
    protected function getDocumentFallbackListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentFallbackListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentFallbackListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\DocumentResolver']) ? $this->services['Pimcore\Http\Request\Resolver\DocumentResolver'] : $this->getDocumentResolverService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\SiteResolver']) ? $this->services['Pimcore\Http\Request\Resolver\SiteResolver'] : $this->getSiteResolverService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Model\Document\Service']) ? $this->services['Pimcore\Model\Document\Service'] : $this->services['Pimcore\Model\Document\Service'] = new \Pimcore\Model\Document\Service()) && false ?: '_'});

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentMetaDataListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentMetaDataListener
     */
    protected function getDocumentMetaDataListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentMetaDataListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\DocumentMetaDataListener(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\DocumentResolver']) ? $this->services['Pimcore\Http\Request\Resolver\DocumentResolver'] : $this->getDocumentResolverService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Templating\Helper\HeadMeta']) ? $this->services['Pimcore\Templating\Helper\HeadMeta'] : $this->getHeadMetaService()) && false ?: '_'});

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\EditmodeListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\EditmodeListener
     */
    protected function getEditmodeListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\EditmodeListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\EditmodeListener(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\EditmodeResolver']) ? $this->services['Pimcore\Http\Request\Resolver\EditmodeResolver'] : $this->getEditmodeResolverService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\DocumentResolver']) ? $this->services['Pimcore\Http\Request\Resolver\DocumentResolver'] : $this->getDocumentResolverService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\UserLoader']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserLoader'] : $this->getUserLoaderService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Extension\Bundle\PimcoreBundleManager']) ? $this->services['Pimcore\Extension\Bundle\PimcoreBundleManager'] : $this->getPimcoreBundleManagerService()) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\ElementListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\ElementListener
     */
    protected function getElementListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\ElementListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\ElementListener(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\DocumentResolver']) ? $this->services['Pimcore\Http\Request\Resolver\DocumentResolver'] : $this->getDocumentResolverService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\EditmodeResolver']) ? $this->services['Pimcore\Http\Request\Resolver\EditmodeResolver'] : $this->getEditmodeResolverService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->getRequestHelperService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Bundle\AdminBundle\Security\User\UserLoader']) ? $this->services['Pimcore\Bundle\AdminBundle\Security\User\UserLoader'] : $this->getUserLoaderService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Targeting\Document\DocumentTargetingConfigurator']) ? $this->services['Pimcore\Targeting\Document\DocumentTargetingConfigurator'] : $this->getDocumentTargetingConfiguratorService()) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['monolog.logger.init']) ? $this->services['monolog.logger.init'] : $this->getMonolog_Logger_InitService()) && false ?: '_'});
        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\FrontendRoutingListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\FrontendRoutingListener
     */
    protected function getFrontendRoutingListenerService()
    {
        $a = ${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->getRequestHelperService()) && false ?: '_'};
        $b = ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\SiteResolver']) ? $this->services['Pimcore\Http\Request\Resolver\SiteResolver'] : $this->getSiteResolverService()) && false ?: '_'};

        $c = new \Pimcore\Routing\RedirectHandler();
        $c->setLogger(${($_ = isset($this->services['monolog.logger.routing']) ? $this->services['monolog.logger.routing'] : $this->getMonolog_Logger_RoutingService()) && false ?: '_'});
        $c->setRequestHelper($a);
        $c->setSiteResolver($b);

        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\FrontendRoutingListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\FrontendRoutingListener($a, $c, $b);

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleSearchConsoleVerificationListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleSearchConsoleVerificationListener
     */
    protected function getGoogleSearchConsoleVerificationListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleSearchConsoleVerificationListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\GoogleSearchConsoleVerificationListener();

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\HardlinkCanonicalListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\HardlinkCanonicalListener
     */
    protected function getHardlinkCanonicalListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\HardlinkCanonicalListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\HardlinkCanonicalListener(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\DocumentResolver']) ? $this->services['Pimcore\Http\Request\Resolver\DocumentResolver'] : $this->getDocumentResolverService()) && false ?: '_'});

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\InternalWysiwygHtmlAttributeFilterListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\InternalWysiwygHtmlAttributeFilterListener
     */
    protected function getInternalWysiwygHtmlAttributeFilterListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\InternalWysiwygHtmlAttributeFilterListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\InternalWysiwygHtmlAttributeFilterListener();

        $instance->setResponseHelper(${($_ = isset($this->services['Pimcore\Http\ResponseHelper']) ? $this->services['Pimcore\Http\ResponseHelper'] : $this->services['Pimcore\Http\ResponseHelper'] = new \Pimcore\Http\ResponseHelper()) && false ?: '_'});
        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\LocaleListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\LocaleListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\LocaleListener();

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\Frontend\OutputTimestampListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\Frontend\OutputTimestampListener
     */
    protected function getOutputTimestampListenerService()
    {
        return $this->services['Pimcore\Bundle\CoreBundle\EventListener\Frontend\OutputTimestampListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\Frontend\OutputTimestampListener(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\OutputTimestampResolver']) ? $this->services['Pimcore\Http\Request\Resolver\OutputTimestampResolver'] : $this->getOutputTimestampResolverService()) && false ?: '_'});
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\MaintenancePageListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\MaintenancePageListener
     */
    protected function getMaintenancePageListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\MaintenancePageListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\MaintenancePageListener(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});

        $instance->loadTemplateFromResource('@PimcoreCoreBundle/Resources/misc/maintenance.html');
        $instance->setResponseHelper(${($_ = isset($this->services['Pimcore\Http\ResponseHelper']) ? $this->services['Pimcore\Http\ResponseHelper'] : $this->services['Pimcore\Http\ResponseHelper'] = new \Pimcore\Http\ResponseHelper()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\PimcoreContextListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\PimcoreContextListener
     */
    protected function getPimcoreContextListenerService()
    {
        $this->services['Pimcore\Bundle\CoreBundle\EventListener\PimcoreContextListener'] = $instance = new \Pimcore\Bundle\CoreBundle\EventListener\PimcoreContextListener(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\PimcoreHeaderListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\PimcoreHeaderListener
     */
    protected function getPimcoreHeaderListenerService()
    {
        return $this->services['Pimcore\Bundle\CoreBundle\EventListener\PimcoreHeaderListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\PimcoreHeaderListener();
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\ResponseHeaderListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\ResponseHeaderListener
     */
    protected function getResponseHeaderListenerService()
    {
        return $this->services['Pimcore\Bundle\CoreBundle\EventListener\ResponseHeaderListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\ResponseHeaderListener(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\ResponseHeaderResolver']) ? $this->services['Pimcore\Http\Request\Resolver\ResponseHeaderResolver'] : $this->getResponseHeaderResolverService()) && false ?: '_'});
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\ResponseStackListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\ResponseStackListener
     */
    protected function getResponseStackListenerService()
    {
        return $this->services['Pimcore\Bundle\CoreBundle\EventListener\ResponseStackListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\ResponseStackListener(${($_ = isset($this->services['Pimcore\Http\ResponseStack']) ? $this->services['Pimcore\Http\ResponseStack'] : $this->services['Pimcore\Http\ResponseStack'] = new \Pimcore\Http\ResponseStack()) && false ?: '_'});
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\TemplateControllerListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\TemplateControllerListener
     */
    protected function getTemplateControllerListenerService()
    {
        return $this->services['Pimcore\Bundle\CoreBundle\EventListener\TemplateControllerListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\TemplateControllerListener($this);
    }

    /*
     * Gets the private 'Pimcore\Bundle\CoreBundle\EventListener\TranslationDebugListener' shared autowired service.
     *
     * @return \Pimcore\Bundle\CoreBundle\EventListener\TranslationDebugListener
     */
    protected function getTranslationDebugListenerService()
    {
        return $this->services['Pimcore\Bundle\CoreBundle\EventListener\TranslationDebugListener'] = new \Pimcore\Bundle\CoreBundle\EventListener\TranslationDebugListener(${($_ = isset($this->services['Pimcore\Translation\Translator']) ? $this->services['Pimcore\Translation\Translator'] : $this->getTranslatorService()) && false ?: '_'}, 'pimcore_debug_translations');
    }

    /*
     * Gets the private 'Pimcore\Controller\Config\ConfigNormalizer' shared autowired service.
     *
     * @return \Pimcore\Controller\Config\ConfigNormalizer
     */
    protected function getConfigNormalizerService()
    {
        return $this->services['Pimcore\Controller\Config\ConfigNormalizer'] = new \Pimcore\Controller\Config\ConfigNormalizer(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /*
     * Gets the private 'Pimcore\Document\Tag\Block\BlockStateStack' shared autowired service.
     *
     * @return \Pimcore\Document\Tag\Block\BlockStateStack
     */
    protected function getBlockStateStackService()
    {
        return $this->services['Pimcore\Document\Tag\Block\BlockStateStack'] = new \Pimcore\Document\Tag\Block\BlockStateStack();
    }

    /*
     * Gets the private 'Pimcore\Http\ResponseStack' shared autowired service.
     *
     * @return \Pimcore\Http\ResponseStack
     */
    protected function getResponseStackService()
    {
        return $this->services['Pimcore\Http\ResponseStack'] = new \Pimcore\Http\ResponseStack();
    }

    /*
     * Gets the private 'Pimcore\Http\Response\CodeInjector' shared autowired service.
     *
     * @return \Pimcore\Http\Response\CodeInjector
     */
    protected function getCodeInjectorService()
    {
        return $this->services['Pimcore\Http\Response\CodeInjector'] = new \Pimcore\Http\Response\CodeInjector(${($_ = isset($this->services['Pimcore\Http\ResponseHelper']) ? $this->services['Pimcore\Http\ResponseHelper'] : $this->services['Pimcore\Http\ResponseHelper'] = new \Pimcore\Http\ResponseHelper()) && false ?: '_'});
    }

    /*
     * Gets the private 'Pimcore\Routing\Dynamic\DocumentRouteHandler' shared autowired service.
     *
     * @return \Pimcore\Routing\Dynamic\DocumentRouteHandler
     */
    protected function getDocumentRouteHandlerService()
    {
        return $this->services['Pimcore\Routing\Dynamic\DocumentRouteHandler'] = new \Pimcore\Routing\Dynamic\DocumentRouteHandler(${($_ = isset($this->services['Pimcore\Model\Document\Service']) ? $this->services['Pimcore\Model\Document\Service'] : $this->services['Pimcore\Model\Document\Service'] = new \Pimcore\Model\Document\Service()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\SiteResolver']) ? $this->services['Pimcore\Http\Request\Resolver\SiteResolver'] : $this->getSiteResolverService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->getRequestHelperService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Controller\Config\ConfigNormalizer']) ? $this->services['Pimcore\Controller\Config\ConfigNormalizer'] : $this->services['Pimcore\Controller\Config\ConfigNormalizer'] = new \Pimcore\Controller\Config\ConfigNormalizer(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'});
    }

    /*
     * Gets the private 'Pimcore\Targeting\ActionHandler\DelegatingActionHandler' shared autowired service.
     *
     * @return \Pimcore\Targeting\ActionHandler\DelegatingActionHandler
     */
    protected function getDelegatingActionHandlerService()
    {
        return $this->services['Pimcore\Targeting\ActionHandler\DelegatingActionHandler'] = new \Pimcore\Targeting\ActionHandler\DelegatingActionHandler(new \Symfony\Component\DependencyInjection\ServiceLocator(array('assign_target_group' => function () {
            return ${($_ = isset($this->services['Pimcore\Targeting\ActionHandler\AssignTargetGroup']) ? $this->services['Pimcore\Targeting\ActionHandler\AssignTargetGroup'] : $this->load('getAssignTargetGroupService.php')) && false ?: '_'};
        }, 'codesnippet' => function () {
            return ${($_ = isset($this->services['Pimcore\Targeting\ActionHandler\CodeSnippet']) ? $this->services['Pimcore\Targeting\ActionHandler\CodeSnippet'] : $this->load('getCodeSnippetService.php')) && false ?: '_'};
        }, 'redirect' => function () {
            return ${($_ = isset($this->services['Pimcore\Targeting\ActionHandler\Redirect']) ? $this->services['Pimcore\Targeting\ActionHandler\Redirect'] : $this->services['Pimcore\Targeting\ActionHandler\Redirect'] = new \Pimcore\Targeting\ActionHandler\Redirect()) && false ?: '_'};
        })), ${($_ = isset($this->services['Pimcore\Targeting\DataLoader']) ? $this->services['Pimcore\Targeting\DataLoader'] : $this->getDataLoaderService()) && false ?: '_'});
    }

    /*
     * Gets the private 'Pimcore\Targeting\ConditionMatcher' shared autowired service.
     *
     * @return \Pimcore\Targeting\ConditionMatcher
     */
    protected function getConditionMatcherService()
    {
        $a = ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'};

        return $this->services['Pimcore\Targeting\ConditionMatcher'] = new \Pimcore\Targeting\ConditionMatcher(new \Pimcore\Targeting\ConditionFactory($a, $this->parameters['pimcore.targeting.conditions']), ${($_ = isset($this->services['Pimcore\Targeting\DataLoader']) ? $this->services['Pimcore\Targeting\DataLoader'] : $this->getDataLoaderService()) && false ?: '_'}, $a, new \Symfony\Component\ExpressionLanguage\ExpressionLanguage(${($_ = isset($this->services['pimcore.cache.core.pool.doctrine']) ? $this->services['pimcore.cache.core.pool.doctrine'] : $this->getPimcore_Cache_Core_Pool_DoctrineService()) && false ?: '_'}), ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
    }

    /*
     * Gets the private 'Pimcore\Targeting\DataLoader' shared autowired service.
     *
     * @return \Pimcore\Targeting\DataLoader
     */
    protected function getDataLoaderService()
    {
        return $this->services['Pimcore\Targeting\DataLoader'] = new \Pimcore\Targeting\DataLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('device' => function () {
            return ${($_ = isset($this->services['Pimcore\Targeting\DataProvider\Device']) ? $this->services['Pimcore\Targeting\DataProvider\Device'] : $this->load('getDeviceService.php')) && false ?: '_'};
        }, 'geoip' => function () {
            return ${($_ = isset($this->services['Pimcore\Targeting\DataProvider\GeoIp']) ? $this->services['Pimcore\Targeting\DataProvider\GeoIp'] : $this->load('getGeoIpService.php')) && false ?: '_'};
        }, 'geolocation' => function () {
            return ${($_ = isset($this->services['Pimcore\Targeting\DataProvider\GeoLocation']) ? $this->services['Pimcore\Targeting\DataProvider\GeoLocation'] : $this->load('getGeoLocationService.php')) && false ?: '_'};
        }, 'piwik' => function () {
            return ${($_ = isset($this->services['Pimcore\Targeting\DataProvider\Piwik']) ? $this->services['Pimcore\Targeting\DataProvider\Piwik'] : $this->load('getPiwikService.php')) && false ?: '_'};
        }, 'targeting_storage' => function () {
            return ${($_ = isset($this->services['Pimcore\Targeting\DataProvider\TargetingStorage']) ? $this->services['Pimcore\Targeting\DataProvider\TargetingStorage'] : $this->load('getTargetingStorageService.php')) && false ?: '_'};
        }, 'visited_pages_counter' => function () {
            return ${($_ = isset($this->services['Pimcore\Targeting\DataProvider\VisitedPagesCounter']) ? $this->services['Pimcore\Targeting\DataProvider\VisitedPagesCounter'] : $this->load('getVisitedPagesCounterService.php')) && false ?: '_'};
        })));
    }

    /*
     * Gets the private 'Pimcore\Targeting\Debug\OverrideHandler' shared autowired service.
     *
     * @return \Pimcore\Targeting\Debug\OverrideHandler
     */
    protected function getOverrideHandlerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['Pimcore\Targeting\Debug\OverrideHandler'] = $this->createProxy('OverrideHandler_fb58919', function () {
                return \OverrideHandler_fb58919::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getOverrideHandlerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return new \Pimcore\Targeting\Debug\OverrideHandler(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->getForm_FactoryService()) && false ?: '_'}, array(0 => new \Pimcore\Targeting\Debug\Override\DocumentTargetingOverrideHandler(${($_ = isset($this->services['Pimcore\Targeting\Document\DocumentTargetingConfigurator']) ? $this->services['Pimcore\Targeting\Document\DocumentTargetingConfigurator'] : $this->getDocumentTargetingConfiguratorService()) && false ?: '_'}), 1 => new \Pimcore\Targeting\Debug\Override\LanguageOverrideHandler(), 2 => new \Pimcore\Targeting\Debug\Override\DeviceOverrideHandler(), 3 => new \Pimcore\Targeting\Debug\Override\LocationOverrideHandler()));
    }

    /*
     * Gets the private 'Pimcore\Targeting\EventListener\TargetingListener' shared autowired service.
     *
     * @return \Pimcore\Targeting\EventListener\TargetingListener
     */
    protected function getTargetingListenerService()
    {
        $a = ${($_ = isset($this->services['Pimcore\Targeting\VisitorInfoStorage']) ? $this->services['Pimcore\Targeting\VisitorInfoStorage'] : $this->services['Pimcore\Targeting\VisitorInfoStorage'] = new \Pimcore\Targeting\VisitorInfoStorage()) && false ?: '_'};
        $b = ${($_ = isset($this->services['Pimcore\Targeting\ActionHandler\DelegatingActionHandler']) ? $this->services['Pimcore\Targeting\ActionHandler\DelegatingActionHandler'] : $this->getDelegatingActionHandlerService()) && false ?: '_'};
        $c = ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'};

        $this->services['Pimcore\Targeting\EventListener\TargetingListener'] = $instance = new \Pimcore\Targeting\EventListener\TargetingListener(new \Pimcore\Targeting\VisitorInfoResolver(${($_ = isset($this->services['Pimcore\Targeting\Storage\TargetingStorageInterface']) ? $this->services['Pimcore\Targeting\Storage\TargetingStorageInterface'] : $this->getTargetingStorageInterfaceService()) && false ?: '_'}, $a, ${($_ = isset($this->services['Pimcore\Targeting\ConditionMatcher']) ? $this->services['Pimcore\Targeting\ConditionMatcher'] : $this->getConditionMatcherService()) && false ?: '_'}, $b, ${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, $c), $b, $a, ${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->getRequestHelperService()) && false ?: '_'}, new \Pimcore\Targeting\Code\TargetingCodeGenerator($c, ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->getTemplatingService()) && false ?: '_'}));

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});
        $instance->setResponseHelper(${($_ = isset($this->services['Pimcore\Http\ResponseHelper']) ? $this->services['Pimcore\Http\ResponseHelper'] : $this->services['Pimcore\Http\ResponseHelper'] = new \Pimcore\Http\ResponseHelper()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Targeting\EventListener\ToolbarListener' shared autowired service.
     *
     * @return \Pimcore\Targeting\EventListener\ToolbarListener
     */
    protected function getToolbarListenerService()
    {
        $this->services['Pimcore\Targeting\EventListener\ToolbarListener'] = $instance = new \Pimcore\Targeting\EventListener\ToolbarListener(${($_ = isset($this->services['Pimcore\Targeting\VisitorInfoStorage']) ? $this->services['Pimcore\Targeting\VisitorInfoStorage'] : $this->services['Pimcore\Targeting\VisitorInfoStorage'] = new \Pimcore\Targeting\VisitorInfoStorage()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\DocumentResolver']) ? $this->services['Pimcore\Http\Request\Resolver\DocumentResolver'] : $this->getDocumentResolverService()) && false ?: '_'}, new \Pimcore\Targeting\Debug\TargetingDataCollector(${($_ = isset($this->services['Pimcore\Targeting\Storage\TargetingStorageInterface']) ? $this->services['Pimcore\Targeting\Storage\TargetingStorageInterface'] : $this->getTargetingStorageInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Targeting\Document\DocumentTargetingConfigurator']) ? $this->services['Pimcore\Targeting\Document\DocumentTargetingConfigurator'] : $this->getDocumentTargetingConfiguratorService()) && false ?: '_'}), ${($_ = isset($this->services['Pimcore\Targeting\Debug\OverrideHandler']) ? $this->services['Pimcore\Targeting\Debug\OverrideHandler'] : $this->getOverrideHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->getTemplatingService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Response\CodeInjector']) ? $this->services['Pimcore\Http\Response\CodeInjector'] : $this->getCodeInjectorService()) && false ?: '_'});

        $instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Pimcore\Targeting\Storage\TargetingStorageInterface' shared autowired service.
     *
     * @return \Pimcore\Targeting\Storage\CookieStorage
     */
    protected function getTargetingStorageInterfaceService()
    {
        return $this->services['Pimcore\Targeting\Storage\TargetingStorageInterface'] = new \Pimcore\Targeting\Storage\CookieStorage(new \Pimcore\Targeting\Storage\Cookie\JWTCookieSaveHandler('ThisTokenIsNotSoSecretChangeIt', array(), NULL, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'}), ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});
    }

    /*
     * Gets the private 'Pimcore\Targeting\VisitorInfoStorage' shared autowired service.
     *
     * @return \Pimcore\Targeting\VisitorInfoStorage
     */
    protected function getVisitorInfoStorageService()
    {
        return $this->services['Pimcore\Targeting\VisitorInfoStorage'] = new \Pimcore\Targeting\VisitorInfoStorage();
    }

    /*
     * Gets the private 'Pimcore\Templating\Helper\Action' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\Action
     */
    protected function getActionService()
    {
        return $this->services['Pimcore\Templating\Helper\Action'] = new \Pimcore\Templating\Helper\Action(${($_ = isset($this->services['pimcore.templating.action_renderer']) ? $this->services['pimcore.templating.action_renderer'] : $this->getPimcore_Templating_ActionRendererService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Targeting\Document\DocumentTargetingConfigurator']) ? $this->services['Pimcore\Targeting\Document\DocumentTargetingConfigurator'] : $this->getDocumentTargetingConfiguratorService()) && false ?: '_'});
    }

    /*
     * Gets the private 'Pimcore\Templating\Helper\Glossary' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\Glossary
     */
    protected function getGlossaryService()
    {
        return $this->services['Pimcore\Templating\Helper\Glossary'] = new \Pimcore\Templating\Helper\Glossary(new \Pimcore\Tool\Glossary\Processor(${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->getRequestHelperService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\EditmodeResolver']) ? $this->services['Pimcore\Http\Request\Resolver\EditmodeResolver'] : $this->getEditmodeResolverService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\DocumentResolver']) ? $this->services['Pimcore\Http\Request\Resolver\DocumentResolver'] : $this->getDocumentResolverService()) && false ?: '_'}));
    }

    /*
     * Gets the private 'Pimcore\Templating\Helper\HeadMeta' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\HeadMeta
     */
    protected function getHeadMetaService()
    {
        return $this->services['Pimcore\Templating\Helper\HeadMeta'] = new \Pimcore\Templating\Helper\HeadMeta(${($_ = isset($this->services['pimcore.templating.view_helper.placeholder.container_service']) ? $this->services['pimcore.templating.view_helper.placeholder.container_service'] : $this->getPimcore_Templating_ViewHelper_Placeholder_ContainerServiceService()) && false ?: '_'});
    }

    /*
     * Gets the private 'Pimcore\Templating\Helper\Inc' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\Inc
     */
    protected function getIncService()
    {
        return $this->services['Pimcore\Templating\Helper\Inc'] = new \Pimcore\Templating\Helper\Inc(${($_ = isset($this->services['pimcore.templating.include_renderer']) ? $this->services['pimcore.templating.include_renderer'] : $this->getPimcore_Templating_IncludeRendererService()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Http\Request\Resolver\EditmodeResolver']) ? $this->services['Pimcore\Http\Request\Resolver\EditmodeResolver'] : $this->getEditmodeResolverService()) && false ?: '_'});
    }

    /*
     * Gets the private 'Pimcore\Templating\Helper\Navigation' shared autowired service.
     *
     * @return \Pimcore\Templating\Helper\Navigation
     */
    protected function getNavigationService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['Pimcore\Templating\Helper\Navigation'] = $this->createProxy('Navigation_a34f8f7', function () {
                return \Navigation_a34f8f7::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getNavigationService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return new \Pimcore\Templating\Helper\Navigation(new \Pimcore\Navigation\Builder(${($_ = isset($this->services['Pimcore\Http\RequestHelper']) ? $this->services['Pimcore\Http\RequestHelper'] : $this->getRequestHelperService()) && false ?: '_'}), new \Symfony\Component\DependencyInjection\ServiceLocator(array('breadcrumbs' => function () {
            return ${($_ = isset($this->services['Pimcore\Navigation\Renderer\Breadcrumbs']) ? $this->services['Pimcore\Navigation\Renderer\Breadcrumbs'] : $this->load('getBreadcrumbsService.php')) && false ?: '_'};
        }, 'menu' => function () {
            return ${($_ = isset($this->services['Pimcore\Navigation\Renderer\Menu']) ? $this->services['Pimcore\Navigation\Renderer\Menu'] : $this->load('getMenuService.php')) && false ?: '_'};
        })));
    }

    /*
     * Gets the private 'Pimcore\Translation\Translator' shared autowired service.
     *
     * @return \Pimcore\Translation\Translator
     */
    protected function getTranslatorService()
    {
        $this->services['Pimcore\Translation\Translator'] = $instance = new \Pimcore\Translation\Translator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});

        $instance->setKernel(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
        $instance->setAdminPath('@PimcoreCoreBundle/Resources/translations');

        return $instance;
    }

    /*
     * Gets the private 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, ${($_ = isset($this->services['annotations.cache']) ? $this->services['annotations.cache'] : $this->load('getAnnotations_CacheService.php')) && false ?: '_'}, false);
    }

    /*
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->services['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /*
     * Gets the private 'assets.context' shared service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, '', false);
    }

    /*
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), ${($_ = isset($this->services['assets.context']) ? $this->services['assets.context'] : $this->getAssets_ContextService()) && false ?: '_'}), array());
    }

    /*
     * Gets the private 'cmf_routing.dynamic_router' shared service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Routing\DynamicRouter
     */
    protected function getCmfRouting_DynamicRouterService()
    {
        $this->services['cmf_routing.dynamic_router'] = $instance = new \Symfony\Cmf\Bundle\RoutingBundle\Routing\DynamicRouter(${($_ = isset($this->services['pimcore.routing.router.request_context']) ? $this->services['pimcore.routing.router.request_context'] : $this->getPimcore_Routing_Router_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['cmf_routing.nested_matcher']) ? $this->services['cmf_routing.nested_matcher'] : $this->getCmfRouting_NestedMatcherService()) && false ?: '_'}, ${($_ = isset($this->services['cmf_routing.generator']) ? $this->services['cmf_routing.generator'] : $this->getCmfRouting_GeneratorService()) && false ?: '_'}, '', ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['cmf_routing.route_provider']) ? $this->services['cmf_routing.route_provider'] : $this->getCmfRouting_RouteProviderService()) && false ?: '_'});

        $instance->setRequestStack(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
        $instance->addRouteEnhancer(${($_ = isset($this->services['cmf_routing.enhancer.route_content']) ? $this->services['cmf_routing.enhancer.route_content'] : $this->services['cmf_routing.enhancer.route_content'] = new \Symfony\Cmf\Component\Routing\Enhancer\RouteContentEnhancer('_route_object', '_content')) && false ?: '_'}, 100);

        return $instance;
    }

    /*
     * Gets the private 'cmf_routing.enhancer.route_content' shared service.
     *
     * @return \Symfony\Cmf\Component\Routing\Enhancer\RouteContentEnhancer
     */
    protected function getCmfRouting_Enhancer_RouteContentService()
    {
        return $this->services['cmf_routing.enhancer.route_content'] = new \Symfony\Cmf\Component\Routing\Enhancer\RouteContentEnhancer('_route_object', '_content');
    }

    /*
     * Gets the private 'cmf_routing.final_matcher' shared service.
     *
     * @return \Symfony\Cmf\Component\Routing\NestedMatcher\UrlMatcher
     */
    protected function getCmfRouting_FinalMatcherService()
    {
        return $this->services['cmf_routing.final_matcher'] = new \Symfony\Cmf\Component\Routing\NestedMatcher\UrlMatcher(new \Symfony\Component\Routing\RouteCollection(), new \Symfony\Component\Routing\RequestContext());
    }

    /*
     * Gets the private 'cmf_routing.generator' shared service.
     *
     * @return \Symfony\Cmf\Component\Routing\ContentAwareGenerator
     */
    protected function getCmfRouting_GeneratorService()
    {
        return $this->services['cmf_routing.generator'] = new \Symfony\Cmf\Component\Routing\ContentAwareGenerator(${($_ = isset($this->services['cmf_routing.route_provider']) ? $this->services['cmf_routing.route_provider'] : $this->getCmfRouting_RouteProviderService()) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
    }

    /*
     * Gets the private 'cmf_routing.nested_matcher' shared service.
     *
     * @return \Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher
     */
    protected function getCmfRouting_NestedMatcherService()
    {
        return $this->services['cmf_routing.nested_matcher'] = new \Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher(${($_ = isset($this->services['cmf_routing.route_provider']) ? $this->services['cmf_routing.route_provider'] : $this->getCmfRouting_RouteProviderService()) && false ?: '_'}, ${($_ = isset($this->services['cmf_routing.final_matcher']) ? $this->services['cmf_routing.final_matcher'] : $this->getCmfRouting_FinalMatcherService()) && false ?: '_'});
    }

    /*
     * Gets the private 'cmf_routing.persistence.doctrine.route_condition_metadata_listener' shared service.
     *
     * @return \Symfony\Cmf\Bundle\RoutingBundle\Doctrine\RouteConditionMetadataListener
     */
    protected function getCmfRouting_Persistence_Doctrine_RouteConditionMetadataListenerService()
    {
        return $this->services['cmf_routing.persistence.doctrine.route_condition_metadata_listener'] = new \Symfony\Cmf\Bundle\RoutingBundle\Doctrine\RouteConditionMetadataListener();
    }

    /*
     * Gets the private 'cmf_routing.router' shared service.
     *
     * @return \Symfony\Cmf\Component\Routing\ChainRouter
     */
    protected function getCmfRouting_RouterService()
    {
        $this->services['cmf_routing.router'] = $instance = new \Symfony\Cmf\Component\Routing\ChainRouter(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});

        $a = ${($_ = isset($this->services['pimcore.routing.router.request_context']) ? $this->services['pimcore.routing.router.request_context'] : $this->getPimcore_Routing_Router_RequestContextService()) && false ?: '_'};

        $b = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[3].'/app/config/routing.yml'), array('cache_dir' => $this->targetDirs[0], 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appProdProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appProdProjectContainerUrlMatcher', 'strict_requirements' => NULL), $a);
        $b->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory()) && false ?: '_'});

        $c = new \Pimcore\Routing\Staticroute\Router($a, ${($_ = isset($this->services['Pimcore\Controller\Config\ConfigNormalizer']) ? $this->services['Pimcore\Controller\Config\ConfigNormalizer'] : $this->services['Pimcore\Controller\Config\ConfigNormalizer'] = new \Pimcore\Controller\Config\ConfigNormalizer(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'});
        $c->setLocaleParams(array());
        $c->setLogger(${($_ = isset($this->services['monolog.logger.routing']) ? $this->services['monolog.logger.routing'] : $this->getMonolog_Logger_RoutingService()) && false ?: '_'});

        $instance->setContext($a);
        $instance->add($b, '300');
        $instance->add(${($_ = isset($this->services['cmf_routing.dynamic_router']) ? $this->services['cmf_routing.dynamic_router'] : $this->getCmfRouting_DynamicRouterService()) && false ?: '_'}, '200');
        $instance->add($c, 100);

        return $instance;
    }

    /*
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory();
    }

    /*
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /*
     * Gets the private 'controller_resolver' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver
     */
    protected function getControllerResolverService()
    {
        return $this->services['controller_resolver'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'});
    }

    /*
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ${($_ = isset($this->services['monolog.logger.php']) ? $this->services['monolog.logger.php'] : $this->getMonolog_Logger_PhpService()) && false ?: '_'}, -1, 0, false, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL)) && false ?: '_'}, false);
    }

    /*
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL);
    }

    /*
     * Gets the private 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true);
    }

    /*
     * Gets the private 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /*
     * Gets the private 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ($this->targetDirs[3].'/app/Resources'), array(0 => ($this->targetDirs[3].'/app')));
    }

    /*
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Cmf\\Bundle\\RoutingBundle\\Form\\Type\\RouteTypeType' => function () {
            return ${($_ = isset($this->services['cmf_routing.route_type_form_type']) ? $this->services['cmf_routing.route_type_form_type'] : $this->services['cmf_routing.route_type_form_type'] = new \Symfony\Cmf\Bundle\RoutingBundle\Form\Type\RouteTypeType()) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => function () {
            return ${($_ = isset($this->services['form.type.choice']) ? $this->services['form.type.choice'] : $this->load('getForm_Type_ChoiceService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => function () {
            return ${($_ = isset($this->services['form.type.form']) ? $this->services['form.type.form'] : $this->load('getForm_Type_FormService.php')) && false ?: '_'};
        })), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.form.http_foundation']) ? $this->services['form.type_extension.form.http_foundation'] : $this->load('getForm_TypeExtension_Form_HttpFoundationService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['form.type_extension.form.validator']) ? $this->services['form.type_extension.form.validator'] : $this->load('getForm_TypeExtension_Form_ValidatorService.php')) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['form.type_extension.upload.validator']) ? $this->services['form.type_extension.upload.validator'] : $this->load('getForm_TypeExtension_Upload_ValidatorService.php')) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['form.type_extension.csrf']) ? $this->services['form.type_extension.csrf'] : $this->load('getForm_TypeExtension_CsrfService.php')) && false ?: '_'};
        }, 4), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.repeated.validator']) ? $this->services['form.type_extension.repeated.validator'] : $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()) && false ?: '_'};
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.submit.validator']) ? $this->services['form.type_extension.submit.validator'] : $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()) && false ?: '_'};
        }, 1)), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->load('getForm_TypeGuesser_ValidatorService.php')) && false ?: '_'};
        }, 1), NULL)), ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory()) && false ?: '_'});
    }

    /*
     * Gets the private 'form.resolved_type_factory' shared service.
     *
     * @return \Symfony\Component\Form\ResolvedFormTypeFactory
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }

    /*
     * Gets the private 'fragment.handler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler
     */
    protected function getFragment_HandlerService()
    {
        return $this->services['fragment.handler'] = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(new \Symfony\Component\DependencyInjection\ServiceLocator(array('inline' => function () {
            return ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->load('getFragment_Renderer_InlineService.php')) && false ?: '_'};
        })), ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, false);
    }

    /*
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListener2Service()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, 'en', ${($_ = isset($this->services['cmf_routing.router']) ? $this->services['cmf_routing.router'] : $this->getCmfRouting_RouterService()) && false ?: '_'});
    }

    /*
     * Gets the private 'logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());
    }

    /*
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\FingersCrossedHandler(${($_ = isset($this->services['monolog.handler.nested']) ? $this->services['monolog.handler.nested'] : $this->getMonolog_Handler_NestedService()) && false ?: '_'}, 400, 2000, true, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'monolog.handler.nested' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_NestedService()
    {
        $this->services['monolog.handler.nested'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/prod.log'), 100, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'monolog.processor.psr_log_message' shared service.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /*
     * Gets the private 'pimcore.cache.core.pool.doctrine' shared service.
     *
     * @return \Pimcore\Cache\Pool\Doctrine
     */
    protected function getPimcore_Cache_Core_Pool_DoctrineService()
    {
        $this->services['pimcore.cache.core.pool.doctrine'] = $instance = new \Pimcore\Cache\Pool\Doctrine(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 2419200);

        $instance->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'pimcore.cache.core.write_lock' shared autowired service.
     *
     * @return \Pimcore\Cache\Core\WriteLock
     */
    protected function getPimcore_Cache_Core_WriteLockService()
    {
        $this->services['pimcore.cache.core.write_lock'] = $instance = new \Pimcore\Cache\Core\WriteLock(${($_ = isset($this->services['pimcore.cache.core.pool.doctrine']) ? $this->services['pimcore.cache.core.pool.doctrine'] : $this->getPimcore_Cache_Core_Pool_DoctrineService()) && false ?: '_'});

        $instance->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->services['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'});
    }

    /*
     * Gets the private 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /*
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['cmf_routing.router']) ? $this->services['cmf_routing.router'] : $this->getCmfRouting_RouterService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['pimcore.routing.router.request_context']) ? $this->services['pimcore.routing.router.request_context'] : $this->getPimcore_Routing_Router_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}, $this->targetDirs[3], false);
    }

    /*
     * Gets the private 'scheb_two_factor.security.authentication.trust_resolver' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\Authentication\AuthenticationTrustResolver
     */
    protected function getSchebTwoFactor_Security_Authentication_TrustResolverService()
    {
        return $this->services['scheb_two_factor.security.authentication.trust_resolver'] = new \Scheb\TwoFactorBundle\Security\Authentication\AuthenticationTrustResolver(new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken'));
    }

    /*
     * Gets the private 'scheb_two_factor.trusted_cookie_response_listener' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedCookieResponseListener
     */
    protected function getSchebTwoFactor_TrustedCookieResponseListenerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['scheb_two_factor.trusted_cookie_response_listener'] = $this->createProxy('TrustedCookieResponseListener_c7f9b85', function () {
                return \TrustedCookieResponseListener_c7f9b85::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSchebTwoFactor_TrustedCookieResponseListenerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return new \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedCookieResponseListener(${($_ = isset($this->services['scheb_two_factor.trusted_token_storage']) ? $this->services['scheb_two_factor.trusted_token_storage'] : $this->getSchebTwoFactor_TrustedTokenStorageService()) && false ?: '_'}, 5184000, 'trusted_device', false, 'lax');
    }

    /*
     * Gets the private 'scheb_two_factor.trusted_jwt_encoder' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\JwtTokenEncoder
     */
    protected function getSchebTwoFactor_TrustedJwtEncoderService()
    {
        return $this->services['scheb_two_factor.trusted_jwt_encoder'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\JwtTokenEncoder('ThisTokenIsNotSoSecretChangeIt');
    }

    /*
     * Gets the private 'scheb_two_factor.trusted_token_storage' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceTokenStorage
     */
    protected function getSchebTwoFactor_TrustedTokenStorageService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->privates['scheb_two_factor.trusted_token_storage'] = $this->createProxy('TrustedDeviceTokenStorage_fc7b3c4', function () {
                return \TrustedDeviceTokenStorage_fc7b3c4::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getSchebTwoFactor_TrustedTokenStorageService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        return new \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceTokenStorage(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['scheb_two_factor.trusted_jwt_encoder']) ? $this->services['scheb_two_factor.trusted_jwt_encoder'] : $this->services['scheb_two_factor.trusted_jwt_encoder'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\JwtTokenEncoder('ThisTokenIsNotSoSecretChangeIt')) && false ?: '_'}, 'trusted_device', 5184000);
    }

    /*
     * Gets the private 'security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.access.authenticated_voter']) ? $this->services['security.access.authenticated_voter'] : $this->load('getSecurity_Access_AuthenticatedVoterService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['scheb_two_factor.security.access.authenticated_voter']) ? $this->services['scheb_two_factor.security.access.authenticated_voter'] : $this->services['scheb_two_factor.security.access.authenticated_voter'] = new \Scheb\TwoFactorBundle\Security\Authentication\Voter\TwoFactorInProgressVoter()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.access.role_hierarchy_voter']) ? $this->services['security.access.role_hierarchy_voter'] : $this->load('getSecurity_Access_RoleHierarchyVoterService.php')) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.access.expression_voter']) ? $this->services['security.access.expression_voter'] : $this->load('getSecurity_Access_ExpressionVoterService.php')) && false ?: '_'};
        }, 4), 'affirmative', false, true);
    }

    /*
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.authentication.provider.dao.admin_webdav.two_factor_decorator']) ? $this->services['security.authentication.provider.dao.admin_webdav.two_factor_decorator'] : $this->load('getSecurity_Authentication_Provider_Dao_AdminWebdav_TwoFactorDecoratorService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.authentication.provider.guard.admin.two_factor_decorator']) ? $this->services['security.authentication.provider.guard.admin.two_factor_decorator'] : $this->load('getSecurity_Authentication_Provider_Guard_Admin_TwoFactorDecoratorService.php')) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.authentication.provider.two_factor.admin']) ? $this->services['security.authentication.provider.two_factor.admin'] : $this->load('getSecurity_Authentication_Provider_TwoFactor_AdminService.php')) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.authentication.provider.anonymous.admin.two_factor_decorator']) ? $this->services['security.authentication.provider.anonymous.admin.two_factor_decorator'] : $this->load('getSecurity_Authentication_Provider_Anonymous_Admin_TwoFactorDecoratorService.php')) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['security.authentication.provider.guard.webservice.two_factor_decorator']) ? $this->services['security.authentication.provider.guard.webservice.two_factor_decorator'] : $this->load('getSecurity_Authentication_Provider_Guard_Webservice_TwoFactorDecoratorService.php')) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['security.authentication.provider.dao.demo_cms_fw.two_factor_decorator']) ? $this->services['security.authentication.provider.dao.demo_cms_fw.two_factor_decorator'] : $this->load('getSecurity_Authentication_Provider_Dao_DemoCmsFw_TwoFactorDecoratorService.php')) && false ?: '_'};
            yield 6 => ${($_ = isset($this->services['security.authentication.provider.anonymous.demo_cms_fw.two_factor_decorator']) ? $this->services['security.authentication.provider.anonymous.demo_cms_fw.two_factor_decorator'] : $this->load('getSecurity_Authentication_Provider_Anonymous_DemoCmsFw_TwoFactorDecoratorService.php')) && false ?: '_'};
        }, 7), true);

        $instance->setEventDispatcher(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /*
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->services['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(array('security.firewall.map.context.admin' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.admin']) ? $this->services['security.firewall.map.context.admin'] : $this->load('getSecurity_Firewall_Map_Context_AdminService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.admin_webdav' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.admin_webdav']) ? $this->services['security.firewall.map.context.admin_webdav'] : $this->load('getSecurity_Firewall_Map_Context_AdminWebdavService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.demo_cms_fw' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.demo_cms_fw']) ? $this->services['security.firewall.map.context.demo_cms_fw'] : $this->load('getSecurity_Firewall_Map_Context_DemoCmsFwService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.dev' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.dev']) ? $this->services['security.firewall.map.context.dev'] : $this->load('getSecurity_Firewall_Map_Context_DevService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.webservice' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.webservice']) ? $this->services['security.firewall.map.context.webservice'] : $this->load('getSecurity_Firewall_Map_Context_WebserviceService.php')) && false ?: '_'};
        })), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ${($_ = isset($this->services['security.request_matcher.zfhj2lw']) ? $this->services['security.request_matcher.zfhj2lw'] : $this->services['security.request_matcher.zfhj2lw'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')) && false ?: '_'};
            yield 'security.firewall.map.context.admin_webdav' => ${($_ = isset($this->services['security.request_matcher.sfovvhf']) ? $this->services['security.request_matcher.sfovvhf'] : $this->services['security.request_matcher.sfovvhf'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/asset/webdav')) && false ?: '_'};
            yield 'security.firewall.map.context.admin' => ${($_ = isset($this->services['security.request_matcher.z8xqmvs']) ? $this->services['security.request_matcher.z8xqmvs'] : $this->services['security.request_matcher.z8xqmvs'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin')) && false ?: '_'};
            yield 'security.firewall.map.context.webservice' => ${($_ = isset($this->services['security.request_matcher.atqb9bo']) ? $this->services['security.request_matcher.atqb9bo'] : $this->services['security.request_matcher.atqb9bo'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/webservice')) && false ?: '_'};
            yield 'security.firewall.map.context.demo_cms_fw' => NULL;
        }, 5));
    }

    /*
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['cmf_routing.router']) ? $this->services['cmf_routing.router'] : $this->getCmfRouting_RouterService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'});

        $instance->registerListener('admin', '/admin/logout', 'logout', '_csrf_token', NULL, NULL);
        $instance->registerListener('demo_cms_fw', 'demo_logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /*
     * Gets the private 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /*
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy($this->parameters['security.role_hierarchy.roles']);
    }

    /*
     * Gets the private 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /*
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});
    }

    /*
     * Gets the private 'sensio_framework_extra.converter.datetime' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /*
     * Gets the private 'sensio_framework_extra.converter.doctrine.orm' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /*
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener(${($_ = isset($this->services['sensio_framework_extra.converter.manager']) ? $this->services['sensio_framework_extra.converter.manager'] : $this->getSensioFrameworkExtra_Converter_ManagerService()) && false ?: '_'}, true);
    }

    /*
     * Gets the private 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.doctrine.orm']) ? $this->services['sensio_framework_extra.converter.doctrine.orm'] : $this->getSensioFrameworkExtra_Converter_Doctrine_OrmService()) && false ?: '_'}, 0, 'doctrine.orm');
        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.datetime']) ? $this->services['sensio_framework_extra.converter.datetime'] : $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter()) && false ?: '_'}, 0, 'datetime');

        return $instance;
    }

    /*
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ${($_ = isset($this->services['scheb_two_factor.security.authentication.trust_resolver']) ? $this->services['scheb_two_factor.security.authentication.trust_resolver'] : $this->getSchebTwoFactor_Security_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'});
    }

    /*
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /*
     * Gets the private 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /*
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(array('session' => function () {
            return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load('getSessionService.php')) && false ?: '_'};
        })));
    }

    /*
     * Gets the private 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /*
     * Gets the private 'templating.globals' shared service.
     *
     * @return \Pimcore\Templating\GlobalVariables
     */
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Pimcore\Templating\GlobalVariables($this);
    }

    /*
     * Gets the private 'templating.helper.actions' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper
     */
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper(${($_ = isset($this->services['fragment.handler']) ? $this->services['fragment.handler'] : $this->getFragment_HandlerService()) && false ?: '_'});
    }

    /*
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ($this->targetDirs[3].'/app/Resources'), array(0 => ($this->targetDirs[3].'/app')))) && false ?: '_'}, $this->targetDirs[0]);
    }

    /*
     * Gets the private 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /*
     * Gets the private 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\ServiceLocator(array('translation.loader.csv' => function () {
            return ${($_ = isset($this->services['translation.loader.csv']) ? $this->services['translation.loader.csv'] : $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader()) && false ?: '_'};
        }, 'translation.loader.dat' => function () {
            return ${($_ = isset($this->services['translation.loader.dat']) ? $this->services['translation.loader.dat'] : $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader()) && false ?: '_'};
        }, 'translation.loader.ini' => function () {
            return ${($_ = isset($this->services['translation.loader.ini']) ? $this->services['translation.loader.ini'] : $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader()) && false ?: '_'};
        }, 'translation.loader.json' => function () {
            return ${($_ = isset($this->services['translation.loader.json']) ? $this->services['translation.loader.json'] : $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader()) && false ?: '_'};
        }, 'translation.loader.mo' => function () {
            return ${($_ = isset($this->services['translation.loader.mo']) ? $this->services['translation.loader.mo'] : $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader()) && false ?: '_'};
        }, 'translation.loader.php' => function () {
            return ${($_ = isset($this->services['translation.loader.php']) ? $this->services['translation.loader.php'] : $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader()) && false ?: '_'};
        }, 'translation.loader.po' => function () {
            return ${($_ = isset($this->services['translation.loader.po']) ? $this->services['translation.loader.po'] : $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader()) && false ?: '_'};
        }, 'translation.loader.qt' => function () {
            return ${($_ = isset($this->services['translation.loader.qt']) ? $this->services['translation.loader.qt'] : $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader()) && false ?: '_'};
        }, 'translation.loader.res' => function () {
            return ${($_ = isset($this->services['translation.loader.res']) ? $this->services['translation.loader.res'] : $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader()) && false ?: '_'};
        }, 'translation.loader.xliff' => function () {
            return ${($_ = isset($this->services['translation.loader.xliff']) ? $this->services['translation.loader.xliff'] : $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader()) && false ?: '_'};
        }, 'translation.loader.yml' => function () {
            return ${($_ = isset($this->services['translation.loader.yml']) ? $this->services['translation.loader.yml'] : $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader()) && false ?: '_'};
        })), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\MessageSelector()), 'en', array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yaml', 1 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => false, 'resource_files' => array('af' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf')), 'ar' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ar.xlf')), 'az' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.az.xlf')), 'bg' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.bg.xlf')), 'ca' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ca.xlf')), 'cs' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[3].'/vendor/scheb/two-factor-bundle/Resources/translations/messages.cs.yml')), 'cy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf')), 'da' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.da.xlf')), 'de' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[3].'/vendor/scheb/two-factor-bundle/Resources/translations/messages.de.yml')), 'el' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.el.xlf')), 'en' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[3].'/vendor/scheb/two-factor-bundle/Resources/translations/messages.en.yml')), 'es' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[3].'/vendor/scheb/two-factor-bundle/Resources/translations/messages.es.yml')), 'et' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf')), 'eu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf')), 'fa' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fa.xlf')), 'fi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf')), 'fr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[3].'/vendor/scheb/two-factor-bundle/Resources/translations/messages.fr.yml')), 'gl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.gl.xlf')), 'he' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.he.xlf')), 'hr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hr.xlf')), 'hu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hu.xlf')), 'hy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf')), 'id' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.id.xlf')), 'it' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.it.xlf')), 'ja' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ja.xlf')), 'lb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lb.xlf')), 'lt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lt.xlf')), 'lv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lv.xlf')), 'mn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf')), 'nb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nb.xlf')), 'nl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[3].'/vendor/scheb/two-factor-bundle/Resources/translations/messages.nl.yml')), 'nn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nn.xlf')), 'no' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.no.xlf')), 'pl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pl.xlf')), 'pt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf')), 'pt_BR' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_BR.xlf')), 'ro' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ro.xlf'), 3 => ($this->targetDirs[3].'/vendor/scheb/two-factor-bundle/Resources/translations/messages.ro.yml')), 'ru' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[3].'/vendor/scheb/two-factor-bundle/Resources/translations/messages.ru.yml')), 'sk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sk.xlf'), 3 => ($this->targetDirs[3].'/vendor/scheb/two-factor-bundle/Resources/translations/messages.sk.yml')), 'sl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sl.xlf')), 'sq' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Cyrl.xlf')), 'sr_Latn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Latn.xlf')), 'sv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sv.xlf'), 3 => ($this->targetDirs[3].'/vendor/scheb/two-factor-bundle/Resources/translations/messages.sv.yml')), 'th' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.th.xlf')), 'tl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.tl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tl.xlf')), 'tr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tr.xlf')), 'uk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[3].'/vendor/scheb/two-factor-bundle/Resources/translations/messages.uk.yml')), 'vi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.vi.xlf')), 'zh_CN' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.zh_CN.xlf')), 'zh_TW' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ua.xlf')), 'extended' => array(0 => ($this->targetDirs[3].'/pimcore/lib/Pimcore/Bundle/CoreBundle/Resources/translations/cs.extended.json'), 1 => ($this->targetDirs[3].'/pimcore/lib/Pimcore/Bundle/CoreBundle/Resources/translations/de.extended.json'), 2 => ($this->targetDirs[3].'/pimcore/lib/Pimcore/Bundle/CoreBundle/Resources/translations/en.extended.json'), 3 => ($this->targetDirs[3].'/pimcore/lib/Pimcore/Bundle/CoreBundle/Resources/translations/es.extended.json'), 4 => ($this->targetDirs[3].'/pimcore/lib/Pimcore/Bundle/CoreBundle/Resources/translations/fr.extended.json'), 5 => ($this->targetDirs[3].'/pimcore/lib/Pimcore/Bundle/CoreBundle/Resources/translations/it.extended.json'), 6 => ($this->targetDirs[3].'/pimcore/lib/Pimcore/Bundle/CoreBundle/Resources/translations/nl.extended.json'), 7 => ($this->targetDirs[3].'/pimcore/lib/Pimcore/Bundle/CoreBundle/Resources/translations/sk.extended.json')))));

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory()) && false ?: '_'});
        $instance->setFallbackLocales(array(0 => 'en'));

        return $instance;
    }

    /*
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(${($_ = isset($this->services['Pimcore\Translation\Translator']) ? $this->services['Pimcore\Translation\Translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
    }

    /*
     * Gets the private 'twig.extension.weblink' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\WebLinkExtension
     */
    protected function getTwig_Extension_WeblinkService()
    {
        return $this->services['twig.extension.weblink'] = new \Symfony\Bridge\Twig\Extension\WebLinkExtension(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
    }

    /*
     * Gets the private 'twig.loader' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'}, $this->targetDirs[3]);

        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), '!Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), '!Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), '!Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/scheb/two-factor-bundle/Resources/views'), 'SchebTwoFactor');
        $instance->addPath(($this->targetDirs[3].'/vendor/scheb/two-factor-bundle/Resources/views'), '!SchebTwoFactor');
        $instance->addPath(($this->targetDirs[3].'/pimcore/lib/Pimcore/Bundle/CoreBundle/Resources/views'), 'PimcoreCore');
        $instance->addPath(($this->targetDirs[3].'/pimcore/lib/Pimcore/Bundle/CoreBundle/Resources/views'), '!PimcoreCore');
        $instance->addPath(($this->targetDirs[3].'/pimcore/lib/Pimcore/Bundle/AdminBundle/Resources/views'), 'PimcoreAdmin');
        $instance->addPath(($this->targetDirs[3].'/pimcore/lib/Pimcore/Bundle/AdminBundle/Resources/views'), '!PimcoreAdmin');
        $instance->addPath(($this->targetDirs[3].'/app/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));

        return $instance;
    }

    /*
     * Gets the private 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /*
     * Gets the private 'web_link.add_link_header_listener' shared service.
     *
     * @return \Symfony\Component\WebLink\EventListener\AddLinkHeaderListener
     */
    protected function getWebLink_AddLinkHeaderListenerService()
    {
        return $this->services['web_link.add_link_header_listener'] = new \Symfony\Component\WebLink\EventListener\AddLinkHeaderListener();
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'translator.default_path' => false,
        'router.resource' => false,
        'serializer.mapping.cache.file' => false,
        'twig.default_path' => false,
        'pimcore.config' => false,
        'pimcore.geoip.db_file' => false,
        'doctrine_migrations.dir_name' => false,
    );
    private $dynamicParameters = array();

    /*
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'/app'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/logs'); break;
            case 'kernel.bundles_metadata': $value = array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'CmfRoutingBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony-cmf/routing-bundle/src'),
                    'namespace' => 'Symfony\\Cmf\\Bundle\\RoutingBundle',
                ),
                'PrestaSitemapBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/presta/sitemap-bundle'),
                    'namespace' => 'Presta\\SitemapBundle',
                ),
                'SchebTwoFactorBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/scheb/two-factor-bundle'),
                    'namespace' => 'Scheb\\TwoFactorBundle',
                ),
                'PimcoreCoreBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/pimcore/lib/Pimcore/Bundle/CoreBundle'),
                    'namespace' => 'Pimcore\\Bundle\\CoreBundle',
                ),
                'PimcoreAdminBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/pimcore/lib/Pimcore/Bundle/AdminBundle'),
                    'namespace' => 'Pimcore\\Bundle\\AdminBundle',
                ),
                'AppBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/src/AppBundle'),
                    'namespace' => 'AppBundle',
                ),
            ); break;
            case 'session.save_path': $value = ($this->targetDirs[3].'/app/../var/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDirs[0].'/validation.php'); break;
            case 'translator.default_path': $value = ($this->targetDirs[3].'/translations'); break;
            case 'router.resource': $value = ($this->targetDirs[3].'/app/config/routing.yml'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDirs[0].'/serialization.php'); break;
            case 'twig.default_path': $value = ($this->targetDirs[3].'/templates'); break;
            case 'pimcore.config': $value = array(
                'web_profiler' => array(
                    'toolbar' => array(
                        'excluded_routes' => array(
                            0 => array(
                                'path' => '^/admin/asset/image-editor',
                                'route' => false,
                                'host' => false,
                                'methods' => array(

                                ),
                            ),
                        ),
                    ),
                ),
                'security' => array(
                    'encoder_factories' => array(
                        'Pimcore\\Bundle\\AdminBundle\\Security\\User\\User' => array(
                            'id' => 'pimcore_admin.security.password_encoder_factory',
                        ),
                        'AppBundle\\Model\\DataObject\\User' => array(
                            'id' => 'app.security.password_encoder_factory',
                        ),
                    ),
                ),
                'error_handling' => array(
                    'render_error_document' => true,
                ),
                'bundles' => array(
                    'search_paths' => array(
                        0 => 'src',
                        1 => 'pimcore/lib/Pimcore/Bundle',
                    ),
                    'handle_composer' => true,
                ),
                'objects' => array(
                    'class_definitions' => array(
                        'data' => array(
                            'map' => array(
                                'block' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Block',
                                'calculatedValue' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\CalculatedValue',
                                'checkbox' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Checkbox',
                                'classificationstore' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Classificationstore',
                                'consent' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Consent',
                                'country' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Country',
                                'countrymultiselect' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Countrymultiselect',
                                'date' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Date',
                                'datetime' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Datetime',
                                'email' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Email',
                                'encryptedField' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\EncryptedField',
                                'externalImage' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\ExternalImage',
                                'fieldcollections' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Fieldcollections',
                                'firstname' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Firstname',
                                'gender' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Gender',
                                'geobounds' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Geobounds',
                                'geopoint' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Geopoint',
                                'geopolygon' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Geopolygon',
                                'hotspotimage' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Hotspotimage',
                                'href' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Href',
                                'image' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Image',
                                'imageGallery' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\ImageGallery',
                                'input' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Input',
                                'language' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Language',
                                'languagemultiselect' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Languagemultiselect',
                                'lastname' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Lastname',
                                'link' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Link',
                                'localizedfields' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Localizedfields',
                                'multihref' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Multihref',
                                'multihrefMetadata' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\MultihrefMetadata',
                                'multiselect' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Multiselect',
                                'newsletterActive' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\NewsletterActive',
                                'nonownerobjects' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Nonownerobjects',
                                'numeric' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Numeric',
                                'objectbricks' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Objectbricks',
                                'objects' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Objects',
                                'objectsMetadata' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\ObjectsMetadata',
                                'password' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Password',
                                'rgbaColor' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\RgbaColor',
                                'targetGroup' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\TargetGroup',
                                'targetGroupMultiselect' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\TargetGroupMultiselect',
                                'persona' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Persona',
                                'personamultiselect' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Personamultiselect',
                                'quantityValue' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\QuantityValue',
                                'inputQuantityValue' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\InputQuantityValue',
                                'select' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Select',
                                'slider' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Slider',
                                'structuredTable' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\StructuredTable',
                                'table' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Table',
                                'textarea' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Textarea',
                                'time' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Time',
                                'user' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\User',
                                'video' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Video',
                                'wysiwyg' => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\Wysiwyg',
                            ),
                            'prefixes' => array(
                                0 => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Data\\',
                                1 => '\\Object_Class_Data_',
                            ),
                        ),
                        'layout' => array(
                            'prefixes' => array(
                                0 => '\\Pimcore\\Model\\DataObject\\ClassDefinition\\Layout\\',
                                1 => '\\Object_Class_Layout_',
                            ),
                            'map' => array(

                            ),
                        ),
                    ),
                ),
                'documents' => array(
                    'tags' => array(
                        'prefixes' => array(
                            0 => '\\Pimcore\\Model\\Document\\Tag\\',
                            1 => '\\Document_Tag_',
                        ),
                        'map' => array(

                        ),
                    ),
                    'editables' => array(
                        'naming_strategy' => 'nested',
                    ),
                    'areas' => array(
                        'autoload' => true,
                    ),
                ),
                'newsletter' => array(
                    'source_adapters' => array(
                        'defaultAdapter' => 'pimcore.document.newsletter.factory.default',
                        'csvList' => 'pimcore.document.newsletter.factory.csv',
                        'reportAdapter' => 'pimcore.document.newsletter.factory.report',
                    ),
                ),
                'custom_report' => array(
                    'adapters' => array(
                        'sql' => 'pimcore.custom_report.adapter.factory.sql',
                        'analytics' => 'pimcore.custom_report.adapter.factory.analytics',
                    ),
                ),
                'targeting' => array(
                    'data_providers' => array(
                        'device' => 'Pimcore\\Targeting\\DataProvider\\Device',
                        'geoip' => 'Pimcore\\Targeting\\DataProvider\\GeoIp',
                        'geolocation' => 'Pimcore\\Targeting\\DataProvider\\GeoLocation',
                        'piwik' => 'Pimcore\\Targeting\\DataProvider\\Piwik',
                        'targeting_storage' => 'Pimcore\\Targeting\\DataProvider\\TargetingStorage',
                        'visited_pages_counter' => 'Pimcore\\Targeting\\DataProvider\\VisitedPagesCounter',
                    ),
                    'conditions' => array(
                        'browser' => 'Pimcore\\Targeting\\Condition\\Browser',
                        'country' => 'Pimcore\\Targeting\\Condition\\Country',
                        'geopoint' => 'Pimcore\\Targeting\\Condition\\GeoPoint',
                        'hardwareplatform' => 'Pimcore\\Targeting\\Condition\\HardwarePlatform',
                        'language' => 'Pimcore\\Targeting\\Condition\\Language',
                        'operatingsystem' => 'Pimcore\\Targeting\\Condition\\OperatingSystem',
                        'referringsite' => 'Pimcore\\Targeting\\Condition\\ReferringSite',
                        'searchengine' => 'Pimcore\\Targeting\\Condition\\SearchEngine',
                        'target_group' => 'Pimcore\\Targeting\\Condition\\TargetGroup',
                        'timeonsite' => 'Pimcore\\Targeting\\Condition\\TimeOnSite',
                        'url' => 'Pimcore\\Targeting\\Condition\\Url',
                        'visitedpagebefore' => 'Pimcore\\Targeting\\Condition\\Piwik\\VisitedPageBefore',
                        'visitedpagesbefore' => 'Pimcore\\Targeting\\Condition\\VisitedPagesBefore',
                    ),
                    'action_handlers' => array(
                        'assign_target_group' => 'Pimcore\\Targeting\\ActionHandler\\AssignTargetGroup',
                        'codesnippet' => 'Pimcore\\Targeting\\ActionHandler\\CodeSnippet',
                        'redirect' => 'Pimcore\\Targeting\\ActionHandler\\Redirect',
                    ),
                    'enabled' => true,
                    'storage_id' => 'Pimcore\\Targeting\\Storage\\CookieStorage',
                    'session' => array(
                        'enabled' => false,
                    ),
                ),
                'context' => array(
                    'profiler' => array(
                        'routes' => array(
                            0 => array(
                                'path' => '^/_(profiler|wdt)',
                                'route' => false,
                                'host' => false,
                                'methods' => array(

                                ),
                            ),
                        ),
                    ),
                    'admin' => array(
                        'routes' => array(
                            0 => array(
                                'path' => '^/admin',
                                'route' => false,
                                'host' => false,
                                'methods' => array(

                                ),
                            ),
                            1 => array(
                                'route' => '^pimcore_admin_',
                                'path' => false,
                                'host' => false,
                                'methods' => array(

                                ),
                            ),
                        ),
                    ),
                    'webservice' => array(
                        'routes' => array(
                            0 => array(
                                'path' => '^/webservice',
                                'route' => false,
                                'host' => false,
                                'methods' => array(

                                ),
                            ),
                            1 => array(
                                'route' => '^pimcore_webservice',
                                'path' => false,
                                'host' => false,
                                'methods' => array(

                                ),
                            ),
                        ),
                    ),
                    'plugin' => array(
                        'routes' => array(
                            0 => array(
                                'path' => '^/plugin',
                                'route' => false,
                                'host' => false,
                                'methods' => array(

                                ),
                            ),
                        ),
                    ),
                    'install' => array(
                        'routes' => array(
                            0 => array(
                                'path' => '^/install',
                                'route' => false,
                                'host' => false,
                                'methods' => array(

                                ),
                            ),
                        ),
                    ),
                ),
                'admin' => array(
                    'session' => array(
                        'attribute_bags' => array(
                            'pimcore_admin' => array(
                                'storage_key' => '_pimcore_admin',
                            ),
                            'pimcore_documents' => array(
                                'storage_key' => '_pimcore_documents',
                            ),
                            'pimcore_objects' => array(
                                'storage_key' => '_pimcore_objects',
                            ),
                            'pimcore_copy' => array(
                                'storage_key' => '_pimcore_copy',
                            ),
                            'pimcore_gridconfig' => array(
                                'storage_key' => '_pimcore_gridconfig',
                            ),
                            'pimcore_importconfig' => array(
                                'storage_key' => '_pimcore_importconfig',
                            ),
                        ),
                    ),
                    'unauthenticated_routes' => array(
                        0 => array(
                            'route' => 'pimcore_settings_display_custom_logo',
                            'path' => false,
                            'host' => false,
                            'methods' => array(

                            ),
                        ),
                        1 => array(
                            'route' => 'pimcore_admin_login',
                            'path' => false,
                            'host' => false,
                            'methods' => array(

                            ),
                        ),
                        2 => array(
                            'route' => 'pimcore_admin_webdav',
                            'path' => false,
                            'host' => false,
                            'methods' => array(

                            ),
                        ),
                    ),
                    'translations' => array(
                        'path' => '@PimcoreCoreBundle/Resources/translations',
                    ),
                ),
                'migrations' => array(
                    'sets' => array(
                        'app' => array(
                            'name' => 'Migrations',
                            'namespace' => 'App\\Migrations',
                            'directory' => ($this->targetDirs[3].'/app/Resources/migrations'),
                            'connection' => NULL,
                        ),
                    ),
                ),
                'sitemaps' => array(
                    'generators' => array(
                        'pimcore_documents' => array(
                            'enabled' => true,
                            'priority' => 100,
                            'generator_id' => 'Pimcore\\Sitemap\\Document\\DocumentTreeGenerator',
                        ),
                        'app_news' => array(
                            'enabled' => true,
                            'generator_id' => 'AppBundle\\Sitemaps\\NewsGenerator',
                            'priority' => 0,
                        ),
                    ),
                ),
                'models' => array(
                    'class_overrides' => array(
                        'Pimcore\\Model\\DataObject\\User' => 'AppBundle\\Model\\DataObject\\User',
                    ),
                ),
                'flags' => array(

                ),
                'translations' => array(
                    'case_insensitive' => false,
                    'debugging' => array(
                        'enabled' => true,
                        'parameter' => 'pimcore_debug_translations',
                    ),
                ),
                'maps' => array(
                    'tile_layer_url_template' => 'https://a.tile.openstreetmap.org/{z}/{x}/{y}.png',
                    'geocoding_url_template' => 'https://nominatim.openstreetmap.org/search?q={q}&addressdetails=1&format=json&limit=1',
                    'reverse_geocoding_url_template' => 'https://nominatim.openstreetmap.org/reverse?format=json&lat={lat}&lon={lon}&addressdetails=1',
                ),
                'assets' => array(
                    'image' => array(
                        'low_quality_image_preview' => array(
                            'enabled' => true,
                            'generator' => NULL,
                        ),
                        'focal_point_detection' => array(
                            'enabled' => true,
                        ),
                    ),
                ),
                'versions' => array(
                    'use_hardlinks' => true,
                ),
                'encryption' => array(
                    'secret' => NULL,
                ),
                'routing' => array(
                    'static' => array(
                        'locale_params' => array(

                        ),
                    ),
                ),
                'cache' => array(
                    'enabled' => true,
                    'pool_service_id' => NULL,
                    'default_lifetime' => 2419200,
                    'pools' => array(
                        'doctrine' => array(
                            'enabled' => true,
                            'connection' => 'default',
                        ),
                        'redis' => array(
                            'enabled' => false,
                        ),
                    ),
                ),
            ); break;
            case 'pimcore.geoip.db_file': $value = ($this->targetDirs[2].'/config/GeoLite2-City.mmdb'); break;
            case 'doctrine_migrations.dir_name': $value = ($this->targetDirs[3].'/app/DoctrineMigrations'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    private $normalizedParameterNames = array(
        'pimcore_system_config.general.validlanguages' => 'pimcore_system_config.general.validLanguages',
        'pimcore_system_config.general.fallbacklanguages.en' => 'pimcore_system_config.general.fallbackLanguages.en',
        'pimcore_system_config.general.fallbacklanguages.de' => 'pimcore_system_config.general.fallbackLanguages.de',
        'pimcore_system_config.general.instanceidentifier' => 'pimcore_system_config.general.instanceIdentifier',
        'pimcore_system_config.cache.excludepatterns' => 'pimcore_system_config.cache.excludePatterns',
        'pimcore_system_config.cache.excludecookie' => 'pimcore_system_config.cache.excludeCookie',
        'pimcore_admin.dataobjects.notes_events.types' => 'pimcore_admin.dataObjects.notes_events.types',
    );

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'app',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'CmfRoutingBundle' => 'Symfony\\Cmf\\Bundle\\RoutingBundle\\CmfRoutingBundle',
                'PrestaSitemapBundle' => 'Presta\\SitemapBundle\\PrestaSitemapBundle',
                'SchebTwoFactorBundle' => 'Scheb\\TwoFactorBundle\\SchebTwoFactorBundle',
                'PimcoreCoreBundle' => 'Pimcore\\Bundle\\CoreBundle\\PimcoreCoreBundle',
                'PimcoreAdminBundle' => 'Pimcore\\Bundle\\AdminBundle\\PimcoreAdminBundle',
                'AppBundle' => 'AppBundle\\AppBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appProdProjectContainer',
            'pimcore_system_config.general.timezone' => 'Europe/Berlin',
            'pimcore_system_config.general.php_cli' => '',
            'pimcore_system_config.general.domain' => '',
            'pimcore_system_config.general.redirect_to_maindomain' => false,
            'pimcore_system_config.general.language' => 'en',
            'pimcore_system_config.general.validLanguages' => 'en,de',
            'pimcore_system_config.general.fallbackLanguages.en' => '',
            'pimcore_system_config.general.fallbackLanguages.de' => '',
            'pimcore_system_config.general.theme' => '',
            'pimcore_system_config.general.contactemail' => 'user@example.com',
            'pimcore_system_config.general.loginscreencustomimage' => '',
            'pimcore_system_config.general.disableusagestatistics' => false,
            'pimcore_system_config.general.debug' => false,
            'pimcore_system_config.general.debug_ip' => '',
            'pimcore_system_config.general.http_auth.username' => '',
            'pimcore_system_config.general.http_auth.password' => '',
            'pimcore_system_config.general.debug_admin_translations' => false,
            'pimcore_system_config.general.devmode' => false,
            'pimcore_system_config.general.instanceIdentifier' => '',
            'pimcore_system_config.general.show_cookie_notice' => false,
            'pimcore_system_config.database.params.username' => 'bn_pimcore',
            'pimcore_system_config.database.params.password' => 'd019e67e46',
            'pimcore_system_config.database.params.dbname' => 'bitnami_pimcore',
            'pimcore_system_config.database.params.host' => 'localhost',
            'pimcore_system_config.database.params.port' => '3306',
            'pimcore_system_config.documents.versions.days' => NULL,
            'pimcore_system_config.documents.versions.steps' => 10,
            'pimcore_system_config.documents.default_controller' => 'Default',
            'pimcore_system_config.documents.default_action' => 'default',
            'pimcore_system_config.documents.error_pages.default' => '/error',
            'pimcore_system_config.documents.createredirectwhenmoved' => false,
            'pimcore_system_config.documents.allowtrailingslash' => 'no',
            'pimcore_system_config.documents.allowcapitals' => 'no',
            'pimcore_system_config.documents.generatepreview' => true,
            'pimcore_system_config.documents.wkhtmltoimage' => '',
            'pimcore_system_config.documents.wkhtmltopdf' => '',
            'pimcore_system_config.objects.versions.days' => NULL,
            'pimcore_system_config.objects.versions.steps' => 10,
            'pimcore_system_config.assets.versions.days' => NULL,
            'pimcore_system_config.assets.versions.steps' => 10,
            'pimcore_system_config.assets.icc_rgb_profile' => '',
            'pimcore_system_config.assets.icc_cmyk_profile' => '',
            'pimcore_system_config.assets.hide_edit_image' => false,
            'pimcore_system_config.services.google.client_id' => '655439141282-tic94n6q3j7ca5c5as132sspeftu5pli.apps.googleusercontent.com',
            'pimcore_system_config.services.google.email' => '655439141282-tic94n6q3j7ca5c5as132sspeftu5pli@developer.gserviceaccount.com',
            'pimcore_system_config.services.google.simpleapikey' => 'AIzaSyCo9Wj49hYJWW2WgOju4iMYNTvdcBxmyQ8',
            'pimcore_system_config.services.google.browserapikey' => 'AIzaSyBJX16kWAmUVEz1c1amzp2iKqAfumbcoQQ',
            'pimcore_system_config.cache.enabled' => false,
            'pimcore_system_config.cache.lifetime' => NULL,
            'pimcore_system_config.cache.excludePatterns' => '',
            'pimcore_system_config.cache.excludeCookie' => '',
            'pimcore_system_config.outputfilters.less' => false,
            'pimcore_system_config.outputfilters.lesscpath' => '',
            'pimcore_system_config.webservice.enabled' => true,
            'pimcore_system_config.httpclient.adapter' => 'Socket',
            'pimcore_system_config.httpclient.proxy_host' => 'ip-10-10-98-226.nami',
            'pimcore_system_config.httpclient.proxy_port' => '80',
            'pimcore_system_config.httpclient.proxy_user' => '',
            'pimcore_system_config.httpclient.proxy_pass' => '',
            'pimcore_system_config.email.sender.name' => '',
            'pimcore_system_config.email.sender.email' => '',
            'pimcore_system_config.email.return.name' => '',
            'pimcore_system_config.email.return.email' => '',
            'pimcore_system_config.email.method' => 'mail',
            'pimcore_system_config.email.smtp.host' => '',
            'pimcore_system_config.email.smtp.port' => '',
            'pimcore_system_config.email.smtp.ssl' => NULL,
            'pimcore_system_config.email.smtp.name' => '',
            'pimcore_system_config.email.smtp.auth.method' => NULL,
            'pimcore_system_config.email.smtp.auth.username' => '',
            'pimcore_system_config.email.smtp.auth.password' => '',
            'pimcore_system_config.email.debug.emailaddresses' => '',
            'pimcore_system_config.newsletter.sender.name' => '',
            'pimcore_system_config.newsletter.sender.email' => '',
            'pimcore_system_config.newsletter.return.name' => '',
            'pimcore_system_config.newsletter.return.email' => '',
            'pimcore_system_config.newsletter.method' => 'mail',
            'pimcore_system_config.newsletter.smtp.host' => '',
            'pimcore_system_config.newsletter.smtp.port' => '',
            'pimcore_system_config.newsletter.smtp.ssl' => NULL,
            'pimcore_system_config.newsletter.smtp.name' => '',
            'pimcore_system_config.newsletter.smtp.auth.method' => NULL,
            'pimcore_system_config.newsletter.smtp.auth.username' => '',
            'pimcore_system_config.newsletter.smtp.auth.password' => '',
            'pimcore_system_config.newsletter.usespecific' => '',
            'locale' => 'en',
            'swiftmailer.plugin.redirecting.class' => 'Pimcore\\Mail\\Plugins\\RedirectingPlugin',
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
                'use_strict_mode' => true,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'php',
                1 => 'twig',
            ),
            'templating.helper.form.resources' => array(
                0 => 'FrameworkBundle:Form',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'data_collector.templates' => array(

            ),
            'debug.error_handler.throw_at' => 0,
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'appProdProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appProdProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.cache_class_prefix' => 'appProdProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'serializer.mapping.cache.prefix' => '',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(
                'ROLE_PIMCORE_ADMIN' => array(
                    0 => 'ROLE_PIMCORE_USER',
                ),
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                ),
            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
            ),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => NULL,
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.pimcore_mailer.transport.name' => 'mail',
            'swiftmailer.mailer.pimcore_mailer.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.pimcore_mailer.transport.smtp.port' => '',
            'swiftmailer.mailer.pimcore_mailer.transport.smtp.host' => '',
            'swiftmailer.mailer.pimcore_mailer.transport.smtp.username' => '',
            'swiftmailer.mailer.pimcore_mailer.transport.smtp.password' => '',
            'swiftmailer.mailer.pimcore_mailer.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.pimcore_mailer.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.pimcore_mailer.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.pimcore_mailer.transport.smtp.local_domain' => NULL,
            'swiftmailer.mailer.pimcore_mailer.spool.enabled' => false,
            'swiftmailer.mailer.pimcore_mailer.plugin.impersonate' => NULL,
            'swiftmailer.mailer.pimcore_mailer.single_address' => '',
            'swiftmailer.mailer.pimcore_mailer.delivery_addresses' => array(
                0 => '',
            ),
            'swiftmailer.mailer.pimcore_mailer.delivery_whitelist' => array(

            ),
            'swiftmailer.mailer.pimcore_mailer.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => false,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => '',
            'swiftmailer.mailer.newsletter_mailer.transport.name' => 'mail',
            'swiftmailer.mailer.newsletter_mailer.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.newsletter_mailer.transport.smtp.port' => '',
            'swiftmailer.mailer.newsletter_mailer.transport.smtp.host' => '',
            'swiftmailer.mailer.newsletter_mailer.transport.smtp.username' => '',
            'swiftmailer.mailer.newsletter_mailer.transport.smtp.password' => '',
            'swiftmailer.mailer.newsletter_mailer.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.newsletter_mailer.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.newsletter_mailer.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.newsletter_mailer.transport.smtp.local_domain' => NULL,
            'swiftmailer.mailer.newsletter_mailer.spool.enabled' => false,
            'swiftmailer.mailer.newsletter_mailer.plugin.impersonate' => NULL,
            'swiftmailer.mailer.newsletter_mailer.single_address' => '',
            'swiftmailer.mailer.newsletter_mailer.delivery_addresses' => array(
                0 => '',
            ),
            'swiftmailer.mailer.newsletter_mailer.delivery_whitelist' => array(

            ),
            'swiftmailer.mailer.newsletter_mailer.delivery.enabled' => true,
            'swiftmailer.mailers' => array(
                'newsletter_mailer' => 'swiftmailer.mailer.newsletter_mailer',
                'pimcore_mailer' => 'swiftmailer.mailer.pimcore_mailer',
            ),
            'swiftmailer.default_mailer' => 'pimcore_mailer',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(

            ),
            'doctrine.default_entity_manager' => '',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Pimcore\\Routing\\Loader\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'cmf_routing.uri_filter_regexp' => '',
            'cmf_routing.default_controller' => NULL,
            'cmf_routing.generic_controller' => NULL,
            'cmf_routing.controllers_by_type' => array(

            ),
            'cmf_routing.controllers_by_class' => array(

            ),
            'cmf_routing.templates_by_class' => array(

            ),
            'cmf_routing.route_collection_limit' => 0,
            'cmf_routing.dynamic.limit_candidates' => 20,
            'cmf_routing.dynamic.locales' => array(

            ),
            'cmf_routing.dynamic.auto_locale_pattern' => false,
            'cmf_routing.replace_symfony_router' => true,
            'presta_sitemap.generator.class' => 'Presta\\SitemapBundle\\Service\\Generator',
            'presta_sitemap.dumper.class' => 'Presta\\SitemapBundle\\Service\\Dumper',
            'presta_sitemap.routing_loader.class' => 'Presta\\SitemapBundle\\Routing\\SitemapRoutingLoader',
            'presta_sitemap.dump_command.class' => 'Presta\\SitemapBundle\\Command\\DumpSitemapsCommand',
            'presta_sitemap.timetolive' => '3600',
            'presta_sitemap.sitemap_file_prefix' => 'sitemap',
            'presta_sitemap.items_by_set' => 50000,
            'presta_sitemap.defaults' => array(
                'lastmod' => NULL,
                'priority' => NULL,
                'changefreq' => NULL,
            ),
            'presta_sitemap.eventlistener.route_annotation.class' => 'Presta\\SitemapBundle\\EventListener\\RouteAnnotationEventListener',
            'scheb_two_factor.model_manager_name' => NULL,
            'scheb_two_factor.email.sender_email' => 'no-reply@example.com',
            'scheb_two_factor.email.sender_name' => NULL,
            'scheb_two_factor.email.template' => '@SchebTwoFactor/Authentication/form.html.twig',
            'scheb_two_factor.email.digits' => 4,
            'scheb_two_factor.google.server_name' => 'Pimcore',
            'scheb_two_factor.google.issuer' => 'Pimcore 2 Factor Authentication',
            'scheb_two_factor.google.template' => '@SchebTwoFactor/Authentication/form.html.twig',
            'scheb_two_factor.trusted_device.enabled' => false,
            'scheb_two_factor.trusted_device.cookie_name' => 'trusted_device',
            'scheb_two_factor.trusted_device.lifetime' => 5184000,
            'scheb_two_factor.trusted_device.extend_lifetime' => false,
            'scheb_two_factor.trusted_device.cookie_secure' => false,
            'scheb_two_factor.trusted_device.cookie_same_site' => 'lax',
            'scheb_two_factor.security_tokens' => array(
                0 => 'Pimcore\\Bundle\\AdminBundle\\Security\\Authentication\\Token\\TwoFactorRequiredToken',
            ),
            'scheb_two_factor.ip_whitelist' => array(

            ),
            'pimcore.extensions.bundles.search_paths' => array(
                0 => 'src',
                1 => 'pimcore/lib/Pimcore/Bundle',
            ),
            'pimcore.extensions.bundles.handle_composer' => true,
            'pimcore.admin.unauthenticated_routes' => array(
                0 => array(
                    'route' => 'pimcore_settings_display_custom_logo',
                    'path' => false,
                    'host' => false,
                    'methods' => array(

                    ),
                ),
                1 => array(
                    'route' => 'pimcore_admin_login',
                    'path' => false,
                    'host' => false,
                    'methods' => array(

                    ),
                ),
                2 => array(
                    'route' => 'pimcore_admin_webdav',
                    'path' => false,
                    'host' => false,
                    'methods' => array(

                    ),
                ),
            ),
            'pimcore.encryption.secret' => NULL,
            'pimcore.admin.session.attribute_bags' => array(
                'pimcore_admin' => array(
                    'storage_key' => '_pimcore_admin',
                ),
                'pimcore_documents' => array(
                    'storage_key' => '_pimcore_documents',
                ),
                'pimcore_objects' => array(
                    'storage_key' => '_pimcore_objects',
                ),
                'pimcore_copy' => array(
                    'storage_key' => '_pimcore_copy',
                ),
                'pimcore_gridconfig' => array(
                    'storage_key' => '_pimcore_gridconfig',
                ),
                'pimcore_importconfig' => array(
                    'storage_key' => '_pimcore_importconfig',
                ),
            ),
            'pimcore.admin.translations.path' => '@PimcoreCoreBundle/Resources/translations',
            'pimcore.web_profiler.toolbar.excluded_routes' => array(
                0 => array(
                    'path' => '^/admin/asset/image-editor',
                    'route' => false,
                    'host' => false,
                    'methods' => array(

                    ),
                ),
            ),
            'pimcore.response_exception_listener.render_error_document' => true,
            'pimcore.routing.static.locale_params' => array(

            ),
            'pimcore.cache.core.default_lifetime' => 2419200,
            'pimcore.targeting.enabled' => true,
            'pimcore.targeting.conditions' => array(
                'browser' => 'Pimcore\\Targeting\\Condition\\Browser',
                'country' => 'Pimcore\\Targeting\\Condition\\Country',
                'geopoint' => 'Pimcore\\Targeting\\Condition\\GeoPoint',
                'hardwareplatform' => 'Pimcore\\Targeting\\Condition\\HardwarePlatform',
                'language' => 'Pimcore\\Targeting\\Condition\\Language',
                'operatingsystem' => 'Pimcore\\Targeting\\Condition\\OperatingSystem',
                'referringsite' => 'Pimcore\\Targeting\\Condition\\ReferringSite',
                'searchengine' => 'Pimcore\\Targeting\\Condition\\SearchEngine',
                'target_group' => 'Pimcore\\Targeting\\Condition\\TargetGroup',
                'timeonsite' => 'Pimcore\\Targeting\\Condition\\TimeOnSite',
                'url' => 'Pimcore\\Targeting\\Condition\\Url',
                'visitedpagebefore' => 'Pimcore\\Targeting\\Condition\\Piwik\\VisitedPageBefore',
                'visitedpagesbefore' => 'Pimcore\\Targeting\\Condition\\VisitedPagesBefore',
            ),
            'pimcore.gdpr-data-extrator.dataobjects' => array(
                'classes' => array(

                ),
            ),
            'pimcore.gdpr-data-extrator.assets' => array(
                'types' => array(

                ),
            ),
            'pimcore_admin.dataObjects.notes_events.types' => array(
                0 => '',
                1 => 'content',
                2 => 'seo',
                3 => 'warning',
                4 => 'notice',
            ),
            'pimcore_admin.assets.notes_events.types' => array(
                0 => '',
                1 => 'content',
                2 => 'seo',
                3 => 'warning',
                4 => 'notice',
            ),
            'pimcore_admin.documents.notes_events.types' => array(
                0 => '',
                1 => 'content',
                2 => 'seo',
                3 => 'warning',
                4 => 'notice',
            ),
            'pimcore_admin.csrf_protection.excluded_routes' => array(

            ),
            'pimcore.service_controllers' => array(
                'AppBundle\\Controller\\AdvancedController' => 'AppBundle\\Controller\\AdvancedController',
                'AppBundle\\Controller\\BlogController' => 'AppBundle\\Controller\\BlogController',
                'AppBundle\\Controller\\Category\\ExampleController' => 'AppBundle\\Controller\\Category\\ExampleController',
                'AppBundle\\Controller\\ContentController' => 'AppBundle\\Controller\\ContentController',
                'AppBundle\\Controller\\DefaultController' => 'AppBundle\\Controller\\DefaultController',
                'AppBundle\\Controller\\NewsController' => 'AppBundle\\Controller\\NewsController',
                'AppBundle\\Controller\\NewsletterController' => 'AppBundle\\Controller\\NewsletterController',
                'AppBundle\\Controller\\SecureController' => 'AppBundle\\Controller\\SecureController',
                'AppBundle\\Controller\\Web2printController' => 'AppBundle\\Controller\\Web2printController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\AssetController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ClassificationstoreController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DataObjectHelperController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentTag\\RenderletController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\DocumentTag\\RenderletController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementControllerBase' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\ElementControllerBase',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\EmailController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\EmailController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\AdminerController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\AdminerController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\LinfoController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\LinfoController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\OpcacheController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\External\\OpcacheController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\FolderController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\FolderController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\HardlinkController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\HardlinkController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\IndexController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\IndexController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\InstallController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\InstallController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LinkController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LinkController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LogController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LogController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LoginController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\LoginController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\MiscController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\NewsletterController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\NewsletterController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PageController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PageController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PortalController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintcontainerController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintcontainerController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageControllerBase' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\PrintpageControllerBase',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\QuantityValueController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\QuantityValueController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\RecyclebinController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\RecyclebinController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\RedirectsController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\RedirectsController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SettingsController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SnippetController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\SnippetController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TagsController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TagsController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TargetingController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TargetingController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\TranslationController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\UserController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\VariantsController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\VariantsController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\WorkflowController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Admin\\WorkflowController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\ExtensionManager\\ExtensionManagerController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\ExtensionManager\\ExtensionManagerController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\AdminController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\AdminController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\AssetController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\AssetController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\DataObjectController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\DataObjectController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\PimcoreUsersController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\PimcoreUsersController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\SentMailController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\GDPR\\SentMailController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\AnalyticsController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\AnalyticsController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\CustomReportController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\CustomReportController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\PiwikController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\PiwikController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\QrcodeController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\QrcodeController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\ReportsControllerBase' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\ReportsControllerBase',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\SettingsController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Reports\\SettingsController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ClassController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ClassController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\AssetController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\AssetController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DataObjectController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DataObjectController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DocumentController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\DocumentController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\TagController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\Element\\TagController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ImageController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\ImageController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\InfoController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Rest\\InfoController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Searchadmin\\SearchController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Searchadmin\\SearchController',
                'Pimcore\\Bundle\\AdminBundle\\Controller\\Update\\IndexController' => 'Pimcore\\Bundle\\AdminBundle\\Controller\\Update\\IndexController',
                'Pimcore\\Bundle\\CoreBundle\\Controller\\PublicServicesController' => 'Pimcore\\Bundle\\CoreBundle\\Controller\\PublicServicesController',
            ),
            'doctrine_migrations.namespace' => 'Application\\Migrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.organize_migrations' => false,
            'console.command.ids' => array(
                'console.command.symfony_bundle_frameworkbundle_command_aboutcommand' => 'console.command.about',
                'console.command.symfony_bundle_frameworkbundle_command_assetsinstallcommand' => 'console.command.assets_install',
                'console.command.symfony_bundle_frameworkbundle_command_cacheclearcommand' => 'console.command.cache_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolclearcommand' => 'console.command.cache_pool_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolprunecommand' => 'console.command.cache_pool_prune',
                'console.command.symfony_bundle_frameworkbundle_command_cachewarmupcommand' => 'console.command.cache_warmup',
                'console.command.symfony_bundle_frameworkbundle_command_configdebugcommand' => 'console.command.config_debug',
                'console.command.symfony_bundle_frameworkbundle_command_configdumpreferencecommand' => 'console.command.config_dump_reference',
                'console.command.symfony_bundle_frameworkbundle_command_containerdebugcommand' => 'console.command.container_debug',
                'console.command.symfony_bundle_frameworkbundle_command_debugautowiringcommand' => 'console.command.debug_autowiring',
                'console.command.symfony_bundle_frameworkbundle_command_eventdispatcherdebugcommand' => 'console.command.event_dispatcher_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routerdebugcommand' => 'console.command.router_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routermatchcommand' => 'console.command.router_match',
                'console.command.symfony_bundle_frameworkbundle_command_translationdebugcommand' => 'console.command.translation_debug',
                'console.command.symfony_bundle_frameworkbundle_command_translationupdatecommand' => 'console.command.translation_update',
                'console.command.symfony_bundle_frameworkbundle_command_xlifflintcommand' => 'console.command.xliff_lint',
                'console.command.symfony_bundle_frameworkbundle_command_yamllintcommand' => 'console.command.yaml_lint',
                'console.command.symfony_component_form_command_debugcommand' => 'console.command.form_debug',
                'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'security.command.user_password_encoder',
                'console.command.symfony_bridge_twig_command_debugcommand' => 'twig.command.debug',
                'console.command.symfony_bundle_twigbundle_command_lintcommand' => 'twig.command.lint',
                'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand',
                'console.command.doctrine_bundle_doctrinebundle_command_createdatabasedoctrinecommand' => 'doctrine.database_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_dropdatabasedoctrinecommand' => 'doctrine.database_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_generateentitiesdoctrinecommand' => 'doctrine.generate_entities_command',
                'console.command.doctrine_bundle_doctrinebundle_command_importmappingdoctrinecommand' => 'doctrine.mapping_import_command',
                'console.command.presta_sitemapbundle_command_dumpsitemapscommand' => 'presta_sitemap.dump_command',
                'console.command.pimcore_bundle_corebundle_command_bundle_disablecommand' => 'console.command.pimcore_bundle_corebundle_command_bundle_disablecommand',
                'console.command.pimcore_bundle_corebundle_command_bundle_enablecommand' => 'console.command.pimcore_bundle_corebundle_command_bundle_enablecommand',
                'console.command.pimcore_bundle_corebundle_command_bundle_installcommand' => 'console.command.pimcore_bundle_corebundle_command_bundle_installcommand',
                'console.command.pimcore_bundle_corebundle_command_bundle_listcommand' => 'console.command.pimcore_bundle_corebundle_command_bundle_listcommand',
                'console.command.pimcore_bundle_corebundle_command_bundle_uninstallcommand' => 'console.command.pimcore_bundle_corebundle_command_bundle_uninstallcommand',
                'console.command.pimcore_bundle_corebundle_command_bundle_updatecommand' => 'console.command.pimcore_bundle_corebundle_command_bundle_updatecommand',
                'console.command.pimcore_bundle_corebundle_command_cacheclearcommand' => 'console.command.pimcore_bundle_corebundle_command_cacheclearcommand',
                'console.command.pimcore_bundle_corebundle_command_cachewarmingcommand' => 'console.command.pimcore_bundle_corebundle_command_cachewarmingcommand',
                'console.command.pimcore_bundle_corebundle_command_classesrebuildcommand' => 'console.command.pimcore_bundle_corebundle_command_classesrebuildcommand',
                'console.command.pimcore_bundle_corebundle_command_composer_normalizeconfigcommand' => 'console.command.pimcore_bundle_corebundle_command_composer_normalizeconfigcommand',
                'console.command.pimcore_bundle_corebundle_command_definition_import_classcommand' => 'console.command.pimcore_bundle_corebundle_command_definition_import_classcommand',
                'console.command.pimcore_bundle_corebundle_command_definition_import_fieldcollectioncommand' => 'console.command.pimcore_bundle_corebundle_command_definition_import_fieldcollectioncommand',
                'console.command.pimcore_bundle_corebundle_command_definition_import_objectbrickcommand' => 'console.command.pimcore_bundle_corebundle_command_definition_import_objectbrickcommand',
                'console.command.pimcore_bundle_corebundle_command_deleteclassificationstorecommand' => 'console.command.pimcore_bundle_corebundle_command_deleteclassificationstorecommand',
                'console.command.pimcore_bundle_corebundle_command_document_generatepagepreviews' => 'console.command.pimcore_bundle_corebundle_command_document_generatepagepreviews',
                'console.command.pimcore_bundle_corebundle_command_document_migratetagnamingstrategycommand' => 'console.command.pimcore_bundle_corebundle_command_document_migratetagnamingstrategycommand',
                'console.command.pimcore_bundle_corebundle_command_emaillogscleanupcommand' => 'console.command.pimcore_bundle_corebundle_command_emaillogscleanupcommand',
                'console.command.pimcore_bundle_corebundle_command_internalmodeldaomappinggeneratorcommand' => 'console.command.pimcore_bundle_corebundle_command_internalmodeldaomappinggeneratorcommand',
                'console.command.pimcore_bundle_corebundle_command_internalnewsletterdocumentsendcommand' => 'console.command.pimcore_bundle_corebundle_command_internalnewsletterdocumentsendcommand',
                'console.command.pimcore_bundle_corebundle_command_internalunicodecldrlanguageterritorygeneratorcommand' => 'console.command.pimcore_bundle_corebundle_command_internalunicodecldrlanguageterritorygeneratorcommand',
                'console.command.pimcore_bundle_corebundle_command_internalupdateprocessorcommand' => 'console.command.pimcore_bundle_corebundle_command_internalupdateprocessorcommand',
                'console.command.pimcore_bundle_corebundle_command_internalvideoconvertercommand' => 'console.command.pimcore_bundle_corebundle_command_internalvideoconvertercommand',
                'console.command.pimcore_bundle_corebundle_command_lowqualityimagepreviewcommand' => 'console.command.pimcore_bundle_corebundle_command_lowqualityimagepreviewcommand',
                'console.command.pimcore_bundle_corebundle_command_maintenancecommand' => 'console.command.pimcore_bundle_corebundle_command_maintenancecommand',
                'console.command.pimcore_bundle_corebundle_command_mysqltoolscommand' => 'console.command.pimcore_bundle_corebundle_command_mysqltoolscommand',
                'console.command.pimcore_bundle_corebundle_command_resetpasswordcommand' => 'console.command.pimcore_bundle_corebundle_command_resetpasswordcommand',
                'console.command.pimcore_bundle_corebundle_command_runscriptcommand' => 'console.command.pimcore_bundle_corebundle_command_runscriptcommand',
                'console.command.pimcore_bundle_corebundle_command_runupdatescriptcommand' => 'console.command.pimcore_bundle_corebundle_command_runupdatescriptcommand',
                'console.command.pimcore_bundle_corebundle_command_searchbackendreindexcommand' => 'console.command.pimcore_bundle_corebundle_command_searchbackendreindexcommand',
                'console.command.pimcore_bundle_corebundle_command_targeting_migrateelementnamescommand' => 'console.command.pimcore_bundle_corebundle_command_targeting_migrateelementnamescommand',
                'console.command.pimcore_bundle_corebundle_command_thumbnailsimagecommand' => 'console.command.pimcore_bundle_corebundle_command_thumbnailsimagecommand',
                'console.command.pimcore_bundle_corebundle_command_thumbnailsoptimizeimagescommand' => 'console.command.pimcore_bundle_corebundle_command_thumbnailsoptimizeimagescommand',
                'console.command.pimcore_bundle_corebundle_command_thumbnailsvideocommand' => 'console.command.pimcore_bundle_corebundle_command_thumbnailsvideocommand',
                'console.command.pimcore_bundle_corebundle_command_updatecommand' => 'console.command.pimcore_bundle_corebundle_command_updatecommand',
                'console.command.pimcore_bundle_corebundle_command_web2printpdfcreationcommand' => 'console.command.pimcore_bundle_corebundle_command_web2printpdfcreationcommand',
                'console.command.pimcore_migrations_command_executecommand' => 'console.command.pimcore_migrations_command_executecommand',
                'console.command.pimcore_migrations_command_generatecommand' => 'console.command.pimcore_migrations_command_generatecommand',
                'console.command.pimcore_migrations_command_latestcommand' => 'console.command.pimcore_migrations_command_latestcommand',
                'console.command.pimcore_migrations_command_migratecommand' => 'console.command.pimcore_migrations_command_migratecommand',
                'console.command.pimcore_migrations_command_statuscommand' => 'console.command.pimcore_migrations_command_statuscommand',
                'console.command.pimcore_migrations_command_versioncommand' => 'console.command.pimcore_migrations_command_versioncommand',
                'console.command.appbundle_command_awesomecommand' => 'console.command.appbundle_command_awesomecommand',
            ),
            'console.lazy_command.ids' => array(
                'console.command.about' => true,
                'console.command.assets_install' => true,
                'console.command.cache_clear' => true,
                'console.command.cache_pool_clear' => true,
                'console.command.cache_pool_prune' => true,
                'console.command.cache_warmup' => true,
                'console.command.config_debug' => true,
                'console.command.config_dump_reference' => true,
                'console.command.container_debug' => true,
                'console.command.debug_autowiring' => true,
                'console.command.event_dispatcher_debug' => true,
                'console.command.router_debug' => true,
                'console.command.router_match' => true,
                'console.command.translation_debug' => true,
                'console.command.translation_update' => true,
                'console.command.xliff_lint' => true,
                'console.command.yaml_lint' => true,
                'console.command.form_debug' => true,
                'security.command.user_password_encoder' => true,
                'twig.command.debug' => true,
                'twig.command.lint' => true,
                'doctrine.database_create_command' => true,
                'doctrine.database_drop_command' => true,
                'doctrine.generate_entities_command' => true,
                'doctrine.mapping_import_command' => true,
            ),
        );
    }
}
