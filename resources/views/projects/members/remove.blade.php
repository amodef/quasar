<div class="modal fade" id="removeUser{{ $user->id }}Modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Remove user</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="/projects/{{ $project->id }}/removeMember">
                {{  csrf_field() }}
                <input type="hidden" name="memberName" value="{{ $user->name }}">
                <div class="modal-body">
                    Remove <b>{{ $user->name }}</b> from the current project?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Remove</button>
                </div>
            </form>
        </div>
    </div>
</div>