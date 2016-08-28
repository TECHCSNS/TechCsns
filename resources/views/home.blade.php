@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">ユーザープロフィール<a href="/userprofile">編集</a></div>

                  <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img alt="" src="https://placehold.jp/3d4070/ffffff/150x150.png?text=%E3%83%A6%E3%83%BC%E3%82%B6%E3%83%BC%0A%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B3"/>
                        </div>
                      
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2><ruby>{{ $user_profile->name or '未登録' }}<rp>(</rp><rt>{{ $user_profile->katakana_name or '未登録' }}</rt><rp>)</rp></ruby></h2>
                                </div>
                                <div class="col-md-6">
                                   @if (isset($user_profile) && $followFlag )
                                        <form class="form-horizontal" method="POST" action="{{ url('/unfollow') }}">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="user_id" value="{{ $auth_user or '' }}">
                                            <input type="hidden" name="follow_id" value="{{ $user_profile->id or '0'}}">
                                            <button type="submit" class="btn btn-default">フォロー解除</button>
                                        </form>
                                    @elseif (isset($user_profile)&& $auth_user != $user_profile->id)
                                        <form class="form-horizontal" method="POST" action="{{ url('/follow') }}">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="user_id" value="{{ $auth_user or '' }}">
                                            <input type="hidden" name="follow_id" value="{{ $user_profile->id or '0'}}">
                                            <button type="submit" class="btn btn-default">フォロー</button>
                                        </form>
                                    @endif
                                </div>
                            </div>

                            <hr/>

                            <div class="row">
                                <div class="col-md-6"><a href="#">フォロー：15</a></div>
                                <div class="col-md-6"><a href="#">フォロワー：10</a></div>
                            </div>

                        </div>
                      
                        <div class="col-sm-12 table-wrap" style="margin-top:30px;">
                            <table class="table">
                                <tr>
                                    <th>誕生日</th>
                                    <td>2016/07/12</td>
                                </tr>
                                <tr>
                                    <th colspan="2">備考（テーブル未実装）</th>
                                </tr>
                                <tr>
                                    <td colspan="2">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキス
                                      トダミーテキストダミーテキストダミーテキストダミーテキスト
                                      ダミーテキストダミーテキストダミーテキストダミーテキストダ
                                      ミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
                                      ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</td>
                                </tr>
                            </table>
                        </div><!-- .table-wrap -->


                    </div>
                </div>
            </div> <!-- .panel -->

        </div>
    </div>
</div>
<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
@endsection
