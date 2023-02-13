@extends('frontend.layouts.bikebody')
@section('content')

    <div class="form-title">
        <h3>تسجيل للعجلة</h3>
    </div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                <p>{{ $error }}</p>
            </div>
        @endforeach
    @endif
    <form action="{{ 'bikestore' }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input">
            <div class="papa">
                <input class="bike-type" type="text" name="type" placeholder="نوع العجلة" required />
            </div>
            <div class="papa">
                <input class="model" type="text" name="model" placeholder="الموديل" required />
            </div>
            <div class="papa">
                <input class="frame-number" type="text" name="frame_number" placeholder="رقم الكادر" required />
            </div>
            <input dir="ltr" type="file" name="img" accept="image/*" multiple />
            <textarea class="mark" name="desc" id="bikedesc" placeholder="علامة مميزة ( إختياري )" cols="30"
                rows="2"></textarea>
            <div class="biketype">
                <select name="type" class="type p-2 border border-black border-2 rounded bold">
                    <option value="#" selected>إختار نوع العجلة</option>
                    <option value="Mountain">Mountain</option>
                    <option value="Hyprid">Hyprid</option>
                    <option value="Road">Road</option>
                </select>
            </div>
            <input class="btn submit" name="submit" type="submit" value="تسجيل" />
        </div>
    </form>
@endsection
