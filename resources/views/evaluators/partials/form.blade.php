@csrf
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="firstname"
                   value="{{(isset($evaluator))?$evaluator->firstname:old('firstname')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Apellidos</label>
            <input type="text" class="form-control" name="lastname"
                   value="{{(isset($evaluator))?$evaluator->lastname:old('lastname')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Correo electrónico institucional</label>
            <input type="text" class="form-control" name="email"
                   value="{{(isset($evaluator))?$evaluator->email:old('email')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">ID proyecto</label>
            <input type="number" class="form-control" name="idProject"
                   value="{{(isset($evaluator))?$evaluator->idProject:old('idProject')}}" required>
        </div>
    </div>
