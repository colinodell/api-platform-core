<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Tests\Fixtures;

use Symfony\Component\Validator\Constraints as Assert;

class DummySequentiallyValidatedEntity
{
    /**
     * @var string
     *
     * @Assert\Sequentially({
     *
     *     @Assert\Length(min=1, max=32),
     *
     *     @Assert\Regex(pattern="/^[a-z]$/")
     * })
     */
    public $dummy;
}
