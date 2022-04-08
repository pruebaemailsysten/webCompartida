<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_lucas.css">
    <script src="js/jquery.min.js"></script>
    <title>Página de Lucas</title>
    <script>
        $(function(){
            $("#destroy").click(function(){
                alert("It's all ogre now");
                $ ("body").fadeOut(2000);
                });
            })
    </script>
</head>
<body>
    <header class="w100 flex jcc aic">
        <div class="centered flex jcsb aic">
            <div class="flex column aifs">
                <h1>Un titulo muy interesante</h1>
                <h2>Un subtitulo menos interesante</h2>
            </div>
            <div class="flex column aic">
                <img src="logo.png" alt="Logo" class="logo">
            </div>
        </div>
    </header>
    <div class="w100 flex jcc aic wrap">
        <p>Añadido unos minutos despues<b>Ayy lmao</b></p>
        <div class="w100 flex jcc aic">
            <button id="destroy">Destruir Pagina</button>
        </div>
    </div>
</body>
<footer class="w100 flex jcc aic">
    <div class="w25 flex column aic">
        <h6>Copyright By Me, 2022</h6>
    </div>
</footer>
</html>