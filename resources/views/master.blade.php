<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    {!! Helpers::css() !!}
    {!! Helpers::js() !!}
    <title>Post</title>

</head>
<body style="margin:5px;">
<div class="row">
    <div class="col-md-12">
        {!!
  Navigation::tabs([
[
  'title' => 'All Posts',
  'link' =>  action('PostsController@index')
],
[
  'title' => 'Posts Create',
  'link' => action('PostsController@create')
],
])
!!}
    </div>
    <div class="col-md-4">
          @yield('article')
    </div>
</div>

</body>
</html>