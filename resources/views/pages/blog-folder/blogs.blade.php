@extends('layouts.app')
@section('page-title', 'Blogs Content')
@section('meta_keywords', 'reading, blog, blogging, articles, news, language, english, content, self-taught, studying, exploring')
@section('meta_description', 'https://mcairstudiotech.art/blogs, check out the posted articles that you may be and read')

@section('content')
<div class="text-center ads">
<!-- place here -->
    <div>
        <!-- <script type="text/javascript">
            atOptions = {
                'key' : '573e6437270bc7ba5e16abab8c30ce2f',
                'format' : 'iframe',
                'height' : 600,
                'width' : 160,
                'params' : {}
            };
            document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.profitabledisplaynetwork.com/573e6437270bc7ba5e16abab8c30ce2f/invoke.js"></scr' + 'ipt>');
        </script> -->
        <script type="text/javascript">
            atOptions = {
                'key' : '1290a146e70db72bedeb2cef608215a4',
                'format' : 'iframe',
                'height' : 250,
                'width' : 600,
                'params' : {}
            };
            document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.profitabledisplaynetwork.com/1290a146e70db72bedeb2cef608215a4/invoke.js"></scr' + 'ipt>');
        </script>
    </div>
    <div>
        <script type="text/javascript">
            atOptions = {
                'key' : '1290a146e70db72bedeb2cef608215a4',
                'format' : 'iframe',
                'height' : 250,
                'width' : 600,
                'params' : {}
            };
            document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.profitabledisplaynetwork.com/1290a146e70db72bedeb2cef608215a4/invoke.js"></scr' + 'ipt>');
        </script>
    </div>

</div>
<div class="container">
    <div class="blogs">
        <div class="text-center">
            <h4 class="text-success">{{session('msg')}}</h4>
        </div>        
        @foreach($blog as $blog)
        <div class="card shadow">
            <div class="card-header text-center">
                <h3 class="card-title font-weight-bold">{{$blog->blog_title}}</h3>
            </div>
            <div class="card-wrapper">
                <div>
                    <img src="asset/images/icon/blog.png" class="card-img-top img-fluid" alt="...">
                </div>
                <div class="card-body">
                    <section>{!! $blog->blog_body !!}</section>
                    <div class="mt-2 text-center">
                        <a href="{{ route('blogShow', $blog) }}">
                            <button type="button" class="btn btn-secondary mr-2 btn-md">View More</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- <div class="related">
        <div>
            <h1>HELLO</h1>
        </div>
        <div>
            <h1>HELLo</h1>
        </div>
        <div>
            <h1>HELLo</h1>
        </div>
    </div> -->

    <div class="ads">
    <!-- place here -->
        <div>
            <script type="text/javascript">
                atOptions = {
                    'key' : '1290a146e70db72bedeb2cef608215a4',
                    'format' : 'iframe',
                    'height' : 250,
                    'width' : 300,
                    'params' : {}
                };
                document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.profitabledisplaynetwork.com/1290a146e70db72bedeb2cef608215a4/invoke.js"></scr' + 'ipt>');
            </script>
        </div>
        <div>
            <script type="text/javascript">
                atOptions = {
                    'key' : '1290a146e70db72bedeb2cef608215a4',
                    'format' : 'iframe',
                    'height' : 250,
                    'width' : 300,
                    'params' : {}
                };
                document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.profitabledisplaynetwork.com/1290a146e70db72bedeb2cef608215a4/invoke.js"></scr' + 'ipt>');
            </script>
        </div>
    </div>
</div>
@endsection