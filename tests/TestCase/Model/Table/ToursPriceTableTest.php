<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ToursPriceTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ToursPriceTable Test Case
 */
class ToursPriceTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ToursPriceTable
     */
    protected $ToursPrice;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ToursPrice',
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
        $config = $this->getTableLocator()->exists('ToursPrice') ? [] : ['className' => ToursPriceTable::class];
        $this->ToursPrice = $this->getTableLocator()->get('ToursPrice', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ToursPrice);

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
