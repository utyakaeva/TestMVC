<p>Главная страница</p>
<?php foreach ($zayavki as $val):?>
<h3><?php echo $val['title']; ?></h3>
<p><? echo $val['name']; ?></p>
<hr>
<?php endforeach;?>