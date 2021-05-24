<?php

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


$EM_CONF[$_EXTKEY] = [
    'title' => 'simpledataedit Test',
    'description' => 'Extension which shows, how to use the extension simpladataedit in different workcases',
    'category' => 'example',
    'author' => 'Dr. Dieter Porth',
    'author_email' => 'info@mobger.de',
    'state' => 'experimental',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '10.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'simpledataedit' => '10.0.1-10.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
