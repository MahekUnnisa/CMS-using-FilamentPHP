<?php

namespace App\Filament\Resources\DraftBlogResource\Pages;

use App\Filament\Resources\DraftBlogResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDraftBlog extends CreateRecord
{
    protected static string $resource = DraftBlogResource::class;
}
