<?php

namespace App\Models;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;
use Wildside\Userstamps\Userstamps;

class Category extends Model
{
    use Sortable, FormAccessible, Userstamps, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * @var array
     */
    public $sortable = [
        'id', 'name',
    ];

    /**
     * @return string
     */
    public function getFormattedCreatedAtAttribute(): string
    {
        return $this->created_at->format('Y/m/d H:i:s');
    }

    /**
     * @return string
     */
    public function getFormattedUpdatedAtAttribute(): string
    {
        return $this->updated_at->format('Y/m/d H:i:s');
    }
}
