<?php
defined('TYPO3_MODE') || die('Access denied.');
/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2021 Dr. Dieter Porthd <info@mobger.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3-Extension `simpledataedittests`. It is a free software;
 *  you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

call_user_func(function () {

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\Porthd\Simpledataedittest\Upgrade\ResetDatasForTestUpgrade::whoAmI()]
        = \Porthd\Simpledataedittest\Upgrade\ResetDatasForTestUpgrade::class;

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Simpledataedittest',
        'Lister',
        [
            \Porthd\Simpledataedittest\Controller\MainController::class => 'list',
        ],
        // non-cacheable actions
        []
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Simpledataedittest',
        'Factorize',
        [
            \Porthd\Simpledataedittest\Controller\FactorizeController::class => 'factorize',
        ],
        // non-cacheable actions
        [
            \Porthd\Simpledataedittest\Controller\FactorizeController::class => 'factorize',
        ]
    );

    // wizards
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

    // Plugin lister
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        lister {
                            iconIdentifier = simpledataedittest-plugin-lister
                            title = LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:tx_simpledataedittest_lister.name
                            description = LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:tx_simpledataedittest_lister.description
                            tt_content_defValues {
                                CType = list
                                list_type = simpledataedittest_lister
                            }
                        }
                    }
                    show = *
                }
           }'
    );
    $iconRegistry->registerIcon(
        'simpledataedittest-plugin-lister',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:simpledataedittest/Resources/Public/Icons/user_plugin_lister.svg']
    );

    // Fun-Plugin factorize
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        factorize {
                            iconIdentifier = simpledataedittest-plugin-factorize
                            description = LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:tx_simpledataedittest_factorize.description
                            title = LLL:EXT:simpledataedittest/Resources/Private/Language/locallang_db.xlf:tx_simpledataedittest_factorize.name
                            tt_content_defValues {
                                CType = list
                                list_type = simpledataedittest_factorize
                            }
                        }
                    }
                    show = *
                }
           }'
    );
    $iconRegistry->registerIcon(
        'simpledataedittest-plugin-factorize',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:simpledataedittest/Resources/Public/Icons/user_plugin_factorize.svg']
    );


    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        "@import 'EXT:simpledataedittest/Configuration/TsConfig/Page/all.tsconfig'"
    );

    /**
     * define your own editor-class, if you have special elements
     */
    $whoAmI = 'whoAmI';  // if i use the name directly, PHPStorm remarks it with a warning ;-(
    $listOfCustomEditorClasses = [
        \Porthd\Simpledataedittest\Editor\TestPlainTextEditor::$whoAmI() =>
            \Porthd\Simpledataedittest\Editor\TestPlainTextEditor::class,
    ];
    /** You should be sure, that the name of your class is unique in your usage-context. */
    \Porthd\Simpledataedit\Utilities\ConfigurationUtility::addEditorClassesToSimpledateedit(
        $listOfCustomEditorClasses
    );

    /**
     * use the extensionname or an unique-namelist as an key in the list of the yamlfiles for the viewhelper `simpledateedit:yamlator`
     *
     */
    $listOfCustomYamlDefinitions = [
        'simpledataedittest' =>
            'EXT:simpledataedit/Configuration/Yaml/Yamlator.yaml',
    ];
    \Porthd\Simpledataedit\Utilities\ConfigurationUtility::addYamlatorConfigsToSimpledateedit(
        $listOfCustomYamlDefinitions
    );

});
