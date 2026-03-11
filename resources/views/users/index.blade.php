<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('users.edit', $user->id) }}" class="button">Modifier</a>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete">Supprimer</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4">Aucun utilisateur trouvé</td>
        </tr>
        @endforelse
    </tbody>
</table>