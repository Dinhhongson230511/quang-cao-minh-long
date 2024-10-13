<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($posts as $post)
        <url>
            <loc>{{ $post['link'] ?? null }}</loc>
            <lastmod>{{ isset($post['created_at']) ? Carbon\Carbon::parse($post['created_at'])->tz('GMT')->toAtomString() : now()->tz('GMT')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            @if($post['type'] === 'post')
                <priority>0.8</priority>
            @elseif($post['type'] === 'category')
                <priority>0.6</priority>
            @else
                <priority>0.3</priority>
            @endif
        </url>
    @endforeach
</urlset>