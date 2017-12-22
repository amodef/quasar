<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add user</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="/projects/{{ $project->id }}/addMember">
            {{  csrf_field() }}
            <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="form-group">
                                <select class="form-control" id="memberName" name="memberName">
                                    @foreach ($users as $user)
                                        <option>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>                        
                        <div class="col-lg-3">                   
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="25" aria-describedby="memberPercent" name="memberPercent">
                                <span class="input-group-addon" id="memberPercent">%</span>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>