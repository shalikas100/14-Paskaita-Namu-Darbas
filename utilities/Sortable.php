<?php

trait Sortable {
    
    public function sort($data) {
        if(isset($_GET["sortCollumn"]) && isset($_GET["sortOrder"])) {
            $sortCollumn = $_GET["sortCollumn"];
            $sortOrder = $_GET["sortOrder"];
            if($sortCollumn == "id") {
            //ASC ir DESC
                if($sortOrder == "ASC") {
                    ksort($data);
                } else if($sortOrder == "DESC") {
                    krsort($data);
                }
                //uasort funkcija
                // teksto rikiavimas
    
    
            } else {
    
                $order = [-1, 1]; //ASC
            
                if ($sortOrder == "DESC") {
                    $order = [1, -1]; //DESC
                }
    
                uasort($data, function($dabartinis, $busimas) use($sortCollumn, $order) {    
                    //$sordOrder = ASC    -1 1
                    //$sortOrder = DESC   1 -1
            
                   // $order = [-1, 1]; //ASC
            
                    //if ($sortOrder == "DESC") {
                    //    $order = [1, -1]; //DESC
                    //}
                    
                    if($dabartinis[$sortCollumn] == $busimas[$sortCollumn]) {
                        return 0;
                    } else if($dabartinis[$sortCollumn] < $busimas[$sortCollumn]) {
                        return $order[0];
                    } else {
                        return $order[1];
                    }
                });
            }        
        } else {
            //pagal id mazejimo tvarka
            krsort($data);
        }
    
        if(isset($_GET["sortOrder"]) && $_GET["sortOrder"] == "RAND") {
            
            //nesumaiso masyvo indeksu
            //kad sumaisytu su indeksais
            shuffle($data);
        }
    
    
    
        return $data;
    }
}