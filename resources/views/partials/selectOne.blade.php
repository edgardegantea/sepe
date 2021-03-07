<select class="form-group" name="valor[]" id="" required>
    <option value="">--Selecciona un valor--</option>
    @for($i = 0; $i<=10;$i++)
        <option value="{{ $i }}">{{ $i }}</option>
    @endfor
    <option value="0">NA</option>
</select>
