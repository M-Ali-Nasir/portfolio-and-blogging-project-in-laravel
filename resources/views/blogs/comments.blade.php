<ol class="comments-list">
    @if(!empty($comments))
    @foreach($comments as $comment)
    @if(empty($comment->replied_to_id))

        
        

    <li class="comment">
        <div>
            <img src="{{ \Creativeorange\Gravatar\Facades\Gravatar::get($comment->email) }}" alt="Profile Pic" class="avatar">

            <div class="comment-meta">
                <span class="author"><a href="#">{{ $comment->name }}</a></span>
                <span class="date"><a href="#">( {{ $comment->email}} )</a></span>
                <button class="reply" type="button" onclick=' let property= document.getElementById("myForm+{{$comment->id}}").style.display; 
                                                                if( property == "none"){
                                                                    document.getElementById("myForm+{{$comment->id}}").style.display = "block";
                                                                }else{
                                                                    document.getElementById("myForm+{{$comment->id}}").style.display = "none";
                                                                }
                                                                
                                                                '>Reply</button>
            </div>

            <div class="comment-body">
                {{ $comment->comment}}
                <div style="color:#bdbdbd">
                    {{ $comment->created_at->format('Y/m/d')}} at {{ $comment->created_at->format('g:i A')}}
                </div>
            </div>
            
            <div class="respond" id="myForm+{{$comment->id}}" style="display:none;">
                <h3 id="reply-title" style="color: #f4f4f4">Leave a Reply</h3>
                <form method="POST" style="margin-bottom:50px;"  action="{{ route('blogs.comment', ['id' => urlencode($post->title), 'replyId' => urlencode($comment->id)]) }}">
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
        @foreach($comments as $r_comment)
        @if($r_comment->replied_to_id == $comment->id)

        
        <ul class="children">
            <li class="comment">
                <div>
                    <img src="{{ \Creativeorange\Gravatar\Facades\Gravatar::get($r_comment->email) }}" alt="Profile Pic" class="avatar">

                    <div class="comment-meta">
                        <span class="author"><a href="#">{{ $r_comment->name }}</a></span>
                        <span class="date"><a href="#">( {{ $r_comment->email}} )
                                </a></span>
                        
                    </div><!-- .comment-meta -->

                    <div class="comment-body">
                        {{ $r_comment->comment}}
                        <div style="color:#bdbdbd">
                            {{ $r_comment->created_at->format('Y/m/d')}} at {{ $r_comment->created_at->format('g:i A')}}
                        </div>
                    </div><!-- .comment-body -->
                </div>
            </li>
        </ul><!-- .children -->
        @endif
        @endforeach
    </li>
    @endif
    @endforeach
    @endif
    
</ol>
