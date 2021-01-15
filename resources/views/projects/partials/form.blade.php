@csrf
<div class="row">

    <div class="col-12">
        <div class="form-group">
            <label for="">Nombre proyecto</label>
            <input type="text" class="form-control" name="name" value="" required>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">Semestre</label>
            <select name="semester" id="" required>
                <option value="">--Selecciona tu semestre--</option>
                @for($i = 1; $i<=13;$i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor

            </select>
        </div>

    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="">Descripción</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
    </div>
</div>
