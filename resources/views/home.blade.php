<main>
    <form action="/home">
        <div class="mb-3 d-flex gap-3">
            <input
                type="text"
                name="search"
                class=""
                placeholder="Search Citizens Table"
            />
            <button
                type="submit"
                class=""
            >
                Search
            </button>
            <div>

            </div>

        </div>
    </form>
    @unless(count($citizens) == 0)
        <ul>
            @foreach($citizens as $citizen)
                <li><a href="/citizens/{{$citizen->id}}">{{ $citizen->fullName }}</a></li>
            @endforeach
        </ul>
    @endunless
</main>
