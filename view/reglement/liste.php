<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
    <title>Reglement</title>
</head>

<body>
    <div>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" href="facture">Gestion de factures</a></li>
            <li class="nav-item "><a class="nav-link" href="reglement">Gestion de reglements</a></li>
        </ul>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class=" col-md-6">
                <div class="card">
                    <div class="card-header">Liste des Règlements</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>Id</td>
                                <td>Date</td>
                                <td>Facture</td>

                            </tr>
                            <?php
                            require_once '../../model/reglementdb.php';
                            $reglements = listeReglement()->fetchAll();
                            foreach ($reglements as $key => $value) {
                                echo "<tr>
                                <td>" . $value[0] . "</td>
                                <td>$value[1]</td>
                                <td>$value[2]</td>
                            </tr>";
                            }
                            ?>
                        </table>
                    </div>
                    <div class="card-footer">DITI 4</div>
                </div>
            </div>

            <div class=" col-md-6">
                <div class="card">
                    <div class="card-header"> Formulaire de gestion de Reglement</div>
                    <div class="card-body">
                        <form action="reglementController" method="POST">
                            <div class="mb-3">
                                <label class="form-label" for="date">Date de facturation</label>
                                <input class="form-control" type="date" name="date" id="date" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="facture">Facture</label>
                                <select class="form-select" aria-label="Default select example" id="idF" name="idF">
                                    <option value="">Faites votre choix</option>
                                    <?php
                            require_once '../../model/facturedb.php';
                            $factures= listeFactureNonRegele()->fetchAll();
                            foreach($factures as $key => $value){
                                echo"<option value='".$value[0]."'>$value[0]</option>";                            }
                            ?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         ion>

                                </select>
                            </div>

                            <div class="mb-3">
                                <input class="btn btn-success" type="submit" name="Envoyer" id="envoyer"/>
                                <input class="btn btn-danger" type="reset" name="reset" id="annuler" value="Annuler" />
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">DITI</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>