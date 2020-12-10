@csrf
<div class="row">

    <div class="col-12">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="firstname"
                   value="{{(isset($student))?$student->firstname:old('firstname')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Apellidos</label>
            <input type="text" class="form-control" name="lastname"
                   value="{{(isset($student))?$student->lastname:old('lastname')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Semestre</label>
            <input type="number" class="form-control" name="semester"
                   value="{{(isset($student))?$student->semester:old('semester')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Ingeniería</label>
            <input type="text" class="form-control" name="engineering"
                   value="{{(isset($student))?$student->engineering:old('engineering')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Número de control</label>
            <input type="text" class="form-control" name="controlNumber"
                   value="{{(isset($student))?$student->controlNumber:old('controlNumber')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Correo electrónico institucional</label>
            <input type="text" class="form-control" name="email"
                   value="{{(isset($student))?$student->email:old('email')}}" required>
        </div>
    </div>
