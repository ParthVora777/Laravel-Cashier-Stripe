@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Subscriptions</h3></div>
                <div class="panel-body">
                    <br/>
                    <div class="form-group">
                        <div class="col-md-4 jumbotron text-center col-md-offset-1">
                            <p>Daily ($1)</p>
                            <form class="form-horizontal" method="GET" action="{{ url('register') }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="subscription-plan" value="1">
                                <button type="submit" class="btn btn-primary">
                                    Sign up
                                </button>
                            </form>
                        </div>
                        <div class="col-md-4 jumbotron text-center col-md-offset-2">
                            <p>Weekly ($7)</p>
                            <form class="form-horizontal" method="GET" action="{{ url('register') }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="subscription-plan" value="2">
                                <button type="submit" class="btn btn-primary">
                                    Sign up
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
