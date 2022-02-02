<?php

namespace App\Policies;

use App\Models\User;
use App\Models\home_about;
use Illuminate\Auth\Access\HandlesAuthorization;

class HomeAboutPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
       return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\home_about  $homeAbout
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, home_about $homeAbout)
    {
     return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->Is_admin==1;

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\home_about  $homeAbout
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, home_about $homeAbout)
    {
        return $user->Is_admin==1;

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\home_about  $homeAbout
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, home_about $homeAbout)
    {
        return $user->Is_admin==1;

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\home_about  $homeAbout
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, home_about $homeAbout)
    {
        return $user->Is_admin==1;

    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\home_about  $homeAbout
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, home_about $homeAbout)
    {
        return $user->Is_admin==1;

    }
}
