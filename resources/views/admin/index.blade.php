<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Webedia</title>
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <div class="container-fluid">
    <div class="page-header">
      <div class="container">
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
          <h1>Webedia <small>Content Management</small></h1>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
          <p class="navbar-text pull-right">
            <a href="{!! route('admin.logout') !!}" class="navbar-link">Logout</a>
          </p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Register post</h3>
        </div>
        <div class="panel-body">
          {!! Form::open(array('route' => 'posts.store', 'id' => 'form_posts')) !!}
            <div class="form-group">
              <label for="title">Title</label>
              {!! Form::text('title', null, array('id' => 'title', 'class' => 'form-control')) !!}
            </div>
            <div class="form-group">
              <label for="subtitle">Subtitle</label>
              {!! Form::text('subtitle', null, array('id' => 'subtitle', 'class' => 'form-control')) !!}
            </div>
            <div class="form-group">
              <label for="image">Image URL</label>
              {!! Form::text('image', null, array('id' => 'image', 'class' => 'form-control')) !!}
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              {!! Form::textarea('description', null, array('id' => 'description', 'class' => 'form-control', 'rows' => 5)) !!}
            </div>
            <div class="form-group">
              <label for="text">Text</label>
              {!! Form::textarea('text', null, array('id' => 'text', 'class' => 'form-control', 'rows' => 15)) !!}
            </div>
          
            <button type="submit" class="btn btn-primary">Salvar</button>
          {!! Form::close() !!}
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Posts list</h3>
        </div>
        <div class="panel-body">
          <table id="posts_list_table" class="table table-hover table-striped">
            <thead>
              <tr>
                <th>Title</th>
              </tr>
            </thead>
            <tbody>
              @foreach($posts as $post)
              <tr>
                <td>{{ $post['title'] }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="{!! asset('js/admin.js') !!}"></script>
</body>
</html>