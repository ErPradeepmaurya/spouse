@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
    <!-- LOGIN -->
    <section>
        <div class="login">
            <div class="d-flex justify-content-center align-items-center">
                <div class="row shadow-lg p-4 rounded bg-white w-auto">
                    <div>
                        <div class="form-tit">
                            <h1>Sign in to Matrimony</h1>
                            <p>Not a member? <a href="{{ route('sign-up') }}">Sign up now</a></p>
                        </div>
                        <div class="form-login">
                            <form>
                                <div class="form-group">
                                    <label class="lb">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email"
                                        name="email">
                                </div>
                                <div class="form-group">
                                    <label class="lb">Password:</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                                        name="pswd">
                                </div>
                                <div class="form-group form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="agree"> Remember
                                        me
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->
@endsection
