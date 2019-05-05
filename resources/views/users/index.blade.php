@foreach($users as $user)
    {{ $user->name }} <br>
    <a href="{{ URL::signedRoute('users.show', ['user' => $user->id]) }}">View Signed</a>
    <a href="{{ route('users.show', ['user' => $user->id]) }}">View Normal</a>
@endforeach