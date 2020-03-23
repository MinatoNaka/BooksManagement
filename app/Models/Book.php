<?php

namespace App\Models;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;
use Wildside\Userstamps\Userstamps;

class Book extends Model
{
    use Sortable, FormAccessible, Userstamps, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'published_at', 'price', 'author_id',
    ];

    /**
     * @var array
     */
    protected $dates = [
        'published_at',
    ];

    /**
     * @var array
     */
    public $sortable = [
        'id', 'title', 'published_at', 'price',
    ];

    /**
     * @return string
     */
    public function getFormattedPublishedAtAttribute(): string
    {
        return $this->published_at->format('Y/m/d');
    }

    /**
     * @return BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * @return BelongsTo
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
