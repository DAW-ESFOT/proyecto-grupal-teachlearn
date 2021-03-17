<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Tutorial extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'date'=>$this->date,
            'hour'=>$this->hour,
            'observation'=>$this->observation,
            'topic'=>$this->topic,
            'student'=>'/api/users/' . $this->student_id,
            'student_name'=>$this->student->name . " " . $this->student->last_name,
            'teacher_name'=>$this->teacher->name . " " . $this->teacher->last_name,
            'teacher'=>'/api/users/' . $this->teacher_id,
            'subject'=>'/api/subjects/' . $this->subject_id,
            'subject_name'=>$this->subject->name . " " . $this->subject->level,
            'image'=>$this->image,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
