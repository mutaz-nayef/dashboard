<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    /** @use HasFactory<\Database\Factories\MenuFactory> */
    use HasFactory;

    protected $fillable = ['section', 'title', 'slug', 'icon', 'url', 'permission', 'isActive', 'parent_id'];


    // Children (submenus)
    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id')->with('children');
    }

    // Parent
    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    // Optional: Check if a user can access this menu
    public function isVisibleFor($user)
    {
        return !$this->permission_name || $user->can($this->permission_name);
    }

    // public function getIconAttribute($value)
    // {
    // return $value ?: '<span class="menu-bullet"><span class="bullet bullet-dot"></span></span>';
    // }
}
