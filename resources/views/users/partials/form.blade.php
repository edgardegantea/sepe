@csrf
<div class="row">

    <div class="col-12">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="firstname"
                   value="{{(isset($user))?$user->firstname:old('firstname')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Apellidos</label>
            <input type="text" class="form-control" name="lastname"
                   value="{{(isset($user))?$user->lastname:old('lastname')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">ID Perfil</label>
            <input type="text" class="form-control" name="id_Profiles"
                   value="{{(isset($user))?$user->id_Profiles:old('id_Profiles')}}" required>
        </div>
    </div>
