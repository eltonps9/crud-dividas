<html>
<?=$render('header');?>

    <body>
        <form action="<?=$base;?>/update/<?=$usuario['id'];?>" method="post">
            <label for="divida">
                dívida:
                <input type="text" value="<?=$usuario['nome'];?>" name= "divida" id="divida">
                <br>
            </label>
            <label for="valor">
                valor:
                <input type="number" value="<?=$usuario['valor'];?>" name= "valor" id="valor">
                <br>
            </label>
            <label for="vencimento">
                vencimento
                <input type="date" value="<?=$usuario['vencimento'];?>" name= "venc" id="venc">
                <br>
            </label>
            <input type="submit" value="adicionar">
        </form>
<br><br>
        <a href="<?=$base;?>/">voltar</a>
        
<?=$render('footer');?>
        
</html>