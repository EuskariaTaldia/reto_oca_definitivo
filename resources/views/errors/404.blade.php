<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
        <!-- CSS PERSONAL -->
        <link rel="stylesheet" type="text/css" href="../resources/css/style.css">
    
        <title>DESAYUNOS FEMINISTAS</title>
        <link rel='shortcut icon' type='image/x-icon' href='../public/images/logo.png'/>
    
        <style>
            * {
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }

            body {
                padding: 0;
                margin: 0;
            }

            #notfound {
                position: relative;
                height: 100vh;
            }

            #notfound .notfound {
                position: absolute;
                left: 50%;
                top: 50%;
                -webkit-transform: translate(-50%, -50%);
                    -ms-transform: translate(-50%, -50%);
                        transform: translate(-50%, -50%);
            }

            .notfound {
                max-width: 520px;
                width: 100%;
                line-height: 1.4;
                text-align: center;
            }

            .notfound .notfound-404 {
                position: relative;
                height: 240px;
            }

            .notfound .notfound-404 h1 {
                font-family: 'Montserrat', sans-serif;
                position: absolute;
                left: 50%;
                top: 50%;
                -webkit-transform: translate(-50%, -50%);
                    -ms-transform: translate(-50%, -50%);
                        transform: translate(-50%, -50%);
                font-size: 252px;
                font-weight: 900;
                margin: 0px;
                color: #262626;
                text-transform: uppercase;
                letter-spacing: -40px;
                margin-left: -20px;
            }

            .notfound .notfound-404 h1>span {
                text-shadow: -8px 0px 0px #fff;
            }

            .notfound .notfound-404 h3 {
                font-family: 'Cabin', sans-serif;
                position: relative;
                font-size: 16px;
                font-weight: 700;
                text-transform: uppercase;
                color: #262626;
                margin: 0px;
                letter-spacing: 3px;
                padding-left: 6px;
            }

            .notfound h2 {
                font-family: 'Cabin', sans-serif;
                font-size: 20px;
                font-weight: 400;
                text-transform: uppercase;
                color: #000;
                margin-top: 0px;
                margin-bottom: 25px;
            }

            @media only screen and (max-width: 767px) {
                .notfound .notfound-404 {
                    height: 200px;
                }
                .notfound .notfound-404 h1 {
                    font-size: 200px;
                }
            }

            @media only screen and (max-width: 480px) {
                .notfound .notfound-404 {
                    height: 162px;
                }
                .notfound .notfound-404 h1 {
                    font-size: 162px;
                    height: 150px;
                    line-height: 162px;
                }
                .notfound h2 {
                    font-size: 16px;
                }
            }

            h4{
                color: #253858;
                margin-bottom: .8rem;
                position: relative;
                font-family: 'Raleway', sans-serif;
                font-size: 1.5rem;
            }

            p{
                margin-top: 0;
                margin-bottom: 1rem;
                display: block;
                margin-block-start: 1em;
                margin-block-end: 1em;
                margin-inline-start: 0px;
                margin-inline-end: 0px;
                color: rgb(113, 120, 126);
                font-family: 'Lato', sans-serif;
            }

            .btn-primary:hover {
                color: black;
                border-color: black;
            }

            .btn {
                border-color: white;
                background-color: #000;
                background-image: linear-gradient(125deg, #a72879, #064497);
                color: #fff;
                text-transform: uppercase;
                letter-spacing: 2px;
                font-size: 16px;
                border-radius: 30px !important;
                padding: 8px 16px;
                box-shadow: 0 3px 8px 0 rgba(41,49,89,.15), inset 0 0 0 1px hsla(0,0%,100%,.1);
            }


            .btn:not(:disabled):not(.disabled) {
                cursor: pointer;
            }

            /*[404 error page]
        --------------------------*/
            .error-content {
                padding: 0 0 70px;
            }

            .error-text{
                text-align: center;
            }

            .error {
                font-size: 180px;
                font-weight: 100;
            }

            @keyframes bob {
                0% {
                    top: 0;
                }
                50% {
                    top: 0.2em;
                }
            }

            .im-sheep {
                display: inline-block;
                position: relative;
                font-size: 1em;
                margin-bottom: 70px;
            }

            .im-sheep * {
                transition: transform 0.3s;
            }

            .im-sheep .top {
                position: relative;
                top: 0;
                animation: bob 1s infinite;
            }

            .im-sheep:hover .head {
                transform: rotate(0deg);
            }

            .im-sheep:hover .head .im-eye {
                width: 1.25em;
                height: 1.25em;
            }

            .im-sheep:hover .head .im-eye:before {
                right: 30%;
            }

            .im-sheep:hover .top {
                animation-play-state: paused;
            }

            .im-sheep .head {
                display: inline-block;
                width: 5em;
                height: 5em;
                border-radius: 100%;
                background: #253858;
                vertical-align: middle;
                position: relative;
                top: 1em;
                transform: rotate(30deg);
            }

            .im-sheep .head:before {
                content: '';
                display: inline-block;
                width: 80%;
                height: 50%;
                background: #253858;
                position: absolute;
                bottom: 0;
                right: -10%;
                border-radius: 50% 40%;
            }

            .im-sheep .head:hover .im-ear.one, .im-sheep .head:hover .im-ear.two {
                transform: rotate(0deg);
            }

            .im-sheep .head .im-eye {
                display: inline-block;
                width: 1em;
                height: 1em;
                border-radius: 100%;
                background: white;
                position: absolute;
                overflow: hidden;
            }

            .im-sheep .head .im-eye:before {
                content: '';
                display: inline-block;
                background: black;
                width: 50%;
                height: 50%;
                border-radius: 100%;
                position: absolute;
                right: 10%;
                bottom: 10%;
                transition: all 0.3s;
            }
            
            .im-sheep .head .im-eye.one {
                right: -2%;
                top: 1.7em;
            }

            .im-sheep .head .im-eye.two {
                right: 2.5em;
                top: 1.7em;
            }

            .im-sheep .head .im-ear {
                background: #253858;
                width: 50%;
                height: 30%;
                border-radius: 100%;
                position: absolute;
            }

            .im-sheep .head .im-ear.one {
                left: -10%;
                top: 5%;
                transform: rotate(-30deg);
            }

            .im-sheep .head .im-ear.two {
                top: 2%;
                right: -5%;
                transform: rotate(20deg);
            }

            .im-sheep .body {
                display: inline-block;
                width: 7em;
                height: 7em;
                border-radius: 100%;
                background: #0054D1;
                background-image: linear-gradient(125deg, #a72879, #064497);
                position: relative;
                vertical-align: middle;
                margin-right: -3em;
            }

            .im-sheep .im-legs {
                display: inline-block;
                position: absolute;
                top: 80%;
                left: 10%;
                z-index: -1;
            }

            .im-sheep .im-legs .im-leg {
                display: inline-block;
                background: #141214;
                width: 0.5em;
                height: 2.5em;
                margin: 0.2em;
            }

            .im-sheep::before {
                left: 0;
                content: '';
                display: inline-block;
                position: absolute;
                top: 112%;
                width: 100%;
                height: 18%;
                border-radius: 100%;
                background: rgba(0, 0, 0, 0.2);
            }
        </style>
    </head>

    <body>
        <div class="error-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="error-text">

                            {{--  --}}
                            <div id="notfound">
                                <div class="notfound">
                                    <div class="notfound-404">
                                        <h3>Oops! Página no encontrada.</h3>
                                        <h1><span>4</span><span>0</span><span>4</span></h1>
                                    </div>

                                    <div class="im-sheep">
                                        <div class="top">
                                            <div class="body"></div>
                                            <div class="head">
                                                <div class="im-eye one"></div>
                                                <div class="im-eye two"></div>
                                                <div class="im-ear one"></div>
                                                <div class="im-ear two"></div>
                                            </div>
                                        </div>
                                        <div class="im-legs">
                                            <div class="im-leg"></div>
                                            <div class="im-leg"></div>
                                            <div class="im-leg"></div>
                                            <div class="im-leg"></div>
                                        </div>
                                    </div>

                                    <h2>Lo sentimos, la página que esta queriendo acceder no esta disponible.</h2>
                                    <a href="/ocaMujeres/public/home" class="btn btn-primary">Volver a la página web</a>

                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>