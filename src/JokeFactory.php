<?php

namespace Satriyop\Joker;

class JokeFactory
{
    protected $jokes = [
        'Web Developer keep everything important in their <head>',
        'Why MongoDB developer do not have a date ? Because they dont understand relationship',
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
