
						<div class="right_sidebar">
							<div class="all-batch">
								<div class="card">
								  <div class="card-header">See Other Batch</div>
								  <div class="card-body">
								  	<ul>
								  	@if(isset($batch))
								  	@foreach($batch as $b)
									<a href="/{{$b->batch}}">
										<li>
											<p>Batch: {{$b->batch}}</p>
										</li>
									</a>
									@endforeach
									@endif
								</ul>
							  </div>
							  <div class="card-footer">
							</div>
								
							</div>
						</div>
						<div class="mx-h-350" style="margin-top:40px;background-color: #000 ">
							<a href=""><img src="img/add.jpg" style="width: 100%"></a>
						</div>
