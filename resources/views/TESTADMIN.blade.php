{!! Form::open(['url' => '/user', 'method' => 'post']) !!}
{!! Form::email('Mail', null, ['placeholder' => 'Mail']) !!}
{!! Form::password('Password', ['placeholder' => 'Mot de passe']) !!}
{!! Form::submit('Connexion') !!}
{!! Form::close() !!}
