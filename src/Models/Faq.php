<?php

namespace LaraZeus\Sky\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;
use Spatie\Translatable\HasTranslations;

class Faq extends Model
{
    use HasTranslations;
    use HasTags;

    public $translatable = [
        'question',
        'answer',
    ];

    protected $fillable = [
        'question',
        'answer',
    ];
}
