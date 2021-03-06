<?php

namespace App\Models;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Kyslik\ColumnSortable\Sortable;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Wildside\Userstamps\Userstamps;

class User extends Authenticatable
{
    use Notifiable, Sortable, FormAccessible, Userstamps, SoftDeletes, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'birthday', 'avatar',
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

    /**
     * @var array
     */
    public $sortable = [
        'id', 'name', 'email', 'birthday',
    ];

    /**
     * @return Role
     */
    public function getRole(): Role
    {
        return $this->roles->first();
    }

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

    /**
     * モデルバインドフォームにロールを表示する際のアクセサ
     *
     * @param $value
     * @return string
     */
    public function formRoleAttribute($value): string
    {
        return $this->getRole()->name;
    }

    /**
     * @return HasMany
     */
    public function books(): HasMany
    {
        return $this->hasMany(Book::class, 'author_id');
    }

    /**
     * @return HasMany
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'reviewer_id');
    }
}
