<!DOCTYPE html>
<html lang="es">

<head>
    <title>Semáforo</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style_semaforo.css" />
    <link rel="shortcut icon" href="img/semaforo.png" />
</head>

<body>
    <div class="menu" id="menu">
        <label for="inputState">Selecciona el Color</label>
            <select id="inputState" class="form-control" onchange="cambiarFondo(this)">
                <option>-- SELECCIONE --</option>
                <option value="1">VERDE</option>
                <option value="2">AMARILLO</option>
                <option value="3">ROJO</option>
            </select>
    </div>


     <div class="background">
        <div id="box-out">
            <div id="box-inside">
                <div id="luzVerde" class="color1"></div>
                <div id="luzAmarilla" class="color2"></div>
                <div id="luzRoja" class="color3"></div>
            </div>
        </div>
    </div>
    
    

    <footer>

    </footer>

    <script type="text/javascript">
        function cambiarFondo(x) {
            console.log(x.value);
            var verde = document.getElementById('luzVerde');
            var amarillo = document.getElementById('luzAmarilla');
            var rojo = document.getElementById('luzRoja');

            if (x.value == 1) {
                console.log('SOY VERDE')
                verde.style.background = 'radial-gradient(ellipse at center, rgba(180, 227, 145, 1)0%, rgba(97, 196, 25, 1) 50%, rgba(180, 227, 145, 1) 100%)';

                amarillo.style.background = 'radial-gradient(ellipse at center, rgba(248, 197, 96, 0) 0%, rgba(238, 154, 10, 1) 100%)';
                rojo.style.background = 'radial-gradient(ellipse at center, rgba(216, 82, 82, 0) 0%, rgba(200, 70, 78, 1) 100%)';

            } else if (x.value == 2) {
                console.log('SOY  AMARILLO');
                amarillo.style.background = 'radial-gradient(ellipse at center, rgba(252, 234, 187, 1) 0%, rgba(252, 205, 77, 1) 50%, rgba(248, 181, 0, 1) 51%, rgba(251, 223, 147, 1) 100%)';

                verde.style.background = 'radial-gradient(ellipse at center, rgba(118, 217, 65, 0) 0%, rgba(118, 217, 65, 1) 100%)';
                rojo.style.background = 'radial-gradient(ellipse at center, rgba(216, 82, 82, 0) 0%, rgba(200, 70, 78, 1) 100%)';
            } else if (x.value == 3) {
                console.log('SOY ROJO');
                rojo.style.background = 'radial-gradient(ellipse at center, rgba(243, 197, 189, 1) 0%, rgba(232, 108, 87, 1) 50%, rgba(234, 40, 3, 1) 51%, rgba(255, 102, 0, 1) 75%, rgba(199, 34, 0, 1) 100%)';

                amarillo.style.background = 'radial-gradient(ellipse at center, rgba(248, 197, 96, 0) 0%, rgba(238, 154, 10, 1) 100%)';
                verde.style.background = 'radial-gradient(ellipse at center, rgba(118, 217, 65, 0) 0%, rgba(118, 217, 65, 1) 100%)';
            }else{
                amarillo.style.background = 'radial-gradient(ellipse at center, rgba(248, 197, 96, 0) 0%, rgba(238, 154, 10, 1) 100%)';
                verde.style.background = 'radial-gradient(ellipse at center, rgba(118, 217, 65, 0) 0%, rgba(118, 217, 65, 1) 100%)';
                rojo.style.background = 'radial-gradient(ellipse at center, rgba(216, 82, 82, 0) 0%, rgba(200, 70, 78, 1) 100%)';
            }
        }
    </script>
</body>

</html>

//INMARCORTEZ