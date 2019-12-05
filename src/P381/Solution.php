<?php
declare(strict_types=1);

namespace Verschuur\DailyCodingProblem\P381;

class Solution
{
    /**
     * Assuming the string isn't multibyte
     * @todo handle a string with one or two significant input octets.
     * See the 'Ma' on the wikipedia page from the problem description.
     */
    public function solve($input): string
    {
        // There is probably an easier way to do this. A charmap and range() or something?
        $base64map = [
            '000000' =>  'A', '010000' => 'Q', '100000' => 'g', '110000' => 'w',
            '000001' =>  'B', '010001' => 'R', '100001' => 'h', '110001' => 'x',
            '000010' =>  'C', '010010' => 'S', '100010' => 'i', '110010' => 'y',
            '000011' =>  'D', '010011' => 'T', '100011' => 'j', '110011' => 'z',
            '000100' =>  'E', '010100' => 'U', '100100' => 'k', '110100' => '0',
            '000101' =>  'F', '010101' => 'V', '100101' => 'l', '110101' => '1',
            '000110' =>  'G', '010110' => 'W', '100110' => 'm', '110110' => '2',
            '000111' =>  'H', '010111' => 'X', '100111' => 'n', '110111' => '3',
            '001000' =>  'I', '011000' => 'Y', '101000' => 'o', '111000' => '4',
            '001001' =>  'J', '011001' => 'Z', '101001' => 'p', '111001' => '5',
            '001010' =>  'K', '011010' => 'a', '101010' => 'q', '111010' => '6',
            '001011' =>  'L', '011011' => 'b', '101011' => 'r', '111011' => '7',
            '001100' =>  'M', '011100' => 'c', '101100' => 's', '111100' => '8',
            '001101' =>  'N', '011101' => 'd', '101101' => 't', '111101' => '9',
            '001110' =>  'O', '011110' => 'e', '101110' => 'u', '111110' => '+',
            '001111' =>  'P', '011111' => 'f', '101111' => 'v', '111111' => '/',
        ];

        // Split the input into an array of chars
        $pieces = str_split($input);

        // Walk through the char array, getting the 8-bit binary value
        $bin = array_map(function ($piece) {
            $bin = decbin(ord($piece));
            $bin = str_pad($bin, 8, "0", STR_PAD_LEFT);
            return $bin;
        }, $pieces);

        // Implode the binary string
        $bin8String = implode($bin);

        // split the binary string into 6-bit
        $bin6Spieces = str_split($bin8String, 6);

        // Return the base-6 binary value for each bin-6 piece
        $base64pieces = array_map(function ($val) use ($base64map) {
            return $base64map[$val];
        }, $bin6Spieces);
        
        return implode($base64pieces);
    }
}
