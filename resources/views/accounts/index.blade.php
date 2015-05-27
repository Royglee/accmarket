@extends('app')

@section('content')
<div class="container">
            @foreach($accounts->chunk(3)->all() as $row)
                <div class="row  account_row">
                    @foreach($row as $account)

                        <div class="col-md-4 account_list_item_wrapper">
                            <div class="account_list_item" >
                                <div class="account_list_item_top" @include('accounts/partials/_background_badge',['account',$account])>
                                    <div class="price">
                                        ${{$account->price}}
                                    </div>
                                    <ul class="specs">
                                        <li>Server: {{$account->server}}</li>
                                        <li>Division: {{$account->league}} {{$account->division}}</li>
                                        <li>Champions: {{$account->champions}}</li>
                                        <li>Skins: {{$account->skins}}</li>
                                    </ul>
                                </div>
                                <div class="title">
                                {!!link_to('accounts/'.$account->id , $account->title)!!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
</div>
@endsection
