@csrf
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="name" value="{{(isset($profile))?$profile->name:old('name')}}"
                   required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Descripción</label>
            <input type="text" class="form-control" name="description"
                   value="{{(isset($profile))?$profile->description:old('description')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Permisos</label>
            <input type="text" class="form-control" name="permissions"
                   value="{{(isset($profile))?$profile->permissions:old('permissions')}}" required>
        </div>
