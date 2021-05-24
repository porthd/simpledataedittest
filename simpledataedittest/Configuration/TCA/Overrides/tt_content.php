<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(function()
    {
        // plugin signature: <extension key without underscores> '_' <plugin name in lowercase>
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['simpledataedittest_lister'] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
            'simpledataedittest_lister',
            // Flexform configuration schema file
            'FILE:EXT:simpledataedittest/Configuration/FlexForms/Settings.xml'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Simpledataedittest',
            'Lister',
            'LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:simpleDataEdit.plugin.name.lister.title'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Simpledataedittest',
            'Factorize',
            'LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:simpleDataEdit.plugin.name.factorize.title'
        );
    }
);
