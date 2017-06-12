<?php

function num_parents($dialog) { return 0; }

function main()
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

    $numNodes = num_parents($story);
}
