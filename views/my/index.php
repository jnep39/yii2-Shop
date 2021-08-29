<?php

    use yii\bootstrap\Html;

    print_r($firstVar);
    //print_r($firstVar['text']);
?>

<div id="d_12" style="width: 100%; height: 400px; display: flex; align-items: center; justify-content: center; background: #c1c1c1" >

    <?= Html::beginForm(['index'], 'post', ['id' => 'e45']) ?>
        <input type="text" id="text" name="text" placeholder="input">
        <input type="submit" value="submit">
    <?= Html::endForm() ?>

    <!--<form action="http://yii/web/index.php?r=my/index" method="post">
        <input type="text" placeholder="input">
        <input type="submit" value="submit">
    </form>-->
</div>

<script> 
    alert(34434);
    let rr = document.getElementById('d_12');
    console.log(rr);
    rr.append('skhushosuihrhbu');
</script>