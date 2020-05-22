<?php

namespace App\Policies;

use App\Archivo;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArchivoPolicy
{
    use HandlesAuthorization;

    public function propietario(User $user, Archivo $archivo)
    {
        return $archivo->id_user == $user->id;
    }

    public function asignado(User $user, Archivo $archivo)
    {
        return $archivo->id_user_asig == $user->id;
    }


    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Archivo  $archivo
     * @return mixed
     */
    public function view(User $user, Archivo $archivo)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Archivo  $archivo
     * @return mixed
     */
    public function update(User $user, Archivo $archivo)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Archivo  $archivo
     * @return mixed
     */
    public function delete(User $user, Archivo $archivo)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Archivo  $archivo
     * @return mixed
     */
    public function restore(User $user, Archivo $archivo)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Archivo  $archivo
     * @return mixed
     */
    public function forceDelete(User $user, Archivo $archivo)
    {
        //
    }
}
