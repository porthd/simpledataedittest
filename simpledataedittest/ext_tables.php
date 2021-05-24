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

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_simpledataedittest_domain_model_main', 'EXT:simpledataedittest/Resources/Private/Language/locallang_csh_tx_simpledataedittest_domain_model_main.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_simpledataedittest_domain_model_main');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_simpledataedittest_domain_model_child', 'EXT:simpledataedittest/Resources/Private/Language/locallang_csh_tx_simpledataedittest_domain_model_child.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_simpledataedittest_domain_model_child');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_simpledataedittest_domain_model_progenitor', 'EXT:simpledataedittest/Resources/Private/Language/locallang_csh_tx_simpledataedittest_domain_model_progenitor.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_simpledataedittest_domain_model_progenitor');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_simpledataedittest_domain_model_peer', 'EXT:simpledataedittest/Resources/Private/Language/locallang_csh_tx_simpledataedittest_domain_model_peer.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_simpledataedittest_domain_model_peer');

    }
);
