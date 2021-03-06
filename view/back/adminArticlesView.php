<?php $css='public/adminedit.css' ?>
<?php $title='Articles - BO Astier de Villatte' ?>

<?php ob_start(); ?>
    <div class="container_flex">
        <div class="create">
            <p class=titre>Créer un article</p>

            <form method="post" enctype="multipart/form-data">
                <p>
                    <label for="designation">Designation <span class="length"> (max 30 caractères)</span></label>
                    <br/><input type="text" name="designation" maxlength="30" class="short_input"/>
                </p>
                <p>
                    <label for="title_desc">Titre de la description <span class="length"> (max 50 caractères)</span></label>
                    <br/><input type="text" name="title_desc" maxlength="50" class="mid_input"/>
                </p>
                <p>
                    <label for="description_art">Description</label>
                    <br/><textarea type="text" name="description_art" cols="70" rows="15" maxlength="1050"></textarea>
                </p>
                <input type="hidden" name="MAX_FILE_SIZE"/>
                <p><label>Image d'ensemble <span class="length"> (10Mo max)</span></label><input type="file" name="images[]" multiple/></p>
                <p><label>Image article <span class="length"> (10Mo max)</span></label><input type="file" name="images[]" multiple/></p>
                <p>
                    <select name="id_categories">
                        <option>CATEGORIE ASSOCIÉE</option>
                        <?php foreach($getCats as $choix_cat): ?>
                        <option value="<?= $choix_cat->id(); ?>"><?= $choix_cat->nameCat(); ?></option>
                        <?php endforeach ?>
                    </select>
                </p>
                <input type="submit" name="send-art" value="valider" class ="button_add"/>
            </form>
            <div class="error-msg"><?= (isset($error)) ? $error : '' ?></div>
        </div>

        <div class="update_delete">
            <p class=titre>Liste des articles</p>
            <table>
                <?php foreach($getArts as $getArt): ?>
                <tr>
                    <td><label for="id" class="lab_up_del"><?= $getArt->designation(); ?></label></td>
                    <td>
                        <a href="admin.php?page=updateArticlesView&id=<?=$getArt->id();?>"><input type="submit" name="update" value="modifier" class="button"></a>
                    </td>
                    <td>
                        <form method="post" action="admin.php?page=delete&id=<?=$getArt->id();?>" >
                            <input type="submit" name="delete_art" value="supprimer" class="button_delete"/>
                        </form>
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require ('template/templateAdmin.php') ?>
