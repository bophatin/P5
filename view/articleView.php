<?php $css='public/article.css'; ?>
<?php $title='Article - Astier de Villatte'; ?>

<?php ob_clean(); ?>
    <div id="wrapper-section-1">
		<div class="container-section-1">
        <div class="container-sec1-left"><img src="<?= $post->imgBig(); ?>"></div>
		<div class="container-sec1-right">
			<div class="background-right">
				<div>
					<div class="title-right"><?= $post->designation(); ?></div>
				</div>
			</div>
		</div>
		</div>
	</div>

    <div id="wrapper-section-2">
        <div class="container-section-2">
            <div class="container-sec2-left">
                <div class="desc-left">
                    <p class="title-left">Une eau signée Christophe Raynaus et Françoise Caron</p>
                    <p class=txt-left><?= $post->descriptionArt(); ?></p>
                    <div class="infos-left">
                        <p class="ml-left"><?= $post->volume(); ?>ml</p>
                        <p class="price-right"><?= $post->prix(); ?> €</p>
                    </div>
                </div>
            </div>
            <div class="container-sec2-right">
                <img src="<?= $post->imgArt2(); ?>" class="img-splash">
            </div>
        </div>
    </div>

    <div id="wrapper-section-3">
        <div class="container-sec3">
            <div class="bloc-sec3">
                <p class="title-bloc">01 Senteur</p>
                <p class="txt-bloc"><?= $post->bloc01(); ?></p>
            </div>
            <div class="bloc-sec3">
                <p class="title-bloc">02 Composition</p>
                <p class="txt-bloc"><?= $post->bloc02(); ?></p>
            </div>
            <div class="bloc-sec3">
                <p class="title-bloc">03 Caractere</p>
                <p class="txt-bloc"><?= $post->bloc03(); ?></p>
            </div>
        </div>
    </div>

    <div id="wrapper-section-4">
        <div class="container-sec4">
            <div class="container-img-sec4">
                <div class="img-sec4"><img src ="public/img/article-eaux.jpg"></div>
            </div>
            <div class="container-title-sec4">
                <div class="title-sec4">Eaux de Cologne</div>
            </div>
        </div>
    </div>
<?php $content= ob_get_clean(); ?>

<?php require ('view/templatePage.php'); ?>