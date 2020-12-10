@csrf
<div class="row">

    <div class="col-12">
        <div class="form-group">
            <label for="">Nombre proyecto</label>
            <input type="text" class="form-control" name="name" value="{{(isset($project))?$project->name:old('name')}}"
                   required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Fecha de registro</label>
            <input type="date" class="form-control" name="dateRegistration"
                   value="{{(isset($project))?$project->dateRegistration:old('dateRegistration')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Semestre</label>
            <input type="number" class="form-control" name="semester"
                   value="{{(isset($project))?$project->semester:old('semester')}}" required>
        </div>
