<?php

namespace Tests;
use App\Http\Controllers\TagParser;
use PHPUnit\Framework\TestCase;

class TagParserTest extends TestCase
{
    protected TagParser $parser;

    // Below setup is used for instantiation of object to a class.
    // object can now directly be used in below testcases,
    protected function setUP(): void
    {
        $this->parser = new TagParser();
    }

    public function test_it_parses_a_single_tag()
    {

        $result =  $this->parser->parse('personal');
        $expected = ['personal'];


        $this->assertSame($expected, $result);

    }
    public function test_it_parses_a_comma_seperated_list_of_tag()
    {


        $result  =  $this->parser->parse('personal, money, family');
        $expected = ['personal', 'money', 'family'];

        $this->assertSame($expected, $result);

    }

    public function test_commas_are_optional(){


        $result = $this->parser->parse('personal, money, family');
        $expected = ['personal', 'money', 'family'];

        $this->assertSame($expected, $result);
    }

    public function test_it_parses_a_pipe_seperated_list_of_tags(){


        $result = $this->parser->parse('personal | money | family');
        $expected = ['personal', 'money', 'family'];

        $this->assertSame($expected, $result);
    }

    public function test_spaces_are_optional(){


        $result = $this->parser->parse('personal,money,family');
        $expected = ['personal', 'money', 'family'];

        $this->assertSame($expected, $result);
        $result = $this->parser->parse('personal|money|family');
        $expected = ['personal', 'money', 'family'];
        $this->assertSame($expected, $result);
    }

    // Data providers usage for same sort of

    /**
     * @dataProvider tagsProvider
     */
    public function test_it_parses_tage($input, $expected)
    {
        $parser = new TagParser();
        $result = $parser->parse($input);
        $this->assertSame($expected,  $result);
    }

    public function tagsProvider()
    {
        return   [
            ["personal", ["personal"]],
            ["personal, money, family",["personal", "money", "family"]],
            ["personal, money, family",["personal", "money", "family"]],
            ["personal | money | family",["personal", "money", "family"]],
            ["personal|money|family",["personal", "money", "family"]],
            ["personal!money!family",["personal", "money", "family"]],
        ];
    }
}
