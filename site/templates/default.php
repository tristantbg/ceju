<?php snippet('header') ?>

<?php $thumbsize = 800; ?>

<div id="sections">
	
	<section class="x xas" md="db">
		<?php if ($page->imagea()->isNotEmpty()): ?>
			<div class="fl c3" md="c6 co3 mb4">
				<span class="colorize">
					<?= thumb($page->imagea()->toFile(), array('width'=>$thumbsize)) ?>
				</span>
			</div>
		<?php endif ?>
		<div class="fl c6 px3" md="c12 p0 mb4">
			<section id="<?= tagslug('à propos') ?>" class="bx pxs mb3" md="mb4">
				<?= $page->text()->kt() ?>
			</section>

			<section id="<?= tagslug('pour qui?') ?>" md="mb4">
				<div class="section-title">
					Pour qui?
				</div>
				<div class="fl c6 pts prs"><small><?= $page->qui1()->kt() ?></small></div>
				<div class="fl c6 bl pl2 pts prs mb1 lh1">
					<?php $alpha = range('A','Z') ?>
					<?php foreach($page->qui2()->toStructure() as $key => $value): ?>
						<div class="fl c1 tiny"><?= $alpha[$key] ?></div>
						<div class="fl c11 cf"><small><?= $value->text()->html() ?></small></div>
					<?php endforeach ?>
				</div>
				<div class="fl c12 by pys"><small><?= $page->qui3()->kt() ?></small></div>
			</section>
		</div>
		<?php if ($page->imageb()->isNotEmpty()): ?>
			<div class="fl c3 x xafe" md="c6 co3">
				<span class="colorize">
					<?= thumb($page->imageb()->toFile(), array('width'=>$thumbsize)) ?>
				</span>
			</div>
		<?php endif ?>
	</section>

	<section class="bt">
		<section id="<?= tagslug($page->s2title()) ?>" class="fl c6 pr2" md="c12 p0">
			<div class="section-title nbt">
				<?= $page->s2title()->html() ?>
			</div>
			<div class="fl c12 py1">
				<?= $page->s2texta()->kt() ?>
			</div>
			<div class="fl c12 bt bb x xas pb2">
				<?php if ($page->s2image()->isNotEmpty()): ?>
					<div class="fl c6 pt2 pr2 pb4">
						<span class="colorize">
							<?= thumb($page->s2image()->toFile(), array('width'=>$thumbsize)) ?>
						</span>
					</div>
				<?php endif ?>
				<div class="fl c6 bl pt2 pl2"><small><?= $page->s2textb()->kt() ?></small></div>
			</div>
		</section>

		<section id="<?= tagslug($page->s3title()) ?>" class="fl bl c6 pl2" md="c12 p0 bn bt">
			<div class="section-title nbt">
				<?= $page->s3title()->html() ?>
			</div>
			<div class="fl c12 py1">
				<?= $page->s3texta()->kt() ?>
			</div>
			<div class="fl c12 bt bb x xas pb2">
				<?php if ($page->s3image()->isNotEmpty()): ?>
					<div class="fl c6 pt2 pr2 pb4">
						<span class="colorize">
							<?= thumb($page->s3image()->toFile(), array('width'=>$thumbsize)) ?>
						</span>
					</div>
				<?php endif ?>
				<div class="fl c6 bl pt2 pl2"><small><?= $page->s3textb()->kt() ?></small></div>
			</div>
		</section>
	</section>

	<section id="<?= tagslug($page->s4title()) ?>" class="fl c6 co3 bb" md="c12 ml0">
		<div class="section-title">
			<?= $page->s4title()->html() ?>
		</div>
		<div class="fl c12 py1">
			<?= $page->s4texta()->kt() ?>
		</div>
		<?php if ($page->s4image()->isNotEmpty()): ?>
			<div class="fl c8 co2">
				<span class="colorize">
					<?= thumb($page->s4image()->toFile(), array('width'=>$thumbsize)) ?>
				</span>
			</div>
		<?php endif ?>
		<div class="fl c12 pt1 pb2">
			<small><?= $page->s4textb()->kt() ?></small>
		</div>
	</section>

	<section class="bt x xas" md="db">
		<section id="<?= tagslug($page->s5title()) ?>" class="fl c6 pr2" md="c12 p0">
			<div class="section-title nbt">
				<?= $page->s5title()->html() ?>
			</div>
			<div class="fl c12 py1">
				<?= $page->s5texta()->kt() ?>
			</div>
			<div class="fl c12 by py2">
				<?php if ($page->s5image()->isNotEmpty()): ?>
					<div class="fl c4 co4">
						<span class="colorize">
							<?= thumb($page->s5image()->toFile(), array('width'=>$thumbsize)) ?>
						</span>
					</div>
				<?php endif ?>
			</div>
			<div class="fl c12 bb py2 pl2 col2" md="pl0"><small><?= $page->s5textb()->kt() ?></small></div>
		</section>

		<section id="<?= tagslug($page->s6title()) ?>" class="fl bl c6 pl2 x xas" md="c12 p0 bn bt">
			<div class="fl c12 bb">
				<div class="section-title nbt">
					<?= $page->s6title()->html() ?>
				</div>
				<div class="fl c6 py1 pr2" md="c12 bb">
					<?= $page->s6texta()->kt() ?>
				</div>
				<div class="fl c6 py1 bl h90" md="c6 co3 bn py2">
					<?php if ($page->s6image()->isNotEmpty()): ?>
						<div class="fl c12 px2 pts">
							<span class="colorize">
								<?= thumb($page->s6image()->toFile(), array('width'=>$thumbsize)) ?>
							</span>
						</div>
					<?php endif ?>
					<div class="fl c12"><small><?= $page->s6textb()->kt() ?></small></div>
				</div>
			</div>
		</section>
	</section>

	<section id="<?= tagslug($page->ctitle()) ?>" class="fl c6 co3 bb" md="c12 ml0">
		<div class="section-title">
			<?= $page->ctitle()->html() ?>
		</div>
		<div class="fl c12 mb1">
			<div class="fl c6 py1 pr1">
				<?= $page->ctexta()->kt() ?>
			</div>
			<div class="fl c6 py1 px1 bl">
				<?= $page->ctextb()->kt() ?>
			</div>
		</div>
		<div class="fl c12 py1 bt">
			<?php foreach($page->contact()->toStructure() as $key => $value): ?>
				<table class="index">
					<tbody>
						<tr>
							<td>
								<span><?= $value->text()->html() ?></span>
							</td>
							<td>
								<p></p>
							</td>
							<td>
								<span><?= $value->value()->kt() ?></span>
							</td>
						</tr>
					</tbody>
				</table>
			<?php endforeach ?>

		</div>
	</section>

	<section id="<?= tagslug($page->ttitle()) ?>" class="fl c6 co3 bb" md="c12 ml0">
		<div class="section-title">
			<?= $page->ttitle()->html() ?>
		</div>
		<div class="fl c12 py1">
			
			<?php foreach($page->tarifs()->toStructure() as $key => $value): ?>
				<table class="index">
					<tbody>
						<tr>
							<td>
								<span><?= $value->text()->html() ?></span>
							</td>
							<td>
								<p></p>
							</td>
							<td>
								<span><?= $value->price()->html() ?></span>
							</td>
						</tr>
					</tbody>
				</table>
			<?php endforeach ?>

		</div>
	</section>

</div>

<?php snippet('footer') ?>