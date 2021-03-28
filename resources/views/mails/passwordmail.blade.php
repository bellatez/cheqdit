<div style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Barlow',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';box-sizing:border-box;background-color:#f8fafc;color:#74787e;height:100%;line-height:1.4;margin:0;width:100%!important;word-break:break-word;">
	<table cellpadding="0" cellspacing="0" style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Barlow',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';box-sizing:border-box;background-color:#f8fafc;margin:0;padding:0;width:100%;" width="100%">
		<tbody>
			<tr>
				<td align="center" style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Barlow',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';box-sizing:border-box;">

					<table cellpadding="0" cellspacing="0" class="m_1008690356447447200content" style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Barlow',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';box-sizing:border-box;margin:0;padding:0;width:100%;" width="100%">
						<tbody>
							<tr>
								<td style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Barlow',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';box-sizing:border-box;padding:25px 0;text-align:center;">
                                    <a style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Barlow',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';box-sizing:border-box;color:#061727;font-size:19px;font-weight:bold;text-decoration:none;" target="_blank">
                                        <img src="http://localhost:8000/assets/images/logo.svg">
                                        <br>
                                        &nbsp;{{config('app.name')}}&nbsp;
                                    </a>
                                </td>
							</tr>
							<tr>
								<td cellpadding="0" cellspacing="0" style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Barlow',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';box-sizing:border-box;background-color:#ffffff;border-bottom:1px solid #edeff2;border-top:1px solid #edeff2;margin:0;padding:0;width:100%;" width="100%">

									<table align="center" cellpadding="0" cellspacing="0" style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Barlow',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';box-sizing:border-box;background-color:#ffffff;margin:0 auto;padding:0;width:570px;" width="570">
										<tbody>
											<tr>
												<td style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Barlow',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';box-sizing:border-box;padding:35px;">

													<h1 style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Barlow',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';box-sizing:border-box;color:#3d4852;font-size:19px;font-weight:bold;margin-top:0;text-align:left;">Hello {{$details['name']}}!</h1>

													<h3 style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Barlow',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';box-sizing:border-box;color:#3d4852;font-size:16px;line-height:1.5em;margin-top:0;text-align:left;">{{$details['title']}} </h3>

													<p style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Barlow',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';box-sizing:border-box;color:#3d4852;font-size:16px;line-height:1.5em;margin-top:0;text-align:left;">You have been registered into the <strong>{{config('app.name')}} Portal as {{$details['role']}}</strong>                                                                                 
												</td>
											</tr>
											<tr>
												<td>
                                            		<h4 style="margin: 0;">Your Login details are:</h4>
												</td>
											</tr>
                                            <tr>
                                                <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 20px 30px; color: #666666; font-family: 'Lato', 'Barlow', Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                                    <p style="margin: 0;">email: <strong>{{$details['email']}}</strong></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 20px 30px; color: #666666; font-family: 'Lato', 'Barlow', Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                                                    <p style="margin: 0;">password: <strong>{{$details['password']}}</strong></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" style="border-radius: 3px;">
                                                    <a href="{{URL::to('/login')}}" target="_blank" style="font-size: 20px; font-family: 'Barlow', Arial, sans-serif; background-color: #f2542d; text-decoration: none; color: #ffffff; padding: 15px 25px; display: block;">Log In</a>
                                                </td>
                                            </tr>
										</tbody>
									</table>
								</td>
							</tr>
							<tr>
								<td style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Barlow',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';box-sizing:border-box;">

									<table align="center" cellpadding="0" cellspacing="0" class="m_1008690356447447200footer" style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Barlow',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';box-sizing:border-box;margin:0 auto;padding:0;text-align:center;width:570px;" width="570">
										<tbody>
											<tr>
												<td align="center" class="m_1008690356447447200content-cell" style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Barlow',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';box-sizing:border-box;padding:35px;">

													<p style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,'Barlow',Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';box-sizing:border-box;line-height:1.5em;margin-top:0;color:#aeaeae;font-size:12px;text-align:center;">© {{date('Y')}} {{config('app.name')}} - All Rights Reserved.</p>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="yj6qo">
		<br>
	</div>
	<div class="adL">
		<br>
	</div>
</div>
