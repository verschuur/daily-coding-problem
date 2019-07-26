<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P339;

class Solution
{
    public function solve(int $num, array $values)
    {
        // var_dump($values);
        // natsort($values);
        // var_dump($values);
        // die();
        // $values = array_filter($values, function ($val) use ($num) {
        //     return $val < $num;
        // });
        // if (count($values) < 3 || array_sum($values) < $num) {
        //     // The case isn't matched if there less then 3 values
        //     return false;
        // } elseif (array_sum($values) === $num) {
        //     // We're done if the sum of all the values matches the value exactly
        //     return true;
        // } else {
        //     // remove all elements larger the the search value
        // }
        // return false;

        // [20, 303, 3, 4, 25]

        $combinations = $this->permutations([20, 303, 3, 4, 25]);
        foreach ($combinations as $combination) {
            echo implode(',', $permutation) . PHP_EOL;
        }
        die();
        
        for ($i = 0; $i < pow(3, count($values)); $i++) {
            
            $offset = $i;
            if ($i+3 > count($values)) {
                $offset = -$i;
            }
            $res = array_slice($values, $offset, 3);
            var_dump($res);
            $set[] = $res;
        }
        die();
    }
}
