@extends('layouts.userApp')
@section('content')
	<div class="user_main_content">
		<div class="user_main_left_content">
			<div class="user_main_job_level1">
				<ul class="user_main_job_keylist">
					@foreach($class1s as $class1)
					<a href="?class={{ $class1->name }}">
						<li id="{{ $class1->id }}">{{ $class1->name }}</li>
					</a>
					@endforeach
					<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
				</ul>
			</div>
			<div class="user_main_job_level2">
				<ul class="user_main_job_keylist">
					@foreach($class2s as $class2)
					<a href="?class={{ $class2->name }}">
						<li id="{{ $class2->id }}">{{ $class2->name }}</li>
					</a>
					@endforeach
					<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
				</ul>
			</div>
			<div class="user_main_job_key">
				<ul class="user_main_job_keylist">
					@foreach($class3s as $class3)
						<a href="?class={{ $class3->name }}">
							<li id="{{ $class3->id }}">{{ $class3->name }}</li>
						</a>
				@endforeach
					<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
				</ul>
			</div>
        <div class="full_small_nav">
            热门职位
        </div>
			@foreach($jobs as $job)
			<div class="index_single_item">
				<div class="index_single_item_jobinfo">
					<div class="per50">
						<a class="big blue" href="/">{{ $job->name }}</a>
						<p class="gray margin15">公司名称 : {{ $job->publish->name }}</p>
						<p class="gray margin15">学历要求 : {{ $job->education }}</p>
						<p class="gray margin15">工作地点 : {{ $job->province }}</p>
					</div>
					<div class="per50">
						<div class="user_main_single_jobinfo_button">工作详情</div>
						<p class="orange margin15">薪资 : {{ $job->salary }}</p>
						<p class="gray margin15">工作经验 : {{ $job->experience }}</p>
						<p class="gray margin15">发布时间 : {{ $job->updated_at }}</p>
					</div>
				</div>
			</div>
			@endforeach
			<div class="paginate_banner">
				<div class="paginate">{{ $jobs->links() }}</div>
			</div>
		</div>
		<div class="user_main_right_content">
			div
		</div>
	</div>
@endsection