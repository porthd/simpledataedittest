<?php
declare(strict_types=1);
namespace Porthd\Simpledataedittest\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Dieter Porth <info@mobger.de>
 */
class MainTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    const CONCEIVED_AT_T_3_CON_10 = 'Conceived at T3CON10';
    /**
     * @var \Porthd\Simpledataedittest\Domain\Model\Main
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Porthd\Simpledataedittest\Domain\Model\Main();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription(self::CONCEIVED_AT_T_3_CON_10);

        self::assertAttributeEquals(
            self::CONCEIVED_AT_T_3_CON_10,
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMyRteReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMyRte()
        );
    }

    /**
     * @test
     */
    public function setMyRteForStringSetsMyRte()
    {
        $this->subject->setMyRte(self::CONCEIVED_AT_T_3_CON_10);

        self::assertAttributeEquals(
            self::CONCEIVED_AT_T_3_CON_10,
            'myRte',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle(self::CONCEIVED_AT_T_3_CON_10);

        self::assertAttributeEquals(
            self::CONCEIVED_AT_T_3_CON_10,
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMyPercentReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMyPercent()
        );
    }

    /**
     * @test
     */
    public function setMyPercentForStringSetsMyPercent()
    {
        $this->subject->setMyPercent(self::CONCEIVED_AT_T_3_CON_10);

        self::assertAttributeEquals(
            self::CONCEIVED_AT_T_3_CON_10,
            'myPercent',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMyMoneyReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMyMoney()
        );
    }

    /**
     * @test
     */
    public function setMyMoneyForStringSetsMyMoney()
    {
        $this->subject->setMyMoney(self::CONCEIVED_AT_T_3_CON_10);

        self::assertAttributeEquals(
            self::CONCEIVED_AT_T_3_CON_10,
            'myMoney',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMyFloatReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getMyFloat()
        );
    }

    /**
     * @test
     */
    public function setMyFloatForFloatSetsMyFloat()
    {
        $this->subject->setMyFloat(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'myFloat',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getMyIntegerReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMyInteger()
        );
    }

    /**
     * @test
     */
    public function setMyIntegerForStringSetsMyInteger()
    {
        $this->subject->setMyInteger(self::CONCEIVED_AT_T_3_CON_10);

        self::assertAttributeEquals(
            self::CONCEIVED_AT_T_3_CON_10,
            'myInteger',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMyBooleanReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMyBoolean()
        );
    }

    /**
     * @test
     */
    public function setMyBooleanForStringSetsMyBoolean()
    {
        $this->subject->setMyBoolean(self::CONCEIVED_AT_T_3_CON_10);

        self::assertAttributeEquals(
            self::CONCEIVED_AT_T_3_CON_10,
            'myBoolean',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMyTimeReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getMyTime()
        );
    }

    /**
     * @test
     */
    public function setMyTimeForIntSetsMyTime()
    {
        $this->subject->setMyTime(12);

        self::assertAttributeEquals(
            12,
            'myTime',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMyTimesstampReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getMyTimesstamp()
        );
    }

    /**
     * @test
     */
    public function setMyTimesstampForDateTimeSetsMyTimesstamp()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setMyTimesstamp($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'myTimesstamp',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMyDatetimeReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getMyDatetime()
        );
    }

    /**
     * @test
     */
    public function setMyDatetimeForDateTimeSetsMyDatetime()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setMyDatetime($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'myDatetime',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMyImagesReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getMyImages()
        );
    }

    /**
     * @test
     */
    public function setMyImagesForFileReferenceSetsMyImages()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setMyImages($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'myImages',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMyFilesReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getMyFiles()
        );
    }

    /**
     * @test
     */
    public function setMyFilesForFileReferenceSetsMyFiles()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setMyFiles($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'myFiles',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMyListReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getMyList()
        );
    }

    /**
     * @test
     */
    public function setMyListForIntSetsMyList()
    {
        $this->subject->setMyList(12);

        self::assertAttributeEquals(
            12,
            'myList',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMyChildrenReturnsInitialValueForChild()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getMyChildren()
        );
    }

    /**
     * @test
     */
    public function setMyChildrenForObjectStorageContainingChildrenetsMyChildren()
    {
        $myChild = new \Porthd\Simpledataedittest\Domain\Model\Child();
        $objectStorageHoldingExactlyOneMyChildren = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneMyChildren->attach($myChild);
        $this->subject->setMyChildren($objectStorageHoldingExactlyOneMyChildren);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneMyChildren,
            'myChildren',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addMyChildToObjectStorageHoldingMyChildren()
    {
        $myChild = new \Porthd\Simpledataedittest\Domain\Model\Child();
        $myChildrenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $myChildrenObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($myChild));
        $this->inject($this->subject, 'myChildren', $myChildrenObjectStorageMock);

        $this->subject->addMyChild($myChild);
    }

    /**
     * @test
     */
    public function removeMyChildFromObjectStorageHoldingMyChildren()
    {
        $myChild = new \Porthd\Simpledataedittest\Domain\Model\Child();
        $myChildrenObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $myChildrenObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($myChild));
        $this->inject($this->subject, 'myChildren', $myChildrenObjectStorageMock);

        $this->subject->removeMyChild($myChild);
    }

    /**
     * @test
     */
    public function getMyProgenitorReturnsInitialValueForMyProgenitor()
    {
        self::assertEquals(
            null,
            $this->subject->getMyProgenitor()
        );
    }

    /**
     * @test
     */
    public function setProgenitorForMyProgenitorSetsMyProgenitor()
    {
        $myprogenitorFixture = new \Porthd\Simpledataedittest\Domain\Model\Progenitor();
        $this->subject->setMyprogenitor($myprogenitorFixture);

        self::assertAttributeEquals(
            $myprogenitorFixture,
            'myProgenitor',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMyPeergroupReturnsInitialValueForPeer()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getMyPeergroup()
        );
    }

    /**
     * @test
     */
    public function setMyPeergroupForObjectStorageContainingPeerSetsMyPeergroup()
    {
        $myPeergroup = new \Porthd\Simpledataedittest\Domain\Model\Peer();
        $objectStorageHoldingExactlyOneMyPeergroup = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneMyPeergroup->attach($myPeergroup);
        $this->subject->setMyPeergroup($objectStorageHoldingExactlyOneMyPeergroup);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneMyPeergroup,
            'myPeergroup',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addMyPeergroupToObjectStorageHoldingMyPeergroup()
    {
        $myPeergroup = new \Porthd\Simpledataedittest\Domain\Model\Peer();
        $myPeergroupObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $myPeergroupObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($myPeergroup));
        $this->inject($this->subject, 'myPeergroup', $myPeergroupObjectStorageMock);

        $this->subject->addMyPeergroup($myPeergroup);
    }

    /**
     * @test
     */
    public function removeMyPeergroupFromObjectStorageHoldingMyPeergroup()
    {
        $myPeergroup = new \Porthd\Simpledataedittest\Domain\Model\Peer();
        $myPeergroupObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $myPeergroupObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($myPeergroup));
        $this->inject($this->subject, 'myPeergroup', $myPeergroupObjectStorageMock);

        $this->subject->removeMyPeergroup($myPeergroup);
    }
}
