<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P343;

class Leaf
{
    /**
     * This leaf's value
     *
     * @var int
     */
    public $val;

    /**
     * The optional left leaf
     *
     * @var Leaf
     */
    public $left;

    /**
     * The optional right leaf
     *
     * @var Leaf
     */
    public $right;
    
    /**
     * Construct a new leaf
     *
     * @param integer $val
     * @param Leaf|null $left
     * @param Leaf|null $right
     */
    public function __construct(int $val, ?Leaf $left = null, ?Leaf $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }

    /**
     * Return the leaf's value if it is in the given range.
     *
     * Recursively add this leaf's, and it's child leaves value(s) if they are within the range.
     *
     * @param integer $a Range min value
     * @param integer $b Range max value
     * @return integer
     */
    public function process(int $a, int $b): int
    {
        $sum = 0;

        // Add this leaf's value if it is within range
        if ($this->val >= $a && $this->val <= $b) {
            $sum += $this->val;
        }

        // If this leaf has a left child leaf, process it
        if ($this->left) {
            $sum += $this->left->process($a, $b);
        }

        // If this leaf has a right child leaf, process it
        if ($this->right) {
            $sum += $this->right->process($a, $b);
        }
        
        return $sum;
    }
}
