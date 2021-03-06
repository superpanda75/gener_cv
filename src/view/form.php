<?php

?>
<div class="tab-content">

    <!--################################################################################################################
                                                         INFOS PERSOS
    #################################################################################################################-->
    <div role="tabpanel"  id="p_info">
        <div class="row">
            <div class="col-md-3"></div> <!--permet de centrer le formulaire au milieu-->
            <div class="col-md-6">
                <form id="info_p" action="index.php?page=formController" method="post">
                    <h2>Mes infos personnelles</h2><br/>
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" name="name" placeholder="votre nom">
                    </div>
                    <div class="form-group">
                        <label for="firstname">Prénom</label>
                        <input type="text" class="form-control" name="firstname" placeholder="votre prénom">
                    </div>
                    <div class="form-group">
                        <label for="age">votre âge</label>
                        <input class="form-control" type="number" placeholder="42" name="age">
                    </div>
                    <br/>
                    <hr/>
                    <br/>
                    <h2>Coordonnées</h2><br/>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" placeholder="exemple@fournisseur.com" name="email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Telephone</label>
                        <input class="form-control" type="tel" placeholder="06 42 xx xx xx" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="adress">Adresse</label>
                        <input class="form-control" type="text" placeholder="42, rue de la Horde" name="adress">
                    </div>
                    <div class="form-group">
                        <label for="city">Ville</label>
                        <input class="form-control" type="text" placeholder="Orgrimmar" name="city">
                    </div>
                    <div class="form-group">
                        <label for="postcode">Code Postal</label>
                        <input class="form-control" type="number" placeholder="42000" name="postcode">
                    </div>
                    <div class="form-group">
                        <label for="adress_number">n° rue</label>
                        <input class="form-control" type="number" placeholder="42" name="adress_number">
                    </div>

                    </br>
                    </br>
                    <hr/>
                    </br>
                    </br>

                    <!--################################################################################################################
                                                                            COMPETENCES
                       #################################################################################################################-->

                    <h2>Mes compétences</h2><br/>
                    <h3>Compétence 1</h3>
                    <div class="form-group">
                        <label for="skill_title1">Titre</label>
                        <input type="text" class="form-control" id="skill_title1" placeholder="PHP, Java, Srum..." name="skill_title1">
                    </div>
                    <div class="form-group">
                        <label for="skill_comm1">Commentaire</label>
                        <input type="text" class="form-control" maxlength="30" id="skill_comm1" placeholder="(30 caractères max)" name="skill_comm1">
                    </div>
                    <div class="form-group">
                        <label for="level1">Niveau de compétences</label>
                        <select class=form-control id="level1" name="level1">
                            <option value=1>1<small>/10</small></option>
                            <option value=2>2<small>/10</small></option>
                            <option value=3>3<small>/10</small></option>
                            <option value=4>4<small>/10</small></option>
                            <option value=5>5<small>/10</small></option>
                            <option value=6>6<small>/10</small></option>
                            <option value=7>7<small>/10</small></option>
                            <option value=8>8<small>/10</small></option>
                            <option value=9>9<small>/10</small></option>
                            <option value=10>10<small>/10</small></option>
                        </select>
                    </div>
                    <br/>
                    <hr/>
                    <br/>
                    <h3>Compétence 2</h3>
                    <div class="form-group">
                        <label for="skill_title2">Titre</label>
                        <input type="text" class="form-control" id="skill_title2" placeholder="PHP, Java, Srum..." name="skill_title2">
                    </div>
                    <div class="form-group">
                        <label for="skill_comm2">Commentaire</label>
                        <input type="text" class="form-control" maxlength="30" id="skill_comm2" placeholder="(30 caractères max)" name="skill_comm2">
                    </div>
                    <div class="form-group">
                        <label for="level2" >Niveau de compétences</label>
                        <select class=form-control id="level2" name="level2">
                            <option value=1>1<small>/10</small></option>
                            <option value=2>2<small>/10</small></option>
                            <option value=3>3<small>/10</small></option>
                            <option value=4>4<small>/10</small></option>
                            <option value=5>5<small>/10</small></option>
                            <option value=6>6<small>/10</small></option>
                            <option value=7>7<small>/10</small></option>
                            <option value=8>8<small>/10</small></option>
                            <option value=9>9<small>/10</small></option>
                            <option value=10>10<small>/10</small></option>
                        </select>
                    </div>
                    </br>
                    <hr/>
                    </br>
                    <h3>Compétence 3</h3>
                    <div class="form-group">
                        <label for="skill_title3">Titre</label>
                        <input type="text" class="form-control" id="skill_title3" placeholder="PHP, Java, Srum..." name="skill_title3">
                    </div>
                    <div class="form-group">
                        <label for="skill_comm3">Commentaire</label>
                        <input type="text" class="form-control" maxlength="30" id="skill_comm3" placeholder="(30 caractères max)" name="skill_comm3">
                    </div>
                    <div class="form-group">
                        <label for="level3" >Niveau de compétences</label>
                        <select class=form-control id="level3" name="level3">
                            <option value=1>1<small>/10</small></option>
                            <option value=2>2<small>/10</small></option>
                            <option value=3>3<small>/10</small></option>
                            <option value=4>4<small>/10</small></option>
                            <option value=5>5<small>/10</small></option>
                            <option value=6>6<small>/10</small></option>
                            <option value=7>7<small>/10</small></option>
                            <option value=8>8<small>/10</small></option>
                            <option value=9>9<small>/10</small></option>
                            <option value=10>10<small>/10</small></option>
                        </select>
                    </div>
                    </br>
                    <hr/>
                    </br>
                    <h3>Compétence 4</h3>
                    <div class="form-group">
                        <label for="skill_title4">Titre</label>
                        <input type="text" class="form-control" id="skill_title4" placeholder="PHP, Java, Srum..." name="skill_title4" name="skill_title4">
                    </div>
                    <div class="form-group">
                        <label for="skill_comm4">Commentaire</label>
                        <input type="text" class="form-control" maxlength="30" id="skill_comm4" placeholder="(30 caractères max)" name="skill_comm4">
                    </div>
                    <div class="form-group">
                        <label for="level4">Niveau de compétences</label>
                        <select class=form-control id="level4" name="level4">
                            <option value=1>1<small>/10</small></option>
                            <option value=2>2<small>/10</small></option>
                            <option value=3>3<small>/10</small></option>
                            <option value=4>4<small>/10</small></option>
                            <option value=5>5<small>/10</small></option>
                            <option value=6>6<small>/10</small></option>
                            <option value=7>7<small>/10</small></option>
                            <option value=8>8<small>/10</small></option>
                            <option value=9>9<small>/10</small></option>
                            <option value=10>10<small>/10</small></option>
                        </select>
                    </div>
                    </br>
                    </br>
                    <hr/>
                    </br>
                    </br>

                    <!--################################################################################################################
                                                                         FORMATIONS
                       #################################################################################################################-->



                    <h2>Mes formations / Diplômes</h2><br/>
                    <h3>formation 1</h3>
                    <div class="form-group">
                        <label for="form_title1">Titre de la formation</label>
                        <input type="text" class="form-control" id="form_title1" placeholder="Licence informatique" name="form_title1">
                    </div>
                    <div class="form-group">
                        <label for="form_lieu1">lieu de la formation</label>
                        <input type="text" class="form-control" id="form_lieu1" placeholder="Azeroth, 1 rue d'Ogrimmar 99 999" name="form_lieu1">
                    </div>
                    <div class="form-group">
                        <label for="form_etablissement1">Établissement de la formation</label>
                        <input type="text" class="form-control" id="form_etablissement1" placeholder="Paris V, la Sorbonne" name="form_etablissement1">
                    </div>
                    <div class="form-group">
                        <label for="form_state1">Etat</label>
                        <select class="form-control" id="form_state1" name="form_state1">
                            <option value='acquis'>Acquis</option>
                            <option value='en cours'>En cours...</option>
                            <option value='a venir'>À venir...</option>
                        </select>
                    </div>
                    <div>
                        <label for="start_date_form1">Date de début</label>
                        <input id="start_date_form1" type="date" value="2015-01-01" name="start_date_form1">

                    </div>
                    <div>
                        <label for="end_date_form1">Date de fin</label>
                        <input id="end_date_form1" type="date" value="2016-01-01" name="end_date_form1">

                    </div>
                    </br>
                    <hr/>
                    </br>
                    <h3>formation 2</h3>
                    <div class="form-group">
                        <label for="form_title2">Titre de la formation</label>
                        <input type="text" class="form-control" id="form_title2" placeholder="Licence informatique" name="form_title2">
                    </div>
                    <div class="form-group">
                        <label for="form_lieu2">lieu de la formation</label>
                        <input type="text" class="form-control" id="form_lieu2" placeholder="Azeroth, 1 rue d'Ogrimmar 99 999" name="form_lieu2">
                    </div>
                    <div class="form-group">
                        <label for="form_etablissement2">Établissement de la formation</label>
                        <input type="text" class="form-control" id="form_etablissement2" placeholder="Paris V, la Sorbonne" name="form_etablissement2">
                    </div>
                    <div class="form-group">
                        <label for="form_state2">Etat</label>
                        <select class="form-control" id="form_state2" name="form_state2">
                            <option value='acquis'>Acquis</option>
                            <option value='en cours'>En cours...</option>
                            <option value='a venir'>À venir...</option>
                        </select>
                    </div>
                    <div>
                        <label for="start_date_form2">Date de début</label>
                        <input id="start_date_form2" type="date" value="2015-01-01" name="start_date_form2">
                    </div>
                    <div>
                        <label for="end_date_form2">Date de fin</label>
                        <input id="end_date_form2" type="date" value="2016-01-01" name="end_date_form2">
                    </div>
                    </br>
                    <hr/>
                    </br>
                    <h3>formation 3</h3>
                    <div class="form-group">
                        <label for="form_title3">Titre de la formation</label>
                        <input type="text" class="form-control" id="form_title3" placeholder="Licence informatique" name="form_title3">
                    </div>
                    <div class="form-group">
                        <label for="form_lieu3">lieu de la formation</label>
                        <input type="text" class="form-control" id="form_lieu3" placeholder="Azeroth, 1 rue d'Ogrimmar 99 999" name="form_lieu3">
                    </div>
                    <div class="form-group">
                        <label for="form_etablissement3">Établissement de la formation</label>
                        <input type="text" class="form-control" id="form_etablissement3" placeholder="Paris V, la Sorbonne" name="form_etablissement3">
                    </div>
                    <div class="form-group">
                        <label for="form_state3">Etat</label>
                        <select class="form-control" id="form_state3" name="form_state3">
                            <option value='acquis'>Acquis</option>
                            <option value='en cours'>En cours...</option>
                            <option value='a venir'>À venir...</option>
                        </select>
                    </div>
                    <div>
                        <label for="start_date_form3">Date de début</label>
                        <input id="start_date_form3" type="date" value="2015-01-01" name="start_date_form3">
                    </div>
                    <div>
                        <label for="end_date_form3">Date de fin</label>
                        <input id="end_date_form3" type="date" value="2016-01-01" name="end_date_form3">
                    </div>
                    </br>
                    <hr/>
                    </br>
                    <h3>formation 4</h3>
                    <div class="form-group">
                        <label for="form_title4">Titre de la formation</label>
                        <input type="text" class="form-control" id="form_title4" placeholder="Licence informatique" name="form_title4">
                    </div>
                    <div class="form-group">
                        <label for="form_lieu4">lieu de la formation</label>
                        <input type="text" class="form-control" id="form_lieu4" placeholder="Azeroth, 1 rue d'Ogrimmar 99 999" name="form_lieu4">
                    </div>
                    <div class="form-group">
                        <label for="form_etablissement4">Établissement de la formation</label>
                        <input type="text" class="form-control" id="form_etablissement4" placeholder="Paris V, la Sorbonne" name="form_etablissement4">
                    </div>
                    <div class="form-group">
                        <label for="form_state4">Etat</label>
                        <select class="form-control" id="form_state4" name="form_state4">
                            <option value='acquis'>Acquis</option>
                            <option value='en cours'>En cours...</option>
                            <option value='a venir'>À venir...</option>
                        </select>
                    </div>
                    <div>
                        <label for="start_date_form4">Date de début</label>
                        <input id="start_date_form4" type="date" value="2015-01-01" name="start_date_form4">
                    </div>
                    <div>
                        <label for="end_date_form4">Date de fin</label>
                        <input id="end_date_form4" type="date" value="2016-01-01" name="end_date_form4">
                    </div>
                    </br>
                    </br>
                    <hr/>
                    </br>
                    </br>
                    <!--################################################################################################################
                                                                            EXPERIENCES
                       #################################################################################################################-->
                    <h2>Mes expériences</h2><br/>
                    <h3>expérience 1</h3>
                    <div class="form-group">
                        <label for="know_title1">Titre de l'expérience</label>
                        <input type="text" class="form-control" id="know_title1" placeholder="Développeur J2E" name="know_title1">
                    </div>
                    <div class="form-group">
                        <label for="know_lieu1">lieu de l'expérience</label>
                        <input type="text" class="form-control" id="know_lieu1" placeholder="Azeroth, 1 rue d'Ogrimmar 99 999" name="know_lieu1">
                    </div>
                    <div class="form-group">
                        <label for="know_societe1">Société</label>
                        <input type="text" class="form-control" id="know_societe1" placeholder="Microsoft" name="know_societe1">
                    </div>
                    <div class="form-group">
                        <label for="know_comm1">Commentaire</label>
                        <input type="text" class="form-control" id="know_comm1" placeholder="Gestion des missions" name="know_comm1">
                    </div>
                    <div>
                        <label for="start_date_know1">Date de début</label>
                        <input id="start_date_know1" type="date" value="2015-01-01" name="start_date_know1">
                        <span class="result"></span>
                    </div>
                    <div>
                        <label for="end_date_know1">Date de fin</label>
                        <input id="end_date_know1" type="date" value="2016-01-01" name="end_date_know1">
                        <span class="result"></span>
                    </div>
                    </br>
                    <hr/>
                    </br>
                    <h3>expérience 2</h3>
                    <div class="form-group">
                        <label for="know_title2">Titre de l'expérience l'expérience</label>
                        <input type="text" class="form-control" id="know_title2" placeholder="Développeur J2E" name="know_title2">
                    </div>
                    <div class="form-group">
                        <label for="know_lieu2">lieu de l'expérience</label>
                        <input type="text" class="form-control" id="know_lieu2" placeholder="Azeroth, 1 rue d'Ogrimmar 99 999" name="know_lieu2">
                    </div>
                    <div class="form-group">
                        <label for="know_societe2">Société</label>
                        <input type="text" class="form-control" id="know_societe2" placeholder="Microsoft" name="know_societe2">
                    </div>
                    <div class="form-group">
                        <label for="know_comm2">Commentaire</label>
                        <input type="text" class="form-control" id="know_comm2" placeholder="Gestion des missions" name="know_comm2">
                    </div>
                    <div>
                        <label for="start_date_know2">Date de début</label>
                        <input id="start_date_know2" type="date" value="2015-01-01" name="start_date_know2">
                        <span class="result"></span>
                    </div>
                    <div>
                        <label for="end_date_know2">Date de fin</label>
                        <input id="end_date_know2" type="date" value="2016-01-01" name="end_date_know2">
                        <span class="result"></span>
                    </div>
                    </br>
                    <hr/>
                    </br>
                    <h3>expérience 3</h3>
                    <div class="form-group">
                        <label for="eexpitle3">Titre de l'expérience</label>
                        <input type="text" class="form-control" id="know_title3" placeholder="Développeur J2E" name="know_title3">
                    </div>
                    <div class="form-group">
                        <label for="know_lieu3">lieu de l'expérience</label>
                        <input type="text" class="form-control" id="know_lieu3" placeholder="Azeroth, 1 rue d'Ogrimmar 99 999" name="know_lieu3">
                    </div>
                    <div class="form-group">
                        <label for="know_societe3">Société</label>
                        <input type="text" class="form-control" id="know_societe3" placeholder="Microsoft" name="know_societe3">
                    </div>
                    <div class="form-group">
                        <label for="know_comm3">Commentaire</label>
                        <input type="text" class="form-control" id="know_comm3" placeholder="Gestion des missions" name="know_comm3">
                    </div>
                    <div>
                        <label for="start_date_know3">Date de début</label>
                        <input id="start_date_know3" type="date" value="2015-01-01" name="start_date_know3">
                        <span class="result"></span>
                    </div>
                    <div>
                        <label for="end_date_know3">Date de fin</label>
                        <input id="end_date_know3" type="date" value="2016-01-01" name="end_date_know3">
                        <span class="result"></span>
                    </div>
                    </br>
                    <hr/>
                    </br>
                    <h3>expérience 4</h3>
                    <div class="form-group">
                        <label for="know_title4">Titre de l'expérience</label>
                        <input type="text" class="form-control" id="know_title4" placeholder="Développeur J2E" name="know_title4">
                    </div>
                    <div class="form-group">
                        <label for="know_lieu4">lieu de l'expérience</label>
                        <input type="text" class="form-control" id="know_lieu4" placeholder="Azeroth, 1 rue d'Ogrimmar 99 999" name="know_lieu4">
                    </div>
                    <div class="form-group">
                        <label for="know_societe4">Société</label>
                        <input type="text" class="form-control" id="know_societe4" placeholder="Microsoft" name="know_societe4">
                    </div>
                    <div class="form-group">
                        <label for="know_comm4">Commentaire</label>
                        <input type="text" class="form-control" id="know_comm4" placeholder="Gestion des missions" name="know_comm4">
                    </div>
                    <div>
                        <label for="start_date_know4">Date de début</label>
                        <input id="start_date_know4" type="date" value="2015-01-01" name="start_date_know4">
                        <span class="result"></span>
                    </div>
                    <div>
                        <label for="end_date_know4">Date de fin</label>
                        <input id="end_date_know4" type="date" value="2016-01-01" name="end_date_know4">
                        <span class="result"></span>
                    </div>
                    <br/>
                    <br/>
                </form>
                <button class="btn-info col-md-12" form="info_p" type="submit"  value="Submit">Choisir mon modèle de CV</button>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</div>
