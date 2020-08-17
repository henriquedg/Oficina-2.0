<?php

namespace App\Policies;

use App\User;
use App\Orcamentos;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrcamentoPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any orcamentos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the orcamentos.
     *
     * @param  \App\User  $user
     * @param  \App\Orcamentos  $orcamentos
     * @return mixed
     */
    public function view(User $user, Orcamentos $orcamentos)
    {
        //
    }

    /**
     * Determine whether the user can create orcamentos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the orcamentos.
     *
     * @param  \App\User  $user
     * @param  \App\Orcamentos  $orcamentos
     * @return mixed
     */
    public function update(User $user, Orcamentos $orcamentos)
    {
        //
    }

    /**
     * Determine whether the user can delete the orcamentos.
     *
     * @param  \App\User  $user
     * @param  \App\Orcamentos  $orcamentos
     * @return mixed
     */
    public function delete(User $user, Orcamentos $orcamentos)
    {
        //
    }

    /**
     * Determine whether the user can restore the orcamentos.
     *
     * @param  \App\User  $user
     * @param  \App\Orcamentos  $orcamentos
     * @return mixed
     */
    public function restore(User $user, Orcamentos $orcamentos)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the orcamentos.
     *
     * @param  \App\User  $user
     * @param  \App\Orcamentos  $orcamentos
     * @return mixed
     */
    public function forceDelete(User $user, Orcamentos $orcamentos)
    {
        //
    }
}
