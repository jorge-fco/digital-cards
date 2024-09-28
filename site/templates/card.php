<?php snippet('header'); ?>

<main class="main">
	<section class="section">
		<article class="card" role="card">
			<!--LOGO-->
			<div class="card__logo">
				<?php if($logo = $page->parent()->logo()->toFile()) : ?>
					<img src="<?= $logo->url(); ?>">
				<?php else: ?>
					<h3><?= $site->title() ?></h3>
				<?php endif ?>
			</div>
			<!--LOGO-->

			<!--PROFILE-->
			<div class="card__profile">
				<?php if($profile = $page->profile()->toFile()) : ?>
					<img src="<?= $profile->url(); ?>">
				<?php endif ?>
			</div>
			<!--PROFILE-->

			<!--NAME-->
			<div class="card__header">
				<h1><?= $page->first_name() ?> <?= $page->last_name() ?></h1>
				<h2><?= $page->position() ?></h2>
			</div>
			<!--NAME-->

			<!--LIST-->
			<div class="card__list">
				<ul role="options">
					<?php if($page->email() != '') : ?>
						<li role="option">
							<a href="mailto:<?= $page->email() ?>?subject=<?= $site->title() ?>"  target="_blank" role="email">
								<data>
									<?php snippet('icons/email'); ?>
								</data>
								<span><?= $page->email() ?></span>
							</a>
						</li>
					<?php endif ?>

					<?php if($page->whatsapp() != '') : ?>
					<li role="option">
						<a href="<?= $whatsapp_url; ?><?= $whatsapp_lada; ?><?= $whatsapp_number; ?>"
							target="_blank" role="whatsapp" aria-label="Chat on WhatsApp">
							<data>
								<?php snippet('icons/whatsapp'); ?>
							</data>
							<span><?= $page->whatsapp() ?></span>
						</a>
					</li>
					<?php endif ?>

					<?php if($page->phone() != '') : ?>
					<li role="option">
						<a href="tel:<?= $page->phone() ?>" target="_blank">
							<data>
								<?php snippet('icons/phone'); ?>
							</data>
							<span>(+<?= $page->lada() ?>)</span><span><?= $page->phone() ?></span>
						</a>
					</li>
					<?php endif ?>
				</ul>
			</div>
			<!--LIST-->

			<!--SAVE BUTTON-->
			<div class="card__button">
				<form action="<?= $page->url(); ?>" method="post" accept-charset="utf-8">
					<button type="submit" class="button" name="donwload" formtarget="_blank" role="save">
						<span>Guadar contacto</span>
					</button>
				</form>
			</div>
			<!--SAVE BUTTON-->

			<!--FOOTER-->
			<div class="card__footer">
				<!--GRID ROW-->
				<div class="card__footer__grid" role="grid">
					<div class="card__footer__column" role="column">
						<address class="card__footer__address">
							<a href="<?= $page->parent()->google_maps() ?>" target="_blank">
								<span><?= $page->parent()->address() ?></span>
								<?= $page->parent()->colony() ?>,
								C.P. <?= $page->parent()->zip_code() ?>,
								<span><?= $page->parent()->city() ?>,
								<?= $page->parent()->state() ?>,
								<?= $page->parent()->country() ?>.</span>
							</a>
						</address>

						<!--SOCIAL MEDIA-->
						<?php snippet('social'); ?>
						<!--SOCIAL MEDIA-->
					</div>

					<!--QR CODE-->
					<div  class="card__footer__column" role="column">
						<div class="card__footer__code">
							<?php if($qr_code = $page->qr_code()->toFile()) : ?>
								<img src="<?= $qr_code->url(); ?>">
							<?php endif ?>
						</div>
					</div>
					<!--QR CODE-->

				</div>
				<!--GRID ROW-->
			</div>
			<!--FOOTER-->

			<!--WEBSITE-->
			<div class="card__website">
				<a href="<?= $page->parent()->website_url() ?>" target="_blank">
					<?php snippet('icons/url'); ?>
					<span><?= $page->parent()->website_text() ?></span>
				</a>
			</div>
			<!--WEBSITE-->
		</article>
	</section>
</main>

<?php snippet('footer'); ?>
<?php snippet('footer.code'); ?>
