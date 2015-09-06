<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    {!! Helpers::css() !!}
    {!! Helpers::js() !!}
    <title>
        @if(Auth::check())
            {!! Auth::user()->username !!}
            @else
            {!! "Not Loged In yet ! ! ! " !!}
        @endif
    </title>

</head>
<body style="margin:5px;">
<nav class="navbar navbar-default navbar-static-top navbar-inverse" role="navigation">
	<a class="navbar-brand" href="/ ">Informer</a>
	<ul class="nav navbar-nav">
		<li class="active">
			<a href="/">Home</a>
		</li>

			@if(Auth::check())
            <li>
                <a href="{!! action('PersonController@index') !!}">Profile</a>
                </li>
        <li>
                <a href="auth/logout">Log Out</a>
            </li>
                @else
                <li>
                <a href="auth/login">Log In First</a>
                    </li>
        <li>
                <a href="loginf">Login Tesst</a>
            </li>
                @endif


	</ul>
</nav>
<div class="row">
    <div class="col-md-12">
      @if(Auth::check())
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
        [
            'title'=>'Persons',
            'link' =>url('/persons')
        ],
         [
            'title'=>'Persons Create',
            'link' =>url('/persons/create')
        ],
        [
            'title'=>'Classes',
            'link'=>url('classes')
        ],
        ])
        !!}
      @endif
    </div>
    <div class="col-md-4">
          @yield('article')
    </div>
</div>



</body>
</html>