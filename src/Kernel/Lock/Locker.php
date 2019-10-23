<?php

namespace EasyWeChat\Kernel\Lock;

/**
 * Class Locker
 * @package EasyWeChat\Kernel
 * @author  8090Lambert
 */
class Locker
{

    protected $driver;

    /**
     * LockFlag.
     * @var int
     */
    protected $flag;

    /**
     * Already locked.
     */
    const LOCKED = 1;

    /**
     * Not locked.
     */
    const UNLOCKED = 0;

    /**
     * Locker constructor.
     * @param $driver
     */
    public function __construct($driver)
    {
    }

    /**
     * Try to lock resource.
     * @param string $key
     * @param string $value
     * @param int $ttl  lock millisecond
     *
     * @return bool
     */
    public function attemptLock(string $key, string $value, int $ttl) :bool
    {
        // Has locked
        if ($this->flag & self::LOCKED == self::LOCKED) {
            return true;
        }


    }
}
