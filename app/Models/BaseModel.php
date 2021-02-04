<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Watson\Validating\ValidatingTrait;

abstract class BaseModel extends Model
{
    use ValidatingTrait;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $dateFormat = 'Y-m-d\TH:i:s.uP';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->assignPrimaryKey();
    }

    protected function assignPrimaryKey(): void
    {
        $key = $this->getKeyName();
        if ($this->$key === null) {
            $this->$key = Str::uuid()->toString();
        }
    }
}
