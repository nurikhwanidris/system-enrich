<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ToursTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ToursTable Test Case
 */
class ToursTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ToursTable
     */
    protected $Tours;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Tours',
        'app.ToursFlight',
        'app.ToursPrice',
        'app.ToursSettings',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tours') ? [] : ['className' => ToursTable::class];
        $this->Tours = $this->getTableLocator()->get('Tours', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Tours);

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
}
