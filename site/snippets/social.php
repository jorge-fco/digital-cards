<ol class="card__footer__social" role="social">
	<?php if($page->parent()->facebook() != '') : ?>
		<li role="option">
			<a href="<?= $page->parent()->facebook() ?>" target="_blank" rel="nofollow noreferrer" tabindex="0" role="link">
				<?php snippet('icons/facebook'); ?>
			</a>
		</li>
	<?php endif ?>

	<?php if($page->parent()->instagram() != '') : ?>
		<li role="option">
			<a href="<?= $page->parent()->instagram() ?>" target="_blank" rel="nofollow noreferrer" tabindex="0" role="link">
				<?php snippet('icons/instagram'); ?>
			</a>
		</li>
	<?php endif ?>

	<?php if($page->parent()->linkedin() != '') : ?>
		<li role="option">
			<a href="<?= $page->parent()->linkedin() ?>" target="_blank" rel="nofollow noreferrer" tabindex="0" role="link">
				<?php snippet('icons/linkedin'); ?>
			</a>
		</li>
	<?php endif ?>
</ol>