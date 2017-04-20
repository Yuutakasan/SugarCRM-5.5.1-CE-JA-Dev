<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$mod_strings = array (
  'LBL_MODULE_NAME' => '商談',
  'LBL_MODULE_TITLE' => '商談: ホーム',
  'LBL_SEARCH_FORM_TITLE' => '商談 検索',
  'LBL_VIEW_FORM_TITLE' => 'Opportunity View',
  'LBL_LIST_FORM_TITLE' => '商談一覧',
  'LBL_OPPORTUNITY_NAME' => '商談名:',
  'LBL_OPPORTUNITY' => '商談:',
  'LBL_NAME' => '商談名',
  'LBL_INVITEE' => 'Contacts',
  'LBL_CURRENCIES' => '通貨',
  'LBL_LIST_OPPORTUNITY_NAME' => '商談名',
  'LBL_LIST_ACCOUNT_NAME' => '取引先',
  'LBL_LIST_AMOUNT' => '金額',
  'LBL_LIST_DATE_CLOSED' => '受注予定日',
  'LBL_LIST_SALES_STAGE' => 'セールスステージ',
  'LBL_ACCOUNT_ID'=>'取引先',
  'LBL_CURRENCY_ID'=>'Currency ID',
  'LBL_CURRENCY_NAME'=>'通貨名',
  'LBL_CURRENCY_SYMBOL'=>'通貨記号',



//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Opportunity - Currency Update',
  'UPDATE_DOLLARAMOUNTS' => 'Update U.S. Dollar Amounts',
  'UPDATE_VERIFY' => 'Verify Amounts',
  'UPDATE_VERIFY_TXT' => 'Verifies that the amount values in opportunities are valid decimal numbers with only numeric characters(0-9) and decimals(.)',
  'UPDATE_FIX' => 'Fix Amounts',
  'UPDATE_FIX_TXT' => 'Attempts to fix any invalid amounts by creating a valid decimal from the current amount. Any modified amount is backed up in the amount_backup database field. If you run this and notice bugs, do not rerun it without restoring from the backup as it may overwrite the backup with new invalid data.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Update the U.S. Dollar amounts for opportunities based on the current set currency rates. This value is used to calculate Graphs and List View Currency Amounts.',
  'UPDATE_CREATE_CURRENCY' => 'Creating New Currency:',
  'UPDATE_VERIFY_FAIL' => 'Record Failed Verification:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Current Amount:',
  'UPDATE_VERIFY_FIX' => 'Running Fix would give',
  'UPDATE_INCLUDE_CLOSE' => 'Include Closed Records',
  'UPDATE_VERIFY_NEWAMOUNT' => 'New Amount:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'New Currency:',
  'UPDATE_DONE' => 'Done',
  'UPDATE_BUG_COUNT' => 'Bugs Found and Attempted to Resolve:',
  'UPDATE_BUGFOUND_COUNT' => 'Bugs Found:',
  'UPDATE_COUNT' => 'Records Updated:',
  'UPDATE_RESTORE_COUNT' => 'Record Amounts Restored:',
  'UPDATE_RESTORE' => 'Restore Amounts',
  'UPDATE_RESTORE_TXT' => 'Restores amount values from the backups created during fix.',
  'UPDATE_FAIL' => 'Could not update - ',
  'UPDATE_NULL_VALUE' => 'Amount is NULL setting it to 0 -',
  'UPDATE_MERGE' => 'Merge Currencies',
  'UPDATE_MERGE_TXT' => 'Merge multiple currencies into a single currency. If there are multiple currency records for the same currency, you merge them together. This will also merge the currencies for all other modules.',
  'LBL_ACCOUNT_NAME' => '取引先:',
  'LBL_AMOUNT' => '金額:',
  'LBL_AMOUNT_USDOLLAR' => 'Amount USD:',
  'LBL_CURRENCY' => '通貨:',
  'LBL_DATE_CLOSED' => '受注予定日:',
  'LBL_TYPE' => 'タイプ:',
  'LBL_CAMPAIGN' => 'キャンペーン:',
  'LBL_NEXT_STEP' => 'Next Step:',
  'LBL_LEAD_SOURCE' => 'リードソース:',
  'LBL_SALES_STAGE' => 'セールスステージ:',
  'LBL_PROBABILITY' => '確度 (%):',
  'LBL_DESCRIPTION' => '詳細:',
  'LBL_DUPLICATE' => 'Possible Duplicate Opportunity',
  'MSG_DUPLICATE' => 'The opportunity record you are about to create might be a duplicate of a opportunity record that already exists. Opportunity records containing similar names are listed below.<br>Click Save to continue creating this new opportunity, or click Cancel to return to the module without creating the opportunity.',
  'LBL_NEW_FORM_TITLE' => '商談クイック作成',
  'LNK_NEW_OPPORTUNITY' => '商談作成',



  'LNK_OPPORTUNITY_LIST' => '商談一覧',
  'ERR_DELETE_RECORD' => 'A record number must be specified to delete the opportunity.',
  'LBL_TOP_OPPORTUNITIES' => 'アサインされた商談',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Are you sure you want to remove this contact from the opportunity?',
	'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Are you sure you want to remove this opportunity from the project?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => '商談',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'活動',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'履歴',
    'LBL_RAW_AMOUNT'=>'Raw Amount',
	
    'LBL_LEADS_SUBPANEL_TITLE' => 'リード',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '取引先担当者',



    'LBL_PROJECTS_SUBPANEL_TITLE' => 'プロジェクト',
	'LBL_ASSIGNED_TO_NAME' => 'アサイン先:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'アサイン先',




  'LBL_LIST_SALES_STAGE' => 'セールスステージ',
  'LBL_MY_CLOSED_OPPORTUNITIES' => 'クローズ済み商談',
  'LBL_TOTAL_OPPORTUNITIES' => 'Total Opportunities',
  'LBL_CLOSED_WON_OPPORTUNITIES' => '受注済み商談',
  'LBL_ASSIGNED_TO_ID' =>'アサイン先',
  'LBL_CREATED_ID'=>'Created by ID',
  'LBL_MODIFIED_ID'=>'Modified by ID',
  'LBL_MODIFIED_NAME'=>'Modified by User Name',
    'LBL_CREATED_USER' => '作成者',
    'LBL_MODIFIED_USER' => '更新者',
  'LBL_CAMPAIGN_OPPORTUNITY' => 'キャンペーン',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'プロジェクト',
	
);

?>
