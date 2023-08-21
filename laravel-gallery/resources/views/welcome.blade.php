
@extends('layout')

@section('content')

    <div class="container">
    <h1 align="center">My Gallery</h1>
        <div class="row">
            <style>
                button.my-button {
                    width: 100%;
                    margin: 5px 0px;
                }
                div.gallery-item {
                    margin: 10px 0px;
                }

            </style>
            <div class="col-md-3" gallery-item>
                <div>
                <img src="/image/image.jpg" alt="" class="img-thumbnail">

                    <button type="button" class="btn btn-info my-button ">Info</button>

                    <button type="button" class="btn btn-warning my-button ">Warning</button>

                    <button type="button" class="btn btn-danger my-button ">Danger</button>
                </div>
            </div>
            <div class="col-md-3" gallery-item>
                <div>
                    <img src="/image/image.jpg" alt="" class="img-thumbnail">

                    <button type="button" class="btn btn-info my-button ">Info</button>

                    <button type="button" class="btn btn-warning my-button ">Warning</button>

                    <button type="button" class="btn btn-danger my-button ">Danger</button>
                </div>
            </div>
            <div class="col-md-3" gallery-item>
                <div>
                    <img src="/image/image.jpg" alt="" class="img-thumbnail">

                    <button type="button" class="btn btn-info my-button ">Info</button>

                    <button type="button" class="btn btn-warning my-button ">Warning</button>

                    <button type="button" class="btn btn-danger my-button ">Danger</button>
                </div>
            </div>
            <div class="col-md-3" gallery-item>
                <div>
                    <img src="/image/image.jpg" alt="" class="img-thumbnail">

                    <button type="button" class="btn btn-info my-button ">Info</button>

                    <button type="button" class="btn btn-warning my-button ">Warning</button>

                    <button type="button" class="btn btn-danger my-button ">Danger</button>
                </div>
            </div>

            <div class="col-md-3" gallery-item>
                <div>
                    <img src="/image/image.jpg" alt="" class="img-thumbnail">

                    <button type="button" class="btn btn-info my-button ">Info</button>

                    <button type="button" class="btn btn-warning my-button ">Warning</button>

                    <button type="button" class="btn btn-danger my-button ">Danger</button>
                </div>
            </div>
            <div class="col-md-3" gallery-item>
                <div>
                    <img src="/image/image.jpg" alt="" class="img-thumbnail">

                    <button type="button" class="btn btn-info my-button ">Info</button>

                    <button type="button" class="btn btn-warning my-button ">Warning</button>

                    <button type="button" class="btn btn-danger my-button ">Danger</button>
                </div>
            </div>
            <div class="col-md-3" gallery-item>
                <div>
                    <img src="/image/image.jpg" alt="" class="img-thumbnail">

                    <button type="button" class="btn btn-info my-button ">Info</button>

                    <button type="button" class="btn btn-warning my-button ">Warning</button>

                    <button type="button" class="btn btn-danger my-button ">Danger</button>
                </div>
            </div>
            <div class="col-md-3" gallery-item>
                <div>
                    <img src="/image/image.jpg" alt="" class="img-thumbnail">

                    <button type="button" class="btn btn-info my-button ">Info</button>

                    <button type="button" class="btn btn-warning my-button ">Warning</button>

                    <button type="button" class="btn btn-danger my-button ">Danger</button>
                </div>
            </div>
        </div>
    </div>
@endsection


