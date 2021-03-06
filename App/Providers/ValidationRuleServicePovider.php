<?php

namespace App\Providers;

use Valitron\Validator;
use App\Rules\ExistsRule;
use League\Container\ServiceProvider\AbstractServiceProvider;
use League\Container\ServiceProvider\BootableServiceProviderInterface;

class ValidationRuleServicePovider extends AbstractServiceProvider implements BootableServiceProviderInterface
{
    public function boot()
    {
        $container = $this->getContainer();
        Validator::addRule('exists', function ($field, $value, array $params, array $fields) use ($container) {
            return (new ExistsRule())->validate($field, $value, $params, $fields);
        }, 'is already in use.');
    }

    public function register()
    {
        //
    }
}