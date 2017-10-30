<!DOCTYPE html>
<html>
<head>
  <title>DarkPost</title>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
  <div class="page_wrap">
    <div class="page_article">
    <div class="panel-body">
      @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
      @endif

      <form class="form-horizontal" method="POST" action="/add_article_db">
        {{ csrf_field() }}

        <div class="title_wrap form-group{{ $errors->has('title') ? ' has-error' : '' }}">
          <input id="title" type="text" placeholder="title" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

          @if ($errors->has('title'))
          <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
          </span>
          @endif
        </div>

        <div class="subtitle_wrap form-group{{ $errors->has('subtitle') ? ' has-error' : '' }}">

          <input id="subtitle" placeholder="subtitle" type="text" class="form-control" name="subtitle" value="{{ old('subtitle') }}" required>

          @if ($errors->has('subtitle'))
          <span class="help-block">
            <strong>{{ $errors->first('subtitle') }}</strong>
          </span>
          @endif
        </div>  

        <div class="description_wrap form-group{{ $errors->has('description') ? ' has-error' : '' }}">

          <textarea id="description" placeholder="description" type="text" class="form-control" name="description" required></textarea>

          @if ($errors->has('description'))
          <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
          </span>
          @endif

        </div>
    </div>
        <button type="submit" class="button publish_button">
          Publish
        </button>
      </form>
    </div>
  </div>
</body>
<script type="text/javascript" src="{{ asset('js/autosize.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/autota.js') }}"></script>
</html>