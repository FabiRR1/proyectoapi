<?php

app()->get('/', function () {
    response()->json(['message' => 'Holis, estas haciendo tu primer API con framework']);
});

//Consulta todos los registros (Verbo GET)
app()->get('/contactos', 'ContactosController@index');
//Consulta todos los registros con un ID (Verbo GET)
app()->get('/contactos/{id}', 'ContactosController@consultar');
//Inserta un registro (Verbo POST)
app()->post('/contactos', 'ContactosController@agregar');
//Borra un registro (Verbo DELETE)
app()->delete('/contactos/{id}', 'ContactosController@borrar');
//Actualiza un registro (Verbo PUT)
app()->put('/contactos/{id}', 'ContactosController@actualizar');
