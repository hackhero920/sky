<?php

namespace LaraZeus\Sky\Filament\Resources\PageResource\Pages;

use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use LaraZeus\Sky\Filament\Resources\PageResource;

class ListPosts extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PageResource::class;

    protected function getTableQuery(): Builder
    {
        return config('zeus-sky.models.post')::query()
            ->where('post_type', 'page')
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
