<?php

namespace Modules\Admin\Repositories;

use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Modules\Admin\Datatables\TeammemberDatatableCruds;
use Modules\Admin\Http\Requests\StoreTeamMemberRequest;
use Modules\Admin\Http\Requests\UpdateTeamMemberRequest;
use Modules\Admin\Repositories\Interfaces\TeamMembersInterface;

class TeamMembersRepository implements TeamMembersInterface
{
    public function datatable()
    {
        return TeammemberDatatableCruds::init()->render();
    }

    public function store(StoreTeamMemberRequest $request): Model
    {
        $picture = storeFile($request->file('picture'), "admin/team/members");

        return TeamMember::create(['name' => $request->name, 'order' => $request->order, 'picture' => $picture]);
    }

    public function update(UpdateTeamMemberRequest $request, TeamMember $teamMember): Model
    {
        $picture = storeFile($request->file('picture'), "admin/team/members");

        if ($picture) {
            $teamMember->update(['name' => $request->name, 'order' => $request->order, 'picture' => $picture]);
        } else {
            $teamMember->update(['name' => $request->name, 'order' => $request->order]);
        }

        return $teamMember;
    }

    public function delete(TeamMember $teamMember): bool|null
    {
        return $teamMember->delete();
    }
}
