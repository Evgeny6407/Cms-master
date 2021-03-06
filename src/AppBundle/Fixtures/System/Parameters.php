<?php

namespace AppBundle\Fixtures\System;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Ds\Component\Config\Fixture\ParameterFixture;

/**
 * Class Parameters
 */
class Parameters extends ParameterFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 0;
    }

    /**
     * {@inheritdoc}
     */
    protected function getResource()
    {
        return '/srv/api-platform/src/AppBundle/Resources/fixtures/{env}/system/parameters.yml';
    }
}
