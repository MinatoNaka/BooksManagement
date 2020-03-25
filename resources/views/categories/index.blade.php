@extends('layouts.app')

@section('title', 'カテゴリー一覧')

@section('breadcrumbs')
    {{ Breadcrumbs::render('categories.index') }}
@endsection

@section('main')
    <div class="container-fluid">
        <div id="ui-view">
            <div>
                <div class="fade-in">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">検索</div>
                                {{ Form::open(['method' => 'GET', 'route' => 'categories.index', 'files' => true, 'class' => 'form-horizontal']) }}
                                <div class="card-body">
                                    <div class="form-group row">
                                        {{ Form::label('name', 'カテゴリー名', ['class' => 'col-md-2 col-form-label']) }}
                                        <div class="col-md-4">
                                            {{ Form::text('name', request('name'), ['id' => 'name', 'class' => 'form-control']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    {{ Form::submit('検索', ['class' => 'btn btn-sm btn-primary']) }}
                                    {{ Form::reset('リセット', ['class' => 'btn btn-sm btn-danger']) }}
                                </div>
                                {{ Form::close() }}
                            </div>
                            <div class="card">
                                <div class="card-header">カテゴリー一覧</div>
                                <div class="card-body">
                                    <table class="table table-responsive-sm table-striped">
                                        <thead>
                                        <tr>
                                            <th>@sortablelink('id', 'ID')</th>
                                            <th>@sortablelink('name', 'カテゴリー名')</th>
                                            <th>操作</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categories as $category)
                                            <tr>
                                                <td>{{ $category->id }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>
                                                    @can('view', $category)
                                                        <a href="{{ route('categories.show', $category) }}"
                                                           class="btn btn-sm btn-outline-info" type="button">詳細</a>
                                                    @endcan
                                                    @can('update', $category)
                                                        <a href="{{ route('categories.edit', $category) }}"
                                                           class="btn btn-sm btn-outline-success" type="button">編集</a>
                                                    @endcan
                                                    @can('delete', $category)
                                                        {{ Form::open(['method' => 'DELETE', 'route' => ['categories.destroy', $category], 'class' => 'd-inline', 'v-on:submit' => 'confirm']) }}
                                                        {{ Form::submit('削除', ['class' => 'btn btn-sm btn-outline-danger']) }}
                                                        {{ Form::close() }}
                                                    @endcan
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $categories->appends(request()->except('page'))->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ mix('js/views/categories/index.js') }}" defer></script>
@endpush
