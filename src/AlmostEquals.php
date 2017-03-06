<?php
/**
 * The file for the almost-equals service
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2017 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\AlmostEquals;

/**
 * The almost-equals service
 *
 * @since  0.1.0
 */
class AlmostEquals
{
    /* !Private properties */
    
    /**
     * @var    float  the maximum allowed difference between two floats for them
     *     to still be considered equal (exclusive)
     * @since  0.1.0
     */
    private $epsilon;
    
    
    /* !Magic methods */
    
    /**
     * Called when the service is constructed
     *
     * @param  float  $epsilon  the maximum allowed difference between two floats
     *     for them to still be considered equal (exclusive) (optional; if omitted,
     *     defaults to 0.00001)
     * @since  0.1.0
     */
    public function __construct(float $epsilon = 0.0001) 
    {
        $this->epsilon = $epsilon;
    }
    
    /**
     * Called when the service is constructed
     *
     * @param   float  $a  the first float
     * @param   float  $b  the second float
     * @return  bool 
     * @since   0.1.0
     */
    public function __invoke(float $a, float $b): bool
    {
        return (abs($a - $b) < $this->epsilon);
    }
}
