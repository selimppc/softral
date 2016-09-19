@extends('laravel-authentication-acl::client.layouts.base')
@section('title')
Softral - View notifications
@stop
@section('content')
<div class="row content">
    <div class="container-fluid main_content view-job">
	
	<div class="row-fluid">
		
		<div class="col-lg-12">
		
		<div class="notification-heading"><h4 class="menu-title">Notifications</h4>
    </div>

		@if(isset($notify) && count($notify)!=0)
		@foreach($notify as $notif)
	
		@if($notif->label=='got proposal')
		<a class="content" href="{!! URL::to('/job/proposal_view?id=' .$notif->proposal_id) !!}">
	@elseif($notif->label=='select proposal')
	<a class="content" href="{!! URL::to('financial/terms_milestone?p_id='.$notif->proposal_id) !!}">
	
	@elseif($notif->label=='Escrow money')
	<a class="content" href="{!! URL::to('financial/terms_milestone?p_id='.$notif->proposal_id) !!}">
	
	@endif
		<div class="notification-item">
		
		  <p class="item-info col-lg-9 pull-left"> @if($notif->label=='got proposal') You have got proposal @endif
	   @if($notif->label=='select proposal') Your proposal has been selected @endif
	   @if($notif->label=='Escrow money')  {{ $notif->job->user->user_profile[0]->first_name}} has Escowed ${{ $notif->amount }} @endif for job {{ $notif->job->project_name}}</p>
	
		<p class="item-info pull-right" style='color:#ff7788;font-weight:bold'> {{ date('F d', strtotime($notif->updated_at)) }}</p>
	
		</div>
    </a>
		
		@endforeach
	@else
		<div class="notification-item"><center> No notification found <center></div>
	@endif
	
{!! $notify->render() !!}		
    
 
</div>

</div>
		</div>
		
		</div>
		
		 @stop