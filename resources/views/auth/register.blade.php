@extends('layouts.auth')

@section('content')
    <div class="row" style="font-size: 20px;">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3><strong>{{ ucfirst(config('app.name')) }} @lang('quickadmin.qa_register')</strong></h3></div>
                <div class="panel-body">
                    
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>@lang('quickadmin.qa_whoops')</strong> @lang('quickadmin.qa_there_were_problems_with_input'):
                            <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal"
                          role="form"
                          method="POST"
                          action="{{ url('register') }}">
                        <input type="hidden"
                               name="_token"
                               value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">@lang('quickadmin.qa_name')</label>

                            <div class="col-md-6">
                                <input type="text"
                                       class="form-control"
                                       name="name"
                                       value="{{ old('name') }}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label">@lang('quickadmin.qa_email')</label>

                            <div class="col-md-6">
                                <input type="email"
                                       class="form-control"
                                       name="email"
                                       value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">@lang('quickadmin.qa_password')</label>

                            <div class="col-md-6">
                                <input type="password"
                                       class="form-control"
                                       name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">@lang('quickadmin.qa_password_confirm')</label>

                            <div class="col-md-6">
                                <input type="password"
                                       class="form-control"
                                       name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                Have already signed up? <a href="{{ route('auth.login') }}">@lang('quickadmin.qa_login')</a>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit"
                                        class="btn btn-primary"
                                        style="margin-right: 15px;">
                                    @lang('quickadmin.qa_register')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection