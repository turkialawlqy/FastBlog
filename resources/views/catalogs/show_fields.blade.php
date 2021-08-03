<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', __('models/catalogs.fields.id').':') !!}
    <p>{{ $catalog->id }}</p>
</div>

<!-- Parent Id Field -->
<div class="col-sm-12">
    {!! Form::label('parent_id', __('models/catalogs.fields.parent_id').':') !!}
    <p>{{ $catalog->parent_id }}</p>
</div>

<!-- Locale Field -->
<div class="col-sm-12">
    {!! Form::label('locale', __('models/catalogs.fields.locale').':') !!}
    <p>{{ $catalog->locale }}</p>
</div>

<!-- Locale Id Field -->
<div class="col-sm-12">
    {!! Form::label('locale_id', __('models/catalogs.fields.locale_id').':') !!}
    <p>{{ $catalog->locale_id }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', __('models/catalogs.fields.title').':') !!}
    <p>{{ $catalog->title }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', __('models/catalogs.fields.description').':') !!}
    <p>{{ $catalog->description }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', __('models/catalogs.fields.image').':') !!}
    <p>{{ $catalog->image }}</p>
</div>

<!-- View Type Field -->
<div class="col-sm-12">
    {!! Form::label('view_type', __('models/catalogs.fields.view_type').':') !!}
    <p>{{ $catalog->view_type }}</p>
</div>

<!-- Seo Title Field -->
<div class="col-sm-12">
    {!! Form::label('seo_title', __('models/catalogs.fields.seo_title').':') !!}
    <p>{{ $catalog->seo_title }}</p>
</div>

<!-- Seo Description Field -->
<div class="col-sm-12">
    {!! Form::label('seo_description', __('models/catalogs.fields.seo_description').':') !!}
    <p>{{ $catalog->seo_description }}</p>
</div>

<!-- Seo Keyword Field -->
<div class="col-sm-12">
    {!! Form::label('seo_keyword', __('models/catalogs.fields.seo_keyword').':') !!}
    <p>{{ $catalog->seo_keyword }}</p>
</div>

<!-- Seo Image Field -->
<div class="col-sm-12">
    {!! Form::label('seo_image', __('models/catalogs.fields.seo_image').':') !!}
    <p>{{ $catalog->seo_image }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', __('models/catalogs.fields.created_at').':') !!}
    <p>{{ $catalog->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', __('models/catalogs.fields.updated_at').':') !!}
    <p>{{ $catalog->updated_at }}</p>
</div>

