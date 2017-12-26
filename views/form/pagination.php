<?php
/**
 * Created by PhpStorm.
 * User: tghelere
 * Date: 26/12/17
 * Time: 02:15
 */

use \yii\widgets\LinkPager;
?>
<h1>Pessoas</h1>
<hr>

<ul>
    <?php foreach($pessoas as $pessoa): ?>
        <li>
            <?= $pessoa->nome ." - ". $pessoa->email?><br>
            <small><?= $pessoa->cidade ." - (". $pessoa->estado . ")" ?></small>
        </li>
    <?php endforeach;?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination ]) ?>