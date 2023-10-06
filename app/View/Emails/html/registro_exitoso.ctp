<table cellpadding="0" cellspacing="0" class="es-content" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
	<tr>
		<td align="center" style="padding:0;Margin:0">
			<table bgcolor="#ffffff" class="es-content-body" align="center" cellpadding="0" cellspacing="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px">
				<tr>
					<td align="left" style="padding:20px;Margin:0">
						<table cellpadding="0" cellspacing="0" width="100%" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
							<tr>
								<td align="center" valign="top" style="padding:0;Margin:0;width:560px">
									<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
										<tr>
											<td align="center" class="es-m-p0r es-m-p0l" style="Margin:0;padding-top:5px;padding-bottom:5px;padding-left:40px;padding-right:40px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;color:#333333;font-size:14px"><strong><?= date("d-M-Y") ?></strong></p></td>
										</tr>
										<tr>
											<td align="center" class="es-m-p0r es-m-p0l" style="Margin:0;padding-top:5px;padding-bottom:15px;padding-left:40px;padding-right:40px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:24px;color:#333333;font-size:16px">¡Muchas gracias por registrarte en este programa de Capacitación DENSO!</p></td>
										</tr>
										<tr>
											<td align="center" class="es-m-p0r es-m-p0l" style="Margin:0;padding-top:5px;padding-bottom:15px;padding-left:40px;padding-right:40px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:24px;color:#333333;font-size:16px">Estamos a un paso de que puedas acceder a tu cuenta. Solo es necesario confirmar tu cuenta a través del siguiente botón y podrás acceder a todos los cursos que tenemos para tí</p></td>
										</tr>
										<tr>
											<td align="center" style="padding:0;Margin:0;padding-left:15px;padding-right:15px">
												<?= $this->Html->link('Activar mi cuenta',array('controller'=>'users','action'=>'activate',$user,'full_base' => true),array('style'=>'font-size:16px; background-color:#ff0000; color:white; padding:15px; width:100%; border-radius:10px'))?>
										</tr>
									</table></td>
							</tr>
						</table></td>
				</tr>
			</table></td>
	</tr>
</table>
