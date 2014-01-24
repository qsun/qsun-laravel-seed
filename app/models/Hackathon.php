<?php

class Hackathon extends Eloquent {
    protected $fillable = array(
                                'title',
                                'description',
                                'location',
                                'category_id',
                                'availability',
                                'contact',
                                'website',
                                'seo_url',
                                );

    public static function boot() {
        parent::boot();

        self::creating(function ($hackathon) {
                if (!$hackathon->seo_url) {
                    $hackathon->seo_url = Str::slug($hackathon->title);
                }
            });
    }

    public function getHTMLizedDescriptionAttribute() {
        return nl2br($this->description);
    }
}