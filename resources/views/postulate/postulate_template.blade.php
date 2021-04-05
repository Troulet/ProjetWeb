@extends(postulate.postulate)

@section('candidate_status')

    <div id="id_candidature" class="candidature">
    <h2>Statistiques</h2>
    <label for="post_nbre"> Candidatures déposées:</label><br>
    <input type="number" name="post_nbre" id="post_nbre" required><br><br>

    <label for="Candidature_Date">Date de la dernière candidature postée:</label><br>
    <input type="Date" name="Candidature_Date" id="Candidature_Date" required><br><br>
            
    <button class="button" type="button">CANDIDATURE AVEC RÉPONSE</button>
    <button class="button" type="button">CANDIDATURE SANS RÉPONSE</button>
    <button class="button" type="button">TOUT</button>
    </div>

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
                </tr>
              </thead>
              <tbody>
                <?php
                    i=0;
                ?>
              @foreach($dataOffer as $Offer)
                
                <tr>
                  <th scope="row">{{i++}}</th>
                  <td>{{$Offer['Enterprise_Name']}}</td>
                  <td><a href="/Offer/{{$Offer['id']}}" >Offre</a> </td> <!--form avec Internship_id-->
                  <td>{{echo $Offer['Curriculum_Vitae']}}</td>
                  <td>{{echo $Offer['Motivation_Letter']}}</td>

                  @if($dataOffer['Response_State'] == 0)
                  <td><select name="Response_State">
	                    <option selected="yes">Non</option>
	                    <option>Oui</option>
                      </select></td>
                  @elseif ($dataOffer['Response_State'] == 1)
                  <td><select name="Response_State">
	                    <option selected="yes">Oui</option>
	                    <option>Non</option>
                      </select></td>
                  @endif
                </tr>
               @endforeach
              </tbody>
        </table>


<a href="../index.html"> ... </a>


@stop
