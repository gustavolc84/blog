<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArtigosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArtigosTable Test Case
 */
class ArtigosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArtigosTable
     */
    public $Artigos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.artigos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Artigos') ? [] : ['className' => ArtigosTable::class];
        $this->Artigos = TableRegistry::get('Artigos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Artigos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
