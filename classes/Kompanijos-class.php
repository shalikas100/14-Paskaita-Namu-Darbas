<?php 

include "../utilities/FileManger.php";
include "../utilities/komp_filter.php";

class Kompanijos {

use FileManager, Filter;


////////////////////////// FileManager////////////

// public $file;
//     public $data;

//     public function readFile() {
//         $this->data = json_decode(file_get_contents($this->file), true);
//     }

//     public function writeFile($data) {
//         file_put_contents($this->file, json_encode($data));
//     }
////////////////////////////////////////////////////

///////////////////////// Filter///////////////////

// public function filter($data, $filter ) {

//     //stulpelio pavadinimas pagal kuri filtruojam

//     $filterCollumn = "visi";

//     if(isset($_GET["filterCollumn"])) {
//         $filterCollumn = $_GET["filterCollumn"];
//     }

//     $data=array_filter($data,function($oneData) use($filterCollumn, $filter) {
//         if($filterCollumn == "visi") {
//             return true;
//         } else if ($oneData[$filter] == $filterCollumn) {
//             return true;
//         } else {
//             return false;
//         }
//     });
//     //filtruojame duomenis pagal miesta
//     return $data;
////////////////////////////////////////
protected $kompanijos = [];

protected $stulpelis = array(
    "pavadinimas" => "Pavadinimas",
    "tipas" => "Tipas",
    "aprasymas" => "Aprasymas",
    "miestas" => "Miestas"
);

protected $tipai = []; 

    public function __construct() {

        $this->file = "../kompanijosSeeder.json";
        $this->readFile();
        $this->kompanijos = $this->data;
        $this->kompanijos = $this->filter($this->kompanijos, "tipas" );
        
    }

    public function GautiKlientus(){

        return $this->kompanijos;
    }


    function gautiTipa() {
        $this->readFile();
        $kompanijos= $this->data;
        foreach ($kompanijos as $kompanija) {
            $this->tipai[] = $kompanija["tipas"];
        }
        
        //1. kreipsimes tiesiogiai mes gauism arba tuscia masyva, dalini masyva(bus neisrinkti dublikatai)
        //2. $this->cities
        //3. zmogiskosios klaidos 

        $this->tipai=array_unique($this->tipai);

        return $this->tipai;
    
    }

}