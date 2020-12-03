<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ToursFlightTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ToursFlightTable Test Case
 */
class ToursFlightTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ToursFlightTable
     */
    protected $ToursFlight;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ToursFlight',
        'app.Tours',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ToursFlight') ? [] : ['className' => ToursFlightTable::class];
        $this->ToursFlight = $this->getTableLocator()->get('ToursFlight', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ToursFlight);

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
