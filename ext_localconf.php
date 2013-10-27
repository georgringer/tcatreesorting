<?php

if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Backend\\Form\\Element\\TreeElement'] = array(
	'className' => 'GeorgRinger\\Tcatreesorting\\Xclass\\TreeElement',
);