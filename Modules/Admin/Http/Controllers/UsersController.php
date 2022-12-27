<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\StoreUserRequest;
use Modules\Admin\Http\Requests\UpdateUserRequest;
use Modules\Admin\Repositories\Interfaces\UsersInterface;

class UsersController extends Controller
{
    public function __construct(private UsersInterface $userRepository)
    {
        $this->middleware('can:delete_users')->only(['destroy', 'restore']);
    }

    public function index()
    {
        return $this->userRepository->datatable();
    }

    public function store(StoreUserRequest $request)
    {
        $this->userRepository->store($request);

        return response([
            'toast-message' => 'User have been created successfully!',
            'toast-type' => 'success',
        ]);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $this->userRepository->update($request, $user);

        return response([
            'toast-message' => 'User have been updated successfully!',
            'toast-type' => 'success',
        ]);
    }

    public function destroy(User $user)
    {
        if ($user->id == auth()->id()) {
            return response([
                'toast-message' => 'Sorry but you can\'t delete this user!',
                'toast-type' => 'error',
            ]);
        }
        $this->userRepository->softDelete($user);

        return response([
            'toast-message' => 'User have been deleted successfully!',
            'toast-type' => 'success',
        ]);
    }

    public function restore(int $id)
    {
        $this->userRepository->restore($id);

        toastr()->success('User have been restored successfully!');

        return back();
    }

    public function login(User $user)
    {
        $this->userRepository->loginUsingId($user);

        return redirect(route('clientDashboard'));
    }
}
