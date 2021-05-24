<?php
declare(strict_types=1);
namespace Porthd\Simpledataedittest\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Dr. Dieter Porth <info@mobger.de>
 */
class ChildControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Porthd\Simpledataedittest\Controller\ChildController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Porthd\Simpledataedittest\Controller\ChildController::class)
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
    public function listActionFetchesAllchildrenFromRepositoryAndAssignsThemToView()
    {

        $allchildren = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $childRepository = $this->getMockBuilder(\Porthd\Simpledataedittest\Domain\Repository\ChildRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $childRepository->expects(self::once())->method('findAll')->will(self::returnValue($allchildren));
        $this->inject($this->subject, 'childRepository', $childRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('children', $allchildren);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenChildToView()
    {
        $child = new \Porthd\Simpledataedittest\Domain\Model\Child();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('child', $child);

        $this->subject->showAction($child);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenChildToChildRepository()
    {
        $child = new \Porthd\Simpledataedittest\Domain\Model\Child();

        $childRepository = $this->getMockBuilder(\Porthd\Simpledataedittest\Domain\Repository\ChildRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $childRepository->expects(self::once())->method('add')->with($child);
        $this->inject($this->subject, 'childRepository', $childRepository);

        $this->subject->createAction($child);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenChildToView()
    {
        $child = new \Porthd\Simpledataedittest\Domain\Model\Child();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('child', $child);

        $this->subject->editAction($child);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenChildInChildRepository()
    {
        $child = new \Porthd\Simpledataedittest\Domain\Model\Child();

        $childRepository = $this->getMockBuilder(\Porthd\Simpledataedittest\Domain\Repository\ChildRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $childRepository->expects(self::once())->method('update')->with($child);
        $this->inject($this->subject, 'childRepository', $childRepository);

        $this->subject->updateAction($child);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenChildFromChildRepository()
    {
        $child = new \Porthd\Simpledataedittest\Domain\Model\Child();

        $childRepository = $this->getMockBuilder(\Porthd\Simpledataedittest\Domain\Repository\ChildRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $childRepository->expects(self::once())->method('remove')->with($child);
        $this->inject($this->subject, 'childRepository', $childRepository);

        $this->subject->deleteAction($child);
    }
}
