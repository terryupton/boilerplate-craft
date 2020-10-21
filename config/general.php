<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see craft\config\GeneralConfig
 */

return [

  // Craft config settings from .env variables
  'aliases'                          => [
    '@webroot'   => '@root/web',
    '@siteUrl'   => getenv('DEFAULT_SITE_URL'),
    '@assetUrl'  => getenv('DEFAULT_SITE_URL') . getenv('ASSETS_PATH'),
    '@assetPath' => '@webroot' . getenv('ASSETS_PATH'),
    '@icons'     => '@webroot/assets/svg',
  ],
  'allowUpdates'                     => (bool)getenv('ALLOW_UPDATES'),
  'allowAdminChanges'                => (bool)getenv('ALLOW_ADMIN_CHANGES'),
  'backupOnUpdate'                   => (bool)getenv('BACKUP_ON_UPDATE'),
  'devMode'                          => (bool)getenv('DEV_MODE'),
  'enableTemplateCaching'            => (bool)getenv('ENABLE_TEMPLATE_CACHING'),
  'isSystemLive'                     => (bool)getenv('IS_SYSTEM_LIVE'),
  'runQueueAutomatically'            => (bool)getenv('RUN_QUEUE_AUTOMATICALLY'),
  'securityKey'                      => getenv('SECURITY_KEY'),
  'siteUrl'                          => getenv('SITE_URL'),

  // Craft config settings from constants
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
  'errorTemplatePrefix'              => 'pages/errors/',
  'generateTransformsBeforePageLoad' => true,
  'maxUploadFileSize'                => '100M',
  'maxRevisions'                     => getenv('MAX_REVISIONS'),
  'omitScriptNameInUrls'             => true,
  'pageTrigger'                      => 'page/',
  'timezone'                         => 'Europe/London',
  'useEmailAsUsername'               => true,
  'usePathInfo'                      => true,
  'useProjectConfigFile'             => true,
];
