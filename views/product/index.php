<?php 
use yii\widgets\LinkPager;
?>

<div class="col-lg-1 col-offset-6 centered">

	<p><a href="?r=product">Список продуктов</a></p>
    <p><a href="?r=product/add">Добавить продукт</a></p>
	<p><a href="?r=order">Список покупок</a></p>


	<h3>Продукты</h3>

    <table class="table">
      <thead>
        <tr>
          <th>ID Продукта</th>
          <th>Наименование</th>
          <th>Стоимость</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>

	    <?php foreach ($products as $product) { ?>
        <tr>
          <td><?=$product->id ?></td>
          <td><?=$product->title ?></td>
          <td><?=$product->cost ?></td>
          <td><a href="?r=order/add&product_id=<?=$product->id ?>">Добавить в список покупок</a></td>
          <td><a href="?r=product/edit&id=<?=$product->id ?>">Редактировать</a></td>
          <td><a href="?r=product/delete&id=<?=$product->id ?>">Удалить</a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

	<?= LinkPager::widget([
	 'pagination' => $pages,
	]); ?>



</div>			
