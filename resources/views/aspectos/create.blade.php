@extends('layouts.app')

@section('content')

    <h2>Criterios del "Heurístico Aspectos Generales"</h2>
    <h3>Elementos relacionados con los objetos del sitio, el look & feel, coherencia y nivel de actualización de contenidos</h3>

    <div>
        <a href="{{ route('aspectos.index') }}">Volver</a>
    </div>

    <h3>Instrucciones</h3>
    <p>1. Evalue cada criterio y rellene la columna "Valor" según la leyenda</p>
    <p>2. Añada sus comentarios o la referencia a los mismos en otro documento anexo en la columna "Comentarios"</p>

    <form method="post" action="{{ route('aspectos.store') }}">
    @csrf
    <div>
        <div>
            <label for="">Codigo: </label><label for="">AG1</label>
            <label for="">Criterio: </label><label for="">Objetivos del sitio web concretos y bien definidos</label>
        </div>
        <div>
            <label for="">Valor</label>
            <select name="valor" id="" required>
                <option value="">Seleccione un valor:</option>
                <option value="No se cumple en absoluto">0</option>
                <option value="Se cumple totalmente">10</option>
                <option value="Criterio no aplicable en el sitio">NA</option>
                <option value="No se cumple en todo el sitio">NTS</option>
                <option value="No se cumple en los enlaces principales">NEP</option>
                <option value="No se cumple en la pagina principal">NPP</option>
                <option value="No se cumple en alguna pagina interior">NPI</option>
                <option value="Se cumple el criterio">S</option>
            </select>
        </div>
        <div>
            <label for="">Relevancia</label>
            <input type="text" name="relevancia" id="" required maxlength="100">
        </div>
        <div>
            <label for="">Comentarios</label>
            <textarea name="comentario" id="" cols="30" rows="5"></textarea>
        </div>
        <div>
            <label for="">Valor interno(vc)</label>
            <input type="text" name="valor_interno" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor interno de relevancia(rc)</label>
            <input type="text" name="valor_interno_relevancia" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Factor de corrección(fc)</label>
            <input type="text" name="factor_correcion" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor parcial</label>
            <input type="text" name="valor_parcial" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor parcial 2</label>
            <input type="text" name="valor_parcial2" id="" required maxlength="200">
        </div>
    </div>
    <br>
    <div>
        <div>
            <label for="">Codigo: </label><label for="">AG2</label>
            <label for="">Criterio: </label><label for="">Contenidos y servicios ofrecidos precisos y completos</label>
        </div>
        <div>
            <label for="">Valor</label>
            <select name="valor" id="" required>
                <option value="">Seleccione un valor:</option>
                <option value="No se cumple en absoluto">0</option>
                <option value="Se cumple totalmente">10</option>
                <option value="Criterio no aplicable en el sitio">NA</option>
                <option value="No se cumple en todo el sitio">NTS</option>
                <option value="No se cumple en los enlaces principales">NEP</option>
                <option value="No se cumple en la pagina principal">NPP</option>
                <option value="No se cumple en alguna pagina interior">NPI</option>
                <option value="Se cumple el criterio">S</option>
            </select>
        </div>
        <div>
            <label for="">Relevancia</label>
            <input type="text" name="relevancia" id="" required maxlength="100">
        </div>
        <div>
            <label for="">Comentarios</label>
            <textarea name="comentario" id="" cols="30" rows="5"></textarea>
        </div>
        <div>
            <label for="">Valor interno(vc)</label>
            <input type="text" name="valor_interno" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor interno de relevancia(rc)</label>
            <input type="text" name="valor_interno_relevancia" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Factor de corrección(fc)</label>
            <input type="text" name="factor_correcion" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor parcial</label>
            <input type="text" name="valor_parcial" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor parcial 2</label>
            <input type="text" name="valor_parcial2" id="" required maxlength="200">
        </div>

    </div>
    <br>
    <div>
        <div>
            <label for="">Codigo: </label><label for="">AG3</label>
            <label for="">Criterio: </label><label for="">Estructura general del sitio web orientada al usuario</label>
        </div>
        <div>
            <label for="">Valor</label>
            <select name="valor" id="" required>
                <option value="">Seleccione un valor:</option>
                <option value="No se cumple en absoluto">0</option>
                <option value="Se cumple totalmente">10</option>
                <option value="Criterio no aplicable en el sitio">NA</option>
                <option value="No se cumple en todo el sitio">NTS</option>
                <option value="No se cumple en los enlaces principales">NEP</option>
                <option value="No se cumple en la pagina principal">NPP</option>
                <option value="No se cumple en alguna pagina interior">NPI</option>
                <option value="Se cumple el criterio">S</option>
            </select>
        </div>
        <div>
            <label for="">Relevancia</label>
            <input type="text" name="relevancia" id="" required maxlength="100">
        </div>
        <div>
            <label for="">Comentarios</label>
            <textarea name="comentario" id="" cols="30" rows="5"></textarea>
        </div>
        <div>
            <label for="">Valor interno(vc)</label>
            <input type="text" name="valor_interno" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor interno de relevancia(rc)</label>
            <input type="text" name="valor_interno_relevancia" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Factor de corrección(fc)</label>
            <input type="text" name="factor_correcion" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor parcial</label>
            <input type="text" name="valor_parcial" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor parcial 2</label>
            <input type="text" name="valor_parcial2" id="" required maxlength="200">
        </div>
    </div>
    <br>
    <div>
        <div>
            <label for="">Codigo: </label><label for="">AG4</label>
            <label for="">Criterio: </label><label for="">Look & Feel general se corresponde con los objetivos, características, contenidos y servicios del sitio web</label>
        </div>
        <div>
            <label for="">Valor</label>
            <select name="valor" id="" required>
                <option value="">Seleccione un valor:</option>
                <option value="No se cumple en absoluto">0</option>
                <option value="Se cumple totalmente">10</option>
                <option value="Criterio no aplicable en el sitio">NA</option>
                <option value="No se cumple en todo el sitio">NTS</option>
                <option value="No se cumple en los enlaces principales">NEP</option>
                <option value="No se cumple en la pagina principal">NPP</option>
                <option value="No se cumple en alguna pagina interior">NPI</option>
                <option value="Se cumple el criterio">S</option>
            </select>
        </div>
        <div>
            <label for="">Relevancia</label>
            <input type="text" name="relevancia" id="" required maxlength="100">
        </div>
        <div>
            <label for="">Comentarios</label>
            <textarea name="comentario" id="" cols="30" rows="5"></textarea>
        </div>
        <div>
            <label for="">Valor interno(vc)</label>
            <input type="text" name="valor_interno" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor interno de relevancia(rc)</label>
            <input type="text" name="valor_interno_relevancia" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Factor de corrección(fc)</label>
            <input type="text" name="factor_correcion" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor parcial</label>
            <input type="text" name="valor_parcial" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor parcial 2</label>
            <input type="text" name="valor_parcial2" id="" required maxlength="200">
        </div>

    </div>
    <br>
    <div>
        <div>
            <label for="">Codigo: </label><label for="">AG5</label>
            <label for="">Criterio: </label><label for="">Diseño general del sitio web reconocible</label>
        </div>
        <div>
            <label for="">Valor</label>
            <select name="valor" id="" required>
                <option value="">Seleccione un valor:</option>
                <option value="No se cumple en absoluto">0</option>
                <option value="Se cumple totalmente">10</option>
                <option value="Criterio no aplicable en el sitio">NA</option>
                <option value="No se cumple en todo el sitio">NTS</option>
                <option value="No se cumple en los enlaces principales">NEP</option>
                <option value="No se cumple en la pagina principal">NPP</option>
                <option value="No se cumple en alguna pagina interior">NPI</option>
                <option value="Se cumple el criterio">S</option>
            </select>
        </div>
        <div>
            <label for="">Relevancia</label>
            <input type="text" name="relevancia" id="" required maxlength="100">
        </div>
        <div>
            <label for="">Comentarios</label>
            <textarea name="comentario" id="" cols="30" rows="5"></textarea>
        </div>
        <div>
            <label for="">Valor interno(vc)</label>
            <input type="text" name="valor_interno" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor interno de relevancia(rc)</label>
            <input type="text" name="valor_interno_relevancia" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Factor de corrección(fc)</label>
            <input type="text" name="factor_correcion" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor parcial</label>
            <input type="text" name="valor_parcial" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor parcial 2</label>
            <input type="text" name="valor_parcial2" id="" required maxlength="200">
        </div>
    </div>
    <br>
    <div>
        <div>
            <label for="">Codigo: </label><label for="">AG6</label>
            <label for="">Criterio: </label><label for="">Diseño general del sitio web coherente</label>
        </div>
        <div>
            <label for="">Valor</label>
            <select name="valor" id="" required>
                <option value="">Seleccione un valor:</option>
                <option value="No se cumple en absoluto">0</option>
                <option value="Se cumple totalmente">10</option>
                <option value="Criterio no aplicable en el sitio">NA</option>
                <option value="No se cumple en todo el sitio">NTS</option>
                <option value="No se cumple en los enlaces principales">NEP</option>
                <option value="No se cumple en la pagina principal">NPP</option>
                <option value="No se cumple en alguna pagina interior">NPI</option>
                <option value="Se cumple el criterio">S</option>
            </select>
        </div>
        <div>
            <label for="">Relevancia</label>
            <input type="text" name="relevancia" id="" required maxlength="100">
        </div>
        <div>
            <label for="">Comentarios</label>
            <textarea name="comentario" id="" cols="30" rows="5"></textarea>
        </div>
        <div>
            <label for="">Valor interno(vc)</label>
            <input type="text" name="valor_interno" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor interno de relevancia(rc)</label>
            <input type="text" name="valor_interno_relevancia" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Factor de corrección(fc)</label>
            <input type="text" name="factor_correcion" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor parcial</label>
            <input type="text" name="valor_parcial" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor parcial 2</label>
            <input type="text" name="valor_parcial2" id="" required maxlength="200">
        </div>
    </div>
    <br>
    <div>
        <div>
            <label for="">Codigo: </label><label for="">AG7</label>
            <label for="">Criterio: </label><label for="">Se utiliza el idioma del usuario</label>
        </div>
        <div>
            <label for="">Valor</label>
            <select name="valor" id="" required>
                <option value="">Seleccione un valor:</option>
                <option value="No se cumple en absoluto">0</option>
                <option value="Se cumple totalmente">10</option>
                <option value="Criterio no aplicable en el sitio">NA</option>
                <option value="No se cumple en todo el sitio">NTS</option>
                <option value="No se cumple en los enlaces principales">NEP</option>
                <option value="No se cumple en la pagina principal">NPP</option>
                <option value="No se cumple en alguna pagina interior">NPI</option>
                <option value="Se cumple el criterio">S</option>
            </select>
        </div>
        <div>
            <label for="">Relevancia</label>
            <input type="text" name="relevancia" id="" required maxlength="100">
        </div>
        <div>
            <label for="">Comentarios</label>
            <textarea name="comentario" id="" cols="30" rows="5"></textarea>
        </div>
        <div>
            <label for="">Valor interno(vc)</label>
            <input type="text" name="valor_interno" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor interno de relevancia(rc)</label>
            <input type="text" name="valor_interno_relevancia" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Factor de corrección(fc)</label>
            <input type="text" name="factor_correcion" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor parcial</label>
            <input type="text" name="valor_parcial" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor parcial 2</label>
            <input type="text" name="valor_parcial2" id="" required maxlength="200">
        </div>
    </div>
    <br>
    <div>
        <div>
            <label for="">Codigo: </label><label for="">AG8</label>
            <label for="">Criterio: </label><label for="">Se da soporte a otro/s idioma/s</label>
        </div>
        <div>
            <label for="">Valor</label>
            <select name="valor" id="" required>
                <option value="">Seleccione un valor:</option>
                <option value="No se cumple en absoluto">0</option>
                <option value="Se cumple totalmente">10</option>
                <option value="Criterio no aplicable en el sitio">NA</option>
                <option value="No se cumple en todo el sitio">NTS</option>
                <option value="No se cumple en los enlaces principales">NEP</option>
                <option value="No se cumple en la pagina principal">NPP</option>
                <option value="No se cumple en alguna pagina interior">NPI</option>
                <option value="Se cumple el criterio">S</option>
            </select>
        </div>
        <div>
            <label for="">Relevancia</label>
            <input type="text" name="relevancia" id="" required maxlength="100">
        </div>
        <div>
            <label for="">Comentarios</label>
            <textarea name="comentario" id="" cols="30" rows="5"></textarea>
        </div>
        <div>
            <label for="">Valor interno(vc)</label>
            <input type="text" name="valor_interno" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor interno de relevancia(rc)</label>
            <input type="text" name="valor_interno_relevancia" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Factor de corrección(fc)</label>
            <input type="text" name="factor_correcion" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor parcial</label>
            <input type="text" name="valor_parcial" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor parcial 2</label>
            <input type="text" name="valor_parcial2" id="" required maxlength="200">
        </div>
    </div>
    <br>
    <div>
        <div>
            <label for="">Codigo: </label><label for="">AG9</label>
            <label for="">Criterio: </label><label for="">Traducción del sitio completa y correcta</label>
        </div>
        <div>
            <label for="">Valor</label>
            <select name="valor" id="" required>
                <option value="">Seleccione un valor:</option>
                <option value="No se cumple en absoluto">0</option>
                <option value="Se cumple totalmente">10</option>
                <option value="Criterio no aplicable en el sitio">NA</option>
                <option value="No se cumple en todo el sitio">NTS</option>
                <option value="No se cumple en los enlaces principales">NEP</option>
                <option value="No se cumple en la pagina principal">NPP</option>
                <option value="No se cumple en alguna pagina interior">NPI</option>
                <option value="Se cumple el criterio">S</option>
            </select>
        </div>
        <div>
            <label for="">Relevancia</label>
            <input type="text" name="relevancia" id="" required maxlength="100">
        </div>
        <div>
            <label for="">Comentarios</label>
            <textarea name="comentario" id="" cols="30" rows="5"></textarea>
        </div>
        <div>
            <label for="">Valor interno(vc)</label>
            <input type="text" name="valor_interno" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor interno de relevancia(rc)</label>
            <input type="text" name="valor_interno_relevancia" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Factor de corrección(fc)</label>
            <input type="text" name="factor_correcion" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor parcial</label>
            <input type="text" name="valor_parcial" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor parcial 2</label>
            <input type="text" name="valor_parcial2" id="" required maxlength="200">
        </div>
    </div>
    <br>
    <div>
        <div>
            <label for="">Codigo: </label><label for="">AG10</label>
            <label for="">Criterio: </label><label for="">Sitio web actualizado periódicamente</label>
        </div>
        <div>
            <label for="">Valor</label>
            <select name="valor" id="" required>
                <option value="">Seleccione un valor:</option>
                <option value="No se cumple en absoluto">0</option>
                <option value="Se cumple totalmente">10</option>
                <option value="Criterio no aplicable en el sitio">NA</option>
                <option value="No se cumple en todo el sitio">NTS</option>
                <option value="No se cumple en los enlaces principales">NEP</option>
                <option value="No se cumple en la pagina principal">NPP</option>
                <option value="No se cumple en alguna pagina interior">NPI</option>
                <option value="Se cumple el criterio">S</option>
            </select>
        </div>
        <div>
            <label for="">Relevancia</label>
            <input type="text" name="relevancia" id="" required maxlength="100">
        </div>
        <div>
            <label for="">Comentarios</label>
            <textarea name="comentario" id="" cols="30" rows="5"></textarea>
        </div>
        <div>
            <label for="">Valor interno(vc)</label>
            <input type="text" name="valor_interno" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor interno de relevancia(rc)</label>
            <input type="text" name="valor_interno_relevancia" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Factor de corrección(fc)</label>
            <input type="text" name="factor_correcion" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor parcial</label>
            <input type="text" name="valor_parcial" id="" required maxlength="200">
        </div>
        <div>
            <label for="">Valor parcial 2</label>
            <input type="text" name="valor_parcial2" id="" required maxlength="200">
        </div>
    </div>
    <br><br>
    <input type="submit" value="Guardar">



@endsection
