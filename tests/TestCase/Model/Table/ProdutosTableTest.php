<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProdutosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProdutosTable Test Case
 */
class ProdutosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProdutosTable
     */
    protected $Produtos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Produtos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Produtos') ? [] : ['className' => ProdutosTable::class];
        $this->Produtos = TableRegistry::getTableLocator()->get('Produtos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Produtos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
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
