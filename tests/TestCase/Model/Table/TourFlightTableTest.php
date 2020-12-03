<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TourFlightTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TourFlightTable Test Case
 */
class TourFlightTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TourFlightTable
     */
    protected $TourFlight;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.TourFlight',
        'app.Tour',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TourFlight') ? [] : ['className' => TourFlightTable::class];
        $this->TourFlight = $this->getTableLocator()->get('TourFlight', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->TourFlight);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
