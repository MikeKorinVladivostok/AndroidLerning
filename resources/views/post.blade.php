@extends('header')

@section('content')

<div class="container" >
    <div class="col100 form-wrap form-wrap-about" style="padding:0;" id="block_for_send_write_me">
        <form action="/createpost" method="GET"  id="request">
            <div id="editor" name="text"></div>
            <p><input type="submit" id="submit" value="Submit"></p>
        </form>
    </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/inline/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset("/js/script.js")}}"></script>
@endsection

