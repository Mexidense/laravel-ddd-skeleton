<?php

declare(strict_types=1);

namespace Tests\Common\Feature;

use Tests\TestCase;

final class WelcomeTest extends TestCase
{
    public function testShouldWorkWelcomePage(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
