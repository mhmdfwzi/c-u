<!-- Modal -->
<div class="modal fade" id="addImage{{ $serviceProduct->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">أضافة صورة</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data"
                    action="{{ route('admin.servicesProducts.add_image', $serviceProduct->id) }}" autocomplete="off">

                    @csrf


                    {{-- Image input --}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>الصورة<span class="text-danger">*</span></label>
                                <div class="avatar-img">

                                    <input onchange="preview()" type="file" name="image" accept="image/*"
                                        id="upload-photo" />
                                </div>
                                @error('image')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="border rounded-lg text-center p-3">
                                <img src="{{ asset('backend/assets/images/profile-avatar.jpg') }}" height="200"
                                    width="200" class="img-fluid" id="frame" />
                            </div>
                        </div> --}}
                    </div>



                    <button type="submit" class="btn btn-success btn-md nextBtn btn-lg ">أضافة </button>


                </form>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
        </div>
    </div>
</div>
