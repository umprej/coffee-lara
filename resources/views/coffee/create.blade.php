@extends('layouts.base')

@section('title', 'Add New Coffee Type')

@section('content')
<div id="pozadi">
    <h1 class="nadpis">Add New Coffee</h1>
    <div class="hlavni">

    <div class="menu-create">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="create-center">
                <label for="title" class="napis">Title</label> <br>
                <input type="text" name="title" id="title" class="w-full border-gray-300 rounded" required>
            </div>
            <div class="create-center">
                <label for="description" class="napis">Description</label> <br>
                <textarea name="description" id="description" class="w-full border-gray-300 rounded" required></textarea>
            </div>
            <div class="create-center">
                <label for="image_path" class="napis">Image</label> <br>
                <input type="file" name="image_path" id="image_path" class="w-full border-gray-300 rounded">
            </div> <br>
            <div class="create-center">
            <button type="submit" class="submit">Add Coffee</button></div>
        </form>
    </div></div></div>
@endsection