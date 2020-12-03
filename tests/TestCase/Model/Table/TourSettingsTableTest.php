<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TourSettingsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TourSettingsTable Test Case
 */
class TourSettingsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TourSettingsTable
     */
    protected $TourSettings;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.TourSettings',
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
        $config = $this->getTableLocator()->exists('TourSettings') ? [] : ['className' => TourSettingsTable::class];
        $this->TourSettings = $this->getTableLocator()->get('TourSettings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->TourSettings);

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
