<?php

include "../utilities/FileManger.php";

class KompanijosSeeder{

use FileManager;

// trait FileManager {

//     public $file; kompanijos.json
//     public $data; $kompanijos

//     public function readFile() {
//         $this->data = json_decode(file_get_contents($this->file), true);
//     }

//     public function writeFile($data) {
//         file_put_contents($this->file, json_encode($data));
//     }
// }

protected $tipas = ["UAB","AB","MB"];
protected $miestas = ["Vilnius","Klaipeda","Panevezys","Siauliai"];

public function seeder($skaicius){
            $data = array();
            for($i = 0; $i<$skaicius; $i++){
                $kompanija = array(
                    "pavadinimas" => "Imone".$i,
                    "tipas" => $this->tipas[rand(0,2)],
                    "aprasymas" => "Aprasymas".$i,
                    "miestas" => $this->miestas[rand(0,3)]
                );
                $data[$i] = $kompanija;
            }
            $this->file = "../kompanijosSeeder.json";
            $this->writeFile($data);
}
}
$kompanijuPildymas = new KompanijosSeeder();
$kompanijuPildymas->seeder(100);
