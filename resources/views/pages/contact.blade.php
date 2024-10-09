<x-layouts.app>
    <h1>
        {{ __('misc.contact') }}
    </h1>

    <form action="/contact" method="post">
        @csrf

        <div>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email">
        </div>

        <div>
            <label class="d-block" for="message">Bericht: </label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>

        <input type="submit" value="{{ __('misc.send') }}">
    </form>
</x-layouts.app>
