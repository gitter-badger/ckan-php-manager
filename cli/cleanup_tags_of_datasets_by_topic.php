<?php

namespace CKAN\Manager;


require_once dirname(__DIR__) . '/inc/common.php';

/**
 * Create results dir for logs
 */
$results_dir = RESULTS_DIR . date('/Ymd-His') . '_CLEANUP_TAGS';
mkdir($results_dir);

$CkanManager = new CkanManager(CKAN_API_URL, CKAN_API_KEY);
//$CkanManager = new CkanManager(CKAN_STAGING_API_URL, CKAN_STAGING_API_KEY);
//$CkanManager = new CkanManager(CKAN_DEV_API_URL, CKAN_DEV_API_KEY);

$CkanManager->resultsDir = $results_dir;

$topicTitle = 'ecosystems0617';
$CkanManager->cleanUpTagsByTopic($topicTitle);

// show running time on finish
timer();
