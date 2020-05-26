<!doctype html>
<html {!! get_language_attributes() !!}>
    @include('partials.head')
    <body @php body_class() @endphp>

        @php do_action('get_header') @endphp
        
        @include('partials.header')
        
        @if(is_front_page())
            <div id="banner">
                <h1>&lt;Learn Sage/&gt;</h1>
                <h3>Learnig theme development with bedrock and sage</h3>
            </div>
        @endif
        
        <main>
            @yield('content')
        </main>

        @if (App\display_sidebar())
            <aside class="sidebar">
                @include('partials.sidebar')
            </aside>
        @endif
        
        @php do_action('get_footer') @endphp
        
        @include('partials.footer')
        
        @php wp_footer() @endphp
    </body>
</html>
