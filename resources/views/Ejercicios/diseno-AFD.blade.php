@include('../layout/header')

<div id="content">
    <header id="header">
        <div id="headerContent">Diseño de un AFD</div>
    </header>
        <!-- nav lateral para no repetir en cada archivo y poder editar todos los enlaces de manera rapida  -->

    @include('../Ejercicios/siteNav-AFD')

    <div id="main-wrapper">
        <section id="main">
            <header id="nodeDecoration">
                <!-- <h1 id="nodeTitle">Diseño de un AFD</h1> -->
            </header>
            <article class="iDevice_wrapper textIdevice em_iDevice em_iDevice_bulb" id="id0">
                <div class="iDevice emphasis1">
                    <header class="iDevice_header">
                        <h1 class="iDeviceTitle">Diseño de un AFD</h1>
                    </header>
                    <div class="iDevice_inner">
                        <!-- Texto de bienvenida -->
                        <h1>Selecciona un ejemplo para observar paso a paso el diseño del autómata</h1> 

                    </div>

                    @include('../layout/footer')