<?php 


// interface properties =>

// interface printer{
//     function print();
   

// }

// class Printer1 implements printer{
//     public function print(){

//     }

// }

// class Printer2 implements printer{
//     public function print(){

//     }

// }

// class Printer3 implements printer{
//     public function prit(){

//     }

// }




// interface car{
//     public function name();
//     public function brand();
//     public function color();
//     public function milage($distance,$fuel);

// }

// abstract class km implements car{
//     public function milage($distance,$fuel){
//         echo $distance/$fuel ," km/l";
//     }
// }

// class motorcycle extends km{
// public function name(){
//     echo "Bazaz230ps";
// }
// public function brand(){
//     echo "Bazaz";
// }
// public function color(){
//     echo "Black";
// }



// }

// class cycle extends km{
//     public function name(){
//         echo "phonics3421";
//     }
//     public function brand(){
//         echo "phonics";
//     }
//     public function color(){
//         echo "Red";
//     }
//     }

// $c1=new cycle();
// $c1->milage(120,3);



// getter and setter properties

// class stud{
   
   
//     // public function setname($name){
//     //      $this->name=$name;
//     // }
   
//      function __constructor( $name,$roll){}
//     public function getname(){
//         return $this->name;
//     }
// //     public function setroll($roll){
// //         $this->roll=$roll;
// //    }
//    public function getroll(){
//     return  $this->roll;
// }



//    function intro(){
//     echo $this->name , $this->roll;
//    }

// }

// $c1=new stud('hasnat',2108022);
// // $c1->setname("Hasnat");
// // $c1->setroll("2108022");
// $c1->intro();
// // $c1->getroll();




// class student{
//     function __construct(private $name,private $age){
//         $this->name=$name;
//         $this->age=$age;
//     }

//     function getname(){
//         return $this->name;
//     }
//     function getage(){
//         return $this->age;
//     }

//     function intro(){
//         echo $this->name ,$this->age;
//     }


// }

// $c1=new student("hasnat",22);

// $c1->intro();




//magic method

// class student{
//     function __construct(private $name,private $age){
//         $this->name=$name;
//         $this->age=$age;
//     }


//     //magic method

//     function __get($key){
//         return $this->$key;
//     }


// }

// $c1=new student("hasnat",22);

// echo $c1->name;
// echo $c1->age;


// function __tostring(){} => convert object to string

// unserialize(serialize($c1)); => object to string convert



?>