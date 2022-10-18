<?php

// class - klase
//paveldejimas(extends) 
// polimorfizmas - interface (implements)
// traits - igalina paveldimuma is keliu trait(klasiu)

//klase gali paveldeti metodus is keliu traits



//jinai atvaizduoja viena zinute. 
//Bet tokiu zinuciu gali buti daug.
//zinutes gali ateiti is skirtingu sistemos vietu(is serverio puses, is dizainos, is duomenu bazes, is vartotojo puses...)
//sistemos vieta - modulis
//privalomumas interface - funkciju yra aprasyta, tiek ju reikia ir aprasyti klaseje
//klases/visiskai interfacus. 

// aprasomi metodai
//trait negali paveldeti is kito trait
//trait negalime tureti konstruktoriaus(interface galima, bet beveik nenaudojama)
//savybes galima paveldeti
//ta pati trait galima naudoti keliose klasese
trait SystemMessage {

    public $message="test";

    public function systemMessage() {
        echo "System error";
    }
}

trait UserMessage {
    public function userMessage() {
        echo "User error";
    }
}

trait DesignMessage{
    public function designMessage() {
        echo "Design error";
    }
}



class Message {

    use SystemMessage, UserMessage, DesignMessage;

    public function showMessage() {
        echo $this->message;
    }

    // public function systemMessage() {
    //     echo "System error";
    // }

    // public function userMessage() {
    //     echo "User error";
    // }

    // public function designMessage() {
    //     echo "Design error";
    // }

}

class Login {
    use SystemMessage;
}

$message = new Message();
$message->showMessage();
echo "<br>";
$message->systemMessage();
echo "<br>";
$message->userMessage();
echo "<br>";
$message->designMessage();
echo "<br>";
echo "<br>";
$login = new Login();
$login->systemMessage();



//Klientai - klientu filtravimas bei rikiavimas, naujas kliento pridejimas, klientu sarasas, kliento redagavimas, kliento istrynimas,
//Kompanijos - kompaniju filtravimas bei rikiavimas, nauja kompanijos pridejimas, kompaniju sarasas, kompanijos redagavimas, kompanijos istrynimas,
//Projektai - projektu  rikiavimas, naujas projektu pridejimas, projektu sarasas, projektu redagavimas, projektu istrynimas,

//trait geriausiai representuoja universaliai panaudojama moduli

trait Sortable {
    public function sort() {
        echo "Sort";
    }
}

trait Filter {
    public function filter() {
        echo "Filter";
    }
}

class Klientai {
    use Sortable, Filter;
}

class Kompanijos {
    use Sortable, Filter;
}