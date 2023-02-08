<div id="content">
<div id="maincontent">
    <div id="title">
        Historique d'Appartenance de <?php
         echo $objet; ?>
    </div>
    <div id="data">
        <table border="0">
            <tr>
                <td>
                    Nom
                </td>
                <td>
                    Date echange
                </td>
            </tr>
            <?php
                foreach($liste as $histo){ ?>
                    <tr>
                        <td>
                            <?php
                                echo $histo["username"];
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $histo['dateechange'];
                            ?>
                        </td>
                    </tr>
            <?php    }
            ?>
        </table>
    </div>
</div>
</div>
