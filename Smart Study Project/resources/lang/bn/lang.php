<?php
 $resutl = \DB::table('language')->get();
 		$ladgerheads = array();
        foreach ($resutl as  $value) {
            $ladgerheads[$value->phrase]= $value->bengali;
           }
            return $ladgerheads;
// return $resutl;