{!! Form::open(['url' => '/user', 'method' => 'post', 'class' => 'form-horizontal panel']) !!}
{!! Form::email('Mail', null, ['class' => 'form-control', 'placeholder' => 'Mail']) !!}
{!! Form::password('Password', ['class' => 'form-control', 'placeholder' => 'Mot de passe']) !!}
{!! Form::submit('Connexion') !!}
{!! Form::close() !!}
