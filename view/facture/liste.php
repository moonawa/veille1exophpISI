<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
    <title>Facturation</title>
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
                    <div class="card-header">Liste des Factures</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>Id</td>
                                <td>Date</td>
                                <td>Consommation</td>
                                <td>Prix</td>
                                <td>Etat Facture</td>
                            </tr>
                            <?php
                            require_once '../../model/facturedb.php';
                            $factures= listeFacture()->fetchAll();
                            foreach($factures as $key => $value){
                                echo"<tr>
                                <td>".$value[0]."</td>
                                <td>$value[1]</td>
                                <td>$value[2]</td>
                                <td>$value[3]</td>
                                <td>$value[4]</td>
                            </tr>";                            }
                            ?>
                        </table>
                    </div>
                    <div class="card-footer">DITI 4</div>    
                </div>
            </div>

        
            <div class=" col-md-6">
                <div class="card">
                    <div class="card-header"> Formulaire de gestion des Factures</div>
                    <div class="card-body">
                        <form action="factureController" method="POST">
                            <div class="mb-3">
                                <label  class="form-label" for="date">Date de facturation</label>
                                <input class="form-control" type="date" name="date" id="date"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="prix">Prix de la facture</label>
                                <input class="form-control" type="number" name="prix" id="prix"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="consommation">Consommation de la facture</label>
                                <input class="form-control" type="number" name="consommation" id="consommation"/>
                            </div>
                            
                            <div  class="mb-3">  
                                <input class="btn btn-success" type="submit" name="Envoyer" id="envoyer" />
                                <input class="btn btn-danger" type="reset" name="reset" id="annuler" />
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