<?php require_once 'header.php';
        require_once 'inc/manager-db.php';
        $idCountry = $_GET['idCountry'];
        $continent = $_GET['continent'];
        //$capital = $_GET['capital'];
        $ville = getVilleByCountry($idCountry);
        $paysC = getCountriesByContinent($continent);
        $pays = getCountryById($idCountry);
        $capitale = getCapitalNameByIdCity($pays->Capital);
        ?>
    </div>
    <h1>Informations du pays</h1>
    <div class="ui grid centered">
    <div class="fourteen wide column">
    <table class="ui celled table">
        <a class="ui blue ribbon label">Description</a>
        <tr>
            <th>Continent</th>
            <th>Pays</th>
            <th>Capitale</th>
            <th>Population du pays</th>
        </tr>
        <tr>
            <td><?php echo $continent ?></td>
            <td><?php echo $pays->Name ?></td>
            <td><?php echo $capitale ?></td>
            <td><?php echo $pays->Population ?></td>
        </tr>
    </table>

    <table class="ui celled table">
        <a class="ui red ribbon label">Ville(s) du pays</a>
        <tr>
            <th>Nom</th>
            <th>District</th>
            <th>Population</th>
            <?php
            foreach($ville as $keys=>$values){?>
                <tr>
                    <td><?php echo $ville[$keys]->Name ?></td>
                    <td><?php echo $ville[$keys]->District ?></td>
                    <td><?php echo $ville[$keys]->Population ?></td>
                </tr> <?php } ?>

        </tr>
    </table>
    </div>
    </div>
    <p></p>
<?php
require_once 'javascripts.php';
require_once 'footer.php';?>