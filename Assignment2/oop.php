<?php

class Member
{
    public $borrowbook;
    public $returnbook;

    public function __construct(private $name)
    {
    }

    function borrowbooks($val)
    {
        $this->borrowbook = $val;
        return $this->borrowbook;
    }
    function returnbooks($val)
    {
        $this->returnbook = $val;
        return $this->returnbook;
    }
}

class Books extends Member
{
    public function __construct(private $title, private $aviablecopies)
    {
    }
    function avaiblebooks()
    {

        $res = $this->aviablecopies - $this->borrowbook + $this->returnbook;
        return $res;
    }
    function out($res)
    {
        echo "Aviable copies of '{$this->title}':", $res, "\n";
    }
}




$book1 = new Books("The Great Gatsby", 5);
$member1 = new Member("John Doe");

$book1->borrowbooks(1);
// $book1->returnbooks(3);

$book1->out($book1->avaiblebooks());

$book2 = new Books("To Kill a Mockingbird", $book1->avaiblebooks());
$member2 = new Member("Jane Smith");
$book2->borrowbooks(2);
// $book2->returnbooks(3);
$book2->out($book2->avaiblebooks());
