@csrf
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="firstName"
                   value="{{(isset($evaluator))?$evaluator->firstName:old('firstName')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Apellidos</label>
            <input type="text" class="form-control" name="lastName"
                   value="{{(isset($evaluator))?$evaluator->lastName:old('lastName')}}" required>
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
</div>
