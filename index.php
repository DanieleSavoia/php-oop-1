<?php
class Movie
{
    public $titolo;
    public $anno;
    public static $country = "Italy";
    public function __construct($titolo, $anno)
    {
        $this->titolo = $titolo;
        $this->anno = $anno;
    }
}
echo Movie::$country; 




//
// class User
// {
//    public $nome;
//    public $eta;
//    function __construct($_eta)
 //   {
 //       $this->eta = $_eta;
 //   }
//}
// $filippo = new User(40);
// echo $filippo->eta; // 40
