<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Liip\ImagineBundle\Events;

class TelemetryEvent extends BCEvent
{
    public const ON_FILTER_START = 'filter_start';
    public const ON_FILTER_FINISH = 'filter_finish';
    public const ON_POSTPROCESSOR_START = 'postprocess_start';
    public const ON_POSTPROCESSOR_FINISH = 'postprocess_finish';
    /**
     * @var string
     */
    public $name;
    /**
     * @var array|null
     */
    public $options;

    public function __construct(string $name, ?array $options)
    {
        $this->name = $name;
        $this->options = $options;
    }
}
