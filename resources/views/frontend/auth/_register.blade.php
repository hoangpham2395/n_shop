{!! Form::open(['route' => 'frontend.register', 'method' => 'POST', 'class' => 'leave-comment', 'id' => 'form_register']) !!}
    <h4 class="m-text26 p-b-36 p-t-15">{{transa('register')}}</h4>

    <label class="s-text7 bold required">{{transm('users.login_id')}}</label>
    <div class="bo4 of-hidden size15 m-b-20">
        {!! Form::text('login_id', null, ['class' => 'sizefull s-text7 p-l-22 p-r-22', 'placeholder' => transm('users.login_id'), 'required']) !!}
    </div>
    <div class="of-hidden size15 m-b-20">
        <div class="row">
            @foreach (getConfig('frontend_type_login') as $type => $textType)
                <div class="col-6" style="display: flex; align-items: center;">
                    {!! Form::radio('type_login', (string) $type, (string) getConstant('FRONTEND_LOGIN_TYPE_EMAIL'), ['id' => 'type_login_' . $type, 'class' => 'm-l-10']) !!}
                    <label class="s-text7 m-l-10 m-b-0" for="type_login_{{$type}}">{{$textType}}</label>
                </div>
            @endforeach
        </div>
    </div>

    <label class="s-text7 bold required">{{transm('users.password')}}</label>
    <div class="bo4 of-hidden size15 m-b-20">
        {!! Form::password('password', ['class' => 'sizefull s-text7 p-l-22 p-r-22', 'placeholder' => transm('users.password')]) !!}
    </div>

    <label class="s-text7 bold required">{{transm('users.confirm_password')}}</label>
    <div class="bo4 of-hidden size15 m-b-20">
        {!! Form::password('confirm_password', ['class' => 'sizefull s-text7 p-l-22 p-r-22', 'placeholder' => transm('users.confirm_password')]) !!}
    </div>
    <div class="w-size25">
        <!-- Button -->
        <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" type="button" onclick="$('form#form_register').submit()">{{transa('register')}}</button>
    </div>
{!! Form::close() !!}
