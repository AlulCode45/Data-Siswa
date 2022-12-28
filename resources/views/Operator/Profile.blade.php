@extends('Template.Main')
@section('title','Edit Profile')

@section('content')
    <div class="card shadow rounded">
        <div class="card-body">
            <h5 class="card-title">Edit Profile</h5>
            <form action="{{ route('operator.profile') }}" method="post" enctype="multipart/form-data">
                @csrf
                <img src="{{ asset('/foto_profile/'.Auth::guard('operator')->user()->foto_profile) }}" id="preview" alt="foto profile" class="rounded rounded-circle" style="width: 200px; height: 200px;">
                <div class="form-group mt-2">
                    <label for="foto">Foto Profile</label>
                    <input type="file" name="foto" id="foto" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Name</label>
                    <input class="form-control" name="name" type="text" value="{{ $operator->name }}" required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input class="form-control" name="email" type="email" value="{{ $operator->email }}"required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input class="form-control" name="password" type="password">
                </div>
                <div class="form-group mt-2">
                    <button class="btn btn-primary" type="submit">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('#foto').change(function(){
                var file = $(this)[0].files[0];
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#preview').attr('src',e.target.result);
                }
                reader.readAsDataURL(file);
            });
        });
    </script>
@endsection
