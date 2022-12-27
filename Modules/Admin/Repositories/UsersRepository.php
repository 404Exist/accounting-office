<?php

namespace Modules\Admin\Repositories;

use App\Models\Profile;
use App\Models\User;
use Hash;
use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Datatables\UsersDatatableCruds;
use Modules\Admin\Http\Requests\StoreUserRequest;
use Modules\Admin\Http\Requests\UpdateUserRequest;
use Modules\Admin\Repositories\Interfaces\UsersInterface;

class UsersRepository implements UsersInterface
{
    public function datatable()
    {
        return UsersDatatableCruds::init()->render();
    }

    public function loginUsingId(User $user): void
    {
        auth()->loginUsingId($user->id);

        $user->update(["via" => "Admin Module"]);
    }

    public function store(StoreUserRequest $request): Model
    {
        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'username' => str_replace(" ", "-", $request->name) . "-" . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)),
            'password' => Hash::make($request->password),
            'user_type' => $request->user_type,
            'step' => 1,
            'company_name' => $request->company_name ?? "",
            "email_verified_at" => $request->email_verified_at ?? null
        ];

        if (User::where('username', '=', $userData['username'])->count() > 0) {
            $userData['username'] = str_replace(" ", "-", $request->name) . "-" . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . "-" . time();
        }

        $user = User::create($userData);


        if (isset($user->id)) {
            Profile::create(['user_id' => $user->id, 'image' => 'default.png']);
        }

        return $user;
    }

    public function update(UpdateUserRequest $request, User $user): Model
    {
        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => isset($request->password) ? Hash::make($request->password) : $user->password,
            'user_type' => $request->user_type,
            'company_name' => $request->company_name ?? "",
            "email_verified_at" => isset($request->email_verified_at) ? new \DateTime($request->email_verified_at) : null
        ];

        $user->update($userData);

        return $user;
    }

    public function softDelete(User $user): bool|null
    {
        return $user->delete();
    }

    public function restore(int $id): bool|null
    {
        return User::withTrashed()->find($id)?->restore();
    }
}
