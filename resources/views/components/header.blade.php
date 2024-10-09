<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <a href="/" title="{{ __('misc.home_alt') }}" alt="{{ __('misc.home_alt') }}">
            <h1>{{ __('misc.homepage_title') }}</h1>
        </a>
        {{ $introduction_text ?? '' }}
    </div>
</div>
<div class="brand-selection">
    @foreach(range('A', 'Z') as $letter)
<a href="#{{ $letter }}">{{ $letter }}</a>
    @endforeach
</div>