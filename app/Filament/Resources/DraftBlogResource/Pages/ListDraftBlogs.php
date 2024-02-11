<?php

namespace App\Filament\Resources\DraftBlogResource\Pages;

use App\Filament\Resources\DraftBlogResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDraftBlogs extends ListRecords
{
    protected static string $resource = DraftBlogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
