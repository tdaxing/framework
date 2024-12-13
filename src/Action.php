<?php

declare(strict_types=1);

namespace Sztdx\Framework;

use Hyperf\Di\Annotation\Inject;
use Psr\Container\ContainerInterface;
use Sztdx\Http\Contract\RequestInterface;
use Sztdx\Http\Contract\ResponseInterface;

class Action
{
    #[Inject]
    protected ContainerInterface $container;

    #[Inject]
    protected RequestInterface $request;

    #[Inject]
    protected ResponseInterface $response;
}
