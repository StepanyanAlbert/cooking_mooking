@extends('layouts.main')
@section('title')
    {{trans('auth.Login')}}
    @endsection
@section('content')
    <div class="container">
        <div class="row">

            @if(Session::has('message'))
                <div class="alert alert-danger">
                <span class="alert text-center"  >
                    {{Session::get('message')}}
                </span>
            </div>
            @endif
            <div class="col-md-4 col-md-offset-4 text-center">
                <div class="col-md-12">
                   {{trans('auth.Login via')}}
                    <div class="social-buttons">
                        <a href="{{route('provider',['provdier'=>'facebook'])}}" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                        <a href="{{route('provider',['provdier'=>'twitter'])}}" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                        <a href="{{route('provider',['provdier'=>'linkedin'])}}" class="btn btn-linkedin"><i class="fa fa-linkedin"></i> Linkedin</a>
                        <a href="{{route('provider',['provdier'=>'vkontakte'])}}" class="btn btnvk btn-vk"><i class="fa fa-vk" aria-hidden="true"></i> VK</a>
                        <a href="{{route('provider',['provdier'=>'google'])}}" class="btn btn-google"><i class="fa fa-google-plus" aria-hidden="true"></i> Google+</a>
                        <a href="{{route('provider',['provdier'=>'odnoklassniki'])}}" class="btn btn-odnoklassniki "><i class="fa fa-odnoklassniki-square" aria-hidden="true"></i> Odnoklassniki</a>
                    </div>
                   {{trans('auth.or')}}
                    <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                        <div class="form-group">
                            <label class="sr-only" for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="{{trans('auth.Email address')}}" required>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="{{trans('auth.Password')}}" required>
                            <div class="help-block text-right"><a href="">{{trans ('auth.Forget the password ?')}}</a></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">{{trans('auth.keep me logged-in')}}
                            </label>
                        </div>
                    </form>
                </div>
                <div class="bottom text-center">
                    {{trans('auth.New here ? ')}}<a href="#"><b>{{trans('auth.Join Us')}}</b></a>
                </div>
            </div>
       </div>
    </div>
    @endsection