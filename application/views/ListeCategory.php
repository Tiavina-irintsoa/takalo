<div id="content">
<div id="maincontent">
    <div id="title">
        Liste des categories
    </div>
    <div id="data">
        <table border="0">
            <tr>
                <td>
                    Nom
                </td>
                <td>
                    Supprimer
                </td>
                <td>
                    Modifier
                </td>
            </tr>
            <?php
                foreach($liste as $category){ ?>
                    <tr>
                        <td>
                            <?php
                                echo $category["nom"];
                            ?>
                        </td>
                        <td>
                            <a href="<?php echo site_url("Admin/delete").'?id='.$category["idcategory"]; ?>">
                                Supprimer
                            </a>
                        </td>
                        <td>
                            <a href="<?php echo site_url("Admin/updatecateg").'?id='.$category['idcategory']; ?>">
                                Modifier
                            </a>
                        </td>
                    </tr>
            <?php    }
            ?>
        </table>
    </div>
</div>
</div>
