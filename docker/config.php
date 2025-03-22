<?php
/**
 * Configuration for the web interface of a World of Warcraft private server.
 *
 * @author Amin Mahmoudi (MasterkinG)
 * @copyright Copyright (c) 2019 - 2024, MasterkinG32. (https://masterking32.com)
 * @link https://masterking32.com
 **/

// Basic Configuration - Adjust to match your website's details.
$config['baseurl'] = getenv('CMS_CONFIG_BASEURL') ?: "http://localhost"; // Must be a valid URL to prevent issues with loading images and templates.
$config['page_title'] = getenv('CMS_CONFIG_PAGE_TITLE') ?: "Simple Register"; // The title of your website as displayed in the browser tab.
$config['language'] = getenv('CMS_CONFIG_LANGUAGE') ?: "english"; // The default language for your website.
$config['supported_langs'] = getenv('CMS_CONFIG_SUPPORTED_LANGS') ? json_decode(getenv('CMS_CONFIG_SUPPORTED_LANGS'), true) : [
    'english' => 'English',
    'persian' => 'Persian',
    'italian' => 'Italian',
    'chinese-simplified' => 'Chinese Simplified',
    'chinese-traditional' => 'Chinese Traditional',
    'swedish' => 'Swedish',
    'french' => 'French',
    'german' => 'German',
    'spanish' => 'Spanish',
    'korean' => 'Korean',
    'russian' => 'Russian',
    'portugues' => 'Portuguese',
];

// Debug Mode - Enable it to display errors during troubleshooting.
$config['debug_mode'] = getenv('CMS_CONFIG_DEBUG_MODE') ?: true; // Set to true to enable debug mode if you encounter blank screens or errors.

// Server Information - Customize this with your server's specific details.
$config['realmlist'] = getenv('CMS_CONFIG_REALMLIST') ?: 'logon.myserver.com'; // The Realmlist of your server.
$config['patch_location'] = getenv('CMS_CONFIG_PATCH_LOCATION') ?: 'http://mypatch.com/patch.mpq'; // URL to download the patch if available. Leave empty if not applicable.
$config['game_version'] = getenv('CMS_CONFIG_GAME_VERSION') ?: '3.3.5a (12340)'; // The version of the game that your server is running.

/* Server Expansion Settings - Choose your server's expansion by setting the corresponding number.
0 = Classic
1 = The Burning Crusade (TBC)
2 = Wrath of the Lich King (WotLK)
3 = Cataclysm
4 = Mist of Pandaria (MOP)
5 = Warlords of Draenor (WOD)
6 = Legion
7 = BFA (I'm not sure about this one!)
 */
$config['expansion'] = getenv('CMS_CONFIG_EXPANSION') ?: '2'; // '2' corresponds to "Wrath of the Lich King" (WotLK).

/* Server Core Type - Choose the server core your server is using.
Core Type:
0 = TrinityCore
1 = AzerothCore
2 = AshamaneCore
3 = Skyfire Project
4 = OregonCore
5 = CMangos
10 = etc
 */
$config['server_core'] = getenv('CMS_CONFIG_SERVER_CORE') ?: 1; // '0' corresponds to TrinityCore.

// Battle.net Support - Enable this if your server supports the Battle.net feature for auth (WoD/Legion/BFA cores).
$config['battlenet_support'] = getenv('CMS_CONFIG_BATTLENET_SUPPORT') ?: false;

// SRP6 Password Encryption - Enable if your password encryption is of the SRP6 type, for last version of TC/AC you need to enable this.
$config['srp6_support'] = getenv('CMS_CONFIG_SRP6_SUPPORT') ?: true; // Important: Enable the GMP extension for PHP in your php.ini.

/* Choose SRP6 version from below.
0 = SRP6 - no srp_version field in auth database battlenet_accounts table
1 = SRP6v1
2 = SRP6v2
 */
$config['srp6_version'] = getenv('CMS_CONFIG_SRP6_VERSION') ?: 2;

// Feature Toggles - Control whether certain pages or features should be disabled.
$config['disable_top_players'] = getenv('CMS_CONFIG_DISABLE_TOP_PLAYERS') ?: false; // Set to true to hide the top players page.
$config['disable_online_players'] = getenv('CMS_CONFIG_DISABLE_ONLINE_PLAYERS') ?: false; // Set to true to hide the online players page.
$config['disable_changepassword'] = getenv('CMS_CONFIG_DISABLE_CHANGEPASSWORD') ?: false; // Set to true to disable password changes.

// Multiple Email Account Creation - Configure whether to allow multiple accounts to be created with the same email address.
$config['multiple_email_use'] = getenv('CMS_CONFIG_MULTIPLE_EMAIL_USE') ?: false; // Change to true to allow creation of multiple accounts with the same email.

// Template Selection - Choose which template to use for the appearance of your website.
$config['template'] = getenv('CMS_CONFIG_TEMPLATE') ?: 'light'; // Available templates: light, advance, icecrown, kaelthas, battleforazeroth.

// SMTP Configuration - Required for sending out emails (e.g., password recovery).
$config['smtp_host'] = getenv('CMS_CONFIG_SMTP_HOST') ?: 'smtp1.example.com'; // SMTP host address.
$config['smtp_port'] = getenv('CMS_CONFIG_SMTP_PORT') ?: 587; // SMTP port.
$config['smtp_auth'] = getenv('CMS_CONFIG_SMTP_AUTH') ?: true; // Toggle SMTP authentication.
$config['smtp_user'] = getenv('CMS_CONFIG_SMTP_USER') ?: 'user@example.com'; // SMTP username.
$config['smtp_pass'] = getenv('CMS_CONFIG_SMTP_PASS') ?: 'SECRET'; // SMTP password.
$config['smtp_secure'] = getenv('CMS_CONFIG_SMTP_SECURE') ?: 'tls'; // Encryption method: 'tls' or 'ssl'.
$config['smtp_mail'] = getenv('CMS_CONFIG_SMTP_MAIL') ?: 'no-reply@example.com'; // The email address emails are sent from.

// Vote System Configuration - Enable or disable the voting system for server promotion.
$config['vote_system'] = getenv('CMS_CONFIG_VOTE_SYSTEM') ?: true; // Set to true to enable the vote system.
$config['vote_sites'] = getenv('CMS_CONFIG_VOTE_SITES') ? json_decode(getenv('CMS_CONFIG_VOTE_SITES'), true) : array(
    // Define vote sites and their corresponding images.
    // array(
    //     'image' => 'http://www.top100arena.com/hit.asp?id=93137&c=WoW&t=2',
    //     'site_url' => 'http://www.top100arena.com/in.asp?id=93137'
    // ),
    // array(
    //     'image' => 'https://topg.org/topg.gif',
    //     'site_url' => 'https://topg.org/wow-private-servers/in-479394'
    // ),
    // array(
    //     'image' => 'http://www.xtremeTop100.com/votenew.jpg',
    //     'site_url' => 'http://www.xtremetop100.com/in.php?site=1132364316'
    // )
);

// Captcha Configuration - Choose the type of captcha to use for security purposes.
$config['captcha_type'] = getenv('CMS_CONFIG_CAPTCHA_TYPE') ?: 0; // Options: 0 (Image Captcha), 1 (HCaptcha), 2 (ReCaptcha v2), or >2 (Disable captcha).
$config['captcha_key'] = getenv('CMS_CONFIG_CAPTCHA_KEY') ?: ''; // The key for HCaptcha or Recaptcha. Leave empty for image captcha.
$config['captcha_secret'] = getenv('CMS_CONFIG_CAPTCHA_SECRET') ?: ''; // The secret for HCaptcha or Recaptcha. Leave empty for image captcha.
$config['captcha_language'] = getenv('CMS_CONFIG_CAPTCHA_LANGUAGE') ?: 'en'; // Language for captcha. Documentation links provided in the original comments.

// SOAP Interface for Account Registration - Configure if you prefer to handle account creation through the SOAP interface.
// You don't need to enable this if you are using the default account creation method or new type of cores.
$config['soap_for_register'] = getenv('CMS_CONFIG_SOAP_FOR_REGISTER') ?: false; // Enable this only if you are certain of your SOAP configuration.
$config['soap_host'] = getenv('CMS_CONFIG_SOAP_HOST') ?: 'ac-worldserver'; // The SOAP service address.
$config['soap_port'] = getenv('CMS_CONFIG_SOAP_PORT') ?: '7878'; // The SOAP service port.
$config['soap_uri'] = getenv('CMS_CONFIG_SOAP_URI') ?: 'urn:AC'; // The SOAP URI, change as per your core's SOAP implementation.
$config['soap_style'] = getenv('CMS_CONFIG_SOAP_STYLE') ?: 'SOAP_RPC'; // The SOAP style.
$config['soap_username'] = getenv('CMS_CONFIG_SOAP_USERNAME') ?: 'admin'; // The username for SOAP authentication.
$config['soap_password'] = getenv('CMS_CONFIG_SOAP_PASSWORD') ?: 'admin'; // The password for SOAP authentication.
$config['soap_ca_command'] = getenv('CMS_CONFIG_SOAP_CA_COMMAND') ?: 'account create {USERNAME} {PASSWORD}'; // The SOAP command for creating an account.

// Two-Factor Authentication (2FA) - Configure 2FA if your core supports it.
// Although configuring SOAP is necessary for certain operations, you do not need to enable the 'soap_for_register' option
// if you are setting up Two-Factor Authentication (2FA). This adds a layer of security by utilizing email verification.
// To support this email-based verification for 2FA, ensure that your SMTP settings are correctly configured.
$config['2fa_support'] = getenv('CMS_CONFIG_2FA_SUPPORT') ?: false; // Toggle to enable or disable 2FA.
$config['soap_2d_command'] = getenv('CMS_CONFIG_SOAP_2D_COMMAND') ?: 'account set 2fa {USERNAME} off'; // SOAP command to disable 2FA.
$config['soap_2e_command'] = getenv('CMS_CONFIG_SOAP_2E_COMMAND') ?: 'account set 2fa {USERNAME} {SECRET}'; // SOAP command to enable 2FA.

// Database Information - Configure the connection details for your Auth/Realmd database.
$config['db_auth_host'] = getenv('CMS_CONFIG_DB_AUTH_HOST') ?: 'ac-database'; // Database host address.
$config['db_auth_port'] = getenv('CMS_CONFIG_DB_AUTH_PORT') ?: '3306'; // Database port.
$config['db_auth_user'] = getenv('CMS_CONFIG_DB_AUTH_USER') ?: 'root'; // Database username.
$config['db_auth_pass'] = getenv('CMS_CONFIG_DB_AUTH_PASS') ?: 'password'; // Database password.
$config['db_auth_dbname'] = getenv('CMS_CONFIG_DB_AUTH_DBNAME') ?: 'acore_auth'; // Database name for your auth/realmd database.

// Realmlist Configuration - Configure the connection details for each realm's character database.
$config['realmlists'] = getenv('CMS_CONFIG_REALMLISTS') ? json_decode(getenv('CMS_CONFIG_REALMLISTS'), true) : array(
    "1" => array(
        'realmid' => 1, // Realm ID
        'realmname' => "Realm 1", // Realm Name
        'db_host' => "ac-database", // MySQL Host IP
        'db_port' => "3306", // MySQL Host Port
        'db_user' => "root", // MySQL username
        'db_pass' => 'password', // MySQL password
        'db_name' => "acore_characters", // Characters database name
    ),
);

/*
 * EXAMPLE OF CONFIGURING MORE THAN ONE REALM
$config['realmlists'] = getenv('CMS_CONFIG_REALMLISTS') ? json_decode(getenv('CMS_CONFIG_REALMLISTS'), true) : array( // Add your realmlist here
"1" => array(
'realmid' => 1,
'realmname' => "Realm 1",
'db_host' => "127.0.0.1",
'db_port' => "3306",
'db_user' => "root",
'db_pass' => "root",
'db_name' => "rm1_chars"
),
"2" => array(
'realmid' => 2,
'realmname' => "Realm 2",
'db_host' => "127.0.0.1",
'db_port' => "3306",
'db_user' => "root",
'db_pass' => "root",
'db_name' => "rm2_chars"
),
"3" => array(
'realmid' => 3,
'realmname' => "Realm 3",
'db_host' => "127.0.0.1",
'db_port' => "3306",
'db_user' => "root",
'db_pass' => "root",
'db_name' => "rm3_chars"
)
);
 */

// Script version - Denotes the version of this configuration script.
$config['script_version'] = getenv('CMS_CONFIG_SCRIPT_VERSION') ?: '2.0.2';