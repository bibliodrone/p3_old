<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','P3')</title>

    <meta charset='utf-8'>

    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css' rel='stylesheet'>

    <!-- <link href='/css/foobooks.css' type='text/css' rel='stylesheet'> -->

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>
	<h1>Developer's Best Friend</h1>
	
            <p>Create random (lorem ipsum) filler text: <a href='/loremipsum'>LoremIpsum</a></p>
            <p>Create a list of random user names: <a href='/username'>UserNames</a></p>
    
    <section>
	<p>main content here</p>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
        &copy; {{ date('Y') }} &nbsp;&nbsp;
        <a href='https://github.com/bibliodrone/p3' target='_blank'><i class='fa fa-github'></i> View on Github</a> &nbsp;&nbsp;
        <a href='http://p3.geewalden.me/' target='_blank'><i class='fa fa-link'></i> View Live</a>
    </footer>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
