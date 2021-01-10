@csrf
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="firstName"
                   value="{{(isset($teacher))?$teacher->firstName:old('firstName')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Apellidos</label>
            <input type="text" class="form-control" name="lastName"
                   value="{{(isset($teacher))?$teacher->lastName:old('lastName')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Número de control</label>
            <input type="text" class="form-control" name="controlNumber"
                   value="{{(isset($teacher))?$teacher->controlNumber:old('controlNumber')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Correo electrónico institucional</label>
            <input type="text" class="form-control" name="email"
                   value="{{(isset($teacher))?$teacher->email:old('email')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">ID proyecto</label>
            <input type="number" class="form-control" name="idProject"
                   value="{{(isset($teacher))?$teacher->idProject:old('idProject')}}" required>
        </div>
    </div>
