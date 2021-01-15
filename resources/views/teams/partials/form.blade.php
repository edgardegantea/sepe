@csrf
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="">Ingeniería</label>
            <input type="text" class="form-control" name="engineering"
                   value="{{(isset($team))?$team->engineering:old('engineering')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">Semestre</label>
            <input type="number" class="form-control" name="semester"
                   value="{{(isset($team))?$team->semester:old('semester')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">ID proyecto</label>
            <input type="number" class="form-control" name="idProject"
                   value="{{(isset($team))?$team->idProject:old('idProject')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">ID estudiante</label>
            <input type="number" class="form-control" name="idStudent"
                   value="{{(isset($team))?$team->idStudent:old('idStudent')}}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label for="">ID evaluador</label>
            <input type="number" class="form-control" name="idEvaluator"
                   value="{{(isset($team))?$team->idEvaluator:old('idEvaluator')}}" required>
        </div>
    </div>
</div>
