<?php

namespace Modules\Admin\Repositories\Interfaces;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Http\Requests\StoreUserRequest;
use Modules\Admin\Http\Requests\UpdateUserRequest;

interface UsersInterface extends DataTableInterface
{
    public function loginUsingId(User $user): void;

    public function store(StoreUserRequest $request): Model;

    public function update(UpdateUserRequest $request, User $user): Model;

    public function softDelete(User $user): bool|null;

    public function restore(int $id): bool|null;
}
