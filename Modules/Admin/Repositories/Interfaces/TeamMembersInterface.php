<?php

namespace Modules\Admin\Repositories\Interfaces;

use App\Models\TeamMember;
use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Http\Requests\StoreTeamMemberRequest;
use Modules\Admin\Http\Requests\UpdateTeamMemberRequest;

interface TeamMembersInterface extends DataTableInterface
{
    public function store(StoreTeamMemberRequest $request): Model;

    public function update(UpdateTeamMemberRequest $request, TeamMember $teamMember): Model;

    public function delete(TeamMember $teamMember): bool|null;
}
