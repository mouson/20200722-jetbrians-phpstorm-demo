<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class Demo03RefactorExampleTest extends TestCase
{
    protected function tearDown(): void
    {
        $_POST = [];
    }

    public function testDemo01_RepairStr()
    {
        /**
         * TODO: 1. 今年有三倍要改成重複三次
         */
        $response = $this->get('/demo03-ex01');

        $response->assertStatus(200);
        $response->assertSee('StrStrStr');
    }

    public function testDemo02_HiName()
    {
        /**
         * TODO: 2-1. base variable
         * Using Register Globals
         * This feature has been DEPRECATED as of PHP 5.3.0 and REMOVED as of PHP 5.4.0.
         * @ref: https://www.php.net/manual/en/security.globals.php
         */
        $post_str = 'Mark';
        $_POST['name'] = $post_str;
        $response = $this->get('/demo03-g01');

        $response->assertStatus(200);
        $response->assertSeeText('Hi, ' . $post_str);
    }

    public function testDemo02_NoOneExist()
    {
        /**
         * TODO: 2-2. global variable none exist
         * @ref: https://www.php.net/manual/en/types.comparisons.php
         */
        $response = $this->get('/demo03-g02');

        $response->assertStatus(200);
        $response->assertSeeText('No One Exist');

        $_POST['name'] = 'Mouson';
        $response = $this->get('/demo03-g02');

        $response->assertStatus(200);
        $response->assertSeeText('Hi, Mouson');
    }

    public function testDemo02_HiEveryOne()
    {
        /**
         * TODO: 2-3. Hi Every One
         */
        $_POST['names'] = ['Mouson', 'Duncan'];
        $response = $this->get('/demo03-g03');

        $response->assertStatus(200);
        $response->assertSeeText('Hi, Mouson, Duncan');
    }


}
