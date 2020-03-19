<?php

namespace App\Models;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Kyslik\ColumnSortable\Sortable;
use Wildside\Userstamps\Userstamps;

class User extends Authenticatable
{
    use Notifiable, Sortable, FormAccessible, Userstamps;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'birthday',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @var array
     */
    protected $dates = [
        'birthday',
    ];

    public $sortable = [
        'id', 'name', 'email', 'birthday',
    ];

    /**
     * @return string
     */
    public function getFormattedBirthdayAttribute(): string
    {
        return $this->birthday->format('Y/m/d');
    }

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

    /**
     * モデルバインドフォームに生年月日を表示する際にフォーマット
     *
     * @param $value
     * @return string
     */
    public function formBirthdayAttribute($value): string
    {
        return $value->format('Y-m-d');
    }
}
