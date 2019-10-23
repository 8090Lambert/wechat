<?php

namespace EasyWeChat\Kernel\Providers;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Symfony\Component\Lock\Factory;

/**
 * Class LockerProvider
 * @package EasyWeChat\Kernel\Providers
 * @author 8090Lambert
 */
class LockerProvider implements ServiceProviderInterface
{
    /**
     * @param Container $pimple
     */
    public function register(Container $pimple)
    {
        $pimple['locker'] = function ($app) {
            return new Factory();
        };
    }

    protected function alignCacheDriver()
    {

    }
}
