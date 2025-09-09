<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
         return [
            'id'              => $this->id,
            'name'            => $this->name,
            'email'           => $this->email,
            'email_verified_at' => $this->email_verified_at,
            'phone_number'    => $this->phone_number,
            'profession'      => $this->profession,
            'location'        => $this->location,
            'bio'             => $this->bio,
            'short_testimony' => $this->short_testimony,
            'avatar'          => $this->avatar,
            'updated_at'      => $this->updated_at,
        ];
    }
}
