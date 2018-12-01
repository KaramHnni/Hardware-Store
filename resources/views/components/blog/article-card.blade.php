<article style="width:400px; height:650px;" class=" shadow border border-solid border-grey-light my-8">
        <div style="height:50px" class="px-4 flex justfy-between items-center">
        <p class="font-bold ">{{$article_category}}</p>
        <p>{{$article_date}}</p>
        </div>
        <img style="height:300px;" class="block w-full bg-grey-light" src="{{$link_image}}">
        <div>
        <p style="height:25px;" class=" mt-4 mx-4 text-xl font-bold " >{{$article_title}}</p>
        <div style="height:25px;" class="mt-4 flex items-center">{{$article_tags}}</div>
        <p style="height:50px;" class=" mt-4 mx-4 text-xl" >{{$article_body_part}}...</p>
        <a href="/blog/Posts/{{$article_slug}}"class="block text-xl my-12 mx-4 ">Continue Reading > </a>
        </div>
    </article>
    