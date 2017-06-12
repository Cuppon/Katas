<?php

include 'index.php';

class CyaTest extends TestCase
{
    public function test_gets_correct_number_of_parent_nodes()
    {
        $story =
            [
                'You see a dog. Do you:' => [
                    'Touch it?' => [
                        'You got bit'
                    ],
                    'Walk away?' => [
                        'You survived' => [
                            'You win!'
                        ]
                    ]
                ]
            ];

        $this->assertSame(4, num_parents($story));
    }
}