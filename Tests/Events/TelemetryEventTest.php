<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Liip\ImagineBundle\Tests\Events;

use Liip\ImagineBundle\Events\CacheResolveEvent;
use Liip\ImagineBundle\Events\TelemetryEvent;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Liip\ImagineBundle\Events\TelemetryEvent
 */
class TelemetryEventTest extends TestCase
{
    public function testShouldAllowStringNameInConstruct(): void
    {
        $event = new TelemetryEvent('default_path', null);

        $this->assertSame('default_path', $event->name);
    }

    public function testShouldAllowArrayOptionsInConstruct(): void
    {
        $event = new TelemetryEvent('default_path', ['a' => 'foo']);

        $this->assertSame(['a' => 'foo'], $event->options);
    }

    /**
     * TODO Work out if it's ever null, or an empty array is always passed
     */
    public function testShouldAllowNullOptionsInConstruct(): void
    {
        $event = new TelemetryEvent('default_path', null);

        $this->assertSame(null, $event->options);
    }
}
