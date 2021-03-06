<?php

namespace Code4mk\Multitrust\Contracts;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

interface PermissionHasRelations
{
    /**
     * Permission belongs to many roles.
     *
     * @return BelongsToMany
     */
    public function roles();

    /**
     * Permission belongs to many users.
     *
     * @return BelongsToMany
     */
    public function users();

    /**
     * Permission belongs to many Admins
     *
     * @return BelongsToMany
     */
    public function Admins();
}
