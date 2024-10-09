<x-layouts.app>

    <x-slot:introduction_text>
        <p><img src="img/afbl_logo.png" align="right" width="100" height="100">{{ __('introduction_texts.homepage_line_1') }}</p>
        <p>{{ __('introduction_texts.homepage_line_2') }}</p>
        <p>{{ __('introduction_texts.homepage_line_3') }}</p>
    </x-slot:introduction_text>

    <h1>
        <x-slot:title>
            {{ __('misc.all_brands') }}
        </x-slot:title>
    </h1>

    <?php
    $size = count($brands);
    $columns = 3;
    $chunk_size = ceil($size / $columns);
    ?>

    <div class="container">
        <a>Voor ticket 4: {{ $name }}</a>
        <!-- Top 10 Viewed Manuals Section -->
        <div class="top-manuals">
            <h2>{{ __('misc.top_10_viewed_manuals') }}</h2>
            <ul>
                @foreach($topManuals as $manual)
                    @if($manual->brand)
                        <li>
                            <a href="/{{ $manual->brand->id }}/{{ $manual->brand->getNameUrlEncodedAttribute() }}/{{ $manual->id }}/">{{ $manual->name }}</a> ({{ $manual->views }} views)
                        </li>
                    @else
                        <li>Brand not found for manual: {{ $manual->name }}</li>
                    @endif
                @endforeach
            </ul>
        </div>
        <!-- Example row of columns -->
        <div class="row">
            @foreach($brands->groupBy('category') as $category => $brandsInCategory)
                <div class="col-md-4">
                    <h2>{{ $category }}</h2>
                    @foreach($brandsInCategory->groupBy(function($brand) {
                        return strtoupper(substr($brand->name, 0, 1));
                    }) as $firstLetter => $brandsByLetter)
                        <h3 id="{{ $firstLetter }}">{{ $firstLetter }}</h3>
                        <ul>
                            @foreach($brandsByLetter as $brand)
                                <li>
                                    <a href="/{{ $brand->id }}/{{ $brand->getNameUrlEncodedAttribute() }}/">{{ $brand->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>