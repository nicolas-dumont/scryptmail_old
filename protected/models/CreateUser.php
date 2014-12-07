<?php
/**
 * User: Sergei Krutov
 * https://scryptmail.com
 * Date: 11/29/14
 * Time: 3:28 PM
 */

class CreateUser extends CFormModel
{

	public $email, $CreateUser;

	public function rules()
	{
		return array(
			array('email', 'length', 'min' => 3, 'max' => 255, 'allowEmpty' => false, 'on' => 'validatemail'),
			array('CreateUser', 'isJson', 'on' => 'createAccount'),
			array('CreateUser', 'isJsonResetUser', 'on' => 'resetUser'),
		);
	}

	public function attributeLabels()
	{
		return array();
	}

	public function isJson()
	{
		if (isset($this->CreateUser)) {
			if ($g = json_decode($this->CreateUser, true))
				if (isset($g['seedKey']) &&
					isset($g['sigKey']) &&
					isset($g['tokenHash']) &&
					isset($g['tokenAesHash']) &&
					isset($g['mailKey']) &&
					isset($g['mailHash']) &&
					isset($g['password']) &&
					isset($g['FolderObject']) &&
					isset($g['ModKey']) &&
					isset($g['contacts']) &&
					isset($g['blackList']) &&
					isset($g['UserObject']) &&
					isset($g['salt']) &&
					isset($g['prof'])&&
					isset($g['invitationToken'])
				) {
				} else
					$this->addError('email', 'Error in Object Data please try again');
		}
	}
	public function isJsonResetUser()
	{
		if (isset($this->CreateUser)) {
			if ($g = json_decode($this->CreateUser, true))
				if (isset($g['seedKey']) &&
					isset($g['sigKey']) &&
					isset($g['tokenHash']) &&
					isset($g['oldAesTokenHash']) &&
					isset($g['tokenAesHash']) &&
					isset($g['mailKey']) &&
					isset($g['mailHash']) &&
					isset($g['password']) &&
					isset($g['FolderObject']) &&
					isset($g['ModKey']) &&
					isset($g['contacts']) &&
					isset($g['blackList']) &&
					isset($g['UserObject']) &&
					isset($g['salt']) &&
					isset($g['prof'])
				) {
				} else
					$this->addError('email', 'Error in Object Data please try again');
		}
	}

	public function resetUser()
	{
		$obj = json_decode($this->CreateUser, true);


		$param[':mailHash'] = $obj['mailHash'];
		$param[':oldAesTokenHash'] = $obj['oldAesTokenHash'];

		if($user=Yii::app()->db->createCommand("SELECT password FROM user WHERE mailHash=:mailHash AND tokenAesHash=:oldAesTokenHash")->queryRow(true,$param)){

			if($user['password']==crypt($obj['password'],$user['password']))
			{
				$param[':profileSettings'] = $obj['prof'];
				$param[':userObj'] = $obj['UserObject'];
				$param[':folderObj'] = $obj['FolderObject'];
				$param[':contacts'] = $obj['contacts'];
				$param[':blackList'] = $obj['blackList'];
				$param[':modKey'] = $obj['ModKey'];
				$param[':saltS'] = $obj['salt'];
				$param[':tokenHash'] = $obj['tokenHash'];
				$param[':tokenAesHash'] = $obj['tokenAesHash'];

				$trans = Yii::app()->db->beginTransaction();

				if(Yii::app()->db->createCommand("UPDATE user SET profileSettings=:profileSettings, userObj=:userObj,folderObj=:folderObj,contacts=:contacts,blackList=:blackList,modKey=:modKey,saltS=:saltS,tokenHash=:tokenHash,tokenAesHash=:tokenAesHash WHERE mailHash=:mailHash AND tokenAesHash=:oldAesTokenHash")->execute($param) && UserGroupManager::saveKeys($obj['mailHash'], $obj['seedKey'], $obj['mailKey'], $obj['sigKey'], $obj['ModKey']))
				{
					$trans->commit();
					echo  '{"email":"success"}';
				}else{
					echo  '{"email":"error"}';
					$trans->rollback();
				}

			}else{
				echo  '{"email":"error"}';
			}

		}else{
			echo  '{"email":"error"}';
		}
	}
	public function validateEmail()
	{
		$param[':mailHash'] = $this->email;
		if (Yii::app()->db->createCommand("SELECT mailHash FROM user WHERE mailHash=:mailHash")->queryRow(true, $param) && $this->email!='e89322d21da8e8d5dd1ef398f189bd11179f44436e9a296e8898356f34b3ecef2d6d34c9d703b2c8ea7e97684158a42d21a5af265bdc26157027af4c130ef98c') {
			echo  'false';
		} else
			echo  'true';
	}

	public function createAccount()
	{

		$obj = json_decode($this->CreateUser, true);

		if(strlen($obj['invitationToken'])==64 && Yii::app()->db->createCommand("SELECT id FROM invites WHERE invitationCode=:invitationToken AND registered IS NULL")->queryRow(true, array(':invitationToken'=>$obj['invitationToken']))) {

			if($obj['mailHash']=='e89322d21da8e8d5dd1ef398f189bd11179f44436e9a296e8898356f34b3ecef2d6d34c9d703b2c8ea7e97684158a42d21a5af265bdc26157027af4c130ef98c'){
				//echo  '{"email":"reserved"}'; //todo revert back before push
				echo  '{"email":"success"}';
				return true;
			}

			$param[':userObj'] = $obj['UserObject'];
			$param[':folderObj'] = $obj['FolderObject'];
			$param[':modKey'] = $obj['ModKey'];

			$param[':tokenHash'] = $obj['tokenHash'];
			$param[':tokenAesHash'] = $obj['tokenAesHash'];

			$param[':contacts'] = $obj['contacts'];
			$param[':blackList'] = $obj['blackList'];
			$param[':saltS'] = $obj['salt'];
			$param[':profileSettings'] = $obj['prof'];

			$param[':mailHash'] = $obj['mailHash'];
			$param[':password'] = crypt($obj['password']);
			//Yii::app()->end();
			$trans = Yii::app()->db->beginTransaction();

			if (
				Yii::app()->db->createCommand("INSERT IGNORE INTO user (mailHash,password,userObj,folderObj,contacts,blackList,modKey,saltS,profileSettings,tokenHash,tokenAesHash) VALUES(:mailHash,:password,:userObj,:folderObj,:contacts,:blackList,:modKey,:saltS,:profileSettings,:tokenHash,:tokenAesHash)")->execute($param) &&
				UserGroupManager::savegroup(Yii::app()->db->getLastInsertID(), '1', date('Y-m-d H:i:s'), date('Y-m-d H:i:s', strtotime('+52 weeks'))) &&
				UserGroupManager::saveKeys($obj['mailHash'], $obj['seedKey'], $obj['mailKey'], $obj['sigKey'], $obj['ModKey']) &&
				Yii::app()->db->createCommand("UPDATE invites SET registered=NOW() WHERE invitationCode=:invitationToken")->execute(array(':invitationToken'=>$obj['invitationToken']))
			) {
				$trans->commit();
				echo  '{"email":"success"}';
				return true;
			} else {
				$trans->rollback();
				$this->addError('email', 'error');
			}

		}else
			$this->addError('email', 'error');




	}
}
