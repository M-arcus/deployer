<?php

declare(strict_types=1);

/* (c) Anton Medvedev <anton@medv.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Deployer\Component\Pimple\Exception;

use Psr\Container\ContainerExceptionInterface;

/**
 * A closure or invokable object was expected.
 *
 * @author Pascal Luna <skalpa@zetareticuli.org>
 */
class ExpectedInvokableException extends \InvalidArgumentException implements ContainerExceptionInterface
{
}
