<html>
<?=$render('header');?>

    <body>
        <form action="<?=$base;?>/addAction" method="post">
            <label for="divida">
                dívida:
                <input type="text" name="divida" required id="divida">
                <br>
            </label>
            <label for="valor">
                valor:
                <input type="number" name="valor" required id="valor">
                <br>
            </label>
            <label for="vencimento">
                vencimento
                <input type="date" name="vencimento" required id="venc">
                <br>
            </label>
            <input type="submit" value="adicionar">
        </form>
<br><br>
        <a href="<?=$base;?>/">voltar</a>
        
<?=$render('footer');?>
        
</html>