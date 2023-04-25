<?php

namespace LaraZeus\Sky\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

trait PostScope
{
    /**
     * @param  Builder  $query
     */
    public function scopeSticky(Builder $query): void
    {
        $query->where('post_type', 'post')
            ->whereNotNull('sticky_until')
            ->whereDate('sticky_until', '>=', now())
            ->whereDate('published_at', '<=', now());
    }

    /**
     * @param Builder $query
     */
    public function scopeNotSticky(Builder $query): void
    {
        $query->where('post_type', 'post')->where(function ($q) {
            return $q->whereDate('sticky_until', '<=', now())->orWhereNull('sticky_until');
        })
            ->whereDate('published_at', '<=', now());
    }

    /**
     * @param Builder $query
     */
    public function scopePublished(Builder $query): void
    {
        $query->where('post_type', 'post')
            ->where('status', 'publish')
            ->whereDate('published_at', '<=', now());
    }

    /**
     * @param Builder $query
     * @param Post $post
     */
    public function scopeRelated(Builder $query, Post $post): void
    {
        $query->where('post_type', 'post')
            ->withAnyTags($post->tags->pluck('name')->toArray(), 'category');
    }

    /**
     * @param Builder $query
     */
    public function scopePage(Builder $query): void
    {
        $query->where('post_type', 'page')
            ->where('status', 'publish')
            ->whereDate('published_at', '<=', now());
    }

    /**
     * @param Builder $query
     */
    public function scopePosts(Builder $query): void
    {
        $query->where('post_type', 'post')
            ->whereDate('published_at', '<=', now());
    }

    /**
     * @param Builder $query
     */
    public function scopeForCategory(Builder $query, $category = null): void
    {
        if ($category !== null) {
            $query->where(
                function ($query) use ($category) {
                    $query->withAnyTags([$category], 'category');

                    return $query;
                }
            );
        }
    }

    /**
     * @param Builder $query
     */
    public function scopeSearch(Builder $query, $term): void
    {
        if ($term !== null) {
            $query->where(
                function ($query) use ($term) {
                    foreach (['title', 'slug', 'content', 'description'] as $attribute) {
                        $query->orWhere(DB::raw("lower({$attribute})"), 'like', "%{$term}%");
                    }

                    return $query;
                }
            );
        }
    }
}
