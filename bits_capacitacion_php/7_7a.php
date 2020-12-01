<?php

    include('7_6a.php');

    class Cat {
        use Insurance;
    }

    $cat1 = new Cat();
    $cat1->setAge(2);
    $cat1->setName("Nikki");
    $cat1->calculateMontlyFee(2, "Nikki");

    function catEat($eatCat){
        if ($eatCat > 10) {
            throw new Exception (' Ya esta bien alimentado <br>');
        }
    }

    for ($i = 0; $i < 12; $i++) {
        try {
            echo $cat1->getName() . "  puede seguir comiendo <br>" . catEat($i);
        } catch (Exception $e) {
            echo 'Mensaje del error: '. $cat1->getName() . $e->getMessage() . "<br>";
        }
    }
?>