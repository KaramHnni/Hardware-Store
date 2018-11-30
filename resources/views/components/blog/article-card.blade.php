<article style="width:400px; height:560px;" class=" shadow border border-solid border-grey-light my-8">
        <div style="height:100px" class="flex justfy-between items-center">
        <p>{{$article_category}}</p>
        <p>{{$article_date}}</p>

        </div>
        <img style="height:300px;" class="block w-full bg-grey-light" src="{{$link_image}}">
        <div>
        <p style="height:30px;" class=" my-12 mx-4 text-2xl font-bold " >{{$article_title}}</p>
    <p class=" my-12 mx-4 text-xl" >{{$article_body_part}}...</p>
        <a href="/blog/Posts/{{$article_slug}}"class="block text-xl my-12 mx-4 ">Continue Reading > </a>
        </div>
    </article>
    