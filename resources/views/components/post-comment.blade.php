@props(['comment'])
<article>
    <div>
            <img src="https://i.pravatar.cc/100?u={{$comment->user_id}}" alt="">
    </div>

    <div>
            <header>
                    <h5>{{$comment->author->name}}</h5>

                    <h6>Posted

                    <time>{{$comment->created_at}}</time>
                    </h6>
            </header>

            <p>{{$comment->body}}</p>
    </div>
</article>