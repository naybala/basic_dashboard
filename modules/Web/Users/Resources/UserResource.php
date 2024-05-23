<?php

namespace BasicDashboard\Web\Users\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request):array
    {
         return [
            "id" => $this->id,
            "name"=>$this->name,
            "description"=>$this->description,
        ];
    }
}
