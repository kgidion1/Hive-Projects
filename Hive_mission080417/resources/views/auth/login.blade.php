<div class="form-horizontal h ">
    <p><b>Login to your Account</b></p><br/>

    <form role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <input id="username" type="text" placeholder="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
        </div>
        <div class="form-group">
            <input id="password" placeholder="password" type="password" class="form-control" name="password" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-primary"> Login </button><br/>
            <a class="btn btn-link" href="{{ route('password.request') }}">
                Forgot Your Password?
            </a>
        </div>
    </form>
    <div class="foot text-center" style="position:absolute; bottom:0; opacity:0.6; font-size:10pt; padding:20px;">
        <span>&copy;<?php echo date("Y");?> Hive Technologies Ltd</span>
    </div>
</div>
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--@endsection--}}
