<?php include("./db.php"); ?>
<?php include("./templates/peticion.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Recordip | Recuerda tú dia a dia facilmente</title>
</head>

<body>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="./img/icono.png" alt="Logo" height="40" class="d-inline-block align-text-top mx-3">
                Recordip
            </a>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="./php/login/inicio_sesion_redes.php">
                    <button class="btn btn-primary w-100" type="button"><strong>Iniciar Sesión</strong></button></a>

            </div>
        </div>
    </nav>
    <div class="body" style="height: fit-content;">
        <div class="descripcion fs-1 z-1">
            <h1 class="text-uppercase"><u>Recordip</u></h1>
            <p class="fs-3">
                ¿Por qué preocuparlowercasete por recordar todas tus tareas pendientes cuando puedes dejar que nuestra
                aplicación
                te libere de esa carga? Descubre la manera más fácil y conveniente de mantener tu vida organizada y en
                orden</p>
        </div>
        <div class="notificacion"><img src="./img/mensaje.png" alt="notificaion"></div>
        <div class="img-chico"><img src="./img/chico.png" alt="chico"></div>

        <svg id="visual" viewBox="0 0 900 450" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
            <rect x="0" y="0" width="900" height="450" fill="#dee0e2"></rect>
            <path
                d="M0 301L8.3 304.2C16.7 307.3 33.3 313.7 50 317.3C66.7 321 83.3 322 100 320.5C116.7 319 133.3 315 150 317C166.7 319 183.3 327 200 328C216.7 329 233.3 323 250 323.3C266.7 323.7 283.3 330.3 300 327.3C316.7 324.3 333.3 311.7 350 305.8C366.7 300 383.3 301 400 306.8C416.7 312.7 433.3 323.3 450 329.3C466.7 335.3 483.3 336.7 500 338.2C516.7 339.7 533.3 341.3 550 334.5C566.7 327.7 583.3 312.3 600 304.3C616.7 296.3 633.3 295.7 650 301.2C666.7 306.7 683.3 318.3 700 320.3C716.7 322.3 733.3 314.7 750 315C766.7 315.3 783.3 323.7 800 329.8C816.7 336 833.3 340 850 340.2C866.7 340.3 883.3 336.7 891.7 334.8L900 333L900 451L891.7 451C883.3 451 866.7 451 850 451C833.3 451 816.7 451 800 451C783.3 451 766.7 451 750 451C733.3 451 716.7 451 700 451C683.3 451 666.7 451 650 451C633.3 451 616.7 451 600 451C583.3 451 566.7 451 550 451C533.3 451 516.7 451 500 451C483.3 451 466.7 451 450 451C433.3 451 416.7 451 400 451C383.3 451 366.7 451 350 451C333.3 451 316.7 451 300 451C283.3 451 266.7 451 250 451C233.3 451 216.7 451 200 451C183.3 451 166.7 451 150 451C133.3 451 116.7 451 100 451C83.3 451 66.7 451 50 451C33.3 451 16.7 451 8.3 451L0 451Z"
                fill="#69a2fa"></path>
            <path
                d="M0 345L8.3 345.7C16.7 346.3 33.3 347.7 50 348.3C66.7 349 83.3 349 100 348.5C116.7 348 133.3 347 150 348.7C166.7 350.3 183.3 354.7 200 351.8C216.7 349 233.3 339 250 335.3C266.7 331.7 283.3 334.3 300 338C316.7 341.7 333.3 346.3 350 344.8C366.7 343.3 383.3 335.7 400 332.2C416.7 328.7 433.3 329.3 450 329.2C466.7 329 483.3 328 500 334C516.7 340 533.3 353 550 354.7C566.7 356.3 583.3 346.7 600 342.2C616.7 337.7 633.3 338.3 650 343.3C666.7 348.3 683.3 357.7 700 362.2C716.7 366.7 733.3 366.3 750 362.5C766.7 358.7 783.3 351.3 800 343.8C816.7 336.3 833.3 328.7 850 325.2C866.7 321.7 883.3 322.3 891.7 322.7L900 323L900 451L891.7 451C883.3 451 866.7 451 850 451C833.3 451 816.7 451 800 451C783.3 451 766.7 451 750 451C733.3 451 716.7 451 700 451C683.3 451 666.7 451 650 451C633.3 451 616.7 451 600 451C583.3 451 566.7 451 550 451C533.3 451 516.7 451 500 451C483.3 451 466.7 451 450 451C433.3 451 416.7 451 400 451C383.3 451 366.7 451 350 451C333.3 451 316.7 451 300 451C283.3 451 266.7 451 250 451C233.3 451 216.7 451 200 451C183.3 451 166.7 451 150 451C133.3 451 116.7 451 100 451C83.3 451 66.7 451 50 451C33.3 451 16.7 451 8.3 451L0 451Z"
                fill="#527ace"></path>
            <path style="z-index: 2;"
                d="M0 373L8.3 374.3C16.7 375.7 33.3 378.3 50 377.8C66.7 377.3 83.3 373.7 100 370.5C116.7 367.3 133.3 364.7 150 366.2C166.7 367.7 183.3 373.3 200 376C216.7 378.7 233.3 378.3 250 375.5C266.7 372.7 283.3 367.3 300 365.3C316.7 363.3 333.3 364.7 350 365.7C366.7 366.7 383.3 367.3 400 368.5C416.7 369.7 433.3 371.3 450 369.3C466.7 367.3 483.3 361.7 500 360C516.7 358.3 533.3 360.7 550 365.5C566.7 370.3 583.3 377.7 600 378.8C616.7 380 633.3 375 650 370.7C666.7 366.3 683.3 362.7 700 365.3C716.7 368 733.3 377 750 375.3C766.7 373.7 783.3 361.3 800 355.7C816.7 350 833.3 351 850 352C866.7 353 883.3 354 891.7 354.5L900 355L900 451L891.7 451C883.3 451 866.7 451 850 451C833.3 451 816.7 451 800 451C783.3 451 766.7 451 750 451C733.3 451 716.7 451 700 451C683.3 451 666.7 451 650 451C633.3 451 616.7 451 600 451C583.3 451 566.7 451 550 451C533.3 451 516.7 451 500 451C483.3 451 466.7 451 450 451C433.3 451 416.7 451 400 451C383.3 451 366.7 451 350 451C333.3 451 316.7 451 300 451C283.3 451 266.7 451 250 451C233.3 451 216.7 451 200 451C183.3 451 166.7 451 150 451C133.3 451 116.7 451 100 451C83.3 451 66.7 451 50 451C33.3 451 16.7 451 8.3 451L0 451Z"
                fill="#3b55a3"></path>
            <path style="z-index: 2;"
                d="M0 394L8.3 393.8C16.7 393.7 33.3 393.3 50 391C66.7 388.7 83.3 384.3 100 382C116.7 379.7 133.3 379.3 150 379.3C166.7 379.3 183.3 379.7 200 379.8C216.7 380 233.3 380 250 381.5C266.7 383 283.3 386 300 387.8C316.7 389.7 333.3 390.3 350 392.8C366.7 395.3 383.3 399.7 400 401.5C416.7 403.3 433.3 402.7 450 402.5C466.7 402.3 483.3 402.7 500 399C516.7 395.3 533.3 387.7 550 385.5C566.7 383.3 583.3 386.7 600 387.8C616.7 389 633.3 388 650 389C666.7 390 683.3 393 700 392.3C716.7 391.7 733.3 387.3 750 387.5C766.7 387.7 783.3 392.3 800 391.8C816.7 391.3 833.3 385.7 850 385.5C866.7 385.3 883.3 390.7 891.7 393.3L900 396L900 451L891.7 451C883.3 451 866.7 451 850 451C833.3 451 816.7 451 800 451C783.3 451 766.7 451 750 451C733.3 451 716.7 451 700 451C683.3 451 666.7 451 650 451C633.3 451 616.7 451 600 451C583.3 451 566.7 451 550 451C533.3 451 516.7 451 500 451C483.3 451 466.7 451 450 451C433.3 451 416.7 451 400 451C383.3 451 366.7 451 350 451C333.3 451 316.7 451 300 451C283.3 451 266.7 451 250 451C233.3 451 216.7 451 200 451C183.3 451 166.7 451 150 451C133.3 451 116.7 451 100 451C83.3 451 66.7 451 50 451C33.3 451 16.7 451 8.3 451L0 451Z"
                fill="#24327a"></path>
            <path
                d="M0 412L8.3 413.3C16.7 414.7 33.3 417.3 50 416.7C66.7 416 83.3 412 100 412C116.7 412 133.3 416 150 418.5C166.7 421 183.3 422 200 420.7C216.7 419.3 233.3 415.7 250 415.2C266.7 414.7 283.3 417.3 300 416.7C316.7 416 333.3 412 350 411C366.7 410 383.3 412 400 412.3C416.7 412.7 433.3 411.3 450 409.3C466.7 407.3 483.3 404.7 500 406.7C516.7 408.7 533.3 415.3 550 415.8C566.7 416.3 583.3 410.7 600 410.5C616.7 410.3 633.3 415.7 650 415C666.7 414.3 683.3 407.7 700 405.5C716.7 403.3 733.3 405.7 750 407.7C766.7 409.7 783.3 411.3 800 411.5C816.7 411.7 833.3 410.3 850 409.2C866.7 408 883.3 407 891.7 406.5L900 406L900 451L891.7 451C883.3 451 866.7 451 850 451C833.3 451 816.7 451 800 451C783.3 451 766.7 451 750 451C733.3 451 716.7 451 700 451C683.3 451 666.7 451 650 451C633.3 451 616.7 451 600 451C583.3 451 566.7 451 550 451C533.3 451 516.7 451 500 451C483.3 451 466.7 451 450 451C433.3 451 416.7 451 400 451C383.3 451 366.7 451 350 451C333.3 451 316.7 451 300 451C283.3 451 266.7 451 250 451C233.3 451 216.7 451 200 451C183.3 451 166.7 451 150 451C133.3 451 116.7 451 100 451C83.3 451 66.7 451 50 451C33.3 451 16.7 451 8.3 451L0 451Z"
                fill="#091252"></path>
            <g transform="translate(0.000000,460.000000) scale(0.10,-0.10)" fill="#091252" stroke="none">
                <path d="M5635 12794 c-845 -51 -1778 -234 -2578 -503 -584 -198 -1014 -401
-1431 -679 -594 -396 -1063 -822 -1313 -1192 -69 -104 -96 -150 -90 -156 3 -3
10 3 16 14 18 33 214 172 244 172 4 0 -7 -19 -26 -42 -155 -192 -275 -474
-342 -812 -46 -230 -121 -781 -105 -771 4 2 15 35 25 72 29 106 97 287 155
411 29 62 54 111 56 110 1 -2 -11 -41 -26 -88 -40 -122 -60 -252 -67 -435 -10
-267 21 -533 126 -1095 l18 -95 5 325 c4 238 10 349 22 415 15 81 51 223 58
230 2 2 4 -76 4 -173 2 -271 33 -455 113 -667 49 -131 224 -545 228 -541 2 1
-13 72 -32 157 -108 485 -108 636 -1 888 20 45 55 114 78 154 l43 72 6 -60 c4
-33 12 -190 19 -350 10 -272 22 -423 37 -505 5 -29 12 -8 38 125 44 223 115
465 137 465 5 0 8 -33 9 -72 3 -345 27 -688 48 -688 3 0 14 34 23 75 19 85 72
223 116 303 l29 53 6 -93 c6 -85 41 -305 50 -314 2 -2 18 33 36 79 30 78 58
131 195 374 32 55 68 126 80 158 l23 56 18 -98 c42 -237 183 -518 367 -733 57
-66 195 -190 211 -190 4 0 -9 30 -27 68 -53 104 -76 168 -102 282 -31 136 -31
175 0 95 32 -82 73 -148 180 -289 134 -174 175 -233 224 -316 37 -65 42 -70
37 -40 -3 19 -26 159 -51 310 -52 317 -64 478 -43 615 l13 90 7 -91 c7 -91 33
-205 65 -279 l17 -40 17 100 c20 116 42 189 79 260 l26 50 2 -35 c6 -80 26
-190 50 -270 13 -47 27 -95 30 -107 9 -36 18 -27 31 33 15 62 80 224 91 224 4
0 8 -20 10 -46 2 -52 34 -160 54 -188 13 -18 16 -15 49 40 20 32 56 99 81 148
l45 88 7 -43 c3 -24 22 -123 40 -219 19 -96 35 -205 37 -242 2 -38 6 -68 10
-68 25 0 138 294 138 358 0 12 5 22 10 22 6 0 10 -17 10 -37 0 -52 41 -296 51
-308 5 -5 9 15 9 47 0 31 7 93 16 139 16 86 99 346 116 364 6 6 7 -18 4 -65
-3 -41 -8 -113 -10 -160 l-5 -85 24 70 c36 104 117 259 188 357 62 86 196 242
203 236 2 -2 -4 -31 -13 -63 -18 -71 -13 -259 7 -278 10 -9 12 -8 6 6 -8 25
16 124 53 217 l30 75 1 -105 c3 -172 10 -175 60 -25 24 71 53 150 64 175 l20
45 9 -70 c4 -38 9 -139 10 -222 l2 -152 21 68 c33 110 91 215 156 286 54 59
135 125 154 125 4 0 4 -30 1 -67 l-6 -68 40 45 c22 25 38 39 34 33 -8 -16 -6
-16 45 2 166 59 226 -75 201 -445 -23 -327 -48 -433 -266 -1140 -204 -661
-246 -873 -232 -1166 18 -361 136 -636 371 -869 208 -206 365 -286 962 -488
426 -145 662 -245 819 -348 112 -74 277 -243 339 -346 61 -104 111 -250 132
-384 30 -194 8 -539 -56 -879 -63 -340 -130 -582 -300 -1090 -153 -460 -190
-638 -190 -923 l0 -140 148 7 c693 33 1582 44 2037 27 305 -12 607 -32 775
-51 47 -5 89 -10 94 -10 19 0 -15 339 -65 635 -70 424 -249 1271 -360 1710
-167 660 -399 1254 -616 1577 -232 345 -492 585 -953 878 -614 390 -929 781
-1006 1248 -21 124 -14 342 16 502 34 188 102 435 215 780 147 449 204 680
224 905 l7 80 7 -75 c4 -41 15 -129 24 -195 l17 -119 13 79 c7 44 18 105 25
135 l11 55 43 -170 c24 -93 43 -181 43 -194 1 -39 10 -20 36 75 40 149 56 250
58 354 1 55 5 100 8 100 3 0 10 -10 16 -22 24 -54 319 -425 329 -416 2 3 -7
44 -21 93 -13 49 -22 91 -20 93 6 7 57 -99 85 -181 15 -43 30 -80 32 -83 3 -2
15 54 28 126 13 72 25 129 27 127 2 -2 8 -105 13 -228 6 -123 13 -248 16 -277
l6 -53 45 58 c63 80 159 226 194 295 40 79 77 195 85 269 l7 61 33 -108 c18
-60 51 -158 74 -219 l41 -110 -6 170 -5 170 24 -60 c13 -33 53 -122 89 -197
93 -192 112 -281 125 -563 l7 -150 22 42 c29 53 59 165 74 273 17 126 14 496
-5 594 -9 44 -14 82 -11 84 3 3 5 3 5 0 0 -3 14 -60 30 -126 73 -296 93 -507
92 -990 0 -211 2 -382 4 -380 8 9 67 294 95 458 47 276 98 778 99 959 l0 35
36 -35 c47 -45 110 -175 131 -269 20 -91 22 -346 4 -463 -7 -43 -11 -80 -9
-83 8 -7 141 342 209 548 84 253 133 425 163 578 l23 115 9 -150 c5 -82 9
-247 8 -365 l0 -215 18 60 c10 33 66 238 123 455 58 217 110 404 115 415 15
35 -8 -224 -55 -595 -36 -293 -40 -334 -26 -326 6 4 11 11 11 16 0 31 173 302
380 595 111 159 250 382 250 404 0 6 4 11 9 11 4 0 9 -36 10 -81 3 -156 50
-362 128 -559 40 -102 94 -217 78 -165 -65 202 -81 465 -39 628 20 80 65 172
109 222 l35 40 25 -30 c14 -16 30 -46 37 -65 14 -40 16 -171 5 -350 l-7 -125
30 75 c63 156 126 396 157 605 24 158 23 509 -1 670 -42 282 -139 582 -271
845 -176 351 -341 576 -635 870 -640 641 -1485 1058 -2595 1279 -271 54 -520
89 -835 116 -164 15 -761 27 -895 19z m-35 -4019 c18 -110 35 -256 39 -325 l7
-125 18 60 c25 81 72 267 87 340 l12 60 23 -88 c27 -100 77 -214 125 -283 32
-47 32 -48 20 -106 -17 -85 -94 -319 -142 -434 -107 -257 -169 -358 -505 -819
-44 -60 -104 -144 -134 -185 -29 -41 -86 -113 -125 -160 -40 -47 -92 -112
-115 -145 -23 -33 -40 -51 -36 -40 46 157 148 647 187 900 35 225 37 831 4
1195 l-5 55 55 45 c31 25 74 56 97 69 l41 25 -6 -140 -6 -139 30 65 c16 36 38
83 48 105 l20 40 1 -105 1 -105 39 44 c79 90 166 269 177 364 8 64 6 72 43
-168z m658 -259 c44 -70 85 -171 143 -358 27 -90 53 -170 56 -178 4 -8 10 28
14 80 10 133 51 420 60 420 14 0 69 -197 80 -285 22 -185 15 -232 -101 -725
-135 -570 -231 -1026 -265 -1249 -33 -220 -29 -495 10 -693 50 -251 142 -436
295 -590 63 -63 203 -158 280 -190 56 -23 62 -33 10 -18 -83 24 -333 63 -703
110 -420 53 -629 113 -850 241 -132 78 -214 172 -258 300 -19 53 -23 86 -23
189 0 141 16 233 71 397 46 141 60 171 208 448 146 273 402 787 488 978 131
291 219 538 277 779 18 73 47 187 66 253 18 66 38 139 44 162 l11 43 28 -33
c16 -17 42 -54 59 -81z" />
            </g>
        </svg>

        <div class="area">
            <ul class="circles">
                <li><img src="./img/icono.png" alt="icono"></li>
                <li><img src="./img/icono.png" alt="icono"></li>
                <li><img src="./img/icono.png" alt="icono"></li>
                <li><img src="./img/icono.png" alt="icono"></li>
                <li><img src="./img/icono.png" alt="icono"></li>
                <li><img src="./img/icono.png" alt="icono"></li>
                <li><img src="./img/icono.png" alt="icono"></li>
                <li><img src="./img/icono.png" alt="icono"></li>
                <li><img src="./img/icono.png" alt="icono"></li>
                <li><img src="./img/icono.png" alt="icono"></li>
                <li><img src="./img/icono.png" alt="icono"></li>
                <li><img src="./img/icono.png" alt="icono"></li>
                <li><img src="./img/icono.png" alt="icono"></li>
            </ul>
        </div>
        <div class="h-100 w-100 text-center d-flex align-items-center p-3">
            <div class="titulo_l p-5"
                style="border-radius: 25px; background-color: #69a2fa; border: 3px solid #4e54c8;"> <img
                    src="./img/icono.png" alt="Logo" height="100" class="d-inline-block align-text-top mx-3">
                <h2 class="text-white">CONOCE NUESTRO PRODUCTO</h2>
            </div>

            <p style="padding: 0 50px; ">
                ¡Hola! Te presentamos nuestra innovadora aplicación de recordatorios para Telegram. ¿Alguna vez has
                olvidado una tarea importante debido a que estabas ocupado o distraído? ¡Ya no te preocupes más! Con
                nuestra aplicación, puedes establecer fácilmente recordatorios personalizados directamente a través de
                Telegram.
                <br><br>
                Aquí está cómo funciona: simplemente envía un mensaje de texto con la tarea que necesitas recordar y la
                fecha y hora en que deseas recibir la notificación. Por ejemplo, puedes escribir "Recoger el paquete
                mañana a las 3pm" y la aplicación se encargará de recordártelo exactamente a esa hora.
                <br><br>

                Nuestra aplicación es fácil de usar y se integra perfectamente con tu rutina diaria en Telegram. Ya no
                tendrás que preocuparte por recordar todo lo que tienes que hacer, porque nuestra aplicación lo hará por
                ti. ¡Simplifica tu vida con nuestros recordatorios personalizados y convenientes directamente en
                Telegram!
                <br><br>

                ¿Estás listo para aprovechar al máximo nuestra innovadora aplicación de recordatorios en Telegram?
                ¡Descárgala ahora y mantén tus tareas pendientes bajo control de una manera simple y eficiente!
                ¡Bienvenido a una nueva forma de gestionar tus recordatorios!
            </p>
        </div>

    </div>
    <footer>
        <div class="derechos-de-autor"><a href="https://santiagoaguilar-devfront.netlify.app/"
                class="derechos-de-autor text-light text-decoration-none" target="_blank"
                rel="noopener noreferrer">Created by Santiago
                Aguilar (2023) ©</a></div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script>
        // Función para obtener los nuevos mensajes del servidor
        function obtenerNuevosMensajes() {
            return fetch('./index.php') // Hacer petición al servidor
                .then(function (response) {
                    return response.json(); // Obtener la respuesta como JSON
                });
        }

        // Función para actualizar el chat con nuevos mensajes
        function actualizarChat() {
            obtenerNuevosMensajes() // Obtener nuevos mensajes del servidor
                .then(function (mensajes) {
                    mostrarMensajes(mensajes); // Mostrar los mensajes en el chat
                })
                .catch(function (error) {
                    console.error(error);
                });
        }

        // Llamar a la función cada 5 segundos
        setInterval(actualizarChat, 5000); // 5000 milisegundos = 5 segundos

    </script>
</body>

</html>