@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
<style>
      form { padding: 3px; position: fixed; bottom: 0; }
      #messages { list-style-type: none; margin: 0; padding: 0; }
      #messages li { padding: 5px 10px; }
      #messages li:nth-child(odd) { background: #eee; }
    </style>

<!-- Accent-colored raised button with ripple -->


<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Title</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
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
    Send
  </button>
	</form>
</div>
  </main>
</div>
@stop

@section ('addJs')
<script>
  var socket = io('http://192.168.33.15:3000');
  $('form').submit(function(){
    socket.emit('chat message', $('#m').val());
    $('#m').val('');
    return false;
  });
  socket.on('chat message', function(msg){
    $('#messages').append($('<li>').text(msg));
  });
</script>
<script src="//cdn.socket.io/socket.io-1.2.0.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.js"></script>
@stop
