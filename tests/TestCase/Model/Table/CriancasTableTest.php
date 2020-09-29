<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CriancasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CriancasTable Test Case
 */
class CriancasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CriancasTable
     */
    protected $Criancas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Criancas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Criancas') ? [] : ['className' => CriancasTable::class];
        $this->Criancas = $this->getTableLocator()->get('Criancas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Criancas);

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
