<?php declare(strict_types=1);

namespace Omnifraud;

use Omnifraud\NullDriver\NullService;

class Omnifraud
{
    public const DEFAULT_ALIASES = [
        'Null' => NullService::class,
        'Signifyd' => \Omnifraud\Signifyd\SignifydService::class,
        'Kount' => \Omnifraud\Kount\Omnifraud\Kount::class,
    ];

    /** @var array */
    protected $serviceAliases;

    public function __construct(array $serviceAliases)
    {
        $this->serviceAliases = $serviceAliases;
    }

    public function service(string $alias, array $config = null)
    {
        $class = $alias;
        if (isset($this->serviceAliases[$alias])) {
            $class = $this->serviceAliases[$alias];
        }
        if ($config === null) {
            return new $class;
        }
        return new $class($config);
    }

    public static function create(string $alias, array $config = null)
    {
        $instance = new static(static::DEFAULT_ALIASES);

        return $instance->service($alias, $config);
    }
}
