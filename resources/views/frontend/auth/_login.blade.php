{!! Form::open(['route' => 'frontend.login.post', 'method' => 'POST', 'class' => 'leave-comment', 'id' => 'form_login']) !!}
    <h4 class="m-text26 p-b-36 p-t-15">{{transa('login')}}</h4>

    <div class="bo4 of-hidden size15 m-b-20">
        {!! Form::text('login_id', null, ['class' => 'sizefull s-text7 p-l-22 p-r-22', 'placeholder' => transm('users.login_id').' *']) !!}
    </div>
    <div class="bo4 of-hidden size15 m-b-20">
        {!! Form::password('password', ['class' => 'sizefull s-text7 p-l-22 p-r-22', 'placeholder' => transm('users.password').' *']) !!}
    </div>
    <div class="w-size25">
        <!-- Button -->
        <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" type="button" onclick="$('form#form_login').submit()">{{transa('login')}}</button>
    </div>
{!! Form::close() !!}
