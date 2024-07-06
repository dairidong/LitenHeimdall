<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Item extends Model implements Sortable
{
    use HasFactory, SortableTrait;

    public function buildSortQuery()
    {
        return static::query()->where('tag_id', $this->tag_id);
    }

    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class)->withDefault([
            'title' => __('General'),
            'icon' => 'heroicon-o-home',
            'order' => 0,
        ]);
    }
}
