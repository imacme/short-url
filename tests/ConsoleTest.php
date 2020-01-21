<?php
/**
 * @todo 未实现
 */
namespace doacme\shorturl\tests;

use doacme\shorturl\Console;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * Class ConsoleTest
 * @package doacme\shorturl\tests
 */
class ConsoleTest extends TestCase
{
    /**
     * @des 描述
     */
    public function testConsoleCreate()
    {
        $token = 'c859e4374777f417cd484252e72559b4';
        $url = 'http://www.baidu.com';
        $console = new Console($token);
        try {
            $this->assertIsString($console->create($url));
        } catch (Exception $e) {
            $this->assertTrue(false);
        }
    }
}
