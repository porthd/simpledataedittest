<?php
declare(strict_types=1);

namespace Porthd\Simpledataedittest\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

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
 * Test-model Main
 */
class Main extends AbstractEntity
{

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * myRte
     *
     * @var string
     */
    protected $myRte = '';

    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * myPercent
     *
     * @var string
     */
    protected $myPercent = '';

    /**
     * myMoney
     *
     * @var string
     */
    protected $myMoney = '';

    /**
     * myFloat
     *
     * @var float
     */
    protected $myFloat = 0.0;

    /**
     * myInteger
     *
     * @var string
     */
    protected $myInteger = '';

    /**
     * myBoolean
     *
     * @var string
     */
    protected $myBoolean = '';

    /**
     * myTime
     *
     * @var int
     */
    protected $myTime = 0;

    /**
     * myTimesstamp
     *
     * @var \DateTime
     */
    protected $myTimesstamp = null;

    /**
     * myDatetime
     *
     * @var \DateTime
     */
    protected $myDatetime = null;

    /**
     * myImages
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $myImages = null;

    /**
     * myFiles
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $myFiles = null;

    /**
     * myList
     *
     * @var string
     */
    protected $myList = 0;

    /**
     * myChildren
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Porthd\Simpledataedittest\Domain\Model\Child>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $myChildren = null;

    /**
     * myProgenitor
     *
     * @var \Porthd\Simpledataedittest\Domain\Model\Progenitor
     */
    protected $myProgenitor = null;

    /**
     * myPeergroup
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Porthd\Simpledataedittest\Domain\Model\Peer>
     */
    protected $myPeergroup = null;

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }

    /**
     * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initializeObject()
    {
        $this->myChildren = $this->myChildren ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->myPeergroup = $this->myPeergroup ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the myRte
     *
     * @return string $myRte
     */
    public function getMyRte()
    {
        return $this->myRte;
    }

    /**
     * Sets the myRte
     *
     * @param string $myRte
     * @return void
     */
    public function setMyRte($myRte)
    {
        $this->myRte = $myRte;
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the myPercent
     *
     * @return string $myPercent
     */
    public function getMyPercent()
    {
        return $this->myPercent;
    }

    /**
     * Sets the myPercent
     *
     * @param string $myPercent
     * @return void
     */
    public function setMyPercent($myPercent)
    {
        $this->myPercent = $myPercent;
    }

    /**
     * Returns the myMoney
     *
     * @return string $myMoney
     */
    public function getMyMoney()
    {
        return $this->myMoney;
    }

    /**
     * Sets the myMoney
     *
     * @param string $myMoney
     * @return void
     */
    public function setMyMoney($myMoney)
    {
        $this->myMoney = $myMoney;
    }

    /**
     * Returns the myFloat
     *
     * @return float $myFloat
     */
    public function getMyFloat()
    {
        return $this->myFloat;
    }

    /**
     * Sets the myFloat
     *
     * @param float $myFloat
     * @return void
     */
    public function setMyFloat($myFloat)
    {
        $this->myFloat = $myFloat;
    }

    /**
     * Returns the myInteger
     *
     * @return string $myInteger
     */
    public function getMyInteger()
    {
        return $this->myInteger;
    }

    /**
     * Sets the myInteger
     *
     * @param string $myInteger
     * @return void
     */
    public function setMyInteger($myInteger)
    {
        $this->myInteger = $myInteger;
    }

    /**
     * Returns the myBoolean
     *
     * @return string $myBoolean
     */
    public function getMyBoolean()
    {
        return $this->myBoolean;
    }

    /**
     * Sets the myBoolean
     *
     * @param string $myBoolean
     * @return void
     */
    public function setMyBoolean($myBoolean)
    {
        $this->myBoolean = $myBoolean;
    }

    /**
     * Returns the myTime
     *
     * @return int $myTime
     */
    public function getMyTime()
    {
        return $this->myTime;
    }

    /**
     * Sets the myTime
     *
     * @param int $myTime
     * @return void
     */
    public function setMyTime(int $myTime)
    {
        $this->myTime = $myTime;
    }

    /**
     * Returns the myTimesstamp
     *
     * @return \DateTime $myTimesstamp
     */
    public function getMyTimesstamp()
    {
        return $this->myTimesstamp;
    }

    /**
     * Sets the myTimesstamp
     *
     * @param \DateTime $myTimesstamp
     * @return void
     */
    public function setMyTimesstamp(\DateTime $myTimesstamp)
    {
        $this->myTimesstamp = $myTimesstamp;
    }

    /**
     * Returns the myDatetime
     *
     * @return \DateTime $myDatetime
     */
    public function getMyDatetime()
    {
        return $this->myDatetime;
    }

    /**
     * Sets the myDatetime
     *
     * @param \DateTime $myDatetime
     * @return void
     */
    public function setMyDatetime(\DateTime $myDatetime)
    {
        $this->myDatetime = $myDatetime;
    }

    /**
     * Returns the myImages
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $myImages
     */
    public function getMyImages()
    {
        return $this->myImages;
    }

    /**
     * Sets the myImages
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $myImages
     * @return void
     */
    public function setMyImages(\TYPO3\CMS\Extbase\Domain\Model\FileReference $myImages)
    {
        $this->myImages = $myImages;
    }

    /**
     * Returns the myFiles
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $myFiles
     */
    public function getMyFiles()
    {
        return $this->myFiles;
    }

    /**
     * Sets the myFiles
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $myFiles
     * @return void
     */
    public function setMyFiles(\TYPO3\CMS\Extbase\Domain\Model\FileReference $myFiles)
    {
        $this->myFiles = $myFiles;
    }

    /**
     * Returns the myList
     *
     * @return string $myList
     */
    public function getMyList()
    {
        return $this->myList;
    }

    /**
     * Sets the myList
     *
     * @param string $myList
     * @return void
     */
    public function setMyList($myList)
    {
        $this->myList = $myList;
    }

    /**
     * Adds a Child
     *
     * @param \Porthd\Simpledataedittest\Domain\Model\Child $myChild
     * @return void
     */
    public function addMyChild(\Porthd\Simpledataedittest\Domain\Model\Child $myChild)
    {
        $this->myChildren->attach($myChild);
    }

    /**
     * Removes a Child
     *
     * @param \Porthd\Simpledataedittest\Domain\Model\Child $myChildToRemove The Child to be removed
     * @return void
     */
    public function removeMyChild(\Porthd\Simpledataedittest\Domain\Model\Child $myChildToRemove)
    {
        $this->myChildren->detach($myChildToRemove);
    }

    /**
     * Returns the myChildren
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Porthd\Simpledataedittest\Domain\Model\Child> $myChildren
     */
    public function getMyChildren()
    {
        return $this->myChildren;
    }

    /**
     * Sets the myChildren
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Porthd\Simpledataedittest\Domain\Model\Child> $myChildren
     * @return void
     */
    public function setMyChildren(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $myChildren)
    {
        $this->myChildren = $myChildren;
    }

    /**
     * Returns the myProgenitor
     *
     * @return \Porthd\Simpledataedittest\Domain\Model\Progenitor $myProgenitor
     */
    public function getMyProgenitor()
    {
        return $this->myProgenitor;
    }

    /**
     * Sets the myProgenitor
     *
     * @param \Porthd\Simpledataedittest\Domain\Model\Progenitor $myProgenitor
     * @return void
     */
    public function setMyProgenitor(\Porthd\Simpledataedittest\Domain\Model\Progenitor $myProgenitor)
    {
        $this->myProgenitor = $myProgenitor;
    }

    /**
     * Adds a Peer
     *
     * @param \Porthd\Simpledataedittest\Domain\Model\Peer $myPeergroup
     * @return void
     */
    public function addMyPeergroup(\Porthd\Simpledataedittest\Domain\Model\Peer $myPeergroup)
    {
        $this->myPeergroup->attach($myPeergroup);
    }

    /**
     * Removes a Peer
     *
     * @param \Porthd\Simpledataedittest\Domain\Model\Peer $myPeergroupToRemove The Peer to be removed
     * @return void
     */
    public function removeMyPeergroup(\Porthd\Simpledataedittest\Domain\Model\Peer $myPeergroupToRemove)
    {
        $this->myPeergroup->detach($myPeergroupToRemove);
    }

    /**
     * Returns the myPeergroup
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Porthd\Simpledataedittest\Domain\Model\Peer> $myPeergroup
     */
    public function getMyPeergroup()
    {
        return $this->myPeergroup;
    }

    /**
     * Sets the myPeergroup
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Porthd\Simpledataedittest\Domain\Model\Peer> $myPeergroup
     * @return void
     */
    public function setMyPeergroup(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $myPeergroup)
    {
        $this->myPeergroup = $myPeergroup;
    }
}
