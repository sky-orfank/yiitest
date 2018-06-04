<?php 
use yii\widgets\LinkPager;
?>

<div class="col-lg-1 col-offset-6 centered">
   
  <p><a href="?r=product">Список продуктов</a></p>
  <p><a href="?r=product/add">Добавить продукт</a></p>
	<p><a href="?r=order">Список покупок</a></p>


	<h3>Список покупок</h3>

    <table class="table">
      <thead>
        <tr>
          <th><a id="sort_by_id" href="/?r=order&order-by-id=asc">ID Заявки</a></th>
          <th>Продукт</th>
        </tr>
      </thead>
      <tbody>

	    <?php foreach ($orders as $order) { ?>
        <tr>
          <td><?=$order->id ?></td>
          <td><?=$order->products->title ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

	<?= LinkPager::widget([
	 'pagination' => $pages,
	]); ?>



</div>			
