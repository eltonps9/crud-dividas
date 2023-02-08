<?php $render('header'); ?>
<link rel="stylesheet" href="<?=$base;?>/css/homeStyle.css">
<html>
    
    <body>
    <h1>DIVIDAS</h1>
        <a href="<?=$base;?>/new">Adicionar</a>
        
    </form>
    <hr>
        <?php foreach($divida as $dividas):;?>
        <nav class="container">
            <div class="divida">
            <h3><?=$dividas['nome'];?></h3>
            </div>
            <div class="interno">
                <div class="data">
                    <div class="dataA">
                        <h4><?=$dividas['vencimento'];?>| faltam 5 dias</h4>
                    </div>
                </div>
                <div class="infor">
                    <strong>compra feita no mercado industrial...</strong>
                    <div class="valor">
                        <p><?=$dividas['valor'];?></p>
                    </div>
                </div>
                <div class="acoes">
                    <a href="<?=$base;?>/deletar/<?=$dividas['id'];?>" id="del" onclick="return confirm('excluir nota?')">EXCLUIR</a>
                    <a href="<?=$base;?>/update/<?=$dividas['id'];?>" id="up">ATUALIZAR</a>
                </div>
            </div>
        </nav>
        <?php endforeach;?>

    
    
<?php $render('footer');?>