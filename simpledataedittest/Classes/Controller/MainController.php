<?php
declare(strict_types=1);

namespace Porthd\Simpledataedittest\Controller;


use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

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

/**
 * MainController
 */
class MainController extends ActionController
{

    /**
     * mainRepository
     *
     * @var \Porthd\Simpledataedittest\Domain\Repository\MainRepository
     */
    protected $mainRepository = null;

    /**
     * @param \Porthd\Simpledataedittest\Domain\Repository\MainRepository $mainRepository
     */
    public function injectMainRepository(\Porthd\Simpledataedittest\Domain\Repository\MainRepository $mainRepository)
    {
        $this->mainRepository = $mainRepository;
    }

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $mains = $this->mainRepository->findAll()->toArray();
        $this->view->assign('mains', $mains);
    }

}
