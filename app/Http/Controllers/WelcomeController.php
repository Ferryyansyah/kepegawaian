<?php namespace App\Http\Controllers;

use DB;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */

	public function updatepp(Request $request,$id)
	{
		
	}




	public function index()
	{
		$profilpegawai = DB::table('profilpegawai')->count();
		$jabatan = DB::table('jabatan')->count();
		$lokasikerja = DB::table('lokasikerja')->count();
		$unitkerja = DB::table('unitkerja')->count();
		$level = DB::table('level')->count();
		return view('welcome')->with('profilpegawai',$profilpegawai)->with('jabatan',$jabatan)->with('lokasikerja',$lokasikerja)->with('unitkerja',$unitkerja)->with('level',$level);
	}
	public function profil(){
		$profilpegawai = DB::table('profilpegawai')
            ->join('level', 'profilpegawai.level', '=', 'level.kode_level')
            ->join('unitkerja', 'profilpegawai.unit_kerja', '=', 'unitkerja.nama_divisi')
            ->select('profilpegawai.*', 'unitkerja.nama_divisi as unit_kerja', 'level.kode_level as level')
            ->get();
         $data = DB::table('profilpegawai')->first();   
		$profilpegawai = DB::select('select *from profilpegawai order by id desc');
		return view('profilpegawai',['profilpegawai'=>$profilpegawai]);
	}
	public function profildetail($id){
		/*$data = array('data'=>User::find($id));
		return view('detail')->with($data);*/
		$profilpegawai = DB::select('select *from profilpegawai where id = ?',[$id]);
		return view('profilpegawai',['profilpegawai'=>$profilpegawai]);
	}
	public function mutasi(){
		return view('mutasi');
	}
	public function level(){
		$level = DB::select('select *from level order by id desc');
		return view('level',['level'=>$level]);
	}
	public function jabatan(){
		$jabatan = DB::select('select *from jabatan order by id desc');
		return view('jabatan',['jabatan'=>$jabatan]);
	}
	public function lokasikerja(){
		$lokasikerja = DB::select('select *from lokasikerja order by id desc');
		return view('lokasikerja',['lokasikerja'=>$lokasikerja]);
	}
	public function unitkerja(){
		$unitkerja = DB::select('select *from unitkerja order by id desc');
		return view('unitkerja',['unitkerja'=>$unitkerja]);
	}
	public function tambahpegawai(){
		$level = DB::select('select *from level order by id desc');
		$lokasikerja = DB::select('select *from lokasikerja order by id desc');
		$unitkerja = DB::select('select *from unitkerja order by id desc');
		$jabatan = DB::select('select *from jabatan order by id desc');
		//return view('tambahpegawai',['level'=>$level],['lokasikerja'=>$lokasikerja],['unitkerja'=>$unitkerja],['jabatan'=>$jabatan]);
		return view('tambahpegawai',['level'=>$level,'lokasikerja'=>$lokasikerja,'unitkerja'=>$unitkerja,'jabatan'=>$jabatan]);
	}
	public function tambahjabatan(){
		return view('tambahjabatan');
	}
	public function tambahlokasikerja(){
		return view('tambahlokasikerja');
	}
	public function tambahunitkerja(){
		return view('tambahunitkerja');
	}
	public function tambahlevel(){
		return view('tambahlevel');
	}

	public function postkerja(){
		return redirect('unitkerja');
	}


}
