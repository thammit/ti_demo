<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_tidemo_domain_model_demo', 'EXT:ti_demo/Resources/Private/Language/locallang_csh_tx_tidemo_domain_model_demo.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_tidemo_domain_model_demo');
})();
