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

    public function socials($request){
        $data = array([
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin
        ]);
        return json_encode($data);
    }

    public function achievements ($request){
        $achievements = [];

        foreach($request->achievement_title as $key => $title){
            $achievements[] = [
                'achievement_title' => $request->achievement_title[$key],
                'achievement_duration' => $request->achievement_duration[$key],
                'achievement_description' => $request->achievement_description[$key]
            ];
        }

        return json_encode($achievements);
    }
}