@extends('layouts.master')
@section('title', 'Page Title')

@section('addCss')
<style>
      form { padding: 3px; position: fixed; bottom: 0; }
      #messages { list-style-type: none; margin: 5px; padding: 0; }
      #messages li { padding: 5px 10px; font-size: 18px; }
      #messages li:nth-child(odd) { background: #eee; }
      i.material-icons {padding-top: 9px;}
</style>
@stop


@section('content')
<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">WebSocket</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="">Link</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Link</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here -->
    <ul id="messages"></ul>


    <form action="">
		<div class="mdl-textfield mdl-js-textfield textfield-demo">
    <input class="mdl-textfield__input" autocomplete="off" type="text" id="m" />
    <label class="mdl-textfield__label" for="m">Text...</label>
  </div>
  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary">
    Sendo
  </button>
	</form>
</div>
  </main>
</div>
@stop

@section ('addJs')
<script src="//cdn.socket.io/socket.io-1.2.0.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.js"></script>
<script>
  var socket = io('ws://192.168.33.15:3000');
  $('form').submit(function(){
    socket.emit('chat message', $('#m').val());
    $('#m').val('');
    return false;
  });
  socket.on('chat message', function(msg){
    $('#messages').append($('<li>').text(msg));
  });

  $(function (){
    var canvas = document.getElementById('tutorial');
    if (canvas.getContext){
      var ctx = canvas.getContext('2d');
      ctx.fillRect(50,50,40,40);
    }
  });

</script>
@stop
