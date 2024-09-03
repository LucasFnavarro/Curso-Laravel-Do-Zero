<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>

<body>
    <h1>Usuários</h1>

    <a href="{{ route('users.create') }}">Adicionar novo usuário</a>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>


        <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{ $user->name }} |</td>
                    <td>{{ $user->email }} |</td>
                    <td>-</td>
                </tr>
            @empty
                <tr>
                    <td colspan="100">Nenhum usuário no BD.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $users->links() }}


</body>

</html>
