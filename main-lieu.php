<div class="container-fluid">
    <div class="ml-auto mr-auto  block-forms" style="width:90vw;">
        <header class="row bg-warning">
            <div class="col-md-10 col-lg-10 l-auto mr-auto">
                <h1 class="text-center">Liste des lieux </h1>
            </div>
        </header>
        <section class="row bg-dger-white bd-dger-white">
                    <section class=" container-fluid  mt-2">
                        <!-- menu des onglets -->
                        <ul class="nav nav-tabs nav-justify nav-justified" role="tablist">
                            <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#pays">Pays</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">Ville</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#quartier">quartier</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#zone">Zone</a>
                            </li>
                        </ul>

                        <!-- Tcontenue des onglets -->
                        <div class="tab-content container-fluid">
                            <div id="pays" class="container tab-pane active "><br>
                                <h3>Liste Pays</h3>
                                <table class="table table-hover table-md content-justify-center table-responsive ">
                                    <thead class="thead-dark table-hover">
                                        <tr>
                                            <th scope="col">N</th>
                                            <th scope="col">Nom Pays</th>
                                            <th scope="col">longitude</th>
                                            <th scope="col">Latitude</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $i = 1;
                                            $db= Database::connect(); //connection de base de données
                                            $recupPays = $db->query('SELECT * FROM  pays  ORDER BY nomPays');
                                            while($pays = $recupPays-> fetch())
                                            {
                                                echo '<tr>
                                                <th scope="row">';
                                                echo $i++;
                                                echo '</td>
                                                <td>';
                                                echo $pays['nomPays'];
                                                echo '</td>
                                                <td>';
                                                echo $pays['lng'];
                                                echo '</td>
                                                <td>';
                                                echo $pays['lat'];
                                                echo '</td>
                                                <td>';
                                                echo $pays['descriptionPays'];
                                                echo '</td>
                                                <td>';
                                                echo $pays['imagePays'];
                                                echo '</td><td>';
                                                if ($_SESSION['idUtilisateur'] == $pays['idUtilisateur'] || $_SESSION['typeUtilisateur'] == 'Super Administrateur') { 
                                                    echo '<a class="btn btn-outline-primary btn-sm ml-1" href="ajout-Pays.php?id='.$pays['idPays'].'&operation=modification"><i class="fas fa-pen" aria-hidden="true"></i></a>';
                                                    echo '<a class="btn btn-outline-danger btn-sm ml-1 text-danger" data-toggle="modal" data-target="#exampleModalCenter'.$pays['idPays'].'"><i class="fa fa-trash" aria-hidden="true"></i></a>';
                                                }
                                            
                                                echo '</td>
                                                <tr>';
                                                echo  '<div class="modal fade" id="exampleModalCenter'.$pays['idPays'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Supprimer un Pays</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Etes vous sur de vouloir supprimer '.$pays['nomPays'].'?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form class="form" action="delete.php" role="form" method="post">
                                                            <input type="hidden" name="id" value="'.$pays['nomPays'].'"/>
                                                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Annuler</button>
                                                            <a href="traitement/delete-pays.php?id='.$pays['idPays'].'" class="btn btn-danger">Supprimer</a> 
                                                        </form>
                                                    </div>

                                                </div>
                                                </div>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                
                                 
                            </div>
                            <div id="menu1" class="container tab-pane fade"><br>
                               
                            <div class="">
                                    <section class="col-md-3"><p>Veuillez choisir un pays</p></section>
                                    <section class="col-md">
                                        <select name="pays" class="custom-select" onchange="recupVilleTableau(this.value)">
                                        <option value="">-- Pays --</option>
                                        <?php
                                             Database::connect();
                                             @$recuppays = $db->query("SELECT * FROM pays ORDER BY nomPays ASC")->fetchAll();
                                             foreach ($recuppays as $pays)
                                             {
                                                 echo '<option value="'.$pays['idPays'] .'">'.$pays['nomPays'] .'</option>';
                                             }      
                                             Database::deconnect();
                                        ?>
                                        </select>
                                    </section>
                                </div>
                                 <h3>Liste des villes</h3>
                                 <table class="table table-striped container-fluid content-justify-center table-responsive ">
                                    <thead class="thead-dark table-hover">
                                        <tr>
                                            <th scope="col">N</th>
                                            <th scope="col">Nom Ville</th>
                                            <th scope="col">longitude</th>
                                            <th scope="col">Latitude</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="listVille">
                                              
                                    </tbody>
                                </table>
                            </div>
                            <div id="quartier" class="container tab-pane fade"><br>
                            <div class="row">
                                    <section class="col-md"><p>Veuillez choisir un lieu principal</p></section>
                                    <section class="col-md form-group">
                                        <label for="pays"> Pays</label>
                                        <select name="pays" class="custom-select" onchange="recupVilleCombo(this.value)">
                                        <option value="">-- Pays --</option>
                                        <?php
                                             Database::connect();
                                             @$recuppays = $db->query("SELECT * FROM pays ORDER BY nomPays ASC")->fetchAll();
                                             foreach ($recuppays as $pays)
                                             {
                                                 echo '<option value="'.$pays['idPays'] .'">'.$pays['nomPays'] .'</option>';
                                             }      
                                             Database::deconnect();
                                        ?>
                                        </select>
                                    </section>
                                    <section class="col-md form-group">
                                        <label for="ville">Ville</label>
                                        <select name="ville" class="custom-select" onchange="recupQuartierTableau(this.value)" id="comboville">
                                        <option value="">-- Ville --</option>
                                        </select>
                                    </section>
                                </div>
                                 <h3>Liste des quartiers</h3>
                                 <table class="table table-striped container-fluid content-justify-center table-responsive ">
                                    <thead class="thead-dark table-hover">
                                        <tr>
                                            <th scope="col">N</th>
                                            <th scope="col">Nom quartier</th>
                                            <th scope="col">longitude</th>
                                            <th scope="col">Latitude</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="listquartier">
                                              
                                    </tbody>
                                </table>
                            </div>
                            
                            <div id="zone" class="container tab-pane fade"><br>
                            <div class="row">
                                    <section class="col-md"><p>Veuillez choisir un lieu principal</p></section>
                                    <section class="col-md form-group">
                                        <label for="pays"> Pays</label>
                                        <select name="pays" class="custom-select" onchange="zRecupVilleCombo(this.value)">
                                        <option value="">-- Pays --</option>
                                        <?php
                                             Database::connect();
                                             @$recuppays = $db->query("SELECT * FROM pays ORDER BY nomPays ASC")->fetchAll();
                                             foreach ($recuppays as $pays)
                                             {
                                                 echo '<option value="'.$pays['idPays'] .'">'.$pays['nomPays'] .'</option>';
                                             }      
                                             Database::deconnect();
                                        ?>
                                        </select>
                                    </section>
                                    <section class="col-md form-group">
                                        <label for="ville">Ville</label>
                                        <select name="ville" class="custom-select" onchange="zRecupQuartierCombo(this.value)" id="Zcomboville">
                                        <option value="">-- Ville --</option>
                                        </select>
                                    </section>
                                    <section class="col-md form-group">
                                        <label for="ville">Quartier</label>
                                        <select name="ville" class="custom-select" onchange="recupZoneTableau(this.value)" id="Zcomboquartier">
                                        <option value="">-- quartier --</option>
                                        </select>
                                    </section>
                                </div>
                                 <h3>Liste des zones</h3>
                                 <table class="table table-striped container-fluid content-justify-center table-responsive ">
                                    <thead class="thead-dark table-hover">
                                        <tr>
                                            <th scope="col">N</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Categorie</th>
                                            <th scope="col">longitude</th>
                                            <th scope="col">Latitude</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="listzone">
                                              
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            </div>
                        </div>
                    </section>
        </section>
    </div>
</div>
<div class="container-fluid principal">
</div>