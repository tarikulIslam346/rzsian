<div class="container-fluid">
  <div class="row">
      <section style="width:100%">
        <div class="home_content_wrap">
          <div class="card">
            <div class="row write_blog">
              <div class="col-md-12">
               <div class="item_body ">
                  <div class="item_body_head">
                    <div class="row user_image">
                      <img  src="/images/user_profile/{{\Auth::user()->profile_pic}}">
                      <div class="col-md-10">
                        <div class="item_body_title"><p>{{\Auth::user()->name}}</p></div>
                        <div class="item_body_meta"><p>{{\Carbon\Carbon::today()->format('Y-m-d')}}</p></div>
                      </div>
                    </div>
                  </div>
                  <form action="/post_create" method="POST" enctype="multipart/form-data">
  				        @csrf
                  <div class="item_body_content">
                    <div class="form-group">
                    <input class="form-control" placeholder="Post title" name="title" id="exampleTextarea">
                    <input class="form-control" type="hidden" placeholder="Post title" name="user_id" value="{{\Auth::id()}}" id="exampleTextarea">
                  </div>
                   <div class="form-group">
                    <textarea class="form-control" placeholder="Write your post here...." name="post" id="exampleTextarea" rows="3"></textarea>
                  </div>
                  </div>
                  <div class="item_post_footer">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <img src="img/upload_image.png" id="upfile2" style="cursor:pointer; width:80px" />
                          <p>Upload Picture</p>
                          <input type="file" name="post_image" class="form-control-file" id="exampleInputFile" style="display:none">
                        </div>
                      </div>
                      <div class="col-md-6 post_submit_button">
                        <button class="submit_button btn btn-info btn-sm my-0 waves-effect waves-light" type="submit">submit</button>
                      </div>
                    </div>
                  </div>
                </form>
               </div>
              </div>
            </div>
          </div>
        </div>
        @if(session('comment_create'))
        <div class="alert  alert-success fade show" role="alert">
           {{ session('comment_create') }} 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>                   
       @endif 

        
        @if(isset($post))
  		  	@foreach($post as $p)
          <div class="home_content_wrap">
              <div class="row">
                <div class="col-md-12">
                    <div class="item_body">
                        <div class="item_body_head">
                          <div class="card">
                          <div class="dropdown settings">
                              <i class="fa fa-trash"></i>
                            </div>
                            <div class="card-header user_image">
                              <img src="img/add.jpg">
                              <div class="col-md-10">
                                <div class="item_body_title"><a href="/single-page"><p>{{$p->title}}</p></a></div>
                                <div class="item_body_meta"><p>Posted by <span><a href="#">{{$p->user->name}}</a></span>, {{\Carbon\Carbon::parse($p->created_at)->format('F d ')}}</p></div>
                              </div>
                            </div>
                            <div class="card-body">
                              <div class="item_body_content">
                                <p>{{$p->post}}</p>
                                <div class="item_head" style=" background-image: url('../../uploads/postImages/{{$p->post_image}}');">
                                  <!-- <img src="/uploads/postImages/{{$p->post_image}}"> -->
                                </div>
                              </div>
                            </div>
                            <div class="card-footer text-muted">
                                <div class="item_body_footer">
                                  <div class="row">
                                    <div class="col-md-3 footer_element">Like<span>200</span></div>
                                    <div class="col-md-3 footer_element">Share<span>200</span></div>
                                    <div class="col-md-3 footer_element">View<span>200</span></div>
                                    <div class="col-md-3 footer_element" id="{{$p->id}}">Comments<span>200</span></div>
                                  </div>
                                </div>
                            </div>
                            <div class="card-footer text-muted" style="background:gray; padding: 5px">
                            <div id="comment_{{$p->id}}"></div>
                                <div class="item_body_footer">
                                @foreach($p->comments as $c)
                                  <div class="comments-container">
                                    <ul id="comments-list" class="comments-list">
                                      <li>
                                        <div class="comment-main-level">
                                         @php
                                         $user = \App\User::where('id',$c->user_id)->first();
                                         @endphp
                                          <div class="comment-avatar"><img src="/images/user_profile/{{$user->profile_pic}}" alt=""></div>
                                          <div class="comment-box">
                                            <div class="comment-head">
                                              <h6 class="comment-name by-author"><a href="http://creaticode.com/blog">{{$user->name}}</a></h6>
                                              <span>{{$c->created_at->diffForHumans()}}</span>
                                              <i class="fa fa-reply"></i>
                                              <i class="fa fa-heart"></i>
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
                          </div>
                        </div>
                    </div>
                </div>
              </div>
            <!-- </div> -->
          </div>
          <script>
            $(document).ready(function() {
                $("#{{$p->id}}").click(function() {
                  $('#comment_{{$p->id}}').after("<div class='comments-container'><ul id='comments-list' class='comments-list'><li><div class='comment-main-level'><div class='comment-avatar'><img src='/images/user_profile/{{\Auth::user()->profile_pic}}' width='30'></div><div class='comment-box'><div class='comment-head'><h6 class='comment-name by-author'><a href='http://creaticode.com/blog'>{{$user->name}}</a></h6></div><div class='comment-content'><form method='POST'action='/comment/{{\Auth::id()}}/{{$p->id}}'> <input type='hidden' name='_token' id='csrf-token' value='{{ Session::token() }}' /><input type='text' name='comment'><button class='submit_button btn btn-info btn-sm my-0 waves-effect waves-light' type='submit'>Submit</button></form></div></div></div></ul>");
                   
                });
            })
            </script> 
  			  @endforeach
  			@endif
      </section>
  </div>
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
              alert(JSON.stringify(data));
              // document.getElementById('comment_'+data.postId.to).after("<div class='comments-container'><p>"+data.comment+"</p></div>");
              document.getElementById('comment_'+data.postId).after("<div class='comments-container'><ul id='comments-list' class='comments-list'><li><div class='comment-main-level'><div class='comment-avatar'></div><div class='comment-box'><div class='comment-head'><h6 class='comment-name by-author'></h6></div><div class='comment-content'></div></div></div>"+data.comment+"</ul>");
              document.getElementById('comment_notification').after("<div class='comments-container'><ul id='comments-list' class='comments-list'><li><div class='comment-main-level'><div class='comment-avatar'></div><div class='comment-box'><div class='comment-head'><h6 class='comment-name by-author'></h6></div><div class='comment-content'></div></div></div>"+data.comment+"</ul>");
            });
          </script>

 


<!-- page script -->

