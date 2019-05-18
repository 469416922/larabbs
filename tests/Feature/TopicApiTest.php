<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TopicApiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteTopic()
    {
        //具体逻辑未实现
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
