<?php
   class Books {
      /* Member variables */
      var $price;
      var $title;
      
      /* Member functions */
      function setPrice($par){
         $this->price = $par;
      }
      
      function getPrice(){
         echo $this->price ."<br/>";
      }
      
      function setTitle($par){
         $this->title = $par;
      }
      
      function getTitle(){
         echo $this->title ." <br/>";
      }
   }

$physics = new Books;
$maths = new Books;
$chemistry = new Books;

$physics->setPrice( 10 );
$chemistry->setPrice( 15 );
$maths->setPrice( 7 );


class Action extends Books {
   var $publisher;
   
   function setPublisher($par){
      $this->publisher = $par;
   }
   
   function getPublisher(){
      echo $this->publisher. "<br />";
   }
}

class Name {
   var $_firstName;
   var $_lastName;
   
   function Name($first_name, $last_name) {
      $this->_firstName = $first_name;
      $this->_lastName = $last_name;
   }
   
   function toString() {
      return($this->_lastName .", " .$this->_firstName);
   }
}
class NameSub1 extends Name {
   var $_middleInitial;
   
   function NameSub1($first_name, $middle_initial, $last_name) {
      Name::Name($first_name, $last_name);
      $this->_middleInitial = $middle_initial;
   }
   
   function toString() {
      return(Name::toString() . " " . $this->_middleInitial);
   }
}

?>