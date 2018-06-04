<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Handles the creation of table `orders`.
 */
class m180604_083623_create_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('orders', [
            'id' => $this->primaryKey(),
            'product_id' => Schema::TYPE_INTEGER,
        ]);
        $this->addForeignKey(
            'productId', 'orders', 'product_id', 'products', 'id', 'SET NULL', 'CASCADE'
        );

        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('orders');
    }
}
