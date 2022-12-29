<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\StoreTeamMemberRequest;
use Modules\Admin\Http\Requests\UpdateTeamMemberRequest;
use Modules\Admin\Repositories\Interfaces\TeamMembersInterface;

class TeamMembersController extends Controller
{
    public function __construct(private TeamMembersInterface $teamMember)
    {
    }

    public function index()
    {
        return $this->teamMember->datatable();
    }

    public function store(StoreTeamMemberRequest $request)
    {
        $this->teamMember->store($request);

        return response([
            'toast-message' => 'Team Member have been created successfully!',
            'toast-type' => 'success',
        ]);
    }

    public function update(UpdateTeamMemberRequest $request, int $id)
    {
        $this->teamMember->update($request, TeamMember::find($id));

        return response([
            'toast-message' => 'Team Member have been updated successfully!',
            'toast-type' => 'success',
        ]);
    }

    public function destroy(int $id)
    {
        $this->teamMember->delete(TeamMember::find($id));

        return response([
            'toast-message' => 'Team Member have been deleted successfully!',
            'toast-type' => 'success',
        ]);
    }
}
