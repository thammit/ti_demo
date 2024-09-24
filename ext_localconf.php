<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'TiDemo',
        'Plugin',
        [
            \ThammIT\TiDemo\Controller\DemoController::class => 'index'
        ],
        // non-cacheable actions
        [
            \ThammIT\TiDemo\Controller\DemoController::class => 'index'
        ]
    );

})();
