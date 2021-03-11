<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'last_name'=>$this->last_name,
            'birthday'=>$this->birthday,
            'phone' => $this->phone,
            'email' => $this->email,
            //'rol_type' => $this->rol_type,
            'role'=>$this->role,
            'biography' => $this->biography,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
