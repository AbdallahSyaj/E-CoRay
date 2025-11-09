<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Blog Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($userBlogs as $index => $blog)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $blog->name }}</td>
            <td class="d-flex gap-2">
                <!-- Edit Button -->
                <a href="{{route('blogs.edit', $blog->id)}}" class="btn btn-sm btn-primary">Edit</a>

                <!-- Delete Button -->
                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>