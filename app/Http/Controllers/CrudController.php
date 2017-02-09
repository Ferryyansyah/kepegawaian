<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

use Illuminate\Http\Request;

class CrudController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
		$kode_jabatan = \Input::get('kode_jabatan');
		$nama_jabatan = \Input::get('nama_jabatan');
		$gaji_jabatan = \Input::get('gaji_jabatan');

		$data = array(
			'kode_jabatan' => $kode_jabatan,
			'nama_jabatan' => $nama_jabatan,
			'gaji_jabatan' => $gaji_jabatan
		);

		DB::table('jabatan')->insert($data);
		
		return \Redirect::to('/jabatan');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$kode_divisi = \Input::get('kode_divisi');
		$nama_divisi = \Input::get('nama_divisi');

		$data = array(
			'kode_divisi' => $kode_divisi,
			'nama_divisi' => $nama_divisi
		);

		DB::table('unitkerja')->insert($data);
		
		return \Redirect::to('/unitkerja');	
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Request $request)
	{
		$kode_cabang = \Input::get('kode');
		$nama = \Input::get('nama_cabang');

		$data = array(
			'id_cabang' => $kode_cabang,
			'nama' => $nama
		);

		DB::table('lokasikerja')->insert($data);
		
		return \Redirect::to('/lokasikerja');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
	}
	public function stores()
	{
		$kode_level = \Input::get('kode_level');
		$gaji = \Input::get('gaji');

		$data = array(
			'kode_level' => $kode_level,
			'gaji' => $gaji
		);

		DB::table('level')->insert($data);
		
		return \Redirect::to('/level');	



	}
	public function updatepp()
	{
		return view('updatepp');
	}
	public function updatep(Request $request,$id)
	{
		$nik = $request->input('nik');
		$nama = $request->input('nama');
		$tanggal_lahir = $request->input('tanggal_lahir');
		$level = $request->input('level');
		$lokasi_kerja = $request->input('lokasi_kerja');
		$unit_kerja = $request->input('unit_kerja');
		$jabatan = $request->input('jabatan');
		$status_aktif = $request->input('status_aktif');
		$status_kawin = $request->input('status_kawin');
		$nomor_sk = $request->input('nomor_sk');
		$tanggal_sk = $request->input('tanggal_sk');
		$alamat = $request->input('alamat');
		$rt_rw = $request->input('rt_rw');
		$kode_pos = $request->input('kode_pos');
		$tlp = $request->input('tlp');
		$data = array (
			'nik' => $nik,
			'nama' => $nama, 
			'tanggal_lahir' => $tanggal_lahir,			
			'level' => $level,
			'lokasi_kerja' => $lokasi_kerja, 
			'unit_kerja' => $unit_kerja,
			'jabatan' => $jabatan,
			'status_aktif' => $status_aktif,
			'status_kawin' => $status_kawin,
			'nomor_sk' => $nomor_sk,
			'tanggal_sk' => $tanggal_sk,
			'alamat' => $alamat,
			'rt_rw' => $rt_rw,
			'kode_pos' => $kode_pos,
			'tlp' => $tlp			
			);
		\DB::table('profilpegawai')->where('id',$id)->update($data);
		return redirect('updatepp');
	

	}
		public function editpp($id)
	{
		$profilpegawai = DB::select('select *from profilpegawai order by id desc');
		return view('updatepp',['profilpegawai'=> $profilpegawai]);
	}


	public function storess(Request $request)
	{
		$nik = \Input::get('nik');
		$nama = \Input::get('nama');
		$tanggal_lahir = \Input::get('tanggal_lahir');
		$level = \Input::get('level');
		$lokasi_kerja = \Input::get('lokasi_kerja');
		$unit_kerja = \Input::get('unit_kerja');
		$jabatan = \Input::get('jabatan');
		$status_aktif = \Input::get('status_aktif');
		$status_kawin = \Input::get('status_kawin');
		$nomor_sk = \Input::get('nomor_sk');
		$tanggal_sk = \Input::get('tanggal_sk');
		$alamat = \Input::get('alamat');
		$rt_rw = \Input::get('rt_rw');
		$kode_pos = \Input::get('kode_pos');
		$tlp = \Input::get('tlp');

		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'tanggal_lahir' => $tanggal_lahir,
			'level' => $level,
			'lokasi_kerja' => $lokasi_kerja,
			'unit_kerja' => $unit_kerja,
			'jabatan' => $jabatan,
			'status_aktif' => $status_aktif,
			'status_kawin' => $status_kawin,
			'nomor_sk' => $nomor_sk,
			'tanggal_sk' => $tanggal_sk,
			'alamat' => $alamat,		
			'rt_rw' => $rt_rw,
			'kode_pos' => $kode_pos,
			'tlp' => $tlp
		);

		DB::table('profilpegawai')->insert($data);
		
		return \Redirect::to('/profilpegawai');	


	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		DB::delete('delete from jabatan where id = ?',[$id]);
		return redirect('jabatan');
	}

	public function lokasikerjadelete($id)
	{
		DB::delete('delete from lokasikerja where id = ?',[$id]);
		return redirect('lokasikerja');
	}

	public function unitkerjadelete($id)
	{
		DB::delete('delete from unitkerja where id = ?',[$id]);
		return redirect('unitkerja');
	}

	public function leveldelete($id)
	{
		DB::delete('delete from level where id = ?',[$id]);
		return redirect('level');
	}

	public function profilpegawaidelete($id)
	{
		DB::delete('delete from profilpegawai where id = ?',[$id]);
		return redirect('profilpegawai');
	}
	public function editprof($id)
	{
		$jabatan = DB::select('select *from jabatan order by id desc');
		$unitkerja = DB::select('select *from unitkerja order by id desc');
		$lokasikerja = DB::select('select *from lokasikerja order by id desc');
		$level = DB::select('select *from level order by id desc');
		$profilpegawai = DB::select('select *from profilpegawai order by id desc');
		$data = DB::table('profilpegawai')->where('id','=',$id)->first();
		
		return view('edprof',['profilpegawai'=>$profilpegawai,'level'=>$level,'lokasikerja'=>$lokasikerja,'unitkerja'=>$unitkerja,'jabatan'=>$jabatan])->with('data',$data,$profilpegawai,$level,$lokasikerja,$unitkerja,$jabatan);
	}
	public function updateprof(Request $request,$id)
	{
		$nik = $request->input('nik');
		$nama = $request->input('nama');
		$tanggal_lahir = $request->input('tanggal_lahir');
		$level = $request->input('level');
		$lokasi_kerja = $request->input('lokasi_kerja');
		$unit_kerja = $request->input('unit_kerja');
		$jabatan = $request->input('jabatan');
		$status_aktif = $request->input('status_aktif');
		$status_kawin = $request->input('status_kawin');
		$nomor_sk = $request->input('nomor_sk');
		$tanggal_sk = $request->input('tanggal_sk');
		$alamat = $request->input('alamat');
		$rt_rw = $request->input('rt_rw');
		$kode_pos = $request->input('kode_pos');
		$tlp = $request->input('tlp');
		$data = array (
			'nik' => $nik,
			'nama' => $nama, 
			'tanggal_lahir' => $tanggal_lahir,			
			'level' => $level,
			'lokasi_kerja' => $lokasi_kerja, 
			'unit_kerja' => $unit_kerja,
			'jabatan' => $jabatan,
			'status_aktif' => $status_aktif,
			'status_kawin' => $status_kawin,
			'nomor_sk' => $nomor_sk,
			'tanggal_sk' => $tanggal_sk,
			'alamat' => $alamat,
			'rt_rw' => $rt_rw,
			'kode_pos' => $kode_pos,
			'tlp' => $tlp			
			);
		\DB::table('profilpegawai')->where('id',$id)->update($data);
		return redirect('/profilpegawai');
	

	}
	public function editjab($id)
	{	
		$jabatan = DB::select('select *from jabatan order by id desc');
		$data = DB::table('jabatan')->where('id','=',$id)->first();
		
		return view('edjabat',['jabatan'=>$jabatan])->with('data',$data,$jabatan);
	}
	public function updatejab(Request $request,$id)
	{
		$kode_jabatan = $request->input('kode_jabatan');
		$nama_jabatan = $request->input('nama_jabatan');
		$gaji_jabatan = $request->input('gaji_jabatan');
		$data = array (
			'kode_jabatan' => $kode_jabatan,
			'nama_jabatan' => $nama_jabatan, 
			'gaji_jabatan' => $gaji_jabatan					
			);
		\DB::table('jabatan')->where('id',$id)->update($data);
		return redirect('/jabatan');
	
	}
	public function editlokasi($id)
	{	
		$lokasi_kerja = DB::select('select *from lokasikerja order by id desc');
		$data = DB::table('lokasikerja')->where('id','=',$id)->first();
		
		return view('edlokasi',['lokasikerja'=>$lokasi_kerja])->with('data',$data,$lokasi_kerja);
	}
	public function updatelok(Request $request,$id)
	{
		$id_cabang = $request->input('id_cabang');
		$nama = $request->input('nama');
		$data = array (
			'id_cabang' => $id_cabang,
			'nama' => $nama, 					
			);
		\DB::table('lokasikerja')->where('id',$id)->update($data);
		return redirect('/lokasikerja');
	
	}
	public function editunit($id)
	{	
		$unit_kerja = DB::select('select *from unitkerja order by id desc');
		$data = DB::table('unitkerja')->where('id','=',$id)->first();
		
		return view('edunit',['unitkerja'=>$unit_kerja])->with('data',$data,$unit_kerja);
	}
	public function updateunit(Request $request,$id)
	{
		$kode_divisi = $request->input('kode_divisi');
		$nama_divisi = $request->input('nama_divisi');
		$data = array (
			'kode_divisi' => $kode_divisi,
			'nama_divisi' => $nama_divisi, 					
			);
		\DB::table('unitkerja')->where('id',$id)->update($data);
		return redirect('/unitkerja');
	
	}
	public function editlevel($id)
	{	
		$level = DB::select('select *from level order by id desc');
		$data = DB::table('level')->where('id','=',$id)->first();
		
		return view('edlevel',['level'=>$level])->with('data',$data,$level);
	}
	public function updatelevel(Request $request,$id)
	{
		$kode_level = $request->input('kode_level');
		$gaji = $request->input('gaji');
		$data = array (
			'kode_level' => $kode_level,
			'gaji' => $gaji, 					
			);
		\DB::table('level')->where('id',$id)->update($data);
		return redirect('/level');
	
	}
	public function detprofil(Request $request,$id)
	{
		$profilpegawai = DB::select('select *from profilpegawai where id = ?', [$id]);
		return view('detprofil',['profilpegawai'=>$profilpegawai]);
	}
	

}
