@if($post->post_content)

<div class="page-content page-default page-article">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <article class="page-article" id="post-{{ Loop::id() }}" {!! post_class() !!}>

                    <div class="col-md-12">

                        <div class="custom-heading">
                            <h2>{{ $post->post_title ?? '' }}</h2>
                        </div>

                        <hr>

                    </div>

                    <div class="col-md-12">
                        {!! Loop::content() !!}
                    </div><!-- .entry-content -->

                </article><!-- #post-{{ Loop::id() }} -->

            </div>
        </div>
    </div>
</div>
@endif