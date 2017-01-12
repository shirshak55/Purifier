<?php

namespace LukeTowers\Tests\Purifier\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use LukeTowers\Purifier\Facades\Purifier;
use LukeTowers\Tests\Purifier\AbstractTestCase;

class PurifierTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'purifier';
    }
    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return Purifier::class;
    }
    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return \LukeTowers\Purifier\Purifier::class;
    }
}