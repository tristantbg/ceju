<section id="<?= tagslug($data->sectiontitle()->html()) ?>" class="fl c6 pr2">
  <div class="section-title nbt">
  		<?= $data->sectiontitle()->html() ?>
  </div>
  <div class="fl c12 py1">
  	<?= $data->texta()->kt() ?>
  </div>
  <div class="fl c12 bt bb x xas pb2">
  	<div class="fl c6 pt2 pr2 pb4"><?= thumb($data->imagea()->toFile(), array('width'=>800)) ?></div>
  	<div class="fl c6 bl pt2 pl2"><small><?= $data->textb()->kt() ?></small></div>
  </div>
</section>