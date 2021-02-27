<?php declare(strict_types=1);

require __DIR__ . '/../App/Http/Route/Route.php';

use App\Http\Route\Route;
use PHPUnit\Framework\TestCase;

class RouteTest extends TestCase
{

    public function testsplitUri()
    {
        $expected = [
            'controller' => 'pages',
            'method' => 'index',
            'params'=> [],
        ];

        $route = Route::splitUri('/');

        //$this->assertEqualsCanonicalizing($expected, $route);
        $this->assertEquals($expected, $route);
    }


}
