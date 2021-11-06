<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class healthResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'region' => $this->region,
            'district' => $this->district,
            'phone' => $this->phone,
            'email' => $this->email,
            'lat' => $this->lat,
            'facility_type' => $this->facility_type,
            'facility_name' => $this->facility_name,
            'town' => $this->town,
            'ownership' => $this->ownership,
            'image' => $this->image,
            'user_id' => $this->user_id,
            'long' => $this->long,
            // 'created_at' => $this->created_at,
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s'),
        ];
        // return parent::toArray($request);
    }
}
