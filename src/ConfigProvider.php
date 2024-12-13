<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace Sztdx\Framework;

use Hyperf\HttpServer\Contract\RequestInterface as HyRequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface as HyResponseInterface;
use Sztdx\Http\Request;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                HyRequestInterface::class => Request::class,
                HyResponseInterface::class => Request::class
            ],
            'commands' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
        ];
    }
}
