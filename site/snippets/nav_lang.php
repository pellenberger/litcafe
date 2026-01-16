<div id="lang">
	<ul class="flex">
	<?php foreach($kirby->languages() as $language): ?>
	<li<?php e($kirby->language() == $language, ' class="active"') ?>>
		<a href="<?= $page->url($language->code()) ?>">
		<?= html($language->code()) ?>
		</a>
	</li>
	<?php endforeach ?>
	</ul>
</div>

