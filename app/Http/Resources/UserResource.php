<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => (string)$this->id,
            'attributes' => [
                'email' => $this->email,
                'name' => $this->name,
                'ip_address' => $this->ip_address,
                'referrer' => $this->referrer,
                'user_agent' => $this->user_agent,
                'path' => ImageResource::collection($this->images)
            ]
        ];
    }
}
