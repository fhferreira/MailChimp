<?php

/**
 * Example of the campaignOpenedAIM() API call
 * @link http://apidocs.mailchimp.com/api/1.3/campaignnotopenedaim.func.php
 * @author Ben Tadiar <ben@handcraftedbyben.co.uk>
 */

// Require the bootstrap
require_once(dirname(__FILE__) . '/../bootstrap.php');

// Retrieve the report manager object
$reportManager = $mailchimp->getManager('CampaignReportData');

$id = ''; // Specify the campaign ID

// Get opens for for campaign $id
$opens = $reportManager->campaignOpenedAIM($id);

// Dump the output
var_dump($opens);
