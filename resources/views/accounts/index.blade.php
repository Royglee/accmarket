@extends('app')

@section('content')
<div class="container">
            @foreach($accounts->chunk(3)->all() as $row)
                <div class="row  account_row">
                    @foreach($row as $account)

                        <div class="col-md-4 account_list_item_wrapper">
                            <div class="account_list_item">
                                <ul class="specs kamuklass">
                                    <li>Server: {{$account->server}}</li>
                                    <li>Division: {{$account->league}} {{$account->division}}</li>
                                    <li>Champions: {{$account->champions}}</li>
                                    <li>Skins: {{$account->skins}}</li>
                                </ul>
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