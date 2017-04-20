<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$mod_strings = array (
















	'ERR_DELETE_RECORD'					=> 'A record number must be specified to delete the account.',
	'ERR_EMAIL_INCORRECT'				=> 'Provide a valid email address in order to create and send the password.',
	'ERR_EMAIL_NO_OPTS'					=> 'Could not find optimum settings for Inbound Email.',
	'ERR_ENTER_CONFIRMATION_PASSWORD'	=> 'Please enter your password confirmation.',
	'ERR_ENTER_NEW_PASSWORD'			=> 'Please enter your new password.',
	'ERR_ENTER_OLD_PASSWORD'			=> 'Please enter your current password.',
	'ERR_IE_FAILURE1'					=> '[Click here to return]',
	'ERR_IE_FAILURE2'					=> 'There was a problem connecting to the Email Account.  Please check your settings and try again.',
	'ERR_IE_MISSING_REQUIRED'			=> "Inbound Email settings are missing required information.\n  Please check your settings and try again.\n\nIf you are not setting up Inbound Email, please clear all fields in that section.",
	'ERR_INVALID_PASSWORD'				=> '正しいユーザ名とパスワードを入力してください。',
	'ERR_NO_LOGIN_MOBILE'				=> 'Your first login to this application must be completed with a non-mobile browser or in normal mode. Please return with a full browser or click on the normal link below. We apologize for any inconvenience.',
	'ERR_LAST_ADMIN_1'					=> 'The user name "',
	'ERR_LAST_ADMIN_2'					=> '" is the last user with administrator access.	At least one user must be an administrator.',
	'ERR_PASSWORD_CHANGE_FAILED_1'		=> 'User password change failed for ',
	'ERR_PASSWORD_CHANGE_FAILED_2'		=> ' failed.	The new password must be set.',
	'ERR_PASSWORD_INCORRECT_OLD_1'		=> 'Incorrect current password for user ',
	'ERR_PASSWORD_INCORRECT_OLD_2'		=> '. Re-enter password information.',
	'ERR_PASSWORD_MISMATCH'				=> 'The passwords do not match.',
	'ERR_PASSWORD_USERNAME_MISSMATCH'   => '正しいユーザ名とメールアドレスを入力してください。',
	'ERR_PASSWORD_LINK_EXPIRED'         => 'Your link has expired, please generate a new one',
	'ERR_REENTER_PASSWORDS'				=> 'The New Password and Confirm Password values do not match.',
	'ERR_REPORT_LOOP'					=> 'The system detected a reporting loop. A user cannot report to themselves, nor can any of their managers report to them.',
	'ERR_RULES_NOT_MET'                 => 'The password you entered did not meet the password requirements.  Please try again.',
	'ERR_USER_INFO_NOT_FOUND'			=> 'User Information not found',
	'ERR_USER_NAME_EXISTS_1'			=> 'The user name ',
	'ERR_USER_NAME_EXISTS_2'			=> ' already exists.	Duplicate user names are not allowed.	Change the user name to be unique.',
	'ERR_USER_IS_LOCKED_OUT'			=> 'This user is locked out of the Sugar application and cannot log in using his/her existing password.',

	'ERR_EMAIL_NOT_SENT_ADMIN'			=> 'System is unable to process your request. Please check:',
	'ERR_SMTP_URL_SMTP_PORT'			=> 'SMTP Server URL and Port',
	'ERR_SMTP_USERNAME_SMTP_PASSWORD'	=> 'SMTP Username and  SMTP Password',
	'ERR_RECIPIENT_EMAIL'				=> 'Recipient Email Address',
	'ERR_SERVER_STATUS'					=> 'Your server status',
	'ERR_SERVER_SMTP_EMPTY'				=> 'The system is unable to send an email to the user. Please check the Mail Transfer Agent in Email Settings.',
	
	'LBL_ADDRESS_CITY'					=> 'Address City',
	'LBL_ADDRESS_COUNTRY'				=> 'Address Country',
	'LBL_ADDRESS_INFORMATION'			=> 'Address Information',
	'LBL_ADDRESS_POSTALCODE'			=> 'Address Postal Code',
	'LBL_ADDRESS_STATE'					=> 'Address State',
	'LBL_ADDRESS_STREET'				=> 'Address Street',
	'LBL_ADDRESS'						=> 'Address',
	'LBL_ADMIN_USER'					=> 'システム管理者',

	'LBL_ADMIN_DESC'					=> 'User can access the Administration page all records.',
	'LBL_REGULAR_DESC'					=> 'User can access modules and records based on roles.',

	




	'LBL_ADMIN'							=> 'システム管理者',
	'LBL_ANY_EMAIL'						=> 'Any Email',
	'LBL_ANY_PHONE'						=> 'Any Phone',
	'LBL_BUTTON_CREATE'					=> '作成',
	'LBL_BUTTON_EDIT'					=> '編集',
	'LBL_CALENDAR_OPTIONS'				=> 'カレンダーオプション',
	'LBL_CHANGE_PASSWORD'               => 'Change Generated Password',
	'LBL_CHANGE_SYSTEM_PASSWORD'		=> 'Please provide a new password.',
	'LBL_CHANGE_PASSWORD_TITLE'         => 'パスワード変更',
    'LBL_CHOOSE_A_KEY'					=> 'Choose a key to prevent unauthorized publishing of your calendar',
	'LBL_CHOOSE_WHICH'					=> 'Choose which tabs are displayed',
	'LBL_CITY'							=> 'City',

	'LBL_CLEAR_BUTTON_TITLE'			=> 'クリア',


	'LBL_CONFIRM_PASSWORD'				=> '新規パスワード再入力',
	'LBL_CONFIRM_REGULAR_USER'			=> '',
	'LBL_COUNTRY'						=> '国',
	'LBL_CURRENCY_TEXT'					=> 'Select the default currency',
	'LBL_CURRENCY'						=> '通貨',
	'LBL_CURRENCY_EXAMPLE'				=> 'Currency Display Example',
	'LBL_CURRENCY_SIG_DIGITS'			=> 'Currency Significant Digits',
	'LBL_CURRENCY_SIG_DIGITS_DESC'		=> 'Number of decimal places to show for currency',
	'LBL_NUMBER_GROUPING_SEP'			=> '1000s separator',
	'LBL_NUMBER_GROUPING_SEP_TEXT'		=> 'Character used to separate thousands',
	'LBL_DECIMAL_SEP'					=> 'Decimal symbol',
	'LBL_DECIMAL_SEP_TEXT'				=> 'Character used to separate decimal portion',
	'LBL_DATE_FORMAT_TEXT'				=> 'Set the display format for date stamps',
	'LBL_DATE_FORMAT'					=> '日付フォーマット',
	'LBL_DEFAULT_SUBPANEL_TITLE'		=> 'ユーザ一覧',
	'LBL_DEPARTMENT'					=> '部署',
	'LBL_DESCRIPTION'					=> '詳細',
	'LBL_DISPLAY_TABS'					=> '表示するタブ',
	'LBL_DST_INSTRUCTIONS'				=> '(+DST) indicates the observance of Daylight Savings Time',
	'LBL_EDIT_TABS'						=> 'Edit Tabs',
	'LBL_EDIT'							=> 'Edit',
	'LBL_USER_HASH'						=> 'パスワード',
	'LBL_AUTHENTICATE_ID'				=> 'Authentication Id',
	'LBL_ACCOUNT_NAME'					=> 'Account Name',
	'LBL_USER_PREFERENCES'				=> 'User Preferences',
	'LBL_EXT_AUTHENTICATE'				=> 'External Authentication',
	'LBL_EMAIL_OTHER'					=> 'Email 2',
	'LBL_EMAIL'							=> 'メールアドレス',
	'LBL_EMAIL_CHARSET'					=> 'Outbound Character Set',
	'LBL_EMAIL_EDITOR_OPTION'			=> 'Compose format',
	'LBL_EMAIL_GMAIL_DEFAULTS'			=> 'Prefill Gmail Defaults',
	'LBL_EMAIL_LINK_TYPE'				=> 'メールクライアント',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>System Default Mail Client</b> : default email client set by the system adminstrator.<br><b>SugarCRM Mail Client</b> : email client in the Sugar Emails module.<br><b>External Mail Client</b> : other email client, such as Microsoft Outlook.',
    'LBL_EMAIL_NOT_SENT'                => 'System is unable to process your request. Please contact the system administrator.',
	'LBL_EMAIL_SHOW_COUNTS'				=> 'Show email counts?',
	'LBL_EMAIL_SIGNATURE_ERROR1'		=> 'This signature requires a name.',
    'LBL_EMAIL_SMTP_SSL'				=> 'Enable SMTP over SSL',
    'LBL_EMAIL_TEMPLATE_MISSING'            => 'No email template is selected for the email containing the password that will be sent to the user.  Please select an email template in the Password Management page.',
    'LBL_EMPLOYEE_STATUS'				=> '従業員ステータス',
	'LBL_ERROR'							=> 'エラー',
	'LBL_EXPORT_CHARSET'				=> 'インポート/エクスポート 文字コード',
	'LBL_EXPORT_CHARSET_DESC'			=> 'Choose the character set used in your locale.  This property will be used for data imports, .csv exports and for vCard generation.',
	'LBL_EXPORT_DELIMITER'				=> 'エクスポートの区切り文字',
	'LBL_EXPORT_DELIMITER_DESC'			=> 'Specify the character(s) used to delimit exported data.',
	'LBL_FAX_PHONE'						=> 'Fax',
	'LBL_FAX'							=> 'Fax',
	'LBL_FIRST_NAME'					=> '名',
    'LBL_GENERATE_PASSWORD_BUTTON_KEY'  => 'G',
    'LBL_SYSTEM_GENERATED_PASSWORD'     =>'System Generated Password',
    'LBL_GENERATE_PASSWORD_BUTTON_LABEL'   => 'Reset Password',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE'   => 'Reset Password [Alt+G]',
    'LBL_GENERATE_PASSWORD'             => 'Reset Password',
	'LBL_GROUP_DESC'					=> 'Use for assigning items to a group (example: for Inbound Email).  This type cannot login through the Sugar web interface.',
	'LBL_GROUP_USER_STATUS'				=> 'グループユーザ',
	'LBL_GROUP_USER'					=> 'グループユーザ',
	'LBL_HIDE_TABS'						=> '非表示にするタブ',
	'LBL_HOME_PHONE'					=> '自宅電話',
	'LBL_INBOUND_TITLE'					=> 'Account Information',
	'LBL_IS_ADMIN'						=> 'Is Administrator',
	'LBL_LANGUAGE'						=> '言語',
	'LBL_LAST_NAME'						=> '姓',
    'LBL_LAST_NAME_SLASH_NAME'			=> 'Last Name/Name',
    'LBL_LAYOUT_OPTIONS'                => 'レイアウトオプション',
	'LBL_LDAP'							=> 'LDAP',
	'LBL_LDAP_AUTHENTICATION'			=> 'LDAP Authentication',
	'LBL_LIST_ACCEPT_STATUS'			=> 'Accept Status',
	'LBL_LIST_ADMIN'					=> 'Admin',
	'LBL_LIST_DEPARTMENT'				=> '部署',
	'LBL_LIST_EMAIL'					=> 'メールアドレス',
	'LBL_LIST_FORM_TITLE'				=> 'ユーザ 一覧',
	'LBL_LIST_GROUP'					=> 'グループ',
	'LBL_LIST_LAST_NAME'				=> '姓',
	'LBL_LIST_MEMBERSHIP'				=> 'Membership',
	'LBL_LIST_NAME'						=> '氏名',
	'LBL_LIST_PRIMARY_PHONE'			=> 'Primary Phone',
	'LBL_LIST_PASSWORD'					=> 'パスワード',
	'LBL_LIST_STATUS'					=> 'ステータス',
	'LBL_LIST_TITLE'					=> '役職',
	'LBL_LIST_USER_NAME'				=> 'ユーザ名',
	'LBL_LOCALE_DEFAULT_NAME_FORMAT'	=> 'フルネーム表示フォーマット',
	'LBL_LOCALE_DESC_FIRST'				=> '[First]',
	'LBL_LOCALE_DESC_LAST'				=> '[Last]',
	'LBL_LOCALE_DESC_SALUTATION'		=> '[Salutation]',
	'LBL_LOCALE_DESC_TITLE'				=> '[役職]',
	'LBL_LOCALE_EXAMPLE_NAME_FORMAT'	=> '例',
	'LBL_LOCALE_NAME_FORMAT_DESC'		=> 'Set how names will be displayed.',
	'LBL_LOCALE_NAME_FORMAT_DESC_2'	=> '<i>"s" Salutation<br>"f" First Name<br>"l" Last Name</i>',
    'LBL_SAVED_SEARCH'                  => 'Saved Search & Layout',
	// LOGIN PAGE STRINGS
	'LBL_LOGIN_BUTTON_KEY'				=> 'L',
	'LBL_LOGIN_BUTTON_LABEL'			=> 'ログイン',
	'LBL_LOGIN_BUTTON_TITLE'			=> 'ログイン [Alt+L]',
	'LBL_LOGIN_WELCOME_TO'				=> 'ようこそ',
	'LBL_LOGIN_OPTIONS'					=> 'オプション',
    'LBL_LOGIN_FORGOT_PASSWORD'         => 'Forgot Password?',
    'LBL_LOGIN_SUBMIT'      		    => 'Submit',
    'LBL_LOGIN_ATTEMPTS_OVERRUN'        => 'Too many failed login attempts.',
    'LBL_LOGIN_LOGIN_TIME_ALLOWED'      => 'You can try logging in again in ',
    'LBL_LOGIN_LOGIN_TIME_DAYS'     	=> 'days.',
    'LBL_LOGIN_LOGIN_TIME_HOURS'    	=> 'h.',
    'LBL_LOGIN_LOGIN_TIME_MINUTES'      => 'min.',
   	'LBL_LOGIN_LOGIN_TIME_SECONDS'      => 'sec.',
    'LBL_LOGIN_ADMIN_CALL'              => 'Please contact the system administrator.',
	'LBL_IE6COMPAT_CHECK'              => 'Sugar detects that you are using Internet Explorer 6, which is not supported by all Sugar Themes. The "Sugar IE6" theme, which will work with Internet Explorer 6, has been selected for you.',
	'LBL_THEME_PICKER_IE6COMPAT_CHECK' => 'Warning: Internet Explorer 6 is not supported for the selected theme. The "Sugar IE6" theme, which will work with Internet Explorer 6, has been selected for you.',
    // END LOGIN PAGE STRINGS
	'LBL_MAIL_FROMADDRESS'				=> 'Reply-to address',
	'LBL_MAIL_FROMNAME'					=> 'Reply-to name',
	'LBL_MAIL_OPTIONS_TITLE'			=> 'Eメールオプション',
	'LBL_MAIL_SENDTYPE'					=> 'Mail transfer agent',
	'LBL_MAIL_SMTPAUTH_REQ'				=> 'Use SMTP Authentication?',
	'LBL_MAIL_SMTPPASS'					=> 'SMTP パスワード',
	'LBL_MAIL_SMTPPORT'					=> 'SMTP ポート番号',
	'LBL_MAIL_SMTPSERVER'				=> 'SMTP サーバ',
	'LBL_MAIL_SMTPUSER'					=> 'SMTP ユーザ名',
	'LBL_MAILMERGE_TEXT'				=> 'Enable Mail Merge (Mail Merge must also be enabled by the system administrator in Configure Settings)',
	'LBL_MAILMERGE'						=> 'メールマージ',
	'LBL_MAX_TAB'						=> 'Number of tabs',
    'LBL_MAX_TAB_DESCRIPTION'           => 'Number of tabs shown at the top of the page before an overflow menu appears.',
    'LBL_MAX_SUBTAB'                    => 'Number of subtabs',
    'LBL_MAX_SUBTAB_DESCRIPTION'        => 'Number of subtabs shown per tab before an overflow menu appears.',
	'LBL_MESSENGER_ID'					=> 'IM Name',
	'LBL_MESSENGER_TYPE'				=> 'IM Type',
	'LBL_MOBILE_PHONE'					=> '携帯電話',
	'LBL_MODIFIED_BY'                  =>'Modified By',
    'LBL_MODIFIED_BY_ID'               =>'Modified By ID',
    'LBL_MODULE_NAME'					=> 'ユーザ',
	'LBL_MODULE_TITLE'					=> 'ユーザ: ホーム',
    'LBL_NAME'							=> 'フルネーム',
    'LBL_NAVIGATION_PARADIGM'           => 'ナビゲーション',
    'LBL_NAVIGATION_PARADIGM_DESCRIPTION'   => 'View modules grouped under tab categories or view modules by distinct tabs for each module.',
	'LBL_NEW_FORM_TITLE'				=> 'New User',
	'LBL_NEW_PASSWORD'					=> 'New Password',
	'LBL_NEW_PASSWORD1'					=> 'パスワード',
	'LBL_NEW_PASSWORD2'					=> 'Confirm Password',
	'LBL_NEW_USER_PASSWORD_1'			=> 'Password was changed successfully.',
	'LBL_NEW_USER_PASSWORD_2'			=> 'An email was sent to the user containing a system-generated password.',
	'LBL_NEW_USER_PASSWORD_3'			=> 'Password was created successfully.',
	'LBL_NEW_USER_BUTTON_KEY'			=> 'N',
	'LBL_NEW_USER_BUTTON_LABEL'			=> 'New User',
	'LBL_NEW_USER_BUTTON_TITLE'			=> 'New User [Alt+N]',
	'LBL_NORMAL_LOGIN'					=> 'Switch to Normal View',
	'LBL_NOTES'							=> 'Notes',
	'LBL_OFFICE_PHONE'					=> '会社電話',
	'LBL_OLD_PASSWORD'					=> 'Current Password',
	'LBL_OTHER_EMAIL'					=> 'Other email address',
	'LBL_OTHER_PHONE'					=> 'Other Phone',
	'LBL_OTHER'							=> 'Other',
	'LBL_PASSWORD'						=> 'パスワード',
    'LBL_PASSWORD_GENERATED'            => '新規パスワード',
    'LBL_PASSWORD_EXPIRATION_LOGIN'     => 'Your password has expired. Please provide a new password.',
    'LBL_PASSWORD_EXPIRATION_GENERATED' => 'Your password is system-generated',
    'LBL_PASSWORD_EXPIRATION_TIME'      => 'Your password has expired. Please provide a new password.',
    
	'LBL_PSW_MODIFIED'                  => 'password last changed',
    'LBL_PHONE'							=> 'Phone',
	'LBL_PICK_TZ_WELCOME'				=> 'Welcome to Sugar.',
	'LBL_PICK_TZ_DESCRIPTION'           => 'Before continuing, please confirm your time zone.  Select the appropriate time zone from the list below, and click Save to continue. The time zone can be changed at any time in "My Account".',
	'LBL_PORTAL_ONLY_DESC'				=> 'Use for the Portal API. This type cannot login through the Sugar web interface.',
	'LBL_PORTAL_ONLY_USER'					=> 'Portal API User',
	'LBL_POSTAL_CODE'					=> '郵便番号',
	'LBL_PRIMARY_ADDRESS'				=> 'Primary Address',
	'LBL_PROMPT_TIMEZONE_TEXT'			=> 'Check to prompt user for time zone confirmation on login.',
	'LBL_PROMPT_TIMEZONE'				=> 'Time zone prompt',
	'LBL_PROVIDE_USERNAME_AND_EMAIL' 	=> 'Provide both a User Name and an Email Address.',
	'LBL_PUBLISH_KEY'					=> 'Publish Key',
	
	'LBL_RECAPTCHA_NEW_CAPTCHA'         => 'Get another CAPTCHA',
	'LBL_RECAPTCHA_SOUND'				=> 'Switch to Sound',
	'LBL_RECAPTCHA_IMAGE'				=> 'Switch to Image',
	'LBL_RECAPTCHA_INSTRUCTION'         => 'Enter the Two Words Below',
	'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE'=> 'Enter the Two Words to the Right',
	'LBL_RECAPTCHA_FILL_FIELD'			=> 'Enter the text that appears in the image.',
	'LBL_RECAPTCHA_INVALID_PRIVATE_KEY'	=> 'Invalid Recaptcha Private Key',
	'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE'=> 'The challenge parameter of the verify Recaptcha script was incorrect.',
	'LBL_RECAPTCHA_UNKNOWN'				=> 'Unknown Recaptcha Error',
	
	'LBL_RECEIVE_NOTIFICATIONS_TEXT'	=> 'Receive an email notification when a record is assigned to you.',
	'LBL_RECEIVE_NOTIFICATIONS'			=> 'アサイン通知',
	'LBL_REGISTER'                      => 'New user? Please register',
	'LBL_REGULAR_USER'                  => '一般ユーザ',
	'LBL_REMINDER_TEXT'					=> 'Set a default for reminders for calls and meetings.',
	'LBL_REMINDER'						=> 'リマインダ',
	'LBL_REMOVED_TABS'					=> 'Admin Remove Tabs',
	'LBL_REPORTS_TO_NAME'				=> '上司',
	'LBL_REPORTS_TO'					=> '上司',
    'LBL_REPORTS_TO_ID'                => '上司:',
	'LBL_REQUEST_SUBMIT'				=> 'Your request has been submitted.',
	'LBL_RESET_TO_DEFAULT'				=> 'デフォルト設定に戻す',
	'LBL_RESET_PREFERENCES'				=> 'User Preferences',
    'LBL_RESET_PREFERENCES_WARNING'     => 'Are you sure you want reset all of your user preferences? Warning: This will also log you out of the application.',
    'LBL_RESET_HOMEPAGE'                => 'Homepage',
    'LBL_RESET_DASHBOARD'               => 'ダッシュボード',    
    'LBL_RESET_HOMEPAGE_WARNING'        => 'Are you sure you want reset your Homepage?',
    'LBL_RESET_DASHBOARD_WARNING'       => 'Are you sure you want reset your Dashboard?',    
	'LBL_SALUTATION'                    => 'Salutation',
    'LBL_ROLES_SUBPANEL_TITLE'			=> 'ロール',
	'LBL_SEARCH_FORM_TITLE'				=> 'ユーザ検索',
	'LBL_SEARCH_URL'					=> 'Search location',
	'LBL_SELECT_CHECKED_BUTTON_LABEL'	=> 'Select Checked Users',
	'LBL_SELECT_CHECKED_BUTTON_TITLE'	=> 'Select Checked Users',
	'LBL_SETTINGS_URL_DESC'				=> 'Use this URL when establishing login settings for the Sugar Plug-in for Microsoft&reg; Outlook&reg; and the Sugar Plug-in for Microsoft&reg; Word&reg;.',
	'LBL_SETTINGS_URL'					=> 'URL',
	'LBL_SIGNATURE'						=> 'Signature',
	'LBL_SIGNATURE_HTML'				=> 'HTML signature',
	'LBL_SIGNATURE_DEFAULT'				=> 'Use signature?',
	'LBL_SIGNATURE_PREPEND'				=> 'Signature above reply?',
	'LBL_SIGNATURES'					=> 'Signatures',
	'LBL_STATE'							=> 'State',
	'LBL_STATUS'						=> 'ステータス',
    'LBL_SUBPANEL_LINKS'                => 'Subpanel Links',
    'LBL_SUBPANEL_LINKS_DESCRIPTION'    => 'In Detail Views, display a row of Subpanel shortcut links.',
    'LBL_SUBPANEL_TABS'                 => 'Subpanel Tabs',
    'LBL_SUBPANEL_TABS_DESCRIPTION'     => 'In Detail Views, group Subpanels into tabs and display one tab at a time.',
    'LBL_SUGAR_LOGIN'					=> 'Is Sugar User',
    'LBL_SUPPORTED_THEME_ONLY'          => 'Only affects themes that support this option.',
    'LBL_SWAP_LAST_VIEWED_DESCRIPTION'  => 'Display the Last Viewed bar on the side if checked.  Otherwise it goes on top.',
    'LBL_SWAP_SHORTCUT_DESCRIPTION'     => 'Display the Shortcuts bar on top if checked.  Otherwise it goes on the side.',
    'LBL_SWAP_LAST_VIEWED_POSITION'     => 'Last Viewed on side',
    'LBL_SWAP_SHORTCUT_POSITION'        => 'Shortcuts on top',
	'LBL_TAB_TITLE_EMAIL'				=> 'メール設定',
	'LBL_TAB_TITLE_USER'				=> 'ユーザ設定',
	'LBL_THEME'							=> 'テーマ',
	'LBL_TIME_FORMAT_TEXT'				=> 'Set the display format for time stamps',
	'LBL_TIME_FORMAT'					=> '時刻フォーマット',
	'LBL_TIMEZONE_DST_TEXT'				=> 'Observe Daylight Savings',
	'LBL_TIMEZONE_DST'					=> 'Daylight Savings',
	'LBL_TIMEZONE_TEXT'					=> 'Set the current time zone',
	'LBL_TIMEZONE'						=> 'タイムゾーン',
	'LBL_TITLE'							=> '役職',
	'LBL_USE_REAL_NAMES'				=> 'フルネーム表示',
	'LBL_USE_REAL_NAMES_DESC'			=> 'Display users\' full names instead of their User Names in assignment fields.',
	'LBL_USER_INFORMATION'				=> 'ユーザ情報',
	'LBL_USER_LOCALE'					=> 'ロケール設定',
	'LBL_USER_NAME'						=> 'ユーザ名',
	'LBL_USER_SETTINGS'					=> 'ユーザ設定',
	'LBL_USER_TYPE'		   			    => 'ユーザタイプ',
	'LBL_USER'							=> 'ユーザ',
	'LBL_WORK_PHONE'					=> 'Work Phone',
	'LBL_YOUR_PUBLISH_URL'				=> 'Publish at my location',
	'LBL_YOUR_QUERY_URL'				=> 'Your Query URL',
	'LNK_NEW_USER'						=> 'ユーザ作成',
	'LNK_NEW_PORTAL_USER'				=> 'Create Portal API User',
	'LNK_NEW_GROUP_USER'				=> 'グループユーザ作成',
	'LNK_USER_LIST'						=> 'ユーザ一覧',
	'LNK_REASSIGN_RECORDS'				=> 'Reassign Records',
    'LBL_PROSPECT_LIST'                 => 'Prospect List',
    'LBL_PROCESSING'                    => 'Processing',
    'LBL_UPDATE_FINISH'                 => 'Update complete',
    'LBL_AFFECTED'                      => 'affected',
    'LBL_USER_NAME_FOR_ROLE'            => 'ユーザ/チーム/ロール',


















































// INBOUND EMAIL STRINGS
	'LBL_APPLY_OPTIMUMS'				=> 'Apply Optimums',
	'LBL_ASSIGN_TO_USER'				=> 'Assign To User',
	'LBL_BASIC'							=> 'Inbound Setup',
	'LBL_CERT_DESC'						=> 'Force validation of the mail server\'s Security Certificate - do not use if self-signing.',
	'LBL_CERT'							=> 'Validate Certificate',
	'LBL_FIND_OPTIMUM_KEY'				=> 'f',
	'LBL_FIND_OPTIMUM_MSG'				=> '<br>Finding optimum connection variables.',
	'LBL_FIND_OPTIMUM_TITLE'			=> 'Find Optimum Configuration',
	'LBL_FORCE'							=> 'Force Negative',
	'LBL_FORCE_DESC'					=> 'Some IMAP/POP3 servers require special switches. Check to force a negative switch when connecting (i.e., /notls)',
	'LBL_FOUND_OPTIMUM_MSG'				=> '<br>Found optimum settings.	Press the button below to apply them to your Mailbox.',
	'LBL_EMAIL_INBOUND_TITLE'			=> 'Inbound Email Settings',
	'LBL_EMAIL_OUTBOUND_TITLE'			=> 'Outbound Email Settings',
	'LBL_LOGIN'							=> 'ユーザ名',
	'LBL_MAILBOX_DEFAULT'				=> 'INBOX',
	'LBL_MAILBOX_SSL_DESC'				=> 'Use SSL when connecting. If this does not work, check that your PHP installation included "--with-imap-ssl" in the configuration.',
	'LBL_MAILBOX'						=> 'Monitored Folder',
	'LBL_MAILBOX_TYPE'					=> 'Possible Actions',
	'LBL_MARK_READ_NO'					=> 'Email marked deleted after import',
	'LBL_MARK_READ_YES'					=> 'Email left on server after import',
	'LBL_MARK_READ_DESC'				=> 'Import and mark messages read on mail server; do not delete.',
	'LBL_MARK_READ'						=> 'Leave messages on server',
	'LBL_ONLY_SINCE_NO'					=> 'No. Check against all emails on mail server.',
	'LBL_ONLY_SINCE_YES'				=> 'Yes.',
	'LBL_ONLY_SINCE_DESC'				=> 'PHP cannot discern New from Unread messages when using POP3.	Check this flag to scan for messages since the last time the mail account was polled.	This will significantly improve performance if your mail server cannot support IMAP.',
	'LBL_ONLY_SINCE'					=> 'Import only since last check',
	'LBL_PORT'							=> 'Mail server port',
	'LBL_SERVER_OPTIONS'				=> 'Advanced Setup',
	'LBL_SERVER_TYPE'					=> 'Mail server protocol',
	'LBL_SERVER_URL'					=> 'Mail server address',
	'LBL_SSL'							=> 'Use SSL',
	'LBL_SSL_DESC'						=> 'Use Secure Socket Layer when connecting to your mail server.',
	'LBL_TEST_BUTTON_KEY'				=> 't',
	'LBL_TEST_BUTTON_TITLE'				=> 'Test [Alt+T]',
	'LBL_TEST_SETTINGS'					=> 'Test Settings',
	'LBL_TEST_SUCCESSFUL'				=> 'Connection completed successfully.',
	'LBL_TLS_DESC'						=> 'Use Transport Layer Security when connecting to the mail server - only use this if your mail server supports this protocol.',
	'LBL_TLS'							=> 'Use TLS',
	'LBL_TOGGLE_ADV'					=> 'Show Advanced',
    'LBL_OWN_OPPS'                      => 'No Opportunities',
	'LBL_EXTERNAL_AUTH_ONLY'			=> 'Authenticate this user only through',
	'LBL_ONLY'							=> 'Only',
    'LBL_OWN_OPPS_DESC'                 => 'Select if user will not be assigned opportunities. Use this setting for users who are managers that are not involved in sales activities. The setting is used for the forecasting module.',
// END INBOUND EMAIL STRINGS
	'LBL_LDAP_ERROR' => 'LDAP Error: Please contact an Admin',
	'LBL_LDAP_EXTENSION_ERROR' => 'LDAP Error: Extensions not loaded',

// PROJECT RESOURCES STRINGS	
	'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => 'User Holidays',
	'LBL_RESOURCE_NAME' => 'Name',
	'LBL_RESOURCE_TYPE' => 'Type',








	'LBL_PDF_SETTINGS'  =>  'PDF Settings',
	'LBL_PDF_PAGE_FORMAT'  =>  'Page Format',
	'LBL_PDF_PAGE_FORMAT_TEXT'  =>  'The format used for pages',
	'LBL_PDF_PAGE_ORIENTATION'  =>  'Page Orientation',
	'LBL_PDF_PAGE_ORIENTATION_TEXT'  =>  '',
	'LBL_PDF_PAGE_ORIENTATION_P'  =>  'Portrait',
	'LBL_PDF_PAGE_ORIENTATION_L'  =>  'Landscape',
	'LBL_PDF_MARGIN_HEADER'  =>  'Header Margin',
	'LBL_PDF_MARGIN_HEADER_TEXT'  =>  '',
	'LBL_PDF_MARGIN_FOOTER'  =>  'Footer Margin',
	'LBL_PDF_MARGIN_FOOTER_TEXT'  =>  '',
	'LBL_PDF_MARGIN_TOP'  =>  'Top Margin',
	'LBL_PDF_MARGIN_TOP_TEXT'  =>  '',
	'LBL_PDF_MARGIN_BOTTOM'  =>  'Bottom Margin',
	'LBL_PDF_MARGIN_BOTTOM_TEXT'  =>  '',
	'LBL_PDF_MARGIN_LEFT'  =>  'Left Margin',
	'LBL_PDF_MARGIN_LEFT_TEXT'  =>  '',
	'LBL_PDF_MARGIN_RIGHT'  =>  'Right Margin',
	'LBL_PDF_MARGIN_RIGHT_TEXT'  =>  '',
	'LBL_PDF_FONT_NAME_MAIN'  =>  'Font for Header and Body',
	'LBL_PDF_FONT_NAME_MAIN_TEXT'  =>  'The selected font will be applied to the text in the header and the body of the PDF Document',
	'LBL_PDF_FONT_SIZE_MAIN'  =>  'Main Font Size',
	'LBL_PDF_FONT_SIZE_MAIN_TEXT'  =>  '',
	'LBL_PDF_FONT_NAME_DATA'  =>  'Font for Footer',
	'LBL_PDF_FONT_NAME_DATA_TEXT'  =>  'The selected font will be applied to the text in the footer of the PDF Document',
	'LBL_PDF_FONT_SIZE_DATA'  =>  'Data Font Size',
	'LBL_PDF_FONT_SIZE_DATA_TEXT'  =>  '',
	'LBL_LAST_ADMIN_NOTICE' => 'You have selected yourself. You cannot change the User Type or Status of yourself.',


); // END STRINGS DEFS

?>
