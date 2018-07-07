<?php
/**
 * Redis cache driver
 * @package lib-cache-redis
 * @version 0.0.1
 */

namespace LibCacheRedis\Driver;

use LibRedis\Library\Redis as DRedis;

class Redis implements \LibCache\Iface\Driver
{
    private $rconn = 'cache';

    public function add(string $name, $value, int $expires): void{
        DRedis::setEx($this->rconn, $name, $expires, $value);
    }
    
    public function exists(string $name): bool{
        return !!DRedis::exists($this->rconn, $name);
    }

    public function get(string $name){
        return DRedis::get($this->rconn, $name);
    }
    
    public function list(): array{
        return DRedis::keys($this->rconn, '*');
    }
    
    public function remove(string $name): void{
        DRedis::del($this->rconn, $name);
    }

    public function truncate(): void{
        DRedis::flushDb($this->rconn);
    }
}