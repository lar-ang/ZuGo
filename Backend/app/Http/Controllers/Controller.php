<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

use Session;
use Image;

use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseACL;
use Parse\ParsePush;
use Parse\ParseUser;
use Parse\ParseInstallation;
use Parse\ParseException;
use Parse\ParseAnalytics;
use Parse\ParseFile;
use Parse\ParseCloud;
use Parse\ParseClient;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
      $app_id = '6IBGDADItrj9gPUM1QnTSy8ZqAv5aq1PQc02Qejm';
      $rest_key = 'YIqJPFN2DXuokBGeWYUYKRwxqLPbZO4xpAZkqrIF';
      $master_key = 'iEo8n2Cpr5R3V5TFp0hYUiRHzw1oI2Z8vOfLYNVc';
      ParseClient::initialize( $app_id, $rest_key, $master_key );
      ParseClient::setServerURL('https://parse.zugodo.com:8000/','parse');

/*      $app_id = 'aa2b651a-30b7-47b8-893f-82d2d66a1125';
      $rest_key = '09b883b0-12d2-4039-ac18-e55977982a30';
      $master_key = 'fcf554e7-774c-4651-a7b2-94d244614459';
      ParseClient::initialize( $app_id, $rest_key, $master_key );
      ParseClient::setServerURL('https://parse.jimb.tk:20004/','parse');*/
    }

    public function login(Request $request){
      $uid = $request['uid'];
      $pwd = $request['pwd'];
      // $uid = 'brunolens@outlook.com';
      // $pwd = 'test';
      $user = null;
      try {
          $user = ParseUser::logIn($uid, $pwd);
          // Do stuff after successful login.
        } catch (ParseException $ex) {
			echo "Error: " . $ex->getCode() . " " . $ex->getMessage();
          $res['success'] = false;
          return $res;
        }
        $res['success'] = true;
        Session::put('user_verification', 'user_verification');
        return $res;
    }

    public function getAdvertises() {
      $query = new ParseQuery("ads");
      // $query->equalTo("playerName", "Dan Stemkoski");
      $objArray = $query->find();
      $data = array();
      foreach ($objArray as $obj) {
        $one['id'] =  $obj->getObjectId();
        $one['name'] =  $obj->name;
        $one['adType'] =  $obj->adType;
        $one['adImage'] =  ($obj->adImage!=null)?$obj->adImage->getURL():'';
        $one['adURL'] =  $obj->adURL;
        $one['adTime'] =  $obj->adTime;
        $data[]=$one;
      }
      
      return view('advertise', ['data'=>$data]);
    }

    public function addAdvertise(Request $request)
    {

      $input = $request->input();
      if ($input['id'] == '') {
        $obj = new ParseObject("ads");
      } else {
        $query = new ParseQuery("ads");
        try {
          $obj = $query->get($input['id']);
        } catch (ParseException $ex) {
          return false;
        }
      }

      $obj->set("name", $input['name']);
      $obj->set("adType", $input['adType']*1);
      $obj->set("adURL",  $input['adURL']);

      $obj->set("adTime",  $input['adTime']*1);

      if (!is_null($input['adFileData'])) {
        $data = $input['adFileData'];
        $img = $input['adFileData'];
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $fileData = base64_decode($img);
        $fileName = 'photo.png';
        file_put_contents($fileName, $fileData);
        $img = Image::make($fileName)->save('temp.jpg');
        $filesize = $img->filesize();
        if ($filesize > 1000000) { // over 1M
          $img->resize(540, 540/$img->width()*$img->height());
        }

	$parseFile = $obj->adImage;
	if ($parseFile != null)
		$parseFile->delete();
	$parseFile = ParseFile::createFromData( file_get_contents( 'temp.jpg' ), "myfile.jpg" );
	$parseFile->save();
	$obj->set("adImage",  $parseFile);
      }

      // var_dump(1);
      $obj->save();

      $res['success'] = true;
      return $res;
      // return redirect('/data');
    }

    public function removeAdvertise(Request $request){
      $input = $request->input();
      $query = new ParseQuery("ads");
      try {
        $obj = $query->get($input['id']);
      } catch (ParseException $ex) {
        return false;
      }
      $obj->destroy();
      $res['success'] = true;
      return $res;
    }

    public function getUsers() {
      $query = ParseUser::query();
      $query->limit(1000);
      $objArray = $query->find();
      $data = array();
      foreach ($objArray as $obj) {
        $one['id'] =  $obj->getObjectId();
        $one['displayName'] =  $obj->displayName;
        $one['email'] =  $obj->username;
        $one['Location'] = $obj->Location;
        $one['verifiedAccount'] =  $obj->verifiedAccount;
        $data[]=$one;
      }
      
      return view('user', ['data'=>$data]);
    }
/*
    public function addUser(Request $request)
    {

      $input = $request->input();
      if ($input['id'] == '') {
        $obj = new ParseObject("ads");
      } else {
        $query = new ParseQuery("ads");
        try {
          $obj = $query->get($input['id']);
        } catch (ParseException $ex) {
          return false;
        }
      }

      $obj->set("name", $input['name']);
      $obj->set("adType", $input['adType']*1);
      $obj->set("adURL",  $input['adURL']);

      $obj->set("adTime",  $input['adTime']*1);

      if (!is_null($input['adFileData'])) {
        $data = $input['adFileData'];
        $img = $input['adFileData'];
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $fileData = base64_decode($img);
        $fileName = 'photo.png';
        file_put_contents($fileName, $fileData);
        $img = Image::make($fileName)->save('temp.jpg');
        $filesize = $img->filesize();
        if ($filesize > 1000000) { // over 1M
          $img->resize(540, 540/$img->width()*$img->height());
        }

	$parseFile = $obj->adImage;
	if ($parseFile != null)
		$parseFile->delete();
	$parseFile = ParseFile::createFromData( file_get_contents( 'temp.jpg' ), "myfile.jpg" );
	$parseFile->save();
	$obj->set("adImage",  $parseFile);
      }

      // var_dump(1);
      $obj->save();

      $res['success'] = true;
      return $res;
      // return redirect('/data');
    }

    public function removeUser(Request $request){
      $input = $request->input();
      $query = new ParseQuery("ads");
      try {
        $obj = $query->get($input['id']);
      } catch (ParseException $ex) {
        return false;
      }
      $obj->destroy();
      $res['success'] = true;
      return $res;
    }*/

}
