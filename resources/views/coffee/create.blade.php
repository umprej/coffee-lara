@extends('layouts.base')

@section('title', 'Add New Coffee Type')

@section('content')
    <h1 class="">Add New Coffee</h1>
    <div class="hlavni">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="">
                <label for="title" class="">Title</label>
                <input type="text" name="title" id="title" class="w-full border-gray-300 rounded" required>
            </div>
            <div class="">
                <label for="description" class="">Description</label>
                <textarea name="description" id="description" class="w-full border-gray-300 rounded" required></textarea>
            </div>
            <div class="">
                <label for="image_path" class="">Image</label>
                <input type="file" name="image_path" id="image_path" class="w-full border-gray-300 rounded">
            </div>
            <button type="submit" class="">Add Coffee</button>
        </form>
    </div>
@endsection