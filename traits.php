<?php 
    trait Tmessage1{
        public function msg1(){
            echo "Hello from message 1.<br>";
        }
    }
    trait Tmessage2{
        public function msg2(){
            echo "Hello from message 2.<br>";
        }
    }

    class Welcome{
        use Tmessage1;
    }
    class Welcome2{
        use Tmessage1;
        use Tmessage2;
    }
    $well = new Welcome();

    echo $well->msg1();

    $well2 = new Welcome2();

    echo $well2->msg1();
    echo $well2->msg2();
?>