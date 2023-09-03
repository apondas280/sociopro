<form action="{{ route('search.type', ['type' => $type]) }}" class="search w-100" method="post">
    @csrf
    <div class="search-bar @if ($type != 'creator') full-width @endif">
        <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                <path id="Search_icon" data-name="Search icon"
                    d="M2,7A4.951,4.951,0,0,1,7,2a4.951,4.951,0,0,1,5,5,4.951,4.951,0,0,1-5,5A4.951,4.951,0,0,1,2,7Zm12.3,8.7a.99.99,0,0,0,1.4-1.4l-3.1-3.1A6.847,6.847,0,0,0,14,7,6.957,6.957,0,0,0,7,0,6.957,6.957,0,0,0,0,7a6.957,6.957,0,0,0,7,7,6.847,6.847,0,0,0,4.2-1.4Z"
                    fill="#797c8b" />
            </svg>
        </span>
        <input type="text" placeholder="Search a creator" class="form-control" name="search_type" required
            autocomplete="off" />
    </div>

    @if ($type == 'creator')
        <button type="submit" class="search-btn">Search</button>
    @endif

</form>
