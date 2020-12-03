<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TourPriceTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TourPriceTable Test Case
 */
class TourPriceTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TourPriceTable
     */
    protected $TourPrice;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.TourPrice',
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
        $config = $this->getTableLocator()->exists('TourPrice') ? [] : ['className' => TourPriceTable::class];
        $this->TourPrice = $this->getTableLocator()->get('TourPrice', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->TourPrice);

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
