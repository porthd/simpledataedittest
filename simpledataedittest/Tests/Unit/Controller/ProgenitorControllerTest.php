<?php
declare(strict_types=1);
namespace Porthd\Simpledataedittest\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Dr. Dieter Porth <info@mobger.de>
 */
class ProgenitorControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Porthd\Simpledataedittest\Controller\ProgenitorController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Porthd\Simpledataedittest\Controller\ProgenitorController::class)
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
    public function listActionFetchesAllProgenitorsFromRepositoryAndAssignsThemToView()
    {

        $allProgenitors = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $progenitorRepository = $this->getMockBuilder(\Porthd\Simpledataedittest\Domain\Repository\ProgenitorRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $progenitorRepository->expects(self::once())->method('findAll')->will(self::returnValue($allProgenitors));
        $this->inject($this->subject, 'progenitorRepository', $progenitorRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('progenitors', $allProgenitors);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenProgenitorToView()
    {
        $progenitor = new \Porthd\Simpledataedittest\Domain\Model\Progenitor();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('progenitor', $progenitor);

        $this->subject->showAction($progenitor);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenProgenitorToProgenitorRepository()
    {
        $progenitor = new \Porthd\Simpledataedittest\Domain\Model\Progenitor();

        $progenitorRepository = $this->getMockBuilder(\Porthd\Simpledataedittest\Domain\Repository\ProgenitorRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $progenitorRepository->expects(self::once())->method('add')->with($progenitor);
        $this->inject($this->subject, 'progenitorRepository', $progenitorRepository);

        $this->subject->createAction($progenitor);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenProgenitorToView()
    {
        $progenitor = new \Porthd\Simpledataedittest\Domain\Model\Progenitor();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('progenitor', $progenitor);

        $this->subject->editAction($progenitor);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenProgenitorInProgenitorRepository()
    {
        $progenitor = new \Porthd\Simpledataedittest\Domain\Model\Progenitor();

        $progenitorRepository = $this->getMockBuilder(\Porthd\Simpledataedittest\Domain\Repository\ProgenitorRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $progenitorRepository->expects(self::once())->method('update')->with($progenitor);
        $this->inject($this->subject, 'progenitorRepository', $progenitorRepository);

        $this->subject->updateAction($progenitor);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenProgenitorFromProgenitorRepository()
    {
        $progenitor = new \Porthd\Simpledataedittest\Domain\Model\Progenitor();

        $progenitorRepository = $this->getMockBuilder(\Porthd\Simpledataedittest\Domain\Repository\ProgenitorRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $progenitorRepository->expects(self::once())->method('remove')->with($progenitor);
        $this->inject($this->subject, 'progenitorRepository', $progenitorRepository);

        $this->subject->deleteAction($progenitor);
    }
}
