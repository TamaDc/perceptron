	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_Controller {

		function __construct(){
			parent::__construct();		
			$this->load->model('Mymodel');
		}

		public function index()
		{
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$this->load->view('index');
			}
		}

		public function prediksi()
		{
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$this->load->view('form_prediksi');	
			}
		}


		public function pegawai(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_pegawai'] = $this->Mymodel->Getpegawai();
			$this->load->view('form_data_pegawai',$data);	
			}
		}

		public function hasil_pelatihan(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_hasil'] = $this->Mymodel->Getphasilpengolahan();
			$this->load->view('hasil',$data);	
			}
		}

		public function hasil_pelatihan_testing(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_hasil'] = $this->Mymodel->Gethasilpengolahantesting();
			$this->load->view('hasil',$data);	
			}
		}

		public function data_testing(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_pegawai'] = $this->Mymodel->Getdatatesting();
			$this->load->view('form_data_testing',$data);	
			}
		}


		public function form_input_admin(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$this->load->view('form_input_admin');	
			}
		}

		public function form_input_user(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$this->load->view('form_input_user');	
			}
		}



		public function admin(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_admin'] = $this->Mymodel->GetAdmin();
			$this->load->view('form_data_admin',$data);	
			}
		}

		public function user(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_user'] = $this->Mymodel->Getdbuser();
			$this->load->view('form_data_user',$data);	
			}
		}
		



		public function unit_kerja(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_unit_kerja'] = $this->Mymodel->Getunitkerja();
			$this->load->view('form_unit_kerja',$data);	
			}
		}

		public function jabatan(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{

			$data['db_pegawai'] = $this->Mymodel->Getpegawai();
			$this->load->view('form_jabatan',$data);
			}
		}

			public function kuisoner_testing(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{

			$data['db_pegawai'] = $this->Mymodel->Getdatatesting();
			$this->load->view('form_kuisoner_testing',$data);
			}
		}


		public function form_input_jabatan(){
			$this->load->view('form_input_jabatan');
		}

		public function form_input_unit_kerja(){
			$this->load->view('form_input_unit_kerja');
		}



		public function widgets(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$this->load->view('widgets');
			}	
		}

		public function form_input_data_testing(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$this->load->view('form_input_data_testing');
			}
		}


		public function insert_data_testing(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
				$nama = $_POST['nama'];
				$data1 = $_POST['data1'];
				$data2 = $_POST['data2'];
				$data3 = $_POST['data3'];
				$data4 = $_POST['data4'];
				$data5 = $_POST['data5'];
				$data6 = $_POST['data6'];
				$data7 = $_POST['data7'];
				$data8 = $_POST['data8'];
				$data9 = $_POST['data9'];
				$data10 = $_POST['data10'];
				$target = $_POST['target'];
			
				$data_insert = array(
					
					'nama' => $nama,
					'data1' => $data1,
					'data2' => $data2,
					'data3' => $data3,
					'data4' => $data4,
					'data5' => $data5,
					'data6' => $data6,
					'data7' => $data7,
					'data8' => $data8,
					'data9' => $data9,
					'data10' => $data10,
					'target' => $target,
				);
			
				$sukses = $this->Mymodel->InsertPegawai('db_data_testing',$data_insert);
				if($sukses != NULL){
					redirect('admin/data_testing');
				}
				else{
					echo "Im sorry !!!";
				}
			}
		}



		public function form_input_pegawai(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$this->load->view('form_input_pegawai');
			}
		}

		public function insert_pegawai(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
				$nama = $_POST['nama'];
				$data1 = $_POST['data1'];
				$data2 = $_POST['data2'];
				$data3 = $_POST['data3'];
				$data4 = $_POST['data4'];
				$data5 = $_POST['data5'];
				$data6 = $_POST['data6'];
				$data7 = $_POST['data7'];
				$data8 = $_POST['data8'];
				$data9 = $_POST['data9'];
				$data10 = $_POST['data10'];
				$target = $_POST['target'];
			
				$data_insert = array(
					
					'nama' => $nama,
					'data1' => $data1,
					'data2' => $data2,
					'data3' => $data3,
					'data4' => $data4,
					'data5' => $data5,
					'data6' => $data6,
					'data7' => $data7,
					'data8' => $data8,
					'data9' => $data9,
					'data10' => $data10,
					'target' => $target,
				);
			
				$sukses = $this->Mymodel->InsertPegawai('db_pegawai',$data_insert);
				if($sukses != NULL){
					redirect('admin/pegawai');
				}
				else{
					echo "Im sorry !!!";
				}
			}
		}



		public function insert_pangkat(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$NIP = $_POST['NIP'];
			$tmt_cpns = $_POST['tmt_cpns'];
			$golongan = $_POST['golongan'];
			$tmt_pangkat = $_POST['tmt_pangkat'];
			$jabatan = $_POST['jabatan'];
			$tmt_kgb = $_POST['tmt_kgb'];
			$grade = $_POST['grade'];
			$gaji = $_POST['gaji'];
			
			$data_insert = array(
				'NIP' => $NIP,
				'tmt_cpns' => $tmt_cpns,
				'golongan' => $golongan,
				'tmt_pangkat' => $tmt_pangkat,
				'jabatan' => $jabatan,
				'tmt_kgb' => $tmt_kgb,
				'grade' => $grade,
				'gaji' => $gaji,
				
			);
			$res = $this->Mymodel->InsertPangkat('db_gaji',$data_insert);
			if($res >=1){
				redirect('admin/pegawai');
			}
			else{
				echo "Im sorry !!!";
			}
			}
		}

		public function insert_unit_kerja(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$id_unit_kerja = $_POST['id_unit_kerja'];
			$nama_unit_kerja = $_POST['nama_unit_kerja'];
			$eselon = $_POST['eselon'];
			
			$data_insert = array(
				'id_unit_kerja' => $id_unit_kerja,
				'nama_unit_kerja' => $nama_unit_kerja,
				'eselon' => $eselon,
				
			);
			$res = $this->Mymodel->InsertUnitKerja('db_unit_kerja',$data_insert);
			if($res >=1){
				redirect('admin/unit_kerja');
			}
			else{
				echo "Im sorry !!!";
			}
			}
		}

		public function insert_jabatan(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			
			$jabatan = $_POST['jabatan'];
			$level = $_POST['level'];
			
			$data_insert = array(
				
				'jabatan' => $jabatan,
				'level' => $level,
				
			);
			$res = $this->Mymodel->InsertUnitKerja('db_jabatan',$data_insert);
			if($res >=1){
				redirect('admin/jabatan');
			}
			else{
				echo "Im sorry !!!";
			}
			}
		}

		public function insert_admin(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$data_insert = array(
				
				'username' => $username,
				'password' => md5($password),
				
			);
			$res = $this->Mymodel->InsertUnitKerja('db_admin',$data_insert);
			if($res >=1){
				redirect('admin/admin');
			}
			else{
				echo "Im sorry !!!";
			}
			}
		}

		public function insert_user(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$data_insert = array(
				
				'username' => $username,
				'password' => md5($password),
				
			);
			$res = $this->Mymodel->InsertUnitKerja('db_user',$data_insert);
			if($res >=1){
				redirect('admin/user');
			}
			else{
				echo "Im sorry !!!";
			}
			}
		}


		public function delete($NIP){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$where = array('NIP' => $NIP);
			$res = $this->Mymodel->DeleteData('db_pegawai',$where);
			$res1 = $this->Mymodel->DeleteData('db_gaji',$where);
			if(($res>=1) && ($res1>=1)){
				redirect('admin/pegawai');
			}
			else{
				echo "Data Gagal diHapus!!!";
			}
			}

		}

		public function delete_admin($id){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$where = array('id' => $id);
			$res = $this->Mymodel->DeleteData('db_admin',$where);
			if($res>=1){
				redirect('admin/admin');
			}
			else{
				echo "Data Gagal diHapus!!!";
			}
			}

		}

		public function delete_user($id){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$where = array('id' => $id);
			$res = $this->Mymodel->DeleteData('db_user',$where);
			if($res>=1){
				redirect('admin/user');
			}
			else{
				echo "Data Gagal diHapus!!!";
			}
			}

		}

		public function deleteunitkerja($id_unit_kerja){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$where = array('id_unit_kerja' => $id_unit_kerja);
			$res = $this->Mymodel->DeleteData('db_unit_kerja',$where);
			if(($res>=1)){
				redirect('admin/unit_kerja');
			}
			else{
				echo "Data Gagal diHapus!!!";
			}
			}

		}

		public function deletejabatan($id_jabatan){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$where = array('id_jabatan' => $id_jabatan);
			$res = $this->Mymodel->DeleteData('db_jabatan',$where);
			if(($res>=1)){
				redirect('admin/jabatan');
			}
			else{
				echo "Data Gagal diHapus!!!";
			}
			}

		}

		public function edit($NIP = NULL){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_pegawai'] = $this->Mymodel->Getpegawai("where NIP = '$NIP' ");
			$data['db_gaji'] = $this->Mymodel->Getgaji("where NIP = '$NIP' ");
			$this->load->view('form_edit_pegawai',$data);
			}
		}

		public function edit_kuisoner($ID = NULL){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{	
			$data['db_pegawai'] = $this->Mymodel->Getpegawai("where ID = '$ID' ");
			//$data['db_gaji'] = $this->Mymodel->Getgaji("where NIP = '$NIP' ");
			$this->load->view('form_kuisoner',$data);
			}
		}

		public function edit_kuisoner_testing($ID = NULL){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{	
			$data['db_pegawai'] = $this->Mymodel->Getdatatesting("where ID = '$ID' ");
			//$data['db_gaji'] = $this->Mymodel->Getgaji("where NIP = '$NIP' ");
			$this->load->view('form_input_kuisoner_testing',$data);
			}
		}


		public function edit_admin($id = NULL){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_admin'] = $this->Mymodel->GetAdmin("where id = '$id' ");
			$this->load->view('form_edit_admin',$data);
			}
		}

		public function edit_user($id = NULL){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_user'] = $this->Mymodel->Getdbuser("where id = '$id' ");
			$this->load->view('form_edit_user',$data);
			}
		}

		public function editunitkerja($id_unit_kerja){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_unit_kerja'] = $this->Mymodel->Getunitkerja("where id_unit_kerja = '$id_unit_kerja' ");
			$this->load->view('form_edit_unit_kerja',$data);
			}
		}

		public function editjabatan($id_jabatan){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_jabatan'] = $this->Mymodel->Getjabatan("where id_jabatan = '$id_jabatan' ");
			$this->load->view('form_edit_jabatan',$data);
			}
		}


		public function update_pegawai(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$ID = $_POST['ID'];
			$data1 = $_POST['1'];
			$data2 = $_POST['2'];
			$data3 = $_POST['3'];
			$data4 = $_POST['4'];
			$data5 = $_POST['5'];
			$data6 = $_POST['6'];
			$data7 = $_POST['7'];
			$data8 = $_POST['8'];
			$data9 = $_POST['9'];
			$data10 = $_POST['10'];

			$total = $data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10;
			if($total>=6){
				$data_update = array(
				'ID' => $ID,
				'data11' => 1,
				);
			}
			//print_r($total);
			/*$data_update = array(
				'ID' => $ID,
				'nama' => $nama,
				'status' => $status,
				'golongan' => $golongan,
				'pendidikan' => $pendidikan,
				'jabatan' => $jabatan,
				
			);*/
			$where = array('ID' => $ID);
			$res = $this->Mymodel->UpdatePegawai('db_pegawai',$data_update,$where);
			if($res >=1){
				redirect('admin/pegawai');
			}
			else{
				echo "gagal";
			}
			}
		}

				public function update_data_testing(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$ID = $_POST['ID'];
			$data1 = $_POST['1'];
			$data2 = $_POST['2'];
			$data3 = $_POST['3'];
			$data4 = $_POST['4'];
			$data5 = $_POST['5'];
			$data6 = $_POST['6'];
			$data7 = $_POST['7'];
			$data8 = $_POST['8'];
			$data9 = $_POST['9'];
			$data10 = $_POST['10'];

			$total = $data1+$data2+$data3+$data4+$data5+$data6+$data7+$data8+$data9+$data10;
			if($total>=6){
				$data_update = array(
				'ID' => $ID,
				'data11' => 1,
				);
			}else{
				$data_update = array(
				'ID' => $ID,
				'data11' => 0,
				);
			}


			//print_r($total);
			/*$data_update = array(
				'ID' => $ID,
				'nama' => $nama,
				'status' => $status,
				'golongan' => $golongan,
				'pendidikan' => $pendidikan,
				'jabatan' => $jabatan,
				
			);*/
			$where = array('ID' => $ID);
			$res = $this->Mymodel->UpdatePegawai('db_data_testing',$data_update,$where);
			//print_r($data_update);
			if($res >=1){
				redirect('admin/data_testing');
			}
			else{
				echo "gagal";
			}
			}
		}


		/*public function update_gaji(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$NIP = $_POST['NIP'];
			$tmt_cpns = $_POST['tmt_cpns'];
			$golongan = $_POST['golongan'];
			$tmt_pangkat = $_POST['tmt_pangkat'];
			$jabatan = $_POST['jabatan'];
			$tmt_kgb = $_POST['tmt_kgb'];
			$grade = $_POST['grade'];
			$gaji = $_POST['gaji'];
			
			$data_update = array(
				'NIP' => $NIP,
				'tmt_cpns' => $tmt_cpns,
				'golongan' => $golongan,
				'tmt_pangkat' => $tmt_pangkat,
				'jabatan' => $jabatan,
				'tmt_kgb' => $tmt_kgb,
				'grade' => $grade,
				'gaji' => $gaji,
				
			);
			$where = array('NIP' => $NIP);
			$res = $this->Mymodel->UpdatePegawai('db_gaji',$data_update,$where);
			if($res >=1){
				redirect('admin/pegawai');
			}
			else{
				echo "gagal";
			}
			}
		}*/

/*		public function update_unit_kerja(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$id_unit_kerja = $_POST['id_unit_kerja'];
			$nama_unit_kerja = $_POST['nama_unit_kerja'];
			$eselon = $_POST['eselon'];
			
			$data_update = array(
				'id_unit_kerja' => $id_unit_kerja,
				'nama_unit_kerja' => $nama_unit_kerja,
				'eselon' => $eselon,
				
			);
			$where = array('id_unit_kerja' => $id_unit_kerja);
			$res = $this->Mymodel->UpdateUnitKerja('db_unit_kerja',$data_update,$where);
			if($res >=1){
				redirect('admin/unit_kerja');
			}
			else{
				echo "gagal";
			}
			}
		}*/

		public function update_jabatan(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$id_jabatan = $_POST['id_jabatan'];
			$jabatan = $_POST['jabatan'];
			$level = $_POST['level'];
			
			$data_update = array(
				'id_jabatan' => $id_jabatan,
				'jabatan' => $jabatan,
				'level' => $level,
				
			);
			$where = array('id_jabatan' => $id_jabatan);
			$res = $this->Mymodel->UpdateUnitKerja('db_jabatan',$data_update,$where);
			if($res >=1){
				redirect('admin/jabatan');
			}
			else{
				echo "gagal";
			}
			}
		}

		/*public function update_admin(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$id = $_POST['id'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$data_update = array(
				'id' => $id,
				'username' => $username,
				'password' => md5($password),
				
			);
			$where = array('id' => $id);
			$res = $this->Mymodel->UpdateUnitKerja('db_admin',$data_update,$where);
			if($res >=1){
				redirect('admin/admin');
			}
			else{
				echo "gagal";
			}
			}
		}

		public function update_user(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$id = $_POST['id'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$data_update = array(
				'id' => $id,
				'username' => $username,
				'password' => md5($password),
				
			);
			$where = array('id' => $id);
			$res = $this->Mymodel->UpdateUnitKerja('db_user',$data_update,$where);
			if($res >=1){
				redirect('admin/user');
			}
			else{
				echo "gagal";
			}
			}
		}


		public function show_profile($NIP = NULL){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			//$where = $this->session->userdata('NIP');
			$data['db_pegawai'] = $this->Mymodel->Getpegawai("where NIP = '$NIP' ");
			$data['db_gaji'] = $this->Mymodel->Getgaji("where NIP = '$NIP' ");
			$this->load->view('form_profile',$data);
			}
		}

		public function LaporanPegawai(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_pegawai'] = $this->Mymodel->Getpegawai();
			$this->load->view('form_laporan_pegawai',$data);	
			}
		}

		public function LaporanJabatan(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_jabatan'] = $this->Mymodel->Getjabatan();
			$this->load->view('form_laporan_jabatan',$data);	
			}
		}

		public function LaporanUnitKerja(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_unit_kerja'] = $this->Mymodel->Getunitkerja();
			$this->load->view('form_laporan_unit_kerja',$data);	
			}
		}

		public function print_table(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}
			else{
			$data['db_pegawai'] = $this->Mymodel->Getpegawai();
			$this->load->view('form_print_pegawai',$data);

			$html = $this->output->get_output();
			
			// Load/panggil library dompdfnya
			$this->load->library('dompdf_gen');
			
			// Convert to PDF
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			//utk menampilkan preview pdf
			$this->dompdf->stream("welcome.pdf",array('Attachment'=>0));
			//atau jika tidak ingin menampilkan (tanpa) preview di halaman browser
			//$this->dompdf->stream("welcome.pdf");

			}
		}

		public function print_jabatan(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}
			else{
			$data['db_jabatan'] = $this->Mymodel->Getjabatan();
			$this->load->view('form_print_jabatan',$data);

			$html = $this->output->get_output();
			
			// Load/panggil library dompdfnya
			$this->load->library('dompdf_gen');
			
			// Convert to PDF
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			//utk menampilkan preview pdf
			$this->dompdf->stream("welcome.pdf",array('Attachment'=>0));
			//atau jika tidak ingin menampilkan (tanpa) preview di halaman browser
			//$this->dompdf->stream("welcome.pdf");

			}
		}

		public function print_unit_kerja(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}
			else{
			$data['db_unit_kerja'] = $this->Mymodel->Getunitkerja();
			$this->load->view('form_print_unit_kerja',$data);

			$html = $this->output->get_output();
			
			// Load/panggil library dompdfnya
			$this->load->library('dompdf_gen');
			
			// Convert to PDF
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			//utk menampilkan preview pdf
			$this->dompdf->stream("welcome.pdf",array('Attachment'=>0));
			//atau jika tidak ingin menampilkan (tanpa) preview di halaman browser
			//$this->dompdf->stream("welcome.pdf");

			}
		}

		public function print_profile($NIP = NULL){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}
			else{
			$data['db_pegawai'] = $this->Mymodel->Getpegawai("where NIP = '$NIP' ");
			$data['db_gaji'] = $this->Mymodel->Getgaji("where NIP = '$NIP' ");
			$this->load->view('form_print_profile',$data);

			$html = $this->output->get_output();
			
			// Load/panggil library dompdfnya
			$this->load->library('dompdf_gen');
			
			// Convert to PDF
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			//utk menampilkan preview pdf
			$this->dompdf->stream("welcome.pdf",array('Attachment'=>0));
			//atau jika tidak ingin menampilkan (tanpa) preview di halaman browser
			//$this->dompdf->stream("welcome.pdf");

			}
		}

		public function update_KGB($NIP = NULL){
			$NIP = $_POST['NIP'];
			$golongan = $_POST['golongan'];
			$periode = $_POST['periode'];
			$tmt_kgb = $_POST['tmt_kgb'];
			$masa_kerja_tahun = $_POST['masa_kerja_tahun'];
			$masa_kerja_bulan = $_POST['masa_kerja_bulan'];

		if($golongan == 'I'){
			if($periode == 'A'){
				if($masa_kerja_tahun == 0){
					$gaji = 1486500;
				}
				elseif ($masa_kerja_tahun == 2) {
					$gaji = 1533400;	
				}
				elseif ($masa_kerja_tahun == 4) {
					$gaji = 1581700;
				}
				elseif ($masa_kerja_tahun == 6) {
					$gaji = 1631500;
				}
				elseif ($masa_kerja_tahun == 8) {
					$gaji = 1682900;
				}
			}
			elseif($periode == 'B'){
				if($masa_kerja_tahun == 3){
					$gaji = 1623400;
				}
				elseif ($masa_kerja_tahun == 5) {
					$gaji = 1674500;
				}
				elseif ($masa_kerja_tahun == 7) {
					$gaji = 1727300;
				}
				elseif ($masa_kerja_tahun == 9) {
					$gaji = 1781700;
				}
			}
			elseif($periode == 'C'){
				if($masa_kerja_tahun == 3){
					$gaji = 1692100;
				}
				elseif ($masa_kerja_tahun == 5) {
					$gaji = 1745400;
				}
				elseif ($masa_kerja_tahun == 7) {
					$gaji = 1800300;
				}
				elseif ($masa_kerja_tahun == 9) {
					$gaji = 1857000;
				}
			}
			elseif($periode == 'D'){
				if($masa_kerja_tahun == 3){
					$gaji = 1763600;
				}
				elseif ($masa_kerja_tahun == 5) {
					$gaji = 1819200;
				}
				elseif ($masa_kerja_tahun == 7) {
					$gaji = 1876500;
				}
				elseif ($masa_kerja_tahun == 9) {
					$gaji = 1935600;
				}
			}
		}
		elseif($golongan == 'II'){
			if($periode == 'A'){
				if($masa_kerja_tahun == 0){
					$gaji = 1926000;
				}
				elseif ($masa_kerja_tahun == 1) {
					$gaji = 1956300;	
				}
				elseif ($masa_kerja_tahun == 3) {
					$gaji = 2017900;
				}
				elseif ($masa_kerja_tahun == 7) {
					$gaji = 2081500;
				}
			}
			elseif($periode == 'B'){
				if($masa_kerja_tahun == 3){
					$gaji = 2103300;
				}
				elseif ($masa_kerja_tahun == 5) {
					$gaji = 2169500;
				}
				elseif ($masa_kerja_tahun == 7) {
					$gaji = 2237900;
				}
				elseif ($masa_kerja_tahun == 9) {
					$gaji = 2308300;
				}
			}
			elseif($periode == 'C'){
				if($masa_kerja_tahun == 3){
					$gaji = 2192300;
				}
				elseif ($masa_kerja_tahun == 5) {
					$gaji = 2261300;
				}
				elseif ($masa_kerja_tahun == 7) {
					$gaji = 2332500;
				}
				elseif ($masa_kerja_tahun == 9) {
					$gaji = 2406000;
				}
			}
			elseif($periode == 'D'){
				if($masa_kerja_tahun == 3){
					$gaji = 2285000;
				}
				elseif ($masa_kerja_tahun == 5) {
					$gaji = 2357000;
				}
				elseif ($masa_kerja_tahun == 7) {
					$gaji = 2431200;
				}
				elseif ($masa_kerja_tahun == 9) {
					$gaji = 2507800;
				}
			}
		}
		elseif($golongan == 'III'){
			if($periode == 'A'){
				if($masa_kerja_tahun == 0){
					$gaji = 1486500;
				}
				elseif ($masa_kerja_tahun == 2) {
					$gaji = 1533400;	
				}
				elseif ($masa_kerja_tahun == 4) {
					$gaji = 1581700;
				}
				elseif ($masa_kerja_tahun == 6) {
					$gaji = 1631500;
				}
				elseif ($masa_kerja_tahun == 8) {
					$gaji = 1682900;
				}
			}
		}

		elseif($golongan == 'III'){
			if($periode == 'A'){
				if($masa_kerja_tahun == 0){
					$gaji = 2456700;
				}
				elseif ($masa_kerja_tahun == 2) {
					$gaji = 2534000;	
				}
				elseif ($masa_kerja_tahun == 4) {
					$gaji = 2613800;
				}
				elseif ($masa_kerja_tahun == 6) {
					$gaji = 2696200;
				}
			}
			elseif($periode == 'B'){
				if($masa_kerja_tahun == 0){
					$gaji = 2560600;
				}
				elseif ($masa_kerja_tahun == 2) {
					$gaji = 2641200;
				}
				elseif ($masa_kerja_tahun == 4) {
					$gaji = 2724400;
				}
				elseif ($masa_kerja_tahun == 6) {
					$gaji = 2810200;
				}
			}
			elseif($periode == 'C'){
				if($masa_kerja_tahun == 0){
					$gaji = 2668900;
				}
				elseif ($masa_kerja_tahun == 2) {
					$gaji = 2752900;
				}
				elseif ($masa_kerja_tahun == 4) {
					$gaji = 2839700;
				}
				elseif ($masa_kerja_tahun == 6) {
					$gaji = 2929100;
				}
			}
			elseif($periode == 'D'){
				if($masa_kerja_tahun == 0){
					$gaji = 2781800;
				}
				elseif ($masa_kerja_tahun == 2) {
					$gaji = 2869400;
				}
				elseif ($masa_kerja_tahun == 4) {
					$gaji = 2959800;
				}
				elseif ($masa_kerja_tahun == 6) {
					$gaji = 3053000;
				}
			}
		}
		elseif($golongan == 'IV'){
			if($periode == 'A'){
				if($masa_kerja_tahun == 0){
					$gaji = 2899500;
				}
				elseif ($masa_kerja_tahun == 2) {
					$gaji = 2990800;	
				}
				elseif ($masa_kerja_tahun == 4) {
					$gaji = 3085000;
				}
				elseif ($masa_kerja_tahun == 6) {
					$gaji = 3182100;
				}
			}
			elseif($periode == 'B'){
				if($masa_kerja_tahun == 0){
					$gaji = 3022100;
				}
				elseif ($masa_kerja_tahun == 2) {
					$gaji = 3117300;
				}
				elseif ($masa_kerja_tahun == 4) {
					$gaji = 3215500;
				}
				elseif ($masa_kerja_tahun == 6) {
					$gaji = 3316700;
				}
			}
			elseif($periode == 'C'){
				if($masa_kerja_tahun == 0){
					$gaji = 3149900;
				}
				elseif ($masa_kerja_tahun == 2) {
					$gaji = 3249100;
				}
				elseif ($masa_kerja_tahun == 4) {
					$gaji = 3351500;
				}
				elseif ($masa_kerja_tahun == 6) {
					$gaji = 3457000;
				}
			}
			elseif($periode == 'D'){
				if($masa_kerja_tahun == 0){
					$gaji = 3283200;
				}
				elseif ($masa_kerja_tahun == 2) {
					$gaji = 3386600;
				}
				elseif ($masa_kerja_tahun == 4) {
					$gaji = 3493200;
				}
				elseif ($masa_kerja_tahun == 6) {
					$gaji = 3603300;
				}
			}
		}
		
		$insert_pegawai = array(
				'NIP' => $NIP,
				'golongan' => $golongan,
				'periode' => $periode,	
				'masa_kerja_tahun' => $masa_kerja_tahun,
				'masa_kerja_bulan' => $masa_kerja_bulan,
			);	
		$insert_gaji = array(
				'NIP' => $NIP,
				'golongan' => $golongan,
				'periode' => $periode,
				'tmt_kgb' => $tmt_kgb,
				'gaji' => $gaji,
				'masa_kerja_tahun' => $masa_kerja_tahun,
				'masa_kerja_bulan' => $masa_kerja_bulan,
			);	
			
			$where = array('NIP' => $NIP);
			$res = $this->Mymodel->UpdatePegawai('db_gaji',$insert_gaji,$where);
			$res2 = $this->Mymodel->UpdatePegawai('db_pegawai',$insert_pegawai,$where);
			if($res >=1 && $res2 >=1){
				redirect('admin/data_KGB');
			}
			else{
				echo "Im sorry !!!";
			}
			
		
			
		}

		public function KGB($NIP = NULL){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_pegawai'] = $this->Mymodel->Getpegawai("where NIP = '$NIP' ");
			$data['db_gaji'] = $this->Mymodel->Getgaji("where NIP = '$NIP' ");
			$this->load->view('form_input_kenaikan',$data);
			}
		}*/

	

		public function proses_prepocessing(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_pegawai'] = $this->Mymodel->Getpegawai();
			$i=1;
			$jumlah=0;
				foreach ($data['db_pegawai'] as $datas ) {
						$nama[$i] = $datas['nama'];
						$d1[$i] = $datas['data1'];
						$d2[$i] = $datas['data2'];
						$d3[$i] = $datas['data3'];
						$d4[$i] = $datas['data4'];
						$d5[$i] = $datas['data5'];
						$d6[$i] = $datas['data6'];
						$d7[$i] = $datas['data7'];
						$d8[$i] = $datas['data8'];
						$d9[$i] = $datas['data9'];
						$d10[$i] = $datas['data10'];
						$d11[$i] = $datas['data11'];
						$t[$i] = $datas['target'];

					$jumlah++;
					$i++;
					
					//print_r($datas['nama']);	
				}

				///proses prepocessing
				for ($j=1; $j < $i; $j++) { 
					# code...
					$d1[$j] = (($d1[$j] - 0)/(100- 0)) *((1 - 0) + 0) ; 
					$d2[$j] = (($d2[$j] - 0)/(100- 0)) *((1 - 0) + 0) ; 
					$d3[$j] = (($d3[$j] - 0)/(100- 0)) *((1 - 0) + 0) ; 
					$d4[$j] = (($d4[$j] - 0)/(100- 0)) *((1 - 0) + 0) ; 
					$d5[$j] = (($d5[$j] - 0)/(100- 0)) *((1 - 0) + 0) ; 
					$d6[$j] = (($d6[$j] - 0)/(100- 0)) *((1 - 0) + 0) ;
					$d7[$j] = (($d7[$j] - 0)/(100- 0)) *((1 - 0) + 0) ; 
					$d8[$j] = (($d8[$j] - 0)/(100- 0)) *((1 - 0) + 0) ; 
					$d9[$j] = (($d9[$j] - 0)/(100- 0)) *((1 - 0) + 0) ; 
					$d10[$j] = (($d10[$j] - 0)/(100- 0)) *((1 - 0) + 0) ; 
				
				//echo "$d1[$j] - $d2[$j] - $d3[$j] - $d4[$j] - $d5[$j] - $d6[$j] - $d7[$j] - $d8[$j] - $d9[$j] - $d10[$j] <br>";
				}

				/*$k = 0;
				foreach ($data['db_pegawai'] as $datas ) {
					
						$data['data1'] = $d1[$k];
						$data['data2'] = $d2[$k];
						$data['data3'] = $d3[$k];
						$data['data4'] = $d4[$k];
						$data['data5'] = $d5[$k];
						$data['data6'] = $d6[$k];
						$data['data7'] = $d7[$k];
						$data['data8'] = $d8[$k];
						$data['data9'] = $d9[$k];
						$data['data10'] = $d10[$k];
						$data['data11'] = $d11[$k];
						$data['target'] = $t[$k] ;
		 
		 			$k++;	

					//print_r($data['data1']);
					//echo "<br>";	
				}*/

				
				
					# code...
				for ($i=1; $i <= $jumlah; $i++) {
					$data_update[$i] = array(
						'ID' => $i,
						'nama' => $nama[$i],
						'data1' => $d1[$i],
						'data2' => $d2[$i],
						'data3' => $d3[$i],
						'data4' => $d4[$i],
						'data5' => $d5[$i],
						'data6' => $d6[$i],
						'data7' => $d7[$i],
						'data8' => $d8[$i],
						'data9' => $d9[$i],
						'data10' => $d10[$i],
						'data11' => $d11[$i],
						'target' => $t[$i]
						);
					$where = array('ID' => $i);
					$res = $this->Mymodel->UpdateUnitKerja('db_prepocessing',$data_update[$i],$where);

					//$sukses = $this->Mymodel->InsertPegawai('db_prepocessing',$data_update[$i]);

					//print_r($data_insert[$i]);
					//echo "<br>";
				}
				$data['db_prepocessing'] = $this->Mymodel->Getprepocessing();

				
				$this->load->view('form_data_preprocessing',$data);
				/*
			
				
				if($sukses != NULL){
					redirect('admin/pegawai');
				}
			$this->load->view('form_data_preprocessing',$data);	*/
		
			}


		}

		public function proses_prepocessing_testing(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_pegawai'] = $this->Mymodel->Getdatatesting();
			$i=1;
			$jumlah = 0;
				foreach ($data['db_pegawai'] as $datas ) {
						$nama[$i] = $datas['nama'];
						$d1[$i] = $datas['data1'];
						$d2[$i] = $datas['data2'];
						$d3[$i] = $datas['data3'];
						$d4[$i] = $datas['data4'];
						$d5[$i] = $datas['data5'];
						$d6[$i] = $datas['data6'];
						$d7[$i] = $datas['data7'];
						$d8[$i] = $datas['data8'];
						$d9[$i] = $datas['data9'];
						$d10[$i] = $datas['data10'];
						$d11[$i] = $datas['data11'];
						$t[$i] = $datas['target'];

					$jumlah++;
					$i++;
					
					//print_r($datas['nama']);	
				}

				///proses prepocessing
				for ($j=1; $j < $i; $j++) { 
					# code...
					$d1[$j] = (($d1[$j] - 0)/(100- 0)) *((1 - 0) + 0) ; 
					$d2[$j] = (($d2[$j] - 0)/(100- 0)) *((1 - 0) + 0) ; 
					$d3[$j] = (($d3[$j] - 0)/(100- 0)) *((1 - 0) + 0) ; 
					$d4[$j] = (($d4[$j] - 0)/(100- 0)) *((1 - 0) + 0) ; 
					$d5[$j] = (($d5[$j] - 0)/(100- 0)) *((1 - 0) + 0) ; 
					$d6[$j] = (($d6[$j] - 0)/(100- 0)) *((1 - 0) + 0) ;
					$d7[$j] = (($d7[$j] - 0)/(100- 0)) *((1 - 0) + 0) ; 
					$d8[$j] = (($d8[$j] - 0)/(100- 0)) *((1 - 0) + 0) ; 
					$d9[$j] = (($d9[$j] - 0)/(100- 0)) *((1 - 0) + 0) ; 
					$d10[$j] = (($d10[$j] - 0)/(100- 0)) *((1 - 0) + 0) ; 
				
				//echo "$d1[$j] - $d2[$j] - $d3[$j] - $d4[$j] - $d5[$j] - $d6[$j] - $d7[$j] - $d8[$j] - $d9[$j] - $d10[$j] <br>";
				}

				/*$k = 0;
				foreach ($data['db_pegawai'] as $datas ) {
					
						$data['data1'] = $d1[$k];
						$data['data2'] = $d2[$k];
						$data['data3'] = $d3[$k];
						$data['data4'] = $d4[$k];
						$data['data5'] = $d5[$k];
						$data['data6'] = $d6[$k];
						$data['data7'] = $d7[$k];
						$data['data8'] = $d8[$k];
						$data['data9'] = $d9[$k];
						$data['data10'] = $d10[$k];
						$data['data11'] = $d11[$k];
						$data['target'] = $t[$k] ;
		 
		 			$k++;	

					//print_r($data['data1']);
					//echo "<br>";	
				}*/

				
				
					# code...
				for ($i=1; $i < $jumlah+1; $i++) {
					$data_update[$i] = array(
						'ID' => $i,
						'nama' => $nama[$i],
						'data1' => $d1[$i],
						'data2' => $d2[$i],
						'data3' => $d3[$i],
						'data4' => $d4[$i],
						'data5' => $d5[$i],
						'data6' => $d6[$i],
						'data7' => $d7[$i],
						'data8' => $d8[$i],
						'data9' => $d9[$i],
						'data10' => $d10[$i],
						'data11' => $d11[$i],
						'target' => $t[$i]
						);
					$where = array('ID' => $i);
					$res = $this->Mymodel->UpdateUnitKerja('db_prepocessing_testing',$data_update[$i],$where);

					//$sukses = $this->Mymodel->InsertPegawai('db_prepocessing_testing',$data_update[$i]);

					//print_r($data_update[$i]);
					//echo "<br>";
				}
				$data['db_prepocessing'] = $this->Mymodel->Getprepocessingtesting();
				$data['db_hasil_data'] = $this->Mymodel->Getphasilpengolahan();
				$this->load->view('form_data_preprocessing_testing',$data);
				/*
			
				
				if($sukses != NULL){
					redirect('admin/pegawai');
				}
			$this->load->view('form_data_preprocessing',$data);	*/
		
			}


		}

		public function data_prepocessing(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_prepocessing'] = $this->Mymodel->Getprepocessing();
			$this->load->view('form_data_preprocessing',$data);	
			}

		}

		public function data_prepocessing_testing(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_prepocessing'] = $this->Mymodel->Getprepocessingtesting();
			$data['db_hasil_data'] = $this->Mymodel->Getphasilpengolahan();
			$this->load->view('form_data_preprocessing_testing',$data);	
			}

		}


		public function data_KGB(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_pegawai'] = $this->Mymodel->Getprepocessing();
			$this->load->view('form_data_KGB',$data);	
			}

		}

		public function perceptron(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_hasil'] = $this->Mymodel->Gethasil();
			$data['db_hasil_data'] = $this->Mymodel->Getphasilpengolahan();
			$this->load->view('form_data_hasil',$data);
			}
			
		}

		public function perceptron_testing(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_hasil'] = $this->Mymodel->Gethasiltesting();
			$data['db_hasil_data'] = $this->Mymodel->Gethasilpengolahantesting();
			$this->load->view('form_data_hasil_testing',$data);
			}
			
		}

		public function data_hasil(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_pegawai'] = $this->Mymodel->Getprepocessing();
			$this->load->view('form_data_hasil',$data);	
			}

		}

		public function metode_cetak()
		{
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
				$data = $this->Mymodel->Getprepocessing();
				$b = 0;
				$learning = $_POST['learning'];
				$jumlah_epoh = $_POST['epoh'];
				$ynet = $_POST['ynet'];
				$w1 = 0;
				$w2 = 0;
				$w3 = 0;
				$w4 = 0;
				$w5 = 0;
				$w6 = 0;
				$w7 = 0;
				$w8 = 0;
				$w9 = 0;
				$w10 = 0;
				$w11 = 0;
				

				$i=0;
				$jumlah_data=0;
				foreach ($data as $datas ) {
						$ID[$i] = $datas['ID'];
						$nama[$i] = $datas['nama'];
						$d1[$i] = $datas['data1'];
						$d2[$i] = $datas['data2'];
						$d3[$i] = $datas['data3'];
						$d4[$i] = $datas['data4'];
						$d5[$i] = $datas['data5'];
						$d6[$i] = $datas['data6'];
						$d7[$i] = $datas['data7'];
						$d8[$i] = $datas['data8'];
						$d9[$i] = $datas['data9'];
						$d10[$i] = $datas['data10'];
						$d11[$i] = $datas['data11'];
						$t[$i] = $datas['target'];
						$i++;
						$jumlah_data++;
				}

				$sukses = 0;

	/*diganti*/	for ($epoh=0; $epoh < $jumlah_epoh ; $epoh++) {  /*batas sesuai dengan epoh*/ 
					# code...*/
					echo "<br>============================= Epoch $epoh ==============================<br><br>";
					echo "Data awal ==>  w1=$w1 : w2=$w2 : w3=$w3 : w4=$w4 : w5=$w5 : w6=$w6 : w7=$w7 : w8=$w8 : w9=$w9 : w10=$w10 : w11=$w11 : b=$b <br><br>";
					

					
		/*diganti*/	if($sukses == $jumlah_data){
						break;
					}else{
						$TP = 0; // HASIL 1 MENJADI 1
						$TN = 0;  // HASIL 0 MENJADI 0
						$FP = 0; // HASIL 0 MENJADI 1
						$FN = 0; // HASIL 1 MENJADI 0 
						$sukses = 0 ; 
		/*diganti*/		for ($i=0; $i < $jumlah_data; $i++) { /*Batas sesuai dengan data*/
						

						/*hitung data */
						$y_in[$i] = $b +(( $d1[$i] * $w1 + $d2[$i] * $w2 + $d3[$i] * $w3 + $d4[$i] * $w4 
									   +   $d5[$i] * $w5 + $d6[$i] * $w6 + $d7[$i] * $w7 + $d8[$i] * $w8 
									   +   $d9[$i] * $w9 + $d10[$i] * $w10)) + $d11[$i] * $w11;
						echo "=================================Data ke-$i==================================<br>	  <br>";
							echo "Data awal ==>  X1=$d1[$i], X2=$d3[$i], X3=$d3[$i], X4=$d4[$i], X5=$d5[$i], X6=$d6[$i], X7=$d7[$i], X8=$d8[$i], X9=$d9[$i], X10=$d10[$i], X11=$d11[$i], t=$t[$i] <br><br>";
							echo "ynet = $b + $d1[$i] * $w1 + $d2[$i] * $w2 + $d3[$i] * $w3 + $d4[$i] * $w4 
									   		+ $d5[$i] * $w5 + $d6[$i] * $w6 + $d7[$i] * $w7 + $d8[$i] * $w8 
									   		+ $d9[$i] * $w9 + $d10[$i] * $w10 + $d11[$i] * $w11; <br>";
							echo "ynet = $y_in[$i]<br><br>";
							echo "Data Set Baru ==> w1=$w1 : w2=$w2 : w3=$w3 : w4=$w4 : w5=$w5 : w6=$w6 : w7=$w7 : w8=$w8 : w9=$w9 : w10=$w10 : w11=$w11 : b=$b <br><br>";
							
							
							$sigmoid[$i] = 1/ (1 + pow(2.71828183,(-$y_in[$i])));
							echo "---------------Data ke-$i : Treshold : $sigmoid[$i] :-------------<br>";	

							if($sigmoid[$i]  > $ynet){ /*/// fnet menentukan ambang*/
								
								//echo "Menjadi ==> $y_in[$i] == $i  <br> ";
								$y_in[$i] = 1 ; /*set data target*/
								
									if ($y_in[$i] == $t[$i]) { /*/// cek data dengan target*/
										$sukses++;
										$TES[$i] = 0;
										$status[$i] = "Benar";
										$TP ++;
									}else{ 
										$FN++;
										$TES[$i] = 1;
										$status[$i] = "salah";
										/*perubahan data*/
										echo "TIDAK SESUAI target 0 Melakukan perubahan Data Set<br>";
										echo "w1  = $w1  +  $learning * ($d1[$i]) * $t[$i]; <br>";
										echo "w2  = $w2  +  $learning * ($d2[$i]) * $t[$i]; <br>";
										echo "w3  = $w3  +  $learning * ($d3[$i]) * $t[$i]; <br>";
										echo "w4  = $w4  +  $learning * ($d4[$i]) * $t[$i]; <br>";
										echo "w5  = $w5  +  $learning * ($d5[$i]) * $t[$i]; <br>";
										echo "w6  = $w6  +  $learning * ($d6[$i]) * $t[$i]; <br>";
										echo "w7  = $w7  +  $learning * ($d7[$i]) * $t[$i]; <br>";
										echo "w8  = $w8  +  $learning * ($d8[$i]) * $t[$i]; <br>";
										echo "w9  = $w9  +  $learning * ($d9[$i]) * $t[$i]; <br>";
										echo "w10  = $w10  +  $learning * ($d10[$i]) * $t[$i]; <br>";
										echo "w11  = $w11  +  $learning * ($d11[$i]) * $t[$i]; <br>";
										echo "b  = $b  +  $learning  * $t[$i]; <br>";

										$w1  = $w1  +  $learning * ($d1[$i]) * $t[$i];
										$w2  = $w2  +  $learning * ($d2[$i]) * $t[$i];
										$w3  = $w3  +  $learning * ($d3[$i]) * $t[$i];
										$w4  = $w4  +  $learning * ($d4[$i]) * $t[$i];
										$w5  = $w5  +  $learning * ($d5[$i]) * $t[$i];
										$w6  = $w6  +  $learning * ($d6[$i]) * $t[$i];
										$w7  = $w7  +  $learning * ($d7[$i]) * $t[$i];
										$w8  = $w8  +  $learning * ($d8[$i]) * $t[$i];
										$w9  = $w9  +  $learning * ($d9[$i]) * $t[$i];
										$w10 = $w10 +  $learning * ($d10[$i]) * $t[$i];
										$w11 = $w11 +  $learning *  $d10[$i] * $t[$i];
										$b = $b + $learning * $t[$i];	

										
										
									echo "-----------------------------------------------------Baru----------------------------------------------------------<br>";
									echo "Set Data Baru = w1baru=$w1 - w2baru=$w2 - w3baru=$w3 - w4baru=$w4 - w5baru=$w5 - w6baru=$w6 - w7baru=$w7 - w8baru=$w8 - w9baru=$w9 - w10baru=$w10 - w11baru=$w11 - Bbaru=$b <br>";
									echo "---------------------------------------------------------------------------------------------------------------------<br>";
									}

							}else if($sigmoid[$i]  < $ynet){

								//echo "fnet : $y_in[$i] : ";
								$y_in[$i] = 0 ; /*set data target*/
								//echo "Menjadi ==> $y_in[$i] == $i <br>";
									if ($y_in[$i] == $t[$i]) { /// cek data dengan target
										$sukses++;
										$TES[$i] = 0;
										$status[$i] = "Benar";
										$TN++;
									}else{
										$status[$i] = "Salah";
										$TES[$i] = 1;
										$FP++;
										/*perubahan data*/
										echo "TIDAK SESUAI target 1 Melakukan perubahan Data set<br>";
										echo "w1  = $w1  +  $learning * ($d1[$i]) * $t[$i]; <br>";
										echo "w2  = $w2  +  $learning * ($d2[$i]) * $t[$i]; <br>";
										echo "w3  = $w3  +  $learning * ($d3[$i]) * $t[$i]; <br>";
										echo "w4  = $w4  +  $learning * ($d4[$i]) * $t[$i]; <br>";
										echo "w5  = $w5  +  $learning * ($d5[$i]) * $t[$i]; <br>";
										echo "w6  = $w6  +  $learning * ($d6[$i]) * $t[$i]; <br>";
										echo "w7  = $w7  +  $learning * ($d7[$i]) * $t[$i]; <br>";
										echo "w8  = $w8  +  $learning * ($d8[$i]) * $t[$i]; <br>";
										echo "w9  = $w9  +  $learning * ($d9[$i]) * $t[$i]; <br>";
										echo "w10  = $w10  +  $learning * ($d10[$i]) * $t[$i]; <br>";
										echo "w11  = $w11  +  $learning * ($d11[$i]) * $t[$i]; <br>";
										echo "b  = $b  +  $learning  * $t[$i]; <br> <br>";

										$w1  = $w1  +  $learning * $t[$i] * ($d1[$i]);
										$w2  = $w2  +  $learning * $t[$i] * ($d2[$i]);
										$w3  = $w3  +  $learning * $t[$i] * ($d3[$i]);
										$w4  = $w4  +  $learning * $t[$i] * ($d4[$i]);
										$w5  = $w5  +  $learning * $t[$i] * ($d5[$i]);
										$w6  = $w6  +  $learning * $t[$i] * ($d6[$i]);
										$w7  = $w7  +  $learning * $t[$i] * ($d7[$i]);
										$w8  = $w8  +  $learning * $t[$i] * ($d8[$i]);
										$w9  = $w9  +  $learning * $t[$i] * ($d9[$i]);
										$w10 = $w10 +  $learning * $t[$i] * ($d10[$i]);
										$w11 = $w11 +  $learning * $t[$i] * $d11[$i];
										$b = $b + $learning * $t[$i];	

									echo "-----------------------------------------------------Set Data Baru----------------------------------------------------------<br>";
									echo "Set Data Baru = w1baru=$w1 - w2baru=$w2 - w3baru=$w3 - w4baru=$w4 - w5baru=$w5 - w6baru=$w6 - w7baru=$w7 - w8baru=$w8 - w9baru=$w9 - w10baru=$w10 - w11baru=$w11 - Bbaru=$b <br>";
									echo "---------------------------------------------------------------------------------------------------------------------<br>";
								}
							
							}

						}


					for ($a=0; $a < $jumlah_data; $a++) { 
						if ($TES[$a] == 1) {
							echo "$a  = $y_in[$a]<br>";
						}
					}

					$hasil = (($TP + $TN)/ ($TP + $TN + $FP + $FN))*100;
					echo "<br><br>~~~~~~~~~~~~~~~~~~~~~~~~~~~~Evaluasi Data~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br>";
					echo "Nilai TP = $TP <br> TN = $TN <br> FP = $FP <br> FN = $FN <br>";
					echo "$hasil<br>";
					echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br>";
						/*for ($i=0; $i < $jumlah_data ; $i++) { 
							if ($status[$i] == "salah") {
								echo "$i <br>";
							}
						}*/
					}
				}
					for ($i=0; $i < $jumlah_data ; $i++) {
						$data_insert[$i] = array(
							'ID' => $ID[$i],
							'nama' => $nama[$i],
							'data1' => $d1[$i],
							'data2' => $d2[$i],
							'data3' => $d3[$i],
							'data4' => $d4[$i],
							'data5' => $d5[$i],
							'data6' => $d6[$i],
							'data7' => $d7[$i],
							'data8' => $d8[$i],
							'data9' => $d9[$i],
							'data10' => $d10[$i],
							'data11' => $d11[$i],
							'target' => $t[$i],
							'output' => $y_in[$i],
							'status' => $status[$i]
							);
					}
					
					$hasil = (($TP + $TN)/ ($TP + $TN + $FP + $FN))*100;

					$data_insert1 = array(
						'ID' => 1,
						'w1' => $w1,
						'w2' => $w2,
						'w3' => $w3,
						'w4' => $w4,
						'w5' => $w5,
						'w6' => $w6,
						'w7' => $w7,
						'w8' => $w8,
						'w9' => $w9,
						'w10' => $w10,
						'w11' => $w11,
						'b' => $b,
						'epoh' => $epoh-1,
						'hasil' => $hasil,
						'TP' => $TP,
						'TN' => $TN,
						'FP' => $FP,
						'FN' => $FN,
							
					);
					print_r($data_insert1);
					
			}

		}

		public function metode(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
				$data = $this->Mymodel->Getprepocessing();
				$b = 0;
				$learning = $_POST['learning'];
				$jumlah_epoh = $_POST['epoh'];
				$ynet = $_POST['ynet'];
				$w1 = 0;
				$w2 = 0;
				$w3 = 0;
				$w4 = 0;
				$w5 = 0;
				$w6 = 0;
				$w7 = 0;
				$w8 = 0;
				$w9 = 0;
				$w10 = 0;
				$w11 = 0;
				

				$i=0;
				$jumlah_data=0;
				foreach ($data as $datas ) {
						$ID[$i] = $datas['ID'];
						$nama[$i] = $datas['nama'];
						$d1[$i] = $datas['data1'];
						$d2[$i] = $datas['data2'];
						$d3[$i] = $datas['data3'];
						$d4[$i] = $datas['data4'];
						$d5[$i] = $datas['data5'];
						$d6[$i] = $datas['data6'];
						$d7[$i] = $datas['data7'];
						$d8[$i] = $datas['data8'];
						$d9[$i] = $datas['data9'];
						$d10[$i] = $datas['data10'];
						$d11[$i] = $datas['data11'];
						$t[$i] = $datas['target'];
						$i++;
						$jumlah_data++;
				}

				$sukses = 0;

	/*diganti*/	for ($epoh=0; $epoh < $jumlah_epoh ; $epoh++) {  /*batas sesuai dengan epoh*/ 
					# code...*/
					/*echo "<br>============================= Epoch $epoh ==============================<br><br>";
					echo "Data awal ==>  w1=$w1 : w2=$w2 : w3=$w3 : w4=$w4 : w5=$w5 : w6=$w6 : w7=$w7 : w8=$w8 : w9=$w9 : w10=$w10 : w11=$w11 : b=$b <br><br>";*/
			

		/*diganti*/	if($sukses == $jumlah_data){
						break;
					}else{
						$TP = 0; // HASIL 1 MENJADI 1
						$TN = 0;  // HASIL 0 MENJADI 0
						$FP = 0; // HASIL 0 MENJADI 1
						$FN = 0; // HASIL 1 MENJADI 0 
						$sukses = 0 ; 
		/*diganti*/		for ($i=0; $i < $jumlah_data; $i++) { /*Batas sesuai dengan data*/
						
						/*hitung data */
						$y_in[$i] = $b +(( $d1[$i] * $w1 + $d2[$i] * $w2 + $d3[$i] * $w3 + $d4[$i] * $w4 
									   +   $d5[$i] * $w5 + $d6[$i] * $w6 + $d7[$i] * $w7 + $d8[$i] * $w8 
									   +   $d9[$i] * $w9 + $d10[$i] * $w10)) + $d11[$i] * $w11;
						/*echo "=================================Data ke-$i==================================<br>	  <br>";
							echo "ynet = $b + $d1[$i] * $w1 + $d2[$i] * $w2 + $d3[$i] * $w3 + $d4[$i] * $w4 
									   		+ $d5[$i] * $w5 + $d6[$i] * $w6 + $d7[$i] * $w7 + $d8[$i] * $w8 
									   		+ $d9[$i] * $w9 + $d10[$i] * $w10 + $d11[$i] * $w11; <br>";
							echo "ynet = $y_in[$i]<br><br>";
							echo "Data Set Baru ==> w1=$w1 : w2=$w2 : w3=$w3 : w4=$w4 : w5=$w5 : w6=$w6 : w7=$w7 : w8=$w8 : w9=$w9 : w10=$w10 : w11=$w11 : b=$b <br><br>";*/
							
							
							$sigmoid[$i] = 1/ (1 + pow(2.71828183,(-$y_in[$i])));
							//echo "---------------Data ke-$i : Treshold : $sigmoid[$i] :-------------<br>";	

							if($sigmoid[$i]  > $ynet){ /*/// fnet menentukan ambang*/
								
								//echo "Menjadi ==> $y_in[$i] == $i  <br> ";
								$y_in[$i] = 1 ; /*set data target*/
								
									if ($y_in[$i] == $t[$i]) { /*/// cek data dengan target*/
										$sukses++;
										$status[$i] = "Benar";
										$TP ++;
									}else{ 
										$FN++;
										$status[$i] = "salah";
										/*perubahan data*/
										/*echo "TIDAK SESUAI target 0 Melakukan perubahan Data Set<br>";
										echo "w1  = $w1  +  $learning * ($d1[$i]) * $t[$i]; <br>";
										echo "w2  = $w2  +  $learning * ($d2[$i]) * $t[$i]; <br>";
										echo "w3  = $w3  +  $learning * ($d3[$i]) * $t[$i]; <br>";
										echo "w4  = $w4  +  $learning * ($d4[$i]) * $t[$i]; <br>";
										echo "w5  = $w5  +  $learning * ($d5[$i]) * $t[$i]; <br>";
										echo "w6  = $w6  +  $learning * ($d6[$i]) * $t[$i]; <br>";
										echo "w7  = $w7  +  $learning * ($d7[$i]) * $t[$i]; <br>";
										echo "w8  = $w8  +  $learning * ($d8[$i]) * $t[$i]; <br>";
										echo "w9  = $w9  +  $learning * ($d9[$i]) * $t[$i]; <br>";
										echo "w10  = $w10  +  $learning * ($d10[$i]) * $t[$i]; <br>";
										echo "w11  = $w11  +  $learning * ($d11[$i]) * $t[$i]; <br>";
										echo "b  = $b  +  $learning  * $t[$i]; <br>";*/

										$w1  = $w1  +  $learning * ($d1[$i]) * $t[$i];
										$w2  = $w2  +  $learning * ($d2[$i]) * $t[$i];
										$w3  = $w3  +  $learning * ($d3[$i]) * $t[$i];
										$w4  = $w4  +  $learning * ($d4[$i]) * $t[$i];
										$w5  = $w5  +  $learning * ($d5[$i]) * $t[$i];
										$w6  = $w6  +  $learning * ($d6[$i]) * $t[$i];
										$w7  = $w7  +  $learning * ($d7[$i]) * $t[$i];
										$w8  = $w8  +  $learning * ($d8[$i]) * $t[$i];
										$w9  = $w9  +  $learning * ($d9[$i]) * $t[$i];
										$w10 = $w10 +  $learning * ($d10[$i]) * $t[$i];
										$w11 = $w11 +  $learning *  $d10[$i] * $t[$i];
										$b = $b + $learning * $t[$i];	

										
										
									/*echo "-----------------------------------------------------Baru----------------------------------------------------------<br>";
									echo "Set Data Baru = w1baru=$w1 - w2baru=$w2 - w3baru=$w3 - w4baru=$w4 - w5baru=$w5 - w6baru=$w6 - w7baru=$w7 - w8baru=$w8 - w9baru=$w9 - w10baru=$w10 - w11baru=$w11 - Bbaru=$b <br>";
									echo "---------------------------------------------------------------------------------------------------------------------<br>";*/
									}

							}else if($sigmoid[$i]  <= $ynet){

								//echo "fnet : $y_in[$i] : ";
								$y_in[$i] = 0 ; /*set data target*/
								//echo "Menjadi ==> $y_in[$i] == $i <br>";
									if ($y_in[$i] == $t[$i]) { /// cek data dengan target
										$sukses++;
										$status[$i] = "Benar";
										$TN++;
									}else{
										$status[$i] = "Salah";
										$FP++;
										/*perubahan data*/
										/*echo "TIDAK SESUAI target 1 Melakukan perubahan Data set<br>";
										echo "w1  = $w1  +  $learning * ($d1[$i]) * $t[$i]; <br>";
										echo "w2  = $w2  +  $learning * ($d2[$i]) * $t[$i]; <br>";
										echo "w3  = $w3  +  $learning * ($d3[$i]) * $t[$i]; <br>";
										echo "w4  = $w4  +  $learning * ($d4[$i]) * $t[$i]; <br>";
										echo "w5  = $w5  +  $learning * ($d5[$i]) * $t[$i]; <br>";
										echo "w6  = $w6  +  $learning * ($d6[$i]) * $t[$i]; <br>";
										echo "w7  = $w7  +  $learning * ($d7[$i]) * $t[$i]; <br>";
										echo "w8  = $w8  +  $learning * ($d8[$i]) * $t[$i]; <br>";
										echo "w9  = $w9  +  $learning * ($d9[$i]) * $t[$i]; <br>";
										echo "w10  = $w10  +  $learning * ($d10[$i]) * $t[$i]; <br>";
										echo "w11  = $w11  +  $learning * ($d11[$i]) * $t[$i]; <br>";
										echo "b  = $b  +  $learning  * $t[$i]; <br> <br>";*/

										$w1  = $w1  +  $learning * $t[$i] * ($d1[$i]);
										$w2  = $w2  +  $learning * $t[$i] * ($d2[$i]);
										$w3  = $w3  +  $learning * $t[$i] * ($d3[$i]);
										$w4  = $w4  +  $learning * $t[$i] * ($d4[$i]);
										$w5  = $w5  +  $learning * $t[$i] * ($d5[$i]);
										$w6  = $w6  +  $learning * $t[$i] * ($d6[$i]);
										$w7  = $w7  +  $learning * $t[$i] * ($d7[$i]);
										$w8  = $w8  +  $learning * $t[$i] * ($d8[$i]);
										$w9  = $w9  +  $learning * $t[$i] * ($d9[$i]);
										$w10 = $w10 +  $learning * $t[$i] * ($d10[$i]);
										$w11 = $w11 +  $learning * $t[$i] * $d11[$i];
										$b = $b + $learning * $t[$i];	

									/*echo "-----------------------------------------------------Set Data Baru----------------------------------------------------------<br>";
									echo "Set Data Baru = w1baru=$w1 - w2baru=$w2 - w3baru=$w3 - w4baru=$w4 - w5baru=$w5 - w6baru=$w6 - w7baru=$w7 - w8baru=$w8 - w9baru=$w9 - w10baru=$w10 - w11baru=$w11 - Bbaru=$b <br>";
									echo "---------------------------------------------------------------------------------------------------------------------<br>";*/
								}
							}

						}
					/*$hasil = (($TP + $TN)/ ($TP + $TN + $FP + $FN))*100;
					echo "<br><br>~~~~~~~~~~~~~~~~~~~~~~~~~~~~Evaluasi Data~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br>";
					echo "Nilai TP = $TP <br> TN = $TN <br> FP = $FP <br> FN = $FN <br>";
					echo "$hasil<br>";
					echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br>";
					*/	
					}


				
				}
				//// diluar for /// 
				//echo "$epoh";

				//for ($idx=0; $idx < $epoh; $idx++) { 
					# code...
					for ($i=0; $i < $jumlah_data ; $i++) {
						$data_insert[$i] = array(
							'ID' => $ID[$i],
							'nama' => $nama[$i],
							'data1' => $d1[$i],
							'data2' => $d2[$i],
							'data3' => $d3[$i],
							'data4' => $d4[$i],
							'data5' => $d5[$i],
							'data6' => $d6[$i],
							'data7' => $d7[$i],
							'data8' => $d8[$i],
							'data9' => $d9[$i],
							'data10' => $d10[$i],
							'data11' => $d11[$i],
							'target' => $t[$i],
							'output' => $y_in[$i],
							'status' => $status[$i]
							);
						$where = array('ID' => $i+1);
						$res = $this->Mymodel->UpdateUnitKerja('db_hasil',$data_insert[$i],$where);
						//$sukses = $this->Mymodel->InsertPegawai('db_hasil',$data_insert[$i]);
						//print_r($status[$i]); echo "<br>";
						}
					//}
					//print_r($status[$epoh]);
					//echo "$status[2]";
					$hasil = (($TP + $TN)/ ($TP + $TN + $FP + $FN))*100;

					$data_insert1 = array(
						'ID' => 1,
						'w1' => $w1,
						'w2' => $w2,
						'w3' => $w3,
						'w4' => $w4,
						'w5' => $w5,
						'w6' => $w6,
						'w7' => $w7,
						'w8' => $w8,
						'w9' => $w9,
						'w10' => $w10,
						'w11' => $w11,
						'b' => $b,
						'epoh' => $epoh,
						'hasil' => $hasil,
						'TP' => $TP,
						'TN' => $TN,
						'FP' => $FP,
						'FN' => $FN,
						'treshold' => $ynet,
							
					);
					//print_r($data_insert1);
					$where = array('ID' => 1);
					$ress = $this->Mymodel->UpdateUnitKerja('db_hasil_data',$data_insert1,$where);
					//$suksess = $this->Mymodel->InsertPegawai('db_hasil_data',$data_insert1);
					

				///evaluasi data unutk akurasi
				
				//echo "$hasil";  

				$data['db_hasil'] = $this->Mymodel->Gethasil();
				$data['db_hasil_data'] = $this->Mymodel->Getphasilpengolahan();
				$this->load->view('form_data_hasil',$data);

				


				//echo "$w1 - $w2 - $w3 - $w4 - $w5 - $w6 - $w7 - $w8 - $w9 - $w10 - $w11 - $b <br>";
				//echo "$epoh";			
				//echo "$TP - $TN - $FP - $FN <br>";
				//$this->load->view('form_normalisasi',$data,$sigmoid);	
			}

		}

		public function prediksi_proses(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
				
				$nilai = $this->Mymodel->Getphasilpengolahan();

				foreach ($nilai as $key ) {
					# code...
					$bobot1 = $key['w1'];
					$bobot2 = $key['w2'];
					$bobot3 = $key['w3'];
					$bobot4 = $key['w4'];
					$bobot5 = $key['w5'];
					$bobot6 = $key['w6'];
					$bobot7 = $key['w7'];
					$bobot8 = $key['w8'];
					$bobot9 = $key['w9'];
					$bobot10 = $key['w10'];
					$bobot11 = $key['w11'];
					$bias = $key['b'];
					
					
					$treshold = $key['treshold'];

				}

				$b = $bias;
				$ynet = $treshold;
				$w1 = $bobot1;
				$w2 = $bobot2;
				$w3 = $bobot3;
				$w4 = $bobot4;
				$w5 = $bobot5;
				$w6 = $bobot6;
				$w7 = $bobot7;
				$w8 = $bobot8;
				$w9 = $bobot9;
				$w10 = $bobot10;
				$w11 = $bobot11;
				
				$nama = $_POST['nama'];
				$d1 = $_POST['data1']/100;
				$d2 = $_POST['data2']/100;
				$d3 = $_POST['data3']/100;
				$d4 = $_POST['data4']/100;
				$d5 = $_POST['data5']/100;
				$d6 = $_POST['data6']/100;
				$d7 = $_POST['data7']/100;
				$d8 = $_POST['data8']/100;
				$d9 = $_POST['data9']/100;
				$d10 = $_POST['data10']/100;
				$d11 = $_POST['data11'];
				
				//echo "$d1";
				$sukses = 0;

	/*diganti*/	 /*batas sesuai dengan epoh*/ 
	

		/*diganti*/	
						$TP = 0; // HASIL 1 MENJADI 1
						$TN = 0;  // HASIL 0 MENJADI 0
						$FP = 0; // HASIL 0 MENJADI 1
						$FN = 0; // HASIL 1 MENJADI 0 
						$sukses = 0 ; 
		/*diganti*/		 /*Batas sesuai dengan data*/
						
						/*hitung data */
						$y_in = $b +(( $d1 * $w1 + $d2 * $w2 + $d3 * $w3 + $d4 * $w4 
									   +   $d5 * $w5 + $d6 * $w6 + $d7 * $w7 + $d8 * $w8 
									   +   $d9 * $w9 + $d10 * $w10)) + $d11 * $w11;
							
							$sigmoid = 1/ (1 + pow(2.71828183,(-$y_in)));
							//echo "---------------Data ke-$i : Treshold : $sigmoid[$i] :-------------<br>";	

							if($sigmoid  > $ynet){ /*/// fnet menentukan ambang*/
								
								$status_prediksi = "berbakat";

							}else if($sigmoid < $ynet){

								$status_prediksi = "tidak_berbakat";
							}
				echo "
				<br><br><br>
				<table border='1' align='center' width='500px'>
					<tr>
						<td colspan='2' align='center' > Data Siswa </td>
							
					</tr>
					<tr>
						<td width ='250' align='center'> Nama Siswa</td>
						<td width ='250' align='center'> $nama </td>
					</tr>
					<tr>
						<td align='center'> Pukulan</td>
						<td align='center'> $d1 </td>
					</tr>
					<tr>
						<td align='center'> Tendangan</td>
						<td align='center'> $d2 </td>
					</tr>
					<tr>
						<td align='center'> Tangkisan</td>
						<td align='center'> $d3 </td>
					</tr>
					<tr>
						<td align='center'> Hindaran</td>
						<td align='center'> $d4 </td>
					</tr>
					<tr>
						<td align='center'> Jatuhan</td>
						<td align='center'> $d5 </td>
					</tr>
					<tr>
						<td align='center'> Teknik bertarung</td>
						<td align='center'> $d6 </td>
					</tr>
					<tr>
						<td align='center'> weijen 1</td>
						<td align='center'> $d7 </td>
					</tr>
					<tr>
						<td align='center'> weijen 2</td>
						<td align='center'> $d8 </td>
					</tr>
					<tr>
						<td align='center'> Kuda-kuda</td>
						<td align='center'> $d9 </td>
					</tr>
					<tr>
						<td align='center'> Teknik Tongkat</td>
						<td align='center'> $d10 </td>
					</tr>
					<tr>
						<td align='center'> Kuisonedr</td>
						<td align='center'> $d11 </td>
					</tr>

				<h1 align='center'>Selamat Siswa ini berbakat di bidang Olahraga Pencak silat</h1>
				</table>
				";	
			}
		}

		public function metode_testing_save(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data = $this->Mymodel->Getprepocessingtesting();
			$nilai = $this->Mymodel->Getphasilpengolahan();

			foreach ($nilai as $key ) {
				# code...
				$treshold = $key['treshold'];
			}

			$b = $_POST['b'];
			$learning = 0.01;
			$jumlah_epoh = 1;
			$ynet = $treshold;
			$w1 = $_POST['w1'];
			$w2 = $_POST['w2'];
			$w3 = $_POST['w3'];
			$w4 = $_POST['w4'];
			$w5 = $_POST['w5'];
			$w6 = $_POST['w6'];
			$w7 = $_POST['w7'];
			$w8 = $_POST['w8'];
			$w9 = $_POST['w9'];
			$w10 = $_POST['w10'];
			$w11 = $_POST['w11'];
			$b = $_POST['b'];
			

			$i=0;
				$jumlah_data=0;
				foreach ($data as $datas ) {
						$ID[$i] = $datas['ID'];
						$nama[$i] = $datas['nama'];
						$d1[$i] = $datas['data1'];
						$d2[$i] = $datas['data2'];
						$d3[$i] = $datas['data3'];
						$d4[$i] = $datas['data4'];
						$d5[$i] = $datas['data5'];
						$d6[$i] = $datas['data6'];
						$d7[$i] = $datas['data7'];
						$d8[$i] = $datas['data8'];
						$d9[$i] = $datas['data9'];
						$d10[$i] = $datas['data10'];
						$d11[$i] = $datas['data11'];
						$t[$i] = $datas['target'];
						$i++;
						$jumlah_data++;
				}

				$sukses = 0;

//	/*diganti*/	for ($epoh=0; $epoh < $jumlah_epoh ; $epoh++) {  /*batas sesuai dengan epoh*/ 
					# code...*/
					/*echo "<br>============================= Epoch $epoh ==============================<br><br>";
					echo "Data awal ==>  w1=$w1 : w2=$w2 : w3=$w3 : w4=$w4 : w5=$w5 : w6=$w6 : w7=$w7 : w8=$w8 : w9=$w9 : w10=$w10 : w11=$w11 : b=$b <br><br>";
					*/

					
//		/*diganti*/	if($sukses == $jumlah_data){
//						break;
//					}else{
						$TP = 0; // HASIL 1 MENJADI 1
						$TN = 0;  // HASIL 0 MENJADI 0
						$FP = 0; // HASIL 0 MENJADI 1
						$FN = 0; // HASIL 1 MENJADI 0 
						$sukses = 0 ; 
		/*diganti*/		for ($i=0; $i < $jumlah_data; $i++) { /*Batas sesuai dengan data*/
						

						/*hitung data */
						$y_in[$i] = $b +(( $d1[$i] * $w1 + $d2[$i] * $w2 + $d3[$i] * $w3 + $d4[$i] * $w4 
									   +   $d5[$i] * $w5 + $d6[$i] * $w6 + $d7[$i] * $w7 + $d8[$i] * $w8 
									   +   $d9[$i] * $w9 + $d10[$i] * $w10)) + $d11[$i] * $w11;
					/*	echo "=================================Data ke-$i==================================<br>	  <br>";
							echo "Data awal ==>  X1=$d1[$i], X2=$d3[$i], X3=$d3[$i], X4=$d4[$i], X5=$d5[$i], X6=$d6[$i], X7=$d7[$i], X8=$d8[$i], X9=$d9[$i], X10=$d10[$i], X11=$d11[$i], t=$t[$i] <br><br>";
							echo "ynet = $b + $d1[$i] * $w1 + $d2[$i] * $w2 + $d3[$i] * $w3 + $d4[$i] * $w4 
									   		+ $d5[$i] * $w5 + $d6[$i] * $w6 + $d7[$i] * $w7 + $d8[$i] * $w8 
									   		+ $d9[$i] * $w9 + $d10[$i] * $w10 + $d11[$i] * $w11; <br>";
							echo "ynet = $y_in[$i]<br><br>";
							echo "Data Set Baru ==> w1=$w1 : w2=$w2 : w3=$w3 : w4=$w4 : w5=$w5 : w6=$w6 : w7=$w7 : w8=$w8 : w9=$w9 : w10=$w10 : w11=$w11 : b=$b <br><br>";
							*/
							
							$sigmoid[$i] = 1/ (1 + pow(2.71828183,(-$y_in[$i])));
							/*echo "---------------Data ke-$i : Treshold : $sigmoid[$i] :-------------<br>";	
*/
							if($sigmoid[$i]  > $ynet){ /*/// fnet menentukan ambang*/
								
								//echo "Menjadi ==> $y_in[$i] == $i  <br> ";
								$y_in[$i] = 1 ; /*set data target*/
								
									if ($y_in[$i] == $t[$i]) { /*/// cek data dengan target*/
										$sukses++;
										$TES[$i] = 0;
										$status[$i] = "Benar";
										$TP ++;
									}else{ 
										$FN++;
										$TES[$i] = 1;
										$status[$i] = "salah";
										/*perubahan data*/
									/*	echo "TIDAK SESUAI target 0 Melakukan perubahan Data Set<br>";
										echo "w1  = $w1  +  $learning * ($d1[$i]) * $t[$i]; <br>";
										echo "w2  = $w2  +  $learning * ($d2[$i]) * $t[$i]; <br>";
										echo "w3  = $w3  +  $learning * ($d3[$i]) * $t[$i]; <br>";
										echo "w4  = $w4  +  $learning * ($d4[$i]) * $t[$i]; <br>";
										echo "w5  = $w5  +  $learning * ($d5[$i]) * $t[$i]; <br>";
										echo "w6  = $w6  +  $learning * ($d6[$i]) * $t[$i]; <br>";
										echo "w7  = $w7  +  $learning * ($d7[$i]) * $t[$i]; <br>";
										echo "w8  = $w8  +  $learning * ($d8[$i]) * $t[$i]; <br>";
										echo "w9  = $w9  +  $learning * ($d9[$i]) * $t[$i]; <br>";
										echo "w10  = $w10  +  $learning * ($d10[$i]) * $t[$i]; <br>";
										echo "w11  = $w11  +  $learning * ($d11[$i]) * $t[$i]; <br>";
										echo "b  = $b  +  $learning  * $t[$i]; <br>";
*/
										/*$w1  = $w1  +  $learning * ($d1[$i]) * $t[$i];
										$w2  = $w2  +  $learning * ($d2[$i]) * $t[$i];
										$w3  = $w3  +  $learning * ($d3[$i]) * $t[$i];
										$w4  = $w4  +  $learning * ($d4[$i]) * $t[$i];
										$w5  = $w5  +  $learning * ($d5[$i]) * $t[$i];
										$w6  = $w6  +  $learning * ($d6[$i]) * $t[$i];
										$w7  = $w7  +  $learning * ($d7[$i]) * $t[$i];
										$w8  = $w8  +  $learning * ($d8[$i]) * $t[$i];
										$w9  = $w9  +  $learning * ($d9[$i]) * $t[$i];
										$w10 = $w10 +  $learning * ($d10[$i]) * $t[$i];
										$w11 = $w11 +  $learning *  $d10[$i] * $t[$i];
										$b = $b + $learning * $t[$i];	
*/
										
										
								/*	echo "-----------------------------------------------------Baru----------------------------------------------------------<br>";
									echo "Set Data Baru = w1baru=$w1 - w2baru=$w2 - w3baru=$w3 - w4baru=$w4 - w5baru=$w5 - w6baru=$w6 - w7baru=$w7 - w8baru=$w8 - w9baru=$w9 - w10baru=$w10 - w11baru=$w11 - Bbaru=$b <br>";
									echo "---------------------------------------------------------------------------------------------------------------------<br>";*/
									}

							}else if($sigmoid[$i]  < $ynet){

								//echo "fnet : $y_in[$i] : ";
								$y_in[$i] = 0 ; /*set data target*/
								//echo "Menjadi ==> $y_in[$i] == $i <br>";
									if ($y_in[$i] == $t[$i]) { /// cek data dengan target
										$sukses++;
										$TES[$i] = 0;
										$status[$i] = "Benar";
										$TN++;
									}else{
										$status[$i] = "Salah";
										$TES[$i] = 1;
										$FP++;
										/*perubahan data*/
									/*	echo "TIDAK SESUAI target 1 Melakukan perubahan Data set<br>";
										echo "w1  = $w1  +  $learning * ($d1[$i]) * $t[$i]; <br>";
										echo "w2  = $w2  +  $learning * ($d2[$i]) * $t[$i]; <br>";
										echo "w3  = $w3  +  $learning * ($d3[$i]) * $t[$i]; <br>";
										echo "w4  = $w4  +  $learning * ($d4[$i]) * $t[$i]; <br>";
										echo "w5  = $w5  +  $learning * ($d5[$i]) * $t[$i]; <br>";
										echo "w6  = $w6  +  $learning * ($d6[$i]) * $t[$i]; <br>";
										echo "w7  = $w7  +  $learning * ($d7[$i]) * $t[$i]; <br>";
										echo "w8  = $w8  +  $learning * ($d8[$i]) * $t[$i]; <br>";
										echo "w9  = $w9  +  $learning * ($d9[$i]) * $t[$i]; <br>";
										echo "w10  = $w10  +  $learning * ($d10[$i]) * $t[$i]; <br>";
										echo "w11  = $w11  +  $learning * ($d11[$i]) * $t[$i]; <br>";
										echo "b  = $b  +  $learning  * $t[$i]; <br> <br>";
*/
										/*$w1  = $w1  +  $learning * $t[$i] * ($d1[$i]);
										$w2  = $w2  +  $learning * $t[$i] * ($d2[$i]);
										$w3  = $w3  +  $learning * $t[$i] * ($d3[$i]);
										$w4  = $w4  +  $learning * $t[$i] * ($d4[$i]);
										$w5  = $w5  +  $learning * $t[$i] * ($d5[$i]);
										$w6  = $w6  +  $learning * $t[$i] * ($d6[$i]);
										$w7  = $w7  +  $learning * $t[$i] * ($d7[$i]);
										$w8  = $w8  +  $learning * $t[$i] * ($d8[$i]);
										$w9  = $w9  +  $learning * $t[$i] * ($d9[$i]);
										$w10 = $w10 +  $learning * $t[$i] * ($d10[$i]);
										$w11 = $w11 +  $learning * $t[$i] * $d11[$i];
										$b = $b + $learning * $t[$i];*/	

/*									echo "-----------------------------------------------------Set Data Baru----------------------------------------------------------<br>";
									echo "Set Data Baru = w1baru=$w1 - w2baru=$w2 - w3baru=$w3 - w4baru=$w4 - w5baru=$w5 - w6baru=$w6 - w7baru=$w7 - w8baru=$w8 - w9baru=$w9 - w10baru=$w10 - w11baru=$w11 - Bbaru=$b <br>";
									echo "---------------------------------------------------------------------------------------------------------------------<br>";*/
	//							}
							
	//						}

						}


				

					}
				}
					for ($i=0; $i < $jumlah_data ; $i++) {
						$data_insert[$i] = array(
							'ID' => $ID[$i],
							'nama' => $nama[$i],
							'data1' => $d1[$i],
							'data2' => $d2[$i],
							'data3' => $d3[$i],
							'data4' => $d4[$i],
							'data5' => $d5[$i],
							'data6' => $d6[$i],
							'data7' => $d7[$i],
							'data8' => $d8[$i],
							'data9' => $d9[$i],
							'data10' => $d10[$i],
							'data11' => $d11[$i],
							'target' => $t[$i],
							'output' => $y_in[$i],
							'status' => $status[$i]
							);
						$where = array('ID' => $i+1);
						$res = $this->Mymodel->UpdateUnitKerja('db_hasil_testing',$data_insert[$i],$where);
						//$sukses = $this->Mymodel->InsertPegawai('db_hasil_testing',$data_insert[$i]);
					}
					
					$hasil = (($TP + $TN)/ ($TP + $TN + $FP + $FN))*100;

					$data_insert1 = array(
						'ID' => 1,
						'w1' => $w1,
						'w2' => $w2,
						'w3' => $w3,
						'w4' => $w4,
						'w5' => $w5,
						'w6' => $w6,
						'w7' => $w7,
						'w8' => $w8,
						'w9' => $w9,
						'w10' => $w10,
						'w11' => $w11,
						'b' => $b,
						//'epoh' => $epoh,
						'hasil' => $hasil,
						'TP' => $TP,
						'TN' => $TN,
						'FP' => $FP,
						'FN' => $FN,
							
					);
					$where = array('ID' => 1);
					$ress = $this->Mymodel->UpdateUnitKerja('db_hasil_data_testing',$data_insert1,$where);
					//$suksess = $this->Mymodel->InsertPegawai('db_hasil_data_testing',$data_insert1);
				//print_r($data_insert1);

				///evaluasi data unutk akurasi
				
				//echo "$hasil";  
				$data['db_hasil'] = $this->Mymodel->Gethasiltesting();
				$data['db_hasil_data'] = $this->Mymodel->Gethasilpengolahantesting();
				$this->load->view('form_data_hasil_testing',$data);
				
			}

		}


		public function metode_testing(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data = $this->Mymodel->Getprepocessingtesting();
			$b = $_POST['b'];
			$learning = $_POST['learning'];
			$jumlah_epoh = $_POST['epoh'];
			$ynet = $_POST['ynet'];
			$w1 = $_POST['w1'];
			$w2 = $_POST['w2'];
			$w3 = $_POST['w3'];
			$w4 = $_POST['w4'];
			$w5 = $_POST['w5'];
			$w6 = $_POST['w6'];
			$w7 = $_POST['w7'];
			$w8 = $_POST['w8'];
			$w9 = $_POST['w9'];
			$w10 = $_POST['w10'];
			$w11 = $_POST['w11'];
			$b = $_POST['b'];
			

			$i=0;
				$jumlah_data=0;
				foreach ($data as $datas ) {
						$ID[$i] = $datas['ID'];
						$nama[$i] = $datas['nama'];
						$d1[$i] = $datas['data1'];
						$d2[$i] = $datas['data2'];
						$d3[$i] = $datas['data3'];
						$d4[$i] = $datas['data4'];
						$d5[$i] = $datas['data5'];
						$d6[$i] = $datas['data6'];
						$d7[$i] = $datas['data7'];
						$d8[$i] = $datas['data8'];
						$d9[$i] = $datas['data9'];
						$d10[$i] = $datas['data10'];
						$d11[$i] = $datas['data11'];
						$t[$i] = $datas['target'];
						$i++;
						$jumlah_data++;
				}

				$sukses = 0;

	/*diganti*/	for ($epoh=0; $epoh < $jumlah_epoh ; $epoh++) {  /*batas sesuai dengan epoh*/ 
					# code...*/
					echo "<br>============================= Epoch $epoh ==============================<br><br>";
					echo "Data awal ==>  w1=$w1 : w2=$w2 : w3=$w3 : w4=$w4 : w5=$w5 : w6=$w6 : w7=$w7 : w8=$w8 : w9=$w9 : w10=$w10 : w11=$w11 : b=$b <br><br>";
					

					
		/*diganti*/	if($sukses == $jumlah_data){
						break;
					}else{
						$TP = 0; // HASIL 1 MENJADI 1
						$TN = 0;  // HASIL 0 MENJADI 0
						$FP = 0; // HASIL 0 MENJADI 1
						$FN = 0; // HASIL 1 MENJADI 0 
						$sukses = 0 ; 
		/*diganti*/		for ($i=0; $i < $jumlah_data; $i++) { /*Batas sesuai dengan data*/
						

						/*hitung data */

						$y_in[$i] = $b +(( $d1[$i] * $w1 + $d2[$i] * $w2 + $d3[$i] * $w3 + $d4[$i] * $w4 
									   +   $d5[$i] * $w5 + $d6[$i] * $w6 + $d7[$i] * $w7 + $d8[$i] * $w8 
									   +   $d9[$i] * $w9 + $d10[$i] * $w10)) + $d11[$i] * $w11;
						echo "$y_in[$i]";
						echo "=================================Data ke-$i==================================<br>	  <br>";
							echo "Data awal ==>  X1=$d1[$i], X2=$d3[$i], X3=$d3[$i], X4=$d4[$i], X5=$d5[$i], X6=$d6[$i], X7=$d7[$i], X8=$d8[$i], X9=$d9[$i], X10=$d10[$i], X11=$d11[$i], t=$t[$i] <br><br>";
							echo "ynet = $b + $d1[$i] * $w1 + $d2[$i] * $w2 + $d3[$i] * $w3 + $d4[$i] * $w4 
									   		+ $d5[$i] * $w5 + $d6[$i] * $w6 + $d7[$i] * $w7 + $d8[$i] * $w8 
									   		+ $d9[$i] * $w9 + $d10[$i] * $w10 + $d11[$i] * $w11; <br>";
							echo "ynet = $y_in[$i]<br><br>";
							echo "Data Set Baru ==> w1=$w1 : w2=$w2 : w3=$w3 : w4=$w4 : w5=$w5 : w6=$w6 : w7=$w7 : w8=$w8 : w9=$w9 : w10=$w10 : w11=$w11 : b=$b <br><br>";
							
							
							$sigmoid[$i] = 1/ (1 + pow(2.71828183,(-$y_in[$i])));
							echo "---------------Data ke-$i : Treshold : $sigmoid[$i] :-------------<br>";	

							if($sigmoid[$i]  > $ynet){ /*/// fnet menentukan ambang*/
								
								//echo "Menjadi ==> $y_in[$i] == $i  <br> ";
								$y_in[$i] = 1 ; /*set data target*/
								
									if ($y_in[$i] == $t[$i]) { /*/// cek data dengan target*/
										$sukses++;
										$TES[$i] = 0;
										$status[$i] = "Benar";
										$TP ++;
									}else{ 
										$FN++;
										$TES[$i] = 1;
										$status[$i] = "salah";
										/*perubahan data*/
										echo "TIDAK SESUAI target 0 Melakukan perubahan Data Set<br>";
										echo "w1  = $w1  +  $learning * ($d1[$i]) * $t[$i]; <br>";
										echo "w2  = $w2  +  $learning * ($d2[$i]) * $t[$i]; <br>";
										echo "w3  = $w3  +  $learning * ($d3[$i]) * $t[$i]; <br>";
										echo "w4  = $w4  +  $learning * ($d4[$i]) * $t[$i]; <br>";
										echo "w5  = $w5  +  $learning * ($d5[$i]) * $t[$i]; <br>";
										echo "w6  = $w6  +  $learning * ($d6[$i]) * $t[$i]; <br>";
										echo "w7  = $w7  +  $learning * ($d7[$i]) * $t[$i]; <br>";
										echo "w8  = $w8  +  $learning * ($d8[$i]) * $t[$i]; <br>";
										echo "w9  = $w9  +  $learning * ($d9[$i]) * $t[$i]; <br>";
										echo "w10  = $w10  +  $learning * ($d10[$i]) * $t[$i]; <br>";
										echo "w11  = $w11  +  $learning * ($d11[$i]) * $t[$i]; <br>";
										echo "b  = $b  +  $learning  * $t[$i]; <br>";

										$w1  = $w1  +  $learning * ($d1[$i]) * $t[$i];
										$w2  = $w2  +  $learning * ($d2[$i]) * $t[$i];
										$w3  = $w3  +  $learning * ($d3[$i]) * $t[$i];
										$w4  = $w4  +  $learning * ($d4[$i]) * $t[$i];
										$w5  = $w5  +  $learning * ($d5[$i]) * $t[$i];
										$w6  = $w6  +  $learning * ($d6[$i]) * $t[$i];
										$w7  = $w7  +  $learning * ($d7[$i]) * $t[$i];
										$w8  = $w8  +  $learning * ($d8[$i]) * $t[$i];
										$w9  = $w9  +  $learning * ($d9[$i]) * $t[$i];
										$w10 = $w10 +  $learning * ($d10[$i]) * $t[$i];
										$w11 = $w11 +  $learning *  $d10[$i] * $t[$i];
										$b = $b + $learning * $t[$i];	

										
										
									echo "-----------------------------------------------------Baru----------------------------------------------------------<br>";
									echo "Set Data Baru = w1baru=$w1 - w2baru=$w2 - w3baru=$w3 - w4baru=$w4 - w5baru=$w5 - w6baru=$w6 - w7baru=$w7 - w8baru=$w8 - w9baru=$w9 - w10baru=$w10 - w11baru=$w11 - Bbaru=$b <br>";
									echo "---------------------------------------------------------------------------------------------------------------------<br>";
									}

							}else if($sigmoid[$i]  < $ynet){

								//echo "fnet : $y_in[$i] : ";
								$y_in[$i] = 0 ; /*set data target*/
								//echo "Menjadi ==> $y_in[$i] == $i <br>";
									if ($y_in[$i] == $t[$i]) { /// cek data dengan target
										$sukses++;
										$TES[$i] = 0;
										$status[$i] = "Benar";
										$TN++;
									}else{
										$status[$i] = "Salah";
										$TES[$i] = 1;
										$FP++;
										/*perubahan data*/
										echo "TIDAK SESUAI target 1 Melakukan perubahan Data set<br>";
										echo "w1  = $w1  +  $learning * ($d1[$i]) * $t[$i]; <br>";
										echo "w2  = $w2  +  $learning * ($d2[$i]) * $t[$i]; <br>";
										echo "w3  = $w3  +  $learning * ($d3[$i]) * $t[$i]; <br>";
										echo "w4  = $w4  +  $learning * ($d4[$i]) * $t[$i]; <br>";
										echo "w5  = $w5  +  $learning * ($d5[$i]) * $t[$i]; <br>";
										echo "w6  = $w6  +  $learning * ($d6[$i]) * $t[$i]; <br>";
										echo "w7  = $w7  +  $learning * ($d7[$i]) * $t[$i]; <br>";
										echo "w8  = $w8  +  $learning * ($d8[$i]) * $t[$i]; <br>";
										echo "w9  = $w9  +  $learning * ($d9[$i]) * $t[$i]; <br>";
										echo "w10  = $w10  +  $learning * ($d10[$i]) * $t[$i]; <br>";
										echo "w11  = $w11  +  $learning * ($d11[$i]) * $t[$i]; <br>";
										echo "b  = $b  +  $learning  * $t[$i]; <br> <br>";

										$w1  = $w1  +  $learning * $t[$i] * ($d1[$i]);
										$w2  = $w2  +  $learning * $t[$i] * ($d2[$i]);
										$w3  = $w3  +  $learning * $t[$i] * ($d3[$i]);
										$w4  = $w4  +  $learning * $t[$i] * ($d4[$i]);
										$w5  = $w5  +  $learning * $t[$i] * ($d5[$i]);
										$w6  = $w6  +  $learning * $t[$i] * ($d6[$i]);
										$w7  = $w7  +  $learning * $t[$i] * ($d7[$i]);
										$w8  = $w8  +  $learning * $t[$i] * ($d8[$i]);
										$w9  = $w9  +  $learning * $t[$i] * ($d9[$i]);
										$w10 = $w10 +  $learning * $t[$i] * ($d10[$i]);
										$w11 = $w11 +  $learning * $t[$i] * $d11[$i];
										$b = $b + $learning * $t[$i];	

									echo "-----------------------------------------------------Set Data Baru----------------------------------------------------------<br>";
									echo "Set Data Baru = w1baru=$w1 - w2baru=$w2 - w3baru=$w3 - w4baru=$w4 - w5baru=$w5 - w6baru=$w6 - w7baru=$w7 - w8baru=$w8 - w9baru=$w9 - w10baru=$w10 - w11baru=$w11 - Bbaru=$b <br>";
									echo "---------------------------------------------------------------------------------------------------------------------<br>";
								}
							
							}

						}


					for ($a=0; $a < $jumlah_data; $a++) { 
						if ($TES[$a] == 1) {
							echo "$a  = $y_in[$a]<br>";
						}
					}

					$hasil = (($TP + $TN)/ ($TP + $TN + $FP + $FN))*100;
					echo "<br><br>~~~~~~~~~~~~~~~~~~~~~~~~~~~~Evaluasi Data~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br>";
					echo "Nilai TP = $TP <br> TN = $TN <br> FP = $FP <br> FN = $FN <br>";
					echo "$hasil<br>";
					echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br>";
						/*for ($i=0; $i < $jumlah_data ; $i++) { 
							if ($status[$i] == "salah") {
								echo "$i <br>";
							}
						}*/
					}
				}
					for ($i=0; $i < $jumlah_data ; $i++) {
						$data_insert[$i] = array(
							'ID' => $ID[$i],
							'nama' => $nama[$i],
							'data1' => $d1[$i],
							'data2' => $d2[$i],
							'data3' => $d3[$i],
							'data4' => $d4[$i],
							'data5' => $d5[$i],
							'data6' => $d6[$i],
							'data7' => $d7[$i],
							'data8' => $d8[$i],
							'data9' => $d9[$i],
							'data10' => $d10[$i],
							'data11' => $d11[$i],
							'target' => $t[$i],
							'output' => $y_in[$i],
							'status' => $status[$i]
							);
					}
					
					$hasil = (($TP + $TN)/ ($TP + $TN + $FP + $FN))*100;

					$data_insert1 = array(
						'ID' => 1,
						'w1' => $w1,
						'w2' => $w2,
						'w3' => $w3,
						'w4' => $w4,
						'w5' => $w5,
						'w6' => $w6,
						'w7' => $w7,
						'w8' => $w8,
						'w9' => $w9,
						'w10' => $w10,
						'w11' => $w11,
						'b' => $b,
						'epoh' => $epoh-1,
						'hasil' => $hasil,
						'TP' => $TP,
						'TN' => $TN,
						'FP' => $FP,
						'FN' => $FN,
							
					);
					print_r($data_insert1);
				
			}

		}




		public function icons(){
			$this->load->view('icons');
		}

		public function login(){
			$this->load->view('form_login');
		}

		public function panels(){
			$this->load->view('panels');
		}

		public function profile(){
			$this->load->view('form_profile');
		}

	}
