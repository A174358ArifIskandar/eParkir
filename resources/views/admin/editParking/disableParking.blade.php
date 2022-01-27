@include('admin.editParking.displayParking')
<div class="col-md-7 offset-md-2">
    @if($errors->any())
    <div class="alert alert-danger">
        <h5><i class="icon fas fa-ban"></i> Error!</h5>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </div>
    @endif
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Disable Parking Lot {{ $parkings->area_id }}{{$name}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('bookParking.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <div class="modal-body">
                            Are you sure you want to disable this parking lot?
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="book_id" id="id" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="hidden" value="{{ \Illuminate\Support\Facades\Auth::user()->matric_no }}" name="matric_no" id="matric" class="form-control" placeholder="" readonly>
                        </div>
                        <div class="form-group">
                            <input type="hidden" value="{{ \Illuminate\Support\Facades\Auth::user()->user_name }}" name="student_name" id="name" class="form-control" placeholder="" readonly>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="plate_no" id="name" value="-" class="form-control" placeholder="Enter plate no">
                        </div>
                        <div class="form-group">
                            <input type="hidden" value="{{ $parkings->area_id }}" name="area_id" id="area_id" class="form-control" placeholder="" readonly>
                        </div>
                        <div class="form-group">
                            <input type="hidden" value="{{ $parkings->area_id }}{{$name}}" name="lot_id" id="lot_id" class="form-control" placeholder="" readonly>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="lot_status" value="disabled" id="id" class="form-control">
                        </div>
                        <div>
                            <div class="form-group">
                                <input type="hidden" value="-" name="fileToUpload" id="inputImage">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Yes</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function() {
        $("#btn").click();
    }
</script>
<button hidden="hidden" id="btn" data-toggle="modal" data-target="#exampleModal"></button>