<?php
 $resutl = \DB::table('language')->get();
 		$ladgerheads = array();
        foreach ($resutl as  $value) {
            $ladgerheads[$value->phrase]= $value->english;
           }
            return $ladgerheads;
// return $resutl;