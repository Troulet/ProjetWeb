
@extends('postulate.postulate_student')

@section('candidate_status')

    <!--<div id="id_candidature" class="candidature">
    <h2>Statistiques</h2>
    <label for="post_nbre"> Candidatures déposées:</label><br>
    <input type="number" name="post_nbre" id="post_nbre" required><br><br>

    <label for="Candidature_Date">Date de la dernière candidature postée:</label><br>
    <input type="Date" name="Candidature_Date" id="Candidature_Date" required><br><br>
            
    <button class="button" type="button">CANDIDATURE AVEC RÉPONSE</button>
    <button class="button" type="button">CANDIDATURE SANS RÉPONSE</button>
    <button class="button" type="button">TOUT</button>
    </div>-->

@stop

@section('tab_candidate')


<table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Entreprise</th>
                  <th scope="col">Intitulé du poste</th>
                  <th scope="col">Curriculum vitae</th>       <!--Réponse = oui/non uniquement-->
                  <th scope="col">Lettre de motivation</th>   <!--Réponse = oui/non uniquement-->
                  <th scope="col">Réponse</th>                <!--Réponse = oui/non uniquement-->
                  <th scope="col"></th>
                  <th scope="col"></th>
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
                  <td>
                  {!! Form::open(['url' => '/Offer_CV', 'method' => 'get']) !!}
                  <input name="PDF" type="hidden" value="{{$Offer['Curiculum_Vitae']}}">
                  <button class="btn" type="submit">CV</button>
                  {!! Form::close() !!}
                  </td>
                  <td>
                  {!! Form::open(['url' => '/Offer_CV', 'method' => 'get']) !!}
                  <input name="PDF" type="hidden" value="{{$Offer['Motivation_Letter']}}">
                  <button class="btn" type="submit">Lettre de motivation</button>
                  {!! Form::close() !!}
                  </td>
                  {!! Form::open(['url' => '/Postulate_Update', 'method' => 'post']) !!}
                  @if($Offer['Response_State'] == 0)
                  <td><select name="Response_State">
	                    <option selected="yes">Pas de réponse</option>
	                    <option>Oui</option>
                        <option>Non</option>
                      </select></td>
                  @elseif ($Offer['Response_State'] == 1)
                  <td><select name="Response_State">
	                    <option selected="yes">Non</option>
	                    <option>Oui</option>
                        <option>Pas de réponse</option>
                      </select></td>
                  @elseif ($Offer['Response_State'] == 2)
                  <td><select name="Response_State">
	                    <option selected="yes">Oui</option>
	                    <option>Non</option>
                        <option>Pas de réponse</option>
                      </select></td>
                  @endif
                
                  <td>
                  
                  <input name="Internship_id" type="hidden" value="{{$Offer['id']}}">
                  <button class="btn" type="submit">Mettre à jour</button>
                  {!! Form::close() !!}
                  </td>
                  </tr>
               @endforeach
               @endif
              </tbody>
        </table>
@stop
