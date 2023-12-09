<?php

namespace App\Traits;

trait Actions{

    public function tags($tags){
        $tagsArray = explode(',', $tags);
        return json_encode($tagsArray);
    }

    public function deleteImage($image){
        if($image){
            @unlink('storage/'.$image);
        }
    }
}