<div class="container">
    <div class="row justify-content-center">
        <!-- Modal -->
        <div class="modal fade" id="deleteAnimeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                {{ Form::open(array('url' => array('anime/delete', $anime->id),'method' => 'delete')) }}
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Anime löschen</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Möchten Sie den Anime wirklich löschen?
                    </div>
                    <div class="modal-footer">
                        <button type="submit">Löschen</button>
                        <a type="submit" href="/anime/delete/{{$anime->id}}" class="btn btn-primary">Löschen</a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Abbrechen</button>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
