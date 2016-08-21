<div class="form-group">
  <div class="input">

    <div class="input-group-addon">Name</div>

    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Project Name'] ) !!}

  </div>
</div>

<div class="form-group">
  <div class="input">

    <div class="input-group-addon">Description</div>

    {!! Form::textarea('desc', null, ['rows'=>'3', 'cols'=>'3', 'class'=>'form-control', 'placeholder'=>'Project Description'] ) !!}

  </div>
</div>

<div class="form-group">
  <div class="input">

    <div class="input-group-addon">Due Date</div>

    {!! Form::text('duedate', null, ['id'=>'datepicker', 'class'=>'form-control', 'placeholder'=>'Project Due Date'] ) !!}

  </div>
</div>
