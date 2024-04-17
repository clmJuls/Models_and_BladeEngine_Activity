@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Book List</h1>
        <table class="table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2">Author</th>
                    <th class="px-4 py-2">ISBN</th>
                    <th class="px-4 py-2">Date Published</th>
                    <th class="px-4 py-2">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr>
                    <td class="border px-4 py-2">{{ $book->title }}</td>
                    <td class="border px-4 py-2">{{ $book->author }}</td>
                    <td class="border px-4 py-2">{{ $book->isbn }}</td>
                    <td class="border px-4 py-2">{{ $book->date_published }}</td>
                    <td class="border px-4 py-2">{{ $book->description }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection