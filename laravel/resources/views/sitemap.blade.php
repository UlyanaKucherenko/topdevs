<?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://topdevs.org/</loc>
        <lastmod>2020-09-01</lastmod>
        <changefreq>monthly</changefreq>
    </url>

    <url>
        <loc>https://topdevs.org/company</loc>
        <lastmod>2020-09-01</lastmod>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>https://topdevs.org/contacts</loc>
        <lastmod>2020-09-01</lastmod>
        <changefreq>monthly</changefreq>
    </url>


    <url>
        <loc>https://topdevs.org/industries</loc>
        <lastmod>2020-09-01</lastmod>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>https://topdevs.org/industries/dating-app-development</loc>
        <lastmod>2020-09-01</lastmod>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>https://topdevs.org/industries/elearning-software-development</loc>
        <lastmod>2020-09-01</lastmod>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>https://topdevs.org/industries/healthcare-software-development</loc>
        <lastmod>2020-09-01</lastmod>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>https://topdevs.org/industries/logistics-tracking-app-development</loc>
        <lastmod>2020-09-01</lastmod>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>https://topdevs.org/industries/media-entertainment-software-development</loc>
        <lastmod>2020-09-01</lastmod>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>https://topdevs.org/industries/real-estate-app-development</loc>
        <lastmod>2020-09-01</lastmod>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>https://topdevs.org/industries/retail-ecommerce-software-development</loc>
        <lastmod>2020-09-01</lastmod>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>https://topdevs.org/industries/sports-fitness-app-development</loc>
        <lastmod>2020-09-01</lastmod>
        <changefreq>monthly</changefreq>
    </url>


    <url>
        <loc>https://topdevs.org/services</loc>
        <lastmod>2020-09-01</lastmod>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>https://topdevs.org/services/it-outsourcing</loc>
        <lastmod>2020-09-01</lastmod>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>https://topdevs.org/services/it-outstaffing</loc>
        <lastmod>2020-09-01</lastmod>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>https://topdevs.org/services/full-cycle-development</loc>
        <lastmod>2020-09-01</lastmod>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>https://topdevs.org/services/web-development</loc>
        <lastmod>2020-09-01</lastmod>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>https://topdevs.org/services/mobile-app-development</loc>
        <lastmod>2020-09-01</lastmod>
        <changefreq>monthly</changefreq>
    </url>
    <url>
        <loc>https://topdevs.org/services/ui-ux-design</loc>
        <lastmod>2020-09-01</lastmod>
        <changefreq>monthly</changefreq>
    </url>

    <url>
        <loc>https://topdevs.org/blog</loc>
        <lastmod>2020-09-01</lastmod>
        <changefreq>monthly</changefreq>
    </url>
    @foreach ($posts as $post)
        <url>
            <loc>{{ url('/blog/' . $post->slug) }}</loc>
            <lastmod>{{ $post->updated_at->format('Y-m-d') }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach


    <url>
        <loc>https://topdevs.org/portfolio</loc>
        <lastmod>2020-09-01</lastmod>
        <changefreq>monthly</changefreq>
    </url>
    @foreach ($portfolios as $portfolio)
        <url>
            <loc>{{ url('/portfolio/' . $portfolio->link) }}</loc>
            <lastmod>{{ $portfolio->updated_at->format('Y-m-d') }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach


</urlset>
