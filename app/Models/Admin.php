<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable implements AuthenticatableContract
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password', 'role'];

    protected $hidden = ['password', 'remember_token'];

    /**
     * Check if the admin has a specific role.
     *
     * @param string $role
     * @return bool
     */
    public function hasRole(string $role)
    {
        return $this->role === $role;
    }

    /**
     * Check if the admin is a super admin.
     *
     * @return bool
     */
    public function isSuperAdmin()
    {
        return $this->hasRole('super_admin');
    }

    /**
     * Check if the admin is a regular admin.
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->hasRole('admin');
    }

    /**
     * Check if the admin is a sub-admin.
     *
     * @return bool
     */
    public function isSubAdmin()
    {
        return $this->hasRole('sub_admin');
    }
}
