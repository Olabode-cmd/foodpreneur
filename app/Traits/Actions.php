<?php

namespace App\Traits;
use Illuminate\Support\Str;

use function PHPSTORM_META\type;

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

    public function speakers($request){
        $speakers = [];
       
        foreach($request->speakers_name as $key => $name){

            $imageName = $request->speakers_avatar[$key] <> '' ? $request->speakers_avatar[$key]->store('speakers', 'public') : null;

            $speakers[] = [
                'speakers_id' => Str::uuid(),
                'speakers_name' => $request->speakers_name[$key],
                'speakers_role' => $request->speakers_role[$key],
                'speakers_avatar' => $imageName ?? null,
                'speakers_company' => $request->speakers_company[$key]
            ];
        }
        return json_encode($speakers);
    }

    public function updateSpeakers($request,$event){
        $existingSpeakers = json_decode($event->speakers, true);
        $updatedSpeakers = [];

        // Loop through existing speakers and check for deletions
        foreach ($existingSpeakers as $existingSpeaker) {
            $found = false;

            foreach ($request->speakers_id as $key => $newSpeakerId) {
                if ($newSpeakerId == $existingSpeaker['speakers_id']) {
                    $found = true;
                    break;
                }
            }

            // If not found in the request, delete the speaker and their image
            if (!$found) {
                $this->deleteImage($existingSpeaker['speakers_avatar']);
            }
        }

        // Loop through the request to update or add speakers
        foreach ($request->speakers_name as $key => $newSpeakerName) {
            $newSpeaker = [
                'speakers_id' => $request->speakers_id[$key] ?? null,
                'speakers_name' => $newSpeakerName,
                'speakers_role' => $request->speakers_role[$key],
                'speakers_avatar' => $request->speakers_avatar[$key] ?? null,
                'speakers_company' => $request->speakers_company[$key],
            ];

            $existingSpeaker = $this->findSpeakerById($existingSpeakers, $newSpeaker['speakers_id']);
            $imageName = $this->getUpdatedImage($newSpeaker, $key, $request);

            $updatedSpeakers[] = [
                'speakers_id' => isset($newSpeaker['speakers_id']) ? $newSpeaker['speakers_id'] : Str::uuid(),
                'speakers_name' => $newSpeaker['speakers_name'],
                'speakers_role' => $newSpeaker['speakers_role'],
                'speakers_avatar' => $imageName ?? ($existingSpeaker ? $existingSpeaker['speakers_avatar'] : null),
                'speakers_company' => $newSpeaker['speakers_company']
            ];
        }
        return json_encode($updatedSpeakers); 
    }

    // Helper function to find an existing speaker by ID
    public function findSpeakerById($existingSpeakers, $speakerId){
        foreach ($existingSpeakers as $existingSpeaker) {
            if (isset($existingSpeaker['speakers_id']) && $existingSpeaker['speakers_id'] == $speakerId) {
                return $existingSpeaker;
            }
        }
        return null;
    }

    // Helper function to get the updated image
    public function getUpdatedImage($newSpeaker, $key, $request){
        return isset($newSpeaker['speakers_avatar']) && $newSpeaker['speakers_avatar'] <> ''
            ? $request->file('speakers_avatar.' . $key)->store('speakers', 'public')
            : null;
    }


    public function deleteSpeakerImages($speakers){
        $speaker = json_decode($speakers,true);
        
        foreach($speaker as  $speak){
            $this->deleteImage($speak['speakers_avatar']);
        }
    }
    
}

