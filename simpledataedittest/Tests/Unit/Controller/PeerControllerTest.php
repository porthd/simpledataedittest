<?php
declare(strict_types=1);
namespace Porthd\Simpledataedittest\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Dr. Dieter Porth <info@mobger.de>
 */
class PeerControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Porthd\Simpledataedittest\Controller\PeerController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Porthd\Simpledataedittest\Controller\PeerController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllPeersFromRepositoryAndAssignsThemToView()
    {

        $allPeers = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $peerRepository = $this->getMockBuilder(\Porthd\Simpledataedittest\Domain\Repository\PeerRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $peerRepository->expects(self::once())->method('findAll')->will(self::returnValue($allPeers));
        $this->inject($this->subject, 'peerRepository', $peerRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('peers', $allPeers);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenPeerToView()
    {
        $peer = new \Porthd\Simpledataedittest\Domain\Model\Peer();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('peer', $peer);

        $this->subject->showAction($peer);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenPeerToPeerRepository()
    {
        $peer = new \Porthd\Simpledataedittest\Domain\Model\Peer();

        $peerRepository = $this->getMockBuilder(\Porthd\Simpledataedittest\Domain\Repository\PeerRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $peerRepository->expects(self::once())->method('add')->with($peer);
        $this->inject($this->subject, 'peerRepository', $peerRepository);

        $this->subject->createAction($peer);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenPeerToView()
    {
        $peer = new \Porthd\Simpledataedittest\Domain\Model\Peer();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('peer', $peer);

        $this->subject->editAction($peer);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenPeerInPeerRepository()
    {
        $peer = new \Porthd\Simpledataedittest\Domain\Model\Peer();

        $peerRepository = $this->getMockBuilder(\Porthd\Simpledataedittest\Domain\Repository\PeerRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $peerRepository->expects(self::once())->method('update')->with($peer);
        $this->inject($this->subject, 'peerRepository', $peerRepository);

        $this->subject->updateAction($peer);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenPeerFromPeerRepository()
    {
        $peer = new \Porthd\Simpledataedittest\Domain\Model\Peer();

        $peerRepository = $this->getMockBuilder(\Porthd\Simpledataedittest\Domain\Repository\PeerRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $peerRepository->expects(self::once())->method('remove')->with($peer);
        $this->inject($this->subject, 'peerRepository', $peerRepository);

        $this->subject->deleteAction($peer);
    }
}
