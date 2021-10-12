<?php

namespace Tests\Feature;

use App\Models\Sample;
use Tests\TestCase;

class SampleTest extends TestCase
{
    public function test_sample_index()
    {
        Sample::factory()->create();

        $this->get('/api/sample')
            ->assertStatus(200)
            ->assertJsonStructure([
                'data',
            ]);
    }

    public function test_sample_show()
    {
        Sample::factory()->create();

        $sample = Sample::first();

        $this->get('/api/sample/'.$sample->id)
            ->assertStatus(200)
            ->assertJsonStructure([
                'data',
            ]);
    }

    public function test_sample_show_not_found()
    {
        $this->get('/api/sample/-1')
            ->assertStatus(404);
    }

    public function test_sample_update()
    {
        Sample::factory()->create();

        $sample = Sample::first();

        $this->post('/api/sample/'.$sample->uuid, [
                'name' => 'updated name',
                'description' => 'updated description',
                'code' => 'updated code',
                'status' => 'active',
            ])
            ->assertStatus(200);

        $this->assertDatabaseHas('samples', [
            'name' => 'updated name',
        ]);
    }
}
