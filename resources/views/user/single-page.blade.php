<!DOCTYPE html>
<html>
<head>
  @include('user.head')
</head>
<body>
  @include('user.user-header')


<div class="container">
@if(isset($post))
  <div class="row">
    <div class="col-md-9">
      <div class="home_content_wrap" style="padding-top: 40px">
        <div class="card">
          <!-- <i class="fa fa-ellipsis-h settings"></i> -->
          <div class="row single-page">
            <div class="col-md-12">
            @if($post->post_image)
              <div class="single-page-cover-image"  style=" background-image: url('../../uploads/postImages/{{$post->post_image}}');"></div>
            @else
            @endif
            </div>
            <div class="col-md-12">
             <div class="item_body">
                <div class="item_body_head">
                  <div class="row">
                    <!-- <img src="img/add.jpg"> -->
                    <div class="col-md-12">
                      <div class="item_body_title"><p> {{$post->title}}</p></div>
                      <div class="item_body_meta">
                        <p>Posted by <span><a href="#">{{$post->user->name}}</a></span>, {{\Carbon\Carbon::parse($post->created_at)->format('F d ')}} <span class="pull-right">Total view <i class="fa fa-eye" style="color: red;font-size: 16px;"></i> 500</span></p>
                        <p></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item_body_content">
                  {{$post->post}}
                </div>
                <div class="card-footer text-muted">
                    <div class="item_body_footer">
                      <div class="row">
                        <!-- <div class="col-md-3 footer_element">Like<span>200</span></div>
                        <div class="col-md-3 footer_element">Share<span>200</span></div>
                        <div class="col-md-3 footer_element">View<span>200</span></div> -->
                        <div class="col-md-12 footer_element">Comments<span>200</span></div>
                      </div>
                    </div>
                </div>

<!-- comment show here -->
<div class="card-footer text-muted" style="background:gray; padding: 5px">
                            
                                <div class="item_body_footer">

<div class='comments-container'>
                                  <ul id='comments-list' class='comments-list'>
                                      <li>
                                      <div class='comment-main-level'>
                                      <div class='comment-avatar'>
                                      <img src='/images/user_profile/{{\Auth::user()->profile_pic}}' width='30'>
                                      </div>
                                      <div class='comment-box'>
                                      <div class='comment-head'>
                                      <h6 class='comment-name by-author'>
                                      <a href='/single-page/{{$post->id}}'>{{\Auth::user()->name}}</a>
                                      </h6>
                                      </div>
                                      <div class='comment-content'>
                                        <form method='POST'action='/comment/{{\Auth::id()}}/{{$post->id}}'>
                                          <input type='hidden' name='_token' id='csrf-token' value='{{ Session::token() }}' />
                                          <input type='text' name='comment' id="comment">
                                          <button class='submit_button btn btn-info btn-sm my-0 waves-effect waves-light' id="submit" type='submit'>Submit</button>
                                        </form>
                                      </div>
                                      </div>
                                      </div>
                                  </ul>
                                </div>


<div class="valo_lage_na" id="comment_{{$post->id}}"></div>


                                @foreach($post->comments as $c)
                                  <div class="comments-container">
                                    <ul id="comments-list" class="comments-list">
                                      <li>
                                        <div class="comment-main-level">
                                         @php
                                         $user = \App\User::where('id',$c->user_id)->first();
                                         @endphp
                                          <div class="comment-avatar">
                                          @if($user->profile_pic)
                                            <img src="/images/user_profile/{{$user->profile_pic}}" alt="">
                                            @else
                                            <img src="/images/user_profile/abc.jpg">
                                            @endif
                                          </div>
                                          <div class="comment-box">
                                            <div class="comment-head">
                                              <h6 class="comment-name by-author"><a href="/single-page/{{$post->id}}">{{$user->name}}</a></h6>
                                              <span>{{$c->created_at->diffForHumans()}}</span>
                                            </div>
                                            <div class="comment-content">
                                              {{$c->comment}}
                                            </div>
                                          </div>
                                        </div>
                                      </li>
                                    </ul>
                                  </div>
                                  @endforeach

                                  </div>
                            </div>
<!-- comment show here -->

             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 recent_post">
      <div class="mx-h-350" style="margin-top:40px;">
        <div class="card">
          <div class="card-header">
            <h5>{{$post->user->name}}'s Other Posts</h5>
                  @if($post->user->profile_pic)
                  <img src="/images/user_profile/{{$post->user->profile_pic}}">
                  @else
                  <img src="/images/user_profile/pp.jpg">
                  @endif
                  <p>SSC Batch: {{$post->user->batch}}</p>
          </div>
            <div class="card-body ">
              <ul class="recent_post_body">
              @if(isset($user))
                @foreach($user->post as $p)
                <li><i class="fa fa-angle-double-right"></i><a href="/single-page/{{$p->id}}">{{$p->title}}</a></li>
                @endforeach
                @endif
              </ul>
            </div>
          </div>
      </div>
      <a href="">
        <img src="/img/add.jpg" style="width: 100%;margin-top:40px">
      </a>
  </div>
  @endif
</div>

<script src="https://js.pusher.com/4.4/pusher.min.js"></script>
  <script>
            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('41ac6612c4cdea6456be', {
              cluster: 'ap2',
              forceTLS: true,
              encrypted: true,
            });

            var channel = pusher.subscribe('my-channel');
            channel.bind('App\\Events\\CommentEvent', function(data) {


              var d1 = document.getElementById('comment_'+data.postId);
              d1.insertAdjacentHTML("afterend", "<div class='comments-container'><ul id='comments-list' class='comments-list'><li><div class='comment-main-level'><div class='comment-avatar'></div><div class='comment-box'><div class='comment-head'><h6 class='comment-name by-author'></h6></div><div class='comment-content'>"+data.comment+"</div></div></div></ul></div>");


              // alert(JSON.stringify(data));
              // document.getElementById('comment_'+data.postId.to).after("<div class='comments-container'><p>"+data.comment+"</p></div>");
              // document.getElementById('comment_'+data.postId).append("<div class='comments-container'><ul id='comments-list' class='comments-list'><li><div class='comment-main-level'><div class='comment-avatar'></div><div class='comment-box'><div class='comment-head'><h6 class='comment-name by-author'></h6></div><div class='comment-content'></div></div></div>"+data.comment+"</ul>");
              // document.getElementById('comment_'+data.postId).append(data.comment);
              // document.getElementById('comment_notification').after("<div class='comments-container'><ul id='comments-list' class='comments-list'><li><div class='comment-main-level'><div class='comment-avatar'></div><div class='comment-box'><div class='comment-head'><h6 class='comment-name by-author'></h6></div><div class='comment-content'></div></div></div>"+data.comment+"</ul>");
            });
          </script>

 <script type="text/javascript" src="3rd-party/js/mdb.min.js"></script>
</body>
</html>
