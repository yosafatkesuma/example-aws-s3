<?php

namespace App\Models;

use App\Models\BaseModel;

class Image extends BaseModel
{
    protected $guarded = [];

    protected $fillable = [
        'filename'
    ];

    public function getRules(): array
    {
        return [
            'filename' => 'required|string',
        ];
    }

}
