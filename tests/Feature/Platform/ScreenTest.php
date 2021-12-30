<?php

declare(strict_types=1);

namespace Orchid\Tests\Feature\Platform;

use Orchid\Tests\TestFeatureCase;

class ScreenTest extends TestFeatureCase
{
    public function testRedirectForManyParams(): void
    {
        $this
            ->actingAs($this->createAdminUser())
            ->get(route('platform.main', [
                'method' => 'any',
            ]))
            ->assertSuccessful();
    }
}
