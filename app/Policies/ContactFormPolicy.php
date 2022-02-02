<?php

namespace App\Policies;

use App\Models\Contact_form;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContactFormPolicy
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
     * @param  \App\Models\Contact_form  $contactForm
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Contact_form $contactForm)
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
     * @param  \App\Models\Contact_form  $contactForm
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Contact_form $contactForm)
    {
        return $user->Is_admin==1;

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Contact_form  $contactForm
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Contact_form $contactForm)
    {
        return $user->Is_admin==1;

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Contact_form  $contactForm
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Contact_form $contactForm)
    {
        return $user->Is_admin==1;

    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Contact_form  $contactForm
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Contact_form $contactForm)
    {
        return $user->Is_admin==1;

    }
}
