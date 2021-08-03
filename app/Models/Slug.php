<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Slug extends Model
{
    use HasFactory;
    public const BLOCK = 0;
    public const ACTIVE = 1;
    private const CODE_LEN = 10;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'type',
        'slug',
        'target',
        'target_id',
        'status'
    ];
    public static function getCode()
    {
        $code = Str::random(Slug::CODE_LEN);
        while (Slug::where('code', $code)->first() != null) {
            $code = Str::random(Slug::CODE_LEN);
        }
        return $code;
    }
}
