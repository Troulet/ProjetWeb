@extends('users.User_profile')

@section('users_profile')

        <h5>Profil : </h5>
            <p>
                Elève
                Email : {{$dataUser['email']}} </br>
                Prénom : {{$dataUser['First_Name']}} </br>
                Nom : {{$dataUser['Last_name']}} </br>
                Promotion : {{$dataUser['Promotion']}} </br>

                @if($dataUser['Representative']==true)
                Délégué : oui </br>
                Droits du délégué : {{$dataUser['Representative_Rights']}}
                @else
                Délégué : non </br>
                @endif

                Nombre de candidatures : {{$PostulateCount}}
            </p>
            </br>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Entreprise</th>
                  <th scope="col">Intitulé du poste</th>
                  <th scope="col">Réponse</th>                <!--Réponse = oui/non uniquement-->
                </tr>
              </thead>
              <tbody>
              @if($dataOffer != null)
              @foreach($dataOffer as $Offer)
                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <td>{{$Offer['Enterprise_Name']}}</td>
                  <td>{!! Form::open(['url' => '/Offer_Profil', 'method' => 'post']) !!}
                            <input name='id' type="hidden" value="{{$Offer['id']}}">
                            <button type="submit" class="btn">Offre</button>
                    {!! Form::close() !!}</td><!--form avec Internship_id-->
                  @if($Offer['Response_State'] == 0)
                  <td>Pas de réponse</td>
                  @elseif ($Offer['Response_State'] == 1)
                  <td>Non</td>    
                  @elseif ($Offer['Response_State'] == 2)
                  <td>Oui</td>
                  @endif
                                                             
                </tr>
               @endforeach
               @endif
              </tbody>
        </table>

            @if($user_type == 2)
            {!! Form::open(['url' => '/Inform_step5', 'method' => 'post']) !!}
                        <input name='id' type="hidden" value="{{$dataUser['id']}}">
                        <input name='Internship_Contract' type="file" required>
                        <button type="submit" class="btn">Transmettre une Convention non signée par l'entreprise</button>
            {!! Form::close() !!}
            {!! Form::open(['url' => '/Inform_step6', 'method' => 'post']) !!}
                  <input name='id' type="hidden" value="{{$dataUser['id']}}">
                  <input name='Internship_Contract' type="file" required>
                  <button type="submit" class="btn">Transmettre une Convention signée par l'entreprise</button>
            {!! Form::close() !!}
            @endif

@stop


