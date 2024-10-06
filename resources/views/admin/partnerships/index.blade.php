@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Partnerships</h1>
        <a href="{{ route('admin.partnerships.create') }}" class="btn btn-primary">Create Partnership</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($partnerships as $partnership)
                    <tr>
                        <td>{{ $partnership->title }}</td>
                        <td>{{ $partnership->status }}</td>
                        <td>
                            <a href="{{ route('admin.partnerships.edit', $partnership->id) }}"
                                class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.partnerships.destroy', $partnership->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
