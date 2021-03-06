<div class="row" style="padding-bottom:70px;">

	<article class="col-sm-12 col-md-12 col-lg-6 sortable-grid ui-sortable">
			<div class="well well-light well-sm">

				<div class="row">

					<div class="col-sm-12">
						<div class="panel-body">
							<div class="row">
								<div class="col-xs-6" id="userFLName">
									<h1></h1>

									<ul class="list-unstyled">
										<li>
											<p class="text-muted" id="profEmail">
												<i class="fa fa-envelope"></i>&nbsp;&nbsp;<a href="javascript:void(0);"></a>
											</p>
										</li>


									</ul>

									<br>
									<br>
								</div>
								<div class="col-xs-6 pull-right">
									<div id="smart-form-register" class="smart-form">
										<fieldset>
											<div class="row">
												<section>
													<label class="input"> <i class="icon-prepend fa fa-user"></i>
														<input type="text" name="fname" placeholder="Name" id="newFname">
													</label>
												</section>
											</div>
										</fieldset>
										<a class="btn btn-primary btn-sm pull-right" href="javascript:void(0);" onclick="saveProfileName();">
											<i class="fa fa-save"></i> Update Name</a>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

			</div>
<!--
		<div class="jarviswidget" id="wid-id-0">
			<header role="heading">
				<h2>Security Meter </h2>
				<div class="widget-toolbar" role="menu">

					<div class="progress progress-striped active" rel="tooltip" data-original-title="55%" data-placement="bottom">
						<div class="progress-bar progress-bar-success" role="progressbar" style="width: 15%"></div>
					</div>

				</div>
				</header>
					<div class="panel-body">
						<article class="col-sm-6">

								<ul class="list-unstyled">
									<li>
										<p>
											Https Connection:
										</p>
									</li>
									<li>
										<p>
											IP Address:
										</p>
									</li>

									<li>
										<p>
											Location:
										</p>
									</li>
								</ul>

								<br>
								<br>


						</article>
						<article class="col-sm-6">

							<ul class="list-unstyled">
								<li>
									<p>
										Browser Detected:
									</p>
								</li>
								<li>
									<p>
										OS:
									</p>
								</li>

								<li>
									<p>
										OS Version :
									</p>
								</li>
							</ul>

							<br>
							<br>


						</article>
					</div>


		</div>
		!-->
		<div class="widget-body">
		<div class="panel-group smart-accordion-default" id="accordion1">

			<div class="panel panel-default" onclick="initdisposable();">
				<div class="panel-heading">
					<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapse1l"
											   class="collapsed"> <i class="fa fa-lg fa-angle-down pull-right"></i> <i
								class="fa fa-lg fa-angle-up pull-right"></i> Disposable emails</a></h4>
				</div>
				<div id="collapse1l" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-hover" id="disposeList">
							</table>
						</div>
					</div>
				</div>
			</div>

				<div class="panel panel-default">
					<div class="panel-heading" onclick="initAlias();">
						<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapse2l"
												   class="collapsed"> <i class="fa fa-lg fa-angle-down pull-right"></i> <i
									class="fa fa-lg fa-angle-up pull-right"></i> Email Alias</a></h4>
					</div>
					<div id="collapse2l" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-hover" id="aliasList">
								</table>
							</div>
						</div>
					</div>
				</div>

			<div class="panel panel-default" id="custDomPanel" style="display:none;">
				<div class="panel-heading" onclick="initCustomDomain();">
					<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapse3l"
											   class="collapsed"> <i class="fa fa-lg fa-angle-down pull-right"></i> <i
								class="fa fa-lg fa-angle-up pull-right"></i> Custom Domain Setup</a></h4>
				</div>
				<div id="collapse3l" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-hover" id="customDomainList">
								<thead>
								<tr role="row">
									<th><span rel="popover-hover" data-placement="bottom" data-original-title="" data-content="Registered Domain">domain</span></th>
									<th><span rel="popover-hover" data-placement="bottom" data-original-title="" data-content="Email will pass SPF test">SPF</span></th>
									<th><span rel="popover-hover" data-placement="bottom" data-original-title="" data-content="We can accept incoming emails">Inbound</span></th>
									<th><span rel="popover-hover" data-placement="bottom" data-original-title="" data-content="Domain owner verified">Owner</span></th>
									<th><span rel="popover-hover" data-placement="bottom" data-original-title="" data-content="DKIM signature">DKIM</span></th>
									<th><span rel="popover-hover" data-placement="bottom" data-original-title="" data-content="New address can be registered">Registration</span></th>
									<th><span rel="popover-hover" data-placement="bottom" data-original-title="" data-content="Refresh DNS record">DNS</span></th>
									<th><span rel="popover-hover" data-placement="bottom" data-original-title="" data-content="Remove domain from system">Delete</span></th>
								</tr>
								</thead>

							</table>
						</div>
					</div>
				</div>
			</div>


			</div>
		</div>
	</article>


	<article class="col-sm-12 col-md-12 col-lg-6 sortable-grid ui-sortable">

		<div class="widget-body">

		<div class="panel-group smart-accordion-default" id="accordion">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse7"  onclick="initBaseSettings()"
										   class="collapsed"> <i class="fa fa-lg fa-angle-down pull-right"></i> <i
							class="fa fa-lg fa-angle-up pull-right"></i> Settings </a></h4>
			</div>
			<div id="collapse7" class="panel-collapse collapse">
				<div class="panel-body">
					<section>
					<div class="row">
						<div class="col-xs-3">
							<div id="smart-form-session-time" class="smart-form"
								 rel="popover-hover"
								 data-placement="bottom"
								 data-original-title="Warning!"
								 data-content="Set time out for session. It will log out after set period of inactivity."
								>
								<label class="select">
									<select onchange="changeTimeout($(this));">
										<option value="0" selected="" disabled="">Select Session Time Out</option>
										<option value="-1">Disable Timeout</option>
										<option value="600">10 Minutes - Shared Facilities</option>
										<option value="1800">30 Minutes - Personal Office</option>
										<option value="3600">1 Hour - Home</option>
										<option value="10800">3 Hours - Home Alone (Unsafe)</option>
									</select> <i></i> </label>


							</div>
						</div>
						<div class="col-xs-3">
							<div id="smart-form-session-time" class="smart-form"
								 rel="popover-hover"
								 data-placement="bottom"
								 data-original-title="Warning!"
								 data-content="Set amount of emails displayed per page."
								>
								<label class="select">
									<select onchange="changeMessagesPerPage($(this));">
										<option value="0" selected="" disabled="">Emails per page</option>
										<option value="10">10</option>
										<option value="25">25</option>
										<option value="50">50</option>
										<option value="100">100</option>
									</select> <i></i> </label>


							</div>
						</div>
						<div class="col-xs-4  text-align-right">
							<button class="btn btn-primary" id="dis2step" onclick="CreateOneStep()"
									rel="popover-hover"
									data-placement="left"
									data-original-title="Warning!"
									data-content="Don't forget to download new token after you change authentication. In Password tab"

								>Disable 2 Step Auth</button>
							<button class="btn btn-primary" id="enb2step" onclick="CreateTwoStep()"
									rel="popover-hover"
									data-placement="left"
									data-original-title="Warning!"
									data-content="Don't forget to download your new token after you change the authentication. In Secret Phrase tab"

								>Enable 2 Step Auth</button>
						</div>

						<div class="col-xs-2 pull-right text-align-right">
							<button class="btn btn-danger" onclick="deleteAccount()"
									rel="popover-hover"
									data-placement="bottom"
									data-original-title="Warning!"
									data-content="Your account, contacts and messages will be deleted."
								>Delete Account</button>
						</div>

					</div>
					</section>

					<section>
					<div class="row top15">
						<div class="col-xs-3">
							<div id="smart-form-changeFont" class="smart-form">
								<label class="select">
									<select onchange="changeSystemFont($(this).val());">
										<option value="0" selected="" disabled="">Select Font</option>

										<option value="1">Georgia</option>
										<option value="2">Palatino</option>
										<option value="3">Times New Roman</option>


										<option value="4">Arial</option>
										<option value="5">Arial Black</option>
										<option value="6">Comic Sans MS</option>
										<option value="7">Lucida Sans Unicode</option>
										<option value="8">Tahoma</option>
										<option value="9">Trebuchet MS</option>
										<option value="10">Verdana</option>


										<option value="11">Courier New</option>
										<option value="12">Lucida Console</option>


									</select><i></i> </label>


							</div>
						</div>

						<div class="col-xs-3">
							<div id="smart-form-changeFont" class="smart-form">
								<label class="select">
									<select onchange="changeFontSize($(this).val());" id="fontSize">
										<option value="0" selected="" disabled="">Select Font Size</option>

										<option value="9" style="font-size:9px;">9</option>
										<option value="10" style="font-size:10px;">10</option>
										<option value="11" style="font-size:11px;">11</option>
										<option value="12" style="font-size:12px;">12</option>
										<option value="13" style="font-size:13px;">13</option>
										<option value="14" style="font-size:14px;">14</option>
										<option value="15" style="font-size:15px;">15</option>
										<option value="16" style="font-size:16px;">16</option>
										<option value="17" style="font-size:17px;">17</option>


									</select><i></i> </label>


							</div>
						</div>

					</div>
						</section>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed"
										   onclick="gotoUpdateKeys()"> <i class="fa fa-lg fa-angle-down pull-right"></i> <i
							class="fa fa-lg fa-angle-up pull-right"></i> PGP Keys </a></h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
				<div class="panel-body">
					<div class="smart-form" id="keyGenForm">

						<fieldset>
							<section>
								<label class="label">Key Strength</label>

								<div class="row">
									<div class="col col-12">
										<label class="radio">
											<input type="radio" id="UpdateKeys_mode_0" value="light" name="UpdateKeys[mode]">
											<i></i><span id="label512"
														 rel="popover-hover" data-placement="bottom"
														 data-original-title=" 1024"
														 data-content="Fastest encryption providing basic protection.">Light Mode (1024 bit) ~ 4sec. to generate</label>

										<label class="radio">
											<input type="radio" id="UpdateKeys_mode_1" value="normal" name="UpdateKeys[mode]">
											<i></i><span id='label1024'
														 rel="popover-hover" data-placement="bottom"
														 data-original-title=" 2048"
														 data-content="Compromise between speed and security. Message encrypted using 2012 NIST recommendations up to 2030."> Normal Mode (2048) ~20 sec. to generate
										</label>

										<label class="radio">
											<input type="radio" id="UpdateKeys_mode_2" value="paranoid" name="UpdateKeys[mode]">
											<i></i><span id='label2048'
														 rel="popover-hover" data-placement="bottom"
														 data-original-title=" 4096"
														 data-content="Slowest and most secure communication. Message key encryption should survive the next 10 years or until dramatic quantum computer breakthrough."> Secured Mode (4096) ~2 minutes to generate</label>

									</div>

								</div>
							</section>


						</fieldset>

						<!-- widget content -->


						<button class="btn btn-primary btn-sm" onclick="retrieveKeys();" type="button"
						   rel="popover-hover"
						   data-placement="bottom"
						   data-original-title=""
						   data-content="Retrieve Key for offline storage or verification."

							><i class="fa fa-upload"></i> Retrieve</button>


						<br><br>
						<fieldset>
							<legend><p class="note">Public keys are required.</p></legend>

							<div class="row">
								<section>
									<label class="textarea"><i class="icon-append fa fa-key" style="margin-right: 10px;"></i>

										<textarea rows="7" class="custom-scroll" name="UpdateKeys[mailPrK]" placeholder="Mail Private Key"
												  class="valid" id="UpdateKeys_mailPrK" spellcheck="false" disabled="disabled"
												  oninput="validateMailKeys();"></textarea>

									</label>
								</section>

							</div>

							<div class="row">
								<section>
									<label class="textarea"> <i class="icon-append fa fa-key" style="margin-right: 10px;"></i>
										<textarea rows="7"  class="custom-scroll" name="UpdateKeys[mailPubK]" placeholder="Mail Public Key"
												  class="valid" id="UpdateKeys_mailPubK" spellcheck="false" disabled="disabled"
												  oninput="validateMailKeys();"></textarea>
									</label>
								</section>
							</div>
							<div class="row">
							<div class="buttons pull-left col col-sm-6">
								<button class="btn btn-primary btn-sm" onclick="generateKeys()" id="profileGenerateKeys" type="button"
										rel="popover-hover"
										data-placement="bottom"
										data-original-title=""
										data-content="Will generate new RSA keys."
									><i
										class="fa fa-cog fa-lg"></i>
									Generate Keys</button>

							</div>

								<div class="buttons col col-sm-6">

									<a class="btn btn-primary btn-sm pull-right " href="javascript:void(0);" onclick="saveKeys();"
									   rel="popover-hover"
									   data-placement="left"
									   data-original-title="Caution:"
									   data-content="Saving Keys will overwrite your existing keys. You won't be able to receive messages encrypted with old keys.">
										<i class="fa fa-save"></i> Save</a>


								</div>
							</div>
							<div class="row"><p class="note">Caution: This action will overwrite your existing keys. You won't be able to receive messages encrypted with old keys.</p></div>

						</fieldset>

					</div>
				</div>
			</div>
		</div>

		<div class="panel panel-default" id="showPass">
			<div class="panel-heading">
				<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" onclick="initSavePass()"
										   class="collapsed"> <i class="fa fa-lg fa-angle-down pull-right"></i> <i
							class="fa fa-lg fa-angle-up pull-right"></i> Passwords </a></h4>
			</div>
			<div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;">
				<div class="panel-body">
					<form id="smart-form-changepass" class="smart-form" novalidate="novalidate">
						<fieldset>
							<section>
								<label class="input"> <i class="icon-append fa fa-lock"></i>
									<input type="password" name="password" placeholder="Old Password" id="passwordOld">
									</label>
							</section>
						</fieldset>
						<fieldset>
							<section>
								<label class="input"> <i class="icon-append fa fa-lock"></i>
									<input type="password" name="passwordNew" placeholder="New Password" id="passwordNew">
									</label>
							</section>

							<section>
								<label class="input"> <i class="icon-append fa fa-lock"></i>
									<input type="password" name="passwordConfirm" placeholder="Confirm password" id="passwordNewRep">
									</label>
							</section>
						</fieldset>


						<button type="button" class="btn btn-primary btn-sm pull-right" onclick="savePassword();">
							<i class="fa fa-save"></i> Save</button>
					</form>
				</div>
			</div>
		</div>

		<div class="panel panel-default" id="showOneStep" style="display:none;">
			<div class="panel-heading">
				<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOneStepThree" onclick="initOneStepSaveSecret()"
										   class="collapsed"> <i class="fa fa-lg fa-angle-down pull-right"></i> <i
							class="fa fa-lg fa-angle-up pull-right"></i> Password</a></h4>
			</div>
			<div id="collapseOneStepThree" class="panel-collapse collapse">
				<div class="panel-body">
					<form id="OneStep-smart-form-secret" class="smart-form" novalidate="novalidate">
						<fieldset>
							<section>
								<label class="input"> <i class="icon-append fa fa-lock"></i>
									<input type="password" name="newSec" placeholder="New Password" id="OneStepNewSec">
								</label>
							</section>

							<section>
								<label class="input"> <i class="icon-append fa fa-lock"></i>
									<input type="password" name="repeatSec" placeholder="Repeat Password" id="OneStepRepeatSec">
								</label>
							</section>
						</fieldset>
						<div class="row padding-10">
							<div class="col col-sm-6">
								<button type="button" class="btn btn-primary btn-sm pull-left" id="OneStepToken" onclick="downloadTokenProfile();">
									<i class="fa fa-save"></i> Download Token</button><br><br>
								<a class="pull-left col col-sm 6"" href="http://blog.scryptmail.com/reset-password" target="_blank">What it is?</a>
							</div>
							<div class="col col-sm-6">
								<button type="button" class="btn btn-primary btn-sm pull-right" onclick="saveOneStepSecret();"
										rel="popover"
										data-placement="left"
										data-original-title="Caution:"
										data-content="Download new token after you change Password."
									><i class="fa fa-save"></i> Save</button>
							</div>
							<div class="col col-sm-12">
								<br>
								<span class="text-danger" style="display:none;" id="browsfailed"><i class="fa fa-warning"></i> Some browsers are not able to save the generated file, and this message will show. Please save this string into file:<br> <b class="text-default" style="word-break:break-all;"></b></span>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>


		<div class="panel panel-default" id="showSec">
			<div class="panel-heading">
				<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" onclick="initSaveSecret()"
										   class="collapsed"> <i class="fa fa-lg fa-angle-down pull-right"></i> <i
							class="fa fa-lg fa-angle-up pull-right"></i> Secret Phrase</a></h4>
			</div>
			<div id="collapseThree" class="panel-collapse collapse">
				<div class="panel-body">
					<form id="smart-form-secret" class="smart-form" novalidate="novalidate">
						<fieldset>
							<section>
								<label class="input"> <i class="icon-append fa fa-lock"></i>
									<input type="password" name="newSec" placeholder="New Secret Phrase" id="newSec">
								</label>
							</section>

							<section>
								<label class="input"> <i class="icon-append fa fa-lock"></i>
									<input type="password" name="repeatSec" placeholder="Repeat Secret Phrase" id="repeatSec">
								</label>
							</section>
						</fieldset>
						<div class="row padding-10">
							<div class="col col-sm-6">
						<a class="btn btn-primary btn-sm pull-left" href="javascript:void(0);" id="token" onclick="downloadTokenProfile();">
							<i class="fa fa-save"></i> Download Token</a><br><br>
						<a class="pull-left col col-sm 6"" href="http://blog.scryptmail.com/reset-password" target="_blank">What it is?</a>
								</div>
							<div class="col col-sm-6">
						<button type="button" class="btn btn-primary btn-sm pull-right" onclick="saveSecret();"
						rel="popover"
								data-placement="left"
								data-original-title="Caution:"
								data-content="Download new token after you change secret phrase."
						><i class="fa fa-save"></i> Save</button>
							</div>
							<div class="col col-sm-12">
								<br>
								<span class="text-danger" style="display:none;" id="browsfailed"><i class="fa fa-warning"></i> Some browsers are not able to save the generated file, and this message will show. Please save this string into file:<br> <b class="text-default" style="word-break:break-all;"></b></span>
								</div>
							</div>
					</form>
				</div>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" onclick="initContacts();"
										   class="collapsed"> <i class="fa fa-lg fa-angle-down pull-right"></i> <i
							class="fa fa-lg fa-angle-up pull-right"></i> Contacts </a></h4>
			</div>
			<div id="collapseFive" class="panel-collapse collapse">
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped table-hover" id="contactList">
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" onclick="initSafeBox();"
										   class="collapsed"> <i class="fa fa-lg fa-angle-down pull-right"></i> <i
							class="fa fa-lg fa-angle-up pull-right"></i> SafeBox </a></h4>
			</div>
			<div id="collapseSix" class="panel-collapse collapse">
				<div class="panel-body">
					<div class="table-responsive">
						URL to safe: https://scryptmail.com/safeBox/[MY FILE NAME].kdbx  <a class="pull-right" href="http://blog.scryptmail.com/keepass-safebox" target="_blank">Help</a></li>
						<table class="table table-striped table-hover" id="safeList">
						</table>
					</div>
				</div>
			</div>
		</div>



		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse8" onclick="initBlackList();"
										   class="collapsed"> <i class="fa fa-lg fa-angle-down pull-right"></i> <i
							class="fa fa-lg fa-angle-up pull-right"></i> Spam List </a></h4>
			</div>
			<div id="collapse8" class="panel-collapse collapse">
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped table-hover" id="blackListTable">
						</table>
					</div>
				</div>
			</div>
		</div>


		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse9" onclick="initTagList();"
										   class="collapsed"> <i class="fa fa-lg fa-angle-down pull-right"></i> <i
							class="fa fa-lg fa-angle-up pull-right"></i> Tags </a></h4>
			</div>
			<div id="collapse9" class="panel-collapse collapse">
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped table-hover" id="tagListTable">
						</table>
					</div>
				</div>
			</div>
		</div>


		</div>

		</div>



	</article>

</div>

<form class="smart-form client-form" id="dialog-AddCustDom" style="display:none;padding-top:20px;">
	<div class="row">
		<section class="col col-xs-12">
			<label class="input">
				<i class="icon-prepend">@</i>
				<input type="text" name="email" id="newCustomDomain" placeholder="domain" onkeyup="changingDomain()">
			</label>
		</section>

		<section class="col col-xs-12">
			<label class="input">
				Verification String
				<input type="text" name="secretSTR" id="secretSTR" readonly>
			</label>
		</section>
	</div>
	<a href="https://blog.scryptmail.com/adding-custom-domain/" target="_blank">* How to Add</a>
	<div class="clearfix"></div>
</form>


<form class="smart-form client-form" id="dialog-AddAlias" title="New Alias" style="display:none;padding-top:20px;">
<div class="row">
	<section class="col col-xs-12">
	<label class="input">
		<i class="icon-prepend fa fa-envelope-o"></i>
		<input type="text" name="email" id="newAliasEmail" placeholder="email">
	</label>
	</section>
	<section class="col col-xs-12">
		<label class="select">
			<select name="domain" id="aliasDomain" onchange='$("#newAliasEmail").valid();'>
			</select> <i></i> </label>
	</section>
</div>
</form>

<form class="smart-form client-form" id="dialog-AddContact" title="New Contact" style="display:none;">

	<section>
		<label class="input"> <i class="icon-prepend fa fa-user"></i>
			<input type="text" name="fname" id="newClientName" placeholder="name">
		</label>
	</section>

		<section>
		<label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
			<input type="email" name="email" id="newClientEmail" placeholder="email">
		</label>
	</section>

	<section>
		<label class="input">
			<input type="text" name="pin" id="newClientPin" placeholder="pin">
		</label>
	</section>


</form>


<form class="smart-form client-form" id="twoStep-dialog" title="Enable 2-step Auth" style="display:none;">

	<section>
		<label class="input"> <i class="icon-append fa fa-lock"></i>
			<input type="password" name="newSec" placeholder="New Password" id="TwStepNewPass">
		</label>
	</section>

	<section>
		<label class="input"> <i class="icon-append fa fa-lock"></i>
			<input type="password" name="repeatSec" placeholder="Repeat Password" id="TwStepNewPassRepeat">
		</label>
	</section>


	<section id="nSec">
		<label class="input"> <i class="icon-append glyphicon glyphicon-eye-close"></i>
			<input type="password" name="newSec" placeholder="New Secret Phrase" id="TwStepNewSec">
		</label>
	</section>

	<section id="nSecR">
		<label class="input"> <i class="icon-append glyphicon glyphicon-eye-close"></i>
			<input type="password" name="repeatSec" placeholder="Repeat Secret Phrase" id="TwStepNewSecRep">
		</label>
	</section>


</form>


<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front ui-dialog-buttons ui-draggable" tabindex="-1" role="dialog" aria-describedby="dialog_simple" aria-labelledby="ui-id-22" style="display: none;"><div id="dialog_simple" class="ui-dialog-content ui-widget-content">
		<p class="padding-5" style="word-break: break-all;">
		</p>
	</div>
</div>

<script src="/js/profile.js?r=<?php echo $version;?>"></script>
<script>
	$(document).ready(function () {
		$('#invFriend').css('display','none');
		recipient={};
		setTimeout(
			function () {
				activePage='profile';
			}, 2000);
	});

	</script>