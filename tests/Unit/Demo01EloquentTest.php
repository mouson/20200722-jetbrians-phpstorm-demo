<?php

namespace Tests\Unit;

use Illuminate\Database\Connection;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Grammars\MySqlGrammar;
use Mockery as m;
use PHPUnit\Framework\TestCase;

class Demo01EloquentTest extends TestCase
{
    protected function tearDown(): void
    {
        m::close();
    }

    /**
     * 了解 Blueprint 在做什麼
     * @ref https://github.com/laravel/framework/blob/7.x/tests/Database/DatabaseMySqlSchemaGrammarTest.php#L20-L48
     */
    public function testBasicCreateTable()
    {
        $blueprint = new Blueprint('users');
        $blueprint->increments('id');
        $blueprint->string('email');

        $conn = $this->getConnection();
        $conn->shouldReceive('getConfig')->andReturn(null);

        $statements = $blueprint->toSql($conn, $this->getGrammar());

        $this->assertCount(1, $statements);
        $this->assertSame('alter table `users` add `id` int unsigned not null auto_increment primary key, add `email` varchar(255) not null', $statements[0]);
    }
    protected function getConnection()
    {
        return m::mock(Connection::class);
    }

    public function getGrammar()
    {
        return new MySqlGrammar;
    }
}
