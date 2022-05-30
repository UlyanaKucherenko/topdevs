<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Post::class)->create([
            'title' => "Prototype vs MVP: What is the Best Choice for your Project?",
            'slug' => Str::slug((string) "Prototype vs MVP: What is the Best Choice for your Project?"),
            'description' => "
            <div class=\"blog-description__desc\">
    <p>
        <style>
            p {
                text-indent: 20px;
            }
        </style>
    </p>

    <p><strong> Prototype or MVP can save you time and money! But how do you choose? Let`s say you have stumbled on a
        great idea. How do you make sure it will actually pan out? </strong></p>

    <h2 style=\"text-align:center\">Prototype vs MVP</h2>

    <p>Although the concept of Prototype and MVP may seem similar, there is a huge difference between them. It all
        narrows down to your purposes, priorities, budget, type of project, testing. </p>


    <p> Let`s just put it simply: a prototype is a drawing that you can show to someone. Of course, today there are
        plenty of tools for creating interactive sketches for you prototype. But it`s still a drawing. You can show your
        product to potential investors or customers. A prototype guarantees no more than just a feedback. It`s not about
        selling! Customers will not pay for something they cannot use or test.</p>


    <p>
        If you are looking for an inexpensive way to get feedback for your product, prototype is your best bet!</p>


    <p> However, an MVP is a ready-to-go product to run your business. This product has to be able to complete
        the primary function of your company. Let`s take Instagram, for instance. They implemented photo sharing
        with limited number of filters as an MVP. Sure, the market of photo editing tools was abundant and photo sharing
        platforms were no-brainer.</p>


    <p>Slowly but surely they added web profiles, video sharing, Direct, and in just 2 months they managed to get 1
        million users. Thus, MVP turned into a fully fledged social platform.</p>

    <h2 style=\"text-align:center\">What is prototype?</h2>

    <p>Prototype precedes the MVP stage. Prototype is built to get further investment. Usually, startups
        develop prototypes on a budget to attract stakeholders and investors.</p>

    <figure class=\"wp-block-image\"><img
        src=\"https://topdevs.org/wp-content/uploads/2019/10/Prototype-vs-MVP-1024x757.png\" alt=\"\" class=\"wp-image-601\">
        <figcaption>Source: haigand.com</figcaption>
    </figure>


    <p>A prototype is a backbone of your project. Before getting into technical details, you want to decide how the app
        or website should look like, define the flow of the project, structure, design, and information
        architecture. </p>


    <p>Prototype of your product can be used as a draft and template of your ideas. You can show it to the potential
        target audience, investors, presenting your idea and making sure you are both on the same page.</p>


    <p>There are <strong>3 main types</strong> of prototypes:</p>

    <h3 style=\"text-align:center\">Paper Prototype </h3>
    <figure class=\"wp-block-image\"><img src=\"https://topdevs.org/wp-content/uploads/2019/10/Paper-Prototype.png\" alt=\"\"
                                        class=\"wp-image-603\">
        <figcaption>Source: aaronbrako.com</figcaption>
    </figure>


    <p>Paper prototype is a visualization of the project with minimum investment. This represents user journey through
        your application or website. Paper prototypes are good to single out important elements of your product and set
        the course for the future enhancements.</p>

    <h3 style=\"text-align:center\">Sketches</h3>
    <figure class=\"wp-block-image\"><img src=\"https://topdevs.org/wp-content/uploads/2019/10/sketch.png\" alt=\"\"
                                        class=\"wp-image-604\">
        <figcaption>Source: justinmind.com</figcaption>
    </figure>


    <p> Paper prototype is good for getting a basic idea of what your app or website should look like.  However,
        with the help of sketches you can highlight basic functionality and features of your app/website. It may
        include: scroll bars, sliders, menu bars, pop-up windows, placeholders, buttons, drop-down menu etc. </p>


    <p>Such digital sketches are more digestible for clients; software developing companies use them often for
        startups to avoid technical nuisances and tricky technical issues.</p>

    <h3 style=\"text-align:center\">Interactive prototype</h3>
    <figure class=\"wp-block-image\"><img src=\"https://topdevs.org/wp-content/uploads/2019/10/interactive-prototype.png\"
                                        alt=\"\" class=\"wp-image-605\">
        <figcaption>Source: justinmind.com</figcaption>
    </figure>


    <p> Interactive prototypes represent fully fledged design of an app or website, which may include myriads
        of animated effects, transitions, interactions, multiple screens and complex interactions between them.</p>

    <h2 style=\"text-align:center\">What is MVP?</h2>

    <p>While a prototype is just a sketch of your product to attract investors, MVP is a demo of your app or website
        with core set of functionality operating within the market. Instagram, Facebook, Dropbox, Snapchat,
        Spotify  — they all started as MVP.</p>


    <p>MVP is a first step to verify the funnel of getting customers, gather information, set the course for further
        development, and get insights of what works and what does not. Therefore, by getting feedback from the users,
        your team can improve on that by adding more features to increase sales, and evaluate your business
        goals.</p>


    <p><a href=\"http://www.startuplessonslearned.com/2008/11/what-is-customer-development.html\">Steve Blank</a>, author
        of Startup Lessons Learned, points out that successful projects often fail because of lack of knowledge of their
        customers. Instead of focusing on their needs by developing an MVP product, startups focuse on the idea that has
        not been tested on real users.</p>


    <p>When you have a business goal and needed set of features, your further decisions will not be based on
        speculation and presumptions, but on real analytics and on the feedback from the users.</p>

    <blockquote style=\"text-align:center\" class=\"wp-block-quote\"><p>“<em>The MVP has just those features considered sufficient for
        it to be of value to customers and allow for it to be shipped or sold to early adopters.
        Customer feedback will inform future development of the product.</em>” Scott M. Graffius</p>
        </blockquote>

    <p>Here are certain pinpoints to consider:</p>

    <ul>
        <li>  If your market segment is highly competitive, do not hesitate — the sooner you release MVP, the
            more chances you will have to fit in.
        </li>
        <li>  Deadlines are paramount. In complex projects companies sometimes postpone release to correct
            bugs and errors. Otherwise, there is a risk of scaring users once and for all.
        </li>
        <li>  Start testing as soon as possible. There is no need to polish all the elements of the
            interface. Make your product as simple as possible and test it right away. After testing, make corrections
            and test again, and so on and so forth.
        </li>
    </ul>
</div>

            ",
            'meta_title' => "Start testing as soon as possible",
            'meta_description' => "Start testing as soon as possible. There is no need to polish all the elements of the
            interface. Make your product as simple as possible and test it right away. After testing, make corrections
            and test again, and so on and so forth.",
            'keywords' => "Deadlines are paramount",
            'read_time' => '25 minutes',
        ]);
        factory(\App\Models\Post::class, 30)->create();

        $posts = \App\Models\Post::all();
        $categories = \App\Models\Category::all();
        $industries = \App\Models\Industry::all();
        $tags = \App\Models\Tag::all();

        foreach ($posts as $post)
        {
            $post->categories()->sync($categories->random(1));
            $post->industries()->sync($industries->random(1));
            $post->tags()->sync($tags->random(1));
            $post->tags()->sync($tags->random(2));
        }
    }
}
