<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', __('models/catalogs.fields.title').':') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', __('models/catalogs.fields.description').':') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', __('models/catalogs.fields.image').':') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div>

<!-- View Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('view_type', __('models/catalogs.fields.view_type').':') !!}
    {!! Form::select('view_type',__('models/catalogs.view_type'), null, ['class' => 'form-control']) !!}
</div>

<!-- Seo Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('seo_title', __('models/catalogs.fields.seo_title').':') !!}
    {!! Form::text('seo_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Seo Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('seo_description', __('models/catalogs.fields.seo_description').':') !!}
    {!! Form::text('seo_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Seo Keyword Field -->
<div class="form-group col-sm-6">
    {!! Form::label('seo_keyword', __('models/catalogs.fields.seo_keyword').':') !!}
    {!! Form::text('seo_keyword', null, ['class' => 'form-control']) !!}
</div>

<!-- Seo Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('seo_image', __('models/catalogs.fields.seo_image').':') !!}
    {!! Form::text('seo_image', null, ['class' => 'form-control']) !!}
</div>
