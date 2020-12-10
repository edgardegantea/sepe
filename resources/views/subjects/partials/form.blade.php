@csrf
<div class="row">

    <div class="col-12">
        <div class="form-group">
            <label for="">Nombre de la asignatura</label>
            <input type="text" class="form-control" name="name" value="{{(isset($subject))?$subject->name:old('name')}}"
                   required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Docente asignado</label>
            <input type="text" class="form-control" name="teacher"
                   value="{{(isset($subject))?$subject->teacher:old('teacher')}}" required>
        </div>
    </div>
