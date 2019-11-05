@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img alt="nba's profile picture" class="rounded-circle border border-danger" src="https://scontent-lga3-1.cdninstagram.com/vp/a259214ebff2650d9130b11e4d4c7eed/5E5AE215/t51.2885-19/s150x150/19765218_150971465463070_8142077882231947264_a.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com">
        </div>
        <div class="col-9 p-5">
            <div>
{{--                1:10:20--}}
                <h1>{{$user -> username}}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-4"><b>31,647</b> posts</div>
                <div class="pr-4"><b>40.9</b>m followers</div>
                <div class="pr-4"><b>863</b> following</div>
            </div>
            <div class="pt-4"><h6 class="font-weight-bold">NBA</h6></div>
            <span>
                30 teams, 1 🏆
                <br>
                👟:
                <a class="notranslate" href="/nbakicks/">@nbakicks</a>
                <br>
                📽:
                <a class="notranslate" href="/nbahistory/">@nbahistory</a>
                <br>
                🤝:
                <a class="notranslate" href="/nbacares/">@nbacares</a>
                <br>
                👕:
                <a class="notranslate" href="/nbastore/">@nbastore</a>
            </span><br>
            <a class="yLUwa" href="https://l.instagram.com/?u=https%3A%2F%2Fnba.app.link%2Fleaguepass&amp;e=ATMFw8HzhMixRJXHYYI03_FQD2vfpxTRZcaDFZ293btxueQQgb84Bf-gjp4wHfNxXrowLslsk9r6XIo" rel="me nofollow noopener noreferrer" target="_blank"><b>nba.app.link/leaguepass</b></a>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <img srcset="https://scontent-lga3-1.cdninstagram.com/vp/b6605dbf03b2067f77fd9566cab2e39c/5E4F4FE8/t51.2885-15/e35/c11.0.1417.1417a/s150x150/73017676_992647574405934_2590416914843666005_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&amp;_nc_cat=1 150w,https://scontent-lga3-1.cdninstagram.com/vp/b7cb7476ad67bbb8fc6ee56efbbaefdd/5E41C6A2/t51.2885-15/e35/c11.0.1417.1417a/s240x240/73017676_992647574405934_2590416914843666005_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&amp;_nc_cat=1 240w,https://scontent-lga3-1.cdninstagram.com/vp/ccbc4575de5b951190ed79bdaf15f442/5E5EE518/t51.2885-15/e35/c11.0.1417.1417a/s320x320/73017676_992647574405934_2590416914843666005_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&amp;_nc_cat=1 320w,https://scontent-lga3-1.cdninstagram.com/vp/0471aef80efab81f76358987b73e62e6/5E596542/t51.2885-15/e35/c11.0.1417.1417a/s480x480/73017676_992647574405934_2590416914843666005_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&amp;_nc_cat=1 480w,https://scontent-lga3-1.cdninstagram.com/vp/8efe1f38193198ed0011d9e4e6fd6036/5E57B2F3/t51.2885-15/sh0.08/e35/c11.0.1417.1417a/s640x640/73017676_992647574405934_2590416914843666005_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&amp;_nc_cat=1 640w" src="https://scontent-lga3-1.cdninstagram.com/vp/8efe1f38193198ed0011d9e4e6fd6036/5E57B2F3/t51.2885-15/sh0.08/e35/c11.0.1417.1417a/s640x640/73017676_992647574405934_2590416914843666005_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&amp;_nc_cat=1" class="w-100">
        </div>
        <div class="col-4">
            <img srcset="https://scontent-lga3-1.cdninstagram.com/vp/a7c2c78f25cdbe31cd9270ef2b9545aa/5E47A7D9/t51.2885-15/e35/c0.180.1440.1440a/s150x150/74529122_141401283821639_91663566214711928_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&amp;_nc_cat=1 150w,https://scontent-lga3-1.cdninstagram.com/vp/eb6f7a72ef86cd860fe560bb36dc2beb/5E54E134/t51.2885-15/e35/c0.180.1440.1440a/s240x240/74529122_141401283821639_91663566214711928_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&amp;_nc_cat=1 240w,https://scontent-lga3-1.cdninstagram.com/vp/49a7571a28ca4d7a666d3ff3d7015fd1/5E485327/t51.2885-15/e35/c0.180.1440.1440a/s320x320/74529122_141401283821639_91663566214711928_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&amp;_nc_cat=1 320w,https://scontent-lga3-1.cdninstagram.com/vp/4ec3f11b9f4d15d47033b2b5713501dd/5E55CE3B/t51.2885-15/e35/c0.180.1440.1440a/s480x480/74529122_141401283821639_91663566214711928_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&amp;_nc_cat=1 480w,https://scontent-lga3-1.cdninstagram.com/vp/399545aa27041e10b281a05e441ee016/5E557DEA/t51.2885-15/sh0.08/e35/c0.180.1440.1440a/s640x640/74529122_141401283821639_91663566214711928_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&amp;_nc_cat=1 640w" src="https://scontent-lga3-1.cdninstagram.com/vp/399545aa27041e10b281a05e441ee016/5E557DEA/t51.2885-15/sh0.08/e35/c0.180.1440.1440a/s640x640/74529122_141401283821639_91663566214711928_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&amp;_nc_cat=1" class="w-100">
        </div>
        <div class="col-4">
            <img srcset="https://scontent-lga3-1.cdninstagram.com/vp/5c86e5a03854ddc98c90b1b9d35e7216/5DBA7F75/t51.2885-15/e35/s150x150/73128531_530141624449527_8809454225602862762_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&amp;_nc_cat=1 150w,https://scontent-lga3-1.cdninstagram.com/vp/387826d8ed007bb79d2f8425664fb345/5DBB623F/t51.2885-15/e35/s240x240/73128531_530141624449527_8809454225602862762_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&amp;_nc_cat=1 240w,https://scontent-lga3-1.cdninstagram.com/vp/7cbc8321134292947223388c2063b114/5DBADD85/t51.2885-15/e35/s320x320/73128531_530141624449527_8809454225602862762_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&amp;_nc_cat=1 320w,https://scontent-lga3-1.cdninstagram.com/vp/0785db17dc7330a2309d82cb858f52d4/5DBAE69F/t51.2885-15/e35/s480x480/73128531_530141624449527_8809454225602862762_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&amp;_nc_cat=1 480w,https://scontent-lga3-1.cdninstagram.com/vp/0f239c95ac940be6a61e6136ce90a687/5DBAA6D2/t51.2885-15/sh0.08/e35/s640x640/73128531_530141624449527_8809454225602862762_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&amp;_nc_cat=1 640w" src="https://scontent-lga3-1.cdninstagram.com/vp/0f239c95ac940be6a61e6136ce90a687/5DBAA6D2/t51.2885-15/sh0.08/e35/s640x640/73128531_530141624449527_8809454225602862762_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&amp;_nc_cat=1" class="w-100">
        </div>
    </div>
</div>
@endsection
