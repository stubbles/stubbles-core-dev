<?php
/**
 * This file is part of stubbles.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package  stubbles
 */
namespace stubbles\test\ioc;
/**
 * Helper class to test implicit binding related to bug #102.
 *
 * @link  http://stubbles.net/ticket/102
 */
class ImplicitDependencyBug102
{
    /**
     * instance from setter injection
     *
     * @type  Goodyear
     */
    protected $goodyearBySetter;

    /**
     * setter
     *
     * @param  Goodyear  $goodyear
     * @Inject
     */
    public function setGoodyear(Goodyear $goodyear)
    {
        $this->goodyearBySetter = $goodyear;
    }

    /**
     * returns the instance from setter injection
     *
     * @return  Goodyear
     */
    public function getGoodyearBySetter()
    {
        return $this->goodyearBySetter;
    }
}
