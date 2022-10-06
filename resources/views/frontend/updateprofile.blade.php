@extends('layouts.front')
@section('content')
<style>
    body {
  background: whitesmoke;
  font-family: 'Open Sans', sans-serif;
}
.container {
  max-width: 960px;
  margin: 30px auto;
  padding: 20px;
}
h1 {
  font-size: 20px;
  text-align: center;
  margin: 20px 0 20px;
}
h1 small {
  display: block;
  font-size: 15px;
  padding-top: 8px;
  color: gray;
}
.avatar-upload {
  position: relative;
  max-width: 205px;
  margin: 50px auto;
}
.avatar-upload .avatar-edit {
  position: absolute;
  right: 12px;
  z-index: 1;
  top: 10px;
}
.avatar-upload .avatar-edit input {
  display: none;
}
.avatar-upload .avatar-edit input + label {
  display: inline-block;
  width: 34px;
  height: 34px;
  margin-bottom: 0;
  border-radius: 100%;
  background: #FFFFFF;
  border: 1px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  font-weight: normal;
  transition: all 0.2s ease-in-out;
}
.avatar-upload .avatar-edit input + label:hover {
  background: #f1f1f1;
  border-color: #d6d6d6;
}
.avatar-upload .avatar-edit input + label:after {
  content: "\f040";
  font-family: 'FontAwesome';
  color: #757575;
  position: absolute;
  top: 10px;
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
}
.avatar-upload .avatar-preview {
  width: 192px;
  height: 192px;
  position: relative;
  border-radius: 100%;
  border: 6px solid #F8F8F8;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.avatar-upload .avatar-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
</style>
<form action="{{ route('updateprofile') }}" method="post" enctype="multipart/form-data">
    @csrf
    @foreach ($addres as $item)
    <div class="container">
        <div class="avatar-upload">
            <div class="avatar-edit">
                <input type='file' name="image" id="imageUpload" accept=".png, .jpg, .jpeg" />
                <label for="imageUpload"></label>
            </div>
            <div class="avatar-preview">
                <div id="imagePreview" style="background-image: url('{{ asset('storage/'.$item['image']) }}');">
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-2 g-4 mt-1" style="font-size: 13px">
        <div class="col">
            <label for="firstname">First Name :</label>
            <input type="text" name="firstname" class="form-control" id="firstname" value="{{ $item['firstname'] }}">
        </div>
        <div class="col">
            <label for="lastname">Last Name :</label>
            <input type="text" name="lastname" class="form-control" id="lastname" value="{{ $item['lastname'] }}">
        </div>
        <div class="col">
            <label for="email">Email :</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ $item['email'] }}">
        </div>
        <div class="col">
            <label for="nohp">No Hp :</label>
            <input type="number" name="nohp" class="form-control" id="nohp" value="{{ $item['nohp'] }}">
        </div>
        <div class="col">
            <label for="addres1">Addres 1 :</label>
            <input type="text" name="addres1" class="form-control" id="addres1" value="{{ $item['addres1'] }}">
        </div>
        <div class="col">
            <label for="addres2">Addres 2 :</label>
            <input type="text" name="addres2" class="form-control" id="addres2" value="{{ $item['addres2'] }}">
        </div>
        <div class="col">
            <label for="city">City :</label>
            <input type="text" name="city" class="form-control" id="city" value="{{ $item['city'] }}">
        </div>
        <div class="col">
            <label for="state">State :</label>
            <input type="text" name="state" class="form-control" id="state" value="{{ $item['state'] }}">
        </div>
        <div class="col">
            <label for="country">Country :</label>
            <input type="text" name="country" class="form-control" id="country" value="{{ $item['country'] }}">
        </div>
        <div class="col">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        
    </div>
    @endforeach
</form>
@endsection