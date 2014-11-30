@extends('layouts.app')

@section('content')
<div id="welcome">
    <div class="jumbotron">
        <div class="container">
            <h1 class="jumbotron__header">La solucion que estaba buscando</h1>

            <p class="jumbotron__body">
                El administrdor de flota le permite gestionar su flota de vehiculo de manera
                eficiente, automatica y ordenada. Utilizando un sistema web al cual puede acceder desde 
		cualquier lado.
            </p>

        </div>
    </div>

    <div class="container">
        <ol class="steps">
            <li class="steps__item">
                <div class="body">
                    <h2>Mecanica</h2>

                    <p>
                        Acceda a cientros de talleres y obtenga presupuestos directamente desde 
                        el sistema.
                    </p>

                    <p>
			Los talleres cuenta con garantia especializada.
                    </p>
                </div>
            </li>

            <li class="steps__item">
                <div class="body">
                    <h2>Finanzas</h2>

                    <p>
                        Gestione los ingresos diarios de cada vehiculo.
                    </p>

                </div>
            </li>

            <li class="steps__item">
                <div class="body">
                    <h2>Seguros</h2>

                    <p>
                        Asegurese que su seguro este siempre al dia.
                    </p>
                </div>
            </li>
        </ol>
    </div>
</div>
@stop
