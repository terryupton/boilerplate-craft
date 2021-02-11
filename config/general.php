<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

// // use craft\helpers\App;
// $isDev = App::env('ENVIRONMENT') === 'dev';
// $isProd = App::env('ENVIRONMENT') === 'production';

return [

  // Setup some useful Aliases
  'aliases'                          => [
    '@webroot'     => '@root/web',
    '@siteUrl'     => getenv('PRIMARY_SITE_URL'),
    '@assetImgUrl' => '@siteUrl' . '/assets/img',
    '@uploadUrl'   => '@siteUrl' . getenv('CP_UPLOADS_PATH'),
    '@uploadPath'  => '@webroot' . getenv('CP_UPLOADS_PATH'),
    '@svg'         => '@webroot/assets/svg/',
    '@icon'        => '@webroot/assets/svg/icons',
  ],

  //Base Settings for Environment, Robots and Updates from .env variables
  'isSystemLive'                     => (bool)getenv('IS_SYSTEM_LIVE'),
  'allowUpdates'                     => (bool)getenv('ALLOW_UPDATES'),
  'allowAdminChanges'                => (bool)getenv('ALLOW_ADMIN_CHANGES'),
  'backupOnUpdate'                   => (bool)getenv('BACKUP_ON_UPDATE'),
  'devMode'                          => (bool)getenv('DEV_MODE'),
  'runQueueAutomatically'            => (bool)getenv('RUN_QUEUE_AUTOMATICALLY'),
  'securityKey'                      => getenv('SECURITY_KEY'),
  'siteUrl'                          => getenv('SITE_URL'),
  'maxRevisions'                     => getenv('MAX_REVISIONS'),

  // Cache and Email Settings
  'enableTemplateCaching'            => (bool)getenv('ENABLE_TEMPLATE_CACHING'),
  'testToEmailAddress'               => getenv('TEST_TO_EMAIL_ADDRESS'),

  // Base Settings for Website
  'addTrailingSlashesToUrls'         => true,
  'cacheDuration'                    => false,
  'cpTrigger'                        => 'cms',
  'defaultSearchTermOptions'         => [
    'subLeft'  => true,
    'subRight' => true,
  ],
  'defaultTokenDuration'             => 'P2W',
  'defaultWeekStartDay'              => 1,
  'enableCsrfProtection'             => true,
  'errorTemplatePrefix'              => 'errors/',
  'generateTransformsBeforePageLoad' => true,
  'maxUploadFileSize'                => '100M',
  'omitScriptNameInUrls'             => true,
  'pageTrigger'                      => 'page/',
  'timezone'                         => 'Europe/London',
  'useEmailAsUsername'               => true,
  'usePathInfo'                      => true,
  'useProjectConfigFile'             => true,

];
