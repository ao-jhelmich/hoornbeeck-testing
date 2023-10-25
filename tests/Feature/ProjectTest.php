<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Project;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_view_projects_index()
    {
        // Arrange
        $project = Project::factory()->create();

        $this->signIn();

        // Act
        $response = $this->get('projects');

        // Assert
        $response->assertStatus(200)->assertSee($project->name);
    }

    /** @test */
    public function can_edit_project()
    {
        $project = Project::factory()->create();
        $data = [
            'name' => 'Test name'
        ];

        $this->signIn();

        $this->get('projects/'.$project->id.'/edit')
            ->assertOk();

        $this->patch('projects/'.$project->id, $data);

        $this->assertDatabaseHas('projects', [
            'name' => 'Test name'
        ]);
    }
}
