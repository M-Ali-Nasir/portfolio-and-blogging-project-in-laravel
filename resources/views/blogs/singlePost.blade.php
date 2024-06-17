@extends('blogs.layouts.mainLayout')


@section('blog-content')
@include('blogs.layouts.header')

<span style="display:none">
    {{$post = $blogPost}}
</span>
<main id="main">

    <div class="container">

        <div class="row topspace">
            <div class="col-sm-8 col-sm-offset-2">

                <article class="post">
                    <header class="entry-header">

                        <h1 class="entry-title"><a href="#" rel="bookmark"> {{ $post->title }}</a></h1>
                    </header>
                    <div class="entry-content">
                        <p><img alt="image" src="{{ asset('storage/'.$post->image) }}"></p>
                        <p style="text-align: justify ;">
                            {{ $post->description }}
                        </p>

                        <p style="color: #bdbdbd">
                            Published on <u>{{ $post->created_at->format('Y/m/d') }} at {{
                                $post->created_at->format('g:i A') }}</u>
                        </p>

                    </div>
                </article><!-- #post-## -->

            </div>
        </div> <!-- /row post  -->

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <div id="comments">
                    <h3 class="comments-title">{{ $commentsLen }} Comments</h3>
                    <a href="#comment-form" class="leave-comment">Leave a Comment</a>




                    <div id="comments-container" class="scrollable-div">
                        @include('blogs.comments', ['comments' => $comments])
                    </div>






                    <div class="clearfix"></div>

                    <nav id="comment-nav-below" class="comment-navigation clearfix" role="navigation">

                    </nav>

                    <nav id="comment-nav-below" class="comment-navigation clearfix" role="navigation">

                    </nav>



                    <div id="respond">
                        <h3 id="reply-title" style="color: #f4f4f4">Leave a Comment</h3>
                        <form method="POST" id="commentform" class=""
                            action="{{ route('blogs.comment', ['id' => urlencode($post->title), 'replyId' => urlencode('#') ]) }}">
                            @csrf
                            <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" class="form-control" id="inputName" name="name"
                                    placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email address <i class="text-danger">*</i></label>
                                <input type="email" class="form-control" id="inputEmail" name="email"
                                    placeholder="Enter your email">
                            </div>

                            <div class="form-group">
                                <label for="inputComment">Comment</label>
                                <textarea class="form-control" rows="6" name="comment"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-8">

                                </div>
                                <div class="col-md-4 text-right">
                                    <button type="submit" class="btn btn-action">Submit</button>
                                </div>
                        </form>
                    </div> <!-- /respond -->
                </div>
            </div>
        </div> <!-- /row comments -->
        <div class="clearfix"></div>

    </div> <!-- /container -->

</main>


@endsection