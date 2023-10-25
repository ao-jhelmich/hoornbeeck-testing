<?php

namespace Tests\Unit;

use App\Models\Project;
use PHPUnit\Framework\TestCase;

class ProjectTest extends TestCase
{
    /** @test */
    public function can_calculate_the_length_of_the_description()
    {
        $project = new Project();
        $project->description = "123";

        $this->assertEquals(3, $project->descriptionLength());
    }
}
