@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-lht6-1.cdninstagram.com/vp/cc9c5297ec4c82b3603585e38452dc65/5D655738/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=scontent-lht6-1.cdninstagram.com" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23K</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4">
                <strong>introtolaravel.org</strong>
            </div>
            <div>
                We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.
            </div>
            <div><a href="">www.introtolaravel.org</a></div>
        </div>
        <div class="row pt-5">
            <div class="col-4">
                <img src="https://scontent-lht6-1.cdninstagram.com/vp/1a3b25b9c842517f2deb8b2841a50263/5D61AEE1/t51.2885-15/sh0.08/e35/c2.0.745.745/s640x640/59798809_471455543593928_4744519222242354045_n.jpg?_nc_ht=scontent-lht6-1.cdninstagram.com" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://scontent-lht6-1.cdninstagram.com/vp/cf776fa1218b62e2f53e0c4760e8fb5b/5D559BAE/t51.2885-15/e35/c127.0.496.496/58033345_129109911608309_4080959596526945695_n.jpg?_nc_ht=scontent-lht6-1.cdninstagram.com" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://scontent-lht6-1.cdninstagram.com/vp/7b4f4a26d19a36ad4555cae2f2db38cf/5D75CAE3/t51.2885-15/sh0.08/e35/c6.0.738.738a/s640x640/59671261_300909900824870_753589034962477580_n.jpg?_nc_ht=scontent-lht6-1.cdninstagram.com" class="w-100">
            </div>
        </div>
    </div>
</div>
@endsection
