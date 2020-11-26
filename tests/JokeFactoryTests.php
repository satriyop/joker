<?php

namespace Satriyop\Joker\Tests;

use PHPUnit\Framework\TestCase;
use Satriyop\Joker\JokeFactory;

class JokeFactoryTests extends TestCase
{
    /** @test */
    public function test_create_random_jokes()
    {
        $jokes = new JokeFactory([
            'This is a joke',
        ]);
        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function it_return_predefined_joke()
    {
        $jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();

        $predefinedJokes = [
            'Web Developer keep everything important in their <head>',
            'Why MongoDB developer do not have a date ? Because they dont understand relationship',
        ];

        $this->assertContains($joke, $predefinedJokes);
    }
}
