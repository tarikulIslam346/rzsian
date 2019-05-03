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

 <script type="text/javascript" src="3rd-party/js/mdb.min.js"></script>
</body>
</html>