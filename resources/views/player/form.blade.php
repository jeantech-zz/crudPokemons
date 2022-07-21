<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::hidden('id', $player->id, ['class' => 'form-control' . ($errors->has('id') ? ' is-invalid' : ''), 'placeholder' => 'Id']) }}
            {!! $errors->first('id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $player->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('character_id') }}
            <select class="form-control" id="character_id" name="character_id">
                @foreach ($characters as $character)
                    <option value={{ $character->id }} >{{ $character->name }}</option>
                @endforeach
            </select>
            {!! $errors->first('character_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
