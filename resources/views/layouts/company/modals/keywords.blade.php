<div class="modal  fade" id="addKeywords">
    <form method="POST" action="" id="addKeyWordsForm" onsubmit="submitForm(event)">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="status">Keywords</label>
                        <textarea type="text" name="keywords" class="form-control" id="keywords"></textarea>
                    </div>

                    {{--<div class="form-group">--}}
                        {{--<label for="name">Conclusion</label>--}}

                    {{--</div>--}}

                    <div class="form-group">
                        <label for="amount">Description</label>
                        <textarea name="description" class="form-control" id="description"></textarea>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" onclick="submitForm(event)">Save</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </form>
</div>