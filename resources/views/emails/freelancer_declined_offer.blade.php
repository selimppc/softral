<div width="100%" style="background-color:#ffffff;line-height:0px;margin:0px;padding:0px;color:#000000">
	<div class="adM"></div>
    <table cellpadding="0" cellspacing="0" style="line-height:0;background-color:#ffffff" bgcolor="#ffffff">
		<tbody>
        	<tr style="line-height:0">
                <td width="50%" style="line-height:0"></td>
                <td style="line-height:0;border:1px solid #000;" width="600">
                
                	<table cellpadding="0" cellspacing="0" width="600" style="line-height:0;border-bottom:1px solid #000;">
                		<tbody>
                        	<tr width="1000" style="line-height:0">
                          		<td width="100%" height="" bgcolor="white" rowspan="2" 
                                	style="line-height:0;padding: 20px 0;background-color: #023e73;text-align:center">
                                	<a target="_blank" style="text-decoration:none;color:#fff;" href="{!! URL::to('/') !!}"><h1>SOFTRAL</h1></a>
                                </td>
                       	 	</tr>
                        	<tr style="line-height:0">
                        		<td style="line-height:0;background-color:#ffffff" width="18" height="140" bgcolor="#ffffff" rowspan="2"></td>
                                <td style="line-height:0;background-color:#ffffff" width="20" height="140" bgcolor="#ffffff" rowspan="2"></td>
                                <td style="line-height:0;background-color:#ffffff" width="330" height="57" bgcolor="#ffffff"></td>
                                <td style="line-height:0;background-color:#ffffff" width="24" height="140" bgcolor="#ffffff" rowspan="2"></td>
                      	  	</tr>
                            <tr style="line-height:0">
                        		<td style="line-height:0;background-color:#fff;vertical-align:middle;" width="425" height="83" valign="top">
                                	<p style="font-family:Helvetica,Arial,sans-serif;font-size:25px;color:#333;margin:0;padding:0;line-height:45px;	 		 									font-weight:bold;text-align:center;">@if($label=='employer')
	Your offer is declined
@else
	You have declined the offer	
@endif</p>
                        		</td>
                        	</tr>
                       	</tbody>
                	</table>


<table cellpadding="0" cellspacing="0" width="600" style="line-height:0">
<tbody><!--<tr style="line-height:0">
<td style="line-height:0;background-color:#6cae4a" width="600" height="19" bgcolor="#6cae4a"><p style="text-decoration:none;font-family:Helvetica,Arial,sans-serif;font-size:1px;margin:0;padding:0;margin-bottom:0"><img src="https://ci6.googleusercontent.com/proxy/q5gD1AQ1nEQdPHeLX04SxUewRthco0TPnToPBEL3gOjMXeNkqJt_uhpZ4cUzp-zT6H3qpFqes7W73sgBipNYjtrwBkgzOZy0npIyus2GZKapFXaXS_GHf8sU6EM=s0-d-e1-ft#http://static.thegumtree.com/static-email-assets/images/header-bar.gif" alt="bar" width="600" height="19" class="CToWUd"></p></td>
</tr>-->
<tr style="line-height:0">
<td style="line-height:0;background-color:#ffffff" width="600" height="31" bgcolor="#ffffff" valign="top" colspan="5"></td>
</tr>
</tbody></table><table cellpadding="0" cellspacing="0" style="line-height:0" width="600">
<tbody><tr style="line-height:0">
<td style="line-height:0;background-color:#ffffff" width="28" height="37" bgcolor="#ffffff" valign="top"></td>
<td style="line-height:0;background-color:#ffffff" width="548" height="37" bgcolor="#ffffff" valign="top"><p style="font-family:Helvetica,Arial,sans-serif;font-size:14px;color:#333333;margin:0;padding:0;line-height:14px;font-weight:bold;margin-bottom:0">Hi 
@if($label=='employer'){!!$proposal['job']['user']['user_profile'][0]['first_name']!!}@else {!!$proposal['user']['user_profile'][0]['first_name']!!} @endif, offer for Job <a href="{{ URL::to('job') }}/{!! $proposal['job']['slug'] !!}">{!! $proposal['job']['project_name'] !!}</a> has been declined.</p></td>
<td style="line-height:0;background-color:#ffffff" width="24" height="37" bgcolor="#ffffff" valign="top"></td>
</tr>
<tr style="line-height:0">
<td style="line-height:0;background-color:#ffffff" width="28" height="30" bgcolor="#ffffff" valign="top"></td>
<td style="line-height:0;background-color:#ffffff" width="548" height="30" bgcolor="#ffffff" valign="top"><p style="font-family:Helvetica,Arial,sans-serif;font-size:12px;color:#333333;margin:0;padding:0;line-height:20px;font-weight:normal;margin-bottom:0">Job Details:</p></td>
<td style="line-height:0;background-color:#ffffff" width="24" height="30" bgcolor="#ffffff" valign="top"></td>
</tr>
</tbody></table><table cellpadding="0" cellspacing="0" style="line-height:0" width="600">
<tbody><tr style="line-height:0">
<td style="line-height:0;background-color:#ffffff" width="28" height="20" bgcolor="#ffffff" valign="top"></td>
<td style="line-height:0;background-color:#ffffff" width="548" height="20" bgcolor="#ffffff" valign="top"></td>
<td style="line-height:0;background-color:#ffffff" width="24" height="20" bgcolor="#ffffff" valign="top"></td>
</tr>
<tr style="line-height:0">
<td style="line-height:0;background-color:#ffffff" width="28" height="20" bgcolor="#ffffff" valign="top"></td>
<td style="line-height:0;background-color:#ffffff" width="548" height="20" bgcolor="#ffffff" valign="top"><strong>Job name: </strong>{!! $proposal['job']['project_name'] !!}</td>
<td style="line-height:0;background-color:#ffffff" width="24" height="20" bgcolor="#ffffff" valign="top"></td>
</tr>
<tr style="line-height:0">
<td style="line-height:0;background-color:#ffffff" width="28" height="20" bgcolor="#ffffff" valign="top"></td>
<td style="line-height:0;background-color:#ffffff" width="548" height="20" bgcolor="#ffffff" valign="top"><strong>Freelancer: </strong>{!! $proposal['user']['user_profile'][0]['first_name'] !!}</td>
<td style="line-height:0;background-color:#ffffff" width="24" height="20" bgcolor="#ffffff" valign="top"></td>
</tr>

<tr style="line-height:0">
<td style="line-height:0;background-color:#ffffff" width="28" height="20" bgcolor="#ffffff" valign="top"></td>
<td style="line-height:0;background-color:#ffffff" width="548" height="20" bgcolor="#ffffff" valign="top"><strong>Employer: </strong>{!! $proposal['job']['user']['user_profile'][0]['first_name'] !!}</td>
<td style="line-height:0;background-color:#ffffff" width="24" height="20" bgcolor="#ffffff" valign="top"></td>
</tr>
<br/>

<tr style="line-height:0">
<td style="line-height:0;background-color:#ffffff" width="28" height="30" bgcolor="#ffffff" valign="top"></td>
<td style="line-height:0;background-color:#ffffff" width="548" height="30" bgcolor="#ffffff" valign="top"><p style="font-family:Helvetica,Arial,sans-serif;font-size:12px;color:#333333;margin:0;padding:0;line-height:20px;font-weight:normal;margin-bottom:0"> <a href="{{ URL::to('financial/terms_milestone/') }}?p_id={!! $proposal['id'] !!}">See Contract</a></p></td>
<td style="line-height:0;background-color:#ffffff" width="24" height="30" bgcolor="#ffffff" valign="top"></td>
</tr>

</tbody></table><table cellpadding="0" cellspacing="0" width="600" style="line-height:0">
<tbody>
<tr style="line-height:0"><td width="28" valign="top" height="40" bgcolor="#ffffff" style="line-height:0;background-color:#ffffff"></td>
<td style="line-height:0;background-color:#ffffff" width="548" height="34" bgcolor="#ffffff" valign="top"><p style="font-family:Helvetica,Arial,sans-serif;font-size:12px;color:#333333;margin:0;padding:0;line-height:12px;font-weight:normal;margin-bottom:0">Thanks</p></td>
<td style="line-height:0;background-color:#ffffff" width="24" height="34" bgcolor="#ffffff" valign="top"></td>
</tr>
<tr style="line-height:0"><td width="28" valign="top" height="40" bgcolor="#ffffff" style="line-height:0;background-color:#ffffff"></td>
<td style="line-height:0;background-color:#ffffff" width="548" height="35" bgcolor="#ffffff" valign="top"><p style="font-family:Helvetica,Arial,sans-serif;font-size:12px;color:#333333;margin:0;padding:0;line-height:12px;font-weight:normal;margin-bottom:5px">Regards</p><br/><p style="font-family:Helvetica,Arial,sans-serif;font-size:12px;color:#F96E5B;margin:0;padding:0;line-height:12px;font-weight:bold;margin-bottom:0">The <span class="il">Softral</span> Team</p></td>
<td style="line-height:0;background-color:#ffffff" width="24" height="35" bgcolor="#ffffff" valign="top"></td>
</tr>
</tbody></table>
<table cellpadding="0" cellspacing="0" width="600" style="line-height:0;border-bottom-color:#ffffff;border-bottom-width:1px;border-bottom-style:solid;border-bottom-color:#ffffff;border-bottom-width:1px;border-bottom-style:solid">
<tbody><tr style="line-height:0">
<td style="line-height:0;background-color:#ffffff" width="600" height="10" bgcolor="#ffffff" valign="top"></td>
</tr>
</tbody></table><table cellpadding="0" cellspacing="0" width="600" style="line-height:0;border-top-color:#d6d6d6;border-top-width:1px;border-top-style:solid">
<tbody><tr style="line-height:0">
<td style="line-height:0;background-color:#ffffff" width="600" height="24" bgcolor="#ffffff" valign="top" colspan="3"></td>
</tr><tr style="line-height:0">
<td style="line-height:0;background-color:#ffffff" width="28" height="83" bgcolor="#ffffff" valign="top"></td>
<td style="line-height:0;background-color:#ffffff" width="548" height="83" bgcolor="#ffffff" valign="top"><p style="font-family:Helvetica,Arial,sans-serif;font-size:11px;color:#6e6e6e;margin:0;padding:0;line-height:20px;font-weight:normal;margin-bottom:0">@ Copyright <?php echo date('Y'); ?> <a href="{!! URL::to('/') !!}">Softral.com</a>. All rights reserved.</p></td>
<td style="line-height:0;background-color:#ffffff" width="24" height="83" bgcolor="#ffffff" valign="top"></td>
</tr>
<tr style="line-height:0">
<td style="line-height:0;background-color:#ffffff" width="600" height="21" bgcolor="#ffffff" valign="top" colspan="3"></td>
</tr>
</tbody></table></td>
<td width="50%" style="line-height:0"></td>
</tr>
</tbody></table><div class="yj6qo"></div><div class="adL">
</div></div>