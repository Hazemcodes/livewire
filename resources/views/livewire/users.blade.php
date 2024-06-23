<div>
    <h1>User List</h1>
    <ul>
        @foreach ($usersList as $user)
            <li>{{ $user->name }} ({{ $user->email }})</li>
        @endforeach
    </ul>
</div>
