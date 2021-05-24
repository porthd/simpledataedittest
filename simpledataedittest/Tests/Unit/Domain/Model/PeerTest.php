<?php
declare(strict_types=1);
namespace Porthd\Simpledataedittest\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dr. Dieter Porth <info@mobger.de>
 */
class PeerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    const CONCEIVED_AT_T_3_CON_10 = 'Conceived at T3CON10';
    /**
     * @var \Porthd\Simpledataedittest\Domain\Model\Peer
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Porthd\Simpledataedittest\Domain\Model\Peer();
    }

    protected function tearDown()
    {
        parent::tearDown();
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
}
