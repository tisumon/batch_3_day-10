<?php


namespace App\classes;


class Example
{
    public $name;
    public $email;
    public $mobile;
    public $firstName;
    public $lastName;
    public $x;
    public $y;
    public $z;
    public $data= [];

    public function index()
    {
        /*
      $this->firstName  = 'Rahim';
      $this->lastName  = 'Khan';
      echo "Full name is ".$this->firstName." ".$this->lastName;
        */

//
//        $this->x = 10;
//        $this->y = 20;
//        $this->z = 30;
//
//
//        echo ($this->x > $this->y) || ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x > $this->y) || ($this->y < $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) || ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) || ($this->y < $this->z);
//        echo '<br/>....<br/>';

//        $this->x = 10;
//        $this->y = 20;
//
//        echo $this->x += $this->y;
//        echo '<br>';
//
//        echo $this->x -= $this->y;
//        echo '<br>';
//
//        echo $this->x += $this->y;
//        echo '<br>';
//
//        echo $this->x *= $this->y;
//        echo '<br>';
//
//        echo $this->x /= $this->y;
//        echo '<br>';
//
//
//        echo $this->x %= $this->y;
//        echo '<br>';
//
//
//        echo $this->x .= $this->y;
//        echo '<br>';

//        echo $this->x++;
//        echo'<br>';
//        echo $this->x;

//        echo $this->x + $this->y;
//        echo '<br>';
//        echo $this->x - $this->y;
//        echo '<br>';
//        echo $this->x * $this->y;
//        echo '<br>';
//        echo $this->x / $this->y;
//        echo '<br>';
//        echo $this->x % $this->y;

        //===statement===

//        $this->x =100;
//        if($this->x > 20)
//        {
//            echo $this->x;
//        }
//        else
//        {
//            echo 'Hello World';
//        }

//        $this->x =100;
//        if($this->x > 200)
//        {
//            echo $this->x;
//        }
//        elseif($this->x <200)
//        {
//            echo $this->x;
//        }
//        else
//        {
//            echo 'Good nature';
//        }
//
//        $this->x= 100;
//        switch ($this->x)
//        {
//            case 10:
//                echo 'Hello World';
//                break;
//            case 20:
//                echo 'Hello Bangladesh';
//                break;
//            case 30:
//                echo 'Hello Dhaka';
//                break;
//            default:
//                echo 'Hello Bitm';
//
//        }
        //======repeated Statement====

        //$this->x = 100;
//        for($this->y = 99; $this->y >= 76; $this->y--)
//        {
//            echo $this->y.' ';
//        }


//        $this->x=101;
//        while($this->x < 110)
//        {
//            echo 'Hello World<br>';
//            $this->x++;
//        }

//        $this->x=100;
//
//        do{
//            echo 'hello world <br/>';
//            $this->x++;
//        }while($this->x <= 110);

        // foreach //

        $this->data = [10,20,30,'BITM',100.200,true];
//        echo $this->data[5];
        foreach ($this->data as $item)

        {
            echo $item;
        }
    }


}