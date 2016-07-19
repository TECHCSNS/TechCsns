@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">ユーザープロフィール</div>

                  <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img alt="" src="https://placehold.jp/3d4070/ffffff/150x150.png?text=%E3%83%A6%E3%83%BC%E3%82%B6%E3%83%BC%0A%E3%82%A2%E3%82%A4%E3%82%B3%E3%83%B3"/>
                        </div>
                      
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2><ruby>大木<rp>(</rp><rt>オオギ</rt><rp>)</rp> 裕介<rp>(</rp><rt>ユウスケ</rt><rp>)</rp></ruby></h2>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-default">フォロー</button>
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
