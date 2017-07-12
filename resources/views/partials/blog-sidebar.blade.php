<div class="blog-sidebar">
    <div class="blog-sidebar-content">
        <h2>Recent Posts</h2>
        @foreach ($posts as $post)
            {!! link_to_action('BlogController@getSingle', $post["title"], ['slug' => $post["slug"]]) !!}
            <br>
        @endforeach
    </div>
</div>