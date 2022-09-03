<?php
/**
 * 
 *
 * 
 *
 * phpMyAdmin default configuration, you can copy values from here to your
 * config.inc.php
 *
 * All directives are explained in the documentation
 */

declare(strict_types=1);

/**
 * Your phpMyAdmin URL.
 *
 * Complete the variable below with the full URL ie
 *    https://example.com/path_to_your_phpMyAdmin_directory/
 *
 * It must contain characters that are valid for a URL, and the path is
 * case sensitive on some Web servers, for example Unix-based servers.
 *
 * In most cases you can leave this variable empty, as the correct value
 * will be detected automatically. However, we recommend that you do
 * test to see that the auto-detection code works in your system. A good
 * test is to browse a table, then edit a row and save it.  There will be
 * an error message if phpMyAdmin cannot auto-detect the correct value.
 *
 * @global string $cfg['PmaAbsoluteUri']
 * @psalm-suppress PossiblyUndefinedGlobalVariable
 */
#$cfg['PmaAbsoluteUri'] ='http://127.0.0.1:80/phpmyadmin';

/**
 * Configure authentication logging destination
 *
 * @global string $cfg['AuthLog']
 */
$cfg['AuthLog'] = 'auto';

/**
 * Whether to log successful authentication attempts
 *
 * @global boolean $cfg['AuthLogSuccess']
 */
$cfg['AuthLogSuccess'] = false;

/**
 * Disable the default warning that is displayed on the DB Details Structure page if
 * any of the required Tables for the configuration storage could not be found
 *
 * @global boolean $cfg['PmaNoRelation_DisableWarning']
 */
$cfg['PmaNoRelation_DisableWarning'] = false;

/**
 * Disable the default warning that is displayed if Suhosin is detected
 *
 * @global boolean $cfg['SuhosinDisableWarning']
 */
$cfg['SuhosinDisableWarning'] = false;

/**
 * Disable the default warning that is displayed if session.gc_maxlifetime
 * is less than `LoginCookieValidity`
 *
 * @global boolean $cfg['LoginCookieValidityDisableWarning']
 */
$cfg['LoginCookieValidityDisableWarning'] = false;

/**
 * Disable the default warning about MySQL reserved words in column names
 *
 * @global boolean $cfg['ReservedWordDisableWarning']
 */
$cfg['ReservedWordDisableWarning'] = false;

/**
 * Show warning about incomplete translations on certain threshold.
 *
 * @global boolean $cfg['TranslationWarningThreshold']
 */
$cfg['TranslationWarningThreshold'] = 80;

/**
 * Allows phpMyAdmin to be included from a other document in a frame;
 * setting this to true is a potential security hole. Setting this to
 * 'sameorigin' prevents phpMyAdmin to be included from another document
 * in a frame, unless that document belongs to the same domain.
 *
 * @global boolean|string $cfg['AllowThirdPartyFraming']
 */
$cfg['AllowThirdPartyFraming'] = false;

/**
 * The 'cookie' auth_type uses AES algorithm to encrypt the password. If
 * at least one server configuration uses 'cookie' auth_type, enter here a
 * pass phrase that will be used by AES. The maximum length seems to be 46
 * characters.
 *
 * @global string $cfg['blowfish_secret']
 */
$cfg['blowfish_secret'] = '0b301e80f6437f0f7b8b5220faa838ec';


/*******************************************************************************
 * Server(s) configuration
 *
 * The $cfg['Servers'] array starts with $cfg['Servers'][1].  Do not use
 * $cfg['Servers'][0]. You can disable a server configuration entry by setting host
 * to ''. If you want more than one server, just copy following section
 * (including $i incrementation) several times. There is no need to define
 * full server array, just define values you need to change.
 *
 * @global array $cfg['Servers']
 */
$cfg['Servers'] = [];

$i = 1;

/**
 * MySQL hostname or IP address
 *
 * @global string $cfg['Servers'][$i]['host']
 */
$cfg['Servers'][$i]['host'] = 'localhost';

/**
 * MySQL port - leave blank for default port
 *
 * @global string $cfg['Servers'][$i]['port']
 */
$cfg['Servers'][$i]['port'] = '3306';

/**
 * Path to the socket - leave blank for default socket
 *
 * @global string $cfg['Servers'][$i]['socket']
 */
$cfg['Servers'][$i]['socket'] = '';

/**
 * Use SSL for connecting to MySQL server?
 *
 * @global boolean $cfg['Servers'][$i]['ssl']
 */
$cfg['Servers'][$i]['ssl'] = false;

/**
 * Path to the key file when using SSL for connecting to the MySQL server
 *
 * @global string $cfg['Servers'][$i]['ssl_key']
 */
$cfg['Servers'][$i]['ssl_key'] = null;

/**
 * Path to the cert file when using SSL for connecting to the MySQL server
 *
 * @global string $cfg['Servers'][$i]['ssl_cert']
 */
$cfg['Servers'][$i]['ssl_cert'] = null;

/**
 * Path to the CA file when using SSL for connecting to the MySQL server
 *
 * @global string $cfg['Servers'][$i]['ssl_ca']
 */
$cfg['Servers'][$i]['ssl_ca'] = null;

/**
 * Directory containing trusted SSL CA certificates in PEM format
 *
 * @global string $cfg['Servers'][$i]['ssl_ca_path']
 */
$cfg['Servers'][$i]['ssl_ca_path'] = null;

/**
 * List of allowable ciphers for SSL connections to the MySQL server
 *
 * @global string $cfg['Servers'][$i]['ssl_ciphers']
 */
$cfg['Servers'][$i]['ssl_ciphers'] = null;

/**
 * MySQL 5.6 or later triggers the mysqlnd driver in PHP to validate the
 * peer_name of the SSL certifcate
 * For most self-signed certificates this is a problem. Setting this to false
 * will disable the check and allow the connection (PHP 5.6.16 or later)
 *
 * @link https://bugs.php.net/68344
 *
 * @global string $cfg['Servers'][$i]['ssl_verify']
 */
$cfg['Servers'][$i]['ssl_verify'] = true;

/**
 * Use compressed protocol for the MySQL connection
 *
 * @global boolean $cfg['Servers'][$i]['compress']
 */
$cfg['Servers'][$i]['compress'] = false;

/**
 * MySQL control host. This permits to use a host different than the
 * main host, for the phpMyAdmin configuration storage. If left empty,
 * $cfg['Servers'][$i]['host'] is used instead.
 *
 * @global string $cfg['Servers'][$i]['controlhost']
 */
$cfg['Servers'][$i]['controlhost'] = '';

/**
 * MySQL control port. This permits to use a port different than the
 * main port, for the phpMyAdmin configuration storage. If left empty,
 * $cfg['Servers'][$i]['port'] is used instead.
 *
 * @global string $cfg['Servers'][$i]['controlport']
 */
$cfg['Servers'][$i]['controlport'] = '';

/**
 * MySQL control user settings (this user must have read-only
 * access to the "mysql/user" and "mysql/db" tables). The controluser is also
 * used for all relational features (pmadb)
 *
 * @global string $cfg['Servers'][$i]['controluser']
 */
$cfg['Servers'][$i]['controluser'] = '';

/**
 * MySQL control user settings (this user must have read-only
 * access to the "mysql/user" and "mysql/db" tables). The controluser is also
 * used for all relational features (pmadb)
 *
 * @global string $cfg['Servers'][$i]['controlpass']
 */
$cfg['Servers'][$i]['controlpass'] = '';

/**
 * Authentication method (valid choices: config, http, signon or cookie)
 *
 * @global string $cfg['Servers'][$i]['auth_type']
 */
$cfg['Servers'][$i]['auth_type'] = 'cookie';

/**
 * HTTP Basic Auth Realm name to display (only used with 'HTTP' auth_type)
 *
 * @global string $cfg['Servers'][$i]['auth_http_realm']
 */
$cfg['Servers'][$i]['auth_http_realm'] = '';

/**
 * MySQL user
 *
 * @global string $cfg['Servers'][$i]['user']
 */
$cfg['Servers'][$i]['user'] = 'root';

/**
 * MySQL password (only needed with 'config' auth_type)
 *
 * @global string $cfg['Servers'][$i]['password']
 */
$cfg['Servers'][$i]['password'] = '';

/**
 * Session to use for 'signon' authentication method
 *
 * @global string $cfg['Servers'][$i]['SignonSession']
 */
$cfg['Servers'][$i]['SignonSession'] = '';

/**
 * Cookie params to match session to use for 'signon' authentication method
 * It should be an associative array matching result of session_get_cookie_params() in other system
 *
 * @global array $cfg['Servers'][$i]['SignonCookieParams']
 */
$cfg['Servers'][$i]['SignonCookieParams'] = [];

/**
 * PHP script to use for 'signon' authentication method
 *
 * @global string $cfg['Servers'][$i]['SignonScript']
 */
$cfg['Servers'][$i]['SignonScript'] = '';

/**
 * URL where to redirect user to login for 'signon' authentication method
 *
 * @global string $cfg['Servers'][$i]['SignonURL']
 */
$cfg['Servers'][$i]['SignonURL'] = '';

/**
 * URL where to redirect user after logout
 *
 * @global string $cfg['Servers'][$i]['LogoutURL']
 */
$cfg['Servers'][$i]['LogoutURL'] = '';

/**
 * If set to a db-name, only this db is displayed in navigation panel
 * It may also be an array of db-names
 *
 * @global string $cfg['Servers'][$i]['only_db']
 */
$cfg['Servers'][$i]['only_db'] = '';

/**
 * Database name to be hidden from listings
 *
 * @global string $cfg['Servers'][$i]['hide_db']
 */
$cfg['Servers'][$i]['hide_db'] = '';

/**
 * Verbose name for this host - leave blank to show the hostname
 * (for HTTP authentication, all non-US-ASCII characters will be stripped)
 *
 * @global string $cfg['Servers'][$i]['verbose']
 */
$cfg['Servers'][$i]['verbose'] = '';

/**
 * Database used for Relation, Bookmark and PDF Features
 * (see sql/create_tables.sql)
 *   - leave blank for no support
 *     SUGGESTED: 'phpmyadmin'
 *
 * @global string $cfg['Servers'][$i]['pmadb']
 */
$cfg['Servers'][$i]['pmadb'] = '';

/**
 * Bookmark table
 *   - leave blank for no bookmark support
 *     SUGGESTED: 'pma__bookmark'
 *
 * @global string $cfg['Servers'][$i]['bookmarktable']
 */
$cfg['Servers'][$i]['bookmarktable'] = '';

/**
 * table to describe the relation between links (see doc)
 *   - leave blank for no relation-links support
 *     SUGGESTED: 'pma__relation'
 *
 * @global string $cfg['Servers'][$i]['relation']
 */
$cfg['Servers'][$i]['relation'] = '';

/**
 * table to describe the display fields
 *   - leave blank for no display fields support
 *     SUGGESTED: 'pma__table_info'
 *
 * @global string $cfg['Servers'][$i]['table_info']
 */
$cfg['Servers'][$i]['table_info'] = '';

/**
 * table to describe the tables position for the designer and PDF schema
 *   - leave blank for no PDF schema support
 *     SUGGESTED: 'pma__table_coords'
 *
 * @global string $cfg['Servers'][$i]['table_coords']
 */
$cfg['Servers'][$i]['table_coords'] = '';

/**
 * table to describe pages of relationpdf
 *   - leave blank if you don't want to use this
 *     SUGGESTED: 'pma__pdf_pages'
 *
 * @global string $cfg['Servers'][$i]['pdf_pages']
 */
$cfg['Servers'][$i]['pdf_pages'] = '';

/**
 * table to store column information
 *   - leave blank for no column comments/mime types
 *     SUGGESTED: 'pma__column_info'
 *
 * @global string $cfg['Servers'][$i]['column_info']
 */
$cfg['Servers'][$i]['column_info'] = '';

/**
 * table to store SQL history
 *   - leave blank for no SQL query history
 *     SUGGESTED: 'pma__history'
 *
 * @global string $cfg['Servers'][$i]['history']
 */
$cfg['Servers'][$i]['history'] = '';

/**
 * table to store recently used tables
 *   - leave blank for no "persistent" recently used tables
 *     SUGGESTED: 'pma__recent'
 */
$cfg['Servers'][$i]['recent'] = '';

/**
 * table to store favorite tables
 *   - leave blank for no favorite tables
 *     SUGGESTED: 'pma__favorite'
 */
$cfg['Servers'][$i]['favorite'] = '';

/**
 * table to store UI preferences for tables
 *   - leave blank for no "persistent" UI preferences
 *     SUGGESTED: 'pma__table_uiprefs'
 */
$cfg['Servers'][$i]['table_uiprefs'] = '';

/**
 * table to store SQL tracking
 *   - leave blank for no SQL tracking
 *     SUGGESTED: 'pma__tracking'
 *
 * @global string $cfg['Servers'][$i]['tracking']
 */
$cfg['Servers'][$i]['tracking'] = '';

/**
 * table to store user preferences
 *   - leave blank to disable server storage
 *     SUGGESTED: 'pma__userconfig'
 *
 * @global string $cfg['Servers'][$i]['userconfig']
 */
$cfg['Servers'][$i]['userconfig'] = '';

/**
 * table to store users and their assignment to user groups
 *   - leave blank to disable configurable menus feature
 *     SUGGESTED: 'pma__users'
 *
 * @global string $cfg['Servers'][$i]['users']
 */
$cfg['Servers'][$i]['users'] = '';

/**
 * table to store allowed menu items for each user group
 *   - leave blank to disable configurable menus feature
 *     SUGGESTED: 'pma__usergroups'
 *
 * @global string $cfg['Servers'][$i]['usergroups']
 */
$cfg['Servers'][$i]['usergroups'] = '';

/**
 * table to store information about item hidden from navigation tree
 *   - leave blank to disable hide/show navigation items feature
 *     SUGGESTED: 'pma__navigationhiding'
 *
 * @global string $cfg['Servers'][$i]['navigationhiding']
 */
$cfg['Servers'][$i]['navigationhiding'] = '';

/**
 * table to store information about saved searches from query-by-example on a db
 *   - leave blank to disable saved searches feature
 *     SUGGESTED: 'pma__savedsearches'
 *
 * @global string $cfg['Servers'][$i]['savedsearches']
 */
$cfg['Servers'][$i]['savedsearches'] = '';

/**
 * table to store central list of columns per database
 *   - leave blank to disable central list of columns feature
 *     SUGGESTED: 'pma__central_columns'
 *
 * @global string $cfg['Servers'][$i]['central_columns']
 */
$cfg['Servers'][$i]['central_columns'] = '';

/**
 * table to store designer settings
 *   - leave blank to disable the storage of designer settings
 *     SUGGESTED: 'pma__designer_settings'
 *
 * @global string $cfg['Servers'][$i]['designer_settings']
 */
$cfg['Servers'][$i]['designer_settings'] = '';

/**
 * table to store export templates
 *   - leave blank to disable saved searches feature
 *     SUGGESTED: 'pma__export_templates'
 *
 * @global string $cfg['Servers'][$i]['export_templates']
 */
$cfg['Servers'][$i]['export_templates'] = '';

/**
 * Maximum number of records saved in $cfg['Servers'][$i]['table_uiprefs'] table.
 *
 * In case where tables in databases is modified (e.g. dropped or renamed),
 * table_uiprefs may contains invalid data (referring to tables which are not
 * exist anymore).
 * This configuration make sure that we only keep N (N = MaxTableUiprefs)
 * newest record in table_uiprefs and automatically delete older records.
 *
 * @global integer $cfg['Servers'][$i]['userconfig'] = '';
 */
$cfg['Servers'][$i]['MaxTableUiprefs'] = 100;

/**
 * Sets the time zone used by phpMyAdmin. Possible values are explained at
 * https://dev.mysql.com/doc/refman/5.7/en/time-zone-support.html
 *
 * @global string $cfg['Servers'][$i]['SessionTimeZone'] = ''
 */
$cfg['Servers'][$i]['SessionTimeZone'] = '';

/**
 * whether to allow root login
 *
 * @global boolean $cfg['Servers'][$i]['AllowRoot']
 */
$cfg['Servers'][$i]['AllowRoot'] = true;

/**
 * whether to allow login of any user without a password
 *
 * @global boolean $cfg['Servers'][$i]['AllowNoPassword']
 */
$cfg['Servers'][$i]['AllowNoPassword'] = false;

/**
 * Host authentication order, leave blank to not use
 *
 * @global string $cfg['Servers'][$i]['AllowDeny']['order']
 */
$cfg['Servers'][$i]['AllowDeny']['order'] = '';

/**
 * Host authentication rules, leave blank for defaults
 *
 * @global array $cfg['Servers'][$i]['AllowDeny']['rules']
 */
$cfg['Servers'][$i]['AllowDeny']['rules'] = [];

/**
 * Disable use of INFORMATION_SCHEMA.
 *
 * @see https://github.com/phpmyadmin/phpmyadmin/issues/8970
 * @see https://bugs.mysql.com/19588
 *
 * @global boolean $cfg['Servers'][$i]['DisableIS']
 */
$cfg['Servers'][$i]['DisableIS'] = false;

/**
 * Whether the tracking mechanism creates
 * versions for tables and views automatically.
 *
 * @global bool $cfg['Servers'][$i]['tracking_version_auto_create']
 */
$cfg['Servers'][$i]['tracking_version_auto_create'] = false;

/**
 * Defines the list of statements
 * the auto-creation uses for new versions.
 *
 * @global string $cfg['Servers'][$i]['tracking_default_statements']
 */
$cfg['Servers'][$i]['tracking_default_statements'] = 'CREATE TABLE,ALTER TABLE,DROP TABLE,RENAME TABLE,CREATE INDEX,' .
      'DROP INDEX,INSERT,UPDATE,DELETE,TRUNCATE,REPLACE,CREATE VIEW,' .
      'ALTER VIEW,DROP VIEW,CREATE DATABASE,ALTER DATABASE,DROP DATABASE';

/**
 * Whether a DROP VIEW IF EXISTS statement will be added
 * as first line to the log when creating a view.
 *
 * @global bool $cfg['Servers'][$i]['tracking_add_drop_view']
 */
$cfg['Servers'][$i]['tracking_add_drop_view'] = true;

/**
 * Whether a DROP TABLE IF EXISTS statement will be added
 * as first line to the log when creating a table.
 *
 * @global bool $cfg['Servers'][$i]['tracking_add_drop_table']
 */
$cfg['Servers'][$i]['tracking_add_drop_table'] = true;

/**
 * Whether a DROP DATABASE IF EXISTS statement will be added
 * as first line to the log when creating a database.
 *
 * @global bool $cfg['Servers'][$i]['tracking_add_drop_database']
 */
$cfg['Servers'][$i]['tracking_add_drop_database'] = true;

/**
 * Whether to show or hide detailed MySQL/MariaDB connection errors on the login page.
 *
 * @global bool $cfg['Servers'][$i]['hide_connection_errors']
 */
$cfg['Servers'][$i]['hide_connection_errors'] = false;

/**
 * Default server (0 = no default server)
 *
 * If you have more than one server configured, you can set $cfg['ServerDefault']
 * to any one of them to auto-connect to that server when phpMyAdmin is started,
 * or set it to 0 to be given a list of servers without logging in
 * If you have only one server configured, $cfg['ServerDefault'] *MUST* be
 * set to that server.
 *
 * @global integer $cfg['ServerDefault']
 */
$cfg['ServerDefault'] = 1;

/**
 * Other core phpMyAdmin settings
 */

/**
 * whether version check is active
 *
 * @global boolean $cfg['VersionCheck']
 */
if (defined('VERSION_CHECK_DEFAULT')) {
    $cfg['VersionCheck'] = VERSION_CHECK_DEFAULT;
} else {
    $cfg['VersionCheck'] = true;
}

/**
 * The url of the proxy to be used when retrieving the information about
 * the latest version of phpMyAdmin or error reporting. You need this if
 * the server where phpMyAdmin is installed does not have direct access to
 * the internet.
 * The format is: "hostname:portnumber"
 *
 * @global string $cfg['ProxyUrl']
 */
$cfg['ProxyUrl'] = '';

/**
 * The username for authenticating with the proxy. By default, no
 * authentication is performed. If a username is supplied, Basic
 * Authentication will be performed. No other types of authentication
 * are currently supported.
 *
 * @global string $cfg['ProxyUser']
 */
$cfg['ProxyUser'] = '';

/**
 * The password for authenticating with the proxy.
 *
 * @global string $cfg['ProxyPass']
 */
$cfg['ProxyPass'] = '';

/**
 * maximum number of db's displayed in database list
 *
 * @global integer $cfg['MaxDbList']
 */
$cfg['MaxDbList'] = 100;

/**
 * maximum number of tables displayed in table list
 *
 * @global integer $cfg['MaxTableList']
 */
$cfg['MaxTableList'] = 250;

/**
 * whether to show hint or not
 *
 * @global boolean $cfg['ShowHint']
 */
$cfg['ShowHint'] = true;

/**
 * maximum number of characters when a SQL query is displayed
 *
 * @global integer $cfg['MaxCharactersInDisplayedSQL']
 */
$cfg['MaxCharactersInDisplayedSQL'] = 1000;

/**
 * use GZIP output buffering if possible (true|false|'auto')
 *
 * @global string $cfg['OBGzip']
 */
$cfg['OBGzip'] = 'auto';

/**
 * use persistent connections to MySQL database
 *
 * @global boolean $cfg['PersistentConnections']
 */
$cfg['PersistentConnections'] = false;

/**
 * maximum execution time in seconds (0 for no limit)
 *
 * @global integer $cfg['ExecTimeLimit']
 */
$cfg['ExecTimeLimit'] = 300;

/**
 * Path for storing session data (session_save_path PHP parameter).
 *
 * @global integer $cfg['SessionSavePath']
 */
$cfg['SessionSavePath'] = '';

/**
 * Hosts or IPs to consider safe when checking if SSL is used or not
 *
 * @global array $cfg['MysqlSslWarningSafeHosts']
 */
$cfg['MysqlSslWarningSafeHosts'] = ['127.0.0.1', 'localhost'];

/**
 * maximum allocated bytes ('-1' for no limit, '0' for no change)
 * this is a string because '16M' is a valid value; we must put here
 * a string as the default value so that /setup accepts strings
 *
 * @global string $cfg['MemoryLimit']
 */
$cfg['MemoryLimit'] = '-1';

/**
 * mark used tables, make possible to show locked tables (since MySQL 3.23.30)
 *
 * @global boolean $cfg['SkipLockedTables']
 */
$cfg['SkipLockedTables'] = false;

/**
 * show SQL queries as run
 *
 * @global boolean $cfg['ShowSQL']
 */
$cfg['ShowSQL'] = true;

/**
 * retain SQL input on Ajax execute
 *
 * @global boolean $cfg['RetainQueryEditor']
 */
$cfg['RetainQueryBox'] = false;

/**
 * use CodeMirror syntax highlighting for editing SQL
 *
 * @global boolean $cfg['CodemirrorEnable']
 */
$cfg['CodemirrorEnable'] = true;

/**
 * use the parser to find any errors in the query before executing
 *
 * @global boolean $cfg['LintEnable']
 */
$cfg['LintEnable'] = true;

/**
 * show a 'Drop database' link to normal users
 *
 * @global boolean $cfg['AllowUserDropDatabase']
 */
$cfg['AllowUserDropDatabase'] = false;

/**
 * confirm some commands that can result in loss of data
 *
 * @global boolean $cfg['Confirm']
 */
$cfg['Confirm'] = true;

/**
 * sets SameSite attribute of the Set-Cookie HTTP response header
 *
 * Valid values are:
 *    - Lax
 *    - Strict
 *    - None
 *
 * @global string $cfg['CookieSameSite']
 */
 $cfg['CookieSameSite'] = 'Strict';

/**
 * recall previous login in cookie authentication mode or not
 *
 * @global boolean $cfg['LoginCookieRecall']
 */
$cfg['LoginCookieRecall'] = true;

/**
 * validity of cookie login (in seconds; 1440 matches php.ini's
 * session.gc_maxlifetime)
 *
 * @global integer $cfg['LoginCookieValidity']
 */
$cfg['LoginCookieValidity'] = 1440;

/**
 * how long login cookie should be stored (in seconds)
 *
 * @global integer $cfg['LoginCookieStore']
 */
$cfg['LoginCookieStore'] = 0;

/**
 * whether to delete all login cookies on logout
 *
 * @global boolean $cfg['LoginCookieDeleteAll']
 */
$cfg['LoginCookieDeleteAll'] = true;

/**
 * whether to enable the "database search" feature or not
 *
 * @global boolean $cfg['UseDbSearch']
 */
$cfg['UseDbSearch'] = true;

/**
 * if set to true, PMA continues computing multiple-statement queries
 * even if one of the queries failed
 *
 * @global boolean $cfg['IgnoreMultiSubmitErrors']
 */
$cfg['IgnoreMultiSubmitErrors'] = false;

/**
 * Define whether phpMyAdmin will encrypt sensitive data from the URL query string.
 *
 * @global bool $cfg['URLQueryEncryption']
 */
$cfg['URLQueryEncryption'] = false;

/**
 * A secret key used to encrypt/decrypt the URL query string. Should be 32 bytes long.
 *
 * @global string $cfg['URLQueryEncryptionSecretKey']
 */
$cfg['URLQueryEncryptionSecretKey'] = '';

/**
 * allow login to any user entered server in cookie based authentication
 *
 * @global boolean $cfg['AllowArbitraryServer']
 */
$cfg['AllowArbitraryServer'] = false;

/**
 * restrict by IP (with regular expression) the MySQL servers the user can enter
 * when $cfg['AllowArbitraryServer'] = true
 *
 * @global string $cfg['ArbitraryServerRegexp']
 */
$cfg['ArbitraryServerRegexp'] = '';

/**
 * To enable reCaptcha v2 checkbox mode if necessary
 *
 * @global string $cfg['CaptchaMethod']
 */
$cfg['CaptchaMethod'] = 'invisible';

/**
 * URL for the reCaptcha v2 compatible API to use
 *
 * @global string $cfg['CaptchaApi']
 */
$cfg['CaptchaApi'] = 'https://www.google.com/recaptcha/api.js';

/**
 * Content-Security-Policy snippet for the reCaptcha v2 compatible API
 *
 * @global string $cfg['CaptchaCsp']
 */
$cfg['CaptchaCsp'] = 'https://apis.google.com https://www.google.com/recaptcha/'
    . ' https://www.gstatic.com/recaptcha/ https://ssl.gstatic.com/';

/**
 * reCaptcha API's request parameter name
 *
 * @global string $cfg['CaptchaRequestParam']
 */
$cfg['CaptchaRequestParam'] = 'g-recaptcha';

/**
 * reCaptcha API's response parameter name
 *
 * @global string $cfg['CaptchaResponseParam']
 */
$cfg['CaptchaResponseParam'] = 'g-recaptcha-response';

/**
 * if reCaptcha is enabled it needs public key to connect with the service
 *
 * @global string $cfg['CaptchaLoginPublicKey']
 */
$cfg['CaptchaLoginPublicKey'] = '';

/**
 * if reCaptcha is enabled it needs private key to connect with the service
 *
 * @global string $cfg['CaptchaLoginPrivateKey']
 */
$cfg['CaptchaLoginPrivateKey'] = '';

/**
 * if reCaptcha is enabled may need an URL for site verify
 *
 * @global string $cfg['CaptchaSiteVerifyURL']
 */
$cfg['CaptchaSiteVerifyURL'] = '';

/**
 * Enable drag and drop import
 *
 * @see feature request : https://github.com/phpmyadmin/phpmyadmin/issues/13155
 *
 * @global bool $cfg['enable_drag_drop_import']
 */
$cfg['enable_drag_drop_import'] = true;

/*******************************************************************************
 * Navigation panel setup
 */

/**
 * In the navigation panel, replaces the database tree with a selector
 *
 * @global boolean $cfg['ShowDatabasesNavigationAsTree']
 */
$cfg['ShowDatabasesNavigationAsTree'] = true;

/**
 * maximum number of first level databases displayed in navigation panel
 *
 * @global integer $cfg['FirstLevelNavigationItems']
 */
$cfg['FirstLevelNavigationItems'] = 100;

/**
 * maximum number of items displayed in navigation panel
 *
 * @global integer $cfg['MaxNavigationItems']
 */
$cfg['MaxNavigationItems'] = 50;

/**
 * turn the select-based light menu into a tree
 *
 * @global boolean $cfg['NavigationTreeEnableGrouping']
 */
$cfg['NavigationTreeEnableGrouping'] = true;

/**
 * the separator to sub-tree the select-based light menu tree
 *
 * @global string $cfg['NavigationTreeDbSeparator']
 */
$cfg['NavigationTreeDbSeparator'] = '_';

/**
 * Which string will be used to generate table prefixes
 * to split/nest tables into multiple categories
 *
 * @global string $cfg['NavigationTreeTableSeparator']
 */
$cfg['NavigationTreeTableSeparator'] = '__';

/**
 * How many sublevels should be displayed when splitting up tables
 * by the above Separator
 *
 * @global integer $cfg['NavigationTreeTableLevel']
 */
$cfg['NavigationTreeTableLevel'] = 1;

/**
 * link with main panel by highlighting the current db/table
 *
 * @global boolean $cfg['NavigationLinkWithMainPanel']
 */
$cfg['NavigationLinkWithMainPanel'] = true;

/**
 * display logo at top of navigation panel
 *
 * @global boolean $cfg['NavigationDisplayLogo']
 */
$cfg['NavigationDisplayLogo'] = true;

/**
 * where should logo link point to (can also contain an external URL)
 *
 * @global string $cfg['NavigationLogoLink']
 */
$cfg['NavigationLogoLink'] = 'index.php';

/**
 * whether to open the linked page in the main window ('main') or
 * in a new window ('new')
 *
 * @global string $cfg['NavigationLogoLinkWindow']
 */
$cfg['NavigationLogoLinkWindow'] = 'main';

/**
 * number of recently used tables displayed in the navigation panel
 *
 * @global integer $cfg['NumRecentTables']
 */
$cfg['NumRecentTables'] = 10;

/**
 * number of favorite tables displayed in the navigation panel
 *
 * @global integer $cfg['NumFavoriteTables']
 */
$cfg['NumFavoriteTables'] = 10;

/**
 * display a JavaScript table filter in the navigation panel
 * when more then x tables are present
 *
 * @global boolean $cfg['NavigationTreeDisplayItemFilterMinimum']
 */
$cfg['NavigationTreeDisplayItemFilterMinimum'] = 30;

/**
 * display server choice at top of navigation panel
 *
 * @global boolean $cfg['NavigationDisplayServers']
 */
$cfg['NavigationDisplayServers'] = true;

/**
 * server choice as links
 *
 * @global boolean $cfg['DisplayServersList']
 */
$cfg['DisplayServersList'] = false;

/**
 * display a JavaScript database filter in the navigation panel
 * when more then x databases are present
 *
 * @global boolean $cfg['NavigationTreeDisplayDbFilterMinimum']
 */
$cfg['NavigationTreeDisplayDbFilterMinimum'] = 30;

/**
 * target of the navigation panel quick access icon
 *
 * Possible values:
 * 'structure' = fields list
 * 'sql' = SQL form
 * 'search' = search page
 * 'insert' = insert row page
 * 'browse' = browse page
 *
 * @global string $cfg['NavigationTreeDefaultTabTable']
 */
$cfg['NavigationTreeDefaultTabTable'] = 'structure';

/**
 * target of the navigation panel quick second access icon
 *
 * Possible values:
 * 'structure' = fields list
 * 'sql' = SQL form
 * 'search' = search page
 * 'insert' = insert row page
 * 'browse' = browse page
 * '' = no link
 *
 * @global string $cfg['NavigationTreeDefaultTabTable2']
 */
$cfg['NavigationTreeDefaultTabTable2'] = '';

/**
 * Enables the possibility of navigation tree expansion
 *
 * @global boolean $cfg['NavigationTreeEnableExpansion']
 */
$cfg['NavigationTreeEnableExpansion'] = true;

/**
 * Show tables in navigation panel
 *
 * @global boolean $cfg['NavigationTreeShowTables']
 */
$cfg['NavigationTreeShowTables'] = true;

/**
 * Show views in navigation panel
 *
 * @global boolean $cfg['NavigationTreeShowViews']
 */
$cfg['NavigationTreeShowViews'] = true;

/**
 * Show functions in navigation panel
 *
 * @global boolean $cfg['NavigationTreeShowFunctions']
 */
$cfg['NavigationTreeShowFunctions'] = true;

/**
 * Show procedures in navigation panel
 *
 * @global boolean $cfg['NavigationTreeShowProcedures']
 */
$cfg['NavigationTreeShowProcedures'] = true;

/**
 * Show events in navigation panel
 *
 * @global boolean $cfg['NavigationTreeShowEvents']
 */
$cfg['NavigationTreeShowEvents'] = true;

/**
 * Width of navigation panel
 *
 * @global integer $cfg['NavigationWidth']
 */
$cfg['NavigationWidth'] = 240;

/**
 * Automatically expands single database in navigation panel
 *
 * @global boolean $cfg['NavigationAutoexpandSingleDb']
 */
$cfg['NavigationTreeAutoexpandSingleDb'] = true;

/*******************************************************************************
 * In the main panel, at startup...
 */

/**
 * allow to display statistics and space usage in the pages about database
 * details and table properties
 *
 * @global boolean $cfg['ShowStats']
 */
$cfg['ShowStats'] = true;

/**
 * show PHP info link
 *
 * @global boolean $cfg['ShowPhpInfo']
 */
$cfg['ShowPhpInfo'] = false;

/**
 * show MySQL server and web server information
 *
 * @global boolean $cfg['ShowServerInfo']
 */
$cfg['ShowServerInfo'] = true;

/**
 * show change password link
 *
 * @global boolean $cfg['ShowChgPassword']
 */
$cfg['ShowChgPassword'] = true;

/**
 * show create database form
 *
 * @global boolean $cfg['ShowCreateDb']
 */
$cfg['ShowCreateDb'] = true;


/*******************************************************************************
 * Database structure
 */

/**
 * show charset column in database structure (true|false)?
 *
 * @global boolean $cfg['ShowDbStructureCharset']
 */
$cfg['ShowDbStructureCharset'] = false;

/**
 * show comment column in database structure (true|false)?
 *
 * @global boolean $cfg['ShowDbStructureComment']
 */
$cfg['ShowDbStructureComment'] = false;

/**
 * show creation timestamp column in database structure (true|false)?
 *
 * @global boolean $cfg['ShowDbStructureCreation']
 */
$cfg['ShowDbStructureCreation'] = false;

/**
 * show last update timestamp column in database structure (true|false)?
 *
 * @global boolean $cfg['ShowDbStructureLastUpdate']
 */
$cfg['ShowDbStructureLastUpdate'] = false;

/**
 * show last check timestamp column in database structure (true|false)?
 *
 * @global boolean $cfg['ShowDbStructureLastCheck']
 */
$cfg['ShowDbStructureLastCheck'] = false;

/**
 * allow hide action columns to drop down menu in database structure (true|false)?
 *
 * @global boolean $cfg['HideStructureActions']
 */
$cfg['HideStructureActions'] = true;

/**
 * Show column comments in table structure view (true|false)?
 *
 * @global boolean $cfg['ShowColumnComments']
 */
$cfg['ShowColumnComments'] = true;


/*******************************************************************************
 * In browse mode...
 */

/**
 * Use icons instead of text for the navigation bar buttons (table browse)
 * ('text'|'icons'|'both')
 *
 * @global string $cfg['TableNavigationLinksMode']
 */
$cfg['TableNavigationLinksMode'] = 'icons';

/**
 * Defines whether a user should be displayed a "show all (records)"
 * button in browse mode or not.
 *
 * @global boolean $cfg['ShowAll']
 */
$cfg['ShowAll'] = false;

/**
 * Number of rows displayed when browsing a result set. If the result
 * set contains more rows, "Previous" and "Next".
 * Possible values: 25,50,100,250,500
 *
 * @global integer $cfg['MaxRows']
 */
$cfg['MaxRows'] = 25;

/**
 * default for 'ORDER BY' clause (valid values are 'ASC', 'DESC' or 'SMART' -ie
 * descending order for fields of type TIME, DATE, DATETIME & TIMESTAMP,
 * ascending order else-)
 *
 * @global string $cfg['Order']
 */
$cfg['Order'] = 'SMART';

/**
 * grid editing: save edited cell(s) in browse-mode at once
 *
 * @global boolean $cfg['SaveCellsAtOnce']
 */
$cfg['SaveCellsAtOnce'] = false;

/**
 * grid editing: which action triggers it, or completely disable the feature
 *
 * Possible values:
 * 'click'
 * 'double-click'
 * 'disabled'
 *
 * @global string $cfg['GridEditing']
 */
$cfg['GridEditing'] = 'double-click';

/**
 * Options > Relational display
 *
 * Possible values:
 * 'K' for key value
 * 'D' for display column
 *
 * @global string $cfg['RelationalDisplay']
 */
$cfg['RelationalDisplay'] = 'K';


/*******************************************************************************
 * In edit mode...
 */

/**
 * disallow editing of binary fields
 * valid values are:
 *   false    allow editing
 *   'blob'   allow editing except for BLOB fields
 *   'noblob' disallow editing except for BLOB fields
 *   'all'    disallow editing
 *
 * @global string $cfg['ProtectBinary']
 */
$cfg['ProtectBinary'] = 'blob';

/**
 * Display the function fields in edit/insert mode
 *
 * @global boolean $cfg['ShowFunctionFields']
 */
$cfg['ShowFunctionFields'] = true;

/**
 * Display the type fields in edit/insert mode
 *
 * @global boolean $cfg['ShowFieldTypesInDataEditView']
 */
$cfg['ShowFieldTypesInDataEditView'] = true;

/**
 * Which editor should be used for CHAR/VARCHAR fields:
 *  input - allows limiting of input length
 *  textarea - allows newlines in fields
 *
 * @global string $cfg['CharEditing']
 */
$cfg['CharEditing'] = 'input';

/**
 * The minimum size for character input fields
 *
 * @global integer $cfg['MinSizeForInputField']
 */
$cfg['MinSizeForInputField'] = 4;

/**
 * The maximum size for character input fields
 *
 * @global integer $cfg['MinSizeForInputField']
 */
$cfg['MaxSizeForInputField'] = 60;

/**
 * How many rows can be inserted at one time
 *
 * @global integer $cfg['InsertRows']
 */
$cfg['InsertRows'] = 2;

/**
 * Sort order for items in a foreign-key drop-down list.
 * 'content' is the referenced data, 'id' is the key value.
 *
 * @global array $cfg['ForeignKeyDropdownOrder']
 */
$cfg['ForeignKeyDropdownOrder'] = [
    'content-id',
    'id-content',
];

/**
 * A drop-down list will be used if fewer items are present
 *
 * @global integer $cfg['ForeignKeyMaxLimit']
 */
$cfg['ForeignKeyMaxLimit'] = 100;

/**
 * Whether to disable foreign key checks while importing
 *
 * @global boolean $cfg['DefaultForeignKeyChecks']
 */
$cfg['DefaultForeignKeyChecks'] = 'default';

/*******************************************************************************
 * For the export features...
 */

/**
 * Allow for the use of zip compression (requires zip support to be enabled)
 *
 * @global boolean $cfg['ZipDump']
 */
$cfg['ZipDump'] = true;

/**
 * Allow for the use of gzip compression (requires zlib)
 *
 * @global boolean $cfg['GZipDump']
 */
$cfg['GZipDump'] = true;

/**
 * Allow for the use of bzip2 decompression (requires bz2 extension)
 *
 * @global boolean $cfg['BZipDump']
 */
$cfg['BZipDump'] = true;

/**
 * Will compress gzip exports on the fly without the need for much memory.
 * If you encounter problems with created gzip files disable this feature.
 *
 * @global boolean $cfg['CompressOnFly']
 */
$cfg['CompressOnFly'] = true;


/*******************************************************************************
 * Tabs display settings
 */

/**
 * How to display the menu tabs ('icons'|'text'|'both')
 *
 * @global boolean $cfg['TabsMode']
 */
$cfg['TabsMode'] = 'both';

/**
 * How to display various action links ('icons'|'text'|'both')
 *
 * @global boolean $cfg['ActionLinksMode']
 */
$cfg['ActionLinksMode'] = 'both';

/**
 * How many columns should be used for table display of a database?
 * (a value larger than 1 results in some information being hidden)
 *
 * @global integer $cfg['PropertiesNumColumns']
 */
$cfg['PropertiesNumColumns'] = 1;

/**
 * Possible values:
 * 'welcome' = the welcome page
 * (recommended for multiuser setups)
 * 'databases' = list of databases
 * 'status' = runtime information
 * 'variables' = MySQL server variables
 * 'privileges' = user management
 *
 * @global string $cfg['DefaultTabServer']
 */
$cfg['DefaultTabServer'] = 'welcome';

/**
 * Possible values:
 * 'structure' = tables list
 * 'sql' = SQL form
 * 'search' = search query
 * 'operations' = operations on database
 *
 * @global string $cfg['DefaultTabDatabase']
 */
$cfg['DefaultTabDatabase'] = 'structure';

/**
 * Possible values:
 * 'structure' = fields list
 * 'sql' = SQL form
 * 'search' = search page
 * 'insert' = insert row page
 * 'browse' = browse page
 *
 * @global string $cfg['DefaultTabTable']
 */
$cfg['DefaultTabTable'] = 'browse';

/**
 * Whether to display image or text or both image and text in table row
 * action segment. Value can be either of ``image``, ``text`` or ``both``.
 */
$cfg['RowActionType'] = 'both';

/*******************************************************************************
 * Export defaults
 */
$cfg['Export'] = [];

/**
 * codegen/csv/excel/htmlexcel/htmlword/latex/ods/odt/pdf/sql/texytext/xml/yaml
 *
 * @global string $cfg['Export']['format']
 */
$cfg['Export']['format'] = 'sql';

/**
 * quick/custom/custom-no-form
 *
 * @global string $cfg['Export']['format']
 */
$cfg['Export']['method'] = 'quick';

/**
 * none/zip/gzip
 *
 * @global string $cfg['Export']['compression']
 */
$cfg['Export']['compression'] = 'none';

/**
 * Whether to LOCK TABLES before exporting
 *
 * @global boolean $cfg['Export']['lock_tables']
 */
$cfg['Export']['lock_tables'] = false;

/**
 * Whether to export databases/tables as separate files
 *
 * @global boolean $cfg['Export']['as_separate_files']
 */
$cfg['Export']['as_separate_files'] = false;

/**
 * @global boolean $cfg['Export']['asfile']
 */
$cfg['Export']['asfile'] = true;

/**
 * @global string $cfg['Export']['charset']
 */
$cfg['Export']['charset'] = '';

/**
 * @global boolean $cfg['Export']['onserver']
 */
$cfg['Export']['onserver'] = false;

/**
 * @global boolean $cfg['Export']['onserver_overwrite']
 */
$cfg['Export']['onserver_overwrite'] = false;

/**
 * @global boolean $cfg['Export']['quick_export_onserver']
 */
$cfg['Export']['quick_export_onserver'] = false;

/**
 * @global boolean $cfg['Export']['quick_export_onserver_overwrite']
 */
$cfg['Export']['quick_export_onserver_overwrite'] = false;

/**
 * @global boolean $cfg['Export']['remember_file_template']
 */
$cfg['Export']['remember_file_template'] = true;

/**
 * @global string $cfg['Export']['file_template_table']
 */
$cfg['Export']['file_template_table'] = '@TABLE@';

/**
 * @global string $cfg['Export']['file_template_database']
 */
$cfg['Export']['file_template_database'] = '@DATABASE@';

/**
 * @global string $cfg['Export']['file_template_server']
 */
$cfg['Export']['file_template_server'] = '@SERVER@';

/**
 * @global string $cfg['Export']['codegen_structure_or_data']
 */
$cfg['Export']['codegen_structure_or_data'] = 'data';

/**
 * @global $cfg['Export']['codegen_format']
 */
$cfg['Export']['codegen_format'] = 0;

/**
 * @global boolean $cfg['Export']['ods_columns']
 */
$cfg['Export']['ods_columns'] = false;

/**
 * @global string $cfg['Export']['ods_null']
 */
$cfg['Export']['ods_null'] = 'NULL';

/**
 * @global string $cfg['Export']['odt_structure_or_data']
 */
$cfg['Export']['odt_structure_or_data'] = 'structure_and_data';

/**
 * @global boolean $cfg['Export']['odt_columns']
 */
$cfg['Export']['odt_columns'] = true;

/**
 * @global boolean $cfg['Export']['odt_relation']
 */
$cfg['Export']['odt_relation'] = true;

/**
 * @global boolean $cfg['Export']['odt_comments']
 */
$cfg['Export']['odt_comments'] = true;

/**
 * @global boolean $cfg['Export']['odt_mime']
 */
$cfg['Export']['odt_mime'] = true;

/**
 * @global string $cfg['Export']['odt_null']
 */
$cfg['Export']['odt_null'] = 'NULL';

/**
 * @global boolean $cfg['Export']['htmlword_structure_or_data']
 */
$cfg['Export']['htmlword_structure_or_data'] = 'structure_and_data';

/**
 * @global boolean $cfg['Export']['htmlword_columns']
 */
$cfg['Export']['htmlword_columns'] = false;

/**
 * @global string $cfg['Export']['htmlword_null']
 */
$cfg['Export']['htmlword_null'] = 'NULL';

/**
 * @global string $cfg['Export']['texytext_structure_or_data']
 */
$cfg['Export']['texytext_structure_or_data'] = 'structure_and_data';

/**
 * @global boolean $cfg['Export']['texytext_columns']
 */
$cfg['Export']['texytext_columns'] = false;

/**
 * @global string $cfg['Export']['texytext_null']
 */
$cfg['Export']['texytext_null'] = 'NULL';

/**
 * @global boolean $cfg['Export']['csv_columns']
 */
$cfg['Export']['csv_columns'] = false;

/**
 * @global string $cfg['Export']['csv_structure_or_data']
 */
$cfg['Export']['csv_structure_or_data'] = 'data';

/**
 * @global string $cfg['Export']['csv_null']
 */
$cfg['Export']['csv_null'] = 'NULL';

/**
 * @global string $cfg['Export']['csv_separator']
 */
$cfg['Export']['csv_separator'] = ',';

/**
 * @global string $cfg['Export']['csv_enclosed']
 */
$cfg['Export']['csv_enclosed'] = '"';

/**
 * @global string $cfg['Export']['csv_escaped']
 */
$cfg['Export']['csv_escaped'] = '"';

/**
 * @global string $cfg['Export']['csv_terminated']
 */
$cfg['Export']['csv_terminated'] = 'AUTO';

/**
 * @global string $cfg['Export']['csv_removeCRLF']
 */
$cfg['Export']['csv_removeCRLF'] = false;

/**
 * @global boolean $cfg['Export']['excel_columns']
 */
$cfg['Export']['excel_columns'] = true;

/**
 * @global string $cfg['Export']['excel_null']
 */
$cfg['Export']['excel_null'] = 'NULL';

/**
 * win/mac
 *
 * @global string $cfg['Export']['excel_edition']
 */
$cfg['Export']['excel_edition'] = 'win';

/**
 * @global string $cfg['Export']['excel_removeCRLF']
 */
$cfg['Export']['excel_removeCRLF'] = false;

/**
 * @global string $cfg['Export']['excel_structure_or_data']
 */
$cfg['Export']['excel_structure_or_data'] = 'data';

/**
 * @global string $cfg['Export']['latex_structure_or_data']
 */
$cfg['Export']['latex_structure_or_data'] = 'structure_and_data';

/**
 * @global boolean $cfg['Export']['latex_columns']
 */
$cfg['Export']['latex_columns'] = true;

/**
 * @global boolean $cfg['Export']['latex_relation']
 */
$cfg['Export']['latex_relation'] = true;

/**
 * @global boolean $cfg['Export']['latex_comments']
 */
$cfg['Export']['latex_comments'] = true;

/**
 * @global boolean $cfg['Export']['latex_mime']
 */
$cfg['Export']['latex_mime'] = true;

/**
 * @global string $cfg['Export']['latex_null']
 */
$cfg['Export']['latex_null'] = '\textit{NULL}';

/**
 * @global boolean $cfg['Export']['latex_caption']
 */
$cfg['Export']['latex_caption'] = true;

/**
 * @global string $cfg['Export']['latex_structure_caption']
 */
$cfg['Export']['latex_structure_caption'] = 'strLatexStructure';

/**
 * @global string $cfg['Export']['latex_structure_continued_caption']
 */
$cfg['Export']['latex_structure_continued_caption'] = 'strLatexStructure strLatexContinued';

/**
 * @global string $cfg['Export']['latex_data_caption']
 */
$cfg['Export']['latex_data_caption'] = 'strLatexContent';

/**
 * @global string $cfg['Export']['latex_data_continued_caption']
 */
$cfg['Export']['latex_data_continued_caption'] = 'strLatexContent strLatexContinued';

/**
 * @global string $cfg['Export']['latex_data_label']
 */
$cfg['Export']['latex_data_label'] = 'tab:@TABLE@-data';

/**
 * @global string $cfg['Export']['latex_structure_label']
 */
$cfg['Export']['latex_structure_label'] = 'tab:@TABLE@-structure';

/**
 * @global string $cfg['Export']['mediawiki_structure_or_data']
 */
$cfg['Export']['mediawiki_structure_or_data'] = 'data';

/**
 * @global boolean $cfg['Export']['mediawiki_caption']
 */
$cfg['Export']['mediawiki_caption'] = true;

/**
 * @global boolean $cfg['Export']['mediawiki_headers']
 */
$cfg['Export']['mediawiki_headers'] = true;

/**
 * @global string $cfg['Export']['ods_structure_or_data']
 */
$cfg['Export']['ods_structure_or_data'] = 'data';

/**
 * @global string $cfg['Export']['pdf_structure_or_data']
 */
$cfg['Export']['pdf_structure_or_data'] = 'data';

/**
 * @global string $cfg['Export']['phparray_structure_or_data']
 */
$cfg['Export']['phparray_structure_or_data'] = 'data';

/**
 * @global string $cfg['Export']['json_structure_or_data']
 */
$cfg['Export']['json_structure_or_data'] = 'data';

/**
 * Export functions
 *
 * @global string $cfg['Export']['json_pretty_print']
 */
$cfg['Export']['json_pretty_print'] = false;

/**
 * Export functions
 *
 * @global string $cfg['Export']['json_unicode']
 */
$cfg['Export']['json_unicode'] = true;

/**
 * @global string $cfg['Export']['remove_definer_from_definitions']
 */
$cfg['Export']['remove_definer_from_definitions'] = false;

/**
 * @global string $cfg['Export']['sql_structure_or_data']
 */
$cfg['Export']['sql_structure_or_data'] = 'structure_and_data';

/**
 * @global string $cfg['Export']['sql_compatibility']
 */
$cfg['Export']['sql_compatibility'] = 'NONE';

/**
 * Whether to include comments in SQL export.
 *
 * @global string $cfg['Export']['sql_include_comments']
 */
$cfg['Export']['sql_include_comments'] = true;

/**
 * @global boolean $cfg['Export']['sql_disable_fk']
 */
$cfg['Export']['sql_disable_fk'] = false;

/**
 * @global boolean $cfg['Export']['sql_views_as_tables']
 */
$cfg['Export']['sql_views_as_tables'] = false;

/**
 * @global boolean $cfg['Export']['sql_metadata']
 */
$cfg['Export']['sql_metadata'] = false;

/**
 * @global boolean $cfg['Export']['sql_use_transaction']
 */
$cfg['Export']['sql_use_transaction'] = true;

/**
 * @global boolean $cfg['Export']['sql_create_database']
 */
$cfg['Export']['sql_create_database'] = false;

/**
 * @global boolean $cfg['Export']['sql_drop_database']
 */
$cfg['Export']['sql_drop_database'] = false;

/**
 * @global boolean $cfg['Export']['sql_drop_table']
 */
$cfg['Export']['sql_drop_table'] = false;

/**
 * true by default for correct behavior when dealing with exporting
 * of VIEWs and the stand-in table
 *
 * @global boolean $cfg['Export']['sql_if_not_exists']
 */
$cfg['Export']['sql_if_not_exists'] = false;

/**
 * @global boolean $cfg['Export']['sql_view_current_user']
 */
$cfg['Export']['sql_view_current_user'] = false;

/**
 * @global boolean $cfg['Export']['sql_or_replace']
 */
$cfg['Export']['sql_or_replace_view'] = false;

/**
 * @global boolean $cfg['Export']['sql_procedure_function']
 */
$cfg['Export']['sql_procedure_function'] = true;

/**
 * @global boolean $cfg['Export']['sql_create_table']
 */
$cfg['Export']['sql_create_table'] = true;

/**
 * @global boolean $cfg['Export']['sql_create_view']
 */
$cfg['Export']['sql_create_view'] = true;

/**
 * @global boolean $cfg['Export']['sql_create_trigger']
 */
$cfg['Export']['sql_create_trigger'] = true;

/**
 * @global boolean $cfg['Export']['sql_auto_increment']
 */
$cfg['Export']['sql_auto_increment'] = true;

/**
 * @global boolean $cfg['Export']['sql_backquotes']
 */
$cfg['Export']['sql_backquotes'] = true;

/**
 * @global boolean $cfg['Export']['sql_dates']
 */
$cfg['Export']['sql_dates'] = false;

/**
 * @global boolean $cfg['Export']['sql_relation']
 */
$cfg['Export']['sql_relation'] = false;

/**
 * @global boolean $cfg['Export']['sql_truncate']
 */
$cfg['Export']['sql_truncate'] = false;

/**
 * @global boolean $cfg['Export']['sql_delayed']
 */
$cfg['Export']['sql_delayed'] = false;

/**
 * @global boolean $cfg['Export']['sql_ignore']
 */
$cfg['Export']['sql_ignore'] = false;

/**
 * Export time in UTC.
 *
 * @global boolean $cfg['Export']['sql_utc_time']
 */
$cfg['Export']['sql_utc_time'] = true;

/**
 * @global boolean $cfg['Export']['sql_hex_for_binary']
 */
$cfg['Export']['sql_hex_for_binary'] = true;

/**
 * insert/update/replace
 *
 * @global string $cfg['Export']['sql_type']
 */
$cfg['Export']['sql_type'] = 'INSERT';

/**
 * @global integer $cfg['Export']['sql_max_query_size']
 */
$cfg['Export']['sql_max_query_size'] = 50000;

/**
 * @global boolean $cfg['Export']['sql_mime']
 */
$cfg['Export']['sql_mime'] = false;

/**
 * \n is replaced by new line
 *
 * @global string $cfg['Export']['sql_header_comment']
 */
$cfg['Export']['sql_header_comment'] = '';

/**
 * Whether to use complete inserts, extended inserts, both, or neither
 *
 * @global string $cfg['Export']['sql_insert_syntax']
 */
$cfg['Export']['sql_insert_syntax'] = 'both';

/**
 * @global string $cfg['Export']['pdf_report_title']
 */
$cfg['Export']['pdf_report_title'] = '';

/**
 * @global string $cfg['Export']['xml_structure_or_data']
 */
$cfg['Export']['xml_structure_or_data'] = 'data';

/**
 * Export schema for each structure
 *
 * @global string $cfg['Export']['xml_export_struc']
 */
$cfg['Export']['xml_export_struc'] = true;

/**
 * Export events
 *
 * @global string $cfg['Export']['xml_export_events']
 */
$cfg['Export']['xml_export_events'] = true;

/**
 * Export functions
 *
 * @global string $cfg['Export']['xml_export_functions']
 */
$cfg['Export']['xml_export_functions'] = true;

/**
 * Export procedures
 *
 * @global string $cfg['Export']['xml_export_procedures']
 */
$cfg['Export']['xml_export_procedures'] = true;

/**
 * Export schema for each table
 *
 * @global string $cfg['Export']['xml_export_tables']
 */
$cfg['Export']['xml_export_tables'] = true;

/**
 * Export triggers
 *
 * @global string $cfg['Export']['xml_export_triggers']
 */
$cfg['Export']['xml_export_triggers'] = true;

/**
 * Export views
 *
 * @global string $cfg['Export']['xml_export_views']
 */
$cfg['Export']['xml_export_views'] = true;

/**
 * Export contents data
 *
 * @global string $cfg['Export']['xml_export_contents']
 */
$cfg['Export']['xml_export_contents'] = true;

/**
 * @global string $cfg['Export']['yaml_structure_or_data']
 */
$cfg['Export']['yaml_structure_or_data'] = 'data';

/*******************************************************************************
 * Import defaults
 */
$cfg['Import'] = [];

/**
 * @global string $cfg['Import']['format']
 */
$cfg['Import']['format'] = 'sql';

/**
 * Default charset for import.
 *
 * @global string $cfg['Import']['charset']
 */
$cfg['Import']['charset'] = '';

/**
 * @global boolean $cfg['Import']['allow_interrupt']
 */
$cfg['Import']['allow_interrupt'] = true;

/**
 * @global integer $cfg['Import']['skip_queries']
 */
$cfg['Import']['skip_queries'] = 0;

/**
 * @global string $cfg['Import']['sql_compatibility']
 */
$cfg['Import']['sql_compatibility'] = 'NONE';

/**
 * @global string $cfg['Import']['sql_no_auto_value_on_zero']
 */
$cfg['Import']['sql_no_auto_value_on_zero'] = true;

/**
 * @global string $cfg['Import']['sql_read_as_multibytes']
 */
$cfg['Import']['sql_read_as_multibytes'] = false;

/**
 * @global boolean $cfg['Import']['csv_replace']
 */
$cfg['Import']['csv_replace'] = false;

/**
 * @global boolean $cfg['Import']['csv_ignore']
 */
$cfg['Import']['csv_ignore'] = false;

/**
 * @global string $cfg['Import']['csv_terminated']
 */
$cfg['Import']['csv_terminated'] = ',';

/**
 * @global string $cfg['Import']['csv_enclosed']
 */
$cfg['Import']['csv_enclosed'] = '"';

/**
 * @global string $cfg['Import']['csv_escaped']
 */
$cfg['Import']['csv_escaped'] = '"';

/**
 * @global string $cfg['Import']['csv_new_line']
 */
$cfg['Import']['csv_new_line'] = 'auto';

/**
 * @global string $cfg['Import']['csv_columns']
 */
$cfg['Import']['csv_columns'] = '';

/**
 * @global string $cfg['Import']['csv_col_names']
 */
$cfg['Import']['csv_col_names'] = false;

/**
 * @global boolean $cfg['Import']['ldi_replace']
 */
$cfg['Import']['ldi_replace'] = false;

/**
 * @global boolean $cfg['Import']['ldi_ignore']
 */
$cfg['Import']['ldi_ignore'] = false;

/**
 * @global string $cfg['Import']['ldi_terminated']
 */
$cfg['Import']['ldi_terminated'] = ';';

/**
 * @global string $cfg['Import']['ldi_enclosed']
 */
$cfg['Import']['ldi_enclosed'] = '"';

/**
 * @global string $cfg['Import']['ldi_escaped']
 */
$cfg['Import']['ldi_escaped'] = '\\';

/**
 * @global string $cfg['Import']['ldi_new_line']
 */
$cfg['Import']['ldi_new_line'] = 'auto';

/**
 * @global string $cfg['Import']['ldi_columns']
 */
$cfg['Import']['ldi_columns'] = '';

/**
 * 'auto' for auto-detection, true or false for forcing
 *
 * @global string $cfg['Import']['ldi_local_option']
 */
$cfg['Import']['ldi_local_option'] = 'auto';

/**
 * @global string $cfg['Import']['ods_col_names']
 */
$cfg['Import']['ods_col_names'] = false;

/**
 * @global string $cfg['Import']['ods_empty_rows']
 */
$cfg['Import']['ods_empty_rows'] = true;

/**
 * @global string $cfg['Import']['ods_recognize_percentages']
 */
$cfg['Import']['ods_recognize_percentages'] = true;

/**
 * @global string $cfg['Import']['ods_recognize_currency']
 */
$cfg['Import']['ods_recognize_currency'] = true;

/*******************************************************************************
 * Schema export defaults
*/
$cfg['Schema'] = [];

/**
 * pdf/eps/dia/svg
 *
 * @global string $cfg['Schema']['format']
*/
$cfg['Schema']['format'] = 'pdf';

/**
 * @global string $cfg['Schema']['pdf_show_color']
 */
$cfg['Schema']['pdf_show_color'] = true;

/**
 * @global string $cfg['Schema']['pdf_show_keys']
 */
$cfg['Schema']['pdf_show_keys'] = false;

/**
 * @global string $cfg['Schema']['pdf_all_tables_same_width']
 */
$cfg['Schema']['pdf_all_tables_same_width'] = false;

/**
 * L/P
 *
 * @global string $cfg['Schema']['pdf_orientation']
 */
$cfg['Schema']['pdf_orientation'] = 'L';

/**
 * @global string $cfg['Schema']['pdf_paper']
 */
$cfg['Schema']['pdf_paper'] = 'A4';

/**
 * @global string $cfg['Schema']['pdf_show_grid']
 */
$cfg['Schema']['pdf_show_grid'] = false;

/**
 * @global string $cfg['Schema']['pdf_with_doc']
 */
$cfg['Schema']['pdf_with_doc'] = true;

/**
 * @global string $cfg['Schema']['pdf_table_order']
 */
$cfg['Schema']['pdf_table_order'] = '';

/**
 * @global string $cfg['Schema']['dia_show_color']
 */
$cfg['Schema']['dia_show_color'] = true;

/**
 * @global string $cfg['Schema']['dia_show_keys']
 */
$cfg['Schema']['dia_show_keys'] = false;

/**
 * L/P
 *
 * @global string $cfg['Schema']['dia_orientation']
 */
$cfg['Schema']['dia_orientation'] = 'L';

/**
 * @global string $cfg['Schema']['dia_paper']
 */
$cfg['Schema']['dia_paper'] = 'A4';

/**
 * @global string $cfg['Schema']['eps_show_color']
 */
$cfg['Schema']['eps_show_color'] = true;

/**
 * @global string $cfg['Schema']['eps_show_keys']
 */
$cfg['Schema']['eps_show_keys'] = false;

/**
 * @global string $cfg['Schema']['eps_all_tables_same_width']
 */
$cfg['Schema']['eps_all_tables_same_width'] = false;

/**
 * L/P
 *
 * @global string $cfg['Schema']['eps_orientation']
 */
$cfg['Schema']['eps_orientation'] = 'L';

/**
 * @global string $cfg['Schema']['svg_show_color']
 */
$cfg['Schema']['svg_show_color'] = true;

/**
 * @global string $cfg['Schema']['svg_show_keys']
 */
$cfg['Schema']['svg_show_keys'] = false;

/**
 * @global string $cfg['Schema']['svg_all_tables_same_width']
 */
$cfg['Schema']['svg_all_tables_same_width'] = false;

/*******************************************************************************
 * PDF options
 */

/**
 * @global array $cfg['PDFPageSizes']
 */
$cfg['PDFPageSizes'] = [
    'A3',
    'A4',
    'A5',
    'letter',
    'legal',
];

/**
 * @global string $cfg['PDFDefaultPageSize']
 */
$cfg['PDFDefaultPageSize'] = 'A4';


/*******************************************************************************
 * Language and character set conversion settings
 */

/**
 * Default language to use, if not browser-defined or user-defined
 *
 * @global string $cfg['DefaultLang']
 */
$cfg['DefaultLang'] = 'en';

/**
 * Default connection collation
 *
 * @global string $cfg['DefaultConnectionCollation']
 */
$cfg['DefaultConnectionCollation'] = 'utf8mb4_unicode_ci';

/**
 * Force: always use this language, e.g. 'en'
 *
 * @global string $cfg['Lang']
 */
$cfg['Lang'] = '';

/**
 * Regular expression to limit listed languages, e.g. '^(cs|en)' for Czech and
 * English only
 *
 * @global string $cfg['FilterLanguages']
 */
$cfg['FilterLanguages'] = '';

/**
 * You can select here which functions will be used for character set conversion.
 * Possible values are:
 *      auto   - automatically use available one (first is tested iconv, then
 *               recode)
 *      iconv  - use iconv or libiconv functions
 *      recode - use recode_string function
 *      mb     - use mbstring extension
 *      none   - disable encoding conversion
 *
 * @global string $cfg['RecodingEngine']
 */
$cfg['RecodingEngine'] = 'auto';

/**
 * Specify some parameters for iconv used in character set conversion. See iconv
 * documentation for details:
 * https://www.gnu.org/savannah-checkouts/gnu/libiconv/documentation/libiconv-1.15/iconv_open.3.html
 *
 * @global string $cfg['IconvExtraParams']
 */
$cfg['IconvExtraParams'] = '//TRANSLIT';

/**
 * Available character sets for MySQL conversion. currently contains all which could
 * be found in lang/* files and few more.
 * Character sets will be shown in same order as here listed, so if you frequently
 * use some of these move them to the top.
 *
 * @global array $cfg['AvailableCharsets']
 */
$cfg['AvailableCharsets'] = [
    'iso-8859-1',
    'iso-8859-2',
    'iso-8859-3',
    'iso-8859-4',
    'iso-8859-5',
    'iso-8859-6',
    'iso-8859-7',
    'iso-8859-8',
    'iso-8859-9',
    'iso-8859-10',
    'iso-8859-11',
    'iso-8859-12',
    'iso-8859-13',
    'iso-8859-14',
    'iso-8859-15',
    'windows-1250',
    'windows-1251',
    'windows-1252',
    'windows-1256',
    'windows-1257',
    'koi8-r',
    'big5',
    'gb2312',
    'utf-16',
    'utf-8',
    'utf-7',
    'x-user-defined',
    'euc-jp',
    'ks_c_5601-1987',
    'tis-620',
    'SHIFT_JIS',
    'SJIS',
    'SJIS-win',
];


/*******************************************************************************
 * Customization & design
 *
 * The graphical settings are now located in themes/theme-name/scss/_variables.scss
 */

/**
 * enable the left panel pointer
 *
 * @global boolean $cfg['NavigationTreePointerEnable']
 */
$cfg['NavigationTreePointerEnable'] = true;

/**
 * enable the browse pointer
 *
 * @global boolean $cfg['BrowsePointerEnable']
 */
$cfg['BrowsePointerEnable'] = true;

/**
 * enable the browse marker
 *
 * @global boolean $cfg['BrowseMarkerEnable']
 */
$cfg['BrowseMarkerEnable'] = true;

/**
 * textarea size (columns) in edit mode
 * (this value will be emphasized (*2) for SQL
 * query textareas and (*1.25) for query window)
 *
 * @global integer $cfg['TextareaCols']
 */
$cfg['TextareaCols'] = 40;

/**
 * textarea size (rows) in edit mode
 *
 * @global integer $cfg['TextareaRows']
 */
$cfg['TextareaRows'] = 15;

/**
 * double size of textarea size for LONGTEXT columns
 *
 * @global boolean $cfg['LongtextDoubleTextarea']
 */
$cfg['LongtextDoubleTextarea'] = true;

/**
 * auto-select when clicking in the textarea of the query-box
 *
 * @global boolean $cfg['TextareaAutoSelect']
 */
$cfg['TextareaAutoSelect'] = false;

/**
 * textarea size (columns) for CHAR/VARCHAR
 *
 * @global integer $cfg['CharTextareaCols']
 */
$cfg['CharTextareaCols'] = 40;

/**
 * textarea size (rows) for CHAR/VARCHAR
 *
 * @global integer $cfg['CharTextareaRows']
 */
$cfg['CharTextareaRows'] = 7;

/**
 * Max field data length in browse mode for all non-numeric fields
 *
 * @global integer $cfg['LimitChars']
 */
$cfg['LimitChars'] = 50;

/**
 * Where to show the edit/copy/delete links in browse mode
 * Possible values are 'left', 'right', 'both' and 'none'.
 *
 * @global string $cfg['RowActionLinks']
 */
$cfg['RowActionLinks'] = 'left';

/**
 * Whether to show row links (Edit, Copy, Delete) and checkboxes for
 * multiple row operations even when the selection does not have a unique key.
 *
 * @global boolean $cfg['RowActionLinksWithoutUnique']
 */
$cfg['RowActionLinksWithoutUnique'] = false;

/**
 * Default sort order by primary key.
 *
 * @global string $cfg['TablePrimaryKeyOrder']
 */
$cfg['TablePrimaryKeyOrder'] = 'NONE';

/**
 * remember the last way a table sorted
 *
 * @global string $cfg['RememberSorting']
 */
$cfg['RememberSorting'] = true;

/**
 * shows column comments in 'browse' mode.
 *
 * @global boolean $cfg['ShowBrowseComments']
 */
$cfg['ShowBrowseComments'] = true;

/**
 * shows column comments in 'table property' mode.
 *
 * @global boolean $cfg['ShowPropertyComments']
 */
$cfg['ShowPropertyComments'] = true;

/**
 * repeat header names every X cells? (0 = deactivate)
 *
 * @global integer $cfg['RepeatCells']
 */
$cfg['RepeatCells'] = 100;

/**
 * Set to true if you want DB-based query history.If false, this utilizes
 * JS-routines to display query history (lost by window close)
 *
 * @global boolean $cfg['QueryHistoryDB']
 */
$cfg['QueryHistoryDB'] = false;

/**
 * When using DB-based query history, how many entries should be kept?
 *
 * @global integer $cfg['QueryHistoryMax']
 */
$cfg['QueryHistoryMax'] = 25;

/**
 * Use MIME-Types (stored in column comments table) for
 *
 * @global boolean $cfg['BrowseMIME']
 */
$cfg['BrowseMIME'] = true;

/**
 * When approximate count < this, PMA will get exact count for table rows.
 *
 * @global integer $cfg['MaxExactCount']
 */
$cfg['MaxExactCount'] = 50000;

/**
 * Zero means that no row count is done for views; see the doc
 *
 * @global integer $cfg['MaxExactCountViews']
 */
$cfg['MaxExactCountViews'] = 0;

/**
 * Sort table and database in natural order
 *
 * @global boolean $cfg['NaturalOrder']
 */
$cfg['NaturalOrder'] = true;

/**
 * Initial state for sliders
 * (open | closed | disabled)
 *
 * @global string $cfg['InitialSlidersState']
 */
$cfg['InitialSlidersState'] = 'closed';

/**
 * User preferences: disallow these settings
 * For possible setting names look in libraries/config/user_preferences.forms.php
 *
 * @global array $cfg['UserprefsDisallow']
 */
$cfg['UserprefsDisallow'] = [];

/**
 * User preferences: enable the Developer tab
 */
$cfg['UserprefsDeveloperTab'] = false;

/*******************************************************************************
 * Window title settings
 */

/**
 * title of browser window when a table is selected
 *
 * @global string $cfg['TitleTable']
 */
$cfg['TitleTable'] = '@HTTP_HOST@ / @VSERVER@ / @DATABASE@ / @TABLE@ | @PHPMYADMIN@';

/**
 * title of browser window when a database is selected
 *
 * @global string $cfg['TitleDatabase']
 */
$cfg['TitleDatabase'] = '@HTTP_HOST@ / @VSERVER@ / @DATABASE@ | @PHPMYADMIN@';

/**
 * title of browser window when a server is selected
 *
 * @global string $cfg['TitleServer']
 */
$cfg['TitleServer'] = '@HTTP_HOST@ / @VSERVER@ | @PHPMYADMIN@';

/**
 * title of browser window when nothing is selected
 *
 * @global string $cfg['TitleDefault']
 */
$cfg['TitleDefault'] = '@HTTP_HOST@ | @PHPMYADMIN@';


/*******************************************************************************
 * theme manager
 */

/**
 * if you want to use selectable themes and if ThemesPath not empty
 * set it to true, else set it to false (default is false);
 *
 * @global boolean $cfg['ThemeManager']
 */
$cfg['ThemeManager'] = true;

/**
 * set up default theme, you can set up here an valid
 * path to themes or 'original' for the original pma-theme
 *
 * @global string $cfg['ThemeDefault']
 */
$cfg['ThemeDefault'] = 'pmahomme';

/**
 * allow different theme for each configured server
 *
 * @global boolean $cfg['ThemePerServer']
 */
$cfg['ThemePerServer'] = false;


/**
 * Default query for table
 *
 * @global string $cfg['DefaultQueryTable']
 */
$cfg['DefaultQueryTable'] = 'SELECT * FROM @TABLE@ WHERE 1';

/**
 * Default query for database
 *
 * @global string $cfg['DefaultQueryDatabase']
 */
$cfg['DefaultQueryDatabase'] = '';


/*******************************************************************************
 * SQL Query box settings
 * These are the links display in all of the SQL Query boxes
 *
 * @global array $cfg['SQLQuery']
 */
$cfg['SQLQuery'] = [];

/**
 * Display an "Edit" link on the results page to change a query
 *
 * @global boolean $cfg['SQLQuery']['Edit']
 */
$cfg['SQLQuery']['Edit'] = true;

/**
 * Display an "Explain SQL" link on the results page
 *
 * @global boolean $cfg['SQLQuery']['Explain']
 */
$cfg['SQLQuery']['Explain'] = true;

/**
 * Display a "Create PHP code" link on the results page to wrap a query in PHP
 *
 * @global boolean $cfg['SQLQuery']['ShowAsPHP']
 */
$cfg['SQLQuery']['ShowAsPHP'] = true;

/**
 * Display a "Refresh" link on the results page
 *
 * @global boolean $cfg['SQLQuery']['Refresh']
 */
$cfg['SQLQuery']['Refresh'] = true;

/**
 * Enables autoComplete for table & column names in SQL queries
 *
 * default = 'true'
 */
$cfg['EnableAutocompleteForTablesAndColumns'] = true;


/*******************************************************************************
 * Web server upload/save/import directories
 */

/**
 * Directory for uploaded files that can be executed by phpMyAdmin.
 * For example './upload'. Leave empty for no upload directory support.
 * Use %u for username inclusion.
 *
 * @global string $cfg['UploadDir']
 */
$cfg['UploadDir'] = '';

/**
 * Directory where phpMyAdmin can save exported data on server.
 * For example './save'. Leave empty for no save directory support.
 * Use %u for username inclusion.
 *
 * @global string $cfg['SaveDir']
 */
$cfg['SaveDir'] = '';

/**
 * Directory where phpMyAdmin can save temporary files.
 *
 * @global string $cfg['TempDir']
 */
if (defined('TEMP_DIR')) {
    $cfg['TempDir'] = TEMP_DIR;
} else {
    $cfg['TempDir'] = ROOT_PATH . 'tmp' . DIRECTORY_SEPARATOR;
}

/**
 * Misc. settings
 */

/**
 * Is GD >= 2 available? Set to yes/no/auto. 'auto' does auto-detection,
 * which is the only safe way to determine GD version.
 *
 * @global string $cfg['GD2Available']
 */
$cfg['GD2Available'] = 'auto';

/**
 * Lists proxy IP and HTTP header combinations which are trusted for IP allow/deny
 *
 * @global array $cfg['TrustedProxies']
 */
$cfg['TrustedProxies'] = [];

/**
 * We normally check the permissions on the configuration file to ensure
 * it's not world writable. However, phpMyAdmin could be installed on
 * a NTFS filesystem mounted on a non-Windows server, in which case the
 * permissions seems wrong but in fact cannot be detected. In this case
 * a sysadmin would set the following to false.
 */
$cfg['CheckConfigurationPermissions'] = true;

/**
 * Limit for length of URL in links. When length would be above this limit, it
 * is replaced by form with button.
 * This is required as some web servers (IIS) have problems with long URLs.
 * The recommended limit is 2000
 * (see https://www.boutell.com/newfaq/misc/urllength.html) but we put
 * 1000 to accommodate Suhosin, see bug #3358750.
 */
$cfg['LinkLengthLimit'] = 1000;

/**
 * Additional string to allow in CSP headers.
 */
 $cfg['CSPAllow'] = '';

/**
 * Disable the table maintenance mass operations, like optimizing or
 * repairing the selected tables of a database. An accidental execution
 * of such a maintenance task can enormously slow down a bigger database.
 */
$cfg['DisableMultiTableMaintenance'] = false;

/**
 * Whether or not to query the user before sending the error report to
 * the phpMyAdmin team when a JavaScript error occurs
 *
 * Available options
 * (ask | always | never)
 *
 * @global string $cfg['SendErrorReports']
 */
$cfg['SendErrorReports'] = 'ask';

/**
 * Whether Enter or Ctrl+Enter executes queries in the console.
 *
 * @global boolean $cfg['ConsoleEnterExecutes']
 */
$cfg['ConsoleEnterExecutes'] = false;

/**
 * Zero Configuration mode.
 *
 * @global boolean $cfg['ZeroConf']
 */
$cfg['ZeroConf'] = true;

/*******************************************************************************
 * Developers ONLY!
 *
 * @global array $cfg['DBG']
 */
$cfg['DBG'] = [];

/**
 * Output executed queries and their execution times
 *
 * @global boolean $cfg['DBG']['sql']
 */
$cfg['DBG']['sql'] = false;

/**
 * Log executed queries and their execution times to syslog
 *
 * @global boolean $cfg['DBG']['sqllog']
 */
$cfg['DBG']['sqllog'] = false;

/**
 * Enable to let server present itself as demo server.
 *
 * @global boolean $cfg['DBG']['demo']
 */
$cfg['DBG']['demo'] = false;

/**
 * Enable Simple two-factor authentication
 *
 * @global boolean $cfg['DBG']['simple2fa']
 */
$cfg['DBG']['simple2fa'] = false;

/**
 * Sets the working environment
 *
 * This only needs to be changed when you are developing phpMyAdmin itself.
 * The development mode may display debug information in some places.
 *
 * Possible values are 'production' or 'development'
 */
$cfg['environment'] = 'production';

/*******************************************************************************
 * MySQL settings
 */

/**
 * Default functions for above defined groups
 *
 * @global array $cfg['DefaultFunctions']
 */
$cfg['DefaultFunctions'] = [
    'FUNC_CHAR' => '',
    'FUNC_DATE' => '',
    'FUNC_NUMBER' => '',
    'FUNC_SPATIAL' => 'GeomFromText',
    'FUNC_UUID' => 'UUID',
    'first_timestamp' => 'NOW',
];

/**
 * Max rows retrieved for zoom search
 */
$cfg['maxRowPlotLimit'] = 500;

/**
 * Show Git revision if applicable
 *
 * @global boolean $cfg['ShowGitRevision']
 */
$cfg['ShowGitRevision'] = true;

/**
 * MySQL minimal version required
 *
 * @global array $cfg['MysqlMinVersion']
 */
$cfg['MysqlMinVersion'] = [
    'internal' => 50500,
    'human' => '5.5.0',
];

/**
 * Disable shortcuts
 *
 * @global array $cfg['DisableShortcutKeys']
 */
$cfg['DisableShortcutKeys'] = false;

/**
 * Console configuration
 *
 * This is mostly meant for user preferences.
 */
$cfg['Console'] = [
    'StartHistory' => false,
    'AlwaysExpand' => false,
    'CurrentQuery' => true,
    'EnterExecutes' => false,
    'DarkTheme' => false,
    'Mode' => 'info',
    'Height' => 92,
    'GroupQueries' => false,
    'OrderBy' => 'exec',
    'Order' => 'asc',
];


/*******************************************************************************
 * Default options for transformations
 */

/**
 * Initialize default transformations array
 *
 * @global array $cfg['DefaultTransformations']
 */
$cfg['DefaultTransformations'] = [];

/**
 * Default transformations for Substring
 *
 * @global array $cfg['DefaultTransformations']['Substring']
 */
$cfg['DefaultTransformations']['Substring'] = [
    0,
    'all',
    '…',
];

/**
 * Default transformations for Bool2Text
 *
 * @global array $cfg['DefaultTransformations']['Bool2Text']
 */
$cfg['DefaultTransformations']['Bool2Text'] = [
    'T',
    'F',
];

/**
 * Default transformations for External
 *
 * @global array $cfg['DefaultTransformations']['External']
 */
$cfg['DefaultTransformations']['External'] = [
    0,
    '-f /dev/null -i -wrap -q',
    1,
    1,
];

/**
 * Default transformations for PreApPend
 *
 * @global array $cfg['DefaultTransformations']['PreApPend']
 */
$cfg['DefaultTransformations']['PreApPend'] = [
    '',
    '',
];

/**
 * Default transformations for Hex
 *
 * @global array $cfg['DefaultTransformations']['Hex']
 */
$cfg['DefaultTransformations']['Hex'] = ['2'];

/**
 * Default transformations for DateFormat
 *
 * @global array $cfg['DefaultTransformations']['DateFormat']
 */
$cfg['DefaultTransformations']['DateFormat'] = [
    0,
    '',
    'local',
];

/**
 * Set default for FirstDayOfCalendar
 *
 * @global integer $cfg['FirstDayOfCalendar']
 */
$cfg['FirstDayOfCalendar'] = 0;

/**
 * Default transformations for Inline
 *
 * @global array $cfg['DefaultTransformations']['Inline']
 */
$cfg['DefaultTransformations']['Inline'] = [
    '100',
    100,
];
$cfg['DefaultTransformations']['Inline']['wrapper_link'] = null;
$cfg['DefaultTransformations']['Inline']['wrapper_params'] = [];

/**
 * Default transformations for TextImageLink
 *
 * @global array $cfg['DefaultTransformations']['TextImageLink']
 */
$cfg['DefaultTransformations']['TextImageLink'] = [
    null,
    100,
    50,
];

/**
 * Default transformations for TextLink
 *
 * @global array $cfg['DefaultTransformations']['TextLink']
 */
$cfg['DefaultTransformations']['TextLink'] = [
    null,
    null,
    null,
];
